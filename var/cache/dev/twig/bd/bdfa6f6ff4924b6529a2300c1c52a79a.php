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

/* Front/stationvelo/velos.html.twig */
class __TwigTemplate_332e9baf93fa7e9cac42863b91293382 extends Template
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
        return "Front/userDashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/stationvelo/velos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/stationvelo/velos.html.twig"));

        $this->parent = $this->loadTemplate("Front/userDashboard.html.twig", "Front/stationvelo/velos.html.twig", 1);
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

        yield "Bikes at ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 3, $this->source); })()), "name_station", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-10 col-lg-12\">
            <!-- Header Section -->
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <div>
                    <h1 class=\"h2 mb-1 text-primary\">
                        <i class=\"fas fa-bicycle me-2\"></i>
                        Bikes at ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 14, $this->source); })()), "name_station", [], "any", false, false, false, 14), "html", null, true);
        yield "
                    </h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stations_search");
        yield "\">Stations</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 19, $this->source); })()), "name_station", [], "any", false, false, false, 19), "html", null, true);
        yield "</li>
                        </ol>
                    </nav>
                </div>
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stations_search");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-arrow-left me-2\"></i>Back to Stations
                </a>
            </div>

            <!-- Station Info Card -->
            <div class=\"card shadow-sm mb-5\">
                <div class=\"card-body p-4\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-primary bg-opacity-10 p-3 rounded me-3\">
                                    <i class=\"fas fa-map-marker-alt text-primary\"></i>
                                </div>
                                <div>
                                    <h3 class=\"h6 text-muted mb-1\">Address</h3>
                                    <p class=\"mb-0\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 39, $this->source); })()), "adresse", [], "any", false, false, false, 39), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-primary bg-opacity-10 p-3 rounded me-3\">
                                    <i class=\"fas fa-city text-primary\"></i>
                                </div>
                                <div>
                                    <h3 class=\"h6 text-muted mb-1\">Municipality</h3>
                                    <p class=\"mb-0\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 50, $this->source); })()), "municapilite", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-primary bg-opacity-10 p-3 rounded me-3\">
                                    <i class=\"fas fa-flag text-primary\"></i>
                                </div>
                                <div>
                                    <h3 class=\"h6 text-muted mb-1\">Governorate</h3>
                                    <p class=\"mb-0\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 61, $this->source); })()), "gouvernera", [], "any", false, false, false, 61), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bikes Section -->
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h2 class=\"h4 mb-0\">Available Bikes</h2>
                <span class=\"badge bg-primary bg-opacity-10 text-primary\">
                    ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["velos"]) || array_key_exists("velos", $context) ? $context["velos"] : (function () { throw new RuntimeError('Variable "velos" does not exist.', 73, $this->source); })())), "html", null, true);
        yield " bike";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["velos"]) || array_key_exists("velos", $context) ? $context["velos"] : (function () { throw new RuntimeError('Variable "velos" does not exist.', 73, $this->source); })())) != 1)) ? ("s") : (""));
        yield " available
                </span>
            </div>

            ";
        // line 77
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["velos"]) || array_key_exists("velos", $context) ? $context["velos"] : (function () { throw new RuntimeError('Variable "velos" does not exist.', 77, $this->source); })()))) {
            // line 78
            yield "                <div class=\"card shadow-sm\">
                    <div class=\"card-body text-center py-5\">
                        <div class=\"mb-3\">
                            <i class=\"fas fa-bicycle-slash fa-3x text-muted\"></i>
                        </div>
                        <h3 class=\"h5\">No bikes available</h3>
                        <p class=\"text-muted mb-0\">All bikes are currently rented from this station</p>
                    </div>
                </div>
            ";
        } else {
            // line 88
            yield "                <div class=\"row g-4\">
                    ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["velos"]) || array_key_exists("velos", $context) ? $context["velos"] : (function () { throw new RuntimeError('Variable "velos" does not exist.', 89, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["velo"]) {
                // line 90
                yield "                    <div class=\"col-xl-3 col-lg-4 col-md-6\">
                        <div class=\"card h-100 border-0 shadow-sm bike-card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                    <div>
                                        <h3 class=\"h5 mb-1\">";
                // line 95
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 95)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 95), "type_name", [], "any", false, false, false, 95), "html", null, true)) : ("Standard Bike"));
                yield "</h3>
                                        <span class=\"badge bg-light text-dark small\">ID: ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "id_velo", [], "any", false, false, false, 96), "html", null, true);
                yield "</span>
                                    </div>
                                    <span class=\"badge ";
                // line 98
                if (CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "dispo", [], "any", false, false, false, 98)) {
                    yield "bg-success";
                } else {
                    yield "bg-danger";
                }
                yield "\">
                                        ";
                // line 99
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "dispo", [], "any", false, false, false, 99)) ? ("Available") : ("Rented"));
                yield "
                                    </span>
                                </div>
                                
                                <div class=\"card-image\">
                                    ";
                // line 104
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 104) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 104), "veloImage", [], "any", false, false, false, 104))) {
                    // line 105
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 105), "veloImage", [], "any", false, false, false, 105)), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 105), "type_name", [], "any", false, false, false, 105), "html", null, true);
                    yield "\" class=\"img-fluid\">
                                    ";
                } else {
                    // line 107
                    yield "                                        <i class=\"fas fa-bicycle placeholder-icon\"></i>
                                    ";
                }
                // line 109
                yield "                                </div>
                                
                                ";
                // line 111
                if (CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "dispo", [], "any", false, false, false, 111)) {
                    // line 112
                    yield "                                <div class=\"mb-4\">
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <i class=\"fas fa-clock text-muted me-2\"></i>
                                        <span class=\"small\">Price per hour</span>
                                    </div>
                                    <h4 class=\"text-primary mb-0\">";
                    // line 117
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 117), "price", [], "any", false, false, false, 117), "html", null, true);
                    yield " TND</h4>
                                </div>
                                
                               ";
                    // line 122
                    yield "<form method=\"post\" action=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationvelo_start");
                    yield "\" 
      data-hourly-rate=\"";
                    // line 123
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "veloType", [], "any", false, false, false, 123), "price", [], "any", false, false, false, 123), "html", null, true);
                    yield "\" 
      class=\"reservation-form\">
    <input type=\"hidden\" name=\"velo_id\" value=\"";
                    // line 125
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["velo"], "id_velo", [], "any", false, false, false, 125), "html", null, true);
                    yield "\" />
    
    <div class=\"mb-3\">
        <label class=\"form-label small text-muted\">Start Date & Time</label>
        <input type=\"datetime-local\" 
               name=\"start_date\" 
               class=\"form-control start-date\"
               required
               min=\"";
                    // line 133
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d\\TH:i"), "html", null, true);
                    yield "\">
    </div>
    
    <div class=\"mb-3\">
        <label class=\"form-label small text-muted\">End Date & Time</label>
        <input type=\"datetime-local\" 
               name=\"end_date\" 
               class=\"form-control end-date\"
               required
               min=\"";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d\\TH:i"), "html", null, true);
                    yield "\">
    </div>

    <div class=\"calculation-summary mb-3 p-3 bg-light rounded\">
        <div class=\"d-flex justify-content-between small\">
            <span class=\"text-muted\">Duration:</span>
            <span class=\"text-primary duration-display\">0 hours</span>
        </div>
        <div class=\"d-flex justify-content-between\">
            <span class=\"text-muted\">Total Price:</span>
            <span class=\"text-success fw-bold price-display\">0.00 TND</span>
        </div>
    </div>

    <button type=\"submit\" class=\"btn btn-primary w-100\">
        <i class=\"fas fa-calendar-check me-2\"></i>Reserve Now
    </button>
