<?php

/* themes/custom/sepia/templates/paragraphs/paragraph--video-with-text.html.twig */
class __TwigTemplate_3b095367f3d7886f66c5d95afe8a7d3738a686a57d71d8a3b7396a06bc2ee4d3 extends Twig_Template
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
        $filters = array("trim" => 10, "render" => 29);
        $functions = array("attach_library" => 2, "file_url" => 8);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('trim', 'render'),
                array('attach_library', 'file_url')
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
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_video_full_screen", array()), "value", array()) == "1")) {
            echo "           
";
            // line 2
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("sepia/remove-class-from-body"), "html", null, true));
            echo "
            <section id=\"tt-intro\" class=\"video-intro\">
\t\t\t\t<div class=\"tt-intro-inner full-height-vh bg-dark tt-wrap\"> 
\t\t\t\t\t<div class=\"cover bg-transparent-3-dark\"></div>

\t\t\t\t\t<div class=\"youtube-bg full-cover\" 
\t\t\t\t\tstyle=\"background-image: url(";
            // line 8
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_background_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
            echo "); background-position: 50% 50%;\"
\t\t\t\t\tdata-property=\"{
\t\t\t\t\t\tvideoURL: '";
            // line 10
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_video_link", array()), "value", array())), "html", null, true));
            echo "',
\t\t\t\t\t\tcontainment: 'self',
\t\t\t\t\t\tquality: 'default',
\t\t\t\t\t\tstartAt: ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_start_at", array()), "value", array())), "html", null, true));
            echo ",
\t\t\t\t\t\tstopAt: ";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_stop_at", array()), "value", array())), "html", null, true));
            echo ",
\t\t\t\t\t\tautoPlay: ";
            // line 15
            if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_autoplay", array()), "value", array()) == "1")) {
                echo "true";
            } else {
                echo "false";
            }
            echo ",
\t\t\t\t\t\tloop: ";
            // line 16
            if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_loop", array()), "value", array()) == "1")) {
                echo "true";
            } else {
                echo "false";
            }
            echo ",
\t\t\t\t\t\tmute: true,
\t\t\t\t\t\tshowControls: false,
\t\t\t\t\t\tshowYTLogo: false,
\t\t\t\t\t\trealfullscreen: true,
\t\t\t\t\t\taddRaster: false,
\t\t\t\t\t\toptimizeDisplay: true,
\t\t\t\t\t\tstopMovieOnBlur: true
\t\t\t\t\t}\">

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"intro-caption caption-animate intro-caption-xxlg ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_content_position", array()), "value", array()), "html", null, true));
            echo "\">
\t\t\t\t\t\t";
            // line 29
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_heading_1", array()))) {
                echo "<h1 class=\"intro-title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_heading_1", array()), "html", null, true));
                echo "</h1>";
            }
            // line 30
            echo "\t                    ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_heading_2", array()))) {
                echo "<h2 class=\"intro-subtitle\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_heading_2", array()), "html", null, true));
                echo "</h2>";
            }
            // line 31
            echo "                        ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_video_text", array()))) {
                // line 32
                echo "\t\t\t\t\t\t<p class=\"intro-description max-width-650\">
                        ";
                // line 33
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_video_text", array()), "html", null, true));
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            }
            // line 36
            echo "                        ";
            if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_v_link1", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_v_link2", array())))) {
                // line 37
                echo "\t\t\t\t\t\t<div class=\"margin-top-30\">
\t\t\t\t\t\t";
                // line 38
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_v_link1", array()))) {
                    // line 39
                    echo "                        ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_v_link1", array()), "html", null, true));
                    echo "\t\t
\t                    ";
                }
                // line 40
                echo " \t
\t                    ";
                // line 41
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_v_link2", array()))) {
                    // line 42
                    echo "                        ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_v_link2", array()), "html", null, true));
                    echo "\t\t
\t                    ";
                }
                // line 44
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t</div>

\t\t\t\t</div>
</section>
            

