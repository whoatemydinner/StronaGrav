<?php

/* partials/mobilenavigation.html.twig */
class __TwigTemplate_3c2e487e7ed01678c7511f0d46ea8c76890dc75e64f6cb7d3668aff415bbc5d2 extends Twig_Template
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
        echo "<a onClick='toggleMobile()'><img class=\"mobile-nav-button\" src=";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/mobilnav.svg");
        echo "></img></a>
";
        // line 12
        echo "<div class=\"mobile-menu\">
<ul>
\t";
        // line 14
        echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
        echo "
</ul>
</div>
";
    }

    // line 2
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
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
                // line 4
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("selected") : (""));
                // line 5
                echo "            <li id=\"nav-tab-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo " nav-tab\" dest=\"";
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">
\t\t<a>
                    ";
                // line 7
                echo $this->getAttribute($context["p"], "menu", array());
                echo "
                </a>
            </li>
    ";
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
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/mobilenavigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 7,  69 => 5,  66 => 4,  48 => 3,  36 => 2,  28 => 14,  24 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a onClick='toggleMobile()'><img class=\"mobile-nav-button\" src={{ url('theme://images/mobilnav.svg') }}></img></a>
{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = p.active or p.activeChild ? 'selected' : '' %}
            <li id=\"nav-tab-{{ loop.index }}\" class=\"{{ current_page }} nav-tab\" dest=\"{{ p.url }}\">
\t\t<a>
                    {{ p.menu }}
                </a>
            </li>
    {% endfor %}
{% endmacro %}
<div class=\"mobile-menu\">
<ul>
\t{{ _self.loop(pages) }}
</ul>
</div>
", "partials/mobilenavigation.html.twig", "/var/www/html/html/user/themes/raktywne/templates/partials/mobilenavigation.html.twig");
    }
}
