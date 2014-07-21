<?php

/* SmartCampusBundle:Smart:formulaire.html.twig */
class __TwigTemplate_f88d7feed446e0064d2c5aa62de7601689d74902c74a5ae65d058ec3c84eb0fd extends Twig_Template
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
        echo "<div class=\"well container\">
  <form class=\"form-horizontal\" role=\"form\" method=\"post\" ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
      <div class=\"form-group\">
          ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
      </div>
      <div class=\"form-group\">
          <input type=\"submit\" class=\"btn btn-primary\"/>
      </div>
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
