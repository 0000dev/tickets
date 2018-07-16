<?php

/* home.html.twig */
class __TwigTemplate_688ff1a4c9f7255cc5795438390eb029a0789799cd56ef05ff42121ef3781750 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>

<body>

\t<div class=\"homepage bigheader\">

\t\t<form  action=\"/search\" method=\"POST\" style=\"padding:15%; width:100%\">
\t\t\t<div class=\"searchlinediv\">
\t\t\t<div class=\"searchlinediv\"> 
\t\t\t\t<input name=\"search\" placeholder=\"What are you looking for?\" onkeydown=\"if (event.keyCode == 13) myFunction(this.value)\" type=\"text\"  style='width:100%;height:50px;' />
\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t 
\t</div>
 
<div class=\"content\">

\t<div class=\"slickslider\">
\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 48
            echo "
\t\t<div class=\"pure-g comments margintop15\">

\t\t\t

\t\t\t<div class=\"pure-u-1-4\">
\t\t\t\t<img src=\"";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "artists_image", array());
            echo "\" width=\"90%\" />
\t\t\t</div>
\t\t\t<div class=\"pure-u-3-4\">
\t\t\t\t<div class=\"commentsheader\"><a href=\"/";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "artists_id", array());
            echo "/";
            echo twig_replace_filter(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "artists_name", array())), array(" " => "-"));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "artists_name", array());
            echo "</a></div>
\t\t\t\t<div  class=\"stars\">
\t\t\t\t\t";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 60
                echo "\t\t\t\t\t\t★
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()) < 5)) {
                // line 63
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (5 - twig_get_attribute($this->env, $this->source, $context["comment"], "rating", array()))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 64
                    echo "\t\t\t\t\t\t\t☆
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t</div> 

\t\t\t\t<div class=\"username\"><strong>";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "author", array());
            echo "</strong></div>
\t\t\t\t<div class=\"feebacktext\">
\t\t\t\t


\t\t\t\t\t";
            // line 74
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", array())) > 300)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", array()), 0, 300) . "...")) : (twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "text", array()), array("\\u2019" => "'", "\\u201d" => "", "\\u201c" => "", "\\u2013" => " ", "\\n" => "<br>"))));
            echo "
\t\t\t\t</div>
\t\t\t\t<span class=\"placeandtime\">";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "details", array());
            echo "</span>
\t\t\t</div>
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t</div>

\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t 
\t\t\t<div class=\"home artistphotosblock\">
\t\t\t\t<p id=\"photos\">
\t\t\t     

