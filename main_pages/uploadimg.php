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
<?php include '../view/header.php'; ?>
<!-- End of Header & Nav Section -->


<!-- Content goes below -->


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










<!-- End of content -->

<!-- Footer -->
<?php include '../view/footer.php'; ?>