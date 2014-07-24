<?php

/* SmartCampusBundle:Smart:ajoutP.html.twig */
class __TwigTemplate_83964657cc306c6f6bfb9573c324bb766d005dcea74bbb09d6f7ea3638336c6c extends Twig_Template
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
        echo " - Ajout";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <h1>Ajout d'un capteur Physique</h1>

\t<!--formulaire d'ajout d'un capteur physique-->
    <div class=\"well container\">
      <form class=\"form-horizontal\" role=\"form\" method=\"post\" ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
          <div class=\"form-group\">
              <div class=\"col-md-2\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "</div>
              <div class=\"col-md-2\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "</div>
              <div class=\"col-md-3\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "</div>
          </div>
          <div class=\"form-group\">
              <div class=\"col-md-2\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kind"), 'label');
        echo "</div>
              <div class=\"col-md-2\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kind"), 'widget');
        echo "</div>
              <div class=\"col-md-3\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kind"), 'errors');
        echo "</div>
          </div>
          <div class=\"form-group\">
              <div class=\"col-md-2\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frequency"), 'label');
        echo "</div>
              <div class=\"col-md-2\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frequency"), 'widget');
        echo "</div>
              <div class=\"col-md-3\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frequency"), 'errors');
        echo "</div>
          </div>
          <div class=\"form-group\">
              <div class=\"col-md-2\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "board"), 'label');
        echo "</div>
              <div class=\"col-md-2\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "board"), 'widget');
        echo "</div>
              <div class=\"col-md-3\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "board"), 'errors');
        echo "</div>
          </div>
          <div class=\"form-group\">
              <div class=\"col-md-2\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endpoint"), 'label');
        echo "</div>
              <div class=\"col-md-2\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endpoint"), 'widget');
        echo "</div>
              <div class=\"col-md-3\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endpoint"), 'errors');
        echo "</div>
          </div>
          <div class=\"form-group\">
              ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          </div>
          <div class=\"form-group\">
              <input type=\"submit\" class=\"btn btn-primary\"/>
          </div>
      </form>
    </div>
\t
    <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("smartcampus_accueil");
        echo "\" class=\"btn\">
        Retour à l'accueil
    </a>

";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:ajoutP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  121 => 38,  115 => 35,  111 => 34,  107 => 33,  101 => 30,  97 => 29,  93 => 28,  87 => 25,  83 => 24,  79 => 23,  73 => 20,  69 => 19,  65 => 18,  59 => 15,  55 => 14,  51 => 13,  46 => 11,  39 => 6,  36 => 5,  29 => 3,);
    }
}
