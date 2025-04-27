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

/* Admin/reservation_cov/index.html.twig */
class __TwigTemplate_f06c505547cd0dcbee0a44823511c928 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/reservation_cov/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/reservation_cov/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/reservation_cov/index.html.twig", 1);
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

        yield "Liste des Réservations";
        
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
          </a>
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
          </ul>
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
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stations_index");
        yield "\">
          <i class=\"bi bi-bicycle\"></i>
          <span>Gestion De Vélo</span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_index");
        yield "\">
          <i class=\"bi bi-car-front\"></i>
          <span>Gestion De Covoiturage</span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicule_index");
        yield "\">
          <i class=\"bi bi-taxi-front\"></i>
          <span>Gestion De Taxi</span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
          <i class=\"bi bi-bus-front\"></i>
          <span>Transport Publique</span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
          <i class=\"bi bi-chat-dots\"></i>
          <span>Reclamation</span>
        </a>
      </li>
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
        
        .reservations-scroller {
            display: flex;
            overflow-x: auto;
            gap: 1.5rem;
            padding: 1rem 0.5rem;
            scrollbar-width: thin;
            scrollbar-color: var(--primary) var(--light);
        }
        
        .reservations-scroller::-webkit-scrollbar {
            height: 8px;
        }
        
        .reservations-scroller::-webkit-scrollbar-track {
            background: var(--light);
            border-radius: 10px;
        }
        
        .reservations-scroller::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }
        
        .reservation-card {
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
        
        .card-header {
            padding: 1.5rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .card-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
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
        
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
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
        
        .btn-new {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            text-decoration: none;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .btn-new:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(67, 97, 238, 0.2);
        }
      </style>
      
      <div class=\"dashboard-container\">
        <div class=\"header-section\">
            <div>
                <h1 class=\"header-title\"><i class=\"bi bi-calendar-check\"></i> Liste des Réservations</h1>
                <p class=\"text-muted\">Gérez toutes vos réservations de covoiturage</p>
            </div>
            <div>
                <a href=\"";
        // line 302
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_cov_new");
        yield "\" class=\"btn-new\">
                    <i class=\"bi bi-plus-lg\"></i> Ajouter une réservation
                </a>
            </div>
        </div>

        <div class=\"reservations-scroller\">
            ";
        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservation_covs"]) || array_key_exists("reservation_covs", $context) ? $context["reservation_covs"] : (function () { throw new RuntimeError('Variable "reservation_covs" does not exist.', 309, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 310
            yield "                <div class=\"reservation-card\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h3>Réservation #";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 313), "html", null, true);
            yield "</h3>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"detail-item\">
                                <div class=\"detail-icon\">
                                    <i class=\"bi bi-geo-alt\"></i>
                                </div>
                                <div class=\"detail-content\">
                                    <h4>Trajet</h4>
                                    <p>";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "covoiturage", [], "any", false, false, false, 322), "pointDeDepart", [], "any", false, false, false, 322), "html", null, true);
            yield " → ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "covoiturage", [], "any", false, false, false, 322), "pointDeDestination", [], "any", false, false, false, 322), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            <div class=\"detail-item\">
                                <div class=\"detail-icon\">
                                    <i class=\"bi bi-people\"></i>
                                </div>
                                <div class=\"detail-content\">
                                    <h4>Places réservées</h4>
                                    <p>";
            // line 331
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbrPlace", [], "any", false, false, false, 331), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            <div class=\"detail-item\">
                                <div class=\"detail-icon\">
                                    <i class=\"bi bi-cash\"></i>
                                </div>
                                <div class=\"detail-content\">
                                    <h4>Prix total</h4>
                                    <p>";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "covoiturage", [], "any", false, false, false, 340), "prix", [], "any", false, false, false, 340) * CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nbrPlace", [], "any", false, false, false, 340)), "html", null, true);
            yield " TND</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_cov_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 345)]), "html", null, true);
            yield "\" class=\"action-btn edit\">
                                <i class=\"bi bi-pencil\"></i> Modifier
                            </a>
                            <form method=\"post\" action=\"";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_cov_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 348)]), "html", null, true);
            yield "\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 350))), "html", null, true);
            yield "\">
                                <button class=\"action-btn delete\">
                                    <i class=\"bi bi-trash\"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 358
        if (!$context['_iterated']) {
            // line 359
            yield "                <div class=\"empty-state\">
                    <div class=\"empty-icon\">
                        <i class=\"bi bi-calendar-x\"></i>
                    </div>
                    <div class=\"empty-text\">
                        <h3>Aucune réservation trouvée</h3>
                        <p>Vous n'avez pas encore de réservations</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 369
        yield "        </div>
      </div>
    </section>
  </main>
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
        return "Admin/reservation_cov/index.html.twig";
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
        return array (  514 => 369,  499 => 359,  497 => 358,  484 => 350,  479 => 348,  473 => 345,  465 => 340,  453 => 331,  439 => 322,  427 => 313,  422 => 310,  417 => 309,  407 => 302,  182 => 80,  173 => 74,  164 => 68,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Réservations{% endblock %}

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
          </a>
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
          </ul>
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
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('app_stations_index') }}\">
          <i class=\"bi bi-bicycle\"></i>
          <span>Gestion De Vélo</span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_covoiturage_index') }}\">
          <i class=\"bi bi-car-front\"></i>
          <span>Gestion De Covoiturage</span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('app_vehicule_index') }}\">
          <i class=\"bi bi-taxi-front\"></i>
          <span>Gestion De Taxi</span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
          <i class=\"bi bi-bus-front\"></i>
          <span>Transport Publique</span>
        </a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
          <i class=\"bi bi-chat-dots\"></i>
          <span>Reclamation</span>
        </a>
      </li>
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
        
        .reservations-scroller {
            display: flex;
            overflow-x: auto;
            gap: 1.5rem;
            padding: 1rem 0.5rem;
            scrollbar-width: thin;
            scrollbar-color: var(--primary) var(--light);
        }
        
        .reservations-scroller::-webkit-scrollbar {
            height: 8px;
        }
        
        .reservations-scroller::-webkit-scrollbar-track {
            background: var(--light);
            border-radius: 10px;
        }
        
        .reservations-scroller::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }
        
        .reservation-card {
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
        
        .card-header {
            padding: 1.5rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .card-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
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
        
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
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
        
        .btn-new {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            text-decoration: none;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .btn-new:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(67, 97, 238, 0.2);
        }
      </style>
      
      <div class=\"dashboard-container\">
        <div class=\"header-section\">
            <div>
                <h1 class=\"header-title\"><i class=\"bi bi-calendar-check\"></i> Liste des Réservations</h1>
                <p class=\"text-muted\">Gérez toutes vos réservations de covoiturage</p>
            </div>
            <div>
                <a href=\"{{ path('app_reservation_cov_new') }}\" class=\"btn-new\">
                    <i class=\"bi bi-plus-lg\"></i> Ajouter une réservation
                </a>
            </div>
        </div>

        <div class=\"reservations-scroller\">
            {% for reservation in reservation_covs %}
                <div class=\"reservation-card\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h3>Réservation #{{ reservation.id }}</h3>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"detail-item\">
                                <div class=\"detail-icon\">
                                    <i class=\"bi bi-geo-alt\"></i>
                                </div>
                                <div class=\"detail-content\">
                                    <h4>Trajet</h4>
                                    <p>{{ reservation.covoiturage.pointDeDepart }} → {{ reservation.covoiturage.pointDeDestination }}</p>
                                </div>
                            </div>
                            <div class=\"detail-item\">
                                <div class=\"detail-icon\">
                                    <i class=\"bi bi-people\"></i>
                                </div>
                                <div class=\"detail-content\">
                                    <h4>Places réservées</h4>
                                    <p>{{ reservation.nbrPlace }}</p>
                                </div>
                            </div>
                            <div class=\"detail-item\">
                                <div class=\"detail-icon\">
                                    <i class=\"bi bi-cash\"></i>
                                </div>
                                <div class=\"detail-content\">
                                    <h4>Prix total</h4>
                                    <p>{{ reservation.covoiturage.prix * reservation.nbrPlace }} TND</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"{{ path('app_reservation_cov_edit', {'id': reservation.id}) }}\" class=\"action-btn edit\">
                                <i class=\"bi bi-pencil\"></i> Modifier
                            </a>
                            <form method=\"post\" action=\"{{ path('app_reservation_cov_delete', {'id': reservation.id}) }}\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reservation.id) }}\">
                                <button class=\"action-btn delete\">
                                    <i class=\"bi bi-trash\"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"empty-state\">
                    <div class=\"empty-icon\">
                        <i class=\"bi bi-calendar-x\"></i>
                    </div>
                    <div class=\"empty-text\">
                        <h3>Aucune réservation trouvée</h3>
                        <p>Vous n'avez pas encore de réservations</p>
                    </div>
                </div>
            {% endfor %}
        </div>
      </div>
    </section>
  </main>
{% endblock %}", "Admin/reservation_cov/index.html.twig", "C:\\Users\\jihen\\Desktop\\Wasalni_Web\\Wasalni\\Wasalni\\templates\\Admin\\reservation_cov\\index.html.twig");
    }
}
