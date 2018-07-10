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
        // line 29
        echo "</head>

<body>

\t<div style=\"background: url('https://st.depositphotos.com/1063397/4654/i/950/depositphotos_46549179-stock-photo-musician-at-a-concert.jpg');height: 600px;background-size: cover;\">

\t\t<form  action=\"/search\" method=\"POST\" style=\"padding:15%; width:100%\">
\t\t\t<div style=\"padding:40px; background-color:#fff9; border-radius: 10px;\">
\t\t\t<div style=\"padding:40px; background-color:#fff9; border-radius: 10px;\"> 
\t\t\t\t<input name=\"search\" placeholder=\"What are you looking for?\" id=\"mainpage_domain\" onkeydown=\"if (event.keyCode == 13) myFunction(this.value)\" type=\"text\"  style='width:100%;height:50px;' />
\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t 
\t</div>
 
<div class=\"content\">

\t<div class=\"slickslider\">
\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 49
            echo "
\t\t<div class=\"pure-g comments margintop15\" style=\"height:200px\">
\t\t\t<div class=\"pure-u-1\">
\t\t\t\t<div style=\"float:left; margin-right:20px\"><a href=\"/";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "artists_id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "artists_name", array())), array(" " => "-"));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "artists_name", array());
            echo "</a></div>
\t\t\t\t<div  class=\"stars\">
\t\t\t\t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 55
                echo "\t\t\t\t\t\t★
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()) < 5)) {
                // line 58
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (5 - twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 59
                    echo "\t\t\t\t\t\t\t☆
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t</div> 

\t\t\t\t<div class=\"username\"><strong>";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "author", array());
            echo "</strong></div>
\t\t\t\t<div class=\"feebacktext\">
\t\t\t\t";
            // line 66
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "text", array()), array("\\u2019" => "'", "\\u201d" => "", "\\u201c" => "", "\\u2013" => " ", "\\n" => "<br>"));
            echo "
\t\t\t\t</div>
\t\t\t\t<span class=\"placeandtime\">";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "details", array());
            echo "</span>
\t\t\t</div>
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t</div>

</div>

<div style=\"background: #444;height: 200px;background-size: cover; color:white\">
\t<div class=\"content\">

\t\t<div class=\"pure-g\" style=\"border:1px solid;border-top-color:#444;margin-top:15px; padding:20px;\">
\t\t\t<div class=\"pure-u-1-2\">

\t\t\t\t<b>Recent feedbacks</b>
\t\t\t\t<u>
\t\t\t\t\t";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artists"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 86
            echo "\t\t\t\t\t<li style=\"list-style-type: square;\">
\t\t\t\t\t\t<a style=\"color:white\" href=\"/";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["artist"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["artist"], "name", array())), array(" " => "-"));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["artist"], "name", array());
            echo "</a>
\t\t\t\t\t</li>

\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t\t\t</u>
\t\t\t</div>

\t\t\t<div class=\"pure-u-1-2\">

\t\t\t\t<b>More information</b>
\t\t\t\t<u>
\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"/page/about\">About us</a></li>
\t\t\t\t\t\t<li><a href=\"/page/terms\">Terms</a></li>
\t\t\t\t\t\t<li><a href=\"/page/privacy-policy\">Privacy Policy</a></li>
\t\t\t\t\t\t<li><a href=\"/page/contact\">Contact</a></li>
\t\t\t\t\t
\t\t\t\t</u>
\t\t\t</div>

\t\t</div>

\t</div>
</div>

</body>

<script type=\"text/javascript\">
    \$(document).ready(function(){
\t  \$('.slickslider').slick({
\t\tslidesToShow: 1,
\t\tslidesToScroll: 1,
\t\tautoplay: true,
\t\tautoplaySpeed: 2000,
\t  });
\t});
</script>
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
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/slick/slick.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/slick/slick-theme.css\"/>

\t\t<script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/js/slick/slick.min.js\"></script>

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
        return array (  215 => 10,  212 => 9,  206 => 5,  168 => 91,  154 => 87,  151 => 86,  147 => 85,  133 => 73,  122 => 68,  117 => 66,  112 => 64,  108 => 62,  105 => 61,  98 => 59,  93 => 58,  90 => 57,  83 => 55,  79 => 54,  70 => 52,  65 => 49,  61 => 48,  40 => 29,  38 => 9,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/home/dmytro/soft/tests/php/my/src/views/home.html.twig");
    }
}