\t\t\t      \t<a href=\"/888/Mean-Girls-NY\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/6ff/677aac1f-832b-4112-950e-84f7f40216ff_728951_CUSTOM.jpg\" title=\"Mean Girls NY \" /></a>
<a href=\"/890/Maroon-5\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/756/b7a19705-9a27-4654-98ec-4abe0d29e756_546851_CUSTOM.jpg\" title=\"Maroon 5 \" /></a>
<a href=\"/891/Jesse-McCartney\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/9cd/72e5ecb5-0c22-44df-aaee-87ae5a2fe9cd_698331_CUSTOM.jpg\" title=\"Jesse McCartney \" /></a>
<a href=\"/894/The-Black-Keys\"><img src=\"https://s1.ticketm.net/tm/en-us/dbimages/173281a.jpg\" title=\"The Black Keys \" /></a>
<a href=\"/897/BAP\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/ebe/8b8fe702-1108-4a37-a04b-69c84e6b9ebe_71401_CUSTOM.jpg\" title=\"BAP \" /></a>
<a href=\"/900/Janet-Jackson\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/3d6/0d0ee5ba-9a9b-49a8-858d-0856483013d6_688461_CUSTOM.jpg\" title=\"Janet Jackson \" /></a>
<a href=\"/902/Taylor-Swifts-reputation-Stadium-Tour\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/375/606d24be-8ead-40aa-a622-22e5dfd02375_581101_CUSTOM.jpg\" title=\"Taylor Swifts reputation Stadium Tour \" /></a>
<a href=\"/903/Europe\"><img src=\"https://s1.ticketm.net/tm/en-us/dbimages/196886a.jpg\" title=\"Europe \" /></a>
<a href=\"/904/Bloc-Party\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/451/31208cf6-2d1e-4091-a930-1d71b4120451_134981_CUSTOM.jpg\" title=\"Bloc Party \" /></a>
<a href=\"/905/MONSTA-X\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/e09/8d65bdcd-059b-401e-889b-b9c9cbfbce09_650981_CUSTOM.jpg\" title=\"MONSTA X \" /></a>
<a href=\"/906/AHa\"><img src=\"https://s1.ticketm.net/tm/en-us/dbimages/49333a.jpg\" title=\"AHa \" /></a>
<a href=\"/907/J-Cole\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/680/815c5d4c-0d65-46ab-9ab6-258a98ace680_702491_CUSTOM.jpg\" title=\"J Cole \" /></a>
<a href=\"/909/Miguel\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/130/fa827b37-b759-44c6-8919-072df20ec130_578371_CUSTOM.jpg\" title=\"Miguel \" /></a>
<a href=\"/910/Macklemore\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/c44/6f80bb42-7687-4083-9956-d637f5653c44_531081_CUSTOM.jpg\" title=\"Macklemore \" /></a>
<a href=\"/914/Ms-Lauryn-Hill\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/236/d7f508af-2b7f-49f0-b496-75ab6917b236_715161_CUSTOM.jpg\" title=\"Ms Lauryn Hill \" /></a>
<a href=\"/915/fun\"><img src=\"https://s1.ticketm.net/tm/en-us/dbimages/125924a.jpg\" title=\"fun \" /></a>
<a href=\"/916/M83\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/50c/cf57c426-f475-49e5-8cc3-d2ee9409550c_226461_CUSTOM.jpg\" title=\"M83 \" /></a>
<a href=\"/918/Ozuna\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/efb/58b51de6-1452-4f5a-aad3-4b9bad4daefb_741121_CUSTOM.jpg\" title=\"Ozuna \" /></a>
<a href=\"/919/Seal\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/488/56158cc5-a1ee-4718-bd39-d82a3ef2e488_661451_CUSTOM.jpg\" title=\"Seal \" /></a>
<a href=\"/920/PNK\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/1dd/d5e86d93-5e1a-49d9-b530-70fefc0f21dd_711081_CUSTOM.jpg\" title=\"PNK \" /></a>
<a href=\"/921/OMD\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/647/653135e6-d2c1-4689-b96e-e8745ba92647_512071_CUSTOM.jpg\" title=\"OMD \" /></a>
<a href=\"/930/¡Q&#39\"><img src=\"https://s1.ticketm.net/tm/en-us/dbimages/107019a.jpg\" title=\"VIVA!\" /></a>
<a href=\"/1068/Train\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/397/70d892c3-a40c-4908-89b5-7fb70dc50397_665301_CUSTOM.jpg\" title=\"Train\" /></a>
<a href=\"/1086/New-Riders-of-the-Purple-Sage\"><img src=\"https://s1.ticketm.net/tm/en-us/dbimages/55883a.jpg\" title=\"New Riders of the Purple Sage\" /></a>
<a href=\"/1087/Lenny-Kravitz\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/61b/c0fa8a6b-1b78-448a-ae21-6a87bd29961b_365571_CUSTOM.jpg\" title=\"Lenny Kravitz\" /></a>
<a href=\"/1090/Bret-Michaels\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/e26/90b508fd-228b-4be0-9890-9f8981455e26_97411_CUSTOM.jpg\" title=\"Bret Michaels\" /></a>
<a href=\"/1096/Victor-Manuelle\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/711/f4930b37-a3de-4b29-99ad-d3ec02d28711_646571_CUSTOM.jpg\" title=\"Victor Manuelle\" /></a>
<a href=\"/1121/The-Total-Package-Tour:-NKOTB-with-Paula-Abdul-And-Bo\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/a88/5e602a02-a95c-4bc1-a893-68b7552daa88_228411_CUSTOM.jpg\" title=\"The Total Package Tour: NKOTB with Paula Abdul And Bo\" /></a>
<a href=\"/1125/Slipknot\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/5fe/a3e71cb9-0ee9-456a-a398-0b232b9665fe_113611_CUSTOM.jpg\" title=\"Slipknot\" /></a>
<a href=\"/1134/Mandisa\"><img src=\"https://s1.ticketm.net/tm/en-us/dbimages/170250a.jpg\" title=\"Mandisa\" /></a>
<a href=\"/1135/The-Kooks\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/4a1/7dd07c2c-751e-4549-8839-55a976faf4a1_377241_CUSTOM.jpg\" title=\"The Kooks\" /></a>
<a href=\"/1154/Boston\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/fd5/77cc6e44-e24d-4b6a-8070-b60c3224cfd5_291981_CUSTOM.jpg\" title=\"Boston\" /></a>
<a href=\"/1156/Cut-Copy\"><img src=\"https://s1.ticketm.net/tm/en-us/dbimages/161041a.jpg\" title=\"Cut Copy\" /></a>
<a href=\"/1161/Yelle\"><img src=\"https://s1.ticketm.net/tm/en-us/dbimages/179247a.jpg\" title=\"Yelle\" /></a>
<a href=\"/1163/J-Roddy-Walston-&-the-Business\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/d0b/167b22cd-69e5-48e1-87c8-d5124d209d0b_373861_CUSTOM.jpg\" title=\"J. Roddy Walston & the Business\" /></a>
<a href=\"/1164/Jesus-Culture\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/c3a/6019a753-ca6f-44f9-a2dd-6e2f6cb5dc3a_80361_CUSTOM.jpg\" title=\"Jesus Culture\" /></a>
<a href=\"/1171/The-Wood-Brothers\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/7d9/92fb2068-ad8e-4489-9c51-5d8df42937d9_570161_CUSTOM.jpg\" title=\"The Wood Brothers\" /></a>
<a href=\"/1173/CPR-Fest\"><img src=\"https://s1.ticketm.net/tm/en-us/dbimages/146690a.jpg\" title=\"CPR Fest\" /></a>
<a href=\"/1174/The-Wailers\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/139/397d4f03-95e6-47a4-a2b7-b3ef34ccc139_669331_CUSTOM.jpg\" title=\"The Wailers\" /></a>
<a href=\"/1175/Peter-Cetera\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/685/aacbf84b-9f07-4338-8d0e-c9f9ddb66685_649311_CUSTOM.jpg\" title=\"Peter Cetera\" /></a>
<a href=\"/1177/Bruce-in-the-USA\"><img src=\"https://s1.ticketm.net/tm/en-us/dbimages/181919a.jpg\" title=\"Bruce in the USA\" /></a>
<a href=\"/1180/Bob-Seger-&-The-Silver-Bullet-Band\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/d1a/667858fd-dca3-494d-80c0-ba3c6f164d1a_712351_CUSTOM.jpg\" title=\"Bob Seger & The Silver Bullet Band\" /></a>
<a href=\"/1182/CeeLo-Green\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/4c3/2b8de726-e1b4-4b96-b1a2-b84a03c8b4c3_84071_CUSTOM.jpg\" title=\"CeeLo Green\" /></a>
<a href=\"/1190/The-Hooters\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/bfb/81bd80b1-2d1c-4d25-87b0-5cec2487ebfb_271151_CUSTOM.jpg\" title=\"The Hooters\" /></a>
<a href=\"/1191/Black-Sabbath\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/3c1/5cf1b154-2a3c-4c2d-a675-7e324fe063c1_228021_CUSTOM.jpg\" title=\"Black Sabbath\" /></a>
<a href=\"/1193/The-Art-Laboe-Show\"><img src=\"https://s1.ticketm.net/tm/en-us/dbimages/115555a.jpg\" title=\"The Art Laboe Show\" /></a>
<a href=\"/1194/Nightwish\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/6df/605b3a8f-8c83-4061-af29-972c2a6c36df_520461_CUSTOM.jpg\" title=\"Nightwish\" /></a>
<a href=\"/1195/BJ-Thomas\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/ea0/ee01d4a5-f04c-4d49-8ba0-d7461ff08ea0_77621_CUSTOM.jpg\" title=\"BJ Thomas\" /></a>
<a href=\"/1199/Powerhouse\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/6e7/5122b7ea-dc3a-4d74-b972-8f826ed706e7_87851_CUSTOM.jpg\" title=\"Powerhouse\" /></a>
<a href=\"/1200/Pet-Shop-Boys\"><img src=\"https://s1.ticketm.net/tm/en-us/dam/a/f2c/d708da80-0037-479b-a036-0c36a9e29f2c_440221_CUSTOM.jpg\" title=\"Pet Shop Boys\" /></a>
";
        // line 179
        echo "\t\t\t      
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
 

