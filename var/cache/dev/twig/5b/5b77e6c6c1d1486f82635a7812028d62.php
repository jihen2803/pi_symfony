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

/* pdf/reservation_detail.html.twig */
class __TwigTemplate_92b3dc912464971fc6a3659bcff57027 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/reservation_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/reservation_detail.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reservation Details</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap\" rel=\"stylesheet\">
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #4b5563;
            --background: #f8fafc;
        }

        body {
            font-family: 'Inter', sans-serif;
            padding: 2rem;
            color: var(--secondary);
            background-color: var(--background);
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
        }

        .header {
            text-align: center;
            margin-bottom: 2.5rem;
            border-bottom: 2px solid var(--primary);
            padding-bottom: 1.5rem;
        }

        .title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
            letter-spacing: -0.5px;
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .detail-item {
            background: #f1f5f9;
            padding: 1.25rem;
            border-radius: 8px;
            border-left: 4px solid var(--primary);
        }

        .label {
            font-weight: 600;
            color: var(--primary);
            display: block;
            margin-bottom: 0.25rem;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .value {
            font-size: 1.125rem;
            color: var(--secondary);
            font-weight: 500;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            border-radius: 20px;
            font-weight: 600;
            background-color: #e0f2fe;
            color: #075985;
        }

        .footer {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e2e8f0;
            text-align: center;
            font-size: 0.875rem;
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1 class=\"title\">Reservation Confirmation</h1>
            <p class=\"subtitle\">Your booking details are secured</p>
        </div>

        <div class=\"details-grid\">
            <div class=\"detail-item\">
                <span class=\"label\">Start Date</span>
                <span class=\"value\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 105, $this->source); })()), "dateDebut", [], "any", false, false, false, 105), "Y-m-d H:i"), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-item\">
                <span class=\"label\">End Date</span>
                <span class=\"value\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 110, $this->source); })()), "dateFin", [], "any", false, false, false, 110), "Y-m-d H:i"), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-item\">
                <span class=\"label\">Total Price</span>
                <span class=\"value\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 115, $this->source); })()), "price", [], "any", false, false, false, 115), "html", null, true);
        yield " TND</span>
            </div>
            
            <div class=\"detail-item\">
                <span class=\"label\">Bike Type</span>
                <span class=\"value\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 120, $this->source); })()), "velo", [], "any", false, false, false, 120), "veloType", [], "any", false, false, false, 120), "type_name", [], "any", false, false, false, 120), "html", null, true);
        yield "</span>
            </div>
        </div>

        <div class=\"detail-item\" style=\"grid-column: span 2\">
            <span class=\"label\">Reservation Status</span>
            <div class=\"status-badge\">
                ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 127, $this->source); })()), "statut", [], "any", false, false, false, 127), "html", null, true);
        yield "
            </div>
        </div>

        <div class=\"footer\">
            <p>Thank you for choosing our service! • Contact: contact@bikes.com • Tel: +216 12 345 678</p>
        </div>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pdf/reservation_detail.html.twig";
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
        return array (  188 => 127,  178 => 120,  170 => 115,  162 => 110,  154 => 105,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reservation Details</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap\" rel=\"stylesheet\">
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #4b5563;
            --background: #f8fafc;
        }

        body {
            font-family: 'Inter', sans-serif;
            padding: 2rem;
            color: var(--secondary);
            background-color: var(--background);
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
        }

        .header {
            text-align: center;
            margin-bottom: 2.5rem;
            border-bottom: 2px solid var(--primary);
            padding-bottom: 1.5rem;
        }

        .title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
            letter-spacing: -0.5px;
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .detail-item {
            background: #f1f5f9;
            padding: 1.25rem;
            border-radius: 8px;
            border-left: 4px solid var(--primary);
        }

        .label {
            font-weight: 600;
            color: var(--primary);
            display: block;
            margin-bottom: 0.25rem;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .value {
            font-size: 1.125rem;
            color: var(--secondary);
            font-weight: 500;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            border-radius: 20px;
            font-weight: 600;
            background-color: #e0f2fe;
            color: #075985;
        }

        .footer {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e2e8f0;
            text-align: center;
            font-size: 0.875rem;
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1 class=\"title\">Reservation Confirmation</h1>
            <p class=\"subtitle\">Your booking details are secured</p>
        </div>

        <div class=\"details-grid\">
            <div class=\"detail-item\">
                <span class=\"label\">Start Date</span>
                <span class=\"value\">{{ reservation.dateDebut|date('Y-m-d H:i') }}</span>
            </div>
            
            <div class=\"detail-item\">
                <span class=\"label\">End Date</span>
                <span class=\"value\">{{ reservation.dateFin|date('Y-m-d H:i') }}</span>
            </div>
            
            <div class=\"detail-item\">
                <span class=\"label\">Total Price</span>
                <span class=\"value\">{{ reservation.price }} TND</span>
            </div>
            
            <div class=\"detail-item\">
                <span class=\"label\">Bike Type</span>
                <span class=\"value\">{{ reservation.velo.veloType.type_name }}</span>
            </div>
        </div>

        <div class=\"detail-item\" style=\"grid-column: span 2\">
            <span class=\"label\">Reservation Status</span>
            <div class=\"status-badge\">
                {{ reservation.statut }}
            </div>
        </div>

        <div class=\"footer\">
            <p>Thank you for choosing our service! • Contact: contact@bikes.com • Tel: +216 12 345 678</p>
        </div>
    </div>
</body>
</html>", "pdf/reservation_detail.html.twig", "C:\\Users\\jihen\\Desktop\\Wasalni_Web\\Wasalni\\Wasalni\\templates\\pdf\\reservation_detail.html.twig");
    }
}
