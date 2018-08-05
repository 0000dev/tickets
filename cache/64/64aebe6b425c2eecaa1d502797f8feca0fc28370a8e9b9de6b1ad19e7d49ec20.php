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
        // line 28
        echo "</head>

<body>

\t<div class=\"homepage bigheader\" id=\"bigheader\">

\t\t<form  action=\"/search\" method=\"POST\">
\t\t\t<div class=\"searchlinediv\">
\t\t\t<div class=\"searchlinediv\"> 
\t\t\t\t<input name=\"search\" placeholder=\" &nbsp; What are you looking for?\" onkeydown=\"if (event.keyCode == 13) myFunction(this.value)\" type=\"text\" />
\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t 
\t</div>
 
<div class=\"content\">

\t<div class=\"slickslider\">
\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 48
            echo "
\t\t<div class=\"pure-g comments margintop15\">

\t\t\t

\t\t\t<div class=\"pure-u-1-4\">
\t\t\t\t<img src=\"";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "artists_image", array());
            echo "\" width=\"90%\" />
\t\t\t</div>
\t\t\t<div class=\"pure-u-3-4\">
\t\t\t\t<div class=\"commentsheader\"><a href=\"/";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "artists_id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "artists_name", array())), array(" " => "-", "." => "", "/" => "", "+" => ""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "artists_name", array());
            echo "</a></div>
\t\t\t\t<div  class=\"stars\">
\t\t\t\t\t";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 60
                echo "\t\t\t\t\t\t★
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()) < 5)) {
                // line 63
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (5 - twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 64
                    echo "\t\t\t\t\t\t\t☆
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t</div> 

\t\t\t\t<div class=\"username\"><strong>";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "author", array());
            echo "</strong></div>
\t\t\t\t<div class=\"feebacktext\">
\t\t\t\t


\t\t\t\t\t";
            // line 74
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", array())) > 300)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", array()), 0, 300) . "...")) : (twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "text", array()), array("\\u2019" => "'", "\\u201d" => "", "\\u201c" => "", "\\u2013" => " ", "\\n" => "<br>"))));
            echo "
\t\t\t\t</div>
\t\t\t\t<span class=\"placeandtime\">";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "details", array());
            echo "</span>
\t\t\t</div>
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t</div>

\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t 
\t\t\t<div class=\"home artistphotosblock\">
\t\t\t\t<p id=\"photos\">

\t\t\t    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artists"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 90
            echo "\t\t\t    \t<a href=\"/";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["a"], "name", array())), array(" " => "-", "." => "", "/" => "", "+" => ""));
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "image", array());
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "name", array());
            echo "\" /></a>
\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\t\t\t      
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t \t\t
\t \t\t<h4>Latest Added Venues</h4>

\t\t\t<div class=\"home artistphotosblock\">
\t\t\t\t<p id=\"photos\">

\t\t\t    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["venues"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 107
            echo "\t\t\t    \t<a href=\"/venue/";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["a"], "name", array())), array(" " => "-", "." => "", "/" => "", "+" => ""));
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "image", array());
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "name", array());
            echo "\" /></a>
\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "\t\t\t      
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
 

</div>

<div class=\"darkfooter\">
\t<div class=\"content\">

\t\t<div class=\"pure-g\">
\t\t\t
\t\t\t<div class=\"pure-u-1-3\">

\t\t\t\t<b>Popular Categories</b>
\t\t\t\t<ul>
\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"/category/16\">Rock & Pop</a></li>
\t\t\t\t\t\t<li><a href=\"/category/18\">Musicals</a></li>
\t\t\t\t\t\t<li><a href=\"/category/19\">Rap & Hip-Hop</a></li>
\t\t\t\t\t\t<li><a href=\"/category/20\">Alternative Rock</a></li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>


\t\t\t<div class=\"pure-u-1-3\">
\t\t\t\t
\t\t\t\t<b>Recently added</b>
\t\t\t\t<div class=\"slickslider\">
\t\t\t\t

\t\t\t\t";
        // line 143
        $context["cols"] = 3;
        // line 144
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["footer_links"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 145
            echo "\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % ($context["cols"] ?? null)) == 0)) {
                // line 146
                echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t";
            }
            // line 149
            echo "
\t\t\t\t\t<li><a href=\"/";
            // line 150
            echo twig_get_attribute($this->env, $this->source, $context["f"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["f"], "name", array())), array(" " => "-", "." => "", "/" => "", "+" => ""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["f"], "name", array());
            echo "</a></li>

\t\t\t\t\t";
            // line 152
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % ($context["cols"] ?? null)) == (($context["cols"] ?? null) - 1)) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()))) {
                // line 153
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 156
            echo "
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "
\t\t\t
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"pure-u-1-3\">

\t\t\t\t<b>More information</b>
\t\t\t\t<ul>
\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"/page/about\">About us</a></li>
\t\t\t\t\t\t<li><a href=\"/page/privacy-policy\">Privacy Policy</a></li>
\t\t\t\t\t\t<li><a href=\"/page/contact\">Contact</a></li>
\t\t\t\t\t
\t\t\t\t</ul>
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
\t\tdots: false,
\t    prevArrow: false,
\t    nextArrow: false
\t  });
\t});

\tdocument.getElementById(\"bigheader\").style.height = \"100vh\";

</script>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "FansVoice. We need to hear your voice";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-extend.css\">
        <!--[if lte IE 8]>
            <link rel=\"stylesheet\" href=\"/css/grids-responsive-old-ie-min.css\">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/grids-responsive-min.css\">
        <!--<![endif]-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tickets.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tabs.css\">

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/slick/slick.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/slick/slick-theme.css\"/>

\t\t<script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
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
        return array (  362 => 10,  359 => 9,  353 => 5,  307 => 158,  292 => 156,  287 => 153,  285 => 152,  276 => 150,  273 => 149,  268 => 146,  265 => 145,  247 => 144,  245 => 143,  209 => 109,  194 => 107,  190 => 106,  174 => 92,  159 => 90,  155 => 89,  145 => 81,  134 => 76,  129 => 74,  121 => 69,  117 => 67,  114 => 66,  107 => 64,  102 => 63,  99 => 62,  92 => 60,  88 => 59,  79 => 57,  73 => 54,  65 => 48,  61 => 47,  40 => 28,  38 => 9,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/home/dmytro/soft/tests/php/my/src/views/home.html.twig");
    }
}
