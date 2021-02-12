<?php

/* themes/custom/sepia/templates/form/form.html.twig */
class __TwigTemplate_a18115fd79a94cbd24f3209339bfa26734e5c96d9052768c53d7e843bd6c0c97 extends Twig_Template
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
        if (($this->getAttribute(($context["element"] ?? null), "#form_id", array(), "array") == "search_block_form")) {
            // line 2
            echo "
  <form action=\"";
            // line 3
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "#action", array(), "array"), "html", null, true));
            echo "\" method=\"get\" id=\"tt-clobal-search-form\" class=\"form-btn-inside\" accept-charset=\"UTF-8\" data-drupal-form-fields=\"edit-keys\">
  
<input title=\"Enter the terms you wish to search for.\" data-drupal-selector=\"edit-keys\" type=\"text\" id=\"edit-keys\" name=\"keys\" value=\"\" class=\"form-search form-control tt-clobal-search-input\" placeholder=\"Type your keywords ...\">
</input>
 <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
   
  </form>
";
        } else {
            // line 11
            echo "
  <form";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
    ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
            echo "
  </form>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  62 => 12,  59 => 11,  48 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/form/form.html.twig", "/home/izradasajta/sepia.izrada-sajta.info/themes/custom/sepia/templates/form/form.html.twig");
    }
}
