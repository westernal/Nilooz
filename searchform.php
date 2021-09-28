<div class="blog-search">
            <div class="search-btn">
                <img src="<?php echo get_template_directory_uri() .'/assets/Images/search-interface-symbol 1.svg'?>" alt="">
            </div>
            <form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="text" placeholder="جستجو در بین مقالات، ویدئوها و پادکست های نیلوز" name="s" id="search" value="<?php the_search_query(); ?>">
            </form>
            
        </div>