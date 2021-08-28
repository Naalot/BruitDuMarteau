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

/* D:\xampp\htdocs\bdm_october/themes/BdM/partials/header.htm */
class __TwigTemplate_a4e3e09ab575441a49d4a9bfbd62c5ad3b26fc21718de68ce0a8c95e9f97add2 extends \Twig\Template
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
        echo "<!-- ========================= Partiel header ========================= -->

<header class=\"header navbar-area position-sticky mb-3\">
    <div class=\"container-fluid\" style=\"padding: 0;\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-12\">
                <nav class=\"navbar navbar-expand-lg pt-1 pb-1\"
                    style=\"background-color: #EE8126; padding: 1em; color:#666666;\">
                    <a class=\"navbar-brand\" href=\"";
        // line 9
        echo url("/");
        echo "\">
                        <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo/BdMlogo.png");
        echo "\" alt=\"Logo\">
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                        data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"toggler-icon\"></span>
                        <span class=\"toggler-icon\"></span>
                        <span class=\"toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarSupportedContent\">

                        <ul id=\"nav\" class=\"navbar-nav ml-auto\">

                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"";
        // line 25
        echo url("/");
        echo "\">Accueil</a>
                            </li>

                            <li class=\"nav-item dropdown\">
                                <!--<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    Infos
                                </a>-->
                                <a class=\"nav-link\" href=\"";
        // line 32
        echo url("/Presque_BdM");
        echo "\" id=\"navbarDropdown\" role=\"button\"
                                    data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    Le Presque BdM
                                </a>
                            </li>

                            <li class=\"nav-item dropdown\"><a class=\"page-scroll\"
                                    href=\"";
        // line 39
        echo url("/championnat");
        echo "\">Championnat</a></li>

                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"";
        // line 42
        echo url("/inscription");
        echo "\">Inscription</a>
                            </li>

                            <!-- ========================= Liens vers formulaires d'inscription désactivés ========================= -->

                            <!--<li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\"
                                    data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    Inscriptions
                                </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 53
        echo url("/inscription_scaff");
        echo "\">SCAFF</a></li>
                                    <li>
                                        <hr class=\"dropdown-divider\">
                                    </li>
                                    <li><a class=\"dropdown-item\"
                                            href=\"";
        // line 58
        echo url("/inscription_benevoles");
        echo "\">Bénévoles</a></li>
                                </ul>
                            </li>-->

                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"";
        // line 63
        echo url("/gallery");
        echo "\">Galerie</a>
                            </li>

                            <!-- ========================= Ajout futur \"Contact\" / \"Le lieu\" / \"Partenaires\" ========================= -->

                            <li class=\"nav-item dropdown\">
                                <!--<a class=\"nav-link dropdown-toggle\" href=\"";
        // line 69
        echo url("/contact");
        echo "\"
                                    id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\"
                                    aria-expanded=\"false\">
                                    Contacts
                                </a>-->
                                <a class=\"nav-link\" href=\"";
        // line 74
        echo url("/contact");
        echo "\" id=\"navbarDropdownMenuLink\"
                                    role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    Contacts
                                </a>
                                <!--
                                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                  <li><a class=\"dropdown-item\" href=\"";
        // line 80
        echo url("/contact");
        echo "\">Nous contacter</a></li>
                                  <li><hr class=\"dropdown-divider\"></li>
                                  <li><a class=\"dropdown-item\" href=\"";
        // line 82
        echo url("/404");
        echo "\">Partenaires</a></li>
                                </ul>-->
                            </li>

                        </ul>

                        <!-- ========================= Barre de recherche ========================= -->

                        <form action=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("recherche");
        echo "\" method=\"get\" class=\"search-form\">
                            <input name=\"q\" type=\"text\" placeholder=\"Recherche\" autocomplete=\"off\">
                            <button type=\"submit\"><i class=\"lni lni-search-alt\"></i></button>
                        </form>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/themes/BdM/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 90,  158 => 82,  153 => 80,  144 => 74,  136 => 69,  127 => 63,  119 => 58,  111 => 53,  97 => 42,  91 => 39,  81 => 32,  71 => 25,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ========================= Partiel header ========================= -->

<header class=\"header navbar-area position-sticky mb-3\">
    <div class=\"container-fluid\" style=\"padding: 0;\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-12\">
                <nav class=\"navbar navbar-expand-lg pt-1 pb-1\"
                    style=\"background-color: #EE8126; padding: 1em; color:#666666;\">
                    <a class=\"navbar-brand\" href=\"{{ url('/') }}\">
                        <img src=\"{{ 'assets/img/logo/BdMlogo.png' | theme }}\" alt=\"Logo\">
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                        data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"toggler-icon\"></span>
                        <span class=\"toggler-icon\"></span>
                        <span class=\"toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse sub-menu-bar\" id=\"navbarSupportedContent\">

                        <ul id=\"nav\" class=\"navbar-nav ml-auto\">

                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"{{ url('/') }}\">Accueil</a>
                            </li>

                            <li class=\"nav-item dropdown\">
                                <!--<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    Infos
                                </a>-->
                                <a class=\"nav-link\" href=\"{{ url('/Presque_BdM') }}\" id=\"navbarDropdown\" role=\"button\"
                                    data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    Le Presque BdM
                                </a>
                            </li>

                            <li class=\"nav-item dropdown\"><a class=\"page-scroll\"
                                    href=\"{{ url('/championnat') }}\">Championnat</a></li>

                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"{{ url('/inscription') }}\">Inscription</a>
                            </li>

                            <!-- ========================= Liens vers formulaires d'inscription désactivés ========================= -->

                            <!--<li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\"
                                    data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    Inscriptions
                                </a>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                    <li><a class=\"dropdown-item\" href=\"{{ url('/inscription_scaff') }}\">SCAFF</a></li>
                                    <li>
                                        <hr class=\"dropdown-divider\">
                                    </li>
                                    <li><a class=\"dropdown-item\"
                                            href=\"{{ url('/inscription_benevoles') }}\">Bénévoles</a></li>
                                </ul>
                            </li>-->

                            <li class=\"nav-item\">
                                <a class=\"page-scroll\" href=\"{{ url('/gallery') }}\">Galerie</a>
                            </li>

                            <!-- ========================= Ajout futur \"Contact\" / \"Le lieu\" / \"Partenaires\" ========================= -->

                            <li class=\"nav-item dropdown\">
                                <!--<a class=\"nav-link dropdown-toggle\" href=\"{{ url('/contact') }}\"
                                    id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\"
                                    aria-expanded=\"false\">
                                    Contacts
                                </a>-->
                                <a class=\"nav-link\" href=\"{{ url('/contact') }}\" id=\"navbarDropdownMenuLink\"
                                    role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    Contacts
                                </a>
                                <!--
                                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                  <li><a class=\"dropdown-item\" href=\"{{ url('/contact') }}\">Nous contacter</a></li>
                                  <li><hr class=\"dropdown-divider\"></li>
                                  <li><a class=\"dropdown-item\" href=\"{{ url('/404') }}\">Partenaires</a></li>
                                </ul>-->
                            </li>

                        </ul>

                        <!-- ========================= Barre de recherche ========================= -->

                        <form action=\"{{ 'recherche' | page }}\" method=\"get\" class=\"search-form\">
                            <input name=\"q\" type=\"text\" placeholder=\"Recherche\" autocomplete=\"off\">
                            <button type=\"submit\"><i class=\"lni lni-search-alt\"></i></button>
                        </form>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/partials/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 10, "page" => 90);
        static $functions = array("url" => 9);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'page'],
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
