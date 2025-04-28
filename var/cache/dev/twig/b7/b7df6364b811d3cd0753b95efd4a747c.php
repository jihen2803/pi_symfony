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

/* Admin/stationvelo/_form.html.twig */
class __TwigTemplate_1e39497d15409f5795668b20175575a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/stationvelo/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/stationvelo/_form.html.twig"));

        // line 3
        yield "
";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["class" => "modern-station-form", "novalidate" => "novalidate"]]);
        yield "

<div class=\"form-glass-container\">
    <div class=\"form-header\">
        <h3><i class=\"fas fa-bicycle\"></i> Station Information</h3>
    </div>
    
    <div class=\"form-body\">
        <!-- Station Name -->
        <div class=\"form-row floating-input\">
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name_station", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom de la Station"]);
        yield "
            <div class=\"input-group\">
                <span class=\"input-icon\"><i class=\"fas fa-signature\"></i></span>
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name_station", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name_station", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
            </div>
            <div class=\"invalid-feedback\">
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name_station", [], "any", false, false, false, 20), 'errors');
        yield "
            </div>
            <small class=\"form-hint\">Entrez le nom de la station</small>
        </div>

        <!-- Governorate -->
        <div class=\"form-row floating-input\">
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "gouvernera", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Gouvernorat"]);
        yield "
            <div class=\"input-group\">
                <span class=\"input-icon\"><i class=\"fas fa-map-marked-alt\"></i></span>
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "gouvernera", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "gouvernera", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
            </div>
            <div class=\"invalid-feedback\">
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "gouvernera", [], "any", false, false, false, 33), 'errors');
        yield "
            </div>
            <small class=\"form-hint\">Sélectionnez le gouvernorat</small>
        </div>

        <!-- Municipality -->
        <div class=\"form-row floating-input\">
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "municapilite", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Municipalité"]);
        yield "
            <div class=\"input-group\">
                <span class=\"input-icon\"><i class=\"fas fa-city\"></i></span>
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "municapilite", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "municapilite", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
            </div>
            <div class=\"invalid-feedback\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "municapilite", [], "any", false, false, false, 46), 'errors');
        yield "
            </div>
            <small class=\"form-hint\">Entrez la municipalité</small>
        </div>

        <!-- Address -->
        <div class=\"form-row floating-input\">
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "adresse", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Adresse"]);
        yield "
            <div class=\"input-group\">
                <span class=\"input-icon\"><i class=\"fas fa-map-marker-alt\"></i></span>
                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "adresse", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "adresse", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "errors", [], "any", false, false, false, 56)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
            </div>
            <div class=\"invalid-feedback\">
                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "adresse", [], "any", false, false, false, 59), 'errors');
        yield "
            </div>
            <small class=\"form-hint\">Entrez l'adresse complète</small>
        </div>

        <!-- Admin Selector -->
        <div class=\"form-row floating-input\">
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Administrateur"]);
        yield "
            <div class=\"input-group\">
                <span class=\"input-icon\"><i class=\"fas fa-user-shield\"></i></span>
                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "errors", [], "any", false, false, false, 69)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
            </div>
            <div class=\"invalid-feedback\">
                ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), 'errors');
        yield "
            </div>
            <small class=\"form-hint\">Choisissez l'administrateur de la station</small>
        </div>
    </div>

    <div class=\"form-footer\">
        <button type=\"submit\" class=\"btn-submit\">
            <i class=\"fas fa-save\"></i> ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 80, $this->source); })()), "Enregistrer la Station")) : ("Enregistrer la Station")), "html", null, true);
        yield "
        </button>
    </div>
</div>

";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
        yield "


