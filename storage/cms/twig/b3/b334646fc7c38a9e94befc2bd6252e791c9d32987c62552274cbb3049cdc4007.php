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

/* D:\xampp\htdocs\bdm_october/themes/BdM/pages/about.htm */
class __TwigTemplate_62d92c44c9d4433900b7f4bdf6f9ed3620bc47ce21a85a28b1fa60e38d093033 extends \Twig\Template
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
        echo "<section class=\"page-banner-section pt-75 pb-75 img-bg\" style=\"background-image: url('";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/common-bg.svg");
        echo "')\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"banner-content\">
                            <h2 class=\"text-white\">About Company</h2>
                            <div class=\"page-breadcrumb\">
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"javascript:void(0)\">Home</a></li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">About</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= page-banner-section end ========================= -->

        <!-- ========================= feature-section start ========================= -->
        <section class=\"feature-section pt-130\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-7 col-md-9 mx-auto\">
                        <div class=\"section-title text-center mb-55\">
                            <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">Feature</span>
                            <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Why Chose Us?</h2>
                            <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium</p>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"feature-box box-style\">
                            <div class=\"feature-icon box-icon-style\">
                                <i class=\"lni lni-layers\"></i>
                            </div>
                            <div class=\"box-content-style feature-content\">
                                <h4>Responsive Design</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"feature-box box-style\">
                            <div class=\"feature-icon box-icon-style\">
                                <i class=\"lni lni-code-alt\"></i>
                            </div>
                            <div class=\"box-content-style feature-content\">
                                <h4>Web Development</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"feature-box box-style\">
                            <div class=\"feature-icon box-icon-style\">
                                <i class=\"lni lni-agenda\"></i>
                            </div>
                            <div class=\"box-content-style feature-content\">
                                <h4>Business Analysis</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= feature-section end ========================= -->

        <!--========================= about-section start========================= -->
        <section id=\"about\" class=\"pt-100\">
            <div class=\"about-section\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-6 col-lg-6\">
                            <div class=\"about-img-wrapper\">
                                <div class=\"about-img position-relative d-inline-block wow fadeInLeft\" data-wow-delay=\".3s\">
                                    <img src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/about/about-img.png");
        echo "\" alt=\"\">

                                    <div class=\"about-experience\">
                                        <h3>5 Year Of Working Experience</h3>
                                        <p>We Crafted an aweso design library that is robust and intuitive to use.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-6 col-lg-6\">
                            <div class=\"about-content-wrapper\">
                                <div class=\"section-title\">
                                    <span class=\"wow fadeInUp\" data-wow-delay=\".2s\">About Us</span>
                                    <h2 class=\"mb-40 wow fadeInRight\" data-wow-delay=\".4s\">Built-With Boostrap 5, a New Experiance</h2>
                                </div>
                                <div class=\"about-content\">
                                    <p class=\"mb-45 wow fadeInUp\" data-wow-delay=\".6s\">We Crafted an awesome design library
                                        that is robust and intuitive to use. No matter you're building a business
                                        presentation websit or a complex web application our design</p>
                                    <div class=\"counter-up wow fadeInUp\" data-wow-delay=\".5s\">
                                        <div class=\"counter\">
                                            <span id=\"secondo\" class=\"countup count color-1\" cup-end=\"30\" cup-append=\"k\">10</span>
                                            <h4>Happy Client</h4>
                                            <p>We Crafted an awesome design <br class=\"d-none d-md-block d-lg-none d-xl-block\"> library that is robust and</p>
                                        </div>
                                        <div class=\"counter\">
                                            <span id=\"secondo\" class=\"countup count color-2\" cup-end=\"42\" cup-append=\"k\">5</span>
                                            <h4>Project Done</h4>
                                            <p>We Crafted an awesome design <br class=\"d-none d-md-block d-lg-none d-xl-block\"> library that is robust and</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========================= about-section end========================= -->

