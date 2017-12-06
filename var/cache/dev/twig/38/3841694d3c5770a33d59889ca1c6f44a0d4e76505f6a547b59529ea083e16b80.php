<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6568a07efec4d89eb15bbcd23c9762538fc099f001e0d3771188b73eb14d3b7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_f09748cf35dd1a5c876713f5aeb65a4495a02da9febb09fb2d3314c428090f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09748cf35dd1a5c876713f5aeb65a4495a02da9febb09fb2d3314c428090f52->enter($__internal_f09748cf35dd1a5c876713f5aeb65a4495a02da9febb09fb2d3314c428090f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7f2e3d440d3d86aedffa3a1b7bd4845624797d20fd0197fd3a3373b558befbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2e3d440d3d86aedffa3a1b7bd4845624797d20fd0197fd3a3373b558befbe0->enter($__internal_7f2e3d440d3d86aedffa3a1b7bd4845624797d20fd0197fd3a3373b558befbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f09748cf35dd1a5c876713f5aeb65a4495a02da9febb09fb2d3314c428090f52->leave($__internal_f09748cf35dd1a5c876713f5aeb65a4495a02da9febb09fb2d3314c428090f52_prof);

        
        $__internal_7f2e3d440d3d86aedffa3a1b7bd4845624797d20fd0197fd3a3373b558befbe0->leave($__internal_7f2e3d440d3d86aedffa3a1b7bd4845624797d20fd0197fd3a3373b558befbe0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c80c7358aeb74d98e4f43e19c4a8b4467aa5b39d65508724f28592ca1e059f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80c7358aeb74d98e4f43e19c4a8b4467aa5b39d65508724f28592ca1e059f08->enter($__internal_c80c7358aeb74d98e4f43e19c4a8b4467aa5b39d65508724f28592ca1e059f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_01d2bb42c0742ce95f4bc2c72bb0806fe674d7ba221c6f9caf512fa9d1131c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d2bb42c0742ce95f4bc2c72bb0806fe674d7ba221c6f9caf512fa9d1131c5d->enter($__internal_01d2bb42c0742ce95f4bc2c72bb0806fe674d7ba221c6f9caf512fa9d1131c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_01d2bb42c0742ce95f4bc2c72bb0806fe674d7ba221c6f9caf512fa9d1131c5d->leave($__internal_01d2bb42c0742ce95f4bc2c72bb0806fe674d7ba221c6f9caf512fa9d1131c5d_prof);

        
        $__internal_c80c7358aeb74d98e4f43e19c4a8b4467aa5b39d65508724f28592ca1e059f08->leave($__internal_c80c7358aeb74d98e4f43e19c4a8b4467aa5b39d65508724f28592ca1e059f08_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53a33e0388d79649dbd5bd07b2ca917d432a1f2281e1eb599acfffa281ba9c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a33e0388d79649dbd5bd07b2ca917d432a1f2281e1eb599acfffa281ba9c1c->enter($__internal_53a33e0388d79649dbd5bd07b2ca917d432a1f2281e1eb599acfffa281ba9c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_76abe9e8de2832ca06f8482c15ee284de62b5c5b7d23c863310fa0180eb31f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76abe9e8de2832ca06f8482c15ee284de62b5c5b7d23c863310fa0180eb31f70->enter($__internal_76abe9e8de2832ca06f8482c15ee284de62b5c5b7d23c863310fa0180eb31f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_76abe9e8de2832ca06f8482c15ee284de62b5c5b7d23c863310fa0180eb31f70->leave($__internal_76abe9e8de2832ca06f8482c15ee284de62b5c5b7d23c863310fa0180eb31f70_prof);

        
        $__internal_53a33e0388d79649dbd5bd07b2ca917d432a1f2281e1eb599acfffa281ba9c1c->leave($__internal_53a33e0388d79649dbd5bd07b2ca917d432a1f2281e1eb599acfffa281ba9c1c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_468b0fc2687df8062d937e712abb28832fea1fd4e138c337f404d2194f52a3d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468b0fc2687df8062d937e712abb28832fea1fd4e138c337f404d2194f52a3d3->enter($__internal_468b0fc2687df8062d937e712abb28832fea1fd4e138c337f404d2194f52a3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_87b382b9b17d1026936886cb9268427ab899a5b98813f6d801def8b5096134b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b382b9b17d1026936886cb9268427ab899a5b98813f6d801def8b5096134b8->enter($__internal_87b382b9b17d1026936886cb9268427ab899a5b98813f6d801def8b5096134b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_87b382b9b17d1026936886cb9268427ab899a5b98813f6d801def8b5096134b8->leave($__internal_87b382b9b17d1026936886cb9268427ab899a5b98813f6d801def8b5096134b8_prof);

        
        $__internal_468b0fc2687df8062d937e712abb28832fea1fd4e138c337f404d2194f52a3d3->leave($__internal_468b0fc2687df8062d937e712abb28832fea1fd4e138c337f404d2194f52a3d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/t/torick/project.gistol.ru/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
