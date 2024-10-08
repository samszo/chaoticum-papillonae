<?php
/** 
 *  SvgDocument.php
 *
 *  This extends the SvgFragment class. It wraps the SvgFrament output with
 *  a content header, xml definition and doctype.
 *
 * @since 4.1.1
 */

class SvgDocument extends SvgFragment
{
    
    public function __construct($width="100%", $height="100%", $style="",$viewBox="",$preserveAspectRatio="",$id="",$js="")
    {
        // Call the parent class constructor.
        $this->SvgFragment($width, $height, "", "", $style, $viewBox,$preserveAspectRatio,$id,$js);
    }
    
    function printElement()
    {
        header("Content-Type: image/svg+xml");
        
        print('<?xml version="1.0" encoding="utf-8"?>'."\n");
        
        print('<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.0//EN"
	        "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">'."\n");
        
        parent::printElement();
    }
    
    function echoElement()
    {       
        parent::printElement();
    }
    
}
?>