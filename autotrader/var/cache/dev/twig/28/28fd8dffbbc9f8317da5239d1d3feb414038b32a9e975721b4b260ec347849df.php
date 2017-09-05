<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5ef63ffb0f273e51c63089bdddff3c8094f3ef10671a933be19bab9a4f21057a extends Twig_Template
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
        $__internal_d24b1c1d890cfc82da342a43c63c9cdfe63f52d73abb56034d5abe6da3598fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24b1c1d890cfc82da342a43c63c9cdfe63f52d73abb56034d5abe6da3598fd5->enter($__internal_d24b1c1d890cfc82da342a43c63c9cdfe63f52d73abb56034d5abe6da3598fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ea45354966a04d552d5f24893ac4b28536130ba35015a859c3873094a2aa1328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea45354966a04d552d5f24893ac4b28536130ba35015a859c3873094a2aa1328->enter($__internal_ea45354966a04d552d5f24893ac4b28536130ba35015a859c3873094a2aa1328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d24b1c1d890cfc82da342a43c63c9cdfe63f52d73abb56034d5abe6da3598fd5->leave($__internal_d24b1c1d890cfc82da342a43c63c9cdfe63f52d73abb56034d5abe6da3598fd5_prof);

        
        $__internal_ea45354966a04d552d5f24893ac4b28536130ba35015a859c3873094a2aa1328->leave($__internal_ea45354966a04d552d5f24893ac4b28536130ba35015a859c3873094a2aa1328_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e40de2fa0bea837ed12102f730d31222e46acca73ead0fad112378d00a225b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40de2fa0bea837ed12102f730d31222e46acca73ead0fad112378d00a225b74->enter($__internal_e40de2fa0bea837ed12102f730d31222e46acca73ead0fad112378d00a225b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0950e709057e6bbc65ba6b73364c495d310b1fbc0c8bfd24afdc14870bd8c16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0950e709057e6bbc65ba6b73364c495d310b1fbc0c8bfd24afdc14870bd8c16f->enter($__internal_0950e709057e6bbc65ba6b73364c495d310b1fbc0c8bfd24afdc14870bd8c16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0950e709057e6bbc65ba6b73364c495d310b1fbc0c8bfd24afdc14870bd8c16f->leave($__internal_0950e709057e6bbc65ba6b73364c495d310b1fbc0c8bfd24afdc14870bd8c16f_prof);

        
        $__internal_e40de2fa0bea837ed12102f730d31222e46acca73ead0fad112378d00a225b74->leave($__internal_e40de2fa0bea837ed12102f730d31222e46acca73ead0fad112378d00a225b74_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b4896e3c2b3b3c65213cf9691ce20cdaf8bd41006741fa3dff76c37a4a8a1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4896e3c2b3b3c65213cf9691ce20cdaf8bd41006741fa3dff76c37a4a8a1fc->enter($__internal_6b4896e3c2b3b3c65213cf9691ce20cdaf8bd41006741fa3dff76c37a4a8a1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_596e3b545336fc25d8bb9922a1587924849eba28eb890a5d50c4cddd93d66137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596e3b545336fc25d8bb9922a1587924849eba28eb890a5d50c4cddd93d66137->enter($__internal_596e3b545336fc25d8bb9922a1587924849eba28eb890a5d50c4cddd93d66137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_596e3b545336fc25d8bb9922a1587924849eba28eb890a5d50c4cddd93d66137->leave($__internal_596e3b545336fc25d8bb9922a1587924849eba28eb890a5d50c4cddd93d66137_prof);

        
        $__internal_6b4896e3c2b3b3c65213cf9691ce20cdaf8bd41006741fa3dff76c37a4a8a1fc->leave($__internal_6b4896e3c2b3b3c65213cf9691ce20cdaf8bd41006741fa3dff76c37a4a8a1fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_743604ebfeae8bccdd8a641d14cc5c551cdbf0e2a52291ab50b7f9be41d620cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743604ebfeae8bccdd8a641d14cc5c551cdbf0e2a52291ab50b7f9be41d620cb->enter($__internal_743604ebfeae8bccdd8a641d14cc5c551cdbf0e2a52291ab50b7f9be41d620cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a34ec5cff8f6279b2a30cb459d085f63da927e2aa717be3bb683374e98e98b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34ec5cff8f6279b2a30cb459d085f63da927e2aa717be3bb683374e98e98b52->enter($__internal_a34ec5cff8f6279b2a30cb459d085f63da927e2aa717be3bb683374e98e98b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a34ec5cff8f6279b2a30cb459d085f63da927e2aa717be3bb683374e98e98b52->leave($__internal_a34ec5cff8f6279b2a30cb459d085f63da927e2aa717be3bb683374e98e98b52_prof);

        
        $__internal_743604ebfeae8bccdd8a641d14cc5c551cdbf0e2a52291ab50b7f9be41d620cb->leave($__internal_743604ebfeae8bccdd8a641d14cc5c551cdbf0e2a52291ab50b7f9be41d620cb_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
