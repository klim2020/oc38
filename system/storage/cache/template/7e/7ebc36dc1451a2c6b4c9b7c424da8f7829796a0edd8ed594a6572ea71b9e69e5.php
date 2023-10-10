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

/* default/template/extension/payment/worldpay.twig */
class __TwigTemplate_723cd7e586c7d0158861b9397beac93b4f8efd25ec30ece38d9b81068a344d64 extends \Twig\Template
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
        if (($context["existing_cards"] ?? null)) {
            // line 2
            echo "\t<legend>";
            echo ($context["text_credit_card"] ?? null);
            echo "</legend>
\t<div class=\"form-horizontal\">
\t  <div id=\"choose-card\" class=\"form-group\">
\t\t<label class=\"col-sm-2 control-label\">";
            // line 5
            echo ($context["entry_card"] ?? null);
            echo "</label>
\t\t<div class=\"col-sm-10\">
\t\t  <label class=\"radio-inline\">
\t\t\t<input type=\"radio\" name=\"existing-card\" value=\"1\" checked=\"checked\"/>
\t\t\t";
            // line 9
            echo ($context["entry_card_existing"] ?? null);
            echo "
\t\t  </label>
\t\t  <label class=\"radio-inline\">
\t\t\t<input type=\"radio\" name=\"existing-card\" value=\"0\"/>
\t\t\t";
            // line 13
            echo ($context["entry_card_new"] ?? null);
            echo "
\t\t  </label>
\t\t</div>
\t  </div>
\t</div>
\t<form id=\"payment-existing-form\" action=\"";
            // line 18
            echo ($context["form_submit"] ?? null);
            echo "\" method=\"post\" class=\"form-horizontal\">
\t  <fieldset>
\t\t<div id=\"card-existing\">
\t\t  <div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"token\">";
            // line 22
            echo ($context["entry_cc_choice"] ?? null);
            echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"token\" data-worldpay=\"token\" class=\"form-control\">
\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["existing_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["existing_card"]) {
                // line 26
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["existing_card"], "token", [], "any", false, false, false, 26);
                echo "\">";
                echo ($context["text_card_type"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["existing_card"], "type", [], "any", false, false, false, 26);
                echo ", ";
                echo ($context["text_card_digits"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["existing_card"], "digits", [], "any", false, false, false, 26);
                echo ", ";
                echo ($context["text_card_expiry"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["existing_card"], "expiry", [], "any", false, false, false, 26);
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['existing_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"buttons clearfix\">
\t\t\t<div class=\"pull-right\">
\t\t\t  <input type=\"button\" value=\"";
            // line 33
            echo ($context["button_delete_card"] ?? null);
            echo "\" id=\"button-delete\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" />
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-cc-cvc\">";
            // line 37
            echo ($context["entry_cc_cvc"] ?? null);
            echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" data-worldpay=\"cvc\" value=\"\" size=\"4\" placeholder=\"";
            // line 39
            echo ($context["entry_cc_cvc"] ?? null);
            echo "\" id=\"input-cc-cvc\" class=\"form-control\" />
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t  </fieldset>
\t  <div class=\"buttons\">
\t\t<div class=\"pull-right\">
\t\t  <input type=\"submit\" value=\"";
            // line 46
            echo ($context["button_confirm"] ?? null);
            echo "\" id=\"button-confirm\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" />
\t\t</div>
\t  </div>
\t</form>
\t<form style=\"display: none\" id=\"payment-new-form\" action=\"";
            // line 50
            echo ($context["form_submit"] ?? null);
            echo "\" method=\"post\" class=\"form-horizontal\">
  ";
        } else {
            // line 52
            echo "\t  <form id=\"payment-new-form\" action=\"";
            echo ($context["form_submit"] ?? null);
            echo "\" method=\"post\" class=\"form-horizontal\">
\t";
        }
        // line 54
        echo "\t<fieldset>
\t  <div class=\"form-group\">
\t\t<div class=\"col-sm-11\" id='paymentDetailsHere' style=\"margin-left: 3%\"></div>
\t  </div>
\t  ";
        // line 58
        if (($context["payment_worldpay_card"] ?? null)) {
            // line 59
            echo "\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-cc-save\">";
            // line 60
            echo ($context["entry_card_save"] ?? null);
            echo "</label>
\t\t\t<div class=\"col-sm-2\">
\t\t\t  <input type=\"checkbox\" name=\"save-card\" value=true id=\"input-cc-save\"/>
\t\t\t</div>
\t\t  </div>
\t  ";
        }
        // line 66
        echo "\t  </div>
\t</fieldset>
\t<div class=\"buttons\">
\t  <div class=\"pull-right\">
\t\t<input type=\"submit\" value=\"";
        // line 70
        echo ($context["button_confirm"] ?? null);
        echo "\" id=\"button-confirm\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
\t  </div>
\t</div>
  </form>
  <div id=\"payment-errors\">
  </div>
  <script type=\"text/javascript\"><!--

      //Load Worldpay.js and run script functions
      \$.getScript(\"";
        // line 79
        echo ($context["worldpay_script"] ?? null);
        echo "\", function (data, textStatus, jqxhr) {
        Worldpay.setClientKey(\"";
        // line 80
        echo ($context["worldpay_client_key"] ?? null);
        echo "\");

        // disable new card form if existing cards
";
        // line 83
        if (($context["existing_cards"] ?? null)) {
            // line 84
            echo "\t        \$('#payment-new-form :input').prop('disabled', true);
";
        }
        // line 86
        echo "
        // Set if token is reusable, remove first value when Worldpay update
        Worldpay.reusable = true;
";
        // line 89
        if (($context["recurring_products"] ?? null)) {
            // line 90
            echo "\t        Worldpay.reusable = true;
";
        } else {
            // line 92
            echo "\t        \$('input[name=\\'save-card\\']').on('change', function () {
\t          if (\$(this).is(':checked')) {
\t            Worldpay.reusable = true;
\t          } else {
\t            Worldpay.reusable = false;
\t          }
\t        });
";
        }
        // line 100
        echo "
        Worldpay.templateSaveButton = false;
        Worldpay.useTemplate('payment-new-form', 'paymentDetailsHere', 'inline', function (obj) {
          var _el = document.createElement('input');
          _el.value = obj.token;
          _el.type = 'hidden';
          _el.name = 'token';
          document.getElementById('payment-new-form').appendChild(_el);
\t\t  document.getElementById('payment-new-form').submit();
        });

        //Submit form
        \$('input[type=\\'submit\\']').on('click', function () {
          var existing = \$('input[name=\\'existing-card\\']:checked').val();
          if (existing === '1') {
            var form = document.getElementById('payment-existing-form');
            Worldpay.useForm(form, function (status, response) {
              if (response.error || status != 200) {
                Worldpay.handleError(form, document.getElementById('payment-errors'), response.error);
              } else {
                form.submit();
              }
            }, true);
          } else {
            Worldpay.submitTemplateForm();
          }
        });
      });

      //Delete a card
      \$('#button-delete').on('click', function () {
        var token = \$('select[name=\\'token\\'] option:selected');

        if (confirm('";
        // line 133
        echo ($context["text_confirm_delete"] ?? null);
        echo "\\n' + token.text())) {
          \$.ajax({
            url: 'index.php?route=extension/payment/worldpay/deleteCard',
            type: 'post',
            data: {token: token.val()},
            dataType: 'json',
            beforeSend: function () {
              \$('#button-delete').button('loading');
            },
            complete: function () {
              \$('#button-delete').button('reset');
            },
            success: function (json) {
              if (json['error']) {
                alert(json['error']);
              }

              if (json['success']) {
                alert(json['success']);
                if (json['existing_cards']) {
                  token.remove();
                } else {
                  \$('input[name=\\'existing-card\\'][value=0]').click();
                  \$('#choose-card').remove();
                  \$('#payment-existing-form').remove();
                }
              }
            }
          });
        }
      });

      // enable or disable forms based on exiting or new card option
      \$('input[name=\\'existing-card\\']').on('change', function () {
        if (this.value === '1') {
          \$('#payment-existing-form').show();
          \$('#payment-new-form').hide();
          \$('#payment-new-form :input').prop('disabled', true);
          \$('#payment-existing-form :input').prop('disabled', false);
        } else {
          \$('#payment-existing-form').hide();
          \$('#payment-new-form').show();
          \$('#payment-new-form :input').prop('disabled', false);
          \$('#payment-existing-form :input').prop('disabled', true);
        }
      });
      //--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/worldpay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 133,  234 => 100,  224 => 92,  220 => 90,  218 => 89,  213 => 86,  209 => 84,  207 => 83,  201 => 80,  197 => 79,  183 => 70,  177 => 66,  168 => 60,  165 => 59,  163 => 58,  157 => 54,  151 => 52,  146 => 50,  137 => 46,  127 => 39,  122 => 37,  113 => 33,  106 => 28,  85 => 26,  81 => 25,  75 => 22,  68 => 18,  60 => 13,  53 => 9,  46 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/worldpay.twig", "");
    }
}
