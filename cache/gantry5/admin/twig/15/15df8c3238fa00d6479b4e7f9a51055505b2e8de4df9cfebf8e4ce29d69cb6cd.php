<?php

/* @gantry-admin/layouts/position.html.twig */
class __TwigTemplate_878fdb6b53ccc14a44b479a16508d3619c1c2e4c850a4bb9f82fa7e53387709e extends Twig_Template
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
        echo "<div id=\"position-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["position"] ?? null), "name", array()), "html", null, true);
        echo "\" class=\"page\">
    <h4>
        <span data-g-config-href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "positions", 1 => $this->getAttribute(($context["position"] ?? null), "name", array()), 2 => "rename"), "method"), "html", null, true);
        echo "\"
              data-g-config-method=\"post\"
              data-title-editable=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["position"] ?? null), "title", array()), "html", null, true);
        echo "\"
              class=\"title\"
              data-tip=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["position"] ?? null), "title", array()), "html", null, true);
        echo "\"
              data-title-editable-type=\"title\"
        >
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["position"] ?? null), "title", array()), "html", null, true);
        echo "
        </span>
        <i class=\"fa fa-fw fa-pencil font-small\" tabindex=\"0\" aria-label=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", $this->getAttribute(($context["position"] ?? null), "title", array())), "html", null, true);
        echo "\" data-title-edit=\"\"></i>
        <span class=\"float-right font-small\">
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "positions", 1 => $this->getAttribute(($context["position"] ?? null), "name", array()), 2 => "add"), "method"), "html", null, true);
        echo "\" class=\"button button-primary button-simple position-add\"
                    title=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_POSITION_ADD"), "html", null, true);
        echo "\"
                    aria-label=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_POSITION_ADD"), "html", null, true);
        echo "\"
            >
                <i class=\"fa fa-fw fa-plus\"></i>
            </a>
        </span>
        <span class=\"font-small position-key\">
            <span data-g-config-href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "positions", 1 => $this->getAttribute(($context["position"] ?? null), "name", array()), 2 => "rename"), "method"), "html", null, true);
        echo "\"
                  data-g-config-method=\"post\"
                  data-title-editable=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["position"] ?? null), "name", array()), "html", null, true);
        echo "\"
                  data-tip=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["position"] ?? null), "name", array()), "html", null, true);
        echo "\"
                  data-title-editable-type=\"key\"
                >
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["position"] ?? null), "name", array()), "html", null, true);
        echo "
            </span>
            <i class=\"fa fa-fw fa-pencil font-small\" tabindex=\"0\" aria-label=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", $this->getAttribute(($context["position"] ?? null), "title", array())), "html", null, true);
        echo "\" data-title-edit=\"\"></i>
        </span>
    </h4>
    <div class=\"position-container inner-params\" data-g5-position=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["position"] ?? null), "toJson", array(0 => true), "method"), "html_attr");
        echo "\" data-g5-position-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["position"] ?? null), "name", array()), "html", null, true);
        echo "\">
        <ul>";
        // line 34
        ob_start();
        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["position"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 36
            echo "                ";
            $this->loadTemplate("pages/positions/item.html.twig", "@gantry-admin/layouts/position.html.twig", 36)->display(array_merge($context, array("module" => $context["module"])));
            // line 37
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "</ul>
    </div>
    <div class=\"inner-params\">
        <div class=\"center position-actions\">
            <button data-tip=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DUPLICATE"), "html", null, true);
        echo "\"
                    aria-label=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DUPLICATE_X", $this->getAttribute(($context["position"] ?? null), "title", array())), "html", null, true);
        echo "\"
                    title=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DUPLICATE", $this->getAttribute(($context["position"] ?? null), "title", array())), "html", null, true);
        echo "\"
                    data-g-config=\"duplicate\"
                    data-g-config-href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "positions", 1 => $this->getAttribute(($context["position"] ?? null), "name", array()), 2 => "duplicate"), "method"), "html", null, true);
        echo "\"
                    data-g-config-method=\"POST\"
                    class=\"button button-secondary\"
            >
                <i class=\"fa fa-fw fa-copy\"></i>
            </button>
            <button data-tip=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DELETE"), "html", null, true);
        echo "\"
                    title=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DELETE_X", $this->getAttribute(($context["position"] ?? null), "title", array())), "html", null, true);
        echo "\"
                    aria-label=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DELETE", $this->getAttribute(($context["position"] ?? null), "title", array())), "html", null, true);
        echo "\"
                    data-g-config=\"delete\"
                    data-g-config-href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "positions", 1 => $this->getAttribute(($context["position"] ?? null), "name", array()), 2 => "delete"), "method"), "html", null, true);
        echo "\"
                    data-g-config-method=\"POST\"
                    class=\"button red\"
            >
                <i class=\"fa fa-fw fa-trash-o\"></i>
            </button>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/layouts/position.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 56,  175 => 54,  171 => 53,  167 => 52,  158 => 46,  153 => 44,  149 => 43,  145 => 42,  137 => 38,  123 => 37,  120 => 36,  102 => 35,  100 => 34,  94 => 33,  88 => 30,  83 => 28,  77 => 25,  73 => 24,  68 => 22,  59 => 16,  55 => 15,  51 => 14,  46 => 12,  41 => 10,  35 => 7,  30 => 5,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/layouts/position.html.twig", "/Users/webdev/HTTP/grapevine-v3/user/plugins/gantry5/admin/templates/layouts/position.html.twig");
    }
}
