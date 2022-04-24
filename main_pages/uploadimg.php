<!-- PHP -->
<?php

include '../db/connect.php';

if(isset($_POST["upload"])) {
    $targetDir = "../Images/";
    $targetFile = $targetDir . basename($_FILES["uploadImage"]["name"]);
    $FileName = basename($_FILES["uploadImage"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $targetFile)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["uploadImage"]["name"])). " has been uploaded.";
        $sql = "INSERT INTO `images`(`ImgID`, `ImgName`) VALUES ('NULL',\"$FileName\")";
        
        if($result = mysqli_query($link, $sql)){
            echo "Image DB Entry Created";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

      } else {
        echo "Sorry, there was an error uploading your file.";
      }

    
}
?>

<!-- Header -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Image</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="../image/x-icon" href="../images/favicon.ico"/>
    <!--Font Awesome-->
    <link rel="stylesheet" href="bootstrap_dist/font-awesome/css/font-awesome.min.css" />
    <!-- Bootstrap -->
    <link href="../bootstrap_dist/css/bootstrap.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet" type="text/css">
  </head>
<body>
<!-- End of Header & Nav Section -->


<!-- Content goes below -->

<div class="container">
        <div class="row">
            <form method="post" action="adminportal.php">
                        <button type="submit" class="btn btn-light m-4"> &#9166; Return to Admin Portal</button>
            </form>
        </div> 
    </div>


<!-- Banner -->
<div class="container">
  <div class="jumbotron mt-5 mb-3">
    <h1 class="text-center pt-3">Upload Image</h1>      
    <p class="text-center pb-3">Upload your image below to be saved in the database.</p>
  </div> 
</div>



<div class="container col-md-6 mb-5">
        <img id="frame" src="" class="img-fluid p-3" />
            <div class="mb-5">



                <!--====== FORM START ======-->
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">

                    <!-- PHP CODE BELOW -->
                    <input class="form-control" type="file" name="uploadImage" name="uploadImage" value="<?php // ID GOES HERE ?>" onchange="previewImage()">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button type="submit" name="upload" class="btn btn-primary mt-3" onclick="clearImage()">Upload</button>
                    </div>
                    
                </form>
                <!--====== FORM END ======-->



            </div>
        </div>





        <!--========== JavaScript to Preview the Image ==========-->
        <script>
            function previewImage() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
            function clearImage() {
                document.getElementById('uploadImage').value = null;
                frame.src = "";
            }
        </script>










</body>
</html>

<!-- End of content -->

<!-- Footer -->
</body>
</html>