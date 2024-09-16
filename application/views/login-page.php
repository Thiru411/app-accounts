<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.4.5/css/bootstrapValidator.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>Index</title>
    <style>
      .container- {
  ...
  position: relative;
}

.login-page- {

  
  /* Center vertically and horizontally */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.help-block{color: #ff5858;display: block;}
.login-page-a a{color: #007bff;}
.form-check .help-block{position: absolute;left: 0;
    width: 100%;
    white-space: nowrap;}
    </style>
  </head>
  <body>
    
 <section class="container-">
     <div class="login-page- mx-auto">
         <h5 class="text-center mb-3">Sign In</h5>
       <div class="card" style="width: 25rem;">
          <div class="card-body">
            <div class="text-center mb-3">
                <p>Sign in to start your session</p>
            </div>
            <form class="formvalidation" action="<?php echo base_url()?>Admin/login_check" method="post">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1"  placeholder="Email"   data-bv-notempty-message="Please enter email" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Password"  data-bv-notempty-message="Please enter password" required>
              </div>
              <!-- <div class="d-flex justify-content-between mb-3">
                <div class="form-group form-check align-self-center mb-0">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1" data-bv-notempty-message="Please eneter chechk box" required>
                  <label class="form-check-label" for="exampleCheck1">Remember</label>
                </div> -->
                <div class="">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              <!-- <div class="login-page-a">
                <a href="#">I forgot my password</a>
              </div> -->
            </form>
          </div>
        </div>
     </div>
 </section>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.4.5/js/bootstrapValidator.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        
$('.formvalidation')
  .bootstrapValidator({
  }).on('success.form.bv', function (e) {
    // Prevent form submission
    e.preventDefault();
    var $form = $(e.target);
    fv = $form.data('formvalidation');
    if ($form.attr('action') != undefined) {
      $form.unbind('submit');
      $form.submit();
    }
  });
    </script>
  </body>
</html>