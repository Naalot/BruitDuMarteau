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

/* D:\xampp\htdocs\bdm_october/themes/BdM/pages/championnat.htm */
class __TwigTemplate_298c64bde0e45bd2ca692c7c5e3ce6bc400f4f4401b49275cddbd46f8191193b extends \Twig\Template
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
<!-- ========================= Page championnat ========================= -->

<div class=\"container text-center\">
    <h1 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 2em; color:#EE8126;\">Le Bruit du Marteau
    </h1>
</div>

<div class=\"container\">
    <hr />
</div>

<div class=\"container text-center mt-25 mb-10 wow fadeInDown\" data-wow-delay=\".4s\">
    <p class=\"mb-0.5\">Venez d??couvrir l???enfer du d??cor au grand bal des ferrailleux</p>
    <p>??? Le galva contre la sueur, La mati??re contre l???esprit, Les muscles contre la connerie, La gravit?? contre
        l???humour??? ???</p>
    <p style=\"font-weight: bolder;\">Ne ratez pas le premier championnat de monteurs d'??chafaudage.</p>
</div>

<div class=\"container mt-10 mb-40\">
    <div class=\"row align-items-center\">
        <div class=\"col-xl-5 col-lg-6\">
            <div class=\"text-center\">
                <h2 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em; color:#EE8126;\">Le Bruit
                    du Marteau</h2>
                <h3 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em;\">Le Championnat</h3>
                <hr />
                <p class=\"mb-0.5 wow fadeInDown\" data-wow-delay=\".4s\">Le stade de la salle des f??tes se transforme en
                    terrain de jeu pour tous les monteurs et techniciens. </p>
                <p class=\"mb-2 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-weight: bolder;\">Un seul mot d???ordre :
                    Valoriser les hommes, les comp??tences et les structures, en s??curit??.</p>
                <p class=\"mb-2 wow fadeInDown\" data-wow-delay=\".4s\">Fair-play, ??change, reconnaissance et ??coute sont
                    les valeurs sur lesquelles est construit ce championnat.</p>
                <p class=\"mb-0.5 wow fadeInDown\" data-wow-delay=\".4s\">En collaboration avec des professionnels du
                    m??tier nous avons mis au point 5 ??preuves originales :</p>
                <p class=\"mb-3 wow fadeInDown\" data-wow-delay=\".4s\">Le lac des Scaffs, ballet pour une moise ; l'Arche
                    des triomphes ; Fer et D??faire ; Dessines et guides moi ; Le Poteau rose.</p>
                <a href=\"";
        // line 43
        echo url("/inscription");
        echo "\" class=\"mb-4 wow fadeInDown theme-btn\"
                    data-wow-delay=\".4s\">Inscription concurrents</a>
                <p class=\"mb-3 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-weight: bolder;\">B??n??vole sans vous on
                    le fait pas !</p>
                <a href=\"";
        // line 47
        echo url("/inscription");
        echo "\" class=\"mb-3 wow fadeInDown theme-btn\"
                    data-wow-delay=\".4s\">Inscription volontaires</a>
            </div>
        </div>
        
        <div class=\"col-xl-7 col-lg-6\">
            <div class=\"text-center\">
                <div class=\"d-inline-block pt-5\">
                    <img class=\"border border-dark border-4\" src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/championnat_bdm.jpg");
        echo "\"
                        alt=\"\" class=\"wow fadeInRight\" data-wow-delay=\".5s\" style=\"max-width: 100%;\">
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"container text-center mt-25 mb-10 wow fadeInDown\" data-wow-delay=\".4s\">
    <p class=\"mb-0.5\">Les ??preuves opposent les ??quipes de monteurs. En abordant toutes les notions du montage
        d?????chafaudage, ces ??preuves sont techniques mais restent ludiques. Le jury est compos?? de professionnels du
        domaine.
        Ils notent chaque ??quipe sur divers crit??res : respect du travail en s??curit??, performance, chrono, travail
        d?????quipe, cr??ativit??.</p>
    <p class=\"mb-0.5\" style=\"font-weight: bolder;\">Un objectif : Donner le meilleur de soi et remporter le ?? Darak d???or
        ?? !</p>
    <p class=\"mb-0.5\">Le Bruit du Marteau s???adresse ??galement ?? un public non initi??, et aux familles et amis des
        monteurs. Venez comprendre un m??tier, d??couvrir une discipline particuli??re ou tout simplement profiter d???un
        moment festif autour de la musique et de l'??v??nement sportif.
        Des jeux et animations autour de la ferraille pour petits et grands vous accueilleront tout au long de la
        journ??e ainsi que toute l?????quipe du Snack/Bar de la Coupelle qui seront l?? pour vous restaurer et vous
        d??ssoiffer !</p>
</div>

