<?php

/* base.html.twig */
class __TwigTemplate_e165e2dfb5b6ff882479b5ee43bc7a826a3b2a9b950e3095a9f1a58a832b5108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ca8eca99fd0cefe5ba4d6eb6a48490aa28d1470d358a7927022d8bc7325623a = $this->env->getExtension("native_profiler");
        $__internal_3ca8eca99fd0cefe5ba4d6eb6a48490aa28d1470d358a7927022d8bc7325623a->enter($__internal_3ca8eca99fd0cefe5ba4d6eb6a48490aa28d1470d358a7927022d8bc7325623a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3ca8eca99fd0cefe5ba4d6eb6a48490aa28d1470d358a7927022d8bc7325623a->leave($__internal_3ca8eca99fd0cefe5ba4d6eb6a48490aa28d1470d358a7927022d8bc7325623a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4428ee548b850188f20bf55fe83485c34e0a1c658a634d58e6f6a8d1068bffaa = $this->env->getExtension("native_profiler");
        $__internal_4428ee548b850188f20bf55fe83485c34e0a1c658a634d58e6f6a8d1068bffaa->enter($__internal_4428ee548b850188f20bf55fe83485c34e0a1c658a634d58e6f6a8d1068bffaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4428ee548b850188f20bf55fe83485c34e0a1c658a634d58e6f6a8d1068bffaa->leave($__internal_4428ee548b850188f20bf55fe83485c34e0a1c658a634d58e6f6a8d1068bffaa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc3422b5033b92e71a29e01a0e0e74989d5eb26c5c56955817d397bb2e1708bb = $this->env->getExtension("native_profiler");
        $__internal_cc3422b5033b92e71a29e01a0e0e74989d5eb26c5c56955817d397bb2e1708bb->enter($__internal_cc3422b5033b92e71a29e01a0e0e74989d5eb26c5c56955817d397bb2e1708bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cc3422b5033b92e71a29e01a0e0e74989d5eb26c5c56955817d397bb2e1708bb->leave($__internal_cc3422b5033b92e71a29e01a0e0e74989d5eb26c5c56955817d397bb2e1708bb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cb6785a7df8fec17d71b0bc3e4656e1dfe1d45cb84e3867d8b98f1f631a9db8 = $this->env->getExtension("native_profiler");
        $__internal_1cb6785a7df8fec17d71b0bc3e4656e1dfe1d45cb84e3867d8b98f1f631a9db8->enter($__internal_1cb6785a7df8fec17d71b0bc3e4656e1dfe1d45cb84e3867d8b98f1f631a9db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1cb6785a7df8fec17d71b0bc3e4656e1dfe1d45cb84e3867d8b98f1f631a9db8->leave($__internal_1cb6785a7df8fec17d71b0bc3e4656e1dfe1d45cb84e3867d8b98f1f631a9db8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef104736b70e6f071786a131eafd9158b8875f47115328aed4f48836c9b88323 = $this->env->getExtension("native_profiler");
        $__internal_ef104736b70e6f071786a131eafd9158b8875f47115328aed4f48836c9b88323->enter($__internal_ef104736b70e6f071786a131eafd9158b8875f47115328aed4f48836c9b88323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ef104736b70e6f071786a131eafd9158b8875f47115328aed4f48836c9b88323->leave($__internal_ef104736b70e6f071786a131eafd9158b8875f47115328aed4f48836c9b88323_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
