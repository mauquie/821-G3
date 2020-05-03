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

/* main/index.html.twig */
class __TwigTemplate_cf2f0d06cf7258dc86af9529e21ac182734118af76298cf1d4119e7c28e1d351 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>



        <div class=\"section bg-white services-section\" data-aos=\"fade-up\">
          <div class=\"container\">
            <div class=\"row section-heading justify-content-center mb-5\">
              <div class=\"col-md-8 text-center\">
                <h2 class=\"heading mb-3\">Qui sommes-nous</h2>
                <p class=\"sub-heading mb-5\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["presentation"]) || array_key_exists("presentation", $context) ? $context["presentation"] : (function () { throw new RuntimeError('Variable "presentation" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</p>  
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-m mb-5d-6 col-lg-4\" data-aos=\"fade-up\">
                <div class=\"media feature-icon d-block text-center\">
                  <div class=\"icon\">
                    <span class=\"\"></span>
                  </div>
                  <div class=\"media-body\">
                    <h3>Le projet</h3>
                    <p>Créer une application Web dédition de tickets déintervention pour du dépannage</p>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <div class=\"media feature-icon d-block text-center\">
                  <div class=\"icon\">
                    <span class=\"\"></span>
                  </div>
                  <div class=\"media-body\">
                    <h3>Principe</h3>
                    <p>Des utilisateurs remplissent en ligne des tickets de demande d&apos;intervention.</p>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                <div class=\"media feature-icon d-block text-center\">
                  <div class=\"icon\">
                    <span class=\"\"></span>
                  </div>
                  <div class=\"media-body\">
                    <h3>Membre : Nidhal Amri</h3>
                    <p>Venu de pro, il est pr&ecirc;t &agrave; en d&eacute;coudre pour aider &agrave; r&eacute;aliser ce projet</p>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                <div class=\"media feature-icon d-block text-center\">
                  <div class=\"icon\">
                    <span class=\"\"></span>
                  </div>
                  <div class=\"media-body\">
                    <h3>Membre : Hugo Garoste</h3>
                    <p>Ne l&acirc;che jamais rien pour parvenir &agrave; son objectif</p>
                  </div>
                </div>
              </div>

              <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                <div class=\"media feature-icon d-block text-center\">
                  <div class=\"icon\">
                    <span class=\"\"></span>
                  </div>
                  <div class=\"media-body\">
                    <h3>Membre : Hugo Gilles</h3>
                    <p>Toujours motivateur, il fera tout pour avoir le meilleur site possible</p>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                <div class=\"media feature-icon d-block text-center\">
                  <div class=\"icon\">
                    <span class=\"\"></span>
                  </div>
                  <div class=\"media-body\">
                    <h3>Membre : Esteban Pascual</h3>
                    <p>Indispensable ! Un vrai cerveau, il guidera l&apos;&eacute;quipe vers son but</p>
                  </div>
                </div>
              </div>
\t\t\t</div>
            </div>
          </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Troubleshooting - Dépannage informatique en ligne{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>



        <div class=\"section bg-white services-section\" data-aos=\"fade-up\">
          <div class=\"container\">
            <div class=\"row section-heading justify-content-center mb-5\">
              <div class=\"col-md-8 text-center\">
                <h2 class=\"heading mb-3\">Qui sommes-nous</h2>
                <p class=\"sub-heading mb-5\">{{presentation}}</p>  
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-m mb-5d-6 col-lg-4\" data-aos=\"fade-up\">
                <div class=\"media feature-icon d-block text-center\">
                  <div class=\"icon\">
                    <span class=\"\"></span>
                  </div>
                  <div class=\"media-body\">
                    <h3>Le projet</h3>
                    <p>Créer une application Web dédition de tickets déintervention pour du dépannage</p>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <div class=\"media feature-icon d-block text-center\">
                  <div class=\"icon\">
                    <span class=\"\"></span>
                  </div>
                  <div class=\"media-body\">
                    <h3>Principe</h3>
                    <p>Des utilisateurs remplissent en ligne des tickets de demande d&apos;intervention.</p>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                <div class=\"media feature-icon d-block text-center\">
                  <div class=\"icon\">
                    <span class=\"\"></span>
                  </div>
                  <div class=\"media-body\">
                    <h3>Membre : Nidhal Amri</h3>
                    <p>Venu de pro, il est pr&ecirc;t &agrave; en d&eacute;coudre pour aider &agrave; r&eacute;aliser ce projet</p>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                <div class=\"media feature-icon d-block text-center\">
                  <div class=\"icon\">
                    <span class=\"\"></span>
                  </div>
                  <div class=\"media-body\">
                    <h3>Membre : Hugo Garoste</h3>
                    <p>Ne l&acirc;che jamais rien pour parvenir &agrave; son objectif</p>
                  </div>
                </div>
              </div>

              <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                <div class=\"media feature-icon d-block text-center\">
                  <div class=\"icon\">
                    <span class=\"\"></span>
                  </div>
                  <div class=\"media-body\">
                    <h3>Membre : Hugo Gilles</h3>
                    <p>Toujours motivateur, il fera tout pour avoir le meilleur site possible</p>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6 col-lg-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                <div class=\"media feature-icon d-block text-center\">
                  <div class=\"icon\">
                    <span class=\"\"></span>
                  </div>
                  <div class=\"media-body\">
                    <h3>Membre : Esteban Pascual</h3>
                    <p>Indispensable ! Un vrai cerveau, il guidera l&apos;&eacute;quipe vers son but</p>
                  </div>
                </div>
              </div>
\t\t\t</div>
            </div>
          </div>

{% endblock %}
", "main/index.html.twig", "C:\\Users\\moi\\Documents\\Symfony\\troubleshooting\\troubleshooting\\templates\\main\\index.html.twig");
    }
}
