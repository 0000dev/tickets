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
\t\t\t\t<img alt=\"";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "name", array());
        echo "\" src=\"";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "image_small", array())) > 0)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "image_small", array());
            echo " ";
        } else {
            echo " /img/noimage-venue.jpg ";
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
\t\t\t<p><img alt=\"ad\" src=\"/img/badge-ad.jpg\"></p>
\t\t</center>
\t</div>
</div>

";
        // line 37
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "details", array())) > 0)) {
            // line 38
            echo "\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1 artistdescriptionblock\">
\t\t\t

\t\t\t\t";
            // line 42
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "details", array()), "openHoursDetail", array())) > 0)) {
                // line 43
                echo "\t\t\t\t\t<p><i class=\"far fa-clock\"></i> <b>Open hours</b> <br> ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "details", array()), "openHoursDetail", array());
                echo "</p>
\t\t\t\t";
            }
            // line 45
            echo "
\t\t\t\t";
            // line 46
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "details", array()), "phoneNumberDetail", array())) > 0)) {
                // line 47
                echo "\t\t\t\t\t<p><i class=\"fas fa-phone-square\"></i> <b>Contact.</b> ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "details", array()), "phoneNumberDetail", array());
                echo "</p>
\t\t\t\t";
            }
            // line 49
            echo "
\t\t\t\t";
            // line 50
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "details", array()), "acceptedPaymentDetail", array())) > 0)) {
                // line 51
                echo "\t\t\t\t\t<i class=\"far fa-credit-card\"></i> <b>Payment details.</b> ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "details", array()), "acceptedPaymentDetail", array());
                echo "</p>
\t\t\t\t";
            }
            // line 53
            echo "
\t\t\t\t";
            // line 54
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "details", array()), "willCallDetail", array())) > 0)) {
                // line 55
                echo "\t\t\t\t\t<p><i class=\"fas fa-info-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "details", array()), "willCallDetail", array());
                echo "</p>
\t\t\t\t";
            }
            // line 57
            echo "\t\t\t 
\t\t\t</p>
\t\t</div>
\t</div>
";
        }
        // line 62
        echo "
";
        // line 63
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "schedule_data", array())) > 0)) {
            // line 64
            echo "\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<h4>";
            // line 66
            echo twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "name", array());
            echo " Tickets and Event Dates</h4>
\t\t</div>
\t</div>
\t";
            // line 69
            $context["cols"] = 2;
            // line 70
            echo "\t";
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
                // line 71
                echo "\t\t\t";
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % ($context["cols"] ?? null)) == 0)) {
                    // line 72
                    echo "\t\t\t<div class=\"pure-g\">
\t\t\t";
                }
                // line 74
                echo "\t\t\t<div class=\"pure-u-1 pure-u-md-1-2\">
\t\t\t\t<div class=\"pure-g \">
\t\t\t\t\t<div class=\"venueschedulecontainer\">
\t\t\t\t\t\t<div class=\"pure-u-2-5 venueouter\">
\t\t\t\t\t\t\t<img alt=\"";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["s"], "name", array());
                echo "\" class=\"vertical-align\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["s"], "image", array());
                echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pure-u-3-5\">
\t\t\t\t\t\t\t<div class=\"venuescheduledetails\">
\t\t\t\t\t\t\t\t<div class=\"venueitem\"> <strong> ";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["s"], "name", array());
                echo " </strong></div>
\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar-alt\"></i> ";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["s"], "date", array());
                echo " <br>
\t\t\t\t\t\t\t\t<i class=\"fab fa-itunes-note\"></i> Genre: ";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["s"], "genre", array());
                echo " <br>
\t\t\t\t\t\t\t\t";
                // line 86
                echo "\t\t\t\t\t\t\t\t<i class=\"fas fa-dollar-sign\"></i> Price: ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "price", array()), "min", array());
                echo " ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "price", array()), "currency", array());
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "price", array()), "max", array()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "price", array()), "min", array()))) {
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "price", array()), "max", array());
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "price", array()), "currency", array());
                    echo " ";
                }
                echo " <br>
\t\t\t\t\t\t\t\t<a href=\"http://href.li/?";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["s"], "url", array());
                echo "\"><img alt=\"tmbutton\" width=\"100\" src=\"/img/tmlogo_grey.png\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                // line 93
                if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % ($context["cols"] ?? null)) == (($context["cols"] ?? null) - 1)) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()))) {
                    // line 94
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 96
                echo "\t";
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
        }
        // line 98
        echo " 
 <div class=\"pure-g\">
\t<div class=\"pure-u-1\">
\t\t";
        // line 101
        if ((twig_length_filter($this->env, ($context["neighbors"] ?? null)) > 0)) {
            // line 102
            echo "\t\t\t<div class=\"neighbors margintop15\">
\t\t\t\t";
            // line 103
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
                // line 104
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
                // line 105
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
            // line 106
            echo "\t\t\t</div>
\t\t";
        }
        // line 108
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
        return array (  319 => 108,  315 => 106,  301 => 105,  290 => 104,  273 => 103,  270 => 102,  268 => 101,  263 => 98,  248 => 96,  244 => 94,  242 => 93,  233 => 87,  218 => 86,  214 => 84,  210 => 83,  206 => 82,  197 => 78,  191 => 74,  187 => 72,  184 => 71,  166 => 70,  164 => 69,  158 => 66,  154 => 64,  152 => 63,  149 => 62,  142 => 57,  136 => 55,  134 => 54,  131 => 53,  125 => 51,  123 => 50,  120 => 49,  114 => 47,  112 => 46,  109 => 45,  103 => 43,  101 => 42,  95 => 38,  93 => 37,  77 => 24,  63 => 21,  48 => 9,  43 => 6,  40 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "venue.html.twig", "/home/dmytro/soft/tests/php/my/src/views/venue.html.twig");
    }
}
