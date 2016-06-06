<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_08ae893c8c17f1f57bc24da76933b9a968200a09c56adac1e863b66d3ba5e796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf00fca97e5b805e57a4033b11f7062df72d85510e13cc580add8d3cde2358ae = $this->env->getExtension("native_profiler");
        $__internal_cf00fca97e5b805e57a4033b11f7062df72d85510e13cc580add8d3cde2358ae->enter($__internal_cf00fca97e5b805e57a4033b11f7062df72d85510e13cc580add8d3cde2358ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf00fca97e5b805e57a4033b11f7062df72d85510e13cc580add8d3cde2358ae->leave($__internal_cf00fca97e5b805e57a4033b11f7062df72d85510e13cc580add8d3cde2358ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1272349ea0a96e119c1bc4316ed4134a1b4e6d6cbf7cad9ff470f86aeae814d8 = $this->env->getExtension("native_profiler");
        $__internal_1272349ea0a96e119c1bc4316ed4134a1b4e6d6cbf7cad9ff470f86aeae814d8->enter($__internal_1272349ea0a96e119c1bc4316ed4134a1b4e6d6cbf7cad9ff470f86aeae814d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1272349ea0a96e119c1bc4316ed4134a1b4e6d6cbf7cad9ff470f86aeae814d8->leave($__internal_1272349ea0a96e119c1bc4316ed4134a1b4e6d6cbf7cad9ff470f86aeae814d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_968b2d4e92a80122517539f66137bcbfd6b669593cf1de8d6ecc30c8b0579488 = $this->env->getExtension("native_profiler");
        $__internal_968b2d4e92a80122517539f66137bcbfd6b669593cf1de8d6ecc30c8b0579488->enter($__internal_968b2d4e92a80122517539f66137bcbfd6b669593cf1de8d6ecc30c8b0579488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_968b2d4e92a80122517539f66137bcbfd6b669593cf1de8d6ecc30c8b0579488->leave($__internal_968b2d4e92a80122517539f66137bcbfd6b669593cf1de8d6ecc30c8b0579488_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a583821c098b0d2ed6742908f775a1152136f84ab31541b01d3ae26f098b8b6 = $this->env->getExtension("native_profiler");
        $__internal_0a583821c098b0d2ed6742908f775a1152136f84ab31541b01d3ae26f098b8b6->enter($__internal_0a583821c098b0d2ed6742908f775a1152136f84ab31541b01d3ae26f098b8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0a583821c098b0d2ed6742908f775a1152136f84ab31541b01d3ae26f098b8b6->leave($__internal_0a583821c098b0d2ed6742908f775a1152136f84ab31541b01d3ae26f098b8b6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
