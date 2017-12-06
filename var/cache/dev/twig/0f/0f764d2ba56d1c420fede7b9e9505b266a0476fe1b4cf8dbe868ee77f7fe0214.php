<?php

/* PayumBundle:Profiler:payum.html.twig */
class __TwigTemplate_fdde7afcea604c380eb94a3ab1323b478537319167d652053a16f7ace4cca3e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "PayumBundle:Profiler:payum.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b93e86d7356b0db1d4de1e8fc5048a27bfe530aeda9e52284dc6304f4fbf2bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93e86d7356b0db1d4de1e8fc5048a27bfe530aeda9e52284dc6304f4fbf2bfc->enter($__internal_b93e86d7356b0db1d4de1e8fc5048a27bfe530aeda9e52284dc6304f4fbf2bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $__internal_be0a154e5fe421ff0a30488a8881e064b94b1bbba2e7a90a16532e706dd18495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0a154e5fe421ff0a30488a8881e064b94b1bbba2e7a90a16532e706dd18495->enter($__internal_be0a154e5fe421ff0a30488a8881e064b94b1bbba2e7a90a16532e706dd18495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b93e86d7356b0db1d4de1e8fc5048a27bfe530aeda9e52284dc6304f4fbf2bfc->leave($__internal_b93e86d7356b0db1d4de1e8fc5048a27bfe530aeda9e52284dc6304f4fbf2bfc_prof);

        
        $__internal_be0a154e5fe421ff0a30488a8881e064b94b1bbba2e7a90a16532e706dd18495->leave($__internal_be0a154e5fe421ff0a30488a8881e064b94b1bbba2e7a90a16532e706dd18495_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a191855c79edc9168f21e0b69b4f1664c6e4e91f715bb97d24619aa801736a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a191855c79edc9168f21e0b69b4f1664c6e4e91f715bb97d24619aa801736a7->enter($__internal_0a191855c79edc9168f21e0b69b4f1664c6e4e91f715bb97d24619aa801736a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_342fa45115f846059a7b0f991fc95d4412891559dec03657f74f1405ce2dcfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342fa45115f846059a7b0f991fc95d4412891559dec03657f74f1405ce2dcfb0->enter($__internal_342fa45115f846059a7b0f991fc95d4412891559dec03657f74f1405ce2dcfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <span class=\"sf-toolbar-status\">Payum</span>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-piece\">
            ";
        // line 11
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
        echo "
";
        
        $__internal_342fa45115f846059a7b0f991fc95d4412891559dec03657f74f1405ce2dcfb0->leave($__internal_342fa45115f846059a7b0f991fc95d4412891559dec03657f74f1405ce2dcfb0_prof);

        
        $__internal_0a191855c79edc9168f21e0b69b4f1664c6e4e91f715bb97d24619aa801736a7->leave($__internal_0a191855c79edc9168f21e0b69b4f1664c6e4e91f715bb97d24619aa801736a7_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61c602c94d1eaba90cb2c866a593debbce7aa3f3fd6916c6cb84cbebc449ba1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c602c94d1eaba90cb2c866a593debbce7aa3f3fd6916c6cb84cbebc449ba1c->enter($__internal_61c602c94d1eaba90cb2c866a593debbce7aa3f3fd6916c6cb84cbebc449ba1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bf97de37719233435110132c051fcd7dbec6866c64c2351a1bba6fe4fdcb7e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf97de37719233435110132c051fcd7dbec6866c64c2351a1bba6fe4fdcb7e92->enter($__internal_bf97de37719233435110132c051fcd7dbec6866c64c2351a1bba6fe4fdcb7e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "    ";
        // line 19
        echo "    <span class=\"label\">
        <strong>Payum</strong>
    </span>
";
        
        $__internal_bf97de37719233435110132c051fcd7dbec6866c64c2351a1bba6fe4fdcb7e92->leave($__internal_bf97de37719233435110132c051fcd7dbec6866c64c2351a1bba6fe4fdcb7e92_prof);

        
        $__internal_61c602c94d1eaba90cb2c866a593debbce7aa3f3fd6916c6cb84cbebc449ba1c->leave($__internal_61c602c94d1eaba90cb2c866a593debbce7aa3f3fd6916c6cb84cbebc449ba1c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b68397c92ecf46d6d9f0ff060745e02aac87dec6f407988e2390ef1982a4a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b68397c92ecf46d6d9f0ff060745e02aac87dec6f407988e2390ef1982a4a15->enter($__internal_3b68397c92ecf46d6d9f0ff060745e02aac87dec6f407988e2390ef1982a4a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_782fb86584c5ce10dfc0cc3d171ffcfeab96f45de2adfaaf4d45cbeb35c3d8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782fb86584c5ce10dfc0cc3d171ffcfeab96f45de2adfaaf4d45cbeb35c3d8b2->enter($__internal_782fb86584c5ce10dfc0cc3d171ffcfeab96f45de2adfaaf4d45cbeb35c3d8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Gateway execution graph</h2>

    <pre>";
        // line 27
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "dump", array(), "method");
        echo "</pre>
";
        
        $__internal_782fb86584c5ce10dfc0cc3d171ffcfeab96f45de2adfaaf4d45cbeb35c3d8b2->leave($__internal_782fb86584c5ce10dfc0cc3d171ffcfeab96f45de2adfaaf4d45cbeb35c3d8b2_prof);

        
        $__internal_3b68397c92ecf46d6d9f0ff060745e02aac87dec6f407988e2390ef1982a4a15->leave($__internal_3b68397c92ecf46d6d9f0ff060745e02aac87dec6f407988e2390ef1982a4a15_prof);

    }

    public function getTemplateName()
    {
        return "PayumBundle:Profiler:payum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 27,  115 => 25,  106 => 24,  93 => 19,  91 => 18,  82 => 17,  70 => 14,  67 => 13,  63 => 11,  60 => 9,  58 => 8,  55 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <span class=\"sf-toolbar-status\">Payum</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            {# ... #}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label\">
        <strong>Payum</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Gateway execution graph</h2>

    <pre>{{ collector.dump()|raw }}</pre>
{% endblock %}", "PayumBundle:Profiler:payum.html.twig", "/home/t/torick/project.gistol.ru/vendor/payum/payum-bundle/Resources/views/Profiler/payum.html.twig");
    }
}
