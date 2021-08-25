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

/* D:\xampp\htdocs\bdm_october/plugins/ibsellnet/leadspopupconvertor/components/popupconvertor/default.htm */
class __TwigTemplate_2befcc6dcb3d8d0fdcd3b87cb9bc9466cb03ba4a2962caec789845af612d73fe extends \Twig\Template
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
        echo "

<!-- The Modal -->
<div id=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idPopupHTML"] ?? null), 4, $this->source), "html", null, true);
        echo "\" class=\"ibslpcmodal\">

    <!-- Modal content -->
    <div class=\"ibslpcmodal-content\">
        <span class=\"close close";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idPopupHTML"] ?? null), 8, $this->source), "html", null, true);
        echo "\">&times;</span>
        ";
        // line 9
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["arrPopupInfo"] ?? null), "content", [], "any", false, false, true, 9), 9, $this->source);
        echo "
    </div>

</div>

<script>

    // Get the modal
    window['ibslpcmodal";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idPopupHTML"] ?? null), 17, $this->source), "html", null, true);
        echo "'] = document.getElementById(\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idPopupHTML"] ?? null), 17, $this->source), "html", null, true);
        echo "\");

    // Get the <span> element that closes the ibslpcmodal
    window['spanclosebtn";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idPopupHTML"] ?? null), 20, $this->source), "html", null, true);
        echo "'] = document.getElementsByClassName(\"close";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idPopupHTML"] ?? null), 20, $this->source), "html", null, true);
        echo "\")[0];

    // When the user clicks on <span> (x), close the ibslpcmodal
    window['spanclosebtn";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idPopupHTML"] ?? null), 23, $this->source), "html", null, true);
        echo "'].onclick = function() {
        window['ibslpcmodal";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idPopupHTML"] ?? null), 24, $this->source), "html", null, true);
        echo "'].style.display = \"none\";
    }

    // When the user clicks anywhere outside of the ibslpcmodal, close it
    window.onclick = function(event) {
        if (event.target == window['ibslpcmodal";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idPopupHTML"] ?? null), 29, $this->source), "html", null, true);
        echo "']) {
            window['ibslpcmodal";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idPopupHTML"] ?? null), 30, $this->source), "html", null, true);
        echo "'].style.display = \"none\";
        }
    }

    var iMilisecondsToReset = 7200000; //2 hours
    // var iMilisecondsToReset = 10000; //10 seconds
    var date = new Date();
    var dateCurrentTime = date.getTime();
    var storeMilisecValueName = 'ibsstoredmiliseconds'+";
        // line 38
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["arrPopupInfo"] ?? null), "id", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo ";

    ";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, ($context["arrPopupInfo"] ?? null), "popuptype_id", [], "any", false, false, true, 40) == 1)) {
            echo " ";
            // line 41
            echo "
        ";
            // line 42
            $context["iMilisec"] = (twig_get_attribute($this->env, $this->source, ($context["arrPopupInfo"] ?? null), "type1_seconds", [], "any", false, false, true, 42) * 1000);
            // line 43
            echo "

        var storeDisplayOnceValueName = storeDisplayOnceValueName+";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["arrPopupInfo"] ?? null), "id", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo ";



        var iMiisecJS = ";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["iMilisec"] ?? null), 49, $this->source), "html", null, true);
            echo ";




        if(localStorage.getItem(storeMilisecValueName) == null){
            localStorage.setItem(storeMilisecValueName, dateCurrentTime);
        }
        if(localStorage.getItem(storeDisplayOnceValueName) == null){
            localStorage.setItem(storeDisplayOnceValueName, 0);
        }

        //reset stored values
        if(localStorage.getItem(storeMilisecValueName) != null && (dateCurrentTime - localStorage.getItem(storeMilisecValueName)) > iMilisecondsToReset){
            localStorage.setItem(storeMilisecValueName, dateCurrentTime);
            localStorage.setItem(storeDisplayOnceValueName, 0);
        }

    repeatAndCheckUntilPopupIsVisible();



    function repeatAndCheckUntilPopupIsVisible(){
        var date1 = new Date();
        var dateCurrentTime1 = date1.getTime();
        var dateStoredTime = localStorage.getItem(storeMilisecValueName);
        var bIsAlreadyDisplayed = localStorage.getItem(storeDisplayOnceValueName);
        if((dateCurrentTime1 - dateStoredTime > iMiisecJS) && bIsAlreadyDisplayed == 0){
            window['ibslpcmodal";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idPopupHTML"] ?? null), 77, $this->source), "html", null, true);
            echo "'].style.display = \"block\";
            localStorage.setItem(storeDisplayOnceValueName, 1);
        }else{

            if(bIsAlreadyDisplayed==0){
                setTimeout( repeatAndCheckUntilPopupIsVisible, 1000 );
            }

        }


    }


    ";
        }
        // line 92
        echo "



    ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, ($context["arrPopupInfo"] ?? null), "popuptype_id", [], "any", false, false, true, 96) == 2)) {
            echo "  ";
            // line 97
            echo "    //click on a button
    // Get the button that opens the ibslpcmodal
    var btn = document.getElementById(\"";
            // line 99
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["arrPopupInfo"] ?? null), "type2_selector", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "\");
    // When the user clicks on the button, open the ibslpcmodal
    btn.onclick = function() {
        window['ibslpcmodal";
            // line 102
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idPopupHTML"] ?? null), 102, $this->source), "html", null, true);
            echo "'].style.display = \"block\";
    }
    ";
        }
        // line 105
        echo "



    ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, ($context["arrPopupInfo"] ?? null), "popuptype_id", [], "any", false, false, true, 109) == 3)) {
            echo "  ";
            // line 110
            echo "
        function onMouseOut(event) {
            var storeDisplayOnceValueName = storeDisplayOnceValueName+";
            // line 112
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["arrPopupInfo"] ?? null), "id", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo ";
            if(localStorage.getItem(storeDisplayOnceValueName) == null){
                localStorage.setItem(storeDisplayOnceValueName, 0);
            }

            //reset stored values
            if(localStorage.getItem(storeMilisecValueName) != null && (dateCurrentTime - localStorage.getItem(storeMilisecValueName)) > iMilisecondsToReset){
                localStorage.setItem(storeMilisecValueName, dateCurrentTime);
                localStorage.setItem(storeDisplayOnceValueName, 0);
            }

            var bIsAlreadyDisplayed = localStorage.getItem(storeDisplayOnceValueName);

            // If the mouse is near the top of the window, show the popup
            // Also, do NOT trigger when hovering or clicking on selects
            if (
                event.clientY < 50 &&
                event.relatedTarget == null &&
                event.target.nodeName.toLowerCase() !== 'select'
                && bIsAlreadyDisplayed == 0) {
                // Remove this event listener
                document.removeEventListener(\"mouseout\", onMouseOut);

                // Show the popup
                window['ibslpcmodal";
            // line 136
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idPopupHTML"] ?? null), 136, $this->source), "html", null, true);
            echo "'].style.display = \"block\";

                localStorage.setItem(storeDisplayOnceValueName, 1);
            }
        }

        document.addEventListener(\"mouseout\", onMouseOut);

    ";
        }
        // line 145
        echo "
</script>


";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/plugins/ibsellnet/leadspopupconvertor/components/popupconvertor/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 145,  247 => 136,  220 => 112,  216 => 110,  213 => 109,  207 => 105,  201 => 102,  195 => 99,  191 => 97,  188 => 96,  182 => 92,  164 => 77,  133 => 49,  126 => 45,  122 => 43,  120 => 42,  117 => 41,  114 => 40,  109 => 38,  98 => 30,  94 => 29,  86 => 24,  82 => 23,  74 => 20,  66 => 17,  55 => 9,  51 => 8,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!-- The Modal -->
<div id=\"{{idPopupHTML}}\" class=\"ibslpcmodal\">

    <!-- Modal content -->
    <div class=\"ibslpcmodal-content\">
        <span class=\"close close{{idPopupHTML}}\">&times;</span>
        {{arrPopupInfo.content|raw}}
    </div>

</div>

<script>

    // Get the modal
    window['ibslpcmodal{{idPopupHTML}}'] = document.getElementById(\"{{idPopupHTML}}\");

    // Get the <span> element that closes the ibslpcmodal
    window['spanclosebtn{{idPopupHTML}}'] = document.getElementsByClassName(\"close{{idPopupHTML}}\")[0];

    // When the user clicks on <span> (x), close the ibslpcmodal
    window['spanclosebtn{{idPopupHTML}}'].onclick = function() {
        window['ibslpcmodal{{idPopupHTML}}'].style.display = \"none\";
    }

    // When the user clicks anywhere outside of the ibslpcmodal, close it
    window.onclick = function(event) {
        if (event.target == window['ibslpcmodal{{idPopupHTML}}']) {
            window['ibslpcmodal{{idPopupHTML}}'].style.display = \"none\";
        }
    }

    var iMilisecondsToReset = 7200000; //2 hours
    // var iMilisecondsToReset = 10000; //10 seconds
    var date = new Date();
    var dateCurrentTime = date.getTime();
    var storeMilisecValueName = 'ibsstoredmiliseconds'+{{arrPopupInfo.id }};

    {% if(arrPopupInfo.popuptype_id == 1) %} {# ********* After some seconds ************** #}

        {% set iMilisec = arrPopupInfo.type1_seconds * 1000 %}


        var storeDisplayOnceValueName = storeDisplayOnceValueName+{{arrPopupInfo.id }};



        var iMiisecJS = {{iMilisec}};




        if(localStorage.getItem(storeMilisecValueName) == null){
            localStorage.setItem(storeMilisecValueName, dateCurrentTime);
        }
        if(localStorage.getItem(storeDisplayOnceValueName) == null){
            localStorage.setItem(storeDisplayOnceValueName, 0);
        }

        //reset stored values
        if(localStorage.getItem(storeMilisecValueName) != null && (dateCurrentTime - localStorage.getItem(storeMilisecValueName)) > iMilisecondsToReset){
            localStorage.setItem(storeMilisecValueName, dateCurrentTime);
            localStorage.setItem(storeDisplayOnceValueName, 0);
        }

    repeatAndCheckUntilPopupIsVisible();



    function repeatAndCheckUntilPopupIsVisible(){
        var date1 = new Date();
        var dateCurrentTime1 = date1.getTime();
        var dateStoredTime = localStorage.getItem(storeMilisecValueName);
        var bIsAlreadyDisplayed = localStorage.getItem(storeDisplayOnceValueName);
        if((dateCurrentTime1 - dateStoredTime > iMiisecJS) && bIsAlreadyDisplayed == 0){
            window['ibslpcmodal{{idPopupHTML}}'].style.display = \"block\";
            localStorage.setItem(storeDisplayOnceValueName, 1);
        }else{

            if(bIsAlreadyDisplayed==0){
                setTimeout( repeatAndCheckUntilPopupIsVisible, 1000 );
            }

        }


    }


    {% endif %}




    {% if(arrPopupInfo.popuptype_id == 2) %}  {# ********* When the user click a  button  ************** #}
    //click on a button
    // Get the button that opens the ibslpcmodal
    var btn = document.getElementById(\"{{arrPopupInfo.type2_selector}}\");
    // When the user clicks on the button, open the ibslpcmodal
    btn.onclick = function() {
        window['ibslpcmodal{{idPopupHTML}}'].style.display = \"block\";
    }
    {% endif %}




    {% if(arrPopupInfo.popuptype_id == 3) %}  {# ********* Before user want's to leave the page  ************** #}

        function onMouseOut(event) {
            var storeDisplayOnceValueName = storeDisplayOnceValueName+{{arrPopupInfo.id }};
            if(localStorage.getItem(storeDisplayOnceValueName) == null){
                localStorage.setItem(storeDisplayOnceValueName, 0);
            }

            //reset stored values
            if(localStorage.getItem(storeMilisecValueName) != null && (dateCurrentTime - localStorage.getItem(storeMilisecValueName)) > iMilisecondsToReset){
                localStorage.setItem(storeMilisecValueName, dateCurrentTime);
                localStorage.setItem(storeDisplayOnceValueName, 0);
            }

            var bIsAlreadyDisplayed = localStorage.getItem(storeDisplayOnceValueName);

            // If the mouse is near the top of the window, show the popup
            // Also, do NOT trigger when hovering or clicking on selects
            if (
                event.clientY < 50 &&
                event.relatedTarget == null &&
                event.target.nodeName.toLowerCase() !== 'select'
                && bIsAlreadyDisplayed == 0) {
                // Remove this event listener
                document.removeEventListener(\"mouseout\", onMouseOut);

                // Show the popup
                window['ibslpcmodal{{idPopupHTML}}'].style.display = \"block\";

                localStorage.setItem(storeDisplayOnceValueName, 1);
            }
        }

        document.addEventListener(\"mouseout\", onMouseOut);

    {% endif %}

</script>


", "D:\\xampp\\htdocs\\bdm_october/plugins/ibsellnet/leadspopupconvertor/components/popupconvertor/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 40, "set" => 42);
        static $filters = array("escape" => 4, "raw" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'raw'],
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
