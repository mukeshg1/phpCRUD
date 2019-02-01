var validation = (function() {

    
    /*$("#b_Edit").click(function() {


    });*/

    $("#b_Del").click(function() {
        var del_id = $(this).closest('tr').find('td:eq(0)').text();
        var $ele = $(this).parent().parent();
        alert(del_id);
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


    return{

    }
})();