<?php

/* forms/fields/container/tabs.html.twig */
class __TwigTemplate_bbd88056566bfff06f31df170b7fdf09c6e6118e09be66a0955108e4185acf08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'overridable' => array($this, 'block_overridable'),
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter(($context["layout"] ?? null), "field")) : ("field"))) . ".html.twig"), "forms/fields/container/tabs.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_overridable($context, array $blocks = array())
    {
    }

    // line 7
    public function block_contents($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"g5-tabs-container\">
        ";
        // line 9
        if ($this->getAttribute(($context["field"] ?? null), "fields", array())) {
            // line 10
            echo "            ";
            $context["tabs"] = array();
            // line 11
            echo "            ";
            $context["panes"] = array();
            // line 12
            echo "            ";
            $context["fieldId"] = (("g-tabs-container-" . $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter(($context["name"] ?? null))) . "-");
            // line 13
            echo "
            ";
            // line 15
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", array()));
            foreach ($context['_seq'] as $context["tab"] => $context["content"]) {
                // line 16
                echo "                ";
                if (( !($context["ignore_not_overrideable"] ?? null) || ( !$this->getAttribute($context["content"], "overridable", array(), "any", true, true) || $this->getAttribute($context["content"], "overridable", array())))) {
                    // line 17
                    echo "                    ";
                    $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => (($this->getAttribute($context["content"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["content"], "label", array()), $context["tab"])) : ($context["tab"]))));
                    // line 18
                    echo "                    ";
                    $context["panes"] = twig_array_merge(($context["panes"] ?? null), array(0 => (($this->getAttribute($context["content"], "fields", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["content"], "fields", array()), array())) : (array()))));
                    // line 19
                    echo "                ";
                }
                // line 20
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
            <div class=\"g-tabs\" role=\"tablist\">
                <ul>
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 25
                echo "                        <li ";
                echo (( !$this->getAttribute($context["loop"], "index0", array())) ? ("class=\"active\"") : (""));
                echo ">
                            <a href=\"#\"
                               id=\"";
                // line 27
                echo twig_escape_filter($this->env, ((($context["fieldId"] ?? null) . $this->getAttribute($context["loop"], "index0", array())) . twig_lower_filter($this->env, "-tab")), "html", null, true);
                echo "\"
                               aria-controls=\"";
                // line 28
                echo twig_escape_filter($this->env, ((($context["fieldId"] ?? null) . $this->getAttribute($context["loop"], "index0", array())) . twig_lower_filter($this->env, "-pane")), "html", null, true);
                echo "\"
                               aria-expanded=\"";
                // line 29
                echo (( !$this->getAttribute($context["loop"], "index0", array())) ? ("true") : ("false"));
                echo "\"
                               role=\"presentation\"><span>";
                // line 30
                echo twig_escape_filter($this->env, $context["tab"], "html", null, true);
                echo "</span></a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                </ul>
            </div>

            <div class=\"g-panes\">
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["panes"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["pane"]) {
                // line 38
                echo "                    <div class=\"g-pane clearfix ";
                echo (( !$this->getAttribute($context["loop"], "index0", array())) ? ("active") : (""));
                echo "\"
                         role=\"tabpanel\"
                         id=\"";
                // line 40
                echo twig_escape_filter($this->env, ((($context["fieldId"] ?? null) . $this->getAttribute($context["loop"], "index0", array())) . twig_lower_filter($this->env, "-pane")), "html", null, true);
                echo "\"
                         aria-labelledby=\"";
                // line 41
                echo twig_escape_filter($this->env, ((($context["fieldId"] ?? null) . $this->getAttribute($context["loop"], "index0", array())) . twig_lower_filter($this->env, "-tab")), "html", null, true);
                echo "\"
                         aria-expanded=\"";
                // line 42
                echo (( !$this->getAttribute($context["loop"], "index0", array())) ? ("true") : ("false"));
                echo "\">
                        ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["pane"]);
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
                foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                    // line 44
                    echo "                            ";
                    if ((is_string($__internal_c90f1d7a45601cbe93d81e81aeadb65d2f5a4ee5d628acc957da9571ff516c40 = $context["childName"]) && is_string($__internal_2d0c6d89c90b33e3e174d5f03a52b5774c257089313628a69dca311873f09050 = ".") && ('' === $__internal_2d0c6d89c90b33e3e174d5f03a52b5774c257089313628a69dca311873f09050 || 0 === strpos($__internal_c90f1d7a45601cbe93d81e81aeadb65d2f5a4ee5d628acc957da9571ff516c40, $__internal_2d0c6d89c90b33e3e174d5f03a52b5774c257089313628a69dca311873f09050)))) {
                        // line 45
                        echo "                                ";
                        $context["childName"] = trim($context["childName"], ".");
                        // line 46
                        echo "                            ";
                    }
                    // line 47
                    echo "
                            ";
                    // line 48
                    $context["childName"] = trim($context["childName"], ".");
                    // line 49
                    echo "                            ";
                    $context["childValue"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["data"] ?? null), (($context["scope"] ?? null) . $context["childName"]));
                    // line 50
                    echo "                            ";
                    $context["childDefault"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["defaults"] ?? null), (($context["scope"] ?? null) . $context["childName"]));
                    // line 51
                    echo "                            ";
                    $context["childPrefix"] = ((($context["prefix"] ?? null) . $context["childName"]) . ".");
                    // line 52
                    echo "
                            ";
                    // line 53
                    if ($this->getAttribute($context["child"], "type", array())) {
                        // line 54
                        echo "                                ";
                        $context["child_overrideable"] = (($context["overrideable"] ?? null) && (($this->getAttribute($context["child"], "overridable", array(), "any", true, true)) ? ($this->getAttribute($context["child"], "overridable", array())) : ((($this->getAttribute($context["child"], "overrideable", array(), "any", true, true)) ? ($this->getAttribute($context["child"], "overrideable", array())) : (true)))));
                        // line 55
                        echo "
                                ";
                        // line 56
                        if ((( !$this->getAttribute($context["child"], "skip", array()) &&  !((($context["ignore_not_overrideable"] ?? null) &&  !($context["child_overrideable"] ?? null)) && (null === ($context["childValue"] ?? null)))) &&  !((null === ($context["childValue"] ?? null)) && ($context["not_global_overrideable"] ?? null)))) {
                            // line 57
                            echo "                                    ";
                            $this->loadTemplate(array(0 => (("forms/fields/" . twig_replace_filter($this->getAttribute($context["child"], "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields/container/tabs.html.twig", 57)->display(array_merge($context, array("name" =>                             // line 58
$context["childName"], "field" => $context["child"], "current_value" => ($context["childValue"] ?? null), "value" => null, "default_value" => ($context["childDefault"] ?? null), "prefix" => ($context["childPrefix"] ?? null), "overrideable" => ($context["child_overrideable"] ?? null))));
                            // line 59
                            echo "                                ";
                        }
                        // line 60
                        echo "                            ";
                    }
                    // line 61
                    echo "                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pane'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            </div>

        ";
        }
        // line 67
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/container/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 67,  266 => 64,  251 => 62,  237 => 61,  234 => 60,  231 => 59,  229 => 58,  227 => 57,  225 => 56,  222 => 55,  219 => 54,  217 => 53,  214 => 52,  211 => 51,  208 => 50,  205 => 49,  203 => 48,  200 => 47,  197 => 46,  194 => 45,  191 => 44,  174 => 43,  170 => 42,  166 => 41,  162 => 40,  156 => 38,  139 => 37,  133 => 33,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  98 => 25,  81 => 24,  76 => 21,  70 => 20,  67 => 19,  64 => 18,  61 => 17,  58 => 16,  53 => 15,  50 => 13,  47 => 12,  44 => 11,  41 => 10,  39 => 9,  36 => 8,  33 => 7,  28 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/container/tabs.html.twig", "/Users/webdev/HTTP/grapevine-v3/user/plugins/gantry5/admin/templates/forms/fields/container/tabs.html.twig");
    }
}
