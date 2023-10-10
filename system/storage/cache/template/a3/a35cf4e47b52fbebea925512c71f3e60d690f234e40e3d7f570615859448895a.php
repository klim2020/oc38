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

/* extension/payment/globalpay.twig */
class __TwigTemplate_39e2ce52f4c729373cfe4fb5ac7d90c7f94cf9592817c5b041d3e2d65b72d11f extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
        echo ($context["text_url_message"] ?? null);
        echo "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\" id=\"tabs\">
            <li class=\"active\"><a href=\"#tab-api\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_api"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-account\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_account"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-order-status\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_order_status"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-payment\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_payment"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-advanced\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_advanced"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-api\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-merchant-id\">";
        // line 39
        echo ($context["entry_merchant_id"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_globalpay_merchant_id\" value=\"";
        // line 41
        echo ($context["payment_globalpay_merchant_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_merchant_id"] ?? null);
        echo "\" id=\"input-merchant-id\" class=\"form-control\" />
                  ";
        // line 42
        if (($context["error_merchant_id"] ?? null)) {
            // line 43
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_merchant_id"] ?? null);
            echo "</div>
                  ";
        }
        // line 45
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-secret\">";
        // line 48
        echo ($context["entry_secret"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"password\" name=\"payment_globalpay_secret\" value=\"";
        // line 50
        echo ($context["payment_globalpay_secret"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_secret"] ?? null);
        echo "\" id=\"input-secret\" class=\"form-control\" />
                  ";
        // line 51
        if (($context["error_secret"] ?? null)) {
            // line 52
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_secret"] ?? null);
            echo "</div>
                  ";
        }
        // line 54
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-secret\">";
        // line 57
        echo ($context["entry_rebate_password"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"password\" name=\"payment_globalpay_rebate_password\" value=\"";
        // line 59
        echo ($context["payment_globalpay_rebate_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_rebate_password"] ?? null);
        echo "\" id=\"input-rebate-password\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-live-demo\">";
        // line 63
        echo ($context["entry_live_demo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_globalpay_live_demo\" id=\"input-live-demo\" class=\"form-control\">
                    ";
        // line 66
        if (($context["payment_globalpay_live_demo"] ?? null)) {
            // line 67
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 68
            echo ($context["text_demo"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 70
            echo "                    <option value=\"1\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 71
            echo ($context["text_demo"] ?? null);
            echo "</option>
                    ";
        }
        // line 73
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 77
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_globalpay_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                    <option value=\"0\">";
        // line 80
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 82
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 82) == ($context["payment_globalpay_geo_zone_id"] ?? null))) {
                // line 83
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 83);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 83);
                echo "</option>
                    ";
            } else {
                // line 85
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 85);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 85);
                echo "</option>
                    ";
            }
            // line 87
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-debug\"><span data-toggle=\"tooltip\" title=\"";
        // line 92
        echo ($context["help_debug"] ?? null);
        echo "\">";
        echo ($context["entry_debug"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_globalpay_debug\" id=\"input-debug\" class=\"form-control\">
                    ";
        // line 95
        if (($context["payment_globalpay_debug"] ?? null)) {
            // line 96
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 97
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 99
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 100
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 102
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 106
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_globalpay_status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 109
        if (($context["payment_globalpay_status"] ?? null)) {
            // line 110
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 111
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 113
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 114
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 116
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 120
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_globalpay_total\" value=\"";
        // line 122
        echo ($context["payment_globalpay_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 126
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_globalpay_sort_order\" value=\"";
        // line 128
        echo ($context["payment_globalpay_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-account\">
              <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 133
        echo ($context["error_use_select_card"] ?? null);
        echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 140
        echo ($context["text_card_type"] ?? null);
        echo "</td>
                      <td class=\"text-center\">";
        // line 141
        echo ($context["text_enabled"] ?? null);
        echo "</td>
                      <td class=\"text-center\">";
        // line 142
        echo ($context["text_use_default"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 143
        echo ($context["text_subaccount"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\">";
        // line 148
        echo ($context["text_card_visa"] ?? null);
        echo "</td>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"payment_globalpay_account[visa][enabled]\" value=\"1\" ";
        // line 149
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "visa", [], "any", false, true, false, 149), "enabled", [], "any", true, true, false, 149) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "visa", [], "any", false, false, false, 149), "enabled", [], "any", false, false, false, 149) == 1))) ? ("checked=\"checked\"") : (""));
        echo "/></td>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"payment_globalpay_account[visa][default]\" value=\"1\" ";
        // line 150
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "visa", [], "any", false, true, false, 150), "default", [], "any", true, true, false, 150) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "visa", [], "any", false, false, false, 150), "default", [], "any", false, false, false, 150) == 1))) ? ("checked=\"checked\"") : (""));
        echo "/></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"payment_globalpay_account[visa][merchant_id]\" value=\"";
        // line 151
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "visa", [], "any", false, true, false, 151), "merchant_id", [], "any", true, true, false, 151)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "visa", [], "any", false, false, false, 151), "merchant_id", [], "any", false, false, false, 151)) : (""));
        echo "\" placeholder=\"";
        echo ($context["text_subaccount"] ?? null);
        echo "\" class=\"form-control\" /></td>
                    </tr>
                    <tr>
                      <td class=\"text-left\">";
        // line 154
        echo ($context["text_card_master"] ?? null);
        echo "</td>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"payment_globalpay_account[mc][enabled]\" value=\"1\" ";
        // line 155
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "mc", [], "any", false, true, false, 155), "enabled", [], "any", true, true, false, 155) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "mc", [], "any", false, false, false, 155), "enabled", [], "any", false, false, false, 155) == 1))) ? ("checked=\"checked\"") : (""));
        echo "/></td>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"payment_globalpay_account[mc][default]\" value=\"1\" ";
        // line 156
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "mc", [], "any", false, true, false, 156), "default", [], "any", true, true, false, 156) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "mc", [], "any", false, false, false, 156), "default", [], "any", false, false, false, 156) == 1))) ? ("checked=\"checked\"") : (""));
        echo "/></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"payment_globalpay_account[mc][merchant_id]\" value=\"";
        // line 157
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "mc", [], "any", false, true, false, 157), "merchant_id", [], "any", true, true, false, 157)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "mc", [], "any", false, false, false, 157), "merchant_id", [], "any", false, false, false, 157)) : (""));
        echo "\" placeholder=\"";
        echo ($context["text_subaccount"] ?? null);
        echo "\" class=\"form-control\" /></td>
                    </tr>
                    <tr>
                      <td class=\"text-left\">";
        // line 160
        echo ($context["text_card_amex"] ?? null);
        echo "</td>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"payment_globalpay_account[amex][enabled]\" value=\"1\" ";
        // line 161
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "amex", [], "any", false, true, false, 161), "enabled", [], "any", true, true, false, 161) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "amex", [], "any", false, false, false, 161), "enabled", [], "any", false, false, false, 161) == 1))) ? ("checked=\"checked\"") : (""));
        echo "/></td>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"payment_globalpay_account[amex][default]\" value=\"1\" ";
        // line 162
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "amex", [], "any", false, true, false, 162), "default", [], "any", true, true, false, 162) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "amex", [], "any", false, false, false, 162), "default", [], "any", false, false, false, 162) == 1))) ? ("checked=\"checked\"") : (""));
        echo "/></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"payment_globalpay_account[amex][merchant_id]\" value=\"";
        // line 163
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "amex", [], "any", false, true, false, 163), "merchant_id", [], "any", true, true, false, 163)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "amex", [], "any", false, false, false, 163), "merchant_id", [], "any", false, false, false, 163)) : (""));
        echo "\" placeholder=\"";
        echo ($context["text_subaccount"] ?? null);
        echo "\" class=\"form-control\" /></td>
                    </tr>
                    <tr>
                      <td class=\"text-left\">";
        // line 166
        echo ($context["text_card_switch"] ?? null);
        echo "</td>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"payment_globalpay_account[switch][enabled]\" value=\"1\" ";
        // line 167
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "switch", [], "any", false, true, false, 167), "enabled", [], "any", true, true, false, 167) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "switch", [], "any", false, false, false, 167), "enabled", [], "any", false, false, false, 167) == 1))) ? ("checked=\"checked\"") : (""));
        echo "/></td>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"payment_globalpay_account[switch][default]\" value=\"1\" ";
        // line 168
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "switch", [], "any", false, true, false, 168), "default", [], "any", true, true, false, 168) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "switch", [], "any", false, false, false, 168), "default", [], "any", false, false, false, 168) == 1))) ? ("checked=\"checked\"") : (""));
        echo "/></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"payment_globalpay_account[switch][merchant_id]\" value=\"";
        // line 169
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "switch", [], "any", false, true, false, 169), "merchant_id", [], "any", true, true, false, 169)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "switch", [], "any", false, false, false, 169), "merchant_id", [], "any", false, false, false, 169)) : (""));
        echo "\" placeholder=\"";
        echo ($context["text_subaccount"] ?? null);
        echo "\" class=\"form-control\" /></td>
                    </tr>
                    <tr>
                      <td class=\"text-left\">";
        // line 172
        echo ($context["text_card_laser"] ?? null);
        echo "</td>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"payment_globalpay_account[laser][enabled]\" value=\"1\" ";
        // line 173
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "laser", [], "any", false, true, false, 173), "enabled", [], "any", true, true, false, 173) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "laser", [], "any", false, false, false, 173), "enabled", [], "any", false, false, false, 173) == 1))) ? ("checked=\"checked\"") : (""));
        echo "/></td>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"payment_globalpay_account[laser][default]\" value=\"1\" ";
        // line 174
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "laser", [], "any", false, true, false, 174), "default", [], "any", true, true, false, 174) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "laser", [], "any", false, false, false, 174), "default", [], "any", false, false, false, 174) == 1))) ? ("checked=\"checked\"") : (""));
        echo "/></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"payment_globalpay_account[laser][merchant_id]\" value=\"";
        // line 175
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "laser", [], "any", false, true, false, 175), "merchant_id", [], "any", true, true, false, 175)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "laser", [], "any", false, false, false, 175), "merchant_id", [], "any", false, false, false, 175)) : (""));
        echo "\" placeholder=\"";
        echo ($context["text_subaccount"] ?? null);
        echo "\" class=\"form-control\" /></td>
                    </tr>
                    <tr>
                      <td class=\"text-left\">";
        // line 178
        echo ($context["text_card_diners"] ?? null);
        echo "</td>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"payment_globalpay_account[diners][enabled]\" value=\"1\" ";
        // line 179
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "diners", [], "any", false, true, false, 179), "enabled", [], "any", true, true, false, 179) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "diners", [], "any", false, false, false, 179), "enabled", [], "any", false, false, false, 179) == 1))) ? ("checked=\"checked\"") : (""));
        echo "/></td>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"payment_globalpay_account[diners][default]\" value=\"1\" ";
        // line 180
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "diners", [], "any", false, true, false, 180), "default", [], "any", true, true, false, 180) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "diners", [], "any", false, false, false, 180), "default", [], "any", false, false, false, 180) == 1))) ? ("checked=\"checked\"") : (""));
        echo "/></td>
                      <td class=\"text-right\"><input type=\"text\" name=\"payment_globalpay_account[diners][merchant_id]\" value=\"";
        // line 181
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "diners", [], "any", false, true, false, 181), "merchant_id", [], "any", true, true, false, 181)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment_globalpay_account"] ?? null), "diners", [], "any", false, false, false, 181), "merchant_id", [], "any", false, false, false, 181)) : (""));
        echo "\" placeholder=\"";
        echo ($context["text_subaccount"] ?? null);
        echo "\" class=\"form-control\" /></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-order-status\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-order-status-success-settled\">";
        // line 189
        echo ($context["entry_status_success_settled"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"globalpay_order_status_success_settled_id\" id=\"input-order-status-success-settled\" class=\"form-control\">
                    ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 193
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 193) == ($context["globalpay_order_status_success_settled_id"] ?? null))) {
                // line 194
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 194);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 194);
                echo "</option>
                    ";
            } else {
                // line 196
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 196);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 196);
                echo "</option>
                    ";
            }
            // line 198
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-order-status-success-unsettled\">";
        // line 203
        echo ($context["entry_status_success_unsettled"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_globalpay_order_status_success_unsettled_id\" id=\"input-order-status-success-unsettled\" class=\"form-control\">
                    ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 207
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 207) == ($context["payment_globalpay_order_status_success_unsettled_id"] ?? null))) {
                // line 208
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 208);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 208);
                echo "</option>
                    ";
            } else {
                // line 210
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 210);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 210);
                echo "</option>
                    ";
            }
            // line 212
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-order-status-decline\">";
        // line 217
        echo ($context["entry_status_decline"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_globalpay_order_status_decline_id\" id=\"input-order-status-decline\" class=\"form-control\">
                    ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 221
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 221) == ($context["payment_globalpay_order_status_decline_id"] ?? null))) {
                // line 222
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 222);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 222);
                echo "</option>
                    ";
            } else {
                // line 224
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 224);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 224);
                echo "</option>
                    ";
            }
            // line 226
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-order-status-decline-pending\">";
        // line 231
        echo ($context["entry_status_decline_pending"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_globalpay_order_status_decline_pending_id\" id=\"input-order-status-decline-pending\" class=\"form-control\">
                    ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 235
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 235) == ($context["payment_globalpay_order_status_decline_pending_id"] ?? null))) {
                // line 236
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 236);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 236);
                echo "</option>
                    ";
            } else {
                // line 238
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 238);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 238);
                echo "</option>
                    ";
            }
            // line 240
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-order-status-decline-stolen\">";
        // line 245
        echo ($context["entry_status_decline_stolen"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_globalpay_order_status_decline_stolen_id\" id=\"input-order-status-decline-stolen\" class=\"form-control\">
                    ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 249
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 249) == ($context["payment_globalpay_order_status_decline_stolen_id"] ?? null))) {
                // line 250
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 250);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 250);
                echo "</option>
                    ";
            } else {
                // line 252
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 252);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 252);
                echo "</option>
                    ";
            }
            // line 254
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-order-status-decline-bank\">";
        // line 259
        echo ($context["entry_status_decline_bank"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_globalpay_order_status_decline_bank_id\" id=\"input-order-status-decline-bank\" class=\"form-control\">
                    ";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 263
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 263) == ($context["payment_globalpay_order_status_decline_bank_id"] ?? null))) {
                // line 264
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 264);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 264);
                echo "</option>
                    ";
            } else {
                // line 266
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 266);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 266);
                echo "</option>
                    ";
            }
            // line 268
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-payment\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-auto-settle\"><span data-toggle=\"tooltip\" title=\"";
        // line 275
        echo ($context["help_dcc_settle"] ?? null);
        echo "\">";
        echo ($context["entry_auto_settle"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_globalpay_auto_settle\" id=\"input-auto-settle\" class=\"form-control\">
                    <option value=\"0\"";
        // line 278
        echo (((($context["payment_globalpay_auto_settle"] ?? null) == 0)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_settle_delayed"] ?? null);
        echo "</option>
                    <option value=\"1\"";
        // line 279
        echo (((($context["payment_globalpay_auto_settle"] ?? null) == 1)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_settle_auto"] ?? null);
        echo "</option>
                    <option value=\"2\"";
        // line 280
        echo (((($context["payment_globalpay_auto_settle"] ?? null) == 2)) ? (" selected=\"selected\"") : (""));
        echo ">";
        echo ($context["text_settle_multi"] ?? null);
        echo "</option>
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-card-select\"><span data-toggle=\"tooltip\" title=\"";
        // line 285
        echo ($context["help_card_select"] ?? null);
        echo "\">";
        echo ($context["entry_card_select"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_globalpay_card_select\" id=\"input-card-select\" class=\"form-control\">
                    ";
        // line 288
        if (($context["payment_globalpay_card_select"] ?? null)) {
            // line 289
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 290
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 292
            echo "                    <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 293
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        }
        // line 295
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tss-check\">";
        // line 299
        echo ($context["entry_tss_check"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_globalpay_tss_check\" id=\"input-tss-check\" class=\"form-control\">
                    ";
        // line 302
        if (($context["payment_globalpay_tss_check"] ?? null)) {
            // line 303
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 304
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 306
            echo "                    <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 307
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        }
        // line 309
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-advanced\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-live-url\">";
        // line 315
        echo ($context["entry_live_url"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_globalpay_live_url\" value=\"";
        // line 317
        echo ($context["payment_globalpay_live_url"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_live_url"] ?? null);
        echo "\" id=\"input-live-url\" class=\"form-control\" />
                  ";
        // line 318
        if (($context["error_live_url"] ?? null)) {
            // line 319
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_live_url"] ?? null);
            echo "</div>
                  ";
        }
        // line 321
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-demo-url\">";
        // line 324
        echo ($context["entry_demo_url"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_globalpay_demo_url\" value=\"";
        // line 326
        echo ($context["payment_globalpay_demo_url"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_demo_url"] ?? null);
        echo "\" id=\"input-demo-url\" class=\"form-control\" />
                  ";
        // line 327
        if (($context["error_demo_url"] ?? null)) {
            // line 328
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_demo_url"] ?? null);
            echo "</div>
                  ";
        }
        // line 330
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\"><span data-toggle=\"tooltip\" title=\"";
        // line 333
        echo ($context["help_notification"] ?? null);
        echo "\">";
        echo ($context["entry_notification_url"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-link\"></i></span>
                    <input type=\"text\" value=\"";
        // line 336
        echo ($context["notify_url"] ?? null);
        echo "\" class=\"form-control\" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 347
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/globalpay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  951 => 347,  937 => 336,  929 => 333,  924 => 330,  918 => 328,  916 => 327,  910 => 326,  905 => 324,  900 => 321,  894 => 319,  892 => 318,  886 => 317,  881 => 315,  873 => 309,  868 => 307,  863 => 306,  858 => 304,  853 => 303,  851 => 302,  845 => 299,  839 => 295,  834 => 293,  829 => 292,  824 => 290,  819 => 289,  817 => 288,  809 => 285,  799 => 280,  793 => 279,  787 => 278,  779 => 275,  771 => 269,  765 => 268,  757 => 266,  749 => 264,  746 => 263,  742 => 262,  736 => 259,  730 => 255,  724 => 254,  716 => 252,  708 => 250,  705 => 249,  701 => 248,  695 => 245,  689 => 241,  683 => 240,  675 => 238,  667 => 236,  664 => 235,  660 => 234,  654 => 231,  648 => 227,  642 => 226,  634 => 224,  626 => 222,  623 => 221,  619 => 220,  613 => 217,  607 => 213,  601 => 212,  593 => 210,  585 => 208,  582 => 207,  578 => 206,  572 => 203,  566 => 199,  560 => 198,  552 => 196,  544 => 194,  541 => 193,  537 => 192,  531 => 189,  518 => 181,  514 => 180,  510 => 179,  506 => 178,  498 => 175,  494 => 174,  490 => 173,  486 => 172,  478 => 169,  474 => 168,  470 => 167,  466 => 166,  458 => 163,  454 => 162,  450 => 161,  446 => 160,  438 => 157,  434 => 156,  430 => 155,  426 => 154,  418 => 151,  414 => 150,  410 => 149,  406 => 148,  398 => 143,  394 => 142,  390 => 141,  386 => 140,  376 => 133,  366 => 128,  361 => 126,  352 => 122,  345 => 120,  339 => 116,  334 => 114,  329 => 113,  324 => 111,  319 => 110,  317 => 109,  311 => 106,  305 => 102,  300 => 100,  295 => 99,  290 => 97,  285 => 96,  283 => 95,  275 => 92,  269 => 88,  263 => 87,  255 => 85,  247 => 83,  244 => 82,  240 => 81,  236 => 80,  230 => 77,  224 => 73,  219 => 71,  214 => 70,  209 => 68,  204 => 67,  202 => 66,  196 => 63,  187 => 59,  182 => 57,  177 => 54,  171 => 52,  169 => 51,  163 => 50,  158 => 48,  153 => 45,  147 => 43,  145 => 42,  139 => 41,  134 => 39,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  105 => 28,  99 => 25,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/globalpay.twig", "");
    }
}
