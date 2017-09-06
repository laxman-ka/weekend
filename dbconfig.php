<?php

  $con = mysqli_connect('localhost', 'root', 'Infi@1234', 'laxman');

  if (!$con) {
      die('connection failed'.mysqli_connect_error());
  }
