<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Config</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<div class = "wrap">
<h1>Registre Seu Treino do Dia</h1>

<form method="post">
<div class="form-group">
  <label for="nome"></label>
  <input type="text" class="form-control" name="nome_usuario" id="nome" placeholder="Nome">
  <br><br>

  <label for="data"></label>
  <input type="date" class="form-control" name="data" id="data" placeholder="Data">
  <br><br>

  <label for="atividade"></label>
  <input type="text" class="form-control" name="nome_atividade" id="atividade" placeholder="Nome Atividade">
  <br><br>

  <label for="carga-hora"></label>
  <input type="number" class="form-control" name="carga_hora" id="c-hora" placeholder="Carga Horaria">
  <br><br>

  <label for="calorias"></label>
  <input type="text" class="form-control" name="calorias" id="calorias" placeholder="Calorias">
  <br><br>

  <label for="pace"></label>
  <input type="number" class="form-control" name="pace" id="pace" placeholder="Pace">
  <br><br>

  <label for="km"></label>
  <input type="text" class="form-control" name="km" id="km" placeholder="Km">
  <br><br>

  <?php submit_button();?>
  
  </div>
  </form>


</div>
    
</body>
</html>