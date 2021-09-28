<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_the_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() .'/assets/Images/logo.png' ?>" />
    <?php  wp_head(); ?>
</head>
<body>
    <div class="blog-page">
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