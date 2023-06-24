<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>404 || Page Not Found</title>
  <style>
    .jumbotron {
      padding: 2rem 2rem;
    }

    @media only screen and (max-width: 768px) {
      .display-4 {
        font-size: 2.5rem;
        font-weight: 300;
        line-height: 1.2;
      }

      .lead {
        font-size: 1rem;
        font-weight: 300;
      }

      .jumbotron {
        padding: 1rem 1rem;
      }

      .image-center {
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row my-5">
      <div class="col-md-11 mx-auto">
        <div class="jumbotron">
          <div class="row">
            <div class="col-md-3 image-center">
              <img width="90%" src="<?= base_url('assets/pageNotFound.png'); ?>" alt="404ErrorImage">
            </div>
            <div class="col-md-9 my-auto">
              <h1 class="display-4">Oops!<br>That page can't be found.</h1>
            </div>
          </div>
          <p class="lead pt-2">We're Sorry for this Inconvenience, but we are not able to find the page you are looking for. Probably the page is moved to somewhere else or an Unknown error occured.</p>
          <p class="lead pt-2">
            <a class="btn btn-secondary" href="<?= base_url(); ?>" role="button">
              <i class="fa fa-undo" aria-hidden="true"></i> Back to Home</a>
          </p>
        </div>
      </div>
    </div>
  </div>

</body>

</html>