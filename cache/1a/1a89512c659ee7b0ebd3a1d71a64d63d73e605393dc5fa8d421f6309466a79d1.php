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
        echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "name", array());
        echo " Tour and Concert Feedbacks. Tickets and Scedule";
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
        echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "name", array());
        echo "</h1>

\t\t<div class=\"crumps\">
\t\t\t";
        // line 12
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
            // line 13
            echo "\t\t\t\t<a href=\"/category/";
            echo (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "cats_id", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array())] ?? null) : null);
            echo "\">";
            echo $context["category"];
            echo "</a> ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()) == false)) {
                echo " > ";
            }
            // line 14
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
        // line 15
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
        // line 27
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "image", array())) > 0)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "image", array());
            echo " ";
        } else {
            echo " /img/noimage.jpg ";
        }
        echo "\"/>
\t\t 
\t\t\t\t</div>
\t\t\t</p>
\t\t</center>
\t</div>
\t<div class=\"pure-u-1 pure-u-sm-2-5\">
\t\t<center>
\t\t\t<p><img src=\"/img/badge-ad.jpg\"></p>
\t\t</center>
\t</div>
</div>

";
        // line 82
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "description", array())) > 0)) {
            // line 83
            echo "\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1 artistdescriptionblock\">
\t\t\t<p>
\t\t\t\t";
            // line 86
            echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "description", array());
            echo "
\t\t\t</p>
\t\t</div>
\t</div>
";
        }
        // line 91
        echo "
";
        // line 92
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "schedule", array()), "data", array())) > 0)) {
            // line 93
            echo "\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<h4>";
            // line 95
            echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "name", array());
            echo " Tickets and Tour Schedule</h4>\t
\t\t</div>
\t</div>

\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<div class=\"scheduleblock\">
\t\t\t\t";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "schedule", array()), "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 103
                echo "\t\t\t\t <div class=\"schedule\">\t
\t\t\t\t\t<div class=\"item\"><i>";
                // line 104
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["s"], "name", array()), array(twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "name", array())) => "", ":" => ""));
                echo "</i></div>
\t\t\t\t\t<i class=\"fas fa-clock\"></i> ";
                // line 105
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "when", array()), "date", array());
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "when", array()), "time", array());
                echo " 
\t\t\t\t\t<div class=\"item\"> <i class=\"fas fa-thumbtack\"></i> ";
                // line 106
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "venue", array()), "name", array());
                echo "</div> 
\t\t\t\t\t<div class=\"item\"><i class=\"fas fa-map-marker-alt\"></i> ";
                // line 107
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "venue", array()), "state", array());
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "venue", array()), "city", array());
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "venue", array()), "country", array());
                echo "</div>
\t\t\t\t\t
\t\t\t\t\t<img class=\"tmimage\" height=\"19px\" src=\"/img/tmlogo_grey.png\"/>
\t\t\t\t </div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 116
        echo "
";
        // line 117
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "schedule", array()), "last_update", array())) > 0)) {
            // line 118
            echo "\t";
        }
        // line 120
        echo "
";
        // line 121
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "images", array())) > 0)) {
            // line 122
            echo "\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<h4>";
            // line 124
            echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "name", array());
            echo " Concert & Tour Photos</h4>\t
\t\t</div>
\t</div>

\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<div class=\"artistphotosblock";
            // line 130
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "images", array())) < 5)) {
                echo " smallphotoblock";
            }
            echo "\">
\t\t\t\t<p id=\"photos\">
\t\t\t      \t";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "images", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 133
                echo "
\t\t\t      \t\t<a href=\"/gallery/";
                // line 134
                echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "id", array());
                echo "#img";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", array());
                echo "\"><img src=\"http://photos-eu.bazaarvoice.com/photo/2/cGhvdG86dGlja2V0bWFzdGVy/";
                echo $context["image"];
                echo "\"></a>

\t\t\t      \t\t";
                // line 143
                echo "\t\t\t      \t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 149
        echo "

";
        // line 151
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "comments", array())) > 0)) {
            // line 152
            echo "
\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<h4>Fan Reviews</h4>
\t\t</div>
\t</div>

\t";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 160
                echo "
\t<div class=\"pure-g comments\">
\t\t<div class=\"pure-u-1\">
\t\t\t<div  class=\"stars\">
\t\t\t\t";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 165
                    echo "\t\t\t\t\t★
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()) < 5)) {
                    // line 168
                    echo "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (5 - twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 169
                        echo "\t\t\t\t\t\t☆
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo "\t\t\t\t";
                }
                // line 172
                echo "\t\t\t</div> 

\t\t\t<div class=\"username\"><strong>";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "author", array());
                echo "</strong></div>
\t\t\t<div class=\"feebacktext\">
\t\t\t";
                // line 176
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "text", array()), array("\\u2019" => "'", "\\u201d" => "", "\\u201c" => "", "\\u2013" => " ", "\\n" => "<br>"));
                echo "
\t\t\t</div>
\t\t\t<span class=\"placeandtime\">";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "details", array());
                echo "</span>
\t\t</div>
\t</div>

\t\t\t";
                // line 182
                if (($context["comment"] == (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "comments", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[2] ?? null) : null))) {
                    // line 183
                    echo "\t\t\t\t<div class=\"neighbors\">
\t\t\t\t";
                    // line 184
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "neighbors", array()));
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
                        // line 185
                        echo "\t\t\t\t\t<a href=\"/";
                        echo (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["neighbor"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["id"] ?? null) : null);
                        echo "/";
                        echo twig_replace_filter(twig_trim_filter((($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["neighbor"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["name"] ?? null) : null)), array(" " => "-", "." => ""));
                        echo "\">";
                        echo (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $context["neighbor"]) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["name"] ?? null) : null);
                        echo " Reviews</a> ";
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()) == false)) {
                            echo " :: ";
                        }
                        // line 186
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
                    // line 187
                    echo "\t\t\t\t</div>
