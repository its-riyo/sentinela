<?php

    use App\Controllers\PageController;

    // Including configuration file
    include "config.php";

    // Calling function to load pages
    PageController::loadPage();