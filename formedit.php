<?php
include 'koneksii.php';

$panjang_nama = $_GET['panjang_nama'];
$sql = "SELECT * FROM contact WHERE panjang_nama='$panjang_nama'";
$query = mysqli_query ($connect, $sql);
$panjang_nama = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1 ) {
die("data tidak ditemukan...");

}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>Starbhak Mart</title>

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
    </head>
    <body>
        <div class="container">
            <div class="card-body">
                <div class="card-header bg-dark text-white text-center mt-2"><b>Form Edit contact</b></div>
                <div class="card-body" style="border: solid rgba(124, 120, 120, 0.493);">
                    <form action="edit.php" method="POST">

                    <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">panjang nama</label>
                            <div class="col-sm-9">
                            <input name="panjnag_nama" type="text" class="form-control" id="nama"
                            value="<?php echo $panjang_nama['panjang-nama']?>">
                            </div>
                        </div>

                    <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">email addres</label>
                            <div class="col-sm-9">
                            <input name="email_addres" type="text" class="form-control" id="email"
                            value="<?php echo $email_addres['email_addres']?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">your comment</label>
                            <div class="col-sm-9">
                            <input name="your_comment" type="text" class="form-control" id="comment"
                            value="<?php echo $your_comment['your_comment']?>">
                            </div>
                        </div>
                        
                        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>