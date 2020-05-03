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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/myticketID.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/myticketID.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/myticketID.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Troubleshooting - Dépannage informatique en ligne";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
body{
    margin-top:20px;
    background:#eee;
}
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

/**************ADD FORM ***************/
.chat-body .answer-add {
    clear: both;
    position: relative;
    margin: 20px -20px -20px;
    padding: 20px;
    background: #46be8a;
}
.chat-body .answer-add input {
    border: none;
    background: none;
    display: block;
    width: 100%;
    font-size: 16px;
    line-height: 20px;
    padding: 0;
    color: #ffffff;
}
.chat input {
    -webkit-appearance: none;
    border-radius: 0;
}
.chat-body .answer-add .answer-btn-1 {
    background: url(\"http://91.234.35.26/iwiki-admin/v1.0.0/admin/img/icon-40.png\") 50% 50% no-repeat;
    right: 56px;
}
.chat-body .answer-add .answer-btn {
    display: block;
    cursor: pointer;
    width: 36px;
    height: 36px;
    position: absolute;
    top: 50%;
    margin-top: -18px;
}
.chat-body .answer-add .answer-btn-2 {
    background: url(\"http://91.234.35.26/iwiki-admin/v1.0.0/admin/img/icon-41.png\") 50% 50% no-repeat;
    right: 20px;
}
.chat input::-webkit-input-placeholder {
   color: #fff;
}

.chat input:-moz-placeholder { /* Firefox 18- */
   color: #fff;  
}

.chat input::-moz-placeholder {  /* Firefox 19+ */
   color: #fff;  
}

.chat input:-ms-input-placeholder {  
   color: #fff;  
}
.chat input {
    -webkit-appearance: none;
    border-radius: 0;
}

.select-style {
    padding: 0;
    margin: 0;
    border: 1px solid #ccc;
    width: 120px;
    border-radius: 3px;
    overflow: hidden;
    background-color: #fff;
    background: #fff;
    position: relative;
}
.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background-color: transparent;
    background-image: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.select-style:after {
    top: 50%;
    left: 85%;
    border: solid transparent;
    content: \" \";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(0, 0, 0, 0);
    border-top-color: #000000;
    border-width: 5px;
    margin-top: -2px;
    z-index: 100;
}
.select-style select:focus {
    outline: none;
}
</style>




<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js\"></script>
";
        // line 301
        if ((isset($context["form"]) || array_key_exists("form", $context))) {
            // line 302
            echo "<div class=\"content container-fluid bootstrap snippets\">
      <div class=\"row row-broken\">
        <div class=\"col-sm-12 col-xs-12 chat\" style=\"outline: none;\" tabindex=\"5001\">
          <div class=\"col-inside-lg decor-default\">
          

\t\t\t<div class=\"chat-body\">
\t\t";
            // line 309
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["opentickets"]) || array_key_exists("opentickets", $context) ? $context["opentickets"] : (function () { throw new RuntimeError('Variable "opentickets" does not exist.', 309, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["openticket"]) {
                // line 310
                echo "
\t\t";
                // line 311
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["openticket"], "name", [], "any", false, false, false, 311), "admin@troubleshooting.com")) {
                    // line 312
                    echo "\t\t\t\t<div class=\"answer right\">
\t\t";
                } else {
                    // line 314
                    echo "\t\t\t\t<div class=\"answer left\">
\t\t";
                }
                // line 316
                echo "               <div class=\"avatar\">
                 <img src=\"https://bootdey.com/img/Content/avatar/avatar1.png\" alt=\"User name\">
                 <div class=\"status offline\"></div>
               </div>
               <div class=\"name\">";
                // line 320
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["openticket"], "name", [], "any", false, false, false, 320), "html", null, true);
                echo "</div>
               <div class=\"text\">
                 ";
                // line 322
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["openticket"], "text", [], "any", false, false, false, 322), "html", null, true);
                echo "
               </div>
              </div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['openticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            echo "

              <div class=\"answer-add\">
\t";
            // line 329
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketlists"]) || array_key_exists("ticketlists", $context) ? $context["ticketlists"] : (function () { throw new RuntimeError('Variable "ticketlists" does not exist.', 329, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticketlist"]) {
                // line 330
                echo "\t\t";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ticketlist"], "status", [], "any", false, false, false, 330), "open")) {
                    // line 331
                    echo "\t\t\t\t";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), 'form_start');
                    echo "

\t\t\t\t";
                    // line 333
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "text", [], "any", false, false, false, 333), 'row', ["attr" => ["placeholder" => "Ecrire un message...", "class" => "form-control"]]);
                    echo "
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Envoyer le message</button>
\t\t\t\t";
                    // line 335
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), 'form_end');
                    echo "
