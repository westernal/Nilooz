<?php/*
* Template Name: podcast
*/
?>

<?php get_header(); ?>

        <div class="pblog">
        <div class="blog-sec1">
            <div class="bs1-title">
                <h1>نیلوز</h1>
                <img src="<?php echo get_template_directory_uri() .'/assets/Images/logo.svg'?>" alt="">
            </div>
            <p>مجله سلامت و زیبایی</p>
            <img src="<?php echo get_template_directory_uri() .'/assets/Images/document 2.svg'?>" alt="" id="doc-pic">
        </div>
        <?php get_search_form(); ?>
        <div class="blog-nav">
            <div class="mp-nav">
                <ul>
                    <li><a href="#" class="navItem" id="active"><div class="active-"></div>پادکست</a></li>
                    <li><a href="<?php
      echo  get_permalink( get_page_by_path( 'Video' ) )
?>" class="navItem" id="b-nav"><div class="active-"></div>  ویدیو</a></li>
                    <li><a href="<?php echo get_home_url(); ?>" class="navItem" id="b-nav"> <div class="active-"></div> مقاله</a></li>
                </ul>
            </div>
        </div>
        <div class="blog-posts">
        <?php
        $args = array(
            'posts_per_page' => 12,
            'category_name'      => 'پادکست',
            'paged'          => get_query_var( 'paged' ),
        );
             $my_query2 = new WP_Query( $args  ); 
                if($my_query2->have_posts() ){
                    while($my_query2->have_posts() ){
                    $my_query2->the_post();
                        global $post;
                      
                        ?>
            <div class="s6-post">
                <div class="s6-pic">
                    <img src="<?php echo get_template_directory_uri() .'/assets/Images/microphone 1.svg'?>" alt="" id="category">
                    <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full' , [
                                'class' => 'main-pic'
                            ]);
                        }
                        ?>
                </div>
                <div class="s6-text">
                    <h3><?php the_title(); ?></h3>
                    <div class="s6-date">
                      <h5><?php echo get_the_date('Y/m/d'); ?></h5>
                      <img src="<?php echo get_template_directory_uri() .'/assets/Images/Calendar 2.svg'?>" alt="">
                    </div>
                    <p><?php the_excerpt(); ?> </p>
                   <a href="<?php the_permalink(); ?>"> <pre><     ادامه مطلب</pre></a>
                </div>
            </div>
            <?php
                  }  }
                    ?>
        </div>
        <div class="blog-pagination">
        <?php

global $wp_query;
$big = 999999999; // need an unlikely integer
 
echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $my_query2->max_num_pages,
    'next_text' => '<span id="next-btn"> > </span>',
    'prev_text' => '<span id="previous-btn"> < </span>'
) );
?>
</div>

        <?php
       wp_footer();
       get_footer(); ?>
       </div>