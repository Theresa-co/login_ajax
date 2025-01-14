<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>


  <div class="container">
    <div class="row">
      <div class="col">

        <form>
          <h1>Hello, world!</h1>
          <div class="form-group">
            <label for="exampleInput">Username</label>
            <input type="email" class="form-control" id="username" name="username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="pasword">
          </div>
          <button type="submit" class="btn btn-login btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

  <script>
    $(document).ready(function() {

      $(".btn-login").click(function() {

        var username = $("#username").val();
        var password = $("#password").val();

        if (username.length == "") {

          window.location.href = "<?php echo base_url() ?>index.php/auth";

        } else {

          $.ajax({

            url: "<?php echo base_url() ?>index.php/auth/auth_check",
            type: "POST",
            data: {
              "username": username,
              "password": password
            },

            success: function(response) {

              if (response == "success") {

                window.location.href = "<?php echo base_url() ?>index.php/testing";

              } else {

                window.location.href = "<?php echo base_url() ?>index.php/auth";

              }

            }

          });

        }

      });

    });
  </script>

</body>

</html>