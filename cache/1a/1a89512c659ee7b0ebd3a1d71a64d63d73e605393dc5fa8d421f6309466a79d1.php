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
\t";
        // line 38
        echo "
\t<div class=\"pure-u-1\">
\t\t<center>
\t\t\t
\t\t\t<div class=\"artistimage\">
\t\t\t\t<p>
\t\t\t\t\t<img class=\"vertical-align\" src=\"";
        // line 44
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "image", array())) > 0)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "image", array());
            echo " ";
        } else {
            echo " /img/noimage.jpg ";
        }
        echo "\"/>
\t\t \t\t</p>
\t\t\t</div>
\t\t\t
\t\t</center>
\t</div>
</div>

";
        // line 94
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "description", array())) > 0)) {
            // line 95
            echo "\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1 artistdescriptionblock\">
\t\t\t<p>
\t\t\t\t";
            // line 98
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "description", array()), array("&#39;" => "'"));
            echo "
\t\t\t</p>
\t\t</div>
\t</div>
";
        }
        // line 103
        echo "
";
        // line 104
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "schedule", array()), "data", array())) > 0)) {
            // line 105
            echo "\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<h4>";
            // line 107
            echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "name", array());
            echo " Tickets and Tour Schedule</h4>\t
\t\t</div>
\t</div>

\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<div class=\"scheduleblock\">
\t\t\t\t";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "schedule", array()), "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 115
                echo "\t\t\t\t <div class=\"schedule\">\t
\t\t\t\t\t<div class=\"item\"><i>";
                // line 116
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["s"], "name", array()), array(twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "name", array())) => "", ":" => ""));
                echo "</i></div>
\t\t\t\t\t<i class=\"fas fa-clock\"></i> ";
                // line 117
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "when", array()), "date", array());
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "when", array()), "time", array());
                echo " 
\t\t\t\t\t<div class=\"item\"> <i class=\"fas fa-thumbtack\"></i> ";
                // line 118
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "venue", array()), "name", array());
                echo "</div> 
\t\t\t\t\t<div class=\"item\"><i class=\"fas fa-map-marker-alt\"></i> ";
                // line 119
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
            // line 124
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 128
        echo "
";
        // line 129
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "schedule", array()), "last_update", array())) > 0)) {
            // line 130
            echo "\t";
        }
        // line 132
        echo "
";
        // line 133
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "images", array())) > 0)) {
            // line 134
            echo "\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<h4>";
            // line 136
            echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "name", array());
            echo " Concert & Tour Photos</h4>\t
\t\t</div>
\t</div>

\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<div class=\"artistphotosblock";
            // line 142
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "images", array())) < 5)) {
                echo " smallphotoblock";
            }
            echo "\">
\t\t\t\t<p class=\"photos\">
\t\t\t      \t";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 145
                echo "
\t\t\t      \t\t";
                // line 147
                echo "
\t\t\t      \t\t";
                // line 155
                echo "
\t\t\t      \t\t<img class=\"thumbnail\" src=\"https://photos-eu.bazaarvoice.com/photo/2/cGhvdG86dGlja2V0bWFzdGVy/";
                // line 156
                echo $context["image"];
                echo "\">
\t\t\t      \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 163
        echo "

";
        // line 165
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "comments", array())) > 0)) {
            // line 166
            echo "
\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<h4>Fan Reviews</h4>
\t\t</div>
\t</div>

\t";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 174
                echo "
\t<div class=\"pure-g comments\">
\t\t<div class=\"pure-u-1\">
\t\t\t<div  class=\"stars\">
\t\t\t\t";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 179
                    echo "\t\t\t\t\t★
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()) < 5)) {
                    // line 182
                    echo "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (5 - twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 183
                        echo "\t\t\t\t\t\t☆
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    echo "\t\t\t\t";
                }
                // line 186
                echo "\t\t\t</div> 

\t\t\t<div class=\"username\"><strong>";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "author", array());
                echo "</strong></div>
