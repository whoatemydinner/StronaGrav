<?php

/* main.html.twig */
class __TwigTemplate_542eff422fb02f45b363a0a6e9cbb54cf01a517dac5bedeb75b6f94063f47827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "main.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["plytatygodnia"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@page.children" => "/plyta-tygodnia"), "order" => array("by" => "date", "dir" => "desc"))), "method"), "first", array(), "method");
        // line 8
        $context["dow"] = $this->getAttribute(twig_date_converter($this->env), "format", array(0 => "D"), "method");
        // line 9
        $context["ramowka"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@taxonomy" => array("category" => "audycja", "tag" => (isset($context["dow"]) ? $context["dow"] : null))), "order" => array("by" => "header.startaud", "dir" => "asc"))), "method");
        // line 12
        $context["nagrania"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@page.children" => "/nagrania"), "limit" => "6", "order" => array("by" => "date", "dir" => "desc"))), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "\t<div class=\"grid\">
\t\t<div class=\"grid-box-2-3\" id=\"player-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\" style=\"background-image: url('";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/studio.jpg");
        echo "');\"></div>
\t\t\t\t<div class=\"title-box\"><h2>Player</h2></div>
\t\t
\t\t\t\t<div id=\"player-box-content\">
\t\t\t\t\t<div class=\"grid-box-bg\"></div>
\t\t\t\t\t<div id=\"jp_live_container\">
\t\t\t\t\t\t<div id=\"jp-live-play\" class=\"player-button\">
\t\t\t\t\t\t\t<img src=";
        // line 26
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/play-white.svg");
        echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-live-pause\" class=\"player-button\">
\t\t\t\t\t\t\t<img src=";
        // line 29
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/pause-white.svg");
        echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"rds\">Teraz gramy:
\t\t\t\t\t\t\t<div id=\"headerLiveHolder\" class=\"jp-live-title\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-live-mute\" class=\"player-button\">
\t\t\t\t\t\t\t<img src=";
        // line 35
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/guosnik-white.svg");
        echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-live-unmute\" class=\"player-button\">
\t\t\t\t\t\t\t<img src=";
        // line 38
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
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ramowka"]) ? $context["ramowka"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 54
            echo "\t\t\t\t\t<li>
\t\t\t\t\t<a class=\"audycja\" onclick=\"linkTo(
\t\t\t\t\t";
            // line 56
            if (twig_in_filter("powtorka", $this->getAttribute($this->getAttribute($context["a"], "taxonomy", array()), "category", array()))) {
                // line 57
                echo "\t\t\t\t\t\t'";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "parent", array()), "parent", array()), "parent", array()), "link", array());
                echo "', '";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "parent", array()), "parent", array()), "slug", array());
                echo "/";
                echo $this->getAttribute($this->getAttribute($context["a"], "parent", array()), "slug", array());
                echo "'
\t\t\t\t\t";
            } else {
                // line 59
                echo "\t\t\t\t\t\t'";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "parent", array()), "parent", array()), "link", array());
                echo "', '";
                echo $this->getAttribute($this->getAttribute($context["a"], "parent", array()), "slug", array());
                echo "/";
                echo $this->getAttribute($context["a"], "slug", array());
                echo "'
\t\t\t\t\t";
            }
            // line 60
            echo ")\" >
\t\t\t\t\t<span class=\"godziny\">";
            // line 61
            echo $this->getAttribute($this->getAttribute($context["a"], "header", array()), "startaud", array());
            echo " - ";
            echo $this->getAttribute($this->getAttribute($context["a"], "header", array()), "koniecaud", array());
            echo "</span>
\t\t\t\t\t<span class=\"nazwa\">";
            // line 62
            echo $this->getAttribute($context["a"], "title", array());
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t\t\t</ul>
\t\t\t</div>\t
\t\t</div>
\t\t<div class=\"grid-box-2-3\" id=\"nagrania-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\"></div>
\t\t\t\t<a class=\"title-box\" onclick='linkTo(\"/nagrania\")'><h2>Nagrania</h2></a>
\t\t\t\t";
        // line 73
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
            // line 74
            echo "\t\t\t\t<div class=\"nagranie\" id=\"rec_";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\">
\t\t\t\t\t<div id='titlejp-";
            // line 75
            echo $this->getAttribute($context["loop"], "index", array());
            echo "' class=\"nagranie-title\" onclick=
\t\t\t\t\t\t";
            // line 76
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["n"], "header", array()), "audio_attach_oga", array()))) {
                // line 77
                echo "\t\t\t\t\t\t\"playrec(this,'";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["n"], "media", array()), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["n"], "header", array()), "audio_attach_oga", array())), "name", array()), array(), "array"), "url", array(), "method");
                echo "')\"
