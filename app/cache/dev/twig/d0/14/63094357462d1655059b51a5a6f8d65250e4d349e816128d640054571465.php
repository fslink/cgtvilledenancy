<?php

/* SdzBlogBundle:Blog:boucle.html.twig */
class __TwigTemplate_d01463094357462d1655059b51a5a6f8d65250e4d349e816128d640054571465 extends Twig_Template
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
\t<head></head>
\t<body>
\t\t<select>
\t\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")));
        foreach ($context['_seq'] as $context["key"] => $context["valeur"]) {
            // line 6
            echo "\t\t    \t<option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["valeur"], "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['valeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t\t</select>
\t\t\t
\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nombres"]) ? $context["nombres"] : $this->getContext($context, "nombres")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["valeur"]) {
            // line 11
            echo "\t\t\t\t<span class=\"";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                echo "pair";
            } else {
                echo "impair";
            }
            echo "\">
\t\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $context["valeur"], "html", null, true);
            echo "
\t\t\t\t</span>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t</select>
<\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:boucle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  70 => 12,  61 => 11,  44 => 10,  40 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
