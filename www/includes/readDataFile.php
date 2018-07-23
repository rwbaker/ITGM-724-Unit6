<?php
/**
 * @desc   Helper function to read data from text files.
 * 
 * @param  [string] $dir      Directory that holds all the txt date files to pull
 * @return [array]  $entreis  Entry data pulled from txt files
 */

  function readDataFile($dir) {

    // Array to store all entries
    $entries = array();

    if (is_dir($dir)) {
      $entryFiles = scandir($dir);
      foreach ($entryFiles as $fileName) {

        // Exclude hidden files
        // @todo: limit to *.txt files
        if (($fileName != ".") && ($fileName != "..") && ($fileName != ".DS_Store")) {

          // Pull data from file
          $entry = file($dir . "/" . $fileName);

          // Add to array
          $entries[] = $entry;

        }
      }
    }

    // Return array to fn that called it
    return $entries;

  }


?>