<style>
    .modern-station-form {
        --primary: #3a86ff;
        --secondary: #8338ec;
        --accent: #ff006e;
        --light: #f8f9ff;
        --dark: #1a1a2e;
        --success: #06d6a0;
        --warning: #ffbe0b;
        
        max-width: 700px;
        margin: 0 auto;
    }
    
    .form-glass-container {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(31, 38, 135, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        overflow: hidden;
    }
    
    .form-header {
        padding: 1.5rem;
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        color: white;
    }
    
    .form-header h3 {
        margin: 0;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .form-body {
        padding: 2rem;
    }
    
    .form-row {
        margin-bottom: 1.5rem;
        position: relative;
    }
    
    .floating-input label {
        position: absolute;
        top: 1rem;
        left: 3rem;
        color: #64748b;
        pointer-events: none;
        transition: all 0.3s ease;
    }
    
    .floating-input .input-group {
        position: relative;
    }
    
    .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--primary);
    }
    
    .form-control {
        width: 100%;
        padding: 1rem 1rem 1rem 3rem;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background-color: #f8fafc;
    }
    
    .select-input {
        appearance: none;
        background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 1em;
    }
    
    .form-control:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(58, 134, 255, 0.2);
        background-color: white;
    }
    
    .form-control:focus + label,
    .form-control:not(:placeholder-shown) + label {
        top: -0.5rem;
        left: 3rem;
        font-size: 0.75rem;
        background: white;
        padding: 0 0.5rem;
        color: var(--primary);
    }
    
    /* Image Preview */
    .image-preview {
        width: 100%;
        height: 200px;
        border: 2px dashed #ddd;
        border-radius: 8px;
        margin-top: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        overflow: hidden;
        position: relative;
        background-color: #f8fafc;
    }
    
    .preview-image {
        max-width: 100%;
        max-height: 100%;
        display: none;
    }
    
    .default-text {
        color: #64748b;
        font-size: 0.9rem;
    }
    
    .form-hint {
        display: block;
        margin-top: 0.5rem;
        color: #64748b;
        font-size: 0.8rem;
    }
    
    /* Form Footer */
    .form-footer {
        padding: 1.5rem;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        text-align: right;
    }
    
    .btn-submit {
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        color: white;
        border: none;
        border-radius: 8px;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(58, 134, 255, 0.2);
    }
    
    @media (max-width: 768px) {
        .form-body {
            padding: 1.5rem;
        }
        
        .form-control {
            padding-left: 2.5rem;
        }
        
        .input-icon {
            left: 0.75rem;
        }
        
        .image-preview {
            height: 150px;
        }
    }
