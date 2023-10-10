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

/* extension/payment/stripe.twig */
class __TwigTemplate_0b396c36dfe71b1f12916dad90973f9b0a88c0c1642920d3ac143e08b6fe64b7 extends \Twig\Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-stripe\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
\t\t\t\t\t class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 24
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 25
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 29
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 31
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 34
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-stripe\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_stripe_environment\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 37
        echo ($context["entry_environment_help"] ?? null);
        echo "\">";
        echo ($context["entry_environment"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"payment_stripe_environment\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 41
        if ((($context["payment_stripe_environment"] ?? null) == "test")) {
            // line 42
            echo "\t\t\t\t\t\t\t\t<option value=\"test\" selected=\"selected\">";
            echo ($context["text_test"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"live\">";
            // line 43
            echo ($context["text_live"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 45
            echo "\t\t\t\t\t\t\t\t<option value=\"test\">";
            echo ($context["text_test"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"live\" selected=\"selected\">";
            // line 46
            echo ($context["text_live"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<small class=\"text-info\">";
        // line 49
        echo ($context["entry_environment_help"] ?? null);
        echo "</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_stripe_test_public_key\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 54
        echo ($context["entry_test_public_key_help"] ?? null);
        echo "\">";
        echo ($context["entry_test_public_key"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_stripe_test_public_key\" id=\"payment_stripe_test_public_key\" value=\"";
        // line 57
        echo ($context["payment_stripe_test_public_key"] ?? null);
        echo "\"
\t\t\t\t\t\t\t class=\"form-control\" />
\t\t\t\t\t\t\t<small class=\"text-info\">";
        // line 59
        echo ($context["entry_test_public_key_help"] ?? null);
        echo "</small>
\t\t\t\t\t\t\t";
        // line 60
        if (($context["error_test_public_key"] ?? null)) {
            // line 61
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_test_public_key"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_stripe_test_secret_key\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 67
        echo ($context["entry_test_secret_key_help"] ?? null);
        echo "\">";
        echo ($context["entry_test_secret_key"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_stripe_test_secret_key\" id=\"payment_stripe_test_secret_key\" value=\"";
        // line 70
        echo ($context["payment_stripe_test_secret_key"] ?? null);
        echo "\"
\t\t\t\t\t\t\t class=\"form-control\" />
\t\t\t\t\t\t\t<small class=\"text-info\">";
        // line 72
        echo ($context["entry_test_secret_key_help"] ?? null);
        echo "</small>
\t\t\t\t\t\t\t";
        // line 73
        if (($context["error_test_secret_key"] ?? null)) {
            // line 74
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_test_secret_key"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_stripe_live_public_key\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 80
        echo ($context["entry_live_public_key_help"] ?? null);
        echo "\">";
        echo ($context["entry_live_public_key"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_stripe_live_public_key\" id=\"payment_stripe_live_public_key\" value=\"";
        // line 83
        echo ($context["payment_stripe_live_public_key"] ?? null);
        echo "\"
\t\t\t\t\t\t\t class=\"form-control\" />
\t\t\t\t\t\t\t <small class=\"text-info\">";
        // line 85
        echo ($context["entry_live_public_key_help"] ?? null);
        echo "</small>
\t\t\t\t\t\t\t";
        // line 86
        if (($context["error_live_public_key"] ?? null)) {
            // line 87
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_live_public_key"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_stripe_live_secret_key\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 93
        echo ($context["entry_live_secret_key_help"] ?? null);
        echo "\">";
        echo ($context["entry_live_secret_key"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_stripe_live_secret_key\" id=\"payment_stripe_live_secret_key\" value=\"";
        // line 96
        echo ($context["payment_stripe_live_secret_key"] ?? null);
        echo "\"
\t\t\t\t\t\t\t class=\"form-control\" />
\t\t\t\t\t\t\t <small class=\"text-info\">";
        // line 98
        echo ($context["entry_live_secret_key_help"] ?? null);
        echo "</small>
\t\t\t\t\t\t\t";
        // line 99
        if (($context["error_live_secret_key"] ?? null)) {
            // line 100
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_live_secret_key"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_stripe_order_success_status_id\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 106
        echo ($context["entry_order_success_status_help"] ?? null);
        echo "\">";
        echo ($context["entry_order_success_status"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"payment_stripe_order_success_status_id\" id=\"payment_stripe_order_success_status_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 111
            echo "\t\t\t\t\t\t\t\t";
            if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["order_status"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["order_status_id"] ?? null) : null) == ($context["payment_stripe_order_success_status_id"] ?? null))) {
                // line 112
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["order_status"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["order_status_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["order_status"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 114
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["order_status"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["order_status_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["order_status"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 116
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<small class=\"text-info\">";
        // line 118
        echo ($context["entry_order_success_status_help"] ?? null);
        echo "</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_stripe_order_failed_status_id\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 123
        echo ($context["entry_order_failed_status_help"] ?? null);
        echo "\">";
        echo ($context["entry_order_failed_status"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"payment_stripe_order_failed_status_id\" id=\"payment_stripe_order_failed_status_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 128
            echo "\t\t\t\t\t\t\t\t";
            if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["order_status"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["order_status_id"] ?? null) : null) == ($context["payment_stripe_order_failed_status_id"] ?? null))) {
                // line 129
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["order_status"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["order_status_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["order_status"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 131
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["order_status"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["order_status_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["order_status"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 133
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<small class=\"text-info\">";
        // line 135
        echo ($context["entry_order_failed_status_help"] ?? null);
        echo "</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_stripe_status\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 140
        echo ($context["entry_status_help"] ?? null);
        echo "\">";
        echo ($context["entry_status"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"payment_stripe_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 144
        if (($context["payment_stripe_status"] ?? null)) {
            // line 145
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 146
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 148
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 149
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 151
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_stripe_debug\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 156
        echo ($context["entry_debug_help"] ?? null);
        echo "\">";
        echo ($context["entry_debug"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"payment_stripe_debug\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 160
        if (($context["payment_stripe_debug"] ?? null)) {
            // line 161
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 162
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 164
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 165
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 167
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"payment_stripe_sort_order\">";
        // line 171
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_stripe_sort_order\" value=\"";
        // line 173
        echo ($context["payment_stripe_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\"
\t\t\t\t\t\t\t id=\"payment_stripe_sort_order\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 182
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/stripe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 182,  465 => 173,  460 => 171,  454 => 167,  449 => 165,  444 => 164,  439 => 162,  434 => 161,  432 => 160,  423 => 156,  416 => 151,  411 => 149,  406 => 148,  401 => 146,  396 => 145,  394 => 144,  385 => 140,  377 => 135,  374 => 134,  368 => 133,  360 => 131,  352 => 129,  349 => 128,  345 => 127,  336 => 123,  328 => 118,  325 => 117,  319 => 116,  311 => 114,  303 => 112,  300 => 111,  296 => 110,  287 => 106,  281 => 102,  275 => 100,  273 => 99,  269 => 98,  264 => 96,  256 => 93,  250 => 89,  244 => 87,  242 => 86,  238 => 85,  233 => 83,  225 => 80,  219 => 76,  213 => 74,  211 => 73,  207 => 72,  202 => 70,  194 => 67,  188 => 63,  182 => 61,  180 => 60,  176 => 59,  171 => 57,  163 => 54,  155 => 49,  152 => 48,  147 => 46,  142 => 45,  137 => 43,  132 => 42,  130 => 41,  121 => 37,  115 => 34,  109 => 31,  105 => 29,  97 => 25,  94 => 24,  86 => 20,  84 => 19,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/stripe.twig", "");
    }
}
