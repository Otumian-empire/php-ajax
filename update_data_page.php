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
    <div class="container">
        <h1 class="bg-default text-capitalize text-center">Php and Ajax</h1>
        <div id="out_put" class="text-center"></div>
    </div>
    
    <script src="statics/jquery-3.4.1.js"></script>
    <script src="statics/bootstrap.js"></script>
    <script>
        $(function() {
            $.ajax({
                url: "update_data_load_processor.php",
                dataType: "html",
                success: function(strData) {
                    $("#out_put").html(strData)
                }
            })
        })
    </script>
</body>
</html>