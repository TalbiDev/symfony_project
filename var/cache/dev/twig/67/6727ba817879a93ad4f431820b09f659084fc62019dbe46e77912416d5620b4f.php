<?php

/* base.html.twig */
class __TwigTemplate_2e51974b20e2f6c0dfb664be266b450289674de36ee53332f33e294ae088cc71 extends Twig_Template
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
        $__internal_42157e3fc1b5a771638281e1028aa2e28d7be0e1cbefb885df4d11040d9f750d = $this->env->getExtension("native_profiler");
        $__internal_42157e3fc1b5a771638281e1028aa2e28d7be0e1cbefb885df4d11040d9f750d->enter($__internal_42157e3fc1b5a771638281e1028aa2e28d7be0e1cbefb885df4d11040d9f750d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_42157e3fc1b5a771638281e1028aa2e28d7be0e1cbefb885df4d11040d9f750d->leave($__internal_42157e3fc1b5a771638281e1028aa2e28d7be0e1cbefb885df4d11040d9f750d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0a3eacd54290bb27eb71688e4511977917bd1839eb0ee7980a227bc8ffbb425 = $this->env->getExtension("native_profiler");
        $__internal_f0a3eacd54290bb27eb71688e4511977917bd1839eb0ee7980a227bc8ffbb425->enter($__internal_f0a3eacd54290bb27eb71688e4511977917bd1839eb0ee7980a227bc8ffbb425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f0a3eacd54290bb27eb71688e4511977917bd1839eb0ee7980a227bc8ffbb425->leave($__internal_f0a3eacd54290bb27eb71688e4511977917bd1839eb0ee7980a227bc8ffbb425_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47f28be7ad367caf7beb90dbc2829d7b51579744cc3a173dec7acff3722776d3 = $this->env->getExtension("native_profiler");
        $__internal_47f28be7ad367caf7beb90dbc2829d7b51579744cc3a173dec7acff3722776d3->enter($__internal_47f28be7ad367caf7beb90dbc2829d7b51579744cc3a173dec7acff3722776d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_47f28be7ad367caf7beb90dbc2829d7b51579744cc3a173dec7acff3722776d3->leave($__internal_47f28be7ad367caf7beb90dbc2829d7b51579744cc3a173dec7acff3722776d3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_78a8b0fc9a901814c24c06758f4f8212d71885c89ee97a7b76e215af850d5520 = $this->env->getExtension("native_profiler");
        $__internal_78a8b0fc9a901814c24c06758f4f8212d71885c89ee97a7b76e215af850d5520->enter($__internal_78a8b0fc9a901814c24c06758f4f8212d71885c89ee97a7b76e215af850d5520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_78a8b0fc9a901814c24c06758f4f8212d71885c89ee97a7b76e215af850d5520->leave($__internal_78a8b0fc9a901814c24c06758f4f8212d71885c89ee97a7b76e215af850d5520_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ca1a348d46eb0c600ab416b9c1872d27cc0283869fb5eb924d32cb0c6885478 = $this->env->getExtension("native_profiler");
        $__internal_2ca1a348d46eb0c600ab416b9c1872d27cc0283869fb5eb924d32cb0c6885478->enter($__internal_2ca1a348d46eb0c600ab416b9c1872d27cc0283869fb5eb924d32cb0c6885478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2ca1a348d46eb0c600ab416b9c1872d27cc0283869fb5eb924d32cb0c6885478->leave($__internal_2ca1a348d46eb0c600ab416b9c1872d27cc0283869fb5eb924d32cb0c6885478_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
