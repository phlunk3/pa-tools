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

/* posting_buttons.html */
class __TwigTemplate_f83589f400bfec7bc8022cea17962e6274201452427461398c6394294ffbb557 extends \Twig\Template
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
        echo "
<script>

\tvar form_name = 'postform';
\tvar text_name = ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 5)) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_tags", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_NAME", [], "any", false, false, false, 11);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR_HIDE"), "js");
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR"), "js");
        echo "';
\t\t}
\t}


</script>
";
        // line 31
        $asset_file = (("" . ($context["T_ASSETS_PATH"] ?? null)) . "/javascript/editor.js");
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 32
        echo "
";
        // line 33
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 34
            echo "<div id=\"colour_palette\" style=\"display: none;\">
\t<dl style=\"clear: left;\">
\t\t<dt><label>";
            // line 36
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd id=\"color_palette_placeholder\" class=\"color_palette_placeholder\" data-color-palette=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dd>
\t</dl>
</div>

";
            // line 41
            // line 42
            echo "<div id=\"format-buttons\" class=\"format-buttons\">
\t<button type=\"button\" class=\"button hvr-sweep-to-top button-icon-only bbcode-b\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" onclick=\"bbstyle(0)\" title=\"";
            // line 43
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_B_HELP");
            echo "\">
\t\t<i class=\"icon fa-bold fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t<button type=\"button\" class=\"button hvr-sweep-to-top button-icon-only bbcode-i\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" onclick=\"bbstyle(2)\" title=\"";
            // line 46
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_I_HELP");
            echo "\">
\t\t<i class=\"icon fa-italic fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t<button type=\"button\" class=\"button hvr-sweep-to-top button-icon-only bbcode-u\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" onclick=\"bbstyle(4)\" title=\"";
            // line 49
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_U_HELP");
            echo "\">
\t\t<i class=\"icon fa-underline fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t";
            // line 52
            if (($context["S_BBCODE_QUOTE"] ?? null)) {
                // line 53
                echo "\t<button type=\"button\" class=\"button hvr-sweep-to-top button-icon-only bbcode-quote\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" onclick=\"bbstyle(6)\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_Q_HELP");
                echo "\">
\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t";
            }
            // line 57
            echo "\t<button type=\"button\" class=\"button hvr-sweep-to-top button-icon-only bbcode-code\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" onclick=\"bbstyle(8)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_C_HELP");
            echo "\">
\t\t<i class=\"icon fa-code fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t<button type=\"button\" class=\"button hvr-sweep-to-top button-icon-only bbcode-list\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" onclick=\"bbstyle(10)\" title=\"";
            // line 60
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_L_HELP");
            echo "\">
\t\t<i class=\"icon fa-list fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t<button type=\"button\" class=\"button hvr-sweep-to-top button-icon-only bbcode-list-\" accesskey=\"o\" name=\"addbbcode12\" value=\"List=\" onclick=\"bbstyle(12)\" title=\"";
            // line 63
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_O_HELP");
            echo "\">
\t\t<i class=\"icon fa-list-ol fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t<button type=\"button\" class=\"button hvr-sweep-to-top button-icon-only bbcode-asterisk\" accesskey=\"y\" name=\"addlistitem\" value=\"[*]\" onclick=\"bbstyle(-1)\" title=\"";
            // line 66
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_LISTITEM_HELP");
            echo "\">
\t\t<i class=\"icon fa-asterisk fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t";
            // line 69
            if (($context["S_BBCODE_IMG"] ?? null)) {
                // line 70
                echo "\t<button type=\"button\" class=\"button hvr-sweep-to-top button-icon-only bbcode-img\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" onclick=\"bbstyle(14)\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_P_HELP");
                echo "\">
\t\t<i class=\"icon fa-image fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t";
            }
            // line 74
            echo "\t";
            if (($context["S_LINKS_ALLOWED"] ?? null)) {
                // line 75
                echo "\t<button type=\"button\" class=\"button hvr-sweep-to-top button-icon-only bbcode-url\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" onclick=\"bbstyle(16)\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_W_HELP");
                echo "\">
\t\t<i class=\"icon fa-link fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t";
            }
            // line 79
            echo "\t";
            if (($context["S_BBCODE_FLASH"] ?? null)) {
                // line 80
                echo "\t<button type=\"button\" class=\"button hvr-sweep-to-top button-icon-only bbcode-flash\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" onclick=\"bbstyle(18)\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_D_HELP");
                echo "\">
\t\t<i class=\"icon fa-flash fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t";
            }
            // line 84
            echo "\t<button type=\"button\" class=\"button hvr-sweep-to-top button-icon-only bbcode-color\" name=\"bbpalette\" id=\"bbpalette\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR");
            echo "\" onclick=\"change_palette();\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_S_HELP");
            echo "\">
\t\t<i class=\"icon fa-tint fa-fw\" aria-hidden=\"true\"></i>
\t</button>
\t<select name=\"addbbcode20\" class=\"bbcode-size\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
            // line 87
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_F_HELP");
            echo "\">
\t\t<option value=\"50\">";
            // line 88
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_TINY");
            echo "</option>
\t\t<option value=\"85\">";
            // line 89
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_SMALL");
            echo "</option>
\t\t<option value=\"100\" selected=\"selected\">";
            // line 90
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_NORMAL");
            echo "</option>
\t\t";
            // line 91
            if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 150))) {
                // line 92
                echo "\t\t\t<option value=\"150\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_LARGE");
                echo "</option>
\t\t\t";
                // line 93
                if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 200))) {
                    // line 94
                    echo "\t\t\t\t<option value=\"200\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_HUGE");
                    echo "</option>
\t\t\t";
                }
                // line 96
                echo "\t\t";
            }
            // line 97
            echo "\t</select>

\t";
            // line 99
            // line 100
            echo "
\t";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_tags", [], "any", false, false, false, 101));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                // line 102
                echo "\t<button type=\"button\" class=\"button hvr-sweep-to-top button-secondary bbcode-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_TAG_CLEAN", [], "any", false, false, false, 102);
                echo "\" name=\"addbbcode";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_ID", [], "any", false, false, false, 102);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_TAG", [], "any", false, false, false, 102);
                echo "\" onclick=\"bbstyle(";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_ID", [], "any", false, false, false, 102);
                echo ")\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_HELPLINE", [], "any", false, false, false, 102);
                echo "\">
\t\t";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_TAG", [], "any", false, false, false, 103);
                echo "
\t</button>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "</div>
";
            // line 107
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 107,  291 => 106,  282 => 103,  269 => 102,  265 => 101,  262 => 100,  261 => 99,  257 => 97,  254 => 96,  248 => 94,  246 => 93,  241 => 92,  239 => 91,  235 => 90,  231 => 89,  227 => 88,  223 => 87,  214 => 84,  206 => 80,  203 => 79,  195 => 75,  192 => 74,  184 => 70,  182 => 69,  176 => 66,  170 => 63,  164 => 60,  157 => 57,  149 => 53,  147 => 52,  141 => 49,  135 => 46,  129 => 43,  126 => 42,  125 => 41,  116 => 36,  112 => 34,  110 => 33,  107 => 32,  93 => 31,  84 => 25,  77 => 21,  56 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_buttons.html", "");
    }
}
