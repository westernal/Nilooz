<?php

function ju_enqueue() {
    $ver = JU_DEV_MODE ? time() : false;
    $uri = get_theme_file_uri();

    wp_register_style('ju_style',$uri . '/assets/CSS/Style.css',[],$ver);
   

    wp_enqueue_style('ju_style');
    

    wp_register_script('ju_script',$uri.'/assets/JS/main.js',[],$ver,true);

    wp_enqueue_script('ju_script');


}