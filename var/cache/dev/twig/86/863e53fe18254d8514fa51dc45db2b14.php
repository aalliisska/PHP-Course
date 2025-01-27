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

/* register_user_form.html.twig */
class __TwigTemplate_9bfd213d52307bbd23f82beff1085cf0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'register_user' => [$this, 'block_register_user'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register_user_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "register_user_form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Add post";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 8
    public function block_register_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "register_user"));

        // line 9
        yield "    <h1>Enter your registration information</h1>
    <form action=\"/register_user\" method=\"post\" enctype=\"multipart/form-data\">
        <div>
            <label for=\"first_name\">First Name:</label>
            <input name=\"first_name\" id=\"first_name\" type=\"text\">
        </div>
        <div>
            <label for=\"last_name\">Last Name:</label>
            <input name=\"last_name\" id=\"last_name\" type=\"text\">
        </div>
        <div>
            <label for=\"middle_name\">Middle Name:</label>
            <input name=\"middle_name\" id=\"middle_name\" type=\"text\">
        </div>
        <div>
            <label for=\"gender\">Gender:</label>
            <input name=\"gender\" id=\"gender\" type=\"text\">
        </div>
        <div>
            <label for=\"birth_date\">Birth Date:</label>
            <input name=\"birth_date\" id=\"birth_date\" type=\"date\">
        </div>
        <div>
            <label for=\"email\">Email:</label>
            <input name=\"email\" id=\"email\" type=\"text\">
        </div>
        <div>
            <label for=\"phone\">Phone:</label>
            <input name=\"phone\" id=\"phone\" type=\"text\">
        </div>
        <div>
            <label for=\"avatar_path\">Avatar Path:</label>
            <input name=\"avatar_path\" id=\"avatar_path\" type=\"file\" accept=\"image/jpeg, image/jpg, image/gif\">
        </div>

        <button type=\"submit\">Submit</button>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "register_user_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  94 => 9,  87 => 8,  76 => 5,  69 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Add post{% endblock %}
{% block head %}
    {{ parent() }}
{% endblock %}

{% block register_user %}
    <h1>Enter your registration information</h1>
    <form action=\"/register_user\" method=\"post\" enctype=\"multipart/form-data\">
        <div>
            <label for=\"first_name\">First Name:</label>
            <input name=\"first_name\" id=\"first_name\" type=\"text\">
        </div>
        <div>
            <label for=\"last_name\">Last Name:</label>
            <input name=\"last_name\" id=\"last_name\" type=\"text\">
        </div>
        <div>
            <label for=\"middle_name\">Middle Name:</label>
            <input name=\"middle_name\" id=\"middle_name\" type=\"text\">
        </div>
        <div>
            <label for=\"gender\">Gender:</label>
            <input name=\"gender\" id=\"gender\" type=\"text\">
        </div>
        <div>
            <label for=\"birth_date\">Birth Date:</label>
            <input name=\"birth_date\" id=\"birth_date\" type=\"date\">
        </div>
        <div>
            <label for=\"email\">Email:</label>
            <input name=\"email\" id=\"email\" type=\"text\">
        </div>
        <div>
            <label for=\"phone\">Phone:</label>
            <input name=\"phone\" id=\"phone\" type=\"text\">
        </div>
        <div>
            <label for=\"avatar_path\">Avatar Path:</label>
            <input name=\"avatar_path\" id=\"avatar_path\" type=\"file\" accept=\"image/jpeg, image/jpg, image/gif\">
        </div>

        <button type=\"submit\">Submit</button>
    </form>
{% endblock %}", "register_user_form.html.twig", "/usr/local/var/www/GitHub/PHP-2024/my_symfony_app/templates/register_user_form.html.twig");
    }
}
