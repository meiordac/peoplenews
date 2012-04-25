<?php

/* ::base.html.twig */
class __TwigTemplate_e7982e3803e2d1cdf245a6e73c8e34f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - peopleNews</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 32
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 35
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 36
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 44
        $this->displayBlock('sidebar', $context, $blocks);
        // line 45
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "            </div>
        </section>

        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "peopleNews";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
           <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about"), "html", null, true);
        echo "\">About</a></li>
           <li><a href=\"#\">Contact</a></li>
                             <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_search"), "html", null, true);
        echo "\">Search</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 35
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">peopleNews</a>";
    }

    // line 36
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">Changing the way we view news</a>";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
    }

    // line 44
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        // line 49
        echo "                    peopleNews
                ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
