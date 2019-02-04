/*
File Name    : crud.php
File Path    : C:\xampp\htdocs\phpCRUD
Description  : JS page to handle Edit and Delete functions
Created date : 04/02/2019
Author       : Mukesh
*/

var crud = (function() {

    
    $( "table tbody" ).on( "click", "#b_Update", function(){
        
        var id = $(this).closest('tr').find('td:eq(0)').text();
        var firstname = $(this).closest('tr').find('td:eq(1)').text();
        var lastname = $(this).closest('tr').find('td:eq(2)').text();
        var email = $(this).closest('tr').find('td:eq(3)').text();
        $("#updatefirstname").val(firstname);
        $("#updatelastname").val(lastname);
        $("#updateemail").val(email);
        $("#updateModal").modal();

        $("#save_btn").click(function(){
            $.ajax({
                type: "POST",
                url: "update-user.php",
                data:{
                    id,
                    updatefirstname   : $("#updatefirstname").val(),  
                    updatelastname    : $("#updatelastname").val(),   
                    updateemail       : $("#updateemail").val()
                },
                success: function (updatemsg){
                    $("#updatemsg").html(updatemsg);
                    //$("#updateModal").modal('hide');
                }
            });
        });
    });

    $( "table tbody" ).on( "click", "#b_Del", function(){
        var del_id = $(this).closest('tr').find('td:eq(0)').text();
        var $ele = $(this).parent().parent();
        $.ajax({
            type: "POST",
            url: "delete-user.php",
            data: {
                'del_id':del_id     
            },
            success: function(data)
            {
                if (data=="YES")
                {
                    $ele.fadeOut().remove();
                }
                else
                {
                    alert("can't delete the row");
                }
            }
        });
    });

    $("#close_btn").on("click", function(){
        location.reload();
    });


    return{

    }
})();