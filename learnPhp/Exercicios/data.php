<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    
    <?php
        $dataInicial = '2021-01-01';
        $dataFinal = '2021-01-09';

        //Transforma a string em segundos
        $time_inicial = strtotime($dataFinal);
        echo '<br>';
        $time_final = strtotime($dataInicial);
        

        echo $time_final;
        echo '<br>';
        echo '<br>';
        echo $time_inicial;
        echo '<br><br>';
        
        //Subtrai os segundos para tirar a diferença entre os dias
        $diferenca = $time_inicial - $time_final;

        //Um dia tem 24h, 60 min e 60 s;
        $segundosEmUmDIa= 24*60*60;
        echo $segundosEmUmDIa;

        $total = $diferenca / $segundosEmUmDIa; 
        echo $total;
    ?>
</body>
</html>