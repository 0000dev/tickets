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
        // line 26
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
                        
                            <form class=\"pure-form\" action=\"/search\" method=\"POST\"><input name=\"search\" type=\"text\" class=\"pure-input-rounded\" placeholder=\"What are you looking for?\" onkeydown=\"if (event.keyCode == 13) myFunction(this.value)\"></form>
                        
                    </div>
                </div>
                <div class=\"pure-u-1 pure-u-md-2-5\">
                    <div class=\"pure-menu pure-menu-horizontal custom-menu-3 custom-can-transform\">
                        <ul class=\"pure-menu-list\">
                            <li class=\"pure-menu-item\"><a href=\"/category/16\" class=\"pure-menu-link\">Rock & Pop</a></li>
                            
                            <li class=\"pure-menu-item\"><a href=\"/category/19\" class=\"pure-menu-link\">Rap & Hip-Hop</a></li>

                            <li class=\"pure-menu-item\"><a href=\"/venues\" class=\"pure-menu-link\">Venues</a></li>
                       
                        </ul>
                    </div>
                </div>
            </div>
       
        ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "
        </div>

        <div class=\"darkfooter\">
            <div class=\"content\">

                <div class=\"pure-g\">
                <div class=\"pure-u-1-1\">
                   <b>More information</b>
                    <ul>
                        <li><a href=\"/page/about\">About us</a></li>
                        <li><a href=\"/page/privacy-policy\">Privacy Policy</a></li>
                        <li><a href=\"/page/contact\">Contact</a></li>
                    </ul>
                </div>
                </div>

            </div>
        </div>

        ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 85
        echo "    
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
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-min.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-extend.css\">
            <!--[if lte IE 8]>
                <link rel=\"stylesheet\" href=\"/css/grids-responsive-old-ie-min.css\">
            <![endif]-->
            <!--[if gt IE 8]><!-->
                <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/grids-responsive-min.css\">
            <!--<![endif]-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tickets.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tabs.css\">
            <link rel=\"stylesheet\" href=\"/css/fontawesome-all.min.css\">

            <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
            <script type=\"text/javascript\" src=\"/js/jquery.nicescroll.js\"></script>

        ";
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        // line 83
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 83,  145 => 82,  140 => 61,  121 => 10,  118 => 9,  112 => 5,  105 => 85,  103 => 82,  81 => 62,  79 => 61,  42 => 26,  40 => 9,  33 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/dmytro/soft/tests/php/my/src/views/base.html.twig");
    }
}
