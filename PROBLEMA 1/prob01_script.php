<div class= "result">
<?php
if (isset($_POST['numero'])) {
    $numero = (int)$_POST['numero']; 

    if ($numero > 0) {
        for ($i = 0; $i < $numero; $i++) {
            echo "Seja bem-vindo!!<br>";
        }
    } else {
        echo "Por favor, insira um número válido.";
    }
} else {
    echo "Nenhum número foi enviado.";
}
?>
</div>
<style>
       .result{      
    text-align: center  ;  
    color: #db1414;
    font-size: 18px;
} </style>

