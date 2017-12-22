<?php

/* ramowka.html.twig */
class __TwigTemplate_0c9bde397487d534dc5905f383d059f4931034196e0c7197b4c9f71af9cf7a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "ramowka.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"grid\">
\t\t<div class=\"grid-box-1-1 article-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"title-box\"><div class=\"back-button\"></div><h2>";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2></div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array("Mon" => "Poniedziałek", "Tue" => "Wtorek", "Wed" => "Środa", "Thu" => "Czwartek", "Fri" => "Piątek", "Sat" => "Sobota", "Sun" => "Niedziela"));
        foreach ($context['_seq'] as $context["s"] => $context["d"]) {
            // line 11
            echo "\t\t<div class=\"grid-box-1-3 ramowka-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"title-box\"><h2>";
            // line 13
            echo $context["d"];
            echo "</h2></div>
\t\t\t\t<ul class='ramowka-lista'>
\t\t\t\t\t";
            // line 15
            $context["audycje"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@taxonomy" => array("category" => "audycja", "tag" => $context["s"])), "order" => array("by" => "header.startaud", "dir" => "asc"))), "method");
            // line 16
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["audycje"]) ? $context["audycje"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 17
                echo "\t\t\t\t\t\t<li> <a class='audycja' onclick='linkTo(
\t\t\t\t\t\t\t";
                // line 18
                if (twig_in_filter("powtorka", $this->getAttribute($this->getAttribute($context["a"], "taxonomy", array()), "category", array()))) {
                    // line 19
                    echo "\t\t\t\t\t\t\t\t\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "parent", array()), "parent", array()), "parent", array()), "link", array());
                    echo "\",\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "parent", array()), "parent", array()), "slug", array());
                    echo "/";
                    echo $this->getAttribute($this->getAttribute($context["a"], "parent", array()), "slug", array());
                    echo "\"
\t\t\t\t\t\t\t";
                } else {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "parent", array()), "parent", array()), "link", array());
                    echo "\",\"";
                    echo $this->getAttribute($this->getAttribute($context["a"], "parent", array()), "slug", array());
                    echo "/";
                    echo $this->getAttribute($context["a"], "slug", array());
                    echo "\"
\t\t\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t)'>
\t\t\t\t\t\t<span class=\"godziny\"> ";
                // line 24
                echo $this->getAttribute($this->getAttribute($context["a"], "header", array()), "startaud", array());
                echo " - ";
                echo $this->getAttribute($this->getAttribute($context["a"], "header", array()), "koniecaud", array());
                echo " </span>
\t\t\t\t\t\t<span class=\"nazwa\"> ";
                // line 25
                echo $this->getAttribute($context["a"], "title", array());
                echo " </span>
\t\t\t\t\t\t</a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['s'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "ramowka.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  105 => 28,  96 => 25,  90 => 24,  87 => 23,  77 => 21,  67 => 19,  65 => 18,  62 => 17,  57 => 16,  55 => 15,  50 => 13,  46 => 11,  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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

{% block content %}
\t<div class=\"grid\">
\t\t<div class=\"grid-box-1-1 article-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"title-box\"><div class=\"back-button\"></div><h2>{{ page.title }}</h2></div>
\t\t\t</div>
\t\t</div>
\t\t{% for s, d in {'Mon':'Poniedziałek', 'Tue':'Wtorek', 'Wed':'Środa', 'Thu':'Czwartek', 'Fri':'Piątek', 'Sat':'Sobota', 'Sun':'Niedziela'} %}
\t\t<div class=\"grid-box-1-3 ramowka-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"title-box\"><h2>{{ d }}</h2></div>
\t\t\t\t<ul class='ramowka-lista'>
\t\t\t\t\t{% set audycje = page.collection({'items': {'@taxonomy': {'category': 'audycja', 'tag': s }}, 'order': {'by': 'header.startaud', 'dir': 'asc' }}) %}
\t\t\t\t\t{% for a in audycje %}
\t\t\t\t\t\t<li> <a class='audycja' onclick='linkTo(
\t\t\t\t\t\t\t{% if 'powtorka' in a.taxonomy.category %}
\t\t\t\t\t\t\t\t\"{{ a.parent.parent.parent.link }}\",\"{{ a.parent.parent.slug }}/{{ a.parent.slug }}\"
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\"{{ a.parent.parent.link }}\",\"{{ a.parent.slug }}/{{ a.slug }}\"
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t)'>
\t\t\t\t\t\t<span class=\"godziny\"> {{ a.header.startaud }} - {{ a.header.koniecaud }} </span>
\t\t\t\t\t\t<span class=\"nazwa\"> {{ a.title }} </span>
\t\t\t\t\t\t</a></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t{% endfor %}
\t</div>
{% endblock %}
", "ramowka.html.twig", "/var/www/html/html/user/themes/raktywne/templates/ramowka.html.twig");
    }
}
