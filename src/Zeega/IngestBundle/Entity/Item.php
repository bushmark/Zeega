<?php

// src/Zeega/IngestBundle/Entity/Item.php

namespace Zeega\IngestBundle\Entity;

class Item
{
 
    
  
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var string $creator
     */
    private $creator;

    /**
     * @var string $uri
     */
    private $uri;

    /**
     * @var float $geo_lat
     */
    private $geo_lat;

    /**
     * @var float $geo_lng
     */
    private $geo_lng;

    /**
     * @var date $date_created_start
     */
    private $date_created_start;

    /**
     * @var date $date_created_end
     */
    private $date_created_end;

    /**
     * @var integer $type
     */
    private $type;

    /**
     * @var Zeega\IngestBundle\Entity\Media
     */
    private $media;

    /**
     * @var Zeega\IngestBundle\Entity\Metadata
     */
    private $metadata;

    /**
     * @var Zeega\IngestBundle\Entity\Item
     */
    private $items;

    /**
     * @var Zeega\IngestBundle\Entity\Item
     */
    private $parent_collections;

    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    $this->parent_collections = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set creator
     *
     * @param string $creator
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
    }

    /**
     * Get creator
     *
     * @return string 
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set uri
     *
     * @param string $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * Get uri
     *
     * @return string 
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set geo_lat
     *
     * @param float $geoLat
     */
    public function setGeoLat($geoLat)
    {
        $this->geo_lat = $geoLat;
    }

    /**
     * Get geo_lat
     *
     * @return float 
     */
    public function getGeoLat()
    {
        return $this->geo_lat;
    }

    /**
     * Set geo_lng
     *
     * @param float $geoLng
     */
    public function setGeoLng($geoLng)
    {
        $this->geo_lng = $geoLng;
    }

    /**
     * Get geo_lng
     *
     * @return float 
     */
    public function getGeoLng()
    {
        return $this->geo_lng;
    }

    /**
     * Set date_created_start
     *
     * @param date $dateCreatedStart
     */
    public function setDateCreatedStart($dateCreatedStart)
    {
        $this->date_created_start = $dateCreatedStart;
    }

    /**
     * Get date_created_start
     *
     * @return date 
     */
    public function getDateCreatedStart()
    {
        return $this->date_created_start;
    }

    /**
     * Set date_created_end
     *
     * @param date $dateCreatedEnd
     */
    public function setDateCreatedEnd($dateCreatedEnd)
    {
        $this->date_created_end = $dateCreatedEnd;
    }

    /**
     * Get date_created_end
     *
     * @return date 
     */
    public function getDateCreatedEnd()
    {
        return $this->date_created_end;
    }

    /**
     * Set type
     *
     * @param integer $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set media
     *
     * @param Zeega\IngestBundle\Entity\Media $media
     */
    public function setMedia(\Zeega\IngestBundle\Entity\Media $media)
    {
        $this->media = $media;
    }

    /**
     * Get media
     *
     * @return Zeega\IngestBundle\Entity\Media 
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set metadata
     *
     * @param Zeega\IngestBundle\Entity\Metadata $metadata
     */
    public function setMetadata(\Zeega\IngestBundle\Entity\Metadata $metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * Get metadata
     *
     * @return Zeega\IngestBundle\Entity\Metadata 
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Add items
     *
     * @param Zeega\IngestBundle\Entity\Item $items
     */
    public function addItems(\Zeega\IngestBundle\Entity\Item $items)
    {
        $this->items[] = $items;
    }

    /**
     * Get items
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Add parent_collections
     *
     * @param Zeega\IngestBundle\Entity\Item $parentCollections
     */
    public function addParentCollections(\Zeega\IngestBundle\Entity\Item $parentCollections)
    {
        $this->parent_collections[] = $parentCollections;
    }

    /**
     * Get parent_collections
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getParentCollections()
    {
        return $this->parent_collections;
    }
    /**
     * @var string $content_type
     */
    private $content_type;


    /**
     * Set content_type
     *
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->content_type = $contentType;
    }

    /**
     * Get content_type
     *
     * @return string 
     */
    public function getContentType()
    {
        return $this->content_type;
    }
    /**
     * @var bool $depth
     */
    private $depth;


    /**
     * Set depth
     *
     * @param bool $depth
     */
    public function setDepth(\bool $depth)
    {
        $this->depth = $depth;
    }

    /**
     * Get depth
     *
     * @return bool 
     */
    public function getDepth()
    {
        return $this->depth;
    }
  

    /**
     * @var string $url
     */
    private $url;

    /**
     * @var string $attribution_url
     */
    private $attribution_url;


    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set attribution_url
     *
     * @param string $attributionUrl
     */
    public function setAttributionUrl($attributionUrl)
    {
        $this->attribution_url = $attributionUrl;
    }

    /**
     * Get attribution_url
     *
     * @return string 
     */
    public function getAttributionUrl()
    {
        return $this->attribution_url;
    }
    /**
     * @var string $item_url
     */
    private $item_url;


    /**
     * Set item_url
     *
     * @param string $itemUrl
     */
    public function setItemUrl($itemUrl)
    {
        $this->item_url = $itemUrl;
    }

    /**
     * Get item_url
     *
     * @return string 
     */
    public function getItemUrl()
    {
        return $this->item_url;
    }

    /**
     * Add items
     *
     * @param Zeega\IngestBundle\Entity\Item $items
     */
    public function addItem(\Zeega\IngestBundle\Entity\Item $items)
    {
        $this->items[] = $items;
    }
    /**
     * @var string $archive
     */
    private $archive;

    /**
     * @var Zeega\EditorBundle\Entity\Playground
     */
    private $playground;


    /**
     * Set archive
     *
     * @param string $archive
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;
    }

    /**
     * Get archive
     *
     * @return string 
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * Set playground
     *
     * @param Zeega\EditorBundle\Entity\Playground $playground
     */
    public function setPlayground(\Zeega\EditorBundle\Entity\Playground $playground)
    {
        $this->playground = $playground;
    }

    /**
     * Get playground
     *
     * @return Zeega\EditorBundle\Entity\Playground 
     */
    public function getPlayground()
    {
        return $this->playground;
    }
    /**
     * @var Zeega\UserBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param Zeega\UserBundle\Entity\User $user
     */
    public function setUser(\Zeega\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Zeega\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}