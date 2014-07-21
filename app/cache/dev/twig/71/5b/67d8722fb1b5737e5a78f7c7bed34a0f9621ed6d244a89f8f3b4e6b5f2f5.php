<?php

/* SmartCampusBundle:Smart:datatable.html.twig */
class __TwigTemplate_715b67d8722fb1b5737e5a78f7c7bed34a0f9621ed6d244a89f8f3b4e6b5f2f5 extends Twig_Template
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
    <div class=\"panel panel-default\">
        <div id=\"tabaccueil\" class=\"panel-heading\">Liste des capteurs</div>
        <table id=\"tablerecherche\" class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Kind</th>
                    <th>Frequency</th>
                </tr>
            </thead>
            
            <!--<tfoot>
                <tr>
                    <th>Name</th>
                    <th>Kind</th>
                    <th>Frequency</th>
                </tr>
            </tfoot>-->
            
            <tbody>
                <!--";
        // line 22
        $context["ret"] = (isset($context["capAll"]) ? $context["capAll"] : $this->getContext($context, "capAll"));
        echo "-->
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["capAll"]) ? $context["capAll"] : $this->getContext($context, "capAll")));
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            // line 24
            echo "                    <tr class=\"lien\" style=\"cursor: pointer;\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_voir", array("id" => $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id"))), "html", null, true);
            echo "';\">
                        <td>
                            ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "kind"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "frequency"), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:datatable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 36,  68 => 32,  62 => 29,  56 => 26,  50 => 24,  46 => 23,  42 => 22,  19 => 1,);
    }
}
