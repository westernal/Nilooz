<?php/*
* Template Name: campaign
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_the_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() .'/assets/Images/logo.png' ?>" />
    <?php  wp_head(); ?>
</head>
<body>
    <div class="campaign-page">
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" >&times;</a>
        <div class="overlay-content">
        <a href="https://niloofarclinic.beauty/"> صفحه اصلی</a>
         <a href="https://niloofarclinic.beauty/#/service"> خدمات </a>
          <a href="https://niloofarclinic.beauty/#/works">نمونه کارها</a>
             <a href="https://niloofarclinic.beauty/#/about">درباره مطب</a>
          <a href="https://niloofarclinic.beauty/#/contact">تماس با مطب</a>
 <a href="<?php echo get_home_url(); ?>"  class="active">بلاگ</a>
        </div>
      </div>
        <div class="mp-header">
        <div class="mpr">
        <div class="mp-responsive">
          <a href="#">  <img src="<?php echo get_template_directory_uri() .'/assets/Images/Burger.svg' ?>" alt="" class="burger-menu"> </a>
          </div>
          <div class="mp-responsive">
          <a href="https://www.instagram.com/niloofarclinic/"><img src="<?php echo get_template_directory_uri() .'/assets/Images/instagram.png' ?>" alt="" id="insta"></a>
</div>
            <div class="mph-info">
            <a href="tel:02126428963"> 
                    <div class="info-text">
                        <h4>021-264428963</h4>
                        <h5>مشاوره و رزرو نوبت</h5>
                    </div>
                    <div class="mp-responsive">
                  <img src="<?php echo get_template_directory_uri() .'/assets/Images/Phone.svg'?>" alt=""> </a>
            </div>
</div>
</div>
        
            <div class="mp-nav">
            <ul>
                   <li><a href="<?php echo get_home_url(); ?>" class="navItem" id="active"><div class="active-" ></div>بلاگ</a></li>
                   <li><a href="https://niloofarclinic.beauty/#/contact" class="navItem"><div class="active-"></div>تماس با مطب</a></li>
                   <li><a href="https://niloofarclinic.beauty/#/about" class="navItem"><div class="active-"></div>درباره مطب</a></li>
                   <li><a href="https://niloofarclinic.beauty/#/works" class="navItem"><div class="active-"></div>نمونه کارها</a></li>
                   <li><a href="https://niloofarclinic.beauty/#/service" class="navItem"><div class="active-"></div>خدمات</a></li>
                   <li><a href="https://niloofarclinic.beauty/" class="navItem" > <div class="active-"></div>صفحه اصلی</a></li>
               </ul>
           </div>
           <a href="https://niloofarclinic.beauty/">
           <div class="mp-logo">
               <img src="<?php echo get_template_directory_uri() .'/assets/Images/header-logo.svg'?>" alt="">
           </div>
</a>
        </div> 
        <img src="<?php echo get_template_directory_uri() .'/assets/Images/Rectangle 76.svg'?>" alt="" id="summer-bck">
        
        <div class="campaign-sec1">
        <div id="myModal" class="modal">

<div class="modal-content">
  <span class="close">&times;</span>
  <div class="modal-main">



<div class="modal-main2">
    <p>   <?php 
                $video = get_field('video');
                echo wp_video_shortcode('video');
                ?></p>
   
</div>
</div>
</div>
</div>

           
                <div class="summer-pic" id="summer">
                <img src="<?php echo get_template_directory_uri() .'/assets/Images/Group 218.png'?>" alt="" id="summer-main">
                <div class="summerbck1"></div>
                <div class="summerbck2"></div>
                <div class="summerbck3"></div>
                </div>
                <div class="summer-text">
                   <div class="smr-title">
                   <h1 id="smr2">نیلوفر</h1>
                       <h1 id="smr1">کمپین افتتاح وبسایت</h1>
                      
                       <img src="<?php echo get_template_directory_uri() .'/assets/Images/Group (2).svg'?>" alt="" >
                   </div>
                   <p>زیبایی پوست شما تخصص ماست</p>
                   <div class="smr-loc">
                       <h5>تهران، بلوار اندرزگو</h5>
                       <img src="<?php echo get_template_directory_uri() .'/assets/Images/Location.svg'?>" alt="">
                   </div>
                 <a href="#ccontact">  <button id="ckorean2">ثبت درخواست مشاوره</button> </a>
                </div>
                

                <div class="bb-text" >
                    <div class="bb-title">
                        <h2> BB Glow پوست کره ای </h2>
                        <img src="<?php echo get_template_directory_uri() .'/assets/Images/Vector 26.svg'?>" alt="">
                    </div>
                    <p> <?php the_field("korean"); ?></p>
                    <div class="bb-btns">
                        <button id="bb-btn1"> <img src="<?php echo get_template_directory_uri() .'/assets/Images/Polygon 1.svg'?>" alt=""> مشاهده ویدیو</button> 
                        
                    </div>
                    
</div>
     
                <div class="bb-pic" id="ckorea">
                <img src="<?php echo get_template_directory_uri() .'/assets/Images/NC-000401-Photo-5.jpg'?>" alt="" id="bb-main">
                
            
                </div>

                <div class="kamo-pic" id="kamo">
               
                <img src="<?php echo get_template_directory_uri() .'/assets/Images/Group 256.png'?>" alt="" id="kamo-main">
                <img src="<?php echo get_template_directory_uri() .'/assets/Images/Group 238.svg'?>" alt="" id="kamo-bck">
                </div>
                <div class="kamo-text" id="kamo2" >
                    <div class="kamo-title">
                        <h2>کاموفلاژ</h2>
                        <img src="<?php echo get_template_directory_uri() .'/assets/Images/Vector 26 (2).svg'?>" alt="" id="kamotbck">
                    </div>
                    <p> <?php the_field("kamo"); ?></p>
                    <div class="bb-btns">
                    <?php /* <button id="bb-btn1"> <img src="<?php echo get_template_directory_uri() .'/assets/Images/Polygon 1.svg'?>" alt=""> مشاهده ویدیو</button> */ ?>
                        
                    </div>
                    </div>

                    <div class="cnose-text" id="cnose2">
                        <div class="cnose-title">
                            <h2>اصلاح فرم بینی</h2>
                            <img src="<?php echo get_template_directory_uri() .'/assets/Images/Vector 26 (1).svg'?>" alt="" id="cnose-line">
                        </div>
                        <p> <?php the_field("nose"); ?></p>
                    <div class="bb-btns">
                    <?php /* <button id="bb-btn1"> <img src="<?php echo get_template_directory_uri() .'/assets/Images/Polygon 1.svg'?>" alt=""> مشاهده ویدیو</button> */ ?>
                      
                    </div>
                    </div>
                    <div class="cnose-pic" id="cnose">
                    <img src="<?php echo get_template_directory_uri() .'/assets/Images/Group 258.png'?>" alt="" id="cnose-main">
                   
