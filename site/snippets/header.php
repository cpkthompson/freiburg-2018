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
    <style>header.h{margin:0;display:grid;grid-template-columns:1fr;align-items:center;justify-items:center;margin:0}header.h h1{width:100%;text-align:center;margin:1em 0;margin:1em 0}header.h h1 img{max-width:calc(55% - 3.5vw)}@media (min-width:600px){header.h h1 img{max-width:31%}}.m li:first-child{display:none;width:75%}.ilk:link,hr{background-position:0 0;background-repeat:initial initial;background:0 0}.ct,.m ul{text-align:center}.i,.m li,.mt,.nf{float:left}img{outline:0;outline:0;max-width:100%;height:auto}.mt dd,.prf .so p::before,.spnf h3{white-space:nowrap}a{text-decoration:none;color:#2297bf}.m li,.pc,h3{text-transform:uppercase}.iiml,.io .atoz,.io .std,.m li,.spc{list-style:none}a,body,caption,div,em,h1,h2,h3,header,html,img,li,nav,p,span,strong,sup,table,tbody,td,tfoot,th,thead,tr,ul{font-size:100%;vertical-align:baseline;margin:0;padding:0;outline:0;border:0;background-position:0 0;background-repeat:initial initial;margin:0;padding:0;outline:0;border:0;background:0 0}html{overflow-y:scroll;overflow-x:hidden;-webkit-text-size-adjust:100%}body{line-height:170%;-webkit-font-smoothing:antialiased;font-size:calc(1em + .25vw);-moz-osx-font-smoothing:grayscale;background:url(../images/background.png);background-image:linear-gradient(#fafafa,#d6d6d6)}a{color:#2297bf;color:#2297bf}a:link{-webkit-tap-highlight-color:#e53b2c;padding:5px 0;-webkit-tap-highlight-color:#e53b2c;padding:5px 0}.c .twitter:hover{border-color:#e53b2c;border-color:#e53b2c}img{max-width:100%;height:auto;outline:0}.mt,.s th,body{font-family:Elena;font-weight:400;font-style:normal}.cft .bt,.iim dt,.m strong,.mmm dt,.mt dt,.nwl,.pc,.sc,.std::before,.ttt,.wsd,h3,h4,strong{font-family:Elena;font-style:normal;font-weight:700}em{font-family:Elena;font-weight:400;font-style:italic}.sh a,.sh small,h1,h2,i{font-family:Mija}.small-caps{letter-spacing:1px;font-variant:small-caps;text-transform:lowercase;-ms-font-feature-settings:"smcp" 1,"c2sc" 1;-o-font-feature-settings:"smcp" 1,"c2sc" 1;font-feature-settings:"smcp" 1,"c2sc" 1}body{color:#333;font-size:calc(1em + .25vw);line-height:170%;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;background:url(../images/background.png);background-image:linear-gradient(#fafafa,#d6d6d6)}.sh small{color:#eee;color:#eee}.hsh a{color:#e83b31;color:#e83b31}.s,.sh,hr{border-top-width:.08em;border-top-style:solid;border-top-color:#eee;border-top:.08em solid #eee}.bb,.lsn,.s td,.s th{border-bottom-width:.08em;border-bottom-style:solid;border-bottom-color:#eee;border-bottom:.08em solid #eee}.bi img{border:.08em solid #eee;border:.08em solid #eee}.h,.m a,.s .i,main,nav{display:block}.h,.prf .so p,.x{position:relative}.hi .ilk,.iim,.iiml li,.l,.m,.mt dd,.prf,.spnf,body{overflow:hidden}.ilk:link,.ilk:link:hover{border:0;border:0}h1{font-size:2em;line-height:1.09375em;margin-bottom:1.25em}h2+h3{margin-top:-1.5em}.h h1,h3{font-size:1.1em}.m a,.pc{letter-spacing:.08em;letter-spacing:.08em}h2,h3{margin-bottom:1.375em}.spg h2{padding-top:1.539em}.tk h2{margin-bottom:.75em;margin-bottom:.75em}.prf h3{margin-top:2.5em;margin-bottom:.625em;margin-bottom:.625em}.pg{z-index:3;margin:0 auto;border-width:.3125em 0 0;border-top-style:solid;border-top-color:#227199;background-color:#fff;box-shadow:rgba(0,0,0,.0470588) 0 0 .625em .08em;background-position:initial initial;background-repeat:initial initial;margin:0 auto;border:0;border-top:.3125em solid #227199;background:#fff;box-shadow:0 0 .625em .08em rgba(0,0,0,.05)}.m ul{padding:0 3.75em;padding:0 3.75em;display:grid;grid-template-columns:1fr 1fr 1fr}.m{border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#eee;margin:0;border-bottom:1px solid #eee;margin:0}.m li{border-right-width:1px;border-right-style:solid;border-right-color:#eee;width:100%;border-right:1px solid #eee}.m li a{color:#006fc6;font-size:.85em;color:#006fc6;font-size:.85em}.m li a:active,.m li a:focus,.m li a:hover:active,.m li a:hover:focus{color:#fff;background-color:#e53b2c;outline:0;color:#fff;background-color:#e53b2c}.m li:first-child{width:75%;display:none}.m li:last-child{min-width:6.25em;border-right-width:0;border-right:0}.m li:last-child a{color:#fff;background-color:#e83b31;color:#fff;background-color:#e83b31}.m a{font-size:.875em;padding:.5714em .7143em .5em;font-size:.875em;padding:.5714em .7143em .5em}.iiml li,.mt dd{padding-bottom:1.375em;text-overflow:ellipsis}.i img{margin-top:.3125em;margin-top:.3125em}.mt{width:23%;padding-top:1.375em}.iiml{padding:2.75em 0 0;padding:2.75em 0 0 0}.iiml li{margin-bottom:2.75em}.io p:first-child{font-size:1.25em;line-height:1.6em;color:#444;font-style:normal;position:initial;color:#444}.io p:first-child strong{font-weight:700;font-family:Elena;font-style:normal}em strong,strong em{font-style:italic;font-weight:700}.hi .ilk{float:right;width:50%;margin:0 0 2em 3em;text-align:center;margin:0 0 2em 3em}.hi .ilk img{border-top-left-radius:11px;border-top-right-radius:11px;border-bottom-right-radius:11px;border-bottom-left-radius:11px;border-radius:11px}.hi .ill{padding-bottom:6.5em;position:relative;display:flex;flex-flow:column;align-items:center}.img-ill{position:absolute;bottom:0;bottom:0}.img-photo{border-top-left-radius:11px;border-top-right-radius:11px;border-bottom-right-radius:11px;border-bottom-left-radius:11px;border-radius:11px}.hsh,.ttt{font-size:1.5em}.prf .iim{margin-bottom:5.5em}.prf .mt{padding-top:.3125em;padding-top:.3125em}.sh{margin-top:1.6923em;padding-top:1.6923em}.s td,.s th{vertical-align:top;padding:2.75em 0;padding:2.75em 0}.s th{padding:2.75em 1.375em;width:5%}.s .tx th{padding:1.375em}.spnf h3{margin-bottom:1.375em}.spnf img{max-width:12.5em;max-height:12.5em}.cft tr:nth-child(2n){background-color:#f5f5f5;background-color:#f5f5f5}.att tr:nth-child(2n){background-color:#d5eff9;background-color:#d5eff9}.konami-image{position:fixed;bottom:30px;left:-500px;z-index:9}@media screen and (max-width:62.5em){body{overflow-x:hidden}.m,.pg{width:100%}.pg{border-bottom-width:0;border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:0;border-bottom:0;border-radius:0}.m li,.m li:first-child{width:calc(12% + 1vw)}.m li:last-child{width:15%}.m a{padding:.6667em 0 .5833em;font-size:calc(.6em + .25vw);padding:.6667em 0 .5833em}.hsh{margin-left:0;font-size:1em;margin-left:0}}@media only screen and (max-width:52.5em){.att td:last-child::after{content:'';content:""}}@media screen and (max-width:48em){.m li,.m li:first-child,.m li:last-child{width:100%}.m{border-bottom-width:0;border-bottom:0}.m ul{padding:0 3.75em;display:flex;flex-wrap:nowrap;justify-content:space-around;padding:0 3.75em}.m li{border-right-width:0;border-right:0}.m a{font-size:.75em;padding:.41667em .8333em;border-bottom-width:.08em;border-bottom-style:solid;border-bottom-color:#eee;font-size:.75em;padding:.41667em .8333em;border-bottom:.08em solid #eee}.hi{overflow:hidden}.iim .i{width:29%;margin-right:4%}.iim .nf{width:66%}.iim .mt{clear:both;margin-left:33%;padding-top:1.375em}.s h3{white-space:normal}.hi .io,.iim .mt,.m,.s .spnf,.s .tnf{width:auto}.hi .io,.iim .nf{margin-right:0;margin-right:0}.hi .io,.iim .mt,.s .spnf,.s .tnf{float:none}}@media screen and (max-width:37.5em){.hi .ilk,.hi .io{float:none;width:auto}.c,.m ul{padding:0 .9375em;padding:0 .9375em}.h{padding:0;padding:0;margin:0 auto}.h{margin:0 auto;padding:0;margin:0 auto}.hi .io{margin-right:0;margin-right:0}.hi .ilk{text-align:center;margin:.3125em 0 1.375em;margin:.3125em 0 1.375em}.hi .ilk img{margin:0 auto;width:auto;height:auto;margin:0 auto}.iim .i{float:right;width:7.5em;height:7.5em;margin:0 .125em 1.375em 1.875em;margin:0 .125em 1.375em 1.875em}.iim .nf{float:none;width:auto}.iim .mt{width:auto;margin-left:0;margin-left:0}.sh a,.sh span{display:block;border-bottom-width:.08em;border-bottom-style:solid;border-bottom-color:#eee;padding-bottom:.8462em;margin-bottom:.8462em;border-bottom:.08em solid #eee;padding-bottom:.8462em;margin-bottom:.8462em}.sh a:last-child,.sh span:last-child{border-bottom-width:0;padding-bottom:0;border-bottom:0;padding-bottom:0}.sh small{display:none}}.m ul{padding:0 3.75em;display:grid;grid-template-columns:1fr 1fr 1fr}.m li,.m li:first-child,.m li:last-child{width:auto}.mmm dd,.mr a,.scl a,.so .nf::before{white-space:nowrap}body{background-image:linear-gradient(#fafafa,#d6d6d6);background-position:initial initial;background-repeat:initial initial;font-size:calc(1em + .25vw);line-height:170%;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;background:url(../images/background.png);background-image:linear-gradient(#fafafa,#d6d6d6)}blockquote,dd,del,dl,dt,footer,h4,ol,small{font-size:100%;vertical-align:baseline;margin:0;padding:0;outline:0;border:0;background-position:0 0;background-repeat:initial initial;margin:0;padding:0;outline:0;border:0;background:0 0}h3,h4,p{font-size:1.1em}a:hover{border-bottom-width:.08em;border-bottom-style:solid;border-bottom-color:#4db7db;border-bottom:.08em solid #4db7db}header a:hover{border-bottom-style:none;border-bottom:none}.bt[disabled]:hover{color:#333;color:#333}.scl a,.scl a:hover{color:transparent}.f,.n .k,.n li:last-child,.sc,.si,.ss::after,.v .ilk,.wsd{display:block}.c a:hover{border-bottom-width:2px;border-bottom-style:solid;border-bottom-color:#006fc6;border-bottom:2px solid #006fc6}.ilk,.mt a,.ssg a{-webkit-tap-highlight-color:transparent}.h h1 a:focus,.h h1 a:hover,.ilk:active,.ilk:focus,.ilk:hover{border:0;background-position:0 0;background-repeat:initial initial;background:0 0;border:0}.wsl h4{margin-bottom:1.375em}.l h3,.ssg h2,.wsl h3{margin-bottom:0;margin-bottom:0}.m a.active{background-color:#dbebf7;border:0;font-weight:700;background-position:initial initial;background-repeat:initial initial;background:#dbebf7;border:0}.m a:hover{background-color:#dbebf7;border:0;background-position:initial initial;background-repeat:initial initial;background:#dbebf7;border:0}.m li:last-child a:focus,.m li:last-child a:hover{background-color:#f94c42;background-color:#f94c42}.m li:last-child a:active{background-color:#d72a20;background-color:#d72a20}.f .n li:last-child{margin-top:1.5714em}.f .btt,.f .btt:hover{border-bottom-color:#227199;border-bottom-color:#227199}.f a:hover{color:#fff;background-color:#2c92d0;color:#fff;background-color:#2c92d0}.f .btt:hover{color:#fff;background-color:#227199;background-position:initial initial;background-repeat:initial initial;color:#fff;background:#227199}.sc,.ss a,.ssg h2{color:#2c92d0;color:#2c92d0}.scl a:focus,.scl a:hover{background-color:transparent;opacity:1}.ig img,.ssg,.x{width:100%}.ig img{box-sizing:border-box;height:auto;border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-right-radius:50%;border-bottom-left-radius:50%;transition:border .3s;-webkit-transition:border .3s;border-radius:50%;transition:border .3s}.ig img:focus,.ig img:hover{border-color:#227199;border-color:#227199}.ssg h2{margin-bottom:0;margin-bottom:0}.ss li:hover .sc{opacity:0}.ss li:hover .si{transform:rotate(-5deg)}.wsl .mt{padding-top:0;padding-top:0}.mr a{margin:0 .625em;margin:0 .625em}.mr a:first-child{margin-left:0;margin-left:0}.hsh a:active,.hsh a:focus,.hsh a:hover{border-color:#e83b31;border-color:#e83b31}.hi .ilk:active,.hi .ilk:focus,.hi .ilk:hover,.hi .ilk:link{-webkit-tap-highlight-color:transparent;background-position:0 0;background-repeat:initial initial;background:0 0}.l li h3{margin-bottom:0;margin-bottom:0}.l img{margin:1.25em 0 .625em;margin:1.25em 0 .625em}.mmm dd{text-overflow:ellipsis;overflow:hidden}.cft .bt:focus,.cft .bt:hover{border:.08em solid #ce9141;color:#c00;opacity:.9;border:.08em solid #ce9141;color:#c00;opacity:.9}.cft .sobt:active,.cft .sobt:focus,.cft .sobt:hover{color:#333;border:.08em solid #bababa;text-decoration:none;text-shadow:#ddd 0 .08em 0;cursor:pointer;background-color:#e8e8e8;box-shadow:rgba(136,136,136,.498039) 0 0 .3333em;background-position:initial initial;background-repeat:initial initial;color:#333;border:.08em solid #bababa;text-shadow:0 .08em 0 #ddd;background:#e8e8e8;box-shadow:0 0 .3333em rgba(136,136,136,.5)}.konami-animation{animation:konami-move 8s linear}@media screen and (max-width:48em){.v img{max-width:25em}.m a.active,.m a:hover,.v{border-bottom-width:.08em;border-bottom-style:solid;border-bottom-color:#eee}}@media screen and (max-width:37.5em){.ss li:nth-child(2n+1){clear:left}.f em{display:block;margin-bottom:.8333em}}@media screen and (max-width:26.25em){.cft td:first-child{display:inline;padding-right:0}.cft td:first-child::after{content:' •';color:#333}.cft td:nth-child(2){text-align:left;display:inline;margin-left:0}.cft td:nth-child(3){width:8em;padding-left:1.5em;padding-bottom:1em;vertical-align:bottom}}@media print{.hi .ilk,.iol{float:none}*{box-shadow:none;text-shadow:none;color:#000;color:#000}body{background-color:#fff;max-width:100%;background-position:initial initial;background-repeat:initial initial;background:#fff}h2,h3,h4{orphans:3;widows:3;page-break-after:avoid}.si,.x,img{page-break-inside:avoid}.pg{border-left-width:0;border-right-width:0;margin:0;width:100%;border-left:0;border-right:0;margin:0}.hsh,.m,.n,.scl,.spg{display:none}header h1{max-width:5em;margin-left:0;padding-left:0;margin-left:0;padding-left:0}.hi .ilk{display:block;margin:1em auto 2em}.ssg h2{text-align:center;margin:0 auto;margin:0 auto}.bb h2{font-size:1.1875em}}.m ul{padding:0 3.75em;display:grid;grid-template-columns:1fr 1fr 1fr}.m li,.m li:first-child,.m li:last-child{width:auto}.events{min-height:110px;width:100%;transition:all .2s ease-in;-webkit-transition:all .2s ease-in;transition:all .2s ease-in}.events ul{list-style-type:none;transition:height .2s ease-in;-webkit-transition:height .2s ease-in;transition:height .2s ease-in;box-sizing:border-box;display:grid;max-width:100%;grid-template-columns:repeat(4,1fr);padding:.8em 0;grid-gap:.1em;width:100%;justify-items:center;justify-content:center;background:#f0ead6}.events ul{box-sizing:border-box;max-width:100%;padding:.8em 0;width:100%;background-color:#f0ead6;background-position:initial initial;background-repeat:initial initial;list-style-type:none;transition:height .2s ease-in;display:grid;grid-template-columns:repeat(4,1fr);padding:.8em 0;grid-gap:.1em;justify-items:center;justify-content:center;background:#f0ead6}.events li.current{background-color:#fff;background-color:#fff}.events li{transition:all .2s ease-in;-webkit-transition:all .2s ease-in;border-top-left-radius:11px;border-top-right-radius:11px;border-bottom-right-radius:11px;border-bottom-left-radius:11px;transition:all .2s ease-in;border-radius:11px}@media (min-width:651px){.events li{padding:.25em}.events ul{padding:.8em .65em}}.events li:hover{background-color:#fafafa;background-color:#fafafa}li.current{background-color:#f0ead6;box-shadow:#ccc 0 1px 1px 0;background-color:#f0ead6;box-shadow:0 1px 1px 0 #ccc}@media (min-width:46em){header.h h1{width:auto;text-align:left}header.h h1 img{min-width:200px}.events{margin-bottom:0;width:100%}.events ul{padding:.85em 1em .5em;width:100%}}@media (min-width:850px){.m li:first-child{display:block}}@media (min-width:816px){header.h{margin-bottom:1.25em;margin-top:0;padding-right:3.75em;padding-left:3.75em}header.h h1{margin:0}header.h h1 img{min-width:70px}.events ul{background-color:#fff;padding:.85em 0 .5em}.events li.current{background-color:#f0ead6}.events li:hover{background-color:#f8f5ec}.m li,.m li:first-child,.m li:last-child{width:100%}}@media (min-width:70em){header.h h1 img{min-height:60px}header.h{margin-bottom:.35em}header.h h1 img{min-width:210px}.pg{width:60em}}.btn.btn-default.btn-waitlist,.tito-submit{cursor:pointer}a.skip-main{left:-999px;position:absolute;top:auto;width:1px;height:1px;overflow:hidden;z-index:-999}a.skip-main:active,a.skip-main:focus{color:#d33a2c;background-color:#fff;left:auto;top:auto;width:auto;height:auto;overflow:auto;padding:.5em 1em;text-align:center;font-size:1.2em;z-index:999;color:#d33a2c;background-color:#fff;padding:.5em 1em}#mc_embed_signup_scroll{display:flex;justify-content:center;flex-direction:column}@media screen and (min-width:27.25em){.nl .mc-field-group{display:flex}}@media screen and (min-width:49em){.nl form{display:flex;justify-content:center}}.nl #mc_embed_signup{width:100%}.sct img{min-width:230px;max-width:260px}.nl .mc-field-group{margin:0 auto;margin:0 auto}.nl h2{margin-bottom:.69em;margin-bottom:.69em}div#mc_embed_signup div.mce_inline_error{background-image:none;color:#ffbcbc;background-position:initial initial;background-repeat:initial initial;background:0 0;color:#ffbcbc}.nl .response{margin-top:1.375em}.event__highlights{color:#fff;text-shadow:rgba(0,0,0,.8) 1px 1px 1px;color:#fff;text-shadow:1px 1px 1px rgba(0,0,0,.8);padding-top:2.5em;padding-bottom:2.5em}.event__highlights{padding-top:2.5em;padding-bottom:2.5em;color:#fff;text-shadow:1px 1px 1px rgba(0,0,0,.8)}.event__highlights__image-grid .caption{clear:both;font-style:italic;font-size:.8em;padding:1em 0;color:#aaa;font-size:.8em;padding:1em 0;color:#aaa}.event__highlights__image-grid .caption a{color:#aaa;color:#aaa}.event__highlights__image-grid img{float:left;width:50%}@media screen and (min-width:44.375em){.event__highlights .row{margin:0 -1em;display:flex;flex-wrap:wrap;margin:0 -1em}}.event__highlights__cyb figcaption{font-style:italic;color:#9a97a9;color:#9a97a9}.event__highlights__cyb figcaption a{color:#9a97a9;color:#9a97a9}.event__highlights__cyb figcaption a:hover{color:#fff;color:#fff}.bg--navy a.cyb__img{border-bottom-style:none;border-bottom:none}.btn.btn--medium{padding:.75em 1em;font-size:calc(.9em + .1vw);padding:.75em 1em}.btn.btn--white{color:#2da2c5;margin-bottom:1em;text-shadow:#fff 3px 0,#fff 2px 0,#fff 1px 0,#fff -1px 0,#fff -2px 0,#fff -3px 0;background-color:#fff;transition:color .1s ease-out;-webkit-transition:color .1s ease-out;border:1px solid #fff;background-position:initial initial;background-repeat:initial initial;color:#2da2c5;text-shadow:3px 0 #fff,2px 0 #fff,1px 0 #fff,-1px 0 #fff,-2px 0 #fff,-3px 0 #fff;background:#fff;transition:color .1s ease-out;border:1px solid #fff}.btn--green:focus,.btn--green:hover{background-color:#41b14f;border:0;background-position:initial initial;background-repeat:initial initial;background:#41b14f;border:0}a.btn--white:focus,a.btn--white:hover{color:#d33a2c!important;color:#d33a2c!important}.videoWrapper embed,.videoWrapper object{position:absolute;top:0;left:0;width:100%;height:100%;top:0;left:0}.info p:last-child{margin-bottom:0;margin-bottom:0}.sf .pg{border-color:#2297bf;border-color:#2297bf}
    </style>
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
  
  <link rel="preload" href="/assets/styles/2019.min.css" as="style" onload="this.rel='stylesheet'" />
  <link rel="preload" href="/assets/styles/ticket-widget.css" as="style" onload="this.rel='stylesheet'" />
  <link rel="manifest" href="<?php echo url('manifest.json') ?>" />
</head>
<body class="ny">
<a href="#main-content" class="skip-main">Skip to main content</a>
<div class="pg">

<header class="h" role="banner">
    <h1><a href="https://smashingconf.com/sf-2019/" title="Return to the homepage">	<picture>
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
