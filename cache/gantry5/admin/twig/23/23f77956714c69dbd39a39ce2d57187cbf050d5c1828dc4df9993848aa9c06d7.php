<?php

/* @gantry-admin/partials/header.html.twig */
class __TwigTemplate_409c06a6402a1fde731fa7562031c5a4e3be11e06986bdf48656d35d6cc15b82 extends Twig_Template
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
        echo "<div class=\"g-grid\">
    <div class=\"g-block\">
        <div class=\"g-content clearfix\">
            <span class=\"theme-title\"><i class=\"fa fa-tint\" aria-hidden=\"true\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_THEME"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "title", array()));
        echo " <small>(v";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "version", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "name", array()));
        echo ")</small></span>

            ";
        // line 6
        $context["settings_url"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "settings", array());
        // line 7
        echo "            ";
        $context["settings_key"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "settings_key", array());
        // line 8
        echo "            <ul class=\"float-right\">
                <li ";
        // line 9
        echo ((((isset($context["location"]) ? $context["location"] : null) == "configurations")) ? ("class=\"active\"") : (""));
        echo ">
                    <a data-g5-ajaxify data-g5-ajaxify-target=\"[data-g5-content]\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations"), "method"));
        echo "\"><i class=\"fa fa-fw fa-th\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_OUTLINES"), "html", null, true);
        echo "</a>
                </li>
                <li ";
        // line 12
        echo ((((isset($context["location"]) ? $context["location"] : null) == "positions")) ? ("class=\"active\"") : (""));
        echo ">
                    <a data-g5-ajaxify data-g5-ajaxify-target=\"[data-g5-content]\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "positions"), "method"));
        echo "\"><i class=\"fa fa-fw fa-object-group\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_POSITIONS"), "html", null, true);
        echo "</a>
                </li>
                <li ";
        // line 15
        echo ((((isset($context["location"]) ? $context["location"] : null) == "menu")) ? ("class=\"active\"") : (""));
        echo ">
                    <a data-g5-ajaxify data-g5-ajaxify-target=\"[data-g5-content]\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu"), "method"));
        echo "\"><i class=\"fa fa-fw fa-bars\" aria-hidden=\"true\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_MENU"), "html", null, true);
        echo "</span></a>
                </li>
                <li ";
        // line 18
        echo ((((isset($context["location"]) ? $context["location"] : null) == "about")) ? ("class=\"active\"") : (""));
        echo ">
                    <a data-g5-ajaxify data-g5-ajaxify-target=\"[data-g5-content]\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "about"), "method"));
        echo "\"><i class=\"fa fa-fw fa-question-circle\" aria-hidden=\"true\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ABOUT"), "html", null, true);
        echo "</span></a>
                </li>
                <li data-g-extras data-g-popover data-g-popover-style=\"extras\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"presentation\">
                    <a href=\"#\"><i class=\"fa fa-fw fa-cog\" aria-hidden=\"true\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EXTRAS"), "html", null, true);
        echo " <i class=\"small fa fa-fw fa-chevron-down\" aria-hidden=\"true\"></i></a>
                    <ul data-popover-content class=\"hidden\" tabindex=\"0\">
                        ";
        // line 24
        $context["prod_mode"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PRODUCTION");
        // line 25
        echo "                        ";
        $context["dev_mode"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DEVELOPMENT");
        // line 26
        echo "                        <li data-g-devprod=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array(0 => (isset($context["dev_mode"]) ? $context["dev_mode"] : null), 1 => (isset($context["prod_mode"]) ? $context["prod_mode"] : null))), "html_attr");
        echo "\">
                            <i class=\"fa fa-fw fa-wrench\" aria-hidden=\"true\"></i> <span class=\"devprod-mode\">";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "global", array()), "production", array())) ? ((isset($context["prod_mode"]) ? $context["prod_mode"] : null)) : ((isset($context["dev_mode"]) ? $context["dev_mode"] : null))), "html", null, true);
        echo "</span>
                            <div class=\"float-right\">
                                <span class=\"enabler\" role=\"checkbox\" aria-checked=\"";
        // line 29
        echo (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "global", array()), "production", array())) ? ("true") : ("false"));
        echo "\" tabindex=\"0\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PRODUCTION_MODE_ARIA_LABEL"), "html", null, true);
        echo "\">
                                <input type=\"hidden\" name=\"production_mode\" value=\"";
        // line 30
        echo (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "global", array()), "production", array())) ? (1) : (0));
        echo "\">
                                    <span class=\"toggle\"><span class=\"knob\"></span></span>
                                </span>
                            </div>
                        </li>
                        <li data-g-popover-follow>
                            <a tabindex=\"0\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "cache"), "method"));
        echo "\" data-ajax-action data-ajax-action-method=\"get\" data-ajax-action-indicator=\"li[data-g-extras]\"><i class=\"fa fa-fw fa-recycle\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CLEAR_CACHE"), "html", null, true);
        echo "</a>
                        </li>
                        ";
        // line 38
        if ((isset($context["settings_url"]) ? $context["settings_url"] : null)) {
            // line 39
            echo "                            <li>
                                <a tabindex=\"0\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["settings_url"]) ? $context["settings_url"] : null));
            echo "\" data-settings-key=\"";
            echo twig_escape_filter($this->env, (isset($context["settings_key"]) ? $context["settings_key"] : null));
            echo "\"><i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "name", array()), "html", null, true);
            echo "\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PLATFORM_SETTINGS"), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 43
        echo "                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  135 => 40,  132 => 39,  130 => 38,  123 => 36,  114 => 30,  108 => 29,  103 => 27,  98 => 26,  95 => 25,  93 => 24,  88 => 22,  80 => 19,  76 => 18,  69 => 16,  65 => 15,  58 => 13,  54 => 12,  47 => 10,  43 => 9,  40 => 8,  37 => 7,  35 => 6,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/header.html.twig", "/Users/emil/Documents/code/lundbergsab/user/plugins/gantry5/admin/templates/partials/header.html.twig");
    }
}
