<?php

/* mainp.html.twig */
class __TwigTemplate_f818611a3b4d43029624b82446b808212bafeb51ca447a530fce910d58ab646e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 3
        echo "
";
        // line 4
        $context["plytatygodnia"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@page.children" => "/plyta-tygodnia"), "order" => array("by" => "date", "dir" => "desc"))), "method"), "first", array(), "method");
        // line 6
        echo "
";
        // line 7
        $context["dow"] = $this->getAttribute(twig_date_converter($this->env), "format", array(0 => "D"), "method");
        // line 8
        $context["ramowka"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@taxonomy" => array("category" => "audycja", "tag" => (isset($context["dow"]) ? $context["dow"] : null))), "order" => array("by" => "header.startaud", "dir" => "asc"))), "method");
        // line 10
        echo "
";
        // line 11
        $context["nagrania"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@page.children" => "/nagrania"), "limit" => "6", "order" => array("by" => "date", "dir" => "desc"))), "method");
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 130
        echo "\t\t\t
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "\t<div class=\"grid\">
\t\t<div class=\"grid-box-2-3\" id=\"player-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\" style=\"background-image: url('";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/studio.jpg");
        echo "');\"></div>
\t\t\t\t<div class=\"title-box\"><h2>Player</h2></div>
\t\t
\t\t\t\t<div id=\"player-box-content\">
\t\t\t\t\t<div class=\"grid-box-bg\"></div>
\t\t\t\t\t<div id=\"jp_live_container\">
\t\t\t\t\t\t<div id=\"jp-live-play\" class=\"player-button\">
\t\t\t\t\t\t\t<img src=";
        // line 25
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/play-white.svg");
        echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-live-pause\" class=\"player-button\">
\t\t\t\t\t\t\t<img src=";
        // line 28
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/pause-white.svg");
        echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"rds\">Teraz gramy:
\t\t\t\t\t\t\t<div id=\"headerLiveHolder\" class=\"jp-live-title\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-live-mute\" class=\"player-button\">
\t\t\t\t\t\t\t<img src=";
        // line 34
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/guosnik-white.svg");
        echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-live-unmute\" class=\"player-button\">
\t\t\t\t\t\t\t<img src=";
        // line 37
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/guosnik-mute-white.svg");
        echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-live-volume-bar\" class=\"player-slider\">
\t\t\t\t\t\t\t<div id=\"jp-live-volume-bar-value\" class=\"player-slider\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"grid-box-1-3\" id=\"ramowka-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\"></div>
\t\t\t\t<a class=\"title-box\" onclick=\"linkTo('/radio','ramowka')\"><h2>Ramówka na dziś</h2></a>
\t\t\t\t\t<ul id=\"ramowka-lista\">
\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ramowka"]) ? $context["ramowka"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 53
            echo "\t\t\t\t\t<li>
\t\t\t\t\t<a class=\"audycja\" onclick=\"linkTo(
\t\t\t\t\t";
            // line 55
            if (twig_in_filter("powtorka", $this->getAttribute($this->getAttribute($context["a"], "taxonomy", array()), "category", array()))) {
                // line 56
                echo "\t\t\t\t\t\t'";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "parent", array()), "parent", array()), "parent", array()), "link", array());
                echo "', '";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "parent", array()), "parent", array()), "slug", array());
                echo "/";
                echo $this->getAttribute($this->getAttribute($context["a"], "parent", array()), "slug", array());
                echo "'
\t\t\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\t\t\t'";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "parent", array()), "parent", array()), "link", array());
                echo "', '";
                echo $this->getAttribute($this->getAttribute($context["a"], "parent", array()), "slug", array());
                echo "/";
                echo $this->getAttribute($context["a"], "slug", array());
                echo "'
\t\t\t\t\t";
            }
            // line 59
            echo ")\" >
\t\t\t\t\t<span class=\"godziny\">";
            // line 60
            echo $this->getAttribute($this->getAttribute($context["a"], "header", array()), "startaud", array());
            echo " - ";
            echo $this->getAttribute($this->getAttribute($context["a"], "header", array()), "koniecaud", array());
            echo "</span>
