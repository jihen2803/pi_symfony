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

/* Front/stationvelo/search.html.twig */
class __TwigTemplate_262031562f22df08e84f68da1ab69767 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/stationvelo/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/stationvelo/search.html.twig"));

        $this->parent = $this->loadTemplate("Front/userDashboard.html.twig", "Front/stationvelo/search.html.twig", 1);
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

        yield "Find Bike Stations";
        
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
        <div class=\"col-xl-8 col-lg-10\">
            <!-- Search Card -->
            <div class=\"card border-0 shadow-sm mb-5\">
                <div class=\"card-body p-4 p-md-5\">
                    <div class=\"text-center mb-4\">
                        <h1 class=\"h2 mb-3 text-primary\">Find Bike Stations</h1>
                        <p class=\"text-muted\">Search for stations by location, address or municipality</p>
                    </div>

                    <form method=\"get\" action=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stations_search");
        yield "\">
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <input type=\"text\" name=\"name_station\" class=\"form-control form-control-lg\"
                                       placeholder=\"Station Name\" value=\"";
        // line 21
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "name_station", [], "any", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 21, $this->source); })()), "name_station", [], "any", false, false, false, 21)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 21, $this->source); })()), "name_station", [], "any", false, false, false, 21), "html", null, true)) : (""));
        yield "\">
                            </div>
                            <div class=\"col-md-6\">
                                <input type=\"text\" name=\"gouvernera\" class=\"form-control form-control-lg\"
                                       placeholder=\"Governorate\" value=\"";
        // line 25
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "gouvernera", [], "any", true, true, false, 25) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), "gouvernera", [], "any", false, false, false, 25)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 25, $this->source); })()), "gouvernera", [], "any", false, false, false, 25), "html", null, true)) : (""));
        yield "\">
                            </div>
                            <div class=\"col-md-6\">
                                <input type=\"text\" name=\"municapilite\" class=\"form-control form-control-lg\"
                                       placeholder=\"Municipality\" value=\"";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "municapilite", [], "any", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 29, $this->source); })()), "municapilite", [], "any", false, false, false, 29)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 29, $this->source); })()), "municapilite", [], "any", false, false, false, 29), "html", null, true)) : (""));
        yield "\">
                            </div>
                            <div class=\"col-md-6\">
                                <input type=\"text\" name=\"adresse\" class=\"form-control form-control-lg\"
                                       placeholder=\"Address\" value=\"";
        // line 33
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "adresse", [], "any", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33), "html", null, true)) : (""));
        yield "\">
                            </div>
                            <div class=\"col-12 text-center mt-3\">
                                <button type=\"submit\" class=\"btn btn-primary px-5\">Search</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <!-- Results Section -->
           ";
        // line 46
        yield "                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h2 class=\"h4 mb-0\">Available Stations</h2>
                    <div class=\"d-flex align-items-center gap-3\">
                        <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationvelo_index");
        yield "\" 
                        class=\"btn btn-outline-primary btn-sm\">
                            <i class=\"fas fa-list me-2\"></i>
                            My Reservations
                        </a>
                        <div class=\"text-muted\">
                            <span class=\"badge bg-light text-dark\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stations"]) || array_key_exists("stations", $context) ? $context["stations"] : (function () { throw new RuntimeError('Variable "stations" does not exist.', 55, $this->source); })())), "html", null, true);
        yield " stations found</span>
                        </div>
                    </div>
                </div>

            ";
        // line 60
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stations"]) || array_key_exists("stations", $context) ? $context["stations"] : (function () { throw new RuntimeError('Variable "stations" does not exist.', 60, $this->source); })())) > 0)) {
            // line 61
            yield "                <div class=\"row g-4\">
                    ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stations"]) || array_key_exists("stations", $context) ? $context["stations"] : (function () { throw new RuntimeError('Variable "stations" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
                // line 63
                yield "                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"card h-100 border-0 shadow-sm station-card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-start mb-3\">
                                    <div class=\"flex-grow-1\">
                                        <h3 class=\"h5 mb-1\">
                                            <i class=\"fas fa-bicycle text-primary me-2\"></i>
                                            ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "name_station", [], "any", false, false, false, 70), "html", null, true);
                yield "
                                        </h3>
                                        <div class=\"text-muted small\">";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "gouvernera", [], "any", false, false, false, 72), "html", null, true);
                yield "</div>
                                    </div>
                                    <span class=\"badge bg-success bg-opacity-10 text-success\">Open</span>
                                </div>

                                <div class=\"mb-3\">
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <i class=\"fas fa-map-marker-alt text-muted me-2\"></i>
                                        <span class=\"small\">";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "adresse", [], "any", false, false, false, 80), "html", null, true);
                yield "</span>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-city text-muted me-2\"></i>
                                        <span class=\"small\">";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "municapilite", [], "any", false, false, false, 84), "html", null, true);
                yield "</span>
                                    </div>
                                </div>

                                ";
                // line 88
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["station"], "lat", [], "any", false, false, false, 88) && CoreExtension::getAttribute($this->env, $this->source, $context["station"], "lon", [], "any", false, false, false, 88))) {
                    // line 89
                    yield "                                <div class=\"mb-3\">
                                    <iframe
                                        width=\"100%\"
                                        height=\"180\"
                                        frameborder=\"0\"
                                        scrolling=\"no\"
                                        marginheight=\"0\"
                                        marginwidth=\"0\"
                                        style=\"border-radius: 8px;\"
                                        src=\"https://www.openstreetmap.org/export/embed.html?bbox=";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["station"], "lon", [], "any", false, false, false, 98) - 0.005), "html", null, true);
                    yield ",";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["station"], "lat", [], "any", false, false, false, 98) - 0.005), "html", null, true);
                    yield ",";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["station"], "lon", [], "any", false, false, false, 98) + 0.005), "html", null, true);
                    yield ",";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["station"], "lat", [], "any", false, false, false, 98) + 0.005), "html", null, true);
                    yield "&layer=mapnik&marker=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "lat", [], "any", false, false, false, 98), "html", null, true);
                    yield ",";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "lon", [], "any", false, false, false, 98), "html", null, true);
                    yield "\">
                                    </iframe>
                                    <small>
                                        <a target=\"_blank\"
                                           href=\"https://www.openstreetmap.org/?mlat=";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "lat", [], "any", false, false, false, 102), "html", null, true);
                    yield "&mlon=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "lon", [], "any", false, false, false, 102), "html", null, true);
                    yield "#map=15/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "lat", [], "any", false, false, false, 102), "html", null, true);
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["station"], "lon", [], "any", false, false, false, 102), "html", null, true);
                    yield "\">
                                            Voir sur OpenStreetMap
                                        </a>
                                    </small>
                                </div>
                                ";
                } else {
                    // line 108
                    yield "                                <div class=\"text-danger small mb-2\">Coordonnées indisponibles pour cette station.</div>
                                ";
                }
                // line 110
                yield "                            </div>

                            <div class=\"card-footer bg-transparent border-top-0 pt-0 pb-3\">
                                <a href=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("velos_list", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["station"], "id_station", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-primary w-100 d-flex align-items-center justify-content-center\">
                                    View Bikes
                                    <i class=\"fas fa-chevron-right ms-2\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['station'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "                </div>
            ";
        } else {
            // line 124
            yield "                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body text-center py-5\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-search-location fa-4x text-light\" style=\"background: #e9ecef; padding: 1rem; border-radius: 50%;\"></i>
                        </div>
                        <h3 class=\"h5 mb-2\">No stations found</h3>
                        <p class=\"text-muted mb-4\">Try searching with different keywords</p>
                        <a href=\"";
            // line 131
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stations_search");
            yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-redo me-2\"></i>Reset Search
                        </a>
                    </div>
                </div>
            ";
        }
        // line 137
        yield "        </div>
    </div>
