<?php


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
