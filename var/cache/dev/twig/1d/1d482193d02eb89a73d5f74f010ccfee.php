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

/* lucky_number.html.twig */
class __TwigTemplate_81f049918128c49d8ce9acb7c752e84d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lucky_number.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lucky_number.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lucky_number.html.twig", 1);
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

        yield "Magic Number";
        
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
        yield "<style>
    body {
        background: linear-gradient(135deg, #1f2937, #4b5563);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #f9fafb;
        text-align: center;
        padding: 3rem;
    }

    h1 {
        font-size: 3rem;
        color: #38bdf8;
        margin-bottom: 1rem;
        text-shadow: 1px 1px #0f172a;
    }

    p {
        font-size: 1.25rem;
        margin-bottom: 1rem;
    }

    .magic-number {
        font-size: 4rem;
        font-weight: bold;
        background: linear-gradient(90deg, #06b6d4, #3b82f6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: pulse 2s infinite;
        margin-top: 1rem;
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
            text-shadow: 0 0 10px rgba(59, 130, 246, 0.7);
        }
        50% {
            transform: scale(1.1);
            text-shadow: 0 0 20px rgba(6, 182, 212, 1);
        }
    }
</style>

<h1>✨ Magic Number ✨</h1>
<p>Welcome to my <strong>awesome magical</strong> homepage.</p>
<p class=\"magic-number\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 51, $this->source); })()), "html", null, true);
        yield "</p>
<p>Refresh to discover a new number of wonder.</p>
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
        return "lucky_number.html.twig";
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
        return array (  147 => 51,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Magic Number{% endblock %}

{% block body %}
<style>
    body {
        background: linear-gradient(135deg, #1f2937, #4b5563);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #f9fafb;
        text-align: center;
        padding: 3rem;
    }

    h1 {
        font-size: 3rem;
        color: #38bdf8;
        margin-bottom: 1rem;
        text-shadow: 1px 1px #0f172a;
    }

    p {
        font-size: 1.25rem;
        margin-bottom: 1rem;
    }

    .magic-number {
        font-size: 4rem;
        font-weight: bold;
        background: linear-gradient(90deg, #06b6d4, #3b82f6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: pulse 2s infinite;
        margin-top: 1rem;
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
            text-shadow: 0 0 10px rgba(59, 130, 246, 0.7);
        }
        50% {
            transform: scale(1.1);
            text-shadow: 0 0 20px rgba(6, 182, 212, 1);
        }
    }
</style>

<h1>✨ Magic Number ✨</h1>
<p>Welcome to my <strong>awesome magical</strong> homepage.</p>
<p class=\"magic-number\">{{ number }}</p>
<p>Refresh to discover a new number of wonder.</p>
{% endblock %}", "lucky_number.html.twig", "/home/ali/dbwebb-kurser/mvc/me/report/templates/lucky_number.html.twig");
    }
}
