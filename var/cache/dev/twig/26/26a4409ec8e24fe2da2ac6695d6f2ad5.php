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

/* Admin/velo/index.html.twig */
class __TwigTemplate_19d28224d48fbb279046ac67deee8ea8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/velo/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/velo/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/velo/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        <li class=\"nav-item dropdown\">

         

          

           

        <li class=\"nav-item dropdown\">

          

          

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
          <i class=\"bi bi-person\"></i>
          <span>Home</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stations_index");
        yield "\">
          <i class=\"bi bi-bicycle\"></i>
          <span>Gestion De Vélo</span>
        </a>
      </li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_index");
        yield "\">
          <i class=\"bi bi-envelope\"></i>
          <span>Gestion De Covoiturage</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-register.html\">
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
       <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a0ca3;
            --success: #4cc9f0;
            --danger: #f72585;
            --light: #f8f9fa;
            --dark: #212529;
        }
        
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
        }
        
        .dashboard-container {
            max-width: 100%;
            padding: 2rem;
        }
        
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .header-title {
            font-weight: 800;
            font-size: 2rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 0.5rem;
        }
        
        .action-buttons {
            display: flex;
            gap: 1rem;
        }
        
        .btn {
            border: none;
            border-radius: 12px;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
        }
        
        .btn-secondary {
            background: white;
            color: var(--primary);
            border: 1px solid var(--primary);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(67, 97, 238, 0.2);
        }
        
        .bikes-scroller {
            display: flex;
            overflow-x: auto;
            gap: 1.5rem;
            padding: 1rem 0.5rem;
            scrollbar-width: thin;
            scrollbar-color: var(--primary) var(--light);
        }
        
        .bikes-scroller::-webkit-scrollbar {
            height: 8px;
        }
        
        .bikes-scroller::-webkit-scrollbar-track {
            background: var(--light);
            border-radius: 10px;
        }
        
        .bikes-scroller::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }
        
        .bike-card {
            flex: 0 0 auto;
            width: 320px;
        }
        
        .card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            background: white;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }
        
        .card-image {
            height: 180px;
            background: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .card:hover .card-image img {
            transform: scale(1.05);
        }
        
        .card-image .placeholder-icon {
            font-size: 3rem;
            color: #adb5bd;
        }
        
        .card-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.8rem;
        }
        
        .badge-available {
            background-color: rgba(76, 201, 240, 0.2);
            color: var(--success);
        }
        
        .badge-unavailable {
            background-color: rgba(247, 37, 133, 0.2);
            color: var(--danger);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .detail-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .detail-icon {
            width: 32px;
            height: 32px;
            background: rgba(67, 97, 238, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: var(--primary);
        }
        
        .detail-content h4 {
            margin: 0;
            font-size: 0.9rem;
            color: #6c757d;
            font-weight: 500;
        }
        
        .detail-content p {
            margin: 0.25rem 0 0;
            font-weight: 600;
            color: var(--dark);
        }
        
        .card-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
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
        
        .action-btn.edit {
            background: rgba(255, 193, 7, 0.1);
            color: #ffc107;
        }
        
        .action-btn.delete {
            background: rgba(247, 37, 133, 0.1);
            color: var(--danger);
        }
        
        .empty-state {
            width: 100%;
            text-align: center;
            padding: 4rem 2rem;
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
        }
        
        .empty-icon {
            font-size: 3.5rem;
            color: #adb5bd;
            margin-bottom: 1.5rem;
        }
        
        .empty-text h3 {
            font-size: 1.5rem;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }
        
        .empty-text p {
            color: #6c757d;
            margin-bottom: 1.5rem;
        }
        
        @media (max-width: 768px) {
            .header-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 1.5rem;
            }
            
            .action-buttons {
                width: 100%;
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
     <div class=\"dashboard-container\">
        <div class=\"header-section\">
            <div>
                <h1 class=\"header-title\">🚲 Bikes at ";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 421, $this->source); })()), "name_station", [], "any", false, false, false, 421), "html", null, true);
        yield "</h1>
                <p class=\"text-muted\">";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 422, $this->source); })()), "gouvernera", [], "any", false, false, false, 422), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 422, $this->source); })()), "municapilite", [], "any", false, false, false, 422), "html", null, true);
        yield "</p>
            </div>
            <div class=\"action-buttons\">
                <a href=\"";
        // line 425
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stations_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Back to Stations
                </a>
                <a href=\"";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_velo_new", ["stationId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 428, $this->source); })()), "id_station", [], "any", false, false, false, 428)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus\"></i> Add Bike
                </a>
            </div>
        </div>

        <div class=\"bikes-scroller\">
            ";
        // line 435
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["velos"]) || array_key_exists("velos", $context) ? $context["velos"] : (function () { throw new RuntimeError('Variable "velos" does not exist.', 435, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["velo"]) {
            // line 436
            yield "                <div class=\"bike-card\">
                    <div class=\"card\">
                        <div class=\"card-image\">
                            ";
            // line 439
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 439) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 439), "veloImage", [], "any", false, false, false, 439))) {
                // line 440
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 440), "veloImage", [], "any", false, false, false, 440)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 440), "typeName", [], "any", false, false, false, 440), "html", null, true);
                yield "\">
                            ";
            } else {
                // line 442
                yield "                                <i class=\"fas fa-bicycle placeholder-icon\"></i>
                            ";
            }
            // line 444
            yield "                            <span class=\"card-badge ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "isDispo", [], "method", false, false, false, 444)) ? ("badge-available") : ("badge-unavailable"));
            yield "\">
                                ";
            // line 445
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "isDispo", [], "method", false, false, false, 445)) ? ("Available") : ("Unavailable"));
            yield "
                            </span>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"detail-item\">
                                <div class=\"detail-icon\">
                                    <i class=\"fas fa-tag\"></i>
                                </div>
                                <div class=\"detail-content\">
                                    <h4>Type</h4>
                                    <p>";
            // line 455
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 455)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 455), "typeName", [], "any", false, false, false, 455), "html", null, true)) : ("N/A"));
            yield "</p>
                                </div>
                            </div>
                            <div class=\"detail-item\">
                                <div class=\"detail-icon\">
                                    <i class=\"fas fa-dollar-sign\"></i>
                                </div>
                                <div class=\"detail-content\">
                                    <h4>Price</h4>
                                    <p>";
            // line 464
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 464)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("dt " . $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 464), "price", [], "any", false, false, false, 464), 2)), "html", null, true)) : ("N/A"));
            yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"";
            // line 469
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_velo_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "id_velo", [], "any", false, false, false, 469)]), "html", null, true);
            yield "\" class=\"action-btn edit\">
                                <i class=\"fas fa-edit\"></i> Edit
                            </a>
                            <form method=\"post\" action=\"";
            // line 472
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_velo_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "id_velo", [], "any", false, false, false, 472)]), "html", null, true);
            yield "\" 
                                  onsubmit=\"return confirm('Are you sure you want to delete this bike?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 474
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "id_velo", [], "any", false, false, false, 474))), "html", null, true);
            yield "\">
                                <button class=\"action-btn delete\">
                                    <i class=\"fas fa-trash\"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 482
        if (!$context['_iterated']) {
            // line 483
            yield "                <div class=\"empty-state\">
                    <div class=\"empty-icon\">
                        <i class=\"fas fa-bicycle\"></i>
                    </div>
                    <div class=\"empty-text\">
                        <h3>No bikes available at this station</h3>
                        <p>Get started by adding your first bike to this station</p>
                        <a href=\"";
            // line 490
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_velo_new", ["stationId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 490, $this->source); })()), "id_station", [], "any", false, false, false, 490)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus\"></i> Add First Bike
                        </a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['velo'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 496
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
        return "Admin/velo/index.html.twig";
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
        return array (  660 => 496,  648 => 490,  639 => 483,  637 => 482,  624 => 474,  619 => 472,  613 => 469,  605 => 464,  593 => 455,  580 => 445,  575 => 444,  571 => 442,  563 => 440,  561 => 439,  556 => 436,  551 => 435,  541 => 428,  535 => 425,  527 => 422,  523 => 421,  214 => 115,  204 => 108,  100 => 6,  87 => 5,  64 => 4,  41 => 1,);
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

        <li class=\"nav-item dropdown\">

         

          

           

        <li class=\"nav-item dropdown\">

          

          

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
          <i class=\"bi bi-person\"></i>
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
          <i class=\"bi bi-envelope\"></i>
          <span>Gestion De Covoiturage</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-register.html\">
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
       <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a0ca3;
            --success: #4cc9f0;
            --danger: #f72585;
            --light: #f8f9fa;
            --dark: #212529;
        }
        
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
        }
        
        .dashboard-container {
            max-width: 100%;
            padding: 2rem;
        }
        
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .header-title {
            font-weight: 800;
            font-size: 2rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 0.5rem;
        }
        
        .action-buttons {
            display: flex;
            gap: 1rem;
        }
        
        .btn {
            border: none;
            border-radius: 12px;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
        }
        
        .btn-secondary {
            background: white;
            color: var(--primary);
            border: 1px solid var(--primary);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(67, 97, 238, 0.2);
        }
        
        .bikes-scroller {
            display: flex;
            overflow-x: auto;
            gap: 1.5rem;
            padding: 1rem 0.5rem;
            scrollbar-width: thin;
            scrollbar-color: var(--primary) var(--light);
        }
        
        .bikes-scroller::-webkit-scrollbar {
            height: 8px;
        }
        
        .bikes-scroller::-webkit-scrollbar-track {
            background: var(--light);
            border-radius: 10px;
        }
        
        .bikes-scroller::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }
        
        .bike-card {
            flex: 0 0 auto;
            width: 320px;
        }
        
        .card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            background: white;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }
        
        .card-image {
            height: 180px;
            background: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .card:hover .card-image img {
            transform: scale(1.05);
        }
        
        .card-image .placeholder-icon {
            font-size: 3rem;
            color: #adb5bd;
        }
        
        .card-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.8rem;
        }
        
        .badge-available {
            background-color: rgba(76, 201, 240, 0.2);
            color: var(--success);
        }
        
        .badge-unavailable {
            background-color: rgba(247, 37, 133, 0.2);
            color: var(--danger);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .detail-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .detail-icon {
            width: 32px;
            height: 32px;
            background: rgba(67, 97, 238, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: var(--primary);
        }
        
        .detail-content h4 {
            margin: 0;
            font-size: 0.9rem;
            color: #6c757d;
            font-weight: 500;
        }
        
        .detail-content p {
            margin: 0.25rem 0 0;
            font-weight: 600;
            color: var(--dark);
        }
        
        .card-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
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
        
        .action-btn.edit {
            background: rgba(255, 193, 7, 0.1);
            color: #ffc107;
        }
        
        .action-btn.delete {
            background: rgba(247, 37, 133, 0.1);
            color: var(--danger);
        }
        
        .empty-state {
            width: 100%;
            text-align: center;
            padding: 4rem 2rem;
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
        }
        
        .empty-icon {
            font-size: 3.5rem;
            color: #adb5bd;
            margin-bottom: 1.5rem;
        }
        
        .empty-text h3 {
            font-size: 1.5rem;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }
        
        .empty-text p {
            color: #6c757d;
            margin-bottom: 1.5rem;
        }
        
        @media (max-width: 768px) {
            .header-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 1.5rem;
            }
            
            .action-buttons {
                width: 100%;
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
     <div class=\"dashboard-container\">
        <div class=\"header-section\">
            <div>
                <h1 class=\"header-title\">🚲 Bikes at {{ station.name_station }}</h1>
                <p class=\"text-muted\">{{ station.gouvernera }}, {{ station.municapilite }}</p>
            </div>
            <div class=\"action-buttons\">
                <a href=\"{{ path('app_stations_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Back to Stations
                </a>
                <a href=\"{{ path('app_velo_new', {'stationId': station.id_station}) }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus\"></i> Add Bike
                </a>
            </div>
        </div>

        <div class=\"bikes-scroller\">
            {% for velo in velos %}
                <div class=\"bike-card\">
                    <div class=\"card\">
                        <div class=\"card-image\">
                            {% if velo.veloType and velo.veloType.veloImage %}
                                <img src=\"{{ asset(velo.veloType.veloImage) }}\" alt=\"{{ velo.veloType.typeName }}\">
                            {% else %}
                                <i class=\"fas fa-bicycle placeholder-icon\"></i>
                            {% endif %}
                            <span class=\"card-badge {{ velo.isDispo() ? 'badge-available' : 'badge-unavailable' }}\">
                                {{ velo.isDispo() ? 'Available' : 'Unavailable' }}
                            </span>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"detail-item\">
                                <div class=\"detail-icon\">
                                    <i class=\"fas fa-tag\"></i>
                                </div>
                                <div class=\"detail-content\">
                                    <h4>Type</h4>
                                    <p>{{ velo.veloType ? velo.veloType.typeName : 'N/A' }}</p>
                                </div>
                            </div>
                            <div class=\"detail-item\">
                                <div class=\"detail-icon\">
                                    <i class=\"fas fa-dollar-sign\"></i>
                                </div>
                                <div class=\"detail-content\">
                                    <h4>Price</h4>
                                    <p>{{ velo.veloType ? 'dt ' ~ velo.veloType.price|number_format(2) : 'N/A' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"{{ path('app_velo_edit', {'id': velo.id_velo}) }}\" class=\"action-btn edit\">
                                <i class=\"fas fa-edit\"></i> Edit
                            </a>
                            <form method=\"post\" action=\"{{ path('app_velo_delete', {'id': velo.id_velo}) }}\" 
                                  onsubmit=\"return confirm('Are you sure you want to delete this bike?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ velo.id_velo) }}\">
                                <button class=\"action-btn delete\">
                                    <i class=\"fas fa-trash\"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"empty-state\">
                    <div class=\"empty-icon\">
                        <i class=\"fas fa-bicycle\"></i>
                    </div>
                    <div class=\"empty-text\">
                        <h3>No bikes available at this station</h3>
                        <p>Get started by adding your first bike to this station</p>
                        <a href=\"{{ path('app_velo_new', {'stationId': station.id_station}) }}\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus\"></i> Add First Bike
                        </a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
    </section>

  </main><!-- End #main -->

 
{% endblock %}", "Admin/velo/index.html.twig", "C:\\Users\\jihen\\Desktop\\Wasalni_Web\\Wasalni\\Wasalni\\templates\\Admin\\velo\\index.html.twig");
    }
}
