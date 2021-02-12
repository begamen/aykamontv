<?php

/* themes/custom/sepia/templates/paragraphs/paragraph--testimonial.html.twig */
class __TwigTemplate_cbcb0ed3a4edef2ce6982347282021f113873ffd295148f8aeae3b80d5fcc822 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array("file_url" => 3);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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
        echo "

<section id=\"testimonials-section\" class=\"bg-dark bg-image-fixed\" style=\"background-image: url(";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_dd_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo "); background-position: 50% 50%;\">


\t\t\t\t<!-- Element cover -->
\t\t\t\t<span class=\"cover bg-transparent-7-dark\"></span>

\t\t\t\t<div class=\"testimonials-section-inner tt-wrap\"> <!-- add/remove class \"tt-wrap\" to enable/disable element boxed layout (class \"tt-boxed\" is required in <body> tag! ) -->

\t\t\t\t\t<!-- Begin testimonials carousel
\t\t\t\t\t=================================
\t\t\t\t\t* Use class \"tm-hide-image\" to hide testimonial image.
\t\t\t\t\t* Use class \"tm-center\" or \"tm-right\" to align testimonials.
\t\t\t\t\t-->
\t\t\t\t\t<div class=\"testimonials-carousel tm-center\">

\t\t\t\t\t\t<!-- Begin tt-heading 
\t\t\t\t\t\t====================== 
\t\t\t\t\t\t* Use class \"padding-on\" to enable heading paddings (useful if you use tt-heading as stand alone element).
\t\t\t\t\t\t* Use class \"text-center\" or \"text-right\" to align tt-heading.
\t\t\t\t\t\t* Use classes \"tt-heading-xs\", \"tt-heading-sm\", \"tt-heading-lg\", \"tt-heading-xlg\" or \"tt-heading-xxlg\" to set tt-heading size.
\t\t\t\t\t\t-->
\t\t\t\t\t\t<!-- <div class=\"tt-heading tt-heading-lg text-center\">
\t\t\t\t\t\t\t<div class=\"tt-heading-inner tt-wrap\">
\t\t\t\t\t\t\t\t<h1 class=\"tt-heading-title text-white\">Testimonials</h1>
\t\t\t\t\t\t\t\t<div class=\"tt-heading-subtitle text-gray-3\">What customers say</div>
\t\t\t\t\t\t\t\t<hr class=\"hr-short\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t<!-- End tt-heading -->


\t\t\t\t\t\t<!-- Begin content carousel (http://www.owlcarousel.owlgraphic.com)
\t\t\t\t\t\t====================================================================
\t\t\t\t\t\t* Use class \"nav-outside\" for outside nav (requires boxed layout).
\t\t\t\t\t\t* Use class \"nav-outside-top\" for outside top nav (requires enough space at the top of the carousel).
\t\t\t\t\t\t* Use class \"nav-bottom-right\" for bottom right nav.
\t\t\t\t\t\t* Use class \"nav-rounded\" for rounded nav.
\t\t\t\t\t\t* Use class \"nav-light\" to enable nav light style.
\t\t\t\t\t\t* Use class \"dots-outside\" for outside dots (requires enough space at the bottom of the carousel).
\t\t\t\t\t\t* Use class \"dots-left\", \"dots-right\" or \"dots-center-right\" to align dots.
\t\t\t\t\t\t* Use class \"dots-rounded\" for rounded dots.
\t\t\t\t\t\t* Use class \"owl-mousewheel\" to enable mousewheel support.
\t\t\t\t\t\t* Use class \"cursor-grab\" to enable cursor grab icon (no effect on links!).
\t\t\t\t\t\t* Use class \"cc-hover-light\", \"cc-hover-dark\" or \"cc-hover-zoom\" to enable carousel items hover effect.
\t\t\t\t\t\t* Use class \"cc-height-1\", \"cc-height-2\", \"cc-height-3\", \"cc-height-4\", \"cc-height-5\", \"cc-height-6\" or \"cc-height-full\" to set carousel height (do not use with data-autoheight=\"true\"!!!).
\t\t\t\t\t\t* Use class \"cc-height-m\" to set full height for small screens (do not use with data-autoheight=\"true\"!!!).
\t\t\t\t\t\t================================================================
\t\t\t\t\t\t* Available carousel data attributes:
\t\t\t\t\t\t\t\tdata-items=\"5\".......................(items visible on desktop)
\t\t\t\t\t\t\t\tdata-tablet-landscape=\"4\"............(items visible on mobiles)
\t\t\t\t\t\t\t\tdata-tablet-portrait=\"3\".............(items visible on mobiles)
\t\t\t\t\t\t\t\tdata-mobile-landscape=\"2\"............(items visible on tablets)
\t\t\t\t\t\t\t\tdata-mobile-portrait=\"1\".............(items visible on tablets)
\t\t\t\t\t\t\t\tdata-loop=\"true\".....................(true/false)
\t\t\t\t\t\t\t\tdata-margin=\"10\".....................(space between items)
\t\t\t\t\t\t\t\tdata-center=\"true\"...................(true/false)
\t\t\t\t\t\t\t\tdata-start-position=\"0\"..............(item start position)
\t\t\t\t\t\t\t\tdata-animate-in=\"fadeIn\".............(more animations: http://daneden.github.io/animate.css/)
\t\t\t\t\t\t\t\tdata-animate-out=\"fadeOut\"...........(more animations: http://daneden.github.io/animate.css/)
\t\t\t\t\t\t\t\tdata-mouse-drag=\"false\"..............(true/false)
\t\t\t\t\t\t\t\tdata-touch-drag=\"false\"..............(true/false)
\t\t\t\t\t\t\t\tdata-autoheight=\"true\"...............(true/false)
\t\t\t\t\t\t\t\tdata-autoplay=\"true\".................(true/false)
\t\t\t\t\t\t\t\tdata-autoplay-timeout=\"5000\".........(milliseconds)
\t\t\t\t\t\t\t\tdata-autoplay-hover-pause=\"true\".....(true/false)
\t\t\t\t\t\t\t\tdata-autoplay-speed=\"800\"............(milliseconds)
\t\t\t\t\t\t\t\tdata-drag-end-speed=\"800\"............(milliseconds)
\t\t\t\t\t\t\t\tdata-nav=\"true\"......................(true/false)
\t\t\t\t\t\t\t\tdata-nav-speed=\"800\".................(milliseconds)
\t\t\t\t\t\t\t\tdata-dots=\"false\"....................(true/false)
\t\t\t\t\t\t\t\tdata-dots-speed=\"800\"................(milliseconds)
\t\t\t\t\t\t-->
\t\t\t\t\t\t<div class=\"owl-carousel cursor-grab nav-outside dots-outside\" data-items=\"1\" data-loop=\"true\" data-autoheight=\"true\" data-nav=\"true\" data-nav-speed=\"500\" data-dots-speed=\"500\" data-autoplay=\"true\" data-autoplay-timeout=\"8000\" data-autoplay-speed=\"500\" data-autoplay-hover-pause=\"true\">

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t
";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_testimonial_item", array()), "html", null, true));
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End content carousel -->

\t\t\t\t\t</div> 
\t\t\t\t\t<!-- End testimonials carousel -->

\t\t\t\t</div> <!-- /.tt-intro-inner -->
\t\t\t</section>
\t\t\t<!-- End testimonials section -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--testimonial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 80,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/paragraphs/paragraph--testimonial.html.twig", "/home/izradasajta/sepia.izrada-sajta.info/themes/custom/sepia/templates/paragraphs/paragraph--testimonial.html.twig");
    }
}
