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

/* extension/modification/files.twig */
class __TwigTemplate_7b139dd02bf7339806e6a8550e422bd4ee889345c1aa3de4db6049a86ab8dbb8 extends \Twig\Template
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
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-exclamation-triangle\"></i> ";
        // line 16
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <th bgcolor=\"#f5f5f5\" class=\"text-center\">";
        // line 23
        echo ($context["text_file"] ?? null);
        echo "</th>
                <th bgcolor=\"#f5f5f5\" class=\"text-center\">";
        // line 24
        echo ($context["text_modifications"] ?? null);
        echo "</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 28
        if (($context["modified_files"] ?? null)) {
            // line 29
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modified_files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modified_file"]) {
                // line 30
                echo "              <tr>
                <td style=\"vertical-align:top\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["modified_file"], "file", [], "any", false, false, false, 31);
                echo "</td>
                <td>
                  ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["modified_file"], "modifications", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                  ";
                    $context["i"] = 0;
                    // line 35
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["modified_file"], "modifications", [], "any", false, false, false, 35));
                    foreach ($context['_seq'] as $context["_key"] => $context["modification"]) {
                        // line 36
                        echo "                  ";
                        if ((($context["i"] ?? null) > 0)) {
                            echo "<br /><br />";
                        }
                        // line 37
                        echo "                  <strong>";
                        echo ($context["text_modification"] ?? null);
                        echo "</strong> ";
                        echo twig_get_attribute($this->env, $this->source, $context["modification"], "name", [], "any", false, false, false, 37);
                        echo "<br />
                  <strong>";
                        // line 38
                        echo ($context["text_version"] ?? null);
                        echo "</strong> ";
                        echo twig_get_attribute($this->env, $this->source, $context["modification"], "version", [], "any", false, false, false, 38);
                        echo "<br />
                  <strong>";
                        // line 39
                        echo ($context["text_author"] ?? null);
                        echo "</strong> ";
                        echo twig_get_attribute($this->env, $this->source, $context["modification"], "author", [], "any", false, false, false, 39);
                        echo "
                  ";
                        // line 40
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 41
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modification'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "                  ";
                }
                // line 43
                echo "                </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modified_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "              ";
        } else {
            // line 47
            echo "              <tr>
                <td class=\"text-center\" colspan=\"2\">";
            // line 48
            echo ($context["text_no_results"] ?? null);
            echo "</td>
              </tr>
              ";
        }
        // line 51
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 58
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/modification/files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 58,  174 => 51,  168 => 48,  165 => 47,  162 => 46,  154 => 43,  151 => 42,  145 => 41,  143 => 40,  137 => 39,  131 => 38,  124 => 37,  119 => 36,  114 => 35,  111 => 34,  109 => 33,  104 => 31,  101 => 30,  96 => 29,  94 => 28,  87 => 24,  83 => 23,  73 => 16,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/modification/files.twig", "");
    }
}
