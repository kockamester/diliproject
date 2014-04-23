<?php

/* DiliAdminBundle::layout.html.twig */
class __TwigTemplate_a0273c2526655845aba2c107d6361bc1948525668fa30f403c1316e8a81208cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'head_externals' => array($this, 'block_head_externals'),
            'head_end' => array($this, 'block_head_end'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'flashes' => array($this, 'block_flashes'),
            'container' => array($this, 'block_container'),
            'rightbar' => array($this, 'block_rightbar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["__internal_aca5c80769be9e376e7b3c25071a77dc729680f94003cc47263a6faf4165c467"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
        // line 3
        echo "<html>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 62
        echo "<body>
";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 147
        echo "</body>


</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <head>

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


        ";
        // line 10
        $this->displayBlock('meta', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('head_externals', $context, $blocks);
        // line 53
        echo "


        ";
        // line 56
        $this->displayBlock('head_end', $context, $blocks);
        // line 58
        echo "

    </head>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Dili naptár";
    }

    // line 10
    public function block_meta($context, array $blocks = array())
    {
        // line 11
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
            <meta charset=\"UTF-8\">
        ";
    }

    // line 15
    public function block_head_externals($context, array $blocks = array())
    {
        // line 16
        echo "            <!-- Favicon -->
            <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/images/favicon.jpg"), "html", null, true);
        echo "\">

            <!-- jQuery -->
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/lib/jquery/jquery-2.1.0.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap core CSS -->
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/lib/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/lib/bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/lib/bootstrap/css/starter-template.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/js/respond.min.js"), "html", null, true);
        echo "\"></script>
            <![endif]-->

            <!-- Main css -->
            <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/lib/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\"
                  rel=\"stylesheet\"/>
            <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

            <!-- jQuery UI -->

            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/lib/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/lib/jquery-ui/js/jquery.ui.datepicker-hu.js"), "html", null, true);
        echo "\"></script>

            <!-- Time picker -->
            <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/lib/jquery-ui-timepicker/jquery-ui-timepicker-addon.css"), "html", null, true);
        echo "\"
                  rel=\"stylesheet\"/>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/lib/jquery-ui-timepicker/jquery-ui-timepicker-addon.js"), "html", null, true);
        echo "\"></script>

            <!-- Site js -->
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/diliadmin/js/site.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 56
    public function block_head_end($context, array $blocks = array())
    {
        // line 57
        echo "        ";
    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 96
        echo "
    <div class=\"container-fluid\">
        <div class=\"col-md-1\"></div>
        <div class=\"container col-md-7\">

            ";
        // line 101
        $this->displayBlock('flashes', $context, $blocks);
        // line 110
        echo "
            <div class=\"modal-body\">
                ";
        // line 112
        $this->displayBlock('container', $context, $blocks);
        // line 123
        echo "            </div>
        </div>


        <div class=\"rightbar col-md-3\">
            ";
        // line 128
        $this->displayBlock('rightbar', $context, $blocks);
        // line 131
        echo "        </div>
        <div class=\"container col-md-1\"></div>

        <div style=\"clear:both\"></div>

        ";
        // line 136
        $this->displayBlock('footer', $context, $blocks);
        // line 144
        echo "
    </div>
";
    }

    // line 64
    public function block_navbar($context, array $blocks = array())
    {
        // line 65
        echo "        <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("main");
        echo "\">Timelog</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">

                        <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Munkavégzők</a></li>
                        <li><a href=\"#\") }}\">Helyszínek</a></li>
                        ";
        // line 82
        echo "                        ";
        // line 83
        echo "                        ";
        // line 84
        echo "                        ";
        // line 85
        echo "                        ";
        // line 86
        echo "                        ";
        // line 87
        echo "                        ";
        // line 88
        echo "                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>


    ";
    }

    // line 101
    public function block_flashes($context, array $blocks = array())
    {
        // line 102
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "peekAll")) > 0)) {
            // line 103
            echo "                    <div class=\"row-fluid\">
                        <div class=\"span12\">
                            ";
            // line 105
            echo $context["__internal_aca5c80769be9e376e7b3c25071a77dc729680f94003cc47263a6faf4165c467"]->getsession_flash();
            echo "
                        </div>
                    </div>
                ";
        }
        // line 109
        echo "            ";
    }

    // line 112
    public function block_container($context, array $blocks = array())
    {
        // line 113
        echo "                    <div class=\"jumbotron\">
                        <h2>Üdvözöljük a Tiszta Dili Naptár Admin felületén!</h2>
                        <br>

                        <p>
                            Itt lehetősége van feltölteni és módosítani az adatokat.
                        </p>
                    </div>

                ";
    }

    // line 128
    public function block_rightbar($context, array $blocks = array())
    {
        // line 129
        echo "
            ";
    }

    // line 136
    public function block_footer($context, array $blocks = array())
    {
        // line 137
        echo "            <div id=\"footer\">
                <div id=\"copyright\" class=\"container\">
                    <p><img alt=\"Tiszta Dilig logo\" src=";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dilisadmin/images/copyright.jpg"), "html", null, true);
        echo "> -
                        Copyright © 2014</p>
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "DiliAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 139,  339 => 137,  336 => 136,  331 => 129,  328 => 128,  315 => 113,  312 => 112,  308 => 109,  301 => 105,  297 => 103,  294 => 102,  291 => 101,  280 => 88,  278 => 87,  276 => 86,  274 => 85,  272 => 84,  270 => 83,  268 => 82,  263 => 79,  255 => 74,  244 => 65,  241 => 64,  235 => 144,  233 => 136,  226 => 131,  224 => 128,  217 => 123,  215 => 112,  211 => 110,  209 => 101,  202 => 96,  199 => 64,  196 => 63,  192 => 57,  189 => 56,  183 => 51,  177 => 48,  172 => 46,  166 => 43,  162 => 42,  155 => 38,  150 => 36,  143 => 32,  139 => 31,  132 => 27,  126 => 24,  122 => 23,  118 => 22,  113 => 20,  107 => 17,  104 => 16,  101 => 15,  95 => 11,  92 => 10,  86 => 7,  79 => 58,  77 => 56,  72 => 53,  70 => 15,  67 => 14,  65 => 10,  59 => 7,  55 => 5,  52 => 4,  45 => 147,  43 => 63,  40 => 62,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }
}
