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

/* D:\xampp\htdocs\bdm_october/plugins/martin/forms/components/genericform/default.htm */
class __TwigTemplate_62f8fc53d224f4d495b06f2a37637b01b0a82d118e5f66f69291dc021ab9f4d0 extends \Twig\Template
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
        echo "<div class=\"col-xl-6\">
    <div class=\"contact-form-wrapper\">
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-8 mx-auto\">
                <div class=\"section-title text-center mb-50\">
                    <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">Vous avez une question ?</span>
                    <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Il suffit de la poser ...</h2>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">Carole, Dudu, Léa ou Mathilde relèvent
                        régulièrement les mails et vous répondrons avec grand plaisir.</p>
                </div>
            </div>
        </div>

        <form data-request=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 14, $this->source), "html", null, true);
        echo "::onFormSubmit\" class=\"contact-form\">

            ";
        // line 16
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "

            <div id=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 18, $this->source), "html", null, true);
        echo "_forms_flash\" class=\"row\"></div>

            <div class=\"row\">

                <div class=\"col-md-6 form-group\">
                    <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Nom\" class=\"form-control\" required>
                </div>

                <div class=\"col-md-6\">
                    <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email\" required>
                </div>

            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <input type=\"text\" name=\"phone\" id=\"phone\" placeholder=\"Téléphone\">
                </div>
                <div class=\"col-md-6\">
                    <input type=\"text\" name=\"subject\" id=\"email\" placeholder=\"Sujet\" required>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <textarea name=\"comments\" id=\"comments\" placeholder=\"Message\" rows=\"5\"></textarea>
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@recaptcha"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "            </div>

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"button text-center\">
                        <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"theme-btn\">Envoyer</button>
                    </div>
                </div>
            </div>

        </form>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/plugins/martin/forms/components/genericform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 48,  96 => 47,  64 => 18,  59 => 16,  54 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-xl-6\">
    <div class=\"contact-form-wrapper\">
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-8 mx-auto\">
                <div class=\"section-title text-center mb-50\">
                    <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">Vous avez une question ?</span>
                    <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Il suffit de la poser ...</h2>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">Carole, Dudu, Léa ou Mathilde relèvent
                        régulièrement les mails et vous répondrons avec grand plaisir.</p>
                </div>
            </div>
        </div>

        <form data-request=\"{{ __SELF__ }}::onFormSubmit\" class=\"contact-form\">

            {{ form_token() }}

            <div id=\"{{ __SELF__ }}_forms_flash\" class=\"row\"></div>

            <div class=\"row\">

                <div class=\"col-md-6 form-group\">
                    <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Nom\" class=\"form-control\" required>
                </div>

                <div class=\"col-md-6\">
                    <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email\" required>
                </div>

            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <input type=\"text\" name=\"phone\" id=\"phone\" placeholder=\"Téléphone\">
                </div>
                <div class=\"col-md-6\">
                    <input type=\"text\" name=\"subject\" id=\"email\" placeholder=\"Sujet\" required>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <textarea name=\"comments\" id=\"comments\" placeholder=\"Message\" rows=\"5\"></textarea>
                </div>
            </div>

            <div class=\"form-group\">
                {% partial '@recaptcha' %}
            </div>

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"button text-center\">
                        <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"theme-btn\">Envoyer</button>
                    </div>
                </div>
            </div>

        </form>", "D:\\xampp\\htdocs\\bdm_october/plugins/martin/forms/components/genericform/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 47);
        static $filters = array("escape" => 14);
        static $functions = array("form_token" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['escape'],
                ['form_token']
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
