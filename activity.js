/*
File Name    : activity.js
File Path    : C:\xampp\htdocs\phpCRUD
Description  : Javascript page which makes an AJAX call whenever user performs any activity.
Created date : 04/02/2019
Author       : Mukesh
*/

var activity = (function() {

    
    $( "table tbody" ).on( "click", "#b_Update", function(){
        
        var id = $(this).closest('tr').find('td:eq(0)').text();
        var email = $(this).closest('tr').find('td:eq(3)').text();
        var activity = "Edited content";
        
        $.ajax
        ({
            type: "POST",
            url: "activitytrack.php",
            data:{
                'id' : id,
                'email': email,
                'activity': activity
            },
            error: function(){
                alert("Error");            
            }
        });
    });

    $( "table tbody" ).on( "click", "#b_Del", function(){
        var id = $(this).closest('tr').find('td:eq(0)').text();
        var email = $(this).closest('tr').find('td:eq(3)').text();
        var activity = "Deleted content";
        $.ajax({
            type: "POST",
            url: "activitytrack.php",
            data: {
                'id': id,
                'email': email,
                'activity': activity    
            },
            error: function(msg)
            {
                alert(msg);
            }
        });
    });


    return{

    }
})();