<?php

/* themes/custom/sepia/templates/paragraphs/paragraph--price-box.html.twig */
class __TwigTemplate_65891c5caf5edbec46bdf912320f6e7da6313fc4f10ee155363ceaf3f0e11dd6 extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array("render" => 4);
        $functions = array("file_url" => 2);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('render'),
                array('file_url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"price-box ";
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_featured", array()), "value", array()) == "1")) {
            echo "price-box-featured";
        }
        echo "\">
<div class=\"pr-box price-heading bg-image\" style=\"background-image: url(";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_price_box_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo ");\">
\t<div class=\"price-heading-inner\">
";
        // line 4
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_pb_icon", array()))) {
            echo "<i class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_pb_icon", array()), "value", array()), "html", null, true));
            echo "\"></i>";
        }
        // line 5
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_pb_title", array()))) {
            echo "<h3 class=\"price-title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_pb_title", array()), "html", null, true));
            echo "</h3>";
        }
        // line 6
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_pb_subtitle", array()))) {
            echo "<div class=\"price-heading-text\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_pb_subtitle", array()), "html", null, true));
            echo "</div>";
        }
        // line 7
        echo "   </div>
</div>
\t<div class=\"pr-box price-box-price\">
\t\t<div class=\"price\"><span class=\"price-currency\">";
        // line 10
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_price_currency", array()))) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_price_currency", array()), "value", array()), "html", null, true));
        }
        echo "</span>";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_price", array()))) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_price", array()), "value", array()), "html", null, true));
        }
        echo "</div>
\t\t\t\t\t
\t</div>
\t";
        // line 13
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_price_features", array()))) {
            // line 14
            echo "\t<div class=\"pr-box price-features\">
\t\t";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_price_features", array()), "html", null, true));
            echo "
\t</div>
     ";
        }
        // line 17
        echo "   
     ";
        // line 18
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_pb_link1", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_pb_link2", array())))) {
            echo "                        
\t\t<div class=\"pr-box\">
\t\t";
            // line 20
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_pb_link1", array()))) {
                // line 21
                echo "\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_pb_link1", array()), "html", null, true));
                echo "
\t\t";
            }
            // line 23
            echo "\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_pb_link2", array()))) {
                // line 24
                echo "\t\t";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_pb_link2", array()), "html", null, true));
                echo "
\t\t";
            }
            // line 26
            echo "\t\t</div>
\t";
        }
        // line 28
        echo "</div>\t\t
\t\t
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--price-box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 28,  126 => 26,  120 => 24,  117 => 23,  111 => 21,  109 => 20,  104 => 18,  101 => 17,  95 => 15,  92 => 14,  90 => 13,  78 => 10,  73 => 7,  67 => 6,  61 => 5,  55 => 4,  50 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/paragraphs/paragraph--price-box.html.twig", "/vagrant/aykamontv/themes/custom/sepia/templates/paragraphs/paragraph--price-box.html.twig");
    }
}
