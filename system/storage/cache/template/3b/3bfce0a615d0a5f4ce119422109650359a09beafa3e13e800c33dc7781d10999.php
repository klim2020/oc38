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

/* extension/payment/twocheckout.twig */
class __TwigTemplate_4573f98d81d496f5ad79fb52567938bf0ef2527790064979bf525caf17f9ad06 extends \Twig\Template
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-account\">";
        // line 29
        echo ($context["entry_account"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_twocheckout_account\" value=\"";
        // line 31
        echo ($context["payment_twocheckout_account"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_account"] ?? null);
        echo "\" id=\"input-account\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_account"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_account"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-secret\"><span data-toggle=\"tooltip\" title=\"";
        // line 38
        echo ($context["help_secret"] ?? null);
        echo "\">";
        echo ($context["entry_secret"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_twocheckout_secret\" value=\"";
        // line 40
        echo ($context["payment_twocheckout_secret"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_secret"] ?? null);
        echo "\" id=\"input-secret\" class=\"form-control\" />
              ";
        // line 41
        if (($context["error_secret"] ?? null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo ($context["error_secret"] ?? null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 47
        echo ($context["entry_test"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 50
        if (($context["payment_twocheckout_test"] ?? null)) {
            // line 51
            echo "                <input type=\"radio\" name=\"payment_twocheckout_test\" value=\"1\" checked=\"checked\" />
                ";
            // line 52
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 54
            echo "                <input type=\"radio\" name=\"payment_twocheckout_test\" value=\"1\" />
                ";
            // line 55
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 57
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 59
        if ( !($context["payment_twocheckout_test"] ?? null)) {
            // line 60
            echo "                <input type=\"radio\" name=\"payment_twocheckout_test\" value=\"0\" checked=\"checked\" />
                ";
            // line 61
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 63
            echo "                <input type=\"radio\" name=\"payment_twocheckout_test\" value=\"0\" />
                ";
            // line 64
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 66
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 70
        echo ($context["entry_display"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 73
        if (($context["payment_twocheckout_display"] ?? null)) {
            // line 74
            echo "                <input type=\"radio\" name=\"payment_twocheckout_display\" value=\"1\" checked=\"checked\" />
                ";
            // line 75
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 77
            echo "                <input type=\"radio\" name=\"payment_twocheckout_display\" value=\"1\" />
                ";
            // line 78
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 80
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 82
        if ( !($context["payment_twocheckout_display"] ?? null)) {
            // line 83
            echo "                <input type=\"radio\" name=\"payment_twocheckout_display\" value=\"0\" checked=\"checked\" />
                ";
            // line 84
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 86
            echo "                <input type=\"radio\" name=\"payment_twocheckout_display\" value=\"0\" />
                ";
            // line 87
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 89
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 93
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_twocheckout_total\" value=\"";
        // line 95
        echo ($context["payment_twocheckout_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 99
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_twocheckout_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 103
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 103) == ($context["payment_twocheckout_order_status_id"] ?? null))) {
                // line 104
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 104);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 104);
                echo "</option>
                ";
            } else {
                // line 106
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 106);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 106);
                echo "</option>
                ";
            }
            // line 108
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 113
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_twocheckout_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 116
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 118
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 118) == ($context["payment_twocheckout_geo_zone_id"] ?? null))) {
                // line 119
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 119);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 119);
                echo "</option>
                ";
            } else {
                // line 121
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 121);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 121);
                echo "</option>
                ";
            }
            // line 123
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 128
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_twocheckout_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 131
        if (($context["payment_twocheckout_status"] ?? null)) {
            // line 132
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 133
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 135
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 136
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 138
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 142
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_twocheckout_sort_order\" value=\"";
        // line 144
        echo ($context["payment_twocheckout_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 152
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/twocheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 152,  402 => 144,  397 => 142,  391 => 138,  386 => 136,  381 => 135,  376 => 133,  371 => 132,  369 => 131,  363 => 128,  357 => 124,  351 => 123,  343 => 121,  335 => 119,  332 => 118,  328 => 117,  324 => 116,  318 => 113,  312 => 109,  306 => 108,  298 => 106,  290 => 104,  287 => 103,  283 => 102,  277 => 99,  268 => 95,  261 => 93,  255 => 89,  250 => 87,  247 => 86,  242 => 84,  239 => 83,  237 => 82,  233 => 80,  228 => 78,  225 => 77,  220 => 75,  217 => 74,  215 => 73,  209 => 70,  203 => 66,  198 => 64,  195 => 63,  190 => 61,  187 => 60,  185 => 59,  181 => 57,  176 => 55,  173 => 54,  168 => 52,  165 => 51,  163 => 50,  157 => 47,  152 => 44,  146 => 42,  144 => 41,  138 => 40,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/twocheckout.twig", "");
    }
}
