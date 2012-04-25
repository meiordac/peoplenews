<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_c59664fafcd9e1a3e0a5daf89c3a3521 extends Twig_Template
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
        echo "About";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>About peopleNews startup</h1>
    </header>
    <article>
        <p>We are an startup that wants to change the relationship that people has with the information, specifically the news. We want that everybody have an space to share what happens in their local areas, communities, cities or countries.
        </p>
        <p>
        The idea is that when you are register you can start sharing local news with the people that lives close to you
        </p>
        <p>
        We are a group of 3 students from the school of engenieering of the PUC, Chile</p>
    </article>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
