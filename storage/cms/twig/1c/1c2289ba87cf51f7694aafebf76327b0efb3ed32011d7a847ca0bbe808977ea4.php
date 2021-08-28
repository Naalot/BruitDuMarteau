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

/* D:\xampp\htdocs\bdm_october/themes/BdM/partials/footer.htm */
class __TwigTemplate_cb773e0005ff87c6863d4dd326c8b0389f937e32945f84e7aa4acc2f0d36c887 extends \Twig\Template
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
        echo "<!-- ========================= Partiel pied de page ========================= -->

<footer class=\"footer pt-10\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"footer-widget mb-2 wow fadeInLeft\" data-wow-delay=\".2s\">
                    <a href=\"index.html\" class=\"logo mb-10\"><img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo/BdMlogo_white.png");
        echo "\"
                            alt=\"logo\" style=\"max-width: 6em\"></a>
                    <p class=\"mb-10 footer-desc\" style=\"font-size: 13px;\">Le Bruit du Marteau est une compétition
                        décalée qui rassemble les
                        professionnels et le grand public. Un moment convivial et différent où tout le monde peut
                        trouver sa place.</p>
                </div>
            </div>

            <div class=\"col-xl-2 offset-xl-1 col-lg-2 col-md-6\">
                <div class=\"footer-widget mb-5 wow fadeInUp\" data-wow-delay=\".4s\">
                    <h4>Navigation</h4>
                    <ul class=\"footer-links\">
                        <li>
                            <a href=\"";
        // line 22
        echo url("/");
        echo "\">Accueil</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 25
        echo url("/gallery");
        echo "\">Galerie</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 28
        echo url("/contact");
        echo "\">Nous contacter</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 31
        echo url("/mentions_legales");
        echo "\">Mentions légales</a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class=\"col-xl-3 col-lg-3 col-md-6\">
                <div class=\"footer-widget mb-60 wow fadeInUp\" data-wow-delay=\".6s\">
                    <h4>Activités</h4>
                    <ul class=\"footer-links\">

                        <li>
                            <a href=\"";
        // line 44
        echo url("/Presque_BdM");
        echo "\">Le Presque BdM</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 47
        echo url("/championnat");
        echo "\">Championnat</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 50
        echo url("/inscription");
        echo "\">Inscription</a>
                        </li>

                    </ul>
                </div>
            </div>

            <!-- ========================= Div temporairement désactivée \"adresse + tel\" ========================= -->

            <!--<div class=\"col-xl-3 col-lg-3 col-md-6\">
                <div class=\"footer-widget mb-60 wow fadeInRight\" data-wow-delay=\".8s\">
                    <h4>Contact</h4>
                    <ul class=\"footer-contact\">
                        <li>
                            <p>+336 77 45 81 00</p>
                        </li>
                        <li>
                            <a href=\"";
        // line 67
        echo url("/contact");
        echo "\">lebruitdumarteau@gmail.com</a>
                        </li>
                        <li>
                            <p>Mairie de Meyrié, Place de l'église,
                                38300 Meyrié</p>
                        </li>
                    </ul>
                </div>
            </div>-->

        </div>

        <div class=\"copyright-area\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"footer-social-links\">
                        <ul class=\"d-flex\">
                            <li><a href=\"https://fr-fr.facebook.com/lebruitdumarteau/\"><i
                                        class=\"lni lni-facebook-filled\"></i></a></li>
                            <!--<li><a href=\"javascript:void(0)\"><i class=\"lni lni-twitter-filled\"></i></a></li>-->
                            <!--<li><a href=\"javascript:void(0)\"><i class=\"lni lni-linkedin-original\"></i></a></li>-->
                            <li><a href=\"https://www.instagram.com/s.c.a.f.f/\"><i
                                        class=\"lni lni-instagram-filled\"></i></a></li>
                            <li><a href=\"";
        // line 90
        echo url("/contact");
        echo "\"><i class=\"lni lni-envelope\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6\">

