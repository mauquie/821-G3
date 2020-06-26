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

/* main/myticketID.html.twig */
class __TwigTemplate_771523bb8c79cd92e55041c05629d1db7b08f15d65ef5a0a2c09be166dd841a9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/myticketID.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/myticketID.html.twig"));

        // line 1
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1), "role", [], "any", false, false, false, 1), "0")) {
            // line 2
            echo "<html lang=\"fr\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href=\"https://localhost:8000/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

  <!-- Custom styles for this template-->
  <link href=\"https://localhost:8000/css/sb-admin-2.min.css\" rel=\"stylesheet\">

</head> 
<style>

.row.row-broken {
    padding-bottom: 0;
}
.col-inside-lg {
    padding: 20px;
}
.chat {
    height: calc(100vh - 180px);
}
.decor-default {
    background-color: #ffffff;
}
.chat-users h6 {
    font-size: 20px;
    margin: 0 0 20px;
}
.chat-users .user {
    position: relative;
    padding: 0 0 0 50px;
    display: block;
    cursor: pointer;
    margin: 0 0 20px;
}
.chat-users .user .avatar {
    top: 0;
    left: 0;
}
.chat .avatar {
    width: 40px;
    height: 40px;
    position: absolute;
}
.chat .avatar img {
    display: block;
    border-radius: 20px;
    height: 100%;
}
.chat .avatar .status.off {
    border: 1px solid #5a5a5a;
    background: #ffffff;
}
.chat .avatar .status.online {
    background: #4caf50;
}
.chat .avatar .status.busy {
    background: #ffc107;
}
.chat .avatar .status.offline {
    background: #ed4e6e;
}
.chat-users .user .status {
    bottom: 0;
    left: 28px;
}
.chat .avatar .status {
    width: 10px;
    height: 10px;
    border-radius: 5px;
    position: absolute;
}
.chat-users .user .name {
    font-size: 14px;
    font-weight: bold;
    line-height: 20px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.chat-users .user .mood {
    font: 200 14px/20px \"Raleway\", sans-serif;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/*****************CHAT BODY *******************/
.chat-body h6 {
    font-size: 20px;
    margin: 0 0 20px;
}
.chat-body .answer.left {
    padding: 0 0 0 58px;
    text-align: left;
    float: left;
}
.chat-body .answer {
    position: relative;
    max-width: 600px;
    overflow: hidden;
    clear: both;
}
.chat-body .answer.left .avatar {
    left: 0;
}
.chat-body .answer .avatar {
    bottom: 36px;
}
.chat .avatar {
    width: 40px;
    height: 40px;
    position: absolute;
}
.chat .avatar img {
    display: block;
    border-radius: 20px;
    height: 100%;
}
.chat-body .answer .name {
    font-size: 14px;
    line-height: 36px;
}
.chat-body .answer.left .avatar .status {
    right: 4px;
}
.chat-body .answer .avatar .status {
    bottom: 0;
}
.chat-body .answer.left .text {
    background: #ebebeb;
    color: #333333;
    border-radius: 8px 8px 8px 0;
}
.chat-body .answer .text {
    padding: 12px;
    font-size: 16px;
    line-height: 26px;
    position: relative;
}
.chat-body .answer.left .text:before {
    left: -30px;
    border-right-color: #ebebeb;
    border-right-width: 12px;
}
.chat-body .answer .text:before {
    content: '';
    display: block;
    position: absolute;
    bottom: 0;
    border: 18px solid transparent;
    border-bottom-width: 0;
}
.chat-body .answer.left .time {
    padding-left: 12px;
    color: #333333;
}
.chat-body .answer .time {
    font-size: 16px;
    line-height: 36px;
    position: relative;
    padding-bottom: 1px;
}
/*RIGHT*/
.chat-body .answer.right {
    padding: 0 58px 0 0;
    text-align: right;
    float: right;
}

.chat-body .answer.right .avatar {
    right: 0;
}
.chat-body .answer.right .avatar .status {
    left: 4px;
}
.chat-body .answer.right .text {
    background: #7266ba;
    color: #ffffff;
    border-radius: 8px 8px 0 8px;
}
.chat-body .answer.right .text:before {
    right: -30px;
    border-left-color: #7266ba;
    border-left-width: 12px;
}
.chat-body .answer.right .time {
    padding-right: 12px;
    color: #333333;
}


</style>
<body id=\"page-top\">

  <!-- Page Wrapper -->
  <div id=\"wrapper\">


<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js\"></script>
<div class=\"content container-fluid bootstrap snippets\">
      <div class=\"row row-broken\">
        <div class=\"col-sm-12 col-xs-12 chat\" style=\"outline: none;\" tabindex=\"5001\">
          <div class=\"col-inside-lg decor-default\">
          

            \t\t\t<div class=\"chat-body\">
            \t";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["opentickets"]) || array_key_exists("opentickets", $context) ? $context["opentickets"] : (function () { throw new RuntimeError('Variable "opentickets" does not exist.', 225, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["openticket"]) {
                // line 226
                echo "            
            \t\t";
                // line 227
                if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["openticket"], "user", [], "any", false, false, false, 227), (isset($context["IdUser"]) || array_key_exists("IdUser", $context) ? $context["IdUser"] : (function () { throw new RuntimeError('Variable "IdUser" does not exist.', 227, $this->source); })()))) {
                    echo "\t\t
            \t\t\t\t<div class=\"answer right\">
                           <div class=\"avatar\">
                             <img src=\"https://bootdey.com/img/Content/avatar/avatar1.png\" alt=\"User name\">
                             <div class=\"status online\"></div>
                           </div>
                           <div class=\"name\">Assistance</div>
                           <div class=\"text\">
                             ";
                    // line 235
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["openticket"], "text", [], "any", false, false, false, 235), "html", null, true);
                    echo "
                           </div>
                          </div>
            \t\t";
                } else {
                    // line 239
                    echo "            \t\t\t\t<div class=\"answer left\">
            \t\t
                           <div class=\"avatar\">
                             <img src=\"https://bootdey.com/img/Content/avatar/avatar1.png\" alt=\"User name\">
                             <div class=\"status online\"></div>
                           </div>
                           <div class=\"name\">";
                    // line 245
                    echo twig_escape_filter($this->env, (isset($context["NameUser"]) || array_key_exists("NameUser", $context) ? $context["NameUser"] : (function () { throw new RuntimeError('Variable "NameUser" does not exist.', 245, $this->source); })()), "html", null, true);
                    echo "</div>
                           <div class=\"text\">
                             ";
                    // line 247
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["openticket"], "text", [], "any", false, false, false, 247), "html", null, true);
                    echo "
                           </div>
                          </div>
            \t\t";
                }
                // line 251
                echo "            \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['openticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "



