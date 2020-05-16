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

/* main/admin.html.twig */
class __TwigTemplate_bb5b833816c459604b03f9f4abe0823257b79a80e653811251d256a1cd90b383 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/admin.html.twig"));

        // line 1
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1), "role", [], "any", false, false, false, 1), "admin")) {
            // line 2
            echo "
";
            // line 3
            $context["TicketEnCours"] = 0;
            // line 4
            echo "
";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 6
                echo "\t";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 6), "open")) {
                    // line 7
                    echo "\t\t\t";
                    $context["TicketEnCours"] = ((isset($context["TicketEnCours"]) || array_key_exists("TicketEnCours", $context) ? $context["TicketEnCours"] : (function () { throw new RuntimeError('Variable "TicketEnCours" does not exist.', 7, $this->source); })()) + 1);
                    // line 8
                    echo "\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t\t\t
\t\t\t\t
<html lang=\"fr\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href=\"vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

  <!-- Custom styles for this template-->
  <link href=\"css/sb-admin-2.min.css\" rel=\"stylesheet\">

</head>

<body id=\"page-top\">

  <!-- Page Wrapper -->
  <div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

      <!-- Sidebar - Brand -->
      <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
          <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class=\"sidebar-divider my-0\">

      <!-- Nav Item - Dashboard -->
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"index.html\">
          <i class=\"fas fa-fw fa-tachometer-alt\"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class=\"sidebar-divider\">

      <!-- Divider -->
      <hr class=\"sidebar-divider d-none d-md-block\">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

      <!-- Main Content -->
      <div id=\"content\">

        <!-- Topbar -->
        <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

          <!-- Sidebar Toggle (Topbar) -->
          <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
            <i class=\"fa fa-bars\"></i>
          </button>

          <!-- Topbar Search -->
          <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\">
                  <i class=\"fas fa-search fa-sm\"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class=\"navbar-nav ml-auto\">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class=\"nav-item dropdown no-arrow d-sm-none\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-search fa-fw\"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
                <form class=\"form-inline mr-auto w-100 navbar-search\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                    <div class=\"input-group-append\">
                      <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-bell fa-fw\"></i>
                <!-- Counter - Alerts -->
                <span class=\"badge badge-danger badge-counter\">0</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
                <h6 class=\"dropdown-header\">
                  Alerts Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-primary\">
                      <i class=\"fas fa-file-alt text-white\"></i>
                    </div>
                  </div>
                  <div>
                    <div class=\"small text-gray-500\">December 12, 2019</div>
                    <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-success\">
                      <i class=\"fas fa-donate text-white\"></i>
                    </div>
                  </div>
                  <div>
                    <div class=\"small text-gray-500\">December 7, 2019</div>
                    \$290.29 has been deposited into your account!
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-warning\">
                      <i class=\"fas fa-exclamation-triangle text-white\"></i>
                    </div>
                  </div>
                  <div>
                    <div class=\"small text-gray-500\">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
              </div>
            </li>
\t\t\t
\t\t\t

            <!-- Nav Item - Messages -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-envelope fa-fw\"></i>
                <!-- Counter - Messages -->
                <span class=\"badge badge-danger badge-counter\">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
                <h6 class=\"dropdown-header\">
                  Message Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/fn_BT9fwg_E/60x60\" alt=\"\">
                    <div class=\"status-indicator bg-success\"></div>
                  </div>
                  <div class=\"font-weight-bold\">
                    <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/AU4VPcFN4LE/60x60\" alt=\"\">
                    <div class=\"status-indicator\"></div>
                  </div>
                  <div>
                    <div class=\"text-truncate\">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/CS2uCrpNzJY/60x60\" alt=\"\">
                    <div class=\"status-indicator bg-warning\"></div>
                  </div>
                  <div>
                    <div class=\"text-truncate\">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\" alt=\"\">
                    <div class=\"status-indicator bg-success\"></div>
                  </div>
                  <div>
                    <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
              </div>
            </li>

            <div class=\"topbar-divider d-none d-sm-block\"></div>

            <!-- Nav Item - User Information -->
            <li class=\"nav-item dropdown no-arrow\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 234, $this->source); })()), "user", [], "any", false, false, false, 234), "username", [], "any", false, false, false, 234), "html", null, true);
            echo "</span>
                <img class=\"img-profile rounded-circle\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRU48dXxDMspFfCbvBRD0XtvnwKG16ioygVJzSWXWiktcAFV8e4&usqp=CAU\">
              </a>
              <!-- Dropdown - User Information -->
              <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Profile
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Settings
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Activity Log
                </a>
                <div class=\"dropdown-divider\"></div>
                 <a class=\"btn btn-danger\" href=\"/deconnexion\">Deconnexion</a>

              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">

          <!-- Page Heading -->
          <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
            <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class=\"row\">

            <!-- Tasks Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-left-danger shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-danger text-uppercase mb-1\">Taux de ticket restant</div>
                      <div class=\"row no-gutters align-items-center\">
                        <div class=\"col-auto\">
                          <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">";
            // line 283
            echo twig_escape_filter($this->env, twig_round((((isset($context["TicketEnCours"]) || array_key_exists("TicketEnCours", $context) ? $context["TicketEnCours"] : (function () { throw new RuntimeError('Variable "TicketEnCours" does not exist.', 283, $this->source); })()) / (isset($context["TotalTicket"]) || array_key_exists("TotalTicket", $context) ? $context["TotalTicket"] : (function () { throw new RuntimeError('Variable "TotalTicket" does not exist.', 283, $this->source); })())) * 100), 1), "html", null, true);
            echo "%</div>
                        </div>
                        <div class=\"col\">
                          <div class=\"progress progress-sm mr-2\">
                            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width:";
            // line 287
            echo twig_escape_filter($this->env, (((isset($context["TicketEnCours"]) || array_key_exists("TicketEnCours", $context) ? $context["TicketEnCours"] : (function () { throw new RuntimeError('Variable "TicketEnCours" does not exist.', 287, $this->source); })()) / (isset($context["TotalTicket"]) || array_key_exists("TotalTicket", $context) ? $context["TotalTicket"] : (function () { throw new RuntimeError('Variable "TotalTicket" does not exist.', 287, $this->source); })())) * 100), "html", null, true);
            echo "%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class=\"col-xl-3 col-md-3 mb-4\">
              <div class=\"card border-left-primary shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">Total ticket</div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
            // line 307
            echo twig_escape_filter($this->env, (isset($context["TotalTicket"]) || array_key_exists("TotalTicket", $context) ? $context["TotalTicket"] : (function () { throw new RuntimeError('Variable "TotalTicket" does not exist.', 307, $this->source); })()), "html", null, true);
            echo "</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
                        <!-- Pending Requests Card Example -->
            <div class=\"col-xl-3 col-md-3 mb-4\">
              <div class=\"card border-left-success shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Ticket en cours</div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
            // line 324
            echo twig_escape_filter($this->env, (isset($context["TicketEnCours"]) || array_key_exists("TicketEnCours", $context) ? $context["TicketEnCours"] : (function () { throw new RuntimeError('Variable "TicketEnCours" does not exist.', 324, $this->source); })()), "html", null, true);
            echo "</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
          </div>
            
            
          </div>
 
          <!-- Content Row -->

          <div class=\"row\">

            <!-- Area Chart -->
            <div class=\"col-xl-8 col-lg-13\">
              <div class=\"card shadow mb-4\">
                <!-- Card Header - Dropdown -->
                <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Créer un utilisateur</h6>

                </div>
                <!-- Card Body -->
                <div class=\"card-body\">
                  <div class=\"chart-area\">
                   \t\t";
            // line 352
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), 'form_start');
            echo "

