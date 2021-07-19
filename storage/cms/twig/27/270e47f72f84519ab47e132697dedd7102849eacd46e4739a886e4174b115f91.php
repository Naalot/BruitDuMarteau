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
<section class=\"page-banner-section pt-75 pb-75 img-bg\"
    style=\"background-image: url('";
        // line 6
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
</section>
<!-- ========================= page-banner-section end ========================= -->

<!-- ========================= contact-section start ========================= -->
<section class=\"contact-section pt-130\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-6\">
                <div class=\"contact-item-wrapper\">
                    <div class=\"row\">

                        <div class=\"col-12 col-md-6 col-xl-12\">
                            <div class=\"contact-item\">
                                <div class=\"contact-icon\">
                                    <i class=\"lni lni-envelope\"></i>
                                </div>
                                <div class=\"contact-content\">
                                    <h4>Écrivez nous à</h4>
                                    <p><a href=\"mailto:lebruitdumarteau@gmail.com\">lebruitdumarteau@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
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
                                        <li>- Matthieu : Dir. technique
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

                    <!--<div class=\"col-12 col-md-6 col-xl-12\">
                                    <div class=\"contact-item\">
                                        <div class=\"contact-icon\">
                                            <i class=\"lni lni-alarm-clock\"></i>
                                        </div>
                                        <div class=\"contact-content\">
                                            <h4>Shedule</h4>
                                            <p>24 Hours / 7 Days Open </p>
                                            <p>Office time: 10 AM - 5:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                    </div>-->
                </div>
            </div>
            <!--
            ";
        // line 115
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("genericForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 116
        echo "-->
        </div>
    </div>
</section>

<!-- ========================= contact-section end ========================= -->

<!-- ========================= map-section end ========================= -->
<section class=\"map-section\">
    <div class=\"map-container m-3\">
        <iframe
            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.3934106702686!2d5.293148315834531!3d45.56252673489765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b2ecf74a11a07%3A0x66ae1095d698a0a5!2sVers%20Ruffieu%2C%2038300%20Meyri%C3%A9!5e0!3m2!1sfr!2sfr!4v1624358355947!5m2!1sfr!2sfr\"
            width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
    </div>
    </div>
</section>
<!-- ========================= map-section end ========================= -->

<!-- ========================= client-logo-section start ========================= 
        <section class=\"client-logo-section pt-100 pb-130\">
            <div class=\"container\">
                <div class=\"client-logo-wrapper\">
                    <div class=\"client-logo-carousel d-flex align-items-center justify-content-between\">
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 140
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/uideck-logo.svg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/pagebulb-logo.svg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 146
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/lineicons-logo.svg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 149
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/graygrids-logo.svg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/lineicons-logo.svg");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
<!-- ========================= client-logo-section end ========================= -->

";
        // line 160
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("service"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 161
        echo "
";
        // line 162
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
        return array (  238 => 162,  235 => 161,  231 => 160,  220 => 152,  214 => 149,  208 => 146,  202 => 143,  196 => 140,  170 => 116,  166 => 115,  54 => 6,  50 => 4,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

{% component 'siteSearchInclude' %}

<section class=\"page-banner-section pt-75 pb-75 img-bg\"
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
</section>
<!-- ========================= page-banner-section end ========================= -->

<!-- ========================= contact-section start ========================= -->
<section class=\"contact-section pt-130\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-6\">
                <div class=\"contact-item-wrapper\">
                    <div class=\"row\">

                        <div class=\"col-12 col-md-6 col-xl-12\">
                            <div class=\"contact-item\">
                                <div class=\"contact-icon\">
                                    <i class=\"lni lni-envelope\"></i>
                                </div>
                                <div class=\"contact-content\">
                                    <h4>Écrivez nous à</h4>
                                    <p><a href=\"mailto:lebruitdumarteau@gmail.com\">lebruitdumarteau@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
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
                                        <li>- Matthieu : Dir. technique
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

                    <!--<div class=\"col-12 col-md-6 col-xl-12\">
                                    <div class=\"contact-item\">
                                        <div class=\"contact-icon\">
                                            <i class=\"lni lni-alarm-clock\"></i>
                                        </div>
                                        <div class=\"contact-content\">
                                            <h4>Shedule</h4>
                                            <p>24 Hours / 7 Days Open </p>
                                            <p>Office time: 10 AM - 5:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                    </div>-->
                </div>
            </div>
            <!--
            {% component 'genericForm' %}
-->
        </div>
    </div>
</section>

<!-- ========================= contact-section end ========================= -->

<!-- ========================= map-section end ========================= -->
<section class=\"map-section\">
    <div class=\"map-container m-3\">
        <iframe
            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.3934106702686!2d5.293148315834531!3d45.56252673489765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b2ecf74a11a07%3A0x66ae1095d698a0a5!2sVers%20Ruffieu%2C%2038300%20Meyri%C3%A9!5e0!3m2!1sfr!2sfr!4v1624358355947!5m2!1sfr!2sfr\"
            width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
    </div>
    </div>
</section>
<!-- ========================= map-section end ========================= -->

<!-- ========================= client-logo-section start ========================= 
        <section class=\"client-logo-section pt-100 pb-130\">
            <div class=\"container\">
                <div class=\"client-logo-wrapper\">
                    <div class=\"client-logo-carousel d-flex align-items-center justify-content-between\">
                        <div class=\"client-logo\">
                            <img src=\"{{ 'assets/img/client-logo/uideck-logo.svg' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"{{ 'assets/img/client-logo/pagebulb-logo.svg' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"{{ 'assets/img/client-logo/lineicons-logo.svg' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"{{ 'assets/img/client-logo/graygrids-logo.svg' | theme }}\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"{{ 'assets/img/client-logo/lineicons-logo.svg' | theme }}\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
<!-- ========================= client-logo-section end ========================= -->

{% partial 'service' %}

{% partial 'footer' %}", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/contact.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "component" => 3);
        static $filters = array("theme" => 6);
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
