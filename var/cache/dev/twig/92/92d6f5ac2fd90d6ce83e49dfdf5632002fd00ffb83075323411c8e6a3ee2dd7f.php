<?php

/* lucky/number.html.twig */
class __TwigTemplate_d44087d4dd1f0a5de5dc4fe42eec95a7b7c0f8430bbc937d5d3ba45b38eb4b00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 2);
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
        $__internal_2af4a417de024e2225219b52382911720ea85af163fe98b8322cf4a0a234f1e1 = $this->env->getExtension("native_profiler");
        $__internal_2af4a417de024e2225219b52382911720ea85af163fe98b8322cf4a0a234f1e1->enter($__internal_2af4a417de024e2225219b52382911720ea85af163fe98b8322cf4a0a234f1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2af4a417de024e2225219b52382911720ea85af163fe98b8322cf4a0a234f1e1->leave($__internal_2af4a417de024e2225219b52382911720ea85af163fe98b8322cf4a0a234f1e1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cff8a244695f7b9afd13502993a2119c96ae842077e277d0cb49ac6e29b0165 = $this->env->getExtension("native_profiler");
        $__internal_1cff8a244695f7b9afd13502993a2119c96ae842077e277d0cb49ac6e29b0165->enter($__internal_1cff8a244695f7b9afd13502993a2119c96ae842077e277d0cb49ac6e29b0165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  <h1>Lucky Numbers: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo " </h1>
";
        
        $__internal_1cff8a244695f7b9afd13502993a2119c96ae842077e277d0cb49ac6e29b0165->leave($__internal_1cff8a244695f7b9afd13502993a2119c96ae842077e277d0cb49ac6e29b0165_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Ressources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   <h1>Lucky Numbers: {{ luckyNumberList}} </h1>*/
/* {% endblock %}*/
/* */
