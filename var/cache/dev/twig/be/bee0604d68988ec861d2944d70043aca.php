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

/* Front/reservationvelo/index.html.twig */
class __TwigTemplate_01f1f6e035a134498252e6c477421723 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/reservationvelo/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/reservationvelo/index.html.twig"));

        $this->parent = $this->loadTemplate("Front/userDashboard.html.twig", "Front/reservationvelo/index.html.twig", 1);
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

        yield "My Reservations";
        
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
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">My Reservations</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stations_search");
        yield "\" class=\"btn btn-outline-primary\">
            <i class=\"fas fa-bicycle me-1\"></i> Back to stations
        </a>
    </div>

    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 28
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservationvelos"]) || array_key_exists("reservationvelos", $context) ? $context["reservationvelos"] : (function () { throw new RuntimeError('Variable "reservationvelos" does not exist.', 28, $this->source); })()))) {
            // line 29
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-center py-4\">
                                <div class=\"text-muted\">No reservations found</div>
                            </td>
                        </tr>
                    ";
        } else {
            // line 35
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationvelos"]) || array_key_exists("reservationvelos", $context) ? $context["reservationvelos"] : (function () { throw new RuntimeError('Variable "reservationvelos" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservationvelo"]) {
                // line 36
                yield "                        <tr>
                            <td>";
                // line 37
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reservationvelo"], "dateDebut", [], "any", false, false, false, 37)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservationvelo"], "dateDebut", [], "any", false, false, false, 37), "Y-m-d H:i:s"), "html", null, true)) : (""));
                yield "</td>
                            <td>";
                // line 38
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reservationvelo"], "dateFin", [], "any", false, false, false, 38)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservationvelo"], "dateFin", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true)) : (""));
                yield "</td>
                            <td>
                                <span class=\"badge 
                                    ";
                // line 41
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservationvelo"], "statut", [], "any", false, false, false, 41) == "Confirmed")) {
                    yield "bg-success
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 42
$context["reservationvelo"], "statut", [], "any", false, false, false, 42) == "Pending")) {
                    yield "bg-warning
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 43
$context["reservationvelo"], "statut", [], "any", false, false, false, 43) == "Cancelled")) {
                    yield "bg-danger
                                    ";
                } else {
                    // line 44
                    yield "bg-secondary";
                }
                yield "\">
                                    ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservationvelo"], "statut", [], "any", false, false, false, 45), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td>";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservationvelo"], "price", [], "any", false, false, false, 48), "html", null, true);
                yield " TND</td>
                            <td>
                                <a href=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationvelo_show", ["id_reservation_velo" => CoreExtension::getAttribute($this->env, $this->source, $context["reservationvelo"], "id_reservation_velo", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-sm btn-outline-primary\">
                                    <i class=\"fas fa-eye\"></i> Details
                                </a>
                                <a href=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationvelo_download_pdf", ["id_reservation_velo" => CoreExtension::getAttribute($this->env, $this->source, $context["reservationvelo"], "id_reservation_velo", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\"
                                                 class=\"btn btn-sm btn-outline-secondary\">
                                    <i class=\"fas fa-file-pdf\"></i> PDF
                                </a>

                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservationvelo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "                    ";
        }
        // line 63
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .table-hover tbody tr:hover {
        background-color: rgba(0,0,0,0.02);
    }
    .thead-light {
        background-color: #f8f9fa;
    }
    .badge {
        font-size: 0.75rem;
        padding: 0.35em 0.65em;
        font-weight: 500;
        min-width: 80px;
        display: inline-block;
        text-align: center;
    }
    .card {
        border-radius: 0.5rem;
        border: none;
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
        return "Front/reservationvelo/index.html.twig";
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
        return array (  208 => 63,  205 => 62,  191 => 54,  184 => 50,  179 => 48,  173 => 45,  168 => 44,  163 => 43,  159 => 42,  155 => 41,  149 => 38,  145 => 37,  142 => 36,  137 => 35,  129 => 29,  127 => 28,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Front/userDashboard.html.twig' %}

{% block title %}My Reservations{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">My Reservations</h1>
        <a href=\"{{ path('app_stations_search') }}\" class=\"btn btn-outline-primary\">
            <i class=\"fas fa-bicycle me-1\"></i> Back to stations
        </a>
    </div>

    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% if reservationvelos is empty %}
                        <tr>
                            <td colspan=\"5\" class=\"text-center py-4\">
                                <div class=\"text-muted\">No reservations found</div>
                            </td>
                        </tr>
                    {% else %}
                        {% for reservationvelo in reservationvelos %}
                        <tr>
                            <td>{{ reservationvelo.dateDebut ? reservationvelo.dateDebut|date('Y-m-d H:i:s') : '' }}</td>
                            <td>{{ reservationvelo.dateFin ? reservationvelo.dateFin|date('Y-m-d') : '' }}</td>
                            <td>
                                <span class=\"badge 
                                    {% if reservationvelo.statut == 'Confirmed' %}bg-success
                                    {% elseif reservationvelo.statut == 'Pending' %}bg-warning
                                    {% elseif reservationvelo.statut == 'Cancelled' %}bg-danger
                                    {% else %}bg-secondary{% endif %}\">
                                    {{ reservationvelo.statut }}
                                </span>
                            </td>
                            <td>{{ reservationvelo.price }} TND</td>
                            <td>
                                <a href=\"{{ path('app_reservationvelo_show', {'id_reservation_velo': reservationvelo.id_reservation_velo}) }}\" 
                                   class=\"btn btn-sm btn-outline-primary\">
                                    <i class=\"fas fa-eye\"></i> Details
                                </a>
                                <a href=\"{{ path('app_reservationvelo_download_pdf', {'id_reservation_velo': reservationvelo.id_reservation_velo}) }}\"
                                                 class=\"btn btn-sm btn-outline-secondary\">
                                    <i class=\"fas fa-file-pdf\"></i> PDF
                                </a>

                            </td>
                        </tr>
                        {% endfor %}
                    {% endif %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .table-hover tbody tr:hover {
        background-color: rgba(0,0,0,0.02);
    }
    .thead-light {
        background-color: #f8f9fa;
    }
    .badge {
        font-size: 0.75rem;
        padding: 0.35em 0.65em;
        font-weight: 500;
        min-width: 80px;
        display: inline-block;
        text-align: center;
    }
    .card {
        border-radius: 0.5rem;
        border: none;
    }
</style>
{% endblock %}", "Front/reservationvelo/index.html.twig", "C:\\Users\\jihen\\Desktop\\Wasalni_Web\\Wasalni\\Wasalni\\templates\\Front\\reservationvelo\\index.html.twig");
    }
}
