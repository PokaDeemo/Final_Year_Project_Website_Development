<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* database/tracking/tables.twig */
class __TwigTemplate_d461bd653f001e3c049650fb6c9ebc939b13531f99146aac6802a3390d3bafa2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        if (($context["head_version_exists"] ?? null)) {
            // line 3
            echo "    <div id=\"tracked_tables\">
        <h3>";
            // line 4
            echo _gettext("Tracked tables");
            echo "</h3>

        <form method=\"post\" action=\"";
            // line 6
            echo PhpMyAdmin\Url::getFromRoute("/database/tracking");
            echo "\" name=\"trackedForm\"
            id=\"trackedForm\" class=\"ajax\">
            ";
            // line 8
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            echo "
            <table id=\"versions\" class=\"table table-light table-striped table-hover w-auto\">
                <thead class=\"thead-light\">
                    <tr>
                        <th></th>
                        <th>";
            // line 13
            echo _gettext("Table");
            echo "</th>
                        <th>";
            // line 14
            echo _gettext("Last version");
            echo "</th>
                        <th>";
            // line 15
            echo _gettext("Created");
            echo "</th>
                        <th>";
            // line 16
            echo _gettext("Updated");
            echo "</th>
                        <th>";
            // line 17
            echo _gettext("Status");
            echo "</th>
                        <th>";
            // line 18
            echo _gettext("Action");
            echo "</th>
                        <th>";
            // line 19
            echo _gettext("Show");
            echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["versions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 24
                echo "                        <tr>
                            <td class=\"text-center\">
                                <input type=\"checkbox\" name=\"selected_tbl[]\"
                                    class=\"checkall\" id=\"selected_tbl_";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "table_name", [], "any", false, false, false, 27), "html", null, true);
                echo "\"
                                    value=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "table_name", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
                            </td>
                            <th>
                                <label for=\"selected_tbl_";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "table_name", [], "any", false, false, false, 31), "html", null, true);
                echo "\">
                                    ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "table_name", [], "any", false, false, false, 32), "html", null, true);
                echo "
                                </label>
                            </th>
                            <td class=\"right\">
                                ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "version", [], "any", false, false, false, 36), "html", null, true);
                echo "
                            </td>
                            <td>
                                ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "date_created", [], "any", false, false, false, 39), "html", null, true);
                echo "
                            </td>
                            <td>
                                ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["version"], "date_updated", [], "any", false, false, false, 42), "html", null, true);
                echo "
                            </td>
                            <td>
                              <div class=\"wrapper toggleAjax hide\">
                                <div class=\"toggleButton\">
                                  <div title=\"";
                // line 47
                echo _gettext("Click to toggle");
                echo "\" class=\"toggle-container ";
                echo (((twig_get_attribute($this->env, $this->source, $context["version"], "tracking_active", [], "any", false, false, false, 47) == 1)) ? ("on") : ("off"));
                echo "\">
                                    <img src=\"";
                // line 48
                echo twig_escape_filter($this->env, ($context["theme_image_path"] ?? null), "html", null, true);
                echo "toggle-";
                echo twig_escape_filter($this->env, ($context["text_dir"] ?? null), "html", null, true);
                echo ".png\">
                                    <table class=\"pma-table nospacing nopadding\">
                                      <tbody>
                                      <tr>
                                        <td class=\"toggleOn\">
                                          <span class=\"hide\">";
                // line 54
                echo PhpMyAdmin\Url::getFromRoute("/table/tracking", ["db" => twig_get_attribute($this->env, $this->source,                 // line 55
$context["version"], "db_name", [], "any", false, false, false, 55), "table" => twig_get_attribute($this->env, $this->source,                 // line 56
$context["version"], "table_name", [], "any", false, false, false, 56), "version" => twig_get_attribute($this->env, $this->source,                 // line 57
$context["version"], "version", [], "any", false, false, false, 57), "toggle_activation" => "activate_now"]);
                // line 60
                echo "</span>
                                          <div>";
                // line 61
                echo _gettext("active");
                echo "</div>
                                        </td>
                                        <td><div>&nbsp;</div></td>
                                        <td class=\"toggleOff\">
                                          <span class=\"hide\">";
                // line 66
                echo PhpMyAdmin\Url::getFromRoute("/table/tracking", ["db" => twig_get_attribute($this->env, $this->source,                 // line 67
$context["version"], "db_name", [], "any", false, false, false, 67), "table" => twig_get_attribute($this->env, $this->source,                 // line 68
$context["version"], "table_name", [], "any", false, false, false, 68), "version" => twig_get_attribute($this->env, $this->source,                 // line 69
$context["version"], "version", [], "any", false, false, false, 69), "toggle_activation" => "deactivate_now"]);
                // line 72
                echo "</span>
                                          <div>";
                // line 73
                echo _gettext("not active");
                echo "</div>
                                        </td>
                                      </tr>
                                      </tbody>
                                    </table>
                                    <span class=\"hide callback\"></span>
                                    <span class=\"hide text_direction\">";
                // line 79
                echo twig_escape_filter($this->env, ($context["text_dir"] ?? null), "html", null, true);
                echo "</span>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>
                                <a class=\"delete_tracking_anchor ajax\" href=\"";
                // line 85
                echo PhpMyAdmin\Url::getFromRoute("/database/tracking");
                echo "\" data-post=\"";
                // line 86
                echo PhpMyAdmin\Url::getCommon(["db" =>                 // line 87
($context["db"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/table/tracking"), "back" => PhpMyAdmin\Url::getFromRoute("/database/tracking"), "table" => twig_get_attribute($this->env, $this->source,                 // line 90
$context["version"], "table_name", [], "any", false, false, false, 90), "delete_tracking" => true], "");
                // line 92
                echo "\">
                                    ";
                // line 93
                echo \PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Delete tracking"));
                echo "
                                </a>
                            </td>
                            <td>
                                <a href=\"";
                // line 97
                echo PhpMyAdmin\Url::getFromRoute("/table/tracking");
                echo "\" data-post=\"";
                // line 98
                echo PhpMyAdmin\Url::getCommon(["db" =>                 // line 99
($context["db"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/table/tracking"), "back" => PhpMyAdmin\Url::getFromRoute("/database/tracking"), "table" => twig_get_attribute($this->env, $this->source,                 // line 102
$context["version"], "table_name", [], "any", false, false, false, 102)], "");
                // line 103
                echo "\">
                                    ";
                // line 104
                echo \PhpMyAdmin\Html\Generator::getIcon("b_versions", _gettext("Versions"));
                echo "
                                </a>
                                <a href=\"";
                // line 106
                echo PhpMyAdmin\Url::getFromRoute("/table/tracking");
                echo "\" data-post=\"";
                // line 107
                echo PhpMyAdmin\Url::getCommon(["db" =>                 // line 108
($context["db"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/table/tracking"), "back" => PhpMyAdmin\Url::getFromRoute("/database/tracking"), "table" => twig_get_attribute($this->env, $this->source,                 // line 111
$context["version"], "table_name", [], "any", false, false, false, 111), "report" => true, "version" => twig_get_attribute($this->env, $this->source,                 // line 113
$context["version"], "version", [], "any", false, false, false, 113)], "");
                // line 114
                echo "\">
                                    ";
                // line 115
                echo \PhpMyAdmin\Html\Generator::getIcon("b_report", _gettext("Tracking report"));
                echo "
                                </a>
                                <a href=\"";
                // line 117
                echo PhpMyAdmin\Url::getFromRoute("/table/tracking");
                echo "\" data-post=\"";
                // line 118
                echo PhpMyAdmin\Url::getCommon(["db" =>                 // line 119
($context["db"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/table/tracking"), "back" => PhpMyAdmin\Url::getFromRoute("/database/tracking"), "table" => twig_get_attribute($this->env, $this->source,                 // line 122
$context["version"], "table_name", [], "any", false, false, false, 122), "snapshot" => true, "version" => twig_get_attribute($this->env, $this->source,                 // line 124
$context["version"], "version", [], "any", false, false, false, 124)], "");
                // line 125
                echo "\">
                                    ";
                // line 126
                echo \PhpMyAdmin\Html\Generator::getIcon("b_props", _gettext("Structure snapshot"));
                echo "
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                </tbody>
            </table>
            ";
            // line 133
            $this->loadTemplate("select_all.twig", "database/tracking/tables.twig", 133)->display(twig_to_array(["theme_image_path" =>             // line 134
($context["theme_image_path"] ?? null), "text_dir" =>             // line 135
($context["text_dir"] ?? null), "form_name" => "trackedForm"]));
            // line 138
            echo "            <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete_tracking\"
                    title=\"";
            // line 139
            echo _gettext("Delete tracking");
            echo "\">
                ";
            // line 140
            echo \PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Delete tracking"));
            echo "
            </button>
        </form>
    </div>
";
        }
        // line 145
        if (($context["untracked_tables_exists"] ?? null)) {
            // line 146
            echo "    <h3>";
            echo _gettext("Untracked tables");
            echo "</h3>
    <form method=\"post\" action=\"";
            // line 147
            echo PhpMyAdmin\Url::getFromRoute("/database/tracking");
            echo "\" name=\"untrackedForm\"
        id=\"untrackedForm\" class=\"ajax\">
        ";
            // line 149
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            echo "
        <table id=\"noversions\" class=\"table table-light table-striped table-hover w-auto\">
            <thead class=\"thead-light\">
                <tr>
                    <th></th>
                    <th>";
            // line 154
            echo _gettext("Table");
            echo "</th>
                    <th>";
            // line 155
            echo _gettext("Action");
            echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["untracked_tables"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["table_name"]) {
                // line 160
                echo "                  ";
                if ((PhpMyAdmin\Tracker::getVersion(($context["db"] ?? null), $context["table_name"]) ==  -1)) {
                    // line 161
                    echo "                    <tr>
                        <td class=\"text-center\">
                            <input type=\"checkbox\" name=\"selected_tbl[]\"
                                class=\"checkall\" id=\"selected_tbl_";
                    // line 164
                    echo twig_escape_filter($this->env, $context["table_name"], "html", null, true);
                    echo "\"
                                value=\"";
                    // line 165
                    echo twig_escape_filter($this->env, $context["table_name"], "html", null, true);
                    echo "\">
                        </td>
                        <th>
                            <label for=\"selected_tbl_";
                    // line 168
                    echo twig_escape_filter($this->env, $context["table_name"], "html", null, true);
                    echo "\">
                                ";
                    // line 169
                    echo twig_escape_filter($this->env, $context["table_name"], "html", null, true);
                    echo "
                            </label>
                        </th>
                        <td>
                            <a href=\"";
                    // line 173
                    echo PhpMyAdmin\Url::getFromRoute("/table/tracking", twig_array_merge(($context["url_params"] ?? null), ["db" =>                     // line 174
($context["db"] ?? null), "table" =>                     // line 175
$context["table_name"]]));
                    // line 176
                    echo "\">
                                ";
                    // line 177
                    echo \PhpMyAdmin\Html\Generator::getIcon("eye", _gettext("Track table"));
                    echo "
                            </a>
                        </td>
                    </tr>
                  ";
                }
                // line 182
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "            </tbody>
        </table>
        ";
            // line 185
            $this->loadTemplate("select_all.twig", "database/tracking/tables.twig", 185)->display(twig_to_array(["theme_image_path" =>             // line 186
($context["theme_image_path"] ?? null), "text_dir" =>             // line 187
($context["text_dir"] ?? null), "form_name" => "untrackedForm"]));
            // line 190
            echo "        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"track\" title=\"";
            echo _gettext("Track table");
            echo "\">
            ";
            // line 191
            echo \PhpMyAdmin\Html\Generator::getIcon("eye", _gettext("Track table"));
            echo "
        </button>
    </form>
";
        }
    }

    public function getTemplateName()
    {
        return "database/tracking/tables.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 191,  384 => 190,  382 => 187,  381 => 186,  380 => 185,  376 => 183,  370 => 182,  362 => 177,  359 => 176,  357 => 175,  356 => 174,  355 => 173,  348 => 169,  344 => 168,  338 => 165,  334 => 164,  329 => 161,  326 => 160,  322 => 159,  315 => 155,  311 => 154,  303 => 149,  298 => 147,  293 => 146,  291 => 145,  283 => 140,  279 => 139,  276 => 138,  274 => 135,  273 => 134,  272 => 133,  268 => 131,  257 => 126,  254 => 125,  252 => 124,  251 => 122,  250 => 119,  249 => 118,  246 => 117,  241 => 115,  238 => 114,  236 => 113,  235 => 111,  234 => 108,  233 => 107,  230 => 106,  225 => 104,  222 => 103,  220 => 102,  219 => 99,  218 => 98,  215 => 97,  208 => 93,  205 => 92,  203 => 90,  202 => 87,  201 => 86,  198 => 85,  189 => 79,  180 => 73,  177 => 72,  175 => 69,  174 => 68,  173 => 67,  172 => 66,  165 => 61,  162 => 60,  160 => 57,  159 => 56,  158 => 55,  157 => 54,  147 => 48,  141 => 47,  133 => 42,  127 => 39,  121 => 36,  114 => 32,  110 => 31,  104 => 28,  100 => 27,  95 => 24,  91 => 23,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  52 => 8,  47 => 6,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/tracking/tables.twig", "D:\\MyPhpAdmin\\Xampp\\phpMyAdmin\\templates\\database\\tracking\\tables.twig");
    }
}
