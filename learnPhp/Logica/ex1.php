<?php
  echo $_GET['number'];  
    $dolar = 5.63;
  function realDolar($val, $dolar) {
    return $dolar/ $val;
  }

  function dolarReal($val, $dolar) {
    return $val * $dolar;
  }

  echo realDolar(1, $dolar);
  echo '<hr>';
  echo dolarReal(20, $dolar);

?>