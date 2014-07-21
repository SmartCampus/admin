<?php

/* SmartCampusBundle:Smart:filtre.html.twig */
class __TwigTemplate_9baac7f1afdf09caf05e735427ad672951ca6f8bedfa89114f829f1bf89fbae4 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"well\">
        <form id=\"my_form\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("smartcampus_redirect");
        echo "\" method=\"post\">
            <div class=\"col-md-10\">
                Type :
                <select id=\"kind\" name=\"kind\">
                    <option value=\"indiferent\">indiferent</option>
                    <option value=\"temperature\">temperature</option>
                    <option value=\"luminosite\">light</option>
                </select>
            </div>
            <div class=\"col-md-2-offset-2\">
                <input type=\"submit\" value=\"Filtrer\">
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:filtre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
