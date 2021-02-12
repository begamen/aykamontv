<?php

/* themes/custom/sepia/templates/paragraphs/paragraph--call-to-action.html.twig */
class __TwigTemplate_20e25293c7ccba4c87cd1a463e29ab48fbe2d82a2ad31ba86cd8d49d2febab8d extends Twig_Template
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
        $tags = array("if" => 2);
        $filters = array("render" => 17);
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
        echo "<section class=\"call-to-action-section bg-gray-3 margin-top-60\">
  ";
        // line 2
        if (($context["dark"] ?? null)) {
            // line 3
            echo "   <div class=\"full-cover for-dark-style bg-image\" style=\"background-image: url(";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
            echo "/assets/img/pattern/bg-pattern-2-dark.png); background-position: 50% 50%;\"></div>
   ";
        } else {
            // line 5
            echo "    <div class=\"full-cover for-light-style bg-image\" style=\"background-image: url(";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
            echo "/assets/img/pattern/bg-pattern-2-light.png); background-position: 50% 50%;\"></div>
 ";
        }
        // line 7
        echo "\t<div class=\"call-to-action-inner tt-wrap\"> 
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">

";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_cta_title_subtitle", array()), "html", null, true));
        echo "

\t\t\t\t\t\t
\t\t 
\t
\t<div class=\"margin-top-30 max-width-1000 margin-auto\">
                         ";
        // line 17
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_cta_text", array()))) {
            echo " 
\t\t\t\t\t\t\t\t";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_cta_text", array()), "html", null, true));
            echo "
\t\t\t\t\t\t ";
        }
        // line 20
        echo "                         ";
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_cta_link1", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_cta_link2", array())))) {
            echo "    
\t\t\t\t\t\t\t\t<div class=\"margin-top-30\">
 ";
            // line 22
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_cta_link1", array()))) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_cta_link1", array()), "html", null, true));
            }
            // line 23
            echo " ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_cta_link2", array()))) {
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_cta_link2", array()), "html", null, true));
            }
            // line 24
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 25
        echo "\t
\t </div>\t\t\t\t\t\t
    </div>
    </div>
    </div> 
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--call-to-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  99 => 24,  94 => 23,  90 => 22,  84 => 20,  79 => 18,  75 => 17,  66 => 11,  60 => 7,  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/paragraphs/paragraph--call-to-action.html.twig", "/vagrant/aykamontv/themes/custom/sepia/templates/paragraphs/paragraph--call-to-action.html.twig");
    }
}
