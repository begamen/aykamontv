<?php

/* themes/custom/sepia/templates/views/views-view-unformatted--latest-news--block_1.html.twig */
class __TwigTemplate_f04febaa6840d3df2a87d6ff6303b88f6e9d1f4562b50f8b2a07e7b8e4eced90 extends Twig_Template
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
        $tags = array("for" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
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
        echo "<div class=\"latest-news-section-inner tt-wrap\"> 
 <div class=\"latest-news-carousel\">
<div class=\"owl-carousel cursor-grab nav-outside-top\" data-items=\"3\" data-margin=\"30\" data-loop=\"true\" data-dots=\"false\" data-nav=\"true\" data-nav-speed=\"500\" data-autoplay=\"true\" data-autoplay-timeout=\"5000\" data-autoplay-speed=\"500\" data-autoplay-hover-pause=\"true\" data-tablet-landscape=\"3\" data-tablet-portrait=\"2\" data-mobile-landscape=\"1\" data-mobile-portrait=\"1\">

   ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 6
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/views/views-view-unformatted--latest-news--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  53 => 6,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/views/views-view-unformatted--latest-news--block_1.html.twig", "/vagrant/aykamontv/themes/custom/sepia/templates/views/views-view-unformatted--latest-news--block_1.html.twig");
    }
}
