<?php

/* venues_list.html.twig */
class __TwigTemplate_eb309e77f1754b8d1856af1f646ea70189dc2881d4deb4f8ec9e45d396306994 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "venues_list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " List of Venues";
        if ((($context["curr_page"] ?? null) > 1)) {
            echo ". Page ";
            echo ($context["curr_page"] ?? null);
            echo " ";
        }
        echo "  ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<h3> List of Venues";
        // line 7
        if ((($context["curr_page"] ?? null) > 1)) {
            echo ". Page ";
            echo ($context["curr_page"] ?? null);
            echo " ";
        }
        echo " </h3>

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["venues"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 10
            echo "
\t
\t\t<div class=\"pure-g\">
\t\t\t<div class=\"pure-u-1 setborder margintop15 padding10\">
\t\t\t\t<div class=\"pure-g\">
\t\t\t\t\t<div class=\"pure-u-1 pure-u-sm-2-5 pure-u-md-1-5\">
\t\t\t\t\t\t<a href=\"/venue/";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["v"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["v"], "name", array())), array(" " => "-", "." => ""));
            echo "\"><img class=\"vertical-align\" src=\"";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "image_small", array())) > 0)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["v"], "image_small", array());
                echo " ";
            } else {
                echo " /img/noimage.jpg ";
            }
            echo "\" width=\"95%\" /></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pure-u-1 pure-u-sm-3-5 pure-u-md-4-5\">
\t\t\t\t\t\t<strong><a href=\"/venue/";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["v"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["v"], "name", array())), array(" " => "-", "." => ""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["v"], "name", array());
            echo "</a></strong>
\t\t\t\t\t\t<p>";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["v"], "address", array());
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
        // line 29
        if ((($context["next_page"] ?? null) == true)) {
            // line 30
            echo "<div class=\"pure-g\">
\t<div class=\"pure-u-1 setborder margintop15 padding10\">
\t\t";
            // line 32
            $context["next_page"] = (($context["curr_page"] ?? null) + 1);
            // line 33
            echo "\t\t<a href=\"/venues/";
            echo ($context["next_page"] ?? null);
            echo "\">Next</a>
\t</div>
</div>
";
        }
        // line 37
        echo "
";
    }

    public function getTemplateName()
    {
        return "venues_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 37,  121 => 33,  119 => 32,  115 => 30,  113 => 29,  110 => 28,  96 => 20,  88 => 19,  72 => 16,  64 => 10,  60 => 9,  51 => 7,  48 => 6,  45 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "venues_list.html.twig", "/home/dmytro/soft/tests/php/my/src/views/venues_list.html.twig");
    }
}
