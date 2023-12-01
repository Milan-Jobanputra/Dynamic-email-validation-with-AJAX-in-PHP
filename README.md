# Dynamic-email-validation-with-AJAX-in-PHP
Dynamic email validation with AJAX in PHP



To implement dynamic email validation with AJAX in PHP, you can use a combination of HTML, JavaScript (with AJAX), and PHP. 

Add js function in form file.

function checkEmailAvailability() {
    var email = $("#email").val();

    $.ajax({
        type: "POST",
        url: "check_email.php",
        data: { email: email },
        success: function(response) {
            $("#emailAvailability").html(response);
        }
    });
}


The checkEmailAvailability JavaScript function is triggered when the user blurs out of the email input field.
The JavaScript function sends an AJAX request to check_email.php with the email as data.
