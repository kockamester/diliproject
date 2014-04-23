<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_4254f47dc10e6a1b15d8043d3191f1b3ef215e71309ccf6d1585ce00180b1c47 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  256 => 52,  250 => 51,  241 => 49,  236 => 48,  230 => 46,  227 => 45,  223 => 44,  220 => 43,  214 => 42,  211 => 41,  204 => 39,  201 => 38,  198 => 37,  196 => 36,  193 => 35,  176 => 33,  164 => 30,  158 => 28,  152 => 26,  149 => 25,  140 => 22,  123 => 19,  120 => 18,  117 => 17,  115 => 16,  87 => 14,  75 => 28,  69 => 9,  63 => 7,  60 => 6,  56 => 4,  54 => 3,  27 => 1,  22 => 32,  19 => 1,  332 => 136,  328 => 134,  325 => 133,  320 => 126,  317 => 125,  305 => 111,  302 => 110,  298 => 107,  291 => 103,  287 => 101,  284 => 100,  281 => 99,  268 => 84,  266 => 83,  264 => 82,  262 => 81,  260 => 80,  242 => 63,  239 => 62,  233 => 47,  231 => 133,  224 => 128,  222 => 125,  215 => 120,  213 => 110,  209 => 108,  207 => 40,  200 => 94,  197 => 62,  194 => 61,  190 => 34,  187 => 54,  181 => 49,  175 => 46,  171 => 45,  165 => 42,  161 => 41,  154 => 37,  150 => 36,  143 => 23,  139 => 31,  132 => 27,  126 => 20,  122 => 23,  118 => 22,  113 => 20,  107 => 17,  104 => 15,  101 => 15,  95 => 11,  92 => 10,  86 => 7,  79 => 29,  77 => 54,  72 => 51,  70 => 26,  67 => 14,  65 => 10,  59 => 7,  55 => 5,  52 => 4,  45 => 144,  43 => 2,  40 => 60,  38 => 4,  35 => 3,  33 => 2,  30 => 5,);
    }
}
