<?php

/* themes/custom/sepia/templates/paragraphs/paragraph--dd-slideshow.html.twig */
class __TwigTemplate_0c690879c8c57754151c048b15bb09c8121abe306407c2fb011a7d7edd5e3555 extends Twig_Template
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
        $tags = array("if" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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
        echo "<section id=\"tt-intro\" class=\"slideshow-intro\">
\t<div class=\"tt-intro-inner\"> 
\t\t<div class=\"gl-carousel-wrap no-padding\">
        ";
        // line 4
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_mouswheel_scrolling", array()), "value", array()) == "1")) {
            // line 5
            echo "\t\t    <div class=\"owl-carousel cc-height-full cursor-grab owl-mousewheel dots-right bg-dark owl-loaded owl-drag cc-item-hovered\" data-items=\"1\" data-loop=\"true\" data-nav=\"true\" data-animate-in=\"fadeIn\" data-animate-out=\"fadeOut\">
\t\t";
        } else {
            // line 7
            echo "    <div class=\"owl-carousel cc-height-5 cursor-grab dots-right bg-dark\" data-items=\"1\" data-loop=\"true\" data-nav=\"true\" data-nav-speed=\"500\" data-dots-speed=\"500\" data-autoplay=\"true\" data-autoplay-timeout=\"8000\" data-autoplay-speed=\"500\" data-autoplay-hover-pause=\"true\">
         ";
        }
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_slideshow_item", array()), "html", null, true));
        echo "
\t\t\t</div>
        </div> 
\t</div> 
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--dd-slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  54 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/paragraphs/paragraph--dd-slideshow.html.twig", "/vagrant/aykamontv/themes/custom/sepia/templates/paragraphs/paragraph--dd-slideshow.html.twig");
    }
}
