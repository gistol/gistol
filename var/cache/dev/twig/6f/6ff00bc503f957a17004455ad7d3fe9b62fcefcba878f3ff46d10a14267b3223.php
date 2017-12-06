<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_63ef9381aeaba39b1424a86986a84ad5d417591a6c02e9e574e7019ebf3d4f57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af94d6374ed93b8ca8b0e178f40ca34a475d2c22b423ca34e2210174f78c29f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af94d6374ed93b8ca8b0e178f40ca34a475d2c22b423ca34e2210174f78c29f1->enter($__internal_af94d6374ed93b8ca8b0e178f40ca34a475d2c22b423ca34e2210174f78c29f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_24230b6bad49c418eb87001bb71c7ebf7cd2603af5f7a0b59cca391f52b372b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24230b6bad49c418eb87001bb71c7ebf7cd2603af5f7a0b59cca391f52b372b5->enter($__internal_24230b6bad49c418eb87001bb71c7ebf7cd2603af5f7a0b59cca391f52b372b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af94d6374ed93b8ca8b0e178f40ca34a475d2c22b423ca34e2210174f78c29f1->leave($__internal_af94d6374ed93b8ca8b0e178f40ca34a475d2c22b423ca34e2210174f78c29f1_prof);

        
        $__internal_24230b6bad49c418eb87001bb71c7ebf7cd2603af5f7a0b59cca391f52b372b5->leave($__internal_24230b6bad49c418eb87001bb71c7ebf7cd2603af5f7a0b59cca391f52b372b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08be624c7ab38ef5b118c28f7da80aa308a21eca25d24f90ab19fe51eac2b656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08be624c7ab38ef5b118c28f7da80aa308a21eca25d24f90ab19fe51eac2b656->enter($__internal_08be624c7ab38ef5b118c28f7da80aa308a21eca25d24f90ab19fe51eac2b656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a09e09ac4a72a54f44670c58133f93a709ba21c28fe9c6c1c3351b11ff831c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09e09ac4a72a54f44670c58133f93a709ba21c28fe9c6c1c3351b11ff831c7c->enter($__internal_a09e09ac4a72a54f44670c58133f93a709ba21c28fe9c6c1c3351b11ff831c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a09e09ac4a72a54f44670c58133f93a709ba21c28fe9c6c1c3351b11ff831c7c->leave($__internal_a09e09ac4a72a54f44670c58133f93a709ba21c28fe9c6c1c3351b11ff831c7c_prof);

        
        $__internal_08be624c7ab38ef5b118c28f7da80aa308a21eca25d24f90ab19fe51eac2b656->leave($__internal_08be624c7ab38ef5b118c28f7da80aa308a21eca25d24f90ab19fe51eac2b656_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c6168045dc7e2549fc72c78cc4258cbd420441fb913583c22e22eaaf06d0e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6168045dc7e2549fc72c78cc4258cbd420441fb913583c22e22eaaf06d0e8b->enter($__internal_3c6168045dc7e2549fc72c78cc4258cbd420441fb913583c22e22eaaf06d0e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d19730294822c582cb83cd2b3c163d013eef38943abd9c603dee8da50ce38c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19730294822c582cb83cd2b3c163d013eef38943abd9c603dee8da50ce38c2f->enter($__internal_d19730294822c582cb83cd2b3c163d013eef38943abd9c603dee8da50ce38c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d19730294822c582cb83cd2b3c163d013eef38943abd9c603dee8da50ce38c2f->leave($__internal_d19730294822c582cb83cd2b3c163d013eef38943abd9c603dee8da50ce38c2f_prof);

        
        $__internal_3c6168045dc7e2549fc72c78cc4258cbd420441fb913583c22e22eaaf06d0e8b->leave($__internal_3c6168045dc7e2549fc72c78cc4258cbd420441fb913583c22e22eaaf06d0e8b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_805ad0bf0e89106fe4bfa98f21218cc46c6aa7b51b1285732095e16bd8e5a8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_805ad0bf0e89106fe4bfa98f21218cc46c6aa7b51b1285732095e16bd8e5a8ad->enter($__internal_805ad0bf0e89106fe4bfa98f21218cc46c6aa7b51b1285732095e16bd8e5a8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df6e60a407599cc59c0d1839b8a756c582075ad8699f3071656d3154d90a1d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6e60a407599cc59c0d1839b8a756c582075ad8699f3071656d3154d90a1d9d->enter($__internal_df6e60a407599cc59c0d1839b8a756c582075ad8699f3071656d3154d90a1d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_df6e60a407599cc59c0d1839b8a756c582075ad8699f3071656d3154d90a1d9d->leave($__internal_df6e60a407599cc59c0d1839b8a756c582075ad8699f3071656d3154d90a1d9d_prof);

        
        $__internal_805ad0bf0e89106fe4bfa98f21218cc46c6aa7b51b1285732095e16bd8e5a8ad->leave($__internal_805ad0bf0e89106fe4bfa98f21218cc46c6aa7b51b1285732095e16bd8e5a8ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/t/torick/project.gistol.ru/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
