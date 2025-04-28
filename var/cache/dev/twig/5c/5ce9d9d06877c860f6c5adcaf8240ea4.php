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

/* Admin/velo/_form.html.twig */
class __TwigTemplate_6598cfa579fe11df65819a3caf2241d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/velo/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/velo/_form.html.twig"));

        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "modern-velo-form", "novalidate" => "novalidate"]]);
        yield "
<div class=\"form-container\">
    <div class=\"form-header\">
        <h3><i class=\"fas fa-bicycle\"></i> Bike Details</h3>
    </div>
    
    <div class=\"form-body\">
        <!-- Availability Toggle -->
        <div class=\"form-row switch-row\">
            <div class=\"switch-container\">
                ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "dispo", [], "any", false, false, false, 12), 'label');
        yield "
                <label class=\"switch\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "dispo", [], "any", false, false, false, 14), 'widget');
        yield "
                    <span class=\"slider round\"></span>
                </label>
            </div>
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "dispo", [], "any", false, false, false, 18), 'errors');
        yield "
            <small class=\"form-hint\">Toggle bike availability status</small>
        </div>
        
        <!-- Bike Type Dropdown -->
        <div class=\"form-row floating-input\">
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "veloType", [], "any", false, false, false, 24), 'label');
        yield "
            <div class=\"input-group\">
                <span class=\"input-icon\"><i class=\"fas fa-tag\"></i></span>
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "veloType", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control select-input", "placeholder" => " "]]);
        // line 30
        yield "
            </div>
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "veloType", [], "any", false, false, false, 32), 'errors');
        yield "
            <small class=\"form-hint\">Select the bike category</small>
        </div>
    </div>
    
    <div class=\"form-footer\">
        <button type=\"submit\" class=\"btn-submit\">
            <i class=\"fas fa-save\"></i> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 39, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "
        </button>
    </div>
</div>
";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        yield "

