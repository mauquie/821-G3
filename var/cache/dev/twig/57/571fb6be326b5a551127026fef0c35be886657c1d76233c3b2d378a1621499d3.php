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

/* base.html.twig */
class __TwigTemplate_8835060e13cb395b9786537c27ffbd3a3144d7c1921b20f43afc2ea34a7e775c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
\t\t
\t";
        // line 9
        $context["racine"] = "https://localhost:8000/";
        // line 10
        echo "    <body>
\t    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "css/animate.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "css/owl.carousel.min.css\">

    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "css/aos.css\">

    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "css/jquery.timepicker.css\">

    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "fonts/ionicons/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "fonts/fontawesome/css/font-awesome.min.css\">

    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "fonts/flaticon/font/flaticon.css\">

    <!-- Theme Style -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "css/style.css\">

  </head>
  <body class=\"bg-light\">

    <body data-spy=\"scroll\" data-target=\"#ftco-navbar-spy\" data-offset=\"0\">

    <div class=\"site-wrap\">
      
      <nav class=\"site-menu\" id=\"ftco-navbar-spy\">
        <div class=\"site-menu-inner\" id=\"ftco-navbar\">
          <ul class=\"list-unstyled\">
            <li><a href=\"#section-home\">Home</a></li>
            <li><a href=\"#section-about\">About Us</a></li>
            <li><a href=\"#section-menu\">Our Menu</a></li>
            <li><a href=\"#section-reservation\">Reserve A Table</a></li>
            <li><a href=\"#section-contact\">Contact</a></li>
          </ul>
        </div>
      </nav>

      <header class=\"site-header\">
        <div class=\"row align-items-center\">
          <div class=\"col-5 col-md-3\">
             
          </div>
          <div class=\"col-2 col-md-6 text-center site-logo-wrap\">
            <a href=\"index.html\" class=\"site-logo\">T</a>
          </div>
          <div class=\"col-5 col-md-3 text-right menu-burger-wrap\">
            <a href=\"#\" class=\"site-nav-toggle js-site-nav-toggle\"><i></i></a>

          </div>
        </div>
       
      </header> <!-- site-header -->
      
      <div class=\"main-wrap \" id=\"section-home\">

        <div class=\"cover_1 overlay bg-light\">
          <div class=\"img_bg\" style=\"background-image: url(";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "images/depannage.jpg);\" data-stellar-background-ratio=\"0.5\">
            <div class=\"container\">
              <div class=\"row align-items-center justify-content-center text-center\">
                <div class=\"col-md-10\" data-aos=\"fade-up\">
                  <h2 class=\"heading mb-5\">Bienvenue sur troubleshooting</h2>
                  <p><a href=\"#section-reservation\" class=\"smoothscroll btn btn-outline-white px-5 py-3\">OUvrir un ticket</a></p>
