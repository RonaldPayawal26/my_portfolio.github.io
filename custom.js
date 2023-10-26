$(document).ready(function () {
    $('.accordion .btn').click(function () {
        $(this).find('.arrow-down, .arrow-up').toggleClass('collapsed');
    });
});