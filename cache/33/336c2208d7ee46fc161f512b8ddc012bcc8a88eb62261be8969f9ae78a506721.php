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
        echo twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["category"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "cats", array());
        echo " Artists";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<h3> ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["category"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[0] ?? null) : null), "cats", array());
        echo " </h3>

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 10
            echo "
\t
\t\t<div class=\"pure-g\">
\t\t\t<div class=\"pure-u-1 setborder margintop15 padding10\">
\t\t\t\t<div class=\"pure-g\">
\t\t\t\t\t<div class=\"pure-u-1 pure-u-sm-2-5 pure-u-md-1-5\">
\t\t\t\t\t\t<a href=\"/";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["a"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["a"], "name", array())), array(" " => "-", "." => "", "/" => "", "+" => ""));
            echo "\"><img alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "name", array());
            echo "\" class=\"vertical-align listimage\" src=\"";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "image", array())) > 0)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["a"], "image", array());
                echo " ";
            } else {
                echo " /img/noimage.jpg ";
            }
            echo "\" /></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pure-u-1 pure-u-sm-3-5 pure-u-md-4-5\">
\t\t\t\t\t\t<strong><a href=\"/";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["a"], "id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["a"], "name", array())), array(" " => "-", "." => "", "/" => "", "+" => ""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["a"], "name", array());
            echo "</a></strong>
\t\t\t\t\t\t<p>";
            // line 20
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", array())) > 300)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", array()), 0, 300) . "...")) : (twig_get_attribute($this->env, $this->source, $context["a"], "description", array())));
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
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
            echo "\t\t<a href=\"/category/";
            echo ($context["cat_id"] ?? null);
            echo "/";
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
        return "cat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  114 => 33,  112 => 32,  108 => 30,  106 => 29,  103 => 28,  89 => 20,  81 => 19,  63 => 16,  55 => 10,  51 => 9,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cat.html.twig", "/home/dmytro/soft/tests/php/my/src/views/cat.html.twig");
    }
}
