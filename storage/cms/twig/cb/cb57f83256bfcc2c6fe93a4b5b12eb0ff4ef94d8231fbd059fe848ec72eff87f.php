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
    ";
        // line 7
        if (call_user_func_array($this->env->getFunction('allow_cookies')->getCallable(), [])) {
            // line 8
            echo "
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-179282164-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-179282164-1');
    </script>

    ";
        }
        // line 22
        echo "
    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Primary Meta Tags -->
    <title>Le Bruit du Marteau</title>
    <meta name=\"title\" content=\"Le Bruit du Marteau\">
    <meta name=\"description\"
        content=\"Si vous aimez la ferraille, vous aimerez le Bruit du Marteau. Le grand Bal des Ferrailleux !\">
    <meta name=\"keywords\" content=\"le bruit du marteau, festival, Meyrié, 38300 Meyrié, SCAFF, association scaff, presque bdm, championnat, monteurs d'échafaudage, championnat de monteurs d'échafaudage\">

    <!-- Open Graph / Facebook -->
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"https://lebruitdumarteau.fr/\">
    <meta property=\"og:title\" content=\"Le Bruit du Marteau\">
    <meta property=\"og:description\"
        content=\"Si vous aimez la ferraille, vous aimerez le Bruit du Marteau. Le grand Bal des Ferrailleux !\">
    <meta property=\"og:image\" content=\"https://www.lebruitdumarteau.fr/themes/BdM/assets/images/BDM21.jpg\">

    <!-- Twitter -->
    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:url\" content=\"https://lebruitdumarteau.fr/\">
    <meta property=\"twitter:title\" content=\"Le Bruit du Marteau\">
    <meta property=\"twitter:description\"
        content=\"Si vous aimez la ferraille, vous aimerez le Bruit du Marteau. Le grand Bal des Ferrailleux !\">
    <meta property=\"twitter:image\" content=\"https://www.lebruitdumarteau.fr/themes/BdM/assets/images/BDM21.jpg\">

    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/themes/BdM/assets/img/favicon.png\">
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel=\"stylesheet\" href=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap-5.0.0-alpha.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/LineIcons.2.0.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">

    ";
        // line 62
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 63
        echo "
</head>

<body>

    ";
        // line 68
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 69
        echo "
    <a href=\"#\" class=\"scroll-top\">
        <i class=\"lni lni-arrow-up\"></i>
    </a>

    ";
        // line 74
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Popupconvertor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 75
        echo "
    <!-- ========================= JS here ========================= -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.js\"
        integrity=\"sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=\" crossorigin=\"anonymous\"></script>

    ";
        // line 80
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 81
        echo "
    <script src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.bundle-5.0.0.alpha-min.js");
        echo "\"></script>
    <script src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/imagesloaded.min.js");
        echo "\"></script>
    <script src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>

    ";
        // line 87
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 88
        echo "
</body>

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
        return array (  179 => 88,  176 => 87,  171 => 85,  167 => 84,  163 => 83,  159 => 82,  156 => 81,  152 => 80,  145 => 75,  141 => 74,  134 => 69,  132 => 68,  125 => 63,  122 => 62,  117 => 60,  113 => 59,  109 => 58,  105 => 57,  101 => 56,  65 => 22,  49 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"fr\">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    {% if allow_cookies()  %}

    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-179282164-1\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-179282164-1');
    </script>

    {% endif %}

    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Primary Meta Tags -->
    <title>Le Bruit du Marteau</title>
    <meta name=\"title\" content=\"Le Bruit du Marteau\">
    <meta name=\"description\"
        content=\"Si vous aimez la ferraille, vous aimerez le Bruit du Marteau. Le grand Bal des Ferrailleux !\">
    <meta name=\"keywords\" content=\"le bruit du marteau, festival, Meyrié, 38300 Meyrié, SCAFF, association scaff, presque bdm, championnat, monteurs d'échafaudage, championnat de monteurs d'échafaudage\">

    <!-- Open Graph / Facebook -->
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"https://lebruitdumarteau.fr/\">
    <meta property=\"og:title\" content=\"Le Bruit du Marteau\">
    <meta property=\"og:description\"
        content=\"Si vous aimez la ferraille, vous aimerez le Bruit du Marteau. Le grand Bal des Ferrailleux !\">
    <meta property=\"og:image\" content=\"https://www.lebruitdumarteau.fr/themes/BdM/assets/images/BDM21.jpg\">

    <!-- Twitter -->
    <meta property=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"twitter:url\" content=\"https://lebruitdumarteau.fr/\">
    <meta property=\"twitter:title\" content=\"Le Bruit du Marteau\">
    <meta property=\"twitter:description\"
        content=\"Si vous aimez la ferraille, vous aimerez le Bruit du Marteau. Le grand Bal des Ferrailleux !\">
    <meta property=\"twitter:image\" content=\"https://www.lebruitdumarteau.fr/themes/BdM/assets/images/BDM21.jpg\">

    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/themes/BdM/assets/img/favicon.png\">
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap-5.0.0-alpha.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/LineIcons.2.0.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">

    {% styles %}

</head>

<body>

    {% page %}

    <a href=\"#\" class=\"scroll-top\">
        <i class=\"lni lni-arrow-up\"></i>
    </a>

    {% component 'Popupconvertor' %}

    <!-- ========================= JS here ========================= -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.js\"
        integrity=\"sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=\" crossorigin=\"anonymous\"></script>

    {% framework %}

    <script src=\"{{ 'assets/js/bootstrap.bundle-5.0.0.alpha-min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/imagesloaded.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/main.js'|theme }}\"></script>

    {% scripts %}

</body>

</html>", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "styles" => 62, "page" => 68, "component" => 74, "framework" => 80, "scripts" => 87);
        static $filters = array("theme" => 56);
        static $functions = array("allow_cookies" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'styles', 'page', 'component', 'framework', 'scripts'],
                ['theme'],
                ['allow_cookies']
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
