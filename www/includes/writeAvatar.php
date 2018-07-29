<?php
/**
 * @desc   Helper function to write image uploads.
 *
 * @param  string $dir            Directory name to store individual txt data files
 * @param  ?file? $avatar         Optional avatar image upload
 */

function writeAvatar($dir, $avatar) {

  // echo "writeAvatar called! <br />";
  // print_r($_FILES);

  // Placeholder for the image UR>
  $avatarImagePath = '';

  $imageTmp = $avatar['tmp_name'];
  $imageName = $avatar['name'];

  if (move_uploaded_file($imageTmp, "uploads/" . $imageName) == FALSE) {
    echo "Could not move uploaded file";
  } else {
    chmod("uploads/" . $imageName, 0644);
    echo "Successful!";
  }

return $avatarImagePath;

}



?>
