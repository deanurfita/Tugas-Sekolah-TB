<?php 
include 'koneksii.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <title>Shoes Store</title>

    <style>
            .navbar {
            background-color: #2d98da;
            font-size: 16px;
            margin: auto;
        }
            .jumbotron{
          background-color: #2d98da;
        }
            .galery{
          background-color: #2d98da;
        }
            .footer{
          background-color: #2d98da;
        }
    </style>
<body>
        <div class="container">
            <div class="card-body">
                <div class="card-header bg-primary text-white text-center mt-2"><b>Form Tambah contact</b></div>
                <div class="card-body" style="border: solid rgba(124, 120, 120, 0.493);">
                    <form action="simpan.php" method="POST"> 

                    <div class="form">
                    <div class="form-group row">
                    <label for="panjang_nama" class="col-sm-2 col-form-label">panjang nama</label>
                        <div class="col-sm-9">
                        <input name="panjang_nama" type="text" class="form-control" id="panjang_nama" 
                        value="">
                        </div>
                    </div>

                    <div class="form">
                    <div class="form-group row">
                    <label for="email_addres" class="col-sm-2 col-form-label">email addres</label>
                        <div class="col-sm-9">
                        <input name="email_addres" type="text" class="form-control" id="email_addres" 
                        value="">
                        </div>
                    </div>
                    
                    <div class="form">
                    <div class="form-group row">
                    <label for="your_comment" class="col-sm-2 col-form-label">your comment</label>
                        <div class="col-sm-9">
                        <input name="your_comment" type="text" class="form-control" id="your_comment" 
                        value="">
                        </div>
                    </div>

                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>