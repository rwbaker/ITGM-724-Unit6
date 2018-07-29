<?php
/**
 * @desc   Helper function to make a directory if it doesn't exist
 *
 * @param  string $folderPath     Directory name check/create
 */


function makeDirectory($folderPath) {

  if (file_exists($folderPath)) {
    // Folder exists, all good here...
    return true;

  } elseif (!file_exists($folderPath)) {
    //Folder doesn't exist... create it
    mkdir($folderPath, 0777, true);
    // Return true that the folder has been created and now exists
    return true;

  } else {

    // Return false if something has gone wrong...
    return false;
  }
}


?>