\t\t\t\t\t\t";
            // line 354
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 354, $this->source); })()), "username", [], "any", false, false, false, 354), 'row', ["attr" => ["placeholder" => "pseudo", "class" => "form-control"]]);
            echo "

\t\t\t\t\t\t";
            // line 356
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "email", [], "any", false, false, false, 356), 'row', ["attr" => ["placeholder" => "Adresse mail", "class" => "form-control"]]);
            echo "

\t\t\t\t\t\t";
            // line 358
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 358, $this->source); })()), "password", [], "any", false, false, false, 358), 'row', ["attr" => ["placeholder" => "Mot de passe", "class" => "form-control"]]);
            echo "

\t\t\t\t\t\t";
            // line 360
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 360, $this->source); })()), "confirm_password", [], "any", false, false, false, 360), 'row', ["attr" => ["placeholder" => "confirmer Mot de passe", "class" => "form-control"]]);
            echo "

\t\t\t\t\t\t";
            // line 362
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "role", [], "any", false, false, false, 362), 'row');
            echo "
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">valider</button>

\t\t\t\t\t\t";
            // line 366
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 366, $this->source); })()), 'form_end');
            echo " 
                  </div>
                </div>
              </div>
            </div>

           

          <!-- Content Row -->
          <div class=\"row\">

            <!-- Content Column -->
            <div class=\"col-lg-6 mb-4\">

              <!-- Project Card Example -->
              <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">avis clients</h6>
                </div>
                <div class=\"card-body\">
                  <h4 class=\"small font-weight-bold\">Clients satisfaits <span class=\"float-right\">";
            // line 386
            echo twig_escape_filter($this->env, (isset($context["satisfied"]) || array_key_exists("satisfied", $context) ? $context["satisfied"] : (function () { throw new RuntimeError('Variable "satisfied" does not exist.', 386, $this->source); })()), "html", null, true);
            echo "%</span></h4>
                  <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: ";
            // line 388
            echo twig_escape_filter($this->env, (isset($context["satisfied"]) || array_key_exists("satisfied", $context) ? $context["satisfied"] : (function () { throw new RuntimeError('Variable "satisfied" does not exist.', 388, $this->source); })()), "html", null, true);
            echo "%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                  <h4 class=\"small font-weight-bold\">Clients mécontants <span class=\"float-right\">";
            // line 390
            echo twig_escape_filter($this->env, (isset($context["discontent"]) || array_key_exists("discontent", $context) ? $context["discontent"] : (function () { throw new RuntimeError('Variable "discontent" does not exist.', 390, $this->source); })()), "html", null, true);
            echo "%</span></h4>
                  <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: ";
            // line 392
            echo twig_escape_filter($this->env, (isset($context["discontent"]) || array_key_exists("discontent", $context) ? $context["discontent"] : (function () { throw new RuntimeError('Variable "discontent" does not exist.', 392, $this->source); })()), "html", null, true);
            echo "%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                </div>
              </div>
            </div>
    

            <div class=\"col-lg-6 mb-4\">

              <!-- ticket -->
              <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Ticket</h6>
                </div>
                <div class=\"card-body\">
