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

/* themes/custom/gca/templates/layout/page.html.twig */
class __TwigTemplate_ca41bb9ed3b6c1bfa24a63e643fd0712 extends Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <div id=\"header\">
      <div class=\"content\">
        <div id=\"site-name_lang-switcher_toggle-light\" class=\"row\">
              <!-- Begin Top header right-->
              ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_right", [], "any", false, false, true, 7)) {
            // line 8
            echo "                  <div id=\"top-header-right\" class=\"column\">
                      <div class=\"content\">
                          ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_right", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
                      </div>
                  </div>
              ";
        }
        // line 14
        echo "              <!--End Top header right-->

              <!-- Begin Top header left-->
              ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_left", [], "any", false, false, true, 17)) {
            // line 18
            echo "                  <div id=\"top-header-left\" class=\"column\">
                      <div class=\"content\">
                          ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_left", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
                      </div>
                  </div>
              ";
        }
        // line 24
        echo "              <!--End Top header left-->
          </div>
        <div id=\"logo_menu_search\" class=\"row\">
              <!-- Begin highlighted header right-->
              ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_right", [], "any", false, false, true, 28)) {
            // line 29
            echo "                  <div id=\"highlighted-header-right\" class=\"column\">
                      <div class=\"content\">
                          ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_right", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
                      </div>
                  </div>
              ";
        }
        // line 35
        echo "              <!--End highlighted header right-->

            <!-- Begin highlighted header left-->
            ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_left", [], "any", false, false, true, 38)) {
            // line 39
            echo "                <div id=\"highlighted-header-left\" class=\"column\">
                    <div class=\"content\">
                        ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_left", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 45
        echo "            <!--End highlighted header left-->
          </div>
        <div id=\"site-slogan\" class=\"row\">
            <!-- Begin middle header top-->
            ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header_top", [], "any", false, false, true, 49)) {
            // line 50
            echo "                <div id=\"middle-header-top\" class=\"column\">
                    <div class=\"content\">
                        ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header_top", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 56
        echo "            <!--End highlighted header right-->
        </div>
      </div>
    </div>
    <div id=\"main-wrapper\">
      <div id=\"main\">
          ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
      </div>
    </div>
    <div id=\"footer-wrapper\">
    </div>
  </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/gca/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  142 => 62,  134 => 56,  127 => 52,  123 => 50,  121 => 49,  115 => 45,  108 => 41,  104 => 39,  102 => 38,  97 => 35,  90 => 31,  86 => 29,  84 => 28,  78 => 24,  71 => 20,  67 => 18,  65 => 17,  60 => 14,  53 => 10,  49 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/gca/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\gca.gov.sa.dev\\web\\themes\\custom\\gca\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
}
