// hoja de acciones javaScript
// en esta hoja encontrala las acciones que se ejecutan en la parte publica de la web doau

$(document).ready(function(e) {
    sliderForm('#next-step-one', '#step-one', 'step-two');
});

function sliderForm(bt, step, next_step) {
    var widA = '-' + $(step).width();
    var widB = '-' + $(next_step).width();
    $(bt).click(function() {
        $(step).animate({
            opacity: 0, // animate slideUp
            marginRight: widA
        }, { duration: 4000 }, 'swing', function() {
            $(this).hide();
        });
        // $(next_step).animate({
        //     opacity: 0,
        //     marginRight: widB
        // }, 'slow');
    });
}