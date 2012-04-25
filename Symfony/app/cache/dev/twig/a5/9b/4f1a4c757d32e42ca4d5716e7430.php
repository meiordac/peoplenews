<?php

/* BloggerBlogBundle:Page:search.html.twig */
class __TwigTemplate_a59b4f1a4c757d32e42ca4d5716e7430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Search";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>Look for an specfici place</h1>
    </header>
    <article>
 <form name=\"search\" method=\"post\" action=\"<?=\$PHP_SELF?>\">
 Seach for: <input type=\"text\" name=\"find\" /> in 
 <Select NAME=\"field\">
 <Option VALUE=\"country\">Country</option>
 <Option VALUE=\"city\">City</option>
 <Option VALUE=\"continent\">Continent</option>
 
 </Select>
 <input type=\"hidden\" name=\"searching\" value=\"yes\" />
 <input type=\"submit\" name=\"search\" value=\"Search\" />
 </form>
        <p>
        <br>
     Search in a specific place not the one you gave when you get registered!!
     </br>
        </p>
        
    </article>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
