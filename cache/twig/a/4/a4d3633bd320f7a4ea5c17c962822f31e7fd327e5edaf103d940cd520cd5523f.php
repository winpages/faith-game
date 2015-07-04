<?php

/* partials/base.html.twig */
class __TwigTemplate_a4d3633bd320f7a4ea5c17c962822f31e7fd327e5edaf103d940cd520cd5523f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">
\t<head>
\t\t";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "\t</head>
\t<body ondragstart=\"return false;\">
\t\t";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "\t</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t<meta charset=\"utf-8\">
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
\t\t\t";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array())) {
            // line 10
            echo "\t\t\t\t<meta name=\"description\" content=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
            echo "\">
\t\t\t";
        }
        // line 12
        echo "
\t\t\t";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tags", array())) {
            // line 14
            echo "\t\t\t\t<meta name=\"keywords\" content=\"";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                echo $context["tag"];
                echo ",";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\" />
\t\t\t";
        }
        // line 16
        echo "
\t\t\t";
        // line 17
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "robots", array())) {
            // line 18
            echo "\t\t\t\t<meta name=\"robots\" content=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "robots", array());
            echo "\" />
\t\t\t";
        }
        // line 20
        echo "\t\t\t<title>";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
\t\t\t";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "\t\t";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://static/css/normalize.css", 1 => 201), "method");
        // line 23
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://static/css/style.css", 1 => 200), "method");
        // line 24
        echo "\t\t\t\t";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "Css", array(), "method");
        echo "
\t\t\t";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "\t\t<div id=\"container\" class=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template", array());
        echo " ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "effect", array())) {
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "effect", array());
        }
        echo "\">
\t\t\t";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "\t\t</div>
\t\t";
        // line 33
        $this->displayBlock('javascript', $context, $blocks);
        // line 45
        echo "\t\t";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
    }

    // line 33
    public function block_javascript($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://static/js/jquery-2.1.1.min.js"), "method");
        // line 35
        echo "\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://static/js/main.js"), "method");
        // line 36
        echo "\t\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "auto_redirect", array())) {
            // line 37
            echo "\t\t\t\t\t<script type=\"text/JavaScript\">
\t\t\t\t\t<!--
\t\t\t\t\tsetTimeout(\"location.href = '";
            // line 39
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "';\",";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "auto_redirect", array());
            echo "*1000);
\t\t\t\t\t-->
\t\t\t\t\t</script>
\t\t\t\t";
        }
        // line 43
        echo "\t\t\t";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 43,  164 => 39,  160 => 37,  157 => 36,  154 => 35,  151 => 34,  148 => 33,  143 => 31,  139 => 45,  137 => 33,  134 => 32,  132 => 31,  123 => 30,  120 => 29,  113 => 24,  110 => 23,  107 => 22,  104 => 21,  100 => 26,  98 => 21,  90 => 20,  84 => 18,  82 => 17,  79 => 16,  65 => 14,  63 => 13,  60 => 12,  54 => 10,  52 => 9,  47 => 6,  44 => 5,  38 => 46,  36 => 29,  32 => 27,  30 => 5,  24 => 1,);
    }
}
