/*
    IMPORTANT
    because we don't use Babel here, we have to stick
    to old syntax to let older browsers run this code
*/
$(function() {
    printLegacy();

    makeButtonDisable('#raq_back1');

    focusOnCurrentAnswer();

    var counter = 1;
    var numberOfQuestions = 5;
    $('#raq_next1').click(function(){
        //if( !validate() )
          //  return false;


        if (jQuery('div#question-1').is(":visible") == true ) {
            if(jQuery('select[name="longest_side"]').val().length != 0){
                var getLongTotalPrice = jQuery('select[name="longest_side"]').val()*3;
                process_item('longest_side_price',getLongTotalPrice);
                jQuery('ul.shed_attributes').prepend('<li class="long_side">Long side: <span>'+jQuery('select[name="longest_side"]').val()+' m'+' (£ '+getLongTotalPrice+')</span><input type="hidden" name="longest_side" value="'+jQuery('select[name="longest_side"]').val()+' m'+'"></li>');
            }else{
                jQuery('ul.shed_attributes li.long_side').remove();
            }

            if(jQuery('select[name="shortest_side"]').val().length != 0){
                var getShortTotalPrice = jQuery('select[name="shortest_side"]').val()*2;
                process_item('shortest_side_price',getShortTotalPrice);
                jQuery('ul.shed_attributes').prepend('<li class="short_side">Short side: <span>'+jQuery('select[name="shortest_side"]').val()+' m'+' (£ '+getShortTotalPrice+')</span><input type="hidden" name="shortest_side" value="'+jQuery('select[name="shortest_side"]').val()+' m'+'"></li>');
            }else{
                jQuery('ul.shed_attributes li.short_side').remove();
            }
        }


        if (jQuery('div#question-2').is(":visible") == true ) {
            if ($("input[name=layouts]").is(":checked") == false) {
                return false;
            }
        }

        if (jQuery('div#question-3').is(":visible") == true ) {
            if ($("input[name=window_model]").is(":checked") == false) {
                return false;
            }

            if ($("input[name=window_color]").is(":checked") == false) {
                return false;
            }

            if ($("input[name=window_position]").is(":checked") == false) {
                return false;
            }
        }

        if (jQuery('div#question-4').is(":visible") == true ) {
            if ($("input[name=door_model]").is(":checked") == false) {
                return false;
            }

            if ($("input[name=door_color]").is(":checked") == false) {
                return false;
            }

            if ($("input[name=door_position]").is(":checked") == false) {
                return false;
            }
        }


        makeButtonEnable('#raq_back1');
        
        // check if the user is in the last question
        if( $(this).attr('isSubmit') == 'true' ) {
            submitForm();
        }
        
        showElement('#question-' + ++counter);

        nextNavigation(counter);
        changeQuestionTitle(counter);
        
        if( counter == numberOfQuestions ) {
            // show submit button
            showSubmitButton();
        }
        focusOnCurrentAnswer();
    });
    $('#raq_back1').click(function() {
        removeError();

        if( $('#raq_back1').hasClass('disabled') )
            return false;
        
        if( $('#raq_next1').attr('isSubmit') == 'true' )
            showNextButton();

        showElement('#question-' + --counter);

        backNavigation(counter);
        changeQuestionTitle(counter);

        if( counter == 1 )
            makeButtonDisable('#raq_back1');
    });

    // By doing this users can use enter key instead of clicking the mouse
    accessibility();

    pageReload();
});


function fadeAll() {
    $('form .question-container').each(function(){
        $(this).hide();
    });
}
function fadeIn(theElement) {
    $(theElement).fadeIn(700);
}
function showElement(theElement) {
    fadeAll();
    fadeIn(theElement);
}
function showSubmitButton() {
    $('#raq_next1').prop('value', 'Submit');
    $('#raq_next1').addClass('submit');
    $('#raq_next1').attr('isSubmit', 'true');
}
function showNextButton() {
    $('#raq_next1').prop('value', 'Next');
    $('#raq_next1').removeClass('submit');
    $('#raq_next1').attr('isSubmit', 'false');
}
function makeButtonDisable(button) {
    $(button).addClass('disabled');
}
function makeButtonEnable(button) {
    $(button).removeClass('disabled');
}
function nextNavigation(currentQuestion) {
    $('.form-steps__item.step-' + currentQuestion).addClass('form-steps__item--active');
    $('.form-steps__item.step-' + (currentQuestion-1) + ' .form-steps__item-text').after('<div class="tick"></div>');
}
function backNavigation(currentQuestion) {
    $('.form-steps__item.step-' + (currentQuestion + 1) ).removeClass('form-steps__item--active');
    $('.form-steps__item.step-' + currentQuestion + ' .tick' ).remove();
}
function validate() {
    if( $('input[type="text"]:visible').val().length <= 0 ) {
        $('input[type="text"]:visible').addClass('error');
        if( !$('.error-text').length )
            $('input.error').after('<p class="error-text">This Field is Required</p>');
        return false;
    }
    else {
        $('input[type="text"]:visible').removeClass('error');
        $('.error-text').remove();
        return true;
    }
}
function changeQuestionTitle(counter) {
    $('.question-title').text('Question ' + counter);
}
function showThankyou() {
    $('#overlay').show();
}
function showThankyou() {
    $('#overlay').show();
}
function focusOnCurrentAnswer() {
    $('input[type="text"]:visible').focus();
}
function accessibility() {
    $('input[type="text"]').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13')
            $('#raq_next1').click();
    });
}
function removeError() {
    $('input[type="text"]:visible').removeClass('error');
    $('.error-text').remove();
}
function submitForm() {
    /*
        Submit, But do not refresh the page
        to show the thank you message
    */
    $('form').submit(function(e) {
        e.preventDefault();
    });
    showThankyou();
    return false;
}
function pageReload() {
    $('#start-over').click(function(){
        window.location.reload();
    });
}
function printLegacy() {
    console.log(
        "%c Mostafa Ghanbari %c \nWith Respect",
        "background-image: linear-gradient(90deg, red, blue);background-size: 210px 210px;background-position: 0% 0%;min-height: 100vh;font-size: 16px;color:#FFF;margin: 5px 0;padding:5px; padding-right: 10px;border-radius: 5px;line-height: 26px;",
        ""
    );
};