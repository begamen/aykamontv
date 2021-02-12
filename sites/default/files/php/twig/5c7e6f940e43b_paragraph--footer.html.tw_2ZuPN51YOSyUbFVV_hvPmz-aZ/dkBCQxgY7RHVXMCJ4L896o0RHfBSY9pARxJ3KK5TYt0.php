<?php

/* themes/custom/sepia/templates/paragraphs/paragraph--footer.html.twig */
class __TwigTemplate_6cf4d47e7c8a4944734b36c0458664266ec8a3712a578af628a342fb1abad587 extends Twig_Template
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
        $filters = array("render" => 5);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('render'),
                array()
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
        echo "<section id=\"footer\" class=\"";
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_dark", array()), "value", array()) == "1")) {
            echo "footer-dark";
        }
        echo " no-margin-top\">
\t<div class=\"footer-inner\">
\t\t<div class=\"footer-container tt-wrap pb-40\">
\t\t\t<div class=\"row\">
\t\t\t";
        // line 5
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_left", array()))) {
            // line 6
            echo "\t\t\t<div class=\"col-md-3\">
            ";
            // line 7
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_left", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 10
        echo "            
            ";
        // line 11
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_text", array()))) {
            // line 12
            echo "\t\t\t<div class=\"col-md-5\">
            ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_text", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 16
        echo "\t\t\t ";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_f_text", array()))) {
            // line 17
            echo "\t\t\t<div class=\"col-md-4\">
            ";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_f_text", array()), "html", null, true));
            echo "
            </div>
            ";
        }
        // line 21
        echo "\t        </div>
\t    </div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  84 => 18,  81 => 17,  78 => 16,  72 => 13,  69 => 12,  67 => 11,  64 => 10,  58 => 7,  55 => 6,  53 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/paragraphs/paragraph--footer.html.twig", "/home/izradasajta/sepia.izrada-sajta.info/themes/custom/sepia/templates/paragraphs/paragraph--footer.html.twig");
    }
}
