<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4a322dad869d2837da48eebfb9ad0e48bd859999f9fa3983be9426ee2cffdbf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_4fdfa0976012eab2dcff237198983b2225307521ed3a24dc195832a0ac52bb84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fdfa0976012eab2dcff237198983b2225307521ed3a24dc195832a0ac52bb84->enter($__internal_4fdfa0976012eab2dcff237198983b2225307521ed3a24dc195832a0ac52bb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5e7a1862519b20739d93bf4fa1bb4f80485d9b3ee4ef4d17ca14924494cc3ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7a1862519b20739d93bf4fa1bb4f80485d9b3ee4ef4d17ca14924494cc3ad7->enter($__internal_5e7a1862519b20739d93bf4fa1bb4f80485d9b3ee4ef4d17ca14924494cc3ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fdfa0976012eab2dcff237198983b2225307521ed3a24dc195832a0ac52bb84->leave($__internal_4fdfa0976012eab2dcff237198983b2225307521ed3a24dc195832a0ac52bb84_prof);

        
        $__internal_5e7a1862519b20739d93bf4fa1bb4f80485d9b3ee4ef4d17ca14924494cc3ad7->leave($__internal_5e7a1862519b20739d93bf4fa1bb4f80485d9b3ee4ef4d17ca14924494cc3ad7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1486ab2a4ed97c57b2d1b624a818a9481088964c05d79cff9532a37095f99fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1486ab2a4ed97c57b2d1b624a818a9481088964c05d79cff9532a37095f99fdc->enter($__internal_1486ab2a4ed97c57b2d1b624a818a9481088964c05d79cff9532a37095f99fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_891cb191d4a748f4c5d7f1ef557c3d11f022ba6267a9142805fd289451e50a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891cb191d4a748f4c5d7f1ef557c3d11f022ba6267a9142805fd289451e50a05->enter($__internal_891cb191d4a748f4c5d7f1ef557c3d11f022ba6267a9142805fd289451e50a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_891cb191d4a748f4c5d7f1ef557c3d11f022ba6267a9142805fd289451e50a05->leave($__internal_891cb191d4a748f4c5d7f1ef557c3d11f022ba6267a9142805fd289451e50a05_prof);

        
        $__internal_1486ab2a4ed97c57b2d1b624a818a9481088964c05d79cff9532a37095f99fdc->leave($__internal_1486ab2a4ed97c57b2d1b624a818a9481088964c05d79cff9532a37095f99fdc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/t/torick/project.gistol.ru/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
