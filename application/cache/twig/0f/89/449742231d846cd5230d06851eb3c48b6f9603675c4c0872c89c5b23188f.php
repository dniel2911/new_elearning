<?php

/* default/admin_akun/index.html */
class __TwigTemplate_0f89449742231d846cd5230d06851eb3c48b6f9603675c4c0872c89c5b23188f extends Twig_Template
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
        echo "
<div class=\"content\">
    <div class=\"module\">
        <div class=\"module-head\">
            <h3>";
        // line 5
        echo (isset($context["module_title"]) ? $context["module_title"] : null);
        echo "</h3>
        </div>
        <div class=\"module-body\">
            ";
        // line 8
        echo get_flashdata("akun");
        echo "

            ";
        // line 10
        $template = $this->env->resolveTemplate((isset($context["sub_content_file"]) ? $context["sub_content_file"] : null));
        $template->display($context);
        // line 11
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/admin_akun/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  36 => 10,  31 => 8,  25 => 5,  19 => 1,);
    }
}
