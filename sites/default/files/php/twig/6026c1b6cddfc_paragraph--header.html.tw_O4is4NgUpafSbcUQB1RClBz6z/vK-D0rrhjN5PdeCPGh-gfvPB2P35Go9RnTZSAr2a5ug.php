<?php

/* themes/custom/sepia/templates/paragraphs/paragraph--header.html.twig */
class __TwigTemplate_e3a640cf870a1526c5cba342ed8103f5dcddc7aecfa4388db23079793f03e722 extends Twig_Template
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
        $tags = array("if" => 1, "set" => 2);
        $filters = array("render" => 1);
        $functions = array("drupal_entity" => 9);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array('render'),
                array('drupal_entity')
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
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_header_style", array()))) {
            // line 2
            echo "  ";
            $context["header_style"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_header_style", array()), "#items", array(), "array"), "getString", array(), "method");
        }
        // line 4
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_menu_align", array()))) {
            // line 5
            echo "  ";
            $context["menu_align"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_menu_align", array()), "#items", array(), "array"), "getString", array(), "method");
        }
        // line 7
        echo "<header id=\"header\" ";
        if ((($context["menu_align"] ?? null) == "menu-align-center")) {
            echo "class=\"menu-align-center\"";
        } else {
            echo "class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_style"] ?? null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["menu_align"] ?? null), "html", null, true));
            echo "\"";
        }
        echo ">
   <div class=\"header-inner tt-wrap\">
";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "sepia_branding"), "html", null, true));
        echo "
   <nav class=\"tt-main-menu\">
\t\t<div id=\"tt-m-menu-toggle-btn\">
\t\t\t<span></span>
\t\t</div>
\t
\t\t\t\t\t<div class=\"tt-menu-tools\">
\t\t\t\t\t
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 18
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_search", array()), "value", array()) == "1")) {
            // line 19
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tt-clobal-search-trigger\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tt-clobal-search\">
\t\t\t\t\t\t\t\t\t<div class=\"tt-clobal-search-inner\">
\t\t\t\t\t\t\t\t\t\t<span class=\"tt-clobal-search-title\">Search</span>
\t\t\t\t\t";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "sepia_search"), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t<div class=\"tt-clobal-search-close\"><i class=\"tt-close-btn tt-close-light\"></i></div>
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 32
        echo "                            ";
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_language_menu_on_off", array()), "value", array()) == "1")) {
            // line 33
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_menu_lng", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t

\t\t\t\t\t\t\t";
        // line 37
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_show_button", array()), "value", array()) == "1")) {
            // line 38
            echo "\t\t\t\t\t\t\t<li class=\"button-link\">
\t\t\t\t\t\t\t\t";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_button_link", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tt-menu-collapse ";
        // line 45
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_submenu_dark_style", array()), "value", array()) == "1")) {
            echo "tt-submenu-dark";
        }
        echo "\">
\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "sepia_main_menu"), "html", null, true));
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div> 

\t\t\t\t</nav> 
\t\t\t

\t\t\t</div>

\t\t</header>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  130 => 45,  125 => 42,  119 => 39,  116 => 38,  114 => 37,  110 => 35,  104 => 33,  101 => 32,  91 => 25,  83 => 19,  81 => 18,  69 => 9,  55 => 7,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/paragraphs/paragraph--header.html.twig", "/vagrant/aykamontv/themes/custom/sepia/templates/paragraphs/paragraph--header.html.twig");
    }
}
