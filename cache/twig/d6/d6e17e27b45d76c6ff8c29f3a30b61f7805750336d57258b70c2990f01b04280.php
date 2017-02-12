<?php

/* @nucleus/page.html.twig */
class __TwigTemplate_e507b404a4597f8d188a10f5e06096748779495ae91ef43972dac353ba167da3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'page_offcanvas' => array($this, 'block_page_offcanvas'),
            'page_layout' => array($this, 'block_page_layout'),
            'page_top' => array($this, 'block_page_top'),
            'page_bottom' => array($this, 'block_page_bottom'),
            'body_top' => array($this, 'block_body_top'),
            'body_bottom' => array($this, 'block_body_bottom'),
            'page_head' => array($this, 'block_page_head'),
            'page_footer' => array($this, 'block_page_footer'),
            'page' => array($this, 'block_page'),
            'page_body' => array($this, 'block_page_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "debugger", array()), "startTimer", array(0 => "render", 1 => "Rendering page"), "method");
        // line 2
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "setLayout", array(), "method");
        // line 3
        $context["segments"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "segments", array());
        // line 5
        ob_start();
        // line 6
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "hasContent", array(), "method")) {
            // line 7
            echo "        ";
            $this->displayBlock('content', $context, $blocks);
            // line 9
            echo "    ";
        }
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        $context["offcanvas"] = null;
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            if (($this->getAttribute($context["segment"], "type", array()) == "offcanvas")) {
                // line 14
                $context["offcanvas"] = $context["segment"];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        ob_start();
        // line 18
        echo "    ";
        $this->displayBlock('page_offcanvas', $context, $blocks);
        $context["page_offcanvas"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        $context["page_offcanvas"] = ((trim(($context["page_offcanvas"] ?? null))) ? (trim(($context["page_offcanvas"] ?? null))) : (""));
        // line 26
        $context["offcanvas_position"] = ((($context["page_offcanvas"] ?? null)) ? ((($this->getAttribute($this->getAttribute(($context["offcanvas"] ?? null), "attributes", array(), "any", false, true), "position", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["offcanvas"] ?? null), "attributes", array(), "any", false, true), "position", array()), "g-offcanvas-left")) : ("g-offcanvas-left"))) : (""));
        // line 28
        ob_start();
        // line 29
        echo "    ";
        $this->displayBlock('page_layout', $context, $blocks);
        $context["page_layout"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        ob_start();
        // line 37
        echo "    ";
        $this->displayBlock('page_top', $context, $blocks);
        // line 39
        echo "    ";
        echo twig_join_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "getHtml", array(0 => "top"), "method"), "
    ");
        echo "
";
        $context["page_top"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 42
        ob_start();
        // line 43
        echo "    ";
        $this->displayBlock('page_bottom', $context, $blocks);
        // line 45
        echo "    ";
        echo twig_join_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "getHtml", array(0 => "bottom"), "method"), "
    ");
        echo "
";
        $context["page_bottom"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
        ob_start();
        // line 49
        echo "    ";
        $this->displayBlock('body_top', $context, $blocks);
        // line 51
        echo "    ";
        echo twig_join_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "getHtml", array(0 => "body_top"), "method"), "
    ");
        echo "
";
        $context["body_top"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 54
        ob_start();
        // line 55
        echo "    ";
        $this->displayBlock('body_bottom', $context, $blocks);
        // line 57
        echo "    ";
        echo twig_join_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "getHtml", array(0 => "body_bottom"), "method"), "
    ");
        echo "
";
        $context["body_bottom"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 62
        ob_start();
        // line 63
        echo "    ";
        $this->displayBlock('page_head', $context, $blocks);
        $context["page_head"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 68
        ob_start();
        // line 69
        echo "    ";
        $this->displayBlock('page_footer', $context, $blocks);
        // line 73
        echo "
    ";
        // line 74
        echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "debugger", array()), "render", array(), "method");
        echo "
