<?php

/* Goutte/index.html.twig */
class __TwigTemplate_9ef8690e02b6afa4a6cadc0dd6bd0215e15c417514a413c8ba72e0cae3cb87bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Goutte/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e5ea76cb483654ecdccb8e0cc53726430fd2daf46463e90174c2091d61515c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5ea76cb483654ecdccb8e0cc53726430fd2daf46463e90174c2091d61515c7->enter($__internal_6e5ea76cb483654ecdccb8e0cc53726430fd2daf46463e90174c2091d61515c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Goutte/index.html.twig"));

        $__internal_1018e59fea252cdf118764ccab7e2bfdbf9f97dac5e8e27de1e48760f26bfaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1018e59fea252cdf118764ccab7e2bfdbf9f97dac5e8e27de1e48760f26bfaaf->enter($__internal_1018e59fea252cdf118764ccab7e2bfdbf9f97dac5e8e27de1e48760f26bfaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Goutte/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e5ea76cb483654ecdccb8e0cc53726430fd2daf46463e90174c2091d61515c7->leave($__internal_6e5ea76cb483654ecdccb8e0cc53726430fd2daf46463e90174c2091d61515c7_prof);

        
        $__internal_1018e59fea252cdf118764ccab7e2bfdbf9f97dac5e8e27de1e48760f26bfaaf->leave($__internal_1018e59fea252cdf118764ccab7e2bfdbf9f97dac5e8e27de1e48760f26bfaaf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_698d6009c953e18f81af4fd595ebc6828a78b7246f3f34cba350c4e5d23b2999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698d6009c953e18f81af4fd595ebc6828a78b7246f3f34cba350c4e5d23b2999->enter($__internal_698d6009c953e18f81af4fd595ebc6828a78b7246f3f34cba350c4e5d23b2999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30f3b454b0289f75495ce7feb6a6c107e685721e291af5cc7add24756c83b693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f3b454b0289f75495ce7feb6a6c107e685721e291af5cc7add24756c83b693->enter($__internal_30f3b454b0289f75495ce7feb6a6c107e685721e291af5cc7add24756c83b693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("Goutte/searchCrawl.html.twig", "Goutte/index.html.twig", 4)->display($context);
        // line 5
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_30f3b454b0289f75495ce7feb6a6c107e685721e291af5cc7add24756c83b693->leave($__internal_30f3b454b0289f75495ce7feb6a6c107e685721e291af5cc7add24756c83b693_prof);

        
        $__internal_698d6009c953e18f81af4fd595ebc6828a78b7246f3f34cba350c4e5d23b2999->leave($__internal_698d6009c953e18f81af4fd595ebc6828a78b7246f3f34cba350c4e5d23b2999_prof);

    }

    public function getTemplateName()
    {
        return "Goutte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
    {% include \"Goutte/searchCrawl.html.twig\" %}
    <script src=\"{{ asset('js/search.js') }}\"></script>
{% endblock %}", "Goutte/index.html.twig", "/Applications/MAMP/htdocs/Test_Goutte_Php/test_goutte_php/app/Resources/views/Goutte/index.html.twig");
    }
}
