<?php if ( has_nav_menu( 'primary' ) ) : ?>
    <nav>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class'     => 'primary-menu',
            'container_class' => 'wrap'
        ) );
        ?>
    </nav>
<?php endif; ?>

<!--<nav>-->
<!--    <div class="wrap">-->
<!--        <ul>-->
<!--            <li>Home</li>-->
<!--            <li>Blog</li>-->
<!--            <li>Shop</li>-->
<!--            <li>Contact</li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</nav>-->
