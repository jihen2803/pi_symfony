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

/* Front/reservationvelo/show.html.twig */
class __TwigTemplate_3f706c6ea7380d2b8c112fb1da97c805 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/reservationvelo/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/reservationvelo/show.html.twig"));

        $this->parent = $this->loadTemplate("Front/userDashboard.html.twig", "Front/reservationvelo/show.html.twig", 1);
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

        yield "Reservation Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"display-5 fw-bold text-primary\">Reservation Details</h1>
                <div>
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationvelo_index");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Back to list
                    </a>
                    
                </div>
            </div>

            <div class=\"bg-white rounded-3 shadow-sm p-4 mb-4\">
                <div class=\"table-responsive\">
                    <table class=\"table table-borderless mb-0\">
                        <tbody>
                            <tr class=\"border-bottom\">
                                <th class=\"py-3 text-muted\" style=\"width: 30%\">Start Date</th>
                                <td class=\"py-3\">";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationvelo"]) || array_key_exists("reservationvelo", $context) ? $context["reservationvelo"] : (function () { throw new RuntimeError('Variable "reservationvelo" does not exist.', 26, $this->source); })()), "dateDebut", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationvelo"]) || array_key_exists("reservationvelo", $context) ? $context["reservationvelo"] : (function () { throw new RuntimeError('Variable "reservationvelo" does not exist.', 26, $this->source); })()), "dateDebut", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                            </tr>
                            <tr class=\"border-bottom\">
                                <th class=\"py-3 text-muted\">End Date</th>
                                <td class=\"py-3\">";
        // line 30
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationvelo"]) || array_key_exists("reservationvelo", $context) ? $context["reservationvelo"] : (function () { throw new RuntimeError('Variable "reservationvelo" does not exist.', 30, $this->source); })()), "dateFin", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationvelo"]) || array_key_exists("reservationvelo", $context) ? $context["reservationvelo"] : (function () { throw new RuntimeError('Variable "reservationvelo" does not exist.', 30, $this->source); })()), "dateFin", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
                            </tr>
                            <tr class=\"border-bottom\">
                                <th class=\"py-3 text-muted\">Status</th>
                                <td class=\"py-3\">
                                    <span class=\"badge 
                                        ";
        // line 36
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationvelo"]) || array_key_exists("reservationvelo", $context) ? $context["reservationvelo"] : (function () { throw new RuntimeError('Variable "reservationvelo" does not exist.', 36, $this->source); })()), "statut", [], "any", false, false, false, 36) == "Confirmed")) {
            yield "bg-success
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["reservationvelo"]) || array_key_exists("reservationvelo", $context) ? $context["reservationvelo"] : (function () { throw new RuntimeError('Variable "reservationvelo" does not exist.', 37, $this->source); })()), "statut", [], "any", false, false, false, 37) == "Pending")) {
            yield "bg-warning
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["reservationvelo"]) || array_key_exists("reservationvelo", $context) ? $context["reservationvelo"] : (function () { throw new RuntimeError('Variable "reservationvelo" does not exist.', 38, $this->source); })()), "statut", [], "any", false, false, false, 38) == "Cancelled")) {
            yield "bg-danger
                                        ";
        } else {
            // line 39
            yield "bg-secondary";
        }
        yield "\">
                                        ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationvelo"]) || array_key_exists("reservationvelo", $context) ? $context["reservationvelo"] : (function () { throw new RuntimeError('Variable "reservationvelo" does not exist.', 40, $this->source); })()), "statut", [], "any", false, false, false, 40), "html", null, true);
        yield "
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class=\"py-3 text-muted\">Price</th>
                                <td class=\"py-3 fw-bold text-primary\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationvelo"]) || array_key_exists("reservationvelo", $context) ? $context["reservationvelo"] : (function () { throw new RuntimeError('Variable "reservationvelo" does not exist.', 46, $this->source); })()), "price", [], "any", false, false, false, 46), "html", null, true);
        yield " TND</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"text-end\">
                ";
        // line 54
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Front/reservationvelo/_delete_form.html.twig");
        yield "
            </div>
        </div>
    </div>
</div>

<style>
    .table-borderless td, .table-borderless th {
        padding: 12px 0;
    }
    .badge {
        font-size: 0.8rem;
        padding: 0.35em 0.65em;
        font-weight: 500;
    }
    .shadow-sm {
        box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075) !important;
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
        return "Front/reservationvelo/show.html.twig";
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
        return array (  178 => 54,  167 => 46,  158 => 40,  153 => 39,  148 => 38,  144 => 37,  140 => 36,  131 => 30,  124 => 26,  108 => 13,  100 => 7,  87 => 6,  64 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Front/userDashboard.html.twig' %}


{% block title %}Reservation Details{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"display-5 fw-bold text-primary\">Reservation Details</h1>
                <div>
                    <a href=\"{{ path('app_reservationvelo_index') }}\" class=\"btn btn-outline-secondary me-2\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Back to list
                    </a>
                    
                </div>
            </div>

            <div class=\"bg-white rounded-3 shadow-sm p-4 mb-4\">
                <div class=\"table-responsive\">
                    <table class=\"table table-borderless mb-0\">
                        <tbody>
                            <tr class=\"border-bottom\">
                                <th class=\"py-3 text-muted\" style=\"width: 30%\">Start Date</th>
                                <td class=\"py-3\">{{ reservationvelo.dateDebut ? reservationvelo.dateDebut|date('Y-m-d H:i:s') : '' }}</td>
                            </tr>
                            <tr class=\"border-bottom\">
                                <th class=\"py-3 text-muted\">End Date</th>
                                <td class=\"py-3\">{{ reservationvelo.dateFin ? reservationvelo.dateFin|date('Y-m-d') : '' }}</td>
                            </tr>
                            <tr class=\"border-bottom\">
                                <th class=\"py-3 text-muted\">Status</th>
                                <td class=\"py-3\">
                                    <span class=\"badge 
                                        {% if reservationvelo.statut == 'Confirmed' %}bg-success
                                        {% elseif reservationvelo.statut == 'Pending' %}bg-warning
                                        {% elseif reservationvelo.statut == 'Cancelled' %}bg-danger
                                        {% else %}bg-secondary{% endif %}\">
                                        {{ reservationvelo.statut }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class=\"py-3 text-muted\">Price</th>
                                <td class=\"py-3 fw-bold text-primary\">{{ reservationvelo.price }} TND</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"text-end\">
                {{ include('Front/reservationvelo/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
</div>

<style>
    .table-borderless td, .table-borderless th {
        padding: 12px 0;
    }
    .badge {
        font-size: 0.8rem;
        padding: 0.35em 0.65em;
        font-weight: 500;
    }
    .shadow-sm {
        box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075) !important;
    }
</style>
{% endblock %}", "Front/reservationvelo/show.html.twig", "C:\\Users\\jihen\\Desktop\\Wasalni_Web\\Wasalni\\Wasalni\\templates\\Front\\reservationvelo\\show.html.twig");
    }
}
