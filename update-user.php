<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
</head>
<body>

    <div class="container">
    <h2>Update data</h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Update</button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="firstname" id="firstname" autocomplete="off" placeholder="First Name*">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="lastname" id="lastname" autocomplete="off" placeholder="Last Name*">
                </div>
            </div>
            <div class="form-group col-md-12">
                <input type="email" name="email" id="email" class="form-control" autocomplete="off" placeholder="Email*">
            </div>       
            <div class="form-group col-md-12">          
                <button name="submit_btn" id="submit_btn" class="btn btn-primary btn-lg btn-block btn-huge">Save changes</button>
                <button type="button" class="btn btn-secondary btn-block btn-huge" data-dismiss="modal">Close</button>
            </div>  
            </div>
        <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>-->
        </div>
        </div>
    </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
