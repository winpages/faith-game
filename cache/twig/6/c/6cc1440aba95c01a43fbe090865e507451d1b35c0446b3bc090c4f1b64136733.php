<?php

/* verse.html.twig */
class __TwigTemplate_6cc1440aba95c01a43fbe090865e507451d1b35c0446b3bc090c4f1b64136733 extends Twig_Template
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
        $this->loadTemplate("verse.html.twig", "verse.html.twig", 1, "80823170")->display($context);
        // line 22
        echo "
[:1]|lower
";
    }

    public function getTemplateName()
    {
        return "verse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 22,  19 => 1,);
    }
}


/* verse.html.twig */
class __TwigTemplate_6cc1440aba95c01a43fbe090865e507451d1b35c0446b3bc090c4f1b64136733_80823170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "verse.html.twig", 1);
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
        echo "
\t\t";
        // line 5
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "audio", array())) {
            // line 6
            echo "\t\t\t<audio autoplay src=\"";
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "audio", array())) {
                echo $this->env->getExtension('GravTwigExtension')->urlFunc((("theme://static/audio/" . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "audio", array())) . ".mp3"));
            }
            echo "\"></audio>
\t\t";
        }
        // line 8
        echo "
    <div id=\"verse-text\">
\t\t\t";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>
      ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "lines", array()) == "3")) {
            // line 13
            echo "      <img src=\"";
            echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://static/images/verse_3_line.jpg");
            echo "\" class=\"verse-text\"/>
      ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 14
(isset($context["page"]) ? $context["page"] : null), "header", array()), "lines", array()) == "4")) {
            // line 15
            echo "      <img src=\"";
            echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://static/images/verse_4_line.jpg");
            echo "\" class=\"verse-text\"/>
      ";
        }
        // line 17
        echo "
      <a href=\"";
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
        echo "\"><div id=\"rings\"></div></a>

\t";
    }

    public function getTemplateName()
    {
        return "verse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 18,  109 => 17,  103 => 15,  101 => 14,  96 => 13,  94 => 12,  89 => 10,  85 => 8,  77 => 6,  74 => 5,  71 => 3,  68 => 2,  51 => 1,  21 => 22,  19 => 1,);
    }
}
