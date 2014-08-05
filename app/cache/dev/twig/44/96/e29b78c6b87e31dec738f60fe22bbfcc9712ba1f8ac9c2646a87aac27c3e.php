<?php

/* SmartCampusBundle:Smart:ajoutV.html.twig */
class __TwigTemplate_4496e29b78c6b87e31dec738f60fe22bbfcc9712ba1f8ac9c2646a87aac27c3e extends Twig_Template
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
    <h1><span class=\"glyphicon glyphicon-home\" style=\"cursor: pointer;\" onclick=\"location.href='";
        // line 7
        echo $this->env->getExtension('routing')->getPath("smartcampus_accueil");
        echo "';\"></span> Ajout d'un capteur Virtuel</h1>

    <!--formulaire d'ajout d'un capteur virtuel-->
\t<div class=\"well container\">
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "script"), 'label');
        echo "</div>
              <div class=\"col-md-2\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "script"), 'widget');
        echo "</div>
              <div class=\"col-md-3\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "script"), 'errors');
        echo "</div>
          </div>
          <script>
            \$(function () {
                \$('textarea').each(function () {
                    var textarea = \$(this);

                    var mode = \"java\";

                    var editDiv = \$('<div>', {
                        position: 'absolute',
                        width: textarea.width()*5,
                        height: textarea.height()*3,
                        'id':\"editor\",
                        'class': \"form-group\" /*textarea.attr('class')*/
                    }).insertBefore(textarea);

                    /*textarea.css('visibility', 'hidden');*/

                    var editor = ace.edit(editDiv[0]);
                    editor.renderer.setShowGutter(false);
                    editor.getSession().setValue(textarea.val());
                    editor.getSession().setMode(\"ace/mode/\" + mode);
                    editor.setTheme(\"ace/theme/idle_fingers\");

                    // copy back to textarea on form submit...
                    textarea.closest('form').submit(function () {
                        textarea.val(editor.getSession().getValue());
                    })
                });
            });
          </script>
          <div class=\"form-group\">
              ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          </div>
          <div class=\"form-group\">
              <input type=\"submit\" class=\"btn btn-success\"/>
          </div>
      </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:ajoutV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 63,  104 => 30,  100 => 29,  96 => 28,  90 => 25,  86 => 24,  82 => 23,  76 => 20,  72 => 19,  68 => 18,  62 => 15,  58 => 14,  54 => 13,  49 => 11,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
