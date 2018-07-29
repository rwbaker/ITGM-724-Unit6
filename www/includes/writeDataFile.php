<?php
/**
 * @desc   Helper function to write data to text files.
 *
 * @param  string $dir            Directory name to store individual txt data files
 * @param  string $name           User's name (or anon.)
 * @param  string $entryDate      Date of entry created
 * @param  string $message        Guestbook message
 */

function writeDataFile($dir, $name, $entryDate, $message) {

  // folder name where data resides
  // $dir = "guestBookEntries";

  // var to hold all data before we write it
  $saveString = "";

  if (is_dir($dir)) {
    if (isset($_POST)){

      // Write name if not empty + line return
      if (!empty($name)) {
        $saveString .= stripslashes($name) . "\n";
      }

      // Write date + line return
      if (!empty($entryDate)) {
        $saveString .= stripslashes($entryDate) . "\n";
      }

      // write message if not empty + line return
      if (!empty($message)) {
        $saveString .= stripslashes($message) . "\n";
      }

      $currentTime = microtime();
      $timeArray = explode(" ", $currentTime);
      $timeStamp = (float)$timeArray[1] + (float)$timeArray[0];
      $saveFileName = "$dir/entry.$timeStamp.txt";
      if (file_put_contents($saveFileName, $saveString)>0) {
        // echo "File \"" . htmlentities($saveFileName) . "\" successfully saved. <br/>\n";
      } else {
        echo "Could not save file";
      }

      // if (!empty($name)) {echo "name: " . $name . "<br/>";}
    }
  }

}



?>
