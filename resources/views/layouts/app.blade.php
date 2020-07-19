<?php 
ob_start();
ini_set("allow_url_fopen", 0);
$url='https://www.bitpay.com/api/rates';
$json=json_decode( file_get_contents( $url ) );
$dollar=$btc=0;

ob_end_flush(); 

foreach( $json as $obj ){
    if( $obj->code=='USD' )$btc=$obj->rate;
}
 $result = $btc;
?>
@include('layouts.head')
@include('layouts.nav')

@yield('main')

@include('layouts.footer')