\t\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t";
            // line 409
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 409, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 410
                echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<p>";
                // line 412
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "title", [], "any", false, false, false, 412), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<p>";
                // line 415
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "userRequest", [], "any", false, false, false, 415), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<p>";
                // line 418
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 418), "html", null, true);
                echo "</p>

\t\t\t\t\t\t\t<a href=\"/adminticket/";
                // line 420
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "tag", [], "any", false, false, false, 420), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-success\">Voir le ticket</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 425
            echo "\t\t\t\t</div>

                </div>
              </div>
              </div>
             

            </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class=\"sticky-footer bg-white\">
        <div class=\"container my-auto\">
          <div class=\"copyright text-center my-auto\">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
  </a>

  <!-- Logout Modal-->
  <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
          <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
        <div class=\"modal-footer\">
          <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
          <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src=\"vendor/jquery/jquery.min.js\"></script>
  <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"js/sb-admin-2.min.js\"></script>

  <!-- Page level plugins -->
  <script src=\"vendor/chart.js/Chart.min.js\"></script>

  <!-- Page level custom scripts -->
  <script src=\"js/demo/chart-area-demo.js\"></script>
  <script src=\"js/demo/chart-pie-demo.js\"></script>

</body>

</html>   
\t\t
";
        } else {
            // line 501
            echo "<p style=\"color:red\">vous n'êtes pas administrateur</p>
";
        }
        // line 503
        echo "
\t\t
\t\t
\t\t";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 503,  633 => 501,  555 => 425,  544 => 420,  539 => 418,  533 => 415,  527 => 412,  523 => 410,  519 => 409,  499 => 392,  494 => 390,  489 => 388,  484 => 386,  461 => 366,  454 => 362,  449 => 360,  444 => 358,  439 => 356,  434 => 354,  429 => 352,  398 => 324,  378 => 307,  355 => 287,  348 => 283,  296 => 234,  70 => 10,  63 => 8,  60 => 7,  57 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user.role == \"admin\" %}

