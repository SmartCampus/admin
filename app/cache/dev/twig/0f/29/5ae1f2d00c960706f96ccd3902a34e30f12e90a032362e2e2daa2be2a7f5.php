<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_0f295ae1f2d00c960706f96ccd3902a34e30f12e90a032362e2e2daa2be2a7f5 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  188 => 76,  174 => 74,  167 => 71,  118 => 49,  104 => 42,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  194 => 70,  191 => 77,  185 => 75,  181 => 65,  178 => 64,  172 => 62,  165 => 60,  153 => 69,  150 => 55,  134 => 54,  113 => 48,  84 => 24,  81 => 23,  110 => 50,  127 => 62,  70 => 19,  53 => 12,  34 => 14,  90 => 27,  58 => 27,  148 => 71,  137 => 63,  146 => 51,  129 => 40,  97 => 32,  76 => 31,  65 => 18,  100 => 30,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 60,  128 => 49,  107 => 33,  61 => 28,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 78,  179 => 69,  159 => 61,  143 => 56,  135 => 43,  119 => 40,  102 => 41,  71 => 30,  67 => 24,  63 => 29,  59 => 14,  38 => 6,  94 => 37,  89 => 36,  85 => 33,  75 => 28,  68 => 18,  56 => 23,  87 => 34,  21 => 2,  26 => 6,  93 => 31,  88 => 25,  78 => 21,  46 => 13,  27 => 3,  44 => 18,  31 => 11,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 62,  158 => 67,  156 => 58,  151 => 63,  142 => 59,  138 => 56,  136 => 56,  121 => 50,  117 => 44,  105 => 34,  91 => 41,  62 => 15,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 22,  72 => 19,  69 => 19,  47 => 19,  40 => 17,  37 => 22,  22 => 2,  246 => 93,  157 => 56,  145 => 68,  139 => 65,  131 => 52,  123 => 42,  120 => 54,  115 => 35,  111 => 47,  108 => 49,  101 => 41,  98 => 31,  96 => 37,  83 => 33,  74 => 14,  66 => 15,  55 => 16,  52 => 22,  50 => 20,  43 => 12,  41 => 7,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 51,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 55,  116 => 39,  112 => 53,  109 => 37,  106 => 36,  103 => 47,  99 => 31,  95 => 28,  92 => 24,  86 => 28,  82 => 32,  80 => 32,  73 => 20,  64 => 23,  60 => 6,  57 => 24,  54 => 13,  51 => 13,  48 => 10,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
