<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php & Ajax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="statics/bootstrap.css"> -->
</head>
<body>
    <div class="container card mt-1 pt-1">
        <div class="container">
            <h1 class="card-header text-center">Php and Ajax - <a href="update_data_page.php">Update data</a> </h1>
            <p id="out_put" class="text-center card-body"></p>
        </div>
        
        <div class="form-group card-login card mx-auto mt-5">
            <h1 class="card-header">Basic Form</h1>
            <form action="#" method="GET" class="card-body">
                <div class="form-group">
                    <div class="form-label-group">
                        <label for="id" class="text-capitalize">Id</label>
                        <input name="id" id="id" type="text" class="form-control-group float-right" value="<?php if (isset($_GET['id'])) { echo $_GET['id']; } ?>" readonly="readonly">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <label for="name" class="text-capitalize">Name</label>
                        <input name="name" id="name" type="text" class="form-control-group float-right" value="<?php if (isset($_GET['name'])) { echo $_GET['name']; } ?>">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <label for="email" class="text-capitalize">Email</label>
                        <input name="email" id="email" type="email" class="form-control-group float-right" value="<?php if (isset($_GET['email'])) { echo $_GET['email']; } ?>">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <label for="number" class="text-capitalize">Number</label>
                        <input name="number" id="number" type="text" class="form-control-group float-right" value="<?php if (isset($_GET['number'])) { echo $_GET['number']; } ?>"">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <input name="update_btn" id="update_btn" type="button" value="submit" class="btn btn-primary btn-block text-capitalize text-center">
                </div>
                
            </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- static files -->
    <!-- <script src="statics/jquery-3.4.1.js"></script> -->
    <!-- <script src="statics/bootstrap.js"></script> -->
    <script>
        $(function() {
            $("#update_btn").on("click", function(e){
                e.preventDefault()

                $.ajax({
                    url: "update_data_form_processor.php",
                    data: $("form").serialize(),
                    method: "GET",
                    dataType: "text",
                    success: function(strData) {
                        $("#out_put").text(strData)
                    }
                })
                
            })
        })
    </script>
</body>
</html>