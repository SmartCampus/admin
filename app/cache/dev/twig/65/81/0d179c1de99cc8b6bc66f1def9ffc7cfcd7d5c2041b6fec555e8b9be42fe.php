<?php

/* SmartCampusBundle:Smart:voirProp.html.twig */
class __TwigTemplate_65810d179c1de99cc8b6bc66f1def9ffc7cfcd7d5c2041b6fec555e8b9be42fe extends Twig_Template
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
    <div class=\"col-md-2\">Proprietes :</div>
    <div class=\"col-md-2\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "propriete"));
        foreach ($context['_seq'] as $context["_key"] => $context["prop"]) {
            // line 5
            echo "            <p>
                ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "name"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "value"), "html", null, true);
            echo "
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </div>
    <div class=\"col-md-3\">
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "propriete"));
        foreach ($context['_seq'] as $context["_key"] => $context["prop"]) {
            // line 12
            echo "            <p>
                <a  onclick=\"suppr('";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_supprimerProp", array("id" => $this->getAttribute((isset($context["prop"]) ? $context["prop"] : $this->getContext($context, "prop")), "id"))), "html", null, true);
            echo "');\" class=\"btn btn btn-danger\">
                    <span class=\"glyphicon glyphicon-minus-sign\"></span>
                </a>
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_ajouterProp", array("id" => $this->getAttribute((isset($context["capteur"]) ? $context["capteur"] : $this->getContext($context, "capteur")), "id"), "tag" => (isset($context["kind"]) ? $context["kind"] : $this->getContext($context, "kind")))), "html", null, true);
        echo "\" class=\"btn btn-success\">
            <span class=\"glyphicon glyphicon-plus-sign\"></span>
        </a>
    </div>
</div>

<!-- Boite dialogue ajout propriete -->
";
        // line 25
        $this->env->loadTemplate("SmartCampusBundle:Smart:dialogue.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:voirProp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  64 => 18,  53 => 13,  50 => 12,  46 => 11,  42 => 9,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
