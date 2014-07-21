<?php

/* SmartCampusBundle:Smart:redirect.html.twig */
class __TwigTemplate_0ac265ba656f5364b1e2380f2cff0ddb7527bfe44e9c8b2d3354776787c4ef29 extends Twig_Template
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
        <meta http-equiv=\"refresh\" content=\"0; URL=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_accueil", array("kind" => (isset($context["kind"]) ? $context["kind"] : $this->getContext($context, "kind")))), "html", null, true);
        echo "\">
    </head>
    
    <body>
    </body>
    
</html> ";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:redirect.html.twig";
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