</div>

<style>
    .station-card {
        transition: all 0.3s ease;
        border-radius: 12px;
        overflow: hidden;
    }

    .station-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .card-footer {
        padding: 1rem 1.25rem;
    }

    .input-group-text {
        transition: all 0.3s ease;
    }

    .input-group:focus-within .input-group-text {
        color: #0d6efd;
    }

    .badge {
        font-weight: 500;
        padding: 0.35em 0.65em;
    }
</style>
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
        return "Front/stationvelo/search.html.twig";
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
        return array (  317 => 137,  308 => 131,  299 => 124,  295 => 122,  280 => 113,  275 => 110,  271 => 108,  256 => 102,  239 => 98,  228 => 89,  226 => 88,  219 => 84,  212 => 80,  201 => 72,  196 => 70,  187 => 63,  183 => 62,  180 => 61,  178 => 60,  170 => 55,  161 => 49,  156 => 46,  141 => 33,  134 => 29,  127 => 25,  120 => 21,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Front/userDashboard.html.twig' %}

{% block title %}Find Bike Stations{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-8 col-lg-10\">
            <!-- Search Card -->
            <div class=\"card border-0 shadow-sm mb-5\">
                <div class=\"card-body p-4 p-md-5\">
                    <div class=\"text-center mb-4\">
                        <h1 class=\"h2 mb-3 text-primary\">Find Bike Stations</h1>
                        <p class=\"text-muted\">Search for stations by location, address or municipality</p>
                    </div>

                    <form method=\"get\" action=\"{{ path('app_stations_search') }}\">
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <input type=\"text\" name=\"name_station\" class=\"form-control form-control-lg\"
                                       placeholder=\"Station Name\" value=\"{{ filters.name_station ?? '' }}\">
                            </div>
                            <div class=\"col-md-6\">
                                <input type=\"text\" name=\"gouvernera\" class=\"form-control form-control-lg\"
                                       placeholder=\"Governorate\" value=\"{{ filters.gouvernera ?? '' }}\">
                            </div>
                            <div class=\"col-md-6\">
                                <input type=\"text\" name=\"municapilite\" class=\"form-control form-control-lg\"
                                       placeholder=\"Municipality\" value=\"{{ filters.municapilite ?? '' }}\">
                            </div>
                            <div class=\"col-md-6\">
                                <input type=\"text\" name=\"adresse\" class=\"form-control form-control-lg\"
                                       placeholder=\"Address\" value=\"{{ filters.adresse ?? '' }}\">
                            </div>
                            <div class=\"col-12 text-center mt-3\">
                                <button type=\"submit\" class=\"btn btn-primary px-5\">Search</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <!-- Results Section -->
           {# Replace the existing Results Section div with this #}
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h2 class=\"h4 mb-0\">Available Stations</h2>
                    <div class=\"d-flex align-items-center gap-3\">
                        <a href=\"{{ path('app_reservationvelo_index') }}\" 
                        class=\"btn btn-outline-primary btn-sm\">
                            <i class=\"fas fa-list me-2\"></i>
                            My Reservations
                        </a>
                        <div class=\"text-muted\">
                            <span class=\"badge bg-light text-dark\">{{ stations|length }} stations found</span>
                        </div>
                    </div>
                </div>

            {% if stations|length > 0 %}
                <div class=\"row g-4\">
                    {% for station in stations %}
                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"card h-100 border-0 shadow-sm station-card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-start mb-3\">
                                    <div class=\"flex-grow-1\">
                                        <h3 class=\"h5 mb-1\">
                                            <i class=\"fas fa-bicycle text-primary me-2\"></i>
                                            {{ station.name_station }}
                                        </h3>
                                        <div class=\"text-muted small\">{{ station.gouvernera }}</div>
                                    </div>
                                    <span class=\"badge bg-success bg-opacity-10 text-success\">Open</span>
                                </div>

                                <div class=\"mb-3\">
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <i class=\"fas fa-map-marker-alt text-muted me-2\"></i>
                                        <span class=\"small\">{{ station.adresse }}</span>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"fas fa-city text-muted me-2\"></i>
                                        <span class=\"small\">{{ station.municapilite }}</span>
                                    </div>
                                </div>

                                {% if station.lat and station.lon %}
                                <div class=\"mb-3\">
                                    <iframe
                                        width=\"100%\"
                                        height=\"180\"
                                        frameborder=\"0\"
                                        scrolling=\"no\"
                                        marginheight=\"0\"
                                        marginwidth=\"0\"
                                        style=\"border-radius: 8px;\"
                                        src=\"https://www.openstreetmap.org/export/embed.html?bbox={{ station.lon - 0.005 }},{{ station.lat - 0.005 }},{{ station.lon + 0.005 }},{{ station.lat + 0.005 }}&layer=mapnik&marker={{ station.lat }},{{ station.lon }}\">
                                    </iframe>
                                    <small>
                                        <a target=\"_blank\"
                                           href=\"https://www.openstreetmap.org/?mlat={{ station.lat }}&mlon={{ station.lon }}#map=15/{{ station.lat }}/{{ station.lon }}\">
                                            Voir sur OpenStreetMap
                                        </a>
                                    </small>
                                </div>
                                {% else %}
                                <div class=\"text-danger small mb-2\">Coordonnées indisponibles pour cette station.</div>
                                {% endif %}
                            </div>

                            <div class=\"card-footer bg-transparent border-top-0 pt-0 pb-3\">
                                <a href=\"{{ path('velos_list', {'id': station.id_station}) }}\" 
                                   class=\"btn btn-primary w-100 d-flex align-items-center justify-content-center\">
                                    View Bikes
                                    <i class=\"fas fa-chevron-right ms-2\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            {% else %}
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body text-center py-5\">
                        <div class=\"mb-4\">
                            <i class=\"fas fa-search-location fa-4x text-light\" style=\"background: #e9ecef; padding: 1rem; border-radius: 50%;\"></i>
                        </div>
                        <h3 class=\"h5 mb-2\">No stations found</h3>
                        <p class=\"text-muted mb-4\">Try searching with different keywords</p>
                        <a href=\"{{ path('app_stations_search') }}\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-redo me-2\"></i>Reset Search
                        </a>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
</div>

<style>
    .station-card {
        transition: all 0.3s ease;
        border-radius: 12px;
        overflow: hidden;
    }

    .station-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .card-footer {
        padding: 1rem 1.25rem;
    }

    .input-group-text {
        transition: all 0.3s ease;
    }

    .input-group:focus-within .input-group-text {
        color: #0d6efd;
    }

    .badge {
        font-weight: 500;
        padding: 0.35em 0.65em;
    }
</style>
{% endblock %}
", "Front/stationvelo/search.html.twig", "C:\\Users\\jihen\\Desktop\\pi_symfony\\templates\\Front\\stationvelo\\search.html.twig");
    }
}