\t\t\t\t  \t<a class=\"btn btn-success\" href=\"/connexion\">Connexion</a>
\t\t\t\t\t
\t\t\t\t\t";
        // line 80
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80))) {
            // line 81
            echo "\t\t\t\t\t<a class=\"btn btn-secondary\">Inscription</a>
\t\t\t\t\t<a class=\"btn btn-danger\" href=\"/deconnexion\">Deconnexion</a>
\t\t\t\t\t
\t\t\t\t\t";
            // line 84
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "email", [], "any", false, false, false, 84), "admin@troubleshooting.com")) {
                // line 85
                echo "\t\t\t\t\t<a class=\"btn btn-info\" href=\"/admin\">Admin</a>
\t\t\t\t\t";
            } else {
                // line 87
                echo "\t\t\t\t\t<a class=\"btn btn-secondary\">Admin</a>
\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 90
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "email", [], "any", false, false, false, 90), "client@troubleshooting.com")) {
                // line 91
                echo "\t\t\t\t\t<a class=\"btn btn-info\" href=\"/myticket\">Tickets</a>
\t\t\t\t\t";
            } else {
                // line 93
                echo "\t\t\t\t\t<a class=\"btn btn-secondary\">Tickets</a>
\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t
\t\t\t\t\t";
        } else {
            // line 97
            echo "\t\t\t\t\t<a class=\"btn btn-warning\" href=\"/inscription\">Inscription</a>
\t\t\t\t\t<a class=\"btn btn-secondary\" >Deconnexion</a>
\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t
\t\t\t\t\t
                </div>
              </div>
            </div>
          </div>
        </div> <!-- .cover_1 -->

        <!-- <div class=\"section\"  data-aos=\"fade-up\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row section-heading justify-content-center mb-5\"> -->
              <!-- <div class=\"col-md-8 text-center\"> -->
                <!-- <h2 class=\"heading mb-3\">Find your best food</h2> -->
                <!-- <p class=\"sub-heading mb-5\">Free Website Template For Restaurants Made by Colorlib</p>   -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row\"> -->

              <!-- <div class=\"ftco-46\"> -->
                <!-- <div class=\"ftco-46-row d-flex flex-column flex-lg-row\"> -->
                  <!-- <div class=\"ftco-46-image\" style=\"background-image: url(images/img_1.jpg);\"></div> -->
                  <!-- <div class=\"ftco-46-text ftco-46-arrow-left\"> -->
                    <!-- <h4 class=\"ftco-46-subheading\">Vegies</h4> -->
                    <!-- <h3 class=\"ftco-46-heading\">Beef Empanadas</h3> -->
                    <!-- <p class=\"mb-5\">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
                    <!-- <p><a href=\"#\" class=\"btn-link\">Learn More <span class=\"ion-android-arrow-forward\"></span></a></p> -->
                  <!-- </div> -->
                  <!-- <div class=\"ftco-46-image\" style=\"background-image: url(images/img_2.jpg);\"></div>  -->
                <!-- </div> -->

                <!-- <div class=\"ftco-46-row d-flex flex-column flex-lg-row\"> -->
                  <!-- <div class=\"ftco-46-text ftco-46-arrow-right\"> -->
                    <!-- <h4 class=\"ftco-46-subheading\">Food</h4> -->
                    <!-- <h3 class=\"ftco-46-heading\">Buttermilk Chicken Jibaritos</h3> -->
                    <!-- <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                    <!-- <p><a href=\"#\" class=\"btn-link\">Learn More <span class=\"ion-android-arrow-forward\"></span></a></p> -->
                  <!-- </div> -->
                  <!-- <div class=\"ftco-46-image\" style=\"background-image: url(images/img_3.jpg);\"></div> -->
                  <!-- <div class=\"ftco-46-text ftco-46-arrow-up\"> -->
                    <!-- <h4 class=\"ftco-46-subheading\">Food</h4> -->
                    <!-- <h3 class=\"ftco-46-heading\">Chicken Chimichurri Croquettes</h3> -->
                    <!-- <p class=\"mb-5\">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p> -->
                    <!-- <p><a href=\"#\" class=\"btn-link\">Learn More <span class=\"ion-android-arrow-forward\"></span></a></p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->

            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> <!-- .section -->

        <!-- <div class=\"section pb-3 bg-white\" id=\"section-about\" data-aos=\"fade-up\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row align-items-center justify-content-center\"> -->
              <!-- <div class=\"col-md-12 col-lg-8 section-heading\"> -->
                <!-- <h2 class=\"heading mb-5\">The Restaurant</h2> -->
                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
                <!-- <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> <!-- .section --> 
        

        <!-- <div class=\"section bg-white pt-2 pb-2 text-center\" data-aos=\"fade\"> -->
          <!-- <p><img src=\"images/bg_hero.png\" alt=\"Image\" class=\"img-fluid\"></p> -->
        <!-- </div> <!-- .section -->

        <!-- <div class=\"section bg-white\" data-aos=\"fade-up\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row mb-5\"> -->
              <!-- <div class=\"col-md-12 section-heading text-center\"> -->
                <!-- <h2 class=\"heading mb-5\">Meet The Chefs</h2> -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row\"> -->
              <!-- <div class=\"col-md-6 pr-md-5 text-center mb-5\"> -->
                <!-- <div class=\"ftco-38\"> -->
                  <!-- <div class=\"ftco-38-img\"> -->
                    <!-- <div class=\"ftco-38-header\"> -->
                      <!-- <img src=\"images/chef_1.jpg\" alt=\"Image\"> -->
                      <!-- <h3 class=\"ftco-38-heading\">Daniel Graham</h3> -->
                      <!-- <p class=\"ftco-38-subheading\">Master Chef</p> -->
                    <!-- </div> -->
                    <!-- <div class=\"ftco-38-body\"> -->
                      <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
                      <!-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. It is a paradisematic country.</p> -->
                      <!-- <p> -->
                        <!-- <a href=\"#\" class=\"p-2\"><span class=\"fa fa-facebook\"></span></a> -->
                        <!-- <a href=\"#\" class=\"p-2\"><span class=\"fa fa-twitter\"></span></a> -->
                        <!-- <a href=\"#\" class=\"p-2\"><span class=\"fa fa-instagram\"></span></a> -->
                      <!-- </p> -->
                    <!-- </div> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              <!-- <div class=\"col-md-6 pl-md-5 text-center mb-5\"> -->
                <!-- <div class=\"ftco-38\"> -->
                  <!-- <div class=\"ftco-38-img\"> -->
                    <!-- <div class=\"ftco-38-header\"> -->
                      <!-- <img src=\"images/chef_2.jpg\" alt=\"Image\"> -->
                      <!-- <h3 class=\"ftco-38-heading\">Nick Browning</h3> -->
                      <!-- <p class=\"ftco-38-subheading\">Master Chef</p> -->
                    <!-- </div> -->
                    <!-- <div class=\"ftco-38-body\"> -->
                      <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
                      <!-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. It is a paradisematic country.</p> -->
                      <!-- <p> -->
                        <!-- <a href=\"#\" class=\"p-2\"><span class=\"fa fa-facebook\"></span></a> -->
                        <!-- <a href=\"#\" class=\"p-2\"><span class=\"fa fa-twitter\"></span></a> -->
                        <!-- <a href=\"#\" class=\"p-2\"><span class=\"fa fa-instagram\"></span></a> -->
                      <!-- </p> -->
                    <!-- </div> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              <!-- <div class=\"col-md-4\"></div> -->
            <!-- </div> -->
          <!-- </div> -->


        <!-- <div class=\"section bg-light\" id=\"section-menu\" data-aos=\"fade-up\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row section-heading justify-content-center mb-5\"> -->
              <!-- <div class=\"col-md-8 text-center\"> -->
                <!-- <h2 class=\"heading mb-3\">Menu</h2> -->
                <!-- <p class=\"sub-heading mb-5\">Free Website Template For Restaurants Made by Colorlib</p>   -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row justify-content-center\"> -->
              <!-- <div class=\"col-md-8\"> -->
                <!-- <ul class=\"nav site-tab-nav\" id=\"pills-tab\" role=\"tablist\"> -->
                  <!-- <li class=\"nav-item\"> -->
                    <!-- <a class=\"nav-link active\" id=\"pills-breakfast-tab\" data-toggle=\"pill\" href=\"#pills-breakfast\" role=\"tab\" aria-controls=\"pills-breakfast\" aria-selected=\"true\">Breakfast</a> -->
                  <!-- </li> -->
                  <!-- <li class=\"nav-item\"> -->
                    <!-- <a class=\"nav-link\" id=\"pills-lunch-tab\" data-toggle=\"pill\" href=\"#pills-lunch\" role=\"tab\" aria-controls=\"pills-lunch\" aria-selected=\"false\">Brunch</a> -->
                  <!-- </li> -->
                  <!-- <li class=\"nav-item\"> -->
                    <!-- <a class=\"nav-link\" id=\"pills-dinner-tab\" data-toggle=\"pill\" href=\"#pills-dinner\" role=\"tab\" aria-controls=\"pills-dinner\" aria-selected=\"false\">Dinner</a> -->
                  <!-- </li> -->
                <!-- </ul> -->
                <!-- <div class=\"tab-content\" id=\"pills-tabContent\"> -->
                  <!-- <div class=\"tab-pane fade show active\" id=\"pills-breakfast\" role=\"tabpanel\" aria-labelledby=\"pills-breakfast-tab\"> -->
                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->

                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_1.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Warm Spinach Dip &amp; Chips</a></h3> -->
                        <!-- <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp; salsa.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$10.49</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->
                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_2.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Key Wast Machos</a></h3> -->
                        <!-- <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef, melted cheese, pickled jalapeños, guacamole, sour cream and salsa.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$11.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_3.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Crispy Onions Rings</a></h3> -->
                        <!-- <p>A heaping mountain of rings, handmade with Panko breading and shredded coconut flakes.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$11.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_1.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Lobster &amp; Shrimp Quesadilla</a></h3> -->
                        <!-- <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three cheese blend. Griddled and served with tomato salsa and sour cream.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$13.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->


                  <!-- </div> -->
                  <!-- <div class=\"tab-pane fade\" id=\"pills-lunch\" role=\"tabpanel\" aria-labelledby=\"pills-lunch-tab\"> -->
                    
                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_2.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Jumbo Lump Crab Stack</a></h3> -->
                        <!-- <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp; salsa.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$12.49</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_1.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Jamaican Chicken Wings</a></h3> -->
                        <!-- <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef, melted cheese, pickled jalapeños, guacamole, sour cream and salsa.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$15.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_3.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Bahamian Seafood Chowder</a></h3> -->
                        <!-- <p>A heaping mountain of rings, handmade with Panko breading and shredded coconut flakes.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$10.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item --> 
                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_2.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Grilled Chicken &amp; Tropical Fruit on Mixed Greens</a></h3> -->
                        <!-- <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three cheese blend. Griddled and served with tomato salsa and sour cream.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$12.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->

                  <!-- </div> -->
                  <!-- <div class=\"tab-pane fade\" id=\"pills-dinner\" role=\"tabpanel\" aria-labelledby=\"pills-dinner-tab\"> -->
                    
                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_3.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Grilled Top Sirlion Steak</a></h3> -->
                        <!-- <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp; salsa.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$18.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item --> 

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_1.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Steak Oscar</a></h3> -->
                        <!-- <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef, melted cheese, pickled jalapeños, guacamole, sour cream and salsa.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$23.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item --> 

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_2.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Skirt Steak Churrasco</a></h3> -->
                        <!-- <p>A heaping mountain of rings, handmade with Panko breading and shredded coconut flakes.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$20.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item --> 

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_3.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Grilled Beef Steak</a></h3> -->
                        <!-- <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three cheese blend. Griddled and served with tomato salsa and sour cream.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$20.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item --> 

                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              
            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> <!-- .section --> 

        <!-- <div class=\"section bg-white services-section\" data-aos=\"fade-up\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row section-heading justify-content-center mb-5\"> -->
              <!-- <div class=\"col-md-8 text-center\"> -->
                <!-- <h2 class=\"heading mb-3\">Other Services</h2> -->
                <!-- <p class=\"sub-heading mb-5\">Free Website Template For Restaurants Made by Colorlib</p>   -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row\"> -->
              <!-- <div class=\"col-m mb-5d-6 col-lg-4\" data-aos=\"fade-up\"> -->
                <!-- <div class=\"media feature-icon d-block text-center\"> -->
                  <!-- <div class=\"icon\"> -->
                    <!-- <span class=\"flaticon-soup\"></span> -->
                  <!-- </div> -->
                  <!-- <div class=\"media-body\"> -->
                    <!-- <h3>Quality Cuisine</h3> -->
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              <!-- <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\"> -->
                <!-- <div class=\"media feature-icon d-block text-center\"> -->
                  <!-- <div class=\"icon\"> -->
                    <!-- <span class=\"flaticon-vegetables\"></span> -->
                  <!-- </div> -->
                  <!-- <div class=\"media-body\"> -->
                    <!-- <h3>Fresh Food</h3> -->
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              <!-- <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"300\"> -->
                <!-- <div class=\"media feature-icon d-block text-center\"> -->
                  <!-- <div class=\"icon\"> -->
                    <!-- <span class=\"flaticon-pancake\"></span> -->
                  <!-- </div> -->
                  <!-- <div class=\"media-body\"> -->
                    <!-- <h3>Bread &amp; Pancake</h3> -->
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              <!-- <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"500\"> -->
                <!-- <div class=\"media feature-icon d-block text-center\"> -->
                  <!-- <div class=\"icon\"> -->
                    <!-- <span class=\"flaticon-tray\"></span> -->
                  <!-- </div> -->
                  <!-- <div class=\"media-body\"> -->
                    <!-- <h3>Reserve Now</h3> -->
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->

              <!-- <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"300\"> -->
                <!-- <div class=\"media feature-icon d-block text-center\"> -->
                  <!-- <div class=\"icon\"> -->
                    <!-- <span class=\"flaticon-salad\"></span> -->
                  <!-- </div> -->
                  <!-- <div class=\"media-body\"> -->
                    <!-- <h3>Fresh Vegies Salad</h3> -->
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              <!-- <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"500\"> -->
                <!-- <div class=\"media feature-icon d-block text-center\"> -->
                  <!-- <div class=\"icon\"> -->
                    <!-- <span class=\"flaticon-chicken\"></span> -->
                  <!-- </div> -->
                  <!-- <div class=\"media-body\"> -->
                    <!-- <h3>Whole Chicken</h3> -->
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->

            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> <!-- .section --> 

        <!-- <div class=\"section bg-light\" data-aos=\"fade-up\" id=\"section-reservation\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row section-heading justify-content-center mb-5\"> -->
              <!-- <div class=\"col-md-8 text-center\"> -->
                <!-- <h2 class=\"heading mb-3\">Reservation</h2> -->
                <!-- <p class=\"sub-heading mb-5\">Free Website Template For Restaurants Made by Colorlib</p>   -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row justify-content-center\"> -->
              <!-- <div class=\"col-md-10 p-5 form-wrap\"> -->
                <!-- <form action=\"#\"> -->
                  <!-- <div class=\"row mb-4\"> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"name\" class=\"label\">Name</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-android-person\"></span> -->
                        <!-- <input type=\"text\" class=\"form-control\" id=\"name\"> -->
                      <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"email\" class=\"label\">Email</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-email\"></span> -->
                        <!-- <input type=\"email\" class=\"form-control\" id=\"email\"> -->
                      <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"phone\" class=\"label\">Phone</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-android-call\"></span> -->
                        <!-- <input type=\"text\" class=\"form-control\" id=\"phone\"> -->
                      <!-- </div> -->
                    <!-- </div> -->

                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"persons\" class=\"label\">Number of Persons</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-android-arrow-dropdown\"></span> -->
                        <!-- <select name=\"persons\" id=\"persons\" class=\"form-control\"> -->
                          <!-- <option value=\"\">1 person</option> -->
                          <!-- <option value=\"\">2 persons</option> -->
                          <!-- <option value=\"\">3 persons</option> -->
                          <!-- <option value=\"\">4 persons</option> -->
                          <!-- <option value=\"\">5+ persons</option> -->
                        <!-- </select> -->
                      <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"date\" class=\"label\">Date</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-calendar\"></span> -->
                        <!-- <input type=\"text\" class=\"form-control\" id=\"date\"> -->
                      <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"time\" class=\"label\">Time</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-android-time\"></span> -->
                        <!-- <input type=\"text\" class=\"form-control\" id=\"time\"> -->
                      <!-- </div> -->
                    <!-- </div> -->
                  <!-- </div> -->
                  <!-- <div class=\"row justify-content-center\"> -->
                    <!-- <div class=\"col-md-4\"> -->
                      <!-- <input type=\"submit\" class=\"btn btn-primary btn-outline-primary btn-block\" value=\"Reserve Now\"> -->
                    <!-- </div> -->
                  <!-- </div> -->
                <!-- </form> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> <!-- .section --> 

         <!-- <div class=\"section bg-white\"  data-aos=\"fade-up\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row section-heading justify-content-center mb-5\"> -->
              <!-- <div class=\"col-md-8 text-center\"> -->
                <!-- <h2 class=\"heading mb-3\">Customer Reviews</h2> -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row justify-content-center text-center\" data-aos=\"fade-up\"> -->
              <!-- <div class=\"col-md-8\"> -->
                <!-- <div class=\"owl-carousel home-slider-loop-false\"> -->

                
                  <!-- <div class=\"item\"> -->
                    <!-- <blockquote class=\"testimonial\"> -->
                      <!-- <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p> -->
                      <!-- <div class=\"author\"> -->
                        <!-- <img src=\"images/person_1.jpg\" alt=\"Image placeholder\" class=\"mb-3\"> -->
                        <!-- <h4>Maxim Smith</h4> -->
                        <!-- <p>CEO, Founder</p> -->
                      <!-- </div> -->
                    <!-- </blockquote> -->
                  <!-- </div> -->
                  <!-- <div class=\"item\"> -->
                    <!-- <blockquote class=\"testimonial\"> -->
                      <!-- <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p> -->
                      <!-- <div class=\"author\"> -->
                        <!-- <img src=\"images/person_2.jpg\" alt=\"Image placeholder\" class=\"mb-3\"> -->
                        <!-- <h4>Geert Green</h4> -->
                        <!-- <p>CEO, Founder</p> -->
                      <!-- </div> -->
                    <!-- </blockquote> -->
                  <!-- </div> -->
                  <!-- <div class=\"item\"> -->
                    <!-- <blockquote class=\"testimonial\"> -->
                      <!-- <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p> -->
                      <!-- <div class=\"author\"> -->
                        <!-- <img src=\"images/person_3.jpg\" alt=\"Image placeholder\" class=\"mb-3\"> -->
                        <!-- <h4>Dennis Roman</h4> -->
                        <!-- <p>CEO, Founder</p> -->
                      <!-- </div> -->
                    <!-- </blockquote> -->
                  <!-- </div> -->
                  <!-- <div class=\"item\"> -->
                    <!-- <blockquote class=\"testimonial\"> -->
                      <!-- <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.&rdquo;</p> -->
                      <!-- <div class=\"author\"> -->
                        <!-- <img src=\"images/person_2.jpg\" alt=\"Image placeholder\" class=\"mb-3\"> -->
                        <!-- <h4>Geert Green</h4> -->
                        <!-- <p>CEO, Founder</p> -->
                      <!-- </div> -->
                    <!-- </blockquote> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div>   -->
        <!-- </div> <!-- .section --> 

        <!-- <div class=\"section\" data-aos=\"fade-up\" id=\"section-contact\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row section-heading justify-content-center mb-5\"> -->
              <!-- <div class=\"col-md-8 text-center\"> -->
                <!-- <h2 class=\"heading mb-3\">Get In Touch</h2> -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row justify-content-center\"> -->
              <!-- <div class=\"col-md-10 p-5 form-wrap\"> -->
                <!-- <form action=\"#\"> -->
                  <!-- <div class=\"row mb-4\"> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"name\" class=\"label\">Name</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-android-person\"></span> -->
                        <!-- <input type=\"text\" class=\"form-control\" id=\"name\"> -->
                      <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"email\" class=\"label\">Email</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-email\"></span> -->
                        <!-- <input type=\"email\" class=\"form-control\" id=\"email\"> -->
                      <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"phone\" class=\"label\">Phone</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-android-call\"></span> -->
                        <!-- <input type=\"text\" class=\"form-control\" id=\"phone\"> -->
                      <!-- </div> -->
                    <!-- </div> -->

                   <!-- <div class=\"form-group col-md-12\"> -->
                      <!-- <label for=\"message\" class=\"label\">Message</label> -->
                     <!-- <textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"10\" class=\"form-control\"></textarea> -->
                   <!-- </div> -->
                  <!-- </div> -->
                  <!-- <div class=\"row justify-content-center\"> -->
                    <!-- <div class=\"col-md-4\"> -->
                      <!-- <input type=\"submit\" class=\"btn btn-primary btn-outline-primary btn-block\" value=\"Send Message\"> -->
                    <!-- </div> -->
                  <!-- </div> -->
                <!-- </form> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> <!-- .section -->

        <!-- <div class=\"map-wrap\" id=\"map\"  data-aos=\"fade\"></div> -->


        <!-- <footer class=\"ftco-footer\"> -->
          <!-- <div class=\"container\"> -->
            
            <!-- <div class=\"row\"> -->
            <!-- <div class=\"col-md-4 mb-5\"> -->
              <!-- <div class=\"footer-widget\"> -->
                <!-- <h3 class=\"mb-4\">About Meal</h3> -->
                <!-- <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. </p> -->
                
                <!-- <p><a href=\"#\" class=\"btn btn-primary btn-outline-primary\">Read More</a></p> -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"col-md-4 mb-5\"> -->
              <!-- <div class=\"footer-widget\"> -->
                <!-- <h3 class=\"mb-4\">Lunch Service</h3> -->
                <!-- <p>Booking from 12:00pm &mdash; 1:30pm</p> -->
                <!-- <h3 class=\"mb-4\">Dinner Service</h3> -->
                <!-- <p>Everyday: <br> Booking from 6:00pm &mdash; 9:00pm</p> -->
              <!-- </div> -->
            <!-- </div> -->

            <!-- <div class=\"col-md-4\"> -->
              <!-- <div class=\"footer-widget\"> -->
                <!-- <h3 class=\"mb-4\">Follow Along</h3> -->
                <!-- <ul class=\"list-unstyled social\"> -->
                  <!-- <li><a href=\"#\"><span class=\"fa fa-tripadvisor\"></span></a></li> -->
                  <!-- <li><a href=\"#\"><span class=\"fa fa-twitter\"></span></a></li> -->
                  <!-- <li><a href=\"#\"><span class=\"fa fa-facebook\"></span></a></li> -->
                  <!-- <li><a href=\"#\"><span class=\"fa fa-instagram\"></span></a></li> -->
                <!-- </ul> -->
              <!-- </div> -->
              <!-- <div class=\"footer-widget\"> -->
                <!-- <h3 class=\"mb-4\">Newsletter</h3> -->
                <!-- <form action=\"#\" class=\"ftco-footer-newsletter\"> -->
                  <!-- <div class=\"form-group\"> -->
                    <!-- <button class=\"button\"><span class=\"fa fa-envelope\"></span></button> -->
                    <!-- <input type=\"email\" class=\"form-control\" placeholder=\"Enter Email\"> -->
                  <!-- </div> -->
                <!-- </form> -->
              <!-- </div> -->
            <!-- </div> -->

            <!-- </div> -->

            <!-- <div class=\"row pt-5\"> -->
              <!-- <div class=\"col-md-12 text-center\"> -->
                <!-- <p> -->

            <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart text-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\" >Colorlib</a> -->

            <!-- </p> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
        <!-- </footer> -->
      
    <!-- </div> -->

    <!-- loader -->
    <!-- <div id=\"loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#ff7a5c\"/></svg></div> -->

    <script src=\"";
        // line 715
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 715, $this->source); })()), "html", null, true);
        echo "js/jquery-3.2.1.min.js\"></script>
    <script src=\"";
        // line 716
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 716, $this->source); })()), "html", null, true);
        echo "js/jquery-migrate-3.0.1.min.js\"></script>
    <script src=\"";
        // line 717
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 717, $this->source); })()), "html", null, true);
        echo "js/popper.min.js\"></script>
    <script src=\"";
        // line 718
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 718, $this->source); })()), "html", null, true);
        echo "js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 719
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 719, $this->source); })()), "html", null, true);
        echo "js/owl.carousel.min.js\"></script>
    <script src=\"";
        // line 720
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 720, $this->source); })()), "html", null, true);
        echo "js/jquery.waypoints.min.js\"></script>

    <script src=\"";
        // line 722
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 722, $this->source); })()), "html", null, true);
        echo "js/bootstrap-datepicker.js\"></script>
    <script src=\"";
        // line 723
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 723, $this->source); })()), "html", null, true);
        echo "js/jquery.timepicker.min.js\"></script>
    <script src=\"";
        // line 724
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 724, $this->source); })()), "html", null, true);
        echo "js/jquery.stellar.min.js\"></script>

    <script src=\"";
        // line 726
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 726, $this->source); })()), "html", null, true);
        echo "js/jquery.easing.1.3.js\"></script>    

    <script src=\"";
        // line 728
        echo twig_escape_filter($this->env, (isset($context["racine"]) || array_key_exists("racine", $context) ? $context["racine"] : (function () { throw new RuntimeError('Variable "racine" does not exist.', 728, $this->source); })()), "html", null, true);
        echo "js/aos.js\"></script>
    

    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>

    <script src=\"js/main.js\"></script>
        ";
        // line 734
        $this->displayBlock('body', $context, $blocks);
        // line 735
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 736
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 734
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 735
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  953 => 735,  935 => 734,  917 => 6,  898 => 5,  886 => 736,  883 => 735,  881 => 734,  872 => 728,  867 => 726,  862 => 724,  858 => 723,  854 => 722,  849 => 720,  845 => 719,  841 => 718,  837 => 717,  833 => 716,  829 => 715,  212 => 100,  207 => 97,  203 => 95,  199 => 93,  195 => 91,  193 => 90,  190 => 89,  186 => 87,  182 => 85,  180 => 84,  175 => 81,  173 => 80,  162 => 72,  119 => 32,  113 => 29,  108 => 27,  104 => 26,  99 => 24,  95 => 23,  90 => 21,  86 => 20,  81 => 18,  77 => 17,  73 => 16,  65 => 10,  63 => 9,  59 => 7,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
\t\t
\t{% set racine = 'https://localhost:8000/' %}
    <body>
