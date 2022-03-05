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

/* memberlist_body.html */
class __TwigTemplate_26fa61e9f0954d53d4c36965a464fcaccd42bffe32a4f3fc91b0846d9089ce66 extends \Twig\Template
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
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t";
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\" onsubmit=\"insert_marked_users('#results', this.user); return false;\" data-form-name=\"";
            echo ($context["S_FORM_NAME"] ?? null);
            echo "\" data-field-name=\"";
            echo ($context["S_FIELD_NAME"] ?? null);
            echo "\">

";
        } else {
            // line 7
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 7)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 8
            echo "\t<div class=\"panel\" id=\"memberlist_search\"";
            if ( !($context["S_SEARCH_USER"] ?? null)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t";
            // line 9
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 9)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 10
            echo "\t</div>
\t<form method=\"post\" action=\"";
            // line 11
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">

";
        }
        // line 14
        echo "
";
        // line 15
        // line 16
        echo "
\t";
        // line 17
        if (($context["S_SHOW_GROUP"] ?? null)) {
            // line 18
            echo "\t\t";
            // line 19
            echo "\t\t<h2 class=\"group-title\"";
            if (($context["GROUP_COLOR"] ?? null)) {
                echo " style=\"color:#";
                echo ($context["GROUP_COLOR"] ?? null);
                echo ";\"";
            }
            echo ">";
            echo ($context["GROUP_NAME"] ?? null);
            echo "</h2>
\t\t";
            // line 20
            // line 21
            echo "\t\t";
            if (($context["U_MANAGE"] ?? null)) {
                // line 22
                echo "\t\t\t<p class=\"right responsive-center manage rightside\"><a href=\"";
                echo ($context["U_MANAGE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MANAGE_GROUP");
                echo "</a></p>
\t\t";
            }
            // line 24
            echo "\t\t<p>";
            echo ($context["GROUP_DESC"] ?? null);
            echo " ";
            echo ($context["GROUP_TYPE"] ?? null);
            echo "</p>

\t\t";
            // line 26
            // line 27
            echo "
\t\t<p>
\t\t\t";
            // line 29
            if (($context["AVATAR_IMG"] ?? null)) {
                echo ($context["AVATAR_IMG"] ?? null);
            }
            // line 30
            echo "\t\t\t";
            // line 31
            echo "\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo ($context["RANK_IMG"] ?? null);
            }
            // line 32
            echo "\t\t\t";
            if (($context["GROUP_RANK"] ?? null)) {
                // line 33
                echo "\t\t\t\t";
                if ( !($context["RANK_IMG"] ?? null)) {
                    // line 34
                    echo "\t\t\t\t\t";
                    echo ($this->extensions['phpbb\template\twig\extension']->lang("GROUP_RANK") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
                    echo "
\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t";
                echo ($context["GROUP_RANK"] ?? null);
                echo "
\t\t\t";
            }
            // line 38
            echo "\t\t\t";
            // line 39
            echo "\t\t</p>
\t";
        } else {
            // line 41
            echo "\t\t";
            // line 42
            echo "\t<br clear=\"all\" />
\t\t<h2 class=\"solo\">";
            // line 43
            echo ($context["PAGE_TITLE"] ?? null);
            if (($context["SEARCH_WORDS"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <a href=\"";
                echo ($context["U_SEARCH_WORDS"] ?? null);
                echo "\">";
                echo ($context["SEARCH_WORDS"] ?? null);
                echo "</a>";
            }
            echo "</h2>

\t\t<div class=\"action-bar bar-top\">
\t\t\t<div class=\"member-search panel\">
\t\t\t\t";
            // line 47
            if ((($context["U_FIND_MEMBER"] ?? null) &&  !($context["S_SEARCH_USER"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_FIND_MEMBER"] ?? null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_MEMBER_SEARCH");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                echo "</a> &bull; ";
            } elseif (((($context["S_SEARCH_USER"] ?? null) && ($context["U_HIDE_FIND_MEMBER"] ?? null)) &&  !($context["S_IN_SEARCH_POPUP"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_HIDE_FIND_MEMBER"] ?? null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_MEMBER_SEARCH");
                echo "</a> &bull; ";
            }
            // line 48
            echo "\t\t\t\t<strong>
\t\t\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "first_char", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 50
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["first_char"], "U_SORT", [], "any", false, false, false, 50);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["first_char"], "DESC", [], "any", false, false, false, 50);
                echo "</a>&nbsp;
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t\t</strong>
\t\t\t</div>

\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 56
            echo ($context["TOTAL_USERS"] ?? null);
            echo "
\t\t\t\t";
            // line 57
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 57))) {
                // line 58
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 58)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 59
                echo "\t\t\t\t";
            } else {
                // line 60
                echo "\t\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 62
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 65
        echo "
\t";
        // line 66
        if (((($context["S_LEADERS_SET"] ?? null) ||  !($context["S_SHOW_GROUP"] ?? null)) ||  !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 66)))) {
            // line 67
            echo "\t<div class=\"forumbg forumbg-table\">
\t\t<div class=\"inner\">

\t\t<table class=\"table1 memberlist\" id=\"memberlist\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\" data-dfn=\"";
            // line 73
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
            if ((($context["S_SHOW_GROUP"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 73)))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_LEADER");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            }
            echo "\"><span class=\"rank-img\"><a href=\"";
            echo ($context["U_SORT_RANK"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
            echo "</a></span><a href=\"";
            echo ($context["U_SORT_USERNAME"] ?? null);
            echo "\">";
            if ((($context["S_SHOW_GROUP"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 73)))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_LEADER");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            }
            echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
            // line 74
            echo ($context["U_SORT_POSTS"] ?? null);
            echo "#memberlist\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
            echo "</a></th>
\t\t\t<th class=\"info\">";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 75));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_FIRST_ROW", [], "any", false, false, false, 75)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                    echo " ";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 75);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
            // line 76
            echo ($context["U_SORT_JOINED"] ?? null);
            echo "#memberlist\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
            echo "</a></th>
\t\t\t";
            // line 77
            if (($context["U_SORT_ACTIVE"] ?? null)) {
                echo "<th class=\"active\"><a href=\"";
                echo ($context["U_SORT_ACTIVE"] ?? null);
                echo "#memberlist\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
                echo "</a></th>";
            }
            // line 78
            echo "\t\t\t";
            // line 79
            echo "\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
        }
        // line 83
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 83));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 84
            echo "\t\t\t";
            if (($context["S_SHOW_GROUP"] ?? null)) {
                // line 85
                echo "\t\t\t\t";
                if (( !twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_GROUP_LEADER", [], "any", false, false, false, 85) &&  !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "S_MEMBER_HEADER", [], "any", false, false, false, 85))) {
                    // line 86
                    echo "\t\t\t\t";
                    if ((($context["S_LEADERS_SET"] ?? null) && twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_FIRST_ROW", [], "any", false, false, false, 86))) {
                        // line 87
                        echo "\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"";
                        // line 88
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t\t\t</tr>
\t\t\t\t";
                    }
                    // line 91
                    if (($context["S_LEADERS_SET"] ?? null)) {
                        // line 92
                        echo "\t\t</tbody>
\t\t</table>

\t</div>
</div>
";
                    }
                    // line 98
                    echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t";
                    // line 104
                    if ( !($context["S_LEADERS_SET"] ?? null)) {
                        // line 105
                        echo "\t\t<th class=\"name\" data-dfn=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                        echo "\"><span class=\"rank-img\"><a href=\"";
                        echo ($context["U_SORT_RANK"] ?? null);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                        echo "</a></span><a href=\"";
                        echo ($context["U_SORT_USERNAME"] ?? null);
                        echo "\">";
                        if (($context["S_SHOW_GROUP"] ?? null)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                        }
                        echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
                        // line 106
                        echo ($context["U_SORT_POSTS"] ?? null);
                        echo "#memberlist\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                        echo "</a></th>
\t\t\t<th class=\"info\">";
                        // line 107
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 107)) {
                                echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 107);
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
                        // line 108
                        echo ($context["U_SORT_JOINED"] ?? null);
                        echo "#memberlist\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                        echo "</a></th>
\t\t\t";
                        // line 109
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "<th class=\"active\"><a href=\"";
                            echo ($context["U_SORT_ACTIVE"] ?? null);
                            echo "#memberlist\">";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
                            echo "</a></th>";
                        }
                        // line 110
                        echo "\t\t\t";
                        // line 111
                        echo "\t";
                    } elseif (($context["S_SHOW_GROUP"] ?? null)) {
                        // line 112
                        echo "\t\t<th class=\"name\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t<th class=\"posts\">";
                        // line 113
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                        echo "</th>
\t\t<th class=\"info\">";
                        // line 114
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["memberrow"], "custom_fields", [], "any", false, false, false, 114));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_FIRST_ROW", [], "any", false, false, false, 114)) {
                                echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 114);
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t<th class=\"joined\">";
                        // line 115
                        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                        echo "</th>
\t\t";
                        // line 116
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "<th class=\"active\">";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
                            echo "</th>";
                        }
                        // line 117
                        echo "\t\t";
                        // line 118
                        echo "\t";
                    }
                    // line 119
                    echo "\t</tr>
