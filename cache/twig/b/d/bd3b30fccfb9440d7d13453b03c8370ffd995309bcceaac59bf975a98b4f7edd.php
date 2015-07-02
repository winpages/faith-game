<?php

/* post.html.twig */
class __TwigTemplate_bd3b30fccfb9440d7d13453b03c8370ffd995309bcceaac59bf975a98b4f7edd extends Twig_Template
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
        $this->loadTemplate("post.html.twig", "post.html.twig", 1, "1928962205")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* post.html.twig */
class __TwigTemplate_bd3b30fccfb9440d7d13453b03c8370ffd995309bcceaac59bf975a98b4f7edd_1928962205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t\t\t<article class=\"post\">
\t\t\t\t<h2>";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
\t\t\t\t<div class=\"meta\">";
        // line 5
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo "&ensp;";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo "&ensp;";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "Y");
        echo " in ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo "<a href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/tag:";
            echo $context["tag"];
            echo "\">";
            echo $context["tag"];
            echo "</a>&ensp;";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
\t\t\t\t";
        // line 6
        if ((isset($context["big_header"]) ? $context["big_header"] : null)) {
            // line 7
            echo "            \t\t";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropResize", array(0 => 900, 1 => 600), "method"), "html", array());
            echo "
        \t\t";
        } else {
            // line 9
            echo "            \t\t";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropZoom", array(0 => 900, 1 => 300), "method"), "html", array());
            echo "
        \t\t";
        }
        // line 11
        echo "\t\t\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "

\t\t\t\t";
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "disqus_shortname", array())) {
            // line 14
            echo "\t\t\t\t\t";
            if (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "comments", array()) == "false")) {
                // line 15
                echo "\t\t\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate("partials/disqus-comments.html.twig", "post.html.twig", 16)->display($context);
                // line 17
                echo "\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t";
        }
        // line 19
        echo "\t\t\t</article>
\t";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 19,  125 => 18,  122 => 17,  119 => 16,  116 => 15,  113 => 14,  111 => 13,  105 => 11,  99 => 9,  93 => 7,  91 => 6,  68 => 5,  64 => 4,  61 => 3,  58 => 2,  19 => 1,);
    }
}
