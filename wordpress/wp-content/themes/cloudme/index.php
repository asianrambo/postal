<?php

get_header();


?>

<div class="page-top">
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
                <h1><?php esc_html_e('THE LATEST CLOUDME NEWS', 'cloudme'); ?></h1>
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

                <?php if(have_posts()) : ?>  

                    <?php 

                    $args = array(    

                      'paged' => $paged,

                      'post_type' => 'post',

                    );

                    $wp_query = new WP_Query($args);

                    while ($wp_query -> have_posts()): $wp_query -> the_post();                        

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