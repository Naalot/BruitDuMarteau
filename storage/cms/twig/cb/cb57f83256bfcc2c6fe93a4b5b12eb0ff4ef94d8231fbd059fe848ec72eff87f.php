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

/* D:\xampp\htdocs\bdm_october/themes/BdM/layouts/default.htm */
class __TwigTemplate_97ec62cc0f4fa6e580ef3ada9d6517d945f2634c60bb26bae43ab9352079da35 extends \Twig\Template
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
        echo "<!doctype html>
<html class=\"no-js\" lang=\"fr\">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-179282164-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-179282164-1');
    </script>

    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Primary Meta Tags -->
    <title>Le Bruit du Marteau</title>
    <meta name=\"title\" content=\"Le Bruit du Marteau\">
    <meta name=\"description\" content=\"Si vous aimez la ferraille, vous aimerez le Bruit du Marteau. Le grand Bal des Ferrailleux !\">
    <meta name=\"keywords\" content=\"le bruit du marteau\">

    <!-- Open Graph / Facebook -->
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"https://lebruitdumarteau.fr/\">
    <meta property=\"og:title\" content=\"Le Bruit du Marteau\">
    <meta property=\"og:description\" content=\"Si vous aimez la ferraille, vous aimerez le Bruit du Marteau. Le grand Bal des Ferrailleux !\">
    <meta property=\"og:image\" content=\"https://www.lebruitdumarteau.fr/themes/BdM/assets/images/BDM21.jpg\">

    <!-- Twitter -->
    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:url\" content=\"https://lebruitdumarteau.fr/\">
    <meta property=\"twitter:title\" content=\"Le Bruit du Marteau\">
    <meta property=\"twitter:description\" content=\"Si vous aimez la ferraille, vous aimerez le Bruit du Marteau. Le grand Bal des Ferrailleux !\">
    <meta property=\"twitter:image\" content=\"https://www.lebruitdumarteau.fr/themes/BdM/assets/images/BDM21.jpg\">

    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/themes/BdM/assets/img/favicon.png\">
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->\t
    <link rel=\"stylesheet\" href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap-5.0.0-alpha.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/LineIcons.2.0.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
    ";
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 55
        echo "
</head>

<body>            

    <!--<div class=\"preloader\">
        <div class=\"loader\">
            <div class=\"ytp-spinner\">
                <div class=\"ytp-spinner-container\">
                    <div class=\"ytp-spinner-rotator\">
                        <div class=\"ytp-spinner-left\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                        <div class=\"ytp-spinner-right\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    
    ";
        // line 77
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 78
        echo "

    <a href=\"#\" class=\"scroll-top\">
        <i class=\"lni lni-arrow-up\"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.bundle-5.0.0.alpha-min.js");
        echo "\"></script>
    <script src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/imagesloaded.min.js");
        echo "\"></script>
    <script src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    ";
        // line 89
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 90
        echo "    ";
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 91
        echo "    ";
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 92
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/themes/BdM/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 92,  171 => 91,  166 => 90,  163 => 89,  159 => 88,  155 => 87,  151 => 86,  147 => 85,  138 => 78,  136 => 77,  112 => 55,  109 => 54,  105 => 53,  101 => 52,  97 => 51,  93 => 50,  89 => 49,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"fr\">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-179282164-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-179282164-1');
    </script>

    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Primary Meta Tags -->
    <title>Le Bruit du Marteau</title>
    <meta name=\"title\" content=\"Le Bruit du Marteau\">
    <meta name=\"description\" content=\"Si vous aimez la ferraille, vous aimerez le Bruit du Marteau. Le grand Bal des Ferrailleux !\">
    <meta name=\"keywords\" content=\"le bruit du marteau\">

    <!-- Open Graph / Facebook -->
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"https://lebruitdumarteau.fr/\">
    <meta property=\"og:title\" content=\"Le Bruit du Marteau\">
    <meta property=\"og:description\" content=\"Si vous aimez la ferraille, vous aimerez le Bruit du Marteau. Le grand Bal des Ferrailleux !\">
    <meta property=\"og:image\" content=\"https://www.lebruitdumarteau.fr/themes/BdM/assets/images/BDM21.jpg\">

    <!-- Twitter -->
    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:url\" content=\"https://lebruitdumarteau.fr/\">
    <meta property=\"twitter:title\" content=\"Le Bruit du Marteau\">
    <meta property=\"twitter:description\" content=\"Si vous aimez la ferraille, vous aimerez le Bruit du Marteau. Le grand Bal des Ferrailleux !\">
    <meta property=\"twitter:image\" content=\"https://www.lebruitdumarteau.fr/themes/BdM/assets/images/BDM21.jpg\">

    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/themes/BdM/assets/img/favicon.png\">
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->\t
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap-5.0.0-alpha.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/LineIcons.2.0.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">
    {% styles %}

</head>

<body>            

    <!--<div class=\"preloader\">
        <div class=\"loader\">
            <div class=\"ytp-spinner\">
                <div class=\"ytp-spinner-container\">
                    <div class=\"ytp-spinner-rotator\">
                        <div class=\"ytp-spinner-left\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                        <div class=\"ytp-spinner-right\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    
    {% page %}


    <a href=\"#\" class=\"scroll-top\">
        <i class=\"lni lni-arrow-up\"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src=\"{{ 'assets/js/bootstrap.bundle-5.0.0.alpha-min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/imagesloaded.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
    {% scripts %}
    {% framework %}
    {% framework extras %}
</body>
</html>", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 54, "page" => 77, "scripts" => 89, "framework" => 90);
        static $filters = array("theme" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'page', 'scripts', 'framework'],
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
