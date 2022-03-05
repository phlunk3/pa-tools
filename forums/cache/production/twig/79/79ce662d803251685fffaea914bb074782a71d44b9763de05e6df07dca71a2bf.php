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

/* navbar_header.html */
class __TwigTemplate_48e2c95b87ec3366e4341e6bae8f3ef234627d3a0af52db2caa98203bcae30d5 extends \Twig\Template
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
        echo "<div class=\"navbar\" role=\"navigation\">
    <div class=\"inner\">

    <ul id=\"nav-main\" class=\"nav-main linklist\" role=\"menubar\">

        <li id=\"quick-links\" class=\"quick-links dropdown-container responsive-menu";
        // line 6
        if (( !($context["S_DISPLAY_QUICK_LINKS"] ?? null) &&  !($context["S_DISPLAY_SEARCH"] ?? null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
            <a href=\"#\" class=\"dropdown-trigger\">
                <i class=\"icon fa-bars fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 8
        echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_LINKS");
        echo "</span>
            </a>
            <div class=\"dropdown\">
                <div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
                <ul class=\"dropdown-contents\" role=\"menu\">
                    ";
        // line 13
        // line 14
        echo "
                    ";
        // line 15
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 16
            echo "                        <li class=\"separator\"></li>
                        ";
            // line 17
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 18
                echo "                            <li>
                                <a href=\"";
                // line 19
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">
                                    <i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
                // line 20
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</span>
                                </a>
                            </li>
                        ";
            }
            // line 24
            echo "                        ";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 25
                echo "                            <li>
                                <a href=\"";
                // line 26
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">
                                    <i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 27
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</span>
                                </a>
                            </li>
                        ";
            }
            // line 31
            echo "                        ";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 32
                echo "                            <li>
                                <a href=\"";
                // line 33
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">
                                    <i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 34
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</span>
                                </a>
                            </li>
                        ";
            }
            // line 38
            echo "                            <li>
                                <a href=\"";
            // line 39
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">
                                    <i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 40
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 44
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">
                                    <i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 45
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
                                </a>
                            </li>
                            <li class=\"separator\"></li>
                            <li>
                                <a href=\"";
            // line 50
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">
                                    <i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 51
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
                                </a>
                            </li>
                    ";
        }
        // line 55
        echo "
                    ";
        // line 56
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 57
            echo "                        <li class=\"separator\"></li>
                        ";
            // line 58
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 59
                echo "                            <li>
                                <a href=\"";
                // line 60
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">
                                    <i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 61
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</span>
                                </a>
                            </li>
                        ";
            }
            // line 65
            echo "                        ";
            if (($context["U_TEAM"] ?? null)) {
                // line 66
                echo "                            <li>
                                <a href=\"";
                // line 67
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">
                                    <i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 68
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</span>
                                </a>
                            </li>
                        ";
            }
            // line 72
            echo "                    ";
        }
        // line 73
        echo "                    <li class=\"separator\"></li>

                    ";
        // line 75
        // line 76
        echo "                </ul>
            </div>
        </li>

        ";
        // line 80
        // line 81
        echo "        <li ";
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo ">
            <a href=\"";
        // line 82
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">
                <i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 83
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</span>
            </a>
        </li>
        ";
        // line 86
        // line 87
        echo "        ";
        if (($context["U_ACP"] ?? null)) {
            // line 88
            echo "            <li data-last-responsive=\"true\">
                <a href=\"";
            // line 89
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\" role=\"menuitem\">
                    <i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 90
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</span>
                </a>
            </li>
        ";
        }
        // line 94
        echo "        ";
        if (($context["U_MCP"] ?? null)) {
            // line 95
            echo "            <li data-last-responsive=\"true\">
                <a href=\"";
            // line 96
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\" role=\"menuitem\">
                    <i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 97
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</span>
                </a>
            </li>
        ";
        }
        // line 101
        echo "    </ul>

    <ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
       ";
        // line 104
        $context["MICRODATA"] = "itemtype=\"https://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        // line 105
        echo "
        ";
        // line 106
        $context["navlink_position"] = 1;
        // line 107
        echo "        
            ";
        // line 108
        // line 109
        echo "
        <li class=\"breadcrumbs\" itemscope itemtype=\"https://schema.org/BreadcrumbList\">

            ";
        // line 112
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 113
            echo "                <span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"name\">";
            echo ($context["L_SITE_HOME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
            ";
        }
        // line 115
        echo "
            ";
        // line 116
        // line 117
        echo "                <span class=\"crumb\" ";
        echo ($context["MICRODATA"] ?? null);
        echo "><a itemprop=\"item\" href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"name\">";
        echo ($context["L_INDEX"] ?? null);
        echo "</span></a><meta itemprop=\"position\" content=\"";
        echo ($context["navlink_position"] ?? null);
        $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
        echo "\" /></span>

            ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navlinks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["navlink"]) {
            // line 120
            echo "                ";
            $context["NAVLINK_NAME"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", true, true, false, 120)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", false, false, false, 120), twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 120))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 120)));
            // line 121
            echo "                ";
            $context["NAVLINK_LINK"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", true, true, false, 121)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", false, false, false, 121), twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 121))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 121)));
            // line 122
            echo "
                ";
            // line 123
            // line 124
            echo "                <span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            if (twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 124)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 124);
            }
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["NAVLINK_LINK"] ?? null);
            echo "\"><span itemprop=\"name\">";
            echo ($context["NAVLINK_NAME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
                ";
            // line 125
            // line 126
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "
            ";
        // line 128
        // line 129
        echo "
        </li>
       ";
        // line 131
        // line 132
        echo "
       ";
        // line 133
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 134
            echo "            <li class=\"rightside responsive-search\">
                <a href=\"";
            // line 135
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
                    <i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 136
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
                </a>
            </li>
        ";
        }
        // line 140
        echo "
    </ul>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 140,  388 => 136,  382 => 135,  379 => 134,  377 => 133,  374 => 132,  373 => 131,  369 => 129,  368 => 128,  365 => 127,  359 => 126,  358 => 125,  342 => 124,  341 => 123,  338 => 122,  335 => 121,  332 => 120,  328 => 119,  311 => 117,  310 => 116,  307 => 115,  294 => 113,  292 => 112,  287 => 109,  286 => 108,  283 => 107,  281 => 106,  278 => 105,  276 => 104,  271 => 101,  264 => 97,  258 => 96,  255 => 95,  252 => 94,  245 => 90,  239 => 89,  236 => 88,  233 => 87,  232 => 86,  226 => 83,  220 => 82,  211 => 81,  210 => 80,  204 => 76,  203 => 75,  199 => 73,  196 => 72,  189 => 68,  185 => 67,  182 => 66,  179 => 65,  172 => 61,  168 => 60,  165 => 59,  163 => 58,  160 => 57,  158 => 56,  155 => 55,  148 => 51,  144 => 50,  136 => 45,  132 => 44,  125 => 40,  121 => 39,  118 => 38,  111 => 34,  107 => 33,  104 => 32,  101 => 31,  94 => 27,  90 => 26,  87 => 25,  84 => 24,  77 => 20,  73 => 19,  70 => 18,  68 => 17,  65 => 16,  63 => 15,  60 => 14,  59 => 13,  51 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_header.html", "");
    }
}
