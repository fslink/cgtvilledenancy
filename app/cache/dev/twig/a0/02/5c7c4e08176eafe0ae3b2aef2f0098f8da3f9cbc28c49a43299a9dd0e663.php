<?php

/* ::layout.html.twig */
class __TwigTemplate_a0025c7c4e08176eafe0ae3b2aef2f0098f8da3f9cbc28c49a43299a9dd0e663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
\t";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "\t

\t\t<body>
\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div id=\"header\" class=\"hero-unit\">
\t\t\t\t\t<h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mon Projet Symfony2"), "html", null, true);
        echo "</h1>
\t\t\t\t\t<p> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ce projet est propulsé par Symfony2"), "html", null, true);
        echo "</p>
\t\t\t\t\t<p><a class=\"btn btn-primary btn-large\" href=\"http://openclassrooms.com/\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lire le Tutoriel"), "html", null, true);
        echo "</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div id=\"menu\" class=\"span3\">
\t\t\t\t\t\t\t<h3>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Le blog"), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("sdz_blog_home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accueil"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("sdz_blog_ajouter");
        echo "\"></a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ajouter"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SdzBlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t\t";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<hr>

\t\t\t\t<footer>
\t\t\t\t\t<p> 2007-2015 Ministry of Type</p>
\t\t\t\t</footer>
\t\t\t</div>
\t\t";
        // line 44
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6ec4113_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6ec4113_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6ec4113_bootstrap_1.js");
            // line 45
            echo "\t\t    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
\t\t    <script type=\"text/javascript\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"> </script>
\t\t";
        } else {
            // asset "6ec4113"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6ec4113") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6ec4113.js");
            // line 45
            echo "\t\t    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
\t\t    <script type=\"text/javascript\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"> </script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 48
        echo "\t</body>
</html>";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "\t\t <head>
\t\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t\t </head>   
\t";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "LAYOUT";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t\t";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 34,  152 => 33,  145 => 8,  142 => 7,  136 => 6,  131 => 10,  129 => 7,  125 => 6,  121 => 4,  118 => 3,  113 => 48,  107 => 46,  104 => 45,  97 => 46,  94 => 45,  90 => 44,  79 => 35,  77 => 33,  71 => 30,  63 => 27,  57 => 26,  52 => 24,  45 => 20,  41 => 19,  37 => 18,  29 => 12,  27 => 3,  23 => 1,);
    }
}
