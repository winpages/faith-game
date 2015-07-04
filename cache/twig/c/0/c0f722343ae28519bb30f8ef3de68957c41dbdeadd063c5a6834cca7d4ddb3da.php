<?php

/* battle.html.twig */
class __TwigTemplate_c0f722343ae28519bb30f8ef3de68957c41dbdeadd063c5a6834cca7d4ddb3da extends Twig_Template
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
        $this->loadTemplate("battle.html.twig", "battle.html.twig", 1, "1756494341")->display($context);
    }

    public function getTemplateName()
    {
        return "battle.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* battle.html.twig */
class __TwigTemplate_c0f722343ae28519bb30f8ef3de68957c41dbdeadd063c5a6834cca7d4ddb3da_1756494341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "battle.html.twig", 1);
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
\t\t\t";
        // line 5
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "audio", array())) {
            // line 6
            echo "\t\t\t\t<audio autoplay src=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "audio", array()) == "shot")) {
                echo $this->env->getExtension('GravTwigExtension')->urlFunc((((("theme://static/audio/" . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "audio", array())) . "-") . twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array(), "method")))) . ".mp3"));
            } else {
                echo $this->env->getExtension('GravTwigExtension')->urlFunc((("theme://static/audio/" . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "audio", array())) . ".mp3"));
            }
            echo "\"></audio>
\t\t\t";
        }
        // line 8
        echo "
      ";
        // line 10
        echo "      <a href=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "a", array())) {
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "a", array());
        } else {
            echo "#";
        }
        echo "\" ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "a", array())) {
        } else {
            echo "onclick=\"play('shot-a')\"";
        }
        echo ">
        <div id=\"soldier_a\"></div>
      </a>
      <audio id=\"shot-a\" src=\"";
        // line 13
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://static/audio/shot-a.mp3");
        echo "\" ></audio>

      ";
        // line 16
        echo "      <a href=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "b", array())) {
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "b", array());
        } else {
            echo "#";
        }
        echo "\" ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "b", array())) {
        } else {
            echo "onclick=\"play('shot-b')\"";
        }
        echo ">
        <div id=\"soldier_b\"></div>
      </a>
      <audio id=\"shot-b\" src=\"";
        // line 19
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://static/audio/shot-b.mp3");
        echo "\" ></audio>

      ";
        // line 22
        echo "      <a href=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "c", array())) {
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "c", array());
        } else {
            echo "#";
        }
        echo "\" ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "c", array())) {
        } else {
            echo "onclick=\"play('shot-c')\"";
        }
        echo ">
        <div id=\"soldier_c\"></div>
      </a>
      <audio id=\"shot-c\" src=\"";
        // line 25
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://static/audio/shot-c.mp3");
        echo "\" ></audio>

      ";
        // line 28
        echo "      <a href=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "d", array())) {
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "d", array());
        } else {
            echo "#";
        }
        echo "\" ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "d", array())) {
        } else {
            echo "onclick=\"play('shot-d')\"";
        }
        echo ">
        <div id=\"soldier_d\"></div>
      </a>
      <audio id=\"shot-d\" src=\"";
        // line 31
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://static/audio/shot-d.mp3");
        echo "\" ></audio>

      ";
        // line 34
        echo "      <a href=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "e", array())) {
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "e", array());
        } else {
            echo "#";
        }
        echo "\" ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "e", array())) {
        } else {
            echo "onclick=\"play('shot-5')\"";
        }
        echo ">
        <div id=\"soldier_e\"></div>
      </a>
      <audio id=\"shot-5\" src=\"";
        // line 37
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://static/audio/shot-e.mp3");
        echo "\" ></audio>

      ";
        // line 40
        echo "      <a href=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "f", array())) {
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "f", array());
        } else {
            echo "#";
        }
        echo "\" ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "f", array())) {
        } else {
            echo "onclick=\"play('shot-6')\"";
        }
        echo ">
        <div id=\"soldier_f\"></div>
      </a>
      <audio id=\"shot-6\" src=\"";
        // line 43
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://static/audio/shot-f.mp3");
        echo "\" ></audio>

      ";
        // line 46
        echo "      <a href=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "g", array())) {
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "g", array());
        } else {
            echo "#";
        }
        echo "\" ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "g", array())) {
        } else {
            echo "onclick=\"play('shot-7')\"";
        }
        echo ">
        <div id=\"soldier_g\"></div>
      </a>
      <audio id=\"shot-7\" src=\"";
        // line 49
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://static/audio/shot-g.mp3");
        echo "\" ></audio>