\t\t\t\t\t<span class=\"nazwa\">";
            // line 61
            echo $this->getAttribute($context["a"], "title", array());
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t\t\t</ul>
\t\t\t</div>\t
\t\t</div>
\t\t<div class=\"grid-box-2-3\" id=\"nagrania-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\"></div>
\t\t\t\t<a class=\"title-box\" onclick='linkTo(\"/nagrania\")'><h2>Nagrania</h2></a>
\t\t\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nagrania"]) ? $context["nagrania"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 73
            echo "\t\t\t\t<div class=\"nagranie\" id=\"rec_";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\">
\t\t\t\t\t<div id='titlejp-";
            // line 74
            echo $this->getAttribute($context["loop"], "index", array());
            echo "' class=\"nagranie-title\" onclick=
\t\t\t\t\t\t";
            // line 75
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["n"], "header", array()), "audio_attach_oga", array()))) {
                // line 76
                echo "\t\t\t\t\t\t\"playrec(this,'";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["n"], "media", array()), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["n"], "header", array()), "audio_attach_oga", array())), "name", array()), array(), "array"), "url", array(), "method");
                echo "')\"
\t\t\t\t\t\t";
            } else {
                // line 78
                echo "\t\t\t\t\t\t\"linkTo('";
                echo $this->getAttribute($this->getAttribute($context["n"], "parent", array()), "link", array());
                echo "','";
                echo $this->getAttribute($context["n"], "slug", array());
                echo "')\"
\t\t\t\t\t\t";
            }
            // line 80
            echo "\t\t\t\t\t\t>";
            echo $this->getAttribute($context["n"], "title", array());
            echo "</div>
\t\t\t\t\t<div id=\"jp_container_";
            // line 81
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-container\">
\t\t\t\t\t\t<div id=\"jp-play_";
            // line 82
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-button play-button\" >
\t\t\t\t\t\t<img src=";
            // line 83
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/play-white.svg");
            echo "></img></div>
\t\t\t\t\t\t<div id=\"jp-pause_";
            // line 84
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-button pause-button\">
\t\t\t\t\t\t\t<img src=";
            // line 85
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/pause-white.svg");
            echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t<div id=\"jp-current-time_";
            // line 88
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-time current-time\"></div>
\t\t\t\t\t\t<span class=\"splitter\">/</span>
\t\t\t\t\t\t<div id=\"jp-duration_";
            // line 90
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-time duration-time\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"seekbar-wrap\">
\t\t\t\t\t\t<div id=\"jp-seek-bar_";
            // line 93
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-slider seek-bar\">
\t\t\t\t\t\t\t<div id=\"jp-play-bar_";
            // line 94
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-slider play-bar\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"jp-mute_";
            // line 98
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-button mute-button\">
\t\t\t\t\t\t\t<img src=";
            // line 99
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/guosnik-white.svg");
            echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-unmute_";
            // line 101
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-button unmute-button\">
\t\t\t\t\t\t\t<img src=";
            // line 102
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/guosnik-mute-white.svg");
            echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"more-link\" onclick='linkTo(\"";
            // line 106
            echo $this->getAttribute($this->getAttribute($context["n"], "parent", array()), "link", array());
            echo "\",\"";
            echo $this->getAttribute($context["n"], "slug", array());
            echo "\")'>
\t\t\t\t\t\t<div class=\"more\">Więcej...</div>
\t\t\t\t\t\t<img src=";
            // line 108
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/arrow.svg");
            echo "></img>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"grid-box-1-3\" id=\"plytatygodnia-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\" style='background-image: url(\"";
        // line 116
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["plytatygodnia"]) ? $context["plytatygodnia"] : null), "media", array()), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["plytatygodnia"]) ? $context["plytatygodnia"] : null), "header", array()), "display_image", array())), "name", array()), array(), "array"), "display", array(0 => "thumbnail"), "method"), "cropZoom", array(0 => 400, 1 => 400), "method"), "url", array(), "method");
        echo "\")'></div>
\t\t\t\t<a class=\"title-box\" onclick='linkTo(\"/plyta-tygodnia\")'><h2>Płyta Tygodnia</h2></a>
\t\t\t\t<div class=\"plyta-wrapper\" onclick='linkTo(\"/plyta-tygodnia\", \"";
        // line 118
        echo $this->getAttribute((isset($context["plytatygodnia"]) ? $context["plytatygodnia"] : null), "slug", array());
        echo "\")' >