\t\t\t<div class=\"feebacktext\">
\t\t\t";
                // line 190
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "text", array()), array("\\u2019" => "'", "\\u201d" => "", "\\u201c" => "", "\\u2013" => " ", "\\n" => "<br>"));
                echo "
\t\t\t</div>
\t\t\t<span class=\"placeandtime\">";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "details", array());
                echo "</span>
\t\t</div>
\t</div>

\t\t\t";
                // line 196
                if (($context["comment"] == (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "comments", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[2] ?? null) : null))) {
                    // line 197
                    echo "\t\t\t\t<div class=\"neighbors\">
\t\t\t\t";
                    // line 198
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
                        // line 199
                        echo "\t\t\t\t\t<a href=\"/";
                        echo (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["neighbor"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["id"] ?? null) : null);
                        echo "/";
                        echo twig_replace_filter(twig_trim_filter((($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["neighbor"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["name"] ?? null) : null)), array(" " => "-", "." => "", "/" => "", "+" => ""));
                        echo "\">";
                        echo (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = $context["neighbor"]) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["name"] ?? null) : null);
                        echo "</a> ";
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()) == false)) {
                            echo " :: ";
                        }
                        // line 200
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
                    // line 201
                    echo "\t\t\t\t</div>
\t\t\t";
                }
                // line 203
                echo "\t\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "
";
        }
        // line 207
        echo "
";
        // line 208
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "comments", array())) < 3)) {
            // line 209
            echo "\t<div class=\"neighbors margintop15\">
\t\t";
            // line 210
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
                // line 211
                echo "
\t\t\t";
                // line 212
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "other_artists_comments", array())) > 0)) {
                    // line 213
                    echo "\t\t\t\t";
                    $context["foo"] = json_encode(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "other_artists_comments", array()));
                    // line 214
                    echo "\t\t\t";
                } else {
                    // line 215
                    echo "\t\t\t\t";
                    $context["foo"] = "";
                    // line 216
                    echo "\t\t\t";
                }
                // line 217
                echo "
\t\t\t";
                // line 218
                if (!twig_in_filter((($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = $context["neighbor"]) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["name"] ?? null) : null), ($context["foo"] ?? null))) {
                    // line 219
                    echo "
\t\t\t\t<a href=\"/";
                    // line 220
                    echo (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = $context["neighbor"]) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["id"] ?? null) : null);
                    echo "/";
                    echo twig_replace_filter(twig_trim_filter((($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = $context["neighbor"]) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["name"] ?? null) : null)), array(" " => "-", "." => "", "/" => "", "+" => ""));
                    echo "\">";
                    echo (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = $context["neighbor"]) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["name"] ?? null) : null);
                    echo "</a> ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()) == false)) {
                        echo " :: ";
                    }
                    // line 221
                    echo "
\t\t\t";
                }
                // line 222
                echo "\t\t

\t\t";
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
            // line 225
            echo "\t</div>
";
        }
        // line 227
        echo "

";
        // line 230
        echo "

";
        // line 232
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "other_artists_comments", array())) > 0)) {
            // line 233
            echo "
\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<h4>Fan Reviews</h4>

\t\t\tThere are <b>no reviews about ";
            // line 238
            echo twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "name", array());
            echo "</b> for now, but check out reviews about other artists below.

\t\t\t<br>
\t\t\t<br>
\t\t</div>
\t</div>

\t";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["artist"] ?? null), "other_artists_comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 246
                echo "
\t<div class=\"pure-g comments\">

\t\t<div class=\"pure-u-1-4\">
\t\t\t\t<img src=\"";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "artists_image", array());
                echo "\" width=\"90%\" />
\t\t</div>

\t\t<div class=\"pure-u-3-4\">
\t\t\t<div><a href=\"/";
                // line 254
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "artists_id", array());
                echo "/";
                echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "artists_name", array())), array(" " => "-", "." => "", "/" => "", "+" => ""));
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "artists_name", array());
                echo "</a></div>
