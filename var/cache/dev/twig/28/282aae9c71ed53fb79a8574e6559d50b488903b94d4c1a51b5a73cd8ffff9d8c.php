<?php

/* default/search.html.twig */
class __TwigTemplate_621d4e81eee6b060ffeb5a806a074e001de96467366f6296c28e34d7f4441eca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/search.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/search.html.twig"));

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
        echo "    <h1 style=\"text-align: center\">Поиск</h1>
    <a href=\"/authorized/workers\"><h3 style=\"text-align: center\">Список сотрудников</h3></a>
    <div class=\"container\" style=\"width: 980px; margin: auto; padding-top: 3%\">

        <form style=\"margin-bottom: 2%\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
            <label for=\"search\">Поиск</label>
            <input name=\"search\" type=\"text\">
            <button type=\"submit\" class=\"btn btn-primary\">Поиск</button>
        </form>

        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>
                    ФИО
                </th>

                <th>
                   Должность
                </th>
                <th>
                    Дата приема на работу
                </th>
                <th>
                    Размер заработной платы
                </th>
                <th>
                    Удалить
                </th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["workers"] ?? $this->getContext($context, "workers")));
        foreach ($context['_seq'] as $context["_key"] => $context["worker"]) {
            // line 38
            echo "
                <tr>
                    <td>
                        ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "secondName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "thirdName", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "position", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "getDateInString", array(), "method"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "salary", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        <a href=\"/authorized/delete/";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "id", array()), "html", null, true);
            echo "\">Удалить</a>
                    </td>
                    <td>
                        <a href=\"/authorized/edit/";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "id", array()), "html", null, true);
            echo "\">Редактировать</a>
                    </td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
            </tbody>
        </table>
        <div class=\"navigation text-center\">
            ";
        // line 65
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["workers"] ?? $this->getContext($context, "workers")));
        echo "
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 65,  141 => 61,  130 => 56,  124 => 53,  118 => 50,  112 => 47,  106 => 44,  96 => 41,  91 => 38,  87 => 37,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1 style=\"text-align: center\">Поиск</h1>
    <a href=\"/authorized/workers\"><h3 style=\"text-align: center\">Список сотрудников</h3></a>
    <div class=\"container\" style=\"width: 980px; margin: auto; padding-top: 3%\">

        <form style=\"margin-bottom: 2%\" action=\"{{ path('search') }}\" method=\"get\">
            <label for=\"search\">Поиск</label>
            <input name=\"search\" type=\"text\">
            <button type=\"submit\" class=\"btn btn-primary\">Поиск</button>
        </form>

        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>
                    ФИО
                </th>

                <th>
                   Должность
                </th>
                <th>
                    Дата приема на работу
                </th>
                <th>
                    Размер заработной платы
                </th>
                <th>
                    Удалить
                </th>
            </tr>
            </thead>
            <tbody>

            {% for worker in workers %}

                <tr>
                    <td>
                        {{ worker.name }} {{ worker.secondName }} {{ worker.thirdName }}
                    </td>
                    <td>
                        {{ worker.position }}
                    </td>
                    <td>
                        {{ worker.getDateInString() }}
                    </td>
                    <td>
                        {{ worker.salary }}
                    </td>
                    <td>
                        <a href=\"/authorized/delete/{{ worker.id }}\">Удалить</a>
                    </td>
                    <td>
                        <a href=\"/authorized/edit/{{ worker.id }}\">Редактировать</a>
                    </td>

                </tr>
            {% endfor %}

            </tbody>
        </table>
        <div class=\"navigation text-center\">
            {{ knp_pagination_render(workers) }}
        </div>
    </div>


{% endblock %}


", "default/search.html.twig", "/Users/Aleksey/PhpstormProjects/test-local/app/Resources/views/default/search.html.twig");
    }
}
