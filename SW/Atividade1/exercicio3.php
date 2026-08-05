<!DOCTYPE html>
<html>
<body>

    <form method="post">
        Iniciar contagem em: <input type="number" name="cont" value="10" required>
        <input type="submit" value="Iniciar">
    </form>

    <?php
    if (isset($_POST['cont'])) {
        $cont = $_POST['cont'];

        while ($cont > 0) {
            echo $cont . "<br/>";
            $cont--;
        }

        echo "Feliz Ano Novo!";
    }
    ?>

</body>
</html>
