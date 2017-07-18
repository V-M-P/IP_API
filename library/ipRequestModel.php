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
 * Class ipRequestModel
 *
 * @package 
 */
 
 
 class ipRequestModel
{

    /**
     * @var string Portál kulcs.
     */
    public $PortalKey;

    /**
     * @var AgentModel Tanácsadó adatai.
     */ 
    public $Agent;
    
    /**
     * @var PropertyModel Ingatlan adatai.
     */
    public $Property;

    /**
     * Creates a new ipRequestModel entity.
     *
     * @param AgentModel    $Agent
     */   
    function __construct($Agent)
    {
        $this->Agent = $Agent;
    }
}   