\t\t\t\t";
            // line 256
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), 'form_start');
            echo "

\t\t\t\t";
            // line 258
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "text", [], "any", false, false, false, 258), 'row', ["attr" => ["placeholder" => "Ecrire un message...", "class" => "form-control"]]);
            echo "
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Envoyer le message</button>
\t\t\t\t";
            // line 260
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), 'form_end');
            echo "\t
\t\t\t\t\t
\t\t\t\t

\t\t\t\t\t

            </div>
          </div>
        </div>

    </div>

      <!-- End of Footer -->

 

  <!-- Bootstrap core JavaScript-->
  <script src=\"https://localhost:8000/vendor/jquery/jquery.min.js\"></script>
  <script src=\"https://localhost:8000/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"https://localhost:8000/vendor/jquery-easing/jquery.easing.min.js\"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"https://localhost:8000/js/sb-admin-2.min.js\"></script>

  <!-- Page level plugins -->
  <script src=\"https://localhost:8000/vendor/chart.js/Chart.min.js\"></script>

  <!-- Page level custom scripts -->
  <script src=\"https://localhost:8000/js/demo/chart-area-demo.js\"></script>
  <script src=\"https://localhost:8000/js/demo/chart-pie-demo.js\"></script>

</body>

</html>   
\t\t
";
        } else {
            // line 298
            echo "<p style=\"color:red\">vous n'êtes pas client</p>
";
        }
        // line 300
        echo "
\t\t
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/myticketID.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 300,  378 => 298,  337 => 260,  332 => 258,  327 => 256,  321 => 252,  315 => 251,  308 => 247,  303 => 245,  295 => 239,  288 => 235,  277 => 227,  274 => 226,  270 => 225,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user.role == \"0\" %}
<html lang=\"fr\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href=\"https://localhost:8000/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

  <!-- Custom styles for this template-->
  <link href=\"https://localhost:8000/css/sb-admin-2.min.css\" rel=\"stylesheet\">

</head> 
<style>

