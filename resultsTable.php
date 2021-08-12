<?php
    include "orderCompetitors.php";    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resultsTable.css">
    <title>Resultados TRIVIA</title>
</head>
<body>
    <section class="container">
        <section class="sidebar"></section>
        <section class="main__container">
            <section class="title__container">
                <h1>Resultados de la trivia</h1>
                <h2>Número de participantes: <?php echo count($competitorsArray); ?></h2>
            </section>
            <section class="table__container">
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Respuestas correctas</th>
                        <th>Tiempo empleado</th>
                        <th>Finalizado a las:</th>
                    </tr>
                    <?php
                        foreach ($competitorsArray as $c) {
                            echo "<tr>";
                            echo "<td>".$c->getName()."</td>";
                            echo "<td>".$c->getEmail()."</td>";
                            echo "<td>".$c->getCorrectAnswers()."</td>";
                            echo "<td>".$c->getEmployedTime()."</td>";
                            echo "<td>".$c->getEndTime()."</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </section>
        </section>
    </section>
</body>
</html>