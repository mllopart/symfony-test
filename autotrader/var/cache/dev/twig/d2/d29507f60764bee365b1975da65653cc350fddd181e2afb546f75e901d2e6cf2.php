<?php

/* default/index.html.twig */
class __TwigTemplate_c17512051d42d86af0d1656ebc415e6defece5ab0b8fcb43136e5dc13d2baf13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_514d53a3dba4f9da62f5599be003cecb67f9226d57f236d568af497dae19606d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514d53a3dba4f9da62f5599be003cecb67f9226d57f236d568af497dae19606d->enter($__internal_514d53a3dba4f9da62f5599be003cecb67f9226d57f236d568af497dae19606d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_49ff59236e51d267696b015167d7d6d16a6e6a687e0fc5b30f9f9c83b1295f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ff59236e51d267696b015167d7d6d16a6e6a687e0fc5b30f9f9c83b1295f77->enter($__internal_49ff59236e51d267696b015167d7d6d16a6e6a687e0fc5b30f9f9c83b1295f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_514d53a3dba4f9da62f5599be003cecb67f9226d57f236d568af497dae19606d->leave($__internal_514d53a3dba4f9da62f5599be003cecb67f9226d57f236d568af497dae19606d_prof);

        
        $__internal_49ff59236e51d267696b015167d7d6d16a6e6a687e0fc5b30f9f9c83b1295f77->leave($__internal_49ff59236e51d267696b015167d7d6d16a6e6a687e0fc5b30f9f9c83b1295f77_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf783da2c86b381193cdb2e8af7c6133c915dd66b838be47a4c670e77ce1ed76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf783da2c86b381193cdb2e8af7c6133c915dd66b838be47a4c670e77ce1ed76->enter($__internal_bf783da2c86b381193cdb2e8af7c6133c915dd66b838be47a4c670e77ce1ed76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_839b4d733b6c261dc337fb9e27725e0282c8f044765b780ff9cf6a059f5bd642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839b4d733b6c261dc337fb9e27725e0282c8f044765b780ff9cf6a059f5bd642->enter($__internal_839b4d733b6c261dc337fb9e27725e0282c8f044765b780ff9cf6a059f5bd642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Welcome";
        
        $__internal_839b4d733b6c261dc337fb9e27725e0282c8f044765b780ff9cf6a059f5bd642->leave($__internal_839b4d733b6c261dc337fb9e27725e0282c8f044765b780ff9cf6a059f5bd642_prof);

        
        $__internal_bf783da2c86b381193cdb2e8af7c6133c915dd66b838be47a4c670e77ce1ed76->leave($__internal_bf783da2c86b381193cdb2e8af7c6133c915dd66b838be47a4c670e77ce1ed76_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec7c1a09ef19457014dcc965ea3e71e3e9fdae292021b5e50e28b515671bf872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7c1a09ef19457014dcc965ea3e71e3e9fdae292021b5e50e28b515671bf872->enter($__internal_ec7c1a09ef19457014dcc965ea3e71e3e9fdae292021b5e50e28b515671bf872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c86a69f575afe274da5e9cdb8f5ea320ebd06188a71bc0c8f255027b2008b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c86a69f575afe274da5e9cdb8f5ea320ebd06188a71bc0c8f255027b2008b7d->enter($__internal_0c86a69f575afe274da5e9cdb8f5ea320ebd06188a71bc0c8f255027b2008b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Welcome to AutoTrader</h1>
";
        
        $__internal_0c86a69f575afe274da5e9cdb8f5ea320ebd06188a71bc0c8f255027b2008b7d->leave($__internal_0c86a69f575afe274da5e9cdb8f5ea320ebd06188a71bc0c8f255027b2008b7d_prof);

        
        $__internal_ec7c1a09ef19457014dcc965ea3e71e3e9fdae292021b5e50e28b515671bf872->leave($__internal_ec7c1a09ef19457014dcc965ea3e71e3e9fdae292021b5e50e28b515671bf872_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }}Welcome{% endblock %}

{% block body %}
    <h1>Welcome to AutoTrader</h1>
{% endblock %}

", "default/index.html.twig", "/var/www/symfony/app/Resources/views/default/index.html.twig");
    }
}
