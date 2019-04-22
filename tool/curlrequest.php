<?php
function curlrequest($url)
{
	try {
	    $ch = curl_init();

	    if (FALSE === $ch) {
	    	throw new Exception('failed to initialize');

	        curl_setopt($ch, CURLOPT_URL, $url);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	        curl_setopt($ch, CURLOPT_HEADER, 1);
	        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.1.5) Gecko/20140924 Firefox/3.5.5');  
	        $content = curl_exec($ch);
	        return $content;
	    }
	        
	    if (FALSE === $content) {
	    	throw new Exception(curl_error($ch), curl_errno($ch));
	    }
	       
	} catch(Exception $e) {
	    trigger_error(sprintf('Curl failed with error #%d: %s',$e->getCode(), $e->getMessage()),E_USER_ERROR);

	}
}

