<?php

/**
 * Exercise 2, Unit 5-6, ITGM-727
 * @author Richard Baker, rbaker22@student.scad.edu
 *
 * @assignment
 * Using the materials covered in the course so far, create a guestbook that
 * allows users to leave comments. For extra credit, allow users to also
 * upload an image with their post (up to 10 points awarded for this
 * functioning feature).
 *
 * @shortdesc
 * This page submits new Guestbook Entry form data to index.php
 *
 * @dependencies
 * includes/header.php - standard header nav for all pages
 * includes/readDataFile.php - Helper function to read data from text files
 * includes/writeDataFile.php - Helper function to write data to text files
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

          <h1 class="h3 mb-5">Sign the Guest Book</h1>

          <!--
          FORM -->
          <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" name="form-text-name" placeholder="">
            </div>

            <div class="form-group">
              <label for="">Email address *</label>
              <input type="email" class="form-control" name="form-text-email" required placeholder="">
            </div>

            <div class="form-group">
              <label for="form-text-message">Message *</label>
              <textarea class="form-control" name="form-text-message" rows="3" required></textarea>
            </div>

            <div class="form-group">
              <label for="form-file-avatar">Upload an avatar</label>
              <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
              <input type="file" accept=".jpg, .jpeg, .png" class="form-control-file" name="form-file-avatar">
            </div>

            <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>

          </form>

        </div> <!-- END OF .col-5 -->
      </div> <!-- END OF .container -->

    </div> <!-- END OF .container -->
  </body>

  </html>