\t\t\t\t<div class=\"plyta-titles\">
\t\t\t\t\t<div class=\"title-artist\"><h5>";
        // line 120
        echo $this->getAttribute($this->getAttribute((isset($context["plytatygodnia"]) ? $context["plytatygodnia"] : null), "header", array()), "artist", array());
        echo "</h5></div>
\t\t\t\t\t<div class=\"title-album\"><h3>";
        // line 121
        echo $this->getAttribute($this->getAttribute((isset($context["plytatygodnia"]) ? $context["plytatygodnia"] : null), "header", array()), "titlec", array());
        echo "</h3></div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t

\t</div>
\t\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "mainp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 121,  314 => 120,  309 => 118,  304 => 116,  298 => 112,  280 => 108,  273 => 106,  266 => 102,  262 => 101,  257 => 99,  253 => 98,  246 => 94,  242 => 93,  236 => 90,  231 => 88,  225 => 85,  221 => 84,  217 => 83,  213 => 82,  209 => 81,  204 => 80,  196 => 78,  190 => 76,  188 => 75,  184 => 74,  179 => 73,  162 => 72,  153 => 65,  143 => 61,  137 => 60,  134 => 59,  124 => 58,  114 => 56,  112 => 55,  108 => 53,  104 => 52,  86 => 37,  80 => 34,  71 => 28,  65 => 25,  55 => 18,  50 => 15,  47 => 14,  42 => 130,  40 => 14,  38 => 11,  35 => 10,  33 => 8,  31 => 7,  28 => 6,  26 => 4,  23 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# =====================KOLEKCJE================== #}

{% set plytatygodnia = page.collection({'items': {'@page.children': '/plyta-tygodnia'},
\t\t\t\t\t'order': {'by': 'date', 'dir': 'desc'}}).first() %}

