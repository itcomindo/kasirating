window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {
        var mm_val = ''; // Menyimpan nilai rating yang dipilih

        // Fungsi untuk memeriksa kondisi pengisian form dan mengaktifkan/menonaktifkan tombol kirim
        function checkFormStatus() {

            var nextToSteepTwo = jQuery('.next-to-step-two');
            var nextToSteepThree = jQuery('.next-to-step-three');
            nextToSteepTwo.hide();
            nextToSteepThree.hide();



            var reviewLength = jQuery('#isi-review').val().length;
            var charsLeft = 2 - reviewLength; // Hitung karakter tersisa

            // Tampilkan karakter tersisa atau sembunyikan jika sudah mencapai atau melebihi 200 karakter
            if (charsLeft >= 0) {
                jQuery('#char-count small').text(charsLeft + ' karakter tersisa').show(); // Tampilkan karakter tersisa
            } else {
                // jQuery('#char-count small').hide(); // Sembunyikan char-count
                nextToSteepTwo.show();
            }

            // Cek apakah sudah memilih rating dan isi review >= 200 karakter
            if (mm_val !== '' && reviewLength >= 200) {
                jQuery('#kirim-rating').addClass('active').removeAttr('disabled'); // Aktifkan tombol
            } else {
                jQuery('#kirim-rating').removeClass('active').attr('disabled', 'disabled'); // Nonaktifkan tombol
            }
        }

        // Event listener untuk perubahan pilihan rating
        jQuery('#mm-rating input').change(function () {
            mm_val = jQuery(this).val(); // Simpan nilai rating yang dipilih
            checkFormStatus(); // Periksa status form
        });

        // Event listener untuk perubahan teks di isi-review
        jQuery('#isi-review').on('input', function () {
            checkFormStatus(); // Periksa status form
        });

        // Kirim form
        jQuery('#kirim-rating').on('click', function () {
            if (jQuery(this).hasClass('active')) {
                alert('Anda telah memberikan rating ' + mm_val + ' dan review ' + jQuery('#isi-review').val());
            }
        });

        // Inisialisasi status form saat pertama kali dimuat
        checkFormStatus();
    });






    function nextPrev() {
        var next = jQuery('.rev-box-next');
        next.on('click', function () {
            var step = jQuery(this).data('next');
            console.log(step);
            jQuery('.step-box').hide(100);
            jQuery('.step-box.' + step).show(100).removeClass('hide');
        });


        var prev = jQuery('.rev-box-prev');
        prev.on('click', function () {
            var step = jQuery(this).data('prev');
            console.log(step);
            jQuery('.step-box').hide(100);
            jQuery('.step-box.' + step).show(100).removeClass('hide');
        });



    }
    nextPrev();










});