\t    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"{{racine}}css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"{{racine}}css/animate.css\">
    <link rel=\"stylesheet\" href=\"{{racine}}css/owl.carousel.min.css\">

    <link rel=\"stylesheet\" href=\"{{racine}}css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"{{racine}}css/aos.css\">

    <link rel=\"stylesheet\" href=\"{{racine}}css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"{{racine}}css/jquery.timepicker.css\">

    <link rel=\"stylesheet\" href=\"{{racine}}fonts/ionicons/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"{{racine}}fonts/fontawesome/css/font-awesome.min.css\">

    <link rel=\"stylesheet\" href=\"{{racine}}fonts/flaticon/font/flaticon.css\">

    <!-- Theme Style -->
    <link rel=\"stylesheet\" href=\"{{racine}}css/style.css\">

  </head>
  <body class=\"bg-light\">

    <body data-spy=\"scroll\" data-target=\"#ftco-navbar-spy\" data-offset=\"0\">

    <div class=\"site-wrap\">
      
      <nav class=\"site-menu\" id=\"ftco-navbar-spy\">
        <div class=\"site-menu-inner\" id=\"ftco-navbar\">
          <ul class=\"list-unstyled\">
            <li><a href=\"#section-home\">Home</a></li>
            <li><a href=\"#section-about\">About Us</a></li>
            <li><a href=\"#section-menu\">Our Menu</a></li>
            <li><a href=\"#section-reservation\">Reserve A Table</a></li>
            <li><a href=\"#section-contact\">Contact</a></li>
          </ul>
        </div>
      </nav>

      <header class=\"site-header\">
        <div class=\"row align-items-center\">
          <div class=\"col-5 col-md-3\">
             
          </div>
          <div class=\"col-2 col-md-6 text-center site-logo-wrap\">
            <a href=\"index.html\" class=\"site-logo\">T</a>
          </div>
          <div class=\"col-5 col-md-3 text-right menu-burger-wrap\">
            <a href=\"#\" class=\"site-nav-toggle js-site-nav-toggle\"><i></i></a>

          </div>
        </div>
       
      </header> <!-- site-header -->
      
      <div class=\"main-wrap \" id=\"section-home\">

        <div class=\"cover_1 overlay bg-light\">
          <div class=\"img_bg\" style=\"background-image: url({{racine}}images/depannage.jpg);\" data-stellar-background-ratio=\"0.5\">
            <div class=\"container\">
              <div class=\"row align-items-center justify-content-center text-center\">
                <div class=\"col-md-10\" data-aos=\"fade-up\">
                  <h2 class=\"heading mb-5\">Bienvenue sur troubleshooting</h2>
                  <p><a href=\"#section-reservation\" class=\"smoothscroll btn btn-outline-white px-5 py-3\">OUvrir un ticket</a></p>
