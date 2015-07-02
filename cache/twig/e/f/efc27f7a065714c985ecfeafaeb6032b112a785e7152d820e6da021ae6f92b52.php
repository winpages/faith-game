<?php

/* partials/base.html.twig */
class __TwigTemplate_efc27f7a065714c985ecfeafaeb6032b112a785e7152d820e6da021ae6f92b52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        // line 91
        echo "\t</head>
\t<body>
\t\t<header id=\"page-header\">
\t\t\t<div id=\"masthead\">
\t\t\t\t<a href=\"";
        // line 95
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\"><h1 id=\"site-title\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</h1></a>
\t\t\t\t<p id=\"site-slogan\">";
        // line 96
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
        echo "</p>
\t\t\t</div>
\t\t</header>
\t\t<section id=\"content\">
\t\t\t";
        // line 100
        $this->displayBlock('content', $context, $blocks);
        // line 101
        echo "\t\t</section>
\t\t<footer id=\"page-footer\">
\t\t\t<section>
\t\t\t\t<nav id=\"footer-menu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 107
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 108
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 109
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t\t\t</ul>

\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 117
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/random\">Random Post</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 122
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/blog.rss\">Feed</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t";
        // line 125
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "github_account", array())) {
            // line 126
            echo "\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://github.com/";
            // line 128
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "github_account", array());
            echo "\">GitHub</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 132
        echo "\t\t\t\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "twitter_account", array())) {
            // line 133
            echo "\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/";
            // line 135
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "twitter_account", array());
            echo "\">Twitter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 139
        echo "\t\t\t\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "dribbble_account", array())) {
            // line 140
            echo "\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://dribbble.com/";
            // line 142
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "dribbble_account", array());
            echo "\">Dribbble</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 146
        echo "\t\t\t\t</nav>
\t\t\t</section>
\t\t\t";
        // line 148
        $this->displayBlock('javascript', $context, $blocks);
        // line 153
        echo "\t\t</footer>
\t</body>
</html>";
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
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array())) {
            // line 10
            echo "\t\t\t\t<meta name=\"author\" content=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
            echo "\" />
\t\t\t";
        }
        // line 12
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array())) {
            // line 13
            echo "\t\t\t\t<meta name=\"description\" content=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
            echo "\">
\t\t\t";
        }
        // line 15
        echo "
\t\t\t";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tags", array())) {
            // line 17
            echo "\t<meta name=\"keywords\" content=\"";
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
";
        }
        // line 19
        echo "
\t\t\t<!-- Twitter Card -->\t\t
\t\t\t<meta name=\"twitter:card\" content=\"summary\"  />
\t\t\t";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "twitter_accoount", array())) {
            // line 23
            echo "\t\t\t\t<meta name=\"twitter:site\" content=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "twitter_account", array());
            echo "\" />
\t\t\t";
        } else {
            // line 25
            echo "\t\t\t\t<meta name=\"twitter:site\" content=\"Not set\" />
\t\t\t";
        }
        // line 27
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            // line 28
            echo "\t\t\t\t<meta name=\"twitter:title\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
            echo "\" />
\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t<meta name=\"twitter:title\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
            echo "\" />
\t\t\t";
        }
        // line 32
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            echo "}
\t\t\t\t<meta name=\"twitter:description\" content=\"";
            // line 33
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\" />
\t\t\t";
        } else {
            // line 35
            echo "\t\t\t\t<meta name=\"twitter:description\" content=\"";
            echo $this->env->getExtension('GravTwigExtension')->truncateFilter(strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())), 200);
            echo "\" />
\t\t\t";
        }
        // line 37
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "image", array())) {
            // line 38
            echo "\t\t\t\t<meta name=\"twitter:image\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "image", array());
            echo "\" />
\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t<meta name=\"twitter:image\" content=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "logo", array());
            echo "\" />
\t\t\t";
        }
        // line 42
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 43
            echo "\t\t\t\t<meta name=\"twitter:url\" content=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\" />
\t\t\t";
        } else {
            // line 45
            echo "\t\t\t\t<meta name=\"twitter:url\" content=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "\" />
\t\t\t";
        }
        // line 47
        echo "
\t\t\t<!-- Open Graph -->
\t\t\t";
        // line 49
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            // line 50
            echo "\t\t\t\t<meta property=\"og:title\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo "\" />
\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t<meta property=\"og:title\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
            echo "\" />
