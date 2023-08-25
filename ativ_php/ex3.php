<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./ex3/ex3.css">
   <title>Exercício 3</title>
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
            Escolha o mês: 
            <input type="number" name="txtdia" min="1" max="12">
            <br><br>
            <input id="botao" type="submit" name="confirm">
        </form>
        <?php
            $dia = isset($_GET["txtdia"]) ? $_GET["txtdia"] : 0;

            if(isset($_GET["confirm"])){
                switch ($dia) {
                    case 1:
                        echo "<div class=\"result\">";
                            echo "<b>Janeiro</b> - Feriado: 01/01 - Ano novo!";
                        echo "</div>";
                        break;
                    
                    case 2:
                        echo "<div class=\"result\">";
                            echo "<b>Fevereiro</b> - Feriado: 20/02 até 22/02: Carnaval!";
                        echo "</div>";
                        break;

                    case 3:
                        echo "<div class=\"result\">";
                            echo "<b>Março</b> - Sem feriados.";
                        echo "</div>";
                        break;

                    case 4:
                        echo "<div class=\"result\">";
                            echo "<b>Abril</b> - Feriados: 07/04: Sexta-feira Santa; 21/04: Nossa Senhora da Penha!";
                        echo "</div>";
                        break;

                    case 5:
                        echo "<div class=\"result\">";
                            echo "<b>Maio</b> - Feriado: 01/05: DIa do Trabalhador!";
                        echo "</div>";
                        break;

                    case 6:
                        echo "<div class=\"result\">";
                            echo "<b>Junho</b> - Feriado: 08/06: Corpus Christi!";
                        echo "</div>";
                        break;

                    case 7:
                        echo "<div class=\"result\">";
                            echo "<b>Julho</b> - Sem feriados.";
                        echo "</div>";
                        break;

                        case 8:
                            echo "<div class=\"result\">";
                                echo "<b>Agosto</b> - Sem feriados.";
                            echo "</div>";
                            break;

                        case 9:
                            echo "<div class=\"result\">";
                                echo "<b>Setembro</b> - Feriado: 07/09: Dia da Independência do Brasil!";
                            echo "</div>";
                            break;

                        case 10:
                            echo "<div class=\"result\">";
                                echo "<b>Outubro</b> - Feriado: 12/10: Nossa Senhora Aparecida!";
                            echo "</div>";
                            break;

                        case 11:
                            echo "<div class=\"result\">";
                                echo "<b>Novembro</b> - Feriados: 02/11: Dia de Finados; 15/11: Proclamação da República";
                            echo "</div>";
                            break;

                        case 12:
                            echo "<div class=\"result\">";
                                echo "<b>Dezembro</b> - Feriado: 25/12: Natal!";
                            echo "</div>";
                            break;
                        
                        default;
                            echo "<div class=\"result\">";
                                echo "INVÁLIDO";
                            echo "</div>";
                            break;
                }
            }
        ?>
    </main>
</body>
</html>