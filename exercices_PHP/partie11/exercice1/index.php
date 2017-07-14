<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculatrice</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Une calculatrice en PHP</h1>
        <form action="index.php" method="post">
            <!-- Si la valeur de l'input 'chiffre1' est définie dans $_POST alors la valeur de l'input prend cette valeur -->
            <input type="text" name="chiffre1" <?php if(isset($_POST['reset']) || isset($_POST['chiffre1']) == FALSE){echo 'value="0"'; }elseif(isset($_POST['chiffre1'])){echo 'value="' . $_POST['chiffre1'] . '"';} ?>>
            <!-- Si la valeur de l'input 'chiffre2' est définie dans $_POST alors la valeur de l'input prend cette valeur -->
            <input type="text" name="chiffre2" <?php if(isset($_POST['reset']) || isset($_POST['chiffre2']) == FALSE){echo 'value="0"'; }elseif(isset($_POST['chiffre2'])){echo 'value="' . $_POST['chiffre2'] . '"';} ?>>
            <input type="submit" name="addition" value="+">
            <input type="submit" name="soustraction" value="-">
            <input type="submit" name="multiplication" value="*">
            <input type="submit" name="division" value="/">
            <input type="submit" name="reset" value="Remise à zéro">
        </form
        <?php
            // On initialise la variable $result
            $result = 0;
            // Si les chiffres sont définis
            if(isset($_POST['chiffre1']) && isset($_POST['chiffre2'])){
                // Si la valeur de l'input 'addition' existe
                if(isset($_POST['addition'])){
                    // La variable $result prend la valeur chiffre1 + chiffre2
                    $result = $_POST['chiffre1'] + $_POST['chiffre2'];
                }
                // Sinon si la valeur de l'input 'soustraction' existe
                elseif(isset($_POST['soustraction'])){
                    // La variable $result prend la valeur chiffre1 - chiffre2
                    $result = $_POST['chiffre1'] - $_POST['chiffre2'];
                }
                // Sinon si la valeur de l'input 'multiplication' existe
                elseif(isset($_POST['multiplication'])){
                    // La variable $result prend la valeur chiffre1 * chiffre2
                    $result = $_POST['chiffre1'] * $_POST['chiffre2'];
                }
                // Sinon si le chiffre2 = 0
                elseif($_POST['chiffre2'] == 0){
                        // On affiche que l'on ne peut pas diviser par 0
                        $result = 'On ne peut pas diviser par zéro.';
                    }
                // Sinon si la valeur de l'input 'division' existe
                elseif(isset($_POST['division'])){
                    // La variable $result prend la valeur chiffre1 / chiffre2
                    $result = $_POST['chiffre1'] / $_POST['chiffre2'];
                }
            }
            // Si la valeur de l'input 'reset' existe
            if(isset($_POST['reset'])){
                // La variable $result prend la valeur 0
                $result = 0;
                // Les variables $_POST des deux chiffres prennent la valeur 0
                $_POST['chiffre1'] = 0;
                $_POST['chiffre2'] = 0;
            }
        ?>
        <!-- On affiche le résultat avec la variable $result -->
        <p>Résultat : <?php echo $result;?></p>
        <a href="../">Retour au menu</a>
    </body>
</html>