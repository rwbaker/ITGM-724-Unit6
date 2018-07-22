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

          // Print all content...
          // $entry = file_get_contents($dir . "/" . $fileName);
          // echo $entry . "<br>";

          $entry = file($dir . "/" . $fileName);
          // echo "name: " . htmlentities($entry[0]) . "<br>";
          // echo "date: " . htmlentities($entry[1]) . "<br>";
          // echo "message: " . htmlentities($entry[2]) . "<br>";

          $entries[] = $entry;

        }
      }
    }

    return $entries;

  }


?>
