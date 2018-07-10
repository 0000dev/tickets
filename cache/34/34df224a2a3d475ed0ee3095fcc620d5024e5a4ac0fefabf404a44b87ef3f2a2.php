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

            <!-- top header menu / better to do with native menu? -->
            <div class=\"custom-wrapper pure-g\" id=\"menu\">
                <div class=\"pure-u-1 pure-u-md-1-5\">
                    <div class=\"pure-menu\">
                        <a href=\"/\" class=\"pure-menu-heading custom-brand\">FansVoice</a>
                        <a href=\"#\" class=\"custom-toggle\" id=\"toggle\"><s class=\"bar\"></s><s class=\"bar\"></s></a>
                    </div>
                </div>
                <div class=\"pure-u-1 pure-u-md-2-5\">
                    <div class=\"pure-menu pure-menu-horizontal custom-can-transform\">
                        
                            <form class=\"pure-form\"><input type=\"text\" class=\"pure-input-rounded\"></form>
                        
                    </div>
                </div>
                <div class=\"pure-u-1 pure-u-md-2-5\">
                    <div class=\"pure-menu pure-menu-horizontal custom-menu-3 custom-can-transform\">
                        <ul class=\"pure-menu-list\">
                            <li class=\"pure-menu-item\"><a href=\"/category/16\" class=\"pure-menu-link\">Rock & Pop</a></li>
                            <li class=\"pure-menu-item\"><a href=\"/category/18\" class=\"pure-menu-link\">Musicals</a></li>
                            <li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">Yahoo</a></li>
                            <li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">W3C</a></li>
                        </ul>
                    </div>
                </div>
            </div>
       
        ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "
        ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
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

    // line 55
    public function block_body($context, array $blocks = array())
    {
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 58,  121 => 57,  116 => 55,  101 => 10,  98 => 9,  92 => 5,  84 => 60,  82 => 57,  79 => 56,  77 => 55,  42 => 22,  40 => 9,  33 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/dmytro/soft/tests/php/my/src/views/base.html.twig");
    }
}
