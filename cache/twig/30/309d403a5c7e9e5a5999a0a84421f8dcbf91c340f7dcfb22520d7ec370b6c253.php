<?php

/* audycja.html.twig */
class __TwigTemplate_8d00f4199c2b4346a17436af8db1ef4dcb3f6bcfea3db5f4cd7e44c8a37186c2 extends Twig_Template
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
        $this->loadTemplate("audycja.html.twig", "audycja.html.twig", 1, "1823996725")->display($context);
    }

    public function getTemplateName()
    {
        return "audycja.html.twig";
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

{% set ludzie = page.collection() %}
{% for p in page.header.ludzie %}
\t{% set radiowiec = page.find(p) %}
\t{% set ludzie = ludzie.addPage(radiowiec) %}
{% endfor %}

{% set days = {'Mon':'Poniedziałek','Tue':'Wtorek','Wed':'Środa','Thu':'Czwartek','Fri':'Piątek','Sat':'Sobota','Sun':'Niedziela'} %}
{% set auddays = page.taxonomy.tag %}
{% set superarray = ['ojvej'] %}
{% for a,b in days %}
\t{% if a in auddays %}
\t\t{% if superarray|first != 'ojvej' %}
\t\t\t{% set superarray = superarray|merge([b]) %}
\t\t{% else %}
\t\t\t{% set superarray = [b] %}
\t\t{% endif %}
\t{% endif %}
{% endfor %}
{% set dzieci = page.collection({'items': '@self.children'}) %}
{% set superarrayy = {'ojvej':'ojvej'} %}
{% for p in dzieci %}
\t{% for a,b in days %}
\t\t{% if a in p.taxonomy.tag %}
\t\t\t{% set godziny = p.header.startaud~'-'~p.header.koniecaud %}
\t\t\t{% if superarrayy|first == 'ojvej' %}
\t\t\t\t{% set superarrayy = {(godziny) : (b)} %}
\t\t\t{% else %}
\t\t\t\t{% if superarrayy[godziny] is not empty %}
\t\t\t\t\t{% set superarrayy = superarrayy|merge({(godziny) : superarrayy[godziny]~', '~b}) %}
\t\t\t\t{% else %}
\t\t\t\t\t{% set superarrayy = superarrayy|merge({(godziny) : b}) %}
\t\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t\t
\t\t{% endif %}
\t{% endfor %}
{% endfor %}
{% set finalarray = {'ojvej':'ojvej'} %}

{% block additional %}
\t<div class=\"title-box\"><h2>Na żywo</h2></div>
\t<div class=\"ramowka-box\">
\t\t<div class=\"title-box\"><h2>
\t\t\t{% for d in superarray %}
\t\t\t\t{{d}}{% if d != superarray|last %}, {% endif %}
\t\t\t{% endfor %}
\t\t</h2></div>
\t\t<ul class='ramowka-lista'>
\t\t\t<li> <span class='godziny'> {{page.header.startaud}} - {{page.header.koniecaud}} </span>
\t\t</ul>
\t</div>
\t{% if superarrayy|first != 'ojvej' %}\t
\t<div class=\"title-box\"><h2>Powtórki</h2></div>
\t<div class=\"ramowka-box\">
\t\t{% for a,b in superarrayy %}
\t\t\t<div class=\"title-box\"><h2>{{b}}</h2></div>
\t\t\t<ul class='ramowka-lista'>
\t\t\t\t<li><span class='godziny'>{{a}}</span>
\t\t\t</ul>
\t\t{% endfor %}
\t</div>
\t{% endif %}
\t<div class=\"title-box\"><h2>Redaktorzy</h2></div>
\t<ul class='ramowka-lista'>
\t{% for p in ludzie %}
\t\t<li><a onclick=\"linkTo('/radio','radiowcy/{{ p.slug }}')\">{{ p.title }}</a></li>
\t{% endfor %}
\t</ul>

{% endblock %}
{% endembed %}
", "audycja.html.twig", "/var/www/html/html/user/themes/raktywne/templates/audycja.html.twig");
    }
}