\t\t\t";
                }
                // line 189
                echo "\t\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "
";
        }
        // line 193
        echo "
";
        // line 194
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "comments", array())) < 3)) {
            // line 195
            echo "\t<div class=\"neighbors margintop15\">
\t\t";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "neighbors", array()));
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
                // line 197
                echo "\t\t\t<a href=\"/";
                echo (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["neighbor"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["id"] ?? null) : null);
                echo "/";
                echo twig_replace_filter(twig_trim_filter((($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = $context["neighbor"]) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["name"] ?? null) : null)), array(" " => "-", "." => ""));
                echo "\">";
                echo (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["neighbor"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["name"] ?? null) : null);
                echo "</a> ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()) == false)) {
                    echo " :: ";
                }
                // line 198
                echo "\t\t";
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
            // line 199
            echo "\t</div>
";
        }
        // line 201
        echo "

<div class=\"pure-g\">
\t<div class=\"pure-u-1\">
\t\t[Temporary disabled] ";
        // line 205
        echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "name", array());
        echo " needs your feedback
\t</div>
</div>

<div class=\"pure-g\">
\t<div class=\"pure-u-1 pure-u-md-1-2\">

\t\t<form class=\"pure-form\" action=\"#\" method=\"POST\">
\t\t    <fieldset class=\"pure-group\">
\t\t        <input autocomplete='name' name=\"feedback_name\" type=\"text\" class=\"pure-input-1\" placeholder=\"Your Name\">
\t\t        <input autocomplete='email' name=\"feedback_email\" type=\"email\" class=\"pure-input-1\" placeholder=\"Email\">
\t\t    </fieldset>
\t\t    <span class=\"rating\">
\t\t        <input name=\"feedback_rate\" type=\"radio\" class=\"rating-input\" id=\"rating-input-1-5\" name=\"rating-input-1\"/>
\t\t        <label for=\"rating-input-1-5\" class=\"rating-star\"></label>
\t\t        <input name=\"feedback_rate\" type=\"radio\" class=\"rating-input\" id=\"rating-input-1-4\" name=\"rating-input-1\"/>
\t\t        <label for=\"rating-input-1-4\" class=\"rating-star\"></label>
\t\t        <input name=\"feedback_rate\" type=\"radio\" class=\"rating-input\" id=\"rating-input-1-3\" name=\"rating-input-1\"/>
\t\t        <label for=\"rating-input-1-3\" class=\"rating-star\"></label>
\t\t        <input name=\"feedback_rate\" type=\"radio\" class=\"rating-input\" id=\"rating-input-1-2\" name=\"rating-input-1\"/>
\t\t        <label for=\"rating-input-1-2\" class=\"rating-star\"></label>
\t\t        <input name=\"feedback_rate\" type=\"radio\" class=\"rating-input\" id=\"rating-input-1-1\" name=\"rating-input-1\"/>
\t\t        <label for=\"rating-input-1-1\" class=\"rating-star\"></label>
\t\t\t</span>

\t\t    <fieldset class=\"pure-group\">
\t\t        <input name=\"feedback_title\" type=\"text\" class=\"pure-input-1\" placeholder=\"Title\">
\t\t        <textarea name=\"feedback_text\" class=\"pure-input-1\" placeholder=\"Your feedback\"></textarea>
\t\t    </fieldset>

\t\t    <button disabled type=\"submit\" class=\"pure-button pure-input-1 pure-button-primary\">Temporary disabled. Coming back soon!</button>
\t\t</form>

\t</div>
</div>

<script type=\"text/javascript\">
\$( document ).ready(function() {
\t\$( \"input.rating-input\" ).click(function() {
\t\tname=\$(this).attr('name');
\t\t\$(\"input[name='\"+name+\"']\").val(\"\"); // remove value from all radio's (with this name)
\t\t\$(\"input[name='\"+name+\"']:checked\").val(\$(this).attr('id')); // add value to checked radio
\t});
});

\$('.tmimage').click(function(){
\twindow.open('http://href.li/?http://www.ticketmaster.com/";
        // line 251
        echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "name", array()), array(" " => "-"));
        echo "/artist/";
        echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "tm_id", array());
        echo "', '_blank');
});

\$(\".scheduleblock\").niceScroll({
 
\tautohidemode:'leave',
 
});

</script>


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
        return array (  535 => 251,  486 => 205,  480 => 201,  476 => 199,  462 => 198,  451 => 197,  434 => 196,  431 => 195,  429 => 194,  426 => 193,  422 => 191,  415 => 189,  411 => 187,  397 => 186,  386 => 185,  369 => 184,  366 => 183,  364 => 182,  357 => 178,  352 => 176,  347 => 174,  343 => 172,  340 => 171,  333 => 169,  328 => 168,  325 => 167,  318 => 165,  314 => 164,  308 => 160,  304 => 159,  295 => 152,  293 => 151,  289 => 149,  282 => 144,  268 => 143,  259 => 134,  256 => 133,  239 => 132,  232 => 130,  223 => 124,  219 => 122,  217 => 121,  214 => 120,  211 => 118,  209 => 117,  206 => 116,  200 => 112,  185 => 107,  181 => 106,  175 => 105,  171 => 104,  168 => 103,  164 => 102,  154 => 95,  150 => 93,  148 => 92,  145 => 91,  137 => 86,  132 => 83,  130 => 82,  108 => 27,  94 => 15,  80 => 14,  71 => 13,  54 => 12,  48 => 9,  43 => 6,  40 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "artist.html.twig", "/home/dmytro/soft/tests/php/my/src/views/artist.html.twig");
    }
}
