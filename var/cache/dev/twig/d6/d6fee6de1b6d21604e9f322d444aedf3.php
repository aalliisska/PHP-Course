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

/* view_user_form.php.twig */
class __TwigTemplate_d8be38228f01edcb22aea1b0d2d46251 extends Template
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
            'view_user' => [$this, 'block_view_user'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "view_user_form.php.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "view_user_form.php.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Registered user data";
        
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
    public function block_view_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "view_user"));

        // line 9
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_user", ["user_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
        <h1>Registered user data</h1>
        <div>
            <label for=\"name\">Name</label>
            <input name=\"first_name\" id=\"first_name\" type=\"text\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "firstName", [], "any", false, false, false, 13), "html", null, true);
        yield "\">
        </div>

        <div>
            <label for=\"last_name\">Last name</label>
            <input name=\"last_name\" id=\"last_name\" type=\"text\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "lastName", [], "any", false, false, false, 18), "html", null, true);
        yield "\">
        </div>

        <div>
            <label for=\"middle_name\">Middle name</label>
            <input name=\"middle_name\" id=\"middle_name\" type=\"text\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "middleName", [], "any", false, false, false, 23), "html", null, true);
        yield "\">
        </div>

        <div>
            <label for=\"gender\">Gender</label>
            <input name=\"gender\" id=\"gender\" type=\"text\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "gender", [], "any", false, false, false, 28), "html", null, true);
        yield "\">
        </div>

        <div>
            <label for=\"birth_date\">Birth date</label>
            <input name=\"birth_date\" id=\"birth_date\" type=\"date\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "birthDate", [], "any", false, false, false, 33), "html", null, true);
        yield "\">
        </div>

        <div>
            <label for=\"email\">Email</label>
            <input name=\"email\" id=\"email\" type=\"text\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), "html", null, true);
        yield "\">
        </div>

        <div>
            <label for=\"phone\">Phone</label>
            <input name=\"phone\" id=\"phone\" type=\"text\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "phone", [], "any", false, false, false, 43), "html", null, true);
        yield "\">
        </div>

        <div>
            <label for=\"avatar_path\">Avatar</label>
            <input name=\"avatar_path\" id=\"avatar_path\" type=\"file\" accept=\"image/jpeg, image/jpg, image/gif\">
            <p>Current avatar: </p>
            <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "avatarPath", [], "any", false, false, false, 50), "html", null, true);
        yield "\" style=\"height: 100px; width: 100px\"></img>
        </div>

        <button type=\"submit\">Update</button>
        <form action=\"/delete_user?user_id=<?= htmlentities(\$user->getId()) ?>\">
            <button type=\"submit\">Delete user</button>
        </form>
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
        return "view_user_form.php.twig";
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
        return array (  160 => 50,  150 => 43,  142 => 38,  134 => 33,  126 => 28,  118 => 23,  110 => 18,  102 => 13,  94 => 9,  87 => 8,  76 => 5,  69 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Registered user data{% endblock %}
{% block head %}
    {{ parent() }}
{% endblock %}

{% block view_user %}
    <form action=\"{{ path(\"update_user\", {user_id: user.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">
        <h1>Registered user data</h1>
        <div>
            <label for=\"name\">Name</label>
            <input name=\"first_name\" id=\"first_name\" type=\"text\" value=\"{{ user.firstName}}\">
        </div>

        <div>
            <label for=\"last_name\">Last name</label>
            <input name=\"last_name\" id=\"last_name\" type=\"text\" value=\"{{ user.lastName}}\">
        </div>

        <div>
            <label for=\"middle_name\">Middle name</label>
            <input name=\"middle_name\" id=\"middle_name\" type=\"text\" value=\"{{ user.middleName}}\">
        </div>

        <div>
            <label for=\"gender\">Gender</label>
            <input name=\"gender\" id=\"gender\" type=\"text\" value=\"{{ user.gender}}\">
        </div>

        <div>
            <label for=\"birth_date\">Birth date</label>
            <input name=\"birth_date\" id=\"birth_date\" type=\"date\" value=\"{{ user.birthDate}}\">
        </div>

        <div>
            <label for=\"email\">Email</label>
            <input name=\"email\" id=\"email\" type=\"text\" value=\"{{ user.email}}\">
        </div>

        <div>
            <label for=\"phone\">Phone</label>
            <input name=\"phone\" id=\"phone\" type=\"text\" value=\"{{ user.phone}}\">
        </div>

        <div>
            <label for=\"avatar_path\">Avatar</label>
            <input name=\"avatar_path\" id=\"avatar_path\" type=\"file\" accept=\"image/jpeg, image/jpg, image/gif\">
            <p>Current avatar: </p>
            <img src=\"{{ user.avatarPath}}\" style=\"height: 100px; width: 100px\"></img>
        </div>

        <button type=\"submit\">Update</button>
        <form action=\"/delete_user?user_id=<?= htmlentities(\$user->getId()) ?>\">
            <button type=\"submit\">Delete user</button>
        </form>
    </form>
{% endblock %}
", "view_user_form.php.twig", "/usr/local/var/www/GitHub/PHP-2024/my_symfony_app/templates/view_user_form.php.twig");
    }
}
