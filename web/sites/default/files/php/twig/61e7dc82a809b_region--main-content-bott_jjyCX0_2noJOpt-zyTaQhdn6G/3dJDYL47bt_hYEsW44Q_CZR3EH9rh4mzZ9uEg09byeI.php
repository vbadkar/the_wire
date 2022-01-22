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

/* themes/custom/the_wire/templates/region--main-content-bottom.html.twig */
class __TwigTemplate_eb91ca3b8a4111c51900e4c0e5c68f29375d6400bb372dbe700bf429d9621440 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/the_wire/templates/region--main-content-bottom.html.twig"));

        // line 15
        if (($context["content"] ?? null)) {
            // line 16
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "main-content-second-section"], "method", false, false, true, 16), 16, $this->source), "html", null, true);
            echo ">
    <div class=\"fourth-line\">
            <div class=\"from-science\">
              ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "views_block__more_in_science_block_1", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "
            </div>
            <div class=\"culture\">
              ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "views_block__culture_block_1", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
            </div>
          </div>
          <div class=\"fifth-line\">
            <div class=\"analysis\">
              ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "views_block__analysis_block_1", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "
            </div>
          </div>
          <div class=\"sixth-line\">
            <div class=\"livewire\">
              ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "views_block__from_livewire_block_1", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
            </div>
            <div class=\"external-affairs\">
              ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "views_block__external_affairs_block_1", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
            </div>
          </div>
  </div>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/the_wire/templates/region--main-content-bottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  73 => 32,  65 => 27,  57 => 22,  51 => 19,  44 => 16,  42 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a region.
 *
 * Available variables:
 * - content: The content for this region, typically blocks.
 * - attributes: HTML attributes for the region <div>.
 * - region: The name of the region variable as defined in the theme's
 *   .info.yml file.
 *
 * @see template_preprocess_region()
 */
#}
{% if content %}
  <div{{ attributes.addClass('main-content-second-section') }}>
    <div class=\"fourth-line\">
            <div class=\"from-science\">
              {{ elements.views_block__more_in_science_block_1 }}
            </div>
            <div class=\"culture\">
              {{ elements.views_block__culture_block_1 }}
            </div>
          </div>
          <div class=\"fifth-line\">
            <div class=\"analysis\">
              {{ elements.views_block__analysis_block_1 }}
            </div>
          </div>
          <div class=\"sixth-line\">
            <div class=\"livewire\">
              {{ elements.views_block__from_livewire_block_1 }}
            </div>
            <div class=\"external-affairs\">
              {{ elements.views_block__external_affairs_block_1 }}
            </div>
          </div>
  </div>
{% endif %}
", "themes/custom/the_wire/templates/region--main-content-bottom.html.twig", "/var/www/html/the_wire/web/themes/custom/the_wire/templates/region--main-content-bottom.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("escape" => 16);
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
