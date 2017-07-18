<?php
/**
 * Copyright 2017 Infonet Hungary, Inc.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Infonet Hungary.
 *
 * As with any software that integrates with the ingatlanpont.com platform, your use
 * of this software is subject to the iP Developer Principles and
 * Policies [http://developers.ingatlanpont.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */
 
 
 
/**
 * Class Property
 *
 * @package 
 */
 
 
 
 class PropertyModel
{

    /**
     * @const string Beta Graph API URL for video uploads.
     */
    const BASE_GRAPH_VIDEO_URL_BETA = 'https://graph-video.beta.facebook.com';

    /**
     * @var Ingatlan típusa.
     */
    public $PropertyType;
    
    /**
     * @var int Megye.
     */
    public $County;

    /**
     * @var int Utca.
     */
    public $Street;

    /**
     * @var int Utca név elrejtése.
     */
    public $NoStreetName;

    /**
     * @var int Házszám.
     */
    public $Hno;
 
    /**
     * @var int Házszám elrejtése.
     */
    public $NoHno;

    /**
     * @var int Ár típusa.
     */
    public $PriceType;

    /**
     * @var int Ár megadása forintban.
     */
    public $priceHUF;

    /**
     * @var int Ár megadása euróban.
     */
    public $priceEUR;
 
    /**
     * @var string Hivatkozási szám.
     */
    public $ApID;
  
    /**
     * @var string Helyrajzi szám.
     */
    public $Hrsz;

    /**
     * @var int Együttműködés más ingatlanossal.
     */
    public $togother;

    /**
     * @var string int Magyar leírás.
     */
 	public $notesHUN;

    /**
     * @var string int Angol leírás.
     */
    public $notesENG;

    /**
     * @var string int Német leírás.
     */
    public $notesGER;
        
    /**
     * @var array Ingatlan paraméterek.
     */
    public $PropertySpec = [];

    /**
     * @var array Képek.
     */
    public $PropertyPics = [];


    /**
     * Creates a new PropertyModel entity.
     *
     * @param int  $Type  Típus meghatározás     
     */      
    function __construct($Type)
    {
        $this->PropertyType = $Type;
    }  


    /**
     * Adds a new Property Spec.
     *
     * @param PropertySpecModel  $spec  Típus meghatározás     
     */      
    public function addSpec(PropertySpecModel $spec)
    {
        if ($this->PropertySpec == null) {
            $this->PropertySpec = array();
        }
        array_push($this->PropertySpec, $spec);
    }

    /**
     * Adds a new Picture.
     *
     * @param	PropertyPictureModel	$pic  Kép     
     */      
    public function addPic(PropertyPictureModel $pic)
    {
        if ($this->PropertyPics == null) {
            $this->PropertyPics = array();
        }
        array_push($this->PropertyPics, $pic);
    }
     
}