// jQuery(document).ready(function () {
//     // Fungsi untuk menghitung dan memperbarui total
//     function updateTotal() {
//         var total = 0;

//         // Menghitung total berdasarkan nilai dari radio button yang dipilih
//         jQuery('input[type="radio"]:checked').each(function () {
//             total += parseFloat(jQuery(this).val());
//         });

//         // Memperbarui total
//         jQuery('#rat-avg-num').text(total.toFixed(2));
//     }

//     // Menetapkan event listener untuk perubahan pada input radio
//     jQuery('input[type="radio"]').change(function () {
//         updateTotal();
//     });
// });


// jQuery(document).ready(function () {
//     // Fungsi untuk menghitung dan memperbarui total
//     function updateTotal() {
//         var total = 0;

//         // Hapus kelas selected dari semua label
//         jQuery('label').removeClass('selected-label');

//         // Menghitung total berdasarkan nilai dari radio button yang dipilih
//         jQuery('input[type="radio"]:checked').each(function () {
//             total += parseFloat(jQuery(this).val());
//             // Tambahkan kelas selected-label pada label yang sesuai
//             jQuery('label[for="' + jQuery(this).attr('id') + '"]').addClass('selected-label');
//         });

//         // Memperbarui total
//         jQuery('#rat-avg-num').text(total.toFixed(2));
//     }

//     // Menetapkan event listener untuk perubahan pada input radio
//     jQuery('input[type="radio"]').change(function () {
//         updateTotal();
//     });
// });


// jQuery(document).ready(function () {
//     // Fungsi untuk menghitung dan memperbarui total serta menandai label terpilih
//     function updateTotalAndHighlightLabel() {
//         var total = 0;

//         // Menghapus kelas selected-label dari semua label untuk memastikan hanya label terpilih yang ditandai
//         jQuery('.rat-item-wr label').removeClass('selected-label');

//         // Menghitung total dan menandai label terpilih
//         jQuery('.rat-item-wr input[type="radio"]:checked').each(function () {
//             total += parseFloat(jQuery(this).val());
//             // Tambahkan kelas selected-label pada label yang sesuai
//             jQuery('label[for="' + jQuery(this).attr('id') + '"]').addClass('selected-label');
//         });

//         // Memperbarui total
//         jQuery('#rat-avg-num').text(total.toFixed(2));
//     }

//     // Menetapkan event listener untuk perubahan pada input radio
//     jQuery('.rat-item-wr input[type="radio"]').change(function () {
//         updateTotalAndHighlightLabel();
//     });
// });


// jQuery(document).ready(function () {
//     // Fungsi untuk menghitung dan memperbarui total
//     function updateTotal() {
//         var total = 0;

//         // Menghitung total berdasarkan nilai dari radio button yang dipilih
//         jQuery('.rat-item-wr input[type="radio"]:checked').each(function () {
//             total += parseFloat(jQuery(this).val());
//         });

//         // Memperbarui total
//         jQuery('#rat-avg-num').text(total.toFixed(2));
//     }

//     // Menetapkan event listener untuk perubahan pada input radio
//     jQuery('.rat-item-wr input[type="radio"]').change(function () {
//         updateTotal();
//     });
// });


jQuery(document).ready(function () {
    function updateTotal() {
        var total = 0;
        jQuery('.rat-item-wr input[type="radio"]:checked').each(function () {
            total += parseFloat(jQuery(this).val());
        });
        jQuery('#rat-avg-num').text(total.toFixed(2));
    }

    jQuery('.rat-item-wr input[type="radio"]').change(updateTotal);




    // style
    jQuery('.rat-item-wr input[type="radio"]').change(function () {
        // Dapatkan form yang berisi radio button yang di-check
        var form = jQuery(this).closest('form');

        // Reset semua label dalam form ini
        form.find('label').css('color', '#ccc'); // Warna default

        // Set label untuk radio button yang di-check dan semua sebelumnya
        form.find('input[type="radio"]').each(function () {
            jQuery('label[for="' + jQuery(this).attr('id') + '"]').css('color', 'var(--color-accent-1)');
            if (jQuery(this).is(':checked')) {
                return false; // Break loop setelah menemukan yang di-check
            }
        });
    });



















});
