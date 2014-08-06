<?php

/* SmartCampusBundle:Smart:voirP.html.twig */
class __TwigTemplate_3f249722d70960e16664b11a8841e793d0b25041a6d709789fc0efd12ec64178 extends Twig_Template
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
                <div class=\"col-md-2\">Board :</div>
                <div class=\"col-md-2\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "board"), "name"), "html", null, true);
        echo " [";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "pin"), "html", null, true);
        echo "]</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-2\">Endpoint :</div>
                <div class=\"col-md-2\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "endpoint"), "ip"), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "endpoint"), "port"), "html", null, true);
        echo "</div>
            </div>
        </div>
        <div class=\"well\">
            <!--proprietes des capteurs-->
            ";
        // line 25
        $context["kind"] = "P";
        // line 26
        echo "            ";
        $this->env->loadTemplate("SmartCampusBundle:Smart:voirProp.html.twig")->display($context);
        // line 27
        echo "        </div>

        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_modifier", array("id" => $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            <span class=\"glyphicon glyphicon-refresh\"></span> Modifier
        </a>
        <a  onclick=\"suppr('";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_supprimer", array("id" => $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "id"))), "html", null, true);
        echo "');\" class=\"btn btn btn-danger\">
            <span class=\"glyphicon glyphicon-minus-sign\"></span> Supprimer
        </a>
        <br>
        <br>
        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_sensor", array("name" => $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "name"))), "html", null, true);
        echo "\" class=\"btn btn-info\">
            smartcampus/sensors/";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "name"), "html", null, true);
        echo "
        </a>
        <div id=\"supp-message\" title=\"Suppression\" style=\"visibility: hidden\">            
          <span class=\"ui-icon ui-icon-circle-check\" style=\"float:left; margin:0 7px 50px 0;\"></span>
            <p>Voulez-vous vraiment supprimer cet élément ?</p>
        </div>
    </div>
\t
    <!-- Boite dialogue Modification capteur -->
    ";
        // line 47
        $this->env->loadTemplate("SmartCampusBundle:Smart:dialogue.html.twig")->display($context);
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:voirP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 48,  117 => 47,  105 => 38,  101 => 37,  93 => 32,  87 => 29,  83 => 27,  80 => 26,  78 => 25,  68 => 20,  58 => 15,  54 => 13,  52 => 12,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
