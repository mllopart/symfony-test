<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_ca7f08a6fe34429b14ce7baec1dafbffabac53fd83ba27353b7340097fab70d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad627b1ef270109e9038ece300de23641c002ba9be3b226603b5199a563f7898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad627b1ef270109e9038ece300de23641c002ba9be3b226603b5199a563f7898->enter($__internal_ad627b1ef270109e9038ece300de23641c002ba9be3b226603b5199a563f7898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_9de867bca603d0642a21c2ed93d68a06bb3241a406dfba79fe11ee21606e3949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de867bca603d0642a21c2ed93d68a06bb3241a406dfba79fe11ee21606e3949->enter($__internal_9de867bca603d0642a21c2ed93d68a06bb3241a406dfba79fe11ee21606e3949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_ad627b1ef270109e9038ece300de23641c002ba9be3b226603b5199a563f7898->leave($__internal_ad627b1ef270109e9038ece300de23641c002ba9be3b226603b5199a563f7898_prof);

        
        $__internal_9de867bca603d0642a21c2ed93d68a06bb3241a406dfba79fe11ee21606e3949->leave($__internal_9de867bca603d0642a21c2ed93d68a06bb3241a406dfba79fe11ee21606e3949_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/var/www/symfony/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