";
        } else {
            // line 54
            echo "            
            
            
            
            
<section id=\"tt-intro\" class=\"video-intro\">
\t\t\t\t<div class=\"tt-intro-inner full-height-vh bg-dark\">

\t\t\t\t\t<div class=\"cover bg-transparent-2-dark\"></div>
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"youtube-bg full-cover\" 
\t\t\t\t\tstyle=\"background-image: url(";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_background_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
            echo "); background-position: 50% 50%;\"
\t\t\t\t\tdata-property=\"{
\t\t\t\t\t\tvideoURL: '";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_video_link", array()), "value", array())), "html", null, true));
            echo "',
\t\t\t\t\t\tcontainment: 'self',
\t\t\t\t\t\tquality: 'default',
\t\t\t\t\t\tstartAt: ";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_start_at", array()), "value", array())), "html", null, true));
            echo ",
\t\t\t\t\t\tstopAt: ";
            // line 71
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_stop_at", array()), "value", array())), "html", null, true));
            echo ",
                        autoPlay: ";
            // line 72
            if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_autoplay", array()), "value", array()) == "1")) {
                echo "true";
            } else {
                echo "false";
            }
            echo ",
\t\t\t\t\t\tloop: ";
            // line 73
            if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_loop", array()), "value", array()) == "1")) {
                echo "true";
            } else {
                echo "false";
            }
            echo ",
\t\t\t\t\t\tmute: true,
\t\t\t\t\t\tshowControls: false,
\t\t\t\t\t\tshowYTLogo: false,
\t\t\t\t\t\trealfullscreen: true,
\t\t\t\t\t\taddRaster: false,
\t\t\t\t\t\toptimizeDisplay: true,
\t\t\t\t\t\tstopMovieOnBlur: true
\t\t\t\t\t}\">

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"intro-caption caption-animate intro-caption-xxlg ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_content_position", array()), "value", array()), "html", null, true));
            echo "\">
\t\t\t\t\t\t";
            // line 86
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_heading_1", array()))) {
                echo "<h1 class=\"intro-title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_heading_1", array()), "html", null, true));
                echo "</h1>";
            }
            // line 87
            echo "\t                    ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_heading_2", array()))) {
                echo "<h2 class=\"intro-subtitle\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_heading_2", array()), "html", null, true));
                echo "</h2>";
            }
            // line 88
            echo "                        ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_video_text", array()))) {
                // line 89
                echo "\t\t\t\t\t\t<p class=\"intro-description max-width-650\">
                        ";
                // line 90
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_video_text", array()), "html", null, true));
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            }
            // line 93
            echo "                        ";
            if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_v_link1", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_v_link2", array())))) {
                // line 94
                echo "\t\t\t\t\t\t<div class=\"margin-top-30\">
\t\t\t\t\t\t";
                // line 95
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_v_link1", array()))) {
                    // line 96
                    echo "                        ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_v_link1", array()), "html", null, true));
                    echo "\t\t
\t                    ";
                }
                // line 97
                echo " \t
\t                    ";
                // line 98
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_v_link2", array()))) {
                    // line 99
                    echo "                        ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_v_link2", array()), "html", null, true));
                    echo "\t\t
\t                    ";
                }
                // line 101
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</section>
";
        }
        // line 108
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/sepia/templates/paragraphs/paragraph--video-with-text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 108,  288 => 104,  283 => 101,  277 => 99,  275 => 98,  272 => 97,  266 => 96,  264 => 95,  261 => 94,  258 => 93,  252 => 90,  249 => 89,  246 => 88,  239 => 87,  233 => 86,  229 => 85,  210 => 73,  202 => 72,  198 => 71,  194 => 70,  188 => 67,  183 => 65,  170 => 54,  161 => 47,  156 => 44,  150 => 42,  148 => 41,  145 => 40,  139 => 39,  137 => 38,  134 => 37,  131 => 36,  125 => 33,  122 => 32,  119 => 31,  112 => 30,  106 => 29,  102 => 28,  83 => 16,  75 => 15,  71 => 14,  67 => 13,  61 => 10,  56 => 8,  47 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/sepia/templates/paragraphs/paragraph--video-with-text.html.twig", "/vagrant/aykamontv/themes/custom/sepia/templates/paragraphs/paragraph--video-with-text.html.twig");
    }
}