{% set TicketEnCours = 0 %}

{% for ticket in tickets %}
\t{% if ticket.status == \"open\" %}
\t\t\t{% set TicketEnCours = TicketEnCours + 1 %}
\t{% endif %}
{% endfor %}
\t\t\t\t
\t\t\t\t
<html lang=\"fr\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href=\"vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

  <!-- Custom styles for this template-->
  <link href=\"css/sb-admin-2.min.css\" rel=\"stylesheet\">

</head>

<body id=\"page-top\">

  <!-- Page Wrapper -->
  <div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

      <!-- Sidebar - Brand -->
      <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
          <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class=\"sidebar-divider my-0\">

      <!-- Nav Item - Dashboard -->
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"index.html\">
          <i class=\"fas fa-fw fa-tachometer-alt\"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class=\"sidebar-divider\">

      <!-- Divider -->
      <hr class=\"sidebar-divider d-none d-md-block\">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

      <!-- Main Content -->
      <div id=\"content\">

        <!-- Topbar -->
        <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

          <!-- Sidebar Toggle (Topbar) -->
          <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
            <i class=\"fa fa-bars\"></i>
          </button>

          <!-- Topbar Search -->
          <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\">
                  <i class=\"fas fa-search fa-sm\"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class=\"navbar-nav ml-auto\">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class=\"nav-item dropdown no-arrow d-sm-none\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-search fa-fw\"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
                <form class=\"form-inline mr-auto w-100 navbar-search\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                    <div class=\"input-group-append\">
                      <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-bell fa-fw\"></i>
                <!-- Counter - Alerts -->
                <span class=\"badge badge-danger badge-counter\">0</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
                <h6 class=\"dropdown-header\">
                  Alerts Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-primary\">
                      <i class=\"fas fa-file-alt text-white\"></i>
                    </div>
                  </div>
                  <div>
                    <div class=\"small text-gray-500\">December 12, 2019</div>
                    <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-success\">
                      <i class=\"fas fa-donate text-white\"></i>
                    </div>
                  </div>
                  <div>
                    <div class=\"small text-gray-500\">December 7, 2019</div>
                    \$290.29 has been deposited into your account!
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-warning\">
                      <i class=\"fas fa-exclamation-triangle text-white\"></i>
                    </div>
                  </div>
                  <div>
                    <div class=\"small text-gray-500\">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
              </div>
            </li>
\t\t\t
\t\t\t

            <!-- Nav Item - Messages -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-envelope fa-fw\"></i>
                <!-- Counter - Messages -->
                <span class=\"badge badge-danger badge-counter\">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
                <h6 class=\"dropdown-header\">
                  Message Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/fn_BT9fwg_E/60x60\" alt=\"\">
                    <div class=\"status-indicator bg-success\"></div>
                  </div>
                  <div class=\"font-weight-bold\">
                    <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/AU4VPcFN4LE/60x60\" alt=\"\">
                    <div class=\"status-indicator\"></div>
                  </div>
                  <div>
                    <div class=\"text-truncate\">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/CS2uCrpNzJY/60x60\" alt=\"\">
                    <div class=\"status-indicator bg-warning\"></div>
                  </div>
                  <div>
                    <div class=\"text-truncate\">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"dropdown-list-image mr-3\">
                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\" alt=\"\">
                    <div class=\"status-indicator bg-success\"></div>
                  </div>
                  <div>
                    <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
              </div>
            </li>

            <div class=\"topbar-divider d-none d-sm-block\"></div>

            <!-- Nav Item - User Information -->
            <li class=\"nav-item dropdown no-arrow\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{app.user.username}}</span>
                <img class=\"img-profile rounded-circle\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRU48dXxDMspFfCbvBRD0XtvnwKG16ioygVJzSWXWiktcAFV8e4&usqp=CAU\">
              </a>
              <!-- Dropdown - User Information -->
              <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Profile
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Settings
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                  <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                  Activity Log
                </a>
                <div class=\"dropdown-divider\"></div>
                 <a class=\"btn btn-danger\" href=\"/deconnexion\">Deconnexion</a>

              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">

          <!-- Page Heading -->
          <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
            <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class=\"row\">

            <!-- Tasks Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-left-danger shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-danger text-uppercase mb-1\">Taux de ticket restant</div>
                      <div class=\"row no-gutters align-items-center\">
                        <div class=\"col-auto\">
                          <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">{{ ((TicketEnCours / TotalTicket)*100)|round(1)}}%</div>
                        </div>
                        <div class=\"col\">
                          <div class=\"progress progress-sm mr-2\">
                            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width:{{ (TicketEnCours / TotalTicket)*100}}%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class=\"col-xl-3 col-md-3 mb-4\">
              <div class=\"card border-left-primary shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">Total ticket</div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{TotalTicket}}</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
                        <!-- Pending Requests Card Example -->
            <div class=\"col-xl-3 col-md-3 mb-4\">
              <div class=\"card border-left-success shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Ticket en cours</div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{TicketEnCours}}</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
          </div>
            
            
          </div>
 
          <!-- Content Row -->

          <div class=\"row\">

            <!-- Area Chart -->
            <div class=\"col-xl-8 col-lg-13\">
              <div class=\"card shadow mb-4\">
                <!-- Card Header - Dropdown -->
                <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Créer un utilisateur</h6>

                </div>
                <!-- Card Body -->
                <div class=\"card-body\">
                  <div class=\"chart-area\">
                   \t\t{{ form_start(form) }}

