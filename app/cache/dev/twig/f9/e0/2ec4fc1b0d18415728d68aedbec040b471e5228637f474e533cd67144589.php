<?php

/* SmartCampusBundle:Smart:voirB.html.twig */
class __TwigTemplate_f9e02ec4fc1b0d18415728d68aedbec040b471e5228637f474e533cd67144589 extends Twig_Template
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
    <h1>Visualisation de ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
        echo "</h1>

    <div class=\"container\">
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-2\">Board : </div>
                <div class=\"col-md-2\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
        echo "</div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-md-2\">capteurs Physiques :</div>
                
                <div class=\"col-md-2\">
                    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "physique"));
        foreach ($context['_seq'] as $context["_key"] => $context["phy"]) {
            // line 21
            echo "                        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phy"]) ? $context["phy"] : $this->getContext($context, "phy")), "name"), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </div>
                
            </div>
        </div>

        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("smartcampus_accueil", array("tag" => "Board"));
        echo "\" class=\"btn\">
            Retour à l'accueil
        </a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:voirB.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  74 => 23,  65 => 21,  61 => 20,  51 => 13,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
