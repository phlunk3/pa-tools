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

/* index_body.html */
class __TwigTemplate_93840059b97ec2e32b1089647a3f0b3e3a51d83876b765f6af210f99e7504d27 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"forumbody\">
";
        // line 4
        // line 5
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 6
            echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
            // line 7
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 10
        // line 11
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 11)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 12
        echo "<div style=\"margin-bottom:5px;\"></div>
</div>

\t\t\t ";
        // line 15
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 16
            echo "\t\t\t\t<div id=\"top-headerspace\" class=\"top-headerspace\">
\t\t\t\t<form method=\"post\" action=\"";
            // line 17
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" class=\"headerspace\">
\t\t\t\t\t\t<h3><a href=\"";
            // line 18
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</a>";
            if (($context["S_REGISTER_ENABLED"] ?? null)) {
                echo "&nbsp; &bull; &nbsp;<a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</a>";
            }
            echo "</h3>
\t\t\t\t\t<fieldset class=\"quick-login\">
\t\t\t\t\t\t<label for=\"username\"><span>";
            // line 20
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\" /></label><br /><br />
\t\t\t\t\t\t<label for=\"password\"><span>";
            // line 21
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label><br /><br />
\t\t\t\t\t";
            // line 22
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 23
                echo "\t\t\t\t\t\t<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a>
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 26
                echo "\t\t\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
            echo "\" class=\"button2 hvr-sweep-to-top\" />
\t\t\t\t\t";
            // line 29
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t\t\t";
            // line 30
            echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
            echo "
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 35
        echo "
\t\t\t";
        // line 36
        // line 37
        echo "
\t\t\t\t\t";
        // line 38
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 39
            echo "\t\t\t\t\t<div class=\"";
            if ((($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                echo " top-online";
            } else {
                echo " top-online2";
            }
            echo "\">
\t\t\t\t\t\t<div class=\"stat-block online-list whoonline\">
\t\t\t\t\t\t";
            // line 41
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<h3><a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 42
            echo "\t\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 43
            // line 44
            echo "\t\t\t\t\t\t\t";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /> 
\t\t\t\t\t\t";
            // line 45
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 46
                echo "\t\t\t\t\t\t<br />";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
\t\t\t\t\t\t";
                // line 47
                if (($context["LEGEND"] ?? null)) {
                    echo "<br /><em>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo ($context["LEGEND"] ?? null);
                    echo "</em>";
                }
                // line 48
                echo "\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t";
            // line 50
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 54
        echo "
\t\t\t\t";
        // line 55
        // line 56
        echo "
\t\t\t\t\t";
        // line 57
        if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
            // line 58
            echo "\t\t\t\t\t<div class=\"top-birthday\">
\t\t\t\t\t\t<div class=\"stat-block birthday-list\">
\t\t\t\t\t\t<h3>";
            // line 60
            echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAYS");
            echo "</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 62
            // line 63
            echo "\t\t\t\t\t\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 63))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONGRATULATIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 63));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "USERNAME", [], "any", false, false, false, 63);
                    if ((twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 63) !== "")) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 63);
                        echo ")";
                    }
                    if ( !twig_get_attribute($this->env, $this->source, $context["birthdays"], "S_LAST_ROW", [], "any", false, false, false, 63)) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_BIRTHDAYS");
            }
            // line 64
            echo "\t\t\t\t\t\t";
            // line 65
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 69
        echo "
\t\t\t\t\t";
        // line 70
        if (($context["NEWEST_USER"] ?? null)) {
            // line 71
            echo "\t\t\t\t\t<div class=\"top-statistics\">
\t\t\t\t\t\t<div class=\"stat-block statistics\">
\t\t\t\t\t\t<h3>";
            // line 73
            echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
            echo "</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 75
            // line 76
            echo "\t\t\t\t\t\t";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_USERS"] ?? null);
            echo " &bull; ";
            echo ($context["NEWEST_USER"] ?? null);
            echo "
\t\t\t\t\t\t";
            // line 77
            // line 78
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t

\t\t\t";
        // line 84
        // line 85
        echo "\t\t\t<!-- Start nav social club -->
\t\t\t<div id=\"nav-social\" class=\"nav-social\">
\t\t\t\t<h3 class=\"social-club\">";
        // line 87
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT");
        echo "</h3>
\t\t\t\t<ul class=\"club\"><div class=\"navclub\">
\t\t\t\t<li class=\"hvr-sweep-to-top\"><a href=\"#\" title=\"YouTube\"><i class=\"fa fa-youtube-square fs28\"></i></a></li>
\t\t\t\t<li class=\"hvr-sweep-to-top\"><a href=\"#\" title=\"GitHub\"><i class=\"fa fa-github-square fs28\"></i></a></li>
\t\t\t\t<li class=\"hvr-sweep-to-top\"><a href=\"#\" title=\"Facebook\"><i class=\"fa fa-facebook-official fs28\"></i></a></li>
\t\t\t\t<li class=\"hvr-sweep-to-top\"><a href=\"#\" title=\"Twitter\"><i class=\"fa fa-twitter fs28\"></i></a></li>
\t\t\t\t<li class=\"hvr-sweep-to-top\"><a href=\"#\" title=\"LinkedIn\"><i class=\"fa fa-linkedin-square fs28\"></i></a></li>
\t\t\t\t<li class=\"hvr-sweep-to-top\"><a href=\"#\" title=\"Flux RSS\"><i class=\"fa fa-rss fs28\"></i></a></li>
\t\t\t\t</div></ul>
\t\t\t</div>
\t\t\t<!-- End nav social club -->
\t\t\t
\t\t";
        // line 99
        // line 100
        echo "
";
        // line 101
        $location = "overall_footer_2.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer_2.html", "index_body.html", 101)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 101,  341 => 100,  340 => 99,  325 => 87,  321 => 85,  320 => 84,  316 => 82,  310 => 78,  309 => 77,  298 => 76,  297 => 75,  292 => 73,  288 => 71,  286 => 70,  283 => 69,  277 => 65,  275 => 64,  249 => 63,  248 => 62,  243 => 60,  239 => 58,  237 => 57,  234 => 56,  233 => 55,  230 => 54,  224 => 50,  222 => 49,  219 => 48,  210 => 47,  205 => 46,  203 => 45,  194 => 44,  193 => 43,  190 => 42,  178 => 41,  168 => 39,  166 => 38,  163 => 37,  162 => 36,  159 => 35,  151 => 30,  147 => 29,  142 => 28,  136 => 26,  133 => 25,  125 => 23,  123 => 22,  116 => 21,  109 => 20,  94 => 18,  90 => 17,  87 => 16,  85 => 15,  80 => 12,  68 => 11,  67 => 10,  59 => 7,  56 => 6,  54 => 5,  53 => 4,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
