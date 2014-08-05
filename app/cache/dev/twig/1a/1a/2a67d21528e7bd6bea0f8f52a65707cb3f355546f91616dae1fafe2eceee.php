<?php

/* SmartCampusBundle:Smart:datatablePhy.html.twig */
class __TwigTemplate_1a1a2a67d21528e7bd6bea0f8f52a65707cb3f355546f91616dae1fafe2eceee extends Twig_Template
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
        <table id=\"tablerecherche\" class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Kind</th>
                    <th>Frequency</th>
                    <th>Board</th>
                    <th>Endpoint</th>
                </tr>
            </thead>
            
            <tbody>
                ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phyAll"]) ? $context["phyAll"] : $this->getContext($context, "phyAll")));
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            // line 16
            echo "                    <tr class=\"lien\" style=\"cursor: pointer;\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_voirP", array("id" => $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id"))), "html", null, true);
            echo "';\">
                        <td>
                            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "kind"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "frequency"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "board"), "name"), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "pin"), "html", null, true);
            echo "]
                        </td>
                        <td>
                            ";
            // line 30
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
        // line 34
        echo "            </tbody>
        </table>
    </div>
</div>

<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("smartcampus_ajouterP");
        echo "\" class=\"btn btn-success bouton-accueil\">
    + Capteur Physique
</a>
";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:datatablePhy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 39,  83 => 34,  71 => 30,  63 => 27,  57 => 24,  51 => 21,  45 => 18,  39 => 16,  35 => 15,  19 => 1,);
    }
}
