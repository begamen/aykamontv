<?php

/* {# inline_template_start #}<div class="cc-item">
    <article class="blog-list-item">
	<a href="blog-single.html" class="bl-item-image">{{ field_image }}</a>
		<div class="bl-item-info">
			<div class="bl-item-category">{{ field_tags }}</div>
										{{ title }}
			<div class="bl-item-meta"> 
				<span class="published">{{ created }}</span>
				<span class="posted-by">{{ "- by"|t }} <a href="#" title="View all posts by Martin Vegas">{{ uid }}</a></span>
			</div>
                         <div class="bl-item-desc" data-max-words="14">{{ body }}  ...</div>
                      <a href="{{ path }}" class="bl-item-read-more" title="Read More"><span></span></a>

			<ul class="bl-item-attr">
				<li>
				<a href="{{ path }}" class="bl-item-comments-count" title="Read the comments"><i class="fa fa-comment-o"></i> {{ comment_count }}</a>
												
				</li>
											
			</ul>
			

		</div>
	</article>
</div> */
class __TwigTemplate_701057e051614202a0aeddf3032b40127994ab33c16ebda2c881ecad3cda3ec2 extends Twig_Template
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
        $filters = array("t" => 9);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('t'),
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
        echo "<div class=\"cc-item\">
    <article class=\"blog-list-item\">
\t<a href=\"blog-single.html\" class=\"bl-item-image\">";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "</a>
\t\t<div class=\"bl-item-info\">
\t\t\t<div class=\"bl-item-category\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_tags"] ?? null), "html", null, true));
        echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "
\t\t\t<div class=\"bl-item-meta\"> 
\t\t\t\t<span class=\"published\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo "</span>
\t\t\t\t<span class=\"posted-by\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("- by")));
        echo " <a href=\"#\" title=\"View all posts by Martin Vegas\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["uid"] ?? null), "html", null, true));
        echo "</a></span>
\t\t\t</div>
                         <div class=\"bl-item-desc\" data-max-words=\"14\">";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "  ...</div>
                      <a href=\"";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\" class=\"bl-item-read-more\" title=\"Read More\"><span></span></a>

\t\t\t<ul class=\"bl-item-attr\">
\t\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "\" class=\"bl-item-comments-count\" title=\"Read the comments\"><i class=\"fa fa-comment-o\"></i> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_count"] ?? null), "html", null, true));
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t</ul>
\t\t\t

\t\t</div>
\t</article>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"cc-item\">
    <article class=\"blog-list-item\">
\t<a href=\"blog-single.html\" class=\"bl-item-image\">{{ field_image }}</a>
\t\t<div class=\"bl-item-info\">
\t\t\t<div class=\"bl-item-category\">{{ field_tags }}</div>
\t\t\t\t\t\t\t\t\t\t{{ title }}
\t\t\t<div class=\"bl-item-meta\"> 
\t\t\t\t<span class=\"published\">{{ created }}</span>
\t\t\t\t<span class=\"posted-by\">{{ \"- by\"|t }} <a href=\"#\" title=\"View all posts by Martin Vegas\">{{ uid }}</a></span>
\t\t\t</div>
                         <div class=\"bl-item-desc\" data-max-words=\"14\">{{ body }}  ...</div>
                      <a href=\"{{ path }}\" class=\"bl-item-read-more\" title=\"Read More\"><span></span></a>

\t\t\t<ul class=\"bl-item-attr\">
\t\t\t\t<li>
\t\t\t\t<a href=\"{{ path }}\" class=\"bl-item-comments-count\" title=\"Read the comments\"><i class=\"fa fa-comment-o\"></i> {{ comment_count }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t</ul>
\t\t\t

\t\t</div>
\t</article>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 16,  100 => 12,  96 => 11,  89 => 9,  85 => 8,  80 => 6,  76 => 5,  71 => 3,  67 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"cc-item\">
    <article class=\"blog-list-item\">
\t<a href=\"blog-single.html\" class=\"bl-item-image\">{{ field_image }}</a>
\t\t<div class=\"bl-item-info\">
\t\t\t<div class=\"bl-item-category\">{{ field_tags }}</div>
\t\t\t\t\t\t\t\t\t\t{{ title }}
\t\t\t<div class=\"bl-item-meta\"> 
\t\t\t\t<span class=\"published\">{{ created }}</span>
\t\t\t\t<span class=\"posted-by\">{{ \"- by\"|t }} <a href=\"#\" title=\"View all posts by Martin Vegas\">{{ uid }}</a></span>
\t\t\t</div>
                         <div class=\"bl-item-desc\" data-max-words=\"14\">{{ body }}  ...</div>
                      <a href=\"{{ path }}\" class=\"bl-item-read-more\" title=\"Read More\"><span></span></a>

\t\t\t<ul class=\"bl-item-attr\">
\t\t\t\t<li>
\t\t\t\t<a href=\"{{ path }}\" class=\"bl-item-comments-count\" title=\"Read the comments\"><i class=\"fa fa-comment-o\"></i> {{ comment_count }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t</ul>
\t\t\t

\t\t</div>
\t</article>
</div>", "");
    }
}
