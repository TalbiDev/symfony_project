<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1875a4d5664dd893883c049c065d7674491c5c7acb5c4073042005d521d4726a extends Twig_Template
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
        $__internal_96f2d09a5daabdddfef460467873cf5cdbe4b2eed32b322ed9609909d65ebbd7 = $this->env->getExtension("native_profiler");
        $__internal_96f2d09a5daabdddfef460467873cf5cdbe4b2eed32b322ed9609909d65ebbd7->enter($__internal_96f2d09a5daabdddfef460467873cf5cdbe4b2eed32b322ed9609909d65ebbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96f2d09a5daabdddfef460467873cf5cdbe4b2eed32b322ed9609909d65ebbd7->leave($__internal_96f2d09a5daabdddfef460467873cf5cdbe4b2eed32b322ed9609909d65ebbd7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_63d8417eb9a6c5de71759418ece47a05896e9bb88b1821ab3dbcd6b2dbd1ccf3 = $this->env->getExtension("native_profiler");
        $__internal_63d8417eb9a6c5de71759418ece47a05896e9bb88b1821ab3dbcd6b2dbd1ccf3->enter($__internal_63d8417eb9a6c5de71759418ece47a05896e9bb88b1821ab3dbcd6b2dbd1ccf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_63d8417eb9a6c5de71759418ece47a05896e9bb88b1821ab3dbcd6b2dbd1ccf3->leave($__internal_63d8417eb9a6c5de71759418ece47a05896e9bb88b1821ab3dbcd6b2dbd1ccf3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b57aacafb0e1b2d8b3e9322c110ee0b26e1370ea65b3781f3c4d241c8a5068a = $this->env->getExtension("native_profiler");
        $__internal_3b57aacafb0e1b2d8b3e9322c110ee0b26e1370ea65b3781f3c4d241c8a5068a->enter($__internal_3b57aacafb0e1b2d8b3e9322c110ee0b26e1370ea65b3781f3c4d241c8a5068a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3b57aacafb0e1b2d8b3e9322c110ee0b26e1370ea65b3781f3c4d241c8a5068a->leave($__internal_3b57aacafb0e1b2d8b3e9322c110ee0b26e1370ea65b3781f3c4d241c8a5068a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75883e83b567bd9b883058c413366a83866d4d87933645b0a3bd8888207f98d1 = $this->env->getExtension("native_profiler");
        $__internal_75883e83b567bd9b883058c413366a83866d4d87933645b0a3bd8888207f98d1->enter($__internal_75883e83b567bd9b883058c413366a83866d4d87933645b0a3bd8888207f98d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_75883e83b567bd9b883058c413366a83866d4d87933645b0a3bd8888207f98d1->leave($__internal_75883e83b567bd9b883058c413366a83866d4d87933645b0a3bd8888207f98d1_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