\t</thead>
\t<tbody>
\t\t\t\t\t";
                    // line 122
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 123
                    echo "\t\t\t\t";
                }
                // line 124
                echo "\t\t\t";
            }
            // line 125
            echo "
\t<tr class=\"";
            // line 126
            if ((twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_ROW_COUNT", [], "any", false, false, false, 126) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_INACTIVE", [], "any", false, false, false, 126)) {
                echo " inactive";
            }
            echo "\">
\t\t<td class=\"membertd\"><span class=\"rank-img\">";
            // line 127
            if (twig_get_attribute($this->env, $this->source, $context["memberrow"], "RANK_IMG", [], "any", false, false, false, 127)) {
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "RANK_IMG", [], "any", false, false, false, 127);
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "RANK_TITLE", [], "any", false, false, false, 127);
            }
            echo "</span>";
            if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SELECT_SINGLE"] ?? null))) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "USERNAME", [], "any", false, false, false, 127);
                echo "\" /> ";
            }
            echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "USERNAME_FULL", [], "any", false, false, false, 127);
            if (twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_INACTIVE", [], "any", false, false, false, 127)) {
                echo " (";
                echo $this->extensions['phpbb\template\twig\extension']->lang("INACTIVE");
                echo ")";
            }
            if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
                echo "<br />[&nbsp;<a href=\"#\" onclick=\"insert_single_user('#results', '";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "A_USERNAME", [], "any", false, false, false, 127);
                echo "'); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT");
                echo "</a>&nbsp;]";
            }
            echo "</td>
