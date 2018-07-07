<?php

/* artist.html.twig */
class __TwigTemplate_c5f835dc4e0001f05e88bef3525ac759c5dae13aa2f98534d5c1fd468437fa47 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "artist.html.twig", 1);
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
        echo "<div class=\"content\">
 

<!-- top header menu / better to do with native menu? -->
<div class=\"custom-wrapper pure-g\" id=\"menu\">
\t<div class=\"pure-u-1 pure-u-md-1-5\">
\t\t<div class=\"pure-menu\">
\t\t\t<a href=\"#\" class=\"pure-menu-heading custom-brand\">Brand</a>
\t\t\t<a href=\"#\" class=\"custom-toggle\" id=\"toggle\"><s class=\"bar\"></s><s class=\"bar\"></s></a>
\t\t</div>
\t</div>
\t<div class=\"pure-u-1 pure-u-md-2-5\">
\t\t<div class=\"pure-menu pure-menu-horizontal custom-can-transform\">
\t\t\t
\t\t\t\t<form class=\"pure-form\"><input type=\"text\" class=\"pure-input-rounded\"></form>
\t\t\t
\t\t</div>
\t</div>
\t<div class=\"pure-u-1 pure-u-md-2-5\">
\t\t<div class=\"pure-menu pure-menu-horizontal custom-menu-3 custom-can-transform\">
\t\t\t<ul class=\"pure-menu-list\">
\t\t\t\t<li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">Yahoo</a></li>
\t\t\t\t<li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">W3C</a></li>
\t\t\t\t<li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">Yahoo</a></li>
\t\t\t\t<li class=\"pure-menu-item\"><a href=\"#\" class=\"pure-menu-link\">W3C</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>


<div class=\"pure-g header\">
\t<div class=\"pure-u-1\">
\t\t<h1>";
        // line 37
        echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "name", array());
        echo "</h1>

\t\t<div class=\"crumps\">
\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "cats", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 41
            echo "\t\t\t\t";
            echo $context["category"];
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()) == false)) {
                echo " > ";
            }
            // line 42
            echo "\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t</div>
\t\t
\t</div>
</div>


<div class=\"pure-g toppanel\">
\t<div class=\"pure-u-1 pure-u-sm-3-5\">
\t\t<center>
\t\t\t<p>
\t\t\t\t<div class=\"artistimage\">
\t\t\t\t 
\t\t\t\t<img class=\"vertical-align\" src=\"";
        // line 55
        echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "image", array());
        echo "\"/>
\t\t 
\t\t\t\t</div>
\t\t\t</p>
\t\t</center>
\t</div>
\t<div class=\"pure-u-1 pure-u-sm-2-5\">
\t\t<center>
\t\t\t<p><img src=\"http://www.npdf.org/wp-content/uploads//2014/02/badge-ad.jpg\"></p>
\t\t</center>
\t</div>
</div>

<div class=\"pure-g\">
\t<div class=\"pure-u-1\">
\t\t<div class=\"pc-tab\">
\t\t\t<input checked=\"checked\" id=\"tab1\" type=\"radio\" name=\"pct\" />
\t\t\t<input id=\"tab2\" type=\"radio\" name=\"pct\" />
\t\t\t<input id=\"tab3\" type=\"radio\" name=\"pct\" />
\t\t\t  <nav class=\"xs-hide\">
\t\t\t    <ul>
\t\t\t      <li class=\"tab1\">
\t\t\t        <label for=\"tab1\">";
        // line 77
        echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "name", array());
        echo "</label>
\t\t\t      </li>
\t\t\t      <li class=\"tab2\">
\t\t\t        <label for=\"tab2\">Photos from Shows</label>
\t\t\t      </li>
\t\t\t    </ul>
\t\t\t  </nav>
\t\t\t  <section>
\t\t\t    <div class=\"tab1\">
\t\t\t       
\t\t\t      \t";
        // line 87
        echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "description", array());
        echo "
\t\t\t      
\t\t\t    </div>

\t\t\t    <div class=\"tab2\">
\t\t\t      <p id=\"photos\">
\t\t\t      \t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 94
            echo "\t\t\t      \t\t<img src=\"http://photos-eu.bazaarvoice.com/photo/2/cGhvdG86dGlja2V0bWFzdGVy/";
            echo $context["image"];
            echo "\">
\t\t\t      \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t\t      </p>
\t\t\t    </div>
\t\t\t  </section>
\t\t</div>
\t</div>
</div>


<div class=\"pure-g\">
\t<div class=\"pure-u-1\">
\t\t<h4>Visitors' feedback</h4>
\t</div>
</div>


";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "neighbors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["neighbor"]) {
            // line 112
            echo "\t<a href=\"/";
            echo (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["neighbor"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["id"] ?? null) : null);
            echo "/";
            echo twig_replace_filter(twig_trim_filter((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["neighbor"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["name"] ?? null) : null)), array(" " => "-"));
            echo "\">";
            echo (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["neighbor"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["name"] ?? null) : null);
            echo "</a> :: 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['neighbor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "
";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 116
            echo "
<div class=\"pure-g comments\">
\t<div class=\"pure-u-1\">
\t\t<div  class=\"stars\">
\t\t\t";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 121
                echo "\t\t\t\t★
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()) < 5)) {
                // line 124
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (5 - twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 125
                    echo "\t\t\t\t\t☆
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "\t\t\t";
            }
            // line 128
            echo "\t\t</div> 

\t\t<div class=\"username\"><strong>Anonymous</strong></div>
\t\t<div class=\"feebacktext\">
\t\t";
            // line 132
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "text", array());
            echo "
\t\t</div>
\t\t<span class=\"placeandtime\">";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "details", array());
            echo "</span>
\t</div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo " 


<footer>
\t<p>
\t[some footer]
\t</p>\t
</footer>


</div>


";
    }

    public function getTemplateName()
    {
        return "artist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 139,  275 => 134,  270 => 132,  264 => 128,  261 => 127,  254 => 125,  249 => 124,  246 => 123,  239 => 121,  235 => 120,  229 => 116,  225 => 115,  222 => 114,  209 => 112,  205 => 111,  188 => 96,  179 => 94,  175 => 93,  166 => 87,  153 => 77,  128 => 55,  114 => 43,  100 => 42,  93 => 41,  76 => 40,  70 => 37,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "artist.html.twig", "/home/dmytro/soft/tests/php/my/src/views/artist.html.twig");
    }
}
