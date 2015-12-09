<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_86a43c12991ad518a2ae5abf45b323e3b1dcc2094935d6177c491848cac369a8 extends Twig_Template
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
        $__internal_cb84acaef58410f8fc3c2000f27ea1d23e56c56f000a265f66da56519fe91c1c = $this->env->getExtension("native_profiler");
        $__internal_cb84acaef58410f8fc3c2000f27ea1d23e56c56f000a265f66da56519fe91c1c->enter($__internal_cb84acaef58410f8fc3c2000f27ea1d23e56c56f000a265f66da56519fe91c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb84acaef58410f8fc3c2000f27ea1d23e56c56f000a265f66da56519fe91c1c->leave($__internal_cb84acaef58410f8fc3c2000f27ea1d23e56c56f000a265f66da56519fe91c1c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d47c7a4f24735721d132cec4b9c19c7739e15f8016b0e3db696c192d27d65d3d = $this->env->getExtension("native_profiler");
        $__internal_d47c7a4f24735721d132cec4b9c19c7739e15f8016b0e3db696c192d27d65d3d->enter($__internal_d47c7a4f24735721d132cec4b9c19c7739e15f8016b0e3db696c192d27d65d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d47c7a4f24735721d132cec4b9c19c7739e15f8016b0e3db696c192d27d65d3d->leave($__internal_d47c7a4f24735721d132cec4b9c19c7739e15f8016b0e3db696c192d27d65d3d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9abc000d6adbc88d2173da90427446be2dade286d7e71687a3219ee98ccdb458 = $this->env->getExtension("native_profiler");
        $__internal_9abc000d6adbc88d2173da90427446be2dade286d7e71687a3219ee98ccdb458->enter($__internal_9abc000d6adbc88d2173da90427446be2dade286d7e71687a3219ee98ccdb458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9abc000d6adbc88d2173da90427446be2dade286d7e71687a3219ee98ccdb458->leave($__internal_9abc000d6adbc88d2173da90427446be2dade286d7e71687a3219ee98ccdb458_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_786eade209386d50c066af063525ad36d055528cacee051f9f2b1dacd0105ecf = $this->env->getExtension("native_profiler");
        $__internal_786eade209386d50c066af063525ad36d055528cacee051f9f2b1dacd0105ecf->enter($__internal_786eade209386d50c066af063525ad36d055528cacee051f9f2b1dacd0105ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_786eade209386d50c066af063525ad36d055528cacee051f9f2b1dacd0105ecf->leave($__internal_786eade209386d50c066af063525ad36d055528cacee051f9f2b1dacd0105ecf_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
