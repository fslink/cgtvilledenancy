<?php

/* SdzBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_d3ad881d339001e50738a01c4d4a0fac81e44d16791765f7f6411475b0af3396 extends Twig_Template
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
        // line 1
        echo "<h3>Les derniers articles</h3>

<ul class=\"nav nav-pills nav-stacked\">
\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 5
            echo "\t    <ul>
\t    \t<li><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdz_blog_voir", array("id" => $this->getAttribute($context["liste"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["liste"], "titre", array()), "html", null, true);
            echo "</a></li>
\t    </ul>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
