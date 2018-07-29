<?php
/**
 * @desc   Helper function to write image uploads.
 *
 * @param  string $dir            Directory name to store image files
 * @param  Array  $avatar         Avatar file upload
 */

function writeAvatar($dir, $avatar) {

  // Make the storage directory if it doesn't exist...
  if (makeDirectory($dir) == TRUE) {

    // File name placeholders
    $imageTmp = $avatar['tmp_name'];
    $imageName = returnTimestamp() . $avatar['name'];

    // Image path
    $avatarImagePath = $dir . '/' . $imageName;

    // Move the image to a permanent location...
    if (move_uploaded_file($imageTmp, $avatarImagePath) == FALSE) {
      echo "Could not move uploaded file";

    } else {
      chmod($avatarImagePath, 0644);
      // echo "Successful!";
    }

    return $avatarImagePath;

  }

}



?>