.row.row-broken {
    padding-bottom: 0;
}
.col-inside-lg {
    padding: 20px;
}
.chat {
    height: calc(100vh - 180px);
}
.decor-default {
    background-color: #ffffff;
}
.chat-users h6 {
    font-size: 20px;
    margin: 0 0 20px;
}
.chat-users .user {
    position: relative;
    padding: 0 0 0 50px;
    display: block;
    cursor: pointer;
    margin: 0 0 20px;
}
.chat-users .user .avatar {
    top: 0;
    left: 0;
}
.chat .avatar {
    width: 40px;
    height: 40px;
    position: absolute;
}
.chat .avatar img {
    display: block;
    border-radius: 20px;
    height: 100%;
}
.chat .avatar .status.off {
    border: 1px solid #5a5a5a;
    background: #ffffff;
}
.chat .avatar .status.online {
    background: #4caf50;
}
.chat .avatar .status.busy {
    background: #ffc107;
}
.chat .avatar .status.offline {
    background: #ed4e6e;
}
.chat-users .user .status {
    bottom: 0;
    left: 28px;
}
.chat .avatar .status {
    width: 10px;
    height: 10px;
    border-radius: 5px;
    position: absolute;
}
.chat-users .user .name {
    font-size: 14px;
    font-weight: bold;
    line-height: 20px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.chat-users .user .mood {
    font: 200 14px/20px \"Raleway\", sans-serif;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/*****************CHAT BODY *******************/
.chat-body h6 {
    font-size: 20px;
    margin: 0 0 20px;
}
.chat-body .answer.left {
    padding: 0 0 0 58px;
    text-align: left;
    float: left;
}
.chat-body .answer {
    position: relative;
    max-width: 600px;
    overflow: hidden;
    clear: both;
}
.chat-body .answer.left .avatar {
    left: 0;
}
.chat-body .answer .avatar {
    bottom: 36px;
}
.chat .avatar {
    width: 40px;
    height: 40px;
    position: absolute;
}
.chat .avatar img {
    display: block;
    border-radius: 20px;
    height: 100%;
}
.chat-body .answer .name {
    font-size: 14px;
    line-height: 36px;
}
.chat-body .answer.left .avatar .status {
    right: 4px;
}
.chat-body .answer .avatar .status {
    bottom: 0;
}
.chat-body .answer.left .text {
    background: #ebebeb;
    color: #333333;
    border-radius: 8px 8px 8px 0;
}
.chat-body .answer .text {
    padding: 12px;
    font-size: 16px;
    line-height: 26px;
    position: relative;
}
.chat-body .answer.left .text:before {
    left: -30px;
    border-right-color: #ebebeb;
    border-right-width: 12px;
}
.chat-body .answer .text:before {
    content: '';
    display: block;
    position: absolute;
    bottom: 0;
    border: 18px solid transparent;
    border-bottom-width: 0;
}
.chat-body .answer.left .time {
    padding-left: 12px;
    color: #333333;
}
.chat-body .answer .time {
    font-size: 16px;
    line-height: 36px;
    position: relative;
    padding-bottom: 1px;
}
/*RIGHT*/
.chat-body .answer.right {
    padding: 0 58px 0 0;
    text-align: right;
    float: right;
}

.chat-body .answer.right .avatar {
    right: 0;
}
.chat-body .answer.right .avatar .status {
    left: 4px;
}
.chat-body .answer.right .text {
    background: #7266ba;
    color: #ffffff;
    border-radius: 8px 8px 0 8px;
}
.chat-body .answer.right .text:before {
    right: -30px;
    border-left-color: #7266ba;
    border-left-width: 12px;
}
.chat-body .answer.right .time {
    padding-right: 12px;
    color: #333333;
}


</style>
<body id=\"page-top\">

  <!-- Page Wrapper -->
  <div id=\"wrapper\">


<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js\"></script>
<div class=\"content container-fluid bootstrap snippets\">
      <div class=\"row row-broken\">
        <div class=\"col-sm-12 col-xs-12 chat\" style=\"outline: none;\" tabindex=\"5001\">
          <div class=\"col-inside-lg decor-default\">
          

            \t\t\t<div class=\"chat-body\">
            \t{% for openticket in opentickets %}
            
            \t\t{% if openticket.user != IdUser %}\t\t
            \t\t\t\t<div class=\"answer right\">
                           <div class=\"avatar\">
                             <img src=\"https://bootdey.com/img/Content/avatar/avatar1.png\" alt=\"User name\">
                             <div class=\"status online\"></div>
                           </div>
                           <div class=\"name\">Assistance</div>
                           <div class=\"text\">
                             {{openticket.text}}
                           </div>
                          </div>
            \t\t{% else %}
            \t\t\t\t<div class=\"answer left\">
            \t\t
                           <div class=\"avatar\">
                             <img src=\"https://bootdey.com/img/Content/avatar/avatar1.png\" alt=\"User name\">
                             <div class=\"status online\"></div>
                           </div>
                           <div class=\"name\">{{ NameUser }}</div>
                           <div class=\"text\">
                             {{openticket.text}}
                           </div>
                          </div>
            \t\t{% endif %}
            \t{% endfor %}




\t\t\t\t{{ form_start(form) }}

\t\t\t\t{{ form_row(form.text, { 'attr': {'placeholder':'Ecrire un message...', 'class':'form-control'} }) }}
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Envoyer le message</button>
\t\t\t\t{{ form_end(form) }}\t
\t\t\t\t\t
\t\t\t\t

\t\t\t\t\t

            </div>
          </div>
        </div>

    </div>

      <!-- End of Footer -->

 

  <!-- Bootstrap core JavaScript-->
  <script src=\"https://localhost:8000/vendor/jquery/jquery.min.js\"></script>
  <script src=\"https://localhost:8000/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"https://localhost:8000/vendor/jquery-easing/jquery.easing.min.js\"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"https://localhost:8000/js/sb-admin-2.min.js\"></script>

  <!-- Page level plugins -->
  <script src=\"https://localhost:8000/vendor/chart.js/Chart.min.js\"></script>

  <!-- Page level custom scripts -->
  <script src=\"https://localhost:8000/js/demo/chart-area-demo.js\"></script>
  <script src=\"https://localhost:8000/js/demo/chart-pie-demo.js\"></script>

</body>

</html>   
\t\t
{% else %}
<p style=\"color:red\">vous n'êtes pas client</p>
{% endif %}

\t\t
", "main/myticketID.html.twig", "C:\\Users\\moi\\Documents\\Symfony\\troubleshooting\\troubleshooting\\templates\\main\\myticketID.html.twig");
    }
}
