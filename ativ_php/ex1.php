<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Exercício 1</title>
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
    <form method="post">
        <label>Você:</label>
        <br><br>
        Está com fome?: 
        <br>
        Sim: <input type="radio" name="rad_sim_fome">
        Não: <input type="radio" name="rad_nao_fome">
        <br><br>
        Possui dinheiro?: 
        <br>
        Sim: <input type="radio" name="rad_sim_din">
        Não: <input type="radio" name="rad_nao_din">
        <br><br>
        <input type="submit" value="Enviar" name="confirm">
    </form>

    <?php
        $rad_sim_fome = isset($_POST["rad_sim_fome"]) ? $_POST["rad_sim_fome"] : 0;
        $rad_nao_fome = isset($_POST["rad_nao_fome"]) ? $_POST["rad_nao_fome"] : 0;
        $rad_sim_din = isset($_POST["rad_sim_din"]) ? $_POST["rad_sim_din"] : 0;
        $rad_nao_din = isset($_POST["rad_nao_din"]) ? $_POST["rad_nao_din"] : 0;
    
        if (isset($_POST["confirm"])) {
            if($rad_sim_fome && $rad_sim_din){
                echo "<div class=\"result\">";
                    echo "<b>Vá até o restaurante America Paulista - Av. Paulista, 2295!</b>";
                echo "</div>";
            }else{
                echo "<div class=\"result\">";
                    echo "<b>Infelizmente não tenho como ajudar.</b>";
                echo "</div>";
            }
        }
    ?>
</body>
</html>
