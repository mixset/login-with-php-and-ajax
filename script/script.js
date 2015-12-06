/**
 @Author: Dominik Ryńko
 @Website: http://www.rynko.pl/
 @Version: 1.1
 */

function redirect(to, delay) {
    window.setTimeout(function () {
        window.location.href = to;
    }, delay);
}

$('.form').before('<div id="info"></div>');

$('.form').on('submit', function (e) {

    var email = $("#email").val()
        ,password = $("#password").val()
        ,string = '&email=' + email + '&password=' + password + '&action=login';

    var request = $.ajax(
        {
            url: "checker.php",
            type: "POST",
            datatype: "json",
            data: string
        });

    request.done(function (html) {
        var array = $.parseJSON(html);

        if (array[0] == true) {
            $('#info').addClass('alert alert-success').text(array[1]);
            redirect('my_page.php', 1000);
        }
        else if (array[0] == false) {
            $('#info').addClass('alert alert-error').text(array[1])
        }
    });

    e.preventDefault();
});


