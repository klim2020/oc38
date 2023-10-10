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

/* default/template/extension/payment/globalpay.twig */
class __TwigTemplate_3a6af290db977841e6256887f49cb1d558e6669c9265158f29323a8bbef3fc2f extends \Twig\Template
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
        echo "<form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"POST\" class=\"form-horizontal\" id=\"globalpay_form_redirect\">
  <input type=hidden name=\"MERCHANT_ID\" value=\"";
        // line 2
        echo ($context["merchant_id"] ?? null);
        echo "\" />
  <input type=hidden name=\"ORDER_ID\" value=\"";
        // line 3
        echo ($context["order_id"] ?? null);
        echo "\" />
  <input type=hidden name=\"CURRENCY\" value=\"";
        // line 4
        echo ($context["currency"] ?? null);
        echo "\" >
  <input type=hidden name=\"AMOUNT\" value=\"";
        // line 5
        echo ($context["amount"] ?? null);
        echo "\" >
  <input type=hidden name=\"TIMESTAMP\" value=\"";
        // line 6
        echo ($context["timestamp"] ?? null);
        echo "\" />
  <input type=hidden name=\"SHA1HASH\" value=\"";
        // line 7
        echo ($context["hash"] ?? null);
        echo "\">
  <input type=hidden name=\"AUTO_SETTLE_FLAG\" value=\"";
        // line 8
        echo ($context["settle"] ?? null);
        echo "\">
  <input type=hidden name=\"RETURN_TSS\" value=\"";
        // line 9
        echo ($context["tss"] ?? null);
        echo "\">
  <input type=hidden name=\"BILLING_CODE\" value=\"";
        // line 10
        echo ($context["billing_code"] ?? null);
        echo "\">
  <input type=hidden name=\"BILLING_CO\" value=\"";
        // line 11
        echo ($context["payment_country"] ?? null);
        echo "\">
  <input type=hidden name=\"SHIPPING_CODE\" value=\"";
        // line 12
        echo ($context["shipping_code"] ?? null);
        echo "\">
  <input type=hidden name=\"SHIPPING_CO\" value=\"";
        // line 13
        echo ($context["shipping_country"] ?? null);
        echo "\">
  <input type=hidden name=\"MERCHANT_RESPONSE_URL\" value=\"";
        // line 14
        echo ($context["response_url"] ?? null);
        echo "\">
  <input type=hidden name=\"COMMENT1\" value=\"OpenCart\">
  ";
        // line 16
        if ((($context["card_select"] ?? null) == true)) {
            // line 17
            echo "  <fieldset id=\"payment\">
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-cc-type\"><span data-toggle=\"tooltip\" title=\"";
            // line 19
            echo ($context["help_select_card"] ?? null);
            echo "\">";
            echo ($context["entry_cc_type"] ?? null);
            echo "</span></label>
      <div class=\"col-sm-10\">
        <select name=\"ACCOUNT\" class=\"form-control\" id=\"input-cc-type\">
          
         ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 24
                echo "          
          <option value=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["card"], "account", [], "any", false, false, false, 25);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["card"], "type", [], "any", false, false, false, 25);
                echo "</option>
          
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        
        </select>
      </div>
    </div>
  </fieldset>
  ";
        }
        // line 34
        echo "</form>
<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
        // line 37
        echo ($context["button_confirm"] ?? null);
        echo "\" id=\"button-confirm\" class=\"btn btn-primary\" />
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-confirm').bind('click', function() {
\t\$('#globalpay_form_redirect').submit();
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/globalpay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 37,  136 => 34,  128 => 28,  117 => 25,  114 => 24,  110 => 23,  101 => 19,  97 => 17,  95 => 16,  90 => 14,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/globalpay.twig", "");
    }
}