\t\t<td class=\"posts\">";
            // line 128
            if ((twig_get_attribute($this->env, $this->source, $context["memberrow"], "POSTS", [], "any", false, false, false, 128) && ($context["S_DISPLAY_SEARCH"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "U_SEARCH_USER", [], "any", false, false, false, 128);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "POSTS", [], "any", false, false, false, 128);
                echo "</a>";
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "POSTS", [], "any", false, false, false, 128);
            }
            echo "</td>
\t\t<td class=\"info\">";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["memberrow"], "custom_fields", [], "any", false, false, false, 130));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 131
                echo "<div>";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "S_PROFILE_CONTACT", [], "any", false, false, false, 131)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "PROFILE_FIELD_CONTACT", [], "any", false, false, false, 131);
                    echo "\">";
                }
                echo twig_get_attribute($this->env, $this->source, $context["field"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 131);
                if (twig_get_attribute($this->env, $this->source, $context["field"], "S_PROFILE_CONTACT", [], "any", false, false, false, 131)) {
                    echo "</a>";
                }
                echo "</div>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 133
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "</td>

\t\t<td class=\"member-joined\">";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "JOINED", [], "any", false, false, false, 137);
            echo "</td>
\t\t";
            // line 138
            if (($context["S_VIEWONLINE"] ?? null)) {
                echo "<td class=\"last-active\">";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "LAST_ACTIVE", [], "any", false, false, false, 138);
                echo "&nbsp;</td>";
            }
            // line 139
            echo "\t\t";
            // line 140
            echo "\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 142
            echo "\t<tr class=\"bg1\">