{% set dow = date().format(\"D\") %}
{% set ramowka = page.collection({'items': {'@taxonomy': {'category': 'audycja', 'tag': dow}},
\t\t\t\t'order': {'by': 'header.startaud', 'dir': 'asc'}}) %}

{% set nagrania = page.collection({'items': {'@page.children': '/nagrania'},
\t\t\t\t'limit': '6',
\t\t\t\t'order': {'by': 'date', 'dir': 'desc'}}) %}
{% block content %}
\t<div class=\"grid\">
\t\t<div class=\"grid-box-2-3\" id=\"player-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\" style=\"background-image: url('{{ url('theme://images/studio.jpg') }}');\"></div>
\t\t\t\t<div class=\"title-box\"><h2>Player</h2></div>
\t\t
\t\t\t\t<div id=\"player-box-content\">
\t\t\t\t\t<div class=\"grid-box-bg\"></div>
\t\t\t\t\t<div id=\"jp_live_container\">
\t\t\t\t\t\t<div id=\"jp-live-play\" class=\"player-button\">
\t\t\t\t\t\t\t<img src={{ url('theme://images/play-white.svg') }}></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-live-pause\" class=\"player-button\">
\t\t\t\t\t\t\t<img src={{ url('theme://images/pause-white.svg') }}></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"rds\">Teraz gramy:
\t\t\t\t\t\t\t<div id=\"headerLiveHolder\" class=\"jp-live-title\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-live-mute\" class=\"player-button\">
\t\t\t\t\t\t\t<img src={{ url('theme://images/guosnik-white.svg') }}></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-live-unmute\" class=\"player-button\">
\t\t\t\t\t\t\t<img src={{ url('theme://images/guosnik-mute-white.svg') }}></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-live-volume-bar\" class=\"player-slider\">
\t\t\t\t\t\t\t<div id=\"jp-live-volume-bar-value\" class=\"player-slider\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"grid-box-1-3\" id=\"ramowka-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\"></div>
\t\t\t\t<a class=\"title-box\" onclick=\"linkTo('/radio','ramowka')\"><h2>Ramówka na dziś</h2></a>
\t\t\t\t\t<ul id=\"ramowka-lista\">
\t\t\t\t{% for a in ramowka %}
\t\t\t\t\t<li>
\t\t\t\t\t<a class=\"audycja\" onclick=\"linkTo(
\t\t\t\t\t{% if 'powtorka' in a.taxonomy.category %}
\t\t\t\t\t\t'{{ a.parent.parent.parent.link }}', '{{ a.parent.parent.slug }}/{{ a.parent.slug }}'
\t\t\t\t\t{% else %}
\t\t\t\t\t\t'{{ a.parent.parent.link }}', '{{ a.parent.slug }}/{{ a.slug }}'
\t\t\t\t\t{% endif %})\" >
\t\t\t\t\t<span class=\"godziny\">{{ a.header.startaud }} - {{ a.header.koniecaud }}</span>
\t\t\t\t\t<span class=\"nazwa\">{{ a.title }}</span>
\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t</div>\t
\t\t</div>
\t\t<div class=\"grid-box-2-3\" id=\"nagrania-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\"></div>
\t\t\t\t<a class=\"title-box\" onclick='linkTo(\"/nagrania\")'><h2>Nagrania</h2></a>
\t\t\t\t{% for n in nagrania %}
\t\t\t\t<div class=\"nagranie\" id=\"rec_{{ loop.index }}\">
\t\t\t\t\t<div id='titlejp-{{ loop.index }}' class=\"nagranie-title\" onclick=
\t\t\t\t\t\t{% if n.header.audio_attach_oga is not empty %}
\t\t\t\t\t\t\"playrec(this,'{{ n.media[n.header.audio_attach_oga|first.name].url() }}')\"
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\"linkTo('{{n.parent.link}}','{{n.slug}}')\"
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t>{{ n.title }}</div>
\t\t\t\t\t<div id=\"jp_container_{{ loop.index }}\" class=\"player-container\">
\t\t\t\t\t\t<div id=\"jp-play_{{ loop.index }}\" class=\"player-button play-button\" >
\t\t\t\t\t\t<img src={{ url('theme://images/play-white.svg') }}></img></div>
\t\t\t\t\t\t<div id=\"jp-pause_{{ loop.index }}\" class=\"player-button pause-button\">
\t\t\t\t\t\t\t<img src={{ url('theme://images/pause-white.svg') }}></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t<div id=\"jp-current-time_{{ loop.index }}\" class=\"player-time current-time\"></div>
\t\t\t\t\t\t<span class=\"splitter\">/</span>
\t\t\t\t\t\t<div id=\"jp-duration_{{ loop.index }}\" class=\"player-time duration-time\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"seekbar-wrap\">
\t\t\t\t\t\t<div id=\"jp-seek-bar_{{ loop.index }}\" class=\"player-slider seek-bar\">
\t\t\t\t\t\t\t<div id=\"jp-play-bar_{{ loop.index }}\" class=\"player-slider play-bar\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"jp-mute_{{ loop.index }}\" class=\"player-button mute-button\">
\t\t\t\t\t\t\t<img src={{ url('theme://images/guosnik-white.svg') }}></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-unmute_{{ loop.index }}\" class=\"player-button unmute-button\">
\t\t\t\t\t\t\t<img src={{ url('theme://images/guosnik-mute-white.svg') }}></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"more-link\" onclick='linkTo(\"{{n.parent.link}}\",\"{{n.slug}}\")'>
\t\t\t\t\t\t<div class=\"more\">Więcej...</div>
\t\t\t\t\t\t<img src={{ url('theme://images/arrow.svg') }}></img>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"grid-box-1-3\" id=\"plytatygodnia-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\" style='background-image: url(\"{{ plytatygodnia.media[plytatygodnia.header.display_image|first.name].display('thumbnail').cropZoom(400,400).url() }}\")'></div>
\t\t\t\t<a class=\"title-box\" onclick='linkTo(\"/plyta-tygodnia\")'><h2>Płyta Tygodnia</h2></a>
\t\t\t\t<div class=\"plyta-wrapper\" onclick='linkTo(\"/plyta-tygodnia\", \"{{ plytatygodnia.slug }}\")' >
\t\t\t\t<div class=\"plyta-titles\">
\t\t\t\t\t<div class=\"title-artist\"><h5>{{ plytatygodnia.header.artist }}</h5></div>
\t\t\t\t\t<div class=\"title-album\"><h3>{{ plytatygodnia.header.titlec }}</h3></div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t

\t</div>
\t\t\t\t\t
{% endblock %}\t\t\t
", "mainp.html.twig", "/var/www/html/html/user/themes/raktywne/templates/mainp.html.twig");
    }
}
