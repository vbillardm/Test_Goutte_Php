<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
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
        $__internal_c896a67b3bd77e11d158f1f19ccfcd027c5a7bfa55d33a66fc0f6627a617b032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c896a67b3bd77e11d158f1f19ccfcd027c5a7bfa55d33a66fc0f6627a617b032->enter($__internal_c896a67b3bd77e11d158f1f19ccfcd027c5a7bfa55d33a66fc0f6627a617b032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7514853b0f636044339e77bab73288552a33e04b6f8d46622858809facd8a361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7514853b0f636044339e77bab73288552a33e04b6f8d46622858809facd8a361->enter($__internal_7514853b0f636044339e77bab73288552a33e04b6f8d46622858809facd8a361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c896a67b3bd77e11d158f1f19ccfcd027c5a7bfa55d33a66fc0f6627a617b032->leave($__internal_c896a67b3bd77e11d158f1f19ccfcd027c5a7bfa55d33a66fc0f6627a617b032_prof);

        
        $__internal_7514853b0f636044339e77bab73288552a33e04b6f8d46622858809facd8a361->leave($__internal_7514853b0f636044339e77bab73288552a33e04b6f8d46622858809facd8a361_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af9c808c8b0a2b7702d5f6eb2dbe7e2a1fa48a8ec5bb704b0eed4e0507a7dc71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9c808c8b0a2b7702d5f6eb2dbe7e2a1fa48a8ec5bb704b0eed4e0507a7dc71->enter($__internal_af9c808c8b0a2b7702d5f6eb2dbe7e2a1fa48a8ec5bb704b0eed4e0507a7dc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_181774caf4b52b374901fe126ebc0a8c86d03d3d92d95e854b37d0881e7eac5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181774caf4b52b374901fe126ebc0a8c86d03d3d92d95e854b37d0881e7eac5c->enter($__internal_181774caf4b52b374901fe126ebc0a8c86d03d3d92d95e854b37d0881e7eac5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_181774caf4b52b374901fe126ebc0a8c86d03d3d92d95e854b37d0881e7eac5c->leave($__internal_181774caf4b52b374901fe126ebc0a8c86d03d3d92d95e854b37d0881e7eac5c_prof);

        
        $__internal_af9c808c8b0a2b7702d5f6eb2dbe7e2a1fa48a8ec5bb704b0eed4e0507a7dc71->leave($__internal_af9c808c8b0a2b7702d5f6eb2dbe7e2a1fa48a8ec5bb704b0eed4e0507a7dc71_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa43a2abe257f57d2f47770a2254d0ad6c6ed2f798b6b3c49adafe006da45ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa43a2abe257f57d2f47770a2254d0ad6c6ed2f798b6b3c49adafe006da45ffc->enter($__internal_aa43a2abe257f57d2f47770a2254d0ad6c6ed2f798b6b3c49adafe006da45ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1d93c7b3d1f6a5822af3b4fc3f3a1a84508f1565cef031e12d104dc77e2a0c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d93c7b3d1f6a5822af3b4fc3f3a1a84508f1565cef031e12d104dc77e2a0c06->enter($__internal_1d93c7b3d1f6a5822af3b4fc3f3a1a84508f1565cef031e12d104dc77e2a0c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d93c7b3d1f6a5822af3b4fc3f3a1a84508f1565cef031e12d104dc77e2a0c06->leave($__internal_1d93c7b3d1f6a5822af3b4fc3f3a1a84508f1565cef031e12d104dc77e2a0c06_prof);

        
        $__internal_aa43a2abe257f57d2f47770a2254d0ad6c6ed2f798b6b3c49adafe006da45ffc->leave($__internal_aa43a2abe257f57d2f47770a2254d0ad6c6ed2f798b6b3c49adafe006da45ffc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87ddb910cb3f8408f09fbd761f948acdf9637076bb3ef40b6e6361cfca1bbcc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ddb910cb3f8408f09fbd761f948acdf9637076bb3ef40b6e6361cfca1bbcc7->enter($__internal_87ddb910cb3f8408f09fbd761f948acdf9637076bb3ef40b6e6361cfca1bbcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e90adba6398980b5021a04719b545b5ebd4a8922b25f09fac24cc16b5b92d664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90adba6398980b5021a04719b545b5ebd4a8922b25f09fac24cc16b5b92d664->enter($__internal_e90adba6398980b5021a04719b545b5ebd4a8922b25f09fac24cc16b5b92d664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e90adba6398980b5021a04719b545b5ebd4a8922b25f09fac24cc16b5b92d664->leave($__internal_e90adba6398980b5021a04719b545b5ebd4a8922b25f09fac24cc16b5b92d664_prof);

        
        $__internal_87ddb910cb3f8408f09fbd761f948acdf9637076bb3ef40b6e6361cfca1bbcc7->leave($__internal_87ddb910cb3f8408f09fbd761f948acdf9637076bb3ef40b6e6361cfca1bbcc7_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Test_Goutte_Php/test_goutte_php/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
