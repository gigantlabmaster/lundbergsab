<?php

/* partials/page_head.html.twig */
class __TwigTemplate_b7d51ef203255f99468952a2fabbf3073685461294c3b9102c4f325f95224724 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/page_head.html.twig", "partials/page_head.html.twig", 1);
        $this->blocks = array(
            'head_title' => array($this, 'block_head_title'),
            'head_application' => array($this, 'block_head_application'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/page_head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_title($context, array $blocks = array())
    {
        // line 4
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 5
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo "</title>
    ";
        // line 6
        $this->loadTemplate("partials/metadata.html.twig", "partials/page_head.html.twig", 6)->display($context);
        // line 7
        echo "    <link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method"), "html", null, true);
        echo "\" />
    ";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 9
            echo "        <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array()), "html", null, true);
            echo "\">
    ";
        }
    }

    // line 13
    public function block_head_application($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "finalize", array());
        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 17
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/page_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  66 => 15,  63 => 14,  60 => 13,  52 => 9,  50 => 8,  45 => 7,  43 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@nucleus/page_head.html.twig\" %}

{% block head_title %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    {% if header.robots %}
        <meta name=\"robots\" content=\"{{ header.robots }}\">
    {% endif %}
{% endblock %}

{% block head_application %}
    {% do gantry.platform.finalize %}
    {{ assets.css()|raw }}

    {{ assets.js()|raw }}
{% endblock %}
", "partials/page_head.html.twig", "/Users/emil/Documents/code/lundbergsab/user/plugins/gantry5/engines/nucleus/templates/partials/page_head.html.twig");
    }
}
