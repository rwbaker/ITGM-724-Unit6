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
        <div class="col-5">
          <p class="text-secondary"><strong>Welcome to the guest book.</strong><br />
            Explore other's comments, or make one yourself.</p>
        </div>
      </div>



      <!-- COMMENT -->
      <div class="row">
        <div class="col">
          <div class="comment shadow-sm p-3 mb-5 bg-white rounded">
            <div class="container">
              <div class="row">
                <div class="col-2 d-sm-none d-md-block"><div class="avatar">JS</div></div>
                <div class="col">
                  <div class="row">
                    <div class="col name">Jacob Schmitt</div>
                    <div class="col date text-muted">00/00/0000</div>
                  </div> <!-- END OF name/date row -->
                  <div class="comment-body text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas massa felis, sodales eget justo in, finibus efficitur eros. Maecenas dapibus imperdiet lorem, in feugiat justo lobortis sit amet. Donec in laoreet erat. Cras consequat, lorem nec commodo convallis, ex odio scelerisque sapien, in auctor tortor est at sem.
                  </div>
                </div>
              </div><!-- END OF .comment .container .row -->
            </div><!-- END OF .comment .container -->
          </div><!-- END OF .comment -->
        </div><!-- END OF .col -->
      </div><!-- END OF .row -->


    </div> <!-- END OF .contaner -->
  </body>

  </html>
