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
    /************** form labels ******************/

    $("form input, form textarea").keyup(function () {
        var $field = $(this).closest("p");
        if (this.value) {
            $field.addClass("filled");
        } else {
            $field.removeClass("filled");
        }
    });

    var $subject = $('option[value="SUBJECT*"]');
    $subject.attr("selected", true);
    $subject.attr("disabled", true);

    /****************** navigation *******************/
    var $navbarItems = $(".navbar ul li").not('.navbar ul li:first');
    var $navbarLocation = $(".navbar ul");

    $navbarLocation.append("<div class='nav-items'></div>");
    $navbarItemsGroup = $(".nav-items");
    $navbarItemsGroup.append($navbarItems);




    /*END OF SCRIPT */
});