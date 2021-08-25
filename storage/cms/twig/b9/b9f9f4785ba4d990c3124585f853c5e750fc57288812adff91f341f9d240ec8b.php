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

/* D:\xampp\htdocs\bdm_october/themes/BdM/pages/inscription.htm */
class __TwigTemplate_98e58e3802f86d1309abeabeaefc40283fd8daf20eb268afcd127eab4d1bc46a extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("siteSearchInclude"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "
<div class=\"container text-center\">
    <h1 class=\"mb-20 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 2em; color:#EE8126;\">Inscriptions</h1>
    <p class=\"mb-2 wow fadeInLeft\" data-wow-delay=\".4s\" style=\"font-size: 1em; font-weight: bolder;\">Cette année il n'y aura pas d'inscriptions parceque pas de championnat</p>
    <p class=\"mb-2 wow fadeInLeft\" data-wow-delay=\".4s\" style=\"font-size: 1em; font-weight: bolder;\">Pour nous aussi c'est triste !</p>
    <p class=\"mb-20 wow fadeInLeft\" data-wow-delay=\".4s\" style=\"font-size: 1em; font-weight: bolder;\">Pas d'inquiétudes, on revient bientôt.</p>
</div>

";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("service"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "
";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/inscription.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  64 => 13,  60 => 12,  50 => 4,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

{% component 'siteSearchInclude' %}

<div class=\"container text-center\">
    <h1 class=\"mb-20 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 2em; color:#EE8126;\">Inscriptions</h1>
    <p class=\"mb-2 wow fadeInLeft\" data-wow-delay=\".4s\" style=\"font-size: 1em; font-weight: bolder;\">Cette année il n'y aura pas d'inscriptions parceque pas de championnat</p>
    <p class=\"mb-2 wow fadeInLeft\" data-wow-delay=\".4s\" style=\"font-size: 1em; font-weight: bolder;\">Pour nous aussi c'est triste !</p>
    <p class=\"mb-20 wow fadeInLeft\" data-wow-delay=\".4s\" style=\"font-size: 1em; font-weight: bolder;\">Pas d'inquiétudes, on revient bientôt.</p>
</div>

{% partial 'service' %}

{% partial 'footer' %}", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/inscription.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "component" => 3);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'component'],
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
