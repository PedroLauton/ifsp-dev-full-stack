<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Exercíco 5</title>
   <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        main {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 30%;
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
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: #f4f4f4;
        }

        .result b {
            color: #007bff;
        }
    </style>
</head>
<body>
    <main>            
        <form method="get">
            <label for="txt_voto">Digite o número do candidato:</label>
            <br>
            <input type="text" id="txt_voto" oninput="this.value = this.value.replace(/[^0-9]/g, '')" minlength="1" maxlength="2" name="txt_voto"/>    
            <br><br>            
            <label>Confirma o voto?</label>
            Sim: <input type="radio" name="rad_voto_sim">
            Não: <input type="radio" name="rad_voto_nao">
            <br><br>
            <input type="submit" name="confirm" value="Confirmar Voto">
        </form>
        <?php
            $voto = isset($_GET["txt_voto"]) ? $_GET["txt_voto"] : 0;
            $rad_voto_sim = isset($_GET["rad_voto_sim"]) ? $_GET["rad_voto_sim"] : 0;
            $rad_voto_nao = isset($_GET["rad_voto_nao"]) ? $_GET["rad_voto_nao"] : 0;
            $contagem = [0, 0, 0, 0, 0];
            
            if(isset($_GET["confirm"])){
                if($rad_voto_sim){
                    if($voto == 83){
                        $contagem[1]++;
                    }else if($voto == 93){
                        $contagem[2]++;
                    }else if($voto == 00){
                        $contagem[3]++;
                    }else{
                        $contagem[4]++;
                    }
                }else if($rad_voto_nao){
                    header("Location: ex5.php");
                    exit;
                }
            echo "<div class=\"result\">";
                echo "<b>Reletório das eleições:</b><br><br>";
                echo "Alibabá: $contagem[1]<br>";
                echo "Alcapone: $contagem[2]<br>";
                echo "Brancos: $contagem[3]<br>";
                echo "Nulos: $contagem[4]<br><br>";
                ganhador($contagem[1], $contagem[2], $contagem[3], $contagem[4]);
            echo "</div>";
            }
            
            function ganhador($alibaba, $alcapone, $brancos, $nulos){
                if($alibaba > $alcapone){
                    echo "<b>Eleito: Alibabá!</b>";
                }else if($alcapone > $alibaba){
                    echo "<b>Eleito: Alcapone!</b>";
                }else if($nulos > $alibaba && $nulos > $alcapone){
                    echo "<b>Sem eleito.</b>";
                }else if($brancos > $alibaba && $brancos > $alcapone){
                    echo "<b>Sem eleito.</b>";
                }
            }
        ?>
    </main>
</body>
</html>
