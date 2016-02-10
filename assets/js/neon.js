/**
 * Created by subhabrata on 12/10/2015.
 */



var Login = (function() {

    var template = ['<div id="login-widget" class="form">',
        '<div id="username-field" class="fuller-button input-field blue">',
        '<div class="button-text" data-default="USERNAME">USERNAME</div>',
        '<input id="username-input" type="text" tabindex="1"/>',
        '</div>',

        '<div id="password-field" class="fuller-button input-field blue">',
        '<div class="button-text" data-default="PASSWORD">PASSWORD</div>',
        '<input id="password-input" type="password" tabindex="2"/>',
        '</div>',

        '<div class="fuller-button white small" tab-index="3">',
        '<div class="button-text">GO</div>',
        '</div>',
        '</div>'].join('');

    var $inputButtons,
        $usernameField,
        $passwordField,
        $usernameInput,
        $passwordInput;

    function init() {
        $('body').append(template);

        $inputButtons = $('.input-field');
        $usernameField = $('#username-field');
        $passwordField = $('#password-field');
        $usernameInput = $usernameField.find('input');
        $passwordInput = $passwordField.find('input');

        initClicks();
    }

    function initClicks() {
        $inputButtons.on('click', onInputClick);
        $inputButtons.find('input').on('click', noBubble);
        $usernameInput.on('focus', onInputFocus);
        $passwordInput.on('focus', onInputFocus);
        $(document).on('click', onDocumentClick);
    }

    function noBubble(e) {
        e.stopPropagation();
    }

    function onInputClick(e) {
        noBubble(e);

        var $this = $(this);
        var $buttonText = $this.find('.button-text');
        var $input = $this.find('input');
        var inputVal = $.trim($input.val());

        if (inputVal.length > 0) {
            $buttonText.html($buttonText.data('default'));
            $buttonText.removeClass('dotted');
        }

        $this.toggleClass('active');
        $input.focus();
    }

    function onDocumentClick(e) {
        noBubble(e);
        var usernameVal = $.trim($usernameInput.val());
        var passwordVal = $.trim($passwordInput.val());

        if (usernameVal.length <= 0) {
            $usernameField.find('.button-text').html('USERNAME');
        } else {
            $usernameField.find('.button-text').html(usernameVal);
        }

        if (passwordVal.length <= 0) {
            $passwordField.find('.button-text').html('PASSWORD');
            $passwordField.find('.button-text').removeClass('dotted');
        } else {
            $passwordField.find('.button-text').html('');
            $passwordField.find('.button-text').addClass('dotted');
            for (var i = 0; i < passwordVal.length; i++) {
                $passwordField.find('.button-text').append('<i class="fa fa-genderless"></i>');
            }
        }

        $inputButtons.removeClass('active');
    }

    function onInputFocus(e) {
        $passwordInput.parent().addClass('active');
        $usernameInput.parent().addClass('active');
    }


    return {
        init: init
    };
}());

$(document).on('ready', function() {
    Login.init();
});
