<div class="navbar-default">
    <div class="container">
        <div class="navbar-header">
            <h1>
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">GrowByData</a>
            </h1>
            <div class="gbd-top-btn">
                <button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle collapsed" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>

        <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             =>  2,
                'container'         => 'nav',
                'container_class'   => 'collapse navbar-collapse bs-navbar-collapse gbd-nav navbar-right',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav top-menu',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
    </div>
</div>