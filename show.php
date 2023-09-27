
<?php
include_once "settings.php";


$sql = "SELECT * FROM $name_tbl WHERE id = :id" ;  
$statement = $pdo->prepare($sql);
$statement->execute($_GET);
$value = $statement->fetch(PDO::FETCH_ASSOC);


?>


<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Документ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-md">

    <div class="row">
    <div class="col-md-10">
        <h1>Данные по <?php echo $_GET['id']?></h1>

        <p class="info noprint">
                    <p class="date"><?php echo date_format(date_create($value['today']),"d-m-Y");?></p>
                    <p class="text1"><?php echo $value['text1'] ?></p>
                    <p class="text2"><?php echo $value['text2'] ?></p>
                    <p class="text3"><?php echo $value['text3'] ?></p>
                    <p class="num"><?php echo $value['num'] ?></p>
        </p>
        <a class="btn btn-outline-primary" href="index.php" role="button">назад</a>
               
             
              
    </div>
    </div>
 
    
  </div>
    
    
  </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
