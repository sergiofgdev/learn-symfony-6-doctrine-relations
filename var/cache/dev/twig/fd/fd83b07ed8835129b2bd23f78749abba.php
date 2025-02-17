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

/* question/homepage.html.twig */
class __TwigTemplate_c7c9cadd6b5e5811d048edb09b67bc21 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/homepage.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"jumbotron-img p-2 mb-2\">
    <div class=\"container\">
        <h1 class=\"display-4\">Your Questions Answered</h1>
        <div class=\"lead\">And even answers for those questions you didn't think to ask!</div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row mb-3\">
        <div class=\"col\">
            <button class=\"btn btn-question\">Ask a Question</button>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 18
            yield "        <div class=\"col-12 mb-3\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tisha.png"), "html", null, true);
            yield "\" width=\"100\" height=\"100\"  alt=\"Tisha avatar\">
                            <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                <span>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "votesString", [], "any", false, false, false, 25), "html", null, true);
            yield " votes</span>
                            </div>
                        </div>
                        <div class=\"col\">
                            <a class=\"q-title\" href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "slug", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\"><h2>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "name", [], "any", false, false, false, 29), "html", null, true);
            yield "</h2></a>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">";
            // line 32
            yield $this->extensions['App\Twig\MarkdownExtension']->parseMarkdown(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 32));
            yield "</p>
                                <p class=\"pt-4\"><strong>--Tisha</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"answer-link\" href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "slug", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" style=\"color: #fff;\">
                    <p class=\"q-display-response text-center p-3\">
                        <i class=\"fa fa-magic magic-wand\"></i> 6 answers
                    </p>
                </a>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "    </div>
</div>
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
        return "question/homepage.html.twig";
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
        return array (  145 => 46,  131 => 38,  122 => 32,  114 => 29,  107 => 25,  102 => 23,  95 => 18,  91 => 17,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"jumbotron-img p-2 mb-2\">
    <div class=\"container\">
        <h1 class=\"display-4\">Your Questions Answered</h1>
        <div class=\"lead\">And even answers for those questions you didn't think to ask!</div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row mb-3\">
        <div class=\"col\">
            <button class=\"btn btn-question\">Ask a Question</button>
        </div>
    </div>
    <div class=\"row\">
        {% for question in questions %}
        <div class=\"col-12 mb-3\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"{{ asset('images/tisha.png') }}\" width=\"100\" height=\"100\"  alt=\"Tisha avatar\">
                            <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                <span>{{ question.votesString}} votes</span>
                            </div>
                        </div>
                        <div class=\"col\">
                            <a class=\"q-title\" href=\"{{ path('app_question_show', { slug: question.slug }) }}\"><h2>{{ question.name }}</h2></a>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">{{ question.question|parse_markdown }}</p>
                                <p class=\"pt-4\"><strong>--Tisha</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"answer-link\" href=\"{{ path('app_question_show', { slug: question.slug }) }}\" style=\"color: #fff;\">
                    <p class=\"q-display-response text-center p-3\">
                        <i class=\"fa fa-magic magic-wand\"></i> 6 answers
                    </p>
                </a>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}

", "question/homepage.html.twig", "/Users/Sergio/Developer/cursos/symfony/learn-symfony-6-doctrine-relations/templates/question/homepage.html.twig");
    }
}
