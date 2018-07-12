<?php

/* default/login.html.twig */
class __TwigTemplate_34aa7aae94d5d97e5be50ec7477d73e83864caf4060304d417dba5b160bc5f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\" >
        <div class=\"row\">
            <div class=\"col-md-6 offset-md-3\">
                <h3 style=\"width: 980px; margin: auto; padding-bottom: 3%;\">Авторизируйтесь!</h3>
                <a href=\"/\"><h5 style=\"width: 980px; margin: auto; padding-bottom: 3%;\">Главная</h5></a>
                <form data-toggle=\"validator\"  action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                    <div class=\"form-group\">
                        <input  id = \"_username\" name=\"_username\" type=\"text\" class=\"form-control inputEmail \"  placeholder=\"Логин\" >
                        <span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
                    </div>
                    <div class=\"form-group\">
                        <input id=\"_password\" name=\"_password\" type=\"password\" data-toggle=\"validator\" data-minlength=\"6\" class=\"form-control inputPassword \"   required=\"\">
                    </div>
                    <div class=\"bottom\">
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-primary disabled\">Вход</button>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}

    <div class=\"container\" >
        <div class=\"row\">
            <div class=\"col-md-6 offset-md-3\">
                <h3 style=\"width: 980px; margin: auto; padding-bottom: 3%;\">Авторизируйтесь!</h3>
                <a href=\"/\"><h5 style=\"width: 980px; margin: auto; padding-bottom: 3%;\">Главная</h5></a>
                <form data-toggle=\"validator\"  action=\"{{ path('login') }}\" method=\"post\">
                    <div class=\"form-group\">
                        <input  id = \"_username\" name=\"_username\" type=\"text\" class=\"form-control inputEmail \"  placeholder=\"Логин\" >
                        <span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
                    </div>
                    <div class=\"form-group\">
                        <input id=\"_password\" name=\"_password\" type=\"password\" data-toggle=\"validator\" data-minlength=\"6\" class=\"form-control inputPassword \"   required=\"\">
                    </div>
                    <div class=\"bottom\">
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-primary disabled\">Вход</button>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

{% endblock %}", "default/login.html.twig", "/Users/Aleksey/PhpstormProjects/test-local/app/Resources/views/default/login.html.twig");
    }
}
