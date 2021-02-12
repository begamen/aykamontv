<?php

/* themes/custom/sepia/templates/layout/page.html.twig */
class __TwigTemplate_b6a2275209ced7252ad654f1e115d7eac0c3113f4d0647f5fbd1719d58d3bf68 extends Twig_Template
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
        $tags = array("if" => 1, "trans" => 48);
        $filters = array("render" => 13);
        $functions = array("attach_library" => 2);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('render'),
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
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
";
        }
        // line 7
        echo "<div id=\"body-content\">
<main id=\"main-content\">
 <section id=\"page-section\" class=\"page-classic\">
\t<div class=\"page-section-inner tt-wrap\"> 
        <div class=\"container-fluid\">
\t\t\t<div class=\"row\">
  ";
        // line 13
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()))) {
            // line 14
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " >
            ";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
\t  ";
        }
        // line 20
        echo "
      ";
        // line 21
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "content", array()))) {
            // line 22
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo ">
            ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
\t  ";
        }
        // line 28
        echo "
      ";
        // line 29
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) {
            // line 30
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo ">
            ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
\t  ";
        }
        // line 36
        echo "       </div>
    </div>
   </div>
</section>
</main>
";
        // line 41
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 42
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
";
        }
        // line 44
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", array())) {
            // line 45
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom", array()), "html", null, true));
            echo "
";
        }
        // line 47
        if (($context["scrolltop"] ?? null)) {
            // line 48
            echo "    <a href=\"#body\" class=\"scrolltotop sm-scroll\" title=\"";
            echo t("Scroll to top", array());
            echo "\"><i class=\"fa fa-chevron-up\"></i></a>
";
        }
        // line 50
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  145 => 48,  143 => 47,  137 => 45,  135 => 44,  129 => 42,  127 => 41,  120 => 36,  113 => 32,  109 => 31,  106 => 30,  104 => 29,  101 => 28,  94 => 24,  90 => 23,  87 => 22,  85 => 21,  82 => 20,  75 => 16,  71 => 15,  68 => 14,  66 => 13,  58 => 7,  52 => 5,  50 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/layout/page.html.twig", "/vagrant/aykamontv/themes/custom/sepia/templates/layout/page.html.twig");
    }
}
