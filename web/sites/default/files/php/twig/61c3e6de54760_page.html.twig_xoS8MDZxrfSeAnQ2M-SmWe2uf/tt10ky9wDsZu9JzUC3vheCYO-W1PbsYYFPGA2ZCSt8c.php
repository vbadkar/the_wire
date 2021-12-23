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

/* themes/custom/the_wire/templates/page.html.twig */
class __TwigTemplate_10c75574f9da20c89e276a6fee03827508d18ddaec5907a3c0d90ac6d2626fb6 extends \Twig\Template
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
   <div class=\"main-navigation\">
   ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "
   </div>
 </div>
<div class=\"layout-container\">
  <div class=\"page-wrapper\">
    <main role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 60
        echo "      <div class=\"content-first-wrapper\">
        <div class=\"content-first\">
          ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_top", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"the-wire-video-wrapper\">
      <div class=\"the-wire-video\">
        ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "the_wire_video", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
      </div>
    </div>
    <div class=\"content-second-wrapper\">
        <div class=\"content-second\">
          ";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_bottom", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"sidebars\">
      <div class=\"sidebar-wrapper\">
        ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 77)) {
            // line 78
            echo "        <div class=\"side_bar_more_in\">
          <aside class=\"layout-sidebar-first\" role=\"complementary\">
            ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
        ";
        }
        // line 84
        echo "
        ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 85)) {
            // line 86
            echo "        <div class=\"side_bar_trending\">
          <aside class=\"layout-sidebar-second\" role=\"complementary\">
            ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
        ";
        }
        // line 92
        echo "      </div>
    </div>

    </main>
  </div>
  <div class=\"site-footer-wrapper\">
    ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 98)) {
            // line 99
            echo "    <footer role=\"contentinfo\">
      <div class=\"site-footer\">
        ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 105
        echo "  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/the_wire/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 105,  131 => 101,  127 => 99,  125 => 98,  117 => 92,  110 => 88,  106 => 86,  104 => 85,  101 => 84,  94 => 80,  90 => 78,  88 => 77,  80 => 72,  72 => 67,  64 => 62,  60 => 60,  51 => 53,  44 => 49,  39 => 46,);
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
   <div class=\"main-navigation\">
   {{ page.main_menu }}
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
", "themes/custom/the_wire/templates/page.html.twig", "/var/www/html/the_wire/web/themes/custom/the_wire/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 77);
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
