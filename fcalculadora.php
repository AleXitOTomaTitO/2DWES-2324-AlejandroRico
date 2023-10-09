<!doctype html>
<html lang="es">
<head>
    <title>Calculadora</title>
    <meta charset="utf-8" />
    <meta name="author" content="Alex" />
    <style>
        h1 {
            font-size: 30px;
            text-align: center;
        }

        p {
            text-align: center;
        }

        
    </style>
</head>
<body>
<header></header>
<nav></nav>
<main>
    <section>
        <article>
            <div>
                <h1>CALCULADORA</h1>
                <form name="formu" method="post" action="fcalculadora.php">
                    <label for="op1">Operando 1</label>
                    <input type="number" name="op1">
                    <br><br>
                    <label for="op2">Operando 2</label>
                    <input type="number" name="op2">
                    <br><br>
                    <label for="opc">Seleccionar Operación</label>
                    <br><br>
                    <input type="radio" name="ope" value="suma">Suma<br>
                    <input type="radio" name="ope" value="resta">Resta<br>
                    <input type="radio" name="ope" value="multi">Multiplicación<br>
                    <input type="radio" name="ope" value="division">División<br>
                    <br><br>
                    <input type="submit" value="enviar" name="enviar" />
                    <input type="reset" value="borrar" name="enviar" />
                </form>
            </div>
        </article>
    </section>
</main>
<footer></footer>
<?php
 function limpio($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = limpio($_POST["op1"]);
    $num2 = limpio($_POST["op2"]);
    $opera = $_POST["ope"];

    function ope($n1, $n2, $dato)
    {
        $resul = 0;
        $msg = "";

        switch ($dato) {
            case "suma":
                $resul = $n1 + $n2;
                $msg = "<p>Resultado operación $n1 + $n2 = $resul</p>";
                break;

            case "resta":
                $resul = $n1 - $n2;
                $msg = "<p>Resultado operación $n1 - $n2 = $resul</p>";
                break;

            case "multi":
                $resul = $n1 * $n2;
                $resul = round($resul, 2);
                $msg = "<p>Resultado operación $n1 * $n2 = $resul</p>";
                break;

            case "division":
                if ($n1 == 0 || $n2 == 0) {
                    $msg = "<p>NO PUEDES DIVIDIR ENTRE 0</p>";
                    break;
                }
                $resul = $n1 / $n2;
                $resul = round($resul, 2);
                $msg = "<p>Resultado operación $n1 / $n2 = $resul</p>";
                break;
        }
        return $msg;
    }

   

    echo ope($num1, $num2, $opera);
}
?>
</body>
</html>
