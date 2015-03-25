<?php

/* SdzBlogBundle::layout.html.twig */
class __TwigTemplate_61c50845600268f0718983a3d31f1d58cd93eeee9682d60f42a870e80c1589a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "\t    <head>
\t\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t</head>
\t";
    }

    public function block_title($context, array $blocks = array())
    {
        echo "LE BLOG DE LA MORT";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  57 => 10,  45 => 6,  41 => 4,  38 => 3,  11 => 1,);
    }
}
