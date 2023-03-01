// Mobile menu button
function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
}

//Anchor smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
        });
    });
});

;
(function ($) {
    // Adding class to the header on scroll
    function colorHeader() {
        const windowScroll = $(window).scrollTop();
        const introSection = $('.intro');
        const header = $('.header');
        const pagesHeader = $('.header.blue');

        if (introSection.length) {
            const heroHeight =  introSection.offset().top;
            if (windowScroll > heroHeight) {
                header.addClass('shadow');
            } else {
                header.removeClass('shadow');
            }
        }

        if (pagesHeader.length) {
            if (windowScroll > 150) {
                pagesHeader.addClass('shadow');
            } else {
                pagesHeader.removeClass('shadow');
            }
        }
    }

    colorHeader();

    // Dotdigital signup form fixes
    $('input[id=dotMailer_email]').attr('placeholder', 'Email Address');
    $('.dotMailer_news_letter').find('br').remove();

    $(document).ready(function () {
        // Scroll to the signup section after form submission
        const $target = $('#form_errors p, .error_message');
        const $signupSection = $('.signup');
        if ($target.length) {
            $('html, body').animate({
                scrollTop: $signupSection.offset().top - 50,
            }, 800)
            return false;
        }
    })

    $(window).on('scroll', function () {
        colorHeader();
    })
}(jQuery));