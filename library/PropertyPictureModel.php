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
 * Class PictureModel
 *
 * @package 
 */
 
 
 class PropertyPictureModel
{

    /**
     * @var int Kép azonosító.
     */
    public $PictureID;
    
    /**
     * @var string Kép url.
     */
    public $PictureUrl;

    /**
     * Creates a new PropertyPictureModel entity.
     * @param int		$picid	Kép azonosító     
     * @param string	$picurl	Kép url          
     *
     */      
    function __construct($picid = 0, $picurl = "")
    {
        $this->PictureID = $picid;
        $this->PictureUrl = $picurl;
    }
    
     
}   
