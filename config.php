<?php
    return (object) array(

        // e.g.: fr -> https://google.fr/
        "google_domain" => "com",

        // Google results will be in this language
        "google_language" => "en",

        "disable_bittorent_search" => false,
        

        "disable_hidden_service_search" => false,

        /*
            Preset privacy friendly frontends for users, these can be overwritten by users in settings
            e.g.: "invidious" => "https://yewtu.be",
        */
        "invidious" => "", // youtube
        "bibliogram" => "", // instagram
        "nitter" => "", // twitter
        "libreddit" => "", // reddit
        "proxitok" => "", // tiktok
        "wikiless" => "", // wikipedia
        "quetre" => "", // quora
        "libremdb" => "", // imdb,
        "breezewiki" => "", // fandom

        /*
            To send requests trough a proxy uncomment CURLOPT_PROXY and CURLOPT_PROXYTYPE:

            CURLOPT_PROXYTYPE options:

                CURLPROXY_HTTP
                CURLPROXY_SOCKS4
                CURLPROXY_SOCKS4A
                CURLPROXY_SOCKS5
                CURLPROXY_SOCKS5_HOSTNAME

            !!! ONLY CHANGE THE OTHER OPTIONS IF YOU KNOW WHAT YOU ARE DOING !!!
        */
        "curl_settings" => array(
            // CURLOPT_PROXY => "ip:port",
            // CURLOPT_PROXYTYPE => CURLPROXY_HTTP,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36",
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_PROTOCOLS => CURLPROTO_HTTPS | CURLPROTO_HTTP,
            CURLOPT_REDIR_PROTOCOLS => CURLPROTO_HTTPS | CURLPROTO_HTTP,
            CURLOPT_MAXREDIRS => 5,
            CURLOPT_TIMEOUT => 18,
            CURLOPT_VERBOSE => false
        )

    );
?>