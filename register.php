<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Register</title>

  <!-- Vendors Style-->
  <link rel="stylesheet" href="css/vendors_css.css">

  <!-- Style-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/skin_color.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(images/auth-bg/bg-2.jpg)">

  <div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">

      <div class="col-12">
        <div class="row justify-content-center g-0">
          <div class="col-lg-8 col-md-8 col-12">
            <div class="bg-white rounded10 shadow-lg">

              <div class="content-top-agile pt-4">
                <img src="images/logo.png" height="100" alt="User Image" class="">
                <h3>Register</h3>
                <p>Create an account.</p>
              </div>
              <div class="p-40 pt-0">
                <form action="action/register.php" method="post" id="register">
                  <div class="row">
                      <div class="form-group col-md-6 col-lg-6">
                        <label class="form-label">Name</label>
                        <div class="input-group">
                          <span class="input-group-text"><i class="ti-user"></i></span>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                        </div>
                      </div>
                      <div class="form-group col-md-6 col-lg-6">
                        <label class="form-label">Mobile No.</label>
                        <div class="input-group">
                          <span class="input-group-text"><i class="ti-headphone-alt"></i></span>
                          <input type="number" name="number" id="number" class="form-control" placeholder="Mobile No.">
                        </div>
                      </div>
                      <div class="form-group col-md-6 col-lg-6">
                        <label class="form-label">Email Id</label>
                        <div class="input-group">
                          <span class="input-group-text"><i class="ti-envelope"></i></span>
                          <input type="email" name="email" id="email" class="form-control" placeholder="Email Id">
                        </div>
                      </div>
                      <div class="form-group col-md-6 col-lg-6">
                        <label class="form-label">Referral Code</label>
                        <div class="input-group">
                          <span class="input-group-text"><i class="ti-map-alt"></i></span>
                          <input type="text" name="referral_code" id="referral_code" class="form-control" placeholder="Referral Code">
                        </div>
                      </div>
                      <div class="form-group col-md-6 col-lg-6">
                        <label class="form-label">Password</label>
                        <div class="input-group">
                          <span class="input-group-text"><i class="ti-star"></i></span>
                          <input type="text" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                      </div>
                      <div class="row">
                      <!-- /.col -->
                      <div class="col-12">
                       <div class="fog-pwd text-end">
                        Already have an account? <a href="login.php" class="hover-warning">Login</a><br>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-12 text-center">
                        <button onclick="ValidationEvent(event)" type="submit" class="btn btn-danger mt-10">Register</button>
                      </div>
                      <!-- /.col -->
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
    function ValidationEvent(e) {
      e.preventDefault();
      // alert('1');
      var name = document.getElementById("name").value;
      var number = document.getElementById("number").value;
      var email = document.getElementById("email").value;
      var referral_code = document.getElementById("referral_code").value;
      var password = document.getElementById("password").value;

    if(name == "") {
        swal("Oops!", "Name is required!", "warning");
      }
      else if(number == "") {
        swal("Oops!", "Mobile no. is required!", "warning");
      }
      else if(email == "") {
        swal("Oops!", "Email is required!", "warning");
      }
      else if(referral_code == "") {
        swal("Oops!", "Referral code is required!", "warning");
      }
      else if(password == "") {
        swal("Oops!", "Password is required!", "warning");
      }
    else{
        $('#register').submit();
      }
    }
</script>

  <!-- Vendor JS -->
  <script src="js/vendors.min.js"></script>
  <script src="js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>

</body>
</html>
