<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Survey</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bg-light {
          background-color: #f8f9fa !important;
       }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .top-margin {
        margin-top: 50px;
      }
      .bottom-margin {
        margin-bottom: 30px;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container top-margin">
      <div class="py-5 text-center">
        <h1 class="bottom-margin">Do You Believe the Country is Better Off Under Trump or Biden?</h1>
        <img class="d-block mx-auto mb-4" src="assets/images/trumpbiden.png" alt="" width="100%">
      </div>

      <div class="row">
        <div class="col-md-12">
          <form class="needs-validation" novalidate>
            <!--
            Joe Biden
            Donald Trump
            I don’t have an opinion
            -->

            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="joe-biden">
              <label class="custom-control-label" for="joe-biden">Joe Biden</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="donald-trump">
              <label class="custom-control-label" for="donald-trump">Save this information for next time</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="no-opinion">
              <label class="custom-control-label" for="no-opinion">I don’t have an opinion</label>
            </div>


            <div class="mb-3 top-margin">
              <label for="Name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Name" required>
              <div class="invalid-feedback">
                Please enter your name.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your address.
              </div>
            </div>

            <div class="mb-3">
              <label for="zipCode">Zip Code</label>
              <input type="text" class="form-control" id="zipCode" placeholder="6027" required>
              <div class="invalid-feedback">
                Please enter your zip code.
              </div>
            </div>
            
            <div class="mb-3 top-margin">
              <p style="font-weight: bold;">I understand that as a voter in this poll I will be signed up for FREE updates and special offers from the Family Conservation PAC. I can unsubscribe at any time.</p>
              <p class="text-center top-margin"><i>Votes with invalid emails will not be counted.</i></p>
            </div>

            <button class="btn btn-primary btn-lg btn-block top-margin bottom-margin" type="submit">VOTE NOW</button>
          </form>
        </div>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script>
  </body>
</html>
