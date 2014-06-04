<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_809852ef83babfccced0712de3fa7eee7b10aa3a9cdb2335a47ca0d06f69b486 extends Twig_Template
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
    <li><a href=\"#/view3\">Project List</a></li>
    <li><a href=\"#/view4\">Add Project</a></li>
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
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/lib/angular/angular.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/lib/angular/angular-cookies.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/lib/angular/angular-resource.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/app.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/services.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/controllers.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/filters.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 34
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
        return array (  78 => 34,  74 => 33,  70 => 32,  66 => 31,  62 => 30,  58 => 29,  54 => 28,  50 => 27,  26 => 6,  19 => 1,);
    }
}
