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
 
 
 include 'helpers' . DIRECTORY_SEPARATOR . 'loader.php';


/**
 * Class ipClient
 *
 * @package 
 */
 
 
 class ipClient
{
    /**
     * @var string API verziószám.
     */    
    private $APIVersion;

    /**
     * @var string Portál azonosító kulcs.
     */
    private $PortalKey;
    
    /**
     * @var string API url.
     */
    private $IP_API_URL = "";

    /**
     * @var string API futtatási környezet.
     */
    private $Environment;


    /**
     * Creates a new ipClient entity.
     *
     * @param	string		$PortalKey	Portál azonosító kulcs
     * @param	string		$version	API verzió szám
     * @param	const		$env		Futtatási környezet
     */   
    function __construct($portalkey, $version = "1.0", $env = IPEnvironment::Prod)
    {
        $this->PortalKey = $portalkey;
        $this->APIVersion = $version;
        $this->Environment = $env;
        
        switch ($env) {
            case IPEnvironment::Test:
                $this->IP_API_URL = INGATLANPONT_API_URL_TEST;
                break;
            case IPEnvironment::Prod:
            default:
                $this->IP_API_URL = INGATLANPONT_API_URL_PROD;
                break;
        }
    }
    

    /**
     * Adds a new ipRequest.
     *
     * @param	ipRequestModel	$model	Server hozzáférés   
     * @return 	mixed|string 			Returns the response of the API       
     */      
    public function ipRequest(ipRequestModel $model)
    {
    	$model->PortalKey = $this->PortalKey;
     	$url = $this->IP_API_URL . "/V" . $this->APIVersion . API_ENDPOINT_UPLOADPROPERTY;
        $response = $this->PostToIP($url, $model);
        
        return $response;
    }
    
    /**
     * Managing HTTP POST request.
     *
     * @param 	string  		$url	The URL of the API endpoint
     * @param 	object  		$data	The data object to be sent to the endpoint
     * @return 	mixed|string 			Returns the response of the API
     */      
	private function PostToIP($url, $data)
    {
    
    	$postData = json_encode($data);
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
//		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); //???

//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        
        $output = curl_exec($ch);
        
        curl_close($ch);
                
        return $output;

    }    
}   
