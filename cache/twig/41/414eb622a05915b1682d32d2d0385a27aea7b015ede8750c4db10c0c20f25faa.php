<?php

/* foitems.html.twig */
class __TwigTemplate_8c5cbd48946140ac5a265aa496bf494c18c320955f70a20c03df3f28347dde9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "foitems.html.twig", 1);
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
        $context["col"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"grid fouritems\">
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["col"]) ? $context["col"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 10
            echo "\t\t<div class=\"
\t\t\t";
            // line 11
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                // line 12
                echo "\t\t\t\tgrid-box-2-3
\t\t\t";
            } else {
                // line 14
                echo "\t\t\t\tgrid-box-1-3
\t\t\t";
            }
            // line 16
            echo "\t\t\">
\t\t\t<div class=\"grid-box-content\" onclick=\"linkTo('";
            // line 17
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "','";
            echo $this->getAttribute($context["a"], "slug", array());
            echo "')\">
\t\t\t\t<div class=\"grid-box-bg\" style=\"background-image: url('";
            // line 18
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "media", array()), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["a"], "header", array()), "display_image", array())), "name", array()), array(), "array"), "display", array(0 => "thumbnail"), "method"), "cropZoom", array(0 => 800, 1 => 500), "method"), "url", array(), "method");
            echo "');\"></div>
\t\t\t\t<div class=\"title-box\"><h2>";
            // line 19
            echo $this->getAttribute($context["a"], "title", array());
            echo "</h2></div>\t
\t\t\t</div>
\t\t</div>\t\t
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t</div>
\t\t\t\t\t
\t\t\t
";
    }

    public function getTemplateName()
    {
        return "foitems.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 23,  80 => 19,  76 => 18,  70 => 17,  67 => 16,  63 => 14,  59 => 12,  57 => 11,  54 => 10,  37 => 9,  34 => 8,  31 => 7,  27 => 1,  25 => 5,  11 => 1,);
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

{% set col = page.collection() %}

{% block content %}
\t<div class=\"grid fouritems\">
\t{% for a in col %}
\t\t<div class=\"
\t\t\t{% if loop.index is odd %}
\t\t\t\tgrid-box-2-3
\t\t\t{% else %}
\t\t\t\tgrid-box-1-3
\t\t\t{% endif %}
\t\t\">
\t\t\t<div class=\"grid-box-content\" onclick=\"linkTo('{{ page.url}}','{{ a.slug }}')\">
\t\t\t\t<div class=\"grid-box-bg\" style=\"background-image: url('{{ a.media[a.header.display_image|first.name].display('thumbnail').cropZoom(800,500).url() }}');\"></div>
\t\t\t\t<div class=\"title-box\"><h2>{{ a.title  }}</h2></div>\t
\t\t\t</div>
\t\t</div>\t\t
\t{% endfor %}
\t</div>
\t\t\t\t\t
\t\t\t
{% endblock %}
", "foitems.html.twig", "/var/www/html/html/user/themes/raktywne/templates/foitems.html.twig");
    }
}
