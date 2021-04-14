<!DOCTYPE html>

<html lang="en">

<head>
    <title>Produtos</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <?php include "./config.php" ?>

    <link href="https://cdn.usebootstrap.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.usebootstrap.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ebfbca700c.js" crossorigin="anonymous"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>

    <?php

$result = $conection->query("SELECT * FROM product ORDER BY id");
$list = [];

if ($result) {
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $list[] = $row; 
    }

    /* free result set */
    $result->free();
    }

?>


    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="image/img5.png" alt="" />
                <h3>Hello There!</h3>
                <p></p>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">List of Products</h3>
                        <div class="row register-form">
                            <div class="col-md-12">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>title</th>
                                                
                                                <th>stock</th>
                                                <th>image</th>
                                                <th>action</th>
                                            </tr>

                                        </thead>
                                        <tbody>

                                            <?php foreach($list as $product) { ?>

                                            <tr>
                                                <td><?= $product['title']; ?></td>
                                                
                                                <td><?= $product['stock']; ?></td>
                                                <td><img src="<?= $product['image']; ?>" alt="" width="70" height="100"></td>
                                                <td>
                                                    <a href="http://localhost/test_flexy/edit-product-view.php?id=<?= $product
                                                    ['id']; ?>
                                                    "><i class="fas fa-edit icons"></i></a>

                                                    <a href="#"
                                                        data-load-url="http://localhost/test_flexy/delete-product-action.php?id=<?= $product['id']; ?>"
                                                        data-toggle="modal" data-target="#exampleModal"><i
                                                            class="fas fa-trash-alt icons"></i></a>

                                                    <a href=""><i class="fas fa-eye"></i></a>

                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Realmente deseja excluir?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                        <button type="button" class="btn btn-primary" id="delete">Sim</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
        $('#exampleModal').on('shown.bs.modal', function(e) {

            let url = $(e.relatedTarget).data('load-url');

            $('#delete').click(function(e) {
                window.location.replace(url);
            });

        });
        </script>
</body>

</html>