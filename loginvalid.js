/*
File Name    : loginvalid.js
File Path    : C:\xampp\htdocs\phpCRUD
Description  : Validation page for Login form.
Created date : 04/02/2019
Author       : Mukesh
*/

var loginvalidation = (function() {
    $("#loader").hide();
    
    var form = $( "#loginform" );
    $.validator.setDefaults({
        //error class is added when validation fails
        highlight: function(element) {
          $(element)
            .closest('.form-group')
            .addClass('err');
        },
        unhighlight: function(element) {
          $(element)
            .closest('.form-group')
            .removeClass('err');
        },
        success: "valid"
    });
    (form).validate({
        //Validation rules
        rules: {
            loginemail: {
                required: true,
                email: true
            },
            loginpassword: {
                required: true
            }
        },
        //Custom Error messages 
        messages: {
            loginemail: {
                required: 'Please enter an email address.',
                email: 'Please enter a valid email address!'
            },
            loginpassword:{
                required: 'Please enter a password.'
            }
        }        
    });
    return
    {

    }
})();