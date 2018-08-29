<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,minimum-scale=1.0,initial-scale=1.0" />
  <?php if ($page->isHomePage()) : ?>
  <title><?php echo html($site->hometitle()) ?></title>
  <?php else : ?>
  <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>
  <?php endif ?>
  <link rel="preload" as="script" href="/assets/scripts/tito.js">
  <link rel="prefetch" href="/assets/scripts/tito.js">
  <style>@font-face{font-family:ElenaInitial;src:url("https://d33wubrfki0l68.cloudfront.net/a978f759fa0230c1e590d1bdb5a1c03ceb538cec/fed6b/fonts/elenawebregular/elenawebregular.woff2") format("woff2"),url("https://d33wubrfki0l68.cloudfront.net/9c2752fab289f61c6ed3a1f78ab60fb2034103b7/bf691/fonts/elenawebregular/elenawebregular.woff") format("woff")}@font-face{font-family:Elena;src:url("https://d33wubrfki0l68.cloudfront.net/a978f759fa0230c1e590d1bdb5a1c03ceb538cec/fed6b/fonts/elenawebregular/elenawebregular.woff2") format("woff2"),url("https://d33wubrfki0l68.cloudfront.net/9c2752fab289f61c6ed3a1f78ab60fb2034103b7/bf691/fonts/elenawebregular/elenawebregular.woff") format("woff")}@font-face{font-family:Elena;src:url("https://d33wubrfki0l68.cloudfront.net/151446eb4ad2f20af89f3132f66d03cc92c856f4/74612/fonts/elenawebregularitalic/elenawebregularitalic.woff2") format("woff2"),url("https://d33wubrfki0l68.cloudfront.net/a6275674bf99f00da2e019547d61933d074f2ae7/51beb/fonts/elenawebregularitalic/elenawebregularitalic.woff") format("woff");font-style:italic}@font-face{font-family:Elena;src:url("https://d33wubrfki0l68.cloudfront.net/a7cc92a2d6ae8ea43370e14b53d2ce89a2b2b5ab/7cca9/fonts/elenawebbold/elenawebbold.woff2") format("woff2"),url("https://d33wubrfki0l68.cloudfront.net/c2ebb4866cc6ce6d5ffdb22b616cb3dde4274107/c6bc6/fonts/elenawebbold/elenawebbold.woff") format("woff");font-weight:700}@font-face{font-family:Elena;src:url("https://d33wubrfki0l68.cloudfront.net/bbc71fd1b91cc1a4ede7ea378a8bf30b9e32173e/93eeb/fonts/elenawebbolditalic/elenawebbolditalic.woff2") format("woff2"),url("https://d33wubrfki0l68.cloudfront.net/56129334a763b7d04f2f34cbbd3b4f68f72bb6d7/8045a/fonts/elenawebbolditalic/elenawebbolditalic.woff") format("woff");font-weight:700;font-style:italic}@font-face{font-family:MijaInitial;src:url("https://d33wubrfki0l68.cloudfront.net/ac1833dce386eb55d8e105248ef9126622e8e3e9/03f2d/fonts/mijaregular/mija_regular-webfont.woff2") format("woff2"),url("https://d33wubrfki0l68.cloudfront.net/0e0910ceb0e2f9adffd9db31665dafa4ec5c10ff/7214b/fonts/mijaregular/mija_regular-webfont.woff") format("woff")}@font-face{font-family:Mija;src:url("https://d33wubrfki0l68.cloudfront.net/ac1833dce386eb55d8e105248ef9126622e8e3e9/03f2d/fonts/mijaregular/mija_regular-webfont.woff2") format("woff2"),url("https://d33wubrfki0l68.cloudfront.net/0e0910ceb0e2f9adffd9db31665dafa4ec5c10ff/7214b/fonts/mijaregular/mija_regular-webfont.woff") format("woff")}@font-face{font-family:Mija;src:url("https://d33wubrfki0l68.cloudfront.net/94691bb5497213e09480b17ef68446d2b85667e9/d58ec/fonts/mijabold/mija_bold-webfont.woff2") format("woff2"),url("https://d33wubrfki0l68.cloudfront.net/1d162cc7792bc1f04919a5a344b4082087b9e012/855b4/fonts/mijabold/mija_bold-webfont.woff") format("woff");font-weight:700}</style>

  <meta name="theme-color" content="#e95c33">
  <meta name="author" content="<?php echo html($site->author()) ?>" />
  <meta name="robots" content="index,follow" />
  <meta name="revisit-after" content="1 days" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
	<meta property="og:title" content="<?php if ($page->title() != '') : ?><?php echo html($page->title()) ?> - <?php endif ?>SmashingConf — Freiburg, September 10-11" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo url() ?>" />
	<?php if ($page->description() != '') : ?>
	<meta name="og:description" content="<?php echo kirbytext($page->description()) ?>" />
	<?php else : ?>
	<meta name="og:description" content="<?php echo html($site->description()) ?>" />
	<?php endif ?>
	<meta property="og:image" content="<?php echo url('assets/images/og-sf-2019.png') ?>" />
	<link rel="image_src" href="<?php echo url('assets/images/og-sf-2019-small.png') ?>" />
	<meta name="twitter:card" content="summary" />
	<?php if ($page->description() != '') : ?>
	<meta name="twitter:description" content="<?php echo kirbytext($page->description()) ?>" />
	<?php else : ?>
	<meta name="twitter:description" content="Home, sweet home! The 7th SmashingConf Freiburg — in our lovely hometown in Germany — will be taking place in the Historic Merchants’ Hall on September 10-11." />
	<?php endif ?>
	<meta name="twitter:title" content="<?php if ($page->title() != '') : ?><?php echo html($page->title()) ?> - <?php endif ?>SmashingConf — Freiburg September 10-11" />
	<meta name="twitter:site" content="@smashingconf" />

  <link rel="shortcut icon" href="<?php echo url('favicon.png') ?>" type="image/x-icon" />
  <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <style type="text/css">@supports(display:grid){.io{display:grid}}.pg{z-index:3;margin:0 auto;border:0;border-top:.3125em solid #227199;background:#fff;box-shadow:0 0 .625em .08em rgba(0,0,0,.05)}header.h{display:grid;grid-template-columns:1fr;align-items:center;justify-items:center;margin:0}header.h h1{width:100%;text-align:center;margin:1em 0}header.h h1 img{max-width:calc(55% - 3.5vw)}@media all and (min-width:600px){header.h h1 img{max-width:31%}}ul{list-style:none;padding-left:1.25em;list-style-image:url(/assets/images/bullet.svg);margin-bottom:1.375em}ul li{margin-bottom:.5em;padding-left:.25em}.m li:first-child{display:none}.m ul{padding:0 3.75em}.m ul{display:grid;grid-template-columns:1fr 1fr 1fr}.m li,.m li:first-child,.m li:last-child{width:auto}.ig,.n,.scl a,.v,.vs,.vsn{overflow:hidden}.m{border-bottom:1px solid #eee;margin:0;font-family:Elena,Georgia,serif}.m strong{font-family:Elena,Georgia,serif;font-weight:bold}.m ul li{margin-bottom:0}.m li{border-right:1px solid #eee;width:100%;padding:0}.m li a{color:#0168b8;font-size:.85em}.m li a:active,.m li a:focus,.m li a:hover:active,.m li a:hover:focus{color:#fff;background-color:#e53b2c;outline:0}.m li:first-child{width:75%}.m li:last-child{min-width:6.25em;border-right:0}.m li:last-child a{color:#fff;background-color:#e83b31}.c{padding:calc(1.5em + 3vh) 3.75em 0;border-bottom:1px solid #fff}.ilk:link,hr{background:0}.ct,.m ul{text-align:center}.i,.m li,.mt,.nf{float:left}img{outline:0}.cft .bt,a{text-decoration:none}.m li,.pc,h3{text-transform:uppercase}.iiml,.io .atoz,.io .std,.m li,.spc{list-style:none}.io p:first-child{font-size:1.25em;line-height:1.6em;position:initial;color:#444;font-style:normal}.io p:first-child strong{font-weight:700;font-family:Elena;font-style:normal}em strong,strong em{font-style:italic;font-weight:700}.hi .ilk{float:right;width:50%;margin:0 0 2em 3em;text-align:center}.hi .ilk img{border-radius:11px}a,body,caption,div,em,h1,h2,h3,header,html,img,li,nav,p,span,strong,sup,table,tbody,td,tfoot,th,thead,tr,ul{font-size:100%;vertical-align:baseline;margin:0;padding:0;outline:0;border:0;background:0}html{overflow-y:scroll;overflow-x:hidden;-webkit-text-size-adjust:100%}body{font-size:calc(1em + .25vw);line-height:170%;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;background:url(../images/background.png);background-image:linear-gradient(#fafafa,#d6d6d6)}a{color:#2297bf}.m a{font-size:.875em;padding:.5714em .7143em .5em}a:link{-webkit-tap-highlight-color:#e53b2c;/*padding:5px 0*/}a:active,a:focus{outline:2px dotted #e53b2c;background-color:#e53b2c;color:#fff;border-bottom:0}img{max-width:100%;height:auto}p{margin-bottom:1.375em}.bb{clear:left;margin-bottom:2.75em;padding-bottom:1.375em}.cls{column-count:2;column-gap:2.5em}.mt,.s th,body{font-family:Elena;font-weight:400;font-style:normal}.cft .bt,.iim dt,.m strong,.mmm dt,.mt dt,.nwl,.pc,.sc,.std::before,.ttt,.wsd,h3,h4,strong{font-family:Elena;font-style:normal;font-weight:700}em{font-family:Elena;font-weight:400;font-style:italic}.sh a,.sh small,h1,h2,i{font-family:Mija}.small-caps{-ms-font-feature-settings:"smcp" 1,"c2sc" 1;-o-font-feature-settings:"smcp" 1,"c2sc" 1;font-feature-settings:"smcp" 1,"c2sc" 1;letter-spacing:1px;font-variant:small-caps;text-transform:lowercase}.f .n li,.ig li,.l li{list-style:none}.bt[disabled],body{color:#333}.bb,.lsn,.s td,.s th{border-bottom:.08em solid #eee}.bi img{border:.08em solid #eee}.h,.m a,.s .i,main,nav{display:block}.h,.prf .so p,.x{position:relative}.hi .ilk,.iim,.iiml li,.l,.m,.mt dd,.prf,.spnf,body{overflow:hidden}.c a{border-bottom:2px solid #8cc8ff;color:#0168b8;transition:border-bottom .2s ease-in-out;padding:2px 0}.ilk:link,.ilk:link:hover{border:0}h1{font-size:2em;line-height:1.09375em;margin-bottom:1.25em}h2{font-size:1.625em;line-height:1.1923em}.h h1,h3{font-size:1.1em}h3{letter-spacing:.125em}.m a,.pc{letter-spacing:.08em}h2,h3{margin-bottom:1.375em}.spg h2{padding-top:1.539em}.x{z-index:5;width:100%;height:10em;padding:0 3.75em;margin:0 0 -4.5em -3.75em}.hsh,.ttt{font-size:1.5em}.ttt{padding:1em 0 0}.ioc,.ttt{clear:both}@media screen and (max-width:62.5em){body{overflow-x:hidden}h3{letter-spacing:.08em}.m,.pg{width:100%}.pg{border-bottom:0;border-radius:0}.m li,.m li:first-child{width:calc(12% + 1vw)}.m li:last-child{width:15%}.m a{font-size:calc(.6em + .25vw);padding:.6667em 0 .5833em}}@media screen and (max-width:48em){.m li,.m li:first-child,.m li:last-child{width:100%}.m{border-bottom:0}.m ul{display:flex;flex-wrap:nowrap;justify-content:space-around;padding:0 3.75em}.m li{border-right:0}.m a{font-size:.75em;padding:.41667em .8333em;border-bottom:.08em solid #eee}.hi{overflow:hidden}.cls{column-count:1}.hi .io,.iim .mt,.m,.s .spnf,.s .tnf{width:auto}.hi .io,.iim .nf{margin-right:0}.hi .io,.iim .mt,.s .spnf,.s .tnf{float:none}}@media screen and (max-width:37.5em){.hi .ilk,.hi .io{float:none;width:auto}.c,.m ul{padding:0 .9375em}.h{padding:0}.h{margin:0 auto}.c{padding-top:2.5em;padding-bottom:2.5em}.hi .io{margin-right:0}.hi .ilk{text-align:center;margin:.3125em 0 1.375em}.hi .ilk img{margin:0 auto;width:auto;height:auto}}blockquote,dd,del,dl,dt,footer,h4,ol,small{font-size:100%;vertical-align:baseline;margin:0;padding:0;outline:0;border:0;background:0}h3,h4,p{font-size:1.1em}a:hover{border-bottom:.08em solid #4db7db}header a:hover{border-bottom:0}.f,.n .k,.n li:last-child,.sc,.si,.ss:after,.v .ilk,.wsd{display:block}.n li,.scl a,.scl li{display:inline-block}.f,.ig li,.so,.ss li,.ssg,.ssg li a,.xf{position:relative}.c a:hover{border-bottom:2px solid #0168b8}.c a:active,.c a:focus{color:#fff;background-color:#e53b2c;border-bottom:2px solid #e53b2c !important}.ilk,.mt a,.ssg a{-webkit-tap-highlight-color:transparent}.h h1 a:focus,.h h1 a:hover,.ilk:active,.ilk:focus,.ilk:hover{background:0;border:0}p{line-height:1.6em}h4{line-height:1.375em}.wsl h4{margin-bottom:1.375em}.l h3,.ssg h2,.wsl h3{margin-bottom:0}.m a.active{background:#dbebf7;border:0;font-weight:700}.m a:hover{background:#dbebf7;border:0}.m li:last-child a:focus,.m li:last-child a:hover{background-color:#f94c42}.m li:last-child a:active{background-color:#d72a20}.sc,.ss a,.ssg h2{color:#2c92d0}.wrf{font-size:.875em;line-height:2em;float:left}.ig li,.ss li{line-height:0;float:left}.k{margin:.7857em 0 1.5714em}.ig{margin-right:-2.3%;display:flex;flex-direction:row;flex-wrap:wrap}.ig li{margin:0 4% 1em 0;width:21%;padding:0}.ig img,.ssg,.x{width:100%}.ig a:active{background:0}.ig img{box-sizing:border-box;height:auto;border-radius:50%;transition:border .3s}.ig img:focus,.ig img:hover{border-color:#227199}.x{z-index:5;height:11em;padding:0 3.75em;margin:0 0 -7.5em -3.75em}.ssg{z-index:4;margin:4.125em auto 4.125em -3.75em;padding:4.125em 3.75em 1.375em;border-bottom:.625em solid #e6fbff;background:#d4f7ff}.ssg h2{margin-bottom:0}.ss{list-style-type:none;zoom:1;padding:0;display:flex;flex-wrap:wrap}.ss a{border:0}.ss a:active{background-color:transparent}.ss li{text-align:center;overflow:visible;margin:0 0 2.5%;width:25%;list-style:none;padding:0}.ss li:hover .sc{opacity:0}.ss li:hover .si{transform:rotate(-5deg)}.ss li:active .si{transform:scale(.9)}.si{width:100%;height:19.0625em;background-size:11.25em;background-repeat:no-repeat;background-position:50% 50%}.sc{font-size:1.1875em;line-height:1.2;padding:.2632em .5263em;margin-top:-2.63157895em}.spg{padding:0 3.75em 7.5em}.hi .ilk:active,.hi .ilk:focus,.hi .ilk:hover,.hi .ilk:link{background:0;-webkit-tap-highlight-color:transparent}.bt,.f a,.si{transition:all .3s}@media screen and (max-width:62.5em){.btt,.io .std,.scl,.wrf{float:none}.x{background-position:61.8% 50%,100% bottom,20% bottom}.ss li{width:33%}.n .k{margin:.5em .5em 1em}.btt{clear:both}}@media screen and (max-width:48em){.io .std{width:50%;padding:1.5% 2.5% 5.5%}.ig li{width:31.3%}.m a.active,.m a:hover,.v{border-bottom:.08em solid #eee}}@media screen and (max-width:45.3125em){.x{background-position:38.2% 50%,100% bottom,20% bottom}.si{background-size:9.375em}.sc{font-size:1em}}@media screen and (max-width:38.125em){.io .std{width:61.8%}}@media screen and (max-width:37.5em){.spg{padding:0 .9375em 2.5em}.ss li{width:50%}.ss li:nth-child(2n+1){clear:left}.ss li:active .si,.ss li:hover .si{transform:none}.si{background-size:10.625em}.ig li{width:48%}}@media screen and (max-width:26.25em){.x{background-position:19.1% 50%,100% bottom,20% bottom}.si{height:15.9375em;background-size:7.5em}}.m ul{display:grid;grid-template-columns:1fr 1fr 1fr}.m li,.m li:first-child,.m li:last-child{width:auto}.events{min-height:110px;width:100%}.events ul{list-style:none;transition:height .2s ease-in}.events ul{box-sizing:border-box;display:grid;max-width:100%;grid-template-columns:repeat(4,1fr);padding:.8em 0;grid-gap:.1em;width:100%;justify-items:center;justify-content:center;background:#f0ead6}.events li.current{background-color:#fff}.events li{transition:all .2s ease-in;border-radius:11px}@media all and (min-width:651px){.events li{padding:.25em}.events ul{padding:.8em .65em}}.events li:hover{background-color:#fafafa}li.current{background-color:#f0ead6;box-shadow:0 1px 1px 0 #ccc}@media all and (min-width:46em){header.h{grid-template-columns:1fr;justify-items:center;grid-gap:.25em}header.h h1{width:auto;text-align:left}header.h h1 img{min-width:200px}.events{margin-bottom:0;width:100%}.events ul{padding:.85em 1em .5em 1em;grid-gap:1.5em;width:100%}}@media all and (min-width:850px){.m li:first-child{display:block}}@media all and (min-width:816px){.m ul{display:flex;justify-content:space-around}header.h{grid-template-columns:150px 1fr;margin-bottom:1.25em;margin-top:0;padding-right:3.75em;padding-left:3.75em}header.h h1{justify-self:start;margin:0}header.h h1 img{min-width:70px}.events ul{background-color:#fff;grid-gap:1em;grid-template-columns:repeat(4,1fr);padding:.85em 0 .5em 0}.events li.current{background-color:#f0ead6}.events li:hover{background-color:#f8f5ec}.m li,.m li:first-child,.m li:last-child{width:100%}}@media all and (min-width:70em){header.h h1 img{min-height:60px}header.h{grid-template-columns:300px 1fr;grid-gap:1.75em;margin-bottom:.35em}header.h h1 img{min-width:210px}.pg{width:60em}}a.skip-main{left:-999px;position:absolute;top:auto;width:1px;height:1px;overflow:hidden;z-index:-999}.toronto .pg{border-color:#90d3d0}.toronto .f{background-image:url(../images/footer.png);background-color:#f2fffe}.sf .pg{border-color:#2297bf}.sf .f{background-image:url(../images/footer.png);background-color:#ebf9ff}.ny .pg{border-color:#329b47}.ny .f{background-image:url(../images/smashingconf-ny-footer.png);background-color:#e0efd7}.ny .x{z-index:5;width:100%;height:11em;padding:0 3.75em;margin:0 0 -4.5em -3.75em;background:url(https://smashingconf.com/ny-2015/assets/images/ny-skyline.gif) 50% bottom no-repeat}.ny .ssg{background-color:#c5eaf9}.freiburg .pg{border-color:#ffcd08}.freiburg .f{background-image:url(../images/smashingconf-freiburg-footer.png);background-color:#f0ead6}</style>
  <link rel="preload" href="/assets/styles/2019.min.css" as="style" onload="this.rel='stylesheet'" />
  <link rel="preload" href="/assets/styles/ticket-widget.css" as="style" onload="this.rel='stylesheet'" />
  <link rel="manifest" href="<?php echo url('manifest.json') ?>" />
</head>
<body class="freiburg">
<a href="#main-content" class="skip-main">Skip to main content</a>
<div class="pg">

<header class="h" role="banner">
    <h1><a href="/" title="Return to the homepage">	<picture>
            <source media="(max-width: 815px)" srcset="https://www.smashingconf.com/assets/images/logo.svg">
            <source media="(min-width: 1100px)" srcset="https://www.smashingconf.com/assets/images/logo.svg">
			<img src="https://www.smashingconf.com/assets/images/logo--small.svg" alt="Smashing Magazine">
		</picture></a></h1>
    <nav class="events">
    <ul>
    <li class="current">
        <a href="https://www.smashingconf.com">
            <picture>
                <source media="(min-width: 650px)" srcset="https://www.smashingconf.com/imgs/fr-nav.svg">
                <img width="200" height="236" src="https://www.smashingconf.com/imgs/nav/heads/fr-head.svg" alt="Freiburg, Sep 10-11">
            </picture>
        </a>
    </li>
    <li>
        <a href="https://www.smashingconf.com/ny-2018/">
            <picture>
                <source media="(min-width: 650px)" srcset="https://www.smashingconf.com/imgs/ny-nav.svg">
                <img width="200" height="236" src="https://www.smashingconf.com/imgs/nav/heads/ny-head.svg" alt="New York, Oct 23-24">
            </picture>
        </a>
    </li>
    <li>
        <a href="https://www.smashingconf.com/sf-2019/">
            <picture>
                <source media="(min-width: 650px)" srcset="https://www.smashingconf.com/imgs/san-fran-nav.svg">
                <img width="200" height="236" src="https://www.smashingconf.com/imgs/nav/heads/san-fran-head.svg" alt="SF, Apr 16-17">
            </picture>
        </a>
    </li>
    <li>
        <a href="https://www.smashingconf.com/toronto-2019/">
            <picture>
                <source media="(min-width: 650px)" srcset="https://www.smashingconf.com/imgs/to-nav.svg">
                <img width="200" height="236" src="https://www.smashingconf.com/imgs/nav/heads/to-head.svg" alt="Toronto, Jun 25–26">
            </picture>
        </a>
    </li>   
</ul>
</nav>
</header>
