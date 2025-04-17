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

/* report.html.twig */
class __TwigTemplate_579f9ac24597fa91c27769757c5d9930 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
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

        yield "Report Page";
        
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
        yield "    <h1>Report Page</h1>
    <p>This is the report page containing kmom01 to kmom10.</p>

    <h2><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_kmom01");
        yield "\">kmom01 Report</a></h2>
    <p>This is the kmom01 report page.</p>
    <p>Welcome to the kmom01 redovisning!</p>

    <h2>kmom02 Report</h2>
    <p>This is the kmom02 report page.</p>
    <p>Welcome to the kmom02 redovisning!</p>

    <h2>kmom03 Report</h2>
    <p>This is the kmom03 report page.</p>
    <p>Welcome to the kmom03 redovisning!</p>

    <h2>kmom04 Report</h2>
    <p>This is the kmom04 report page.</p>
    <p>Welcome to the kmom04 redovisning!</p>

    <h2>kmom05 Report</h2>
    <p>This is the kmom05 report page.</p>
    <p>Welcome to the kmom05 redovisning!</p>

    <h2>kmom06 Report</h2>
    <p>This is the kmom06 report page.</p>
    <p>Welcome to the kmom06 redovisning!</p>

    <h2>kmom07 Report</h2>
    <p>This is the kmom07 report page.</p>
    <p>Welcome to the kmom07 redovisning!</p>

    <h2>kmom08 Report</h2>
    <p>This is the kmom08 report page.</p>
    <p>Welcome to the kmom08 redovisning!</p>

    <h2>kmom09 Report</h2>
    <p>This is the kmom09 report page.</p>
    <p>Welcome to the kmom09 redovisning!</p>

    <h2>kmom10 Report</h2>
    <p>This is the kmom10 report page.</p>
    <p>Welcome to the kmom10 redovisning!</p>

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
        return "report.html.twig";
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
        return array (  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Report Page{% endblock %}

{% block body %}
    <h1>Report Page</h1>
    <p>This is the report page containing kmom01 to kmom10.</p>

    <h2><a href=\"{{ path('report_kmom01') }}\">kmom01 Report</a></h2>
    <p>This is the kmom01 report page.</p>
    <p>Welcome to the kmom01 redovisning!</p>

    <h2>kmom02 Report</h2>
    <p>This is the kmom02 report page.</p>
    <p>Welcome to the kmom02 redovisning!</p>

    <h2>kmom03 Report</h2>
    <p>This is the kmom03 report page.</p>
    <p>Welcome to the kmom03 redovisning!</p>

    <h2>kmom04 Report</h2>
    <p>This is the kmom04 report page.</p>
    <p>Welcome to the kmom04 redovisning!</p>

    <h2>kmom05 Report</h2>
    <p>This is the kmom05 report page.</p>
    <p>Welcome to the kmom05 redovisning!</p>

    <h2>kmom06 Report</h2>
    <p>This is the kmom06 report page.</p>
    <p>Welcome to the kmom06 redovisning!</p>

    <h2>kmom07 Report</h2>
    <p>This is the kmom07 report page.</p>
    <p>Welcome to the kmom07 redovisning!</p>

    <h2>kmom08 Report</h2>
    <p>This is the kmom08 report page.</p>
    <p>Welcome to the kmom08 redovisning!</p>

    <h2>kmom09 Report</h2>
    <p>This is the kmom09 report page.</p>
    <p>Welcome to the kmom09 redovisning!</p>

    <h2>kmom10 Report</h2>
    <p>This is the kmom10 report page.</p>
    <p>Welcome to the kmom10 redovisning!</p>

{% endblock %}
", "report.html.twig", "/home/ali/dbwebb-kurser/mvc/me/report/symfony/app/templates/report.html.twig");
    }
}
