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

/* emails/reservation_confirmation.html.twig */
class __TwigTemplate_b6e52b4ed5c96092bd8295fd447dcb49 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reservation_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reservation_confirmation.html.twig"));

        // line 1
        yield "<h2>Hello ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })()), "nom", [], "any", false, false, false, 1), "html", null, true);
        yield "</h2>

<p>Thank you for reserving a bike!</p>

<p><strong>Type:</strong> ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["velo"]) || array_key_exists("velo", $context) ? $context["velo"] : (function () { throw new RuntimeError('Variable "velo" does not exist.', 5, $this->source); })()), "veloType", [], "any", false, false, false, 5), "type_name", [], "any", false, false, false, 5), "html", null, true);
        yield "</p>
<p><strong>Price:</strong> ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 6, $this->source); })()), "price", [], "any", false, false, false, 6), "html", null, true);
        yield " TND</p>
<p><strong>Start:</strong> ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 7, $this->source); })()), "dateDebut", [], "any", false, false, false, 7), "Y-m-d H:i"), "html", null, true);
        yield "</p>
<p><strong>End:</strong> ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 8, $this->source); })()), "dateFin", [], "any", false, false, false, 8), "Y-m-d H:i"), "html", null, true);
        yield "</p>

<p>Have a safe ride!</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/reservation_confirmation.html.twig";
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
        return array (  68 => 8,  64 => 7,  60 => 6,  56 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h2>Hello {{ user.nom }}</h2>

<p>Thank you for reserving a bike!</p>

<p><strong>Type:</strong> {{ velo.veloType.type_name }}</p>
<p><strong>Price:</strong> {{ reservation.price }} TND</p>
<p><strong>Start:</strong> {{ reservation.dateDebut|date('Y-m-d H:i') }}</p>
<p><strong>End:</strong> {{ reservation.dateFin|date('Y-m-d H:i') }}</p>

<p>Have a safe ride!</p>
", "emails/reservation_confirmation.html.twig", "C:\\Users\\jihen\\Desktop\\pi_symfony\\templates\\emails\\reservation_confirmation.html.twig");
    }
}
