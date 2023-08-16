<html>
  <head>
    <title>Calculadora php</title>
  </head>
  <body>
    <h1>Calculadora - Soma</h1>
    <form action="index.php" method="GET">
      operador1: <input type="text" name="op1">
       operador2: <input type="text" name="op2">
      <br><br>
      <select name="operacao">
        <option value=1>Somar</option>
        <option value=2>Subtrair</option>
        <option value=3>Multiplicar</option>
        <option value=4>Dividir</option>
      </select>
      <br><br>
      <input type="submit" value="Calcular">
    </form>
    <?php
      error_reporting(0);
      $v1 = $_GET["op1"];
      $v2 = $_GET["op2"];
      $operacao = $_GET["operacao"];
        switch ($operacao) {
          case 1:
            $result = $v1 + $v2;
            if($v1 != NULL) {
              echo "<h2>O resultado de $v1 + $v2 = $result</h2>";
            }
            break;
          
          case 2:
            $result = $v1 - $v2;
            if ($result) {
              echo "<h2>O resultado de $v1 - $v2 = $result</h2>";
            }
            break;

          case 3:
            $result = $v1 * $v2;
            if ($result) {
              echo "<h2>O resultado de $v1 x $v2 = $result</h2>";
            }
            break;

          case 4:
            $result = $v1 / $v2;
            if ($result) {
              echo "<h2>O resultado de $v1 / $v2 = $result</h2>";
            }
        }
    ?>
  </body>
</html>