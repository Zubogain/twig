<?php

/* task/add.twig */
class __TwigTemplate_617bcf7118202890dbf50e6b78775458fca2da2186edd88f20632e6d7f1b8f66 extends Twig_Template
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
        // line 1
        echo "<div style=\"display: inline-block; margin-bottom: 1rem;\">
\t<form method=\"POST\" action=\"?/task\" class=\"form-add\">
\t\t<input type=\"text\" name=\"new_task\" placeholder=\"Описание задачи\">
\t\t<input type=\"submit\" name=\"do_task\" value=\"Добавить\">
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "task/add.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"display: inline-block; margin-bottom: 1rem;\">
\t<form method=\"POST\" action=\"?/task\" class=\"form-add\">
\t\t<input type=\"text\" name=\"new_task\" placeholder=\"Описание задачи\">
\t\t<input type=\"submit\" name=\"do_task\" value=\"Добавить\">
\t</form>
</div>", "task/add.twig", "/Applications/MAMP/htdocs/application/views/task/add.twig");
    }
}
