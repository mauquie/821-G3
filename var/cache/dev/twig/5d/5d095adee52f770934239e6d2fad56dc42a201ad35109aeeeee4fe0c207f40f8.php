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

/* main/myticket.html.twig */
class __TwigTemplate_635bb63bc224c4764acbeb7bb09a51e9192adcdf256087d5e2c4f891ea7babd3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/myticket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/myticket.html.twig"));

        // line 1
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1), "role", [], "any", false, false, false, 1), "0")) {
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
              <div class=\"input-group-append\">
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
                      <button class=\"btn btn-success\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

              <!-- Dropdown - Alerts -->
              <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
                <h6 class=\"dropdown-header\">
                  Alerts Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-warning\">
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
                    <div class=\"icon-circle bg-warning\">
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

            <div class=\"topbar-divider d-none d-sm-block\"></div>

            <!-- Nav Item - User Information -->
            <li class=\"nav-item dropdown no-arrow\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134), "username", [], "any", false, false, false, 134), "html", null, true);
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
            <h1 class=\"h3 mb-0 text-gray-800\">Ticket</h1>
          </div>

          <!-- Content Row -->
          <div class=\"row\">



            <!-- Pending Requests Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-left-primary shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">Total ticket</div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
            // line 182
            echo twig_escape_filter($this->env, (isset($context["TotalTicket"]) || array_key_exists("TotalTicket", $context) ? $context["TotalTicket"] : (function () { throw new RuntimeError('Variable "TotalTicket" does not exist.', 182, $this->source); })()), "html", null, true);
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
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-left-warning shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">Ticket en cours</div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
            // line 199
            echo twig_escape_filter($this->env, (isset($context["TicketEnCours"]) || array_key_exists("TicketEnCours", $context) ? $context["TicketEnCours"] : (function () { throw new RuntimeError('Variable "TicketEnCours" does not exist.', 199, $this->source); })()), "html", null, true);
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
          <div class=\"row text-center\">


    

            <div class=\"col-lg-12 mb-4 text-center\">

              <!-- ticket -->
              <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                  <h6 class=\"m-0 font-weight-bold text-warning\">Ticket</h6>
                </div>
                <div class=\"card-body\">\t\t\t
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 233, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 234
                echo "\t\t\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 236
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "title", [], "any", false, false, false, 236), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 239
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 239), 1)) {
                    // line 240
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p>open</p>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 242
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p>close</p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 244
                echo "
\t\t\t\t\t\t\t\t<a href=\"/myticket/";
                // line 245
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 245), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-warning\">Voir le ticket</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "\t\t\t\t</div>
\t\t\t\t</div>

                </div>
              </div>
              </div>
              
                <a class=\"btn btn-warning\" href=\"/ticket\">Ouvrir un Ticket</a>

            </div>
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
          <a class=\"btn btn-warning\" href=\"login.html\">Logout</a>
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
            // line 326
            echo "<p style=\"color:red\">vous n'êtes pas client</p>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/myticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 326,  342 => 250,  331 => 245,  328 => 244,  324 => 242,  320 => 240,  318 => 239,  312 => 236,  308 => 234,  304 => 233,  267 => 199,  247 => 182,  196 => 134,  70 => 10,  63 => 8,  60 => 7,  57 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user.role == \"0\" %}

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
              <div class=\"input-group-append\">
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
                      <button class=\"btn btn-success\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

              <!-- Dropdown - Alerts -->
              <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
                <h6 class=\"dropdown-header\">
                  Alerts Center
                </h6>
                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                  <div class=\"mr-3\">
                    <div class=\"icon-circle bg-warning\">
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
                    <div class=\"icon-circle bg-warning\">
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
            <h1 class=\"h3 mb-0 text-gray-800\">Ticket</h1>
          </div>

          <!-- Content Row -->
          <div class=\"row\">



            <!-- Pending Requests Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
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
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-left-warning shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">Ticket en cours</div>
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
          <div class=\"row text-center\">


    

            <div class=\"col-lg-12 mb-4 text-center\">

              <!-- ticket -->
              <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                  <h6 class=\"m-0 font-weight-bold text-warning\">Ticket</h6>
                </div>
                <div class=\"card-body\">\t\t\t
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t{% for ticket in tickets %}
\t\t\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<p>{{ticket.title}}</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t{%   if ticket.status == 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t<p>open</p>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<p>close</p>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t<a href=\"/myticket/{{ticket.id}}\" role=\"button\" class=\"btn btn-warning\">Voir le ticket</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t</div>

                </div>
              </div>
              </div>
              
                <a class=\"btn btn-warning\" href=\"/ticket\">Ouvrir un Ticket</a>

            </div>
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
          <a class=\"btn btn-warning\" href=\"login.html\">Logout</a>
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
<p style=\"color:red\">vous n'êtes pas client</p>
{% endif %}
", "main/myticket.html.twig", "C:\\Users\\moi\\Documents\\Symfony\\troubleshooting\\troubleshooting\\templates\\main\\myticket.html.twig");
    }
}
