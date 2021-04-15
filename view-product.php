<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.usebootstrap.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


    <script src="https://cdn.usebootstrap.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

</head>

<body>

    <link rel="stylesheet" href="style.css">
    <?php 
include('config.php');
$id = $_GET['id'];

$sql =  "SELECT * FROM product WHERE id = ".$id;
$result_product= mysqli_query($conection, $sql);
$product = mysqli_fetch_assoc($result_product);

?>

    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="image/img5.png" alt="" />
                <h3>Hello There</h3>
                <p>View your product!</p>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">View your product</h3>
                        <div class="row register-form">
                            <div class="col-md-12">

                            <td><img src="<?= $product['image']; ?>" alt="" width="180" height="240"></td>

                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <td><strong>Title:</strong></td>
                                            <td><?= $product['title']; ?></td>
                                        </tr>

                                        <tr>
                                            <td><strong>Description:</strong></td>
                                            <td><?= $product['description']; ?></td>
                                        </tr>

                                        <tr>
                                            <td><strong>stock:</strong></td>
                                            <td><?= $product['stock']; ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <a href="http://localhost/test_flexy/index.php" class="btn">Back</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>