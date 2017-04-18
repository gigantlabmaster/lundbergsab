<?php

/* pages.html.twig */
class __TwigTemplate_e47e3d7ed509f533b1e3ca45a7376041bcfc04b6e69d4117d902ca76758d6170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 8
            $context["context"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array(0 => true), "method");
        }
        // line 11
        if ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => "new"), "method")) {
            // line 12
            $context["mode"] = "new";
        } elseif (        // line 13
(isset($context["context"]) ? $context["context"] : null)) {
            // line 14
            $context["mode"] = "edit";
            // line 15
            if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) {
                // line 16
                $context["page_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()))));
                // line 17
                $context["exists"] = true;
                // line 18
                $context["title"] = (((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "title", array()))));
            } else {
                // line 20
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 23
            $context["mode"] = "list";
            // line 24
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
        }
        // line 27
        $context["modular"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modular", array())) ? ("modular_") : (""));
        // line 28
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "warnings", array()), "delete_page", array());
        // line 29
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) ? ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) : ("en"));
        // line 30
        $context["page_lang"] = $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "language", array());
        // line 31
        $context["type"] = "page";
        // line 44
        $context["preview_html"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) : ("/"));
        // line 45
        $context["preview_link"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "routable", array())) ? ((("<a class=\"button\" target=\"_blank\" href=\"" . (isset($context["preview_html"]) ? $context["preview_html"] : null)) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 35
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 111
    public function block_titlebar($context, array $blocks = array())
    {
        // line 112
        echo "    <div class=\"button-bar\">
        ";
        // line 113
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 114
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>

            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> ";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
            echo "</a></li>
                    ";
            // line 125
            if ( !twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))) {
                // line 126
                echo "                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 128
            echo "                </ul>
            </div>
            ";
            // line 130
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array())) {
                // line 131
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 134
                $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), (isset($context["admin_lang"]) ? $context["admin_lang"] : null), array(), "array");
                // line 135
                echo "                        ";
                echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null)), "html", null, true);
                echo "
                    </button>
                    ";
                // line 137
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "languages_enabled", array())) > 1)) {
                    // line 138
                    echo "                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                    // line 142
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "languages_enabled", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 143
                        echo "                            ";
                        $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 144
                        echo "                            ";
                        if (($context["langCode"] != (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                            // line 145
                            echo "                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => (((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "slug", array())) . "/pages/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null)), "html", null, true);
                            echo "</a></li>
                            ";
                        }
                        // line 147
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo "                    </ul>
                    ";
                }
                // line 150
                echo "                </div>
            ";
            }
            // line 152
            echo "
        ";
        } elseif ((        // line 153
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 154
            echo "
            ";
            // line 155
            echo (isset($context["preview_link"]) ? $context["preview_link"] : null);
            echo "
            <a class=\"button\" href=\"";
            // line 156
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/pages\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
            ";
            // line 157
            if ((isset($context["exists"]) ? $context["exists"] : null)) {
                // line 158
                echo "                <a class=\"button disable-after-click\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "copy"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> ";
                // line 159
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
                echo "</a>
                ";
                // line 160
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin-pro", array(), "array"), "enabled", array())) {
                    // line 161
                    echo "                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_PRO.REVISIONS"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 163
                echo "                ";
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 164
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-close\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 166
                    echo "                    <a class=\"button disable-after-click\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 168
                echo "            ";
            }
            // line 169
            echo "
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
                ";
            // line 172
            if (((isset($context["exists"]) ? $context["exists"] : null) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()))) {
                // line 173
                echo "                    ";
                if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array())) {
                    // line 174
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 178
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 179
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 180
                        echo "                                ";
                        if (($context["langCode"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 181
                            echo "                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo twig_escape_filter($this->env, $context["langCode"], "html", null, true);
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null)), "html", null, true);
                            echo "</button>
                                ";
                        }
                        // line 183
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 184
                    echo "                        </ul>
                    ";
                }
                // line 186
                echo "                ";
            }
            // line 187
            echo "            </div>


        ";
        }
        // line 191
        echo "    </div>
    ";
        // line 192
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 193
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 194
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 195
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 196
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))), "html", null, true);
            echo " <i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "menu", array()), "html", null, true);
            echo "</i>
        </h1>
    ";
        } else {
            // line 199
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 203
    public function block_content($context, array $blocks = array())
    {
        // line 204
        echo "    <div class=\"clear admin-pages\">
    ";
        // line 205
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 206
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 206)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/page"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 207
            echo "    ";
        } elseif (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 208
            echo "        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                ";
            // line 211
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()) && (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                // line 212
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 214
                if ((isset($context["exists"]) ? $context["exists"] : null)) {
                    // line 215
                    echo "                                ";
                    echo twig_escape_filter($this->env, (isset($context["page_lang"]) ? $context["page_lang"] : null), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 217
                    echo "                                ";
                    echo twig_escape_filter($this->env, (isset($context["admin_lang"]) ? $context["admin_lang"] : null), "html", null, true);
                    echo "
                            ";
                }
                // line 219
                echo "                        </button>
                        ";
                // line 220
                if (((isset($context["exists"]) ? $context["exists"] : null) && (twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array())) > 1))) {
                    // line 221
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 225
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array()));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 226
                        echo "                                    ";
                        if (($context["language"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 227
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "\" redirect=\"";
                            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()), "/"), "html", null, true);
                            echo "\" form=\"blueprints\">";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "</button>
                                    ";
                        }
                        // line 229
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 230
                    echo "                            </ul>
                        ";
                }
                // line 232
                echo "                    </div>
                ";
            }
            // line 234
            echo "
                ";
            // line 235
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array())) {
                // line 236
                echo "                ";
                $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 237
                echo "                ";
                $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 238
                echo "                ";
                $context["maxLen"] = max(array(0 => twig_length_filter($this->env, (isset($context["normalText"]) ? $context["normalText"] : null)), 1 => twig_length_filter($this->env, (isset($context["expertText"]) ? $context["expertText"] : null))));
                // line 239
                echo "                ";
                $context["normalText"] = $this->getAttribute($this, "spanToggle", array(0 => (isset($context["normalText"]) ? $context["normalText"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method");
                // line 240
                echo "                ";
                $context["expertText"] = $this->getAttribute($this, "spanToggle", array(0 => (isset($context["expertText"]) ? $context["expertText"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method");
                // line 241
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 243
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array()), "html", null, true);
                echo "normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 244
                echo (isset($context["normalText"]) ? $context["normalText"] : null);
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 245
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array()), "html", null, true);
                echo "expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 246
                echo (isset($context["expertText"]) ? $context["expertText"] : null);
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 251
            echo "
            </div>

            ";
            // line 254
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array()) && ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0"))) {
                // line 255
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 255)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 256
                echo "            ";
            } else {
                // line 257
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 257)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => (("admin/pages/" . (isset($context["modular"]) ? $context["modular"] : null)) . "raw")), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 258
                echo "            ";
            }
            // line 259
            echo "        </div>
    ";
        } else {
            // line 261
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"";
            // line 263
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array(0 => array("id" => "mode", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_MODES")), 1 => array("id" => "type", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_TYPES")), 2 => array("id" => "access", "name" => $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACCESS_LEVELS")))), "html_attr");
            echo "\" data-filter-types=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "types", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))), "html_attr");
            echo "\" data-filter-access-levels=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "accessLevels", array())), "html_attr");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS"), "html", null, true);
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES"), "html", null, true);
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 269
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
            echo "</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                ";
            // line 275
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null), 1 => 0, 2 => $context), "method");
            echo "
            </ul>
            ";
            // line 277
            $this->loadTemplate("partials/page-legend.html.twig", "pages.html.twig", 277)->display($context);
            // line 278
            echo "        </div>
    ";
        }
        // line 280
        echo "    </div>

    ";
        // line 282
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 283
            echo "
        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 285
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 285)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "admin/pages/new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 286
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 289
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "pages.html.twig", 289)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "admin/pages/new_folder"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 290
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 293
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 293)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "admin/pages/modular_new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 294
            echo "        </div>

    ";
        }
        // line 297
        echo "
    ";
        // line 298
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 299
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 301
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 301)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "admin/pages/move"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 302
            echo "    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 304
            $this->loadTemplate(array(0 => "partials/page-revisions.html.twig", 1 => "empty.html.twig"), "pages.html.twig", 304)->display(array_merge($context, array("data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 305
            echo "    </div>
    ";
        }
        // line 307
        echo "
    ";
        // line 308
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "pages.html.twig", 308)->display($context);
        // line 309
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 314
        if ((isset($context["context"]) ? $context["context"] : null)) {
            // line 315
            echo "                    <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "title", array()), "html", null, true);
            echo "</strong>
                ";
        }
        // line 317
        echo "            </p>
            <p class=\"bigger\">
              ";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 329
        try {
            $this->loadTemplate("partials/admin-pro-pages-addons.html.twig", "pages.html.twig", 329)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 330
        echo "
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)) . (isset($context["input"]) ? $context["input"] : null)) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 48
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "config", array(), "array"), "system", array()), "param_sep", array());
            // line 49
            echo "    ";
            $context["base_url"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_relative", array(), "array");
            // line 50
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_simple", array(), "array");
            // line 51
            echo "    ";
            $context["admin_route"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_route", array(), "array");
            // line 52
            echo "    ";
            $context["admin_lang"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_lang", array(), "array");
            // line 53
            echo "    ";
            $context["warn"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "warn", array(), "array");
            // line 54
            echo "    ";
            $context["uri"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "uri", array(), "array");
            // line 55
            echo "
    ";
            // line 56
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "admin", array()), "children_display_order", array()) == "collection") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "by", array()))) {
                // line 57
                echo "        ";
                $context["pcol"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array()), "asc")) : ("asc"))), "method");
                // line 58
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, (isset($context["pcol"]) ? $context["pcol"] : null)), "html", null, true);
                echo "
    ";
            } else {
                // line 60
                echo "        ";
                $context["pcol"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method");
                // line 61
                echo "    ";
            }
            // line 62
            echo "
    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pcol"]) ? $context["pcol"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 64
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.FOLDER") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE") . " &bull; "))) . (($this->getAttribute(                // line 65
$context["p"], "modular", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODULAR") . " &bull; ")) : (""))) . (($this->getAttribute(                // line 66
$context["p"], "routable", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ROUTABLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_ROUTABLE") . " &bull; ")))) . (($this->getAttribute(                // line 67
$context["p"], "visible", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VISIBLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_VISIBLE") . " &bull; ")))) . (($this->getAttribute(                // line 68
$context["p"], "published", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PUBLISHED") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_PUBLISHED") . " &bull; "))));
                // line 69
                echo "        ";
                // line 70
                echo "        ";
                // line 71
                echo "            ";
                // line 72
                echo "        ";
                // line 73
                echo "            ";
                // line 74
                echo "        ";
                // line 75
                echo "
        ";
                // line 76
                $context["page_url"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->getPageUrl($context, $context["p"]);
                // line 77
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", array()), "html", null, true);
                echo "\">
            <div class=\"row\">
                <span ";
                // line 80
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo ">
                <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 81
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <span data-hint=\"";
                // line 83
                echo twig_trim_filter((isset($context["description"]) ? $context["description"] : null), " &bull; ");
                echo "\" class=\"hint--right\">
                <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["page_url"]) ? $context["page_url"] : null), "html", null, true);
                echo "\" class=\"page-edit\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()));
                echo "</a>
                </span>
                ";
                // line 86
                if ($this->getAttribute($context["p"], "language", array())) {
                    // line 87
                    echo "                    <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", array()) == (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                        echo "info";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "language", array()), "html", null, true);
                    echo "</span>
                ";
                }
                // line 89
                echo "                <span class=\"page-home\">";
                echo (($this->getAttribute($context["p"], "home", array())) ? ("<i class=\"fa fa-home\"></i>") : (""));
                echo "</span>
                <span class=\"page-tools\">

                    ";
                // line 92
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 93
                    echo "                    <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . (isset($context["separator"]) ? $context["separator"] : null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 95
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . (isset($context["separator"]) ? $context["separator"] : null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 97
                echo "                </span>
                <p class=\"page-route\">";
                // line 98
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) : ($this->getAttribute($context["p"], "route", array()))), "html", null, true);
                echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "template", array(), "method"), "html", null, true);
                echo "</p>
            </div>
            ";
                // line 100
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                    // line 101
                    echo "
            <ul class=\"depth-";
                    // line 102
                    echo twig_escape_filter($this->env, ((isset($context["depth"]) ? $context["depth"] : null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                ";
                    // line 103
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => ((isset($context["depth"]) ? $context["depth"] : null) + 1), 2 => (isset($context["twig_vars"]) ? $context["twig_vars"] : null)), "method");
                    echo "
            </ul>
            ";
                }
                // line 106
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  878 => 106,  872 => 103,  868 => 102,  865 => 101,  863 => 100,  856 => 98,  853 => 97,  847 => 95,  841 => 93,  839 => 92,  832 => 89,  822 => 87,  820 => 86,  813 => 84,  809 => 83,  802 => 81,  798 => 80,  793 => 78,  790 => 77,  788 => 76,  785 => 75,  783 => 74,  781 => 73,  779 => 72,  777 => 71,  775 => 70,  773 => 69,  771 => 68,  770 => 67,  769 => 66,  768 => 65,  766 => 64,  762 => 63,  759 => 62,  756 => 61,  753 => 60,  747 => 58,  744 => 57,  742 => 56,  739 => 55,  736 => 54,  733 => 53,  730 => 52,  727 => 51,  724 => 50,  721 => 49,  718 => 48,  704 => 47,  686 => 4,  673 => 3,  668 => 330,  661 => 329,  653 => 324,  649 => 323,  642 => 319,  638 => 317,  630 => 315,  628 => 314,  623 => 312,  618 => 309,  616 => 308,  613 => 307,  609 => 305,  607 => 304,  603 => 302,  601 => 301,  597 => 299,  595 => 298,  592 => 297,  587 => 294,  585 => 293,  580 => 290,  578 => 289,  573 => 286,  571 => 285,  567 => 283,  565 => 282,  561 => 280,  557 => 278,  555 => 277,  550 => 275,  542 => 270,  538 => 269,  532 => 266,  520 => 263,  516 => 261,  512 => 259,  509 => 258,  506 => 257,  503 => 256,  500 => 255,  498 => 254,  493 => 251,  485 => 246,  473 => 245,  469 => 244,  457 => 243,  453 => 241,  450 => 240,  447 => 239,  444 => 238,  441 => 237,  438 => 236,  436 => 235,  433 => 234,  429 => 232,  425 => 230,  419 => 229,  409 => 227,  406 => 226,  402 => 225,  396 => 221,  394 => 220,  391 => 219,  385 => 217,  379 => 215,  377 => 214,  373 => 212,  371 => 211,  366 => 208,  363 => 207,  360 => 206,  358 => 205,  355 => 204,  352 => 203,  344 => 199,  336 => 196,  333 => 195,  331 => 194,  326 => 193,  324 => 192,  321 => 191,  315 => 187,  312 => 186,  308 => 184,  302 => 183,  292 => 181,  289 => 180,  286 => 179,  282 => 178,  276 => 174,  273 => 173,  271 => 172,  267 => 171,  263 => 169,  260 => 168,  254 => 166,  246 => 164,  243 => 163,  237 => 161,  235 => 160,  231 => 159,  224 => 158,  222 => 157,  216 => 156,  212 => 155,  209 => 154,  207 => 153,  204 => 152,  200 => 150,  196 => 148,  190 => 147,  182 => 145,  179 => 144,  176 => 143,  172 => 142,  166 => 138,  164 => 137,  158 => 135,  156 => 134,  151 => 131,  149 => 130,  145 => 128,  139 => 126,  137 => 125,  133 => 124,  124 => 118,  114 => 114,  112 => 113,  109 => 112,  106 => 111,  99 => 41,  96 => 40,  89 => 37,  86 => 36,  83 => 35,  80 => 34,  77 => 33,  73 => 1,  71 => 45,  69 => 44,  67 => 31,  65 => 30,  63 => 29,  61 => 28,  59 => 27,  56 => 24,  54 => 23,  50 => 20,  47 => 18,  45 => 17,  43 => 16,  41 => 15,  39 => 14,  37 => 13,  35 => 12,  33 => 11,  30 => 8,  28 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}

