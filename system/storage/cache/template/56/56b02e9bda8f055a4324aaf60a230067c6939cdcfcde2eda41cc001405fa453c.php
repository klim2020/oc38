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

/* default/template/extension/module/manufacturers_slider.twig */
class __TwigTemplate_1c28004a99c4c8ca38df6e249dcaf9ca0c70568fdb0ba2d2d9dbe2b5dd7d1aa1 extends \Twig\Template
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
        echo "<div class=\"slider-manufacturer\">
    <div class=\"row\">
        <div class=\"col-12 rm-module-header\">
            <h3>";
        // line 4
        echo ($context["header"] ?? null);
        echo "</h3>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"slideshow swiper-viewport\">
                <div id=\"slideshow";
        // line 10
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
                    <div class=\"swiper-wrapper\">
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 13
            echo "                            <div style=\"width:";
            echo ($context["width"] ?? null);
            echo ";height:";
            echo ($context["height"] ?? null);
            echo "\" class=\"swiper-slide text-center\">
                                ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 14)) {
                // line 15
                echo "                                    <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 15);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 15);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 15);
                echo "\" class=\"img-responsive\" /></a>
                                ";
            } else {
                // line 17
                echo "                                    <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 17);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 17);
                echo "\" class=\"img-responsive\" />
                                ";
            }
            // line 19
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo " </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\"><!--

    \$(document).ready(function(){
        new Swiper('#slideshow";
        // line 30
        echo ($context["module"] ?? null);
        echo "',{
            mode: 'horizontal',
            //autoHeight: true,
            slidesPerView: 'auto',
            paginationClickable: true,
            nextButton: '.slideshow .swiper-button-tnext',
            prevButton: '.slideshow .swiper-button-tprev',
            spaceBetween: ";
        // line 37
        echo ($context["spaceBetween"] ?? null);
        echo ",
            autoplay:{
                delay: ";
        // line 39
        echo ($context["autoplay"] ?? null);
        echo "
            },
            autoplayDisableOnInteraction: true,
            loop: true
        });
    });
    //--></script>
<style>
    .swiper-slide {
        width: auto;
    }
    .swiper-container{
        height: ";
        // line 51
        echo ($context["height"] ?? null);
        echo "
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/manufacturers_slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 51,  121 => 39,  116 => 37,  106 => 30,  94 => 20,  87 => 19,  79 => 17,  69 => 15,  67 => 14,  60 => 13,  56 => 12,  51 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/manufacturers_slider.twig", "");
    }
}
