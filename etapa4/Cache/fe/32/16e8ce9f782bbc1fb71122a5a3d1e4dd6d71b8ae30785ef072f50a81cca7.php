<?php

/* Site/noticia.html */
class __TwigTemplate_fe3216e8ce9f782bbc1fb71122a5a3d1e4dd6d71b8ae30785ef072f50a81cca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("Site/Layout.html");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Site/Layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : null), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "tb_noticia_titulo", array()), "html", null, true);
        echo "</h2>
        
        ";
        // line 9
        echo $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "tb_noticia_texto", array());
        echo "    
  

";
    }

    public function getTemplateName()
    {
        return "Site/noticia.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  51 => 7,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
