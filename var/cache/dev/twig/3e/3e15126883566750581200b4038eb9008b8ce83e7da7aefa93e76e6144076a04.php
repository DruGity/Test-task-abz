<?php

/* default/main.html.twig */
class __TwigTemplate_01e66016d6468fda4ecab5faca49768900fb748f4524cf77ae03ba3ff301f011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/main.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/main.html.twig"));

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
        echo "    <h1 style=\"text-align: center\">Иерархия сотрудников в древовидной форме</h1>
    <a href=\"/authorized/workers\"><h3 style=\"text-align: center\">Список сотрудников</h3></a>
    ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 7
            echo "    <a href=\"/logout\"><h5 style=\" text-align: center\">Выйти</h5></a>
    ";
        } else {
            // line 9
            echo "    <a href=\"/login\"><h5 style=\"text-align: center\">Авторизация</h5></a><a href=\"/registration\"><h5 style=\"text-align: center\">Регистрация</h5></a>
    ";
        }
        // line 11
        echo "

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" />

    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.5/themes/default/style.min.css\" />
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.5/jstree.min.js\"></script>


    <div id=\"container\"></div>
    <script>
        \$(function() {
            \$('#container').jstree({
                \"types\" : {
                    \"default\" : {
                        \"icon\" : \"glyphicon glyphicon-user\"
                    }
                },
                \"plugins\" : [\"types\"],
                'core' : {
                    'data' : {
                        \"url\" : function (node) {
                            return \"/ajax/workers/\" + (node.id === \"#\" ? 0 : node.id);
                        },
                        \"dataType\" : \"json\"
                    }

                }
            });
        });
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  59 => 9,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1 style=\"text-align: center\">Иерархия сотрудников в древовидной форме</h1>
    <a href=\"/authorized/workers\"><h3 style=\"text-align: center\">Список сотрудников</h3></a>
    {% if is_granted('ROLE_USER') %}
    <a href=\"/logout\"><h5 style=\" text-align: center\">Выйти</h5></a>
    {% else %}
    <a href=\"/login\"><h5 style=\"text-align: center\">Авторизация</h5></a><a href=\"/registration\"><h5 style=\"text-align: center\">Регистрация</h5></a>
    {% endif %}


    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" />

    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.5/themes/default/style.min.css\" />
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.5/jstree.min.js\"></script>


    <div id=\"container\"></div>
    <script>
        \$(function() {
            \$('#container').jstree({
                \"types\" : {
                    \"default\" : {
                        \"icon\" : \"glyphicon glyphicon-user\"
                    }
                },
                \"plugins\" : [\"types\"],
                'core' : {
                    'data' : {
                        \"url\" : function (node) {
                            return \"/ajax/workers/\" + (node.id === \"#\" ? 0 : node.id);
                        },
                        \"dataType\" : \"json\"
                    }

                }
            });
        });
    </script>


{% endblock %}


", "default/main.html.twig", "/Users/Aleksey/PhpstormProjects/test-local/app/Resources/views/default/main.html.twig");
    }
}
