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

/* Admin/velo_type/_delete_form.html.twig */
class __TwigTemplate_7081dd9f4074430f77af024b19c6f37c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/velo_type/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/velo_type/_delete_form.html.twig"));

        // line 2
        yield "<form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_velo_type_delete", ["id_type" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["velo_type"]) || array_key_exists("velo_type", $context) ? $context["velo_type"] : (function () { throw new RuntimeError('Variable "velo_type" does not exist.', 2, $this->source); })()), "id_type", [], "any", false, false, false, 2)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Are you sure you want to delete this bike type?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["velo_type"]) || array_key_exists("velo_type", $context) ? $context["velo_type"] : (function () { throw new RuntimeError('Variable "velo_type" does not exist.', 3, $this->source); })()), "id_type", [], "any", false, false, false, 3))), "html", null, true);
        yield "\">
    <button class=\"btn btn-danger\">
        <i class=\"fas fa-trash\"></i> Delete
    </button>
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/velo_type/_delete_form.html.twig";
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
        return array (  53 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/velo_type/_delete_form.html.twig #}
<form method=\"post\" action=\"{{ path('app_velo_type_delete', {'id_type': velo_type.id_type}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this bike type?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ velo_type.id_type) }}\">
    <button class=\"btn btn-danger\">
        <i class=\"fas fa-trash\"></i> Delete
    </button>
</form>", "Admin/velo_type/_delete_form.html.twig", "C:\\Users\\jihen\\Desktop\\Wasalni_Web\\Wasalni\\Wasalni\\templates\\Admin\\velo_type\\_delete_form.html.twig");
    }
}
