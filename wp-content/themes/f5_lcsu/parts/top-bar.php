<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="top-bar-container contain-to-grid">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area top-bar-<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>">
            
            <li class="name">
                <h1 class="hide"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <a href="http://lscu.coop" title="League of Southeastern Credit Unions & Affiliates"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lscu.png" alt="<?php echo $blog_title = get_bloginfo('name'); ?>" /></a>
            </li>
            <li class="name second">
                <h1 class="hide"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <a href="http://cuna.org" title="Credit Union National Association"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cuna.png" alt="<?php echo $blog_title = get_bloginfo('name'); ?>" /></a>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
        </section>
    </nav>
</div>
