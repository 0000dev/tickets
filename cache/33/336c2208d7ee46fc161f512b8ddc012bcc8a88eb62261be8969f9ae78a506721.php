<?php

/* cat.html.twig */
class __TwigTemplate_b7bd53135cead116b671423229640d049e9805261f70e7290ed9945d66cb2567 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cat.html.twig", 1);
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
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 6
            echo "
\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1 setborder margintop15 padding10\">
\t\t\t<div class=\"pure-g\">
\t\t\t\t<div class=\"pure-u-1 pure-u-sm-2-5 pure-u-md-1-5\">
\t\t\t\t\t<a href=\"/";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["cat"], "name", array())), array(" " => "-"));
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "image", array());
            echo "\" width=\"95%\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"pure-u-1 pure-u-sm-3-5 pure-u-md-4-5\">
\t\t\t\t\t<strong><a href=\"/";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["cat"], "name", array())), array(" " => "-"));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "name", array());
            echo "</a></strong>
\t\t\t\t\t<p>";
            // line 15
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "description", array())) > 300)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "description", array()), 0, 300) . "...")) : (twig_get_attribute($this->env, $this->source, $context["cat"], "description", array())));
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
";
        // line 23
        if ((($context["next_page"] ?? null) == true)) {
            // line 24
            echo "<div class=\"pure-g\">
\t<div class=\"pure-u-1 setborder margintop15 padding10\">
\t\t";
            // line 26
            $context["next_page"] = (($context["curr_page"] ?? null) + 1);
            // line 27
            echo "\t\t<a href=\"/category/";
            echo ($context["cat_id"] ?? null);
            echo "/";
            echo ($context["next_page"] ?? null);
            echo "\">Next</a>
\t</div>
</div>
";
        }
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "cat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  91 => 27,  89 => 26,  85 => 24,  83 => 23,  80 => 22,  67 => 15,  59 => 14,  49 => 11,  42 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cat.html.twig", "/home/dmytro/soft/tests/php/my/src/views/cat.html.twig");
    }
}
