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
        if ((twig_length_filter($this->env, ($context["content"] ?? null)) > 0)) {
            // line 6
            echo "
\t<h3> Looking for \"";
            // line 7
            echo ($context["search_phrase"] ?? null);
            echo "\" </h3>

\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 10
                echo "
\t\t\t<div class=\"pure-g\">
\t\t\t\t<div class=\"pure-u-1 setborder margintop15 padding10\">
\t\t\t\t\t<div class=\"pure-g\">
\t\t\t\t\t\t<div class=\"pure-u-1 pure-u-sm-2-5 pure-u-md-1-5\">
\t\t\t\t\t\t\t<a href=\"/";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["s"], "id", array());
                echo "/";
                echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["s"], "name", array())), array(" " => "-"));
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
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["s"], "id", array());
                echo "/";
                echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["s"], "name", array())), array(" " => "-"));
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["s"], "name", array());
                echo "</a></strong>
\t\t\t\t\t\t\t<p>";
                // line 19
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
            // line 27
            echo "
";
        } else {
            // line 29
            echo "
\t<h3> Nothing found </h3>

";
        }
        // line 33
        echo "
";
        // line 42
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
        return array (  110 => 42,  107 => 33,  101 => 29,  97 => 27,  83 => 19,  75 => 18,  59 => 15,  52 => 10,  48 => 9,  43 => 7,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search.html.twig", "/home/dmytro/soft/tests/php/my/src/views/search.html.twig");
    }
}
