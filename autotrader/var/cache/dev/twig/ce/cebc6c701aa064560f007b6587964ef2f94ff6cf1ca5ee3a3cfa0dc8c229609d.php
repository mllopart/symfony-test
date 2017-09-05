<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_26cfb5582a0c750f5bc939405c26d4286f2fb5438831e4de3313513b1ded5df2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fabbd12b2aec849d0c4d8d5aa6c18714fbb49262d5e605fe3dcbc44efc89fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fabbd12b2aec849d0c4d8d5aa6c18714fbb49262d5e605fe3dcbc44efc89fb0->enter($__internal_7fabbd12b2aec849d0c4d8d5aa6c18714fbb49262d5e605fe3dcbc44efc89fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_478936a34a9abc2f8e8bddabaa4f3906d79cddfda3a67751292be6251bd8b227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478936a34a9abc2f8e8bddabaa4f3906d79cddfda3a67751292be6251bd8b227->enter($__internal_478936a34a9abc2f8e8bddabaa4f3906d79cddfda3a67751292be6251bd8b227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fabbd12b2aec849d0c4d8d5aa6c18714fbb49262d5e605fe3dcbc44efc89fb0->leave($__internal_7fabbd12b2aec849d0c4d8d5aa6c18714fbb49262d5e605fe3dcbc44efc89fb0_prof);

        
        $__internal_478936a34a9abc2f8e8bddabaa4f3906d79cddfda3a67751292be6251bd8b227->leave($__internal_478936a34a9abc2f8e8bddabaa4f3906d79cddfda3a67751292be6251bd8b227_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_69d22347486888d77781a8d1a6178fecd2d451c265af752a8e1819908a61e9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d22347486888d77781a8d1a6178fecd2d451c265af752a8e1819908a61e9a9->enter($__internal_69d22347486888d77781a8d1a6178fecd2d451c265af752a8e1819908a61e9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_20a488eafcc4b21ae72a0da732e4f48db779a50b09ac64286edf8ce8cff65d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a488eafcc4b21ae72a0da732e4f48db779a50b09ac64286edf8ce8cff65d53->enter($__internal_20a488eafcc4b21ae72a0da732e4f48db779a50b09ac64286edf8ce8cff65d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_20a488eafcc4b21ae72a0da732e4f48db779a50b09ac64286edf8ce8cff65d53->leave($__internal_20a488eafcc4b21ae72a0da732e4f48db779a50b09ac64286edf8ce8cff65d53_prof);

        
        $__internal_69d22347486888d77781a8d1a6178fecd2d451c265af752a8e1819908a61e9a9->leave($__internal_69d22347486888d77781a8d1a6178fecd2d451c265af752a8e1819908a61e9a9_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "/var/www/symfony/vendor/knplabs/knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
