<?php

/* themes/custom/sepia/templates/paragraphs/paragraph--footer-minimal.html.twig */
class __TwigTemplate_b4b0ef5cc57f8514fe40a28d8f99607c9192882deef4a22341773b272b93701c extends Twig_Template
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
        echo "<section id=\"footer-bottom\" class=\"footer-bottom footer-minimal ";
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_margin_top", array()), "value", array()) == "0")) {
            echo "no-margin-top";
        }
        echo " ";
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_fdark", array()), "value", array()) == "1")) {
            echo "footer-dark";
        }
        echo "\">
\t\t\t\t
\t\t\t\t\t<div class=\"footer-container ";
        // line 3
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_f_content_full_width", array()), "value", array()) == "1")) {
            echo "full-width";
        } else {
            echo "tt-wrap";
        }
        echo "\">
\t\t\t\t\t\t<div class=\"row\">
                        ";
        // line 5
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_right", array()))) {
            // line 6
            echo "\t\t\t\t\t\t\t<div class=\"col-md-6 col-md-push-6\">
\t\t\t\t\t\t\t ";
            // line 7
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_right", array()), "html", null, true));
            echo "\t
\t                        </div> 
                        ";
        }
        // line 10
        echo "                        ";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_fleft", array()))) {
            // line 11
            echo "\t\t\t\t\t\t\t<div class=\"col-md-6 col-md-pull-6\">
                             ";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_fleft", array()), "html", null, true));
            echo "
                            </div> 
                        ";
        }
        // line 14
        echo "    
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--footer-minimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 14,  81 => 12,  78 => 11,  75 => 10,  69 => 7,  66 => 6,  64 => 5,  55 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/paragraphs/paragraph--footer-minimal.html.twig", "/home/izradasajta/sepia.izrada-sajta.info/themes/custom/sepia/templates/paragraphs/paragraph--footer-minimal.html.twig");
    }
}
