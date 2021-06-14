<?php

// FUNÇÃO PARA RETORNAR SOMENTE O USUÁRIO OU O ID 
// A PARTIR DE UMA URL DO FACEBOOK
function fbUser($url)
{
    $regex ='/https?\:\/\/(?:www\.|web\.|m\.|touch\.)?(?:facebook\.com|fb(?:\.me|\.com))\/(\d+|[A-Za-z0-9\.]+)\/?/';
    if( preg_match( $regex, $url, $matches ) ){
        return var_dump($matches);
    }else{
        return 'Não foi possível localizar o usuário';
    } 
 }