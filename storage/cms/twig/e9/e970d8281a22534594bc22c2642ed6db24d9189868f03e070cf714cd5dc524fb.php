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

/* D:\xampp\htdocs\bdm_october/themes/BdM/partials/service.htm */
class __TwigTemplate_c528d80425b7c520035c0c5bb0a90aced29f49836ee74e67d1751073ef4022ce extends \Twig\Template
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
        echo "<div class=\"container mt-50\">
    <hr/>
</div>
<!-- ========================= partner-logo-section start ========================= -->
<section class=\"client-logo-section pt-20 pb-30\">
    <div class=\"container\">
        <div class=\"client-logo-wrapper\">
            <div class=\"client-logo-carousel d-flex align-items-center justify-content-between\">
                <div class=\"client-logo\">
                    <a href=\"";
        // line 10
        echo url("http://www.meyrie-village.com/");
        echo "\">
                        <img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/meyrie.png");
        echo "\" alt=\"Ville de Meyrié\">
                    </a>
                </div>
                <div class=\"client-logo\">
                    <a href=\"";
        // line 15
        echo url("https://www.loxam.fr/");
        echo "\">
                        <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/loxam.svg");
        echo "\" alt=\"Loxam\">
                    </a>
                </div>
                <div class=\"client-logo\">
                    <a href=\"";
        // line 20
        echo url("https://letes-chapiteaux.com/");
        echo "\">
                        <img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/etechap.png");
        echo "\" alt=\"Eté chapiteau\">
                    </a>
                </div>
                <div class=\"client-logo\">
                    <a href=\"";
        // line 25
        echo url("https://www.layher.fr/");
        echo "\">
                        <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/layher_logo.png");
        echo "\" alt=\"Layher\">
                    </a>
                </div>
                <div class=\"client-logo\">
                    <a href=\"";
        // line 30
        echo url("https://www.musicplusgrenoble.fr/");
        echo "\">
                        <img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/mplus.png");
        echo "\" alt=\"Music Plus\">
                    </a>
                </div>
                <div class=\"client-logo\">
                    <a href=\"";
        // line 35
        echo url("https://www.stageup.eu/");
        echo "\">
                        <img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/stageup.png");
        echo "\" alt=\"Stage Up\">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= partner-logo-section end ========================= -->";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/themes/BdM/partials/service.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  105 => 35,  98 => 31,  94 => 30,  87 => 26,  83 => 25,  76 => 21,  72 => 20,  65 => 16,  61 => 15,  54 => 11,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mt-50\">
    <hr/>
</div>
<!-- ========================= partner-logo-section start ========================= -->
<section class=\"client-logo-section pt-20 pb-30\">
    <div class=\"container\">
        <div class=\"client-logo-wrapper\">
            <div class=\"client-logo-carousel d-flex align-items-center justify-content-between\">
                <div class=\"client-logo\">
                    <a href=\"{{ url('http://www.meyrie-village.com/') }}\">
                        <img src=\"{{ 'assets/img/client-logo/meyrie.png' | theme }}\" alt=\"Ville de Meyrié\">
                    </a>
                </div>
                <div class=\"client-logo\">
                    <a href=\"{{ url('https://www.loxam.fr/') }}\">
                        <img src=\"{{ 'assets/img/client-logo/loxam.svg' | theme }}\" alt=\"Loxam\">
                    </a>
                </div>
                <div class=\"client-logo\">
                    <a href=\"{{ url('https://letes-chapiteaux.com/') }}\">
                        <img src=\"{{ 'assets/img/client-logo/etechap.png' | theme }}\" alt=\"Eté chapiteau\">
                    </a>
                </div>
                <div class=\"client-logo\">
                    <a href=\"{{ url('https://www.layher.fr/') }}\">
                        <img src=\"{{ 'assets/img/client-logo/layher_logo.png' | theme }}\" alt=\"Layher\">
                    </a>
                </div>
                <div class=\"client-logo\">
                    <a href=\"{{ url('https://www.musicplusgrenoble.fr/') }}\">
                        <img src=\"{{ 'assets/img/client-logo/mplus.png' | theme }}\" alt=\"Music Plus\">
                    </a>
                </div>
                <div class=\"client-logo\">
                    <a href=\"{{ url('https://www.stageup.eu/') }}\">
                        <img src=\"{{ 'assets/img/client-logo/stageup.png' | theme }}\" alt=\"Stage Up\">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= partner-logo-section end ========================= -->", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/partials/service.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 11);
        static $functions = array("url" => 10);

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
