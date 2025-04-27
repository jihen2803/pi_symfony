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

/* Front/acceuil/index.html.twig */
class __TwigTemplate_d77749dde7630f2713c3afbbdc053cba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/acceuil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/acceuil/index.html.twig"));

        $this->parent = $this->loadTemplate("Front/userDashboard.html.twig", "Front/acceuil/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "
";
        // line 4
        if ((isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 4, $this->source); })())) {
            // line 5
            yield "    <h3>🌤️ Weather in ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["governorat"]) || array_key_exists("governorat", $context) ? $context["governorat"] : (function () { throw new RuntimeError('Variable "governorat" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "</h3>
    <p>🌡️ Temperature: ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 6, $this->source); })()), "temperature", [], "any", false, false, false, 6), "html", null, true);
            yield "°C</p>
    <p>🌧️ Precipitation: ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 7, $this->source); })()), "precipitation", [], "any", false, false, false, 7), "html", null, true);
            yield " mm</p>
    <p>☔ Rain: ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 8, $this->source); })()), "rain", [], "any", false, false, false, 8), "html", null, true);
            yield " mm</p>
    <p>";
            // line 9
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 9, $this->source); })()), "is_day", [], "any", false, false, false, 9)) ? ("☀️ Daylight") : ("🌙 Night"));
            yield "</p>

    <h4>🚲 Recommandations de vélos</h4>
    ";
            // line 12
            if ((array_key_exists("recommendations", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 12, $this->source); })())))) {
                // line 13
                yield "        <ul>
            ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 14, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
                    // line 15
                    yield "                <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rec"], "html", null, true);
                    yield "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['rec'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                yield "        </ul>
    ";
            } else {
                // line 19
                yield "        <p>❌ Pas de vélo recommandé aujourd'hui. 🚕</p>
    ";
            }
            // line 21
            yield "
    ";
            // line 22
            if ((array_key_exists("tip", $context) && (isset($context["tip"]) || array_key_exists("tip", $context) ? $context["tip"] : (function () { throw new RuntimeError('Variable "tip" does not exist.', 22, $this->source); })()))) {
                // line 23
                yield "        <p><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tip"]) || array_key_exists("tip", $context) ? $context["tip"] : (function () { throw new RuntimeError('Variable "tip" does not exist.', 23, $this->source); })()), "html", null, true);
                yield "</strong></p>
    ";
            }
        } else {
            // line 26
            yield "    <p>⚠️ Impossible de récupérer la météo pour ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["governorat"]) || array_key_exists("governorat", $context) ? $context["governorat"] : (function () { throw new RuntimeError('Variable "governorat" does not exist.', 26, $this->source); })()), "html", null, true);
            yield "</p>
";
        }
        // line 28
        yield "
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
        return "Front/acceuil/index.html.twig";
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
        return array (  148 => 28,  142 => 26,  135 => 23,  133 => 22,  130 => 21,  126 => 19,  122 => 17,  113 => 15,  109 => 14,  106 => 13,  104 => 12,  98 => 9,  94 => 8,  90 => 7,  86 => 6,  81 => 5,  79 => 4,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Front/userDashboard.html.twig' %}
{% block body %}

{% if weather %}
    <h3>🌤️ Weather in {{ governorat }}</h3>
    <p>🌡️ Temperature: {{ weather.temperature }}°C</p>
    <p>🌧️ Precipitation: {{ weather.precipitation }} mm</p>
    <p>☔ Rain: {{ weather.rain }} mm</p>
    <p>{{ weather.is_day ? '☀️ Daylight' : '🌙 Night' }}</p>

    <h4>🚲 Recommandations de vélos</h4>
    {% if recommendations is defined and recommendations is not empty %}
        <ul>
            {% for rec in recommendations %}
                <li>{{ rec }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <p>❌ Pas de vélo recommandé aujourd'hui. 🚕</p>
    {% endif %}

    {% if tip is defined and tip %}
        <p><strong>{{ tip }}</strong></p>
    {% endif %}
{% else %}
    <p>⚠️ Impossible de récupérer la météo pour {{ governorat }}</p>
{% endif %}

{% endblock %}
", "Front/acceuil/index.html.twig", "C:\\Users\\jihen\\Desktop\\Wasalni_Web\\Wasalni\\Wasalni\\templates\\Front\\acceuil\\index.html.twig");
    }
}
