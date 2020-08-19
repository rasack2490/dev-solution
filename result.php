<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        
            $nom = $_POST['nom'];
            $salbase = $_POST['salbase'];
            $prim_tech = $_POST['prim_tech'];
            $prim_trans = $_POST['prim_trans'];
            $nbj_t = $_POST['nbj_t'];
            $prim_enf1 = $_POST['prim_enf1'];
            $nb_enf = $_POST['nb_enf'];
            $taux_cnss = 0.265;
            $taux_imp = 0.02;
            $taux_t = ($nbj_t/26);
            $prim_enf = ($prim_enf1*$nb_enf);
            $salbrut = (($salbase+$prim_tech+$prim_trans+(int)$prim_enf)*$taux_t);

            
            
            $val_imp = ($taux_imp*$salbrut);
            $val_cnss = ($taux_cnss*$salbrut);
            $salnet = ($salbrut-$val_imp-$val_cnss);
            

    ?>




    <div class="layout">
        <h1>gestionnaire de salaire d'un employe</h1>
       
        <div class="row">
            <h2>bienvenue  <?php echo  $nom ?></h2>
        </div>
        <div class="row1">
            <h3>votre salaire net est : <?php echo  $salnet. 'francs CFA';?></h3> 
            <h3>votre salaire brut est : <?php echo $salbrut. 'francs CFA' ?></h3>
            <h3>la prime des enfants : <?php echo $prim_enf. 'francs CFA' ?></h3> </h3>
            <h3>votre taux de travaille est : <?php echo $taux_t ?> </h3>
            
        </div>
    </div>
</body>
</html>