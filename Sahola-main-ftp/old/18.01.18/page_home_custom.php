<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package butiko
 * Template Name: Custom Page
 */

 $file_Ver = 0.59;

get_header();
$header_url = get_post_meta( get_the_ID(), 'butiko_page_header_image', true );
$page_title = get_post_meta( get_the_ID(), 'butiko_page_title', true );
$page_footer = get_post_meta( get_the_ID(), 'butiko_page_footer', true );
$page_description = get_post_meta( get_the_ID(), 'butiko_page_description', true );

if($header_url != "" ){
    $header_type = "with-bg";
}
// wp_enqueue_style( 'pt-sans-style', 'https://fonts.googleapis.com/css?family=PT+Sans:400' );
// wp_enqueue_style( 'garamond-style', 'https://fonts.googleapis.com/css?family=Cormorant+Garamond:500' );
?>
<!-- <link rel="stylesheet" href="/sahola_main/css/main.min.css?v=<?=file_Ver?>"> -->
<style type="text/css">
body,mark{color:#000}img,legend{border:0}*,body{margin:0}*,legend,td,th{padding:0}.wrap,sub,sup{position:relative}.text,.text--big-center,.title{text-align:center}html{font-family:sans-serif;-webkit-text-size-adjust:none;-moz-text-size-adjust:none;-ms-text-size-adjust:none}body{background:#fff;font-family:"PT Sans",sans-serif;font-weight:400}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,optgroup,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{background:#ff0}small{font-size:80%}sub,sup{font-size:75%;line-height:0;vertical-align:baseline}.bouquet__img,.bouquet__text,.text,.title,.toggle-down,.toggle-down svg{vertical-align:middle}sup{top:-.5em}sub{bottom:-.25em}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{box-sizing:content-box;height:0;-moz-box-sizing:content-box}pre,textarea{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}.christmas__text,.landing__btn,.title{text-transform:uppercase}button,html input[type=button],input[type=reset],input[type=submit]{cursor:pointer;-webkit-appearance:button}.foto__toggle-btn,button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{box-sizing:content-box;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;-webkit-appearance:textfield}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{margin:0 2px;padding:.35em .625em .75em;border:1px solid silver}table{border-spacing:0;border-collapse:collapse}body,html{width:100%;min-height:100%}*{box-sizing:border-box}.landing__btn,.wrap{margin:0 auto;width:100%}.site-content,.wrap{padding:0 0 0 299px}.clearfix::after{display:table;clear:both;content:""}.landing__btn{max-width:238px;padding:0;border:2px solid #c2a768;border-radius:0;outline:0;background:#dcbd76;font-size:20px;line-height:2.5;color:#403b3b;-webkit-transition:ease-out .1s;transition:ease-out .1s}.landing__btn:focus,.landing__btn:hover{background:#e6d9bb;color:#403b3b}.landing__btn:active{background:#fff;color:#403b3b}.landing__btn a{display:inline-block;width:100%;font-family:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;color:inherit;text-decoration:none}.landing__btn--modal{width:100%;max-width:370px;margin:0 0 30px;padding:0;background:#dcbd76}.landing__btn--modal:focus,.landing__btn--modal:hover{background:#e6d9bb;color:#403b3b}.landing__btn--modal:active{background:#fff;color:#403b3b}.title{display:inline-block;font-size:30px;font-weight:400;line-height:1.3;color:#c2a768}.title--black{color:#333}.text{margin:30px 0 0;font-size:24px;line-height:1.5;color:#666}.text--big{font-size:30px;line-height:2}.text *,.text--big *,.text--big-center *{font-size:inherit;font-weight:inherit;line-height:inherit}.text *{font-family:"Cormorant Garamond",serif}.text--big *,.text--big-center *{font-family:inherit}.header{position:fixed;top:0;left:0;width:300px;height:100%;background:#212121}.toggle-block{display:none;padding:0 35px 35px}.toggle-btn{display:block;width:100%;padding:3%;border:none;outline:0;background:0 0}.toggle-btn:focus,.toggle-btn:hover{background:0 0;color:#403b3b}.toggle-btn:active{background:#dcbd76;color:#403b3b}.toggle-btn.active .toggle-down{-webkit-transform:rotate3d(1,0,0,180deg);transform:rotate3d(1,0,0,180deg)}.toggle-down{display:inline-block;width:39px;height:39px;margin:0 0 0 15px;-webkit-transition:-webkit-transform 1s;transition:transform 1s}.player,.toggle-down svg,.video video{height:100%;width:100%}.toggle-down svg{fill:#c2a768}.foto__toggle-down{display:none}.foto__toggle-block{display:block}.bouquet__img,.bouquet__text,.clients__content,.foto__img{display:inline-block}.video{background:#fff}.video__wraper{position:relative;padding-bottom:56.238%;overflow:hidden;background:url(/sahola_main/img/video/bg.jpg) 50% 50% no-repeat;background-size:cover}.player{position:absolute;top:0;left:50%;border:none;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.bouquet{background:#f5f5f5}.bouquet__container{width:100%;padding:20px 0;font-size:0}.bouquet__text{width:50%;padding:30px 15px 20px 65px;font-size:22px;line-height:1.5;color:#666;text-align:left}.bouquet__btn,.clients__content,.clients__wraper,.corporate__btn,.events__btn{text-align:center}.bouquet__img{width:50%}.bouquet__img img{width:100%;height:auto}.corporate,.corporate__container-img,.corporate__container-img img,.events,.events__container-img,.events__container-img img{width:100%;height:100%}.bouquet__btn{padding:12% 0 30px}.corporate,.events{position:relative;background:#fff}.corporate__wraper,.events__wraper{position:relative;padding-bottom:66.666%;overflow:hidden}.corporate__container,.events__container{position:absolute;top:0;left:50%;width:100%;height:100%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.corporate__content,.events__content{position:absolute;top:50%;left:50%;width:90%;max-width:575px;border:2px solid #d4b472;background:rgba(255,255,255,.92);text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.corporate__content-toggle,.events__content-toggle{padding:35px}.corporate__text,.events__text{padding:0 0 10%}.clients{background:#f0f0f0}.christmas,.foto{background:#fff;position:relative;height:100%}.clients__wraper{padding:40px 10% 60px}.clients__container{font-size:0}.clients__content{width:25%;vertical-align:top}.foto__img,.foto__wraper,.links__container{vertical-align:middle}.clients__img{padding:0 3% 15px}.clients__img img{max-width:100%}.clients__img-text{font-size:12px;font-weight:400;color:#333}.foto{width:100%}.foto__container{position:relative;font-size:0;text-align:left}.christmas__text,.foto__btn,.foto__wraper,.links__wraper,.modal__form{text-align:center}.foto__img{width:50%}.foto__img img{display:block;width:100%}.foto__wraper{position:relative;display:inline-block;width:50%}.foto__content{width:100%}.foto__text{padding:10% 0 16%}.foto__btn{padding:0 0 3%}.christmas{width:100%}.christmas__wraper{position:relative;padding-bottom:66.666%;overflow:hidden}.christmas__container{position:absolute;top:0;left:50%;width:100%;height:100%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.christmas__container-img,.christmas__container-img img{width:100%;height:100%}.christmas__text{position:absolute;top:50%;left:50%;display:inline-block;padding:10px 25px;background:rgba(0,0,0,.3);font-size:20px;font-weight:400;line-height:26px;color:#fff;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.links{margin-bottom:43px;background:#f5f5f5}.links__wraper{padding:3% 10px;font-size:0}.links__container{display:inline-block;width:20%;max-width:116px;max-height:116px;padding:20px}.links__content,.links__img,.links__link{width:100%;height:100%}.links__img img{display:block;width:100%;height:100%}.modal,.modalnosend,.modalsend{position:fixed;top:50%;left:50%;z-index:20;width:100%;max-width:550px;max-height:600px;padding:68px 15px;visibility:hidden;opacity:0;background:#f9f7f2;text-align:center;-webkit-transition:all .7s;transition:all .7s;-webkit-transform:translate(-50%,-50%) scale(0);-ms-transform:translate(-50%,-50%) scale(0);transform:translate(-50%,-50%) scale(0)}.modal-title,.modalnosend-title,.modalsend-title{margin:0;padding:0 0 30px;font-size:26px;font-weight:400;font-style:normal;color:#000}.landing__modal__close{position:absolute;top:3px;right:3px;width:25px;height:25px;border:0;outline:0;background:0 0;font-size:0}.landing__modal__close::after,.landing__modal__close::before{position:absolute;top:11px;right:1px;width:22px;height:3px;border-radius:1px;background:#dcbd76;content:""}.landing__modal__close::before{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.landing__modal__close::after{-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}.landing__modal__close:focus,.landing__modal__close:hover{background:#f9f7f2}.modal__title{margin-bottom:0;font-size:20px;line-height:2.5;color:#403b3b}.modal__form{width:100%;max-width:430px;margin:0 auto;padding:10px;border:2px solid #debb75;border-radius:0;background:#fff}.modal__form .email,.modal__form .login,.modal__form .tel{width:100%;height:auto;max-width:370px;margin:35px auto 0;padding:18px;border:2px solid #debb75;border-radius:0;background:#f3fafd;font:inherit;color:inherit;text-transform:none}.modal__form .email:focus,.modal__form .login:focus,.modal__form .tel:focus{border:2px solid #debb75}.modal__form .tel{margin-bottom:65px}.modal__form .login{margin:10px auto 0}.modal__overlay{position:fixed;top:0;left:0;z-index:10;display:none;width:100%;height:100%;background:rgba(0,0,0,.7)}.modal-show{visibility:visible;opacity:1;-webkit-transform:translate(-50%,-50%) scale(1);-ms-transform:translate(-50%,-50%) scale(1);transform:translate(-50%,-50%) scale(1)}@media (min-width:1600px){.landing__btn{max-width:238px;font-size:24px;line-height:2}.landing__btn--modal{max-width:370px}.title{font-size:34px}.text{margin:8px 0 0;font-size:26px;line-height:1.5}.text--big{font-size:30px;line-height:1.5}}@media (max-width:1120px){.foto__text{padding:8% 0 15%}.foto__btn{padding:0}.links__container{padding:3%}}@media (max-width:1060px){.foto__text{padding:8% 0 10%}}@media (max-width:1040px){.site-content{padding:0 0 0 299px}.toper{width:100%;height:54px;background:#212121}}@media (max-width:1024px){.site-content,.wrap{padding:0}.header{display:none}}@media (max-width:768px){.christmas__content,.corporate__content,.events__content,.foto__content{max-width:400px}.toggle-down{width:30px;height:30px}.foto__toggle-btn{cursor:pointer}.foto__toggle-down{display:inline-block}.foto__toggle-block{display:none}.corporate__wraper,.events__wraper{padding-bottom:75%}.corporate__container,.events__container{margin:0}.corporate__container-img,.events__container-img{position:absolute;left:50%;width:100%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.corporate__container-img img,.corporate__content-wraper,.events__container-img img,.events__content-wraper{width:100%;height:100%}.corporate__text,.events__text{padding:0 0 30px}.foto__container{position:relative;margin:0 0 1px;overflow:hidden}.christmas__container-img,.foto__content,.foto__img{position:absolute;left:50%}.foto__wraper{z-index:10;width:100%;height:100%;padding:0 0 90%}.foto__img{width:100%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.foto__img img{width:100%;height:100%}.foto__content{top:50%;width:90%;padding:0;border:2px solid #d4b472;background:rgba(255,255,255,.85);text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.foto__text{padding:0 0 30px}.christmas__wraper{padding-bottom:75%}.christmas__container{margin:0}.christmas__container-img{width:100%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%)}.christmas__container-img img{width:100%;height:100%}}@media (max-width:768px) and (orientation:portrait){.foto__wraper{padding:0 0 110%}}@media (max-width:767px){.landing__btn{max-width:200px;font-size:18px;line-height:2}.landing__btn--modal{max-width:245px;margin:0 0 20px;padding:8px 0;font-size:16px;line-height:1}.title{font-size:26px}.text{margin:18px 0 0;font-size:20px;line-height:1.5}.text--big{font-size:24px;line-height:1.5}.modal__title{font-size:16px}.modal__form{max-width:295px;margin:0 auto;padding:0 20px}.modal__form .email,.modal__form .login,.modal__form .tel{max-width:245px;margin:25px auto 0;padding:8px}.modal__form .tel{margin-bottom:20px}.modal__form .login{margin:5px auto 0}}@media (max-width:750px){.landing__btn{max-width:180px}.landing__btn--modal{max-width:245px}.title{font-size:22px}.text{margin:10px 0 0;font-size:18px;line-height:1.3}.text--big{font-size:20px;line-height:1.3}.toggle-block{padding:0 25px 25px}.toggle-down{width:28px;height:28px}}@media (max-width:480px){.landing__btn{font-size:15px}.landing__btn--modal{max-width:245px;margin:0 0 10px;padding:5px 3px;font-size:16px;line-height:1.5}.title{font-size:20px}.text{font-size:14px;}.christmas__text,.text--big{font-size:16px}.christmas__text{width:100%}.toggle-block{padding:0 15px 10px}.toggle-down{width:25px;height:25px}.bouquet__text{padding:20px 15px 20px 35px}.corporate__text,.events__text{margin:0;padding:0 0 15px}.foto__content{padding:0}.foto__text{padding:0 0 25px}.modal,.modalnosend,.modalsend{max-width:480px;max-height:320px;padding:25px 15px 10px}.modal__form .email,.modal__form .login,.modal__form .tel{margin:20px auto 0}.modal__form .tel{margin-bottom:20px}.modal__form .login{margin:0 auto}}@media (max-width:420px){.landing__btn{font-size:14px}.landing__btn--modal{max-width:245px;margin:0 0 8px;padding:5px 3px;font-size:14px;line-height:1.5}.title{font-size:16px}.text{font-size:11px}.text--big{font-size:14px}}
</style>

<div class="full-width"><div id="primary" class="content-area"><main id="main" class="site-main" role="main"><div class="toper"></div><section class="video" id="video"><div class="video__wraper"><div class="player" id="player"><video autoplay loop><source src="/sahola_main/video/1920/Four bouquet.mp4" media="(min-width: 1920px)"></source><source src="/sahola_main/video/1920/Four bouquet.webm" media="(min-width: 1920px)"></source><source src="/sahola_main/video/1920/Four bouquet.ogv" media="(min-width: 1920px)"></source><source src="/sahola_main/video/1024/Four bouquet.mp4" media="(min-width: 1024px)"></source><source src="/sahola_main/video/1024/Four bouquet.webm" media="(min-width: 1024px)"></source><source src="/sahola_main/video/1024/Four bouquet.ogv" media="(min-width: 1024px)"></source><source src="/sahola_main/video/480/Four bouquet.mp4" media="(min-width: 480px)"></source><source src="/sahola_main/video/480/Four bouquet.webm" media="(min-width: 480px)"></source><source src="/sahola_main/video/480/Four bouquet.ogv" media="(min-width: 480px)"></source></video></div></div></section><header class="header"></header><section class="bouquet" id="bouquet"><div class="foto__container"><div class="foto__wraper"><div class="foto__content"><button class="foto__toggle-btn toggle-btn"><h2 class="title">SEND FLOWERS</h2><div class="foto__toggle-down toggle-down"><svg class="toggle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" width="35px" height="35px"><path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" fill="#c2a768"/></svg></div></button><div class="foto__toggle-block toggle-block"><div class="foto__text text"><p>It's a perfect time to send flowers to your friends, beloved ones, colleagues, or simply to yourself. Let's bring joy and happiness to their lives. Shop our most exclusive and fresh flower arrangements and plants.</p></div><div type="button" class="landing__btn" data-section="SHOP NOW"><a href="/shop/">SHOP NOW</a></div></div></div></div><div class="foto__img"><img src="/sahola_main/img/foto/foto-bouquet.jpg" alt=""></div></div></section><section class="events" id="events"><div class="events__wraper"><div class="events__container"><div class="events__container-img"><img src="/sahola_main/img/events/events-bg.jpg" alt=""></div><div class="events__content-wraper"><div class="events__content"><button class="toggle-btn"><h2 class="title">EVENT FLOWERS</h2><div class="toggle-down"><svg class="toggle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" width="35px" height="35px"><path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" fill="#c2a768"/></svg></div></button><div class="toggle-block"><div class="events__text text"><p>We bring your event to the next level with our fabulous flowers.<br>Find out more about our event flower services and arrange a consultation today.</p></div><div class="events__btn"><button type="button" class="landing__btn button__modal" data-section="SHOP FLOWERS">GET A QUOTE</button></div></div></div></div></div></div></section><section class="clients" id="clients"><div class="clients__wraper"><h2 class="title title--black">SOME OUR LOVELY CLIENTS</h2><div class="clients__container"><div class="clients__content"><div class="clients__img"><img src="/sahola_main/img/clients/clients-01.jpg" alt=""></div><p class="clients__img-text">Neiman Marcus</p></div><div class="clients__content"><div class="clients__img"><img src="/sahola_main/img/clients/clients-02.jpg" alt=""></div><p class="clients__img-text">Tory Burch Foundation</p></div><div class="clients__content"><div class="clients__img"><img src="/sahola_main/img/clients/clients-03.jpg" alt=""></div><p class="clients__img-text">Sebastian Arcelus</p></div><div class="clients__content"><div class="clients__img"><img src="/sahola_main/img/clients/clients-04.jpg" alt=""></div><p class="clients__img-text">Tribeca Film Festival</p></div></div></div></section><section class="foto" id="foto"><div class="foto__container"><div class="foto__img"><img src="/sahola_main/img/foto/foto-01.jpg" alt=""></div><div class="foto__wraper"><div class="foto__content"><button class="foto__toggle-btn toggle-btn"><h2 class="title">FLOWER HAT BOXES</h2><div class="foto__toggle-down toggle-down"><svg class="toggle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" width="35px" height="35px"><path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" fill="#c2a768"/></svg></div></button><div class="foto__toggle-block toggle-block"><div class="foto__text text"><p>The simple new way to give luxury</p></div><div class="foto__btn"><div type="button" class="landing__btn" data-section="EVENT FORM"><a href="/shop/flower-hat-boxes/">SHOP NOW</a></div></div></div></div></div></div><div class="foto__container"><div class="foto__wraper"><div class="foto__content"><button class="foto__toggle-btn toggle-btn"><h2 class="title">FASHION FLOWERS</h2><div class="foto__toggle-down toggle-down"><svg class="toggle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" width="35px" height="35px"><path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" fill="#c2a768"/></svg></div></button><div class="foto__toggle-block toggle-block"><div class="foto__text text"><p>We love fashion and Editorial shootings. We would love to create a fresh floral art pieces for your next project.</p></div><div class="foto__btn"><button type="button" class="landing__btn button__modal" data-section="FLOWER HAT BOXES">GET A QUOTE</button></div></div></div></div><div class="foto__img"><img src="/sahola_main/img/foto/foto-02.jpg" alt=""></div></div><div class="foto__container"><div class="foto__img"><img src="/sahola_main/img/foto/foto-03.jpg" alt=""></div><div class="foto__wraper"><div class="foto__content"><button class="foto__toggle-btn toggle-btn"><h2 class="title">CORPORATE WEEKLY ACCOUNTS</h2><div class="foto__toggle-down toggle-down"><svg class="toggle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" width="35px" height="35px"><path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" fill="#c2a768"/></svg></div></button><div class="foto__toggle-block toggle-block"><div class="foto__text text"></div><div class="foto__btn"><button type="button" class="landing__btn button__modal" data-section="CORPORATE WEEKLY ACCOUNTS">CONTACT US</button></div></div></div></div></div></section>--><section class="corporate" id="corporate"><div class="corporate__wraper"><div class="corporate__container"><div class="corporate__container-img"><img src="/sahola_main/img/corporate/corporate-bg.jpg" alt=""></div><div class="corporate__content-wraper"><div class="corporate__content"><button class="toggle-btn"><h2 class="title">RESIDENTIAL FLOWERS</h2><div class="toggle-down"><svg class="toggle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" width="35px" height="35px"><path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" fill="#c2a768"/></svg></div></button><div class="toggle-block"><div class="corporate__text text text--big-center"><p>Gorgeous luxury bouquets are available to be sent out to your home monthly. Give the gift that keeps on giving with our popular subscription service. Available to buy for 3, 6 or 12 months. A unique and thoughtful solution for the person who has everything. Call or email us for more info.</p></div><div class="corporate__btn"><button type="button" class="landing__btn button__modal" data-section="RESIDENTIAL FLOWERS">GET A QUOTE</button></div></div></div></div></div></div></section><section class="links" id="links"><div class="links__wraper"><div class="links__container"><div class="links__content"><a class="links__link" href="https://www.weddingstylemagazine.com/galleries/ivanchenko-stylized-photo-shoot#0" title=""><div class="links__img"><img src="/sahola_main/img/links/link-01.png" alt="Grace ormonde wedding style"></div></a></div></div><div class="links__container"><div class="links__content"><a class="links__link" href="#" title=""><div class="links__img"><img src="/sahola_main/img/links/link-02.png" alt="Grace ormonde Platinum member 2015"></div></a></div></div><div class="links__container"><div class="links__content"><a class="links__link" href="https://www.weddingstylemagazine.com/inspiration/planning/tabletop-decor-gallery#346" title=""><div class="links__img"><img src="/sahola_main/img/links/link-03.png" alt="Grace ormonde wedding style"></div></a></div></div><div class="links__container"><div class="links__content"><a class="links__link" href="#" title=""><div class="links__img"><img src="/sahola_main/img/links/link-04.png" alt="WeddingWire rated business"></div></a></div></div><div class="links__container"><div class="links__content"><a class="links__link" href="https://www.theknot.com/marketplace/sahola-floral-art-and-event-design-new-york-ny-846571" title=""><div class="links__img"  ><img src="https://www.xoedge.com/myaccount/2012/bow-2018/BOW2018_WebBadges/BOW2018_VendorProfile_Gold_70x70.png" width="70" height="70" alt="The Knot Best of Weddings - 2018 Pick"></div></a></div></div></div></section><div class="modal__overlay"><div class="modal"><button class="landing__modal__close" type="button" title="Close">Close</button><form class="modal__form" action="/sahola_main/reg.php" method="post"><p class="modal__title">GET A QUOTE</p><input class="login" type="text" name="name" placeholder="Name" value="" required> <input class="email" type="email" name="email" placeholder="E-mail" value="" required> <input class="tel" type="tel" name="phone" placeholder="Phone" value="" required> <input class="inp-hidden" type="hidden" name="inp-hidden" value=""> <button class="landing__btn landing__btn--modal" type="submit">Submit</button></form></div><div class="modalsend" id="modalsend"><button class="landing__modal__close" type="button" title="Close">Close</button><p class="modalsend-title">Thank you!</p><p class="modalsend-title">Your message has been sent.</p><button class="landing__btn landing__btn--modal btn__modal-close" type="button">Close</button></div><div class="modalnosend" id="modalnosend"><button class="landing__modal__close" type="button" title="Close">Close</button><p class="modalsend-title">Sorry!</p><p class="modalsend-title">Your message was not sent. Please try again.</p><button class="landing__btn landing__btn--modal btn__modal-again" type="button">Try again</button></div></div>
</main>
</div>
</div>
<?php
		wp_enqueue_script( 'jquery-validate-js', 'https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js', array('jquery'), $file_Ver, true );
		wp_enqueue_script( 'main-page-js', '/sahola_main/js/script.js', array('jquery'), $file_Ver, true );
?>
<?php get_footer(); ?>

