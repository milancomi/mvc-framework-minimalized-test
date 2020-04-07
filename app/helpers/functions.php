<?php

if (!function_exists('url')) {
    function url($url)
    {
        echo  "/".$_SERVER['HTTP_HOST']. "/". $url;
    }
}