\t\t\t";
        // line 52
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "type", array()) == "balloon")) {
            // line 53
            echo "\t\t\t\t<blockquote id=\"balloon-";
            echo twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array(), "method")));
            echo "\">
\t\t\t\t\t";
            // line 54
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
\t\t\t\t</blockquote>

\t\t\t";
            // line 58
            echo "\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "type", array()) == "thought")) {
            // line 59
            echo "\t\t\t\t<div id=\"thought-";
            echo twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array(), "method")));
            echo "\" ";
            if ((null === $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "no_dialog_fade", array()))) {
                echo "class=\"dialog-fade-in\"";
            }
            echo ">
\t\t\t\t\t<a href=\"";
            // line 60
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</a>
\t\t\t\t</div>

\t\t\t";
            // line 64
            echo "\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "type", array()) == "thought-chest")) {
            // line 65
            echo "\t\t\t\t\t<div id=\"thought-";
            echo twig_lower_filter($this->env, twig_first($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array(), "method")));
            echo "\">
\t\t\t\t\t\t<a href=\"";
            // line 66
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\" onmouseover=\"play('latch-open')\">
\t\t\t\t\t\t\t<div id=\"small-chest\">
\t\t\t\t\t\t\t\t<audio id=\"latch-open\" src=\"";
            // line 68
            echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://static/audio/latch-open.mp3");
            echo "\"></audio>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t";
            // line 74
            echo "\t\t\t";
        } elseif ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "type", array()) == "chest-closed") || "chest-open")) {
            // line 75
            echo "\t\t\t\t<a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\"><div id=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "type", array());
            echo "\"></div></a>
\t\t\t";
        } else {
            // line 77
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
\t\t\t";
        }
        // line 79
        echo "
\t\t\t";
        // line 81
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hint", array())) {
            // line 82
            echo "\t\t\t\t<div id=\"hint-";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hint", array());
            echo "\">
\t\t\t\t\t";
            // line 83
            if ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link_a", array()) && $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link_b", array())) && $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link_c", array()))) {
                // line 84
                echo "\t\t\t\t\t\t<div class=\"keyhole keyhole-left mouse-off\"></div>
\t\t\t\t\t\t<a href=\"";
                // line 85
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link_a", array());
                echo "\"><div class=\"keyhole keyhole-left mouse-on\"><div class=\"keyflash\"></div></div></a>
\t\t\t\t\t\t<div class=\"keyhole keyhole-center mouse-off\"></div>
\t\t\t\t\t\t<a href=\"";
                // line 87
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link_b", array());
                echo "\"><div class=\"keyhole keyhole-center mouse-on\"><div class=\"keyflash\"></div></div></a>
\t\t\t\t\t\t<div class=\"keyhole keyhole-right mouse-off\"></div>
\t\t\t\t\t\t<a href=\"";
                // line 89
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link_c", array());
                echo "\"><div class=\"keyhole keyhole-right mouse-on\"><div class=\"keyflash\"></div></div></a>
