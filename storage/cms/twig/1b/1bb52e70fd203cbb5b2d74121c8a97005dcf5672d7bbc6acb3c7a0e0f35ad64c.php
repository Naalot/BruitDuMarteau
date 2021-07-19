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

/* D:\xampp\htdocs\bdm_october/themes/BdM/pages/inscription_volontaire.htm */
class __TwigTemplate_da76e472c7e54d3cb0205026a26e3dbcb2524a6089b6fedb6cd52df74a7fe4bc extends \Twig\Template
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
<!-- =========================  ========================= -->


<div class=\"container container-fluid text-center\">
    <h3 class=\"mb-4\">Inscription volontaires et bénévoles</h3>
    <div>
        <hr />
        <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/VisuelWeb2.jpg");
        echo "\" alt=\"Illustration SCAFF\"
            class=\"border rounded mw-100 mt-2\">
    </div>
    <div>
        <iframe class=\"container-fluid vh-100 mt-2\"
            src=\"https://docs.google.com/forms/d/e/1FAIpQLSc7qlpqIn16J-g_zd64vMNsbTU9hIBCsoTgE92E77XxNRGgYQ/viewform?embedded=true\"
            width=auto frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Chargement…</iframe>
    </div>
</div>
";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("service"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "

<!-- =========================  ========================= -->

";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/inscription_volontaire.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  76 => 22,  72 => 21,  60 => 12,  50 => 4,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

{% component 'siteSearchInclude' %}

<!-- =========================  ========================= -->


<div class=\"container container-fluid text-center\">
    <h3 class=\"mb-4\">Inscription volontaires et bénévoles</h3>
    <div>
        <hr />
        <img src=\"{{ 'assets/img/hero/VisuelWeb2.jpg' | theme }}\" alt=\"Illustration SCAFF\"
            class=\"border rounded mw-100 mt-2\">
    </div>
    <div>
        <iframe class=\"container-fluid vh-100 mt-2\"
            src=\"https://docs.google.com/forms/d/e/1FAIpQLSc7qlpqIn16J-g_zd64vMNsbTU9hIBCsoTgE92E77XxNRGgYQ/viewform?embedded=true\"
            width=auto frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Chargement…</iframe>
    </div>
</div>
{% partial 'service' %}


<!-- =========================  ========================= -->

{% partial 'footer' %}", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/inscription_volontaire.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "component" => 3);
        static $filters = array("theme" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'component'],
                ['theme'],
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
