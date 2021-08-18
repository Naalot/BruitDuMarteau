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

/* D:\xampp\htdocs\bdm_october/themes/BdM/pages/index.htm */
class __TwigTemplate_28acff4964eff05aaf6e5a236466ccffe6fe1a407d9c40e9717f7ecd24d98b71 extends \Twig\Template
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
<!-- ========================= home-div start ========================= -->



<div class=\"container text-center\">

    <h2 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em; color:#666666;\">Le seul et unique championnat de monteur d’échafaudages</h2>
    <h1 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 2em; color:#EE8126;\">Le Bruit du Marteau</h1>
    
</div>

<div class=\"container\">
    <hr/>
</div>

<div class=\"container text-center mt-25 mb-10 wow fadeInDown\" data-wow-delay=\".4s\">
    <p class=\"mb-0.5\">Le Bruit du Marteau est une compétition décalée qui rassemble les professionnels et le grand public.</p>
    <p class=\"mb-0.5\">Un moment convivial et différent où tout le monde peut trouver sa place.</p>
    <p class=\"mb-0.5\">Depuis 2016 le Bruit du Marteau fait raisonner l’amour de la ferraille.</p>
    <p class=\"mb-0.5\">Notre objectif : donner de la visibilité aux métiers de l'ombre;</p>
    <p class=\"mb-0.5\">créer du lien entre les humains et les métiers, transmettre tout ce que nous avons appris pour construire les métiers de demain.</p>
    <p class=\"mb-0.5\" style=\"font-weight: bolder;\">Le rendez-vous des curieux, des professionnels et des joyeux !</p>
    <p class=\"mb-1\">Animations, concerts, restauration et buvette vous attendent sur place</p>
</div>

