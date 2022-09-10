<?php

/* Site/Layout.html */
class __TwigTemplate_bcc137a4111095523736f852492e205a9fe32c058863ec81901972a6dbf46433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>

    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\" rel=\"stylesheet\">

    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array()), "html", null, true);
        echo "/public/layout-files/scripts/bootstrap/css/bootstrap-responsive.min.css\" rel=\"stylesheet\">

    <!-- Icons -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array()), "html", null, true);
        echo "/public/layout-files/scripts/icons/general/stylesheets/general_foundicons.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array()), "html", null, true);
        echo "/public/layout-files/scripts/icons/social/stylesheets/social_foundicons.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array()), "html", null, true);
        echo "/public/layout-files/scripts/fontawesome/css/font-awesome.min.css\">
    <link href=\"scripts/carousel/style.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array()), "html", null, true);
        echo "/public/layout-files/scripts/camera/css/camera.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"http://fonts.googleapis.com/css?family=Syncopate\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Abel\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Pontano+Sans\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Oxygen\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array()), "html", null, true);
        echo "/public/layout-files/styles/custom.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body id=\"pageBody\">

<div id=\"divBoxed\" class=\"container\">

    <div class=\"transparent-bg\" style=\"position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;\"></div>

    <div class=\"divPanel notop nobottom\">
        ";
        // line 32
        $this->env->loadTemplate("Site/Partials/header.html")->display($context);
        // line 33
        echo "    </div>

    <div class=\"contentArea\">

        <div class=\"divPanel notop page-content\">
             ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "        </div>
    </div>

    <div id=\"footerOuterSeparator\"></div>

    <div id=\"divFooter\" class=\"footerArea\">
        ";
        // line 45
        $this->env->loadTemplate("Site/Partials/footer.html")->display($context);
        // line 46
        echo "    </div>
</div>
<br /><br /><br />

<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array()), "html", null, true);
        echo "/public/layout-files/scripts/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array()), "html", null, true);
        echo "/public/layout-files/scripts/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array()), "html", null, true);
        echo "/public/layout-files/scripts/default.js\" type=\"text/javascript\"></script>

<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array()), "html", null, true);
        echo "/public/layout-files/scripts/carousel/jquery.carouFredSel-6.2.0-packed.js\" type=\"text/javascript\"></script>

<script type=\"text/javascript\">\$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script><script src=\"scripts/camera/scripts/camera.min.js\" type=\"text/javascript\">
</script>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array()), "html", null, true);
        echo "/public/layout-files/scripts/easing/jquery.easing.1.3.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">function startCamera() {\$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true });}\$(function(){startCamera()});</script>
</body>
</html>
";
    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        echo " ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "Site/Layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 38,  131 => 5,  122 => 58,  115 => 54,  110 => 52,  106 => 51,  102 => 50,  96 => 46,  94 => 45,  86 => 39,  84 => 38,  77 => 33,  75 => 32,  63 => 23,  53 => 16,  48 => 14,  44 => 13,  40 => 12,  34 => 9,  27 => 5,  21 => 1,);
    }
}
