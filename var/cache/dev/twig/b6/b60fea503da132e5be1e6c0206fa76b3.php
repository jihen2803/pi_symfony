<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* Admin/stationvelo/new.html.twig */
class __TwigTemplate_ffa1499fa0e69c21ddb0f46d099ecfa1 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/stationvelo/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/stationvelo/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/stationvelo/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Nouvelle Station Vélo";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">
    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <img src=\"assets/img/logo.png\" alt=\"\">
        <span class=\"d-none d-lg-block\">Wasalni</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
      <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">
        <li class=\"nav-item d-block d-lg-none\">
          <a class=\"nav-link nav-icon search-bar-toggle\" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class=\"nav-item dropdown pe-3\">
          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">user name</span>
          </a><!-- End Profile Iamge Icon -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id=\"sidebar\" class=\"sidebar\">
    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
      <li class=\"nav-heading\">Pages</li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
          <i class=\"bi bi-person\"></i>
          <span>Home</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stations_index");
        yield "\">
          <i class=\"bi bi-question-circle\"></i>
          <span>Gestion De Vélo</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_index");
        yield "\">
          <i class=\"bi bi-envelope\"></i>
          <span>Gestion De Covoiturage</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        yield "\">
          <i class=\"bi bi-card-list\"></i>
          <span>Gestion De Taxi</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
          <i class=\"bi bi-box-arrow-in-right\"></i>
          <span>Transport Publique</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
          <i class=\"bi bi-dash-circle\"></i>
          <span>Reclamation</span>
        </a>
      </li><!-- End Error 404 Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id=\"main\" class=\"main\">
    <section class=\"section dashboard\">
        ";
        // line 92
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Admin/stationvelo/_form.html.twig", ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })())]);
        yield "
      ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'errors');
        yield " ";
        // line 94
        yield "      
      <style>
        .bike-type-form {
            --primary: #3a86ff;
            --primary-light: #4cc9f0;
            --secondary: #8338ec;
            --accent: #ff006e;
            --dark: #1a1a2e;
            --light: #f8f9ff;
            --success: #06d6a0;
            --gray: #64748b;
            --light-gray: #e2e8f0;
            
            max-width: 700px;
            margin: 0 auto;
            font-family: 'Inter', sans-serif;
        }

        .form-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .form-header {
            padding: 1.75rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
        }

        .form-header h3 {
            margin: 0 0 0.25rem 0;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .form-header p {
            margin: 0;
            opacity: 0.9;
            font-size: 0.95rem;
        }

        .form-body {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.75rem;
            position: relative;
        }

        /* Floating Label Inputs */
        .floating-label {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 1.1rem;
            color: var(--primary);
            z-index: 2;
        }

        .form-input {
            width: 100%;
            padding: 1.25rem 1rem 1.25rem 3rem;
            border: 1px solid var(--light-gray);
            border-radius: 8px;
            font-size: 1rem;
            background-color: #f8fafc;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .floating-label label {
            position: absolute;
            left: 3rem;
            top: 1.25rem;
            color: var(--gray);
            transition: all 0.3s ease;
            pointer-events: none;
            z-index: 1;
        }

        .focus-line {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            background-color: white;
            box-shadow: 0 0 0 3px rgba(58, 134, 255, 0.1);
        }

        .form-input:focus + label,
        .form-input:not(:placeholder-shown) + label {
            top: 0.5rem;
            left: 3rem;
            font-size: 0.75rem;
            color: var(--primary);
        }

        .form-input:focus ~ .focus-line {
            width: 100%;
        }

        /* Form Footer */
        .form-footer {
            padding: 1.5rem;
            border-top: 1px solid var(--light-gray);
            text-align: right;
        }

        .submit-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.875rem 1.75rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(58, 134, 255, 0.2);
        }

        .form-hint {
            display: block;
            margin-top: 0.5rem;
            color: var(--gray);
            font-size: 0.8rem;
        }

        @media (max-width: 768px) {
            .form-body {
                padding: 1.5rem;
            }
            
            .form-input {
                padding-left: 2.75rem;
            }
            
            .input-icon {
                left: 0.75rem;
            }
        }
      </style>

      <div class=\"action-buttons\" style=\"margin-top: 2rem; text-align: center;\">
          <a href=\"";
        // line 263
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stations_index");
        yield "\" class=\"btn btn-back\" style=\"background: white; color: #3a86ff; border: 1px solid rgba(58, 134, 255, 0.3);\">
              <i class=\"fas fa-arrow-left\"></i> Retour à la liste
          </a>
      </div>
    </section>
  </main><!-- End #main -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/stationvelo/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  375 => 263,  204 => 94,  201 => 93,  197 => 92,  170 => 68,  160 => 61,  150 => 54,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Station Vélo{% endblock %}

