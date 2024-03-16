window.addEventListener('DOMContentLoaded', (event) => {
    // jQuery(function () {
    //     function getRating() {
    //         jQuery('#mm-rating input').change(function () {
    //             var mm_val = jQuery(this).val();
    //             jQuery('#kirim-rating').on('click', function () {
    //                 alert('Anda telah memberikan rating ' + mm_val);
    //             });
    //         });
    //     }
    //     getRating();
    // });

    jQuery(function () {
        var mm_val = ''; // Menyimpan nilai rating yang dipilih

        // Fungsi untuk memeriksa kondisi pengisian form dan mengaktifkan/menonaktifkan tombol kirim
        function checkFormStatus() {
            var reviewLength = jQuery('#isi-review').val().length;
            var charsLeft = 200 - reviewLength; // Hitung karakter tersisa

            // Tampilkan karakter tersisa atau sembunyikan jika sudah mencapai atau melebihi 200 karakter
            if (charsLeft >= 0) {
                jQuery('#char-count').text(charsLeft + ' karakter tersisa').show(); // Tampilkan karakter tersisa
            } else {
                jQuery('#char-count').hide(); // Sembunyikan char-count
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










});