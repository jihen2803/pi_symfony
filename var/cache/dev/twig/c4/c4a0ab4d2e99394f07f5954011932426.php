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

/* Admin/admin_cov/dashboard.html.twig */
class __TwigTemplate_cd99305fbec02504af1c6125d1e22455 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/admin_cov/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/admin_cov/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/admin_cov/dashboard.html.twig", 1);
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

        yield "Admin Covoiturage";
        
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
        yield "<main id=\"main\" class=\"main\">
    <section class=\"section dashboard\">
        <div class=\"dashboard-container\">
            <div class=\"header-section\">
                <div class=\"header-content\">
                    <h1>🚗 Admin Covoiturage</h1>
                    <p>Gestion administrative des covoiturages</p>
                </div>
                <div class=\"header-actions\">
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_new");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus\"></i> Nouveau Covoiturage
                    </a>
                </div>
            </div>

            <div class=\"admin-actions\">
                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_covoiturage_index");
        yield "\" class=\"action-card\">
                    <div class=\"action-icon\">
                        <i class=\"fas fa-list\"></i>
                    </div>
                    <h3>Liste des Covoiturages</h3>
                </a>
                
                <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_cov_index");
        yield "\" class=\"action-card\">
                    <div class=\"action-icon\">
                        <i class=\"fas fa-calendar-check\"></i>
                    </div>
                    <h3>Réservations</h3>
                </a>
            </div>
        </div>
    </section>
</main>

<style>
    .admin-actions {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }
    
    .action-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        text-decoration: none;
        color: var(--dark);
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .action-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        border-color: var(--primary);
    }
    
    .action-icon {
        font-size: 2rem;
        color: var(--primary);
        margin-bottom: 1rem;
    }
    
    .action-card h3 {
        margin: 0;
        font-size: 1.25rem;
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
        return "Admin/admin_cov/dashboard.html.twig";
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
        return array (  131 => 29,  121 => 22,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Covoiturage{% endblock %}

{% block body %}
<main id=\"main\" class=\"main\">
    <section class=\"section dashboard\">
        <div class=\"dashboard-container\">
            <div class=\"header-section\">
                <div class=\"header-content\">
                    <h1>🚗 Admin Covoiturage</h1>
                    <p>Gestion administrative des covoiturages</p>
                </div>
                <div class=\"header-actions\">
                    <a href=\"{{ path('app_covoiturage_new') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus\"></i> Nouveau Covoiturage
                    </a>
                </div>
            </div>

            <div class=\"admin-actions\">
                <a href=\"{{ path('app_covoiturage_index') }}\" class=\"action-card\">
                    <div class=\"action-icon\">
                        <i class=\"fas fa-list\"></i>
                    </div>
                    <h3>Liste des Covoiturages</h3>
                </a>
                
                <a href=\"{{ path('app_reservation_cov_index') }}\" class=\"action-card\">
                    <div class=\"action-icon\">
                        <i class=\"fas fa-calendar-check\"></i>
                    </div>
                    <h3>Réservations</h3>
                </a>
            </div>
        </div>
    </section>
</main>

<style>
    .admin-actions {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }
    
    .action-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        text-decoration: none;
        color: var(--dark);
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .action-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        border-color: var(--primary);
    }
    
    .action-icon {
        font-size: 2rem;
        color: var(--primary);
        margin-bottom: 1rem;
    }
    
    .action-card h3 {
        margin: 0;
        font-size: 1.25rem;
    }
</style>
{% endblock %}", "Admin/admin_cov/dashboard.html.twig", "C:\\Users\\jihen\\Desktop\\Wasalni_Web\\Wasalni\\Wasalni\\templates\\Admin\\admin_cov\\dashboard.html.twig");
    }
}
