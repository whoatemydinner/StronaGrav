<?php

/* radiowiec.html.twig */
class __TwigTemplate_0161cbae545be9bc12988978260a1d36e8b94d98ae4187ddbc279d795a3e8b3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("radiowiec.html.twig", "radiowiec.html.twig", 1, "903726372")->display($context);
    }

    public function getTemplateName()
    {
        return "radiowiec.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'default.html.twig' %}
{% set col = page.collection({'items': {'@page.children': '/radio/audycje'},'order': {'by': 'title', 'dir': 'asc'}}) %}
{% set audycje = page.collection() %}
{% for p in col %}
\t{% if page.url in p.header.ludzie %}
\t\t{% set audycje = audycje.addPage(p) %}
\t{% endif %}
{% endfor %}
{% block additional %}
<h2>{{ page.header.rola }}</h2>
{% if audycje is not empty %}
<div class=\"title-box\"><h2>Audycje</h2></div>
<ul class='ramowka-lista'>
{% for p in audycje %}
\t\t<li><a onclick=\"linkTo('/radio','audycje/{{ p.slug }}')\">{{ p.title }}</a></li>
{% endfor %}
</ul>
{% endif %}
{% endblock %}
{% endembed %}
", "radiowiec.html.twig", "/var/www/html/html/user/themes/raktywne/templates/radiowiec.html.twig");
    }
}


/* radiowiec.html.twig */
class __TwigTemplate_0161cbae545be9bc12988978260a1d36e8b94d98ae4187ddbc279d795a3e8b3b_903726372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("default.html.twig", "radiowiec.html.twig", 1);
        $this->blocks = array(
            'additional' => array($this, 'block_additional'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["col"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@page.children" => "/radio/audycje"), "order" => array("by" => "title", "dir" => "asc"))), "method");
        // line 3
        $context["audycje"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["col"]) ? $context["col"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 5
            if (twig_in_filter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), $this->getAttribute($this->getAttribute($context["p"], "header", array()), "ludzie", array()))) {
                // line 6
                $context["audycje"] = $this->getAttribute((isset($context["audycje"]) ? $context["audycje"] : null), "addPage", array(0 => $context["p"]), "method");
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_additional($context, array $blocks = array())
    {
        // line 10
        echo "<h2>";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "rola", array());
        echo "</h2>
";
        // line 11
        if ( !twig_test_empty((isset($context["audycje"]) ? $context["audycje"] : null))) {
            // line 12
            echo "<div class=\"title-box\"><h2>Audycje</h2></div>
<ul class='ramowka-lista'>
";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["audycje"]) ? $context["audycje"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 15
                echo "\t\t<li><a onclick=\"linkTo('/radio','audycje/";
                echo $this->getAttribute($context["p"], "slug", array());
                echo "')\">";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "radiowiec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 17,  127 => 15,  123 => 14,  119 => 12,  117 => 11,  112 => 10,  109 => 9,  105 => 1,  98 => 6,  96 => 5,  92 => 4,  90 => 3,  88 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'default.html.twig' %}
{% set col = page.collection({'items': {'@page.children': '/radio/audycje'},'order': {'by': 'title', 'dir': 'asc'}}) %}
{% set audycje = page.collection() %}
{% for p in col %}
\t{% if page.url in p.header.ludzie %}
\t\t{% set audycje = audycje.addPage(p) %}
\t{% endif %}
{% endfor %}
{% block additional %}
<h2>{{ page.header.rola }}</h2>
{% if audycje is not empty %}
<div class=\"title-box\"><h2>Audycje</h2></div>
<ul class='ramowka-lista'>
{% for p in audycje %}
\t\t<li><a onclick=\"linkTo('/radio','audycje/{{ p.slug }}')\">{{ p.title }}</a></li>
{% endfor %}
</ul>
{% endif %}
{% endblock %}
{% endembed %}
", "radiowiec.html.twig", "/var/www/html/html/user/themes/raktywne/templates/radiowiec.html.twig");
    }
}
