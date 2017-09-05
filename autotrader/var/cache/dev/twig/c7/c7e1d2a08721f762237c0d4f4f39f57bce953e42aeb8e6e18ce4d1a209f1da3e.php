<?php

/* CarBundle:Default:index.html.twig */
class __TwigTemplate_44e55b3cc07d13ac7bfe1dff900966e933cb3bb7a601a361d176103a096157a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CarBundle:Default:index.html.twig", 1);
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
        $__internal_8a48e0a164d381275e586b6c6c38f7b22ceb5e638daa19d2d6cab03988cdd5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a48e0a164d381275e586b6c6c38f7b22ceb5e638daa19d2d6cab03988cdd5a6->enter($__internal_8a48e0a164d381275e586b6c6c38f7b22ceb5e638daa19d2d6cab03988cdd5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CarBundle:Default:index.html.twig"));

        $__internal_38e99d933affd3125f136eb3e1a7fd331adfcde00f13de54ae41ae7671eec9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e99d933affd3125f136eb3e1a7fd331adfcde00f13de54ae41ae7671eec9c2->enter($__internal_38e99d933affd3125f136eb3e1a7fd331adfcde00f13de54ae41ae7671eec9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CarBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a48e0a164d381275e586b6c6c38f7b22ceb5e638daa19d2d6cab03988cdd5a6->leave($__internal_8a48e0a164d381275e586b6c6c38f7b22ceb5e638daa19d2d6cab03988cdd5a6_prof);

        
        $__internal_38e99d933affd3125f136eb3e1a7fd331adfcde00f13de54ae41ae7671eec9c2->leave($__internal_38e99d933affd3125f136eb3e1a7fd331adfcde00f13de54ae41ae7671eec9c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_654174835d9ee056c4c9f146f59c3565e7107be3053ac6b9f36da66bd9061939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654174835d9ee056c4c9f146f59c3565e7107be3053ac6b9f36da66bd9061939->enter($__internal_654174835d9ee056c4c9f146f59c3565e7107be3053ac6b9f36da66bd9061939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b0340bc039a070cc9a3ae31cce6df2069f04b4774a7da0418d6e7843510ce53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0340bc039a070cc9a3ae31cce6df2069f04b4774a7da0418d6e7843510ce53->enter($__internal_7b0340bc039a070cc9a3ae31cce6df2069f04b4774a7da0418d6e7843510ce53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Best Cars Offers";
        
        $__internal_7b0340bc039a070cc9a3ae31cce6df2069f04b4774a7da0418d6e7843510ce53->leave($__internal_7b0340bc039a070cc9a3ae31cce6df2069f04b4774a7da0418d6e7843510ce53_prof);

        
        $__internal_654174835d9ee056c4c9f146f59c3565e7107be3053ac6b9f36da66bd9061939->leave($__internal_654174835d9ee056c4c9f146f59c3565e7107be3053ac6b9f36da66bd9061939_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da4f43afcdb492498c8852dc664239a6db407eb377f6fa4908f8f2b78179dabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4f43afcdb492498c8852dc664239a6db407eb377f6fa4908f8f2b78179dabf->enter($__internal_da4f43afcdb492498c8852dc664239a6db407eb377f6fa4908f8f2b78179dabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f94914a962f69904be5f6c143c037e5027214470855d6a31503d88e83250f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f94914a962f69904be5f6c143c037e5027214470855d6a31503d88e83250f78->enter($__internal_5f94914a962f69904be5f6c143c037e5027214470855d6a31503d88e83250f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Offer</h1>

    <table class=\"table\">
      <tr>
        <th>Make</th>
        <th>Name</th>
      </tr>
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) ? $context["cars"] : $this->getContext($context, "cars")));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 14
            echo "        <tr>
          <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "make", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "name", array()), "html", null, true);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </table>

";
        
        $__internal_5f94914a962f69904be5f6c143c037e5027214470855d6a31503d88e83250f78->leave($__internal_5f94914a962f69904be5f6c143c037e5027214470855d6a31503d88e83250f78_prof);

        
        $__internal_da4f43afcdb492498c8852dc664239a6db407eb377f6fa4908f8f2b78179dabf->leave($__internal_da4f43afcdb492498c8852dc664239a6db407eb377f6fa4908f8f2b78179dabf_prof);

    }

    public function getTemplateName()
    {
        return "CarBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 19,  89 => 16,  85 => 15,  82 => 14,  78 => 13,  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{ parent() }}Best Cars Offers{% endblock %}

{% block body %}
    <h1>Offer</h1>

    <table class=\"table\">
      <tr>
        <th>Make</th>
        <th>Name</th>
      </tr>
      {% for car in cars %}
        <tr>
          <td>{{ car.make }}</td>
          <td>{{ car.name }}</td>
        </tr>
      {% endfor %}
    </table>

{% endblock %}
", "CarBundle:Default:index.html.twig", "/var/www/symfony/src/CarBundle/Resources/views/Default/index.html.twig");
    }
}
