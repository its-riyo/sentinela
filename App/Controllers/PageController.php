<?php

    namespace App\Controllers;

    class PageController
    {

        public static function loadPage() {

            $url = $_GET['url'];

            if(isset($url)) {
                if(file_exists("Public/Resources/Views/". $url . ".php")) {
                    include("Public/Resources/Views/". $url . ".php");
                } else {
                    echo '404, page'. $url .' not founded';
                };
            } else {
                include("Public/Resources/Views/home.php");
            };

        }

    }