<?php snippet('newsletter') ?>
<?php if($page->uid() != 'sponsors') snippet('sponsors') ?>
</div>
<footer class="f">
  <div class="wrf">
    <em>With a commitment to quality content for the design community.</em>
    <?php echo kirbytext($site->copyright()) ?>
    <nav class="n">
      <ul>
        <li><a href="<?php echo url('codeofconduct') ?>">Code of Conduct</a></li>
        <li><a href="<?php echo url('about') ?>">About</a></li>
        <li><a href="<?php echo url('about#prevconf') ?>">Archive</a></li>
        <li><a href="<?php echo url('contact') ?>">Contact us</a></li>
        <li><a href="<?php echo url('accessibility') ?>">Accessibility Statement</a></li>
        <li><a href="<?php echo url('terms') ?>">Terms</a></li>
        <li><a href="<?php echo url('imprint') ?>">Impressum</a></li>
        <li class="k"><a href="//getkirby.com">Made with Kirby and &hearts;</a></li>
        <li class="k"><a class="btt" href="#top">Back to top &uarr;</a></li>
      </ul>
    </nav>
  </div>
</footer>
<script>
if (navigator.serviceWorker && !navigator.serviceWorker.controller) { navigator.serviceWorker.register('/service-worker.js'); }
</script>
<script>/*! loadCSS: load a CSS file asynchronously. [c]2016 @scottjehl, Filament Group, Inc. Licensed MIT */(function(a){var b=function(c,k,d){var l=a.document;var m=l.createElement("link");var e;if(k){e=k}else{var i=(l.body||l.getElementsByTagName("head")[0]).childNodes;e=i[i.length-1]}var f=l.styleSheets;m.rel="stylesheet";m.href=c;m.media="only x";function j(n){if(l.body){return n()}setTimeout(function(){j(n)})}j(function(){e.parentNode.insertBefore(m,(k?e:e.nextSibling))});var h=function(o){var n=m.href;var p=f.length;while(p--){if(f[p].href===n){return o()}}setTimeout(function(){h(o)})};function g(){if(m.addEventListener){m.removeEventListener("load",g)}m.media=d||"all"}if(m.addEventListener){m.addEventListener("load",g)}m.onloadcssdefined=h;h(g);return m};if(typeof exports!=="undefined"){exports.loadCSS=b}else{a.loadCSS=b}}(typeof global!=="undefined"?global:this));loadCSS( '/assets/styles/2019.min.css' );</script>

<script>/*! onloadCSS: adds onload support for asynchronous stylesheets loaded with loadCSS. [c]2016 @zachleat, Filament Group, Inc. Licensed MIT */;function onloadCSS(b,d){var c;function a(){if(!c&&d){c=true;d.call(b)}}if(b.addEventListener){b.addEventListener("load",a)}if(b.attachEvent){b.attachEvent("onload",a)}if("isApplicationInstalled" in navigator&&"onloadcssdefined" in b){b.onloadcssdefined(a)}};</script>
<script>/*! CSS rel=preload polyfill. Depends on loadCSS function. [c]2016 @scottjehl, Filament Group, Inc. Licensed MIT  */(function(a){if(!a.loadCSS){return}var b=loadCSS.relpreload={};b.support=function(){try{return a.document.createElement("link").relList.supports("preload")}catch(d){return false}};b.poly=function(){var d=a.document.getElementsByTagName("link");for(var e=0;e<d.length;e++){var f=d[e];if(f.rel==="preload"&&f.getAttribute("as")==="style"){a.loadCSS(f.href,f);f.rel=null}}};if(!b.support()){b.poly();var c=a.setInterval(b.poly,300);if(a.addEventListener){a.addEventListener("load",function(){a.clearInterval(c)})}if(a.attachEvent){a.attachEvent("onload",function(){a.clearInterval(c)})}}}(this));</script>
<script>(function(a){var b=function(f,c){var e=a.document.getElementsByTagName("script")[0];var d=a.document.createElement("script");d.src=f;d.async=true;e.parentNode.insertBefore(d,e);if(c&&typeof(c)==="function"){d.onload=c}return d};if(typeof module!=="undefined"){module.exports=b}else{a.loadJS=b}}(typeof global!=="undefined"?global:this));loadJS('/assets/scripts/j.js');</script>

<link rel="prefetch" href="https://smashingconf.com/assets/styles/tito.js">
<link rel="preload" href="https://smashingconf.com/assets/styles/tito.js">
<link rel="prerender" href="https://smashingconf.com/assets/styles/tito.js">

</body>
</html>
