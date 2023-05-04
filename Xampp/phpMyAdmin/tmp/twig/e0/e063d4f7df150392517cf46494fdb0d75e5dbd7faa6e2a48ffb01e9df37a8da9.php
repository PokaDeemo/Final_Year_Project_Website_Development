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

/* database/central_columns/main.twig */
class __TwigTemplate_3c716f4af902f369d852f5bc7dd04c3b408bf336366eeebe80bcb430ab6f51d4 extends \Twig\Template
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
        echo "<div id=\"add_col_div\" class=\"topmargin\">
    <a href=\"#\">
        <span>";
        // line 4
        echo (((($context["total_rows"] ?? null) > 0)) ? ("+") : ("-"));
        echo "</span>";
        echo _gettext("Add new column");
        // line 5
        echo "    </a>
    <form id=\"add_new\" class=\"new_central_col";
        // line 6
        echo (((($context["total_rows"] ?? null) != 0)) ? (" hide") : (""));
        echo "\"
        method=\"post\" action=\"";
        // line 7
        echo PhpMyAdmin\Url::getFromRoute("/database/central-columns");
        echo "\">
        ";
        // line 8
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        echo "
        <input type=\"hidden\" name=\"add_new_column\" value=\"add_new_column\">
        <div class=\"table-responsive\">
            <table class=\"table table-light w-auto\">
                <thead class=\"thead-light\">
                    <tr>
                        <th></th>
                        <th class=\"\" title=\"\" data-column=\"name\">
                            ";
        // line 16
        echo _gettext("Name");
        // line 17
        echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"type\">
                            ";
        // line 20
        echo _gettext("Type");
        // line 21
        echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"length\">
                            ";
        // line 24
        echo _gettext("Length/Value");
        // line 25
        echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"default\">
                            ";
        // line 28
        echo _gettext("Default");
        // line 29
        echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"collation\">
                            ";
        // line 32
        echo _gettext("Collation");
        // line 33
        echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"attribute\">
                            ";
        // line 36
        echo _gettext("Attribute");
        // line 37
        echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"isnull\">
                            ";
        // line 40
        echo _gettext("Null");
        // line 41
        echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"extra\">
                            ";
        // line 44
        echo _gettext("A_I");
        // line 45
        echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td name=\"col_name\" class=\"nowrap\">
                            ";
        // line 54
        $this->loadTemplate("columns_definitions/column_name.twig", "database/central_columns/main.twig", 54)->display(twig_to_array(["column_number" => 0, "ci" => 0, "ci_offset" => 0, "column_meta" => [], "cfg_relation" => ["centralcolumnswork" => false], "max_rows" =>         // line 62
($context["max_rows"] ?? null)]));
        // line 64
        echo "                        </td>
                        <td name=\"col_type\" class=\"nowrap\">
                          <select class=\"column_type\" name=\"field_type[0]\" id=\"field_0_1\">
                            ";
        // line 67
        echo PhpMyAdmin\Util::getSupportedDatatypes(true);
        echo "
                          </select>
                        </td>
                        <td class=\"nowrap\" name=\"col_length\">
                          <input id=\"field_0_2\" type=\"text\" name=\"field_length[0]\" size=\"8\" value=\"\" class=\"textfield\">
                          <p class=\"enum_notice\" id=\"enum_notice_0_2\">
                            <a href=\"#\" class=\"open_enum_editor\">";
        // line 73
        echo _gettext("Edit ENUM/SET values");
        echo "</a>
                          </p>
                        </td>
                        <td class=\"nowrap\" name=\"col_default\">
                          <select name=\"field_default_type[0]\" id=\"field_0_3\" class=\"default_type\">
                            <option value=\"NONE\">";
        // line 78
        echo _pgettext(        "for default", "None");
        echo "</option>
                            <option value=\"USER_DEFINED\">";
        // line 79
        echo _gettext("As defined:");
        echo "</option>
                            <option value=\"NULL\">NULL</option>
                            <option value=\"CURRENT_TIMESTAMP\">CURRENT_TIMESTAMP</option>
                          </select>
                          ";
        // line 83
        if ((($context["char_editing"] ?? null) == "textarea")) {
            // line 84
            echo "                            <textarea name=\"field_default_value[0]\" cols=\"15\" class=\"textfield default_value\"></textarea>
                          ";
        } else {
            // line 86
            echo "                            <input type=\"text\" name=\"field_default_value[0]\" size=\"12\" value=\"\" class=\"textfield default_value\">
                          ";
        }
        // line 88
        echo "                        </td>
                        <td name=\"collation\" class=\"nowrap\">
                          <select lang=\"en\" dir=\"ltr\" name=\"field_collation[0]\" id=\"field_0_4\">
                            <option value=\"\"></option>
                            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 93
            echo "                              <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 93), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 93), "html", null, true);
            echo "\">
                                ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 95
                echo "                                  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 95), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 95), "html", null, true);
                echo "\">";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 96), "html", null, true);
                // line 97
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                              </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                          </select>
                        </td>
                        <td class=\"nowrap\" name=\"col_attribute\">
                            ";
        // line 104
        $this->loadTemplate("columns_definitions/column_attribute.twig", "database/central_columns/main.twig", 104)->display(twig_to_array(["column_number" => 0, "ci" => 5, "ci_offset" => 0, "extracted_columnspec" => [], "column_meta" => [], "submit_attribute" => false, "attribute_types" =>         // line 111
($context["attribute_types"] ?? null)]));
        // line 113
        echo "                        </td>
                        <td class=\"nowrap\" name=\"col_isNull\">
                          <input name=\"field_null[0]\" id=\"field_0_6\" type=\"checkbox\" value=\"YES\" class=\"allow_null\">
                        </td>
                        <td class=\"nowrap\" name=\"col_extra\">
                          <input name=\"col_extra[0]\" id=\"field_0_7\" type=\"checkbox\" value=\"auto_increment\">
                        </td>
                        <td>
                            <input id=\"add_column_save\" class=\"btn btn-primary\" type=\"submit\" value=\"Save\">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>
