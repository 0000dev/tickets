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
\t<h3> List of Venues. Page ";
        // line 5
        echo ($context["page"] ?? null);
        echo " </h3>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["venues"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 8
            echo "
\t
\t\t<div class=\"pure-g\">
\t\t\t<div class=\"pure-u-1 setborder margintop15 padding10\">
\t\t\t\t<div class=\"pure-g\">
\t\t\t\t\t<div class=\"pure-u-1 pure-u-sm-2-5 pure-u-md-1-5\">
\t\t\t\t\t\t<a href=\"/venue/";
            // line 14
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
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["v"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["v"], "name", array())), array(" " => "-", "." => ""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["v"], "name", array());
            echo "</a></strong>
\t\t\t\t\t\t<p>";
            // line 18
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
        // line 26
        echo "
";
        // line 27
        if ((($context["next_page"] ?? null) == true)) {
            // line 28
            echo "<div class=\"pure-g\">
\t<div class=\"pure-u-1 setborder margintop15 padding10\">
\t\t";
            // line 30
            $context["next_page"] = (($context["curr_page"] ?? null) + 1);
            // line 31
            echo "\t\t<a href=\"/venues/";
            echo ($context["cat_id"] ?? null);
            echo "/";
            echo ($context["next_page"] ?? null);
            echo "\">Next</a>
\t</div>
</div>
";
        }
        // line 35
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
        return array (  114 => 35,  104 => 31,  102 => 30,  98 => 28,  96 => 27,  93 => 26,  79 => 18,  71 => 17,  55 => 14,  47 => 8,  43 => 7,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "venues_list.html.twig", "/home/dmytro/soft/tests/php/my/src/views/venues_list.html.twig");
    }
}
