<?php /* if (isset($_GET[''])) {echo $_GET[''];} */?>
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
            <h1 class="card-header text-center">Php and Ajax - <a href="update_data_page.php">Read data</a> </h1>
            <p id="out_put" class="text-center card-body"></p>
        </div>
        
        <div class="form-group card-login card mx-auto mt-5">
            <h1 class="card-header">Data to Delete</h1>
            <table class="card-body m-auto p-2">
                <tr>
                    <th class="text-right">ID: </th>
                    <td class="text-left"><?php if (isset($_GET['id'])) { echo $_GET['id']; }?></td>
                </tr>
                <tr>
                    <th class="text-right">Name: </th>
                    <td class=""><?php if (isset($_GET['name'])) { echo $_GET['name']; }?></td>
                </tr>
                <tr>
                    <th class="text-right">Email: </th>
                    <td class=""><?php if (isset($_GET['email'])) { echo $_GET['email']; }?></td>
                </tr>
                <tr>
                    <th class="text-right">Number: </th>
                    <td class=""><?php if (isset($_GET['number'])) { echo $_GET['number']; }?></td>
                </tr>
                
            </table>

            <div class="card-footer">
                <p>Are you sure you want to delete? <span><a class="btn btn-link" href="update_data_page.php">return</a></span></p> 
                <button class="btn btn-danger btn-block" id="delete_btn">DELETE</button>
            </div>
            
        </div>
        <form action="" method="GET" class="d-none">
            <input type="text" id="id" name="id" value="<?php if (isset($_GET['id'])) { echo $_GET['id']; }?>">
        </form>
    </div>
    
    <!-- static files -->
    <script src="statics/jquery-3.4.1.js"></script>
    <script src="statics/bootstrap.js"></script>
    <script>
        $(function() {
            $("#delete_btn").on("click", function(e){
                e.preventDefault()

                $.ajax({
                    url: "delete_data_processor.php",
                    data: $('form').serialize(),
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