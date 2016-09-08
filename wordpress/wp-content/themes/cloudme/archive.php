<?php

get_header();

if(cloudme_theme_option( "bg_head" )) { $bg = 'style=background-image:url(' . cloudme_theme_option( "bg_head" ) . ');'; }
?>

<div class="page-top" <?php echo esc_attr($bg); ?>>
<!--  MESSAGES ABOVE HEADER IMAGE -->
<div class="message blog-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 columns">
                <div class="message-intro">
                    <span class="message-line"></span>
                        <p><?php esc_html_e('Blog', 'cloudme'); ?></p>
                    <span class="message-line"></span>
                </div>
                <h1>
                  <?php
                    if ( is_day() ) :
                      printf( esc_html__( 'Daily Archives: %s', 'cloudme' ), get_the_date() );

                    elseif ( is_month() ) :
                      printf( esc_html__( 'Monthly Archives: %s', 'cloudme' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'cloudme' ) ) );

                    elseif ( is_year() ) :
                      printf( esc_html__( 'Yearly Archives: %s', 'cloudme' ), get_the_date( _x( 'Y', 'yearly archives date format', 'cloudme' ) ) );

                    else :
                      esc_html_e( 'Archives', 'cloudme' );

                    endif;
                  ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<!--  END OF MESSAGES ABOVE HEADER IMAGE -->
</div>
<!--  END OF HEADER -->

<div class="sectionarea blog">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <?php if(have_posts()) :

                    while ( have_posts()): the_post();                        

                    get_template_part( 'content', get_post_format() ) ;

                    endwhile;?>

                    <?php else: ?>

                    <h1><?php esc_html_e('Nothing Found Here!', 'cloudme'); ?></h1>

                <?php endif ?>
                <nav>
                    <ul class="pagination">
                        <?php echo cloudme_pagination(); ?>
                    </ul>
                </nav>

            </div>

            <div class="col-md-3">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>    
</div>
<!-- content close -->
<?php get_footer(); ?>