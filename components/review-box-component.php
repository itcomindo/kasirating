<?php

/**
 * Review Box Component
 */

defined('ABSPATH') or die('No script kiddies please!');

?>

<div id="rev-box-pr" class="">
    <div id="rev-box-pr-close" class="cursor-pointer">Cancel</div>
    <div id="rev-box-wr">
        <h3 class="head smallest">Reviews</h3>


        <div id="mm-rating" class="rating">
            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" class="full" title="5 stars"></label>
            <input type="radio" id="star4" name="rating" value="4" /><label for="star4" class="full" title="4 stars"></label>
            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" class="full" title="3 stars"></label>
            <input type="radio" id="star2" name="rating" value="2" /><label for="star2" class="full" title="2 stars"></label>
            <input type="radio" id="star1" name="rating" value="1" /><label for="star1" class="full" title="1 star"></label>
        </div>

        <div id="rev-box-form">

            <div class="form-item">
                <label for="isi-review">Tuliskan Review</label>
                <textarea name="isi-review" id="isi-review" cols="30" rows="10"></textarea>
                <div id="char-count">200 karakter tersisa</div>
            </div>

            <div class="form-item">
                <button id="kirim-rating" class="btn submit cursor-pointer">Kirim</button>
            </div>
        </div>




    </div>
</div>