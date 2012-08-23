(function(Frame){

	Frame.Views.FrameSequence = Backbone.View.extend({
		
		tagName : 'li',
		className : 'frame-thumb',

		initialize : function()
		{
			var _this = this;
			this.model.on( 'change:thumbnail_url', this.onNewThumb, this );
			this.model.on('focus', this.focus, this );
			this.model.on('blur', this.blur, this );
			this.model.on('refresh_view', this.refreshView, this);

			this.model.on( 'thumbUpdateFail', function(){
				_this.$el.find('.frame-update-overlay').hide()
			});
		},
		
		focus : function()
		{
			this.$el.addClass('active-frame');
			this.model.inFocus = true;
		},
		blur : function()
		{
			$(this.el).removeClass('active-frame');
			this.model.inFocus = false
		},
	
		render: function()
		{
			var _this = this;

			this.$el.html( this.getTemplate() );

			this.makeDroppable();

			this.$el.hover(function(){
				$(_this.el).find('.frame-menu').show();
			},function(){
				$(_this.el).find('.menu-items').removeClass('open');
				$(_this.el).find('.frame-menu').hide();
			})


			this.$el.click(function(){
				_this.goToFrame();
				return false;
			})
		
			this.$el.find('.menu-toggle').click(function(){
				_this.openDropdown();
				return false;
			})
		
			this.$el.find('.nav-list a').click(function(){
			
				switch($(this).data('action'))
				{
					case 'delete':
						if(confirm('Delete Frame?'))
							zeega.app.project.sequences.get(_this.model.sequenceID).frames.remove( _this.model );
						break;
				
					case 'duplicate':
						zeega.app.duplicateFrame( _this.model );
						break;
					
					default:
						console.log('not recognized')
				}
				event.stopPropagation();
				
				return false;
			})
		
			//enable the hover when dragging DB items	
			this.$el.hover(
				//mouseover
				function()
				{
					//only highlight the frame if something is being dragged into it
					if( zeega.app.draggedItem == null ) $(this).find('.menu-toggle').show();
				},
				//mouseout
				function()
				{
					$(this).find('.menu-toggle').hide();
					$(this).find('.menu').hide();
				}
			
			);
			
			return this;
		},

		makeDroppable : function()
		{
			console.log('%%		make droppable')
			//frame droppable stuff
			var _this = this;
			this.$el.droppable({
				//accept : '.database-asset-list',
				hoverClass : 'frame-item-hover',
				tolerance : 'pointer',

				over : function(event, ui)
				{
					$('#frame-drawer').addClass('hover');
				},
				out : function(event, ui)
				{
					$('#frame-drawer').removeClass('hover');
				},

				//this happens when you drop a database item onto a frame
				drop : function( event, ui )
				{
					$('#frame-drawer').removeClass('hover');
					ui.draggable.draggable('option','revert',false);
					console.log('$$		item drop', zeega.app.draggedItem, _this.model)
					_this.model.addItemLayer( zeega.app.draggedItem )
				}
			});
		},
	
		events : {
			'mouseover'		: 'showGear',
			'click .menu-toggle' : 'openDropdown'
		},
		
		showGear : function()
		{

		},

		refreshView : function()
		{
			$(this.el).attr('id', 'frame-thumb-'+this.model.id)
		},
	
		openDropdown : function()
		{
			$(this.el).find('.menu').show();
			event.stopPropagation();
		},
	
		goToFrame : function()
		{
			zeega.app.loadFrame(this.model);
			return false;
		},
	
		onNewThumb : function()
		{
			var _this = this;
			//Update thumbnail in sequence display
			if( $(this.el).is(':visible '))
			{
				$(this.el).fadeOut('fast',function(){
					$(this)
						.css('background-image','url("'+ _this.model.get('thumbnail_url') +'")')
						.fadeIn('fast');
					$(this).find('.frame-update-overlay').hide();
				});
			}
			else
			{
				$(this.el).css('background-image','url("'+ this.model.get('thumbnail_url') +'")');
				$(this.el).find('.frame-update-overlay').hide();
			}
		},
	
		getTemplate : function()
		{
			var html = 
			
					"<div style='width:0px;'><a href='#' class='menu-toggle'><i class='icon-cog icon-white'></i></a></div>"+
					"<div class='frame-update-overlay'></div>"+
					"<div class='well menu'>"+
						"<ul class='nav nav-list'>"+
							"<li><a href='#' data-action='duplicate'>Duplicate Frame</a></li>"+
							"<li><a href='#' data-action='delete'>Delete Frame</a></li>"+
						"</ul>"+
					"</div>";

			return html;
		}
	
	});

})(zeega.module("frame"));
