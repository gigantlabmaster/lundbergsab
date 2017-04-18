<?php

/* error.html.twig */
class __TwigTemplate_bc93671f2eb74244a165b76f5deb387abbab600725740cd05cd7708ea3c37bf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/page.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ERROR.ERROR"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "http_response_code", array()), "html", null, true);
        echo "</h1>

    ";
        // line 6
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"partials/page.html.twig\" %}

{% block content %}
    <h1>{{ 'PLUGIN_ERROR.ERROR'|t }} {{ header.http_response_code }}</h1>

    {{ content|raw }}
{% endblock %}", "error.html.twig", "/Users/emil/Documents/code/lundbergsab/user/plugins/gantry5/engines/nucleus/templates/error.html.twig");
    }
}
