

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>login</title>
</head>
<body>
    <div class="container md p-5">
        <div class="row-12">
            <div class="col-8">
            <h1>Чтобы пробраться во внутрь, авторизуйся</h1>
            <form action="index.php" method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" name="login" id="login" class="form-control" placeholder="Твоя фамилия"/>
                <label class="form-label" for="login">Логин</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="pwd" class="form-control" placeholder="Пароль"/>
                <label class="form-label">Пароль</label>
            </div>

                <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Войти</button>
            
            </form>

            </div>
        </div>    


    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>

<?php
if(!empty($_POST['login'])){

    if( ($_POST['login'] == $login) && ($_POST['pwd'] == $pwd) ){
        $_SESSION['login'] = $_POST['login'];
    }
    


}

?>