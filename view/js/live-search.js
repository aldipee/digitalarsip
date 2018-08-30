jQuery(document).ready(function ($) {

    $('#surat_data tr h4').each(function () {
        $(this).attr('data-search-term', $(this).text().toLowerCase());
    });

    $('#live-search').on('keyup', function () {
        var searchTerm = $(this).val().toLowerCase();

        $('#surat_data tr h4').each(function () {
            var tr = $(this).parent().parent().parent();
            if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 ||
                searchTerm.length < 1) {

                // 
                tr.show();
            } else {
                // $(this).hide();
                tr.hide();
            }
        });

    });

});