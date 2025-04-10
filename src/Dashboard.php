<?php
class Dashboard
{
    public function update()
    {
        echo "\033[H";  // Retourne au début du terminal

        // Affichage initial
        echo "-----------------------------\n";
        echo "🌅 Moment : Jour \n";
        echo "🚗 Véhicules en circulation :\n";
        echo "🏍️ Motos : 5\n";
        echo "🚙 Voitures : 12\n";
        echo "🚚 Camions : 3\n";
        echo "🔢 Total : 20\n";
        echo "🅿️ Véhicules garés : 15\n";
        echo "-----------------------------\n";
        echo "💰 Montant de la tirelire : 150€\n";
        
        // Attente pour simuler un délai
        sleep(2);
        
        // Mise à jour d'une ligne spécifique sans réafficher tout l'écran
        echo "\033[3;25H";  // Déplace le curseur à la ligne 3, colonne 25
        echo "🏍️ Motos : 6";  // Met à jour la valeur des motos
    }
}