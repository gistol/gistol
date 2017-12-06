<?php

/* CoreShopStoreBundle:Collector:store.html.twig */
class __TwigTemplate_5d9b7c9a26be8c9265b48fea2e981dc0d6678153b32300adb54ca7ade6be89c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "CoreShopStoreBundle:Collector:store.html.twig", 1);
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
        $__internal_bc4f6f46b4fd54eb56c47a10f2c18c93457226fe3651b30e8cab4ae9b1dc3bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4f6f46b4fd54eb56c47a10f2c18c93457226fe3651b30e8cab4ae9b1dc3bed->enter($__internal_bc4f6f46b4fd54eb56c47a10f2c18c93457226fe3651b30e8cab4ae9b1dc3bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreShopStoreBundle:Collector:store.html.twig"));

        $__internal_1e7f26d0cd34bb966a412a54236e2611f39d64734f1a3433ad29524de594c85d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7f26d0cd34bb966a412a54236e2611f39d64734f1a3433ad29524de594c85d->enter($__internal_1e7f26d0cd34bb966a412a54236e2611f39d64734f1a3433ad29524de594c85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreShopStoreBundle:Collector:store.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc4f6f46b4fd54eb56c47a10f2c18c93457226fe3651b30e8cab4ae9b1dc3bed->leave($__internal_bc4f6f46b4fd54eb56c47a10f2c18c93457226fe3651b30e8cab4ae9b1dc3bed_prof);

        
        $__internal_1e7f26d0cd34bb966a412a54236e2611f39d64734f1a3433ad29524de594c85d->leave($__internal_1e7f26d0cd34bb966a412a54236e2611f39d64734f1a3433ad29524de594c85d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf8a5e294b7f1291e69e728d82d92104284d3e94059d408080931a7623c33535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8a5e294b7f1291e69e728d82d92104284d3e94059d408080931a7623c33535->enter($__internal_bf8a5e294b7f1291e69e728d82d92104284d3e94059d408080931a7623c33535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6993957e3b27f760f4f2a3ec6df5ca2e2507caee6d261873651551c66da49178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6993957e3b27f760f4f2a3ec6df5ca2e2507caee6d261873651551c66da49178->enter($__internal_6993957e3b27f760f4f2a3ec6df5ca2e2507caee6d261873651551c66da49178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["status_color"] = (((null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "store", array()))) ? ("red") : (""));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        echo twig_include($this->env, $context, "@CoreShopStore/Collector/Icon/store.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 8
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "store", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "store", array(), "any", false, true), "name", array()), "Undefined")) : ("Undefined")), "html", null, true);
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
            <b>Stores</b>
            <span class=\"sf-toolbar-status ";
        // line 14
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->getSourceContext()); })()), "stores", array()))) {
            echo "sf-toolbar-status-red";
        }
        echo "\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->getSourceContext()); })()), "stores", array())), "html", null, true);
        echo "</span>
        </div>

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 17, $this->getSourceContext()); })()), "stores", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 18
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["store"], "name", array()), "html", null, true);
            echo "</b>
                <span>(";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["store"], "siteId", array()), "html", null, true);
            echo ")";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 20, $this->getSourceContext()); })()), "isStoreChangeSupported", array())) {
                echo " (<a href=\"?_store_id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["store"], "id", array()), "html", null, true);
                echo "\">change</a>)";
            }
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
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
        
        $__internal_6993957e3b27f760f4f2a3ec6df5ca2e2507caee6d261873651551c66da49178->leave($__internal_6993957e3b27f760f4f2a3ec6df5ca2e2507caee6d261873651551c66da49178_prof);

        
        $__internal_bf8a5e294b7f1291e69e728d82d92104284d3e94059d408080931a7623c33535->leave($__internal_bf8a5e294b7f1291e69e728d82d92104284d3e94059d408080931a7623c33535_prof);

    }

    public function getTemplateName()
    {
        return "CoreShopStoreBundle:Collector:store.html.twig";
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
    {% set status_color = collector.store is null ? 'red' : '' %}

    {% set icon %}
        {{ include('@CoreShopStore/Collector/Icon/store.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.store.name|default('Undefined') }}</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Stores</b>
            <span class=\"sf-toolbar-status {% if collector.stores is empty %}sf-toolbar-status-red{% endif %}\">{{ collector.stores|length }}</span>
        </div>

        {% for store in collector.stores %}
            <div class=\"sf-toolbar-info-piece\">
                <b>{{ store.name }}</b>
                <span>({{ store.siteId }}){% if collector.isStoreChangeSupported %} (<a href=\"?_store_id={{ store.id }}\">change</a>){% endif %}</span>
            </div>
        {% endfor %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false, status: status_color }) }}
{% endblock %}
", "CoreShopStoreBundle:Collector:store.html.twig", "/home/t/torick/project.gistol.ru/vendor/coreshop/core-shop/src/CoreShop/Bundle/StoreBundle/Resources/views/Collector/store.html.twig");
    }
}
