<?php

/**
 * Front Page
 */

defined('ABSPATH') or die('No script kiddies please!');

get_header();


?>
<section id="fp" class="section high">
    <div class="container">
        <div id="fp-wr">
            <div id="headline" class="mq-wr">
                <?php
                $mq = mm_get_master_query('post', 10, true, 'blog');
                if ($mq->have_posts()) {
                    while ($mq->have_posts()) {
                        $mq->the_post();






                ?>
                        <div class="mq">
                            <div class="mq-top">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    the_post_thumbnail('full', array('class' => 'mq-img'));
                                    ?>
                                </a>
                            </div>
                            <div class="mq-bot">
                                <div class="mq-rating-wr">
                                    <?php
                                    echo mm_get_stars();
                                    ?>
                                </div>
                                <h3 class="head smallest fw500">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        the_title();
                                        ?>
                                    </a>
                                </h3>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php

get_footer();
