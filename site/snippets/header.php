<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,minimum-scale=1.0,initial-scale=1.0" />
  <?php if($page->isHomePage()): ?>
  <title><?php echo html($site->hometitle()) ?></title>
  <?php else: ?>
  <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>
  <?php endif ?>
  <style>.ilk:link,hr{background:0 0}.ct,.m ul{text-align:center}.i,.m li,.mt,.nf{float:left}.wdd,img{outline:0}.mt dd,.prf .so p::before,.spnf h3{white-space:nowrap}.cft .bt,.wdd{cursor:pointer}.cft .bt,a{text-decoration:none}.m li,.pc,.rbt,h3{text-transform:uppercase}.ddu,.iiml,.io .atoz,.io .std,.m li,.spc{list-style:none}.att,.cft{border-collapse:collapse}.att *,.ddu a{box-sizing:border-box}a,body,caption,div,em,h1,h2,h3,header,html,img,li,nav,p,span,strong,sup,table,tbody,td,tfoot,th,thead,tr,ul{font-size:100%;vertical-align:baseline;margin:0;padding:0;outline:0;border:0;background:0 0}html{overflow-y:scroll;overflow-x:hidden;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{font-size:1em;line-height:1.375em}a{color:#4db7db}a:link{-webkit-tap-highlight-color:#4DB7DB}img{max-width:100%;height:auto;-ms-interpolation-mode:bicubic}hr{height:.08em;border:0;margin:2.75em 0}p{margin-bottom:1.375em}.bb{clear:left;margin-bottom:2.75em;padding-bottom:1.375em}br+em{font-size:.875em;line-height:1.5em;color:#999}.cls{-webkit-column-count:2;-moz-column-count:2;column-count:2;-webkit-column-gap:2.5em;-moz-column-gap:2.5em;column-gap:2.5em}.invis{visibility:hidden;height:0}.mt,.s th,body{font-family:"Proxima Nova Regular","Helvetica Neue",Arial,Helvetica,sans-serif;font-weight:400;font-style:normal}.cft .bt,.iim dt,.m strong,.mmm dt,.mt dt,.nwl,.pc,.rbt,.std::before,.ttt,h3,strong{font-family:"Proxima Nova Bold","Helvetica Neue",Arial,Helvetica,sans-serif;font-style:normal;font-weight:700}em{font-family:"Proxima Nova Italic","Helvetica Neue",Arial,Helvetica,sans-serif;font-weight:400;font-style:italic}.io p:first-child,.sh a,.sh small{font-family:"Skolar Regular",Georgia,"Times New Roman",Times,serif;font-weight:400;font-style:normal}.hsh strong,.io p:first-child strong,h1,h2{font-family:"Skolar Bold",Georgia,"Times New Roman",Times,serif;font-weight:700;font-style:normal}.io p:first-child em,i{font-family:"Skolar Italic",Georgia,"Times New Roman",Times,serif;font-weight:400;font-style:italic}.bt[disabled],body{color:#333}.ddc,.ddc a{color:#808184}.sh small{color:#eee}.hsh a,.rbt{color:#E9392E}.s,.sh,hr{border-top:.08em solid #eee}.bb,.lsn,.m,.s td,.s th{border-bottom:.08em solid #eee}.bi img{border:.08em solid #eee}.ddu a,.h,.m a,.rbt,.s .i,main,nav{display:block}.bt{display:inline-block}.off{display:none}.date sup,.h,.prf .so p,.wdd,.x{position:relative}.ddc,.ddu,.nojsdd,.prf .so p::before,.so .nf::before,.wdd::after{position:absolute}.ddu,.hi .ilk,.iim,.iiml li,.l,.m,.mt dd,.prf,.spnf,body{overflow:hidden}.c a{border-bottom:.08em solid #e5e5e5;padding-bottom:.08em}.ilk:link{border:0}h1{font-size:2em;line-height:1.09375em;margin-bottom:1.25em}h2{font-size:1.625em;line-height:1.1923em}.h h1,h3{font-size:1em}h3{letter-spacing:.125em}.m a,.pc{letter-spacing:.08em}h2,h3{margin-bottom:1.375em}.spg h2{padding-top:1.539em}.tk h2{margin-bottom:.75em}.prf h3{margin-top:2.5em;margin-bottom:.625em}.pg{z-index:3;width:60em;margin:0 auto;border-top:.3125em solid #329B47;border-bottom:0;background:#fff;box-shadow:0 0 .625em .08em rgba(0,0,0,.05)}.io .std,.prf .so p{z-index:2}.h h1{max-width:15.25em;margin:2.5em 0 3em 3.75em}.m ul{padding:0 3.75em}.m li{width:7.8125em;border-right:.08em solid #eee}.m li a{color:#4DB7DB}.m li:first-child{width:5.5625em}.m li:last-child{width:7.25em;border-right:0}.m li:last-child a{color:#fff;background-color:#E9392E}.m a{font-size:.875em;padding:.5714em .7143em .5em}.c{padding:2.5em 3.75em 0}.spl{padding-bottom:3em}.iiml li,.mt dd{padding-bottom:1.375em;text-overflow:ellipsis}.spc{margin-top:1.375em}.i{width:21%;margin-right:4%}.i img{margin-top:.3125em}.nf{width:47%;margin-right:5%}.mt{width:23%;padding-top:1.375em}.iiml{margin-top:2.75em;padding-top:2.75em;border-top:.3125em solid #F1F7EF}.iiml li{margin-bottom:2.75em;border-bottom:.3125em solid #F1F7EF}.ddc{line-height:1.375em;text-align:right;top:.625em;right:3.75em}.ddc a{border:0}.wdd{margin:-.75em auto 0;padding:.75em 3.75em .75em 0;width:17em;background:#C7DFB9;border-radius:.3125em}.wdd::after{content:"";width:0;height:0;top:29%;right:.9375em;border:.8125em solid transparent;border-top-color:#E9392E}.wdd.act{color:#fff;background:#329B47;border-radius:.3125em .3125em 0 0;box-shadow:none}.wdd.act .ddu{max-height:25em;border-bottom:.08em solid #329B47}.wdd.act::after{border-top-color:#fff}.ddu{max-height:0;top:100%;left:0;right:0;margin:0 0 1.375em;border:.08em solid #329B47;border-top:0;border-bottom:0;background:#fff;border-radius:0 0 .3125em .3125em}.ddu a{width:100%;padding:1em 3.75em 1em 0;border-bottom:.08em solid #eee}.ddu li:last-of-type a{border:0}.rbt{font-size:1.75em;line-height:1em}.rbt img{float:right;margin-left:.125em}.nojsdd{padding:.625em 1.875em;margin-bottom:1.25em;border:.08em solid #e5e5e5;background-color:#C7DFB9;border-radius:.5em}.nojsdd .wdd{background:0 0}.date{font-size:.875em}.date sup{font-size:.6875em;top:-.45em;padding:0 .1818em 0 .0909em}.io p:first-child{font-size:1.25em;line-height:1.4em}.io ol,.io ul,.tx ol,.tx ul{margin:0 0 1.375em 1.375em}.io li,.tx li{padding:.1875em 0}.hi .ilk{float:right;width:50%;margin:.3125em 0 0 5%;padding:0 0 1.75em}.iol{width:45%;float:left}.hsh,.ttt{font-size:1.5em}.ttt{padding:1em 0 0}.ioc,.ttt{clear:both}.io .std{position:relative;float:right;margin-top:-4.75em;padding:1.25em 1.25em 0;width:25%;background:#eee;border-radius:0 .3125em .3125em;box-shadow:inset 0 0 .3125em rgba(0,0,0,.15)}.spnf,.tnf{float:left}.io .std::before{content:"Save the date!";font-size:1.5em;position:absolute;top:0;opacity:0;-webkit-transition:top ease-out .3s .6s,opacity ease-out .3s .7s;transition:top ease-out .3s .6s,opacity ease-out .3s .7s}.io .std p{line-height:1.7}.prf .iim{margin-bottom:5.5em}.prf .i{margin-top:.08em}.prf .mt{padding-top:.3125em}.prf .so p::before{content:"SOLD OUT";font-size:3.75em;text-align:center;top:30%;left:0;right:.5em;z-index:1;color:#eb6933;opacity:.4;-webkit-transform:rotate(-8deg);-ms-transform:rotate(-8deg);transform:rotate(-8deg)}.tk{padding-top:1.375em}.sh{margin-top:1.6923em;padding-top:1.6923em}.s{width:100%;border-spacing:0;margin-bottom:4.125em}.s td,.s th{vertical-align:top;padding:2.75em 0}.s th{padding:2.75em 1.375em;width:5%}.s .tx th{padding:1.375em}.s .tx td{padding:1.375em 0}.s .i{margin:0 0 1.25em;width:100%}.tnf{width:62%;margin-right:5%}.spnf{text-overflow:ellipsis;width:33%}.spnf h3{margin-bottom:1.375em}.spnf img{max-width:12.5em}.cft{width:100%}.cft tr{border-bottom:.5em solid transparent}.cft tr:nth-child(2n){background-color:#f5f5f5}.cft td{padding:.3em 1em .3em 2em;width:22em;vertical-align:middle}.att td,.cft .bt{padding:.5em 1em}.cft .cta,.cft .pc{text-align:center;width:10em}.cft .bt{font-size:.9375em;text-align:center;color:#e31d0c;border:.08em solid #ce9141;background:#1e5799;background:-webkit-linear-gradient(top,#1e5799 0,#ffde2f 0,#fab23e 100%);background:linear-gradient(to bottom,#1e5799 0,#ffde2f 0,#fab23e 100%);box-shadow:inset 0 .08em 0 rgba(255,255,255,.2),inset 0 -.08em .08em rgba(0,0,0,.07),0 .08em .08em rgba(0,0,0,.1);border-radius:.26667em}.cft .bt ::-moz-focus-inner{border:0}.cft .bt[disabled]{text-shadow:none;cursor:not-allowed;background:#999;border:0;box-shadow:none}.cft .sobt{color:#333;background:#e8e8e8;background:-webkit-linear-gradient(top,#e8e8e8 0,#c5c5c5 100%);background:linear-gradient(to bottom,#e8e8e8 0,#c5c5c5 100%);border:.08em solid #bababa}.pc{font-size:.875em;color:#e95c33}.io .atoz{margin:0}.io .atoz::after{content:" ";display:table;clear:both}.io .atoz li{font-size:1.25em;float:left;margin:0 .875em .5em 0}.io .atoz li a{border:0}.att{width:100%}.att tr:nth-child(2n){background-color:#F1F7EF}.att tr.nwl{background-color:#b6cea8}.att tr.nwl td{border-color:#b6cea8}.att td{border-left:.08em solid #C7DFB9;border-right:.08em solid #C7DFB9}.konami-image{position:fixed;bottom:30px;left:-500px;z-index:9}@media screen and (max-width:62.5em){body{overflow-x:hidden}h3{letter-spacing:.08em}.m,.pg{width:100%}.pg{border:.08em solid #fff;border-bottom:0;border-radius:0}.m li,.m li:first-child{width:14%}.m li:last-child{width:15%}.m a{font-size:.75em;padding:.6667em 0 .5833em}.hi .ilk{padding-bottom:.625em}.iol{width:auto;float:none}.hsh{margin-left:0;font-size:1em}}@media only screen and (max-width:52.5em){.att tbody,.att td,.att tr{display:block;width:100%}.att tr{border-bottom:.125em solid rgba(0,0,0,.02);padding:.5em}.att td{display:inline;padding:0}.att td::after{content:"\2022";color:rgba(0,0,0,.5)}.att td:last-child::after{content:""}.att br{display:none}.att td,.att tr.nwl td{border:0}.att tr:first-of-type{font:0/0 a;visibility:hidden;height:0}}@media screen and (max-width:48em){.m li,.m li:first-child,.m li:last-child{width:100%}.m{border-bottom:0}.m ul{text-align:left;padding:0 3.75em}.m li{border-right:0}.m a{font-size:.75em;padding:.41667em .8333em;border-bottom:.08em solid #eee}.hi{overflow:hidden}.hi .ilk{width:55%;float:right;margin:.3125em 0 .6875em .6875em}.hi .ilk img{width:100%;height:auto}.cls{-webkit-column-count:1;-moz-column-count:1;column-count:1}.iim .i{width:29%;margin-right:4%}.iim .nf{width:66%}.iim .mt{clear:both;margin-left:33%;padding-top:1.375em}.s h3{white-space:normal}.s .spnf,.s .tnf{margin:0}.hi .io,.iim .mt,.m,.s .spnf,.s .tnf{width:auto}.hi .io,.iim .nf{margin-right:0}.hi .io,.iim .mt,.s .spnf,.s .tnf{float:none}}@media screen and (max-width:44.375em){.h{padding:0 3.75em}.h h1{margin:1.25em auto .6875em;padding:0}.ddc{position:relative;right:0;margin:0 auto 1.5714em}.ddc,.h{text-align:center}.wdd{position:static;padding:.8571em 0;margin:0 auto}.ddc,.wdd{width:100%}.ddu a{padding-left:0;padding-right:0}.rbt img{float:none}}@media screen and (max-width:37.5em){.hi .ilk,.hi .io{float:none;width:auto}.c,.m ul{padding:0 .9375em}.h{padding:0;width:95%}.h,.wdd{margin:0 auto}.c{padding-top:2.5em;padding-bottom:2.5em}.hi .io{margin-right:0}.hi .ilk{text-align:center;display:block;margin:.3125em 0 1.375em;padding:0}.hi .ilk img{margin:0 auto;width:auto;height:auto}.iim .i{float:right;width:7.5em;height:7.5em;margin:0 .125em 1.375em 1.875em}.iim .nf{float:none;width:auto}.iim .mt{width:auto;margin-left:0}.sh a,.sh span{display:block;border-bottom:.08em solid #eee;padding-bottom:.8462em;margin-bottom:.8462em}.sh a:last-child,.sh span:last-child{border-bottom:0;padding-bottom:0}.sh small{display:none;}}</style>
  <script>(function () {"use strict";var css_href = '//smashingconf.com/assets/styles/web-fonts.css';function on(el, ev, callback) {if (el.addEventListener) {el.addEventListener(ev, callback, false);} else if (el.attachEvent) {el.attachEvent("on" + ev, callback);}}if ((window.localStorage && localStorage.font_css_cache) || document.cookie.indexOf('font_css_cache') > -1){injectFontsStylesheet();} else {on(window, "load", injectFontsStylesheet);}function fileIsCached(href) {return window.localStorage && localStorage.font_css_cache && (localStorage.font_css_cache_file === href);}function injectFontsStylesheet() {if (!window.localStorage || !window.XMLHttpRequest) {var stylesheet = document.createElement('link');stylesheet.href = css_href;stylesheet.rel = 'stylesheet';stylesheet.type = 'text/css';document.getElementsByTagName('head')[0].appendChild(stylesheet);document.cookie = "font_css_cache";} else {if (fileIsCached(css_href)) {injectRawStyle(localStorage.font_css_cache);} else {var xhr = new XMLHttpRequest();xhr.open("GET", css_href, true);on(xhr, 'load', function () {if (xhr.readyState === 4) {injectRawStyle(xhr.responseText);localStorage.font_css_cache = xhr.responseText;localStorage.font_css_cache_file = css_href;}});xhr.send();}}}function injectRawStyle(text){var style = document.createElement('style');style.innerHTML = text;document.getElementsByTagName('head')[0].appendChild(style);}}());</script>
  <link rel="preload" href="//smashingconf.com/freiburg-2017/assets/styles/fr17.css" as="style" onload="this.rel='stylesheet'" />
  <link rel="preconnect" href="//static.getclicky.com/" />
  <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <noscript><link rel="stylesheet" href="assets/styles/fr17.css" /></noscript>
  <meta name="author" content="<?php echo html($site->author()) ?>" />
  <meta name="robots" content="index,follow" />
  <meta name="revisit-after" content="1 days" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta property="fb:admins" content="564938915" />
  <meta property="og:title" content="Smashing Conference Freiburg 2017" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://smashingconf.com/freiburg-2017/" />
  <meta property="og:description" content="<?php echo html($site->description()) ?>" />
  <meta property="og:image" content="assets/images/banners/smashingconf-freiburg2017.png" />
  <link rel="image_src" href="assets/images/banners/smashingconf-freiburg2017.png" />
  <!--[if IE]><link href="favicon.ico" rel="icon" /><![endif]-->
  <link href="favicon.png" rel="icon" />
  <link rel="apple-touch-icon" href="assets/images/appletouchicon.png" />
</head>
<body>
<div class="pg">
  <header class="h" role="banner">
    <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" srcset="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo h($site->title()) ?>" /></a></h1>
    <div id="ddc" class="ddc">
      <div id="dd" class="wdd" tabindex="1">
        <span class="rbt">Freiburg <img src="<?php echo url('assets/images/german-flag.png') ?>" width="26" height="26" alt="SmashingConf Germany" /> </span>
        <span class="date">11<sup>th</sup>–12<sup>th</sup> of September 2017</span>
        <ul class="ddu">
          <li>
            <a href="//sf17.smashingconf.com">
              <span class="rbt">San Francisco <img src="<?php echo url('assets/images/usa-flag.png') ?>" width="26" height="26" alt="SmashingConf San Francisco 2017" /> </span>
              <span class="date">4<sup>th</sup>–5<sup>th</sup> of April 2017</span>
            </a>
          </li>
          <li>
        <a href="//smashingconf.com/ny-2017">
          <span class="rbt">New York <img src="<?php echo url('assets/images/usa-flag.png') ?>" width="26" height="26" alt="SmashingConf New York 2017" /> </span>
          <span class="date">13<sup>th</sup>–14<sup>th</sup> of June 2017</span>
        </a>
          </li>
        </ul>
      </div>
    </div>
    <noscript>
      <div class="ddc nojsdd">
        <a href="//smashingconf.com/ny-2017">
          <span class="rbt">New York <img src="<?php echo url('assets/images/usa-flag.png') ?>" width="26" height="26" alt="SmashingConf New York 2017" /> </span>
          <span class="date">13<sup>th</sup>–14<sup>th</sup> of June 2017</span>
        </a>
      </div>
    </noscript>
  </header>
