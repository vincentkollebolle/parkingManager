
![parking_complex](images/parking_complex.png)

# Information sur le code de base

##  La route (Road)
La Route délègue au véhicule le fait d’interagir avec le parking

**Design pattern à implémenter** :
- 💡 Factory 

## Une classe Parking
- Le parking contient N places (paramétrable).
- Chaque place peut être libre ou occupée.
- Un véhicule ne peut se garer que si une place est libre.

**Design pattern à implémenter** :
💡 Singleton

## Une classe Vehicle
- Le parking accepte des voitures, des motos et des camions.
- Certains véhicules (ex. : camions) occupent plusieurs places.

**Design pattern à implémenter** :
- 💡 Car, Truck, Motorcycle extends Vehicle
- 💡 Factory Method
- 💡 Template Method
- 💡 Design pattern State

## Bonus : Architecture globale MVC
- 💡 L'architecture est pensée en MVC (+ Front Controller si besoin est).

## Parking	
Contient des Place, gère l’accueil des véhicules.
Fournit des Places et gère l’argent collecté
private array $places = []; // Array of Place[]
private Tirelire $tirelire;

**Design pattern à implémenter** 
- 💡 [[Stratégie]] : Ajouter une classe Pricing permettant de gérer des politique de prix en fonction du jour, de la nuit, des maccarons ... etc...
- 💡[[Iterator]] : Ajouter un iterator pour garer les véhicules.
- 💡[[Builder]] : Ajouter un builder pour construire le parking.

## Place	
Gère son Véhicule et décide s’il part
Peut accepter certains types de véhicules selon leur taille. 
A un prix de base.

## Road	
Génère des véhicules et les envoie vers le parking.

**Design pattern à implémenter** 
- 💡[[Factory Method]] : générer dynamiquement différents types de véhicules

## Vehicle
- $size: la taille du véhicule (1 = moto, 2= voiture, 3= camion)
- $remainingIteration : le temps de parking souhaité (nombre d'itération)

**Design pattern à implémenter** 
- 💡[[Adaptateur]]  : Ajouter un cheval qui a un poid.
- 💡[[Décorateur]] : Ajouter un macaron handicap qui impact le prix
- 💡 [[Décorateur]] : Ajouter un macaron abonné qui impact le prix
 
## Clock 
Gère les cycles d'itérations.
Fait juste passer le temps (tick)


**Design pattern à implémenter** 
- 💡 [[Singleton]] : Ajouter un singleton sur l'horloge.

## Tirelire	
Stocke l'argent payé par les véhicules quand ils partent.
Elle récolte l’argent quand un véhicule quitte une Place.
Elle n’est pas impactée par le temps qui passe
Elle est impactée par le départ d'un véhicule.
Tirelire est alimentée seulement à la libération d’une Place.


**Design pattern à implémenter** 
- 💡[[Singleton]] : Ajouter un singleton sur la tirelire

## Dashboard

**Design pattern à implémenter** 
- 💡[[Façade]] : Ajouter une facade au dashboard pour pouvoir changer l'affichage.

## main
Grande boucle qui démarre l'application.