\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 90
(isset($context["page"]) ? $context["page"] : null), "header", array()), "keyholes", array()) == "on")) {
                // line 91
                echo "\t\t\t\t\t\t<div class=\"keyhole keyhole-left mouse-off\"></div>
\t\t\t\t\t\t<a href=\"";
                // line 92
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
                echo "\"><div class=\"keyhole keyhole-left mouse-on\"><div class=\"keyflash\"></div></div></a>
\t\t\t\t\t\t<div class=\"keyhole keyhole-center mouse-off\"></div>
\t\t\t\t    <a href=\"";
                // line 94
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
                echo "\"><div class=\"keyhole keyhole-center mouse-on\"><div class=\"keyflash\"></div></div></a>
\t\t\t\t\t\t<div class=\"keyhole keyhole-right mouse-off\"></div>
\t\t\t\t    <a href=\"";
                // line 96
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
                echo "\"><div class=\"keyhole keyhole-right mouse-on\"><div class=\"keyflash\"></div></div></a>
\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 97
(isset($context["page"]) ? $context["page"] : null), "header", array()), "keyholes", array()) == "a")) {
                // line 98
                echo "\t\t\t\t\t\t<div class=\"keyhole keyhole-left keyhole-out\"></div>
\t\t\t\t\t\t<div class=\"keyhole keyhole-left mouse-off keyhole-fade-in\"></div>
\t\t\t\t\t\t<div class=\"keyhole keyhole-center mouse-off\"></div>
\t\t\t\t\t\t<div class=\"keyhole keyhole-right mouse-off\"></div>
\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 102
(isset($context["page"]) ? $context["page"] : null), "header", array()), "keyholes", array()) == "b")) {
                // line 103
                echo "\t\t\t\t\t\t<div class=\"keyhole keyhole-left mouse-off\"></div>
\t\t\t\t\t\t<div class=\"keyhole keyhole-center keyhole-out\"></div>
\t\t\t\t\t\t<div class=\"keyhole keyhole-center mouse-off keyhole-fade-in\"></div>
\t\t\t\t\t\t<div class=\"keyhole keyhole-right mouse-off\"></div>
\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 107
(isset($context["page"]) ? $context["page"] : null), "header", array()), "keyholes", array()) == "c")) {
                // line 108
                echo "\t\t\t\t\t\t<div class=\"keyhole keyhole-left mouse-off\"></div>
\t\t\t\t\t\t<div class=\"keyhole keyhole-center mouse-off\"></div>
\t\t\t\t\t\t<div class=\"keyhole keyhole-right keyhole-out\"></div>
\t\t\t\t\t\t<div class=\"keyhole keyhole-right mouse-off keyhole-fade-in\"></div>
\t\t\t\t\t";
            } else {
                // line 113
                echo "\t\t\t\t\t<div class=\"keyhole keyhole-left mouse-off\"></div>
\t\t\t\t\t<div class=\"keyhole keyhole-center mouse-off\"></div>
\t\t\t\t\t<div class=\"keyhole keyhole-right mouse-off\"></div>
\t\t\t\t\t";
            }
            // line 117
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 119
        echo "
\t\t\t";
        // line 121
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "keys", array())) {
            // line 122
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "keys", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 123
                echo "\t\t\t\t\t<div class=\"key\"></div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "\t\t\t";
        }
        // line 126
        echo "
\t\t\t";
        // line 128
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "effect", array()) == "final-fade")) {
            // line 129
            echo "\t\t\t\t<div id=\"white-screen\"></div>
\t\t\t";
        }
        // line 131
        echo "
      ";
        // line 133
        echo "      <div id=\"return\">
        <a href=\"";
        // line 134
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "return_link", array());
        echo "\">Return</a>
      </div>
\t";
    }

    public function getTemplateName()
    {
        return "battle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 134,  417 => 133,  414 => 131,  410 => 129,  407 => 128,  404 => 126,  401 => 125,  394 => 123,  389 => 122,  386 => 121,  383 => 119,  379 => 117,  373 => 113,  366 => 108,  364 => 107,  358 => 103,  356 => 102,  350 => 98,  348 => 97,  344 => 96,  339 => 94,  334 => 92,  331 => 91,  329 => 90,  325 => 89,  320 => 87,  315 => 85,  312 => 84,  310 => 83,  305 => 82,  302 => 81,  299 => 79,  293 => 77,  285 => 75,  282 => 74,  274 => 68,  269 => 66,  264 => 65,  261 => 64,  253 => 60,  244 => 59,  241 => 58,  235 => 54,  230 => 53,  227 => 52,  222 => 49,  206 => 46,  201 => 43,  185 => 40,  180 => 37,  164 => 34,  159 => 31,  143 => 28,  138 => 25,  122 => 22,  117 => 19,  101 => 16,  96 => 13,  80 => 10,  77 => 8,  67 => 6,  64 => 5,  61 => 3,  58 => 2,  19 => 1,);
    }
}
