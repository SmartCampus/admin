<?php

/* SmartCampusBundle:Smart:supp.html.twig */
class __TwigTemplate_1e9b9cbbbb10e82bbe57f2a96be36b30fcdd03c6506f20210d70202990ec4640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <title>Filtrage</title>
        <meta http-equiv=\"refresh\" content=\"5; URL=";
        // line 4
        echo $this->env->getExtension('routing')->getPath("smartcampus_accueil");
        echo "\">
    </head>
    
    <body>
        Suppression du capteur...
    </body>
    
</html> ";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:supp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
