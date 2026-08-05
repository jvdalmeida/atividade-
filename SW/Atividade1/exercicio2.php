<!DOCTYPE html>
<html>
<body>

    <form method="post">
        Número para tabuada: <input type="number" name="numero" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        for ($i = 0; $i <= 10; $i++) {
            echo $numero . " x " . $i . " = " . ($numero * $i) . "<br/>";
        }
    }
    ?>

</body>
</html>
