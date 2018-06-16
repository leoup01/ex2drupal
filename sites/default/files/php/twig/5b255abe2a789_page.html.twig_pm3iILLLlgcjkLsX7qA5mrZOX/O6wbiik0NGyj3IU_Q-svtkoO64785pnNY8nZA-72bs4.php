<?php

/* themes/examen402160151/templates/page.html.twig */
class __TwigTemplate_cf57cc8e573367ea6a9a1c86915effc3859ee1dc0e8bf466acd2e8169d7b05c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 54, "if" => 63, "block" => 64);
        $filters = array("clean_class" => 68, "t" => 80);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 55
        echo "<div class=\"logo-container\">
  <div class=\"row\">
    <div class=\"col-sm-12 col-md-3\">
      <img src=\"https://lh3.googleusercontent.com/w6HETKkYqGGh6pl7Ghi-aQeHCsNez0KLSpJfW0H8XYAVLWusaTgqaXPWHywpszEgC0ZO8JHBSpabo4Ql3dH4ipuHQqvlxv5xv2XJkxzjrqeB9avgBIJHq41ccvtYZq5MgYISqjGtxy7d81zSp13Ne8s9HZbxjduUXNioR5P8YTSdVHAokFWNV-3xrMqr2aEvEn5ddyE8YG4lIOTWR-lsXrH0XwXY9ydvMnQKgeHxOHT4h_Jd7CDx0BLGw5IvlkLdZ6pK-RSntYxfE13NOeIbhjk96ETio3rA_eflvoxRtb_suI9XaZ2eat4GMpZ1DiGDQo0ibQ94b2ALYXbIfYcM54rbK7VWCz-vod8ydms6as9vhvoHYFO2TdW3npAFxg7H_nL8EqEEx3eRnrsR5xZHy82wH_e6nJRGK0fzEuUmd7yM1FtNI5EhN-J5cl8bhJjIwOervTQTa5haaUk0l7ASOSNt8H46EW4KwjQJy8WJmcsX8WUbtJY8m8s3iZ_cmkS6pp87ny_rrcE6zWnDbx4TPBPJpDu78WgglaVvbZj81DuK7qz-ukLEDgnn-_tP-znNJqu14R-DVYOMSiMaDqtOvYLWiXTZXklUzs8fyaY=s700-no\" alt=\"main logo\"/>
    </div>
  </div>
</div>
";
        // line 63
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 64
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 100
        echo "
";
        // line 102
        $this->displayBlock('main', $context, $blocks);
        // line 167
        echo "
";
        // line 168
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 169
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 64
    public function block_navbar($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        // line 66
        $context["navbar_classes"] = array(0 => "navbar", 1 => "navbar-custom", 2 => (($this->getAttribute($this->getAttribute(        // line 68
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : (((isset($context["nav"]) ? $context["nav"] : null) - (isset($context["custom"]) ? $context["custom"] : null)))));
        // line 71
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 72
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 73
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 75
        echo "      <div class=\"navbar-header\">
        ";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 78
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 79
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 86
        echo "      </div>

      ";
        // line 89
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 90
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 91
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 94
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 95
            echo "        </div>
      ";
        }
        // line 97
        echo "    </header>
  ";
    }

    // line 102
    public function block_main($context, array $blocks = array())
    {
        // line 103
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 107
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 108
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 113
            echo "      ";
        }
        // line 114
        echo "
      ";
        // line 116
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 117
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 122
            echo "      ";
        }
        // line 123
        echo "
      ";
        // line 125
        echo "      ";
        // line 126
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 127
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 128
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 129
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 130
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 133
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 136
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 137
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 140
            echo "        ";
        }
        // line 141
        echo "
        ";
        // line 143
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 144
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 147
            echo "        ";
        }
        // line 148
        echo "
        ";
        // line 150
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 154
        echo "      </section>

      ";
        // line 157
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 158
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 163
            echo "      ";
        }
        // line 164
        echo "    </div>
  </div>
";
    }

    // line 108
    public function block_header($context, array $blocks = array())
    {
        // line 109
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 110
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 117
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 118
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 119
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 137
    public function block_highlighted($context, array $blocks = array())
    {
        // line 138
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 144
    public function block_help($context, array $blocks = array())
    {
        // line 145
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 150
    public function block_content($context, array $blocks = array())
    {
        // line 151
        echo "          <a id=\"main-content\"></a>
          ";
        // line 152
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 158
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 159
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 160
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 169
    public function block_footer($context, array $blocks = array())
    {
        // line 170
        echo "    <footer class=\"footer\" role=\"contentinfo\">
      ";
        // line 171
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/examen402160151/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 171,  324 => 170,  321 => 169,  314 => 160,  311 => 159,  308 => 158,  302 => 152,  299 => 151,  296 => 150,  289 => 145,  286 => 144,  279 => 138,  276 => 137,  269 => 119,  266 => 118,  263 => 117,  256 => 110,  253 => 109,  250 => 108,  244 => 164,  241 => 163,  238 => 158,  235 => 157,  231 => 154,  228 => 150,  225 => 148,  222 => 147,  219 => 144,  216 => 143,  213 => 141,  210 => 140,  207 => 137,  204 => 136,  198 => 133,  196 => 130,  195 => 129,  194 => 128,  193 => 127,  192 => 126,  190 => 125,  187 => 123,  184 => 122,  181 => 117,  178 => 116,  175 => 114,  172 => 113,  169 => 108,  166 => 107,  159 => 103,  156 => 102,  151 => 97,  147 => 95,  144 => 94,  138 => 91,  135 => 90,  132 => 89,  128 => 86,  119 => 80,  116 => 79,  113 => 78,  109 => 76,  106 => 75,  100 => 73,  98 => 72,  93 => 71,  91 => 68,  90 => 66,  88 => 65,  85 => 64,  79 => 169,  77 => 168,  74 => 167,  72 => 102,  69 => 100,  65 => 64,  63 => 63,  54 => 55,  52 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/examen402160151/templates/page.html.twig", "C:\\wamp64\\www\\ex2drupal\\themes\\examen402160151\\templates\\page.html.twig");
    }
}
