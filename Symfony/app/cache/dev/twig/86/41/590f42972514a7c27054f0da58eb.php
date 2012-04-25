<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_8641590f42972514a7c27054f0da58eb extends Twig_Template
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
 
    
    
<div id=\"fb-root\"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '340840535974201',
            status     : true, 
            cookie     : true,
            xfbml      : true,
            oauth      : true,
          });
        };
        (function(d){
           var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = \"//connect.facebook.net/en_US/all.js\";
           d.getElementsByTagName('head')[0].appendChild(js);
         }(document));
      </script>
      <div 
        class=\"fb-registration\" 
        data-fields=\"[{'name':'name'}, {'name':'email'},
           {'name':'location'},
 {'name':'gender'},
 {'name':'birthday'},
 {'name':'password'},
 {'name':'like',       'description':'Do you like to read news?', 'type':'checkbox',  'default':'checked'} ]\" 
       
       data-redirect-uri=\"https://severe-cloud-3819.herokuapp.com/\"
      </div>
      
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
