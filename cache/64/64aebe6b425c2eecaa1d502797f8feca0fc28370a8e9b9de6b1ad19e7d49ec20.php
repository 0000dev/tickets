<?php

/* home.html.twig */
class __TwigTemplate_688ff1a4c9f7255cc5795438390eb029a0789799cd56ef05ff42121ef3781750 extends Twig_Template
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
        echo "</head>

<body>



\t";
        // line 29
        echo "
 
\t<div style=\"background: url('https://st.depositphotos.com/1063397/4654/i/950/depositphotos_46549179-stock-photo-musician-at-a-concert.jpg');height: 600px;background-size: cover;\">

\t\t<form   style=\"padding:15%; width:100%\">
\t\t\t<div style=\"padding:40px; background-color:#fff9; border-radius: 10px;\">
\t\t\t<div style=\"padding:40px; background-color:#fff9; border-radius: 10px;\"> 
\t\t\t\t<input placeholder=\"What are you looking for?\" id=\"mainpage_domain\" onkeydown=\"if (event.keyCode == 13) myFunction(this.value)\" type=\"text\"  style='width:100%;height:50px;' />
\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t 
\t</div>
 
<div class=\"content\">
\t


\t<div class=\"pure-g comments margintop15\">
\t\t<div class=\"pure-u-1\">
\t\t\t<div class=\"stars\">
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t\t\t</div> 

\t\t\t<div class=\"username\"><strong>Anonymous</strong></div>
\t\t\t<div class=\"feebacktext\">
\t\t\tSo this show was amazing and so worth the wait. I hated that I couldn't see the whole cast but I really enjoyed it. I would absolutely love to see it again in the near future.
\t\t\t</div>
\t\t\t<span class=\"placeandtime\">August Wilson Theatre - New York, NY - Sat, Apr 7, 2018</span>
\t\t</div>
\t</div>

\t<div class=\"pure-g comments margintop15\">
\t\t<div class=\"pure-u-1\">
\t\t\t<div class=\"stars\">
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t\t\t</div> 

\t\t\t<div class=\"username\"><strong>Anonymous</strong></div>
\t\t\t<div class=\"feebacktext\">
\t\t\tSo this show was amazing and so worth the wait. I hated that I couldn't see the whole cast but I really enjoyed it. I would absolutely love to see it again in the near future.
\t\t\t</div>
\t\t\t<span class=\"placeandtime\">August Wilson Theatre - New York, NY - Sat, Apr 7, 2018</span>
\t\t</div>
\t</div>

\t<div class=\"pure-g comments margintop15\">
\t\t<div class=\"pure-u-1\">
\t\t\t<div class=\"stars\">
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t★
\t\t\t\t\t\t\t\t\t\t\t</div> 

\t\t\t<div class=\"username\"><strong>Anonymous</strong></div>
\t\t\t<div class=\"feebacktext\">
\t\t\tSo this show was amazing and so worth the wait. I hated that I couldn't see the whole cast but I really enjoyed it. I would absolutely love to see it again in the near future.
\t\t\t</div>
\t\t\t<span class=\"placeandtime\">August Wilson Theatre - New York, NY - Sat, Apr 7, 2018</span>
\t\t</div>
\t</div>

\t</div>


\t<div style=\"background: #444;height: 200px;background-size: cover; color:white\">
\t\t<div class=\"content\">
\t


\t\t\t<div class=\"pure-g comments margintop15\">
\t\t\t\t<div class=\"pure-u-1\">

\t\t\t\t\tsome backlinks?
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

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
        echo "        <link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@1.0.0/build/pure-min.css\" integrity=\"sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w\" crossorigin=\"anonymous\">

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

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 10,  149 => 9,  143 => 5,  48 => 29,  40 => 22,  38 => 9,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/home/dmytro/soft/tests/php/my/src/views/home.html.twig");
    }
}
