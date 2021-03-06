<?php

/* task/list.twig */
class __TwigTemplate_9d5b1b8bbaf782d9fcff7c2f2526040de0b7a7e46e4e9a73993a126a8c715ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "task/list.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    <title>Список дел</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/table.css\">
";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->loadTemplate("task/edit.twig", "task/list.twig", 7)->display($context);
        // line 8
        echo "    <div style=\"display: inline-block; margin-left: 20px;\">
        <form method=\"POST\" action=\"?/task\">
            <label for=\"sort\">Сортировать по:</label>
            <select name=\"sort_by\">
                <option value=\"date_added\">Дате добавления</option>
                <option value=\"is_done\">Статусу</option>
                <option value=\"description\">Описанию</option>
            </select>
            <input type=\"submit\" name=\"sort\" value=\"Отсортировать\">
        </form>
    </div>

    <div class=\"table\">
    \t<table border=\"1\">
    \t\t<thead>
    \t\t\t<tr>
    \t\t\t\t<td>Описание задачи</td>
    \t\t\t\t<td>Дата добавления</td>
    \t\t\t\t<td>Статус</td>
                    <td>Ответственный</td>
    \t\t\t\t<td></td>
    \t\t\t\t<td>Закрепить задачу за пользователем</td>
    \t\t\t</tr>
    \t\t</thead>
            <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todoArray"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["todoList"]) {
            // line 34
            echo "                    ";
            if (($this->getAttribute($context["todoList"], "u_id", array()) == $this->getAttribute(($context["session"] ?? null), "user_id", array()))) {
                // line 35
                echo "                        <tr>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "description", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "date_added", array()), "html", null, true);
                echo "</td>
                            ";
                // line 38
                if (($this->getAttribute($context["todoList"], "is_done", array()) == 1)) {
                    // line 39
                    echo "                                <td style=\"color: green;\">Выполнено</td>
                            ";
                } else {
                    // line 41
                    echo "                                <td style=\"color: red;\">Не выполнено</td>
                            ";
                }
                // line 43
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["usersArray"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["usersList"]) {
                    // line 44
                    echo "                                ";
                    if (($this->getAttribute($context["todoList"], "assigned_user_id", array()) == $this->getAttribute($context["usersList"], "id", array()))) {
                        // line 45
                        echo "                                    ";
                        if (($this->getAttribute($context["todoList"], "assigned_user_id", array()) == $this->getAttribute(($context["session"] ?? null), "user_id", array()))) {
                            // line 46
                            echo "                                        <td>Вы</td>
                                    ";
                        } else {
                            // line 48
                            echo "                                        <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["usersList"], "login", array()), "html", null, true);
                            echo "</td>
                                    ";
                        }
                        // line 50
                        echo "                                ";
                    }
                    // line 51
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usersList'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                        <td><a href=\"?/task/action=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/edit\">Изменить</a>
                        ";
                // line 53
                if (($this->getAttribute($context["todoList"], "assigned_user_id", array()) == $this->getAttribute(($context["session"] ?? null), "user_id", array()))) {
                    // line 54
                    echo "                            <a href=\"?/task/action=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                    echo "/done\">Выполнить</a>
                        ";
                }
                // line 56
                echo "                        <a href=\"?/task/action=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/delete\">Удалить</a></td>
                        <td>
                            <form method='POST' action=\"?/task\">
                                <select name=\"assigned_user_id\">
                        ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["usersArray"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["usersList"]) {
                    // line 61
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["usersList"], "id", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["usersList"], "login", array()), "html", null, true);
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usersList'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                                </select>
                                <input type=\"submit\" name=\"assign\" value=\"Переложить ответственность\">
                            </form>
                        </td>
                        </tr>
                    ";
            }
            // line 69
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todoList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    \t\t</tbody>
    \t</table>
    </div>

    <div>
        <h3>Также, посмотрите что от вас требуют другие люди:</h3>
        <table>
            <thead>
                <tr>
                    <td>Описание задачи</td>
                    <td>Дата добавления</td>
                    <td>Статус</td>
                    <td>Автор</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todoArray"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["todoList"]) {
            // line 88
            echo "                    ";
            if ((($this->getAttribute($context["todoList"], "assigned_user_id", array()) == $this->getAttribute(($context["session"] ?? null), "user_id", array())) && ($this->getAttribute($context["todoList"], "user_id", array()) != $this->getAttribute(($context["session"] ?? null), "user_id", array())))) {
                // line 89
                echo "                        <tr>
                            <td>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "description", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "date_added", array()), "html", null, true);
                echo "</td>
                            ";
                // line 92
                if (($this->getAttribute($context["todoList"], "is_done", array()) == 1)) {
                    // line 93
                    echo "                                <td style=\"color: green;\">Выполнено</td>
                            ";
                } else {
                    // line 95
                    echo "                                <td style=\"color: red;\">Не выполнено</td>
                            ";
                }
                // line 97
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "login", array()), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"?/task/action=";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/edit\">Изменить</a>
                                <a href=\"?/task/action=";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/done\">Выполнить</a>
                                <a href=\"?/task/action=";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["todoList"], "id", array()), "html", null, true);
                echo "/delete\">Удалить</a>
                            </td>
                        </tr>
                    ";
            }
            // line 105
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todoList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "task/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 106,  249 => 105,  242 => 101,  238 => 100,  234 => 99,  228 => 97,  224 => 95,  220 => 93,  218 => 92,  214 => 91,  210 => 90,  207 => 89,  204 => 88,  200 => 87,  181 => 70,  175 => 69,  167 => 63,  154 => 61,  150 => 60,  142 => 56,  136 => 54,  134 => 53,  129 => 52,  123 => 51,  120 => 50,  114 => 48,  110 => 46,  107 => 45,  104 => 44,  99 => 43,  95 => 41,  91 => 39,  89 => 38,  85 => 37,  81 => 36,  78 => 35,  75 => 34,  71 => 33,  44 => 8,  41 => 7,  38 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html' %}
{% block head %}
    <title>Список дел</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/table.css\">
{% endblock %}
{% block main %}
    {% include 'task/edit.twig' %}
    <div style=\"display: inline-block; margin-left: 20px;\">
        <form method=\"POST\" action=\"?/task\">
            <label for=\"sort\">Сортировать по:</label>
            <select name=\"sort_by\">
                <option value=\"date_added\">Дате добавления</option>
                <option value=\"is_done\">Статусу</option>
                <option value=\"description\">Описанию</option>
            </select>
            <input type=\"submit\" name=\"sort\" value=\"Отсортировать\">
        </form>
    </div>

    <div class=\"table\">
    \t<table border=\"1\">
    \t\t<thead>
    \t\t\t<tr>
    \t\t\t\t<td>Описание задачи</td>
    \t\t\t\t<td>Дата добавления</td>
    \t\t\t\t<td>Статус</td>
                    <td>Ответственный</td>
    \t\t\t\t<td></td>
    \t\t\t\t<td>Закрепить задачу за пользователем</td>
    \t\t\t</tr>
    \t\t</thead>
            <tbody>
                {% for todoList in todoArray %}
                    {% if todoList.u_id == session.user_id %}
                        <tr>
                            <td>{{ todoList.description }}</td>
                            <td>{{ todoList.date_added }}</td>
                            {% if todoList.is_done == 1 %}
                                <td style=\"color: green;\">Выполнено</td>
                            {% else %}
                                <td style=\"color: red;\">Не выполнено</td>
                            {% endif %}
                            {% for usersList in usersArray %}
                                {% if todoList.assigned_user_id == usersList.id %}
                                    {% if todoList.assigned_user_id == session.user_id %}
                                        <td>Вы</td>
                                    {% else %}
                                        <td>{{ usersList.login }}</td>
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        <td><a href=\"?/task/action={{ todoList.id }}/edit\">Изменить</a>
                        {% if todoList.assigned_user_id == session.user_id %}
                            <a href=\"?/task/action={{ todoList.id }}/done\">Выполнить</a>
                        {% endif %}
                        <a href=\"?/task/action={{ todoList.id }}/delete\">Удалить</a></td>
                        <td>
                            <form method='POST' action=\"?/task\">
                                <select name=\"assigned_user_id\">
                        {% for usersList in usersArray %}
                            <option value=\"{{ usersList.id }}/{{ todoList.id }}\">{{ usersList.login }}</option>
                        {% endfor %}
                                </select>
                                <input type=\"submit\" name=\"assign\" value=\"Переложить ответственность\">
                            </form>
                        </td>
                        </tr>
                    {% endif %}
                {% endfor %}
    \t\t</tbody>
    \t</table>
    </div>

    <div>
        <h3>Также, посмотрите что от вас требуют другие люди:</h3>
        <table>
            <thead>
                <tr>
                    <td>Описание задачи</td>
                    <td>Дата добавления</td>
                    <td>Статус</td>
                    <td>Автор</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                {% for todoList in todoArray %}
                    {% if todoList.assigned_user_id == session.user_id and todoList.user_id != session.user_id %}
                        <tr>
                            <td>{{ todoList.description }}</td>
                            <td>{{ todoList.date_added }}</td>
                            {% if todoList.is_done == 1 %}
                                <td style=\"color: green;\">Выполнено</td>
                            {% else %}
                                <td style=\"color: red;\">Не выполнено</td>
                            {% endif %}
                            <td>{{ todoList.login }}</td>
                            <td>
                                <a href=\"?/task/action={{ todoList.id }}/edit\">Изменить</a>
                                <a href=\"?/task/action={{ todoList.id }}/done\">Выполнить</a>
                                <a href=\"?/task/action={{ todoList.id }}/delete\">Удалить</a>
                            </td>
                        </tr>
                    {% endif %}
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "task/list.twig", "/Applications/MAMP/htdocs/application/views/task/list.twig");
    }
}
