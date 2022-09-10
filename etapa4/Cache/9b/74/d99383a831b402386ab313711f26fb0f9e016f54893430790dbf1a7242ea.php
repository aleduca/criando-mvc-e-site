<?php

/* Site/home.html */
class __TwigTemplate_9b74d99383a831b402386ab313711f26fb0f9e016f54893430790dbf1a7242ea extends Twig_Template
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
<div class=\"row-fluid\">

    <div class=\"span12\" id=\"divMain\">

        <h1>Bem Vindo</h1>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis euismod libero,
       non tempus metus. Phasellus pulvinar tempus quam sed vestibulum.
       Nam commodo eros at erat pretium tristique. Sed nisi mi, euismod sit
       amet sem fringilla, blandit aliquet turpis. Praesent erat dolor, porta a
       lacinia ut, convallis non erat. Duis vulputate odio euismod dapibus feugiat.
       Aliquam sodales malesuada urna.
     </p>

     <p>
       Praesent sed facilisis velit. Mauris lacinia et nisl ac scelerisque.
      Nullam id iaculis dui. Phasellus imperdiet, orci elementum sollicitudin
      tristique, ipsum lorem rhoncus tellus, at pulvinar neque purus hendrerit neque.
      Cras scelerisque pharetra tempus. Morbi dapibus nec neque et mattis.
      Phasellus ultricies accumsan laoreet. Maecenas feugiat lobortis diam,
      non facilisis sem pretium sed. Proin dapibus est et consectetur pretium.
    </p>
    <br />
    <br />

    <div class=\"row-fluid\">

      ";
        // line 36
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["especialidades"]) ? $context["especialidades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["especialidade"]) {
            // line 37
            echo "
        <div class=\"span3\">

            <div class=\"box\">

              <i class=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["especialidade"], "tb_especialidade_icon", array()), "html", null, true);
            echo "\"></i>
              <h4 class=\"title\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["especialidade"], "tb_especialidade_nome", array()), "html", null, true);
            echo "</h4>
              <p>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["especialidade"], "tb_especialidade_descricao", array()), "html", null, true);
            echo "</p>

            </div>

        </div>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['especialidade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
    </div>


    <div class=\"row-fluid\">

      ";
        // line 58
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 59
            echo "
        <div class=\"span3\">

          <h5 class=\"text-info\"> ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "tb_noticia_titulo", array()), "html", null, true);
            echo " </h5>
          <img src=\"";
            // line 63
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array()), "html", null, true);
            echo "/public/images/6-md.jpg\" class=\"img-polaroid\" style=\"margin:5px 0px 15px;\" alt=\"\">
          <p>";
            // line 64
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array($this->getAttribute($context["noticia"], "tb_noticia_texto", array()), 65, "..."));
            echo "<br />
          <a href=\"/noticia/";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "tb_noticia_slug", array()), "html", null, true);
            echo "\">Leia Mais...</a></p>

        </div>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
    </div>

  </div>

</div>

<div id=\"footerInnerSeparator\"></div>

";
    }

    public function getTemplateName()
    {
        return "Site/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 70,  142 => 65,  138 => 64,  134 => 63,  130 => 62,  125 => 59,  120 => 58,  112 => 51,  99 => 44,  95 => 43,  91 => 42,  84 => 37,  79 => 36,  48 => 6,  45 => 5,  37 => 3,  11 => 1,);
    }
}
