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

/* D:\xampp\htdocs\bdm_october/themes/BdM/pages/404.htm */
class __TwigTemplate_fd7c4c527ee5f0eaebd17c5f64cb1ba9e0a07182bbe7f188421918724df6cbaa extends \Twig\Template
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
<!--<section class=\"page-banner-section pt-35 pb-35 img-bg\" style=\"background-image: url('";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/common-bg.svg");
        echo "')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"banner-content\">
                    <h2 class=\"text-white\">Erreur 404</h2>
                    <div class=\"page-breadcrumb\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Accueil</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">404</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->

<section class=\"page-404-section pt-130 pb-130\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"page-404-content text-center\">
                    <h2 class=\"mb-30\">404</h2>
                    <h4 class=\"mb-40\">Page introuvable!</h4>
                    <a href=\"index.html\" class=\"theme-btn\">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 37,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

<!--<section class=\"page-banner-section pt-35 pb-35 img-bg\" style=\"background-image: url('{{ 'assets/img/bg/common-bg.svg' | theme }}')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"banner-content\">
                    <h2 class=\"text-white\">Erreur 404</h2>
                    <div class=\"page-breadcrumb\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Accueil</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">404</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->

<section class=\"page-404-section pt-130 pb-130\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"page-404-content text-center\">
                    <h2 class=\"mb-30\">404</h2>
                    <h4 class=\"mb-40\">Page introuvable!</h4>
                    <a href=\"index.html\" class=\"theme-btn\">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </div>
</section>

{% partial 'footer' %}", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/404.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1);
        static $filters = array("theme" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
