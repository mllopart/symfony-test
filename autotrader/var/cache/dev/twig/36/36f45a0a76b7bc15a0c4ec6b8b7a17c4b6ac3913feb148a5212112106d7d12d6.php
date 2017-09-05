<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_281f940e3535ade3c8733eeecc0806d3417687acc747b21bb913360167caa292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_47b6c73b70d54ac6269dcf0f30f6fdb35a82a62f6b6f06a6f41a30d9cffe072b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b6c73b70d54ac6269dcf0f30f6fdb35a82a62f6b6f06a6f41a30d9cffe072b->enter($__internal_47b6c73b70d54ac6269dcf0f30f6fdb35a82a62f6b6f06a6f41a30d9cffe072b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_985b4b47f045b0179cc180ca6b3bbcd0748adba07a6b5a146f308f584600822f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985b4b47f045b0179cc180ca6b3bbcd0748adba07a6b5a146f308f584600822f->enter($__internal_985b4b47f045b0179cc180ca6b3bbcd0748adba07a6b5a146f308f584600822f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b6c73b70d54ac6269dcf0f30f6fdb35a82a62f6b6f06a6f41a30d9cffe072b->leave($__internal_47b6c73b70d54ac6269dcf0f30f6fdb35a82a62f6b6f06a6f41a30d9cffe072b_prof);

        
        $__internal_985b4b47f045b0179cc180ca6b3bbcd0748adba07a6b5a146f308f584600822f->leave($__internal_985b4b47f045b0179cc180ca6b3bbcd0748adba07a6b5a146f308f584600822f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e394de6d6e0c50a60009d2270574050b18ccffa9254fb5c28f39aa9627194bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e394de6d6e0c50a60009d2270574050b18ccffa9254fb5c28f39aa9627194bc->enter($__internal_0e394de6d6e0c50a60009d2270574050b18ccffa9254fb5c28f39aa9627194bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6dab22d5db9164b8a5231000b3bf7fca330c132c6291770fb47f599db647967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6dab22d5db9164b8a5231000b3bf7fca330c132c6291770fb47f599db647967->enter($__internal_e6dab22d5db9164b8a5231000b3bf7fca330c132c6291770fb47f599db647967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e6dab22d5db9164b8a5231000b3bf7fca330c132c6291770fb47f599db647967->leave($__internal_e6dab22d5db9164b8a5231000b3bf7fca330c132c6291770fb47f599db647967_prof);

        
        $__internal_0e394de6d6e0c50a60009d2270574050b18ccffa9254fb5c28f39aa9627194bc->leave($__internal_0e394de6d6e0c50a60009d2270574050b18ccffa9254fb5c28f39aa9627194bc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9dedf6d67813f5e8b31540eed0e7f2c2bc8512464291e04ff4527700adbf06de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dedf6d67813f5e8b31540eed0e7f2c2bc8512464291e04ff4527700adbf06de->enter($__internal_9dedf6d67813f5e8b31540eed0e7f2c2bc8512464291e04ff4527700adbf06de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2ee72db4160dc536157de7516494e4384f06185b04d9e972fc0719b9d649c480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee72db4160dc536157de7516494e4384f06185b04d9e972fc0719b9d649c480->enter($__internal_2ee72db4160dc536157de7516494e4384f06185b04d9e972fc0719b9d649c480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2ee72db4160dc536157de7516494e4384f06185b04d9e972fc0719b9d649c480->leave($__internal_2ee72db4160dc536157de7516494e4384f06185b04d9e972fc0719b9d649c480_prof);

        
        $__internal_9dedf6d67813f5e8b31540eed0e7f2c2bc8512464291e04ff4527700adbf06de->leave($__internal_9dedf6d67813f5e8b31540eed0e7f2c2bc8512464291e04ff4527700adbf06de_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98701b5d18bfb6b6f3a7dbc86afebae371201227b44defafd091c72617d3afe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98701b5d18bfb6b6f3a7dbc86afebae371201227b44defafd091c72617d3afe4->enter($__internal_98701b5d18bfb6b6f3a7dbc86afebae371201227b44defafd091c72617d3afe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a2ba0a4fb60dd4ee3cc3c7960a3061e85dde1c192ecb4a6a43c96c4701717e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ba0a4fb60dd4ee3cc3c7960a3061e85dde1c192ecb4a6a43c96c4701717e56->enter($__internal_a2ba0a4fb60dd4ee3cc3c7960a3061e85dde1c192ecb4a6a43c96c4701717e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a2ba0a4fb60dd4ee3cc3c7960a3061e85dde1c192ecb4a6a43c96c4701717e56->leave($__internal_a2ba0a4fb60dd4ee3cc3c7960a3061e85dde1c192ecb4a6a43c96c4701717e56_prof);

        
        $__internal_98701b5d18bfb6b6f3a7dbc86afebae371201227b44defafd091c72617d3afe4->leave($__internal_98701b5d18bfb6b6f3a7dbc86afebae371201227b44defafd091c72617d3afe4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