</div>

<div class=\"darkfooter\">
\t<div class=\"content\">

\t\t<div class=\"pure-g\">
\t\t\t
\t\t\t<div class=\"pure-u-1-3\">

\t\t\t\t<b>Popular Categories</b>
\t\t\t\t<ul>
\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"/category/16\">Rock & Pop</a></li>
\t\t\t\t\t\t<li><a href=\"/category/18\">Musicals</a></li>
\t\t\t\t\t\t<li><a href=\"/category/19\">Rap & Hip-Hop</a></li>
\t\t\t\t\t\t<li><a href=\"/category/20\">Alternative Rock</a></li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>


\t\t\t<div class=\"pure-u-1-3\">
\t\t\t\t
\t\t\t\t<b>Recent feedbacks</b>
\t\t\t\t<div class=\"slickslider\" style=\"overflow:hidden;\">
\t\t\t\t


<div>
<ul>
<li><a href=\"/3046/Lil-Dicky\">Lil Dicky</a></li>
<li><a href=\"/3022/The-Pretty-Reckless\">The Pretty Reckless</a></li>
<li><a href=\"/897/BAP\">BAP </a></li>
<li><a href=\"/2981/Chase-Rice\">Chase Rice</a></li>
</ul>
</div>


<div>
<ul>
<li><a href=\"/3279/Gogol-Bordello\">Gogol Bordello</a></li>
<li><a href=\"/3101/Foster-the-People\">Foster the People</a></li>
<li><a href=\"/3261/Gilberto-Santa-Rosa\">Gilberto Santa Rosa</a></li>
</ul>
</div>



