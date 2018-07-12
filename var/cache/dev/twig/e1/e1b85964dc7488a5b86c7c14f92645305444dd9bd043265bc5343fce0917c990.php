<?php

/* default/workers-list.html.twig */
class __TwigTemplate_2e97f100be701a3cc119862b83383be7955835d63f0029e5f5aa983438342449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/workers-list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/workers-list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/workers-list.html.twig"));

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
        echo "    <h1 style=\"text-align: center\">Список сотрудников с сортировкой</h1>
    <a href=\"/\"><h3 style=\"text-align: center\">Дерево сотрудников</h3></a>
    ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 7
            echo "        <a href=\"/logout\"><h5 style=\"text-align: center\">Выйти</h5></a>
    ";
        } else {
            // line 9
            echo "        <a href=\"/login\"><h5 style=\"text-align: center\">Авторизация</h5></a><a href=\"/registration\"><h5 style=\"text-align: center\">Регистрация</h5></a>
    ";
        }
        // line 10
        echo "    <div class=\"container\" style=\"width: 980px; margin: auto; padding-top: 3%\">
<div class=\"container\">
    <div class=\"row\" style=\"justify-content: space-between;\">

        <form  style=\"margin-bottom: 2%\" action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
            <label for=\"search\">Поиск</label>
            <input name=\"search\" type=\"text\">
            <button type=\"submit\" class=\"btn btn-primary\">Поиск</button>
        </form>

        <div class=\"float-right\">
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_worker");
        echo "\"><i class=\"fa fa-plus\" aria-hidden=\"true\">Добавить пользователя</i></a>
        </div>
    </div>
</div>

        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>
                    Картинка
                </th>
                <th>
                    ";
        // line 33
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["workers"] ?? $this->getContext($context, "workers")), "Имя", "w.name");
        echo " ";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["workers"] ?? $this->getContext($context, "workers")), "Фамилия", "w.secondName");
        echo " ";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["workers"] ?? $this->getContext($context, "workers")), "Отчество", "w.thirdName");
        echo "
                </th>

                <th>
                    ";
        // line 37
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["workers"] ?? $this->getContext($context, "workers")), "Должность", "w.position");
        echo "
                </th>
                <th>
                    ";
        // line 40
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["workers"] ?? $this->getContext($context, "workers")), "Дата приема на работу", "w.dateStartWork");
        echo "
                </th>
                <th>
                    ";
        // line 43
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["workers"] ?? $this->getContext($context, "workers")), "Размер заработной платы", "w.salary");
        echo "
                </th>
                <th>
                    Управление
                </th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["workers"] ?? $this->getContext($context, "workers")));
        foreach ($context['_seq'] as $context["_key"] => $context["worker"]) {
            // line 53
            echo "                <tr>
                    <td>
                        ";
            // line 55
            if (($this->getAttribute($context["worker"], "image", array()) != "")) {
                // line 56
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("upload/images/" . $this->getAttribute($context["worker"], "image", array()))), "html", null, true);
                echo "\" width=\"50px\" height=\"50px\">
                        ";
            } else {
                // line 58
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("upload/images/nophoto.jpg"), "html", null, true);
                echo "\" width=\"50px\" height=\"50px\">
                        ";
            }
            // line 60
            echo "                    </td>
                    <td>
                        ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "secondName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "thirdName", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "position", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "getDateInString", array(), "method"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "salary", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        <a href=\"/authorized/delete/";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "id", array()), "html", null, true);
            echo "\">Удалить</a>
                        <a href=\"/authorized/edit/";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "id", array()), "html", null, true);
            echo "\">Редактировать</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
            </tbody>
        </table>
        <div class=\"navigation text-center\">
            ";
        // line 83
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
        return "default/workers-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 83,  197 => 79,  187 => 75,  183 => 74,  177 => 71,  171 => 68,  165 => 65,  155 => 62,  151 => 60,  145 => 58,  139 => 56,  137 => 55,  133 => 53,  129 => 52,  117 => 43,  111 => 40,  105 => 37,  94 => 33,  79 => 21,  69 => 14,  63 => 10,  59 => 9,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1 style=\"text-align: center\">Список сотрудников с сортировкой</h1>
    <a href=\"/\"><h3 style=\"text-align: center\">Дерево сотрудников</h3></a>
    {% if is_granted('ROLE_USER') %}
        <a href=\"/logout\"><h5 style=\"text-align: center\">Выйти</h5></a>
    {% else %}
        <a href=\"/login\"><h5 style=\"text-align: center\">Авторизация</h5></a><a href=\"/registration\"><h5 style=\"text-align: center\">Регистрация</h5></a>
    {% endif %}    <div class=\"container\" style=\"width: 980px; margin: auto; padding-top: 3%\">
<div class=\"container\">
    <div class=\"row\" style=\"justify-content: space-between;\">

        <form  style=\"margin-bottom: 2%\" action=\"{{ path('search') }}\" method=\"get\">
            <label for=\"search\">Поиск</label>
            <input name=\"search\" type=\"text\">
            <button type=\"submit\" class=\"btn btn-primary\">Поиск</button>
        </form>

        <div class=\"float-right\">
            <a href=\"{{ path('add_worker') }}\"><i class=\"fa fa-plus\" aria-hidden=\"true\">Добавить пользователя</i></a>
        </div>
    </div>
</div>

        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>
                    Картинка
                </th>
                <th>
                    {{ knp_pagination_sortable(workers,'Имя', 'w.name') }} {{ knp_pagination_sortable(workers,'Фамилия', 'w.secondName') }} {{ knp_pagination_sortable(workers,'Отчество', 'w.thirdName') }}
                </th>

                <th>
                    {{ knp_pagination_sortable(workers,'Должность', 'w.position') }}
                </th>
                <th>
                    {{ knp_pagination_sortable(workers,'Дата приема на работу', 'w.dateStartWork') }}
                </th>
                <th>
                    {{ knp_pagination_sortable(workers,'Размер заработной платы', 'w.salary') }}
                </th>
                <th>
                    Управление
                </th>
            </tr>
            </thead>
            <tbody>

            {% for worker in workers %}
                <tr>
                    <td>
                        {% if worker.image != '' %}
                        <img src=\"{{ asset('upload/images/' ~ worker.image) }}\" width=\"50px\" height=\"50px\">
                        {% else %}
                            <img src=\"{{ asset('upload/images/nophoto.jpg') }}\" width=\"50px\" height=\"50px\">
                        {% endif %}
                    </td>
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


", "default/workers-list.html.twig", "/Users/Aleksey/PhpstormProjects/test-local/app/Resources/views/default/workers-list.html.twig");
    }
}
