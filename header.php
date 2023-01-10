<!DOCTYPE html >
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="UTF-8"/>
        <meta name="description" content="A privacy respecting meta search engine."/>
        <meta name="referrer" content="no-referrer"/>
   
      
        <link rel="stylesheet" type="text/css" href="<?php
                echo "/css/";
                if (isset($_COOKIE["theme"]) || isset($_REQUEST["theme"]))
                    echo htmlspecialchars((isset($_COOKIE["theme"]) ? $_COOKIE["theme"] : $_REQUEST["theme"]) . ".css");
                else
                    echo "dark.css";
        ?>"/>
