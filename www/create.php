<?php

/**
 * Exercise 2, Unit 5-6, ITGM-727
 * @author Richard Baker, rbaker22@student.scad.edu
 *
 * @assignment
 *
 *
 *
 * @short desc
 *
 *
 *
 * @dependencies
 * Bootstrap @ https://getbootstrap.com
 *
 */
?>

  <!DOCTYPE html>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/main.css">
  <title>Exercise 2, ITGM-727</title>
  </head>

  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap-4/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap-4/js/bootstrap.bundle.min.js"></script>


    <!-- APP NAV BAR -->
    <?php include 'includes/header.php'; ?>

    <div class="container">
      <div class="row justify-content-center mt-5 mb-3">
        <div class="col-7">

          <!--
          FORM -->
          <form>
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" id="form-text-name" placeholder="">
            </div>

            <!-- <div class="form-check mb-3">
              <input type="checkbox" class="form-check-input" id="form-check-anon">
              <label class="form-check-label" for="form-check-anon">Anonymous</label>
            </div> -->

            <div class="form-group">
              <label for="form-text-message">Message</label>
              <textarea class="form-control" id="form-text-message" rows="3"></textarea>
            </div>

            <div class="form-group">
              <label for="form-file-avatar">Upload an avatar</label>
              <input type="file" class="form-control-file" id="form-file-avatar">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div> <!-- END OF .col-5 -->
      </div> <!-- END OF .container -->

    </div> <!-- END OF .container -->
  </body>

  </html>