\t\t<td colspan=\"";
            // line 143
            if (($context["S_VIEWONLINE"] ?? null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_MEMBERS");
            echo "</td>
\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "\t</tbody>
\t</table>

\t</div>
</div>

";
        // line 152
        if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SELECT_SINGLE"] ?? null))) {
            // line 153
            echo "<fieldset class=\"display-actions\">
\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 154
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_MARKED");
            echo "\" class=\"button2 hvr-sweep-to-top\" />
\t<div><a href=\"#\" onclick=\"marklist('results', 'user', true); return false;\">";
            // line 155
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('results', 'user', false); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
            echo "</a></div>
</fieldset>
";
        }
        // line 158
        echo "
";
        // line 159
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 160
            echo "</form>
<form method=\"post\" id=\"sort-results\" action=\"";
            // line 161
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">
";
        }
        // line 163
        echo "
";
        // line 164
        if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SEARCH_USER"] ?? null))) {
            // line 165
            echo "<fieldset class=\"display-options\">
\t<label for=\"sk\">";
            // line 166
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_SORT_METHOD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            echo ($context["S_MODE_SELECT"] ?? null);
            echo "</select></label>
\t<label for=\"sd\">";
            // line 167
            echo $this->extensions['phpbb\template\twig\extension']->lang("ORDER");
            echo " <select name=\"sd\" id=\"sd\">";
            echo ($context["S_ORDER_SELECT"] ?? null);
            echo "</select></label>
\t<input type=\"submit\" name=\"sort\" value=\"";
            // line 168
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" class=\"button2 hvr-sweep-to-top\" />
</fieldset>
";
        }
        // line 171
        echo "
</form>

<div class=\"action-bar bar-bottom\">
\t<div class=\"pagination\">
\t\t";
        // line 176
        echo ($context["TOTAL_USERS"] ?? null);
        echo "
\t\t";
        // line 177
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 177))) {
            // line 178
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "memberlist_body.html", 178)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 179
            echo "\t\t";
        } else {
            // line 180
            echo "\t\t\t &bull; ";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t";
        }
        // line 182
        echo "\t</div>
</div>

";
        // line 185
        // line 186
        echo "
";
        // line 187
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 188
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 188)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 190
            echo "\t";
            $location = "jumpbox.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox.html", "memberlist_body.html", 190)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 191
            echo "\t";
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 191)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  812 => 191,  799 => 190,  785 => 188,  783 => 187,  780 => 186,  779 => 185,  774 => 182,  768 => 180,  765 => 179,  752 => 178,  750 => 177,  746 => 176,  739 => 171,  733 => 168,  727 => 167,  720 => 166,  717 => 165,  715 => 164,  712 => 163,  707 => 161,  704 => 160,  702 => 159,  699 => 158,  691 => 155,  687 => 154,  684 => 153,  682 => 152,  674 => 146,  659 => 143,  656 => 142,  650 => 140,  648 => 139,  642 => 138,  638 => 137,  634 => 135,  628 => 133,  613 => 131,  608 => 130,  594 => 128,  567 => 127,  556 => 126,  553 => 125,  550 => 124,  547 => 123,  544 => 122,  539 => 119,  536 => 118,  534 => 117,  528 => 116,  524 => 115,  509 => 114,  505 => 113,  500 => 112,  497 => 111,  495 => 110,  487 => 109,  481 => 108,  445 => 107,  439 => 106,  420 => 105,  418 => 104,  410 => 98,  402 => 92,  400 => 91,  390 => 88,  387 => 87,  384 => 86,  381 => 85,  378 => 84,  372 => 83,  366 => 79,  364 => 78,  356 => 77,  350 => 76,  335 => 75,  329 => 74,  307 => 73,  299 => 67,  297 => 66,  294 => 65,  289 => 62,  283 => 60,  280 => 59,  267 => 58,  265 => 57,  261 => 56,  255 => 52,  244 => 50,  240 => 49,  237 => 48,  219 => 47,  204 => 43,  201 => 42,  199 => 41,  195 => 39,  193 => 38,  187 => 36,  181 => 34,  178 => 33,  175 => 32,  170 => 31,  168 => 30,  164 => 29,  160 => 27,  159 => 26,  151 => 24,  143 => 22,  140 => 21,  139 => 20,  128 => 19,  126 => 18,  124 => 17,  121 => 16,  120 => 15,  117 => 14,  111 => 11,  108 => 10,  96 => 9,  89 => 8,  76 => 7,  65 => 4,  52 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_body.html", "");
    }
}
