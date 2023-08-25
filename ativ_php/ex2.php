<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Exercício 2</title>
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
    <?php
        $nome = isset($_GET["txt_nome"]) ? $_GET["txt_nome"] : 0;
        $idade = isset($_GET["num_idade"]) ? $_GET["num_idade"] : 0;
        $n_ifsp = isset($_GET["rad_ifsp_n"]) ? $_GET["rad_ifsp_n"] : 0;
        $s_ifsp = isset($_GET["rad_ifsp_s"]) ? $_GET["rad_ifsp_s"] : 0;        
        $ingresso = isset($_GET["rad_ingr"]) ? $_GET["rad_ingr"] : 0;
        
        echo "<form method=\"get\">";
            echo "Digite seu nome: <input type=\"text\" name=\"txt_nome\" maxlength=\"50\" required>";
            echo "<br><br>";
            echo "Idade: <input type=\"number\" name=\"num_idade\" min=\"1\" max=\"130\" required>";
            echo "<br><br>";
            echo "<br>Você é estudante do IFSP?";
            echo "<br>";
            echo "Sim: <input type=\"radio\" name=\"rad_ifsp_s\">";
            echo "Não: <input type=\"radio\" name=\"rad_ifsp_n\">";
            echo "<br><br>";
            echo "<br>Escolha o ingresso:<br>";
            echo "<br>Entrada padrão (R$20,00): <input type=\"radio\" name=\"rad_ingr\" value=\"20\">"; 
            echo "Entrada VIP (R$50,00): <input type=\"radio\" name=\"rad_ingr\" value=\"50\">";
            echo "<br><br><br><input type=\"submit\" value=\"Enviar\" name=\"enviar2\">";        
        echo "</form>";
        
        if(isset($_GET["enviar2"]) && $idade < 18) {
            echo "<div class=\"result\">";
                echo "<b>Você é menor de idade, falta ",(18 - $idade);
                echo " ano(s) para atingir a maioridade.</b>";
            echo "</div>";
        }else{
            if(isset($_GET["enviar2"]) && $s_ifsp){
                echo "<div class=\"result\">";
                    echo "<b>Parabéns, você consegiu 50% de desconto, o ingresso fica por R$",($ingresso * 0.5);
                    echo "!</b>";
                echo "</div>";
            }else if (Isset($_GET["enviar2"]) && $n_ifsp){
                echo "<div class=\"result\">";
                    echo "<b>Seu ingresso fica por R$$ingresso.</b>";
                echo "</div>";
            }
        }
    ?>
</body>
</html>
