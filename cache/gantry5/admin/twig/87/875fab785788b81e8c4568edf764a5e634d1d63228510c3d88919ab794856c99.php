<?php

/* @gantry-admin/pages/positions/positions.html.twig */
class __TwigTemplate_2151cbf0fa6b6a8eee7dd12ab1a9e669951f780154ce14a1b70bee416b9fb39a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'gantry' => array($this, 'block_gantry'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($context["ajax"] ?? null) - ($context["suffix"] ?? null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/positions/positions.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"menu-header\">
        <span class=\"float-right\">
            <button class=\"button button-back-to-conf\"
                    tabindex=\"0\"
                    aria-label=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BACK_SETUP"), "html", null, true);
        echo "\"
            >
                <i class=\"fa fa-fw fa-fw fa-arrow-left\"></i> <span>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BACK_SETUP"), "html", null, true);
        echo "</span>
            </button>
            <button type=\"submit\"
                    class=\"button button-primary button-save\"
                    data-save=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_POSITIONS"), "html", null, true);
        echo "\"
            >
                <i class=\"fa fa-fw fa-check\"></i> <span>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SAVE_POSITIONS"), "html", null, true);
        echo "</span>
            </button>
        </span>
        <h2 class=\"page-title\">
            ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_POSITIONS"), "html", null, true);
        echo "
            <button data-g-config=\"create\"
                    data-g-create=\"position\"
                    data-g-config-href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "positions/create"), "method"), "html", null, true);
        echo "\"
                    title=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ADD_NEW_POSITION"), "html", null, true);
        echo "\"
                    aria-label=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ADD_NEW_POSITION"), "html", null, true);
        echo "\"
                    data-g-config-method=\"POST\"
                    data-g5-lm-add tabindex=\"0\"
                    class=\"button button-primary\"
            >
                <i class=\"fa fa-fw fa-plus\"></i>
            </button>
        </h2>
    </div>

    <div id=\"positions\">
        <ul class=\"g-grid\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["positions"] ?? null));
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
        foreach ($context['_seq'] as $context["name"] => $context["position"]) {
            // line 38
            echo "                <li class=\"card g-block size-1-4\">
                    ";
            // line 39
            $this->loadTemplate("@gantry-admin/layouts/position.html.twig", "@gantry-admin/pages/positions/positions.html.twig", 39)->display($context);
            // line 40
            echo "                </li>
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            <li class=\"card g-block size-1-4 add-new\">
                <div class=\"page\">
                    <a data-g-config=\"create\"
                       data-g-config-href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "positions/create"), "method"), "html", null, true);
        echo "\"
                       title=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ADD_NEW_POSITION"), "html", null, true);
        echo "\"
                       aria-label=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ADD_NEW_POSITION"), "html", null, true);
        echo "\"
                       data-g-config-method=\"POST\"
                       data-g5-lm-add tabindex=\"0\"
                    >
                        <i class=\"fa fa-fw fa-plus\"></i>
                    </a>
                </div>
            </li>
        </ul>
        <div id=\"trash\" data-g5-positions-erase=\"\"><div class=\"trash-zone\">&times;</div><span>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DROP_DELETE"), "html", null, true);
        echo "</span></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/positions/positions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 56,  139 => 47,  135 => 46,  131 => 45,  126 => 42,  111 => 40,  109 => 39,  106 => 38,  89 => 37,  74 => 25,  70 => 24,  66 => 23,  60 => 20,  53 => 16,  48 => 14,  41 => 10,  36 => 8,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/pages/positions/positions.html.twig", "/Users/webdev/HTTP/grapevine-v3/user/plugins/gantry5/admin/templates/pages/positions/positions.html.twig");
    }
}
