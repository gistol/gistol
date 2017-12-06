<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_bf40a8a032ca33458ad4175c815626e5cd40e3abca76bc7122bb1ce5f46e04a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c239829d4d2b8f2f0d632e8a0408bf11b9dab4390bf62e3252353a154c46d746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c239829d4d2b8f2f0d632e8a0408bf11b9dab4390bf62e3252353a154c46d746->enter($__internal_c239829d4d2b8f2f0d632e8a0408bf11b9dab4390bf62e3252353a154c46d746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b5d6c1c254f9518eb974473d544125931cadcb8019cc722242251d8b18a1819a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d6c1c254f9518eb974473d544125931cadcb8019cc722242251d8b18a1819a->enter($__internal_b5d6c1c254f9518eb974473d544125931cadcb8019cc722242251d8b18a1819a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c239829d4d2b8f2f0d632e8a0408bf11b9dab4390bf62e3252353a154c46d746->leave($__internal_c239829d4d2b8f2f0d632e8a0408bf11b9dab4390bf62e3252353a154c46d746_prof);

        
        $__internal_b5d6c1c254f9518eb974473d544125931cadcb8019cc722242251d8b18a1819a->leave($__internal_b5d6c1c254f9518eb974473d544125931cadcb8019cc722242251d8b18a1819a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8e3e874f25dff1d541f47b01284868abb14a556f3651ff7fa50ab106c932b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e3e874f25dff1d541f47b01284868abb14a556f3651ff7fa50ab106c932b0f->enter($__internal_a8e3e874f25dff1d541f47b01284868abb14a556f3651ff7fa50ab106c932b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c4be5450f6994a519f5ebeca64e74bbf8b1dc36d35281f997e687719c19632a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4be5450f6994a519f5ebeca64e74bbf8b1dc36d35281f997e687719c19632a->enter($__internal_5c4be5450f6994a519f5ebeca64e74bbf8b1dc36d35281f997e687719c19632a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5c4be5450f6994a519f5ebeca64e74bbf8b1dc36d35281f997e687719c19632a->leave($__internal_5c4be5450f6994a519f5ebeca64e74bbf8b1dc36d35281f997e687719c19632a_prof);

        
        $__internal_a8e3e874f25dff1d541f47b01284868abb14a556f3651ff7fa50ab106c932b0f->leave($__internal_a8e3e874f25dff1d541f47b01284868abb14a556f3651ff7fa50ab106c932b0f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9070b081508ce13b45b78f1f7fa1331ea91a53841577deb4363369e2724f80ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9070b081508ce13b45b78f1f7fa1331ea91a53841577deb4363369e2724f80ea->enter($__internal_9070b081508ce13b45b78f1f7fa1331ea91a53841577deb4363369e2724f80ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f4c8b6eba4383da2ff3dbdd9f8ea5a4699bad0db0fafc0b2a8707fe5022cba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4c8b6eba4383da2ff3dbdd9f8ea5a4699bad0db0fafc0b2a8707fe5022cba0->enter($__internal_2f4c8b6eba4383da2ff3dbdd9f8ea5a4699bad0db0fafc0b2a8707fe5022cba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2f4c8b6eba4383da2ff3dbdd9f8ea5a4699bad0db0fafc0b2a8707fe5022cba0->leave($__internal_2f4c8b6eba4383da2ff3dbdd9f8ea5a4699bad0db0fafc0b2a8707fe5022cba0_prof);

        
        $__internal_9070b081508ce13b45b78f1f7fa1331ea91a53841577deb4363369e2724f80ea->leave($__internal_9070b081508ce13b45b78f1f7fa1331ea91a53841577deb4363369e2724f80ea_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f6aa71e8321d6ae7799aaeeb218ad608060959debdb0fb75fb60136bcdbb6fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6aa71e8321d6ae7799aaeeb218ad608060959debdb0fb75fb60136bcdbb6fa->enter($__internal_0f6aa71e8321d6ae7799aaeeb218ad608060959debdb0fb75fb60136bcdbb6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3380e90df902a6f9c4928e4c5a31257b8de7ae0895f5289d97629dd47809e1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3380e90df902a6f9c4928e4c5a31257b8de7ae0895f5289d97629dd47809e1b2->enter($__internal_3380e90df902a6f9c4928e4c5a31257b8de7ae0895f5289d97629dd47809e1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3380e90df902a6f9c4928e4c5a31257b8de7ae0895f5289d97629dd47809e1b2->leave($__internal_3380e90df902a6f9c4928e4c5a31257b8de7ae0895f5289d97629dd47809e1b2_prof);

        
        $__internal_0f6aa71e8321d6ae7799aaeeb218ad608060959debdb0fb75fb60136bcdbb6fa->leave($__internal_0f6aa71e8321d6ae7799aaeeb218ad608060959debdb0fb75fb60136bcdbb6fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/t/torick/project.gistol.ru/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
