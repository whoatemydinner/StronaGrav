<?php

/* miniatures.html.twig */
class __TwigTemplate_0c467e30f526d9e6e4e52fa73ab1b05df1ff7bca61d39d71a0a961a52f199b25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "miniatures.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'uppertitle' => array($this, 'block_uppertitle'),
            'lowertitle' => array($this, 'block_lowertitle'),
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
        $context["pagination"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array()), "params", array()), "pagination", array());
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
\t\t<div class=\"grid-box-1-1\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"title-box\">
\t\t\t\t\t<h2> ";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo " </h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div class=\"grid\">
\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 20
            echo "\t\t<div id='page-";
            echo $this->getAttribute($context["g"], "number", array());
            echo "' class='pagination-page'>
\t\t<div class='pagination-content grid'>
\t\t";
            // line 22
            if (($this->getAttribute($context["g"], "isCurrent", array()) || ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), 0, array(), "array") == 1))) {
                // line 23
                echo "\t\t";
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
                    // line 24
                    echo "\t\t<div class=\"grid-box-1-4 plyta-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\" style='background-image: url(
\t\t\t\t";
                    // line 27
                    if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["n"], "header", array()), "display_image", array()))) {
                        // line 28
                        echo "\t\t\t\t";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["n"], "media", array()), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["n"], "header", array()), "display_image", array())), "name", array()), array(), "array"), "display", array(0 => "thumbnail"), "method"), "cropZoom", array(0 => 400, 1 => 400), "method"), "url", array(), "method");
                        echo "
\t\t\t\t";
                    } else {
                        // line 30
                        echo "\t\t\t\t";
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/fotos/photo1.jpg");
                        echo "
\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t\t)'></div>
\t\t\t\t<div class=\"plyta-wrapper\" onclick='linkTo(
\t\t\t\t\t";
                    // line 34
                    if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute($context["n"], "url", array()), "/")) == 3)) {
                        // line 35
                        echo "\t\t\t\t\t\"";
                        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                        echo "\",\"";
                        echo $this->getAttribute($context["n"], "slug", array());
                        echo "\"
\t\t\t\t\t";
                    } else {
                        // line 37
                        echo "\t\t\t\t\t\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
                        echo "\",\"";
                        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array());
                        echo "/";
                        echo $this->getAttribute($context["n"], "slug", array());
                        echo "\"
\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t\t\t\t\t)' >
\t\t\t\t\t<div class=\"plyta-titles\">
\t\t\t\t\t\t<div class=\"title-artist\">
\t\t\t\t\t\t\t<h5>";
                    // line 42
                    $this->displayBlock('uppertitle', $context, $blocks);
                    echo "</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"title-album\">
\t\t\t\t\t\t\t<h3>";
                    // line 45
                    $this->displayBlock('lowertitle', $context, $blocks);
                    echo "</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t</div>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t";
            }
            // line 53
            echo "\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t";
        // line 65
        echo "\t</div>
";
    }

    // line 42
    public function block_uppertitle($context, array $blocks = array())
    {
    }

    // line 45
    public function block_lowertitle($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "miniatures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 45,  180 => 42,  175 => 65,  173 => 56,  165 => 53,  162 => 52,  141 => 45,  135 => 42,  130 => 39,  120 => 37,  112 => 35,  110 => 34,  106 => 32,  100 => 30,  94 => 28,  92 => 27,  87 => 24,  69 => 23,  67 => 22,  61 => 20,  57 => 19,  49 => 14,  43 => 10,  40 => 9,  36 => 1,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  11 => 1,);
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
{% set pagination = page.collection.params.pagination %}
{% if pagination.nextUrl is null and pagination.prevUrl is null %}
\t{% set pagination = [1] %}
{% endif %}

{% block content %}
\t<div class=\"grid\">
\t\t<div class=\"grid-box-1-1\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"title-box\">
\t\t\t\t\t<h2> {{ page.title }} </h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div class=\"grid\">
\t{% for g in pagination %}
\t\t<div id='page-{{ g.number }}' class='pagination-page'>
\t\t<div class='pagination-content grid'>
\t\t{% if g.isCurrent or (pagination[0] == 1) %}
\t\t{% for n in collection %}
\t\t<div class=\"grid-box-1-4 plyta-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\" style='background-image: url(
\t\t\t\t{% if n.header.display_image is not empty %}
\t\t\t\t{{ n.media[n.header.display_image|first.name].display('thumbnail').cropZoom(400,400).url() }}
\t\t\t\t{% else %}
\t\t\t\t{{ url('theme://images/fotos/photo1.jpg') }}
\t\t\t\t{% endif %}
\t\t\t\t)'></div>
\t\t\t\t<div class=\"plyta-wrapper\" onclick='linkTo(
\t\t\t\t\t{% if n.url|split(\"/\")|length == 3 %}
\t\t\t\t\t\"{{ page.url }}\",\"{{ n.slug }}\"
\t\t\t\t\t{% else %}
\t\t\t\t\t\"{{ page.parent.url }}\",\"{{ page.slug }}/{{ n.slug }}\"
\t\t\t\t\t{% endif %}
\t\t\t\t\t)' >
\t\t\t\t\t<div class=\"plyta-titles\">
\t\t\t\t\t\t<div class=\"title-artist\">
\t\t\t\t\t\t\t<h5>{% block uppertitle %}{% endblock %}</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"title-album\">
\t\t\t\t\t\t\t<h3>{% block lowertitle %}{% endblock %}</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t</div>
\t\t{% endfor %}
\t\t{% endif %}
\t\t</div>
\t\t</div>
\t{% endfor %}
\t{#
\t\t<div class=\"grid\">
\t\t<div class=\"grid-box-1-1\">
\t\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t\t{% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
\t\t\t{% endif %}
\t\t</div>
\t\t</div>
\t#}
\t</div>
{% endblock %}
", "miniatures.html.twig", "/var/www/html/html/user/themes/raktywne/templates/miniatures.html.twig");
    }
}
