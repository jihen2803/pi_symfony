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

/* Admin/velo_type/_form.html.twig */
class __TwigTemplate_c7bdb110cce0e01f6aee3eb7522aa7b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/velo_type/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/velo_type/_form.html.twig"));

        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "modern-bike-form"]]);
        yield "
    <div class=\"form-glass-container\">
        <div class=\"form-header\">
            <h3><i class=\"fas fa-bicycle\"></i> Bike Type Details</h3>
        </div>
        
        <div class=\"form-body\">
            <div class=\"form-row floating-input\">
                ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "type_name", [], "any", false, false, false, 10), 'label');
        yield "
                <div class=\"input-group\">
                    <span class=\"input-icon\"><i class=\"fas fa-tag\"></i></span>
                    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "type_name", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        // line 16
        yield "
                </div>
            </div>
            ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield " 
            
            <div class=\"form-row floating-input\">
                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), 'label');
        yield "
                <div class=\"input-group\">
                    <span class=\"input-icon\"><i class=\"fas fa-align-left\"></i></span>
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        // line 28
        yield "
                </div>
            </div>
            
            <div class=\"form-row floating-input\">
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "price", [], "any", false, false, false, 33), 'label');
        yield "
                <div class=\"input-group\">
                    <span class=\"input-icon\"><i class=\"fas fa-dollar-sign\"></i></span>
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "price", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " ", "step" => "0.01", "min" => "0"]]);
        // line 41
        yield "
                </div>
            </div>
            
            <div class=\"form-row floating-input\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "velo_image", [], "any", false, false, false, 46), 'label');
        yield "
                <div class=\"input-group\">
                    <span class=\"input-icon\"><i class=\"fas fa-image\"></i></span>
                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "velo_image", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " "]]);
        // line 52
        yield "
                </div>
            </div>
        </div>
        
        <div class=\"form-footer\">
            <button type=\"submit\" class=\"btn-submit\">
                <i class=\"fas fa-save\"></i> ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 59, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "
            </button>
        </div>
    </div>
";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        yield "

<style>
    .modern-bike-form {
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
        return "Admin/velo_type/_form.html.twig";
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
        return array (  132 => 63,  125 => 59,  116 => 52,  114 => 49,  108 => 46,  101 => 41,  99 => 36,  93 => 33,  86 => 28,  84 => 25,  78 => 22,  72 => 19,  67 => 16,  65 => 13,  59 => 10,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/velo_type/_form.html.twig #}
{{ form_start(form, {'attr': {'class': 'modern-bike-form'}}) }}
    <div class=\"form-glass-container\">
        <div class=\"form-header\">
            <h3><i class=\"fas fa-bicycle\"></i> Bike Type Details</h3>
        </div>
        
        <div class=\"form-body\">
            <div class=\"form-row floating-input\">
                {{ form_label(form.type_name) }}
                <div class=\"input-group\">
                    <span class=\"input-icon\"><i class=\"fas fa-tag\"></i></span>
                    {{ form_widget(form.type_name, {'attr': {
                        'class': 'form-control',
                        'placeholder': ' '
                    }}) }}
                </div>
            </div>
            {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }} 
            
            <div class=\"form-row floating-input\">
                {{ form_label(form.description) }}
                <div class=\"input-group\">
                    <span class=\"input-icon\"><i class=\"fas fa-align-left\"></i></span>
                    {{ form_widget(form.description, {'attr': {
                        'class': 'form-control',
                        'placeholder': ' '
                    }}) }}
                </div>
            </div>
            
            <div class=\"form-row floating-input\">
                {{ form_label(form.price) }}
                <div class=\"input-group\">
                    <span class=\"input-icon\"><i class=\"fas fa-dollar-sign\"></i></span>
                    {{ form_widget(form.price, {'attr': {
                        'class': 'form-control',
                        'placeholder': ' ',
                        'step': '0.01',
                        'min': '0'
                    }}) }}
                </div>
            </div>
            
            <div class=\"form-row floating-input\">
                {{ form_label(form.velo_image) }}
                <div class=\"input-group\">
                    <span class=\"input-icon\"><i class=\"fas fa-image\"></i></span>
                    {{ form_widget(form.velo_image, {'attr': {
                        'class': 'form-control',
                        'placeholder': ' '
                    }}) }}
                </div>
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
    .modern-bike-form {
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
    }
</style>", "Admin/velo_type/_form.html.twig", "C:\\Users\\jihen\\Desktop\\pi_symfony\\templates\\Admin\\velo_type\\_form.html.twig");
    }
}
