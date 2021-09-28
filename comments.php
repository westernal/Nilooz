
        <div class="scomments">
    
           
            <?php
    comment_form([
        'comment_field'  => ' <div class="scm-forms"> <textarea name="comment" id="cm-area" placeholder=" ...دیدگاه خود را بنویسید"></textarea>',
        'label_submit'  => __('ارسال دیدگاه', 'nilooz'),
        'title_reply'  => '         <h2>دیدگاه ها</h2>',
        'fields' => [
            'author' => '<input type="text" placeholder="نام و نام خانوادگی" class="cm-in" name="author"> ',
            'email' => ' <input type="text" placeholder="ایمیل" class="cm-in" name="email">    </div>',
        ]
    ]);

?>                    
         
           
        </div>
        <?php if(have_comments()) { 
           ?>
      
            <?php
             wp_list_comments( array(
                'max_depth'   => 5,
                'callback' => 'custom_comments',
                'per_page' => 20
            )); 
           
            ?>
          
          
       <?php } ?>