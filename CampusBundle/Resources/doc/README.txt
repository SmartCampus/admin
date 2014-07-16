####################################################
########	Projet SmartCampus Symfony		########
########		Author : Nicolas Forget		########
####################################################

=====================
Structure du projet :
=====================

+app
	+cache
		dev
		prod
		
	+config
		// config files
		// parameters files
		// routing files
		
	+logs
	+Ressources
		+views
	
+bin

+src
    +Smart
        +CampusBundle
            +Controller
            +DependencyInjection
            +Entity
                //Capteur
                //Capteur virtuels
                //properties
                
            +Form
            +Ressources
                +configs
                +doc
                +public
                    +css
                    +images
                    +js
                    
                +translations
                +views
                    +Smart
                    //vues de lapplication
                    //.twig (<=> html)
            +Tests
                +Controller

+vendor
	// bibliotheques externes a l'application
	+composer
	+doctrine
	+incenteev
	+jdorn
	+kriswallsmith
	+monolog
	+psr
	+sensio
	+swiftmailer
	+symfony
	+twig

+web
	+bundles
		+acmedemo
			+css
			+images
			
		+framework
			+css
			+images
			
		+sensiodistribution
			+webconfigurator
				+css
				+images
				
				