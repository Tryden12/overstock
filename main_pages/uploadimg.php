<!-- Header -->
<?php include '../view/header.php'; ?>
<!-- End of Header & Nav Section -->


<!-- Content goes below -->



<div class="container">
  <div class="jumbotron mt-5 mb-3">
    <h1 class="text-center pt-3">Upload Image</h1>      
    <p class="text-center pb-3">Upload your image below to be saved in the database.</p>
  </div>
     
</div>

<div class="container col-md-6 mb-5">
        <img id="frame" src="" class="img-fluid p-3" />
            <div class="mb-5">
                <input class="form-control" type="file" id="formFile" onchange="previewImage()">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button onclick="clearImage()" class="btn btn-primary mt-3">Upload</button>
                </div>
            </div>
        </div>

        <script>
            function previewImage() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
            function clearImage() {
                document.getElementById('formFile').value = null;
                frame.src = "";
            }
        </script>










<!-- End of content -->

<!-- Footer -->
<?php include '../view/footer.php'; ?>