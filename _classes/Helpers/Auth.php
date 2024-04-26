<?php

namespace Helpers;
use Helpers\HTTP;

class Auth
{
    static function check()
    {
        // echo "Auth check <br>";
        session_start();
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        //don't use include method besause of http and auth are at the same namespace but my laptop is to declare use Helpers\HTTP.
        HTTP::redirect("/index.php", "auth=false");
    }
    
}