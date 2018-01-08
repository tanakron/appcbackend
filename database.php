<?php

    $link = mysqli_connect('localhost', 'appceftr_login', '1q2w3e4R', 'appceftr_login');
    
    mysqli_set_charset($link, 'utf8');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }