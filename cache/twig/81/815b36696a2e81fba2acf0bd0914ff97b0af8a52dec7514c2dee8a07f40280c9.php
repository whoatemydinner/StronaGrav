<?php

/* forms/fields/file/file.html.twig */
class __TwigTemplate_34f7fd4e3a1d5559c5cb8223987d360aee88e41184e36c1d8c4377c5398afdce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/file/file.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["defaults"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "form", array());
        // line 3
        $context["files"] = twig_array_merge($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "files", array()), ((array_key_exists("field", $context)) ? (_twig_default_filter((isset($context["field"]) ? $context["field"] : null), array())) : (array())));
        // line 4
        $context["limit"] = (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? (1) : ($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "limit", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 58
    public function block_input($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $context["page_can_upload"] = ((isset($context["exists"]) ? $context["exists"] : null) || ((((isset($context["type"]) ? $context["type"] : null) == "page") &&  !(isset($context["exists"]) ? $context["exists"] : null)) &&  !((is_string($__internal_1f15259d2c9b73f9fc9570c14a636773ba283a4aaf67b2fab77999ef80bea685 = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "destination", array())) && is_string($__internal_0f6a3541731da43c503a322b0c00db4e05d0598aa79ea5a7ac58c5bd5f388bc3 = "@self") && ('' === $__internal_0f6a3541731da43c503a322b0c00db4e05d0598aa79ea5a7ac58c5bd5f388bc3 || 0 === strpos($__internal_1f15259d2c9b73f9fc9570c14a636773ba283a4aaf67b2fab77999ef80bea685, $__internal_0f6a3541731da43c503a322b0c00db4e05d0598aa79ea5a7ac58c5bd5f388bc3))) || (is_string($__internal_c5ddb33908a7cea0a39c92889048e4ad8f4c6b563b2d8a09f530e0731f00548c = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "destination", array())) && is_string($__internal_9bce6405d28b3eee29c383608345f3c89f3fcdbbd651e323e6078f1d4c997cbc = "self@") && ('' === $__internal_9bce6405d28b3eee29c383608345f3c89f3fcdbbd651e323e6078f1d4c997cbc || 0 === strpos($__internal_c5ddb33908a7cea0a39c92889048e4ad8f4c6b563b2d8a09f530e0731f00548c, $__internal_9bce6405d28b3eee29c383608345f3c89f3fcdbbd651e323e6078f1d4c997cbc))))));
        // line 60
        echo "    ";
        if (( !array_key_exists("type", $context) || (isset($context["page_can_upload"]) ? $context["page_can_upload"] : null))) {
            // line 61
            echo "
    ";
            // line 62
            $context["settings"] = array("name" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "paramName" => ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . (($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "multiple", array())) ? ("[]") : (""))), "limit" => (isset($context["limit"]) ? $context["limit"] : null), "filesize" => (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "media", array()), "upload_limit", array()) / 1024) / 1024), "accept" => $this->getAttribute((isset($context["files"]) ? $context["files"] : null), "accept", array()));
            // line 63
            echo "
    <div class=\"form-input-wrapper dropzone files-upload ";
            // line 64
            if ( !($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fancy", array()) === false)) {
                echo "form-input-file";
            }
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array()), "xlarge")) : ("xlarge")), "html", null, true);
            echo "\" data-grav-file-settings=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["settings"]) ? $context["settings"] : null)), "html_attr");
            echo "\" ";
            if ((isset($context["file_url_add"]) ? $context["file_url_add"] : null)) {
                echo "data-file-url-add=\"";
                echo twig_escape_filter($this->env, (isset($context["file_url_add"]) ? $context["file_url_add"] : null), "html", null, true);
                echo "\"";
            }
            echo " ";
            if ((isset($context["file_url_remove"]) ? $context["file_url_remove"] : null)) {
                echo "data-file-url-remove=\"";
                echo twig_escape_filter($this->env, (isset($context["file_url_remove"]) ? $context["file_url_remove"] : null), "html", null, true);
                echo "\"";
            }
            echo ">
        <input
            ";
            // line 67
            echo "            ";
            $this->displayBlock('input_attributes', $context, $blocks);
            // line 75
            echo "        />

        ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["path"] => $context["file"]) {
                // line 78
                echo "            ";
                echo $this->getAttribute($this, "preview", array(0 => $context["path"], 1 => $context["file"], 2 => $context), "method");
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "        ";
            $this->loadTemplate("forms/fields/hidden/hidden.html.twig", "forms/fields/file/file.html.twig", 80)->display(array_merge($context, array("field" => array("name" => ("_json." . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "value" => twig_jsonencode_filter((isset($context["value"]) ? $context["value"] : null)))));
            // line 81
            echo "    </div>

    ";
        } else {
            // line 84
            echo "        <span class=\"note\">";
            echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANNOT_ADD_FILES_PAGE_NOT_SAVED");
            echo "</span>
    ";
        }
    }

    // line 67
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 68
        echo "                type=\"file\"
                ";
        // line 69
        if ($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "multiple", array())) {
            echo "multiple=\"multiple\"";
        }
        // line 70
        echo "                ";
        if ($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "accept", array())) {
            echo "accept=\"";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "accept", array()), ","), "html", null, true);
            echo "\"";
        }
        // line 71
        echo "                ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 72
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "random_name", array())) {
            echo "random=\"true\"";
        }
        // line 73
        echo "                ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
            ";
    }

    // line 6
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            ob_start();
            // line 8
            echo "        ";
            $context["kilobyte"] = 1024;
            // line 9
            echo "        ";
            $context["megabyte"] = ((isset($context["kilobyte"]) ? $context["kilobyte"] : null) * 1024);
            // line 10
            echo "        ";
            $context["gigabyte"] = ((isset($context["megabyte"]) ? $context["megabyte"] : null) * 1024);
            // line 11
            echo "        ";
            $context["terabyte"] = ((isset($context["gigabyte"]) ? $context["gigabyte"] : null) * 1024);
            // line 12
            echo "
        ";
            // line 13
            if (((isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["kilobyte"]) ? $context["kilobyte"] : null))) {
                // line 14
                echo "            ";
                echo twig_escape_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) . " B"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 15
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["megabyte"]) ? $context["megabyte"] : null))) {
                // line 16
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["kilobyte"]) ? $context["kilobyte"] : null)), 2, ".") . " KB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 17
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["gigabyte"]) ? $context["gigabyte"] : null))) {
                // line 18
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["megabyte"]) ? $context["megabyte"] : null)), 2, ".") . " MB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 19
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["terabyte"]) ? $context["terabyte"] : null))) {
                // line 20
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["gigabyte"]) ? $context["gigabyte"] : null)), 2, ".") . " GB"), "html", null, true);
                echo "
        ";
            } else {
                // line 22
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["terabyte"]) ? $context["terabyte"] : null)), 2, ".") . " TB"), "html", null, true);
                echo "
        ";
            }
            // line 24
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 27
    public function getpreview($__path__ = null, $__value__ = null, $__global__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $__path__,
            "value" => $__value__,
            "global" => $__global__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 28
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : null)) {
                // line 29
                echo "        ";
                $context["uri"] = $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "grav", array()), "uri", array());
                // line 30
                echo "        ";
                $context["files"] = $this->getAttribute((isset($context["global"]) ? $context["global"] : null), "files", array());
                // line 31
                echo "        ";
                $context["config"] = $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "grav", array()), "config", array());
                // line 32
                echo "        ";
                $context["route"] = $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "context", array()), "route", array(), "method");
                // line 33
                echo "
        ";
                // line 34
                $context["type"] = (($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "blueprint_type", array())) ? ($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "blueprint_type", array())) : ((($this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "admin", array()), "location", array())) ? ($this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "admin", array()), "location", array())) : ("config"))));
                // line 35
                echo "
        ";
                // line 36
                $context["blueprint_name"] = $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "blueprints", array()), "getFilename", array());
                // line 37
                echo "        ";
                if (((isset($context["type"]) ? $context["type"] : null) == "pages")) {
                    // line 38
                    echo "            ";
                    $context["blueprint_name"] = (((isset($context["type"]) ? $context["type"] : null) . "/") . (isset($context["blueprint_name"]) ? $context["blueprint_name"] : null));
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "        ";
                $context["blueprint"] = base64_encode((isset($context["blueprint_name"]) ? $context["blueprint_name"] : null));
                // line 41
                echo "        ";
                $context["real_path"] = $this->getAttribute($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "admin", array()), "getPagePathFromToken", array(0 => (isset($context["path"]) ? $context["path"] : null)), "method");
                // line 42
                echo "        ";
                $context["remove"] = (($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "file_url_remove", array())) ? ($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "file_url_remove", array())) : (($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "base_url_relative", array()) . "/media.json")));
                // line 43
                echo "        ";
                $context["remove"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => (((((((((((((((((((((                // line 44
(isset($context["remove"]) ? $context["remove"] : null) . "/route") . $this->getAttribute($this->getAttribute(                // line 45
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . base64_encode((($this->getAttribute((isset($context["global"]) ? $context["global"] : null), "base_path", array()) . "/") . (isset($context["real_path"]) ? $context["real_path"] : null)))) . "/task") . $this->getAttribute($this->getAttribute(                // line 46
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "removeFileFromBlueprint") . "/proute") . $this->getAttribute($this->getAttribute(                // line 47
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . base64_encode((isset($context["route"]) ? $context["route"] : null))) . "/blueprint") . $this->getAttribute($this->getAttribute(                // line 48
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . (isset($context["blueprint"]) ? $context["blueprint"] : null)) . "/type") . $this->getAttribute($this->getAttribute(                // line 49
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . (isset($context["type"]) ? $context["type"] : null)) . "/field") . $this->getAttribute($this->getAttribute(                // line 50
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . $this->getAttribute((isset($context["files"]) ? $context["files"] : null), "name", array())) . "/path") . $this->getAttribute($this->getAttribute(                // line 51
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . base64_encode($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "path", array()))), 1 => "admin-form", 2 => "admin-nonce"), "method");
                // line 52
                echo "
        ";
                // line 53
                $context["file"] = twig_array_merge((isset($context["value"]) ? $context["value"] : null), array("remove" => (isset($context["remove"]) ? $context["remove"] : null), "path" => ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "rootUrl", array()) == "/")) ? ("/") : ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "rootUrl", array()) . "/") . (isset($context["real_path"]) ? $context["real_path"] : null))))));
                // line 54
                echo "        <div class=\"hidden\" data-file=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["file"]) ? $context["file"] : null)), "html_attr");
                echo "\"></div>
    ";
            }
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
        return "forms/fields/file/file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 54,  297 => 53,  294 => 52,  292 => 51,  291 => 50,  290 => 49,  289 => 48,  288 => 47,  287 => 46,  286 => 45,  285 => 44,  283 => 43,  280 => 42,  277 => 41,  274 => 40,  271 => 39,  268 => 38,  265 => 37,  263 => 36,  260 => 35,  258 => 34,  255 => 33,  252 => 32,  249 => 31,  246 => 30,  243 => 29,  240 => 28,  226 => 27,  210 => 24,  204 => 22,  198 => 20,  196 => 19,  191 => 18,  189 => 17,  184 => 16,  182 => 15,  177 => 14,  175 => 13,  172 => 12,  169 => 11,  166 => 10,  163 => 9,  160 => 8,  158 => 7,  146 => 6,  139 => 73,  134 => 72,  129 => 71,  122 => 70,  118 => 69,  115 => 68,  112 => 67,  104 => 84,  99 => 81,  96 => 80,  87 => 78,  83 => 77,  79 => 75,  76 => 67,  53 => 64,  50 => 63,  48 => 62,  45 => 61,  42 => 60,  39 => 59,  36 => 58,  32 => 1,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}
{% set defaults = config.plugins.form %}
{% set files = defaults.files|merge(field|default([])) %}
{% set limit = not field.multiple ? 1 : files.limit %}

{% macro bytesToSize(bytes) -%}
    {% spaceless %}
        {% set kilobyte = 1024 %}
        {% set megabyte = kilobyte * 1024 %}
        {% set gigabyte = megabyte * 1024 %}
        {% set terabyte = gigabyte * 1024 %}

        {% if bytes < kilobyte %}
            {{ bytes ~ ' B' }}
        {% elseif bytes < megabyte %}
            {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}
        {% elseif bytes < gigabyte %}
            {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}
        {% elseif bytes < terabyte %}
            {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}
        {% else %}
            {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}
        {% endif %}
    {% endspaceless %}
{%- endmacro %}

{% macro preview(path, value, global) %}
    {% if value %}
        {% set uri = global.grav.uri %}
        {% set files = global.files %}
        {% set config = global.grav.config %}
        {% set route = global.context.route() %}

        {% set type = global.blueprint_type ? global.blueprint_type : global.admin.location ? global.admin.location : 'config' %}

        {% set blueprint_name = global.blueprints.getFilename %}
        {% if type == 'pages' %}
            {% set blueprint_name = type ~ '/' ~ blueprint_name %}
        {% endif %}
        {% set blueprint = base64_encode(blueprint_name) %}
        {% set real_path = global.admin.getPagePathFromToken(path) %}
        {% set remove = global.file_url_remove ? global.file_url_remove : (global.base_url_relative ~ '/media.json') %}
        {% set remove = uri.addNonce(
        remove ~
        '/route' ~ config.system.param_sep ~ base64_encode(global.base_path ~ '/' ~ real_path) ~
        '/task' ~ config.system.param_sep ~ 'removeFileFromBlueprint' ~
        '/proute' ~ config.system.param_sep ~ base64_encode(route) ~
        '/blueprint' ~ config.system.param_sep ~ blueprint ~
        '/type' ~ config.system.param_sep ~ type ~
        '/field' ~ config.system.param_sep ~ files.name ~
        '/path' ~ config.system.param_sep ~ base64_encode(value.path), 'admin-form', 'admin-nonce') %}

        {% set file = value|merge({remove: remove, path: (uri.rootUrl == '/' ? '/' : uri.rootUrl ~ '/' ~ real_path) }) %}
        <div class=\"hidden\" data-file=\"{{ file|json_encode|e('html_attr') }}\"></div>
    {% endif %}
{% endmacro %}

{% block input %}
    {% set page_can_upload = exists or (type == 'page' and not exists and not (field.destination starts with '@self' or field.destination starts with 'self@')) %}
    {% if type is not defined or page_can_upload %}

    {% set settings = {name: field.name, paramName: (scope ~ field.name)|fieldName ~ (files.multiple ? '[]' : ''), limit: limit, filesize: (config.system.media.upload_limit / 1024 / 1024), accept: files.accept} %}

    <div class=\"form-input-wrapper dropzone files-upload {% if field.fancy is not same as(false) %}form-input-file{% endif %} {{ field.size|default('xlarge') }}\" data-grav-file-settings=\"{{ settings|json_encode|e('html_attr') }}\" {% if file_url_add %}data-file-url-add=\"{{ file_url_add }}\"{% endif %} {% if file_url_remove %}data-file-url-remove=\"{{ file_url_remove }}\"{% endif %}>
        <input
            {# required attribute structures #}
            {% block input_attributes %}
                type=\"file\"
                {% if files.multiple %}multiple=\"multiple\"{% endif %}
                {% if files.accept %}accept=\"{{ files.accept|join(',') }}\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.random_name %}random=\"true\"{% endif %}
                {{ parent() }}
            {% endblock %}
        />

        {% for path, file in value %}
            {{ _self.preview(path, file, _context) }}
        {% endfor %}
        {% include 'forms/fields/hidden/hidden.html.twig' with {field: {name: '_json.' ~ field.name}, value:value|raw|json_encode} %}
    </div>

    {% else %}
        <span class=\"note\">{{ \"PLUGIN_ADMIN.CANNOT_ADD_FILES_PAGE_NOT_SAVED\"|tu|raw }}</span>
    {% endif %}
{% endblock %}
", "forms/fields/file/file.html.twig", "/var/www/html/html/user/plugins/admin/themes/grav/templates/forms/fields/file/file.html.twig");
    }
}