</style>

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
        return "Admin/stationvelo/_form.html.twig";
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
        return array (  183 => 85,  175 => 80,  164 => 72,  158 => 69,  152 => 66,  142 => 59,  136 => 56,  130 => 53,  120 => 46,  114 => 43,  108 => 40,  98 => 33,  92 => 30,  86 => 27,  76 => 20,  70 => 17,  64 => 14,  51 => 4,  48 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stationvelo/_form.html.twig #}
{# templates/Admin/stationvelo/_form.html.twig #}

{{ form_start(form, {'attr': {'class': 'modern-station-form', 'novalidate': 'novalidate'}}) }}

<div class=\"form-glass-container\">
    <div class=\"form-header\">
        <h3><i class=\"fas fa-bicycle\"></i> Station Information</h3>
    </div>
    
    <div class=\"form-body\">
        <!-- Station Name -->
        <div class=\"form-row floating-input\">
            {{ form_label(form.name_station, \"Nom de la Station\", {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"input-group\">
                <span class=\"input-icon\"><i class=\"fas fa-signature\"></i></span>
                {{ form_widget(form.name_station, {'attr': {'class': 'form-control' ~ (form.name_station.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
            </div>
            <div class=\"invalid-feedback\">
                {{ form_errors(form.name_station) }}
            </div>
            <small class=\"form-hint\">Entrez le nom de la station</small>
        </div>

        <!-- Governorate -->
        <div class=\"form-row floating-input\">
            {{ form_label(form.gouvernera, \"Gouvernorat\", {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"input-group\">
                <span class=\"input-icon\"><i class=\"fas fa-map-marked-alt\"></i></span>
                {{ form_widget(form.gouvernera, {'attr': {'class': 'form-control' ~ (form.gouvernera.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
            </div>
            <div class=\"invalid-feedback\">
                {{ form_errors(form.gouvernera) }}
            </div>
            <small class=\"form-hint\">Sélectionnez le gouvernorat</small>
        </div>

        <!-- Municipality -->
        <div class=\"form-row floating-input\">
            {{ form_label(form.municapilite, \"Municipalité\", {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"input-group\">
                <span class=\"input-icon\"><i class=\"fas fa-city\"></i></span>
                {{ form_widget(form.municapilite, {'attr': {'class': 'form-control' ~ (form.municapilite.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
            </div>
            <div class=\"invalid-feedback\">
                {{ form_errors(form.municapilite) }}
            </div>
            <small class=\"form-hint\">Entrez la municipalité</small>
        </div>

        <!-- Address -->
        <div class=\"form-row floating-input\">
            {{ form_label(form.adresse, \"Adresse\", {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"input-group\">
                <span class=\"input-icon\"><i class=\"fas fa-map-marker-alt\"></i></span>
                {{ form_widget(form.adresse, {'attr': {'class': 'form-control' ~ (form.adresse.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
            </div>
            <div class=\"invalid-feedback\">
                {{ form_errors(form.adresse) }}
            </div>
            <small class=\"form-hint\">Entrez l'adresse complète</small>
        </div>

        <!-- Admin Selector -->
        <div class=\"form-row floating-input\">
            {{ form_label(form.user, \"Administrateur\", {'label_attr': {'class': 'form-label'}}) }}
            <div class=\"input-group\">
                <span class=\"input-icon\"><i class=\"fas fa-user-shield\"></i></span>
                {{ form_widget(form.user, {'attr': {'class': 'form-control' ~ (form.user.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
            </div>
            <div class=\"invalid-feedback\">
                {{ form_errors(form.user) }}
            </div>
            <small class=\"form-hint\">Choisissez l'administrateur de la station</small>
        </div>
    </div>

    <div class=\"form-footer\">
        <button type=\"submit\" class=\"btn-submit\">
            <i class=\"fas fa-save\"></i> {{ button_label|default('Enregistrer la Station') }}
        </button>
    </div>
</div>

{{ form_end(form) }}


<style>
    .modern-station-form {
        --primary: #3a86ff;
        --secondary: #8338ec;
        --accent: #ff006e;
        --light: #f8f9ff;
        --dark: #1a1a2e;
        --success: #06d6a0;
        --warning: #ffbe0b;
        
        max-width: 700px;
        margin: 0 auto;
    }
    
    .form-glass-container {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(31, 38, 135, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        overflow: hidden;
    }
    
    .form-header {
        padding: 1.5rem;
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        color: white;
    }
    
    .form-header h3 {
        margin: 0;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .form-body {
        padding: 2rem;
    }
    
    .form-row {
        margin-bottom: 1.5rem;
        position: relative;
    }
    
    .floating-input label {
        position: absolute;
        top: 1rem;
        left: 3rem;
        color: #64748b;
        pointer-events: none;
        transition: all 0.3s ease;
    }
    
    .floating-input .input-group {
        position: relative;
    }
    
    .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--primary);
    }
    
    .form-control {
        width: 100%;
        padding: 1rem 1rem 1rem 3rem;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background-color: #f8fafc;
    }
    
    .select-input {
        appearance: none;
        background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 1em;
    }
    
    .form-control:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(58, 134, 255, 0.2);
        background-color: white;
    }
    
    .form-control:focus + label,
    .form-control:not(:placeholder-shown) + label {
        top: -0.5rem;
        left: 3rem;
        font-size: 0.75rem;
        background: white;
        padding: 0 0.5rem;
        color: var(--primary);
    }
    
    /* Image Preview */
    .image-preview {
        width: 100%;
        height: 200px;
        border: 2px dashed #ddd;
        border-radius: 8px;
        margin-top: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        overflow: hidden;
        position: relative;
        background-color: #f8fafc;
    }
    
    .preview-image {
        max-width: 100%;
        max-height: 100%;
        display: none;
    }
    
    .default-text {
        color: #64748b;
        font-size: 0.9rem;
    }
    
    .form-hint {
        display: block;
        margin-top: 0.5rem;
        color: #64748b;
        font-size: 0.8rem;
    }
    
    /* Form Footer */
    .form-footer {
        padding: 1.5rem;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        text-align: right;
    }
    
    .btn-submit {
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        color: white;
        border: none;
        border-radius: 8px;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(58, 134, 255, 0.2);
    }
    
    @media (max-width: 768px) {
        .form-body {
            padding: 1.5rem;
        }
        
        .form-control {
            padding-left: 2.5rem;
        }
        
        .input-icon {
            left: 0.75rem;
        }
        
        .image-preview {
            height: 150px;
        }
    }
</style>

", "Admin/stationvelo/_form.html.twig", "C:\\Users\\jihen\\Desktop\\pi_symfony\\templates\\Admin\\stationvelo\\_form.html.twig");
    }
}
