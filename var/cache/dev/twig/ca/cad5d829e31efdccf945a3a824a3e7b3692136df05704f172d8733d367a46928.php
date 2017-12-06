<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_00bf5cddd7e3804b7c9c4074e24364aa5457068ad92cba3c97ab2791257742ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_50ae83fecd65797e391424e07b5008b70388f942953b16b603818d1fca47b69d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ae83fecd65797e391424e07b5008b70388f942953b16b603818d1fca47b69d->enter($__internal_50ae83fecd65797e391424e07b5008b70388f942953b16b603818d1fca47b69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_16863af60baa7b21acbdd18bed36f397c39c8826d060aedaa03d9febb57c2dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16863af60baa7b21acbdd18bed36f397c39c8826d060aedaa03d9febb57c2dc9->enter($__internal_16863af60baa7b21acbdd18bed36f397c39c8826d060aedaa03d9febb57c2dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ae83fecd65797e391424e07b5008b70388f942953b16b603818d1fca47b69d->leave($__internal_50ae83fecd65797e391424e07b5008b70388f942953b16b603818d1fca47b69d_prof);

        
        $__internal_16863af60baa7b21acbdd18bed36f397c39c8826d060aedaa03d9febb57c2dc9->leave($__internal_16863af60baa7b21acbdd18bed36f397c39c8826d060aedaa03d9febb57c2dc9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e93bc70ddbcf006e5d55b2c3ddc255bad5516a4826f3e9d881637f682f06f35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93bc70ddbcf006e5d55b2c3ddc255bad5516a4826f3e9d881637f682f06f35a->enter($__internal_e93bc70ddbcf006e5d55b2c3ddc255bad5516a4826f3e9d881637f682f06f35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_341f9aafed258ee43392c2478b421273db467fc0677b2cc4ee6085344e2b507d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341f9aafed258ee43392c2478b421273db467fc0677b2cc4ee6085344e2b507d->enter($__internal_341f9aafed258ee43392c2478b421273db467fc0677b2cc4ee6085344e2b507d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_341f9aafed258ee43392c2478b421273db467fc0677b2cc4ee6085344e2b507d->leave($__internal_341f9aafed258ee43392c2478b421273db467fc0677b2cc4ee6085344e2b507d_prof);

        
        $__internal_e93bc70ddbcf006e5d55b2c3ddc255bad5516a4826f3e9d881637f682f06f35a->leave($__internal_e93bc70ddbcf006e5d55b2c3ddc255bad5516a4826f3e9d881637f682f06f35a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_133a553d684378b5c20721ba550fa1e55ef320c8d55754db4cb13b0ac53ddbb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133a553d684378b5c20721ba550fa1e55ef320c8d55754db4cb13b0ac53ddbb7->enter($__internal_133a553d684378b5c20721ba550fa1e55ef320c8d55754db4cb13b0ac53ddbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d7865517952a9e32ce39906ac9fd2752047705f5e7e980d7c05918f9a2e70f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7865517952a9e32ce39906ac9fd2752047705f5e7e980d7c05918f9a2e70f6->enter($__internal_5d7865517952a9e32ce39906ac9fd2752047705f5e7e980d7c05918f9a2e70f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5d7865517952a9e32ce39906ac9fd2752047705f5e7e980d7c05918f9a2e70f6->leave($__internal_5d7865517952a9e32ce39906ac9fd2752047705f5e7e980d7c05918f9a2e70f6_prof);

        
        $__internal_133a553d684378b5c20721ba550fa1e55ef320c8d55754db4cb13b0ac53ddbb7->leave($__internal_133a553d684378b5c20721ba550fa1e55ef320c8d55754db4cb13b0ac53ddbb7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd32c7fa0be2a3d77712947712fcca20f2b4d1cf6c41a817e5465241956eff0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd32c7fa0be2a3d77712947712fcca20f2b4d1cf6c41a817e5465241956eff0d->enter($__internal_bd32c7fa0be2a3d77712947712fcca20f2b4d1cf6c41a817e5465241956eff0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_676c64f67e4d02046ae1f6830f090cc960a502070387445723ea99e72e8fe26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676c64f67e4d02046ae1f6830f090cc960a502070387445723ea99e72e8fe26f->enter($__internal_676c64f67e4d02046ae1f6830f090cc960a502070387445723ea99e72e8fe26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_676c64f67e4d02046ae1f6830f090cc960a502070387445723ea99e72e8fe26f->leave($__internal_676c64f67e4d02046ae1f6830f090cc960a502070387445723ea99e72e8fe26f_prof);

        
        $__internal_bd32c7fa0be2a3d77712947712fcca20f2b4d1cf6c41a817e5465241956eff0d->leave($__internal_bd32c7fa0be2a3d77712947712fcca20f2b4d1cf6c41a817e5465241956eff0d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/t/torick/project.gistol.ru/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
