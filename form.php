<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
    <div style="display: grid; align-content: center; height: 100vh" class="container">
      <div class="card">
        <div class="card-body">
          <form method="post" action="src/controller/LoginController.php">
              <div class="mb-3">
                <label class="form-label">Login</label>
                <input type="tezt" name="login" class="form-control" id="" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" name='senha' class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>
