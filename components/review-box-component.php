<?php

/**
 * Review Box Component
 */

defined('ABSPATH') or die('No script kiddies please!');

?>

<div id="rev-box-pr" class="">
    <div id="rev-box-pr-close" class="cursor-pointer">Cancel</div>

    <div id="rev-box-step-head-wr">
        <ul class="list-no-style step-list">
            <li class="step-one rev-box-next" data-next="step-one">Rating</li>
            <li class="step-two rev-box-next next-to-step-two" data-next="step-two">Profile</li>
            <li class="step-three rev-box-next next-to-step-three" data-next="step-three">Owned</li>
        </ul>
    </div>



    <div id="rev-box-step-wr">

        <?php
        mm_get_step_one();
        mm_get_step_two();
        mm_get_step_three();
        ?>

    </div>




</div>


<?php

function mm_get_step_one()
{
?>
    <div id="rev-box-step-first" data-rev="step-one" class="step-one step-box active">
        <div class="rev-box-wr">
            <div class="rev-box-item-top">
                <h3 class="head smallest">Rating</h3>
                <small>Berikan rating sesuai dengan pengalaman Anda:</small>
            </div>
            <div id="mm-rating" class="rating">
                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" class="full" title="5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" class="full" title="4 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" class="full" title="3 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" class="full" title="2 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" class="full" title="1 star"></label>
            </div>

            <div id="rev-box-form">
                <div class="form-item">
                    <label for="isi-review">Tuliskan Review Minimal 200 huruf</label>
                    <textarea name="isi-review" id="isi-review" cols="30" rows="10"></textarea>
                    <div id="char-count"><small>Tulis review minimal 200, karakter tersisa</small></div>
                </div>

            </div>

            <div class="rev-box-next-prev-wr">
                <span class="next-to-step-two rev-box-next btn cursor-pointer" data-next="step-two">Next</span>
            </div>



        </div>
    </div>
<?php
}


function mm_get_step_two()
{
?>
    <div id="rev-box-step-two" data-rev="step-two" class="step-two step-box hide">
        <div class="rev-box-wr">
            <div class="rev-box-item-top">
                <h3 class="head smallest">Profile</h3>
                <small>Profile Anda:</small>
            </div>
            <div id="mm-rating-form" class="rating">
                <!-- form -->
                <span>Form goes here</span>
            </div>

        </div>
        <div class="rev-box-next-prev-wr">

            <span class="rev-box-prev rev-box-next-prev btn cursor-pointer" data-prev="step-one">Prev</span>

            <span class="rev-box-next rev-box-next-prev btn cursor-pointer" data-next="step-three">Next</span>
        </div>
    </div>
<?php
}


function mm_get_step_three()
{
?>
    <div id="rev-box-step-three" data-rev="step-three" class="step-three step-box hide">
        <div class="rev-box-wr">
            <div class="rev-box-item-top">
                <h3 class="head smallest">Owned</h3>
                <small>Already purchase and use it?</small>
            </div>
            <div id="mm-rating-form" class="rating">
                <!-- form -->
                <span>Form goes here</span>
            </div>

        </div>
        <div class="rev-box-next-prev-wr">
            <span class="rev-box-prev rev-box-next-prev btn cursor-pointer" data-prev="step-two">Prev</span>
        </div>

        <div class="form-item">
            <button id="kirim-rating" class="btn submit cursor-pointer">Kirim</button>
        </div>



    </div>
<?php
}
