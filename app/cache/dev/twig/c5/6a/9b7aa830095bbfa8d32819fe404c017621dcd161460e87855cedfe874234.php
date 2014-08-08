<?php

/* SmartCampusBundle:Smart:datatableAll.html.twig */
class __TwigTemplate_c56a9b7aa830095bbfa8d32819fe404c017621dcd161460e87855cedfe874234 extends Twig_Template
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
                    <th>Script</th>
                    <th>Board</th>
                    <th>Endpoint</th>
                </tr>
            </thead>
            
            <tbody>
                ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["virAll"]) ? $context["virAll"] : $this->getContext($context, "virAll")));
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            // line 17
            echo "                    <tr class=\"lien\" style=\"cursor: pointer;\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_voir", array("id" => $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id"))), "html", null, true);
            echo "';\">
                        <td>
                            ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "kind"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "frequency"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 28
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
        // line 38
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phyAll"]) ? $context["phyAll"] : $this->getContext($context, "phyAll")));
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            // line 39
            echo "                    <tr class=\"lien\" style=\"cursor: pointer;\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_voir", array("id" => $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "id"))), "html", null, true);
            echo "';\">
                        <td>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "name"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "kind"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "frequency"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ~<!--vide-->
                        </td>
                        <td>
                            ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "board"), "name"), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cap"]) ? $context["cap"] : $this->getContext($context, "cap")), "pin"), "html", null, true);
            echo "]
                        </td>
                        <td>
                            ";
            // line 56
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
        // line 60
        echo "            </tbody>
        </table>
    </div>
</div>
<!--<a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("smartcampus_ajouterV");
        echo "\" class=\"btn btn-success bouton-accueil\">
    <span class=\"glyphicon glyphicon-plus-sign\"></span> Capteur Virtuel
</a>
<a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("smartcampus_ajouterP");
        echo "\" class=\"btn btn-success bouton-accueil\">
    <span class=\"glyphicon glyphicon-plus-sign\"></span> Capteur Physique
</a>
<br/>-->
<a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("smartcampus_sensors");
        echo "\" class=\"btn btn-info bouton-accueil\">
    <span class=\"glyphicon glyphicon-eye-open\"></span> Voir le Json
</a>
<a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("smartcampus_json");
        echo "\" class=\"btn btn-warning bouton-accueil\">
    <span class=\"glyphicon glyphicon glyphicon-refresh\"></span> Synchronisation avec SmartCampus
</a>
<a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("smartcampus_accueil");
        echo "\" class=\"btn btn-danger bouton-accueil\">
    <span class=\"glyphicon glyphicon glyphicon-trash\"></span> Vider les logs
</a>
";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:datatableAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 77,  157 => 74,  151 => 71,  144 => 67,  138 => 64,  132 => 60,  120 => 56,  112 => 53,  103 => 47,  97 => 44,  91 => 41,  85 => 39,  80 => 38,  64 => 28,  58 => 25,  52 => 22,  46 => 19,  40 => 17,  36 => 16,  19 => 1,);
    }
}
