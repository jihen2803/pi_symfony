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
    <title>Reservation Confirmation</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <style>
        :root {
            --primary: #6C63FF;
            --secondary: #FF6584;
            --accent: #42C2FF;
            --dark: #2D3748;
            --light: #F7FAFC;
            --success: #4ADE80;
            --warning: #FBBF24;
            --gradient: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            --gradient-secondary: linear-gradient(135deg, var(--secondary) 0%, #FF8E9E 100%);
        }

        body {
            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;
            background-color: #F0F4F8;
            color: var(--dark);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: radial-gradient(circle at 10% 20%, rgba(108, 99, 255, 0.05) 0%, rgba(108, 99, 255, 0.05) 90%);
        }

        .container {
            max-width: 900px;
            margin: 2rem;
            background: white;
            border-radius: 24px;
            box-shadow: 0 15px 40px rgba(108, 99, 255, 0.15);
            overflow: hidden;
            position: relative;
            transform-style: preserve-3d;
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 12px;
            background: var(--gradient);
            z-index: 2;
        }

        .header {
            text-align: center;
            margin-bottom: 1rem;
            padding: 3rem 2.5rem 2rem;
            position: relative;
            background: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"none\"><path fill=\"%236C63FF\" opacity=\"0.1\" d=\"M0,0 L100,0 L100,100 Q50,80 0,100 Z\"></path></svg>') bottom center no-repeat;
            background-size: 100% 50px;
        }

        .title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            letter-spacing: -1px;
            position: relative;
            display: inline-block;
        }

        .title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--secondary);
            border-radius: 2px;
        }

        .subtitle {
            color: var(--dark);
            font-weight: 400;
            font-size: 1.2rem;
            opacity: 0.8;
            margin-top: 1rem;
        }

        .confetti {
            position: absolute;
            width: 15px;
            height: 15px;
            background: var(--secondary);
            opacity: 0.7;
            border-radius: 50%;
            animation: fall 5s linear infinite;
        }

        @keyframes fall {
            0% { transform: translateY(-100px) rotate(0deg); opacity: 0; }
            10% { opacity: 0.7; }
            100% { transform: translateY(500px) rotate(360deg); opacity: 0; }
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding: 0 2.5rem;
        }

        .detail-item {
            background: white;
            padding: 1.75rem;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(108, 99, 255, 0.08);
            border-left: 4px solid var(--primary);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            position: relative;
            overflow: hidden;
        }

        .detail-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(108, 99, 255, 0.15);
        }

        .detail-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--gradient);
            transition: width 0.3s ease;
        }

        .detail-item:hover::before {
            width: 8px;
        }

        .label {
            font-weight: 600;
            color: var(--primary);
            display: block;
            margin-bottom: 0.75rem;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .label i {
            font-size: 1.1rem;
        }

        .value {
            font-size: 1.4rem;
            color: var(--dark);
            font-weight: 600;
            line-height: 1.3;
        }

        .status-container {
            grid-column: span 2;
            background: white;
            padding: 1.75rem;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(108, 99, 255, 0.08);
            margin: 0 2.5rem 2rem;
            text-align: center;
            border-top: 4px solid #10B981;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 700;
            background: linear-gradient(135deg, #10B981 0%, #34D399 100%);
            color: white;
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
            font-size: 1.1rem;
            margin-top: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .footer {
            margin-top: 2rem;
            padding: 2.5rem;
            background: linear-gradient(135deg, #F7FAFC 0%, #EDF2F7 100%);
            text-align: center;
            font-size: 1rem;
            color: var(--dark);
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
        }

        .footer p {
            margin: 0;
            line-height: 1.6;
        }

        .footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .footer a:hover {
            color: var(--secondary);
            text-decoration: underline;
        }

        .contact-icons {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .contact-icons a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            color: var(--primary);
        }

        .contact-icons a:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(108, 99, 255, 0.2);
            color: white;
            background: var(--gradient);
        }

        @media (max-width: 768px) {
            .details-grid {
                grid-template-columns: 1fr;
                padding: 0 1.5rem;
            }
            
            .status-container {
                grid-column: span 1;
                margin: 0 1.5rem 2rem;
            }
            
            .title {
                font-size: 2.2rem;
            }
            
            .header {
                padding: 2rem 1.5rem 1.5rem;
            }
            
            .value {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <!-- Confetti elements -->
        <div class=\"confetti\" style=\"left:10%; animation-delay:0s;\"></div>
        <div class=\"confetti\" style=\"left:20%; animation-delay:0.5s;\"></div>
        <div class=\"confetti\" style=\"left:30%; animation-delay:1s;\"></div>
        <div class=\"confetti\" style=\"left:40%; animation-delay:1.5s;\"></div>
        <div class=\"confetti\" style=\"left:50%; animation-delay:2s;\"></div>
        <div class=\"confetti\" style=\"left:60%; animation-delay:2.5s;\"></div>
        <div class=\"confetti\" style=\"left:70%; animation-delay:3s;\"></div>
        <div class=\"confetti\" style=\"left:80%; animation-delay:3.5s;\"></div>
        <div class=\"confetti\" style=\"left:90%; animation-delay:4s;\"></div>

        <div class=\"header\">
            <h1 class=\"title\">Reservation Confirmed!</h1>
            <p class=\"subtitle\">Your booking is now secured and ready to go</p>
        </div>

        <div class=\"details-grid\">
            <div class=\"detail-item\">
                <span class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Start Date</span>
                <span class=\"value\">";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 310, $this->source); })()), "dateDebut", [], "any", false, false, false, 310), "Y-m-d H:i"), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-item\">
                <span class=\"label\"><i class=\"fas fa-calendar-check\"></i> End Date</span>
                <span class=\"value\">";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 315, $this->source); })()), "dateFin", [], "any", false, false, false, 315), "Y-m-d H:i"), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"detail-item\">
                <span class=\"label\"><i class=\"fas fa-tag\"></i> Total Price</span>
                <span class=\"value\">";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 320, $this->source); })()), "price", [], "any", false, false, false, 320), "html", null, true);
        yield " TND</span>
            </div>
            
            <div class=\"detail-item\">
                <span class=\"label\"><i class=\"fas fa-bicycle\"></i> Bike Type</span>
                <span class=\"value\">";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 325, $this->source); })()), "velo", [], "any", false, false, false, 325), "veloType", [], "any", false, false, false, 325), "type_name", [], "any", false, false, false, 325), "html", null, true);
        yield "</span>
            </div>
        </div>

        <div class=\"status-container\">
            <span class=\"label\"><i class=\"fas fa-check-circle\"></i> Reservation Status</span>
            <div class=\"status-badge\">
                <i class=\"fas fa-check-circle\" style=\"margin-right: 8px;\"></i>
                Booked
            </div>
        </div>

        <div class=\"footer\">
            <p>Thank you for choosing our service! We're excited to serve you.</p>
            <div class=\"contact-icons\">
                <a href=\"mailto:contact@bikes.com\"><i class=\"fas fa-envelope\"></i></a>
                <a href=\"tel:+21612345678\"></a>
                <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
            </div>
            <p style=\"margin-top: 1.5rem;\">Need help? Contact us anytime! </p>
            <p style=\"margin-top: 1.5rem;\"><i class=\"fas fa-phone\"></i> 23456789 </p>
            <p style=\"margin-top: 1.5rem;\"><i class=\"fas fa-envelope\"></i> jihen@gmail.com </p>
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
        return array (  383 => 325,  375 => 320,  367 => 315,  359 => 310,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reservation Confirmation</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <style>
        :root {
            --primary: #6C63FF;
            --secondary: #FF6584;
            --accent: #42C2FF;
            --dark: #2D3748;
            --light: #F7FAFC;
            --success: #4ADE80;
            --warning: #FBBF24;
            --gradient: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            --gradient-secondary: linear-gradient(135deg, var(--secondary) 0%, #FF8E9E 100%);
        }

        body {
            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;
            background-color: #F0F4F8;
            color: var(--dark);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: radial-gradient(circle at 10% 20%, rgba(108, 99, 255, 0.05) 0%, rgba(108, 99, 255, 0.05) 90%);
        }

        .container {
            max-width: 900px;
            margin: 2rem;
            background: white;
            border-radius: 24px;
            box-shadow: 0 15px 40px rgba(108, 99, 255, 0.15);
            overflow: hidden;
            position: relative;
            transform-style: preserve-3d;
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 12px;
            background: var(--gradient);
            z-index: 2;
        }

        .header {
            text-align: center;
            margin-bottom: 1rem;
            padding: 3rem 2.5rem 2rem;
            position: relative;
            background: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"none\"><path fill=\"%236C63FF\" opacity=\"0.1\" d=\"M0,0 L100,0 L100,100 Q50,80 0,100 Z\"></path></svg>') bottom center no-repeat;
            background-size: 100% 50px;
        }

        .title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            letter-spacing: -1px;
            position: relative;
            display: inline-block;
        }

        .title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--secondary);
            border-radius: 2px;
        }

        .subtitle {
            color: var(--dark);
            font-weight: 400;
            font-size: 1.2rem;
            opacity: 0.8;
            margin-top: 1rem;
        }

        .confetti {
            position: absolute;
            width: 15px;
            height: 15px;
            background: var(--secondary);
            opacity: 0.7;
            border-radius: 50%;
            animation: fall 5s linear infinite;
        }

        @keyframes fall {
            0% { transform: translateY(-100px) rotate(0deg); opacity: 0; }
            10% { opacity: 0.7; }
            100% { transform: translateY(500px) rotate(360deg); opacity: 0; }
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding: 0 2.5rem;
        }

        .detail-item {
            background: white;
            padding: 1.75rem;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(108, 99, 255, 0.08);
            border-left: 4px solid var(--primary);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            position: relative;
            overflow: hidden;
        }

        .detail-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(108, 99, 255, 0.15);
        }

        .detail-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--gradient);
            transition: width 0.3s ease;
        }

        .detail-item:hover::before {
            width: 8px;
        }

        .label {
            font-weight: 600;
            color: var(--primary);
            display: block;
            margin-bottom: 0.75rem;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .label i {
            font-size: 1.1rem;
        }

        .value {
            font-size: 1.4rem;
            color: var(--dark);
            font-weight: 600;
            line-height: 1.3;
        }

        .status-container {
            grid-column: span 2;
            background: white;
            padding: 1.75rem;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(108, 99, 255, 0.08);
            margin: 0 2.5rem 2rem;
            text-align: center;
            border-top: 4px solid #10B981;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 700;
            background: linear-gradient(135deg, #10B981 0%, #34D399 100%);
            color: white;
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
            font-size: 1.1rem;
            margin-top: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .footer {
            margin-top: 2rem;
            padding: 2.5rem;
            background: linear-gradient(135deg, #F7FAFC 0%, #EDF2F7 100%);
            text-align: center;
            font-size: 1rem;
            color: var(--dark);
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
        }

        .footer p {
            margin: 0;
            line-height: 1.6;
        }

        .footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .footer a:hover {
            color: var(--secondary);
            text-decoration: underline;
        }

        .contact-icons {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .contact-icons a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            color: var(--primary);
        }

        .contact-icons a:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(108, 99, 255, 0.2);
            color: white;
            background: var(--gradient);
        }

        @media (max-width: 768px) {
            .details-grid {
                grid-template-columns: 1fr;
                padding: 0 1.5rem;
            }
            
            .status-container {
                grid-column: span 1;
                margin: 0 1.5rem 2rem;
            }
            
            .title {
                font-size: 2.2rem;
            }
            
            .header {
                padding: 2rem 1.5rem 1.5rem;
            }
            
            .value {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <!-- Confetti elements -->
        <div class=\"confetti\" style=\"left:10%; animation-delay:0s;\"></div>
        <div class=\"confetti\" style=\"left:20%; animation-delay:0.5s;\"></div>
        <div class=\"confetti\" style=\"left:30%; animation-delay:1s;\"></div>
        <div class=\"confetti\" style=\"left:40%; animation-delay:1.5s;\"></div>
        <div class=\"confetti\" style=\"left:50%; animation-delay:2s;\"></div>
        <div class=\"confetti\" style=\"left:60%; animation-delay:2.5s;\"></div>
        <div class=\"confetti\" style=\"left:70%; animation-delay:3s;\"></div>
        <div class=\"confetti\" style=\"left:80%; animation-delay:3.5s;\"></div>
        <div class=\"confetti\" style=\"left:90%; animation-delay:4s;\"></div>

        <div class=\"header\">
            <h1 class=\"title\">Reservation Confirmed!</h1>
            <p class=\"subtitle\">Your booking is now secured and ready to go</p>
        </div>

        <div class=\"details-grid\">
            <div class=\"detail-item\">
                <span class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Start Date</span>
                <span class=\"value\">{{ reservation.dateDebut|date('Y-m-d H:i') }}</span>
            </div>
            
            <div class=\"detail-item\">
                <span class=\"label\"><i class=\"fas fa-calendar-check\"></i> End Date</span>
                <span class=\"value\">{{ reservation.dateFin|date('Y-m-d H:i') }}</span>
            </div>
            
            <div class=\"detail-item\">
                <span class=\"label\"><i class=\"fas fa-tag\"></i> Total Price</span>
                <span class=\"value\">{{ reservation.price }} TND</span>
            </div>
            
            <div class=\"detail-item\">
                <span class=\"label\"><i class=\"fas fa-bicycle\"></i> Bike Type</span>
                <span class=\"value\">{{ reservation.velo.veloType.type_name }}</span>
            </div>
        </div>

        <div class=\"status-container\">
            <span class=\"label\"><i class=\"fas fa-check-circle\"></i> Reservation Status</span>
            <div class=\"status-badge\">
                <i class=\"fas fa-check-circle\" style=\"margin-right: 8px;\"></i>
                Booked
            </div>
        </div>

        <div class=\"footer\">
            <p>Thank you for choosing our service! We're excited to serve you.</p>
            <div class=\"contact-icons\">
                <a href=\"mailto:contact@bikes.com\"><i class=\"fas fa-envelope\"></i></a>
                <a href=\"tel:+21612345678\"></a>
                <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
            </div>
            <p style=\"margin-top: 1.5rem;\">Need help? Contact us anytime! </p>
            <p style=\"margin-top: 1.5rem;\"><i class=\"fas fa-phone\"></i> 23456789 </p>
            <p style=\"margin-top: 1.5rem;\"><i class=\"fas fa-envelope\"></i> jihen@gmail.com </p>
        </div>
    </div>
</body>
</html>", "pdf/reservation_detail.html.twig", "C:\\Users\\jihen\\Desktop\\pi_symfony\\templates\\pdf\\reservation_detail.html.twig");
    }
}
