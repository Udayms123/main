<?php
  // connect.php 
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'service_portal';
  $conn = mysqli_connect($server, $username, $password, $database);
  // Check connection 
  if (!$conn) {
      exit('Error: could not establish database connection');
  }
  // Select database 
  if (!mysqli_select_db($conn, $database)) {
      exit('Error: could not select the database');
  }
  ?>

<!-- 
Microsoft Windows [Version 10.0.22631.5549]
(c) Microsoft Corporation. All rights reserved.

C:\xampp\mysql\bin>mysqldump -u root -p service_portal > service_portal.sql
Enter password:

C:\xampp\mysql\bin>mysql -u root -p service_portal2 < service_portal.sql
Enter password:

C:\xampp\mysql\bin>^A -->

