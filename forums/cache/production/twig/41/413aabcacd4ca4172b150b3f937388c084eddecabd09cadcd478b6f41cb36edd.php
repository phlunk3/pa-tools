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

/* posting_attach_body.html */
class __TwigTemplate_d774eaacb5fe5c49b1cd13baa0b9dea303df56c7831059d4d93064259548159e extends \Twig\Template
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
        // line 1
        echo "<div class=\"panel bg3 panel-container\" id=\"attach-panel\">
\t<div class=\"inner\">

\t<p>";
        // line 4
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_ATTACHMENT_EXPLAIN");
        echo " <span class=\"hidden\" id=\"drag-n-drop-message\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_DRAG_TEXTAREA");
        echo "</span></p>

\t";
        // line 6
        if ( !twig_test_empty(($context["MAX_ATTACHMENT_FILESIZE"] ?? null))) {
            echo "<p>";
            echo ($context["MAX_ATTACHMENT_FILESIZE"] ?? null);
            echo "</p>";
        }
        // line 7
        echo "
\t<fieldset class=\"fields2\" id=\"attach-panel-basic\">
\t<dl>
\t\t<dt><label for=\"fileupload\">";
        // line 10
        echo $this->extensions['phpbb\template\twig\extension']->lang("FILENAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<input type=\"file\" name=\"fileupload\" id=\"fileupload\" class=\"inputbox autowidth\" />
\t\t\t<input type=\"submit\" name=\"add_file\" value=\"";
        // line 13
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FILE");
        echo "\" class=\"button2 hvr-sweep-to-top\" onclick=\"upload = true;\" />
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"filecomment\">";
        // line 17
        echo $this->extensions['phpbb\template\twig\extension']->lang("FILE_COMMENT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><textarea name=\"filecomment\" id=\"filecomment\" rows=\"1\" cols=\"40\" class=\"inputbox autowidth\">";
        // line 18
        echo ($context["FILE_COMMENT"] ?? null);
        echo "</textarea></dd>
\t</dl>
\t</fieldset>

\t<div id=\"attach-panel-multi\" class=\"attach-panel-multi\">
\t\t<input type=\"button\" class=\"button2 hvr-sweep-to-top\" value=\"";
        // line 23
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_ADD_FILES");
        echo "\" id=\"add_files\" />
\t</div>

\t";
        // line 26
        // line 27
        echo "
\t<div class=\"panel";
        // line 28
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attach_row", [], "any", false, false, false, 28))) {
            echo " hidden";
        }
        echo " file-list-container\" id=\"file-list-container\">
\t\t<div class=\"inner\">
\t\t\t<table class=\"table1 zebra-list fixed-width-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"attach-name\">";
        // line 33
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_FILENAME");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-comment\">";
        // line 34
        echo $this->extensions['phpbb\template\twig\extension']->lang("FILE_COMMENT");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-filesize\">";
        // line 35
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_SIZE");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-status\">";
        // line 36
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_STATUS");
        echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"responsive-skip-empty file-list\" id=\"file-list\">
\t\t\t\t\t<tr class=\"attach-row attach-row-tpl\" id=\"attach-row-tpl\">
\t\t\t\t\t\t\t<td class=\"attach-name\">
\t\t\t\t\t\t\t\t<span class=\"file-name ellipsis-text\"></span>
\t\t\t\t\t\t\t\t<span class=\"attach-controls\">
\t\t\t\t\t\t\t\t\t";
        // line 44
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            echo "<input type=\"button\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PLACE_INLINE");
            echo "\" class=\"button2 hidden file-inline-bbcode\" />&nbsp;";
        }
        // line 45
        echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_FILE");
        echo "\" class=\"button2 hvr-sweep-to-top file-delete\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-comment\">
\t\t\t\t\t\t\t\t<textarea rows=\"1\" cols=\"30\" class=\"inputbox\"></textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-filesize\">
\t\t\t\t\t\t\t\t<span class=\"file-size\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-status\">
\t\t\t\t\t\t\t\t<span class=\"file-progress\">
\t\t\t\t\t\t\t\t\t<span class=\"file-progress-bar\"></span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"file-status\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t";
        // line 63
        // line 64
        echo "
\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attach_row", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["attach_row"]) {
            // line 66
            echo "
\t\t\t\t\t";
            // line 67
            // line 68
            echo "
\t\t\t\t\t\t<tr class=\"attach-row\" data-attach-id=\"";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "ATTACH_ID", [], "any", false, false, false, 69);
            echo "\">
\t\t\t\t\t\t\t<td class=\"attach-name\">
\t\t\t\t\t\t\t\t<span class=\"file-name ellipsis-text\"><a href=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "U_VIEW_ATTACHMENT", [], "any", false, false, false, 71);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "FILENAME", [], "any", false, false, false, 71);
            echo "</a></span>
\t\t\t\t\t\t\t\t";
            // line 72
            // line 73
            echo "\t\t\t\t\t\t\t\t<span class=\"attach-controls\">
\t\t\t\t\t\t\t\t\t";
            // line 74
            if ((($context["S_BBCODE_ALLOWED"] ?? null) && ($context["S_INLINE_ATTACHMENT_OPTIONS"] ?? null))) {
                echo "<input type=\"button\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PLACE_INLINE");
                echo "\" class=\"button2 file-inline-bbcode\" />&nbsp;";
            }
            // line 75
            echo "\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"delete_file[";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "ASSOC_INDEX", [], "any", false, false, false, 75);
            echo "]\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_FILE");
            echo "\" class=\"button2 hvr-sweep-to-top file-delete\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            // line 77
            // line 78
            echo "\t\t\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-comment\">
\t\t\t\t\t\t\t\t<textarea name=\"comment_list[";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "ASSOC_INDEX", [], "any", false, false, false, 81);
            echo "]\" rows=\"1\" cols=\"30\" class=\"inputbox\">";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "FILE_COMMENT", [], "any", false, false, false, 81);
            echo "</textarea>
\t\t\t\t\t\t\t\t";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "S_HIDDEN", [], "any", false, false, false, 82);
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-filesize\">
\t\t\t\t\t\t\t\t<span class=\"file-size\">";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "FILESIZE", [], "any", false, false, false, 85);
            echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-status\">
\t\t\t\t\t\t\t\t<span class=\"file-status file-uploaded\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t";
            // line 92
            // line 93
            echo "
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
\t\t\t\t\t\t";
        // line 96
        // line 97
        echo "
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>

\t";
        // line 103
        // line 104
        echo "\t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_attach_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 104,  250 => 103,  242 => 97,  241 => 96,  238 => 95,  231 => 93,  230 => 92,  220 => 85,  214 => 82,  208 => 81,  203 => 78,  202 => 77,  194 => 75,  188 => 74,  185 => 73,  184 => 72,  178 => 71,  173 => 69,  170 => 68,  169 => 67,  166 => 66,  162 => 65,  159 => 64,  158 => 63,  136 => 45,  130 => 44,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  97 => 28,  94 => 27,  93 => 26,  87 => 23,  79 => 18,  74 => 17,  67 => 13,  60 => 10,  55 => 7,  49 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_attach_body.html", "");
    }
}
