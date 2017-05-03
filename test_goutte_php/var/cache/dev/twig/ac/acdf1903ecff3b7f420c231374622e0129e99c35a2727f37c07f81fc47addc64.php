<?php

/* base.html.twig */
class __TwigTemplate_5243e67711bac2fc0c14b6ec06976c49537ac5c99c8f4cd130d64480f977da94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62f339618d47588fb5560b597c9b5a1154d2e954c2f25b15cf9108d84fc9307d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62f339618d47588fb5560b597c9b5a1154d2e954c2f25b15cf9108d84fc9307d->enter($__internal_62f339618d47588fb5560b597c9b5a1154d2e954c2f25b15cf9108d84fc9307d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0c3ad2610f495697c57bbdb1115fda8cb8264234401f344dd587882675afa3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3ad2610f495697c57bbdb1115fda8cb8264234401f344dd587882675afa3de->enter($__internal_0c3ad2610f495697c57bbdb1115fda8cb8264234401f344dd587882675afa3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_62f339618d47588fb5560b597c9b5a1154d2e954c2f25b15cf9108d84fc9307d->leave($__internal_62f339618d47588fb5560b597c9b5a1154d2e954c2f25b15cf9108d84fc9307d_prof);

        
        $__internal_0c3ad2610f495697c57bbdb1115fda8cb8264234401f344dd587882675afa3de->leave($__internal_0c3ad2610f495697c57bbdb1115fda8cb8264234401f344dd587882675afa3de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbcbc2f4f55c53d6fd86a37c39cf08e24647900fb4a0eec8062621ce11a7c6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcbc2f4f55c53d6fd86a37c39cf08e24647900fb4a0eec8062621ce11a7c6d3->enter($__internal_bbcbc2f4f55c53d6fd86a37c39cf08e24647900fb4a0eec8062621ce11a7c6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d434647762d784fac2a90bebab9c4a0cdff32342d104a6dd932ec5a210d0b42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d434647762d784fac2a90bebab9c4a0cdff32342d104a6dd932ec5a210d0b42d->enter($__internal_d434647762d784fac2a90bebab9c4a0cdff32342d104a6dd932ec5a210d0b42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d434647762d784fac2a90bebab9c4a0cdff32342d104a6dd932ec5a210d0b42d->leave($__internal_d434647762d784fac2a90bebab9c4a0cdff32342d104a6dd932ec5a210d0b42d_prof);

        
        $__internal_bbcbc2f4f55c53d6fd86a37c39cf08e24647900fb4a0eec8062621ce11a7c6d3->leave($__internal_bbcbc2f4f55c53d6fd86a37c39cf08e24647900fb4a0eec8062621ce11a7c6d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_213118feaa645f2b3f48fd1287a5b724895b9fba008e9b8460358fca4e581b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213118feaa645f2b3f48fd1287a5b724895b9fba008e9b8460358fca4e581b69->enter($__internal_213118feaa645f2b3f48fd1287a5b724895b9fba008e9b8460358fca4e581b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_273b7c2569bb4f3047daf936595736980a98fd04955fafc26720673015940092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273b7c2569bb4f3047daf936595736980a98fd04955fafc26720673015940092->enter($__internal_273b7c2569bb4f3047daf936595736980a98fd04955fafc26720673015940092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-3.3.7-dist/css/bootstrap.css"), "html", null, true);
        echo "\"/>
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_273b7c2569bb4f3047daf936595736980a98fd04955fafc26720673015940092->leave($__internal_273b7c2569bb4f3047daf936595736980a98fd04955fafc26720673015940092_prof);

        
        $__internal_213118feaa645f2b3f48fd1287a5b724895b9fba008e9b8460358fca4e581b69->leave($__internal_213118feaa645f2b3f48fd1287a5b724895b9fba008e9b8460358fca4e581b69_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcfca1a2bceb5ae64d8cf7afb6c1f6251bf67618e81127faf84a5e2e597d9420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfca1a2bceb5ae64d8cf7afb6c1f6251bf67618e81127faf84a5e2e597d9420->enter($__internal_dcfca1a2bceb5ae64d8cf7afb6c1f6251bf67618e81127faf84a5e2e597d9420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de5d41ec013c8b031968d184ea29883f94794cb8c1661f90cff7593482e44f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5d41ec013c8b031968d184ea29883f94794cb8c1661f90cff7593482e44f3f->enter($__internal_de5d41ec013c8b031968d184ea29883f94794cb8c1661f90cff7593482e44f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de5d41ec013c8b031968d184ea29883f94794cb8c1661f90cff7593482e44f3f->leave($__internal_de5d41ec013c8b031968d184ea29883f94794cb8c1661f90cff7593482e44f3f_prof);

        
        $__internal_dcfca1a2bceb5ae64d8cf7afb6c1f6251bf67618e81127faf84a5e2e597d9420->leave($__internal_dcfca1a2bceb5ae64d8cf7afb6c1f6251bf67618e81127faf84a5e2e597d9420_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0220dcc266ea2929ad6f30603f693b65ecd91435a6aeccc7a6e6048e78889733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0220dcc266ea2929ad6f30603f693b65ecd91435a6aeccc7a6e6048e78889733->enter($__internal_0220dcc266ea2929ad6f30603f693b65ecd91435a6aeccc7a6e6048e78889733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_39b105f7d74f5d66b3c2550431e9300d4b87757b214cc40ec91eca1d8071c155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b105f7d74f5d66b3c2550431e9300d4b87757b214cc40ec91eca1d8071c155->enter($__internal_39b105f7d74f5d66b3c2550431e9300d4b87757b214cc40ec91eca1d8071c155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_39b105f7d74f5d66b3c2550431e9300d4b87757b214cc40ec91eca1d8071c155->leave($__internal_39b105f7d74f5d66b3c2550431e9300d4b87757b214cc40ec91eca1d8071c155_prof);

        
        $__internal_0220dcc266ea2929ad6f30603f693b65ecd91435a6aeccc7a6e6048e78889733->leave($__internal_0220dcc266ea2929ad6f30603f693b65ecd91435a6aeccc7a6e6048e78889733_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 15,  132 => 14,  123 => 13,  106 => 12,  94 => 8,  89 => 7,  80 => 6,  62 => 5,  50 => 17,  47 => 13,  45 => 12,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('bootstrap-3.3.7-dist/css/bootstrap.css') }}\"/>
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js\"></script>
            <script src=\"{{ asset('bootstrap-3.3.7-dist/js/bootstrap.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Test_Goutte_Php/test_goutte_php/app/Resources/views/base.html.twig");
    }
}
