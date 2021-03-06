<?php

/* SmartCampusBundle:Smart:voirV.html.twig */
class __TwigTemplate_97a4de7d48f33fa05bfaaea6651420895c9aefa3869644c93193c1d679d4e57b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SmartCampusBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmartCampusBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Visualisation";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <h1><span class=\"glyphicon glyphicon-home\" style=\"cursor: pointer;\" onclick=\"location.href='";
        // line 7
        echo $this->env->getExtension('routing')->getPath("smartcampus_accueil");
        echo "';\"></span> Visualisation de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "name"), "html", null, true);
        echo "</h1>

    <div class=\"container\">
        <div class=\"well\">
            <!--parties communes a tout les capteurs-->
            ";
        // line 12
        $this->env->loadTemplate("SmartCampusBundle:Smart:voirC.html.twig")->display($context);
        // line 13
        echo "            <div class=\"row\">
                <div class=\"col-md-2\">Script :</div>
                <div class=\"col-md-8\"><pre>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "script"), "html", null, true);
        echo "</pre></div>
            </div>
        </div>
        <div class=\"well\">
            <!--proprietes des capteurs-->
            ";
        // line 20
        $context["kind"] = "V";
        // line 21
        echo "            ";
        $this->env->loadTemplate("SmartCampusBundle:Smart:voirProp.html.twig")->display($context);
        // line 22
        echo "        </div>

        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_modifier", array("id" => $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            <span class=\"glyphicon glyphicon glyphicon-pencil\"></span> Modifier
        </a>
        <a  onclick=\"suppr('";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_supprimer", array("id" => $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "id"))), "html", null, true);
        echo "');\" class=\"btn btn btn-danger\">
            <span class=\"glyphicon glyphicon-minus-sign\"></span> Supprimer
        </a>
        <br>
        <br>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_sensor", array("name" => $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "name"))), "html", null, true);
        echo "\" class=\"btn btn-info\">
            <span class=\"glyphicon glyphicon-eye-open\"></span> Voir Json
        </a>
        <div id=\"supp-message\" title=\"Suppression\" style=\"visibility: hidden\">            
          <span class=\"ui-icon ui-icon-circle-check\" style=\"float:left; margin:0 7px 50px 0;\"></span>
            <p>Voulez-vous vraiment supprimer cet élément ?</p>
        </div>
    </div>
\t
    <!-- Boite dialogue Modification capteur -->
    ";
        // line 42
        $this->env->loadTemplate("SmartCampusBundle:Smart:dialogue.html.twig")->display($context);
        // line 43
        echo "
";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:voirV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 43,  102 => 42,  89 => 32,  81 => 27,  75 => 24,  71 => 22,  68 => 21,  66 => 20,  58 => 15,  54 => 13,  52 => 12,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
