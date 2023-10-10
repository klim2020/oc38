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

/* extension/payment/worldpay.twig */
class __TwigTemplate_88cc25352404c205f0bf124c1ebcc77291ec57555dc556cac4c0ad1231d19163 extends \Twig\Template
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
      <h1><i class=\"fa fa-credit-card\"></i> ";
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
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 19
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
      <form action=\"";
        // line 22
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 24
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
          <li><a href=\"#tab-order-status\" data-toggle=\"tab\">";
        // line 25
        echo ($context["tab_order_status"] ?? null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-service-key\">";
        // line 30
        echo ($context["entry_service_key"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_worldpay_service_key\" value=\"";
        // line 32
        echo ($context["payment_worldpay_service_key"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_service_key"] ?? null);
        echo "\" id=\"input-service-key\" class=\"form-control\" />
                ";
        // line 33
        if (($context["error_service_key"] ?? null)) {
            // line 34
            echo "                <div class=\"text-danger\">";
            echo ($context["error_service_key"] ?? null);
            echo "</div>
                ";
        }
        // line 35
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-client-key\">";
        // line 38
        echo ($context["entry_client_key"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_worldpay_client_key\" value=\"";
        // line 40
        echo ($context["payment_worldpay_client_key"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_client_key"] ?? null);
        echo "\" id=\"input-client-key\" class=\"form-control\" />
                ";
        // line 41
        if (($context["error_client_key"] ?? null)) {
            // line 42
            echo "                <div class=\"text-danger\">";
            echo ($context["error_client_key"] ?? null);
            echo "</div>
                ";
        }
        // line 43
        echo " </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-total\">";
        // line 46
        echo ($context["entry_total"] ?? null);
        echo " </label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_worldpay_total\" value=\"";
        // line 48
        echo ($context["payment_worldpay_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                <span class=\"help-block\">";
        // line 49
        echo ($context["help_total"] ?? null);
        echo "</span> </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-card\">";
        // line 52
        echo ($context["entry_card"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_card\" id=\"input-card\" class=\"form-control\">
                  ";
        // line 55
        if (($context["payment_worldpay_card"] ?? null)) {
            // line 56
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 57
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 59
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 60
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 62
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-secret-token\"><span data-toggle=\"tooltip\" title=\"";
        // line 66
        echo ($context["help_secret_token"] ?? null);
        echo "\">";
        echo ($context["entry_secret_token"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_worldpay_secret_token\" value=\"";
        // line 68
        echo ($context["payment_worldpay_secret_token"] ?? null);
        echo "\" id=\"input-secret-token\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-webhook-url\"><span data-toggle=\"tooltip\" title=\"";
        // line 72
        echo ($context["help_webhook_url"] ?? null);
        echo "\">";
        echo ($context["entry_webhook_url"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-link\"></i></span>
                  <input type=\"text\" readonly value=\"";
        // line 75
        echo ($context["payment_worldpay_webhook_url"] ?? null);
        echo "\" id=\"input-webhook-url\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-cron-job-url\"><span data-toggle=\"tooltip\" title=\"";
        // line 80
        echo ($context["help_cron_job_url"] ?? null);
        echo "\">";
        echo ($context["entry_cron_job_url"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-link\"></i></span>
                  <input type=\"text\" readonly value=\"";
        // line 83
        echo ($context["payment_worldpay_cron_job_url"] ?? null);
        echo "\" id=\"input-cron-job-url\" class=\"form-control\" />
                </div>
              </div>
            </div>
            ";
        // line 87
        if (($context["payment_worldpay_last_cron_job_run"] ?? null)) {
            // line 88
            echo "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-cron-job-last-run\">";
            // line 89
            echo ($context["entry_last_cron_job_run"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" readonly value=\"";
            // line 91
            echo ($context["payment_worldpay_last_cron_job_run"] ?? null);
            echo "\" id=\"input-cron-job-last-run\" class=\"form-control\" />
              </div>
            </div>
            ";
        }
        // line 95
        echo "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 96
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 100
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 100) == ($context["payment_worldpay_order_status_id"] ?? null))) {
                // line 101
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 101);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 101);
                echo "</option>
                  ";
            } else {
                // line 103
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 103);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 103);
                echo "</option>
                  ";
            }
            // line 105
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 111
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                  <option value=\"0\">";
        // line 114
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                  ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 116
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 116) == ($context["payment_worldpay_geo_zone_id"] ?? null))) {
                // line 117
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 117);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 117);
                echo "</option>
                    ";
            } else {
                // line 119
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 119);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 119);
                echo "</option>
                    ";
            }
            // line 121
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-debug\">";
        // line 126
        echo ($context["entry_debug"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_debug\" id=\"input-debug\" class=\"form-control\">
                  ";
        // line 129
        if (($context["payment_worldpay_debug"] ?? null)) {
            // line 130
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 131
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 133
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 134
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 136
        echo "                </select>
                <span class=\"help-block\">";
        // line 137
        echo ($context["help_debug"] ?? null);
        echo "</span> </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 140
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_status\" id=\"input-status\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 144
        if (($context["payment_worldpay_status"] ?? null)) {
            // line 145
            echo "\t\t\t\t\t  
                  <option value=\"1\" selected=\"selected\">";
            // line 146
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 147
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  
\t\t\t\t  ";
        } else {
            // line 150
            echo "\t\t\t\t\t  
                  <option value=\"1\">";
            // line 151
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 152
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  
\t\t\t\t  ";
        }
        // line 155
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 160
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_worldpay_sort_order\" value=\"";
        // line 162
        echo ($context["payment_worldpay_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
              </div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-order-status\">
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 168
        echo ($context["entry_success_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_success_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 173
            echo "\t\t\t\t\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 173) == ($context["payment_worldpay_success_status_id"] ?? null))) {
                // line 174
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 175
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 175);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 175);
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 178
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 179);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 179);
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 182
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 188
        echo ($context["entry_failed_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_failed_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 193
            echo "\t\t\t\t\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 193) == ($context["payment_worldpay_failed_status_id"] ?? null))) {
                // line 194
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 195);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 195);
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 198
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 199
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 199);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 199);
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 202
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 208
        echo ($context["entry_settled_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_settled_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 213
            echo "\t\t\t\t\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 213) == ($context["payment_worldpay_settled_status_id"] ?? null))) {
                // line 214
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 215
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 215);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 215);
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 218
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 219
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 219);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 219);
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 222
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 228
        echo ($context["entry_refunded_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_refunded_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 233
            echo "\t\t\t\t\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 233) == ($context["payment_worldpay_refunded_status_id"] ?? null))) {
                // line 234
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 235
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 235);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 235);
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 238
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 239
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 239);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 239);
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 242
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 248
        echo ($context["entry_partially_refunded_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_partially_refunded_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 253
            echo "\t\t\t\t\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 253) == ($context["payment_worldpay_partially_refunded_status_id"] ?? null))) {
                // line 254
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 255
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 255);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 255);
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 258
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 259
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 259);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 259);
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 262
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 268
        echo ($context["entry_charged_back_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_charged_back_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 273
            echo "\t\t\t\t\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 273) == ($context["payment_worldpay_charged_back_status_id"] ?? null))) {
                // line 274
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 275
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 275);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 275);
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 278
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 279
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 279);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 279);
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 282
            echo "\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 288
        echo ($context["entry_information_requested_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_information_requested_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 293
            echo "\t\t\t\t\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 293) == ($context["payment_worldpay_information_requested_status_id"] ?? null))) {
                // line 294
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 295
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 295);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 295);
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 298
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 299
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 299);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 299);
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 302
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 308
        echo ($context["entry_information_supplied_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_information_supplied_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 313
            echo "\t\t\t\t\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 313) == ($context["payment_worldpay_information_supplied_status_id"] ?? null))) {
                // line 314
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 315
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 315);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 315);
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 318
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 319
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 319);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 319);
                echo "</option>
                  
