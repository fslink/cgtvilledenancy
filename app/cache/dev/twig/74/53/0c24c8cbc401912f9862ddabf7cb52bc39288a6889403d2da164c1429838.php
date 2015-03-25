<?php

/* SdzBlogBundle:Blog:email.html.twig */
class __TwigTemplate_74530c24c8cbc401912f9862ddabf7cb52bc39288a6889403d2da164c1429838 extends Twig_Template
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
        echo "<html>
<head></head>
<body>

<p>\t";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["salutations"]) ? $context["salutations"] : $this->getContext($context, "salutations"))), "html", null, true);
        echo "</p>
\t<p> 
\t    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nombres"]) ? $context["nombres"] : $this->getContext($context, "nombres")));
        foreach ($context['_seq'] as $context["_key"] => $context["nombre"]) {
            // line 8
            echo "\t\t    <span class=\"";
            if (($context["nombre"] % 2 == 0)) {
                echo "pair";
            } else {
                echo "impair";
            }
            echo "\"> ";
            echo twig_escape_filter($this->env, $context["nombre"], "html", null, true);
            echo "</span>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nombre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</p>
</body>
</html>


";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  34 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }
}
