<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
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
        $__internal_7ea5aff2e35c5fda96ebba5bed1886de73e69f5ace472be7b457831835efbaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea5aff2e35c5fda96ebba5bed1886de73e69f5ace472be7b457831835efbaa9->enter($__internal_7ea5aff2e35c5fda96ebba5bed1886de73e69f5ace472be7b457831835efbaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_95f8fab44313d25b3fc263cef888f39e9dbc837daf770edc73967d851a616bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f8fab44313d25b3fc263cef888f39e9dbc837daf770edc73967d851a616bb8->enter($__internal_95f8fab44313d25b3fc263cef888f39e9dbc837daf770edc73967d851a616bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ea5aff2e35c5fda96ebba5bed1886de73e69f5ace472be7b457831835efbaa9->leave($__internal_7ea5aff2e35c5fda96ebba5bed1886de73e69f5ace472be7b457831835efbaa9_prof);

        
        $__internal_95f8fab44313d25b3fc263cef888f39e9dbc837daf770edc73967d851a616bb8->leave($__internal_95f8fab44313d25b3fc263cef888f39e9dbc837daf770edc73967d851a616bb8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ad905b2ca165271693a6570d4740f973de4210fae1a8d012e6ecc733f645718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad905b2ca165271693a6570d4740f973de4210fae1a8d012e6ecc733f645718->enter($__internal_9ad905b2ca165271693a6570d4740f973de4210fae1a8d012e6ecc733f645718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e243144ed269707a1ac8b0eae1df1ebb2b6e3928f8d3650fbab09c75817402cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e243144ed269707a1ac8b0eae1df1ebb2b6e3928f8d3650fbab09c75817402cf->enter($__internal_e243144ed269707a1ac8b0eae1df1ebb2b6e3928f8d3650fbab09c75817402cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e243144ed269707a1ac8b0eae1df1ebb2b6e3928f8d3650fbab09c75817402cf->leave($__internal_e243144ed269707a1ac8b0eae1df1ebb2b6e3928f8d3650fbab09c75817402cf_prof);

        
        $__internal_9ad905b2ca165271693a6570d4740f973de4210fae1a8d012e6ecc733f645718->leave($__internal_9ad905b2ca165271693a6570d4740f973de4210fae1a8d012e6ecc733f645718_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bec9246d13eb5e2bb87fed2ed59a8972b43f9f365a9b9fee6c66f9d2e399f418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec9246d13eb5e2bb87fed2ed59a8972b43f9f365a9b9fee6c66f9d2e399f418->enter($__internal_bec9246d13eb5e2bb87fed2ed59a8972b43f9f365a9b9fee6c66f9d2e399f418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_870b82aa93253745491d67d2fdabeace7c2a3985ee680219806367f951085a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870b82aa93253745491d67d2fdabeace7c2a3985ee680219806367f951085a01->enter($__internal_870b82aa93253745491d67d2fdabeace7c2a3985ee680219806367f951085a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_870b82aa93253745491d67d2fdabeace7c2a3985ee680219806367f951085a01->leave($__internal_870b82aa93253745491d67d2fdabeace7c2a3985ee680219806367f951085a01_prof);

        
        $__internal_bec9246d13eb5e2bb87fed2ed59a8972b43f9f365a9b9fee6c66f9d2e399f418->leave($__internal_bec9246d13eb5e2bb87fed2ed59a8972b43f9f365a9b9fee6c66f9d2e399f418_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35671fcd8b3cf1ee192d2b688ef13525e76f9f4b8d819fec2035b1f14c4599e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35671fcd8b3cf1ee192d2b688ef13525e76f9f4b8d819fec2035b1f14c4599e6->enter($__internal_35671fcd8b3cf1ee192d2b688ef13525e76f9f4b8d819fec2035b1f14c4599e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43eab33dfe6c584cdb7e900fc7a60eaa660578784356b018ccc61fb5ce667db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43eab33dfe6c584cdb7e900fc7a60eaa660578784356b018ccc61fb5ce667db4->enter($__internal_43eab33dfe6c584cdb7e900fc7a60eaa660578784356b018ccc61fb5ce667db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_43eab33dfe6c584cdb7e900fc7a60eaa660578784356b018ccc61fb5ce667db4->leave($__internal_43eab33dfe6c584cdb7e900fc7a60eaa660578784356b018ccc61fb5ce667db4_prof);

        
        $__internal_35671fcd8b3cf1ee192d2b688ef13525e76f9f4b8d819fec2035b1f14c4599e6->leave($__internal_35671fcd8b3cf1ee192d2b688ef13525e76f9f4b8d819fec2035b1f14c4599e6_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Test_Goutte_Php/test_goutte_php/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
