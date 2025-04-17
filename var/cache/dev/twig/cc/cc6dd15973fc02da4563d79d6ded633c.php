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

/* report_kmom01.html.twig */
class __TwigTemplate_acc8a1db07477cdc8087932f234c9434 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report_kmom01.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report_kmom01.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report_kmom01.html.twig", 1);
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

    <h2>kmom01 Report</h2>

    <h3>Mina förkunskaper och erfarenheter av objektorientering</h3>
    <p>
        Jag har tidigare bekantat mig med objektorienterad programmering (OOP) i språk som Java och Python under andra kurser. Jag har lärt mig om begrepp som klasser, objekt, arv och inkapsling, men har inte använt det i större projekt ännu. Det känns som ett logiskt sätt att strukturera kod, speciellt när program växer.
    </p>

    <h3>PHPs modell för klasser och objekt</h3>
    <p>
        PHPs sätt att hantera objektorientering påminner mycket om andra språk. För att komma igång behöver man förstå hur man skapar en klass med nyckelordet <code>class</code>, hur man definierar metoder och attribut, samt hur man instansierar ett objekt med <code>new</code>. Även begrepp som konstruktorer, synlighetsnivåer som <code>public</code> och <code>private</code>, och hur man anropar metoder via pilar (->) är grundläggande.
    </p>

    <h3>Reflektion över me/report-koden</h3>
    <p>
        Strukturen i me/report känns genomtänkt och pedagogisk. Det är lätt att följa hur routing i Symfony kopplas till vyer och hur varje rapportsektion separeras. Jag gillar att det är modulärt och lätt att utöka med nya sidor, som t.ex. en för varje kmom.
    </p>

    <h3>Tankar kring \"PHP The Right Way\"</h3>
    <p>
        Artikeln är en riktigt bra resurs för både nybörjare och mer erfarna utvecklare. Det jag fastnade mest för var delen om <strong>PSR-standards</strong> och vikten av att skriva kod enligt gemensamma riktlinjer. Jag blev också intresserad av dependency injection och testning i PHP, två områden jag vill förstå bättre framöver. Artikeln känns som ett bra komplement till kursens innehåll.
    </p>

    <h3>Min TIL (Today I Learned)</h3>
    <p>
        Idag lärde jag mig hur Symfony använder attribut i PHP 8 för att skapa routes, vilket jag inte sett förut. Det gör koden mycket tydligare och mer läsbar jämfört med äldre sätt att definiera routes i YAML. Jag tyckte också det var intressant att se hur man kopplar templates till kontroller med minimal kod.
    </p>
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
        return "report_kmom01.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Report Page{% endblock %}

{% block body %}
    <h1>Report Page</h1>
    <p>This is the report page containing kmom01 to kmom10.</p>

    <h2>kmom01 Report</h2>

    <h3>Mina förkunskaper och erfarenheter av objektorientering</h3>
    <p>
        Jag har tidigare bekantat mig med objektorienterad programmering (OOP) i språk som Java och Python under andra kurser. Jag har lärt mig om begrepp som klasser, objekt, arv och inkapsling, men har inte använt det i större projekt ännu. Det känns som ett logiskt sätt att strukturera kod, speciellt när program växer.
    </p>

    <h3>PHPs modell för klasser och objekt</h3>
    <p>
        PHPs sätt att hantera objektorientering påminner mycket om andra språk. För att komma igång behöver man förstå hur man skapar en klass med nyckelordet <code>class</code>, hur man definierar metoder och attribut, samt hur man instansierar ett objekt med <code>new</code>. Även begrepp som konstruktorer, synlighetsnivåer som <code>public</code> och <code>private</code>, och hur man anropar metoder via pilar (->) är grundläggande.
    </p>

    <h3>Reflektion över me/report-koden</h3>
    <p>
        Strukturen i me/report känns genomtänkt och pedagogisk. Det är lätt att följa hur routing i Symfony kopplas till vyer och hur varje rapportsektion separeras. Jag gillar att det är modulärt och lätt att utöka med nya sidor, som t.ex. en för varje kmom.
    </p>

    <h3>Tankar kring \"PHP The Right Way\"</h3>
    <p>
        Artikeln är en riktigt bra resurs för både nybörjare och mer erfarna utvecklare. Det jag fastnade mest för var delen om <strong>PSR-standards</strong> och vikten av att skriva kod enligt gemensamma riktlinjer. Jag blev också intresserad av dependency injection och testning i PHP, två områden jag vill förstå bättre framöver. Artikeln känns som ett bra komplement till kursens innehåll.
    </p>

    <h3>Min TIL (Today I Learned)</h3>
    <p>
        Idag lärde jag mig hur Symfony använder attribut i PHP 8 för att skapa routes, vilket jag inte sett förut. Det gör koden mycket tydligare och mer läsbar jämfört med äldre sätt att definiera routes i YAML. Jag tyckte också det var intressant att se hur man kopplar templates till kontroller med minimal kod.
    </p>
{% endblock %}

", "report_kmom01.html.twig", "/home/ali/dbwebb-kurser/mvc/me/report/symfony/app/templates/report_kmom01.html.twig");
    }
}
