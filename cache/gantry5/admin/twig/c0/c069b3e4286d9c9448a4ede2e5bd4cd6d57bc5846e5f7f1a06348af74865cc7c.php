<?php

/* pages/positions/item.html.twig */
class __TwigTemplate_eb30627c9b20ddfe00e684825d7541f6cf6624039d623b3812de13b0b5c4bf0a extends Twig_Template
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
        $context["statuses"] = array("all" => array("label" => "Assigned to all", "icon" => "<i class=\"fa item-status fa-fw fa-circle\"></i>"), "none" => array("label" => "Not assigned", "icon" => "<i class=\"fa item-status fa-fw fa-circle-o\"></i>"), "some" => array("label" => "Some assignments", "icon" => "<i class=\"fa item-status fa-fw fa-adjust\"></i>"));
        // line 15
        echo "
<li data-pm-blocktype=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "type", array()), "html", null, true);
        echo "\" data-pm-data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "toJson", array(), "method"), "html_attr");
        echo "\">
    ";
        // line 17
        $context["status"] = $this->getAttribute(($context["statuses"] ?? null), $this->getAttribute(($context["module"] ?? null), "assigned", array()), array(), "array");
        // line 18
        echo "    ";
        // line 19
        echo "    <div class=\"title size-90\">
        <span class=\"title-status\" title=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? null), "label", array()), "html", null, true);
        echo "\" data-tip=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? null), "label", array()), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["status"] ?? null), "label", array()), "html", null, true);
        echo "\">";
        echo $this->getAttribute(($context["status"] ?? null), "icon", array());
        echo "</span>
        <span class=\"title-name\" title=\"Type: ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "options", array()), "type", array()), "html", null, true);
        echo " (id: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? null), "name", array()), "html", null, true);
        echo ")\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["module"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["module"] ?? null), "title", array()), $this->getAttribute(($context["module"] ?? null), "name", array()))) : ($this->getAttribute(($context["module"] ?? null), "name", array()))), "html", null, true);
        echo "</span>
    </div>
    <i class=\"fa item-settings fa-cog size-10\"></i>
</li>";
    }

    public function getTemplateName()
    {
        return "pages/positions/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 21,  37 => 20,  34 => 19,  32 => 18,  30 => 17,  24 => 16,  21 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pages/positions/item.html.twig", "/Users/webdev/HTTP/grapevine-v3/user/plugins/gantry5/admin/templates/pages/positions/item.html.twig");
    }
}
