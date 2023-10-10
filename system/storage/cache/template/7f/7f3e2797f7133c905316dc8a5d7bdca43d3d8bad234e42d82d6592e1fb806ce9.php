<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/extension/shipping/qweqr.twig */
class __TwigTemplate_bf0997aec4cf9236e17b005d77bedd526dd50ef7b8751731f96354518ebe7880 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<a href = \"https://qweqr.lv/\"><img src=\"catalog/view/images/qweqr.svg\" alt=\"Qweqr service home page\"></a><span style=\"color: rgb(133 117 209);\">";
        echo ($context["text_title_standart"] ?? null);
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/shipping/qweqr.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/shipping/qweqr.twig", "");
    }
}
