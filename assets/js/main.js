$(document).ready(function () {
    let currentPage = 1;
    let s = '';

    $(document).on('click', '.complexes__pagination-arrow-left', function () {
        if (currentPage > 1) {
            currentPage = currentPage - 1;
        }
        ajaxInputSearch();
    });

    $(document).on('click', '.complexes__pagination-arrow-right', function () {
        const pages = $('.complexes__pagination-pages').children().last();
        let allPages = Number(pages.text())
        if (currentPage < allPages) {
            currentPage = currentPage + 1;
        }
        ajaxInputSearch();
    });

    $(document).on('click', '.pages-number ', function (item) {

        const numberPage = Number(this.textContent);
        currentPage = numberPage;

        ajaxInputSearch();
    });

    let timer;


    $(document).on('keyup', '.search-complexes-input', function (item) {
        if (timer !== null) {
            clearTimeout(timer);
        }

        function searchValue() {
            let input = $('.search-complexes-input');

            if (input.val().length > 2) {
                s = input.val();
            } else {
                s = '';
            }

            ajaxInputSearch();
        }

        timer = setTimeout(searchValue, 300);
    });



    $('input[type="tel"]').mask("+9 (999) 999-9999");

    function ajaxInputSearch() {
        return $.ajax({
            type: 'POST',
            url: ajax.ajaxurl,
            data: {
                action: 'complexAjax',
                page_num: currentPage,
                s: s,
            },
            success: function (res) {
                $('.complexes__block-wrapper').html(res);
            }
        })
    }

    ajaxInputSearch();


    $('#get-buy input[type="submit"]').click(function () {
        ym(85675426, 'reachGoal', 'forma1');
    })
    $('.form__block-form input[type="submit"]').click(function () {
        ym(85675426, 'reachGoal', 'forma3');
    })
    $('#modal-form input[type="submit"]').click(function () {
        ym(85675426, 'reachGoal', 'forma4');
    })
    $('#get-sell input[type="submit"]').click(function () {
        ym(85675426, 'reachGoal', 'forma5');
    })

    $('.layout-form-btn.back').click(function () {
        parent.Fancybox.close()
    })

});

