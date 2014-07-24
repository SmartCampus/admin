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
          <div class=\"col-md-2\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "</div>
          ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "
          <div class=\"col-md-2\">";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "</div>
      </div>
      <div class=\"form-group\">
          <div class=\"col-md-2\">";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kind"), 'label');
        echo "</div>
          ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kind"), 'errors');
        echo "
          <div class=\"col-md-2\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kind"), 'widget');
        echo "</div>
      </div>
      <div class=\"form-group\">
          <div class=\"col-md-2\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frequency"), 'label');
        echo "</div>
          ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frequency"), 'errors');
        echo "
          <div class=\"col-md-2\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frequency"), 'widget');
        echo "</div>
      </div>
      <div class=\"form-group\">
          <div class=\"col-md-2\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "script"), 'label');
        echo "</div>
          ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "script"), 'errors');
        echo "
          <div class=\"col-md-2\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "script"), 'widget');
        echo "</div>
      </div>
      <div class=\"form-group\">
          ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
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
        return array (  83 => 24,  77 => 21,  73 => 20,  69 => 19,  63 => 16,  59 => 15,  55 => 14,  49 => 11,  45 => 10,  41 => 9,  35 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
