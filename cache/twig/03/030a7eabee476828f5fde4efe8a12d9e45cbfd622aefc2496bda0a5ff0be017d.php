<?php

/* partials/base.html.twig */
class __TwigTemplate_1126ff1a19354e897e568481d91044b532296b9538e030abea4fb61199f0c3fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'error' => array($this, 'block_error'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "</head>
<body id=\"top\" class=\"";
        // line 37
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">

";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('bottom', $context, $blocks);
        // line 100
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/faviconneg.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 98), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/tabs.css", 1 => 98), "method");
        // line 21
        echo "    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 26
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.jplayer.min.js", 1 => 100), "method");
        // line 27
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "https://hammerjs.github.io/dist/hammer.js", 1 => 99), "method");
        // line 28
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.hammer.js", 1 => 99), "method");
        // line 29
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/custom.js", 1 => 98), "method");
        // line 30
        echo "\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/playerlive.js", 1 => 98), "method");
        // line 31
        echo "\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/player.js", 1 => 98), "method");
        // line 32
        echo "    ";
    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        // line 40
        echo "    <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo left\" href=\"";
        // line 42
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">
\t\t<img src=";
        // line 43
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/ra-logof.svg");
        echo "></img>
            </a>
\t\t<a class=\"left logos\" id=\"iglogo\" target='_blank' href=\"https://www.instagram.com/radioaktywnepw/\">
\t\t\t<img src=";
        // line 46
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/iglogo.svg");
        echo "></img>
\t\t</a>
\t\t<a class=\"left logos\" id=\"fblogo\" target='_blank' href=\"https://www.facebook.com/pg/RadioaktywnePW\">
\t\t\t<img src=";
        // line 49
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/fblogo.svg");
        echo "></img>
\t\t</a>
            ";
        // line 51
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 59
        echo "        </div>
    </div>