";
        // line 129
        if ((($context["total_rows"] ?? null) <= 0)) {
            // line 130
            echo "    <fieldset>
        ";
            // line 131
            echo _gettext("The central list of columns for the current database is empty");
            // line 132
            echo "    </fieldset>
";
        } else {
            // line 134
            echo "    <table class=\"table table-borderless table-sm w-auto d-inline-block navigation\">
        <tr>
            <td class=\"navigation_separator\"></td>
            ";
            // line 137
            if (((($context["pos"] ?? null) - ($context["max_rows"] ?? null)) >= 0)) {
                // line 138
                echo "                <td>
                    <form action=\"";
                // line 139
                echo PhpMyAdmin\Url::getFromRoute("/database/central-columns");
                echo "\" method=\"post\">
                        ";
                // line 140
                echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
                echo "
                        <input type=\"hidden\" name=\"pos\" value=\"";
                // line 141
                echo twig_escape_filter($this->env, (($context["pos"] ?? null) - ($context["max_rows"] ?? null)), "html", null, true);
                echo "\">
                        <input type=\"hidden\" name=\"total_rows\" value=\"";
                // line 142
                echo twig_escape_filter($this->env, ($context["total_rows"] ?? null), "html", null, true);
                echo "\">
                        <input class=\"btn btn-secondary ajax\" type=\"submit\" name=\"navig\" value=\"&lt\">
                    </form>
                </td>
            ";
            }
            // line 147
            echo "            ";
            if ((($context["tn_nbTotalPage"] ?? null) > 1)) {
                // line 148
                echo "                <td>
                    <form action=\"";
                // line 149
                echo PhpMyAdmin\Url::getFromRoute("/database/central-columns");
                echo "\" method=\"post\">
                        ";
                // line 150
                echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
                echo "
                        <input type=\"hidden\" name=\"total_rows\" value=\"";
                // line 151
                echo twig_escape_filter($this->env, ($context["total_rows"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 152
                echo ($context["tn_page_selector"] ?? null);
                echo "
                    </form>
                </td>
            ";
            }
            // line 156
            echo "            ";
            if (((($context["pos"] ?? null) + ($context["max_rows"] ?? null)) < ($context["total_rows"] ?? null))) {
                // line 157
                echo "                <td>
                    <form action=\"";
                // line 158
                echo PhpMyAdmin\Url::getFromRoute("/database/central-columns");
                echo "\" method=\"post\">
                        ";
                // line 159
                echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
                echo "
                        <input type=\"hidden\" name=\"pos\" value=\"";
                // line 160
                echo twig_escape_filter($this->env, (($context["pos"] ?? null) + ($context["max_rows"] ?? null)), "html", null, true);
                echo "\">
                        <input type=\"hidden\" name=\"total_rows\" value=\"";
                // line 161
                echo twig_escape_filter($this->env, ($context["total_rows"] ?? null), "html", null, true);
                echo "\">
                        <input class=\"btn btn-secondary ajax\" type=\"submit\" name=\"navig\" value=\"&gt\">
                    </form>
                </td>
            ";
            }
            // line 166
            echo "            <td class=\"navigation_separator\"></td>
            <td>
                <span>";
            // line 168
            echo _gettext("Filter rows");
            echo ":</span>
                <input type=\"text\" class=\"filter_rows\" placeholder=\"";
            // line 169
            echo _gettext("Search this table");
            echo "\">
            </td>
            <td class=\"navigation_separator\"></td>
        </tr>
    </table>
";
        }
        // line 175
        echo "
<table class=\"table table-borderless table-sm w-auto d-inline-block navigation\">
    <tr>
        <td class=\"navigation_separator largescreenonly\"></td>
        <td class=\"central_columns_navigation\">
            ";
        // line 180
        echo \PhpMyAdmin\Html\Generator::getIcon("centralColumns_add", _gettext("Add column"));
        echo "
            <form id=\"add_column\" action=\"";
        // line 181
        echo PhpMyAdmin\Url::getFromRoute("/database/central-columns");
        echo "\" method=\"post\">
                ";
        // line 182
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        echo "
                <input type=\"hidden\" name=\"add_column\" value=\"add\">
                <input type=\"hidden\" name=\"pos\" value=\"";
        // line 184
        echo twig_escape_filter($this->env, ($context["pos"] ?? null), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"total_rows\" value=\"";
        // line 185
        echo twig_escape_filter($this->env, ($context["total_rows"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 187
        echo "                <select name=\"table-select\" id=\"table-select\">
                    <option value=\"\" disabled=\"disabled\" selected=\"selected\">
                        ";
        // line 189
        echo _gettext("Select a table");
        // line 190
        echo "                    </option>
                    ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 192
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["table"]);
            echo "\">";
            echo twig_escape_filter($this->env, $context["table"]);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                </select>
                <select name=\"column-select\" id=\"column-select\">
                    <option value=\"\" selected=\"selected\">";
        // line 196
        echo _gettext("Select a column.");
        echo "</option>
                </select>
                <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 198
        echo _gettext("Add");
        echo "\">
            </form>
        </td>
        <td class=\"navigation_separator largescreenonly\"></td>
    </tr>
</table>
";
        // line 204
        if ((($context["total_rows"] ?? null) > 0)) {
            // line 205
            echo "    <form method=\"post\" id=\"del_form\" action=\"";
            echo PhpMyAdmin\Url::getFromRoute("/database/central-columns");
            echo "\">
        ";
            // line 206
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            echo "
        <input id=\"del_col_name\" type=\"hidden\" name=\"col_name\" value=\"\">
        <input type=\"hidden\" name=\"pos\" value=\"";
            // line 208
            echo twig_escape_filter($this->env, ($context["pos"] ?? null), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"delete_save\" value=\"delete\">
    </form>
    <div id=\"tableslistcontainer\">
        <form name=\"tableslistcontainer\">
            <table id=\"table_columns\" class=\"table table-light table-striped table-hover tablesorter w-auto\">
                ";
            // line 214
            $context["class"] = "column_heading";
            // line 215
            echo "                ";
            $context["title"] = _gettext("Click to sort.");
            // line 216
            echo "                <thead class=\"thead-light\">
                    <tr>
                        <th class=\"";
            // line 218
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\"></th>
                        <th class=\"hide\"></th>
                        <th class=\"column_action\" colspan=\"2\">";
            // line 220
            echo _gettext("Action");
            echo "</th>
                        <th class=\"";
            // line 221
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" data-column=\"name\">
                            ";
            // line 222
            echo _gettext("Name");
            // line 223
            echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 225
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" data-column=\"type\">
                            ";
            // line 226
            echo _gettext("Type");
            // line 227
            echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 229
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" data-column=\"length\">
                            ";
            // line 230
            echo _gettext("Length/Value");
            // line 231
            echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 233
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" data-column=\"default\">
                            ";
            // line 234
            echo _gettext("Default");
            // line 235
            echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 237
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" data-column=\"collation\">
                            ";
            // line 238
            echo _gettext("Collation");
            // line 239
            echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 241
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" data-column=\"attribute\">
                            ";
            // line 242
            echo _gettext("Attribute");
            // line 243
            echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 245
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" data-column=\"isnull\">
                            ";
            // line 246
            echo _gettext("Null");
            // line 247
            echo "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 249
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" data-column=\"extra\">
                            ";
            // line 250
            echo _gettext("A_I");
            // line 251
            echo "                            <div class=\"sorticon\"></div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 256
            $context["row_num"] = 0;
            // line 257
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 258
                echo "                        ";
                // line 259
                echo "                        <tr data-rownum=\"";
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ("f_" . ($context["row_num"] ?? null)), "html", null, true);
                echo "\">
                            ";
                // line 260
                echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
                echo "
                            <input type=\"hidden\" name=\"edit_save\" value=\"save\">
                            <td class=\"nowrap\">
                                <input type=\"checkbox\" class=\"checkall\" name=\"selected_fld[]\"
                                value=\"";
                // line 264
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["row"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["col_name"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ("checkbox_row_" . ($context["row_num"] ?? null)), "html", null, true);
                echo "\">
                            </td>
                            <td id=\"";
                // line 266
                echo twig_escape_filter($this->env, ("edit_" . ($context["row_num"] ?? null)), "html", null, true);
                echo "\" class=\"edit text-center\">
                                <a href=\"#\"> ";
                // line 267
                echo \PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Edit"));
                echo "</a>
                            </td>
                            <td class=\"del_row\" data-rownum = \"";
                // line 269
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "\">
                                <a hrf=\"#\">";
                // line 270
                echo \PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Delete"));
                echo "</a>
                                <input type=\"submit\" data-rownum = \"";
                // line 271
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-secondary edit_cancel_form\" value=\"";
                echo twig_escape_filter($this->env, _gettext("Cancel"), "html", null, true);
                echo "\">
                            </td>
                            <td id=\"";
                // line 273
                echo twig_escape_filter($this->env, ("save_" . ($context["row_num"] ?? null)), "html", null, true);
                echo "\" class=\"hide\">
                                <input type=\"submit\" data-rownum=\"";
                // line 274
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-primary edit_save_form\" value=\"";
                echo twig_escape_filter($this->env, _gettext("Save"), "html", null, true);
                echo "\">
                            </td>
                            <td name=\"col_name\" class=\"nowrap\">
                                <span>";
                // line 277
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["row"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["col_name"] ?? null) : null), "html", null, true);
                echo "</span>
                                <input name=\"orig_col_name\" type=\"hidden\" value=\"";
                // line 278
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["row"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["col_name"] ?? null) : null), "html", null, true);
                echo "\">
                                ";
                // line 279
                $this->loadTemplate("columns_definitions/column_name.twig", "database/central_columns/main.twig", 279)->display(twig_to_array(["column_number" =>                 // line 280
($context["row_num"] ?? null), "ci" => 0, "ci_offset" => 0, "column_meta" => ["Field" => (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 =                 // line 284
$context["row"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["col_name"] ?? null) : null)], "cfg_relation" => ["centralcolumnswork" => false], "max_rows" =>                 // line 289
($context["max_rows"] ?? null)]));
                // line 291
                echo "                            </td>
                            <td name = \"col_type\" class=\"nowrap\">
                              <span>";
                // line 293
                echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["row"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["col_type"] ?? null) : null), "html", null, true);
                echo "</span>
                              <select class=\"column_type\" name=\"field_type[";
                // line 294
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "]\" id=\"field_";
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "_1\">
                                ";
                // line 295
                echo PhpMyAdmin\Util::getSupportedDatatypes(true, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["types_upper"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["row_num"] ?? null)] ?? null) : null));
                echo "
                              </select>
                            </td>
                            <td class=\"nowrap\" name=\"col_length\">
                              <span>";
                // line 299
                (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["row"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["col_length"] ?? null) : null)) ? (print (twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["row"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["col_length"] ?? null) : null), "html", null, true))) : (print ("")));
                echo "</span>
                              <input id=\"field_";
                // line 300
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "_2\" type=\"text\" name=\"field_length[";
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "]\" size=\"8\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["row"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["col_length"] ?? null) : null), "html", null, true);
                echo "\" class=\"textfield\">
                              <p class=\"enum_notice\" id=\"enum_notice_";
                // line 301
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "_2\">
                                <a href=\"#\" class=\"open_enum_editor\">";
                // line 302
                echo _gettext("Edit ENUM/SET values");
                echo "</a>
                              </p>
                            </td>
                            <td class=\"nowrap\" name=\"col_default\">
                              ";
                // line 306
                if (twig_get_attribute($this->env, $this->source, $context["row"], "col_default", [], "array", true, true, false, 306)) {
                    // line 307
                    echo "                                <span>";
                    echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["row"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["col_default"] ?? null) : null), "html", null, true);
                    echo "</span>
                              ";
                } else {
                    // line 309
                    echo "                                <span>";
                    echo _gettext("None");
                    echo "</span>
                              ";
                }
                // line 311
                echo "                              <select name=\"field_default_type[";
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "]\" id=\"field_";
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "_3\" class=\"default_type\">
                                <option value=\"NONE\"";
                // line 312
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rows_meta"] ?? null), ($context["row_num"] ?? null), [], "array", false, true, false, 312), "DefaultType", [], "array", true, true, false, 312) && ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["rows_meta"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["row_num"] ?? null)] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["DefaultType"] ?? null) : null) == "NONE"))) ? (" selected") : (""));
                echo ">
                                  ";
                // line 313
                echo _pgettext(                "for default", "None");
                // line 314
                echo "                                </option>
                                <option value=\"USER_DEFINED\"";
                // line 315
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rows_meta"] ?? null), ($context["row_num"] ?? null), [], "array", false, true, false, 315), "DefaultType", [], "array", true, true, false, 315) && ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["rows_meta"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["row_num"] ?? null)] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["DefaultType"] ?? null) : null) == "USER_DEFINED"))) ? (" selected") : (""));
                echo ">
                                  ";
                // line 316
                echo _gettext("As defined:");
                // line 317
                echo "                                </option>
                                <option value=\"NULL\"";
                // line 318
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rows_meta"] ?? null), ($context["row_num"] ?? null), [], "array", false, true, false, 318), "DefaultType", [], "array", true, true, false, 318) && ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["rows_meta"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["row_num"] ?? null)] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["DefaultType"] ?? null) : null) == "NULL"))) ? (" selected") : (""));
                echo ">
                                  NULL
                                </option>
                                <option value=\"CURRENT_TIMESTAMP\"";
                // line 321
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rows_meta"] ?? null), ($context["row_num"] ?? null), [], "array", false, true, false, 321), "DefaultType", [], "array", true, true, false, 321) && ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["rows_meta"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[($context["row_num"] ?? null)] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["DefaultType"] ?? null) : null) == "CURRENT_TIMESTAMP"))) ? (" selected") : (""));
                echo ">
                                  CURRENT_TIMESTAMP
                                </option>
                              </select>
                              ";
                // line 325
                if ((($context["char_editing"] ?? null) == "textarea")) {
                    // line 326
                    echo "                                <textarea name=\"field_default_value[";
                    echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                    echo "]\" cols=\"15\" class=\"textfield default_value\">";
                    echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["default_values"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[($context["row_num"] ?? null)] ?? null) : null), "html", null, true);
                    echo "</textarea>
                              ";
                } else {
                    // line 328
                    echo "                                <input type=\"text\" name=\"field_default_value[";
                    echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                    echo "]\" size=\"12\" value=\"";
                    echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["default_values"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[($context["row_num"] ?? null)] ?? null) : null), "html", null, true);
                    echo "\" class=\"textfield default_value\">
                              ";
                }
                // line 330
                echo "                            </td>
                            <td name=\"collation\" class=\"nowrap\">
                                <span>";
                // line 332
                echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["row"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["col_collation"] ?? null) : null), "html", null, true);
                echo "</span>
                                <select lang=\"en\" dir=\"ltr\" name=\"field_collation[";
                // line 333
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "]\" id=\"field_";
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "_4\">
                                  <option value=\"\"></option>
                                  ";
                // line 335
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["charsets"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                    // line 336
                    echo "                                    <optgroup label=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 336), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 336), "html", null, true);
                    echo "\">
                                      ";
                    // line 337
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 337));
                    foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                        // line 338
                        echo "                                        <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 338), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 338), "html", null, true);
                        echo "\"";
                        // line 339
                        echo (((twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 339) == (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["row"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["col_collation"] ?? null) : null))) ? (" selected") : (""));
                        echo ">";
                        // line 340
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 340), "html", null, true);
                        // line 341
                        echo "</option>
                                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 343
                    echo "                                    </optgroup>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 345
                echo "                                </select>
                            </td>
                            <td class=\"nowrap\" name=\"col_attribute\">
                                <span>";
                // line 348
                (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["row"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["col_attribute"] ?? null) : null)) ? (print (twig_escape_filter($this->env, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["row"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["col_attribute"] ?? null) : null), "html", null, true))) : (print ("")));
                echo "</span>
                                ";
                // line 349
                $this->loadTemplate("columns_definitions/column_attribute.twig", "database/central_columns/main.twig", 349)->display(twig_to_array(["column_number" =>                 // line 350
($context["row_num"] ?? null), "ci" => 5, "ci_offset" => 0, "extracted_columnspec" => [], "column_meta" => (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc =                 // line 354
$context["row"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["col_attribute"] ?? null) : null), "submit_attribute" => false, "attribute_types" =>                 // line 356
($context["attribute_types"] ?? null)]));
                // line 358
                echo "                            </td>
                            <td class=\"nowrap\" name=\"col_isNull\">
                                <span>";
                // line 360
                echo twig_escape_filter($this->env, (((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["row"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["col_isNull"] ?? null) : null)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                echo "</span>
                                <input name=\"field_null[";
                // line 361
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "]\" id=\"field_";
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "_6\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"";
                // line 362
                echo (((( !twig_test_empty((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["row"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["col_isNull"] ?? null) : null)) && ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["row"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["col_isNull"] ?? null) : null) != "NO")) && ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["row"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["col_isNull"] ?? null) : null) != "NOT NULL"))) ? (" checked") : (""));
                echo ">
                            </td>
                            <td class=\"nowrap\" name=\"col_extra\">
                              <span>";
                // line 365
                echo twig_escape_filter($this->env, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["row"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["col_extra"] ?? null) : null), "html", null, true);
                echo "</span>
                              <input name=\"col_extra[";
                // line 366
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "]\" id=\"field_";
                echo twig_escape_filter($this->env, ($context["row_num"] ?? null), "html", null, true);
                echo "_7\" type=\"checkbox\" value=\"auto_increment\"";
                // line 367
                echo ((( !twig_test_empty((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["row"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["col_extra"] ?? null) : null)) && ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["row"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["col_extra"] ?? null) : null) == "auto_increment"))) ? (" checked") : (""));
                echo ">
                            </td>
                        </tr>
                        ";
                // line 370
                $context["row_num"] = (($context["row_num"] ?? null) + 1);
                // line 371
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "                </tbody>
            </table>

            ";
            // line 375
            $this->loadTemplate("select_all.twig", "database/central_columns/main.twig", 375)->display(twig_to_array(["theme_image_path" =>             // line 376
($context["theme_image_path"] ?? null), "text_dir" =>             // line 377
($context["text_dir"] ?? null), "form_name" => "tableslistcontainer"]));
            // line 380
            echo "            <button class=\"btn btn-link mult_submit change_central_columns\" type=\"submit\" name=\"edit_central_columns\"
                    value=\"edit central columns\" title=\"";
            // line 381
            echo _gettext("Edit");
            echo "\">
                ";
            // line 382
            echo \PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Edit"));
            echo "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"delete_central_columns\"
                    value=\"remove_from_central_columns\" title=\"";
            // line 385
            echo _gettext("Delete");
            echo "\">
                ";
            // line 386
            echo \PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Delete"));
            echo "
            </button>
        </form>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "database/central_columns/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  891 => 386,  887 => 385,  881 => 382,  877 => 381,  874 => 380,  872 => 377,  871 => 376,  870 => 375,  865 => 372,  859 => 371,  857 => 370,  851 => 367,  846 => 366,  842 => 365,  836 => 362,  831 => 361,  827 => 360,  823 => 358,  821 => 356,  820 => 354,  819 => 350,  818 => 349,  814 => 348,  809 => 345,  802 => 343,  795 => 341,  793 => 340,  790 => 339,  784 => 338,  780 => 337,  773 => 336,  769 => 335,  762 => 333,  758 => 332,  754 => 330,  746 => 328,  738 => 326,  736 => 325,  729 => 321,  723 => 318,  720 => 317,  718 => 316,  714 => 315,  711 => 314,  709 => 313,  705 => 312,  698 => 311,  692 => 309,  686 => 307,  684 => 306,  677 => 302,  673 => 301,  665 => 300,  661 => 299,  654 => 295,  648 => 294,  644 => 293,  640 => 291,  638 => 289,  637 => 284,  636 => 280,  635 => 279,  631 => 278,  627 => 277,  619 => 274,  615 => 273,  608 => 271,  604 => 270,  600 => 269,  595 => 267,  591 => 266,  584 => 264,  577 => 260,  570 => 259,  568 => 258,  563 => 257,  561 => 256,  554 => 251,  552 => 250,  546 => 249,  542 => 247,  540 => 246,  534 => 245,  530 => 243,  528 => 242,  522 => 241,  518 => 239,  516 => 238,  510 => 237,  506 => 235,  504 => 234,  498 => 233,  494 => 231,  492 => 230,  486 => 229,  482 => 227,  480 => 226,  474 => 225,  470 => 223,  468 => 222,  462 => 221,  458 => 220,  453 => 218,  449 => 216,  446 => 215,  444 => 214,  435 => 208,  430 => 206,  425 => 205,  423 => 204,  414 => 198,  409 => 196,  405 => 194,  394 => 192,  390 => 191,  387 => 190,  385 => 189,  381 => 187,  377 => 185,  373 => 184,  368 => 182,  364 => 181,  360 => 180,  353 => 175,  344 => 169,  340 => 168,  336 => 166,  328 => 161,  324 => 160,  320 => 159,  316 => 158,  313 => 157,  310 => 156,  303 => 152,  299 => 151,  295 => 150,  291 => 149,  288 => 148,  285 => 147,  277 => 142,  273 => 141,  269 => 140,  265 => 139,  262 => 138,  260 => 137,  255 => 134,  251 => 132,  249 => 131,  246 => 130,  244 => 129,  226 => 113,  224 => 111,  223 => 104,  218 => 101,  211 => 99,  204 => 97,  202 => 96,  196 => 95,  192 => 94,  185 => 93,  181 => 92,  175 => 88,  171 => 86,  167 => 84,  165 => 83,  158 => 79,  154 => 78,  146 => 73,  137 => 67,  132 => 64,  130 => 62,  129 => 54,  118 => 45,  116 => 44,  111 => 41,  109 => 40,  104 => 37,  102 => 36,  97 => 33,  95 => 32,  90 => 29,  88 => 28,  83 => 25,  81 => 24,  76 => 21,  74 => 20,  69 => 17,  67 => 16,  56 => 8,  52 => 7,  48 => 6,  45 => 5,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/central_columns/main.twig", "D:\\MyPhpAdmin\\Xampp\\phpMyAdmin\\templates\\database\\central_columns\\main.twig");
    }
}
