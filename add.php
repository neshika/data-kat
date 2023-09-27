<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Добавление</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-md">

    <div class="row">
        <div class="col-md-10">
            <h1>Создать: </h1>
            <form action="store.php" method="post">
                      
            <label for="text1" class="form-label">text1</label>
            <input type="text" class="form-control" name="text1" placeholder="">

            <label for="text2" class="form-label">text2</label>
            <input type="text" class="form-control" name="text2" placeholder="">

            <label for="text3" class="form-label">text3</label>
            <input type="text" class="form-control" name="text3" placeholder="">

            <label for="num" class="form-label">num</label>
            <input type="text" class="form-control" name="num" placeholder="">

            
            <div class="col-12 p-5">
                <button type="submit" class="btn btn-outline-primary">отправить</button>
            </div>

            </form>

        </div>
    </div>


</div>
    
    
  </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>