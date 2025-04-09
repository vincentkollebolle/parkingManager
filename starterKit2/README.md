# Starter Kit 2 

![starterKit2](starterKit2/docs/images/starterKit2.png)


## Contexte

Bravo ! Votre équipe de développement a tellement cartonné sur le StarterKit1 qu’on lui confie une nouvelle mission. 🎯
Un tout nouveau cahier des charges vous attend !

Le parking doit désormais accueillir plein de nouveaux types d’usagé.e.s !
Certain.e.s veulent se garer longtemps, d’autres juste un petit moment.

Il faut aussi gérer l’argent récolté, car désormais le parking devient inclusif : des places réservées aux personnes en situation de handicap, des tarifs préférentiels pour les abonné.e.s... 💸

Attention, de nouveaux usagé.e.s inattendu.e.s débarquent aussi : des chevaux (!), et même un énorme cochon tirelire vous observe depuis le centre du parking, juste à côté de la grande horloge fraîchement installée. 🐴🐖⏰

Bref, préparez-vous : de nouveaux défis vous attendent !


## Parking	
Contient des Place, gère l’accueil des véhicules.
Fournit des Places et gère l’argent collecté
private array $places = []; // Array of Place[]
private Tirelire $tirelire;

** Design pattern à implémenter** 
- 💡 [[Stratégie]] : Ajouter une classe Pricing permettant de gérer des politique de prix en fonction du jour, de la nuit, des maccarons ... etc...
- 💡[[Iterator]] : Ajouter un iterator pour garer les véhicules.
- 💡[[Builder]] : Ajouter un builder pour construire le parking.

## Place	
Gère son Véhicule et décide s’il part
Peut accepter certains types de véhicules selon leur taille. 
A un prix de base.

## Road	
Génère des véhicules et les envoie vers le parking.

** Design pattern à implémenter** 
- 💡[[Factory Method]] : générer dynamiquement différents types de véhicules

## Vehicle
- $size: la taille du véhicule (1 = moto, 2= voiture, 3= camion)
- $remainingIteration : le temps de parking souhaité (nombre d'itération)

** Design pattern à implémenter** 
- 💡[[Adaptateur]]  : Ajouter un cheval qui a un poid.
- 💡[[Décorateur]] : Ajouter un macaron handicap qui impact le prix
- 💡 [[Décorateur]] : Ajouter un macaron abonné qui impact le prix
 
## Clock 
Gère les cycles d'itérations.
Fait juste passer le temps (tick)


** Design pattern à implémenter** 
- 💡 [[Singleton]] : Ajouter un singleton sur l'horloge.

## Tirelire	
Stocke l'argent payé par les véhicules quand ils partent.
Elle récolte l’argent quand un véhicule quitte une Place.
Elle n’est pas impactée par le temps qui passe
Elle est impactée par le départ d'un véhicule.
Tirelire est alimentée seulement à la libération d’une Place.


** Design pattern à implémenter** 
- 💡[[Singleton]] : Ajouter un singleton sur la tirelire

## Dashboard

** Design pattern à implémenter** 
- 💡[[Façade]] : Ajouter une facade au dashboard pour pouvoir changer l'affichage.

## main
Grande boucle qui démarre l'application.
