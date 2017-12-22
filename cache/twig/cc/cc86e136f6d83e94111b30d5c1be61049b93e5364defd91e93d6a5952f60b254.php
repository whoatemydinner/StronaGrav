<?php

/* error.html.twig */
class __TwigTemplate_21f9fefc21d263cecc7b0b930ce2c284d2f7236833d9e2b3cf57797152825a66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'error' => array($this, 'block_error'),
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
    public function block_error($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"lead text-center\">
        <h1>¯\\_(ツ)_/¯</h1>
        ";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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

{% block error %}
    <div class=\"lead text-center\">
        <h1>¯\\_(ツ)_/¯</h1>
        {{ page.content }}
    </div>
{% endblock %}
", "error.html.twig", "/var/www/html/html/user/themes/raktywne/templates/error.html.twig");
    }
}
