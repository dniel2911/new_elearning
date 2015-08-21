<?php

/* admin_pengajar/edit_picture.html */
class __TwigTemplate_1026bdcdc775142d5c4b7665af4c44cc0aef5d246b505740ba3c1d0ae22314f5 extends Twig_Template
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
        echo "<strong>Edit Foto <span class=\"text-error\">*</span></strong>
";
        // line 5
        echo get_flashdata("edit");
        echo "

";
        // line 7
        echo form_open_multipart(((("admin/pengajar/edit_picture/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . (isset($context["pengajar_id"]) ? $context["pengajar_id"] : null)));
        echo "
<table class=\"table table-striped\">
    <tbody>
        <tr>
            <td>
                <img class=\"img-polaroid\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, get_url_image_pengajar($this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "foto"), "medium", $this->getAttribute((isset($context["pengajar"]) ? $context["pengajar"] : null), "jenis_kelamin")), "html", null, true);
        echo "\">
            </td>
            <td>
                <input type=\"file\" name=\"userfile\" class=\"btn btn-small\" style=\"max-width:190px;\">
                ";
        // line 16
        echo (((!twig_test_empty((isset($context["error_upload"]) ? $context["error_upload"] : null)))) ? ((isset($context["error_upload"]) ? $context["error_upload"] : null)) : (""));
        echo "
            </td>
        <tr>
        <tr>
            <td colspan=\"2\">
                <button type=\"submit\" class=\"btn btn-primary\">Update</button>
            </td>
        </tr>
    </tbody>
</table>
";
        // line 26
        echo form_close();
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_pengajar/edit_picture.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 26,  54 => 16,  47 => 12,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
