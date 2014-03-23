                <footer class="footer">
                    <div class="footer-links">
                        <div class="row">
                            <div class="large-3 medium-3 columns">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home" rel="home">
                                    <img src="<?php echo lseafricasummit_images() ?>/logo.png" class="menu-logo" alt="LSE Africa Summit">
                                </a>
                            </div>
                            <div class="large-9 medium-9 columns">
                                <?php lseafricasummit_footer_nav() ?>
                            </div>
                        </div>
                    </div>

                    <div class="row footer-copyright text-center">
                        <small>&copy; <?php bloginfo( 'name' ); ?>. Built with <span class="fa fa-heart"></span> by <a href="//www.github.com/MrSaints/LSE-Africa-Summit" target="enactus">Ian Lai</a>.</small>
                    </div>
                <footer>
            </section>

            <a class="exit-off-canvas"></a>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>
</html>