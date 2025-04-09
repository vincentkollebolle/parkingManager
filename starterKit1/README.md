# Starter Kit 1

![starterKit1](docs/images/starterKit1.png)

## Contexte

Votre équipe de développement a été missionnée pour concevoir 
un logiciel de gestion d’un parking moderne. 
Ce parking doit pouvoir accueillir différents types de véhicules et offrir 
plusieurs services aux clients.

Votre objectif est de coder une première version 
fonctionnelle en Go sans design pattern. 
Vous êtes libres de structurer votre code comme vous voulez, 
mais attention : au fur et à mesure que le projet évoluera, 
de nouvelles contraintes et fonctionnalités seront ajoutées.



## Gestion des places de parking

- Le parking contient N places (paramétrable).
- Chaque place peut être libre ou occupée.
- Un véhicule ne peut se garer que si une place est libre.

## Types de véhicules

- Le parking accepte des voitures, des motos et des camions.
- Certains véhicules (ex. : camions) occupent plusieurs places.

## Entrée et sortie des véhicules

- Un véhicule peut entrer dans le parking s’il y a une place libre.
- Un véhicule peut sortir à tout moment et libérer sa place.

## Tarification

- Le prix du stationnement dépend du type de véhicule.
- Exemple : Moto (1€/h), Voiture (2€/h), Camion (5€/h).
- Lorsqu’un véhicule sort, il doit payer son stationnement.

## Surveillance du parking

- Il est possible de consulter l’état des places (libres/occupées).
- Il est possible de lister les véhicules présents et leur temps de stationnement.

## Gestion des abonnés
- Certains clients ont un abonnement mensuel et ne paient pas à l’heure.
- Il faut pouvoir les enregistrer et les reconnaître à l’entrée.

# Objectif du TP
- Lundi → Vous codez une première version fonctionnelle, 
  sans vous soucier de l’architecture. 
- Faites ce que vous voulez pour que tout marche. 
- Mardi-Vendredi → Chaque jour, un design pattern sera introduit. Vous devrez refactoriser votre code pour l’intégrer et améliorer votre structure. 🔧
- Un simple programme en mode texte où l’utilisateur entre des commandes pour gérer le parking.

```shell
> start-parking 10       # Initialise un parking de 10 places
> enter car ABC-123      # Une voiture entre
> enter truck DEF-456    # Un camion entre (occupe 2 places)
> status                 # Affiche l’état du parking
> exit ABC-123           # La voiture sort et paye
```
