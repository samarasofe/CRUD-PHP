<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.usebootstrap.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link rel="stylesheet" href="style.css">


<script src="https://cdn.usebootstrap.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>

<body>

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="image/img4.png" alt="" />
            <h3>Hello There</h3>
            <p>Create the best product to you!</p>
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Add a New Product</h3>
                    <div class="row register-form">
                        <div class="col-md-12">
                            <form action="new-product-action.php" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <input name="title" type="text" class="form-control" placeholder="Title" value="" />
                                </div>

                                <div class="form-group">
                                    <input name="description" type="text" class="form-control" placeholder="Description" value="" />
                                </div>

                                <div class="form-group">
                                    <input name="stock" type="text" class="form-control" placeholder="Stock" value="" />
                                </div> 

                                <div class="custom-file" style="margin-bottom: 1rem;">
                                    <input name="image" type="file" class="custom-file-input" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Choose image</label>
                                </div>

                                <button type="submit" class="btn btn-primary">Enviar</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>