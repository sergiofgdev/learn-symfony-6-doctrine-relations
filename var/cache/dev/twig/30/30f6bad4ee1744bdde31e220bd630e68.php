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

/* question/show.html.twig */
class __TwigTemplate_682cde8b3f2526990705083b20a8e36f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/show.html.twig", 1);
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

        yield "Question: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h2 class=\"my-4\">Question:</h2>
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container-show p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tisha.png"), "html", null, true);
        yield "\" width=\"100\" height=\"100\"  alt=\"Tisha avatar\">
                            <div class=\"mt-3\">
                                <small>
                                    ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 17, $this->source); })()), "askedAt", [], "any", false, false, false, 17)) {
            // line 18
            yield "                                        Asked <br>
                                        ";
            // line 19
            yield $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 19, $this->source); })()), "askedAt", [], "any", false, false, false, 19));
            yield "
                                    ";
        } else {
            // line 21
            yield "                                        (unpublished)
                                    ";
        }
        // line 23
        yield "                                </small>

                                <form action=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_vote", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 25, $this->source); })()), "slug", [], "any", false, false, false, 25)]), "html", null, true);
        yield "\" method=\"POST\">
                                    <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                        <button class=\"vote-up btn btn-link\" name=\"direction\" value=\"up\"><i class=\"far fa-arrow-alt-circle-up\"></i></button>
                                        <button class=\"vote-down btn btn-link\" name=\"direction\" value=\"down\"><i class=\"far fa-arrow-alt-circle-down\"></i></button>
                                        <span>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 29, $this->source); })()), "votesString", [], "any", false, false, false, 29), "html", null, true);
        yield "</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col\">
                            <h1 class=\"q-title-show\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "html", null, true);
        yield "</h1>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">";
        // line 38
        yield $this->extensions['App\Twig\MarkdownExtension']->parseMarkdown(CoreExtension::getAttribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 38, $this->source); })()), "question", [], "any", false, false, false, 38));
        yield "</p>
                                <p class=\"pt-4\"><strong>--Tisha</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"d-flex justify-content-between my-4\">
        <h2 class=\"\">Answers <span style=\"font-size:1.2rem;\">(";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new RuntimeError('Variable "answers" does not exist.', 49, $this->source); })())), "html", null, true);
        yield ")</span></h2>
        <button class=\"btn btn-sm btn-secondary\">Submit an Answer</button>
    </div>



    <ul class=\"list-unstyled\">
        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new RuntimeError('Variable "answers" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 57
            yield "            <li class=\"mb-4\">
                <div class=\"row\">
                    <div class=\"col-1\">
                        <img src=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tisha.png"), "html", null, true);
            yield "\" width=\"50\" height=\"50\" alt=\"Tisha avatar\">
                    </div>
                    <div class=\"col-9\">
                        ";
            // line 63
            yield $this->extensions['App\Twig\MarkdownExtension']->parseMarkdown($context["answer"]);
            yield "
                        <p>-- Mallory</p>
                    </div>
                    <div class=\"col-2 text-end\">
                        <div
                            class=\"vote-arrows\"
                            ";
            // line 69
            yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "answer-vote", ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("answer_vote", ["id" => 10])]);
            // line 73
            yield "
                        >
                            <button
                                class=\"vote-up btn btn-link\"
                                name=\"direction\"
                                value=\"up\"
                                ";
            // line 79
            yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusAction($this->env, "answer-vote", "clickVote");
            yield "
                            ><i class=\"far fa-arrow-alt-circle-up\"></i></button>
                            <button
                                class=\"vote-down btn btn-link\"
                                name=\"direction\"
                                value=\"down\"
                                ";
            // line 85
            yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusAction($this->env, "answer-vote", "clickVote");
            yield "
                            ><i class=\"far fa-arrow-alt-circle-down\"></i></button>
                            <span>+ <span ";
            // line 87
            yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusTarget($this->env, "answer-vote", "voteTotal");
            yield ">6</span></span>
                        </div>
                    </div>
                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['answer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "    </ul>
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
        return "question/show.html.twig";
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
        return array (  241 => 93,  229 => 87,  224 => 85,  215 => 79,  207 => 73,  205 => 69,  196 => 63,  190 => 60,  185 => 57,  181 => 56,  171 => 49,  157 => 38,  151 => 35,  142 => 29,  135 => 25,  131 => 23,  127 => 21,  122 => 19,  119 => 18,  117 => 17,  111 => 14,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Question: {{ question.name }}{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h2 class=\"my-4\">Question:</h2>
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container-show p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"{{ asset('images/tisha.png') }}\" width=\"100\" height=\"100\"  alt=\"Tisha avatar\">
                            <div class=\"mt-3\">
                                <small>
                                    {% if question.askedAt %}
                                        Asked <br>
                                        {{ question.askedAt|ago }}
                                    {% else %}
                                        (unpublished)
                                    {% endif %}
                                </small>

                                <form action=\"{{ path('app_question_vote', { slug: question.slug }) }}\" method=\"POST\">
                                    <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                        <button class=\"vote-up btn btn-link\" name=\"direction\" value=\"up\"><i class=\"far fa-arrow-alt-circle-up\"></i></button>
                                        <button class=\"vote-down btn btn-link\" name=\"direction\" value=\"down\"><i class=\"far fa-arrow-alt-circle-down\"></i></button>
                                        <span>{{ question.votesString }}</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col\">
                            <h1 class=\"q-title-show\">{{ question.name }}</h1>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">{{ question.question|parse_markdown }}</p>
                                <p class=\"pt-4\"><strong>--Tisha</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"d-flex justify-content-between my-4\">
        <h2 class=\"\">Answers <span style=\"font-size:1.2rem;\">({{ answers|length }})</span></h2>
        <button class=\"btn btn-sm btn-secondary\">Submit an Answer</button>
    </div>



    <ul class=\"list-unstyled\">
        {% for answer in answers %}
            <li class=\"mb-4\">
                <div class=\"row\">
                    <div class=\"col-1\">
                        <img src=\"{{ asset('images/tisha.png') }}\" width=\"50\" height=\"50\" alt=\"Tisha avatar\">
                    </div>
                    <div class=\"col-9\">
                        {{ answer|parse_markdown }}
                        <p>-- Mallory</p>
                    </div>
                    <div class=\"col-2 text-end\">
                        <div
                            class=\"vote-arrows\"
                            {{ stimulus_controller('answer-vote', {
                                url: path('answer_vote', {
                                    id: 10
                                })
                            }) }}
                        >
                            <button
                                class=\"vote-up btn btn-link\"
                                name=\"direction\"
                                value=\"up\"
                                {{ stimulus_action('answer-vote', 'clickVote') }}
                            ><i class=\"far fa-arrow-alt-circle-up\"></i></button>
                            <button
                                class=\"vote-down btn btn-link\"
                                name=\"direction\"
                                value=\"down\"
                                {{ stimulus_action('answer-vote', 'clickVote') }}
                            ><i class=\"far fa-arrow-alt-circle-down\"></i></button>
                            <span>+ <span {{ stimulus_target('answer-vote', 'voteTotal') }}>6</span></span>
                        </div>
                    </div>
                </div>
            </li>
        {% endfor %}
    </ul>
</div>
{% endblock %}
", "question/show.html.twig", "/Users/Sergio/Developer/cursos/symfony/learn-symfony-6-doctrine-relations/templates/question/show.html.twig");
    }
}
