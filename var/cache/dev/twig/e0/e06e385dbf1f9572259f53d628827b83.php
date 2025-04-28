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
<div class=\"weather-container\">
    ";
        // line 5
        if ((isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 5, $this->source); })())) {
            // line 6
            yield "        <div class=\"weather-card\">
            <div class=\"weather-header\">
                <h3><i class=\"fas fa-cloud-sun\"></i> Weather in ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["governorat"]) || array_key_exists("governorat", $context) ? $context["governorat"] : (function () { throw new RuntimeError('Variable "governorat" does not exist.', 8, $this->source); })()), "html", null, true);
            yield "</h3>
                <div class=\"weather-main\">
                    <div class=\"temperature-circle\">
                        <span class=\"temp-value\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 11, $this->source); })()), "temperature", [], "any", false, false, false, 11), "html", null, true);
            yield "°</span>
                        <span class=\"temp-unit\">C</span>
                    </div>
                    <div class=\"weather-icon\">
                        ";
            // line 15
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 15, $this->source); })()), "is_day", [], "any", false, false, false, 15)) ? ("<i class=\"fas fa-sun\"></i>") : ("<i class=\"fas fa-moon\"></i>"));
            yield "
                    </div>
                </div>
            </div>
            
            <div class=\"weather-details\">
                <div class=\"detail-item\">
                    <i class=\"fas fa-tint\"></i>
                    <span>Precipitation: ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 23, $this->source); })()), "precipitation", [], "any", false, false, false, 23), "html", null, true);
            yield " mm</span>
                </div>
                <div class=\"detail-item\">
                    <i class=\"fas fa-cloud-rain\"></i>
                    <span>Rain: ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 27, $this->source); })()), "rain", [], "any", false, false, false, 27), "html", null, true);
            yield " mm</span>
                </div>
                <div class=\"detail-item\">
                    ";
            // line 30
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 30, $this->source); })()), "is_day", [], "any", false, false, false, 30)) ? ("<i class=\"fas fa-sun\"></i> Daylight") : ("<i class=\"fas fa-moon\"></i> Night"));
            yield "
                </div>
            </div>
            
            <div class=\"recommendations-section\">
                <h4><i class=\"fas fa-bicycle\"></i> Bike Recommendations</h4>
                ";
            // line 36
            if ((array_key_exists("recommendations", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 36, $this->source); })())))) {
                // line 37
                yield "                    <ul class=\"recommendation-list\">
                        ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 38, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
                    // line 39
                    yield "                            <li><i class=\"fas fa-check-circle\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rec"], "html", null, true);
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['rec'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                yield "                    </ul>
                ";
            } else {
                // line 43
                yield "                    <div class=\"no-recommendation\">
                        <i class=\"fas fa-taxi\"></i>
                        <span>No recommended bike today. Consider alternative transport.</span>
                    </div>
                ";
            }
            // line 48
            yield "            </div>
            
            ";
            // line 50
            if ((array_key_exists("tip", $context) && (isset($context["tip"]) || array_key_exists("tip", $context) ? $context["tip"] : (function () { throw new RuntimeError('Variable "tip" does not exist.', 50, $this->source); })()))) {
                // line 51
                yield "                <div class=\"weather-tip\">
                    <i class=\"fas fa-lightbulb\"></i>
                    <p>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tip"]) || array_key_exists("tip", $context) ? $context["tip"] : (function () { throw new RuntimeError('Variable "tip" does not exist.', 53, $this->source); })()), "html", null, true);
                yield "</p>
                </div>
            ";
            }
            // line 56
            yield "        </div>
    ";
        } else {
            // line 58
            yield "        <div class=\"weather-error\">
            <i class=\"fas fa-exclamation-triangle\"></i>
            <p>Unable to get weather data for ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["governorat"]) || array_key_exists("governorat", $context) ? $context["governorat"] : (function () { throw new RuntimeError('Variable "governorat" does not exist.', 60, $this->source); })()), "html", null, true);
            yield "</p>
        </div>
    ";
        }
        // line 63
        yield "</div>

