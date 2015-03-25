<?php

/* OrgaTimeBundle:Default:index.html.twig */
class __TwigTemplate_071e1091f2cce74aef261d2108f442b56f8d64954942879724e4fe815446353f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Time</title>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t    <meta name=\"description\" content=\"Demo project with jQuery\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link rel=\"stylesheet\" href=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css\">\t
\t\t<style type=\"text/css\"></style>
\t</head>
\t<body>
\t\t<p>Temps écoulé </p><br>
\t\tStart: ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start")), "d/m/y"), "html", null, true);
        echo " <br>
\t\tToday: ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")), "d/m/y"), "html", null, true);
        echo " <br>
\t\tNombre de jours: ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["interval"]) ? $context["interval"] : $this->getContext($context, "interval"))), "html", null, true);
        echo "
\t</body>
\t<script src=\"http://code.jquery.com/jquery-1.10.2.min.js\"></script>
\t<script type=\"text/javascript\">
\t\tjQuery(function(){
\t\t\t
\t\t});
\t</script>
</html>
";
    }

    public function getTemplateName()
    {
        return "OrgaTimeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }
}
