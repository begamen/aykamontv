<?php

/* themes/custom/sepia/templates/paragraphs/paragraph--image-with-side-text.html.twig */
class __TwigTemplate_5e34db8a6cdb130c3853909d96c19f1381933eabf7eddb5b9d4a89ac92717ca9 extends Twig_Template
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
        $tags = array("if" => 17);
        $filters = array("render" => 28);
        $functions = array("file_url" => 9);

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
        echo "<section id=\"about-me-section\">
\t\t\t\t<div class=\"about-me-inner\"> 
\t\t\t\t\t<div class=\"split-box about-me\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"row-lg-height\">

\t\t\t\t\t\t\t\t\t<!-- Column -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5 col-lg-height split-box-image no-padding bg-image\" style=\"background-image: url(";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_dmd_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo "); background-position: 50% 50%;\">

\t\t\t\t\t\t\t\t\t\t<div class=\"sbi-height padding-height-80\"></div>

\t\t\t\t\t\t\t\t\t</div> <!-- /.col -->

\t\t\t\t\t\t\t\t\t<!-- Column -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-7 col-lg-height col-lg-middle no-padding\">
";
        // line 17
        if (($context["dark"] ?? null)) {
            echo "                                                                              
 <div class=\"full-cover for-dark-style bg-gray-3 bg-image\" style=\"background-image: url(";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
            echo "/assets/img/pattern/bg-pattern-1-dark.png); background-position: 50% 50%;\"></div>
 ";
        } else {
            // line 20
            echo " <div class=\"full-cover for-light-style bg-gray-3 bg-image\" style=\"background-image: url(";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
            echo "/assets/img/pattern/bg-pattern-1-light.png); background-position: 50% 50%;\"></div>
";
        }
        // line 22
        echo "
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"split-box-content sb-content-right ";
        // line 26
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_shifted_left", array()), "value", array()) == "1")) {
            echo "shifted-left";
        }
        echo "\" >

\t\t\t\t\t\t\t\t\t\t\t";
        // line 28
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_heading_title", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_heading_subtitle", array())))) {
            // line 29
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"tt-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tt-heading-inner\">
";
            // line 31
            if ($this->getAttribute(($context["content"] ?? null), "field_heading_title", array())) {
                echo "<h2 class=\"tt-heading-title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_heading_title", array()), "html", null, true));
                echo "</h2>";
            }
            // line 32
            echo "\t";
            if ($this->getAttribute(($context["content"] ?? null), "field_heading_subtitle", array())) {
                echo "<div class=\"tt-heading-subtitle\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_heading_subtitle", array()), "html", null, true));
                echo "</div>";
            }
            // line 33
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<hr class=\"hr-short\">
\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 37
        echo "                                            ";
        if ($this->getAttribute(($context["content"] ?? null), "field_itext", array())) {
            // line 38
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"margin-top-30\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_itext", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
        }
        // line 42
        echo "                                            ";
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_a_link1", array()))) {
            // line 43
            echo "     ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_a_link1", array()), "html", null, true));
            echo "\t\t
\t ";
        }
        // line 44
        echo " \t
\t ";
        // line 45
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_a_link2", array()))) {
            // line 46
            echo "     ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_a_link2", array()), "html", null, true));
            echo "\t\t
\t ";
        }
        // line 48
        echo "\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</div> 

\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t</div> 
\t\t\t</section>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--image-with-side-text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 48,  143 => 46,  141 => 45,  138 => 44,  132 => 43,  129 => 42,  123 => 39,  120 => 38,  117 => 37,  111 => 33,  104 => 32,  98 => 31,  94 => 29,  92 => 28,  85 => 26,  79 => 22,  73 => 20,  68 => 18,  64 => 17,  53 => 9,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/paragraphs/paragraph--image-with-side-text.html.twig", "/home/izradasajta/sepia.izrada-sajta.info/themes/custom/sepia/templates/paragraphs/paragraph--image-with-side-text.html.twig");
    }
}
