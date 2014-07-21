<?php

/* SmartCampusBundle:Smart:tri.html.twig */
class __TwigTemplate_d1a5a5a462850111420a80f35b1ba7b51b597d7796787170d3895803d08e92f5 extends Twig_Template
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
        echo "<?php


// Connexion à la base de donnée
mysql_connect('serveur','user','password');
mysql_select_db('dbname');


// Le nom de notre table
\$tablename = 'test';


// Tri sur colonne
\$tri_autorises = array('id','firstname','lastname','email','last_connection');
\$order_by = in_array(\$_GET['order'],\$tri_autorises) ? \$_GET['order'] : 'id';


// Sens du tri
\$order_dir = isset(\$_GET['inverse']) ? 'DESC' : 'ASC';


// Préparation de la requête
\$sql = \"
\tSELECT *
\tFROM {\$tablename}
\tORDER BY {\$order_by} {\$order_dir}
\";
\$result = mysql_query(\$sql);


// Notre fonction qui affiche les liens
function sort_link(\$text, \$order=false)
{
\tglobal \$order_by, \$order_dir;

\tif(!\$order)
\t\t\$order = \$text;

\t\$link = '<a href=\"?order=' . \$order;
\tif(\$order_by==\$order && \$order_dir=='ASC')
\t\t\$link .= '&inverse=true';
\t\$link .= '\"';
\tif(\$order_by==\$order && \$order_dir=='ASC')
\t\t\$link .= ' class=\"order_asc\"';
\telseif(\$order_by==\$order && \$order_dir=='DESC')
\t\t\$link .= ' class=\"order_desc\"';
\t\$link .= '>' . \$text . '</a>';

\treturn \$link;
}

?>";
    }

    public function getTemplateName()
    {
        return "SmartCampusBundle:Smart:tri.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  74 => 26,  65 => 22,  57 => 19,  49 => 16,  43 => 14,  40 => 13,  36 => 12,  32 => 11,  21 => 2,  19 => 1,);
    }
}
