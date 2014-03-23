<?php get_header() ?>

<div class="row text-center hero js-valign">
    <div class="large-8 large-centered columns">
        <h1 class="hero-title"><?php bloginfo( 'name' ); ?></h1>
        <h2 class="hero-subtitle">4 &ndash; 5th April 2014, London</h2>
        <a href="#" class="button hero-action">Register Now</a>
    </div>
</div>

<div class="row contributors text-center">
    <div class="large-2 columns">
        <h6 class="contributors-title">Made Possible By</h6>
    </div>
    <div class="large-10 columns">
        <ul class="contributors-list large-block-grid-8 medium-block-grid-4 small-block-grid-2">
            <li><a href="//www.zenithbank.com" target="_blank"><img src="<?php echo lseafricasummit_images() ?>/logos/Zenith.png" alt=""></a></li>
            <li><a href="//www.prudential.co.uk" target="_blank"><img src="<?php echo lseafricasummit_images() ?>/logos/Prudential.png" alt=""></a></li>
            <li><a href="//www.africa.airtel.com/wps/wcm/connect/africarevamp/Nigeria/" target="_blank"><img src="<?php echo lseafricasummit_images() ?>/logos/Airtel.png" alt=""></a></li>
            <li><a href="//www.lse.ac.uk/internationalDevelopment/home.aspx" target="_blank"><img src="<?php echo lseafricasummit_images() ?>/logos/LSE-ID.png" alt=""></a></li>
            <li><a href="//www.africanbusinessmagazine.com" target="_blank"><img src="<?php echo lseafricasummit_images() ?>/logos/Africa-Business.png" alt=""></a></li>
            <li><a href="//www.afrimind.org" target="_blank"><img src="<?php echo lseafricasummit_images() ?>/logos/AfriMind.png" alt=""></a></li>
            <li><a href="//www.eaecc.com" target="_blank"><img src="<?php echo lseafricasummit_images() ?>/logos/AllAfrica.png" alt=""></a></li>
            <li><a href="//www.thisisafricaonline.com" target="_blank"><img src="<?php echo lseafricasummit_images() ?>/logos/This-is-Africa.png" alt=""></a></li>
        </ul>
    </div>
</div>

<div class="twitter">
    <div class="row">
        <div class="large-12 columns text-center">
            <i class="fa fa-twitter"></i>
            <ul id="js-twitter" class="twitter-feed">
                <li><h4 class="twitter-tweet">Loading Tweets...</h4></li>
            </ul>
            <a href="//twitter.com/LSEAfricaSummit" class="twitter-follow button" target="twitter">Follow Us</a>
        </div>
    </div>
</div>

<?php get_footer() ?>