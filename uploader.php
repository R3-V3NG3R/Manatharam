<?php

  require 'templates/functions.php';

  if(isset($_POST['ContactUs']))
  {
    $name=$_POST['name'];
    $mail=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    if(inserter("insert into contactus(Name,Email,Subject,Message) values('$name','$mail','$subject','$message')",$conn))
    {
      header('Location: contact.php?status=1');
    }else {
      header('Location: contact.php?status=0');
    }
  }

  if(isset($_POST['NeedHelp']))
  {
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $need=$_POST['need'];
    $address=$_POST['address'];

    if(inserter("insert into needhelp(Name,Mobile,Need,Address) values('$name','$mobile','$post','$address')",$conn))
    {
      header('Location: index.php?status=1');
    }else {
      header('Location: index.php?status=0');
    }

  }

  if(isset($_POST['organDonation']))
  {
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $mail=$_POST['mail'];
    $type=$_POST['type'];
    $address=$_POST['address'];

    if(inserter("insert into organdonation(Name,Mobile,Email,Type,Address) values('$name','$mobile','$mail','$type','$address')",$conn))
    {
      header('Location: index.php?status=1');
    }else {
      header('Location: index.php?status=0');
    }
  }

  if(isset($_POST['joinTeam']))
  {
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $mail=$_POST['mail'];
    $reason=$_POST['reason'];
    $address=$_POST['address'];

    if(inserter("insert into joinus(Name,Mobile,Email,Reason,Address) values('$name','$mobile','$mail','$reason','$address')",$conn))
    {
      header('Location: index.php?status=1');
    }else {
      header('Location: index.php?status=0');
    }
  }

 ?>
