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

/* Admin/stationvelo/index.html.twig */
class __TwigTemplate_2ac1bb5c17d3ae0dd43b812e0c960132 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/stationvelo/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/stationvelo/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/stationvelo/index.html.twig", 1);
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "   
<body>

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
          <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class=\"nav-item dropdown pe-3\">
          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">user name</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>
            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                <i class=\"bi bi-box-arrow-right\"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
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
          <i class=\"bi bi-house-door\"></i>
          <span>Home</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stations_index");
        yield "\">
          <i class=\"bi bi-bicycle\"></i>
          <span>Gestion De Vélo</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_index");
        yield "\">
          <i class=\"bi bi-people-fill\"></i>
          <span>Gestion De Covoiturage</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        yield "\">
          <i class=\"bi bi-taxi-front-fill\"></i>
          <span>Gestion De Taxi</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
          <i class=\"bi bi-bus-front\"></i>
          <span>Transport Publique</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
          <i class=\"bi bi-exclamation-triangle-fill\"></i>
          <span>Reclamation</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  
<main id=\"main\" class=\"main\">

    <section class=\"section dashboard\">
      <style>
        :root {
            --primary: #3a86ff;
            --secondary: #8338ec;
            --accent: #ff006e;
            --dark: #1a1a2e;
            --light: #f8f9ff;
            --success: #06d6a0;
            --warning: #ffbe0b;
        }
        
        body {
            background-color: var(--light);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            min-height: 100vh;
        }
        
        .dashboard-container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        /* Gradient Header Section */
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .header-content h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin: 0;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: -0.5px;
        }
        
        .header-content p {
            color: #64748b;
            font-size: 1.1rem;
            margin-top: 0.5rem;
        }
        
        /* Modern Buttons */
        .header-actions {
            display: flex;
            gap: 1rem;
        }
        
        .btn {
            border: none;
            border-radius: 10px;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
        }
        
        .btn-secondary {
            background: white;
            color: var(--primary);
            border: 1px solid rgba(58, 134, 255, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(58, 134, 255, 0.25);
        }
        
        /* Card Grid Layout */
        .stations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 1.5rem;
        }
        
        /* Elevated Card Design */
        .station-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .station-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            border-color: rgba(58, 134, 255, 0.2);
        }
        
        /* Gradient Card Header */
        .card-header {
            padding: 1.5rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            position: relative;
        }
        
        .card-header h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
            position: relative;
            z-index: 1;
        }
        
        .card-header p {
            margin: 0.25rem 0 0;
            opacity: 0.9;
            font-weight: 500;
            position: relative;
            z-index: 1;
        }
        
        /* Card Body with Detail Rows */
        .card-body {
            padding: 1.5rem;
        }
        
        .detail-row {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .detail-icon {
            width: 40px;
            height: 40px;
            background: rgba(58, 134, 255, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: var(--primary);
            flex-shrink: 0;
        }
        
        .detail-content h4 {
            margin: 0;
            font-size: 0.9rem;
            color: #64748b;
            font-weight: 500;
        }
        
        .detail-content p {
            margin: 0.25rem 0 0;
            font-weight: 600;
            color: var(--dark);
        }
        
        /* Card Footer with Action Buttons */
        .card-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            gap: 0.75rem;
            background: rgba(255, 255, 255, 0.6);
        }
        
        .action-btn {
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
        }
        
        .action-btn.view {
            background: rgba(6, 214, 160, 0.1);
            color: var(--success);
        }
        
        .action-btn.edit {
            background: rgba(255, 190, 11, 0.1);
            color: var(--warning);
        }
        
        .action-btn.delete {
            background: rgba(255, 0, 110, 0.1);
            color: var(--accent);
        }
        
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        /* Empty State Design */
        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 4rem 2rem;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .empty-state-icon {
            font-size: 3.5rem;
            color: #cbd5e1;
            margin-bottom: 1.5rem;
        }
        
        .empty-state h3 {
            font-size: 1.5rem;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }
        
        .empty-state p {
            color: #64748b;
            margin-bottom: 2rem;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .header-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 1.5rem;
            }
            
            .stations-grid {
                grid-template-columns: 1fr;
            }
            
            .header-content h1 {
                font-size: 2rem;
            }
        }
    </style>
    <div class=\"dashboard-container\">
        <div class=\"header-section\">
            <div class=\"header-content\">
                <h1><i class=\"bi bi-bicycle\"></i> Bike Stations</h1>
                <p>Manage all your bike station locations</p>
            </div>
            <div class=\"header-actions\">
                <a href=\"";
        // line 381
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_velo_type_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"bi bi-gear-fill\"></i> Manage Bike Types
                </a>
                <a href=\"";
        // line 384
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_station_new");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"bi bi-plus-lg\"></i> Add Station
                </a>
            </div>
        </div>

        <div class=\"stations-grid\">
            ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stations"]) || array_key_exists("stations", $context) ? $context["stations"] : (function () { throw new RuntimeError('Variable "stations" does not exist.', 391, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
            // line 392
            yield "                <div class=\"station-card\">
                    <div class=\"card-header\">
                        <h3><i class=\"bi bi-pin-map-fill\"></i> ";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "name_station", [], "any", false, false, false, 394), "html", null, true);
            yield "</h3>
                        <p>";
            // line 395
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "gouvernera", [], "any", false, false, false, 395), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"detail-row\">
                            <div class=\"detail-icon\">
                                <i class=\"bi bi-building\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <h4>Municipality</h4>
                                <p>";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "municapilite", [], "any", false, false, false, 404), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        <div class=\"detail-row\">
                            <div class=\"detail-icon\">
                                <i class=\"bi bi-geo-alt-fill\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <h4>Address</h4>
                                <p>";
            // line 413
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "adresse", [], "any", false, false, false, 413), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        <div class=\"detail-row\">
                            <div class=\"detail-icon\">
                                <i class=\"bi bi-person-badge-fill\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <h4>Admin</h4>
                                <p>";
            // line 422
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["station"], "user", [], "any", false, false, false, 422)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["station"], "user", [], "any", false, false, false, 422), "getNom", [], "method", false, false, false, 422), "html", null, true)) : ("N/A"));
            yield "</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
            // line 427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_station_velos", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["station"], "id_station", [], "any", false, false, false, 427)]), "html", null, true);
            yield "\" 
                           class=\"action-btn view\">
                            <i class=\"bi bi-bicycle\"></i> Bikes
                        </a>
                        <a href=\"";
            // line 431
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_station_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["station"], "id_station", [], "any", false, false, false, 431)]), "html", null, true);
            yield "\" 
                           class=\"action-btn edit\">
                            <i class=\"bi bi-pencil-square\"></i> Edit
                        </a>
                        <form method=\"post\" action=\"";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_station_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["station"], "id_station", [], "any", false, false, false, 435)]), "html", null, true);
            yield "\" 
                              onsubmit=\"return confirm('Are you sure you want to delete this station?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["station"], "id_station", [], "any", false, false, false, 437))), "html", null, true);
            yield "\">
                            <button class=\"action-btn delete\">
                                <i class=\"bi bi-trash-fill\"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 444
        if (!$context['_iterated']) {
            // line 445
            yield "                <div class=\"empty-state\">
                    <div class=\"empty-state-icon\">
                        <i class=\"bi bi-map\"></i>
                    </div>
                    <h3>No Stations Found</h3>
                    <p>You haven't added any bike stations yet</p>
                    <a href=\"";
            // line 451
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_station_new");
            yield "\" class=\"btn btn-primary\">
                        <i class=\"bi bi-plus-lg\"></i> Add Your First Station
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['station'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        yield "        </div>
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
        return "Admin/stationvelo/index.html.twig";
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
        return array (  612 => 456,  601 => 451,  593 => 445,  591 => 444,  579 => 437,  574 => 435,  567 => 431,  560 => 427,  552 => 422,  540 => 413,  528 => 404,  516 => 395,  512 => 394,  508 => 392,  503 => 391,  493 => 384,  487 => 381,  197 => 94,  187 => 87,  177 => 80,  100 => 5,  87 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welcome!{% endblock %}
{% block body %}
   
<body>

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
          <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class=\"nav-item dropdown pe-3\">
          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">user name</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>
            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                <i class=\"bi bi-box-arrow-right\"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
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
          <i class=\"bi bi-house-door\"></i>
          <span>Home</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('app_stations_index') }}\">
          <i class=\"bi bi-bicycle\"></i>
          <span>Gestion De Vélo</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('app_covoiturage_index') }}\">
          <i class=\"bi bi-people-fill\"></i>
          <span>Gestion De Covoiturage</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('app_vehicule_index') }}\">
          <i class=\"bi bi-taxi-front-fill\"></i>
          <span>Gestion De Taxi</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
          <i class=\"bi bi-bus-front\"></i>
          <span>Transport Publique</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
          <i class=\"bi bi-exclamation-triangle-fill\"></i>
          <span>Reclamation</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  
