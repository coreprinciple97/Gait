<html>
<head>
  <title>Add Product</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"  href="assets/css/login.css">
    <link rel="stylesheet"  href="assets/css/addproduct.css">
    <link rel="stylesheet"  href="assets/css/main.css">
     <link rel="stylesheet"  href="assets/css/bootstrap.min.css">
     <link rel="stylesheet"  href="/fonts/style.css">
     <script src="assets/js/typed.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3ec1573dc2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <div class="container">
          <a class="navbar-brand" href="index.php">GAIT</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-pills justify-content-end">
          
          <li><a class="nap" href="dashboard.php">Dashboard</a></li>
          <li><a class="nap" href="product.php">Home</a></li>
          <li><a class="nap" href=">addproduct.php">Add Product</a></li>
          <li><a class="nap" href="profile.php">Welcome <?php echo $_SESSION['name']; ?></a></li>
          <li><a class="nap" href="logout.php">Logout</a></li>
          
          </ul>
          </div>
    </nav>

    <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-50 p-b-90">
      <h4 class="intext loghead">Add your product</h4>
        <form action="" method="post" enctype="multipart/form-data" class="login100-form validate-form flex-sb flex-w">
          
          <div class="wrap-input100 validate-input m-b-16" data-validate = "email is required">
            <input class="input100" type="text" name="name" placeholder="Title">
            <span class="focus-input100"></span>
          </div>
          
          <div style= " padding: 20px;" >      </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "email is required">
            <select class="form-control input100 cat" name="category" placeholder="Category" >
              <option>Category</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            <span class="focus-input100"></span>
          </div>
          
          <div style= " padding: 20px;" >      </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "email is required">

            <input class="input100" type="file" name="uploadfile"  placeholder="Upload Picture">
            <span class="focus-input100"></span>
          </div>
          
          <div style= " padding: 20px;" >      </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "email is required">
            <input class="input100" type="text" name="link" placeholder="Product Link">
            <span class="focus-input100"></span>
          </div>
          
          <div style= " padding: 20px;" >      </div>
          
          <div class="wrap-input100 validate-input m-b-16" data-validate = "password is required">
            <textarea class="input100" type="text" name="body" placeholder="Product Description"></textarea>
            <span class="focus-input100"></span>
          </div>
          
          <div class="flex-sb-m w-full p-t-3 p-b-24">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" >
    
            </div>

          </div>
          <div style= " padding: 20px;" >      </div>

          <div class="container-login100-form-btn m-t-17" >
            <input class="btn btn-primary" type="submit" name="uploadfilesub" value="upload" />
            <a class="btn btn-danger" href="addproduct.php">Cancel</a>
          </div>

        </form>
      </div>
    </div>
  </div>
  
  <!-- <form action="" method="post" enctype="multipart/form-data" > -->
<!--input tag for file types should have a "type" attribute with value "file"-->
<!-- <input type="file" name="uploadfile" /> -->
<!-- <input type="text" name="name" /> -->
<!-- <textarea name="body"></textarea> -->
<!-- <input type="text" name="link"/> -->
<!-- <input type="submit" name="uploadfilesub" value="upload" />
</form> -->
<<!-- /div> -->

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>