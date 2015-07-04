<?php

/* verse.html.twig */
class __TwigTemplate_3ac2c7ad8a7517f5d52c3012de3a1dbd064c1932c399a2cf71e0ff4f173b419c extends Twig_Template
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
        $this->loadTemplate("verse.html.twig", "verse.html.twig", 1, "1629620773")->display($context);
        // line 21
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
        return array (  21 => 21,  19 => 1,);
    }
}


/* verse.html.twig */
class __TwigTemplate_3ac2c7ad8a7517f5d52c3012de3a1dbd064c1932c399a2cf71e0ff4f173b419c_1629620773 extends Twig_Template
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
            echo $this->env->getExtension('GravTwigExtension')->urlFunc((("theme://static/audio/" . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "audio", array())) . ".mp3"));
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
      ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "lines", array()) == "3")) {
            // line 12
            echo "      <img src=\"";
            echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://static/images/verse_3_line.jpg");
            echo "\"/>
      ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 13
(isset($context["page"]) ? $context["page"] : null), "header", array()), "lines", array()) == "4")) {
            // line 14
            echo "      <img src=\"";
            echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://static/images/verse_4_line.jpg");
            echo "\"/>
      ";
        }
        // line 16
        echo "\t\t</div>
      <a href=\"";
        // line 17
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
        return array (  109 => 17,  106 => 16,  100 => 14,  98 => 13,  93 => 12,  91 => 11,  87 => 10,  83 => 8,  77 => 6,  74 => 5,  71 => 3,  68 => 2,  51 => 1,  21 => 21,  19 => 1,);
    }
}
