<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include("Voiture.php");
include("Place.php");
include("Parking.php");
?>
<style>
.error {
    color:red;
}
</style>
<div style="padding:30px">
<?php
    //1. créer un parking
    $unParking = Parking::getInstance();  
    $unParking->afficherParking();

    $un2emParking = Parking::getInstance(); 
    //un2emParking === $unParking

    //2. Ajouter une voiture ?>
    <h2>Ajout d'une voiture</h2>
    <?php
    $voitureVincent = new Voiture("ZX-01");
    echo "création de la voiture ZX-01<br/>";
    $unParking->addVoiture($voitureVincent);
    echo "ajout de la voiture ZX-01";
    $unParking->afficherParking();
    ?>

    <h2>Ajout d'une 2em voiture</h2>
    <?php
    $voitureLaurent = new Voiture("ZX-02");
    echo "création et tentative d'ajout de la voiture ZX-02<br/>";
    $unParking->addVoiture($voitureLaurent);
    $unParking->afficherParking();
    ?>
    <h2>Ajouter une Big Voiture </h2>
    <?php
    $bigVoiture = new Voiture("BIGCAR-01",2);
    $unParking->addVoiture($bigVoiture);
    $unParking->afficherParking()
    /*
    //5. Ajouter une voiture 
    //6. Voir le contenu du parking
    //7. 
     echo "<pre>";
    print_r($unParking);
    echo "</pre>";
    */
    ?>
</div>
    