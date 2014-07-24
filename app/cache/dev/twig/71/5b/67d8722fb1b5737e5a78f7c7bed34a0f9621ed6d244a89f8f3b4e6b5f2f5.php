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
                    <th>Script</th>
                    <th>Board</th>
                    <th>Endpoint</th>
                </tr>
            </thead>
            
            <tbody>
                ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["virAll"]) ? $context["virAll"] : $this->getContext($context, "virAll")));
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            // line 18
            echo "                    <tr class=\"lien\" style=\"cursor: pointer;\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_voirV", array("id" => $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id"))), "html", null, true);
            echo "';\">
                        <td>
                            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "kind"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "frequency"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "script"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ~<!--vide-->
                        </td>
                        <td>
                            ~<!--vide-->
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phyAll"]) ? $context["phyAll"] : $this->getContext($context, "phyAll")));
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            // line 40
            echo "                    <tr class=\"lien\" style=\"cursor: pointer;\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_voirP", array("id" => $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id"))), "html", null, true);
            echo "';\">
                        <td>
                            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "kind"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "frequency"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ~<!--vide-->
                        </td>
                        <td>
                            ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "board"), "name"), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "board"), "pin"), "html", null, true);
            echo "]
                        </td>
                        <td>
                            ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "endpoint"), "ip"), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "endpoint"), "port"), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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
        return array (  133 => 61,  121 => 57,  113 => 54,  104 => 48,  98 => 45,  92 => 42,  86 => 40,  81 => 39,  65 => 29,  59 => 26,  53 => 23,  47 => 20,  41 => 18,  37 => 17,  19 => 1,);
    }
}
