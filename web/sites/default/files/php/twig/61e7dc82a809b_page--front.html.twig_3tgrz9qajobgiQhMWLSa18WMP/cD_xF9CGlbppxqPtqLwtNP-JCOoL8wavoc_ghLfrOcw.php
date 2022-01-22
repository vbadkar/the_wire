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

/* themes/custom/the_wire/templates/page--front.html.twig */
class __TwigTemplate_b5ffde61a1734720c7519bfe83f4e902280494ad56d4926dab0e16613cb3455c extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/the_wire/templates/page--front.html.twig"));

        // line 46
        echo "<div class=\"head-wrapper\">
  <div class=\"site-header\">
   <header role=\"banner\">
     ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
   </header>
  </div>
  <div class=\"nav-overlay\">
    <div class=\"main-navigation\">
        ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
    </div>
   </div>
 </div>
<div class=\"layout-container\">
  <div class=\"page-wrapper\">
    <main role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 62
        echo "      <div class=\"content-first-wrapper\">
        <div class=\"content-first\">
          ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_top", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"the-wire-video-wrapper\">
        <div class=\"the-wire-video\">
          ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "the_wire_video", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"content-second-wrapper\">
          <div class=\"content-second\">
            ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_bottom", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
          </div>
      </div>
      <div class=\"sidebars\">
        <div class=\"sidebar-wrapper\">
          ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 79)) {
            // line 80
            echo "          <div class=\"side_bar_more_in\">
            <aside class=\"layout-sidebar-first\" role=\"complementary\">
              ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
          ";
        }
        // line 86
        echo "
          ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 87)) {
            // line 88
            echo "          <div class=\"side_bar_trending\">
            <aside class=\"layout-sidebar-second\" role=\"complementary\">
              ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
          ";
        }
        // line 94
        echo "        </div>
      </div>
    </main>
  </div>
  <div class=\"site-footer-wrapper\">
    ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 99)) {
            // line 100
            echo "    <footer role=\"contentinfo\">
      <div class=\"site-footer\">
        ";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 106
        echo "  </div>

</div>";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/the_wire/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 106,  135 => 102,  131 => 100,  129 => 99,  122 => 94,  115 => 90,  111 => 88,  109 => 87,  106 => 86,  99 => 82,  95 => 80,  93 => 79,  85 => 74,  77 => 69,  69 => 64,  65 => 62,  55 => 54,  47 => 49,  42 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"head-wrapper\">
  <div class=\"site-header\">
   <header role=\"banner\">
     {{ page.header }}
   </header>
  </div>
  <div class=\"nav-overlay\">
    <div class=\"main-navigation\">
        {{ page.main_menu }}
    </div>
   </div>
 </div>
<div class=\"layout-container\">
  <div class=\"page-wrapper\">
    <main role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
      <div class=\"content-first-wrapper\">
        <div class=\"content-first\">
          {{ page.main_content_top }}
        </div>
      </div>
      <div class=\"the-wire-video-wrapper\">
        <div class=\"the-wire-video\">
          {{ page.the_wire_video }}
        </div>
      </div>
      <div class=\"content-second-wrapper\">
          <div class=\"content-second\">
            {{ page.main_content_bottom }}
          </div>
      </div>
      <div class=\"sidebars\">
        <div class=\"sidebar-wrapper\">
          {% if page.sidebar_first %}
          <div class=\"side_bar_more_in\">
            <aside class=\"layout-sidebar-first\" role=\"complementary\">
              {{ page.sidebar_first }}
            </aside>
          </div>
          {% endif %}

          {% if page.sidebar_second %}
          <div class=\"side_bar_trending\">
            <aside class=\"layout-sidebar-second\" role=\"complementary\">
              {{ page.sidebar_second }}
            </aside>
          </div>
          {% endif %}
        </div>
      </div>
    </main>
  </div>
  <div class=\"site-footer-wrapper\">
    {% if page.footer %}
    <footer role=\"contentinfo\">
      <div class=\"site-footer\">
        {{ page.footer }}
      </div>
    </footer>
  {% endif %}
  </div>

</div>{# /.layout-container #}
", "themes/custom/the_wire/templates/page--front.html.twig", "/var/www/html/the_wire/web/themes/custom/the_wire/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 79);
        static $filters = array("escape" => 49);
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
