window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {








        //registrasi start


        function registerValidator() {

            function mm_isEmail(email) {
                var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }

            function mm_checkForm() {
                var valid = true;
                jQuery('.reg-form-wr input[type="text"], .reg-form-wr input[type="password"]').each(function () {
                    if (jQuery(this).val() === '') valid = false;
                });

                var email = jQuery('.reg-form-wr input[type="email"]').val();
                if (email === '' || !mm_isEmail(email)) {
                    valid = false;
                    jQuery('.reg-form-wr input[type="email"]').addClass('salah');
                } else {
                    jQuery('.reg-form-wr input[type="email"]').removeClass('salah');
                }

                if (jQuery('.reg-form-wr input[type="checkbox"]:checked').length === 0) {
                    valid = false;
                }

                if (valid) {
                    jQuery('.reg-form-wr button[type="submit"]').addClass('active').prop('disabled', false);
                } else {
                    jQuery('.reg-form-wr button[type="submit"]').removeClass('active').prop('disabled', true);
                }
            }

            jQuery('.reg-form-wr input[type="text"], .reg-form-wr input[type="email"], .reg-form-wr input[type="password"], .reg-form-wr input[type="checkbox"]').on('change keyup', mm_checkForm);

            // Awalnya tombol submit di-disable
            jQuery('.reg-form-wr button[type="submit"]').prop('disabled', true);

        }

        registerValidator();




        //registrasi end









    });


});