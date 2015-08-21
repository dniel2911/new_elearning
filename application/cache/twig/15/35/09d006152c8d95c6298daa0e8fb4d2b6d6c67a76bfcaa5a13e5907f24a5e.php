<?php

/* admin_pengajar/edit_username.html */
class __TwigTemplate_153509d006152c8d95c6298daa0e8fb4d2b6d6c67a76bfcaa5a13e5907f24a5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-iframe.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-iframe.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<strong>Edit Username <span class=\"text-error\">*</span></strong>
";
        // line 5
        echo get_flashdata("edit");
        echo "

";
        // line 7
        echo form_open(((("admin/pengajar/edit_username/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . (isset($context["pengajar_id"]) ? $context["pengajar_id"] : null)));
        echo "
<input type=\"hidden\" name=\"login_id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : null), "id"), "html", null, true);
        echo "\">
<table class=\"table table-striped\">
    <tbody>
        <tr>
            <td>
                <input type=\"text\" name=\"username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, set_value("username", $this->getAttribute((isset($context["login"]) ? $context["login"] : null), "username")), "html", null, true);
        echo "\">
                <br>";
        // line 14
        echo form_error("username");
        echo "
            </td>
            <td width=\"20%\">
                <button type=\"submit\" class=\"btn btn-primary\">Update</button>
            </td>
        </tr>
    </tbody>
</table>
";
        // line 22
        echo form_close();
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_pengajar/edit_username.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  55 => 14,  51 => 13,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