<div>
<ul>
<li><a href=\"/3115/New-Orleans-Jazz-and-Heritage-Festival\">New Orleans Jazz and Heritage Festival</a></li>
<li><a href=\"/2958/Colbie-Caillat\">Colbie Caillat</a></li>
<li><a href=\"/2777/Third-Eye-Blind\">Third Eye Blind</a></li>
</ul>
</div>


<div>
<ul>
<li><a href=\"/2868/Kenny-Rogers\">Kenny Rogers</a></li>
<li><a href=\"/1534/Adele-Tickets\">Adele Tickets</a></li>
<li><a href=\"/2756/Juan-Gabriel\">Juan Gabriel</a></li>
<li><a href=\"/3218/Boyz-II-Men\">Boyz II Men</a></li>
</ul>
</div>


<div>
<ul>

<li><a href=\"/3050/Belanova\">Belanova</a></li>
<li><a href=\"/2630/the-Bangles\">the Bangles</a></li>
<li><a href=\"/920/PNK\">PNK </a></li>
</ul>
</div>


<div>
<ul>
<li><a href=\"/2926/Frank-Turner\">Frank Turner</a></li>
<li><a href=\"/2827/Matt-Nathanson\">Matt Nathanson</a></li>
<li><a href=\"/2944/Timothy-B-Schmit\">Timothy B Schmit</a></li>
</ul>
</div>



