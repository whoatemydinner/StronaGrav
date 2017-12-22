<?php

/* audycje.html.twig */
class __TwigTemplate_964616b5d7e8bad90f2327b8b3b6f0251b46ff11ebd6ff5949c84b34d9f38404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("miniatures.html.twig", "audycje.html.twig", 1);
        $this->blocks = array(
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
    public function block_lowertitle($context, array $blocks = array())
    {
        echo " ";
        echo $this->getAttribute((isset($context["n"]) ? $context["n"] : null), "title", array());
        echo " ";
    }

    public function getTemplateName()
    {
        return "audycje.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  11 => 1,);
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

{% block lowertitle %} {{ n.title }} {% endblock %}
", "audycje.html.twig", "/var/www/html/html/user/themes/raktywne/templates/audycje.html.twig");
    }
}
