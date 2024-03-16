window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {

        function mmShowPassword() {
            jQuery(".toggle-password").click(function () {
                var input = jQuery(this).prev('input');
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                    jQuery(this).html("<i class='fa-solid fa-eye-slash'></i>");
                } else {
                    input.attr("type", "password");
                    jQuery(this).html("<i class='fa-solid fa-eye'></i>"); // Ini harus berbeda dari yang di atas untuk "tampilkan password"
                }
            });
        }

        mmShowPassword();






        //registrasi start


        function registerValidator() {
            function mm_isEmail(email) {
                var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }

            function mm_checkForm(form) {
                var valid = true;
                jQuery(form).find('input[type="text"], input[type="password"]').each(function () {
                    if (jQuery(this).val() === '') valid = false;
                });

                var email = jQuery(form).find('input[type="email"]').val();
                if (email === '' || !mm_isEmail(email)) {
                    valid = false;
                    jQuery(form).find('input[type="email"]').addClass('salah');
                } else {
                    jQuery(form).find('input[type="email"]').removeClass('salah');
                }

                if (jQuery(form).find('input[type="checkbox"]').is(':not(:checked)')) {
                    valid = false;
                }

                jQuery(form).find('button[type="submit"]').prop('disabled', !valid).toggleClass('active', valid);
            }

            jQuery('.reg-form-wr').each(function () {
                var form = this;
                jQuery(form).find('input[type="text"], input[type="email"], input[type="password"], input[type="checkbox"]').on('input', function () {
                    mm_checkForm(form);
                });
                // Awalnya tombol submit di-disable
                jQuery(form).find('button[type="submit"]').prop('disabled', true);
            });
        }


        registerValidator();




        //registrasi end









    });


});