{% block body %}
  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">
    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <img src=\"assets/img/logo.png\" alt=\"\">
        <span class=\"d-none d-lg-block\">Wasalni</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
      <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">
        <li class=\"nav-item d-block d-lg-none\">
          <a class=\"nav-link nav-icon search-bar-toggle\" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class=\"nav-item dropdown pe-3\">
          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">user name</span>
          </a><!-- End Profile Iamge Icon -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id=\"sidebar\" class=\"sidebar\">
    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
      <li class=\"nav-heading\">Pages</li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
          <i class=\"bi bi-person\"></i>
          <span>Home</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_stations_index') }}\">
          <i class=\"bi bi-question-circle\"></i>
          <span>Gestion De Vélo</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('app_covoiturage_index') }}\">
          <i class=\"bi bi-envelope\"></i>
          <span>Gestion De Covoiturage</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('app_vehicule_index') }}\">
          <i class=\"bi bi-card-list\"></i>
          <span>Gestion De Taxi</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
          <i class=\"bi bi-box-arrow-in-right\"></i>
          <span>Transport Publique</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
          <i class=\"bi bi-dash-circle\"></i>
          <span>Reclamation</span>
        </a>
      </li><!-- End Error 404 Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id=\"main\" class=\"main\">
    <section class=\"section dashboard\">
        {{ include('Admin/stationvelo/_form.html.twig', { form: form }) }}
      {{ form_errors(form) }} {# Display validation errors for the entire form #}
      
      <style>
        .bike-type-form {
            --primary: #3a86ff;
            --primary-light: #4cc9f0;
            --secondary: #8338ec;
            --accent: #ff006e;
            --dark: #1a1a2e;
            --light: #f8f9ff;
            --success: #06d6a0;
            --gray: #64748b;
            --light-gray: #e2e8f0;
            
            max-width: 700px;
            margin: 0 auto;
            font-family: 'Inter', sans-serif;
        }

        .form-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .form-header {
            padding: 1.75rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
        }

        .form-header h3 {
            margin: 0 0 0.25rem 0;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .form-header p {
            margin: 0;
            opacity: 0.9;
            font-size: 0.95rem;
        }

        .form-body {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.75rem;
            position: relative;
        }

        /* Floating Label Inputs */
        .floating-label {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 1.1rem;
            color: var(--primary);
            z-index: 2;
        }

        .form-input {
            width: 100%;
            padding: 1.25rem 1rem 1.25rem 3rem;
            border: 1px solid var(--light-gray);
            border-radius: 8px;
            font-size: 1rem;
            background-color: #f8fafc;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .floating-label label {
            position: absolute;
            left: 3rem;
            top: 1.25rem;
            color: var(--gray);
            transition: all 0.3s ease;
            pointer-events: none;
            z-index: 1;
        }

        .focus-line {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            background-color: white;
            box-shadow: 0 0 0 3px rgba(58, 134, 255, 0.1);
        }

        .form-input:focus + label,
        .form-input:not(:placeholder-shown) + label {
            top: 0.5rem;
            left: 3rem;
            font-size: 0.75rem;
            color: var(--primary);
        }

        .form-input:focus ~ .focus-line {
            width: 100%;
        }

        /* Form Footer */
        .form-footer {
            padding: 1.5rem;
            border-top: 1px solid var(--light-gray);
            text-align: right;
        }

        .submit-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.875rem 1.75rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(58, 134, 255, 0.2);
        }

        .form-hint {
            display: block;
            margin-top: 0.5rem;
            color: var(--gray);
            font-size: 0.8rem;
        }

        @media (max-width: 768px) {
            .form-body {
                padding: 1.5rem;
            }
            
            .form-input {
                padding-left: 2.75rem;
            }
            
            .input-icon {
                left: 0.75rem;
            }
        }
      </style>

      <div class=\"action-buttons\" style=\"margin-top: 2rem; text-align: center;\">
          <a href=\"{{ path('app_stations_index') }}\" class=\"btn btn-back\" style=\"background: white; color: #3a86ff; border: 1px solid rgba(58, 134, 255, 0.3);\">
              <i class=\"fas fa-arrow-left\"></i> Retour à la liste
          </a>
      </div>
    </section>
  </main><!-- End #main -->
{% endblock %}", "Admin/stationvelo/new.html.twig", "C:\\Users\\jihen\\Desktop\\pi_symfony\\templates\\Admin\\stationvelo\\new.html.twig");
    }
}
