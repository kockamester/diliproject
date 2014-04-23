<?php

/* MopaBootstrapBundle::flash.html.twig */
class __TwigTemplate_3ba5e297b1b9cbee21dc5abc0a7595e4968e911f95082558a851e957bda1a35f extends Twig_Template
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
        // line 13
        echo "
";
        // line 32
        echo "
";
    }

    // line 1
    public function getflash($_type = null, $_message = null, $_close = null, $_use_raw = null, $_class = null, $_domain = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $_type,
            "message" => $_message,
            "close" => $_close,
            "use_raw" => $_use_raw,
            "class" => $_class,
            "domain" => $_domain,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) ? ((" alert-" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) : ("")), "html", null, true);
            echo " fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
            echo " ";
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), false)) : (false))) {
                echo "alert-dismissable";
            }
            echo "\">
    ";
            // line 3
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), false)) : (false))) {
                // line 4
                echo "        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    ";
            }
            // line 6
            echo "    ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), false)) : (false))) {
                // line 7
                echo "        ";
                echo $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages")));
                echo "
    ";
            } else {
                // line 9
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
                echo "
    ";
            }
            // line 11
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function getadvanced_flash($_type = null, $_heading = null, $_message = null, $_close_tag = null, $_use_raw = null, $_class = null, $_domain = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $_type,
            "heading" => $_heading,
            "message" => $_message,
            "close_tag" => $_close_tag,
            "use_raw" => $_use_raw,
            "class" => $_class,
            "domain" => $_domain,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) ? ((" alert-" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) : ("")), "html", null, true);
            echo " fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
            echo " ";
            if (((array_key_exists("close_tag", $context)) ? (_twig_default_filter((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), false)) : (false))) {
                echo "alert-dismissable";
            }
            echo "\">
    ";
            // line 16
            if (((array_key_exists("close_tag", $context)) ? (_twig_default_filter((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), false)) : (false))) {
                // line 17
                echo "        ";
                if (((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")) == true)) {
                    // line 18
                    echo "            ";
                    $context["close_tag"] = "a";
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "        <";
                echo twig_escape_filter($this->env, (isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), "html", null, true);
                echo " class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\" ";
                if (((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")) == "a")) {
                    echo "href=\"#\"";
                } elseif (((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")) == "button")) {
                    echo "type=\"button\"";
                }
                echo ">&times;</";
                echo twig_escape_filter($this->env, (isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), "html", null, true);
                echo ">
    ";
            }
            // line 22
            echo "    ";
            if (((array_key_exists("heading", $context)) ? (_twig_default_filter((isset($context["heading"]) ? $context["heading"] : $this->getContext($context, "heading")), false)) : (false))) {
                // line 23
                echo "    <h4 class=\"alert-heading\">";
                echo twig_escape_filter($this->env, (isset($context["heading"]) ? $context["heading"] : $this->getContext($context, "heading")), "html", null, true);
                echo "</h4>
    ";
            }
            // line 25
            echo "    ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), false)) : (false))) {
                // line 26
                echo "        ";
                echo $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages")));
                echo "
    ";
            } else {
                // line 28
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
                echo "
    ";
            }
            // line 30
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getsession_flash($_close = null, $_use_raw = null, $_class = null, $_domain = null)
    {
        $context = $this->env->mergeGlobals(array(
            "close" => $_close,
            "use_raw" => $_use_raw,
            "class" => $_class,
            "domain" => $_domain,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            $context["flash_messages"] = $this;
            // line 35
            echo "
    ";
            // line 36
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "peekAll")) > 0)) {
                // line 37
                echo "        ";
                $context["mapping"] = twig_array_merge($this->env->getExtension('mopa_bootstrap_flash')->getMapping(), array("fos_user_success" => "success"));
                // line 38
                echo "        ";
                $context["flashes"] = array();
                // line 39
                echo "
        ";
                // line 40
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["mapping"]) ? $context["mapping"] : $this->getContext($context, "mapping"))));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 41
                    echo "            ";
                    $context["flashes"] = twig_array_merge((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")), array((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), "method")));
                    // line 42
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "
        ";
                // line 44
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 45
                    echo "            ";
                    if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "fos_user_success")) {
                        // line 46
                        echo "                ";
                        $context["domain"] = "FOSUserBundle";
                        // line 47
                        echo "            ";
                    }
                    // line 48
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 49
                        echo "                ";
                        echo $context["flash_messages"]->getflash($this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : $this->getContext($context, "mapping")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array"), (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), (isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), (isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")));
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 52,  250 => 51,  241 => 49,  236 => 48,  230 => 46,  227 => 45,  223 => 44,  220 => 43,  214 => 42,  211 => 41,  204 => 39,  201 => 38,  198 => 37,  196 => 36,  193 => 35,  176 => 33,  164 => 30,  158 => 28,  152 => 26,  149 => 25,  140 => 22,  123 => 19,  120 => 18,  117 => 17,  115 => 16,  87 => 14,  75 => 11,  69 => 9,  63 => 7,  60 => 6,  56 => 4,  54 => 3,  27 => 1,  22 => 32,  19 => 13,  332 => 136,  328 => 134,  325 => 133,  320 => 126,  317 => 125,  305 => 111,  302 => 110,  298 => 107,  291 => 103,  287 => 101,  284 => 100,  281 => 99,  268 => 84,  266 => 83,  264 => 82,  262 => 81,  260 => 80,  242 => 63,  239 => 62,  233 => 47,  231 => 133,  224 => 128,  222 => 125,  215 => 120,  213 => 110,  209 => 108,  207 => 40,  200 => 94,  197 => 62,  194 => 61,  190 => 34,  187 => 54,  181 => 49,  175 => 46,  171 => 45,  165 => 42,  161 => 41,  154 => 37,  150 => 36,  143 => 23,  139 => 31,  132 => 27,  126 => 20,  122 => 23,  118 => 22,  113 => 20,  107 => 17,  104 => 15,  101 => 15,  95 => 11,  92 => 10,  86 => 7,  79 => 56,  77 => 54,  72 => 51,  70 => 15,  67 => 14,  65 => 10,  59 => 7,  55 => 5,  52 => 4,  45 => 144,  43 => 2,  40 => 60,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }
}
