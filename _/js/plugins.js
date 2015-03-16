// Avoid `console` errors in browsers that lack a console.
(function () {
    var method;
    var noop = function () {
    };
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
    $(document).ready(function () {
        var menuMenuOperation = false;
        var el = $("#megaMenu-one");
        $('#megaMenu-one-div').slideUp(200);
        el.mouseover(function () {
            $('#megaMenu-one-div').slideDown(200); /*closes any opened ones*/
            menuMenuOperation = !menuMenuOperation;
        });
        $(document).on('mouseleave', '#megaMenu-one-div', function (evt) {
            $('#megaMenu-one-div').slideUp(200);
        });
        $(document).on('mouseenter', '.righthead', function (evt) {
            $('#megaMenu-one-div').slideUp(200);
        });



        $(document).on('click', '#closeRight', function (evt) {
            $('.rightPop').toggleClass('expandRightPop');
            $('#status-icon').toggleClass('glyphicon-play-circle');
        });
    });
}());

// Place any jQuery/helper plugins in here.
