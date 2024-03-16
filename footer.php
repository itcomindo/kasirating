<?php

/**
 * Footer
 *
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 */
defined('ABSPATH') || exit;


if (is_single() && !has_category('blog')) {
    get_template_part('components/review-box-component');
}

if (!mm_is_user_logged_in()) {
    get_template_part('components/moda-login-component');
}


wp_footer();




?>
</main>
</body>

</html>