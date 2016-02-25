SFPOT 25/02/2016 : API Platform framework démonstration
==========================

Ce projet est un projet de démonstration du framework API Platform créé à l'occasion du Symfony Pot du 25 février 2016 qui s'est tenu à Aix-en-provence, dans les locaux d'ACSEO.

Le projet représente une API de gestion des entraînements et courses d'un coureur de trails.

Chaque branche de ce projet développe une fonctionnalité du framework présentée lors de la conférence :

* master : le projet après avoir été clôné depuis son repo git plus l'ajout de notre bundle de démo
* 1-CRUD : génération de deux entités et de leur CRUD.
* 2-override-metod : surcharge de la méthode getAction du ResourceController pour intégrer l'écoute d'un groupe de serialization (ici le ranking_read).
* 3-create-custom-method : création d'une méthode personnalisée pour récupérer la prochaine course suivant une date donnée.
* 4-authenticate-users : Utilisation de FOSUserBundle et JWTAuthenticationBundle afin de créer des utilisateurs et de les authentifier.
* 5-document-external-dependencies : Création d'un service de chargement d'annotation pour l'ApiDoc de Nelmio permettant de documenter ses dépendances externes.
* 6-test-routes : Utilisation de Behat pour effectuer des tests fonctionnels et de doctrine-fixtures-bundle pour charger les données associées.

La documentation officielle est disponible **[sur le site d'API Platform][31]**.
[31]: https://api-platform.com
