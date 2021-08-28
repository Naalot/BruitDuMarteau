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

/* D:\xampp\htdocs\bdm_october/themes/BdM/pages/contact.htm */
class __TwigTemplate_f1757c98e249e01695d2b48a931f3be22c3942e0e4daa64743f2d1464b9d406a extends \Twig\Template
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
<!--<section class=\"page-banner-section pt-35 pb-35 img-bg\"
    style=\"background-image: url('";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/common-bg.svg");
        echo "')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"banner-content\">
                    <h2 class=\"text-white\">Nous contacter</h2>
                    <div class=\"page-breadcrumb\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Accueil</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->

<!-- ========================= contact-section start ========================= -->
<section class=\"contact-section pt-130\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-6\">
                <div class=\"contact-item-wrapper\">
                    <div class=\"row\">
                        <!-- <div class=\"col-12 col-md-6 col-xl-12\">
                            <div class=\"contact-item\">
                                <div class=\"contact-icon\">
                                    <i class=\"lni lni-envelope\"></i>
                                </div>
                                <div class=\"contact-content\">
                                    <h4>Écrivez nous à</h4>
                                    <p><a href=\"mailto:lebruitdumarteau@gmail.com\">lebruitdumarteau@gmail.com</a></p>
                                </div>
                            </div>
                        </div>-->
                    </div>

                    <div class=\"col-12 col-md-6 col-xl-12\">
                        <div class=\"contact-item\">
                            <div class=\"contact-icon\">
                                <i class=\"lni lni-phone\"></i>
                            </div>
                            <div class=\"contact-content\">
                                <h4>Contacts</h4>
                                <h5 class=\"mb-2\">Le Bruit du Marteau</h5>
                                <p>Les pilotes du Bruit du Marteau sont :</p>
                                <div class=\"container d-flex\">
                                    <ul>
                                        <li>- Léa : Présidente
                                        <li>06 77 45 81 00</li>
                                        </li>
                                        <li>- Carole : Régie générale
                                        <li>06 61 10 80 24</li>
                                        </li>
                                        <li>- Matthieu : Technique
                                        <li>06 62 05 55 95</li>
                                        </li>
                                        <li>- Claude : Trésorière
                                        </li>
                                        <li>- & Mathilde
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-12 col-md-6 col-xl-12\">
                        <div class=\"contact-item col-12 col-md-6 col-xl-12\">
                            <div class=\"contact-icon\">
                                <i class=\"lni lni-information\"></i>
                            </div>
                            <div class=\"contact-content\">
                                <h4>Le Bruit du Marteau </h4>
                                <h4 style=\"font-size: 0.90em;\">est un évènement porté par l'association :</h4>
                                <h4>S.C.A.F.F.</h4>
                                <p style=\"font-size: 0.80em; font-weight: bold;\">Super Classe Association Folle Furieuse
                                </p>
                                <p>association de loi 1901,</p>
                                <p>Le siège social est situé</p>
                                <p style=\"font-size: 0.90em;\">Mairie de Meyrié, Place de l'église,</p>
                                <p>38300 Meyrié</p>
                                <p style=\"font-size: 0.90em;\">Siret : 809 765 316 00017</p>
                                <p>APE : 9499Z</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 101
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("genericForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 102
        echo "
        </div>
    </div>
</section>

<!-- ========================= contact-section end ========================= -->

<!-- ========================= map-section end ========================= -->
<section class=\"map-section\">
    <div class=\"map-container m-3\">
        <iframe
            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.4481256559357!2d5.292300715560727!3d45.56142627910232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xae887ce8a6c8b1bf!2sLe%20Bruit%20du%20Marteau!5e0!3m2!1sfr!2sfr!4v1629269553021!5m2!1sfr!2sfr\"
            width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
    </div>
    </div>
</section>
<!-- ========================= map-section end ========================= -->

";
        // line 120
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("service"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 121
        echo "
";
        // line 122
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 122,  185 => 121,  181 => 120,  161 => 102,  157 => 101,  61 => 8,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

{% component 'siteSearchInclude' %}

{% partial 'alert-annulation' %}

<!--<section class=\"page-banner-section pt-35 pb-35 img-bg\"
    style=\"background-image: url('{{ 'assets/img/bg/common-bg.svg' | theme }}')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"banner-content\">
                    <h2 class=\"text-white\">Nous contacter</h2>
                    <div class=\"page-breadcrumb\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"/\">Accueil</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->

<!-- ========================= contact-section start ========================= -->
<section class=\"contact-section pt-130\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-6\">
                <div class=\"contact-item-wrapper\">
                    <div class=\"row\">
                        <!-- <div class=\"col-12 col-md-6 col-xl-12\">
                            <div class=\"contact-item\">
                                <div class=\"contact-icon\">
                                    <i class=\"lni lni-envelope\"></i>
                                </div>
                                <div class=\"contact-content\">
                                    <h4>Écrivez nous à</h4>
                                    <p><a href=\"mailto:lebruitdumarteau@gmail.com\">lebruitdumarteau@gmail.com</a></p>
                                </div>
                            </div>
                        </div>-->
                    </div>

                    <div class=\"col-12 col-md-6 col-xl-12\">
                        <div class=\"contact-item\">
                            <div class=\"contact-icon\">
                                <i class=\"lni lni-phone\"></i>
                            </div>
                            <div class=\"contact-content\">
                                <h4>Contacts</h4>
                                <h5 class=\"mb-2\">Le Bruit du Marteau</h5>
                                <p>Les pilotes du Bruit du Marteau sont :</p>
                                <div class=\"container d-flex\">
                                    <ul>
                                        <li>- Léa : Présidente
                                        <li>06 77 45 81 00</li>
                                        </li>
                                        <li>- Carole : Régie générale
                                        <li>06 61 10 80 24</li>
                                        </li>
                                        <li>- Matthieu : Technique
                                        <li>06 62 05 55 95</li>
                                        </li>
                                        <li>- Claude : Trésorière
                                        </li>
                                        <li>- & Mathilde
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-12 col-md-6 col-xl-12\">
                        <div class=\"contact-item col-12 col-md-6 col-xl-12\">
                            <div class=\"contact-icon\">
                                <i class=\"lni lni-information\"></i>
                            </div>
                            <div class=\"contact-content\">
                                <h4>Le Bruit du Marteau </h4>
                                <h4 style=\"font-size: 0.90em;\">est un évènement porté par l'association :</h4>
                                <h4>S.C.A.F.F.</h4>
                                <p style=\"font-size: 0.80em; font-weight: bold;\">Super Classe Association Folle Furieuse
                                </p>
                                <p>association de loi 1901,</p>
                                <p>Le siège social est situé</p>
                                <p style=\"font-size: 0.90em;\">Mairie de Meyrié, Place de l'église,</p>
                                <p>38300 Meyrié</p>
                                <p style=\"font-size: 0.90em;\">Siret : 809 765 316 00017</p>
                                <p>APE : 9499Z</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {% component 'genericForm' %}

        </div>
    </div>
</section>

<!-- ========================= contact-section end ========================= -->

<!-- ========================= map-section end ========================= -->
<section class=\"map-section\">
    <div class=\"map-container m-3\">
        <iframe
            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.4481256559357!2d5.292300715560727!3d45.56142627910232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xae887ce8a6c8b1bf!2sLe%20Bruit%20du%20Marteau!5e0!3m2!1sfr!2sfr!4v1629269553021!5m2!1sfr!2sfr\"
            width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
    </div>
    </div>
</section>
<!-- ========================= map-section end ========================= -->

{% partial 'service' %}

{% partial 'footer' %}", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/contact.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "component" => 3);
        static $filters = array("theme" => 8);
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
