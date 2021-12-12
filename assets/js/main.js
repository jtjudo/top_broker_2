$(document).ready(function () {

    $('input[type="tel"]').mask("+9 (999) 999-9999");

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

    $('.btn-back').click(function () {
        parent.Fancybox.close()
    })

    const buttons = document.querySelectorAll('.complexes__block-btn');

    if (buttons !== null) {
        buttons.forEach((btn) => {
            btn.addEventListener('click', () => {
                const key = btn.getAttribute('data-key');

                new Swiper(`.swiper-images-${key}`, {
                    loop: true,
                    slidesPerView: 'auto',
                    centeredSlides: true,
                    effect: 'fade',
                    speed: 500,

                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            })
        })
    }
});

