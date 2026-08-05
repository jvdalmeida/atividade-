


<!DOCTYPE html>
<html>
<body>

    <form method="post">
        Numero: <input type="number" name="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        if ($numero % 2 == 0) {
            echo "O numero $numero é par";
        } else {
            echo "O numero $numero é impar";
        }
    }
    ?>

</body>
</html>