</div>      
        </div>

        <div class="campaign-sec2" id="ccontact">
        <div class="cp-text">
                <img src="<?php echo get_template_directory_uri() .'/assets/Images/persian title.svg' ?>" alt="">
                <p>با متخصصین ما در ارتباط باشید</p>
                <p>اطلاعاتتون را ثبت کنید تا باهاتون تماس بگیریم</p>
            </div>
            <div class="campaign-contact">
            <div class="cp-forms">
                <div class="cc1">درخواست مشاوره رایگان</div>
               <?php echo do_shortcode('[contact-form-7 id="738" title="درخواست مشاوره 3"]'); ?>
               <img src="<?php echo get_template_directory_uri() .'/assets/Images/Group 239.svg'?>" alt="" id="cntct-bck">
            </div>
            
            <div class="campaign-info">
                <div class="ci-loc">
                    <p>تهران، بلوار اندرزگو</p>
                    <img src="<?php echo get_template_directory_uri() .'/assets/Images/Location (1).svg'?>" alt="">
                </div>
                <div class="ci-loc" id="cin">
                   <div class="ci-numbers">
                      <a href="tel:02126428963"><p>021-26428963</p></a> 
                     <a href="tel:09196442926">  <p>0919-6442926</p> </a>
                   </div>
                    <img src="<?php echo get_template_directory_uri() .'/assets/Images/Calling.svg'?>" alt="">
                </div>
                <div class="ci-loc">
                    <p> مشاوره آنلاین در واتس اپ : <a href="tel:09196442926">  6442926-0919 </a> </p>
                    <img src="<?php echo get_template_directory_uri() .'/assets/Images/whatsapp (1) 3.svg'?>" alt="">
                </div>
                <div class="ci-loc">
                    <p>آدرس اینستاگرام : <a href="https://www.instagram.com/niloofarclinic/">niloofarclinic </a> </p>
                    <img src="<?php echo get_template_directory_uri() .'/assets/Images/instagram-logo 1.svg'?>" alt="">
                </div>
            </div>
            </div>
          
        </div>
        
        
        <div class="mp-footer">
            <div class="socials">
                <h5>صفحات رسمی ما در شبکه های اجتماعی</h5>
                <div class="socials-logo">
                    <img src="<?php echo get_template_directory_uri() .'/assets/Images/telegram (1) 1.svg'?>" alt="">
                    <img src="<?php echo get_template_directory_uri() .'/assets/Images/youtube 1.svg'?>" alt="">
                  <a href="https://www.instagram.com/niloofarclinic/">  <img src="<?php echo get_template_directory_uri() .'/assets/Images/instagram (1) 1.svg'?>" alt=""> </a>
                    <img src="<?php echo get_template_directory_uri() .'/assets/Images/twitter (2) 1.svg'?>" alt="">
                </div>
            </div>
            <div class="footer-logo">
                <img src="<?php echo get_template_directory_uri() .'/assets/Images/g10.svg'?>" alt="">
            </div>
         
            
         </div>
         <div class="footer-res">
            <h6> تمام حقوق مادی و معنوی این وبسایت برای مطب زیبایی نیلوفر محفوظ است</h6>
           </div>
    </div>
</body>
</html>
        <?php
       wp_footer();
        ?>