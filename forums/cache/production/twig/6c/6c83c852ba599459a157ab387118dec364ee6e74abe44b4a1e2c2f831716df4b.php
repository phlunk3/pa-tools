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

/* posting_topic_review.html */
class __TwigTemplate_7a5a4723b3ff26f2441562a3f26e86d2756796b859af160f7987f942964230de extends \Twig\Template
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
<h3 id=\"review\" class=\"review\">
\t<span class=\"right-box\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'; } else if (rev_text.data == '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "'};\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW");
        echo "</a></span>
\t";
        // line 4
        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REVIEW");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo " ";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "
</h3>

<div id=\"topicreview\" class=\"topicreview\">
<script>

\tbbcodeEnabled = ";
        // line 10
        echo ($context["S_BBCODE_ALLOWED"] ?? null);
        echo ";

</script>
\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topic_review_row", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["topic_review_row"]) {
            // line 14
            echo "
\t";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "S_IGNORE_POST", [], "any", false, false, false, 15)) {
                // line 16
                echo "\t<div class=\"post bg3 post-ignore\">
\t\t<div class=\"inner\">
\t\t\t";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "L_IGNORE_POST", [], "any", false, false, false, 18);
                echo "
\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 19
$context["topic_review_row"], "S_POST_DELETED", [], "any", false, false, false, 19)) {
                // line 20
                echo "\t<div class=\"post bg3 post-ignore\">
\t\t<div class=\"inner\">
\t\t\t";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "L_DELETE_POST", [], "any", false, false, false, 22);
                echo "
\t";
            } else {
                // line 24
                echo "\t<div class=\"post ";
                if ((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "S_ROW_COUNT", [], "any", false, false, false, 24) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if ((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 24) == ($context["REPORTED_POST_ID"] ?? null))) {
                    echo " reported";
                }
                echo "\">
\t\t<div class=\"inner\">
\t";
            }
            // line 27
            echo "
\t\t<div class=\"postbody\" id=\"pr";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 28);
            echo "\">
\t\t\t<h3><a href=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MINI_POST", [], "any", false, false, false, 29);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_SUBJECT", [], "any", false, false, false, 29);
            echo "</a></h3>
\t\t\t";
            // line 30
            if (((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POSTER_QUOTE", [], "any", false, false, false, 30) && twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "DECODED_MESSAGE", [], "any", false, false, false, 30)) || twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MCP_DETAILS", [], "any", false, false, false, 30))) {
                // line 31
                echo "\t\t\t<ul class=\"post-buttons\">
\t\t\t";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MCP_DETAILS", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MCP_DETAILS", [], "any", false, false, false, 34);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DETAILS");
                    echo "\" class=\"button button-icon-only hvr-sweep-to-top\">
\t\t\t\t\t\t<i class=\"icon fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 35
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DETAILS");
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t<li>
\t\t\t";
                }
                // line 39
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POSTER_QUOTE", [], "any", false, false, false, 39) && twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "DECODED_MESSAGE", [], "any", false, false, false, 39))) {
                    // line 40
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#postingbox\" onclick=\"addquote(";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 41);
                    echo ", '";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POSTER_QUOTE", [], "any", false, false, false, 41);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("WROTE"), "js");
                    echo "', {post_id:";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 41);
                    echo ",time:";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_TIME", [], "any", false, false, false, 41);
                    echo ",user_id:";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "USER_ID", [], "any", false, false, false, 41);
                    echo "});\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("QUOTE");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_AUTHOR", [], "any", false, false, false, 41);
                    echo "\" class=\"button button-icon-only hvr-sweep-to-top\">
\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 42
                    echo $this->extensions['phpbb\template\twig\extension']->lang("QUOTE");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_AUTHOR", [], "any", false, false, false, 42);
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                }
                // line 46
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 48
            echo "
\t\t\t";
            // line 49
            // line 50
            echo "\t\t\t<p class=\"author\">
\t\t\t\t";
            // line 51
            if (($context["S_IS_BOT"] ?? null)) {
                // line 52
                echo "\t\t\t\t\t<span><i class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "MINI_POST", [], "any", false, false, false, 52);
                echo "</span></span>
\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MINI_POST", [], "any", false, false, false, 54);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "MINI_POST", [], "any", false, false, false, 54);
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "MINI_POST", [], "any", false, false, false, 55);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo "<strong>";
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_AUTHOR_FULL", [], "any", false, false, false, 58);
            echo "</strong>";
            echo " &raquo; ";
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_DATE", [], "any", false, false, false, 58);
            echo "
\t\t\t</p>
\t\t\t";
            // line 60
            // line 61
            echo "
\t\t\t<div class=\"content\">";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "MESSAGE", [], "any", false, false, false, 62);
            echo "</div>

            ";
            // line 64
            // line 65
            echo "
\t\t\t";
            // line 66
            if (twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "S_HAS_ATTACHMENTS", [], "any", false, false, false, 66)) {
                // line 67
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>";
                // line 68
                echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t\t";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "attachment", [], "any", false, false, false, 69));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 70
                    echo "\t\t\t\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 70);
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 74
            echo "
\t\t\t";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POSTER_QUOTE", [], "any", false, false, false, 75) && twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "DECODED_MESSAGE", [], "any", false, false, false, 75))) {
                // line 76
                echo "\t\t\t\t<div id=\"message_";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 76);
                echo "\" style=\"display: none;\">";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "DECODED_MESSAGE", [], "any", false, false, false, 76);
                echo "</div>
\t\t\t";
            }
            // line 78
            echo "\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "</div>

<hr />

<p>
\t<a href=\"";
        // line 87
        if (($context["S_MCP_REPORT"] ?? null)) {
            echo "#report";
        } else {
            echo "#postingbox";
        }
        echo "\" class=\"top\">
\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
        // line 88
        echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
        echo "</span>
\t</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "posting_topic_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 88,  294 => 87,  287 => 82,  278 => 78,  270 => 76,  268 => 75,  265 => 74,  261 => 72,  252 => 70,  248 => 69,  244 => 68,  241 => 67,  239 => 66,  236 => 65,  235 => 64,  230 => 62,  227 => 61,  226 => 60,  214 => 58,  208 => 55,  201 => 54,  195 => 52,  193 => 51,  190 => 50,  189 => 49,  186 => 48,  182 => 46,  173 => 42,  155 => 41,  152 => 40,  149 => 39,  142 => 35,  136 => 34,  133 => 33,  131 => 32,  128 => 31,  126 => 30,  120 => 29,  116 => 28,  113 => 27,  99 => 24,  94 => 22,  90 => 20,  88 => 19,  84 => 18,  80 => 16,  78 => 15,  75 => 14,  71 => 13,  65 => 10,  53 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_topic_review.html", "");
    }
}
