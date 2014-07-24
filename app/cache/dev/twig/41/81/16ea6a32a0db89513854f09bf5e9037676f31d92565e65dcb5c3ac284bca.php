<?php

/* SmartCampusBundle:Smart:index.html.twig */
class __TwigTemplate_418116ea6a32a0db89513854f09bf5e9037676f31d92565e65dcb5c3ac284bca extends Twig_Template
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
        echo " - Index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</h1>

    
    <div class=\"container\">
        
        <!-- DataTable -->
        ";
        // line 12
        $this->env->loadTemplate("SmartCampusBundle:Smart:datatable.html.twig")->display($context);
        // line 13
        echo "
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("smartcampus_ajouterV");
        echo "\" class=\"btn btn-primary\">
            + Capteur Virtuel
        </a>
        <br><br>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("smartcampus_ajouterP");
        echo "\" class=\"btn btn-primary\">
            + Capteur Physique
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  54 => 14,  51 => 13,  49 => 12,  39 => 6,  36 => 5,  29 => 3,);
    }
}
