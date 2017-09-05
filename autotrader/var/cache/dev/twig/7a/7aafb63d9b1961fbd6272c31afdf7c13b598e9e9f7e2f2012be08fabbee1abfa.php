<?php

/* base.html.twig */
class __TwigTemplate_b37a35a0319dd897ff266182855640ef5b2d12f4c0d6ea88cfcd791e6c1498f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9de71178dd18ea5c23f134a09e0f3272f02b3e510f41c5df427e174cdb04a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9de71178dd18ea5c23f134a09e0f3272f02b3e510f41c5df427e174cdb04a59->enter($__internal_f9de71178dd18ea5c23f134a09e0f3272f02b3e510f41c5df427e174cdb04a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_adb1845ca0f99c00b1d2ebb1c5bffabfc8f1671db6549aea1ab20f3c6c55c8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb1845ca0f99c00b1d2ebb1c5bffabfc8f1671db6549aea1ab20f3c6c55c8d3->enter($__internal_adb1845ca0f99c00b1d2ebb1c5bffabfc8f1671db6549aea1ab20f3c6c55c8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
          <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">AutoTrader</a>

          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            ";
        // line 24
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("AppBundle:Builder:mainMenu", array("currentClass" => "active"));
        echo "

            <form class=\"form-inline my-2 my-lg-0\">
              <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
              <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>

          </div>
        </nav>
        <div class=\"container\">
          ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        </div>
        ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    </body>
</html>
";
        
        $__internal_f9de71178dd18ea5c23f134a09e0f3272f02b3e510f41c5df427e174cdb04a59->leave($__internal_f9de71178dd18ea5c23f134a09e0f3272f02b3e510f41c5df427e174cdb04a59_prof);

        
        $__internal_adb1845ca0f99c00b1d2ebb1c5bffabfc8f1671db6549aea1ab20f3c6c55c8d3->leave($__internal_adb1845ca0f99c00b1d2ebb1c5bffabfc8f1671db6549aea1ab20f3c6c55c8d3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ad5b06eb625ea78c0928bb8227821b8a2a7cdca58ef883627e3965c9d29079b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad5b06eb625ea78c0928bb8227821b8a2a7cdca58ef883627e3965c9d29079b->enter($__internal_6ad5b06eb625ea78c0928bb8227821b8a2a7cdca58ef883627e3965c9d29079b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ce665f6666084cd7f92c1b0482bfdb63321ab2584fdfcd55aa557593db61497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce665f6666084cd7f92c1b0482bfdb63321ab2584fdfcd55aa557593db61497->enter($__internal_8ce665f6666084cd7f92c1b0482bfdb63321ab2584fdfcd55aa557593db61497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AutoTrader - ";
        
        $__internal_8ce665f6666084cd7f92c1b0482bfdb63321ab2584fdfcd55aa557593db61497->leave($__internal_8ce665f6666084cd7f92c1b0482bfdb63321ab2584fdfcd55aa557593db61497_prof);

        
        $__internal_6ad5b06eb625ea78c0928bb8227821b8a2a7cdca58ef883627e3965c9d29079b->leave($__internal_6ad5b06eb625ea78c0928bb8227821b8a2a7cdca58ef883627e3965c9d29079b_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc0913b49ffd942db2ddfb2e1ed7560a7b0ad077364ac48ff4b72de8246d7120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0913b49ffd942db2ddfb2e1ed7560a7b0ad077364ac48ff4b72de8246d7120->enter($__internal_cc0913b49ffd942db2ddfb2e1ed7560a7b0ad077364ac48ff4b72de8246d7120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_604db736ca762d9a007833e073a478e05b435c5920eeee5734dd3519dd95d421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604db736ca762d9a007833e073a478e05b435c5920eeee5734dd3519dd95d421->enter($__internal_604db736ca762d9a007833e073a478e05b435c5920eeee5734dd3519dd95d421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_604db736ca762d9a007833e073a478e05b435c5920eeee5734dd3519dd95d421->leave($__internal_604db736ca762d9a007833e073a478e05b435c5920eeee5734dd3519dd95d421_prof);

        
        $__internal_cc0913b49ffd942db2ddfb2e1ed7560a7b0ad077364ac48ff4b72de8246d7120->leave($__internal_cc0913b49ffd942db2ddfb2e1ed7560a7b0ad077364ac48ff4b72de8246d7120_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0287e82f72413654f512b14f6d5ffdf171952f89a52e4c57a9942029afde541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0287e82f72413654f512b14f6d5ffdf171952f89a52e4c57a9942029afde541->enter($__internal_d0287e82f72413654f512b14f6d5ffdf171952f89a52e4c57a9942029afde541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0914773c2dc12c288074be8ef0793ba228add22933347d9d38ea81ed23bbd84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0914773c2dc12c288074be8ef0793ba228add22933347d9d38ea81ed23bbd84a->enter($__internal_0914773c2dc12c288074be8ef0793ba228add22933347d9d38ea81ed23bbd84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0914773c2dc12c288074be8ef0793ba228add22933347d9d38ea81ed23bbd84a->leave($__internal_0914773c2dc12c288074be8ef0793ba228add22933347d9d38ea81ed23bbd84a_prof);

        
        $__internal_d0287e82f72413654f512b14f6d5ffdf171952f89a52e4c57a9942029afde541->leave($__internal_d0287e82f72413654f512b14f6d5ffdf171952f89a52e4c57a9942029afde541_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dff4c9b5b846415c5873ebb20e8b88360620b3ddd04c69d6f125c43e71c1253d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff4c9b5b846415c5873ebb20e8b88360620b3ddd04c69d6f125c43e71c1253d->enter($__internal_dff4c9b5b846415c5873ebb20e8b88360620b3ddd04c69d6f125c43e71c1253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dea90ce487b7a701e8306a04a99f8e25fbade907ae5540431143ac7152624af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea90ce487b7a701e8306a04a99f8e25fbade907ae5540431143ac7152624af1->enter($__internal_dea90ce487b7a701e8306a04a99f8e25fbade907ae5540431143ac7152624af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dea90ce487b7a701e8306a04a99f8e25fbade907ae5540431143ac7152624af1->leave($__internal_dea90ce487b7a701e8306a04a99f8e25fbade907ae5540431143ac7152624af1_prof);

        
        $__internal_dff4c9b5b846415c5873ebb20e8b88360620b3ddd04c69d6f125c43e71c1253d->leave($__internal_dff4c9b5b846415c5873ebb20e8b88360620b3ddd04c69d6f125c43e71c1253d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 36,  130 => 34,  113 => 12,  95 => 5,  83 => 37,  81 => 36,  78 => 35,  76 => 34,  63 => 24,  50 => 14,  47 => 13,  45 => 12,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}AutoTrader - {% endblock %}</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.1.1.slim.min.js\" integrity=\"sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\" integrity=\"sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>

        {% block stylesheets %}{% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
          <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">AutoTrader</a>

          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            {{ knp_menu_render('AppBundle:Builder:mainMenu', {'currentClass':'active'}) }}

            <form class=\"form-inline my-2 my-lg-0\">
              <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
              <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>

          </div>
        </nav>
        <div class=\"container\">
          {% block body %}{% endblock %}
        </div>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/symfony/app/Resources/views/base.html.twig");
    }
}