\t\t\t";
        }
        // line 54
        echo "\t\t\t";
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 55
            echo "\t\t\t\t<meta property=\"og:type\" content=\"website\" />
\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t<meta property=\"og:type\" content=\"article\" />
\t\t\t";
        }
        // line 59
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 60
            echo "\t\t\t\t<meta property=\"og:url\" content=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\" />
\t\t\t";
        } else {
            // line 62
            echo "\t\t\t\t<meta property=\"og:url\" content=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "\" />
\t\t\t";
        }
        // line 64
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "og_image", array())) {
            // line 65
            echo "\t\t\t\t<meta property=\"og:image\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "og_image", array());
            echo "\" />
\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t<meta property=\"og:image\" content=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "logo", array());
            echo "\" />
\t\t\t";
        }
        // line 69
        echo "
\t\t\t";
        // line 70
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "fb_admins", array())) {
            // line 71
            echo "\t\t\t\t<meta property=\"fb:admins\" content=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "fb_admins", array());
            echo "\" />
\t\t\t";
        }
        // line 73
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "robots", array())) {
            // line 74
            echo "\t\t\t\t<meta name=\"robots\" content=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "robots", array());
            echo "\" />
\t\t\t";
        }
        // line 76
        echo "
\t\t\t";
        // line 77
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "google_plus_account", array())) {
            // line 78
            echo "\t\t\t\t<a href=\"https://plus.google.com/";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "google_plus_account", array());
            echo "?rel=author\" /></a />
\t\t\t\t<a href=\"https://plus.google.com/";
            // line 79
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "Sidewalk", array()), "google_plus_account", array());
            echo "\" rel=\"publisher\" /></a />
\t\t\t";
        }
        // line 81
        echo "
\t\t\t<link rel=\"alternate\" href=\"";
        // line 82
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/blog.rss\" title=\"";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "\" type=\"application/atom+xml\"/>
\t\t\t<title>";
        // line 83
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
\t\t\t";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 90
        echo "\t\t";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 85
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "//fonts.googleapis.com/css?family=Open+Sans:400", 1 => 200), "method");
        // line 86
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "//fonts.googleapis.com/css?family=Source+Code+Pro:400,600", 1 => 200), "method");
        // line 87
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://static/css/screen.css", 1 => 200), "method");
        // line 88
        echo "\t\t\t\t";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "Css", array(), "method");
        echo "
\t\t\t";
    }

    // line 100
    public function block_content($context, array $blocks = array())
    {
    }

    // line 148
    public function block_javascript($context, array $blocks = array())
    {
        // line 149
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://static/js/jquery-2.1.1.min.js"), "method");
        // line 150
        echo "\t\t\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://static/js/screen.js"), "method");
        // line 151
        echo "\t\t\t\t";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
\t\t\t";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 151,  426 => 150,  423 => 149,  420 => 148,  415 => 100,  408 => 88,  405 => 87,  402 => 86,  399 => 85,  396 => 84,  392 => 90,  390 => 84,  383 => 83,  377 => 82,  374 => 81,  369 => 79,  364 => 78,  362 => 77,  359 => 76,  353 => 74,  350 => 73,  344 => 71,  342 => 70,  339 => 69,  333 => 67,  327 => 65,  324 => 64,  318 => 62,  312 => 60,  309 => 59,  305 => 57,  301 => 55,  298 => 54,  292 => 52,  286 => 50,  284 => 49,  280 => 47,  274 => 45,  268 => 43,  265 => 42,  259 => 40,  253 => 38,  250 => 37,  244 => 35,  239 => 33,  234 => 32,  228 => 30,  220 => 28,  217 => 27,  213 => 25,  207 => 23,  205 => 22,  200 => 19,  186 => 17,  184 => 16,  181 => 15,  175 => 13,  172 => 12,  166 => 10,  164 => 9,  159 => 6,  156 => 5,  150 => 153,  148 => 148,  144 => 146,  137 => 142,  133 => 140,  130 => 139,  123 => 135,  119 => 133,  116 => 132,  109 => 128,  105 => 126,  103 => 125,  97 => 122,  89 => 117,  83 => 113,  77 => 112,  69 => 109,  66 => 108,  63 => 107,  59 => 106,  52 => 101,  50 => 100,  43 => 96,  37 => 95,  31 => 91,  29 => 5,  23 => 1,);
    }
}