<section id=\"contact\" class=\"contact-section cta-bg img-bg pt-110 pb-100\" style=\"background-image: url('";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/cta-bg.jpg");
        echo "');\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-5 col-lg-7\">
                        <div class=\"section-title mb-60\">
                            <span class=\"text-white wow fadeInDown\" data-wow-delay=\".2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;\">Space Free Lite</span>
                            <h2 class=\"text-white wow fadeInUp\" data-wow-delay=\".4s\" style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">You are using free lite version of Space</h2>
                            <p class=\"text-white wow fadeInUp\" data-wow-delay=\".6s\" style=\"visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;\">Please, purchase full version of the template to get all pages, features and commercial license</p>
                        </div>
                    </div>
                    <div class=\"col-xl-7 col-lg-5\">
                        <div class=\"contact-btn text-left text-lg-right\">
                            <a href=\"https://rebrand.ly/space-gg\" rel=\"nofollow\" class=\"theme-btn\">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ========================= client-logo-section start ========================= -->
        <section class=\"client-logo-section pt-100 pb-130\">
            <div class=\"container\">
                <div class=\"client-logo-wrapper\">
                    <div class=\"client-logo-carousel d-flex align-items-center justify-content-between\">
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/uideck-logo.svg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 155
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/pagebulb-logo.svg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 158
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/lineicons-logo.svg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 161
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/graygrids-logo.svg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"";
        // line 164
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/client-logo/lineicons-logo.svg");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= client-logo-section end ========================= -->

        <!-- ========================= subscribe-section start ========================= -->
        <section class=\"subscribe-section pt-70 pb-70 img-bg\" style=\"background-image: url('";
        // line 173
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/common-bg.svg");
        echo "')\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-6 col-lg-6\">
                        <div class=\"section-title mb-30\">
                            <span class=\"text-white wow fadeInDown\" data-wow-delay=\".2s\">Subscribe</span>
                            <h2 class=\"text-white mb-40 wow fadeInUp\" data-wow-delay=\".4s\">Subscribe Our Newsletter</h2>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6\">
                        <form action=\"#\" class=\"subscribe-form wow fadeInRight\" data-wow-delay=\".4s\">
                            <input type=\"text\" name=\"subs-email\" id=\"subs-email\" placeholder=\"Your Email\">
                            <button type=\"submit\"><i class=\"lni lni-telegram-original\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        ";
        // line 191
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 191,  239 => 173,  227 => 164,  221 => 161,  215 => 158,  209 => 155,  203 => 152,  174 => 126,  131 => 86,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}
<section class=\"page-banner-section pt-75 pb-75 img-bg\" style=\"background-image: url('{{ 'assets/img/bg/common-bg.svg' | theme }}')\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"banner-content\">
                            <h2 class=\"text-white\">About Company</h2>
                            <div class=\"page-breadcrumb\">
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"javascript:void(0)\">Home</a></li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">About</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= page-banner-section end ========================= -->

        <!-- ========================= feature-section start ========================= -->
        <section class=\"feature-section pt-130\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-7 col-md-9 mx-auto\">
                        <div class=\"section-title text-center mb-55\">
                            <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">Feature</span>
                            <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Why Chose Us?</h2>
                            <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium</p>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"feature-box box-style\">
                            <div class=\"feature-icon box-icon-style\">
                                <i class=\"lni lni-layers\"></i>
                            </div>
                            <div class=\"box-content-style feature-content\">
                                <h4>Responsive Design</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"feature-box box-style\">
                            <div class=\"feature-icon box-icon-style\">
                                <i class=\"lni lni-code-alt\"></i>
                            </div>
                            <div class=\"box-content-style feature-content\">
                                <h4>Web Development</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"feature-box box-style\">
                            <div class=\"feature-icon box-icon-style\">
                                <i class=\"lni lni-agenda\"></i>
                            </div>
                            <div class=\"box-content-style feature-content\">
                                <h4>Business Analysis</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= feature-section end ========================= -->

        <!--========================= about-section start========================= -->
        <section id=\"about\" class=\"pt-100\">
            <div class=\"about-section\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-6 col-lg-6\">
                            <div class=\"about-img-wrapper\">
                                <div class=\"about-img position-relative d-inline-block wow fadeInLeft\" data-wow-delay=\".3s\">
                                    <img src=\"{{ 'assets/img/about/about-img.png' | theme }}\" alt=\"\">

                                    <div class=\"about-experience\">
                                        <h3>5 Year Of Working Experience</h3>
                                        <p>We Crafted an aweso design library that is robust and intuitive to use.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-6 col-lg-6\">
                            <div class=\"about-content-wrapper\">
                                <div class=\"section-title\">
                                    <span class=\"wow fadeInUp\" data-wow-delay=\".2s\">About Us</span>
                                    <h2 class=\"mb-40 wow fadeInRight\" data-wow-delay=\".4s\">Built-With Boostrap 5, a New Experiance</h2>
                                </div>
                                <div class=\"about-content\">
                                    <p class=\"mb-45 wow fadeInUp\" data-wow-delay=\".6s\">We Crafted an awesome design library
                                        that is robust and intuitive to use. No matter you're building a business
                                        presentation websit or a complex web application our design</p>
                                    <div class=\"counter-up wow fadeInUp\" data-wow-delay=\".5s\">
                                        <div class=\"counter\">
                                            <span id=\"secondo\" class=\"countup count color-1\" cup-end=\"30\" cup-append=\"k\">10</span>
                                            <h4>Happy Client</h4>
                                            <p>We Crafted an awesome design <br class=\"d-none d-md-block d-lg-none d-xl-block\"> library that is robust and</p>
                                        </div>
                                        <div class=\"counter\">
                                            <span id=\"secondo\" class=\"countup count color-2\" cup-end=\"42\" cup-append=\"k\">5</span>
                                            <h4>Project Done</h4>
                                            <p>We Crafted an awesome design <br class=\"d-none d-md-block d-lg-none d-xl-block\"> library that is robust and</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========================= about-section end========================= -->

