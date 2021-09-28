<?php

// setup
define( 'JU_DEV_MODE',true);

// includes
include( get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));

// hooks
add_action('wp_enqueue_scripts','ju_enqueue');
add_theme_support( 'post-thumbnails' ); 
add_action('after_setup_theme','ju_setup_theme');

function custom_theme_titles_yoast( $title ) {
    $sep = '|';
    $name = get_bloginfo( 'name' );
    $desc = get_bloginfo( 'description', 'display' );
 
    if( is_front_page() ) {
        $pagetitle = $title;
        return "{$pagetitle}";
    }
     elseif( is_404() ) {
        $pagetitle = "404";
        return "{$pagetitle} {$sep} {$name} - {$desc}"; 
    }
    else {
        $pagetitle = $title;   
        return "{$pagetitle} {$sep} {$name} - {$desc}";
    }
}
add_filter( 'wpseo_title', 'custom_theme_titles_yoast', PHP_INT_MAX );
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}


function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count views";
}
function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length' );


function custom_comments($comment,$args,$depth) {
    
   
    
   $GLOBALS['comment'] = $comment;
       ?>
       <div class="sshow-cm">
            <div class="cm">
                <div class="cm-profile">
                    <h4><?php comment_author(); ?></h4>
                    <?php echo get_avatar($comment,50,'',''); ?>
                </div>
                <div class="cm-text">
                <?php comment_text(); ?>
                </div>
            </div>
   <?php
   
} 


   ?>

   <?php 
   if (isset($_POST['submitbtn'])) {
       $data = array(
           'name' => $_POST['name'],
           'phone' => $_POST['phone'],
           'service' => $_POST['service'],
           'more' => $_POST['more'],
       );
       $table_name = 'contact';

       $result = $wpdb->insert($table_name, $data, $format=NULL);

       if ($result==1) {
           echo "<script>alert('اطلاعات شما با موفقیت ثبت شد.');</script>";
       }else {
           echo "<script>alert('مشکلی پیش امده لطفا مجدد تلاش کنید.');</script>";
       }
   }