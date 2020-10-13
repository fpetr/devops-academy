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

/* core/profiles/demo_umami/themes/umami/layouts/oneplusfourgrid_section/layout--oneplusfourgrid-section.html.twig */
class __TwigTemplate_0b80cc0744a2bc5be2c0043655894e6954038bd21fd7cb6048a7db0f2095abf3 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 14, "if" => 19);
        $filters = array("escape" => 20);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["classes"] = [0 => "layout", 1 => "layout--oneplusfourgrid-section"];
        // line 19
        if (($context["content"] ?? null)) {
            // line 20
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 20), 20, $this->source), "html", null, true);
            echo ">

    ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 22)) {
                // line 23
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first", [], "any", false, false, true, 23), "addClass", [0 => "layout__region", 1 => "layout__region--first"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
                echo ">
        ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            if ((((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 28) || twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 28)) || twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 28)) || twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "fifth", [], "any", false, false, true, 28))) {
                // line 29
                echo "      <div class=\"layout__four-grid-group\">
    ";
            }
            // line 31
            echo "
      ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 32)) {
                // line 33
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second", [], "any", false, false, true, 33), "addClass", [0 => "layout__region", 1 => "layout__region--second"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                echo ">
          ";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 37
            echo "
      ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 38)) {
                // line 39
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "third", [], "any", false, false, true, 39), "addClass", [0 => "layout__region", 1 => "layout__region--third"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                echo ">
          ";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 43
            echo "
      ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 44)) {
                // line 45
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "fourth", [], "any", false, false, true, 45), "addClass", [0 => "layout__region", 1 => "layout__region--fourth"], "method", false, false, true, 45), 45, $this->source), "html", null, true);
                echo ">
          ";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 49
            echo "
      ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "fifth", [], "any", false, false, true, 50)) {
                // line 51
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "fifth", [], "any", false, false, true, 51), "addClass", [0 => "layout__region", 1 => "layout__region--fifth"], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                echo ">
          ";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "fifth", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 55
            echo "
    ";
            // line 56
            if ((((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 56) || twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 56)) || twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 56)) || twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "fifth", [], "any", false, false, true, 56))) {
                // line 57
                echo "      </div>
    ";
            }
            // line 59
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/layouts/oneplusfourgrid_section/layout--oneplusfourgrid-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 59,  163 => 57,  161 => 56,  158 => 55,  152 => 52,  147 => 51,  145 => 50,  142 => 49,  136 => 46,  131 => 45,  129 => 44,  126 => 43,  120 => 40,  115 => 39,  113 => 38,  110 => 37,  104 => 34,  99 => 33,  97 => 32,  94 => 31,  90 => 29,  88 => 28,  85 => 27,  79 => 24,  74 => 23,  72 => 22,  66 => 20,  64 => 19,  62 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/layouts/oneplusfourgrid_section/layout--oneplusfourgrid-section.html.twig", "/opt/drupal/web/core/profiles/demo_umami/themes/umami/layouts/oneplusfourgrid_section/layout--oneplusfourgrid-section.html.twig");
    }
}
