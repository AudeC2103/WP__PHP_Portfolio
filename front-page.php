<?php get_header(); ?>

<header>
    <div class="home__header">
        <div class="home__header_presentation">
            <h1><?php the_field('home__header_presentation_title'); ?></h1>
            <p><?php the_field('home__header_presentation_subtitle'); ?></p>
        </div>
        <div class="home__header_bloc">
            <div class="home__header_bloc_1">
                <h2><?php the_field('home__header_bloc_1_title'); ?></h2>
                <p><?php the_field('home__header_bloc_1_subtitle'); ?></p>
                <?php $button_group = get_field('home__header_bloc_1_button');
                    if( $button_group && is_array($button_group) ): ?>
                    <div class="home__header_bloc_1_button">
                        <a href="<?php echo esc_url( $button_group['home__header_bloc_1_button_link'] ); ?>" >
                        <?php echo esc_html( $button_group['home__header_bloc_1_button_text'] ); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="home__header_bloc_2">
                <h2><?php the_field('home__header_bloc_2_title'); ?></h2>
                <p><?php the_field('home__header_bloc_2_subtitle'); ?></p>
                <?php $button_group = get_field('home__header_bloc_2_button');
                    if( $button_group && is_array($button_group) ): ?>
                    <div class="home__header_bloc_1_button">
                        <a href="<?php echo esc_url( $button_group['home__header_bloc_2_button_link'] ); ?>" >
                        <?php echo esc_html( $button_group['home__header_bloc_2_button_text'] ); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<body>
    <div class="home__body_calltoaction">
            <h3 class><?php the_field('home__body_calltoaction_title'); ?></h2>
            <p><?php the_field('home__body_calltoaction_subtitle'); ?></p>
    </div>
    <div class="home__body_image">
        <img src="<?php the_field('home__body_image'); ?>"/>
    </div>
    <div class="home__body_softkills">
        <h2><?php the_field('home__body_softkills_title'); ?></h2>
        <p><?php the_field('home__body_softkills'); ?></p>
    </div>
</body>



<?php get_footer(); ?>