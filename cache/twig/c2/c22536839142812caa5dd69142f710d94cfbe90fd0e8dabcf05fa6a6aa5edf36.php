<?php

/* nagrania.html.twig */
class __TwigTemplate_efa5cbf86b664316fef9823d7528c43c5dc471fa93a71367e6411982904f5c20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "nagrania.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 4
        $context["pagination"] = $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array());
        // line 5
        if (((null === $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", array())) && (null === $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", array())))) {
            // line 6
            $context["pagination"] = array(0 => 1);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t<div class=\"grid\">
\t\t<div class=\"grid-box-2-3 lista-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"title-box\"><h2>";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 18
            echo "\t<div id=\"page-";
            echo $this->getAttribute($context["g"], "number", array());
            echo "\" class='pagination-page'>
\t<div class=\"pagination-content grid\">
\t\t";
            // line 20
            if (($this->getAttribute($context["g"], "isCurrent", array()) || ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), 0, array(), "array") == 1))) {
                // line 21
                echo "\t\t<div class=\"grid-box-2-3 lista-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"list-container\">
\t\t\t\t\t";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
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
                    // line 25
                    echo "\t\t\t\t\t\t<div class=\"nagranie\" id=\"rec_rec_";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\">
\t\t\t\t\t\t\t<div id='titlejp-rec_";
                    // line 26
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "' class=\"nagranie-title\" onclick=
\t\t\t\t\t\t\t";
                    // line 27
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["n"], "header", array()), "audio_attach_oga", array()))) {
                        // line 28
                        echo "\t\t\t\t\t\t\t\"playrec(this, '";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($context["n"], "media", array()), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["n"], "header", array()), "audio_attach_oga", array())), "name", array()), array(), "array"), "url", array(), "method");
                        echo "')\"
\t\t\t\t\t\t\t";
                    } else {
                        // line 30
                        echo "\t\t\t\t\t\t\t\"linkTo('";
                        echo $this->getAttribute($this->getAttribute($context["n"], "parent", array()), "link", array());
                        echo "','";
                        echo $this->getAttribute($context["n"], "slug", array());
                        echo "')\"
\t\t\t\t\t\t\t";
                    }
                    // line 32
                    echo ">";
                    echo $this->getAttribute($context["n"], "title", array());
                    echo "</div>
\t\t\t\t\t\t\t<div id=\"jp_container_rec_";
                    // line 33
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"player-container\">
\t\t\t\t\t\t\t\t<div id=\"jp-play_rec_";
                    // line 34
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"player-button play-button\">
\t\t\t\t\t\t\t\t\t<img src=";
                    // line 35
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/play-white.svg");
                    echo "></img>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"jp-pause_rec_";
                    // line 37
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"player-button pause-button\">
\t\t\t\t\t\t\t\t\t<img src=";
                    // line 38
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/pause-white.svg");
                    echo "></img>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t<div id=\"jp-current-time_rec_";
                    // line 41
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"player-time current-time\"></div>
\t\t\t\t\t\t\t\t\t<span class=\"splitter\">/</span>
\t\t\t\t\t\t\t\t\t<div id=\"jp-duration_rec_";
                    // line 43
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"player-time duration-time\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"seekbar-wrap\">
\t\t\t\t\t\t\t\t\t<div id=\"jp-seek-bar_rec_";
                    // line 46
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"player-slider seek-bar\">
\t\t\t\t\t\t\t\t\t\t<div id=\"jp-play-bar_rec_";
                    // line 47
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"player-slider play-bar\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"jp-mute_";
                    // line 50
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"player-button mute-button\">
\t\t\t\t\t\t\t\t\t<img src=";
                    // line 51
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/guosnik-white.svg");
                    echo "></img>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"jp-unmute_";
                    // line 53
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"player-button unmute-button\">
\t\t\t\t\t\t\t\t\t<img src=";
                    // line 54
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/guosnik-mute-white.svg");
                    echo "></img>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"more-link\" onclick='linkTo(\"";
                    // line 57
                    echo $this->getAttribute($this->getAttribute($context["n"], "parent", array()), "link", array());
                    echo "\", \"";
                    echo $this->getAttribute($context["n"], "slug", array());
                    echo "\")'>
\t\t\t\t\t\t\t\t<div class=\"more\">Więcej...</div>
\t\t\t\t\t\t\t\t<img src=";
                    // line 59
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/arrow.svg");
                    echo "></img>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
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
                // line 63
                echo "