<style>
    .weather-container {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }
    
    .weather-card {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .weather-header h3 {
        color: #2c3e50;
        margin-bottom: 20px;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .weather-main {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    
    .temperature-circle {
        background: #fff;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .temp-value {
        font-size: 2.2rem;
        font-weight: bold;
        color: #3498db;
    }
    
    .temp-unit {
        font-size: 1rem;
        color: #7f8c8d;
    }
    
    .weather-icon {
        font-size: 3rem;
        color: #f39c12;
    }
    
    .weather-details {
        background: rgba(255,255,255,0.7);
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 20px;
    }
    
    .detail-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 8px 0;
        color: #34495e;
    }
    
    .detail-item i {
        color: #3498db;
        width: 20px;
        text-align: center;
    }
    
    .recommendations-section {
        background: #fff;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
    }
    
    .recommendations-section h4 {
        color: #2c3e50;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .recommendation-list {
        list-style: none;
        padding: 0;
    }
    
    .recommendation-list li {
        padding: 8px 0;
        display: flex;
        align-items: center;
        gap: 10px;
        border-bottom: 1px solid #eee;
    }
    
    .recommendation-list li:last-child {
        border-bottom: none;
    }
    
    .recommendation-list li i {
        color: #2ecc71;
    }
    
    .no-recommendation {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #e74c3c;
    }
    
    .weather-tip {
        background: #e3f2fd;
        border-left: 4px solid #3498db;
        padding: 12px;
        border-radius: 0 8px 8px 0;
        display: flex;
        gap: 10px;
    }
    
    .weather-tip i {
        color: #3498db;
    }
    
    .weather-tip p {
        margin: 0;
        color: #2c3e50;
    }
    
    .weather-error {
        background: #fdecea;
        color: #d32f2f;
        padding: 15px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        gap: 10px;
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
        return array (  191 => 63,  185 => 60,  181 => 58,  177 => 56,  171 => 53,  167 => 51,  165 => 50,  161 => 48,  154 => 43,  150 => 41,  141 => 39,  137 => 38,  134 => 37,  132 => 36,  123 => 30,  117 => 27,  110 => 23,  99 => 15,  92 => 11,  86 => 8,  82 => 6,  80 => 5,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Front/userDashboard.html.twig' %}
{% block body %}

<div class=\"weather-container\">
    {% if weather %}
        <div class=\"weather-card\">
            <div class=\"weather-header\">
                <h3><i class=\"fas fa-cloud-sun\"></i> Weather in {{ governorat }}</h3>
                <div class=\"weather-main\">
                    <div class=\"temperature-circle\">
                        <span class=\"temp-value\">{{ weather.temperature }}°</span>
                        <span class=\"temp-unit\">C</span>
                    </div>
                    <div class=\"weather-icon\">
                        {{ weather.is_day ? '<i class=\"fas fa-sun\"></i>' : '<i class=\"fas fa-moon\"></i>' }}
                    </div>
                </div>
            </div>
            
            <div class=\"weather-details\">
                <div class=\"detail-item\">
                    <i class=\"fas fa-tint\"></i>
                    <span>Precipitation: {{ weather.precipitation }} mm</span>
                </div>
                <div class=\"detail-item\">
                    <i class=\"fas fa-cloud-rain\"></i>
                    <span>Rain: {{ weather.rain }} mm</span>
                </div>
                <div class=\"detail-item\">
                    {{ weather.is_day ? '<i class=\"fas fa-sun\"></i> Daylight' : '<i class=\"fas fa-moon\"></i> Night' }}
                </div>
            </div>
            
            <div class=\"recommendations-section\">
                <h4><i class=\"fas fa-bicycle\"></i> Bike Recommendations</h4>
                {% if recommendations is defined and recommendations is not empty %}
                    <ul class=\"recommendation-list\">
                        {% for rec in recommendations %}
                            <li><i class=\"fas fa-check-circle\"></i> {{ rec }}</li>
                        {% endfor %}
                    </ul>
                {% else %}
                    <div class=\"no-recommendation\">
                        <i class=\"fas fa-taxi\"></i>
                        <span>No recommended bike today. Consider alternative transport.</span>
                    </div>
                {% endif %}
            </div>
            
            {% if tip is defined and tip %}
                <div class=\"weather-tip\">
                    <i class=\"fas fa-lightbulb\"></i>
                    <p>{{ tip }}</p>
                </div>
            {% endif %}
        </div>
    {% else %}
        <div class=\"weather-error\">
            <i class=\"fas fa-exclamation-triangle\"></i>
            <p>Unable to get weather data for {{ governorat }}</p>
        </div>
    {% endif %}
</div>

<style>
    .weather-container {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }
    
    .weather-card {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .weather-header h3 {
        color: #2c3e50;
        margin-bottom: 20px;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .weather-main {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    
    .temperature-circle {
        background: #fff;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .temp-value {
        font-size: 2.2rem;
        font-weight: bold;
        color: #3498db;
    }
    
    .temp-unit {
        font-size: 1rem;
        color: #7f8c8d;
    }
    
    .weather-icon {
        font-size: 3rem;
        color: #f39c12;
    }
    
    .weather-details {
        background: rgba(255,255,255,0.7);
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 20px;
    }
    
    .detail-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 8px 0;
        color: #34495e;
    }
    
    .detail-item i {
        color: #3498db;
        width: 20px;
        text-align: center;
    }
    
    .recommendations-section {
        background: #fff;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
    }
    
    .recommendations-section h4 {
        color: #2c3e50;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .recommendation-list {
        list-style: none;
        padding: 0;
    }
    
    .recommendation-list li {
        padding: 8px 0;
        display: flex;
        align-items: center;
        gap: 10px;
        border-bottom: 1px solid #eee;
    }
    
    .recommendation-list li:last-child {
        border-bottom: none;
    }
    
    .recommendation-list li i {
        color: #2ecc71;
    }
    
    .no-recommendation {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #e74c3c;
    }
    
    .weather-tip {
        background: #e3f2fd;
        border-left: 4px solid #3498db;
        padding: 12px;
        border-radius: 0 8px 8px 0;
        display: flex;
        gap: 10px;
    }
    
    .weather-tip i {
        color: #3498db;
    }
    
    .weather-tip p {
        margin: 0;
        color: #2c3e50;
    }
    
    .weather-error {
        background: #fdecea;
        color: #d32f2f;
        padding: 15px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
</style>

{% endblock %}", "Front/acceuil/index.html.twig", "C:\\Users\\jihen\\Desktop\\pi_symfony\\templates\\Front\\acceuil\\index.html.twig");
    }
}