<style>
    .modern-velo-form {
        --primary: #3a86ff;
        --secondary: #8338ec;
        --accent: #ff006e;
        --light: #f8f9ff;
        --dark: #1a1a2e;
        --success: #06d6a0;
        --warning: #ffbe0b;
        
        max-width: 600px;
        margin: 0 auto;
    }
    
    .form-container {
        background: white;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(31, 38, 135, 0.1);
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
    }
    
    /* Toggle Switch Styling */
    .switch-row {
        display: flex;
        flex-direction: column;
    }
    
    .switch-container {
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }
    
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }
    
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
    }
    
    .slider:before {
        position: absolute;
        content: \"\";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: .4s;
    }
    
    input:checked + .slider {
        background-color: var(--success);
    }
    
    input:focus + .slider {
        box-shadow: 0 0 1px var(--success);
    }
    
    input:checked + .slider:before {
        transform: translateX(26px);
    }
    
    .slider.round {
        border-radius: 34px;
    }
    
    .slider.round:before {
        border-radius: 50%;
    }
    
    /* Dropdown Styling */
    .floating-input {
        position: relative;
    }
    
    .floating-input label {
        position: absolute;
        top: -0.5rem;
        left: 3rem;
        font-size: 0.75rem;
        background: white;
        padding: 0 0.5rem;
        color: var(--primary);
        z-index: 1;
    }
    
    .input-group {
        position: relative;
    }
    
    .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--primary);
        z-index: 1;
    }
    
    .select-input {
        width: 100%;
        padding: 1rem 1rem 1rem 3rem;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        font-size: 1rem;
        appearance: none;
        background-color: #f8fafc;
        background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 1em;
    }
    
    .select-input:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(58, 134, 255, 0.2);
        background-color: white;
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
    
    .form-hint {
        display: block;
        margin-top: 0.5rem;
        color: #64748b;
        font-size: 0.8rem;
    }
    
    @media (max-width: 768px) {
        .form-body {
            padding: 1.5rem;
        }
    }
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/velo/_form.html.twig";
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
        return array (  111 => 43,  104 => 39,  94 => 32,  90 => 30,  88 => 27,  82 => 24,  73 => 18,  66 => 14,  61 => 12,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/velo/_form.html.twig #}
{{ form_start(form, {'attr': {'class': 'modern-velo-form', 'novalidate': 'novalidate'}}) }}
<div class=\"form-container\">
    <div class=\"form-header\">
        <h3><i class=\"fas fa-bicycle\"></i> Bike Details</h3>
    </div>
    
    <div class=\"form-body\">
        <!-- Availability Toggle -->
        <div class=\"form-row switch-row\">
            <div class=\"switch-container\">
                {{ form_label(form.dispo) }}
                <label class=\"switch\">
                    {{ form_widget(form.dispo) }}
                    <span class=\"slider round\"></span>
                </label>
            </div>
            {{ form_errors(form.dispo) }}
            <small class=\"form-hint\">Toggle bike availability status</small>
        </div>
        
        <!-- Bike Type Dropdown -->
        <div class=\"form-row floating-input\">
            {{ form_label(form.veloType) }}
            <div class=\"input-group\">
                <span class=\"input-icon\"><i class=\"fas fa-tag\"></i></span>
                {{ form_widget(form.veloType, {'attr': {
                    'class': 'form-control select-input',
                    'placeholder': ' '
                }}) }}
            </div>
            {{ form_errors(form.veloType) }}
            <small class=\"form-hint\">Select the bike category</small>
        </div>
    </div>
    
    <div class=\"form-footer\">
        <button type=\"submit\" class=\"btn-submit\">
            <i class=\"fas fa-save\"></i> {{ button_label|default('Save') }}
        </button>
    </div>
</div>
{{ form_end(form) }}

<style>
    .modern-velo-form {
        --primary: #3a86ff;
        --secondary: #8338ec;
        --accent: #ff006e;
        --light: #f8f9ff;
        --dark: #1a1a2e;
        --success: #06d6a0;
        --warning: #ffbe0b;
        
        max-width: 600px;
        margin: 0 auto;
    }
    
    .form-container {
        background: white;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(31, 38, 135, 0.1);
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
    }
    
    /* Toggle Switch Styling */
    .switch-row {
        display: flex;
        flex-direction: column;
    }
    
    .switch-container {
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }
    
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }
    
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
    }
    
    .slider:before {
        position: absolute;
        content: \"\";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: .4s;
    }
    
    input:checked + .slider {
        background-color: var(--success);
    }
    
    input:focus + .slider {
        box-shadow: 0 0 1px var(--success);
    }
    
    input:checked + .slider:before {
        transform: translateX(26px);
    }
    
    .slider.round {
        border-radius: 34px;
    }
    
    .slider.round:before {
        border-radius: 50%;
    }
    
    /* Dropdown Styling */
    .floating-input {
        position: relative;
    }
    
    .floating-input label {
        position: absolute;
        top: -0.5rem;
        left: 3rem;
        font-size: 0.75rem;
        background: white;
        padding: 0 0.5rem;
        color: var(--primary);
        z-index: 1;
    }
    
    .input-group {
        position: relative;
    }
    
    .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--primary);
        z-index: 1;
    }
    
    .select-input {
        width: 100%;
        padding: 1rem 1rem 1rem 3rem;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        font-size: 1rem;
        appearance: none;
        background-color: #f8fafc;
        background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 1em;
    }
    
    .select-input:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(58, 134, 255, 0.2);
        background-color: white;
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
    
    .form-hint {
        display: block;
        margin-top: 0.5rem;
        color: #64748b;
        font-size: 0.8rem;
    }
    
    @media (max-width: 768px) {
        .form-body {
            padding: 1.5rem;
        }
    }
</style>", "Admin/velo/_form.html.twig", "C:\\Users\\jihen\\Desktop\\pi_symfony\\templates\\Admin\\velo\\_form.html.twig");
    }
}
