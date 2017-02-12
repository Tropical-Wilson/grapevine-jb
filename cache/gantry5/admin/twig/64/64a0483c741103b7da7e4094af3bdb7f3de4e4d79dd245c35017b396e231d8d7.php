<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_474a62da40f9511b4ade57609bbf9457da7e725f317488c3a8518d18de236f3b extends Twig_Template
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
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_9af4ae41388b86c97e8c2f80673299b64be4f65a062677988e68ad7b67a4d20a = ($context["php_version"] ?? null)) && is_string($__internal_04492c71b54d4b8734d12adcbc9bb9317534b01c763c197c1ee0789d373fa3d4 = "5.4") && ('' === $__internal_04492c71b54d4b8734d12adcbc9bb9317534b01c763c197c1ee0789d373fa3d4 || 0 === strpos($__internal_9af4ae41388b86c97e8c2f80673299b64be4f65a062677988e68ad7b67a4d20a, $__internal_04492c71b54d4b8734d12adcbc9bb9317534b01c763c197c1ee0789d373fa3d4)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/Users/webdev/HTTP/grapevine-v3/user/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
