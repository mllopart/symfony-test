<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_298debdfea2874422c7bd1c6bfed9663ded3b5e216fecb562bd2ee80c818a3aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_501dba3dc894830acc58bcb2d105b20ddcd8537abe96dbdddd6ec71701010613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501dba3dc894830acc58bcb2d105b20ddcd8537abe96dbdddd6ec71701010613->enter($__internal_501dba3dc894830acc58bcb2d105b20ddcd8537abe96dbdddd6ec71701010613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f2f50eb9feb3d6e60383b9a2bdc27ccc788b3d698c41b8bebc0bf4e65c878bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f50eb9feb3d6e60383b9a2bdc27ccc788b3d698c41b8bebc0bf4e65c878bc0->enter($__internal_f2f50eb9feb3d6e60383b9a2bdc27ccc788b3d698c41b8bebc0bf4e65c878bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_501dba3dc894830acc58bcb2d105b20ddcd8537abe96dbdddd6ec71701010613->leave($__internal_501dba3dc894830acc58bcb2d105b20ddcd8537abe96dbdddd6ec71701010613_prof);

        
        $__internal_f2f50eb9feb3d6e60383b9a2bdc27ccc788b3d698c41b8bebc0bf4e65c878bc0->leave($__internal_f2f50eb9feb3d6e60383b9a2bdc27ccc788b3d698c41b8bebc0bf4e65c878bc0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2795b2838735b412cd4f89ad2d6e4c07654862105afe2554eff762fd09247a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2795b2838735b412cd4f89ad2d6e4c07654862105afe2554eff762fd09247a6->enter($__internal_e2795b2838735b412cd4f89ad2d6e4c07654862105afe2554eff762fd09247a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_563a16181162cb34658beb2d0b063b55ef2f654dc13e5ced9b57b9aff1857ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563a16181162cb34658beb2d0b063b55ef2f654dc13e5ced9b57b9aff1857ffb->enter($__internal_563a16181162cb34658beb2d0b063b55ef2f654dc13e5ced9b57b9aff1857ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_563a16181162cb34658beb2d0b063b55ef2f654dc13e5ced9b57b9aff1857ffb->leave($__internal_563a16181162cb34658beb2d0b063b55ef2f654dc13e5ced9b57b9aff1857ffb_prof);

        
        $__internal_e2795b2838735b412cd4f89ad2d6e4c07654862105afe2554eff762fd09247a6->leave($__internal_e2795b2838735b412cd4f89ad2d6e4c07654862105afe2554eff762fd09247a6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7fe74ef227f70c52eae9538478a3cf0d665501bd220440634ee3ac85468886b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe74ef227f70c52eae9538478a3cf0d665501bd220440634ee3ac85468886b8->enter($__internal_7fe74ef227f70c52eae9538478a3cf0d665501bd220440634ee3ac85468886b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee5cc4daff57dd256c818b7e8171789d62c7588891ec86a529f2269c9e544198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5cc4daff57dd256c818b7e8171789d62c7588891ec86a529f2269c9e544198->enter($__internal_ee5cc4daff57dd256c818b7e8171789d62c7588891ec86a529f2269c9e544198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ee5cc4daff57dd256c818b7e8171789d62c7588891ec86a529f2269c9e544198->leave($__internal_ee5cc4daff57dd256c818b7e8171789d62c7588891ec86a529f2269c9e544198_prof);

        
        $__internal_7fe74ef227f70c52eae9538478a3cf0d665501bd220440634ee3ac85468886b8->leave($__internal_7fe74ef227f70c52eae9538478a3cf0d665501bd220440634ee3ac85468886b8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b3bc9012cd01a0082d7c660103f80a751a3e9d701adcbb168effed999836c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3bc9012cd01a0082d7c660103f80a751a3e9d701adcbb168effed999836c31->enter($__internal_6b3bc9012cd01a0082d7c660103f80a751a3e9d701adcbb168effed999836c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c38c347adda27820ce55978ec8801da3a36f72d9b1d309af328601855bd0576b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38c347adda27820ce55978ec8801da3a36f72d9b1d309af328601855bd0576b->enter($__internal_c38c347adda27820ce55978ec8801da3a36f72d9b1d309af328601855bd0576b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c38c347adda27820ce55978ec8801da3a36f72d9b1d309af328601855bd0576b->leave($__internal_c38c347adda27820ce55978ec8801da3a36f72d9b1d309af328601855bd0576b_prof);

        
        $__internal_6b3bc9012cd01a0082d7c660103f80a751a3e9d701adcbb168effed999836c31->leave($__internal_6b3bc9012cd01a0082d7c660103f80a751a3e9d701adcbb168effed999836c31_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