/* audycja.html.twig */
class __TwigTemplate_8d00f4199c2b4346a17436af8db1ef4dcb3f6bcfea3db5f4cd7e44c8a37186c2_1823996725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("default.html.twig", "audycja.html.twig", 1);
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
        // line 3
        $context["ludzie"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "ludzie", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 5
            $context["radiowiec"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => $context["p"]), "method");
            // line 6
            $context["ludzie"] = $this->getAttribute((isset($context["ludzie"]) ? $context["ludzie"] : null), "addPage", array(0 => (isset($context["radiowiec"]) ? $context["radiowiec"] : null)), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        $context["days"] = array("Mon" => "Poniedziałek", "Tue" => "Wtorek", "Wed" => "Środa", "Thu" => "Czwartek", "Fri" => "Piątek", "Sat" => "Sobota", "Sun" => "Niedziela");
        // line 10
        $context["auddays"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array());
        // line 11
        $context["superarray"] = array(0 => "ojvej");
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["days"]) ? $context["days"] : null));
        foreach ($context['_seq'] as $context["a"] => $context["b"]) {
            // line 13
            if (twig_in_filter($context["a"], (isset($context["auddays"]) ? $context["auddays"] : null))) {
                // line 14
                if ((twig_first($this->env, (isset($context["superarray"]) ? $context["superarray"] : null)) != "ojvej")) {
                    // line 15
                    $context["superarray"] = twig_array_merge((isset($context["superarray"]) ? $context["superarray"] : null), array(0 => $context["b"]));
                } else {
                    // line 17
                    $context["superarray"] = array(0 => $context["b"]);
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['a'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        $context["dzieci"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => "@self.children")), "method");
        // line 22
        $context["superarrayy"] = array("ojvej" => "ojvej");
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dzieci"]) ? $context["dzieci"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["days"]) ? $context["days"] : null));
            foreach ($context['_seq'] as $context["a"] => $context["b"]) {
                // line 25
                if (twig_in_filter($context["a"], $this->getAttribute($this->getAttribute($context["p"], "taxonomy", array()), "tag", array()))) {
                    // line 26
                    $context["godziny"] = (($this->getAttribute($this->getAttribute($context["p"], "header", array()), "startaud", array()) . "-") . $this->getAttribute($this->getAttribute($context["p"], "header", array()), "koniecaud", array()));
                    // line 27
                    if ((twig_first($this->env, (isset($context["superarrayy"]) ? $context["superarrayy"] : null)) == "ojvej")) {
                        // line 28
                        $context["superarrayy"] = array((isset($context["godziny"]) ? $context["godziny"] : null) => $context["b"]);
                    } else {
                        // line 30
                        if ( !twig_test_empty($this->getAttribute((isset($context["superarrayy"]) ? $context["superarrayy"] : null), (isset($context["godziny"]) ? $context["godziny"] : null), array(), "array"))) {
                            // line 31
                            $context["superarrayy"] = twig_array_merge((isset($context["superarrayy"]) ? $context["superarrayy"] : null), array((isset($context["godziny"]) ? $context["godziny"] : null) => (($this->getAttribute((isset($context["superarrayy"]) ? $context["superarrayy"] : null), (isset($context["godziny"]) ? $context["godziny"] : null), array(), "array") . ", ") . $context["b"])));
                        } else {
                            // line 33
                            $context["superarrayy"] = twig_array_merge((isset($context["superarrayy"]) ? $context["superarrayy"] : null), array((isset($context["godziny"]) ? $context["godziny"] : null) => $context["b"]));
                        }
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['a'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context["finalarray"] = array("ojvej" => "ojvej");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_additional($context, array $blocks = array())
    {
        // line 43
        echo "\t<div class=\"title-box\"><h2>Na żywo</h2></div>
\t<div class=\"ramowka-box\">
\t\t<div class=\"title-box\"><h2>
\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["superarray"]) ? $context["superarray"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 47
            echo "\t\t\t\t";
            echo $context["d"];
            if (($context["d"] != twig_last($this->env, (isset($context["superarray"]) ? $context["superarray"] : null)))) {
                echo ", ";
            }
            // line 48
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t</h2></div>
\t\t<ul class='ramowka-lista'>
\t\t\t<li> <span class='godziny'> ";
        // line 51
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "startaud", array());
        echo " - ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "koniecaud", array());
        echo " </span>
\t\t</ul>
\t</div>
\t";
        // line 54
        if ((twig_first($this->env, (isset($context["superarrayy"]) ? $context["superarrayy"] : null)) != "ojvej")) {
            echo "\t
\t<div class=\"title-box\"><h2>Powtórki</h2></div>
\t<div class=\"ramowka-box\">
\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["superarrayy"]) ? $context["superarrayy"] : null));
            foreach ($context['_seq'] as $context["a"] => $context["b"]) {
                // line 58
                echo "\t\t\t<div class=\"title-box\"><h2>";
                echo $context["b"];
                echo "</h2></div>
\t\t\t<ul class='ramowka-lista'>
\t\t\t\t<li><span class='godziny'>";
                // line 60
                echo $context["a"];
                echo "</span>
\t\t\t</ul>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['a'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t</div>
\t";
        }
        // line 65
        echo "\t<div class=\"title-box\"><h2>Redaktorzy</h2></div>
\t<ul class='ramowka-lista'>
\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ludzie"]) ? $context["ludzie"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 68
            echo "\t\t<li><a onclick=\"linkTo('/radio','radiowcy/";
            echo $this->getAttribute($context["p"], "slug", array());
            echo "')\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t</ul>

";
    }

    public function getTemplateName()
    {
        return "audycja.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 70,  298 => 68,  294 => 67,  290 => 65,  286 => 63,  277 => 60,  271 => 58,  267 => 57,  261 => 54,  253 => 51,  249 => 49,  243 => 48,  237 => 47,  233 => 46,  228 => 43,  225 => 42,  221 => 1,  219 => 40,  206 => 33,  203 => 31,  201 => 30,  198 => 28,  196 => 27,  194 => 26,  192 => 25,  188 => 24,  184 => 23,  182 => 22,  180 => 21,  172 => 17,  169 => 15,  167 => 14,  165 => 13,  161 => 12,  159 => 11,  157 => 10,  155 => 9,  149 => 6,  147 => 5,  143 => 4,  141 => 3,  19 => 1,);
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

{% set ludzie = page.collection() %}
{% for p in page.header.ludzie %}
\t{% set radiowiec = page.find(p) %}
\t{% set ludzie = ludzie.addPage(radiowiec) %}
{% endfor %}

{% set days = {'Mon':'Poniedziałek','Tue':'Wtorek','Wed':'Środa','Thu':'Czwartek','Fri':'Piątek','Sat':'Sobota','Sun':'Niedziela'} %}
{% set auddays = page.taxonomy.tag %}
{% set superarray = ['ojvej'] %}
{% for a,b in days %}
\t{% if a in auddays %}
\t\t{% if superarray|first != 'ojvej' %}
\t\t\t{% set superarray = superarray|merge([b]) %}
\t\t{% else %}
\t\t\t{% set superarray = [b] %}
\t\t{% endif %}
\t{% endif %}
{% endfor %}
{% set dzieci = page.collection({'items': '@self.children'}) %}
{% set superarrayy = {'ojvej':'ojvej'} %}
{% for p in dzieci %}
\t{% for a,b in days %}
\t\t{% if a in p.taxonomy.tag %}
\t\t\t{% set godziny = p.header.startaud~'-'~p.header.koniecaud %}
\t\t\t{% if superarrayy|first == 'ojvej' %}
\t\t\t\t{% set superarrayy = {(godziny) : (b)} %}
\t\t\t{% else %}
\t\t\t\t{% if superarrayy[godziny] is not empty %}
\t\t\t\t\t{% set superarrayy = superarrayy|merge({(godziny) : superarrayy[godziny]~', '~b}) %}
\t\t\t\t{% else %}
\t\t\t\t\t{% set superarrayy = superarrayy|merge({(godziny) : b}) %}
\t\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t\t
\t\t{% endif %}
\t{% endfor %}
{% endfor %}
{% set finalarray = {'ojvej':'ojvej'} %}

{% block additional %}
\t<div class=\"title-box\"><h2>Na żywo</h2></div>
\t<div class=\"ramowka-box\">
\t\t<div class=\"title-box\"><h2>
\t\t\t{% for d in superarray %}
\t\t\t\t{{d}}{% if d != superarray|last %}, {% endif %}
\t\t\t{% endfor %}
\t\t</h2></div>
\t\t<ul class='ramowka-lista'>
\t\t\t<li> <span class='godziny'> {{page.header.startaud}} - {{page.header.koniecaud}} </span>
\t\t</ul>
\t</div>
\t{% if superarrayy|first != 'ojvej' %}\t
\t<div class=\"title-box\"><h2>Powtórki</h2></div>
\t<div class=\"ramowka-box\">
\t\t{% for a,b in superarrayy %}
\t\t\t<div class=\"title-box\"><h2>{{b}}</h2></div>
\t\t\t<ul class='ramowka-lista'>
\t\t\t\t<li><span class='godziny'>{{a}}</span>
\t\t\t</ul>
\t\t{% endfor %}
\t</div>
\t{% endif %}
\t<div class=\"title-box\"><h2>Redaktorzy</h2></div>
\t<ul class='ramowka-lista'>
\t{% for p in ludzie %}
\t\t<li><a onclick=\"linkTo('/radio','radiowcy/{{ p.slug }}')\">{{ p.title }}</a></li>
\t{% endfor %}
\t</ul>

{% endblock %}
{% endembed %}
", "audycja.html.twig", "/var/www/html/html/user/themes/raktywne/templates/audycja.html.twig");
    }
}
