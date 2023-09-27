
<?php
include_once "settings.php";

/*if (!isset($_POST['login'])){
    header('Location:/login.php');
}
*/
/*
try {
	$result = $pdo->query("Select 1 FROM $name_tbl LIMIT 1");

} catch (PDOException $e) {
	echo ($e->getMessage());
    header('Location:/greate_tbl.php');
    
}
*/
if(!empty($_POST['login'])){

    if( ($_POST['login'] == $login) && ($_POST['pwd'] == $pwd) ){
        $_SESSION['login'] = $_POST['login'];
    }
    
var_dump($_SESSION['login']);
}


//var_dump($_POST);

// Обращаемся к таблице tbl_name

$pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $password);

$statement = $pdo->prepare("SELECT * FROM $name_tbl");
$statement->execute();
$array = $statement->fetchAll(PDO::FETCH_ASSOC);

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

  <nav class="navbar navbar-light bg-light p-3">
  <div class="container-fluid">
    <a href="index.php" class="nav-link">Данные</a>
    <form class="d-flex">
      
    <a href="login.php" class="nav-link">Авторизация</a>
    </form>
  </div>
</nav>

  <div class="container-md">
  <h1>Данные:</h1> 
  
    <?php if(!isset ($_POST['login'])): ?>
        <h3>Для контента нужно авторизоваться</h3>
    <?php elseif( ($_POST['login'] == $login) && ($_POST['pwd'] == $pwd) ): ?>
            <a class="btn btn-outline-primary" href="add.php" role="button">создать</a>
                <?php if($array):?>
                    <div class="row">
                    <div class="col-md-10">
                        <table class="table table-striped">
            
                        <thead>
                        
                            <th scope="col">ID</th>
                            <th scope="col">Дата</th>
                            <th scope="col">Text1</th>
                            <th scope="col">Text2</th>
                            <th scope="col">Text3</th>
                            <th scope="col">number</th>
                            
                        
                        </thead>
                            <tbody>
                                <?php foreach($array as $value):?>
                                    <tr>
                                        <td><?php echo $value['id'];?></td>
                                        <td><?php echo date_format(date_create($value['today']),"d-m-Y");?></td>
                                        <td><?php echo $value['text1'];?></td>
                                        <td><?php echo $value['text2'];?></td>
                                        <td><?php echo $value['text3'];?></td>
                                        <td><?php echo $value['num'];?></td>
                                        <td>
                                        <a href="show.php?id=<?php echo $value['id']?>" class="btn btn-outline-primary">show</a>
                                        <a href="edit.php?id=<?php echo $value['id']?>" class="btn btn-outline-warning">edit</a>
                                        <a href="delete.php?id=<?php echo $value['id']?>" class="btn btn-outline-danger">delete</a>
                                        </td>
                                
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                </div>
                </div>
                
                <?php endif; //array?>
    <?php else:?>
        <h3> Неправильные данные. Попробуй еще</h3>
    <?php endif; //if(!isset ($_POST['login'])):?>
     
</div>
    
    
  </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>