{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}

{% if uri.param('new') %}
    {% set mode = 'new' %}
{%  elseif context %}
    {% set mode = 'edit' %}
    {% if context.exists %}
        {% set page_url = base_url ~ '/pages' ~ (context.header.routes.default ?: context.rawRoute) %}
        {% set exists = true %}
        {% set title = (context.exists ? \"PLUGIN_ADMIN.EDIT\"|tu : \"PLUGIN_ADMIN.CREATE\"|tu ) ~ \" \" ~ (context.header.title ?: context.title) %}
    {% else %}
        {% set title = \"PLUGIN_ADMIN.ADD_PAGE\"|tu %}
    {% endif %}
{% else %}
    {% set mode = 'list' %}
    {% set title = \"PLUGIN_ADMIN.PAGES\"|tu %}
{% endif %}

{% set modular = context.modular ? 'modular_' : '' %}
{% set warn = config.plugins.admin.warnings.delete_page %}
{% set admin_lang = admin.session.admin_lang ?: 'en' %}
{% set page_lang = context.language %}
{% set type = 'page' %}

{% block stylesheets %}
    {% if mode == 'edit' %}
        {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (context.home ? '' : context.route)) ?: '/' %}
{% set preview_link = context.routable ? '<a class=\"button\" target=\"_blank\" href=\"' ~ preview_html ~ '\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>' : '' %}

{% macro loop(page, depth, twig_vars) %}
    {% set separator = twig_vars['config'].system.param_sep %}
    {% set base_url = twig_vars['base_url_relative'] %}
    {% set base_url_simple = twig_vars['base_url_simple'] %}
    {% set admin_route = twig_vars['admin_route'] %}
    {% set admin_lang = twig_vars['admin_lang'] %}
    {% set warn = twig_vars['warn'] %}
    {% set uri = twig_vars['uri'] %}

    {% if page.header.admin.children_display_order == 'collection' and page.header.content.order.by %}
        {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir|default('asc')) %}
        {{ dump(pcol) }}
    {% else %}
        {% set pcol = page.children() %}
    {% endif %}

    {% for p in pcol %}
        {% set description = (not p.page ? \"PLUGIN_ADMIN.FOLDER\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.PAGE\"|tu ~ ' &bull; ') ~
                             (p.modular ? \"PLUGIN_ADMIN.MODULAR\"|tu ~ ' &bull; ' : '') ~
                             (p.routable ? \"PLUGIN_ADMIN.ROUTABLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_ROUTABLE\"|tu ~ ' &bull; ') ~
                             (p.visible ? \"PLUGIN_ADMIN.VISIBLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_VISIBLE\"|tu ~ ' &bull; ') ~
                             (p.published ? \"PLUGIN_ADMIN.PUBLISHED\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_PUBLISHED\"|tu ~ ' &bull; ') %}
        {#{% set page_route =  p.rawRoute|trim('/') %}#}
        {#{% if p.language and p.language != admin_lang %}#}
            {#{% set page_url = base_url_simple ~ '/' ~ p.language ~ '/' ~ admin_route ~ '/pages/' ~ page_route %}#}
        {#{% else %}#}
            {#{% set page_url = base_url ~ '/pages/' ~ page_route  %}#}
        {#{% endif %}#}

        {% set page_url = getPageUrl(p) %}

        <li class=\"page-item\" data-nav-id=\"{{ p.route }}\">
            <div class=\"row\">
                <span {{ p.children(0).count > 0 ? 'data-toggle=\"children\"' : ''}}>
                <i class=\"page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}\"></i>
                </span>
                <span data-hint=\"{{ description|trim(' &bull; ')|raw }}\" class=\"hint--right\">
                <a href=\"{{ page_url }}\" class=\"page-edit\">{{ p.title|e }}</a>
                </span>
                {% if p.language %}
                    <span class=\"badge lang {% if p.language == admin_lang %}info{% endif %}\">{{p.language}}</span>
                {% endif %}
                <span class=\"page-home\">{{ p.home ? '<i class=\"fa fa-home\"></i>' }}</span>
                <span class=\"page-tools\">

                    {% if warn %}
                    <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    {% else %}
                    <a href=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    {% endif %}
                </span>
                <p class=\"page-route\">{{ p.header.routes.default ?: p.route }} <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> {{ p.template() }}</p>
            </div>
            {% if p.children().count > 0 %}

            <ul class=\"depth-{{ depth + 1 }}\" style=\"display:none;\">
                {{ _self.loop(p, depth + 1, twig_vars) }}
            </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}


{% block titlebar %}
    <div class=\"button-bar\">
        {% if mode == 'list' %}
            <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>

            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                    {% if admin.modularTypes is not empty %}
                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                    {% endif %}
                </ul>
            </div>
            {% if admin.multilang %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        {% set langName = admin.siteLanguages[admin_lang] %}
                        {{ langName[:1]|upper ~ langName[1:] }}
                    </button>
                    {%  if admin.languages_enabled|length > 1 %}
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        {% for langCode in admin.languages_enabled %}
                            {% set langName = admin.siteLanguages[langCode] %}
                            {% if langCode != admin_lang %}
                                <li><a href=\"{{ uri.addNonce(base_url_relative ~ theme.slug ~ '/pages/task' ~ config.system.param_sep ~ 'switchlanguage/lang' ~ config.system.param_sep ~ langCode, 'admin-form', 'admin-nonce') }}\">{{ langName[:1]|upper ~ langName[1:] }}</a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                    {% endif %}
                </div>
            {% endif %}

        {% elseif mode == 'edit' %}

            {{ preview_link|raw }}
            <a class=\"button\" href=\"{{ base_url }}/pages\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
            {% if exists %}
                <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'copy', 'admin-form', 'admin-nonce') }}\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> {{ \"PLUGIN_ADMIN.COPY\"|tu }}</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> {{ \"PLUGIN_ADMIN.MOVE\"|tu }}</a>
                {% if config.plugins['admin-pro'].enabled %}
                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> {{ \"PLUGIN_ADMIN_PRO.REVISIONS\"|tu }}</a>
                {% endif %}
                {% if warn %}
                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\"><i class=\"fa fa-close\"></i> {{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
                {% else %}
                    <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                {% endif %}
            {% endif %}

            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
                {% if exists and admin.multilang %}
                    {% if context.untranslatedLanguages %}
                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            {% for langCode in context.untranslatedLanguages %}
                                {% set langName = admin.siteLanguages[langCode] %}
                                {% if langCode != page_lang %}
                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"{{langCode}}\" form=\"blueprints\" type=\"submit\">{{ \"PLUGIN_ADMIN.SAVE_AS\"|tu }} {{ langName[:1]|upper ~ langName[1:] }}</button>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                {% endif %}
            </div>


        {% endif %}
    </div>
    {% if mode == 'new' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</h1>
    {% elseif mode == 'edit' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            {{ context.exists ? \"PLUGIN_ADMIN.EDIT\"|tu : \"PLUGIN_ADMIN.CREATE\"|tu }} <i>{{ context.menu }}</i>
        </h1>
    {% else %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.MANAGE_PAGES\"|tu }}</h1>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"clear admin-pages\">
    {% if mode == 'new' %}
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/page'), data: context } %}
    {% elseif mode == 'edit' %}
        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                {% if admin.multilang and page_lang %}
                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            {% if exists %}
                                {{ page_lang }}
                            {% else %}
                                {{ admin_lang }}
                            {% endif %}
                        </button>
                        {% if exists and context.translatedLanguages|length > 1 %}
                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                {% for language, route in context.translatedLanguages %}
                                    {% if language != page_lang %}
                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"{{language}}\" redirect=\"{{context.rawRoute|trim('/')}}\" form=\"blueprints\">{{ language }}</button>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </div>
                {% endif %}

                {% if context.blueprints.fields %}
                {% set normalText = \"PLUGIN_ADMIN.NORMAL\"|tu %}
                {% set expertText = \"PLUGIN_ADMIN.EXPERT\"|tu %}
                {% set maxLen = max([normalText|length, expertText|length]) %}
                {% set normalText = _self.spanToggle(normalText, maxLen) %}
                {% set expertText = _self.spanToggle(expertText, maxLen) %}
                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '0' %} checked=\"checked\"{% endif %}>
                        <label for=\"normal\">{{ normalText|raw }}</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '1' %} checked=\"checked\"{% endif %}>
                        <label for=\"expert\">{{ expertText|raw }}</label>
                        <a></a>
                    </div>
                </form>
                {% endif %}

            </div>

            {% if context.blueprints.fields and admin.session.expert == '0' %}
                {% include 'partials/blueprints.html.twig' with { blueprints: context.blueprints, data: context } %}
            {% else %}
                {% include 'partials/blueprints-raw.html.twig' with { blueprints: admin.blueprints('admin/pages/'~modular~'raw'), data: context } %}
            {% endif %}
        </div>
    {% else %}
        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"{{ [{'id': 'mode', 'name': 'PLUGIN_ADMIN.PAGE_MODES'|tu}, {'id': 'type', 'name': 'PLUGIN_ADMIN.PAGE_TYPES'|tu}, {'id': 'access', 'name': 'PLUGIN_ADMIN.ACCESS_LEVELS'|tu}] |json_encode|e('html_attr')}}\" data-filter-types=\"{{ admin.types|merge(admin.modularTypes)|json_encode|e('html_attr') }}\" data-filter-access-levels=\"{{ admin.accessLevels|json_encode|e('html_attr') }}\" placeholder=\"{{ \"PLUGIN_ADMIN.ADD_FILTERS\"|tu }}\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.SEARCH_PAGES\"|tu }}\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|tu }}</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|tu }}</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                {{ _self.loop(pages, 0, _context) }}
            </ul>
            {% include 'partials/page-legend.html.twig' %}
        </div>
    {% endif %}
    </div>

    {% if mode == 'list' %}

        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/new'), data: context } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new-folder.html.twig' with { blueprints: admin.blueprints('admin/pages/new_folder'), data: context } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/modular_new'), data: context } %}
        </div>

    {% endif %}

    {% if mode == 'edit' %}
    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('admin/pages/move'), data: context } %}
    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        {% include ['partials/page-revisions.html.twig', 'empty.html.twig'] with { data: context } %}
    </div>
    {% endif %}

    {% include 'partials/modal-changes-detected.html.twig' %}

    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
            <p class=\"bigger\">
                {% if context %}
                    <strong>{{ \"PLUGIN_ADMIN.PAGE\"|tu }}: {{ context.title }}</strong>
                {% endif %}
            </p>
            <p class=\"bigger\">
              {{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC\"|tu }}
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

    {% include 'partials/admin-pro-pages-addons.html.twig' ignore missing %}

{% endblock %}
", "pages.html.twig", "/Users/emil/Documents/code/lundbergsab/user/plugins/admin/themes/grav/templates/pages.html.twig");
    }
}
