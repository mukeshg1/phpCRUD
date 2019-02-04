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