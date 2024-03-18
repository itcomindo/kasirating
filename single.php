<?php

/**
 * Single
 */

defined('ABSPATH') or die('No script kiddies please!');
get_header();
$rating = mm_get_rating_data();
?>
<section id="sing" class="section small">
    <div class="container">
        <div id="sing-wr">
            <div id="sing-left">
                <div class="sing-fim">
                    <?php
                    the_post_thumbnail('full', array('class' => 'sing-fim-img'));
                    ?>
                </div>
                <!-- submit button -->
                <?php echo mm_get_button()['submit-review']; ?>
            </div>
            <div id="sing-right">
                <h1 class="head smaller">
                    <?php
                    the_title();
                    ?>
                </h1>
                <span>Lorem ipsum dolor sit amet.</span>
                <span>Rp.65.000</span>



                <div id="sing-rating-wr">
                    <div id="sing-rating-left">
                        <span><?php echo mm_get_rating_data()['rating']; ?></span>
                        <div class="srrl-stars-wr">
                            <?php
                            echo mm_get_stars();
                            ?>
                        </div>
                    </div>
                    <div id="sing-rating-right">

                        <div class="srr-left">
                            <ul class="list-no-style srr-stars">

                                <!-- 5 stars -->
                                <li>
                                    <div class="srrl-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <div class="divider"></div>
                                    <div data-pr="9000">9000</div>
                                </li>

                                <!-- 4 stars -->
                                <li>
                                    <div class="srrl-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="divider"></div>
                                    <div data-pr="7000">7000</div>
                                </li>

                                <!-- 3 stars -->
                                <li>
                                    <div class="srrl-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="divider"></div>
                                    <div data-pr="6000">6000</div>
                                </li>

                                <!-- 2 stars -->
                                <li>
                                    <div class="srrl-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="divider"></div>
                                    <div data-pr="5000">5000</div>
                                </li>

                                <!-- 1 stars -->
                                <li>
                                    <div class="srrl-rating"><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="divider"></div>
                                    <div data-pr="3500">3500</div>
                                </li>




                            </ul>
                        </div>

                        <div class="srr-right">

                            <div class="srr-right-item">
                                <div class="srrri-left">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="srrri-right">
                                    <ul class="list-no-style sdsdsds">
                                        <li>11.3k users</li>
                                        <li>Reviewed this</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="srr-right-item">
                                <div class="srrri-left">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="srrri-right">
                                    <ul class="list-no-style sdsdsds">
                                        <li>11.3k users</li>
                                        <li>Reviewed this</li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</section>
<?php
get_template_part('sections/rating-section');
get_footer();
