####################################################
########	Projet SmartCampus Symfony		########
########		Author : Nicolas Forget		########
####################################################

=====================
Ajouter un kind :
=====================

Aller dans le fichier src\Smart\CampusBundle\Form\PhysiqueType.php
Ajouter votre nouveau kind de la forme 'nom' => 'valeur' dans les lignes suivantes :

        ->add('kind',       'choice', array(
            'choices' => array(
                'temperature' => 'Température',
                'light' => 'Light',
                //'newkind' => 'Nouveau Kind',
            ),
        ))

=====================
Structure du projet :
=====================

+app
	+cache
	+config		
	+logs
	+Ressources
        +views                              //Vue de base avec toute les declaration de script et style
	
+bin
+src
    +Smart
        +CampusBundle
            +Controller                     //Controller de l'application avec toute les methodes
            +DependencyInjection
            +Entity                         //Entites de l'application avec leurs repository (ne pas modifier ces dernier)
                
            +Form                           //Structure des formulaire de creation des entites pour ajout ou edition
            +Ressources
                +configs                    //routing.yml definit les routes pour les methodes du controleur et les vues twig
                +doc
                +translations
                +views                      //Vues de l'application twig permet de recuperer des variables du controler et d'appliquer certaines methodes
            +Tests
                +Controller

+vendor                                     // bibliotheques externes a l'application
+web
	+bundles
    +css                                    //fichier style
    +js                                     //fichier script
				
				