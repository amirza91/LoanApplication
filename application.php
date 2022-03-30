<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Checkout example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0./dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2>Application form</h2>
        <p class="lead"></p>
      </div>

      <div class="row">
        <!-- In this application form to customer is a way I created how the customer will input his/her information -->
        <!-- From the top the bottom you can see all the correspondinginput. They are first name, last name , address ,   -->
        <!-- social, state, zip, phone number, email, employer, salary, term, credit score and dti. -->

        <!-- Customer will fill out the application and looking into salary, dti, and credit score, will tell if the customer qualifies for a loan -->
        
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Fill in the information below</h4>
          <form class="needs-validation" novalidate action = applicationstatus.php method = post> 
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name = firstName placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name = lastName placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name = address placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="address2" name = address2 placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="Social">Social</label>
                <input type = "text" class= "form-control" id="Social" name = Social placeholder="" required>
                  
                <div class="invalid-feedback">
                  Please input a valid Social.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name = State placeholder="" required>

                  
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name = zip placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
              
              
            </div>
            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" name = email placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for updates.
              </div>
            </div>
            <div class="mb-3">
              <label for="Phone">Phone Number <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="Phone" name = Phone placeholder="(XXX)-XXX-XXXX">
              <div class="invalid-feedback">
                Please enter a valid phone number
              </div>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Employement</h4>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Employer">Employer</label>
                <input type="text" class="form-control" id="Employer" name = Employer placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name of employer is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="Salary">Salary</label>
                <input type="text" class="form-control" id="Salary" name = Salary placeholder="" required>
                <div class="invalid-feedback">
                  Salary is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="Term">Length of Employement(years)</label>
                <input type="text" class="form-control" id="Term" name = term placeholder="" required>
                <div class="invalid-feedback">
                  Length of Enployemnt is required
                </div>
              </div>
              
            </div>
            <hr class="mb-4">



            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Credit">Credit Score</label>
                <input type="text" class="form-control" id="Credit" name = credit placeholder="" required>
                <div class="invalid-feedback">
                  Credit score is required
                </div>
              </div>
            </div>

              <hr class="mb-4">

              <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Dti">Debt to Income Percentage</label>
                <input type="text" class="form-control" id="Dti" name = dti placeholder="" required>
                <div class="invalid-feedback">
                  Debt to Income is required
                </div>
              </div>
            </div>

              <hr class="mb-4">


            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit Application</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2011-2021 Altamush Loans Inc</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
