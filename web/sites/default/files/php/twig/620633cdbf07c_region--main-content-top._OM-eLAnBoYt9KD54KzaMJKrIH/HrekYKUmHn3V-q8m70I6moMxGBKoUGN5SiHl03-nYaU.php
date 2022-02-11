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

/* themes/custom/the_wire/templates/region--main-content-top.html.twig */
class __TwigTemplate_ca12a4117ad11fe62d6c13d9544b761a9d2a65a56ee12f485c9ad682d042a565 extends \Twig\Template
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
        // line 16
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "main-content-first-section"], "method", false, false, true, 16), 16, $this->source), "html", null, true);
        echo ">
    <div class=\"first-line\">
            <div class=\"featured-news-wrapper\">
              ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "views_block__featured_news_block_1", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"top-stories\">
              ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "views_block__top_stories_block_1", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
            </div>
          </div>
          <div class=\"second-line\">
            <div class=\"tek-fog\">
              ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "views_block__tek_fog_block_1", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
            </div>
          </div>
          <div class=\"third-line\">
            <div class=\"editors-pick\">
              ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "views_block__editor_s_pick_block_1", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"opinion\">
              ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), "views_block__opinion_block_1", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "
            </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/the_wire/templates/region--main-content-top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 35,  68 => 32,  60 => 27,  52 => 22,  46 => 19,  39 => 16,);
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
{# {% if content %} #}
  <div{{ attributes.addClass('main-content-first-section') }}>
    <div class=\"first-line\">
            <div class=\"featured-news-wrapper\">
              {{ elements.views_block__featured_news_block_1 }}
            </div>
            <div class=\"top-stories\">
              {{ elements.views_block__top_stories_block_1 }}
            </div>
          </div>
          <div class=\"second-line\">
            <div class=\"tek-fog\">
              {{ elements.views_block__tek_fog_block_1 }}
            </div>
          </div>
          <div class=\"third-line\">
            <div class=\"editors-pick\">
              {{ elements.views_block__editor_s_pick_block_1 }}
            </div>
            <div class=\"opinion\">
              {{ elements.views_block__opinion_block_1 }}
            </div>
    </div>
  </div>
{# {% endif %} #}
", "themes/custom/the_wire/templates/region--main-content-top.html.twig", "/var/www/html/the_wire/web/themes/custom/the_wire/templates/region--main-content-top.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
