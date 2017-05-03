<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0dae9d69b61000eb625c94d60271a2d75a87c1262c9bc71a62dc8aa260c9fa82 extends Twig_Template
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
        $__internal_394654cae3f8c7043882f47d58a64ab4ddb7442c48580b9e1f2e318502881bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394654cae3f8c7043882f47d58a64ab4ddb7442c48580b9e1f2e318502881bd0->enter($__internal_394654cae3f8c7043882f47d58a64ab4ddb7442c48580b9e1f2e318502881bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_809c9ffc2df2a5d41b56d023de3d7710ce1c5b0cc45dfdad0c746e9ec9953e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809c9ffc2df2a5d41b56d023de3d7710ce1c5b0cc45dfdad0c746e9ec9953e2c->enter($__internal_809c9ffc2df2a5d41b56d023de3d7710ce1c5b0cc45dfdad0c746e9ec9953e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_394654cae3f8c7043882f47d58a64ab4ddb7442c48580b9e1f2e318502881bd0->leave($__internal_394654cae3f8c7043882f47d58a64ab4ddb7442c48580b9e1f2e318502881bd0_prof);

        
        $__internal_809c9ffc2df2a5d41b56d023de3d7710ce1c5b0cc45dfdad0c746e9ec9953e2c->leave($__internal_809c9ffc2df2a5d41b56d023de3d7710ce1c5b0cc45dfdad0c746e9ec9953e2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28cc3740dba4252e0869201f0f521f47705d165b2f2be3a9c404efea7a7fef8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28cc3740dba4252e0869201f0f521f47705d165b2f2be3a9c404efea7a7fef8e->enter($__internal_28cc3740dba4252e0869201f0f521f47705d165b2f2be3a9c404efea7a7fef8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9dfeacb4cd91ae5d1d8fc21b88eba57ca1d3be4eca290c88e938efc9715b994a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfeacb4cd91ae5d1d8fc21b88eba57ca1d3be4eca290c88e938efc9715b994a->enter($__internal_9dfeacb4cd91ae5d1d8fc21b88eba57ca1d3be4eca290c88e938efc9715b994a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9dfeacb4cd91ae5d1d8fc21b88eba57ca1d3be4eca290c88e938efc9715b994a->leave($__internal_9dfeacb4cd91ae5d1d8fc21b88eba57ca1d3be4eca290c88e938efc9715b994a_prof);

        
        $__internal_28cc3740dba4252e0869201f0f521f47705d165b2f2be3a9c404efea7a7fef8e->leave($__internal_28cc3740dba4252e0869201f0f521f47705d165b2f2be3a9c404efea7a7fef8e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_14796ff4547fa61bc1ac9b43b7cb0ce8c74432cf1710d55f588f738c94a1e5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14796ff4547fa61bc1ac9b43b7cb0ce8c74432cf1710d55f588f738c94a1e5c1->enter($__internal_14796ff4547fa61bc1ac9b43b7cb0ce8c74432cf1710d55f588f738c94a1e5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_781da8f238baa53ec9b6df98425a02a1f5e0257ea557436055d77a14b9c4b0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781da8f238baa53ec9b6df98425a02a1f5e0257ea557436055d77a14b9c4b0db->enter($__internal_781da8f238baa53ec9b6df98425a02a1f5e0257ea557436055d77a14b9c4b0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_781da8f238baa53ec9b6df98425a02a1f5e0257ea557436055d77a14b9c4b0db->leave($__internal_781da8f238baa53ec9b6df98425a02a1f5e0257ea557436055d77a14b9c4b0db_prof);

        
        $__internal_14796ff4547fa61bc1ac9b43b7cb0ce8c74432cf1710d55f588f738c94a1e5c1->leave($__internal_14796ff4547fa61bc1ac9b43b7cb0ce8c74432cf1710d55f588f738c94a1e5c1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_429d72ee079eb3df95b664fb02304a90ecff4bddcf9078b4495ba83fbfd94ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429d72ee079eb3df95b664fb02304a90ecff4bddcf9078b4495ba83fbfd94ce9->enter($__internal_429d72ee079eb3df95b664fb02304a90ecff4bddcf9078b4495ba83fbfd94ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0225763d62c886b77e20d6d29ff843859660e87d6a80a1dd41cf529bf893c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0225763d62c886b77e20d6d29ff843859660e87d6a80a1dd41cf529bf893c62->enter($__internal_e0225763d62c886b77e20d6d29ff843859660e87d6a80a1dd41cf529bf893c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e0225763d62c886b77e20d6d29ff843859660e87d6a80a1dd41cf529bf893c62->leave($__internal_e0225763d62c886b77e20d6d29ff843859660e87d6a80a1dd41cf529bf893c62_prof);

        
        $__internal_429d72ee079eb3df95b664fb02304a90ecff4bddcf9078b4495ba83fbfd94ce9->leave($__internal_429d72ee079eb3df95b664fb02304a90ecff4bddcf9078b4495ba83fbfd94ce9_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/Test_Goutte_Php/test_goutte_php/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
