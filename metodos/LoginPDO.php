<?php
//$conn = new PDO('mysql:host=localhost;dbname=db_erp', 'root', '');


//var_dump($conn);

$id = 1;
try {
    $conn = new PDO('mysql:host=localhost;dbname=db_erp', 'root', '');;
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare('SELECT * FROM usuario WHERE idUsuario = :id');
      $stmt->execute(array('id' => $id));
      while($row = $stmt->fetch()) {
        print_r($row);
    }



  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }



?>