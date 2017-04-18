<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_6db09f315d6eea18e83b118d67e585891e3f3aa04da1716b682587d6d5495860 extends Twig_Template
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
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_211219027645f72693bf5e657a227011eb2f43db5fcbf82f820076185872f44c = (isset($context["php_version"]) ? $context["php_version"] : null)) && is_string($__internal_7eab5f4384417de8e4044bac24f4b1bdf22b1d3332ec6fd3269970bad4c5df19 = "5.4") && ('' === $__internal_7eab5f4384417de8e4044bac24f4b1bdf22b1d3332ec6fd3269970bad4c5df19 || 0 === strpos($__internal_211219027645f72693bf5e657a227011eb2f43db5fcbf82f820076185872f44c, $__internal_7eab5f4384417de8e4044bac24f4b1bdf22b1d3332ec6fd3269970bad4c5df19)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", (isset($context["php_version"]) ? $context["php_version"] : null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/Users/emil/Documents/code/lundbergsab/user/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
