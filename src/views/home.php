<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/main.css">
  <title>Calculator PHP</title>
</head>
<body>
  <header>
    <h1>Calculator PHP</h1>
  </header>

  <div>
    <form action="../index.php" method="post">
      <input type="text" placeholder="0">
      <div class="five-line">
        <input type="button" value="DEL">
        <input type="button" value="/">
      </div>
      <div class="four-line">
        <input type="button" value="7">
        <input type="button" value="8">
        <input type="button" value="9">
        <input type="button" value="*">
      </div>
      <div class="third-line">
        <input type="button" value="4">
        <input type="button" value="5">
        <input type="button" value="6">
        <input type="button" value="-">
      </div>
      <div class="second-line">
        <input type="button" value="1">
        <input type="button" value="2">
        <input type="button" value="3">
        <input type="button" value="+">
      </div>
      <div class="first-line">
        <input type="button" value="%">
        <input type="button" value="0">
        <input type="button" value=".">
        <input type="submit" value="=">
      </div>
    </form>
  </div>
</body>
</html>
