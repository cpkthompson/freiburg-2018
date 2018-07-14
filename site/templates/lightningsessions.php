<?php snippet('header') ?>
<?php snippet('menu') ?>
<section class="c default">
  <h1><?php echo html($page->title()) ?></h1>
  <?php if ($page->intro() != ''): ?>
    <div class="io">
      <?php echo kirbytext($page->intro()) ?>
    </div>
  <?php endif ?>
  <?php if ($page->text() != ''): ?>
    <div class="tx">
      <?php echo kirbytext($page->text()) ?>
    </div>
  <?php endif ?>
</section>

<!-- Charis: I will be moving this to a seperate include-->
<section class="nl c">

  <!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"> -->
  <style type="text/css">
  /* nl = newsletter */
  .nl {
    background: #329b47;
    color: #FFF;
    padding-bottom: calc(1em + 3vh);
    text-align: center;
    display: flex;
  }

  .nl input, .nl .button {
    border-radius: 11px;
    background: #FFF;
    border: 0;
    font-size: 1em;
    padding: .75em 1em;
    flex: 1 0 auto;
    width: 100%;
    box-sizing: border-box;
    margin: 0;
  }

  .nl .button {
    font-weight: bold;
    color: #FFF;
    background: transparent;
    margin-top: 1em;
    border: 3px solid #fff;

  }

  .nlw {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  @media screen and (min-width: 27.25em) {
    .nl .button, .nl input {
      width: auto;
    }

    .nl .button {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      margin-top: 0;
      color: #4db7db;
      background: #FFF;
      border: 0;
      border-left: 1px solid #ddd;
      margin-left: -5px;
    }

    .nl input {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }

    .sct, .nlw {
      padding: 0 1em;
    }
  }

  @media screen and (min-width: 45.3125em) {
    .nl form {
      display: flex;
      justify-content: center;
    }
  }

  .nl #mc_embed_signup {
    width: 100%;
  }

  /* sct = smashingcat */
  .sct img {
    min-width: 250px;
    max-width: 280px;
  }

  .nl .mc-field-group {
    margin: 0 auto;
  }

  .nl h2 {
    margin-bottom: 0.69em;
  }

  .nl input::placeholder {
    font-style: italic;
    color: #777777;
  }

  div#mc_embed_signup div.mce_inline_error {
    background: none;
    color: #ffbcbc;
  }

  .nl .response {
    margin-top: 1.375em;
  }
  </style>

  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='MMERGE1';ftypes[1]='text';fnames[2]='MMERGE2';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';fnames[4]='MMERGE4';ftypes[4]='text';fnames[5]='MMERGE5';ftypes[5]='text';fnames[6]='MMERGE6';ftypes[6]='text';fnames[7]='MMERGE7';ftypes[7]='text';fnames[8]='MMERGE8';ftypes[8]='text';fnames[9]='MMERGE9';ftypes[9]='text';fnames[10]='MMERGE10';ftypes[10]='text';fnames[11]='MMERGE11';ftypes[11]='text';fnames[12]='MMERGE12';ftypes[12]='text';fnames[13]='MMERGE13';ftypes[13]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <!--End mc_embed_signup-->


  <div id="mc_embed_signup">
  <form action="https://smashingmagazine.us1.list-manage.com/subscribe/post?u=16b832d9ad4b28edf261f34df&amp;id=dd3c645e21" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>


      <div class="sct">
        <img src="/assets/images/supercat.svg" alt="A Smashing cat surrounded by planets">
      </div>
      <div class="nlw">
        <h2>Smashing Conference Newsletter</h2>
        <p>Want to stay updated? <br>Set a reminder for our next conferences!</p>
        <div id="mc_embed_signup_scroll">
          <div class="mc-field-group">
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your email">
            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
          </div>
          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_16b832d9ad4b28edf261f34df_2415c284b8" tabindex="-1" value=""></div>
        </div>
      </div>
    </form>

  </div>
  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <!--End mc_embed_signup-->
</section>


<?php snippet('footer') ?>
