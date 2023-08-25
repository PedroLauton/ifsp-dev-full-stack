<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./ex3/ex3.css">
   <title>Exercício 4</title>
   <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        form, .result {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <main>            
        <form method="get">
            Digite sua altura (m): 
            <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" minlength="1" maxlength="6" name="txt_alt"/>                
            <br><br>
            Digite seu peso (kg):
            <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" minlength="1" maxlength="6" name="txt_peso"/>    
            <br><br>    
            <input type="submit" name="confirm">
            </form>
        <?php
            $altura = isset($_GET["txt_alt"]) ? $_GET["txt_alt"] : 1;
            $peso = isset($_GET["txt_peso"]) ? $_GET["txt_peso"] : 1;
            $imc = $peso / (($altura * $altura));
            
            if(isset($_GET["confirm"])){
                if($imc < 18.5){
                    echo "<div class=\"result\">";
                        echo "<b>Magreza.</b>";
                    echo "</div>";
                }else if ($imc >= 18.5 && $imc < 24.9){
                    echo "<div class=\"result\">";
                        echo "<b>Saudável.</b>";
                    echo "</div>";
                }else if ($imc >= 25 && $imc < 29.9){
                    echo "<div class=\"result\">";
                        echo "<b>Sobrepso.</b>";
                    echo "</div>";
                }else if ($imc >= 30 && $imc < 34.9){
                    echo "<div class=\"result\">";
                        echo "<b>Obesidade Grau I.</b>";
                    echo "</div>";
                }else if ($imc >= 35 && $imc < 39.9){
                    echo "<div class=\"result\">";
                        echo "<b>Obesidade Grau II (severa).</b>";
                    echo "</div>";
                }else{
                    echo "<div class=\"result\">";
                        echo "<b>Obesidade Grau III (morbida).</b>";
                    echo "</div>";
                }
            }
        ?>
    </main>
</body>
</html>