\t\t\t<div  class=\"stars\">
\t\t\t\t";
                // line 256
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 257
                    echo "\t\t\t\t\t★
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 259
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()) < 5)) {
                    // line 260
                    echo "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (5 - twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 261
                        echo "\t\t\t\t\t\t☆
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 263
                    echo "\t\t\t\t";
                }
                // line 264
                echo "\t\t\t</div> 

\t\t\t<div class=\"username\"><strong>";
                // line 266
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "author", array());
                echo "</strong></div>
\t\t\t<div class=\"feebacktext\">
\t\t\t";
                // line 268
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "text", array()), array("\\u2019" => "'", "\\u201d" => "", "\\u201c" => "", "\\u2013" => " ", "\\n" => "<br>"));
                echo "
\t\t\t</div>
\t\t\t<span class=\"placeandtime\">";
                // line 270
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "details", array());
                echo "</span>
\t\t</div>
\t</div>
\t\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            echo "
";
        }
        // line 277
        echo "
 



<div class=\"pure-g\">
\t<div class=\"pure-u-1\">
\t\t[Temporary disabled] ";
        // line 284
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
\t\t        <input name=\"feedback_rate\" type=\"radio\" class=\"rating-input\" id=\"rating-input-1-5\" />
\t\t        <label for=\"rating-input-1-5\" class=\"rating-star\"></label>
\t\t        <input name=\"feedback_rate\" type=\"radio\" class=\"rating-input\" id=\"rating-input-1-4\" />
\t\t        <label for=\"rating-input-1-4\" class=\"rating-star\"></label>
\t\t        <input name=\"feedback_rate\" type=\"radio\" class=\"rating-input\" id=\"rating-input-1-3\" />
\t\t        <label for=\"rating-input-1-3\" class=\"rating-star\"></label>
\t\t        <input name=\"feedback_rate\" type=\"radio\" class=\"rating-input\" id=\"rating-input-1-2\" />
\t\t        <label for=\"rating-input-1-2\" class=\"rating-star\"></label>
\t\t        <input name=\"feedback_rate\" type=\"radio\" class=\"rating-input\" id=\"rating-input-1-1\" />
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
        // line 330
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
        return array (  655 => 330,  606 => 284,  597 => 277,  593 => 275,  582 => 270,  577 => 268,  572 => 266,  568 => 264,  565 => 263,  558 => 261,  553 => 260,  550 => 259,  543 => 257,  539 => 256,  530 => 254,  523 => 250,  517 => 246,  513 => 245,  503 => 238,  496 => 233,  494 => 232,  490 => 230,  486 => 227,  482 => 225,  466 => 222,  462 => 221,  452 => 220,  449 => 219,  447 => 218,  444 => 217,  441 => 216,  438 => 215,  435 => 214,  432 => 213,  430 => 212,  427 => 211,  410 => 210,  407 => 209,  405 => 208,  402 => 207,  398 => 205,  391 => 203,  387 => 201,  373 => 200,  362 => 199,  345 => 198,  342 => 197,  340 => 196,  333 => 192,  328 => 190,  323 => 188,  319 => 186,  316 => 185,  309 => 183,  304 => 182,  301 => 181,  294 => 179,  290 => 178,  284 => 174,  280 => 173,  271 => 166,  269 => 165,  265 => 163,  258 => 158,  250 => 156,  247 => 155,  244 => 147,  241 => 145,  237 => 144,  230 => 142,  221 => 136,  217 => 134,  215 => 133,  212 => 132,  209 => 130,  207 => 129,  204 => 128,  198 => 124,  183 => 119,  179 => 118,  173 => 117,  169 => 116,  166 => 115,  162 => 114,  152 => 107,  148 => 105,  146 => 104,  143 => 103,  135 => 98,  130 => 95,  128 => 94,  111 => 44,  103 => 38,  94 => 15,  80 => 14,  71 => 13,  54 => 12,  48 => 9,  43 => 6,  40 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "artist.html.twig", "/home/dmytro/soft/tests/php/my/src/views/artist.html.twig");
    }
}
