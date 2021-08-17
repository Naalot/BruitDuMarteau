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

/* D:\xampp\htdocs\bdm_october/plugins/raviraj/rjgallery/components/gallery/default.htm */
class __TwigTemplate_5c73e0ddc0831cb4a3c708e44220da782626ab53fa1fd646abbb3ca8c1388fe1 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2
        echo "    <style>
        #";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 3, $this->source), "html", null, true);
        echo " div {
            display: block;
            float: left;
            margin: 3px;
        }
    </style>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 10
        echo "
<div class=\"d-flex justify-content-center flex-wrap\" style=\"width:100%\" id=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 11, $this->source), "html", null, true);
        echo "\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "images", [], "any", false, false, true, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 13
            echo "        <div data-src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\" data-sub-html=\"<h4 style='color: white;'>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</h4><p>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</p>\">
            <a href=\"#\">
                <img class=\"img-responsive\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getThumb", [0 => ($context["width"] ?? null), 1 => ($context["height"] ?? null), 2 => ($context["resizer"] ?? null)], "method", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\" />
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>

";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 22
        echo "    <script>
         \$(document).ready(function() {
            var ";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 24, $this->source), "html", null, true);
        echo " = \$(\"#";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 24, $this->source), "html", null, true);
        echo "\").lightGallery({
                // Elements
                thumbnail   : ";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["thumbnail"] ?? null), 26, $this->source), "html", null, true);
        echo ",
                caption     : ";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 27, $this->source), "html", null, true);
        echo ",
                desc        : ";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["desc"] ?? null), 28, $this->source), "html", null, true);
        echo ",
                counter     : ";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["counter"] ?? null), 29, $this->source), "html", null, true);
        echo ",
                controls    : ";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["controls"] ?? null), 30, $this->source), "html", null, true);
        echo ", 
                preload     : ";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["preload"] ?? null), 31, $this->source), "html", null, true);
        echo ",

                // Transitions
                mode   : '";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["mode"] ?? null), 34, $this->source), "html", null, true);
        echo "',
                useCSS : true,
                easing : 'linear',
                speed  : ";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["speed"] ?? null), 37, $this->source), "html", null, true);
        echo ",

                // Navigation
                hideControlOnEnd : false,
                loop             : ";
        // line 41
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["loop"] ?? null), 41, $this->source), "html", null, true);
        echo ",
                auto             : ";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["auto"] ?? null), 42, $this->source), "html", null, true);
        echo ",
                pause            : ";
        // line 43
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["pause"] ?? null), 43, $this->source), "html", null, true);
        echo ",
                escKey           : ";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["escKey"] ?? null), 44, $this->source), "html", null, true);
        echo ",
                swipeThreshold    : 50,

                lang : { allPhotos: '";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["lang"] ?? null), 47, $this->source), "html", null, true);
        echo "' },
            });
        });
    </script>
";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/plugins/raviraj/rjgallery/components/gallery/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 21,  162 => 47,  156 => 44,  152 => 43,  148 => 42,  144 => 41,  137 => 37,  131 => 34,  125 => 31,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  98 => 24,  94 => 22,  92 => 21,  88 => 19,  76 => 15,  66 => 13,  62 => 12,  58 => 11,  55 => 10,  53 => 1,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put styles %}
    <style>
        #{{ __SELF__ }} div {
            display: block;
            float: left;
            margin: 3px;
        }
    </style>
{% endput %}

<div class=\"d-flex justify-content-center flex-wrap\" style=\"width:100%\" id=\"{{ __SELF__ }}\">
    {% for image in gallery.images %}
        <div data-src=\"{{ image.path }}\" data-sub-html=\"<h4 style='color: white;'>{{ image.title }}</h4><p>{{ image.description }}</p>\">
            <a href=\"#\">
                <img class=\"img-responsive\" src=\"{{ image.getThumb(width, height, resizer) }}\" alt=\"{{ image.title }}\" />
            </a>
        </div>
    {% endfor %}
</div>

{% put scripts %}
    <script>
         \$(document).ready(function() {
            var {{ __SELF__ }} = \$(\"#{{ __SELF__ }}\").lightGallery({
                // Elements
                thumbnail   : {{ thumbnail }},
                caption     : {{ caption }},
                desc        : {{ desc }},
                counter     : {{ counter }},
                controls    : {{ controls }}, 
                preload     : {{ preload }},

                // Transitions
                mode   : '{{ mode }}',
                useCSS : true,
                easing : 'linear',
                speed  : {{ speed }},

                // Navigation
                hideControlOnEnd : false,
                loop             : {{ loop }},
                auto             : {{ auto }},
                pause            : {{ pause }},
                escKey           : {{ escKey }},
                swipeThreshold    : 50,

                lang : { allPhotos: '{{ lang }}' },
            });
        });
    </script>
{% endput %}", "D:\\xampp\\htdocs\\bdm_october/plugins/raviraj/rjgallery/components/gallery/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("put" => 1, "for" => 12);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['put', 'for'],
                ['escape'],
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