\t\t\t\t\t\t";
            } else {
                // line 79
                echo "\t\t\t\t\t\t\"linkTo('";
                echo $this->getAttribute($this->getAttribute($context["n"], "parent", array()), "link", array());
                echo "','";
                echo $this->getAttribute($context["n"], "slug", array());
                echo "')\"
\t\t\t\t\t\t";
            }
            // line 81
            echo "\t\t\t\t\t\t>";
            echo $this->getAttribute($context["n"], "title", array());
            echo "</div>
\t\t\t\t\t<div id=\"jp_container_";
            // line 82
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-container\">
\t\t\t\t\t\t<div id=\"jp-play_";
            // line 83
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-button play-button\" >
\t\t\t\t\t\t<img src=";
            // line 84
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/play-white.svg");
            echo "></img></div>
\t\t\t\t\t\t<div id=\"jp-pause_";
            // line 85
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-button pause-button\">
\t\t\t\t\t\t\t<img src=";
            // line 86
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/pause-white.svg");
            echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t<div id=\"jp-current-time_";
            // line 89
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-time current-time\"></div>
\t\t\t\t\t\t<span class=\"splitter\">/</span>
\t\t\t\t\t\t<div id=\"jp-duration_";
            // line 91
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-time duration-time\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"seekbar-wrap\">
\t\t\t\t\t\t<div id=\"jp-seek-bar_";
            // line 94
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-slider seek-bar\">
\t\t\t\t\t\t\t<div id=\"jp-play-bar_";
            // line 95
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-slider play-bar\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"jp-mute_";
            // line 99
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-button mute-button\">
\t\t\t\t\t\t\t<img src=";
            // line 100
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/guosnik-white.svg");
            echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-unmute_";
            // line 102
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"player-button unmute-button\">
\t\t\t\t\t\t\t<img src=";
            // line 103
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/guosnik-mute-white.svg");
            echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"more-link\" onclick='linkTo(\"";
            // line 107
            echo $this->getAttribute($this->getAttribute($context["n"], "parent", array()), "link", array());
            echo "\",\"";
            echo $this->getAttribute($context["n"], "slug", array());
            echo "\")'>
\t\t\t\t\t\t<div class=\"more\">Więcej...</div>
\t\t\t\t\t\t<img src=";
            // line 109
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
        // line 113
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"grid-box-1-3\" id=\"plytatygodnia-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\" style='background-image: url(\"";
        // line 117
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["plytatygodnia"]) ? $context["plytatygodnia"] : null), "media", array()), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["plytatygodnia"]) ? $context["plytatygodnia"] : null), "header", array()), "display_image", array())), "name", array()), array(), "array"), "display", array(0 => "thumbnail"), "method"), "cropZoom", array(0 => 400, 1 => 400), "method"), "url", array(), "method");
        echo "\")'></div>
\t\t\t\t<a class=\"title-box\" onclick='linkTo(\"/plyta-tygodnia\")'><h2>Płyta Tygodnia</h2></a>
\t\t\t\t<div class=\"plyta-wrapper\" onclick='linkTo(\"/plyta-tygodnia\", \"";
        // line 119
        echo $this->getAttribute((isset($context["plytatygodnia"]) ? $context["plytatygodnia"] : null), "slug", array());
        echo "\")' >
\t\t\t\t<div class=\"plyta-titles\">
\t\t\t\t\t<div class=\"title-artist\"><h5>";
        // line 121
        echo $this->getAttribute($this->getAttribute((isset($context["plytatygodnia"]) ? $context["plytatygodnia"] : null), "header", array()), "artist", array());
        echo "</h5></div>
\t\t\t\t\t<div class=\"title-album\"><h3>";
        // line 122
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
        return "main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 122,  304 => 121,  299 => 119,  294 => 117,  288 => 113,  270 => 109,  263 => 107,  256 => 103,  252 => 102,  247 => 100,  243 => 99,  236 => 95,  232 => 94,  226 => 91,  221 => 89,  215 => 86,  211 => 85,  207 => 84,  203 => 83,  199 => 82,  194 => 81,  186 => 79,  180 => 77,  178 => 76,  174 => 75,  169 => 74,  152 => 73,  143 => 66,  133 => 62,  127 => 61,  124 => 60,  114 => 59,  104 => 57,  102 => 56,  98 => 54,  94 => 53,  76 => 38,  70 => 35,  61 => 29,  55 => 26,  45 => 19,  40 => 16,  37 => 15,  33 => 1,  31 => 12,  29 => 9,  27 => 8,  25 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

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
", "main.html.twig", "/var/www/html/html/user/themes/raktywne/templates/main.html.twig");
    }
}