<div>
<ul>
<li><a href=\"/1291/New-Kids-On-The-Block-&-Backstreet-Boys\">New Kids On The Block & Backstreet Boys</a></li>
<li><a href=\"/2947/Big-KRIT\">Big K.R.I.T.</a></li>
<li><a href=\"/2936/The-Big-4\">The Big 4</a></li>
</ul>
</div>


<div>
<ul>
<li><a href=\"/2836/Gwen-Stefani\">Gwen Stefani</a></li>
<li><a href=\"/1171/The-Wood-Brothers\">The Wood Brothers</a></li>
<li><a href=\"/2661/Foreigner\">Foreigner</a></li>
<li><a href=\"/3259/Third-Day\">Third Day</a></li>
</ul>
</div>

<div>
<ul>
<li><a href=\"/1090/Bret-Michaels\">Bret Michaels</a></li>
<li><a href=\"/2718/HARD-Summer-Music-Festival\">HARD Summer Music Festival</a></li>
<li><a href=\"/2569/B96-Jingle-Bash\">B96 Jingle Bash</a></li>
<li><a href=\"/2836/Gwen-Stefani\">Gwen Stefani</a></li>
</ul>
</div>

<div>
<ul>
<li><a href=\"/2921/2-Chainz\">2 Chainz</a></li>
<li><a href=\"/2939/The-Mowgli's\">The Mowgli's</a></li>
<li><a href=\"/3232/Lionel-Richie\">Lionel Richie</a></li>
</ul>
</div>

<div>
<ul>
<li><a href=\"/1402/The-Championship-Tour\">The Championship Tour</a></li>
<li><a href=\"/2989/ZZ-Ward\">ZZ Ward</a></li>
<li><a href=\"/3059/Maroon-5-and-Train\">Maroon 5 and Train</a></li>
<li><a href=\"/3292/Adelitas-Way\">Adelitas Way</a></li>
</ul>
</div>

\t\t\t\t
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"pure-u-1-3\">

\t\t\t\t<b>More information</b>
\t\t\t\t<ul>
\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"/page/about\">About us</a></li>
\t\t\t\t\t\t<li><a href=\"/page/privacy-policy\">Privacy Policy</a></li>
\t\t\t\t\t\t<li><a href=\"/page/contact\">Contact</a></li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>

\t\t</div>

\t</div>
</div>

</body>

<script type=\"text/javascript\">
    \$(document).ready(function(){
\t  \$('.slickslider').slick({
\t\tslidesToShow: 1,
\t\tslidesToScroll: 1,
\t\tautoplay: true,
\t\tautoplaySpeed: 2000,
\t\tdots: false,
\t    prevArrow: false,
\t    nextArrow: false
\t  });
\t});
</script>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "FansVoice. We need to hear your voice";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/pure-extend.css\">
        <!--[if lte IE 8]>
            <link rel=\"stylesheet\" href=\"/css/grids-responsive-old-ie-min.css\">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/grids-responsive-min.css\">
        <!--<![endif]-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tickets.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/tabs.css\">

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/slick/slick.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/slick/slick-theme.css\"/>

\t\t<script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"/js/slick/slick.min.js\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 10,  392 => 9,  386 => 5,  206 => 179,  145 => 81,  134 => 76,  129 => 74,  121 => 69,  117 => 67,  114 => 66,  107 => 64,  102 => 63,  99 => 62,  92 => 60,  88 => 59,  79 => 57,  73 => 54,  65 => 48,  61 => 47,  40 => 28,  38 => 9,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/home/dmytro/soft/tests/php/my/src/views/home.html.twig");
    }
}
