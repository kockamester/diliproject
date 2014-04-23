<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_6f950192a8a4ddd33f42922432fabe1fba6b7b4a4ef51457c39940a46c9ddfbd extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  256 => 52,  250 => 51,  241 => 49,  236 => 48,  230 => 46,  227 => 45,  223 => 44,  220 => 43,  214 => 42,  211 => 41,  204 => 39,  201 => 38,  198 => 37,  196 => 36,  193 => 35,  176 => 33,  164 => 30,  158 => 28,  152 => 26,  149 => 25,  140 => 22,  123 => 19,  120 => 18,  117 => 17,  115 => 16,  87 => 14,  75 => 28,  69 => 9,  63 => 7,  60 => 6,  56 => 4,  54 => 3,  27 => 1,  22 => 32,  19 => 1,  332 => 136,  328 => 134,  325 => 133,  320 => 126,  317 => 125,  305 => 111,  302 => 110,  298 => 107,  291 => 103,  287 => 101,  284 => 100,  281 => 99,  268 => 84,  266 => 83,  264 => 82,  262 => 81,  260 => 80,  242 => 63,  239 => 62,  233 => 47,  231 => 133,  224 => 128,  222 => 125,  215 => 120,  213 => 110,  209 => 108,  207 => 40,  200 => 94,  197 => 62,  194 => 61,  190 => 34,  187 => 54,  181 => 49,  175 => 46,  171 => 45,  165 => 42,  161 => 41,  154 => 37,  150 => 36,  143 => 23,  139 => 31,  132 => 27,  126 => 20,  122 => 23,  118 => 22,  113 => 20,  107 => 17,  104 => 15,  101 => 15,  95 => 11,  92 => 10,  86 => 7,  79 => 29,  77 => 54,  72 => 51,  70 => 26,  67 => 14,  65 => 10,  59 => 7,  55 => 5,  52 => 4,  45 => 144,  43 => 2,  40 => 60,  38 => 4,  35 => 3,  33 => 2,  30 => 5,);
    }
}
