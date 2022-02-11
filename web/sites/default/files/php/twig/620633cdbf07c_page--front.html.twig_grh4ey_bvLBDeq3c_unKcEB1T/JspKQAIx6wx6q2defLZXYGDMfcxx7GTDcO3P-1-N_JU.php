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
class __TwigTemplate_0dc7ada791c506dfe4f4e0b180b767b75036f7b0a989de70105b6dd149c8ba6f extends \Twig\Template
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
  <div class=\"nav-overlay\">
    <div class=\"overlay-content-wrapper\">
        <div class=\"overlay-content\">
          <div class=\"overlay-content-head\">
            <div class=\"support-us\">
              ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 60), "the_wire_account_menu", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"language-switcher\">
              ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 63), "languageswitcher", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
            </div>
          </div>
          <div class=\"overlay-main-content\">
            <div class=\"overlay-home\">
              ";
        // line 69
        echo "              <a href=\"/the_wire/web/\" class=\"home-link\">HOME</a>
            </div>
            <div class=\"overlay-category\">
              <div class=\"categories\">Category<span><i class=\"fas fa-chevron-down\"></i></span>
                ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 73), "the_wire_main_menu", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
              </div>
            </div>
            <div class=\"overlay-opinion\">
              <a href=\"/the_wire/web/opinion\" class=\"opinion-button\">Opinion</a>
            </div>
          </div>
          <div class=\"overlay-content-footer\">
            <div class=\"copyright-wrapper\">
              <span class=\"copyright-symbol\">©</span>
              <span class=\"copyright-text\">The Wire | 2018</span>
            </div>
            <div class=\"footer-social-icons\">
              ";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 86), "socialicons", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "
            </div>
          </div>
        </div>
    </div>
   </div>
  </div>
<div class=\"layout-container\">
  <div class=\"page-wrapper\">
    <main role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 97
        echo "      <div class=\"content-first-wrapper\">
        <div class=\"content-first\">
          ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_top", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"the-wire-video-wrapper\">
        <div class=\"the-wire-video\">
          ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "the_wire_video", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"content-second-wrapper\">
          <div class=\"content-second\">
            ";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_bottom", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "
          </div>
      </div>
      <div class=\"sidebars\">
        <div class=\"sidebar-wrapper\">
          ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 114)) {
            // line 115
            echo "          <div class=\"side_bar_more_in\">
            <aside class=\"layout-sidebar-first\" role=\"complementary\">
              ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
          ";
        }
        // line 121
        echo "
          ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 122)) {
            // line 123
            echo "          <div class=\"side_bar_trending\">
            <aside class=\"layout-sidebar-second\" role=\"complementary\">
              ";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
          ";
        }
        // line 129
        echo "        </div>
      </div>
    </main>
  </div>
  <div class=\"site-footer-wrapper\">
    ";
        // line 134
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 134)) {
            // line 135
            echo "    <footer role=\"contentinfo\">
      <div class=\"site-footer\">
        ";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 141
        echo "  </div>

</div>";
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
        return array (  187 => 141,  180 => 137,  176 => 135,  174 => 134,  167 => 129,  160 => 125,  156 => 123,  154 => 122,  151 => 121,  144 => 117,  140 => 115,  138 => 114,  130 => 109,  122 => 104,  114 => 99,  110 => 97,  97 => 86,  81 => 73,  75 => 69,  67 => 63,  61 => 60,  51 => 53,  44 => 49,  39 => 46,);
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
  <div class=\"nav-overlay\">
    <div class=\"overlay-content-wrapper\">
        <div class=\"overlay-content\">
          <div class=\"overlay-content-head\">
            <div class=\"support-us\">
              {{ page.header.the_wire_account_menu }}
            </div>
            <div class=\"language-switcher\">
              {{ page.header.languageswitcher }}
            </div>
          </div>
          <div class=\"overlay-main-content\">
            <div class=\"overlay-home\">
              {# <svg id=\"Layer_home\" data-name=\"Layer home\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 160 160\"><defs><style>.cls-1{fill:#fff;}</style></defs><title>icons</title><path class=\"cls-1\" d=\"M118.9,77.8l-37-37a2.8,2.8,0,0,0-3.8,0L41.2,77.7c-1.2,1.2-1.6,2.8-.4,3.8a1.9,1.9,0,0,0,1.6.5,2.7,2.7,0,0,0,1.7-.9l4.6-4.8v41a2.7,2.7,0,0,0,2.7,2.7H69c1.7,0,2.7-.7,2.7-2.7V90.7H88.2v26.7c0,2.2,1.3,2.7,2.7,2.7h17.7a2.7,2.7,0,0,0,2.7-2.7v-41l4.5,4.7c1.1,1.1,2.6,1.4,3.6.2S119.9,78.8,118.9,77.8Zm-11.4-5v43.3H92.1V89.5a2.7,2.7,0,0,0-2.7-2.7H70.6a2.7,2.7,0,0,0-2.7,2.7v26.7H52.5V72.8L80,44.9Z\"/></svg> #}
              <a href=\"/the_wire/web/\" class=\"home-link\">HOME</a>
            </div>
            <div class=\"overlay-category\">
              <div class=\"categories\">Category<span><i class=\"fas fa-chevron-down\"></i></span>
                {{ page.main_menu.the_wire_main_menu }}
              </div>
            </div>
            <div class=\"overlay-opinion\">
              <a href=\"/the_wire/web/opinion\" class=\"opinion-button\">Opinion</a>
            </div>
          </div>
          <div class=\"overlay-content-footer\">
            <div class=\"copyright-wrapper\">
              <span class=\"copyright-symbol\">©</span>
              <span class=\"copyright-text\">The Wire | 2018</span>
            </div>
            <div class=\"footer-social-icons\">
              {{ page.header.socialicons }}
            </div>
          </div>
        </div>
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
        static $tags = array("if" => 114);
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
