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

/* D:\xampp\htdocs\bdm_october/themes/BdM/pages/presqueBdM.htm */
class __TwigTemplate_9930171c6d58fe9f71e7d7b7d538fa189cf86433d86e3bd7b7cecf3b14e674ee extends \Twig\Template
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
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("alert-annulation"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
<!-- ========================= Page Presque BdM temporaire ========================= -->

<div class=\"container text-center\">
    <h2 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em; color:#666666;\">Parce qu’on ne
        voulait pas se passer du Bal
        des ferrailleux</h2>
    <h1 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 2em; color:#EE8126;\">Le Presque BDM</h1>
    <p class=\"mb-2 wow fadeInLeft\" data-wow-delay=\".4s\" style=\"font-size: 1em;\">aura lieu le <b>25 Sept 2021</b> à
        Meyrié (38)</p>
</div>

<div class=\"container\">
    <hr />
</div>

<div class=\"container text-center mt-10 mb-10 wow fadeInDown\" data-wow-delay=\".4s\">
    <p class=\"mb-0.5\">2021 devrait être l’année de toutes les reprises, une année durant laquelle on RE-fait, une année
        où on RE-trouve nos habitudes et où on s’en invente d’autres ! </p>
    <p class=\"mb-0.5\">Pour l’équipe des fous furieux de la ferraille aussi.</p>
    <p class=\"mb-0.5\">Cet hiver, dans nos petites caboches il n'y avait plus beaucoup de perspectives, pas tellement
        d’espoir de RE-prendre…</p>
    <p class=\"mb-0.5\">Par un triste soir de février nous avons dû nous rendre à l'évidence et accepter qu’il n' y aurait
        pas de “Championnat de monteur d’échafaudage en 2021”... </p>
    <p class=\"mb-0.5\">Mais il restait dans l’air un brin de folie, une lueur qu’on a pas réussi à faire taire, ce
        scintillement qui restait c’était de l’envie.</p>
    <p class=\"mb-0.5\" style=\"font-weight: bolder;\"></p>
    <p class=\"mb-0.5\">L’envie de voir la salle prévert occupée, l’envie d’honorer nos engagements et surtout l'envie de
        se retrouver malgré tout et sous n'importe quel prétexte.</p>
    <p class=\"mb-0.5\" style=\"font-weight: bolder;\">Cette envie a donné naissance à :</p>
    <h2 class=\"mb-0.5\" style=\"font-size:x-large\">Le Presque BdM</h2>
    <p class=\"mb-0.5\">Une soirée pour se retrouver, faire danser toute la famille, marquer le coup et surtout ne pas
        s’oublier.</p>
    <p class=\"mb-0.5\" style=\"font-weight: bolder; font-size:x-large;\">Samedi 25 septembre à partir de 18h.</p>
    <p class=\"mb-0.5 text-right\" style=\"font-style:italic; font-size: small;\">Carole, Léa, Mathilde et Dudu.</p>
    <p class=\"mb-1 text-right\" style=\"font-style:italic; font-size: small;\">Love & Galva forever.</p>
</div>

<div class=\"container mt-10 mb-40\">
    <div class=\"row align-items-center\">
        <div class=\"col-xl-5 col-lg-6\">
            <div class=\"text-center\">
                <h2 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em; color:#EE8126;\">Cette
                    année le marteau reste au vestiaire !
                    <h3 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em;\">Mais on garde le BAL
                        !</h3>
                    <hr />
                    <p class=\"mb-1.5 wow fadeInDown\" data-wow-delay=\".4s\">2 DJ’s , 1 scène, pour une très grande soirée
                        !!</p>
                    <p class=\"mb-0.25 wow fadeInDown\" data-wow-delay=\".4s\">“Viens avec tes potes et tes baskets pour
                        danser avec”</p>
                    <p class=\"mb-1.5 wow fadeInDown\" data-wow-delay=\".4s\">“Viens avec ton verre et laisse toi faire”</p>
                    <p class=\"mb-1.5 wow fadeInDown\" data-wow-delay=\".4s\">Sur place SNACK / BUVETTE</p>
                    <p class=\"mb-1.5 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-size: 25px;\">CONCERT GRATUIT</p>
                    <p class=\"mb-1.5 wow fadeInDown\" data-wow-delay=\".4s\">Salle Prévert de Meyrié 38300</p>
                    <p class=\"mb-1.5 wow fadeInDown\" data-wow-delay=\".4s\">Info: <a
                            href=\"mailto:lebruitdumarteau@gmail.com\">lebruitdumarteau@gmail.com</a></p>
            </div>
        </div>

        <div class=\"col-xl-7 col-lg-6\">
            <div class=\"text-center\">
                <div class=\"d-inline-block pt-3\">
                    <img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero-img.jpg");
        echo "\" alt=\"\" class=\"wow fadeInRight border\"
                        data-wow-delay=\".5s\" style=\"max-width: 80%;\">
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 77
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("service"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 78
        echo "
";
        // line 79
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/presqueBdM.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 79,  137 => 78,  133 => 77,  122 => 69,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

{% component 'siteSearchInclude' %}

{% partial 'alert-annulation' %}

<!-- ========================= Page Presque BdM temporaire ========================= -->

<div class=\"container text-center\">
    <h2 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em; color:#666666;\">Parce qu’on ne
        voulait pas se passer du Bal
        des ferrailleux</h2>
    <h1 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 2em; color:#EE8126;\">Le Presque BDM</h1>
    <p class=\"mb-2 wow fadeInLeft\" data-wow-delay=\".4s\" style=\"font-size: 1em;\">aura lieu le <b>25 Sept 2021</b> à
        Meyrié (38)</p>
</div>

<div class=\"container\">
    <hr />
</div>

<div class=\"container text-center mt-10 mb-10 wow fadeInDown\" data-wow-delay=\".4s\">
    <p class=\"mb-0.5\">2021 devrait être l’année de toutes les reprises, une année durant laquelle on RE-fait, une année
        où on RE-trouve nos habitudes et où on s’en invente d’autres ! </p>
    <p class=\"mb-0.5\">Pour l’équipe des fous furieux de la ferraille aussi.</p>
    <p class=\"mb-0.5\">Cet hiver, dans nos petites caboches il n'y avait plus beaucoup de perspectives, pas tellement
        d’espoir de RE-prendre…</p>
    <p class=\"mb-0.5\">Par un triste soir de février nous avons dû nous rendre à l'évidence et accepter qu’il n' y aurait
        pas de “Championnat de monteur d’échafaudage en 2021”... </p>
    <p class=\"mb-0.5\">Mais il restait dans l’air un brin de folie, une lueur qu’on a pas réussi à faire taire, ce
        scintillement qui restait c’était de l’envie.</p>
    <p class=\"mb-0.5\" style=\"font-weight: bolder;\"></p>
    <p class=\"mb-0.5\">L’envie de voir la salle prévert occupée, l’envie d’honorer nos engagements et surtout l'envie de
        se retrouver malgré tout et sous n'importe quel prétexte.</p>
    <p class=\"mb-0.5\" style=\"font-weight: bolder;\">Cette envie a donné naissance à :</p>
    <h2 class=\"mb-0.5\" style=\"font-size:x-large\">Le Presque BdM</h2>
    <p class=\"mb-0.5\">Une soirée pour se retrouver, faire danser toute la famille, marquer le coup et surtout ne pas
        s’oublier.</p>
    <p class=\"mb-0.5\" style=\"font-weight: bolder; font-size:x-large;\">Samedi 25 septembre à partir de 18h.</p>
    <p class=\"mb-0.5 text-right\" style=\"font-style:italic; font-size: small;\">Carole, Léa, Mathilde et Dudu.</p>
    <p class=\"mb-1 text-right\" style=\"font-style:italic; font-size: small;\">Love & Galva forever.</p>
</div>

<div class=\"container mt-10 mb-40\">
    <div class=\"row align-items-center\">
        <div class=\"col-xl-5 col-lg-6\">
            <div class=\"text-center\">
                <h2 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em; color:#EE8126;\">Cette
                    année le marteau reste au vestiaire !
                    <h3 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em;\">Mais on garde le BAL
                        !</h3>
                    <hr />
                    <p class=\"mb-1.5 wow fadeInDown\" data-wow-delay=\".4s\">2 DJ’s , 1 scène, pour une très grande soirée
                        !!</p>
                    <p class=\"mb-0.25 wow fadeInDown\" data-wow-delay=\".4s\">“Viens avec tes potes et tes baskets pour
                        danser avec”</p>
                    <p class=\"mb-1.5 wow fadeInDown\" data-wow-delay=\".4s\">“Viens avec ton verre et laisse toi faire”</p>
                    <p class=\"mb-1.5 wow fadeInDown\" data-wow-delay=\".4s\">Sur place SNACK / BUVETTE</p>
                    <p class=\"mb-1.5 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-size: 25px;\">CONCERT GRATUIT</p>
                    <p class=\"mb-1.5 wow fadeInDown\" data-wow-delay=\".4s\">Salle Prévert de Meyrié 38300</p>
                    <p class=\"mb-1.5 wow fadeInDown\" data-wow-delay=\".4s\">Info: <a
                            href=\"mailto:lebruitdumarteau@gmail.com\">lebruitdumarteau@gmail.com</a></p>
            </div>
        </div>

        <div class=\"col-xl-7 col-lg-6\">
            <div class=\"text-center\">
                <div class=\"d-inline-block pt-3\">
                    <img src=\"{{ 'assets/img/hero/hero-img.jpg' | theme }}\" alt=\"\" class=\"wow fadeInRight border\"
                        data-wow-delay=\".5s\" style=\"max-width: 80%;\">
                </div>
            </div>
        </div>
    </div>
</div>

{% partial 'service' %}

{% partial 'footer' %}", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/presqueBdM.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "component" => 3);
        static $filters = array("theme" => 69);
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
