<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion de salaire d'un employe</title>
    <link  rel="stylesheet" href="style.css">
</head>
<body>
    <div class="layout">
        <h1>gestionnaire de salaire d'un employe</h1>
        <form method="post" action="result.php" >
            
            <table>
                <tr>
                    <td><h3>Entrez votre nom :</h3></td>
                    <td><input type="text" name="nom" value="nom"/></td>
                </tr>
                <tr>
                    <td><h3>Entrez votre salaire de base :</h3></td>
                    <td><input type="int" name="salbase"  /></td>
                </tr>
                <tr>
                    <td><h3>Entrez votre prime de technicite :</h3></td>
                    <td><input type="int" name="prim_tech" /></td>
                </tr>
                <tr>
                    <td><h3>Entrez votre prime de transport :</h3></td>
                    <td><input type="int" name="prim_trans"  /></td>
                </tr>
                <tr>
                    <td><h3>Entrez le nombre de jour travaller :</h3></td>
                    <td><input type="number" name="nbj_t"  /></td>
                </tr>
                <tr>
                    <td><h3>Entrez le prime d'un enfant :</h3></td>
                    <td><input type="int" name="prim_enf1"  /></td>
                </tr>
                <tr>
                    <td><h3>Entrez le nombre d'enfant :</h3></td>
                    <td><input type="number" name="nb_enf"  /></td>
                </tr>
            </table>
            <input type="submit" name="envoyez" class="send" value="envoyez" >
        </form>
    </div>
</body>
</html>