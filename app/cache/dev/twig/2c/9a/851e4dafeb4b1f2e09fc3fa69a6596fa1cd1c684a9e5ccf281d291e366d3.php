<?php

/* SmartCampusBundle:Smart:modifV.html.twig */
class __TwigTemplate_2c9a851e4dafeb4b1f2e09fc3fa69a6596fa1cd1c684a9e5ccf281d291e366d3 extends Twig_Template
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
        echo " - Modificatiop";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <h1>Modification du capteur ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "name"), "html", null, true);
        echo "</h1>

    <!--formulaire d'edition d'un capteur virtuel-->
    <div class=\"well container\">
      <form class=\"form-horizontal\" role=\"form\" method=\"post\" ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
          <div class=\"form-group\">
              <div class=\"col-md-2\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frequency"), 'label');
        echo "</div>
              <div class=\"col-md-2\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frequency"), 'widget');
        echo "</div>
              <div class=\"col-md-3\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frequency"), 'errors');
        echo "</div>
          </div>
          <div class=\"form-group\">
              <div class=\"col-md-2\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "script"), 'label');
        echo "</div>
              <div class=\"col-md-2\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "script"), 'widget');
        echo "</div>
              <div class=\"col-md-3\">";
        // line 20
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
        // line 53
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
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_voirV", array("id" => $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
        Retour à ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "name"), "html", null, true);
        echo "
    </a>

";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:modifV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 62,  70 => 19,  53 => 13,  34 => 14,  90 => 39,  58 => 14,  148 => 71,  137 => 63,  146 => 51,  129 => 40,  97 => 32,  76 => 20,  65 => 18,  100 => 30,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 60,  128 => 49,  107 => 33,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 42,  102 => 32,  71 => 30,  67 => 18,  63 => 27,  59 => 15,  38 => 15,  94 => 29,  89 => 23,  85 => 24,  75 => 18,  68 => 18,  56 => 23,  87 => 25,  21 => 2,  26 => 6,  93 => 31,  88 => 25,  78 => 21,  46 => 9,  27 => 4,  44 => 17,  31 => 11,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 38,  117 => 44,  105 => 40,  91 => 41,  62 => 15,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 22,  72 => 19,  69 => 19,  47 => 9,  40 => 17,  37 => 22,  22 => 2,  246 => 90,  157 => 56,  145 => 68,  139 => 65,  131 => 52,  123 => 61,  120 => 56,  115 => 35,  111 => 34,  108 => 36,  101 => 30,  98 => 31,  96 => 30,  83 => 34,  74 => 14,  66 => 15,  55 => 14,  52 => 22,  50 => 20,  43 => 8,  41 => 7,  35 => 15,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 39,  122 => 43,  116 => 41,  112 => 53,  109 => 37,  106 => 36,  103 => 47,  99 => 31,  95 => 28,  92 => 24,  86 => 28,  82 => 23,  80 => 38,  73 => 20,  64 => 17,  60 => 6,  57 => 24,  54 => 13,  51 => 21,  48 => 10,  45 => 18,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 6,);
    }
}
