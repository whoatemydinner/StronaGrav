<?php

/* plyta.html.twig */
class __TwigTemplate_1526b2dfc349f9d168b225d42f6eb8ac26e8d5ff82cb7e0bf9b52aaa1a432f95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "plyta.html.twig", 1);
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
        // line 2
        if ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "/")) == 3)) {
            // line 3
            $context["base_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
        } elseif ((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute(        // line 4
(isset($context["page"]) ? $context["page"] : null), "url", array()), "/")) == 4)) {
            // line 5
            $context["base_url"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "parent", array()), "url", array());
            // line 6
            $context["sub_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
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
        echo "></img></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"article-containter\">
\t\t\t\t    ";
        // line 20
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"grid-box-1-3 article-photo\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\" style='background-image: url(";
        // line 26
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "display_image", array())), "name", array()), array(), "array"), "display", array(0 => "thumbnail"), "method"), "cropZoom", array(0 => 400, 1 => 400), "method"), "url", array(), "method");
        echo ")'></div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "plyta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  67 => 20,  61 => 17,  57 => 16,  53 => 15,  48 => 13,  43 => 10,  40 => 9,  36 => 1,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
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
\t{% set sub_url = page.parent.url %}
{% endif %}

{% block content %}
\t<div class=\"grid\">
\t\t<div class=\"grid-box-2-3 article-box\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"title-box\"><h2>{{ page.title }}</h2>
\t\t\t\t<div class=\"back-button\" onclick='linkTo(
\t\t\t\t\"{{ base_url }}\",
\t\t\t\t\"{{ sub_url }}\"
\t\t\t\t)'><img src={{ url('theme://images/back-green.svg') }}></img></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"article-containter\">
\t\t\t\t    {{ page.content }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"grid-box-1-3 article-photo\">
\t\t\t<div class=\"grid-box-content\">
\t\t\t\t<div class=\"grid-box-bg\" style='background-image: url({{ page.media[page.header.display_image|first.name].display('thumbnail').cropZoom(400,400).url() }})'></div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "plyta.html.twig", "/var/www/html/html/user/themes/raktywne/templates/plyta.html.twig");
    }
}