<main id=\"main\" class=\"main\">

    <section class=\"section dashboard\">
      <style>
        :root {
            --primary: #3a86ff;
            --secondary: #8338ec;
            --accent: #ff006e;
            --dark: #1a1a2e;
            --light: #f8f9ff;
            --success: #06d6a0;
            --warning: #ffbe0b;
        }
        
        body {
            background-color: var(--light);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            min-height: 100vh;
        }
        
        .dashboard-container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        /* Gradient Header Section */
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .header-content h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin: 0;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: -0.5px;
        }
        
        .header-content p {
            color: #64748b;
            font-size: 1.1rem;
            margin-top: 0.5rem;
        }
        
        /* Modern Buttons */
        .header-actions {
            display: flex;
            gap: 1rem;
        }
        
        .btn {
            border: none;
            border-radius: 10px;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
        }
        
        .btn-secondary {
            background: white;
            color: var(--primary);
            border: 1px solid rgba(58, 134, 255, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(58, 134, 255, 0.25);
        }
        
        /* Card Grid Layout */
        .stations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 1.5rem;
        }
        
        /* Elevated Card Design */
        .station-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .station-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            border-color: rgba(58, 134, 255, 0.2);
        }
        
        /* Gradient Card Header */
        .card-header {
            padding: 1.5rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            position: relative;
        }
        
        .card-header h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
            position: relative;
            z-index: 1;
        }
        
        .card-header p {
            margin: 0.25rem 0 0;
            opacity: 0.9;
            font-weight: 500;
            position: relative;
            z-index: 1;
        }
        
        /* Card Body with Detail Rows */
        .card-body {
            padding: 1.5rem;
        }
        
        .detail-row {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .detail-icon {
            width: 40px;
            height: 40px;
            background: rgba(58, 134, 255, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: var(--primary);
            flex-shrink: 0;
        }
        
        .detail-content h4 {
            margin: 0;
            font-size: 0.9rem;
            color: #64748b;
            font-weight: 500;
        }
        
        .detail-content p {
            margin: 0.25rem 0 0;
            font-weight: 600;
            color: var(--dark);
        }
        
        /* Card Footer with Action Buttons */
        .card-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            gap: 0.75rem;
            background: rgba(255, 255, 255, 0.6);
        }
        
        .action-btn {
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
        }
        
        .action-btn.view {
            background: rgba(6, 214, 160, 0.1);
            color: var(--success);
        }
        
        .action-btn.edit {
            background: rgba(255, 190, 11, 0.1);
            color: var(--warning);
        }
        
        .action-btn.delete {
            background: rgba(255, 0, 110, 0.1);
            color: var(--accent);
        }
        
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        /* Empty State Design */
        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 4rem 2rem;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .empty-state-icon {
            font-size: 3.5rem;
            color: #cbd5e1;
            margin-bottom: 1.5rem;
        }
        
        .empty-state h3 {
            font-size: 1.5rem;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }
        
        .empty-state p {
            color: #64748b;
            margin-bottom: 2rem;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .header-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 1.5rem;
            }
            
            .stations-grid {
                grid-template-columns: 1fr;
            }
            
            .header-content h1 {
                font-size: 2rem;
            }
        }
    </style>
    <div class=\"dashboard-container\">
        <div class=\"header-section\">
            <div class=\"header-content\">
                <h1><i class=\"bi bi-bicycle\"></i> Bike Stations</h1>
                <p>Manage all your bike station locations</p>
            </div>
            <div class=\"header-actions\">
                <a href=\"{{ path('app_velo_type_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"bi bi-gear-fill\"></i> Manage Bike Types
                </a>
                <a href=\"{{ path('app_station_new') }}\" class=\"btn btn-primary\">
                    <i class=\"bi bi-plus-lg\"></i> Add Station
                </a>
            </div>
        </div>

        <div class=\"stations-grid\">
            {% for station in stations %}
                <div class=\"station-card\">
                    <div class=\"card-header\">
                        <h3><i class=\"bi bi-pin-map-fill\"></i> {{ station.name_station }}</h3>
                        <p>{{ station.gouvernera }}</p>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"detail-row\">
                            <div class=\"detail-icon\">
                                <i class=\"bi bi-building\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <h4>Municipality</h4>
                                <p>{{ station.municapilite }}</p>
                            </div>
                        </div>
                        <div class=\"detail-row\">
                            <div class=\"detail-icon\">
                                <i class=\"bi bi-geo-alt-fill\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <h4>Address</h4>
                                <p>{{ station.adresse }}</p>
                            </div>
                        </div>
                        <div class=\"detail-row\">
                            <div class=\"detail-icon\">
                                <i class=\"bi bi-person-badge-fill\"></i>
                            </div>
                            <div class=\"detail-content\">
                                <h4>Admin</h4>
                                <p>{{ station.user ? station.user.getNom() : 'N/A' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"{{ path('app_station_velos', {'id': station.id_station}) }}\" 
                           class=\"action-btn view\">
                            <i class=\"bi bi-bicycle\"></i> Bikes
                        </a>
                        <a href=\"{{ path('app_station_edit', {'id': station.id_station}) }}\" 
                           class=\"action-btn edit\">
                            <i class=\"bi bi-pencil-square\"></i> Edit
                        </a>
                        <form method=\"post\" action=\"{{ path('app_station_delete', {'id': station.id_station}) }}\" 
                              onsubmit=\"return confirm('Are you sure you want to delete this station?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ station.id_station) }}\">
                            <button class=\"action-btn delete\">
                                <i class=\"bi bi-trash-fill\"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            {% else %}
                <div class=\"empty-state\">
                    <div class=\"empty-state-icon\">
                        <i class=\"bi bi-map\"></i>
                    </div>
                    <h3>No Stations Found</h3>
                    <p>You haven't added any bike stations yet</p>
                    <a href=\"{{ path('app_station_new') }}\" class=\"btn btn-primary\">
                        <i class=\"bi bi-plus-lg\"></i> Add Your First Station
                    </a>
                </div>
            {% endfor %}
        </div>
    </div>
    </section>

  </main><!-- End #main -->

  {% endblock %}", "Admin/stationvelo/index.html.twig", "C:\\Users\\jihen\\Desktop\\pi_symfony\\templates\\Admin\\stationvelo\\index.html.twig");
    }
}
