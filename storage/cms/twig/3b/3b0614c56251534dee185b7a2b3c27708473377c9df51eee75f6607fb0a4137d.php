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

/* D:\xampp\htdocs\bdm_october/themes/BdM/pages/Gallery.htm */
class __TwigTemplate_da17ed7e2718b961a8103758fe8cb047840a3d7adfbc7e6906c11d167ffa08ec extends \Twig\Template
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
<h3 class=\"container text-center mb-5\" style=\"font-size: 2em; color:#EE8126;\">Le Bruit du Marteau #03</h3>

<!-- Edition 02 -->
<div class=\"wow fadeInRight container col-md-6 col-md-offset-3 col-xs-12\">
    <div class=\"row\">
        <figure class=\"figure container border rounded mb-5 container-fluid mb-5 text-center\">
            <img src=\"https://lebruitdumarteau.fr/storage/app/media/BdM_03/BDM21.09.19-161.jpg\" alt=\"\"
                class=\"border img-fluid mt-3 mb-2\">
            <figcaption class=\"figure-caption mb-2\">Le Bruit du Marteau #03</figcaption>
        </figure>
    </div>
</div>

<!-- End Edition 02 -->

<!-- Gallery 02-->

<div class=\"wow fadeInLeft container-fluid mb-5 text-center\">
    <div class=\"row \">
        <div class=\"container border rounded col-md-6 col-md-offset-3 col-xs-12 p-3\">
            ";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("BdM_03"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "        </div>
    </div>
</div>

<!-- End Gallery 02-->

<h3 class=\"container text-center mb-5\" style=\"font-size: 2em; color:#EE8126;\">Le Bruit du Marteau #02</h3>

<!-- Edition 02 -->
<div class=\"wow fadeInRight container col-md-6 col-md-offset-3 col-xs-12\">
    <div class=\"row\">
        <figure class=\"figure container border rounded mb-5 container-fluid mb-5 text-center\">
            <img src=\"https://lebruitdumarteau.fr/storage/app/media/BdM_02/tof-bdm2-les-scaffs.jpg\" alt=\"\"
                class=\"border img-fluid mt-3 mb-2\">
            <figcaption class=\"figure-caption mb-2\">Le Bruit du Marteau #02</figcaption>
        </figure>
    </div>
</div>

<!-- End Edition 02 -->

<!-- Gallery 02-->

<div class=\"wow fadeInLeft container-fluid mb-5 text-center\">
    <div class=\"row \">
        <div class=\"container border rounded col-md-6 col-md-offset-3 col-xs-12 p-3\">
            ";
        // line 50
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("BdM_02"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 51
        echo "        </div>
    </div>
</div>

<!-- End Gallery 02-->

<h3 class=\"container text-center mb-5\" style=\"font-size: 2em; color:#EE8126;\">Le Bruit du Marteau #01</h3>

<!-- Edition 01 -->
<div class=\"wow fadeInRight container col-md-6 col-md-offset-3 col-xs-12\">
    <div class=\"row\">
        <figure class=\"figure container border rounded mb-5 container-fluid mb-5 text-center\">
            <img src=\"https://lebruitdumarteau.fr/storage/app/media/BdM_01/IMG_1786.jpg\" alt=\"\"
                class=\"border img-fluid mt-3 mb-2\">
            <figcaption class=\"figure-caption mb-2\">Le Bruit du Marteau #01</figcaption>
        </figure>
    </div>
</div>

<!-- End Edition 01 -->

<!-- Gallery 01-->

<div class=\"wow fadeInLeft container-fluid mb-5 text-center\">
    <div class=\"row \">
        <div class=\"container border rounded col-md-6 col-md-offset-3 col-xs-12 p-3\">
            ";
        // line 77
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("BdM_01"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 78
        echo "        </div>
    </div>
</div>

<!-- End Gallery 01-->

";
        // line 84
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("service"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 85
        echo "
";
        // line 86
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/Gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 86,  146 => 85,  142 => 84,  134 => 78,  130 => 77,  102 => 51,  98 => 50,  70 => 24,  66 => 23,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

<h3 class=\"container text-center mb-5\" style=\"font-size: 2em; color:#EE8126;\">Le Bruit du Marteau #03</h3>

<!-- Edition 02 -->
<div class=\"wow fadeInRight container col-md-6 col-md-offset-3 col-xs-12\">
    <div class=\"row\">
        <figure class=\"figure container border rounded mb-5 container-fluid mb-5 text-center\">
            <img src=\"https://lebruitdumarteau.fr/storage/app/media/BdM_03/BDM21.09.19-161.jpg\" alt=\"\"
                class=\"border img-fluid mt-3 mb-2\">
            <figcaption class=\"figure-caption mb-2\">Le Bruit du Marteau #03</figcaption>
        </figure>
    </div>
</div>

<!-- End Edition 02 -->

<!-- Gallery 02-->

<div class=\"wow fadeInLeft container-fluid mb-5 text-center\">
    <div class=\"row \">
        <div class=\"container border rounded col-md-6 col-md-offset-3 col-xs-12 p-3\">
            {% component 'BdM_03' %}
        </div>
    </div>
</div>

<!-- End Gallery 02-->

<h3 class=\"container text-center mb-5\" style=\"font-size: 2em; color:#EE8126;\">Le Bruit du Marteau #02</h3>

<!-- Edition 02 -->
<div class=\"wow fadeInRight container col-md-6 col-md-offset-3 col-xs-12\">
    <div class=\"row\">
        <figure class=\"figure container border rounded mb-5 container-fluid mb-5 text-center\">
            <img src=\"https://lebruitdumarteau.fr/storage/app/media/BdM_02/tof-bdm2-les-scaffs.jpg\" alt=\"\"
                class=\"border img-fluid mt-3 mb-2\">
            <figcaption class=\"figure-caption mb-2\">Le Bruit du Marteau #02</figcaption>
        </figure>
    </div>
</div>

<!-- End Edition 02 -->

<!-- Gallery 02-->

<div class=\"wow fadeInLeft container-fluid mb-5 text-center\">
    <div class=\"row \">
        <div class=\"container border rounded col-md-6 col-md-offset-3 col-xs-12 p-3\">
            {% component 'BdM_02' %}
        </div>
    </div>
</div>

<!-- End Gallery 02-->

<h3 class=\"container text-center mb-5\" style=\"font-size: 2em; color:#EE8126;\">Le Bruit du Marteau #01</h3>

<!-- Edition 01 -->
<div class=\"wow fadeInRight container col-md-6 col-md-offset-3 col-xs-12\">
    <div class=\"row\">
        <figure class=\"figure container border rounded mb-5 container-fluid mb-5 text-center\">
            <img src=\"https://lebruitdumarteau.fr/storage/app/media/BdM_01/IMG_1786.jpg\" alt=\"\"
                class=\"border img-fluid mt-3 mb-2\">
            <figcaption class=\"figure-caption mb-2\">Le Bruit du Marteau #01</figcaption>
        </figure>
    </div>
</div>

<!-- End Edition 01 -->

<!-- Gallery 01-->

<div class=\"wow fadeInLeft container-fluid mb-5 text-center\">
    <div class=\"row \">
        <div class=\"container border rounded col-md-6 col-md-offset-3 col-xs-12 p-3\">
            {% component 'BdM_01' %}
        </div>
    </div>
</div>

<!-- End Gallery 01-->

{% partial 'service' %}

{% partial 'footer' %}", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/Gallery.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "component" => 23);
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
