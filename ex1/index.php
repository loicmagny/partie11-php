<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculatrice</title>
    </head>
    <body>
        <h1>Une calculatrice en PHP</h1>
        <form action="index.php" method="post">
            <input type="text" name="chiffre1" value="0"/>
            <input type="text" name="chiffre2" value="0"/>
            <input type="submit" name="addition" value="+"/>
            <input type="submit" name="soustraction" value="-"/>
            <input type="submit" name="multiplication" value="*"/>
            <input type="submit" name="division" value="/"/>
            <input type="submit" name="reset" value="Remise à zéro"/>
        </form>
        <?php
        $result = 0;
        if (isset($_POST['chiffre1']) && isset($_POST['chiffre2'])) {
            if (isset($_POST['addition'])) {
                $result = $_POST['chiffre1'] + $_POST['chiffre2'];
            } else if (isset($_POST['soustraction'])) {
                $result = $_POST['chiffre1'] - $_POST['chiffre2'];
            } else if (isset($_POST['multiplication'])) {
                $result = $_POST['chiffre1'] * $_POST['chiffre2'];
            } else if (isset($_POST['division'])) {
                $result = $_POST['chiffre1'] / $_POST['chiffre2'];
            }
        }
        if (isset($_POST['reset'])) {
            $_POST['chiffre1'] = 0;
            $_POST['chiffre2'] = 0;
        }
        ?>
        <p>Résultat : <?php echo $result; ?></p>
    </body>
</html>
