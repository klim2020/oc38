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

/* default/template/checkout/simplecheckout_comment.twig */
class __TwigTemplate_f9fe326c68e27642fb661f929e5065c4bc468118b7aaa563bbf95ae0e8696285 extends \Twig\Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_comment\">
    ";
        // line 2
        if (($context["display_header"] ?? null)) {
            // line 3
            echo "      <div class=\"checkout-heading panel-heading\"><span>";
            echo ($context["label"] ?? null);
            echo "</span></div>
    ";
        }
        // line 5
        echo "    <div class=\"simplecheckout-block-content\">
      <div class=\"form-group\">
        <textarea class=\"form-control\" name=\"comment\" id=\"comment\" placeholder=\"";
        // line 7
        echo ($context["placeholder"] ?? null);
        echo "\" data-reload-payment-form=\"true\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
      </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout_comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/simplecheckout_comment.twig", "");
    }
}
