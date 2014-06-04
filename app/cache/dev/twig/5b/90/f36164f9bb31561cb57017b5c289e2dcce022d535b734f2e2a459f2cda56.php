<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_5b90f36164f9bb31561cb57017b5c289e2dcce022d535b734f2e2a459f2cda56 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\" ng-app=\"myApp\">
<head>
  <meta charset=\"utf-8\">
  <title>My AngularJS App</title>
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/css/app.css"), "html", null, true);
        echo "\"/>
</head>
<body>
  <ul class=\"menu\">
    <li><a href=\"#/view1\">view1</a></li>
    <li><a href=\"#/view2\">view2</a></li>
  </ul>

  <div ng-view></div>

  <div>Angular seed app: v<span app-version></span></div>

  <!-- In production use:
  <script src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js\"></script>
  -->

  <script src=\"http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/sha1.js\"></script>
  <script src=\"http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js\"></script>
  <script src=\"http://crypto-js.googlecode.com/svn/tags/3.1.2/build/components/enc-base64-min.js\"></script>
  <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/lib/angular/angular.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/lib/angular/angular-cookies.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/lib/angular/angular-resource.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/app.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/services.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/controllers.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/filters.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/directives.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 32,  72 => 31,  68 => 30,  64 => 29,  60 => 28,  56 => 27,  52 => 26,  48 => 25,  26 => 6,  19 => 1,);
    }
}
