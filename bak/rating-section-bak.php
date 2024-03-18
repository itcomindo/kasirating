<?php

/**
 * Silence is golden
 */

defined('ABSPATH') or die('No script kiddies please!');

if (is_single() && !has_category('blog')) {
?>
    <section id="rat-pr" class="section high">
        <div class="container">


            <div id="rat-wr">

                <div class="rat-item-wr">

                    <!-- Effectiveness -->
                    <div id="rat-efec" class="rat-item">
                        <h3 class="head smallest">Effectiveness</h3>
                        <form>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="efec-0" name="efec-0" value="1">
                            <label for="efec-0"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="efec-1" name="efec-1" value="1">
                            <label for="efec-1"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="efec-2" name="efec-2" value="1">
                            <label for="efec-2"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="efec-3" name="efec-3" value="1">
                            <label for="efec-3"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="efec-4" name="efec-4" value="1">
                            <label for="efec-4"></label>
                        </form>
                    </div>

                    <!-- Packaging dynamic name is pckg- -->
                    <div id="rat-pckg" class="rat-item">
                        <h3 class="head smallest">Packaging</h3>
                        <form>
                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="pckg-0" name="pckg-0" value="1">
                            <label for="pckg-0"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="pckg-1" name="pckg-1" value="1">
                            <label for="pckg-1"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="pckg-2" name="pckg-2" value="1">
                            <label for="pckg-2"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="pckg-3" name="pckg-3" value="1">
                            <label for="pckg-3"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="pckg-4" name="pckg-4" value="1">
                            <label for="pckg-4"></label>
                        </form>
                    </div>


                    <!-- Texture dynamic name is texture-->
                    <div id="rat-texture" class="rat-item">
                        <h3 class="head smallest">Texture</h3>
                        <form>
                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="texture-0" name="texture-0" value="1">
                            <label for="texture-0"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="texture-1" name="texture-1" value="1">
                            <label for="texture-1"></label>

                            <input class="rat" type="radio" id="texture-2" name="texture-2" value="1">
                            <label for="texture-2"></label>

                            <input class="rat" type="radio" id="texture-3" name="texture-3" value="1">
                            <label for="texture-3"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="texture-4" name="texture-4" value="1">
                            <label for="texture-4"></label>
                        </form>
                    </div>

                    <!-- Value For Money dynamic name is vfm-->
                    <div id="rat-vfm" class="rat-item">
                        <h3 class="head smallest">Value For Money</h3>
                        <form>
                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="vfm-0" name="vfm-0" value="1">
                            <label for="vfm-0"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="vfm-1" name="vfm-1" value="1">
                            <label for="vfm-1"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="vfm-2" name="vfm-2" value="1">
                            <label for="vfm-2"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="vfm-3" name="vfm-3" value="1">
                            <label for="vfm-3"></label>

                            <!-- memiliki nilai 0.25 -->
                            <input class="rat" type="radio" id="vfm-4" name="vfm-4" value="1">
                            <label for="vfm-4"></label>
                        </form>
                    </div>


                </div>




                <div id="rat-avg-wr">
                    <small>Average Rating</small>
                    <div id="rat-avg-content"><i class="fas fa-star"></i><span id="rat-avg-num">0</span></div>
                </div>



            </div>
        </div>
    </section>
<?php
}