\t\t\t\t  \t<a class=\"btn btn-success\" href=\"/connexion\">Connexion</a>
\t\t\t\t\t
\t\t\t\t\t{% if app.user is not null %}
\t\t\t\t\t<a class=\"btn btn-secondary\">Inscription</a>
\t\t\t\t\t<a class=\"btn btn-danger\" href=\"/deconnexion\">Deconnexion</a>
\t\t\t\t\t
\t\t\t\t\t{% if app.user.email == \"admin@troubleshooting.com\" %}
\t\t\t\t\t<a class=\"btn btn-info\" href=\"/admin\">Admin</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t<a class=\"btn btn-secondary\">Admin</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t\t{% if app.user.email == \"client@troubleshooting.com\" %}
\t\t\t\t\t<a class=\"btn btn-info\" href=\"/myticket\">Tickets</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t<a class=\"btn btn-secondary\">Tickets</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t\t{% else %}
\t\t\t\t\t<a class=\"btn btn-warning\" href=\"/inscription\">Inscription</a>
\t\t\t\t\t<a class=\"btn btn-secondary\" >Deconnexion</a>
\t\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t\t
                </div>
              </div>
            </div>
          </div>
        </div> <!-- .cover_1 -->

        <!-- <div class=\"section\"  data-aos=\"fade-up\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row section-heading justify-content-center mb-5\"> -->
              <!-- <div class=\"col-md-8 text-center\"> -->
                <!-- <h2 class=\"heading mb-3\">Find your best food</h2> -->
                <!-- <p class=\"sub-heading mb-5\">Free Website Template For Restaurants Made by Colorlib</p>   -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row\"> -->

              <!-- <div class=\"ftco-46\"> -->
                <!-- <div class=\"ftco-46-row d-flex flex-column flex-lg-row\"> -->
                  <!-- <div class=\"ftco-46-image\" style=\"background-image: url(images/img_1.jpg);\"></div> -->
                  <!-- <div class=\"ftco-46-text ftco-46-arrow-left\"> -->
                    <!-- <h4 class=\"ftco-46-subheading\">Vegies</h4> -->
                    <!-- <h3 class=\"ftco-46-heading\">Beef Empanadas</h3> -->
                    <!-- <p class=\"mb-5\">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
                    <!-- <p><a href=\"#\" class=\"btn-link\">Learn More <span class=\"ion-android-arrow-forward\"></span></a></p> -->
                  <!-- </div> -->
                  <!-- <div class=\"ftco-46-image\" style=\"background-image: url(images/img_2.jpg);\"></div>  -->
                <!-- </div> -->

                <!-- <div class=\"ftco-46-row d-flex flex-column flex-lg-row\"> -->
                  <!-- <div class=\"ftco-46-text ftco-46-arrow-right\"> -->
                    <!-- <h4 class=\"ftco-46-subheading\">Food</h4> -->
                    <!-- <h3 class=\"ftco-46-heading\">Buttermilk Chicken Jibaritos</h3> -->
                    <!-- <p class=\"mb-5\">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                    <!-- <p><a href=\"#\" class=\"btn-link\">Learn More <span class=\"ion-android-arrow-forward\"></span></a></p> -->
                  <!-- </div> -->
                  <!-- <div class=\"ftco-46-image\" style=\"background-image: url(images/img_3.jpg);\"></div> -->
                  <!-- <div class=\"ftco-46-text ftco-46-arrow-up\"> -->
                    <!-- <h4 class=\"ftco-46-subheading\">Food</h4> -->
                    <!-- <h3 class=\"ftco-46-heading\">Chicken Chimichurri Croquettes</h3> -->
                    <!-- <p class=\"mb-5\">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p> -->
                    <!-- <p><a href=\"#\" class=\"btn-link\">Learn More <span class=\"ion-android-arrow-forward\"></span></a></p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->

            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> <!-- .section -->

        <!-- <div class=\"section pb-3 bg-white\" id=\"section-about\" data-aos=\"fade-up\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row align-items-center justify-content-center\"> -->
              <!-- <div class=\"col-md-12 col-lg-8 section-heading\"> -->
                <!-- <h2 class=\"heading mb-5\">The Restaurant</h2> -->
                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
                <!-- <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> <!-- .section --> 
        

        <!-- <div class=\"section bg-white pt-2 pb-2 text-center\" data-aos=\"fade\"> -->
          <!-- <p><img src=\"images/bg_hero.png\" alt=\"Image\" class=\"img-fluid\"></p> -->
        <!-- </div> <!-- .section -->

        <!-- <div class=\"section bg-white\" data-aos=\"fade-up\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row mb-5\"> -->
              <!-- <div class=\"col-md-12 section-heading text-center\"> -->
                <!-- <h2 class=\"heading mb-5\">Meet The Chefs</h2> -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row\"> -->
              <!-- <div class=\"col-md-6 pr-md-5 text-center mb-5\"> -->
                <!-- <div class=\"ftco-38\"> -->
                  <!-- <div class=\"ftco-38-img\"> -->
                    <!-- <div class=\"ftco-38-header\"> -->
                      <!-- <img src=\"images/chef_1.jpg\" alt=\"Image\"> -->
                      <!-- <h3 class=\"ftco-38-heading\">Daniel Graham</h3> -->
                      <!-- <p class=\"ftco-38-subheading\">Master Chef</p> -->
                    <!-- </div> -->
                    <!-- <div class=\"ftco-38-body\"> -->
                      <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
                      <!-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. It is a paradisematic country.</p> -->
                      <!-- <p> -->
                        <!-- <a href=\"#\" class=\"p-2\"><span class=\"fa fa-facebook\"></span></a> -->
                        <!-- <a href=\"#\" class=\"p-2\"><span class=\"fa fa-twitter\"></span></a> -->
                        <!-- <a href=\"#\" class=\"p-2\"><span class=\"fa fa-instagram\"></span></a> -->
                      <!-- </p> -->
                    <!-- </div> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              <!-- <div class=\"col-md-6 pl-md-5 text-center mb-5\"> -->
                <!-- <div class=\"ftco-38\"> -->
                  <!-- <div class=\"ftco-38-img\"> -->
                    <!-- <div class=\"ftco-38-header\"> -->
                      <!-- <img src=\"images/chef_2.jpg\" alt=\"Image\"> -->
                      <!-- <h3 class=\"ftco-38-heading\">Nick Browning</h3> -->
                      <!-- <p class=\"ftco-38-subheading\">Master Chef</p> -->
                    <!-- </div> -->
                    <!-- <div class=\"ftco-38-body\"> -->
                      <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
                      <!-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. It is a paradisematic country.</p> -->
                      <!-- <p> -->
                        <!-- <a href=\"#\" class=\"p-2\"><span class=\"fa fa-facebook\"></span></a> -->
                        <!-- <a href=\"#\" class=\"p-2\"><span class=\"fa fa-twitter\"></span></a> -->
                        <!-- <a href=\"#\" class=\"p-2\"><span class=\"fa fa-instagram\"></span></a> -->
                      <!-- </p> -->
                    <!-- </div> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              <!-- <div class=\"col-md-4\"></div> -->
            <!-- </div> -->
          <!-- </div> -->


        <!-- <div class=\"section bg-light\" id=\"section-menu\" data-aos=\"fade-up\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row section-heading justify-content-center mb-5\"> -->
              <!-- <div class=\"col-md-8 text-center\"> -->
                <!-- <h2 class=\"heading mb-3\">Menu</h2> -->
                <!-- <p class=\"sub-heading mb-5\">Free Website Template For Restaurants Made by Colorlib</p>   -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row justify-content-center\"> -->
              <!-- <div class=\"col-md-8\"> -->
                <!-- <ul class=\"nav site-tab-nav\" id=\"pills-tab\" role=\"tablist\"> -->
                  <!-- <li class=\"nav-item\"> -->
                    <!-- <a class=\"nav-link active\" id=\"pills-breakfast-tab\" data-toggle=\"pill\" href=\"#pills-breakfast\" role=\"tab\" aria-controls=\"pills-breakfast\" aria-selected=\"true\">Breakfast</a> -->
                  <!-- </li> -->
                  <!-- <li class=\"nav-item\"> -->
                    <!-- <a class=\"nav-link\" id=\"pills-lunch-tab\" data-toggle=\"pill\" href=\"#pills-lunch\" role=\"tab\" aria-controls=\"pills-lunch\" aria-selected=\"false\">Brunch</a> -->
                  <!-- </li> -->
                  <!-- <li class=\"nav-item\"> -->
                    <!-- <a class=\"nav-link\" id=\"pills-dinner-tab\" data-toggle=\"pill\" href=\"#pills-dinner\" role=\"tab\" aria-controls=\"pills-dinner\" aria-selected=\"false\">Dinner</a> -->
                  <!-- </li> -->
                <!-- </ul> -->
                <!-- <div class=\"tab-content\" id=\"pills-tabContent\"> -->
                  <!-- <div class=\"tab-pane fade show active\" id=\"pills-breakfast\" role=\"tabpanel\" aria-labelledby=\"pills-breakfast-tab\"> -->
                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->

                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_1.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Warm Spinach Dip &amp; Chips</a></h3> -->
                        <!-- <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp; salsa.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$10.49</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->
                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_2.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Key Wast Machos</a></h3> -->
                        <!-- <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef, melted cheese, pickled jalapeños, guacamole, sour cream and salsa.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$11.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_3.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Crispy Onions Rings</a></h3> -->
                        <!-- <p>A heaping mountain of rings, handmade with Panko breading and shredded coconut flakes.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$11.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_1.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Lobster &amp; Shrimp Quesadilla</a></h3> -->
                        <!-- <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three cheese blend. Griddled and served with tomato salsa and sour cream.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$13.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->


                  <!-- </div> -->
                  <!-- <div class=\"tab-pane fade\" id=\"pills-lunch\" role=\"tabpanel\" aria-labelledby=\"pills-lunch-tab\"> -->
                    
                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_2.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Jumbo Lump Crab Stack</a></h3> -->
                        <!-- <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp; salsa.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$12.49</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_1.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Jamaican Chicken Wings</a></h3> -->
                        <!-- <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef, melted cheese, pickled jalapeños, guacamole, sour cream and salsa.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$15.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_3.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Bahamian Seafood Chowder</a></h3> -->
                        <!-- <p>A heaping mountain of rings, handmade with Panko breading and shredded coconut flakes.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$10.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item --> 
                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_2.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Grilled Chicken &amp; Tropical Fruit on Mixed Greens</a></h3> -->
                        <!-- <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three cheese blend. Griddled and served with tomato salsa and sour cream.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$12.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item -->

                  <!-- </div> -->
                  <!-- <div class=\"tab-pane fade\" id=\"pills-dinner\" role=\"tabpanel\" aria-labelledby=\"pills-dinner-tab\"> -->
                    
                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_3.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Grilled Top Sirlion Steak</a></h3> -->
                        <!-- <p>Spinach and artichokes in a creamy cheese dip with warm tortilla chips &amp; salsa.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$18.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item --> 

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_1.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Steak Oscar</a></h3> -->
                        <!-- <p>Crisp tortilla and plantain chips covered with lightly spiced ground beef, melted cheese, pickled jalapeños, guacamole, sour cream and salsa.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$23.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item --> 

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_2.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Skirt Steak Churrasco</a></h3> -->
                        <!-- <p>A heaping mountain of rings, handmade with Panko breading and shredded coconut flakes.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$20.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item --> 

                    <!-- <div class=\"d-block d-md-flex menu-food-item\"> -->
                      <!-- <div class=\"text order-1 mb-3\"> -->
                        <!-- <img src=\"images/img_3.jpg\" alt=\"Image\"> -->
                        <!-- <h3><a href=\"#\">Grilled Beef Steak</a></h3> -->
                        <!-- <p>Lobster and tender shrimp, with onions, sweet peppers, spinach and our three cheese blend. Griddled and served with tomato salsa and sour cream.</p> -->
                      <!-- </div> -->
                      <!-- <div class=\"price order-2\"> -->
                        <!-- <strong>\$20.99</strong> -->
                      <!-- </div> -->
                    <!-- </div> <!-- .menu-food-item --> 

                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              
            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> <!-- .section --> 

        <!-- <div class=\"section bg-white services-section\" data-aos=\"fade-up\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row section-heading justify-content-center mb-5\"> -->
              <!-- <div class=\"col-md-8 text-center\"> -->
                <!-- <h2 class=\"heading mb-3\">Other Services</h2> -->
                <!-- <p class=\"sub-heading mb-5\">Free Website Template For Restaurants Made by Colorlib</p>   -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row\"> -->
              <!-- <div class=\"col-m mb-5d-6 col-lg-4\" data-aos=\"fade-up\"> -->
                <!-- <div class=\"media feature-icon d-block text-center\"> -->
                  <!-- <div class=\"icon\"> -->
                    <!-- <span class=\"flaticon-soup\"></span> -->
                  <!-- </div> -->
                  <!-- <div class=\"media-body\"> -->
                    <!-- <h3>Quality Cuisine</h3> -->
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              <!-- <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\"> -->
                <!-- <div class=\"media feature-icon d-block text-center\"> -->
                  <!-- <div class=\"icon\"> -->
                    <!-- <span class=\"flaticon-vegetables\"></span> -->
                  <!-- </div> -->
                  <!-- <div class=\"media-body\"> -->
                    <!-- <h3>Fresh Food</h3> -->
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              <!-- <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"300\"> -->
                <!-- <div class=\"media feature-icon d-block text-center\"> -->
                  <!-- <div class=\"icon\"> -->
                    <!-- <span class=\"flaticon-pancake\"></span> -->
                  <!-- </div> -->
                  <!-- <div class=\"media-body\"> -->
                    <!-- <h3>Bread &amp; Pancake</h3> -->
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              <!-- <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"500\"> -->
                <!-- <div class=\"media feature-icon d-block text-center\"> -->
                  <!-- <div class=\"icon\"> -->
                    <!-- <span class=\"flaticon-tray\"></span> -->
                  <!-- </div> -->
                  <!-- <div class=\"media-body\"> -->
                    <!-- <h3>Reserve Now</h3> -->
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->

              <!-- <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"300\"> -->
                <!-- <div class=\"media feature-icon d-block text-center\"> -->
                  <!-- <div class=\"icon\"> -->
                    <!-- <span class=\"flaticon-salad\"></span> -->
                  <!-- </div> -->
                  <!-- <div class=\"media-body\"> -->
                    <!-- <h3>Fresh Vegies Salad</h3> -->
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
              <!-- <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"500\"> -->
                <!-- <div class=\"media feature-icon d-block text-center\"> -->
                  <!-- <div class=\"icon\"> -->
                    <!-- <span class=\"flaticon-chicken\"></span> -->
                  <!-- </div> -->
                  <!-- <div class=\"media-body\"> -->
                    <!-- <h3>Whole Chicken</h3> -->
                    <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->

            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> <!-- .section --> 

        <!-- <div class=\"section bg-light\" data-aos=\"fade-up\" id=\"section-reservation\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row section-heading justify-content-center mb-5\"> -->
              <!-- <div class=\"col-md-8 text-center\"> -->
                <!-- <h2 class=\"heading mb-3\">Reservation</h2> -->
                <!-- <p class=\"sub-heading mb-5\">Free Website Template For Restaurants Made by Colorlib</p>   -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row justify-content-center\"> -->
              <!-- <div class=\"col-md-10 p-5 form-wrap\"> -->
                <!-- <form action=\"#\"> -->
                  <!-- <div class=\"row mb-4\"> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"name\" class=\"label\">Name</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-android-person\"></span> -->
                        <!-- <input type=\"text\" class=\"form-control\" id=\"name\"> -->
                      <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"email\" class=\"label\">Email</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-email\"></span> -->
                        <!-- <input type=\"email\" class=\"form-control\" id=\"email\"> -->
                      <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"phone\" class=\"label\">Phone</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-android-call\"></span> -->
                        <!-- <input type=\"text\" class=\"form-control\" id=\"phone\"> -->
                      <!-- </div> -->
                    <!-- </div> -->

                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"persons\" class=\"label\">Number of Persons</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-android-arrow-dropdown\"></span> -->
                        <!-- <select name=\"persons\" id=\"persons\" class=\"form-control\"> -->
                          <!-- <option value=\"\">1 person</option> -->
                          <!-- <option value=\"\">2 persons</option> -->
                          <!-- <option value=\"\">3 persons</option> -->
                          <!-- <option value=\"\">4 persons</option> -->
                          <!-- <option value=\"\">5+ persons</option> -->
                        <!-- </select> -->
                      <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"date\" class=\"label\">Date</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-calendar\"></span> -->
                        <!-- <input type=\"text\" class=\"form-control\" id=\"date\"> -->
                      <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"time\" class=\"label\">Time</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-android-time\"></span> -->
                        <!-- <input type=\"text\" class=\"form-control\" id=\"time\"> -->
                      <!-- </div> -->
                    <!-- </div> -->
                  <!-- </div> -->
                  <!-- <div class=\"row justify-content-center\"> -->
                    <!-- <div class=\"col-md-4\"> -->
                      <!-- <input type=\"submit\" class=\"btn btn-primary btn-outline-primary btn-block\" value=\"Reserve Now\"> -->
                    <!-- </div> -->
                  <!-- </div> -->
                <!-- </form> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> <!-- .section --> 

         <!-- <div class=\"section bg-white\"  data-aos=\"fade-up\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row section-heading justify-content-center mb-5\"> -->
              <!-- <div class=\"col-md-8 text-center\"> -->
                <!-- <h2 class=\"heading mb-3\">Customer Reviews</h2> -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row justify-content-center text-center\" data-aos=\"fade-up\"> -->
              <!-- <div class=\"col-md-8\"> -->
                <!-- <div class=\"owl-carousel home-slider-loop-false\"> -->

                
                  <!-- <div class=\"item\"> -->
                    <!-- <blockquote class=\"testimonial\"> -->
                      <!-- <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p> -->
                      <!-- <div class=\"author\"> -->
                        <!-- <img src=\"images/person_1.jpg\" alt=\"Image placeholder\" class=\"mb-3\"> -->
                        <!-- <h4>Maxim Smith</h4> -->
                        <!-- <p>CEO, Founder</p> -->
                      <!-- </div> -->
                    <!-- </blockquote> -->
                  <!-- </div> -->
                  <!-- <div class=\"item\"> -->
                    <!-- <blockquote class=\"testimonial\"> -->
                      <!-- <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p> -->
                      <!-- <div class=\"author\"> -->
                        <!-- <img src=\"images/person_2.jpg\" alt=\"Image placeholder\" class=\"mb-3\"> -->
                        <!-- <h4>Geert Green</h4> -->
                        <!-- <p>CEO, Founder</p> -->
                      <!-- </div> -->
                    <!-- </blockquote> -->
                  <!-- </div> -->
                  <!-- <div class=\"item\"> -->
                    <!-- <blockquote class=\"testimonial\"> -->
                      <!-- <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p> -->
                      <!-- <div class=\"author\"> -->
                        <!-- <img src=\"images/person_3.jpg\" alt=\"Image placeholder\" class=\"mb-3\"> -->
                        <!-- <h4>Dennis Roman</h4> -->
                        <!-- <p>CEO, Founder</p> -->
                      <!-- </div> -->
                    <!-- </blockquote> -->
                  <!-- </div> -->
                  <!-- <div class=\"item\"> -->
                    <!-- <blockquote class=\"testimonial\"> -->
                      <!-- <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.&rdquo;</p> -->
                      <!-- <div class=\"author\"> -->
                        <!-- <img src=\"images/person_2.jpg\" alt=\"Image placeholder\" class=\"mb-3\"> -->
                        <!-- <h4>Geert Green</h4> -->
                        <!-- <p>CEO, Founder</p> -->
                      <!-- </div> -->
                    <!-- </blockquote> -->
                  <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div>   -->
        <!-- </div> <!-- .section --> 

        <!-- <div class=\"section\" data-aos=\"fade-up\" id=\"section-contact\"> -->
          <!-- <div class=\"container\"> -->
            <!-- <div class=\"row section-heading justify-content-center mb-5\"> -->
              <!-- <div class=\"col-md-8 text-center\"> -->
                <!-- <h2 class=\"heading mb-3\">Get In Touch</h2> -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"row justify-content-center\"> -->
              <!-- <div class=\"col-md-10 p-5 form-wrap\"> -->
                <!-- <form action=\"#\"> -->
                  <!-- <div class=\"row mb-4\"> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"name\" class=\"label\">Name</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-android-person\"></span> -->
                        <!-- <input type=\"text\" class=\"form-control\" id=\"name\"> -->
                      <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"email\" class=\"label\">Email</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-email\"></span> -->
                        <!-- <input type=\"email\" class=\"form-control\" id=\"email\"> -->
                      <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class=\"form-group col-md-4\"> -->
                      <!-- <label for=\"phone\" class=\"label\">Phone</label> -->
                      <!-- <div class=\"form-field-icon-wrap\"> -->
                        <!-- <span class=\"icon ion-android-call\"></span> -->
                        <!-- <input type=\"text\" class=\"form-control\" id=\"phone\"> -->
                      <!-- </div> -->
                    <!-- </div> -->

                   <!-- <div class=\"form-group col-md-12\"> -->
                      <!-- <label for=\"message\" class=\"label\">Message</label> -->
                     <!-- <textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"10\" class=\"form-control\"></textarea> -->
                   <!-- </div> -->
                  <!-- </div> -->
                  <!-- <div class=\"row justify-content-center\"> -->
                    <!-- <div class=\"col-md-4\"> -->
                      <!-- <input type=\"submit\" class=\"btn btn-primary btn-outline-primary btn-block\" value=\"Send Message\"> -->
                    <!-- </div> -->
                  <!-- </div> -->
                <!-- </form> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> <!-- .section -->

        <!-- <div class=\"map-wrap\" id=\"map\"  data-aos=\"fade\"></div> -->


        <!-- <footer class=\"ftco-footer\"> -->
          <!-- <div class=\"container\"> -->
            
            <!-- <div class=\"row\"> -->
            <!-- <div class=\"col-md-4 mb-5\"> -->
              <!-- <div class=\"footer-widget\"> -->
                <!-- <h3 class=\"mb-4\">About Meal</h3> -->
                <!-- <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. </p> -->
                
                <!-- <p><a href=\"#\" class=\"btn btn-primary btn-outline-primary\">Read More</a></p> -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- <div class=\"col-md-4 mb-5\"> -->
              <!-- <div class=\"footer-widget\"> -->
                <!-- <h3 class=\"mb-4\">Lunch Service</h3> -->
                <!-- <p>Booking from 12:00pm &mdash; 1:30pm</p> -->
                <!-- <h3 class=\"mb-4\">Dinner Service</h3> -->
                <!-- <p>Everyday: <br> Booking from 6:00pm &mdash; 9:00pm</p> -->
              <!-- </div> -->
            <!-- </div> -->

            <!-- <div class=\"col-md-4\"> -->
              <!-- <div class=\"footer-widget\"> -->
                <!-- <h3 class=\"mb-4\">Follow Along</h3> -->
                <!-- <ul class=\"list-unstyled social\"> -->
                  <!-- <li><a href=\"#\"><span class=\"fa fa-tripadvisor\"></span></a></li> -->
                  <!-- <li><a href=\"#\"><span class=\"fa fa-twitter\"></span></a></li> -->
                  <!-- <li><a href=\"#\"><span class=\"fa fa-facebook\"></span></a></li> -->
                  <!-- <li><a href=\"#\"><span class=\"fa fa-instagram\"></span></a></li> -->
                <!-- </ul> -->
              <!-- </div> -->
              <!-- <div class=\"footer-widget\"> -->
                <!-- <h3 class=\"mb-4\">Newsletter</h3> -->
                <!-- <form action=\"#\" class=\"ftco-footer-newsletter\"> -->
                  <!-- <div class=\"form-group\"> -->
                    <!-- <button class=\"button\"><span class=\"fa fa-envelope\"></span></button> -->
                    <!-- <input type=\"email\" class=\"form-control\" placeholder=\"Enter Email\"> -->
                  <!-- </div> -->
                <!-- </form> -->
              <!-- </div> -->
            <!-- </div> -->

            <!-- </div> -->

            <!-- <div class=\"row pt-5\"> -->
              <!-- <div class=\"col-md-12 text-center\"> -->
                <!-- <p> -->

            <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart text-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\" >Colorlib</a> -->

            <!-- </p> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
        <!-- </footer> -->
      
    <!-- </div> -->

    <!-- loader -->
    <!-- <div id=\"loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#ff7a5c\"/></svg></div> -->

    <script src=\"{{racine}}js/jquery-3.2.1.min.js\"></script>
    <script src=\"{{racine}}js/jquery-migrate-3.0.1.min.js\"></script>
    <script src=\"{{racine}}js/popper.min.js\"></script>
    <script src=\"{{racine}}js/bootstrap.min.js\"></script>
    <script src=\"{{racine}}js/owl.carousel.min.js\"></script>
    <script src=\"{{racine}}js/jquery.waypoints.min.js\"></script>

    <script src=\"{{racine}}js/bootstrap-datepicker.js\"></script>
    <script src=\"{{racine}}js/jquery.timepicker.min.js\"></script>
    <script src=\"{{racine}}js/jquery.stellar.min.js\"></script>

    <script src=\"{{racine}}js/jquery.easing.1.3.js\"></script>    

    <script src=\"{{racine}}js/aos.js\"></script>
    

    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>

    <script src=\"js/main.js\"></script>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\moi\\Documents\\Symfony\\troubleshooting\\troubleshooting\\templates\\base.html.twig");
    }
}
