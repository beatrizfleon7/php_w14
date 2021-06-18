W14 - PHP procédurale
Comment récuprérer ce projet
Paquets à installer sur la VM
apache2
php7.0
libapache2-mod-php7.0
Activer l'affichage des erreurs PHP
sudo nano /etc/php/7.0/apache2/php.ini
Pour faire une recherche (ctrl + w avec nano) et chercher display_errors. Le premier résultat n'est pas celui qu'on cherche, mais le suivant, oui. Changer les 'Off' en 'On'.

### Récupérer le repo

git clone https://github.com/jperaudon/php-g4.git .
Exo
Exo 1 : les formulaires
Créer une page de d'inscription dans laquelle vous rentrez : nom, age, genre, mot de passe.
Chercher comment récupérer ses informations dans la page suivante.
Exo 2 : un bouton de déconnexion
Mettre en place un bouton de deconnexion (tips : ) qui ne s'affiche (dans le menu) que si on est connecté.

### Exo 2 bis : un menu dynamique

Si non connecté : un bouton "Connexion"
Si on est connecté :
plus de bouton connecté
un "bonton" : Bonjour [Greta]

### Exo 3 : bon login

Déterminer un login et un mot de passe spécifique, et rendre la connexion uniquement valide si ces derniers sont rentré.

### Exo 4 : utilisateur multiple

Créer une fausse base de données dans laquelle on retrouvera plusieurs utlisateurs (avec chacun login + mdp).
A la connexion, on vérifie si ce qu'on a rentrer correspond à l'un d'entre eux, pour le connecter.
Exo annexe :
Trouver comment afficher le nom d'utilisateur avec une majuscule.
