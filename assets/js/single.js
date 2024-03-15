window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {

        //jq start below



        function mm_divd() {
            jQuery('li').each(function () {
                var dataPr = jQuery(this).find('[data-pr]').data('pr');
                var maksimum = 10000; // Nilai maksimum untuk data-pr
                var lebar = (dataPr / maksimum) * 100; // Menghitung lebar relatif terhadap nilai maksimum

                // Membuat gradient linear dari warna terang ke warna tua
                var gradient = 'linear-gradient(to right, #FFABAB 0%, #880000 ' + lebar + '%, transparent ' + lebar + '%)';

                jQuery(this).find('.divider').css('background', gradient);
            });
        }

        mm_divd();


        jQuery('.add-review').on('click', function () {
            alert('Ding Dong!');
        });









        //jq end above




    });


});