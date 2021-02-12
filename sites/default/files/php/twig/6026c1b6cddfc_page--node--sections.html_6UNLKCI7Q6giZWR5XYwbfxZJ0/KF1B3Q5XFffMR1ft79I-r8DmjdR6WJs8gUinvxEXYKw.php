<?php

/* themes/custom/sepia/templates/layout/page--node--sections.html.twig */
class __TwigTemplate_131e287c61ae2ab397023917f7dcc5abe7e9c13af61bf342cc4c11db9d1935c6 extends Twig_Template
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
        $tags = array("if" => 1, "trans" => 20);
        $filters = array();
        $functions = array("attach_library" => 2);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array(),
                array('attach_library')
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
        if (($context["dark"] ?? null)) {
            // line 2
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("sepia/dark-style"), "html", null, true));
            echo "
";
        }
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 5
            echo "   ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
";
        }
        // line 7
        echo "<div id=\"body-content\">
<main id=\"main-content\">
  ";
        // line 9
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 10
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
  ";
        }
        // line 12
        echo "</main>
";
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 14
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
";
        }
        // line 16
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", array())) {
            // line 17
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom", array()), "html", null, true));
            echo "
";
        }
        // line 19
        if (($context["scrolltop"] ?? null)) {
            // line 20
            echo "    <a href=\"#body\" class=\"scrolltotop sm-scroll\" title=\"";
            echo t("Scroll to top", array());
            echo "\"><i class=\"fa fa-chevron-up\"></i></a>
";
        }
        // line 22
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/layout/page--node--sections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  91 => 20,  89 => 19,  83 => 17,  81 => 16,  75 => 14,  73 => 13,  70 => 12,  64 => 10,  62 => 9,  58 => 7,  52 => 5,  50 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/layout/page--node--sections.html.twig", "/vagrant/aykamontv/themes/custom/sepia/templates/layout/page--node--sections.html.twig");
    }
}
