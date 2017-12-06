<?php

/* CoreShopAddressBundle:Collector:country.html.twig */
class __TwigTemplate_b45e3c3cb8ec6cf2a3de042073d0a8c5ac595ee3290318dbfc303f1d7fa8754e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "CoreShopAddressBundle:Collector:country.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed546ac47d4b667deabb10b09bed83996ae11129f19cf45d9c86107936385723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed546ac47d4b667deabb10b09bed83996ae11129f19cf45d9c86107936385723->enter($__internal_ed546ac47d4b667deabb10b09bed83996ae11129f19cf45d9c86107936385723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreShopAddressBundle:Collector:country.html.twig"));

        $__internal_6508b2fa79dbbce4ba49b4d77733c456262da6e7cce8261805072f6f545ab42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6508b2fa79dbbce4ba49b4d77733c456262da6e7cce8261805072f6f545ab42b->enter($__internal_6508b2fa79dbbce4ba49b4d77733c456262da6e7cce8261805072f6f545ab42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreShopAddressBundle:Collector:country.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed546ac47d4b667deabb10b09bed83996ae11129f19cf45d9c86107936385723->leave($__internal_ed546ac47d4b667deabb10b09bed83996ae11129f19cf45d9c86107936385723_prof);

        
        $__internal_6508b2fa79dbbce4ba49b4d77733c456262da6e7cce8261805072f6f545ab42b->leave($__internal_6508b2fa79dbbce4ba49b4d77733c456262da6e7cce8261805072f6f545ab42b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b22e4ba10ceafe9f2132a4dbc1e09beb4b415bb391be6890594ad760dd08f990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22e4ba10ceafe9f2132a4dbc1e09beb4b415bb391be6890594ad760dd08f990->enter($__internal_b22e4ba10ceafe9f2132a4dbc1e09beb4b415bb391be6890594ad760dd08f990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7d8e9eb1eae2620a88d0035b6b8d8c78553c074d6a9ddb807dc533dbc694ac9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8e9eb1eae2620a88d0035b6b8d8c78553c074d6a9ddb807dc533dbc694ac9e->enter($__internal_7d8e9eb1eae2620a88d0035b6b8d8c78553c074d6a9ddb807dc533dbc694ac9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "
    ";
        // line 5
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@CoreShopAddress/Collector/Icon/country.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "country", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "country", array(), "any", false, true), "name", array()), "Undefined")) : ("Undefined")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
    ";
        // line 10
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7d8e9eb1eae2620a88d0035b6b8d8c78553c074d6a9ddb807dc533dbc694ac9e->leave($__internal_7d8e9eb1eae2620a88d0035b6b8d8c78553c074d6a9ddb807dc533dbc694ac9e_prof);

        
        $__internal_b22e4ba10ceafe9f2132a4dbc1e09beb4b415bb391be6890594ad760dd08f990->leave($__internal_b22e4ba10ceafe9f2132a4dbc1e09beb4b415bb391be6890594ad760dd08f990_prof);

    }

    public function getTemplateName()
    {
        return "CoreShopAddressBundle:Collector:country.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  64 => 9,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}

    {% set icon %}
        {{ include('@CoreShopAddress/Collector/Icon/country.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.country.name|default('Undefined') }}</span>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "CoreShopAddressBundle:Collector:country.html.twig", "/home/t/torick/project.gistol.ru/vendor/coreshop/core-shop/src/CoreShop/Bundle/AddressBundle/Resources/views/Collector/country.html.twig");
    }
}
