<?php

/* SmartCampusBundle:Smart:datatableBoard.html.twig */
class __TwigTemplate_4ccf484488edc7c7fced03e1505d4c211445799ab34404b96e6061aefb83ec96 extends Twig_Template
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
                </tr>
            </thead>
            
            <tbody>
                ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boardAll"]) ? $context["boardAll"] : $this->getContext($context, "boardAll")));
        foreach ($context['_seq'] as $context["_key"] => $context["board"]) {
            // line 12
            echo "                    <tr class=\"lien\" style=\"cursor: pointer;\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smartcampus_voirB", array("id" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id"))), "html", null, true);
            echo "';\">
                        <td>
                            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name"), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </tbody>
        </table>
    </div>
</div>

<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("smartcampus_ajouterB");
        echo "\" class=\"btn btn-primary bouton-accueil\">
    + Board
</a>

";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:datatableBoard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  51 => 18,  41 => 14,  35 => 12,  31 => 11,  19 => 1,);
    }
}
