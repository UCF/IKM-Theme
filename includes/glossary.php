<?php
header('Content-type: application/xml');

#ini_set('display_errors', 1);
#ini_set('display_startup_errors', 1);
ini_set('error_reporting',E_ALL);
ini_set('display_errors','On');

$xmlContent = '';

$path = 'https://ucf.datacookbook.com/institution/terms/list?un=apiuser&pw=3Si2LFc1oNIK&requestType=list&outputFormat=xml&html_definition=true&functionalArea=institutional+knowledge+management&status=latest_approved';

function get_web_page( $url )
{
    $options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_USERAGENT      => "spider", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
        CURLOPT_TIMEOUT        => 120,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
        CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
    );

    $ch      = curl_init( $url );
    curl_setopt_array( $ch, $options );
    $content = curl_exec( $ch );
    $err     = curl_errno( $ch );
    $errmsg  = curl_error( $ch );
    $header  = curl_getinfo( $ch );
    curl_close( $ch );

    $header['errno']   = $err;
    $header['errmsg']  = $errmsg;
    $header['content'] = $content;
    print_r($content);
}

get_web_page($path);


