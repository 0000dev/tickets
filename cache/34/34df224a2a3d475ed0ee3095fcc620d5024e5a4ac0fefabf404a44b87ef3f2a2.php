<?php

/* base.html.twig */
class __TwigTemplate_1c51194f7ad0ee637e9561069da429f4ba3bd85bbb63cbf33e34bf41420253d9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">

    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    </head>

    <body>
        <div class=\"content\">
       
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "        
        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "TicketHub Home Page";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@1.0.0/build/pure-min.css\" integrity=\"sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w\" crossorigin=\"anonymous\">

            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-extend.css\">
            <!--[if lte IE 8]>
                <link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css\">
            <![endif]-->
            <!--[if gt IE 8]><!-->
                <link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css\">
            <!--<![endif]-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tickets.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tabs.css\">
        ";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  93 => 29,  88 => 27,  73 => 10,  70 => 9,  64 => 5,  56 => 32,  54 => 29,  51 => 28,  49 => 27,  42 => 22,  40 => 9,  33 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/dmytro/soft/tests/php/my/src/views/base.html.twig");
    }
}
