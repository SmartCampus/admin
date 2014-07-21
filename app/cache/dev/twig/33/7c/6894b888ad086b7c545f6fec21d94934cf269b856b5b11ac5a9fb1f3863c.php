<?php

/* SmartCampusBundle:Smart:voir.html.twig */
class __TwigTemplate_337c6894b888ad086b7c545f6fec21d94934cf269b856b5b11ac5a9fb1f3863c extends Twig_Template
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
    <h1>Visualisation</h1>

    <div class=\"container\">
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-2\">Capteur : </div>
                <div class=\"col-md-2\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "name"), "html", null, true);
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-2\">Kind :</div>
                <div class=\"col-md-2\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "kind"), "html", null, true);
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-2\">Frequency :</div>
                <div class=\"col-md-2\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "frequency"), "html", null, true);
        echo "</div>
            </div>
        </div>

        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("smartcampus_accueil");
        echo "\" class=\"btn\">
            Retour à l'accueil
        </a>

        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_modifier", array("id" => $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            Modifier
        </a>

        <input type=\"button\" value=\"Supprimer\" class=\"btn btn btn-danger\" onclick=\"suppr('";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_supprimer", array("id" => $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "id"))), "html", null, true);
        echo "');\">

        <div id=\"supp-message\" title=\"Suppression\" style=\"visibility: hidden\">            
          <span class=\"ui-icon ui-icon-circle-check\" style=\"float:left; margin:0 7px 50px 0;\"></span>
            <p>Voulez-vous vraiment supprimer ce capteur ?</p>
        </div>
    </div>
\t
    <!-- Boite dialogue Modification capteur -->
    ";
        // line 44
        $this->env->loadTemplate("SmartCampusBundle:Smart:dialogue.html.twig")->display($context);
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 45,  97 => 44,  85 => 35,  78 => 31,  71 => 27,  64 => 23,  56 => 18,  48 => 13,  39 => 6,  36 => 5,  29 => 3,);
    }
}
