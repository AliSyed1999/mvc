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

/* home.html.twig */
class __TwigTemplate_8f98a7ccde2a5642679a8e13a680f313 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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

        yield "Home";
        
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
        yield "<main class=\"content\">
    <section class=\"section-intro\">
        <h2>Welcome Engineer</h2>
        <p>Click the image to spin it using pure CSS. No scripts, just style.</p>
    </section>

    <section class=\"section-spin\">
        <input type=\"checkbox\" id=\"spin-toggle\" class=\"spin-toggle\">
        <label for=\"spin-toggle\" class=\"spin-box\">
            <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Ali.jpg"), "html", null, true);
        yield "\" alt=\"Ali Image\" class=\"spin-image\">
        </label>
        <p class=\"note\">Click to spin – click again to stop!</p>
    </section>

    <section class=\"section-glider\">
        <h3>Glider Preview</h3>
        <a href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/glider.svg"), "html", null, true);
        yield "\" target=\"_blank\">
            <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/glider.svg"), "html", null, true);
        yield "\" alt=\"Glider Image\" class=\"glider-image\">
        </a>
    </section>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        yield "<style>
    :root {
        --bg: #0f172a;
        --panel: #1e293b;
        --text: #e2e8f0;
        --accent: #38bdf8;
        --muted: #94a3b8;
    }

    body, html {
        margin: 0;
        padding: 0;
        font-family: 'Fira Code', monospace;
        background-color: var(--bg);
        color: var(--text);
        height: 100%;
    }

    .content {
        padding: 40px;
        background-color: #0f172a;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .section-intro h2 {
        color: var(--accent);
        font-size: 2.5rem;
        margin-bottom: 10px;
    }

    .section-intro p {
        color: var(--muted);
        font-size: 1rem;
        text-align: center;
    }

    .section-spin {
        margin-top: 30px;
        text-align: center;
    }

    .spin-box {
        display: inline-block;
        margin-top: 30px;
        border-radius: 12px;
        border: 1px solid #334155;
        padding: 8px;
        background: #1e293b;
        box-shadow: 0 0 20px rgba(56, 189, 248, 0.3);
        cursor: pointer;
    }

    .spin-image {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
        transition: transform 1s ease-in-out;
    }

    .spin-toggle {
        display: none;
    }

    .spin-toggle:checked + .spin-box .spin-image {
        transform: rotate(360deg);
    }

    .note {
        color: var(--muted);
        font-size: 0.9rem;
        margin-top: 10px;
    }

    .section-glider {
        margin-top: 40px;
        text-align: center;
    }

    .section-glider h3 {
        color: var(--accent);
        margin-bottom: 10px;
    }

    .glider-image {
        width: 80px;
        filter: brightness(1.2);
    }

    /* Responsiv Design */
    @media (max-width: 768px) {
        .content {
            padding: 20px;
        }

        .section-intro h2 {
            font-size: 2rem;
        }

        .section-intro p {
            font-size: 0.9rem;
        }

        .spin-image {
            width: 150px;
            height: 150px;
        }

        .glider-image {
            width: 60px;
        }
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
        return "home.html.twig";
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
        return array (  155 => 30,  142 => 29,  126 => 23,  122 => 22,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Home{% endblock %}

{% block body %}
<main class=\"content\">
    <section class=\"section-intro\">
        <h2>Welcome Engineer</h2>
        <p>Click the image to spin it using pure CSS. No scripts, just style.</p>
    </section>

    <section class=\"section-spin\">
        <input type=\"checkbox\" id=\"spin-toggle\" class=\"spin-toggle\">
        <label for=\"spin-toggle\" class=\"spin-box\">
            <img src=\"{{ asset('img/Ali.jpg') }}\" alt=\"Ali Image\" class=\"spin-image\">
        </label>
        <p class=\"note\">Click to spin – click again to stop!</p>
    </section>

    <section class=\"section-glider\">
        <h3>Glider Preview</h3>
        <a href=\"{{ asset('img/glider.svg') }}\" target=\"_blank\">
            <img src=\"{{ asset('img/glider.svg') }}\" alt=\"Glider Image\" class=\"glider-image\">
        </a>
    </section>
</main>
{% endblock %}

{% block stylesheets %}
<style>
    :root {
        --bg: #0f172a;
        --panel: #1e293b;
        --text: #e2e8f0;
        --accent: #38bdf8;
        --muted: #94a3b8;
    }

    body, html {
        margin: 0;
        padding: 0;
        font-family: 'Fira Code', monospace;
        background-color: var(--bg);
        color: var(--text);
        height: 100%;
    }

    .content {
        padding: 40px;
        background-color: #0f172a;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .section-intro h2 {
        color: var(--accent);
        font-size: 2.5rem;
        margin-bottom: 10px;
    }

    .section-intro p {
        color: var(--muted);
        font-size: 1rem;
        text-align: center;
    }

    .section-spin {
        margin-top: 30px;
        text-align: center;
    }

    .spin-box {
        display: inline-block;
        margin-top: 30px;
        border-radius: 12px;
        border: 1px solid #334155;
        padding: 8px;
        background: #1e293b;
        box-shadow: 0 0 20px rgba(56, 189, 248, 0.3);
        cursor: pointer;
    }

    .spin-image {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
        transition: transform 1s ease-in-out;
    }

    .spin-toggle {
        display: none;
    }

    .spin-toggle:checked + .spin-box .spin-image {
        transform: rotate(360deg);
    }

    .note {
        color: var(--muted);
        font-size: 0.9rem;
        margin-top: 10px;
    }

    .section-glider {
        margin-top: 40px;
        text-align: center;
    }

    .section-glider h3 {
        color: var(--accent);
        margin-bottom: 10px;
    }

    .glider-image {
        width: 80px;
        filter: brightness(1.2);
    }

    /* Responsiv Design */
    @media (max-width: 768px) {
        .content {
            padding: 20px;
        }

        .section-intro h2 {
            font-size: 2rem;
        }

        .section-intro p {
            font-size: 0.9rem;
        }

        .spin-image {
            width: 150px;
            height: 150px;
        }

        .glider-image {
            width: 60px;
        }
    }
</style>
{% endblock %}
", "home.html.twig", "/home/ali/dbwebb-kurser/mvc/me/report/symfony/app/templates/home.html.twig");
    }
}
