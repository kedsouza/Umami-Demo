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

/* core/profiles/demo_umami/themes/umami/templates/components/disclaimer/block--bundle--disclaimer-block.html.twig */
class __TwigTemplate_fd00696954d88a97760d6b14a3ed3441 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "core/profiles/demo_umami/themes/umami/templates/components/disclaimer/block--bundle--disclaimer-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "  ";
        $this->loadTemplate("core/profiles/demo_umami/themes/umami/templates/components/disclaimer/block--bundle--disclaimer-block.html.twig", "core/profiles/demo_umami/themes/umami/templates/components/disclaimer/block--bundle--disclaimer-block.html.twig", 15, "1822400538")->display(twig_to_array(["disclaimer" => twig_get_attribute($this->env, $this->source,         // line 16
($context["content"] ?? null), "field_disclaimer", [], "any", false, false, true, 16), "copyright" => twig_get_attribute($this->env, $this->source,         // line 17
($context["content"] ?? null), "field_copyright", [], "any", false, false, true, 17)]));
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/disclaimer/block--bundle--disclaimer-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  54 => 16,  52 => 15,  48 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/disclaimer/block--bundle--disclaimer-block.html.twig", "/opt/drupal/web/core/profiles/demo_umami/themes/umami/templates/components/disclaimer/block--bundle--disclaimer-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 15);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                [],
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


/* core/profiles/demo_umami/themes/umami/templates/components/disclaimer/block--bundle--disclaimer-block.html.twig */
class __TwigTemplate_fd00696954d88a97760d6b14a3ed3441___1822400538 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return "umami:disclaimer";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("umami:disclaimer", "core/profiles/demo_umami/themes/umami/templates/components/disclaimer/block--bundle--disclaimer-block.html.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/disclaimer/block--bundle--disclaimer-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 15,  55 => 17,  54 => 16,  52 => 15,  48 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/disclaimer/block--bundle--disclaimer-block.html.twig", "/opt/drupal/web/core/profiles/demo_umami/themes/umami/templates/components/disclaimer/block--bundle--disclaimer-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
