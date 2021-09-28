<?php get_header(); ?>
<?php
if(have_posts() ){
                    
                    the_post();
                     global $post;
                     $author_ID = $post->post_author;
                     $author_URL = get_author_posts_url($author_ID);
                 ?>
    <div class="single-page">
        <div class="single-header">
            <h1><?php the_title(); ?></h1>
            <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full' , [
                                'id' => 'post-hdr'
                            ]);
                        }
                        ?>
            <div class="shi">
                <div class="sh-info">
                    <div class="sh-date">
                    <img src="<?php echo get_template_directory_uri() .'/assets/Images/Calendar 2.svg'?>" alt="">
                        <h5><?php echo get_the_date('Y/m/d'); ?></h5>
                       
                    </div>
                    <div class="sh-date">
                    <img src="<?php echo get_template_directory_uri() .'/assets/Images/Comment.svg'?>" alt="">
                        <h5> <?php comments_number('0','1','%'); ?> کامنت</h5>
                       
                    </div>
                </div>
            </div>
       
        </div>
        <div class="single-content">
            <p><?php the_content(); ?>
            </p>
        </div>
        <?php }
        ?>
        <div class="same-posts">
            <h2>مطالب پیشنهاد شده</h2>
           <div class="spb"><div class="sp-bck"></div></div> 
           
            <div class="sp-posts">
            <?php
        $categories  = get_the_category();
        $rp_query  =  new WP_Query([
            'posts_per_page'  =>  3,
            'post__not_in'   => [ $post->ID ],
            'cat'            => !empty($categories) ? $categories[0]->term_id : null   
        ]);

        if($rp_query->have_posts()){
            while($rp_query->have_posts()){
                $rp_query->the_post();
                global $post;
                        $author_ID = $post->post_author;
                        $author_URL = get_author_posts_url($author_ID);
                ?>
                <div class="s6-post">
                    <div class="s6-pic">
                        <img src="<?php echo get_template_directory_uri() .'/assets/Images/document 1.svg'?>" alt="" id="category">
                        <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full' , [
                                'class' => 'main-pic'
                            ]);
                        }
                        ?>
                    </div>
                    <div class="s6-text">
                    <a href="<?php the_permalink(); ?>"> <h3><?php the_title(); ?></h3> </a>
                        <div class="s6-date">
                          <h5><?php echo get_the_date('Y/m/d'); ?></h5>
                          <img src="<?php echo get_template_directory_uri() .'/assets/Images/Calendar 2.svg'?>" alt="">
                        </div>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>"> <pre><     ادامه مطلب</pre></a>
                    </div>
                </div>
                <?php } 
             wp_reset_postdata();
             } ?>
            </div>
           
        </div>
      
    <?php
    if(comments_open() || get_comments_number()) {
        comments_template();
    }
 
    ?>
    </div>
    <?php
       wp_footer();
       get_footer(); ?>