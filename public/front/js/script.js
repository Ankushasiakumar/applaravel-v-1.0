/*
    IMPORTANT
    because we don't use Babel here, we have to stick
    to old syntax to let older browsers run this code
*/
$(function() {
    printLegacy();

    makeButtonDisable('#raq_back');

    focusOnCurrentAnswer();

    var counter = 1;
    var numberOfQuestions = 5;
    $('#raq_next').click(function(){
        //if( !validate() )
          //  return false;

        if($('.longest_side_group > input').val().length == 0){
           $('.longest_side_group').addClass('has-error');
            return false;
        }else{
           $('.longest_side_group').removeClass('has-error');
        }

        if($('.shortest_side_group > input').val().length == 0){
           $('.shortest_side_group').addClass('has-error');
            return false;
        }else{
           $('.shortest_side_group').removeClass('has-error');
        }

        if (jQuery('div#question-2').is(":visible")) {
            if ($("input[name=sheds]").is(":checked") == false) {
                return false;
            }
        }

        if (jQuery('div#question-3').is(":visible")) {
            if ($("input[name=claddings]").is(":checked") == false) {
                return false;
            }
        }
        
        if (jQuery('div#question-4').is(":visible")) {
            if ($("input[name=security]").is(":checked") == false) {
                return false;
            }
        }


        if (jQuery('div#question-1').is(":visible") == true ) {
            if(jQuery('input[name="longest_side"]').val().length != 0){
                var getLongTotalPrice = jQuery('input[name="longest_side"]').val()*3;
                process_item('longest_side_price',getLongTotalPrice);
                jQuery('ul.shed_attributes').prepend('<li class="long_side">Long side: <span>'+jQuery('input[name="longest_side"]').val()+' m'+' (€ '+getLongTotalPrice+')</span></li>');
                jQuery('div.selected_items').prepend('<div class="thum-sec longest_side_items"><figcaption><h4>Longest Side</h4><p>'+jQuery('input[name="longest_side"]').val()+' m'+' (€ '+getLongTotalPrice+')</p></figcaption></div>');
            }else{
                jQuery('ul.shed_attributes li.long_side').remove();
                jQuery('div.selected_items .thum-sec.longest_side_items').remove();
            }


            if(jQuery('input[name="shortest_side"]').val().length != 0){
                var getShortTotalPrice = jQuery('input[name="shortest_side"]').val()*2;
                process_item('shortest_side_price',getShortTotalPrice);
                jQuery('ul.shed_attributes').prepend('<li class="short_side">Short side: <span>'+jQuery('input[name="shortest_side"]').val()+' m'+' (€ '+getShortTotalPrice+')</span></li>');
                jQuery('div.selected_items').prepend('<div class="thum-sec shortest_side_items"><figcaption><h4>Shortest Side</h4><p>'+jQuery('input[name="shortest_side"]').val()+' m'+' (€ '+getShortTotalPrice+')</p></figcaption></div>');
            }else{
                jQuery('ul.shed_attributes li.short_side').remove();
                jQuery('div.selected_items .thum-sec.shortest_side_items').remove();
            }
        }


        // $('input[name=sheds]:checked').val();

        makeButtonEnable('#raq_back');
        
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
    $('#raq_back').click(function() {
        removeError();

        if( $('#raq_back').hasClass('disabled') )
            return false;
        
        if( $('#raq_next').attr('isSubmit') == 'true' )
            showNextButton();

        showElement('#question-' + --counter);

        backNavigation(counter);
        changeQuestionTitle(counter);

        if( counter == 1 )
            makeButtonDisable('#raq_back');
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
    $('#raq_next').prop('value', 'Submit');
    $('#raq_next').addClass('submit');
    $('#raq_next').attr('isSubmit', 'true');
}
function showNextButton() {
    $('#raq_next').prop('value', 'Next');
    $('#raq_next').removeClass('submit');
    $('#raq_next').attr('isSubmit', 'false');
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
            $('#raq_next').click();
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