<div id=\"live_player\"></div>
<div id=\"player_w_stanie_posrednim\"></div>
";
    }

    // line 51
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 52
        echo "            <nav class=\"main-nav\">
                ";
        // line 53
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "            </nav>
            <nav class=\"mobile-nav\">
                ";
        // line 56
        $this->loadTemplate("partials/mobilenavigation.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "            </nav>
            ";
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "    <section id=\"body\">
\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 68
            echo "\t\t<div id='tab-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "' class='tab";
            if (($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) {
                echo " selected-tab";
            }
            echo "'>
\t\t\t<div class='content'>
\t\t\t\t";
            // line 70
            if (($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) {
                // line 71
                echo "\t\t\t\t\t";
                $this->displayBlock('content', $context, $blocks);
                // line 72
                echo "\t\t\t\t";
            } elseif (($this->getAttribute($context["p"], "url", array()) == "/")) {
                // line 73
                echo "\t\t\t\t\t";
                $this->loadTemplate("mainp.html.twig", "partials/base.html.twig", 73)->display($context);
                // line 74
                echo "\t\t\t\t";
            }
            // line 75
            echo "\t\t\t</div>
\t\t</div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t";
        $this->displayBlock('error', $context, $blocks);
        // line 79
        echo "    </section>
";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
    }

    // line 78
    public function block_error($context, array $blocks = array())
    {
    }

    // line 82
    public function block_footer($context, array $blocks = array())
    {
        // line 83
        echo "    <div id=\"footer\">
\t<a class=\"left\" id='contact-link'  onclick=\"linkTo('/radio','o-nas')\"> kontakt <img src=";
        // line 84
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/arrow.svg");
        echo "></img></a>
\t<a class=\"right logosy\" id=\"sspw\" target='_blank' href=\"https://sspw.pl\">
\t\t<img src=";
        // line 86
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/sspw.png");
        echo "></img>
\t</a>
\t<a class=\"right logosy\" id=\"tvpw\" target='_blank' href=\"https://tvpw.pl\">
\t\t<img src=";
        // line 89
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/TVPW_rgb.png");
        echo "></img>
\t</a>
\t<a class=\"right logosy\" id=\"polibuda\" target='_blank' href=\"https://polibuda.info\">
\t\t<img src=";
        // line 92
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/polibuda.svg");
        echo "></img>
\t</a>
    </div>
";
    }

    // line 97
    public function block_bottom($context, array $blocks = array())
    {
        // line 98
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 98,  338 => 97,  330 => 92,  324 => 89,  318 => 86,  313 => 84,  310 => 83,  307 => 82,  302 => 78,  297 => 71,  292 => 79,  289 => 78,  273 => 75,  270 => 74,  267 => 73,  264 => 72,  261 => 71,  259 => 70,  249 => 68,  232 => 67,  229 => 66,  226 => 65,  221 => 57,  219 => 56,  215 => 54,  213 => 53,  210 => 52,  207 => 51,  199 => 59,  197 => 51,  192 => 49,  186 => 46,  180 => 43,  176 => 42,  172 => 40,  169 => 39,  165 => 32,  162 => 31,  159 => 30,  156 => 29,  153 => 28,  150 => 27,  147 => 26,  144 => 25,  141 => 24,  137 => 21,  134 => 20,  131 => 19,  128 => 18,  125 => 17,  122 => 16,  114 => 33,  112 => 24,  106 => 22,  104 => 16,  99 => 14,  95 => 13,  92 => 12,  90 => 11,  79 => 7,  76 => 6,  73 => 5,  66 => 100,  64 => 97,  61 => 96,  59 => 82,  56 => 81,  54 => 65,  51 => 64,  49 => 39,  44 => 37,  41 => 36,  39 => 5,  34 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/faviconneg.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://css/custom.css', 98) %}
        {% do assets.addCss('theme://css-compiled/tabs.css', 98) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
        {% do assets.addJs('theme://js/jquery.jplayer.min.js', 100) %}
        {% do assets.addJs('https://hammerjs.github.io/dist/hammer.js', 99) %}
        {% do assets.addJs('theme://js/jquery.hammer.js', 99) %}
        {% do assets.addJs('theme://js/custom.js', 98) %}
\t{% do assets.addJs('theme://js/playerlive.js', 98) %}
\t{% do assets.addJs('theme://js/player.js', 98) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
    <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">
\t\t<img src={{ url('theme://images/ra-logof.svg') }}></img>
            </a>
\t\t<a class=\"left logos\" id=\"iglogo\" target='_blank' href=\"https://www.instagram.com/radioaktywnepw/\">
\t\t\t<img src={{ url('theme://images/iglogo.svg') }}></img>
\t\t</a>
\t\t<a class=\"left logos\" id=\"fblogo\" target='_blank' href=\"https://www.facebook.com/pg/RadioaktywnePW\">
\t\t\t<img src={{ url('theme://images/fblogo.svg') }}></img>
\t\t</a>
            {% block header_navigation %}
            <nav class=\"main-nav\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            <nav class=\"mobile-nav\">
                {% include 'partials/mobilenavigation.html.twig' %}
            </nav>
            {% endblock %}
        </div>
    </div>
<div id=\"live_player\"></div>
<div id=\"player_w_stanie_posrednim\"></div>
{% endblock %}

{% block body %}
    <section id=\"body\">
\t{% for p in pages.children.visible %}
\t\t<div id='tab-{{ loop.index }}' class='tab{% if p.active or p.activeChild %} selected-tab{% endif %}'>
\t\t\t<div class='content'>
\t\t\t\t{% if p.active or p.activeChild%}
\t\t\t\t\t{% block content %}{% endblock %}
\t\t\t\t{% elseif p.url == '/' %}
\t\t\t\t\t{% include \"mainp.html.twig\" %}
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t{% endfor %}
\t{% block error %}{% endblock %}
    </section>
{% endblock %}

{% block footer %}
    <div id=\"footer\">
\t<a class=\"left\" id='contact-link'  onclick=\"linkTo('/radio','o-nas')\"> kontakt <img src={{url('theme://images/arrow.svg')}}></img></a>
\t<a class=\"right logosy\" id=\"sspw\" target='_blank' href=\"https://sspw.pl\">
\t\t<img src={{ url('theme://images/sspw.png') }}></img>
\t</a>
\t<a class=\"right logosy\" id=\"tvpw\" target='_blank' href=\"https://tvpw.pl\">
\t\t<img src={{ url('theme://images/TVPW_rgb.png') }}></img>
\t</a>
\t<a class=\"right logosy\" id=\"polibuda\" target='_blank' href=\"https://polibuda.info\">
\t\t<img src={{ url('theme://images/polibuda.svg') }}></img>
\t</a>
    </div>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/var/www/html/html/user/themes/raktywne/templates/partials/base.html.twig");
    }
}