<div class=\"container mt-10 mb-40\">
    <div class=\"row align-items-center\">
        <div class=\"col-xl-5 col-lg-6\">
            <div class=\"text-center\">
                <h2 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em; color:#EE8126;\">Le Bruit du Marteau</h2>
                    <h3 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em;\">Le grand Bal des ferrailleux</h3>
                    <hr/>
                    <p class=\"mb-0.5 wow fadeInDown\" data-wow-delay=\".4s\">En raison des mesures sanitaires, </p>
                    <p class=\"mb-2 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-weight: bolder;\">la compétition n'aura pas lieu cette année 2021</p>
                    <p class=\"mb-2 wow fadeInDown\" data-wow-delay=\".4s\">Mais nous avons plus d'un marteau dans notre poche !</p>
                    <p class=\"mb-0.5 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-size: 25px;\">L'envie de vous retrouver malgré tout et</p>
                    <p class=\"mb-0.5 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-size: 25px;\">sous n'importe quel prétexte</p>
                    <p class=\"mb-2 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-size: 25px;\">était trop forte!</p>
                    <p class=\"mb-2 wow fadeInDown\" data-wow-delay=\".4s\">Nous vous donnons rendez-vous pour</p>
                    <a href=\"";
        // line 44
        echo url("/Presque_BdM");
        echo "\" class=\"mb-3 wow fadeInDown theme-btn\" data-wow-delay=\".4s\">Le Presque BdM</a>
                    <p class=\"mb-3 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-weight: bolder;\">Samedi 25 septembre à partir de 18h</p>
            </div>
        </div>
        <div class=\"col-xl-7 col-lg-6\">
            <div class=\"text-center\">
                <div class=\"d-inline-block pt-5\">
                    <img src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/BdMview.jpg");
        echo "\" alt=\"\" class=\"wow fadeInRight\"
                        data-wow-delay=\".5s\" style=\"max-width: 100%;\">
                    <!--<img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/dots.shape.svg");
        echo "\" alt=\"\" class=\"dot-shape\">-->
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("service"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "

<!-- ========================= home-div end ========================= -->

";
        // line 65
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 65,  121 => 61,  117 => 60,  107 => 53,  102 => 51,  92 => 44,  50 => 4,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

{% component 'siteSearchInclude' %}

<!-- ========================= home-div start ========================= -->



<div class=\"container text-center\">

    <h2 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em; color:#666666;\">Le seul et unique championnat de monteur d’échafaudages</h2>
    <h1 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 2em; color:#EE8126;\">Le Bruit du Marteau</h1>
    
</div>

<div class=\"container\">
    <hr/>
</div>

<div class=\"container text-center mt-25 mb-10 wow fadeInDown\" data-wow-delay=\".4s\">
    <p class=\"mb-0.5\">Le Bruit du Marteau est une compétition décalée qui rassemble les professionnels et le grand public.</p>
    <p class=\"mb-0.5\">Un moment convivial et différent où tout le monde peut trouver sa place.</p>
    <p class=\"mb-0.5\">Depuis 2016 le Bruit du Marteau fait raisonner l’amour de la ferraille.</p>
    <p class=\"mb-0.5\">Notre objectif : donner de la visibilité aux métiers de l'ombre;</p>
    <p class=\"mb-0.5\">créer du lien entre les humains et les métiers, transmettre tout ce que nous avons appris pour construire les métiers de demain.</p>
    <p class=\"mb-0.5\" style=\"font-weight: bolder;\">Le rendez-vous des curieux, des professionnels et des joyeux !</p>
    <p class=\"mb-1\">Animations, concerts, restauration et buvette vous attendent sur place</p>
</div>

<div class=\"container mt-10 mb-40\">
    <div class=\"row align-items-center\">
        <div class=\"col-xl-5 col-lg-6\">
            <div class=\"text-center\">
                <h2 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em; color:#EE8126;\">Le Bruit du Marteau</h2>
                    <h3 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em;\">Le grand Bal des ferrailleux</h3>
                    <hr/>
                    <p class=\"mb-0.5 wow fadeInDown\" data-wow-delay=\".4s\">En raison des mesures sanitaires, </p>
                    <p class=\"mb-2 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-weight: bolder;\">la compétition n'aura pas lieu cette année 2021</p>
                    <p class=\"mb-2 wow fadeInDown\" data-wow-delay=\".4s\">Mais nous avons plus d'un marteau dans notre poche !</p>
                    <p class=\"mb-0.5 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-size: 25px;\">L'envie de vous retrouver malgré tout et</p>
                    <p class=\"mb-0.5 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-size: 25px;\">sous n'importe quel prétexte</p>
                    <p class=\"mb-2 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-size: 25px;\">était trop forte!</p>
                    <p class=\"mb-2 wow fadeInDown\" data-wow-delay=\".4s\">Nous vous donnons rendez-vous pour</p>
                    <a href=\"{{ url('/Presque_BdM') }}\" class=\"mb-3 wow fadeInDown theme-btn\" data-wow-delay=\".4s\">Le Presque BdM</a>
                    <p class=\"mb-3 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-weight: bolder;\">Samedi 25 septembre à partir de 18h</p>
            </div>
        </div>
        <div class=\"col-xl-7 col-lg-6\">
            <div class=\"text-center\">
                <div class=\"d-inline-block pt-5\">
                    <img src=\"{{ 'assets/img/hero/BdMview.jpg' | theme }}\" alt=\"\" class=\"wow fadeInRight\"
                        data-wow-delay=\".5s\" style=\"max-width: 100%;\">
                    <!--<img src=\"{{ 'assets/img/hero/dots.shape.svg' | theme }}\" alt=\"\" class=\"dot-shape\">-->
                </div>
            </div>
        </div>
    </div>
</div>

{% partial 'service' %}


<!-- ========================= home-div end ========================= -->

{% partial 'footer' %}", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/index.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "component" => 3);
        static $filters = array("theme" => 51);
        static $functions = array("url" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'component'],
                ['theme'],
                ['url']
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