<section id=\"contact\" class=\"contact-section cta-bg img-bg pt-110 pb-100\" style=\"background-image: url('{{ 'assets/img/bg/cta-bg.jpg' | theme }}');\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-5 col-lg-7\">
                        <div class=\"section-title mb-60\">
                            <span class=\"text-white wow fadeInDown\" data-wow-delay=\".2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;\">Space Free Lite</span>
                            <h2 class=\"text-white wow fadeInUp\" data-wow-delay=\".4s\" style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">You are using free lite version of Space</h2>
                            <p class=\"text-white wow fadeInUp\" data-wow-delay=\".6s\" style=\"visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;\">Please, purchase full version of the template to get all pages, features and commercial license</p>
                        </div>
                    </div>
                    <div class=\"col-xl-7 col-lg-5\">
                        <div class=\"contact-btn text-left text-lg-right\">
                            <a href=\"https://rebrand.ly/space-gg\" rel=\"nofollow\" class=\"theme-btn\">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ========================= client-logo-section start ========================= -->
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
        </section>
        <!-- ========================= client-logo-section end ========================= -->

        <!-- ========================= subscribe-section start ========================= -->
        <section class=\"subscribe-section pt-70 pb-70 img-bg\" style=\"background-image: url('{{ 'assets/img/bg/common-bg.svg' | theme }}')\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-6 col-lg-6\">
                        <div class=\"section-title mb-30\">
                            <span class=\"text-white wow fadeInDown\" data-wow-delay=\".2s\">Subscribe</span>
                            <h2 class=\"text-white mb-40 wow fadeInUp\" data-wow-delay=\".4s\">Subscribe Our Newsletter</h2>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6\">
                        <form action=\"#\" class=\"subscribe-form wow fadeInRight\" data-wow-delay=\".4s\">
                            <input type=\"text\" name=\"subs-email\" id=\"subs-email\" placeholder=\"Your Email\">
                            <button type=\"submit\"><i class=\"lni lni-telegram-original\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        {% partial 'footer' %}", "D:\\xampp\\htdocs\\bdm_october/themes/BdM/pages/about.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1);
        static $filters = array("theme" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