\t\t";
                }
                // line 337
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticketlist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "\t
\t\t\t\t
\t\t\t\t";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticketlists"]) || array_key_exists("ticketlists", $context) ? $context["ticketlists"] : (function () { throw new RuntimeError('Variable "ticketlists" does not exist.', 340, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticketlist"]) {
                // line 341
                echo "\t\t\t\t\t";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ticketlist"], "tag", [], "any", false, false, false, 341), (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 341, $this->source); })()))) {
                    // line 342
                    echo "\t\t\t\t\t\t";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ticketlist"], "status", [], "any", false, false, false, 342), "open")) {
                        // line 343
                        echo "\t\t\t\t\t\t\t";
                        echo                         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTicketList"]) || array_key_exists("formTicketList", $context) ? $context["formTicketList"] : (function () { throw new RuntimeError('Variable "formTicketList" does not exist.', 343, $this->source); })()), 'form_start');
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 344
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formTicketList"]) || array_key_exists("formTicketList", $context) ? $context["formTicketList"] : (function () { throw new RuntimeError('Variable "formTicketList" does not exist.', 344, $this->source); })()), "status", [], "any", false, false, false, 344), 'row', ["attr" => ["value" => "close"]]);
                        echo "
\t\t\t\t\t\t\t\t<p>Êtes vous satisfaits ?</p>
\t\t\t\t\t\t\t\t";
                        // line 346
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formTicketList"]) || array_key_exists("formTicketList", $context) ? $context["formTicketList"] : (function () { throw new RuntimeError('Variable "formTicketList" does not exist.', 346, $this->source); })()), "result", [], "any", false, false, false, 346), 'row');
                        echo "
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Fermer le ticket</button>
\t\t\t\t\t\t\t";
                        // line 348
                        echo                         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTicketList"]) || array_key_exists("formTicketList", $context) ? $context["formTicketList"] : (function () { throw new RuntimeError('Variable "formTicketList" does not exist.', 348, $this->source); })()), 'form_end');
                        echo "
\t\t\t\t\t\t";
                    } else {
                        // line 350
                        echo "\t\t\t\t\t\t\t";
                        echo                         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTicketList"]) || array_key_exists("formTicketList", $context) ? $context["formTicketList"] : (function () { throw new RuntimeError('Variable "formTicketList" does not exist.', 350, $this->source); })()), 'form_start');
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 351
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formTicketList"]) || array_key_exists("formTicketList", $context) ? $context["formTicketList"] : (function () { throw new RuntimeError('Variable "formTicketList" does not exist.', 351, $this->source); })()), "status", [], "any", false, false, false, 351), 'row', ["attr" => ["value" => "open"]]);
                        echo "\t\t\t\t
\t\t\t\t\t\t\t\t";
                        // line 352
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formTicketList"]) || array_key_exists("formTicketList", $context) ? $context["formTicketList"] : (function () { throw new RuntimeError('Variable "formTicketList" does not exist.', 352, $this->source); })()), "result", [], "any", false, false, false, 352), 'row', ["attr" => ["style" => "display:none;", "value" => "none"]]);
                        echo "
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-warning\">Ouvrir le ticket</button>
\t\t\t\t\t\t\t";
                        // line 354
                        echo                         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTicketList"]) || array_key_exists("formTicketList", $context) ? $context["formTicketList"] : (function () { throw new RuntimeError('Variable "formTicketList" does not exist.', 354, $this->source); })()), 'form_end');
                        echo "
\t\t\t\t\t\t";
                    }
                    // line 356
                    echo "\t\t\t\t\t";
                }
                // line 357
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticketlist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 358
            echo "\t\t\t\t\t
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


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
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  530 => 358,  524 => 357,  521 => 356,  516 => 354,  511 => 352,  507 => 351,  502 => 350,  497 => 348,  492 => 346,  487 => 344,  482 => 343,  479 => 342,  476 => 341,  472 => 340,  468 => 338,  462 => 337,  457 => 335,  452 => 333,  446 => 331,  443 => 330,  439 => 329,  434 => 326,  424 => 322,  419 => 320,  413 => 316,  409 => 314,  405 => 312,  403 => 311,  400 => 310,  396 => 309,  387 => 302,  385 => 301,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Troubleshooting - Dépannage informatique en ligne{% endblock %}

{% block body %}
<style>
body{
    margin-top:20px;
    background:#eee;
}
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

/**************ADD FORM ***************/
.chat-body .answer-add {
    clear: both;
    position: relative;
    margin: 20px -20px -20px;
    padding: 20px;
    background: #46be8a;
}
.chat-body .answer-add input {
    border: none;
    background: none;
    display: block;
    width: 100%;
    font-size: 16px;
    line-height: 20px;
    padding: 0;
    color: #ffffff;
}
.chat input {
    -webkit-appearance: none;
    border-radius: 0;
}
.chat-body .answer-add .answer-btn-1 {
    background: url(\"http://91.234.35.26/iwiki-admin/v1.0.0/admin/img/icon-40.png\") 50% 50% no-repeat;
    right: 56px;
}
.chat-body .answer-add .answer-btn {
    display: block;
    cursor: pointer;
    width: 36px;
    height: 36px;
    position: absolute;
    top: 50%;
    margin-top: -18px;
}
.chat-body .answer-add .answer-btn-2 {
    background: url(\"http://91.234.35.26/iwiki-admin/v1.0.0/admin/img/icon-41.png\") 50% 50% no-repeat;
    right: 20px;
}
.chat input::-webkit-input-placeholder {
   color: #fff;
}

.chat input:-moz-placeholder { /* Firefox 18- */
   color: #fff;  
}

.chat input::-moz-placeholder {  /* Firefox 19+ */
   color: #fff;  
}

.chat input:-ms-input-placeholder {  
   color: #fff;  
}
.chat input {
    -webkit-appearance: none;
    border-radius: 0;
}

.select-style {
    padding: 0;
    margin: 0;
    border: 1px solid #ccc;
    width: 120px;
    border-radius: 3px;
    overflow: hidden;
    background-color: #fff;
    background: #fff;
    position: relative;
}
.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background-color: transparent;
    background-image: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.select-style:after {
    top: 50%;
    left: 85%;
    border: solid transparent;
    content: \" \";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(0, 0, 0, 0);
    border-top-color: #000000;
    border-width: 5px;
    margin-top: -2px;
    z-index: 100;
}
.select-style select:focus {
    outline: none;
}
</style>




<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js\"></script>
{% if form is defined %}
<div class=\"content container-fluid bootstrap snippets\">
      <div class=\"row row-broken\">
        <div class=\"col-sm-12 col-xs-12 chat\" style=\"outline: none;\" tabindex=\"5001\">
          <div class=\"col-inside-lg decor-default\">
          

\t\t\t<div class=\"chat-body\">
\t\t{% for openticket in opentickets %}

\t\t{% if openticket.name == \"admin@troubleshooting.com\" %}
\t\t\t\t<div class=\"answer right\">
\t\t{% else %}
\t\t\t\t<div class=\"answer left\">
\t\t{% endif %}
               <div class=\"avatar\">
                 <img src=\"https://bootdey.com/img/Content/avatar/avatar1.png\" alt=\"User name\">
                 <div class=\"status offline\"></div>
               </div>
               <div class=\"name\">{{ openticket.name }}</div>
               <div class=\"text\">
                 {{openticket.text}}
               </div>
              </div>
\t\t{% endfor %}


              <div class=\"answer-add\">
\t{% for ticketlist in ticketlists %}
\t\t{% if ticketlist.status == \"open\" %}
\t\t\t\t{{ form_start(form) }}

\t\t\t\t{{ form_row(form.text, { 'attr': {'placeholder':'Ecrire un message...', 'class':'form-control'} }) }}
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Envoyer le message</button>
\t\t\t\t{{ form_end(form) }}
\t\t{% endif %}
\t{% endfor %}
\t
\t\t\t\t
\t\t\t\t{% for ticketlist in ticketlists %}
\t\t\t\t\t{% if ticketlist.tag == tag %}
\t\t\t\t\t\t{% if ticketlist.status == \"open\" %}
\t\t\t\t\t\t\t{{ form_start(formTicketList) }}
\t\t\t\t\t\t\t\t{{ form_row(formTicketList.status, { 'attr': {'value':'close'} }) }}
\t\t\t\t\t\t\t\t<p>Êtes vous satisfaits ?</p>
\t\t\t\t\t\t\t\t{{ form_row(formTicketList.result) }}
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Fermer le ticket</button>
\t\t\t\t\t\t\t{{ form_end(formTicketList) }}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{{ form_start(formTicketList) }}
\t\t\t\t\t\t\t\t{{ form_row(formTicketList.status, { 'attr': {'value':'open'} }) }}\t\t\t\t
\t\t\t\t\t\t\t\t{{ form_row(formTicketList.result, {'attr':{'style':'display:none;', 'value':'none'} }) }}
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-warning\">Ouvrir le ticket</button>
\t\t\t\t\t\t\t{{ form_end(formTicketList) }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t\t
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


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
  {% endif %}
{% endblock %}
", "main/myticketID.html.twig", "C:\\Users\\moi\\Documents\\Symfony\\troubleshooting\\troubleshooting\\templates\\main\\myticketID.html.twig");
    }
}
