<?php

/* themes/custom/sepia/templates/paragraphs/paragraph--gallery-item.html.twig */
class __TwigTemplate_e6fc60f67468094718ba0ce461e3cd7051fc04f1bbce51bd0ec2f2d3e60afc5a extends Twig_Template
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
        $tags = array("set" => 2, "if" => 6);
        $filters = array("replace" => 3, "lower" => 6, "render" => 16);
        $functions = array("file_url" => 10);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('replace', 'lower', 'render'),
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
";
        // line 2
        $context["cat"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_gallery_category", array()), "#items", array(), "array"), "getString", array(), "method");
        // line 3
        $context["cf"] = twig_replace_filter(($context["cat"] ?? null), array(" " => "-", "&" => "and"));
        // line 4
        echo "  

  <div class=\"isotope-item ";
        // line 6
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_image_2x_height", array()), "value", array()) == "1")) {
            echo "iso-height-2 ";
        } else {
            echo "iso-height-1";
        }
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_lower_filter($this->env, ($context["cf"] ?? null)), "html", null, true));
        echo "\">
   <div class=\"gallery-list-item\">
      <div class=\"gl-item-image-wrap\">
         <a href=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_link", array()), "value", array()), "html", null, true));
        echo "\" class=\"gl-item-image-inner\">
\t\t\t<div class=\"gl-item-image bg-image\" style=\"background-image: url(";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_gallery_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo "); background-position: 50% 50%\"></div>
            <span class=\"gl-item-image-zoom\"></span>
\t\t </a>
      </div>
      <div class=\"gl-item-info\">
\t\t<div class=\"gl-item-caption\">
";
        // line 16
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_gallery_title", array()))) {
            echo "<h2 class=\"gl-item-title\"><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_link", array()), "value", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_gallery_title", array()), "html", null, true));
            echo "</a></h2>";
        }
        // line 17
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_gallery_category", array()))) {
            echo "<span class=\"gl-item-category\"><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_gallery_category_link", array()), "value", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_gallery_category", array()), "html", null, true));
            echo "</a></span>";
        }
        // line 18
        echo "\t\t</div>
     </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--gallery-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 18,  87 => 17,  79 => 16,  70 => 10,  66 => 9,  54 => 6,  50 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/paragraphs/paragraph--gallery-item.html.twig", "/vagrant/aykamontv/themes/custom/sepia/templates/paragraphs/paragraph--gallery-item.html.twig");
    }
}