";
        // line 79
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("service"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 80
        echo "
";
        // line 81
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/championnat.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 81,  145 => 80,  141 => 79,  114 => 55,  103 => 47,  96 => 43,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

{% component 'siteSearchInclude' %}

{% partial 'alert-annulation' %}

<!-- ========================= Page championnat ========================= -->

<div class=\"container text-center\">
    <h1 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 2em; color:#EE8126;\">Le Bruit du Marteau
    </h1>
</div>

<div class=\"container\">
    <hr />
</div>

<div class=\"container text-center mt-25 mb-10 wow fadeInDown\" data-wow-delay=\".4s\">
    <p class=\"mb-0.5\">Venez d??couvrir l???enfer du d??cor au grand bal des ferrailleux</p>
    <p>??? Le galva contre la sueur, La mati??re contre l???esprit, Les muscles contre la connerie, La gravit?? contre
        l???humour??? ???</p>
    <p style=\"font-weight: bolder;\">Ne ratez pas le premier championnat de monteurs d'??chafaudage.</p>
</div>

<div class=\"container mt-10 mb-40\">
    <div class=\"row align-items-center\">
        <div class=\"col-xl-5 col-lg-6\">
            <div class=\"text-center\">
                <h2 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em; color:#EE8126;\">Le Bruit
                    du Marteau</h2>
                <h3 class=\"mb-10 wow fadeInDown\" data-wow-delay=\".2s\" style=\"font-size: 1.5em;\">Le Championnat</h3>
                <hr />
                <p class=\"mb-0.5 wow fadeInDown\" data-wow-delay=\".4s\">Le stade de la salle des f??tes se transforme en
                    terrain de jeu pour tous les monteurs et techniciens. </p>
                <p class=\"mb-2 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-weight: bolder;\">Un seul mot d???ordre :
                    Valoriser les hommes, les comp??tences et les structures, en s??curit??.</p>
                <p class=\"mb-2 wow fadeInDown\" data-wow-delay=\".4s\">Fair-play, ??change, reconnaissance et ??coute sont
                    les valeurs sur lesquelles est construit ce championnat.</p>
                <p class=\"mb-0.5 wow fadeInDown\" data-wow-delay=\".4s\">En collaboration avec des professionnels du
                    m??tier nous avons mis au point 5 ??preuves originales :</p>
                <p class=\"mb-3 wow fadeInDown\" data-wow-delay=\".4s\">Le lac des Scaffs, ballet pour une moise ; l'Arche
                    des triomphes ; Fer et D??faire ; Dessines et guides moi ; Le Poteau rose.</p>
                <a href=\"{{ url('/inscription') }}\" class=\"mb-4 wow fadeInDown theme-btn\"
                    data-wow-delay=\".4s\">Inscription concurrents</a>
                <p class=\"mb-3 wow fadeInDown\" data-wow-delay=\".4s\" style=\"font-weight: bolder;\">B??n??vole sans vous on
                    le fait pas !</p>
                <a href=\"{{ url('/inscription') }}\" class=\"mb-3 wow fadeInDown theme-btn\"
                    data-wow-delay=\".4s\">Inscription volontaires</a>
            </div>
        </div>
        
        <div class=\"col-xl-7 col-lg-6\">
            <div class=\"text-center\">
                <div class=\"d-inline-block pt-5\">
                    <img class=\"border border-dark border-4\" src=\"{{ 'assets/img/hero/championnat_bdm.jpg' | theme }}\"
                        alt=\"\" class=\"wow fadeInRight\" data-wow-delay=\".5s\" style=\"max-width: 100%;\">
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"container text-center mt-25 mb-10 wow fadeInDown\" data-wow-delay=\".4s\">
    <p class=\"mb-0.5\">Les ??preuves opposent les ??quipes de monteurs. En abordant toutes les notions du montage
        d?????chafaudage, ces ??preuves sont techniques mais restent ludiques. Le jury est compos?? de professionnels du
        domaine.
        Ils notent chaque ??quipe sur divers crit??res : respect du travail en s??curit??, performance, chrono, travail
        d?????quipe, cr??ativit??.</p>
    <p class=\"mb-0.5\" style=\"font-weight: bolder;\">Un objectif : Donner le meilleur de soi et remporter le ?? Darak d???or
        ?? !</p>
    <p class=\"mb-0.5\">Le Bruit du Marteau s???adresse ??galement ?? un public non initi??, et aux familles et amis des
        monteurs. Venez comprendre un m??tier, d??couvrir une discipline particuli??re ou tout simplement profiter d???un
        moment festif autour de la musique et de l'??v??nement sportif.
        Des jeux et animations autour de la ferraille pour petits et grands vous accueilleront tout au long de la
        journ??e ainsi que toute l?????quipe du Snack/Bar de la Coupelle qui seront l?? pour vous restaurer et vous
        d??ssoiffer !</p>
</div>

{% partial 'service' %}

{% partial 'footer' %}", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/championnat.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "component" => 3);
        static $filters = array("theme" => 55);
        static $functions = array("url" => 43);

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
