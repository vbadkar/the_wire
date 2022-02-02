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

/* themes/custom/the_wire/templates/page--user--login.html.twig */
class __TwigTemplate_08a20338f7b9cd07ea7d4a55a326fce5c1429b3d3bea0d17a5cefa175888a327 extends \Twig\Template
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
        echo "<div class=\"layout-container\">
  <div class=\"page-wrapper\">
    <main role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 50
        echo "      <div class=\"form-wrapper\">
        ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_middle", [], "any", false, false, true, 51), "sitelogo_2", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
        <h2 class=\"form-header\">Log In</h2>
        <div class=\"login-form\">
          ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_middle", [], "any", false, false, true, 54), "the_wire_content", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
          <div class=\"or-separator\">
            Or
          </div>
          <div class=\"google-button\" id=\"edit-actions-2\">
            <input type=\"submit\" id=\"edit-submit-google\" name=\"op-google\" value=\"Sign in with Google\" class=\"button js-form-submit form-submit\">
          </div>
          <div class=\"youtube-button\" id=\"edit-actions-2\">
            <input type=\"submit\" id=\"edit-submit-youtube\" name=\"op-youtube\" value=\"Sign in with youtube\" class=\"button js-form-submit form-submit\">
          </div>
        </div>
        <div class=\"form-redirect\">
          <p class=\"redirect-text\">Don't have the wire account? <a class=\"redirect-link\" href=\"register\">Sign up</a></p>
        </div>
      </div>
    </main>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/the_wire/templates/page--user--login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 54,  47 => 51,  44 => 50,  39 => 46,);
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
<div class=\"layout-container\">
  <div class=\"page-wrapper\">
    <main role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
      <div class=\"form-wrapper\">
        {{ page.main_content_middle.sitelogo_2 }}
        <h2 class=\"form-header\">Log In</h2>
        <div class=\"login-form\">
          {{ page.main_content_middle.the_wire_content }}
          <div class=\"or-separator\">
            Or
          </div>
          <div class=\"google-button\" id=\"edit-actions-2\">
            <input type=\"submit\" id=\"edit-submit-google\" name=\"op-google\" value=\"Sign in with Google\" class=\"button js-form-submit form-submit\">
          </div>
          <div class=\"youtube-button\" id=\"edit-actions-2\">
            <input type=\"submit\" id=\"edit-submit-youtube\" name=\"op-youtube\" value=\"Sign in with youtube\" class=\"button js-form-submit form-submit\">
          </div>
        </div>
        <div class=\"form-redirect\">
          <p class=\"redirect-text\">Don't have the wire account? <a class=\"redirect-link\" href=\"register\">Sign up</a></p>
        </div>
      </div>
    </main>
  </div>
</div>{# /.layout-container #}
", "themes/custom/the_wire/templates/page--user--login.html.twig", "/var/www/html/the_wire/web/themes/custom/the_wire/templates/page--user--login.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 51);
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
