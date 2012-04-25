<?php

/* BloggerBlogBundle:Page:index2.html.twig */
class __TwigTemplate_64bd16f94cc415c860a0916fe586c0e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "

<table>
  ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getContext($context, "blogs")) - 1), 2));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "  <tr>
    <td width=\"405px\">
                <h2><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), $this->getContext($context, "i"), array(), "array"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), $this->getContext($context, "i"), array(), "array"), "title"), "html", null, true);
            echo "</a></h2>
            
     <img width=\"100%\"  src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), $this->getContext($context, "i"), array(), "array"), "image")))), "html", null, true);
            echo "\" />
   
   <div class=\"snippet\"  align=\"justify\" >
                <p >";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), $this->getContext($context, "i"), array(), "array"), "blog", array(0 => 500), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), $this->getContext($context, "i"), array(), "array"), "id"))), "html", null, true);
            echo "\">Continue reading...</a></p>
            </div>
            
              <p>Posted by <span class=\"highlight\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), $this->getContext($context, "i"), array(), "array"), "author"), "html", null, true);
            echo "</span> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), $this->getContext($context, "i"), array(), "array"), "created"), "h:iA"), "html", null, true);
            echo "</p>
    
    
  
  </td>
  <td width=\"30\"></td>
    <td width=\"405px\">
                <h2><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), ($this->getContext($context, "i") + 1), array(), "array"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), ($this->getContext($context, "i") + 1), array(), "array"), "title"), "html", null, true);
            echo "</a></h2>
     <img width=\"100%\" align=\"middle\"  src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), ($this->getContext($context, "i") + 1), array(), "array"), "image")))), "html", null, true);
            echo "\" />
      <div class=\"snippet\"  align=\"justify\">
                <p  >";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), ($this->getContext($context, "i") + 1), array(), "array"), "blog", array(0 => 500), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), ($this->getContext($context, "i") + 1), array(), "array"), "id"))), "html", null, true);
            echo "\">Continue reading...</a></p>
            </div>
   
   <p>Posted by <span class=\"highlight\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), ($this->getContext($context, "i") + 1), array(), "array"), "author"), "html", null, true);
            echo "</span> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), ($this->getContext($context, "i") + 1), array(), "array"), "created"), "h:iA"), "html", null, true);
            echo "</p>
    
    
    </td>
  </tr>
     ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "        <p>There are no news entries </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo "</table>

";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
