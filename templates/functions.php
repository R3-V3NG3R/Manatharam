
<?php
    require_once 'connection.php';
//$out = selector("SELECT * FROM notifications ORDER BY pDate DESC LIMIT 10",$conn);
//inserter("INSERT INTO notifications(pDate,file,link,description) VALUES('12-08-2017','0','https://','descp')",$conn);
//print_r($out);
//uploader($_FILES["fileToUpload"],uploads);

//FUNCTIONS



//SELCT QUERY
  function selector($mySQL,$conn)
  {
    $result = $conn->query($mySQL);
    $out =[];

    if ($result->num_rows > 0)
    {

      $i=0;
      while($row = $result->fetch_assoc()) {
          foreach ($row as $key => $value) {
            $out[$i][$key] = $value;
          }
          $i++;
        }
    }
    return $out;
  }

  //INSERTER
  function inserter($mySQL,$conn)
  {
    if ($conn->query($mySQL)) {
      return true;
    }else {
      return false;
    }
  }


  //uploader

  function uploader($files,$destination)
  {

      $targetfolder = $destination.'/';

      $target_file = $targetfolder . basename( $files['name']) ;


      $targetfolder=$targetfolder.time().'.'.strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      if(move_uploaded_file($files['tmp_name'], $targetfolder))

      {

      return $targetfolder;

      }

      else {

      return 0;

      }

    /*
    $target_dir = $destination."/";
    $fName = time();
    $target_file = $target_dir . basename($files["name"]);
    $uploadOk = 1;
    $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $target_file = $target_dir.$fName.'.'.$FileType;

    // Check file size
    if ($files["size"] > 500000) {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        return 0;
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($files["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            return 0;
        }
    }


    */


  }


?>