\t\t\t\t\t\t{{ form_row(form.username, { 'attr': {'placeholder':'pseudo', 'class':'form-control'} }) }}

\t\t\t\t\t\t{{ form_row(form.email, { 'attr': {'placeholder':'Adresse mail', 'class':'form-control'} }) }}

\t\t\t\t\t\t{{ form_row(form.password, { 'attr': {'placeholder':'Mot de passe', 'class':'form-control'}}) }}

\t\t\t\t\t\t{{ form_row(form.confirm_password, { 'attr': {'placeholder':'confirmer Mot de passe', 'class':'form-control'}}) }}

\t\t\t\t\t\t{{ form_row(form.role) }}
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">valider</button>

\t\t\t\t\t\t{{ form_end(form) }} 
                  </div>
                </div>
              </div>
            </div>

           

          <!-- Content Row -->
          <div class=\"row\">

            <!-- Content Column -->
            <div class=\"col-lg-6 mb-4\">

              <!-- Project Card Example -->
              <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">avis clients</h6>
                </div>
                <div class=\"card-body\">
                  <h4 class=\"small font-weight-bold\">Clients satisfaits <span class=\"float-right\">{{ satisfied }}%</span></h4>
                  <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: {{ satisfied }}%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                  <h4 class=\"small font-weight-bold\">Clients mécontants <span class=\"float-right\">{{ discontent }}%</span></h4>
                  <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: {{ discontent }}%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                </div>
              </div>
            </div>
    

            <div class=\"col-lg-6 mb-4\">

              <!-- ticket -->
              <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Ticket</h6>
                </div>
                <div class=\"card-body\">
\t\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t{% for ticket in tickets %}
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<p>{{ticket.title}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<p>{{ticket.userRequest}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<p>{{ticket.status}}</p>

\t\t\t\t\t\t\t<a href=\"/adminticket/{{ticket.tag}}\" role=\"button\" class=\"btn btn-success\">Voir le ticket</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t{% endfor %}
\t\t\t\t</div>

                </div>
              </div>
              </div>
             

            </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class=\"sticky-footer bg-white\">
        <div class=\"container my-auto\">
          <div class=\"copyright text-center my-auto\">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
  </a>

  <!-- Logout Modal-->
  <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
          <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
        <div class=\"modal-footer\">
          <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
          <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src=\"vendor/jquery/jquery.min.js\"></script>
  <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"js/sb-admin-2.min.js\"></script>

  <!-- Page level plugins -->
  <script src=\"vendor/chart.js/Chart.min.js\"></script>

  <!-- Page level custom scripts -->
  <script src=\"js/demo/chart-area-demo.js\"></script>
  <script src=\"js/demo/chart-pie-demo.js\"></script>

</body>

</html>   
\t\t
{% else %}
<p style=\"color:red\">vous n'êtes pas administrateur</p>
{% endif %}

\t\t
\t\t
\t\t", "main/admin.html.twig", "C:\\Users\\moi\\Documents\\Symfony\\troubleshooting\\troubleshooting\\templates\\main\\admin.html.twig");
    }
}
