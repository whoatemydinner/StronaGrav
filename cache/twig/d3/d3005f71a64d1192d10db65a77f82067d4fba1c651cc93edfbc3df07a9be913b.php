<?php

/* default.html.twig */
class __TwigTemplate_08229009942748de612dedef90b2a974b37df47436f4677a373cf0c7c6692f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'additional' => array($this, 'block_additional'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "/")) == 3)) {
            // line 3
            $context["base_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
        } elseif ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute(        // line 4
(isset($context["page"]) ? $context["page"] : null), "url", array()), "/")) == 4)) {
            // line 5
            $context["base_url"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "parent", array()), "url", array());
            // line 6
            $context["sub_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "slug", array());
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t<div class=\"grid\">
\t\t<div class=\"grid-box-2-3 article-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"title-box\"><h2>";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
\t\t\t\t<div class=\"back-button\" onclick='linkTo(
\t\t\t\t\"";
        // line 15
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\",
\t\t\t\t\"";
        // line 16
        echo (isset($context["sub_url"]) ? $context["sub_url"] : null);
        echo "\"
\t\t\t\t)'><img src=";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/back-green.svg");
        echo "></img></div></div>

\t\t\t\t";
        // line 19
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "audio_attach_oga", array()))) {
            // line 20
            echo "\t\t\t\t<div class=\"grid-box-player rec-player\" rec='";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "audio_attach_oga", array())), "name", array()), array(), "array"), "url", array(), "method");
            echo "'>
\t\t\t\t\t<div id='jp_container_def' class=\"player-container\">
\t\t\t\t\t\t<div id=\"jp-play_def\" class=\"player-button play-button\" >
\t\t\t\t\t\t<img src=";
            // line 23
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/play-white.svg");
            echo "></img></div>
\t\t\t\t\t\t<div id=\"jp-pause_def\" class=\"player-button pause-button\">
\t\t\t\t\t\t\t<img src=";
            // line 25
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/pause-white.svg");
            echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t<div id=\"jp-current-time_def\" class=\"player-time current-time\"></div>
\t\t\t\t\t\t<span class=\"splitter\">/</span>
\t\t\t\t\t\t<div id=\"jp-duration_def\" class=\"player-time duration-time\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"seekbar-wrap\">
\t\t\t\t\t\t<div id=\"jp-seek-bar_def\" class=\"player-slider seek-bar\">
\t\t\t\t\t\t\t<div id=\"jp-play-bar_def\" class=\"player-slider play-bar\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"jp-mute_def\" class=\"player-button mute-button\">
\t\t\t\t\t\t\t<img src=";
            // line 39
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/guosnik-white.svg");
            echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-unmute_def\" class=\"player-button unmute-button\">
\t\t\t\t\t\t\t<img src=";
            // line 42
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/guosnik-mute-white.svg");
            echo "></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 47
        echo "
\t\t\t\t
\t\t\t\t<div class=\"article-containter\">
\t\t\t\t    ";
        // line 50
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"grid-box-1-3 article-photo\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t";
        // line 56
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "display_image", array()))) {
            // line 57
            echo "\t\t\t\t<div class=\"grid-box-bg\" style='background-image: url(";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "display_image", array())), "name", array()), array(), "array"), "display", array(0 => "thumbnail"), "method"), "cropZoom", array(0 => 400, 1 => 400), "method"), "url", array(), "method");
            echo ")'></div>
\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t";
        $this->displayBlock('additional', $context, $blocks);
        // line 60
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 59
    public function block_additional($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 59,  137 => 60,  134 => 59,  128 => 57,  126 => 56,  117 => 50,  112 => 47,  104 => 42,  98 => 39,  81 => 25,  76 => 23,  69 => 20,  67 => 19,  62 => 17,  58 => 16,  54 => 15,  49 => 13,  44 => 10,  41 => 9,  37 => 1,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
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
{% if page.url|split('/')|length == 3  %}
\t{% set base_url = page.parent.url %}
{% elseif page.url|split('/')|length == 4 %}
\t{% set base_url = page.parent.parent.url %}
\t{% set sub_url = page.parent.slug %}
{% endif %}

{% block content %}
\t<div class=\"grid\">
\t\t<div class=\"grid-box-2-3 article-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"title-box\"><h2>{{ page.title }}</h2>
\t\t\t\t<div class=\"back-button\" onclick='linkTo(
\t\t\t\t\"{{ base_url }}\",
\t\t\t\t\"{{ sub_url }}\"
\t\t\t\t)'><img src={{ url('theme://images/back-green.svg') }}></img></div></div>

\t\t\t\t{% if page.header.audio_attach_oga is not empty %}
\t\t\t\t<div class=\"grid-box-player rec-player\" rec='{{ page.media[page.header.audio_attach_oga|first.name].url() }}'>
\t\t\t\t\t<div id='jp_container_def' class=\"player-container\">
\t\t\t\t\t\t<div id=\"jp-play_def\" class=\"player-button play-button\" >
\t\t\t\t\t\t<img src={{ url('theme://images/play-white.svg') }}></img></div>
\t\t\t\t\t\t<div id=\"jp-pause_def\" class=\"player-button pause-button\">
\t\t\t\t\t\t\t<img src={{ url('theme://images/pause-white.svg') }}></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t<div id=\"jp-current-time_def\" class=\"player-time current-time\"></div>
\t\t\t\t\t\t<span class=\"splitter\">/</span>
\t\t\t\t\t\t<div id=\"jp-duration_def\" class=\"player-time duration-time\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"seekbar-wrap\">
\t\t\t\t\t\t<div id=\"jp-seek-bar_def\" class=\"player-slider seek-bar\">
\t\t\t\t\t\t\t<div id=\"jp-play-bar_def\" class=\"player-slider play-bar\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"jp-mute_def\" class=\"player-button mute-button\">
\t\t\t\t\t\t\t<img src={{ url('theme://images/guosnik-white.svg') }}></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"jp-unmute_def\" class=\"player-button unmute-button\">
\t\t\t\t\t\t\t<img src={{ url('theme://images/guosnik-mute-white.svg') }}></img>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t
\t\t\t\t<div class=\"article-containter\">
\t\t\t\t    {{ page.content }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"grid-box-1-3 article-photo\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t{% if page.header.display_image is not empty %}
\t\t\t\t<div class=\"grid-box-bg\" style='background-image: url({{ page.media[page.header.display_image|first.name].display('thumbnail').cropZoom(400,400).url() }})'></div>
\t\t\t\t{% endif %}
\t\t\t\t{% block additional %}{% endblock %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "default.html.twig", "/var/www/html/html/user/themes/raktywne/templates/default.html.twig");
    }
}
