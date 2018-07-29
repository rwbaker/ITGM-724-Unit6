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
 * This page displays all guest book entries,
 * AS WELL AS receives any post submissions from the create.php form
 *
 * @dependencies
 * includes/header.php - standard header nav for all pages
 * includes/readDataFile.php - Helper function to read data from text files
 * includes/writeDataFile.php - Helper function to write data to text files
 * Bootstrap @ https://getbootstrap.com
 *
 */



  //Importing helper functions to keep this page clean...
  include 'includes/writeDataFile.php';
  include 'includes/readDataFile.php';
  include 'includes/writeAvatar.php';
  include 'includes/makeDirectory.php';
  include 'includes/timestamp.php';

  /* Folder anmes */
  $avatarImageFolder = 'guestAvatar';
  $guestBookEntryFolder = 'guestBookEntries';


  // Pull data from POST array IF it's not empty
  if (!empty($_POST)) {

    // TEMPORARY
    // print_r($_POST);
    // echo "<br />---------<br />";
    // print_r($_FILES);
    // TEMPORARY

    // Create date
    $entryDate = date("m/d/Y");

    // Grab data from our POST array & make it easier to reference in the future
    $message = $_POST['form-text-message'];
    $email = $_POST['form-text-email'];

    // Get value if user submitted a name, otherwise default to Anon.
    if ($_POST['form-text-name']) {
      $name = $_POST['form-text-name'];
    } else {
      $name = "Anonymous";
    }

    //Handle avatar upload
    // if form-file-avatar array exists and file-size is bigger than 0 bytes
    if ($_FILES['form-file-avatar'] && $_FILES['form-file-avatar']['size'] > 0) {

        // Store upload in variable
        $avatarUpload = $_FILES['form-file-avatar'];

        // Call our function to save the image upload
        $avatarImagePath = writeAvatar($avatarImageFolder, $avatarUpload);
    } else {
      $avatarImagePath = '';
    }

    // Write the data in an external file
    writeDataFile($guestBookEntryFolder, $name, $email, $entryDate, $message, $avatarImagePath);

  }

  // Pull data from our 'guestBookEntries' folder
  $entries = readDataFile('guestBookEntries');

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
        <div class="col-5">
          <p class="text-secondary"><strong>Welcome to the Guestbook!</strong><br />
            <?php
              // Change our welcome message base of if there are entries or not...
              if (empty($entries)) {
                echo "Please look around, and be the first to sign our guestbook.";
              } else {
                echo "Explore other's comments, or make one yourself.";
              }
            ?>

          </p>
        </div>
      </div>

      <?php

      // Loop thru entry data
      foreach ($entries as $entryItem) {

        /**
        * $entryItem[0] - Name
        * $entryItem[1] - Email
        * $entryItem[2] - Create date
        * $entryItem[3] - Guestbook message
        * $entryItem[4] - Image path
        */

        // Check for image avatar
        if (isset($entryItem[4])) {

          // If it exists, store in variable
          $avatarImagePath = $entryItem[4];
          $initials = '';
        } else {

          // If not, get initials of Name...
          $avatarImagePath = '';

          // Pull first letter from each word. Use this to get user's initials. Returns array.
          preg_match_all("/[A-Z]/", ucwords(strtolower($entryItem[0])), $matches);
          // convert array to string
          $initials = implode("", $matches[0]);
        }

        // Print data in comment HTML template
        echo "
        <!-- COMMENT -->
        <div class='row'>
          <div class='col'>
            <div class='comment shadow-sm p-3 mb-5 bg-white rounded'>
              <div class='container'>
                <div class='row'>
                  <div class='col-2 d-sm-none d-md-block'>
                    <div class='avatar' style='background-image:url($avatarImagePath)'>$initials</div>
                  </div>
                  <div class='col'>
                    <div class='row'>
                      <div class='col name'>
                        <a href='mailto:$entryItem[1]'>$entryItem[0]</a>
                        <span class='low-priority-text'>says</span></div>
                      <div class='col date text-muted'>$entryItem[2]</div>
                    </div> <!-- END OF name/date row -->
                    <div class='comment-body text-secondary mt-2'>
                      $entryItem[3]
                    </div>
                  </div>
                </div><!-- END OF .comment .container .row -->
              </div><!-- END OF .comment .container -->
            </div><!-- END OF .comment -->
          </div><!-- END OF .col -->
        </div><!-- END OF .row -->";

      }

      ?>

    </div> <!-- END OF .contaner -->
  </body>

  </html>