\t\t\t\t\t ";
            }
            // line 322
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        echo "\t\t\t\t
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 328
        echo ($context["entry_chargeback_reversed_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_worldpay_chargeback_reversed_status_id\" class=\"form-control\">
                  
\t\t\t\t  ";
        // line 332
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 333
            echo "\t\t\t\t\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 333) == ($context["payment_worldpay_chargeback_reversed_status_id"] ?? null))) {
                // line 334
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 335
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 335);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 335);
                echo "</option>
                  
\t\t\t\t\t  ";
            } else {
                // line 338
                echo "\t\t\t\t\t\t  
                  <option value=\"";
                // line 339
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 339);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 339);
                echo "</option>
                  
\t\t\t\t\t  ";
            }
            // line 342
            echo "\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 343
        echo "\t\t\t\t
                </select>
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
        // line 354
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/worldpay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  900 => 354,  887 => 343,  881 => 342,  873 => 339,  870 => 338,  862 => 335,  859 => 334,  856 => 333,  852 => 332,  845 => 328,  838 => 323,  832 => 322,  824 => 319,  821 => 318,  813 => 315,  810 => 314,  807 => 313,  803 => 312,  796 => 308,  789 => 303,  783 => 302,  775 => 299,  772 => 298,  764 => 295,  761 => 294,  758 => 293,  754 => 292,  747 => 288,  740 => 283,  734 => 282,  726 => 279,  723 => 278,  715 => 275,  712 => 274,  709 => 273,  705 => 272,  698 => 268,  691 => 263,  685 => 262,  677 => 259,  674 => 258,  666 => 255,  663 => 254,  660 => 253,  656 => 252,  649 => 248,  642 => 243,  636 => 242,  628 => 239,  625 => 238,  617 => 235,  614 => 234,  611 => 233,  607 => 232,  600 => 228,  593 => 223,  587 => 222,  579 => 219,  576 => 218,  568 => 215,  565 => 214,  562 => 213,  558 => 212,  551 => 208,  544 => 203,  538 => 202,  530 => 199,  527 => 198,  519 => 195,  516 => 194,  513 => 193,  509 => 192,  502 => 188,  495 => 183,  489 => 182,  481 => 179,  478 => 178,  470 => 175,  467 => 174,  464 => 173,  460 => 172,  453 => 168,  442 => 162,  437 => 160,  430 => 155,  424 => 152,  420 => 151,  417 => 150,  411 => 147,  407 => 146,  404 => 145,  402 => 144,  395 => 140,  389 => 137,  386 => 136,  381 => 134,  376 => 133,  371 => 131,  366 => 130,  364 => 129,  358 => 126,  352 => 122,  346 => 121,  338 => 119,  330 => 117,  327 => 116,  323 => 115,  319 => 114,  313 => 111,  306 => 106,  300 => 105,  292 => 103,  284 => 101,  281 => 100,  277 => 99,  271 => 96,  268 => 95,  261 => 91,  256 => 89,  253 => 88,  251 => 87,  244 => 83,  236 => 80,  228 => 75,  220 => 72,  213 => 68,  206 => 66,  200 => 62,  195 => 60,  190 => 59,  185 => 57,  180 => 56,  178 => 55,  172 => 52,  166 => 49,  160 => 48,  155 => 46,  150 => 43,  144 => 42,  142 => 41,  136 => 40,  131 => 38,  126 => 35,  120 => 34,  118 => 33,  112 => 32,  107 => 30,  99 => 25,  95 => 24,  90 => 22,  84 => 19,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/worldpay.twig", "");
    }
}
