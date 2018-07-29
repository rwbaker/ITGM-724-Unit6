<?php
/**
 * @desc   Helper function to write data to text files.
 *
 * @param  string $dir              Directory name to store individual txt data files
 * @param  string $name             User's name (or anon.)
 * @param  string $email            User's email address
 * @param  string $entryDate        Date of entry created
 * @param  string $message          Guestbook message
 * @param  string $avatarImagePath  Avatar image path
 */

function writeDataFile($dir, $name, $email, $entryDate, $message, $avatarImagePath) {

  // var to hold all data before we write it
  $saveString = "";

  if (makeDirectory($dir) == TRUE) {
    if (isset($_POST)){

      // Write name if not empty + line return
      if (!empty($name)) {
        $saveString .= stripslashes($name) . "\n";
      }

      // Write email if not empty + line return
      if (!empty($email)) {
        $saveString .= stripslashes($email) . "\n";
      }

      // Write date + line return
      if (!empty($entryDate)) {
        $saveString .= stripslashes($entryDate) . "\n";
      }

      // write message if not empty + line return
      if (!empty($message)) {
        $saveString .= stripslashes($message) . "\n";
      }

      // Store avatar image path
      if (!empty($avatarImagePath)) {
        $saveString .= stripslashes($avatarImagePath) . "\n";
      }

      $timeStamp = returnTimestamp();
      $saveFileName = "$dir/entry.$timeStamp.txt";
      if (file_put_contents($saveFileName, $saveString)>0) {
        // echo "File \"" . htmlentities($saveFileName) . "\" successfully saved. <br/>\n";
      } else {
        // @todo make human-friendly error
        // echo "Could not save file";
      }

      // if (!empty($name)) {echo "name: " . $name . "<br/>";}
    }
  }

}



?>
