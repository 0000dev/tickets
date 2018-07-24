<?php

/* search.html.twig */
class __TwigTemplate_c57ec2102264b8539ac44f79dc9931c8b57f9cc870d1482a516bb320a77fad8a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "search.html.twig", 1);
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
        echo "Search";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        if ((twig_length_filter($this->env, ($context["content"] ?? null)) > 0)) {
            // line 8
            echo "
\t<h3> Looking for \"";
            // line 9
            echo ($context["search_phrase"] ?? null);
            echo "\" </h3>

\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 12
                echo "
\t\t\t<div class=\"pure-g\">
\t\t\t\t<div class=\"pure-u-1 setborder margintop15 padding10\">
\t\t\t\t\t<div class=\"pure-g\">
\t\t\t\t\t\t<div class=\"pure-u-1 pure-u-sm-2-5 pure-u-md-1-5\">
\t\t\t\t\t\t\t<a href=\"/";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["s"], "id", array());
                echo "/";
                echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["s"], "name", array())), array(" " => "-", "." => ""));
                echo "\"><img class=\"vertical-align\" src=\"";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "image", array())) > 0)) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["s"], "image", array());
                    echo " ";
                } else {
                    echo " /img/noimage.jpg ";
                }
                echo "\" width=\"95%\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pure-u-1 pure-u-sm-3-5 pure-u-md-4-5\">
\t\t\t\t\t\t\t<strong><a href=\"/";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["s"], "id", array());
                echo "/";
                echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["s"], "name", array())), array(" " => "-", "." => ""));
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["s"], "name", array());
                echo "</a></strong>
\t\t\t\t\t\t\t<p>";
                // line 21
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "description", array())) > 300)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "description", array()), 0, 300) . "...")) : (twig_get_attribute($this->env, $this->source, $context["s"], "description", array())));
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t

\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "
";
        } else {
            // line 31
            echo "
\t<h3> Nothing found </h3>

";
        }
        // line 35
        echo "
";
        // line 44
        echo "
";
    }

    public function getTemplateName()
    {
        return "search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  114 => 35,  108 => 31,  104 => 29,  90 => 21,  82 => 20,  66 => 17,  59 => 12,  55 => 11,  50 => 9,  47 => 8,  45 => 7,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search.html.twig", "/home/dmytro/soft/tests/php/my/src/views/search.html.twig");
    }
}
