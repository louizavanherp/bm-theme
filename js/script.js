$(document).ready(function () {
    var heightHeader = 100;

    /************* scroll links *************/
    $("a").on('click', function (event) {


        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top - heightHeader
            }, 1000, function () {
            });
        }
    });



/*END OF SCRIPT */
});