# AD2021

### Création d'un livre d'or en PHP / Mysql / HTML / CSS
## Un dossier datas a été créé
Il se trouve dans livredorv2 et contient les fichiers créés par François et Pierre. Vous y trouverez aussi la nouvelle base de donnée pour le livre d'or en V2

    livredorv2/

### Fichiers de François

    livredorv2/francois/

### Fichiers de Pierre

    livredorv2/pierre/


### Nouvelle base de donnée

Dans le dossier livredorv2, importez via PHPMyAdmin (WAMP, MAMP, LAMP etc...) ou la console pour les plus avancés, le fichier (il va créer la data base et la table)

    livredorv2/datas/DB/livredorv2-import-structure.sql


### Structure de la table 'themessages'
Dans la DB livredor2

![strucure de la DB](https://github.com/mikhawa/AD2021/raw/main/livredorv2/datas/DB/livredorv2.png)

2 champs sont obligatoires :
- themessagesname (VARCHAR 60)
- themessagestext (VARCHAR 600)