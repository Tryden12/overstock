<!-- Header -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin Portal</title>
		<meta charset="utf-8" />
		<meta name="viewport"
			content="width=device-width,
					initial-scale=1" />
		<!-- Load Bootstrap -->
		<link rel="stylesheet"
			href=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
			integrity=
"sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
			crossorigin="anonymous" />
		<script src=
"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
				integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
				crossorigin="anonymous"></script>
		<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
				integrity=
"sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
				crossorigin="anonymous"></script>
	</head>
	<body style="text-align: center;">
		<div class="container mt-3">
			<h1 style="color: Black;">
				Admin Panel
			</h1>

      <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Modify Invoices</h5>
        <p class="card-text">This page allows you to edit and modify invoices.</p>
        <a href="#" class="btn btn-primary">Modify Invoices Here</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Deal Manager</h5>
        <p class="card-text">This page allows you to edit and modify the daily and weekly deals.</p>
        <a href="#" class="btn btn-primary">Manage Deals Here</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Upload Image</h5>
        <p class="card-text">This page is used to upload images of the daily deals and any other image that should be added to the webpage.</p>
        <a href="#" class="btn btn-primary">Upload Image Here</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Invoice Report</h5>
        <p class="card-text">This page is used to generate reports of current and previous invoices.</p>
        <a href="#" class="btn btn-primary">Generate Invoice Report Here</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Order Report</h5>
        <p class="card-text">This page is used to generate reports of current and previous oreders.</p>
        <a href="#" class="btn btn-primary">Generate Order Report Here</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Home</h5>
        <p class="card-text">This link will redirect you to the home page.</p>
        <a href="#" class="btn btn-primary">Go Home Here</a>
      </div>
    </div>
  </div>
</div>
		</div>
	</body>
</html>

<!-- End of content -->

<!-- Footer -->
<?php include '../view/footer.php'; ?>