<!-- ========================= Lien vers portfolio LB ========================= -->

                    <!--<p class=\"wow fadeInUp\" data-wow-delay=\".3s\">\".\"<a
                        href=\"#\" rel=\"nofollow\">GrayGrids</a></p>-->

                    <p>© <script>
                            new Date().getFullYear() > 2016 && document.write(\" \" + new Date().getFullYear());
                        </script> | Le Bruit du Marteau</p>
                </div>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/themes/BdM/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 90,  131 => 67,  111 => 50,  105 => 47,  99 => 44,  83 => 31,  77 => 28,  71 => 25,  65 => 22,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ========================= Partiel pied de page ========================= -->

<footer class=\"footer pt-10\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"footer-widget mb-2 wow fadeInLeft\" data-wow-delay=\".2s\">
                    <a href=\"index.html\" class=\"logo mb-10\"><img src=\"{{ 'assets/img/logo/BdMlogo_white.png' | theme }}\"
                            alt=\"logo\" style=\"max-width: 6em\"></a>
                    <p class=\"mb-10 footer-desc\" style=\"font-size: 13px;\">Le Bruit du Marteau est une compétition
                        décalée qui rassemble les
                        professionnels et le grand public. Un moment convivial et différent où tout le monde peut
                        trouver sa place.</p>
                </div>
            </div>

            <div class=\"col-xl-2 offset-xl-1 col-lg-2 col-md-6\">
                <div class=\"footer-widget mb-5 wow fadeInUp\" data-wow-delay=\".4s\">
                    <h4>Navigation</h4>
                    <ul class=\"footer-links\">
                        <li>
                            <a href=\"{{ url('/') }}\">Accueil</a>
                        </li>
                        <li>
                            <a href=\"{{ url('/gallery') }}\">Galerie</a>
                        </li>
                        <li>
                            <a href=\"{{ url('/contact') }}\">Nous contacter</a>
                        </li>
                        <li>
                            <a href=\"{{ url('/mentions_legales') }}\">Mentions légales</a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class=\"col-xl-3 col-lg-3 col-md-6\">
                <div class=\"footer-widget mb-60 wow fadeInUp\" data-wow-delay=\".6s\">
                    <h4>Activités</h4>
                    <ul class=\"footer-links\">

                        <li>
                            <a href=\"{{ url('/Presque_BdM') }}\">Le Presque BdM</a>
                        </li>
                        <li>
                            <a href=\"{{ url('/championnat') }}\">Championnat</a>
                        </li>
                        <li>
                            <a href=\"{{ url('/inscription') }}\">Inscription</a>
                        </li>

                    </ul>
                </div>
            </div>

            <!-- ========================= Div temporairement désactivée \"adresse + tel\" ========================= -->

            <!--<div class=\"col-xl-3 col-lg-3 col-md-6\">
                <div class=\"footer-widget mb-60 wow fadeInRight\" data-wow-delay=\".8s\">
                    <h4>Contact</h4>
                    <ul class=\"footer-contact\">
                        <li>
                            <p>+336 77 45 81 00</p>
                        </li>
                        <li>
                            <a href=\"{{ url('/contact') }}\">lebruitdumarteau@gmail.com</a>
                        </li>
                        <li>
                            <p>Mairie de Meyrié, Place de l'église,
                                38300 Meyrié</p>
                        </li>
                    </ul>
                </div>
            </div>-->

        </div>

        <div class=\"copyright-area\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"footer-social-links\">
                        <ul class=\"d-flex\">
                            <li><a href=\"https://fr-fr.facebook.com/lebruitdumarteau/\"><i
                                        class=\"lni lni-facebook-filled\"></i></a></li>
                            <!--<li><a href=\"javascript:void(0)\"><i class=\"lni lni-twitter-filled\"></i></a></li>-->
                            <!--<li><a href=\"javascript:void(0)\"><i class=\"lni lni-linkedin-original\"></i></a></li>-->
                            <li><a href=\"https://www.instagram.com/s.c.a.f.f/\"><i
                                        class=\"lni lni-instagram-filled\"></i></a></li>
                            <li><a href=\"{{ url('/contact') }}\"><i class=\"lni lni-envelope\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6\">

<!-- ========================= Lien vers portfolio LB ========================= -->

                    <!--<p class=\"wow fadeInUp\" data-wow-delay=\".3s\">\".\"<a
                        href=\"#\" rel=\"nofollow\">GrayGrids</a></p>-->

                    <p>© <script>
                            new Date().getFullYear() > 2016 && document.write(\" \" + new Date().getFullYear());
                        </script> | Le Bruit du Marteau</p>
                </div>
            </div>
        </div>
    </div>
</footer>", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/partials/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 8);
        static $functions = array("url" => 22);

        try {
            $this->sandbox->checkSecurity(
                [],
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