\t\t";
                // line 69
                echo "\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 74
            echo "\t</div>
\t</div>
\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "nagrania.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 74,  221 => 69,  218 => 63,  200 => 59,  193 => 57,  187 => 54,  183 => 53,  178 => 51,  174 => 50,  168 => 47,  164 => 46,  158 => 43,  153 => 41,  147 => 38,  143 => 37,  138 => 35,  134 => 34,  130 => 33,  125 => 32,  117 => 30,  111 => 28,  109 => 27,  105 => 26,  100 => 25,  83 => 24,  78 => 21,  76 => 20,  70 => 18,  53 => 17,  46 => 13,  41 => 10,  38 => 9,  34 => 1,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
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

{% set collection = page.collection() %}
{% set pagination = collection.params.pagination %}
{% if pagination.nextUrl is null and pagination.prevUrl is null %}
\t{% set pagination = [1] %}
{% endif %}

{% block content %}
\t<div class=\"grid\">
\t\t<div class=\"grid-box-2-3 lista-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"title-box\"><h2>{{ page.title }}</h2></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% for g in pagination %}
\t<div id=\"page-{{ g.number }}\" class='pagination-page'>
\t<div class=\"pagination-content grid\">
\t\t{% if g.isCurrent or pagination[0]==1 %}
\t\t<div class=\"grid-box-2-3 lista-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"list-container\">
\t\t\t\t\t{% for n in collection %}
\t\t\t\t\t\t<div class=\"nagranie\" id=\"rec_rec_{{ loop.index }}\">
\t\t\t\t\t\t\t<div id='titlejp-rec_{{ loop.index }}' class=\"nagranie-title\" onclick=
\t\t\t\t\t\t\t{% if n.header.audio_attach_oga is not empty %}
\t\t\t\t\t\t\t\"playrec(this, '{{ n.media[n.header.audio_attach_oga|first.name].url() }}')\"
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\"linkTo('{{ n.parent.link }}','{{ n.slug }}')\"
\t\t\t\t\t\t\t{% endif %}
>{{ n.title }}</div>
\t\t\t\t\t\t\t<div id=\"jp_container_rec_{{ loop.index }}\" class=\"player-container\">
\t\t\t\t\t\t\t\t<div id=\"jp-play_rec_{{ loop.index }}\" class=\"player-button play-button\">
\t\t\t\t\t\t\t\t\t<img src={{ url('theme://images/play-white.svg') }}></img>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"jp-pause_rec_{{ loop.index }}\" class=\"player-button pause-button\">
\t\t\t\t\t\t\t\t\t<img src={{ url('theme://images/pause-white.svg') }}></img>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t<div id=\"jp-current-time_rec_{{ loop.index }}\" class=\"player-time current-time\"></div>
\t\t\t\t\t\t\t\t\t<span class=\"splitter\">/</span>
\t\t\t\t\t\t\t\t\t<div id=\"jp-duration_rec_{{ loop.index }}\" class=\"player-time duration-time\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"seekbar-wrap\">
\t\t\t\t\t\t\t\t\t<div id=\"jp-seek-bar_rec_{{ loop.index }}\" class=\"player-slider seek-bar\">
\t\t\t\t\t\t\t\t\t\t<div id=\"jp-play-bar_rec_{{ loop.index }}\" class=\"player-slider play-bar\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"jp-mute_{{ loop.index }}\" class=\"player-button mute-button\">
\t\t\t\t\t\t\t\t\t<img src={{ url('theme://images/guosnik-white.svg') }}></img>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"jp-unmute_{{ loop.index }}\" class=\"player-button unmute-button\">
\t\t\t\t\t\t\t\t\t<img src={{ url('theme://images/guosnik-mute-white.svg') }}></img>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"more-link\" onclick='linkTo(\"{{ n.parent.link }}\", \"{{ n.slug }}\")'>
\t\t\t\t\t\t\t\t<div class=\"more\">Więcej...</div>
\t\t\t\t\t\t\t\t<img src={{ url('theme://images/arrow.svg') }}></img>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t{#
\t\t\t\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t\t\t\t {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
\t\t\t\t\t{% endif %}
\t\t#}
\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endif %}
\t</div>
\t</div>
\t{% endfor %}
{% endblock %}
", "nagrania.html.twig", "/var/www/html/html/user/themes/raktywne/templates/nagrania.html.twig");
    }
}
