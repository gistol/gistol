<?php

/* CoreShopCoreBundle:Collector:currency.html.twig */
class __TwigTemplate_415989862a6c364dcb3d685f2a0bc18a6879ae50edc10249e0f889eb6d2ecfa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "CoreShopCoreBundle:Collector:currency.html.twig", 1);
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
        $__internal_f80979b0bb6a9f72d4636e1740646463461c0a924b62d2f0e3ac74f5114138e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80979b0bb6a9f72d4636e1740646463461c0a924b62d2f0e3ac74f5114138e0->enter($__internal_f80979b0bb6a9f72d4636e1740646463461c0a924b62d2f0e3ac74f5114138e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreShopCoreBundle:Collector:currency.html.twig"));

        $__internal_58dc36e4eaf944cd8b1d1324c9277e24742d07900847e19135a468624654ce7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58dc36e4eaf944cd8b1d1324c9277e24742d07900847e19135a468624654ce7a->enter($__internal_58dc36e4eaf944cd8b1d1324c9277e24742d07900847e19135a468624654ce7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreShopCoreBundle:Collector:currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80979b0bb6a9f72d4636e1740646463461c0a924b62d2f0e3ac74f5114138e0->leave($__internal_f80979b0bb6a9f72d4636e1740646463461c0a924b62d2f0e3ac74f5114138e0_prof);

        
        $__internal_58dc36e4eaf944cd8b1d1324c9277e24742d07900847e19135a468624654ce7a->leave($__internal_58dc36e4eaf944cd8b1d1324c9277e24742d07900847e19135a468624654ce7a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b7af7827a2b7b5de5725656a5f89909b5521407d0ce0488c07bc04654d010700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7af7827a2b7b5de5725656a5f89909b5521407d0ce0488c07bc04654d010700->enter($__internal_b7af7827a2b7b5de5725656a5f89909b5521407d0ce0488c07bc04654d010700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e998d82e9e3c073e60eb4d59b21c4a4faa54299185f34cd3e721c8dd46eea57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e998d82e9e3c073e60eb4d59b21c4a4faa54299185f34cd3e721c8dd46eea57c->enter($__internal_e998d82e9e3c073e60eb4d59b21c4a4faa54299185f34cd3e721c8dd46eea57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["status_color"] = (((null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "currency", array()))) ? ("red") : (""));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        echo twig_include($this->env, $context, "@CoreShopCore/Collector/Icon/currency.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 8
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "currency", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "currency", array(), "any", false, true), "name", array()), "Undefined")) : ("Undefined")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Currencies</b>
            <span class=\"sf-toolbar-status ";
        // line 14
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->getSourceContext()); })()), "currencies", array()))) {
            echo "sf-toolbar-status-red";
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->getSourceContext()); })()), "currencies", array())), "html", null, true);
        echo "</span>
        </div>

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 17, $this->getSourceContext()); })()), "currencies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 18
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["currency"], "name", array()), "html", null, true);
            echo "</b>
                <span>(";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["currency"], "isocode", array()), "html", null, true);
            echo ")";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 20, $this->getSourceContext()); })()), "isCurrencyChangeSupported", array())) {
                echo " (<a href=\"?_currency_id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["currency"], "id", array()), "html", null, true);
                echo "\">change</a>)";
            }
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "
    ";
        // line 25
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false, "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new Twig_Error_Runtime('Variable "status_color" does not exist.', 25, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e998d82e9e3c073e60eb4d59b21c4a4faa54299185f34cd3e721c8dd46eea57c->leave($__internal_e998d82e9e3c073e60eb4d59b21c4a4faa54299185f34cd3e721c8dd46eea57c_prof);

        
        $__internal_b7af7827a2b7b5de5725656a5f89909b5521407d0ce0488c07bc04654d010700->leave($__internal_b7af7827a2b7b5de5725656a5f89909b5521407d0ce0488c07bc04654d010700_prof);

    }

    public function getTemplateName()
    {
        return "CoreShopCoreBundle:Collector:currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  115 => 24,  112 => 23,  97 => 20,  93 => 19,  90 => 18,  86 => 17,  76 => 14,  72 => 12,  70 => 11,  67 => 10,  62 => 8,  57 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set status_color = collector.currency is null ? 'red' : '' %}

    {% set icon %}
        {{ include('@CoreShopCore/Collector/Icon/currency.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.currency.name|default('Undefined') }}</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Currencies</b>
            <span class=\"sf-toolbar-status {% if collector.currencies is empty %}sf-toolbar-status-red{% endif %}\">{{ collector.currencies|length }}</span>
        </div>

        {% for currency in collector.currencies %}
            <div class=\"sf-toolbar-info-piece\">
                <b>{{ currency.name }}</b>
                <span>({{ currency.isocode }}){% if collector.isCurrencyChangeSupported %} (<a href=\"?_currency_id={{ currency.id }}\">change</a>){% endif %}</span>
            </div>
        {% endfor %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false, status: status_color }) }}
{% endblock %}
", "CoreShopCoreBundle:Collector:currency.html.twig", "/home/t/torick/project.gistol.ru/vendor/coreshop/core-shop/src/CoreShop/Bundle/CoreBundle/Resources/views/Collector/currency.html.twig");
    }
}
