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

/* extension/shipping/qweqr.twig */
class __TwigTemplate_b1288967a5005f3e3cbd69a83cb1011222151860d71f0b02ce3d21ad2dc42ea2 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-shipping\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shipping\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-trade_pt\">";
        // line 29
        echo ($context["entry_api"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_qweqr_api\" value=\"";
        // line 31
        echo ($context["shipping_qweqr_api"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_api"] ?? null);
        echo "\" id=\"input-api\"class=\"form-control\" maxlength=\"40\" />
              ";
        // line 32
        if (($context["error_api"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_api"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-trade_pt\">";
        // line 39
        echo ($context["entry_trade_pt"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_qweqr_trade_pt\" value=\"";
        // line 41
        echo ($context["shipping_qweqr_trade_pt"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_trade_pt"] ?? null);
        echo "\" id=\"input-trade_pt\" class=\"form-control\" maxlength=\"4\" />
              ";
        // line 42
        if (($context["error_trade_pt"] ?? null)) {
            // line 43
            echo "              <div class=\"text-danger\">";
            echo ($context["error_trade_pt"] ?? null);
            echo "</div>
              ";
        }
        // line 45
        echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-trade_cat\">";
        // line 49
        echo ($context["entry_trade_cat"] ?? null);
        echo "</label>

              <div class=\"col-sm-10\">
                <!-- ";
        // line 52
        echo ($context["shipping_qweqr_trade_cat"] ?? null);
        echo " -->
                <select name=\"shipping_qweqr_trade_cat\" id=\"input-trade_cat\" class=\"form-control\">
                  ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shipping_qweqr_trade_cat_options"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["cat_option"]) {
            // line 55
            echo "                    <!-- ";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55);
            echo " -->
                    ";
            // line 56
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 56) - 1) == ($context["shipping_qweqr_trade_cat"] ?? null))) {
                // line 57
                echo "                      <option value=\"";
                echo (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 57) - 1);
                echo "\" selected=\"selected\">";
                echo $context["cat_option"];
                echo "</option>
                    ";
            } else {
                // line 59
                echo "                      <option value=\"";
                echo (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59) - 1);
                echo "\">";
                echo $context["cat_option"];
                echo "</option>
                    ";
            }
            // line 61
            echo "                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </select>
              ";
        // line 63
        if (($context["error_trade_cat"] ?? null)) {
            // line 64
            echo "                <div class=\"text-danger\">";
            echo ($context["error_trade_cat"] ?? null);
            echo "</div>
              ";
        }
        // line 66
        echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-address-city\"><span data-toggle=\"tooltip\" title=\"";
        // line 70
        echo ($context["help_address_city"] ?? null);
        echo "\">Address City</span></label>
            <div class=\"col-sm-10\">
              <input name=\"shipping_qweqr_address_city\" placeholder=\"Address city\" rows=\"5\" id=\"input-address-city\" class=\"form-control\"  value = \"Riga\" disabled></input>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 77
        echo ($context["help_address_tooltip"] ?? null);
        echo "\">";
        echo ($context["entry_address"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_qweqr_address\" value=\"";
        // line 79
        echo ($context["shipping_qweqr_address"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["help_address"] ?? null);
        echo "\" id=\"autoComplete\" class=\"form-control\" autocomplete=\"off\">
              <button id = \"validationBtn\" class=\"btn btn-primary\">";
        // line 80
        echo ($context["text_button_validate"] ?? null);
        echo "</button>
              <script>
                document.addEventListener('DOMContentLoaded',()=>{
                  document.querySelector('#validationBtn').addEventListener('click',(e)=>{
                    e.preventDefault();
                    const address = document.querySelector(\"input[name=shipping_qweqr_address]\").value;
                    let data =  new FormData();
                    data.append(\"address\",address)
                    fetch('index.php?route=extension/shipping/qweqr/geocode&user_token=";
        // line 88
        echo ($context["user_token"] ?? null);
        echo "',
                            {
                              method: \"POST\",
                              body: data
                            })
                            .then(res => res.json())
                            .then((data)=>{
                              if (data.data && data.data.address && data.data.coordinates){
                                document.querySelector(\"input[name=shipping_qweqr_address_object]\").value = JSON.stringify(data);
                                document.querySelector(\".shipping_qweqr_address_object\").textContent = 'V address validated';
                                document.querySelector(\".shipping_qweqr_address_object\").style.color = 'green'

                              }else{
                                document.querySelector(\"input[name=shipping_qweqr_address_object]\").value = '';
                                document.querySelector(\".shipping_qweqr_address_object\").textContent = 'X address not validated';
                                document.querySelector(\".shipping_qweqr_address_object\").style.color = 'red'
                              }

                            });
                    return true;
                  })
                })
              </script>
              <input type=\"hidden\" name = \"shipping_qweqr_address_object\" value=\"";
        // line 111
        echo ($context["shipping_qweqr_address_object"] ?? null);
        echo "\">
              ";
        // line 112
        if (($context["shipping_qweqr_address_object"] ?? null)) {
            // line 113
            echo "                <span class = \"shipping_qweqr_address_object\" style=\"color:green\">V address validated</span>
              ";
        } else {
            // line 115
            echo "                <span  class = \"shipping_qweqr_address_object\" style=\"color:red\">X address not validated</span>
              ";
        }
        // line 117
        echo "
              <script>

              </script>
            </div>
           <script>

                var token = '";
        // line 124
        echo ($context["user_token"] ?? null);
        echo "';
                const autoCompleteJS = new autoComplete({
                placeHolder: \"products\",
                data: {
                  src: [],
                  cache: false,
                },

                resultItem: {
                  highlight: true
                },

                trigger: (query) => {
                  if (query.length >=  autoCompleteJS.threshold-1){
                    let input = document.querySelector(\"#autoComplete\").value
                    let data = new FormData()
                    data.append(\"input\", input);
                    fetch('index.php?route=extension/shipping/qweqr/autocomplete&user_token=";
        // line 141
        echo ($context["user_token"] ?? null);
        echo "',
                            {
                              method: \"POST\",
                              body: data,
                            })
                            .then(res => res.json())
                            .then((data)=>{

                              autoCompleteJS.data.src = data.data;
                              //autoCompleteJS.data.keys = [\"title\"];
                            });
                    return true;
                  }

                  return false;
                   //return query.replace(/ /g, \"\").length; // Returns \"Boolean\"
                },
                query: function(input){//
                    return input;
                },
                events: {
                  input: {
                    selection: function(event){
                      const selection = event.detail.selection.value;
                      //console.log(selection)
                      this.value = selection;
                    }
                  }
                },
                resultsList: {
                  element: (list, data) => {
                    data.results.forEach((el,index)=>{
                      if (el.value.includes('Riga') == false){
                        var element = document.getElementById(\"autoComplete_result_\"+index);
                        list.removeChild(element);
                      };

                    });

                    if (!data.results.length) {
                      // Create \"No Results\" message list element
                      const message = document.createElement(\"div\");
                      message.setAttribute(\"class\", \"no_result\");
                      // Add message text content
                      message.innerHTML = `<span>Found No Results for \"\${data.query}\"</span>`;
                      // Add message list element to the list
                      list.appendChild(message);
                    }
                  },
                  noResults: true,
                  maxResults: 20,
                },

                threshold: 3,
                debounce: 200,
              });
            </script>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-weight-class\"><span data-toggle=\"tooltip\" title=\"";
        // line 201
        echo ($context["help_weight_class"] ?? null);
        echo "\">";
        echo ($context["entry_weight_class"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_qweqr_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 205
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 205) == ($context["shipping_qweqr_weight_class_id"] ?? null))) {
                // line 206
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 206);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 206);
                echo "</option>
                ";
            } else {
                // line 208
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 208);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 208);
                echo "</option>
                ";
            }
            // line 210
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 215
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_qweqr_tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                <option value=\"0\">";
        // line 218
        echo ($context["text_none"] ?? null);
        echo "</option>
                ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 220
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 220) == ($context["shipping_qweqr_tax_class_id"] ?? null))) {
                // line 221
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 221);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 221);
                echo "</option>
                ";
            } else {
                // line 223
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 223);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 223);
                echo "</option>
                ";
            }
            // line 225
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 230
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_qweqr_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 233
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 235
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 235) == ($context["shipping_qweqr_geo_zone_id"] ?? null))) {
                // line 236
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 236);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 236);
                echo "</option>
                ";
            } else {
                // line 238
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 238);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 238);
                echo "</option>
                ";
            }
            // line 240
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 245
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_qweqr_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 248
        if (($context["shipping_qweqr_status"] ?? null)) {
            // line 249
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 250
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 252
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 253
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 255
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 259
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_qweqr_sort_order\" value=\"";
        // line 261
        echo ($context["shipping_qweqr_sort_order"] ?? null);
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
        // line 269
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/shipping/qweqr.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 269,  577 => 261,  572 => 259,  566 => 255,  561 => 253,  556 => 252,  551 => 250,  546 => 249,  544 => 248,  538 => 245,  532 => 241,  526 => 240,  518 => 238,  510 => 236,  507 => 235,  503 => 234,  499 => 233,  493 => 230,  487 => 226,  481 => 225,  473 => 223,  465 => 221,  462 => 220,  458 => 219,  454 => 218,  448 => 215,  442 => 211,  436 => 210,  428 => 208,  420 => 206,  417 => 205,  413 => 204,  405 => 201,  342 => 141,  322 => 124,  313 => 117,  309 => 115,  305 => 113,  303 => 112,  299 => 111,  273 => 88,  262 => 80,  256 => 79,  249 => 77,  239 => 70,  233 => 66,  227 => 64,  225 => 63,  222 => 62,  208 => 61,  200 => 59,  192 => 57,  190 => 56,  185 => 55,  168 => 54,  163 => 52,  157 => 49,  151 => 45,  145 => 43,  143 => 42,  137 => 41,  132 => 39,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/shipping/qweqr.twig", "");
    }
}
