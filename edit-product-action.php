<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include('./config.php');

if(!isset($_POST['id'])){
    die("nonexistent id");

}

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$stock = $_POST['stock'];
$image = null;

if(isset($_FILES["image"])){
    $image = $_FILES["image"];
}

$sqlSearch =  "SELECT * FROM product WHERE id = ".$id;
$result_product= mysqli_query($conection, $sqlSearch);
$product = mysqli_fetch_assoc($result_product);
$imageCurrentName = $product['image'];

$newURL = 'http://localhost/test_flexy/index-view.php';

$target_dir = "uploads/";
$target_file = $target_dir . basename($image["name"]);

//var_dump($imageCurrentName);
//var_dump($target_file);
//die();

if($target_file != $imageCurrentName && $target_file != '' && $image != null){
    $imageNameToSave = uploadImage($image);
    var_dump($imageNameToSave);
    die();
    
    $sql = "UPDATE product SET title = '$title', description = '$description', stock = '$stock', image = '$imageNameToSave' WHERE id = $id";
} else {
    $sql = "UPDATE product SET title = '$title', description = '$description', stock = '$stock' WHERE id = $id";
    echo 'elseeeee';
    //die();
}


if ($conection->query($sql) === TRUE){    
    header('Location: '.$newURL);
    } else {
        echo "Error : " . $conection->error;
    } 



    function uploadImage($image) {
        

        if(!$image || $image['name'] == ''){
            var_dump($image);
            die();
            return null;
        }
    
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image["name"]);
        
        $uploadOk = validateImage($target_file, $image["size"], $image["tmp_name"] );
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
    
          die();
         
        } else {

            
            if (!move_uploaded_file($image["tmp_name"], $target_file)) {
              echo "Sorry, there was an error uploading your file.";           
            } else {
                return $target_file;
            }
            
    
        }
    }
    
    
    function validateImage($target_file, $imageSize, $imageTemporaryName) {
        
        $uploadOk = 1;
    
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($imageTemporaryName);
          
        if($check !== false) {
          $uploadOk = 1;
        } else {
          echo "File is not an image. ";
          $uploadOk = 0;
          
        }
        
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists. ";
            $uploadOk = 0;
            
        }
        
        
        // Check file size
        if ($imageSize > 500000) {
            echo "Sorry, your file is too large. ";
            $uploadOk = 0;
            
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
          $uploadOk = 0;
          
        }
    
        return $uploadOk;
    }
        
    