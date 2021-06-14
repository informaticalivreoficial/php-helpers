<?php

// FUNÇÃO PARA RETORNAR SOMENTE O USUÁRIO OU O ID 
// A PARTIR DE UMA URL DO FACEBOOK
function fbUser($url)
{
    $rgx='~^https?://(www\.)?facebook.com/(?|profile\.php\?(?:.*&)*id=([^&]*)|([^/\?]*))~';
    if( preg_match( $rgx, $url, $matches ) ) return $matches[2];
 }