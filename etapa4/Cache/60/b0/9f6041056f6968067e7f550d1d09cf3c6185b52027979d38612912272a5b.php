<?php

/* Site/busca.html */
class __TwigTemplate_60b09f6041056f6968067e7f550d1d09cf3c6185b52027979d38612912272a5b extends Twig_Template
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
   ";
        // line 7
        if (twig_test_empty((isset($context["resultadoBusca"]) ? $context["resultadoBusca"] : null))) {
            // line 8
            echo "    
        <h3>Nenhuma notícia encontrada com a palavra \"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["palavraBuscada"]) ? $context["palavraBuscada"] : null), "html", null, true);
            echo "\"</h3>

   ";
        } else {
            // line 12
            echo "    
      <h2>Resultado da Busca \"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["palavraBuscada"]) ? $context["palavraBuscada"] : null), "html", null, true);
            echo "\" </h2>

       ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultadoBusca"]) ? $context["resultadoBusca"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["busca"]) {
                // line 16
                echo "
            <h2> ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["busca"], "tb_noticia_titulo", array()), "html", null, true);
                echo " </h2>
            ";
                // line 18
                echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array($this->getAttribute($context["busca"], "tb_noticia_texto", array()), 200, "..."));
                echo " <br>
            <a href=\"/noticia/";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["busca"], "tb_noticia_slug", array()), "html", null, true);
                echo "\">Leia mais...</a>     


       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['busca'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo " 

       <div class=\"pager\">
         ";
            // line 25
            echo (isset($context["links"]) ? $context["links"] : null);
            echo "
       </div>

   ";
        }
        // line 28
        echo " 
  

";
    }

    public function getTemplateName()
    {
        return "Site/busca.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 28,  100 => 25,  95 => 22,  85 => 19,  81 => 18,  77 => 17,  74 => 16,  70 => 15,  65 => 13,  62 => 12,  56 => 9,  53 => 8,  51 => 7,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
