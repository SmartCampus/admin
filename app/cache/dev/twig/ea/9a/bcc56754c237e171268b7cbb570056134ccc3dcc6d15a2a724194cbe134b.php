<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 8
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "      
    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "      
  </head>

  <body>
      ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "  </body>
</html> ";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "SmartCampus";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "      <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
      <script src=\"//code.jquery.com/ui/1.11.0/jquery-ui.js\"></script>
      <!--<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>-->
      
      <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
      
      <script src=\"//cdn.datatables.net/1.10.1/js/jquery.dataTables.min.js\"></script>
      
      <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/suppr.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dialog.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tri.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css\">
      
      <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css\">
      <link rel=\"stylesheet\" href=\"//cdn.datatables.net/plug-ins/be7019ee387/integration/jqueryui/dataTables.jqueryui.css\">
      
      <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "        
      ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  105 => 35,  99 => 29,  91 => 23,  88 => 22,  82 => 19,  78 => 18,  74 => 17,  64 => 9,  61 => 8,  55 => 6,  50 => 38,  48 => 35,  42 => 31,  40 => 22,  37 => 21,  35 => 8,  30 => 6,  23 => 1,);
    }
}