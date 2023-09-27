
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
            <h1>Изменить: </h1>
            <form action="update.php" method="post">
                      
            <input type="hidden" class="form-control" name="id" value="<?php echo $value['id']?>">

            <label for="text1" class="form-label">text1</label>
            <input type="text" class="form-control" name="text1" value="<?php echo $value['text1']?>">

            <label for="text2" class="form-label">text2</label>
            <input type="text" class="form-control" name="text2" placeholder=""  value="<?php echo $value['text2']?>">

            <label for="text3" class="form-label">text3</label>
            <input type="text" class="form-control" name="text3" placeholder=""  value="<?php echo $value['text3']?>">

            <label for="num" class="form-label">num</label>
            <input type="text" class="form-control" name="num" placeholder=""  value="<?php echo $value['num']?>">

            
            <div class="col-12 p-5">
                <button type="submit" class="btn btn-outline-primary">изменить</button>
            </div>

            </form>

        </div>
    </div>
    
    
  </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
