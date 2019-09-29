<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php & Ajax</title>
    <link rel="stylesheet" href="statics/bootstrap.css">
</head>
<body>
    <div class="container card mt-1 pt-1">
        <div class="container">
            <h1 class="card-header text-center">Php and Ajax - insert into databse</h1>
            <p id="out_put" class="text-center card-body"></p>
        </div>

        <div class="form-group card-login card mx-auto mt-5">
            <h1 class="card-header">Basic Form</h1>
            <form action="#" method="POST" class="card-body">
                <div class="form-group">
                    <div class="form-label-group">
                        <label for="name" class="text-capitalize">Name</label>
                        <input name="name" id="name" type="text" class="form-control-group float-right">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <label for="email" class="text-capitalize">Email</label>
                        <input name="email" id="email" type="email" class="form-control-group float-right">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <label for="number" class="text-capitalize">Number</label>
                        <input name="number" id="number" type="text" class="form-control-group float-right">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <input name="insert_btn" id="insert_btn" type="button" value="submit" class="btn btn-primary btn-block text-capitalize text-center">
                </div>
                
            </form>
        </div>
    </div>
    
    <!-- static files -->
    <script src="statics/jquery-3.4.1.js"></script>
    <script src="statics/bootstrap.js"></script>
    <script>
        $(function() {
            $("#insert_btn").on("click", function(e){
                e.preventDefault()

                $.ajax({
                    url: "insert_processor.php",
                    data: $("form").serialize(),
                    method: "POST",
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