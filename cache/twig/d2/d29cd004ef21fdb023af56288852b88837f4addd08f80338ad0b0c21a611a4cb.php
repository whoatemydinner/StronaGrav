<?php

/* ludzie.html.twig */
class __TwigTemplate_845c1855ef0d71a215bf03b75034947b35c24fb9d7c7ef2a21f377fc50c596aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("miniatures.html.twig", "ludzie.html.twig", 1);
        $this->blocks = array(
            'uppertitle' => array($this, 'block_uppertitle'),
            'lowertitle' => array($this, 'block_lowertitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "miniatures.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_uppertitle($context, array $blocks = array())
    {
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["n"]) ? $context["n"] : null), "header", array()), "rola", array());
        echo " ";
    }

    // line 4
    public function block_lowertitle($context, array $blocks = array())
    {
        echo " ";
        echo $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "title", array());
        echo " ";
    }

    public function getTemplateName()
    {
        return "ludzie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'miniatures.html.twig' %}

{% block uppertitle %} {{ n.header.rola }} {% endblock %}
{% block lowertitle %} {{ n.title }} {% endblock %}
", "ludzie.html.twig", "/var/www/html/html/user/themes/raktywne/templates/ludzie.html.twig");
    }
}
