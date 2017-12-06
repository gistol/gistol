<?php

/* PimcoreCoreBundle:Profiler:data_collector.html.twig */
class __TwigTemplate_784187bf8459375d573feec5549b37f396b355de6fab47d8cefe46714edfcacc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "PimcoreCoreBundle:Profiler:data_collector.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d90bcb1dfca882502e84ee3d27b8c7e16ac4220984a10a391e238e21be8ed63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90bcb1dfca882502e84ee3d27b8c7e16ac4220984a10a391e238e21be8ed63e->enter($__internal_d90bcb1dfca882502e84ee3d27b8c7e16ac4220984a10a391e238e21be8ed63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PimcoreCoreBundle:Profiler:data_collector.html.twig"));

        $__internal_b90261a69e241b77cc21c01a858bd3b27e0cf159953e1a5644ef511927aa1c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90261a69e241b77cc21c01a858bd3b27e0cf159953e1a5644ef511927aa1c83->enter($__internal_b90261a69e241b77cc21c01a858bd3b27e0cf159953e1a5644ef511927aa1c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PimcoreCoreBundle:Profiler:data_collector.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d90bcb1dfca882502e84ee3d27b8c7e16ac4220984a10a391e238e21be8ed63e->leave($__internal_d90bcb1dfca882502e84ee3d27b8c7e16ac4220984a10a391e238e21be8ed63e_prof);

        
        $__internal_b90261a69e241b77cc21c01a858bd3b27e0cf159953e1a5644ef511927aa1c83->leave($__internal_b90261a69e241b77cc21c01a858bd3b27e0cf159953e1a5644ef511927aa1c83_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db9d9acdb8fef06ef2844a048ac6a7e95b12d0c9383b4c936c4833caaf50df66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9d9acdb8fef06ef2844a048ac6a7e95b12d0c9383b4c936c4833caaf50df66->enter($__internal_db9d9acdb8fef06ef2844a048ac6a7e95b12d0c9383b4c936c4833caaf50df66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5220b15bc7f203a206908f838cac0e44d721b6f9ba1260a510e435d0de15b911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5220b15bc7f203a206908f838cac0e44d721b6f9ba1260a510e435d0de15b911->enter($__internal_5220b15bc7f203a206908f838cac0e44d721b6f9ba1260a510e435d0de15b911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        // line 6
        echo "        <div style=\"padding-top: 3px\">
            ";
        // line 7
        echo twig_include($this->env, $context, "PimcoreCoreBundle:Profiler:logo.svg.twig");
        echo "
        </div>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        ";
        // line 14
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Context</b>
            <span>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "context", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "
    ";
        // line 22
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5220b15bc7f203a206908f838cac0e44d721b6f9ba1260a510e435d0de15b911->leave($__internal_5220b15bc7f203a206908f838cac0e44d721b6f9ba1260a510e435d0de15b911_prof);

        
        $__internal_db9d9acdb8fef06ef2844a048ac6a7e95b12d0c9383b4c936c4833caaf50df66->leave($__internal_db9d9acdb8fef06ef2844a048ac6a7e95b12d0c9383b4c936c4833caaf50df66_prof);

    }

    public function getTemplateName()
    {
        return "PimcoreCoreBundle:Profiler:data_collector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  80 => 19,  74 => 16,  70 => 14,  68 => 12,  66 => 11,  63 => 10,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {# this is the content displayed as a panel in the toolbar #}
        <div style=\"padding-top: 3px\">
            {{ include(\"PimcoreCoreBundle:Profiler:logo.svg.twig\") }}
        </div>
    {% endset %}

    {% set text %}
        {# this is the content displayed when hovering the mouse over
           the toolbar panel #}
        <div class=\"sf-toolbar-info-piece\">
            <b>Context</b>
            <span>{{ collector.context }}</span>
        </div>
    {% endset %}

    {# the 'link' value set to 'false' means that this panel doesn't
       show a section in the web profiler #}
    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "PimcoreCoreBundle:Profiler:data_collector.html.twig", "/home/t/torick/project.gistol.ru/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/views/Profiler/data_collector.html.twig");
    }
}
