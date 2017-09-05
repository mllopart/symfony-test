<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_de029f8eccd5df846de95d3f507be5372b7466b54e6cdbfaf93509bc13757abd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9aaab6fc22aef4885ebc0a6fc7ad3b14eb4ccb1298eeb6871f65b704c96d25b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aaab6fc22aef4885ebc0a6fc7ad3b14eb4ccb1298eeb6871f65b704c96d25b1->enter($__internal_9aaab6fc22aef4885ebc0a6fc7ad3b14eb4ccb1298eeb6871f65b704c96d25b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_00ed5608a4a9a8c7e156f0d00793cf50517740109f6b9fa37bee44c3f34d992b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ed5608a4a9a8c7e156f0d00793cf50517740109f6b9fa37bee44c3f34d992b->enter($__internal_00ed5608a4a9a8c7e156f0d00793cf50517740109f6b9fa37bee44c3f34d992b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aaab6fc22aef4885ebc0a6fc7ad3b14eb4ccb1298eeb6871f65b704c96d25b1->leave($__internal_9aaab6fc22aef4885ebc0a6fc7ad3b14eb4ccb1298eeb6871f65b704c96d25b1_prof);

        
        $__internal_00ed5608a4a9a8c7e156f0d00793cf50517740109f6b9fa37bee44c3f34d992b->leave($__internal_00ed5608a4a9a8c7e156f0d00793cf50517740109f6b9fa37bee44c3f34d992b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85cf9c34c88bc11746c6b98b4f1db77460682338b3d3dc4adb3f279db8edb50b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85cf9c34c88bc11746c6b98b4f1db77460682338b3d3dc4adb3f279db8edb50b->enter($__internal_85cf9c34c88bc11746c6b98b4f1db77460682338b3d3dc4adb3f279db8edb50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7069119998390cc2693fdbeebaa7c364954275171cabe043ae2b5b3bf57e18d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7069119998390cc2693fdbeebaa7c364954275171cabe043ae2b5b3bf57e18d8->enter($__internal_7069119998390cc2693fdbeebaa7c364954275171cabe043ae2b5b3bf57e18d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7069119998390cc2693fdbeebaa7c364954275171cabe043ae2b5b3bf57e18d8->leave($__internal_7069119998390cc2693fdbeebaa7c364954275171cabe043ae2b5b3bf57e18d8_prof);

        
        $__internal_85cf9c34c88bc11746c6b98b4f1db77460682338b3d3dc4adb3f279db8edb50b->leave($__internal_85cf9c34c88bc11746c6b98b4f1db77460682338b3d3dc4adb3f279db8edb50b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d845f5ce89ef3e32afe8d7930fb81cced1b2b057595c22eb854aec452bdc5fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d845f5ce89ef3e32afe8d7930fb81cced1b2b057595c22eb854aec452bdc5fad->enter($__internal_d845f5ce89ef3e32afe8d7930fb81cced1b2b057595c22eb854aec452bdc5fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4033a45f0fe0a5e9506e7a14954836d03c029fb9e745ca246aebfb13f44a70d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4033a45f0fe0a5e9506e7a14954836d03c029fb9e745ca246aebfb13f44a70d0->enter($__internal_4033a45f0fe0a5e9506e7a14954836d03c029fb9e745ca246aebfb13f44a70d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4033a45f0fe0a5e9506e7a14954836d03c029fb9e745ca246aebfb13f44a70d0->leave($__internal_4033a45f0fe0a5e9506e7a14954836d03c029fb9e745ca246aebfb13f44a70d0_prof);

        
        $__internal_d845f5ce89ef3e32afe8d7930fb81cced1b2b057595c22eb854aec452bdc5fad->leave($__internal_d845f5ce89ef3e32afe8d7930fb81cced1b2b057595c22eb854aec452bdc5fad_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3c634d9e203de3b341dd416e8e187c91191a3c45f209cca0002d142262a9aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c634d9e203de3b341dd416e8e187c91191a3c45f209cca0002d142262a9aa9->enter($__internal_a3c634d9e203de3b341dd416e8e187c91191a3c45f209cca0002d142262a9aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e09c6d407acc853fea02329ddadab4d40f09a329ee8dc9838de944a94c1ac8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09c6d407acc853fea02329ddadab4d40f09a329ee8dc9838de944a94c1ac8c4->enter($__internal_e09c6d407acc853fea02329ddadab4d40f09a329ee8dc9838de944a94c1ac8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e09c6d407acc853fea02329ddadab4d40f09a329ee8dc9838de944a94c1ac8c4->leave($__internal_e09c6d407acc853fea02329ddadab4d40f09a329ee8dc9838de944a94c1ac8c4_prof);

        
        $__internal_a3c634d9e203de3b341dd416e8e187c91191a3c45f209cca0002d142262a9aa9->leave($__internal_a3c634d9e203de3b341dd416e8e187c91191a3c45f209cca0002d142262a9aa9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
