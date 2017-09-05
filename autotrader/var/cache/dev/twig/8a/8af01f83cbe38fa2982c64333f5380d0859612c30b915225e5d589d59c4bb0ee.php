<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_f5e0387c27b93a4863b7e54b4a8b88c846b06d21e978a7e302c8d9d5206d26f8 extends Twig_Template
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
        $__internal_ca189fdd4d382bb4944ff5cf99ac007acd066abc38547d8705aeb0bcae63c679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca189fdd4d382bb4944ff5cf99ac007acd066abc38547d8705aeb0bcae63c679->enter($__internal_ca189fdd4d382bb4944ff5cf99ac007acd066abc38547d8705aeb0bcae63c679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_a97bab5c2492ab3f5eb1d3f1a7ab2831046456e44cc3e719e5de5b125c025988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97bab5c2492ab3f5eb1d3f1a7ab2831046456e44cc3e719e5de5b125c025988->enter($__internal_a97bab5c2492ab3f5eb1d3f1a7ab2831046456e44cc3e719e5de5b125c025988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_ca189fdd4d382bb4944ff5cf99ac007acd066abc38547d8705aeb0bcae63c679->leave($__internal_ca189fdd4d382bb4944ff5cf99ac007acd066abc38547d8705aeb0bcae63c679_prof);

        
        $__internal_a97bab5c2492ab3f5eb1d3f1a7ab2831046456e44cc3e719e5de5b125c025988->leave($__internal_a97bab5c2492ab3f5eb1d3f1a7ab2831046456e44cc3e719e5de5b125c025988_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
