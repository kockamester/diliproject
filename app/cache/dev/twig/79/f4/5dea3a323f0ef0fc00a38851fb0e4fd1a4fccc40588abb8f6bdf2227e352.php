<?php

/* DiliAdminBundle:User:index.html.twig */
class __TwigTemplate_79f45dea3a323f0ef0fc00a38851fb0e4fd1a4fccc40588abb8f6bdf2227e352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DiliAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
            'rightbar' => array($this, 'block_rightbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DiliAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Munkavégzők";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Munkavégzők</h1>

    ";
        // line 9
        echo "        ";
        // line 10
        echo "            ";
        // line 11
        echo "            ";
        // line 12
        echo "            ";
        // line 13
        echo "            ";
        // line 14
        echo "            ";
        // line 15
        echo "            ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        // line 18
        echo "        ";
        // line 19
        echo "            ";
        // line 20
        echo "                ";
        // line 21
        echo "                ";
        // line 22
        echo "                ";
        // line 23
        echo "                ";
        // line 24
        echo "                        ";
        // line 25
        echo "                ";
        // line 26
        echo "                        ";
        // line 27
        echo "            ";
        // line 28
        echo "        ";
        // line 29
        echo "        ";
        // line 30
        echo "            ";
        // line 31
        echo "                ";
        // line 32
        echo "                ";
        // line 33
        echo "                ";
        // line 34
        echo "                ";
        // line 35
        echo "                ";
        // line 36
        echo "            ";
        // line 37
        echo "        ";
        // line 38
        echo "    ";
        // line 39
        echo "    ";
        // line 40
        echo "
    ";
        // line 42
        echo "

";
    }

    // line 47
    public function block_rightbar($context, array $blocks = array())
    {
        // line 48
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Műveletek</h3>
        </div>
        <a href=\"#\">
            <div class=\"panel-body\">
                <i class=\"glyphicon glyphicon-plus\"> </i>
                Új munkavégző hozzáadása
            </div>
        </a>
    </div>

    <div class=\"panel panel-default search-form\">
        <div class=\"panel-heading\">
            <h4><i class=\"glyphicon glyphicon-search\"> </i> Keresés</h4>
        </div>
        <div class=\"panel-body\">
            ";
        // line 66
        echo "                  ";
        // line 67
        echo "                ";
        // line 68
        echo "                    ";
        // line 69
        echo "                ";
        // line 70
        echo "                ";
        // line 71
        echo "                    ";
        // line 72
        echo "                    ";
        // line 73
        echo "                ";
        // line 74
        echo "            ";
        // line 75
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "DiliAdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 75,  152 => 74,  150 => 73,  148 => 72,  146 => 71,  144 => 70,  142 => 69,  140 => 68,  138 => 67,  136 => 66,  117 => 48,  114 => 47,  108 => 42,  105 => 40,  103 => 39,  101 => 38,  99 => 37,  97 => 36,  95 => 35,  93 => 34,  91 => 33,  89 => 32,  87 => 31,  85 => 30,  83 => 29,  81 => 28,  79 => 27,  77 => 26,  75 => 25,  73 => 24,  71 => 23,  69 => 22,  67 => 21,  65 => 20,  63 => 19,  61 => 18,  59 => 17,  57 => 16,  55 => 15,  53 => 14,  51 => 13,  49 => 12,  47 => 11,  45 => 10,  43 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
