<?php

/* home.html.twig */
class __TwigTemplate_688ff1a4c9f7255cc5795438390eb029a0789799cd56ef05ff42121ef3781750 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
</div> ";
        // line 6
        echo "
 
\t<div style=\"background: url('https://st.depositphotos.com/1063397/4654/i/950/depositphotos_46549179-stock-photo-musician-at-a-concert.jpg');height: 663px;background-size: cover;\">


\t \t<div>
\t\t<form   style=\"padding:20%; width:100%\"><input type=\"text\" style='width:100%;height:50px;' /></form>
\t \t</div>
\t\t\t 
\t\t 

\t</div>
 

<div class=\"content\">
<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\tsome content
\t\t</div>
</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/home/dmytro/soft/tests/php/my/src/views/home.html.twig");
    }
}
