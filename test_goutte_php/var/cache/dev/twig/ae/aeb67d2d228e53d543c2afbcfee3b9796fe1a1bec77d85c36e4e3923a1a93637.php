<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_b13b0fccfcf15b2ef04c635580a353ea5c6ec2d9577cb0ff668c8a5952c4f8e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac524187e7e1dde953941c2e58251ca2608ee09477622405dba2d880980cb1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac524187e7e1dde953941c2e58251ca2608ee09477622405dba2d880980cb1bd->enter($__internal_ac524187e7e1dde953941c2e58251ca2608ee09477622405dba2d880980cb1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0f5dd9e40995cfa05eed8ea740f606853eb0e7938c18aa9c6a98aeb320d3150d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5dd9e40995cfa05eed8ea740f606853eb0e7938c18aa9c6a98aeb320d3150d->enter($__internal_0f5dd9e40995cfa05eed8ea740f606853eb0e7938c18aa9c6a98aeb320d3150d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac524187e7e1dde953941c2e58251ca2608ee09477622405dba2d880980cb1bd->leave($__internal_ac524187e7e1dde953941c2e58251ca2608ee09477622405dba2d880980cb1bd_prof);

        
        $__internal_0f5dd9e40995cfa05eed8ea740f606853eb0e7938c18aa9c6a98aeb320d3150d->leave($__internal_0f5dd9e40995cfa05eed8ea740f606853eb0e7938c18aa9c6a98aeb320d3150d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea96fcaf16118dd4aab74daa3b24e80864ce13609b2432ebb4db0cd9f33ef8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea96fcaf16118dd4aab74daa3b24e80864ce13609b2432ebb4db0cd9f33ef8cf->enter($__internal_ea96fcaf16118dd4aab74daa3b24e80864ce13609b2432ebb4db0cd9f33ef8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b497f84583702b5075fe72f49897f670ecb6048903eeff0a5cbf93068f53fc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b497f84583702b5075fe72f49897f670ecb6048903eeff0a5cbf93068f53fc45->enter($__internal_b497f84583702b5075fe72f49897f670ecb6048903eeff0a5cbf93068f53fc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b497f84583702b5075fe72f49897f670ecb6048903eeff0a5cbf93068f53fc45->leave($__internal_b497f84583702b5075fe72f49897f670ecb6048903eeff0a5cbf93068f53fc45_prof);

        
        $__internal_ea96fcaf16118dd4aab74daa3b24e80864ce13609b2432ebb4db0cd9f33ef8cf->leave($__internal_ea96fcaf16118dd4aab74daa3b24e80864ce13609b2432ebb4db0cd9f33ef8cf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_10694342891fa82ddb388338625e743afc06a797094d8ab9829db122f6597031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10694342891fa82ddb388338625e743afc06a797094d8ab9829db122f6597031->enter($__internal_10694342891fa82ddb388338625e743afc06a797094d8ab9829db122f6597031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_161000a26ce6c831227b1546318606a809dbb9be20f5e9d3736cd69e8b8868c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161000a26ce6c831227b1546318606a809dbb9be20f5e9d3736cd69e8b8868c4->enter($__internal_161000a26ce6c831227b1546318606a809dbb9be20f5e9d3736cd69e8b8868c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_161000a26ce6c831227b1546318606a809dbb9be20f5e9d3736cd69e8b8868c4->leave($__internal_161000a26ce6c831227b1546318606a809dbb9be20f5e9d3736cd69e8b8868c4_prof);

        
        $__internal_10694342891fa82ddb388338625e743afc06a797094d8ab9829db122f6597031->leave($__internal_10694342891fa82ddb388338625e743afc06a797094d8ab9829db122f6597031_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Applications/MAMP/htdocs/Test_Goutte_Php/test_goutte_php/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
