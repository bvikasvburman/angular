<?php

/* FrontendBundle:Default:vic.html.twig */
class __TwigTemplate_992abcbce78790243e392e03fd39eed430d80e2cf7302753494c76955165409b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:vic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