</form>
                                ";
                } else {
                    // line 161
                    yield "                                <div class=\"text-center py-3\">
                                    <span class=\"badge bg-light text-dark\">Available soon</span>
                                </div>
                                ";
                }
                // line 165
                yield "                            </div>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['velo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            yield "                </div>
            ";
        }
        // line 171
        yield "        </div>
    </div>
</div>

<style>
    .bike-card {
        transition: all 0.3s ease;
        border-radius: 12px;
        overflow: hidden;
    }
    
    .bike-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .breadcrumb {
        background: transparent;
        padding: 0;
    }
    
    .bg-opacity-10 {
        background-color: rgba(var(--bs-primary-rgb), 0.1);
    }
    
    .card-body {
        padding: 1.5rem;
    }
</style>
";
        // line 201
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all reservation forms
    document.querySelectorAll('.reservation-form').forEach(form => {
        const hourlyRate = parseFloat(form.dataset.hourlyRate);
        const startInput = form.querySelector('.start-date');
        const endInput = form.querySelector('.end-date');
        const durationDisplay = form.querySelector('.duration-display');
        const priceDisplay = form.querySelector('.price-display');
        const submitBtn = form.querySelector('button[type=\"submit\"]');

        // Update price calculation
        const updateCalculation = () => {
            try {
                const startDate = new Date(startInput.value);
                const endDate = new Date(endInput.value);
                
                if (startDate && endDate && endDate > startDate) {
                    // Calculate duration in hours with decimals
                    const diffMs = endDate - startDate;
                    const hours = diffMs / (1000 * 60 * 60);
                    const roundedHours = Math.round(hours * 100) / 100;
                    const totalPrice = roundedHours * hourlyRate;

                    // Update displays
                    durationDisplay.textContent = `\${roundedHours} hrs`;
                    priceDisplay.textContent = `\${totalPrice.toFixed(2)} TND`;
                    submitBtn.disabled = false;
                } else {
                    durationDisplay.textContent = '0 hrs';
                    priceDisplay.textContent = '0.00 TND';
                    submitBtn.disabled = true;
                }
            } catch (error) {
                console.error('Calculation error:', error);
            }
        };

        // Date validation
        const validateDates = () => {
            const startDate = new Date(startInput.value);
            const endDate = new Date(endInput.value);
            
            if (endDate <= startDate) {
                endInput.setCustomValidity('End date must be after start date');
            } else {
                endInput.setCustomValidity('');
            }
        };

        // Event listeners
        startInput.addEventListener('change', () => {
            endInput.min = startInput.value;
            validateDates();
            updateCalculation();
        });

        endInput.addEventListener('change', () => {
            validateDates();
            updateCalculation();
        });

        // Initial setup
        updateCalculation();
    });

    // Form submission handler
    document.querySelectorAll('.reservation-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!this.checkValidity()) {
                e.preventDefault();
                alert('Please fill in all required fields correctly');
            }
        });
    });
});
</script>
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
        return "Front/stationvelo/velos.html.twig";
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
        return array (  391 => 201,  360 => 171,  356 => 169,  347 => 165,  341 => 161,  319 => 142,  307 => 133,  296 => 125,  291 => 123,  286 => 122,  280 => 117,  273 => 112,  271 => 111,  267 => 109,  263 => 107,  255 => 105,  253 => 104,  245 => 99,  237 => 98,  232 => 96,  228 => 95,  221 => 90,  217 => 89,  214 => 88,  202 => 78,  200 => 77,  191 => 73,  176 => 61,  162 => 50,  148 => 39,  129 => 23,  122 => 19,  118 => 18,  111 => 14,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Front/userDashboard.html.twig' %}

{% block title %}Bikes at {{ station.name_station }}{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-10 col-lg-12\">
            <!-- Header Section -->
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <div>
                    <h1 class=\"h2 mb-1 text-primary\">
                        <i class=\"fas fa-bicycle me-2\"></i>
                        Bikes at {{ station.name_station }}
                    </h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_stations_search') }}\">Stations</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ station.name_station }}</li>
                        </ol>
                    </nav>
                </div>
                <a href=\"{{ path('app_stations_search') }}\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-arrow-left me-2\"></i>Back to Stations
                </a>
            </div>

            <!-- Station Info Card -->
            <div class=\"card shadow-sm mb-5\">
                <div class=\"card-body p-4\">
                    <div class=\"row g-4\">
                        <div class=\"col-md-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-primary bg-opacity-10 p-3 rounded me-3\">
                                    <i class=\"fas fa-map-marker-alt text-primary\"></i>
                                </div>
                                <div>
                                    <h3 class=\"h6 text-muted mb-1\">Address</h3>
                                    <p class=\"mb-0\">{{ station.adresse }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-primary bg-opacity-10 p-3 rounded me-3\">
                                    <i class=\"fas fa-city text-primary\"></i>
                                </div>
                                <div>
                                    <h3 class=\"h6 text-muted mb-1\">Municipality</h3>
                                    <p class=\"mb-0\">{{ station.municapilite }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"bg-primary bg-opacity-10 p-3 rounded me-3\">
                                    <i class=\"fas fa-flag text-primary\"></i>
                                </div>
                                <div>
                                    <h3 class=\"h6 text-muted mb-1\">Governorate</h3>
                                    <p class=\"mb-0\">{{ station.gouvernera }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bikes Section -->
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h2 class=\"h4 mb-0\">Available Bikes</h2>
                <span class=\"badge bg-primary bg-opacity-10 text-primary\">
                    {{ velos|length }} bike{{ velos|length != 1 ? 's' : '' }} available
                </span>
            </div>

            {% if velos is empty %}
                <div class=\"card shadow-sm\">
                    <div class=\"card-body text-center py-5\">
                        <div class=\"mb-3\">
                            <i class=\"fas fa-bicycle-slash fa-3x text-muted\"></i>
                        </div>
                        <h3 class=\"h5\">No bikes available</h3>
                        <p class=\"text-muted mb-0\">All bikes are currently rented from this station</p>
                    </div>
                </div>
            {% else %}
                <div class=\"row g-4\">
                    {% for velo in velos %}
                    <div class=\"col-xl-3 col-lg-4 col-md-6\">
                        <div class=\"card h-100 border-0 shadow-sm bike-card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-start mb-3\">
                                    <div>
                                        <h3 class=\"h5 mb-1\">{{ velo.veloType ? velo.veloType.type_name : 'Standard Bike' }}</h3>
                                        <span class=\"badge bg-light text-dark small\">ID: {{ velo.id_velo }}</span>
                                    </div>
                                    <span class=\"badge {% if velo.dispo %}bg-success{% else %}bg-danger{% endif %}\">
                                        {{ velo.dispo ? 'Available' : 'Rented' }}
                                    </span>
                                </div>
                                
                                <div class=\"card-image\">
                                    {% if velo.veloType and velo.veloType.veloImage %}
                                        <img src=\"{{ asset(velo.veloType.veloImage) }}\" alt=\"{{ velo.veloType.type_name }}\" class=\"img-fluid\">
                                    {% else %}
                                        <i class=\"fas fa-bicycle placeholder-icon\"></i>
                                    {% endif %}
                                </div>
                                
                                {% if velo.dispo %}
                                <div class=\"mb-4\">
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <i class=\"fas fa-clock text-muted me-2\"></i>
                                        <span class=\"small\">Price per hour</span>
                                    </div>
                                    <h4 class=\"text-primary mb-0\">{{ velo.veloType.price }} TND</h4>
                                </div>
                                
                               {# Inside the bike card form #}
{# Inside the bike card form #}
<form method=\"post\" action=\"{{ path('app_reservationvelo_start') }}\" 
      data-hourly-rate=\"{{ velo.veloType.price }}\" 
      class=\"reservation-form\">
    <input type=\"hidden\" name=\"velo_id\" value=\"{{ velo.id_velo }}\" />
    
    <div class=\"mb-3\">
        <label class=\"form-label small text-muted\">Start Date & Time</label>
        <input type=\"datetime-local\" 
               name=\"start_date\" 
               class=\"form-control start-date\"
               required
               min=\"{{ \"now\"|date('Y-m-d\\\\TH:i') }}\">
    </div>
    
    <div class=\"mb-3\">
        <label class=\"form-label small text-muted\">End Date & Time</label>
        <input type=\"datetime-local\" 
               name=\"end_date\" 
               class=\"form-control end-date\"
               required
               min=\"{{ \"now\"|date('Y-m-d\\\\TH:i') }}\">
    </div>

    <div class=\"calculation-summary mb-3 p-3 bg-light rounded\">
        <div class=\"d-flex justify-content-between small\">
            <span class=\"text-muted\">Duration:</span>
            <span class=\"text-primary duration-display\">0 hours</span>
        </div>
        <div class=\"d-flex justify-content-between\">
            <span class=\"text-muted\">Total Price:</span>
            <span class=\"text-success fw-bold price-display\">0.00 TND</span>
        </div>
    </div>

    <button type=\"submit\" class=\"btn btn-primary w-100\">
        <i class=\"fas fa-calendar-check me-2\"></i>Reserve Now
    </button>
</form>
                                {% else %}
                                <div class=\"text-center py-3\">
                                    <span class=\"badge bg-light text-dark\">Available soon</span>
                                </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>
</div>

<style>
    .bike-card {
        transition: all 0.3s ease;
        border-radius: 12px;
        overflow: hidden;
    }
    
    .bike-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .breadcrumb {
        background: transparent;
        padding: 0;
    }
    
    .bg-opacity-10 {
        background-color: rgba(var(--bs-primary-rgb), 0.1);
    }
    
    .card-body {
        padding: 1.5rem;
    }
</style>
{# Add this at the bottom of your bikes.html.twig template #}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all reservation forms
    document.querySelectorAll('.reservation-form').forEach(form => {
        const hourlyRate = parseFloat(form.dataset.hourlyRate);
        const startInput = form.querySelector('.start-date');
        const endInput = form.querySelector('.end-date');
        const durationDisplay = form.querySelector('.duration-display');
        const priceDisplay = form.querySelector('.price-display');
        const submitBtn = form.querySelector('button[type=\"submit\"]');

        // Update price calculation
        const updateCalculation = () => {
            try {
                const startDate = new Date(startInput.value);
                const endDate = new Date(endInput.value);
                
                if (startDate && endDate && endDate > startDate) {
                    // Calculate duration in hours with decimals
                    const diffMs = endDate - startDate;
                    const hours = diffMs / (1000 * 60 * 60);
                    const roundedHours = Math.round(hours * 100) / 100;
                    const totalPrice = roundedHours * hourlyRate;

                    // Update displays
                    durationDisplay.textContent = `\${roundedHours} hrs`;
                    priceDisplay.textContent = `\${totalPrice.toFixed(2)} TND`;
                    submitBtn.disabled = false;
                } else {
                    durationDisplay.textContent = '0 hrs';
                    priceDisplay.textContent = '0.00 TND';
                    submitBtn.disabled = true;
                }
            } catch (error) {
                console.error('Calculation error:', error);
            }
        };

        // Date validation
        const validateDates = () => {
            const startDate = new Date(startInput.value);
            const endDate = new Date(endInput.value);
            
            if (endDate <= startDate) {
                endInput.setCustomValidity('End date must be after start date');
            } else {
                endInput.setCustomValidity('');
            }
        };

        // Event listeners
        startInput.addEventListener('change', () => {
            endInput.min = startInput.value;
            validateDates();
            updateCalculation();
        });

        endInput.addEventListener('change', () => {
            validateDates();
            updateCalculation();
        });

        // Initial setup
        updateCalculation();
    });

    // Form submission handler
    document.querySelectorAll('.reservation-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!this.checkValidity()) {
                e.preventDefault();
                alert('Please fill in all required fields correctly');
            }
        });
    });
});
</script>
{% endblock %}", "Front/stationvelo/velos.html.twig", "C:\\Users\\jihen\\Desktop\\pi_symfony\\templates\\Front\\stationvelo\\velos.html.twig");
    }
}
