<?php

/* venue.html.twig */
class __TwigTemplate_75e387d02b257108763bf940b2b4937393255c4450a3bbae9d128e90f6207d00 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "venue.html.twig", 1);
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
        echo twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "name", array());
        echo " Tickets";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"pure-g header\">
\t<div class=\"pure-u-1\">
\t\t<h1>";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "name", array());
        echo "</h1>
\t</div>
</div>

<br>

<div class=\"pure-g toppanel\">
\t<div class=\"pure-u-1 pure-u-sm-3-5\">
\t\t<center>
\t\t\t<p>
\t\t\t\t<div class=\"venueimage\">
\t\t\t\t 
\t\t\t\t<img src=\"";
        // line 21
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "image_small", array())) > 0)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "image_small", array());
            echo " ";
        } else {
            echo " /img/noimage.jpg ";
        }
        echo "\"/>
\t\t 
\t\t\t\t</div>
\t\t\t\t";
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "address", array());
        echo "
\t\t\t</p>


\t\t</center>
\t</div>
\t<div class=\"pure-u-1 pure-u-sm-2-5\">
\t\t<center>
\t\t\t<p><img src=\"/img/badge-ad.jpg\"></p>
\t\t</center>
\t</div>
</div>

<div class=\"pure-g\">
\t<div class=\"pure-u-1\">
\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "details", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 40
            echo "\t\t\t<p><b>";
            echo twig_replace_filter($context["key"], array("Detail" => "", "phoneN" => "Phone n", "openH" => "Open h", "acceptedP" => "Accepted p", "willC" => "Will c"));
            echo "</b> : ";
            echo $context["value"];
            echo "</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t</div>
</div>


";
        // line 46
        $context["cols"] = 2;
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "schedule_data", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 48
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % ($context["cols"] ?? null)) == 0)) {
                // line 49
                echo "\t\t<div class=\"pure-g \">
\t\t";
            }
            // line 51
            echo "\t\t<div class=\"pure-u-1 pure-u-md-1-2\">
\t\t\t<div class=\"pure-g \">
\t\t\t\t<div style=\"margin:5px;border:1px solid #ddd;width:100%\">
\t\t\t\t\t<div class=\"pure-u-2-5 venueouter\">
\t\t\t\t\t\t<img class=\"vertical-align\" src=\"";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["s"], "image", array());
            echo "\" width=\"100%\" style=\"max-width:200px;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pure-u-3-5\">
\t\t\t\t\t\t<div style=\"padding:5px;font-size:12px;\">
\t\t\t\t\t\t\t<div class=\"venueitem\"> <img src=\"https://cdn4.iconfinder.com/data/icons/miu/24/common-star-favorite-bookmark-glyph-512.png\" width=\"10px\"> ";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["s"], "name", array());
            echo "</div>
\t\t\t\t\t\t\t<img src=\"https://cdn2.iconfinder.com/data/icons/wirecons-free-vector-icons/32/475340-alarm-clock-512.png\" width=\"10px\"> ";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["s"], "date", array());
            echo " <br>
\t\t\t\t\t\t\t<img src=\"https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519586-083_Music-512.png\" width=\"10px\"> Genre: ";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["s"], "genre", array());
            echo " <br>
\t\t\t\t\t\t\t";
            // line 63
            echo "\t\t\t\t\t\t\t<img src=\"https://cdn0.iconfinder.com/data/icons/layout-and-location/24/Untitled-2-34-512.png\" width=\"10px\"> Price: ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "price", array()), "min", array());
            echo " ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "price", array()), "currency", array());
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "price", array()), "max", array()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "price", array()), "min", array()))) {
                echo " - max: ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "price", array()), "max", array());
                echo " ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "price", array()), "currency", array());
                echo " ";
            }
            echo " <br>
\t\t\t\t\t\t\t<a href=\"http://href.li/?";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["s"], "url", array());
            echo "\"><img width=\"100px\" src=\"http://localhost:8000/img/tmlogo_grey.png\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            // line 70
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % ($context["cols"] ?? null)) == (($context["cols"] ?? null) - 1)) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()))) {
                // line 71
                echo "\t\t</div>
\t";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo " 
 <div class=\"pure-g\">
\t<div class=\"pure-u-1\">
\t\t";
        // line 77
        if ((twig_length_filter($this->env, ($context["neighbors"] ?? null)) > 0)) {
            // line 78
            echo "\t\t\t<div class=\"neighbors margintop15\">
\t\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["neighbors"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["neighbor"]) {
                // line 80
                echo "\t\t\t\t\t<a href=\"/venue/";
                echo (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["neighbor"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["id"] ?? null) : null);
                echo "/";
                echo twig_replace_filter(twig_trim_filter((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["neighbor"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["name"] ?? null) : null)), array(" " => "-", "." => ""));
                echo "\">";
                echo (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["neighbor"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["name"] ?? null) : null);
                echo "</a> ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()) == false)) {
                    echo " :: ";
                }
                // line 81
                echo "\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['neighbor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t</div>
\t\t";
        }
        // line 84
        echo "\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "venue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 84,  259 => 82,  245 => 81,  234 => 80,  217 => 79,  214 => 78,  212 => 77,  207 => 74,  191 => 71,  189 => 70,  180 => 64,  165 => 63,  161 => 61,  157 => 60,  153 => 59,  146 => 55,  140 => 51,  136 => 49,  133 => 48,  116 => 47,  114 => 46,  108 => 42,  97 => 40,  93 => 39,  75 => 24,  63 => 21,  48 => 9,  43 => 6,  40 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "venue.html.twig", "/home/dmytro/soft/tests/php/my/src/views/venue.html.twig");
    }
}
