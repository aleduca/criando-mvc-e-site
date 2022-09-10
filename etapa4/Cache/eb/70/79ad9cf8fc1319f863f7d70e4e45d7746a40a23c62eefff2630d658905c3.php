<?php

/* Site/Partials/header.html */
class __TwigTemplate_eb7079ad9cf8fc1319f863f7d70e4e45d7746a40a23c62eefff2630d658905c3 extends Twig_Template
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
        echo "<div class=\"row-fluid\">
    <div class=\"span12\">

        <div id=\"divLogo\" class=\"pull-left\">
            <a href=\"/\" id=\"divSiteTitle\">MVC AWB</a><br />
            <a href=\"/\" id=\"divTagLine\">Mini framework</a>
        </div>

        <div class=\"navbarHeader\">

                <ul class=\"nav nav-pills ddmenu\">
                <li class=\"active\"><a href=\"/\">Início</a></li>
                <li><a href=\"/pagina/sobre\">Sobre</a></li>
                <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\">Páginas <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                <li><a href=\"/pagina/seo\">Mais sobre SEO</a></li>
                <li><a href=\"/pagina/webdesign\">Mais sobre Web design</a></li>
                <li><a href=\"/pagina/desenvolvimento\">Mais sobre deenvolvimento web</a></li>
                </ul>
                </li>
                <li><a href=\"/pagina/servicos\">Serviços</a></li>
                <li><a href=\"/pagina/contato\">Contato</a></li>
                <li style=\"margin-top:2px;\">
                    <form action=\"/busca/buscar\" method=\"GET\">
                        <input type=\"text\" class=\"form-control\" name=\"busca\" placeholder=\"Buscar\">
                    </form>
                </li>
                </ul>
        </div>

    </div>
</div>

<div class=\"row-fluid\">
<div class=\"span12\">

    <div id=\"headerSeparator\"></div>

    <div class=\"camera_full_width\">
        <div id=\"camera_wrap\"></div>
        <br style=\"clear:both\"/><div style=\"margin-bottom:40px\"></div>
    </div>

    <div id=\"headerSeparator2\"></div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Site/Partials/header.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