";
        $context["page_footer"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 77
        $this->displayBlock('page', $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "        ";
    }

    // line 18
    public function block_page_offcanvas($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        if (($context["offcanvas"] ?? null)) {
            // line 20
            echo "            ";
            $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute(($context["offcanvas"] ?? null), "type", array())) . ".html.twig"), "@nucleus/page.html.twig", 20)->display(array_merge($context, array("segment" => ($context["offcanvas"] ?? null))));
        }
        // line 22
        echo "    ";
    }

    // line 29
    public function block_page_layout($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            if (($this->getAttribute($context["segment"], "type", array()) != "offcanvas")) {
                // line 31
                echo "        ";
                $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", array())) . ".html.twig"), "@nucleus/page.html.twig", 31)->display(array_merge($context, array("segments" => $this->getAttribute($context["segment"], "children", array()))));
                // line 32
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    ";
    }

    // line 37
    public function block_page_top($context, array $blocks = array())
    {
        // line 38
        echo "    ";
    }

    // line 43
    public function block_page_bottom($context, array $blocks = array())
    {
        // line 44
        echo "    ";
    }

    // line 49
    public function block_body_top($context, array $blocks = array())
    {
        // line 50
        echo "    ";
    }

    // line 55
    public function block_body_bottom($context, array $blocks = array())
    {
        // line 56
        echo "    ";
    }

    // line 63
    public function block_page_head($context, array $blocks = array())
    {
        // line 64
        $this->loadTemplate("partials/page_head.html.twig", "@nucleus/page.html.twig", 64)->display($context);
    }

    // line 69
    public function block_page_footer($context, array $blocks = array())
    {
        // line 70
        echo "        ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", array()), "finalize", array(), "method");
        // line 71
        echo twig_join_filter($this->getAttribute(($context["gantry"] ?? null), "scripts", array(0 => "footer"), "method"), "
    ");
    }

    // line 77
    public function block_page($context, array $blocks = array())
    {
        // line 78
        echo "<!DOCTYPE ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array(), "any", false, true), "page", array(), "any", false, true), "doctype", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array(), "any", false, true), "page", array(), "any", false, true), "doctype", array()), "html")) : ("html"));
        echo ">
<html";
        // line 79
        echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", array()), "htmlAttributes", array());
        echo ">
    ";
        // line 80
        echo ($context["page_head"] ?? null);
        echo "
    ";
        // line 81
        $this->displayBlock('page_body', $context, $blocks);
        // line 100
        echo "
</html>
";
    }

    // line 81
    public function block_page_body($context, array $blocks = array())
    {
        // line 82
        echo "<body";
        echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", array()), "bodyAttributes", array(0 => array("class" => array(0 => ($context["offcanvas_position"] ?? null), 1 => $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", array()), "preset", array()), 2 => ("g-style-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "preset", array()))))), "method");
        echo ">
        ";
        // line 83
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "body", array()), "body_top", array());
        echo "
        ";
        // line 84
        echo ($context["body_top"] ?? null);
        echo "
        ";
        // line 85
        echo ($context["page_offcanvas"] ?? null);
        echo "
        <div id=\"g-page-surround\">
            ";
        // line 87
        if (trim(($context["page_offcanvas"] ?? null))) {
            // line 88
            echo "            <div class=\"g-offcanvas-hide g-offcanvas-toggle\" data-offcanvas-toggle><i class=\"fa fa-fw fa-bars\"></i></div>
            ";
        }
        // line 90
        echo "            ";
        echo ($context["page_top"] ?? null);
        echo "
            ";
        // line 91
        echo ($context["page_layout"] ?? null);
        echo "
            ";
        // line 92
        echo ($context["page_bottom"] ?? null);
        echo "
        </div>
        ";
        // line 94
        echo ($context["body_bottom"] ?? null);
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-assets://js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 96
        echo ($context["page_footer"] ?? null);
        echo "
        ";
        // line 97
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "body", array()), "body_bottom", array());
        echo "
    </body>";
    }

    public function getTemplateName()
    {
        return "@nucleus/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 97,  321 => 96,  317 => 95,  313 => 94,  308 => 92,  304 => 91,  299 => 90,  295 => 88,  293 => 87,  288 => 85,  284 => 84,  280 => 83,  275 => 82,  272 => 81,  266 => 100,  264 => 81,  260 => 80,  256 => 79,  251 => 78,  248 => 77,  243 => 71,  240 => 70,  237 => 69,  233 => 64,  230 => 63,  226 => 56,  223 => 55,  219 => 50,  216 => 49,  212 => 44,  209 => 43,  205 => 38,  202 => 37,  198 => 33,  188 => 32,  185 => 31,  173 => 30,  170 => 29,  166 => 22,  162 => 20,  159 => 19,  156 => 18,  152 => 8,  149 => 7,  145 => 77,  140 => 74,  137 => 73,  134 => 69,  132 => 68,  128 => 63,  126 => 62,  119 => 57,  116 => 55,  114 => 54,  107 => 51,  104 => 49,  102 => 48,  95 => 45,  92 => 43,  90 => 42,  83 => 39,  80 => 37,  78 => 36,  74 => 29,  72 => 28,  70 => 26,  68 => 25,  64 => 18,  62 => 17,  55 => 14,  50 => 13,  48 => 12,  44 => 9,  41 => 7,  38 => 6,  36 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- do gantry.debugger.startTimer('render', 'Rendering page') %}
{%- do gantry.theme.setLayout() -%}
{%- set segments = gantry.theme.segments -%}

{%- set content %}
    {% if gantry.theme.hasContent() %}
        {% block content %}
        {% endblock %}
    {% endif %}
{% endset -%}

{%- set offcanvas = null -%}
{%- for segment in segments if segment.type == 'offcanvas' %}
    {%- set offcanvas = segment -%}
{% endfor -%}

{%- set page_offcanvas %}
    {% block page_offcanvas %}
        {% if offcanvas %}
            {% include '@nucleus/layout/' ~ offcanvas.type ~ '.html.twig' with { 'segment': offcanvas } -%}
        {% endif %}
    {% endblock %}
{% endset -%}

{%- set page_offcanvas = page_offcanvas|trim ?: '' %}
{%- set offcanvas_position = page_offcanvas ? offcanvas.attributes.position|default('g-offcanvas-left') : '' -%}

{%- set page_layout %}
    {% block page_layout %}
    {% for segment in segments if segment.type != 'offcanvas' %}
        {% include '@nucleus/layout/' ~ segment.type ~ '.html.twig' with { 'segments': segment.children } %}
    {% endfor %}
    {% endblock %}
{% endset -%}

{%- set page_top %}
    {% block page_top %}
    {% endblock %}
    {{ gantry.document.getHtml('top')|join(\"\\n    \")|raw }}
{% endset -%}

{%- set page_bottom %}
    {% block page_bottom %}
    {% endblock %}
    {{ gantry.document.getHtml('bottom')|join(\"\\n    \")|raw }}
{% endset -%}

{%- set body_top %}
    {% block body_top %}
    {% endblock %}
    {{ gantry.document.getHtml('body_top')|join(\"\\n    \")|raw }}
{% endset -%}

{%- set body_bottom %}
    {% block body_bottom %}
    {% endblock %}
    {{ gantry.document.getHtml('body_bottom')|join(\"\\n    \")|raw }}
{% endset -%}

{# Head and footer needs to come last because of any of the above blocks may have CSS or JavaScript in them #}

{%- set page_head %}
    {% block page_head -%}
        {% include 'partials/page_head.html.twig' %}
    {%- endblock %}
{% endset -%}

{%- set page_footer %}
    {% block page_footer %}
        {% do gantry.platform.finalize() -%}
        {{ gantry.scripts('footer')|join(\"\\n    \")|raw -}}
    {% endblock %}

    {{ gantry.debugger.render()|raw }}
{% endset -%}

{%- block page -%}
<!DOCTYPE {{ gantry.config.page.doctype|default('html')|raw }}>
<html{{ gantry.page.htmlAttributes|raw }}>
    {{ page_head|raw }}
    {% block page_body -%}
    <body{{ gantry.page.bodyAttributes({'class': [offcanvas_position, gantry.page.preset, 'g-style-' ~ gantry.theme.preset]})|raw }}>
        {{ gantry.config.page.body.body_top|raw }}
        {{ body_top|raw }}
        {{ page_offcanvas|raw }}
        <div id=\"g-page-surround\">
            {% if page_offcanvas|trim %}
            <div class=\"g-offcanvas-hide g-offcanvas-toggle\" data-offcanvas-toggle><i class=\"fa fa-fw fa-bars\"></i></div>
            {% endif %}
            {{ page_top|raw }}
            {{ page_layout|raw }}
            {{ page_bottom|raw }}
        </div>
        {{ body_bottom|raw }}
        <script type=\"text/javascript\" src=\"{{ url('gantry-assets://js/main.js') }}\"></script>
        {{ page_footer|raw }}
        {{ gantry.config.page.body.body_bottom|raw }}
    </body>
    {%- endblock %}

</html>
{% endblock -%}
", "@nucleus/page.html.twig", "/Users/webdev/HTTP/grapevine-v3/user/plugins/gantry5/engines/nucleus/templates/page.html.twig");
    }
}
