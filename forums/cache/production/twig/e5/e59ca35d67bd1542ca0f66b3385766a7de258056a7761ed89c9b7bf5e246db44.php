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

/* ucp_register.html */
class __TwigTemplate_29e71cb55c051d63e9e7defac210e6c449f88eba970d6bb89c819bf8d945d89d extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "ucp_register.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script>

\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
        // line 10
        echo ($context["COOKIE_NAME"] ?? null);
        echo "_lang=' + lang_iso + '; path=";
        echo ($context["COOKIE_PATH"] ?? null);
        echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit.click();
\t}

</script>

";
        // line 17
        if (($context["PROVIDER_TEMPLATE_FILE"] ?? null)) {
            // line 18
            echo "
\t<div class=\"panel\">
\t<div class=\"inner\">

\t\t<h2>";
            // line 22
            echo ($context["SITENAME"] ?? null);
            echo " - ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("OAUTH_REGISTRATION");
            echo "</h2>

\t\t\t\t";
            // line 24
            $this->loadTemplate(($context["PROVIDER_TEMPLATE_FILE"] ?? null), "ucp_register.html", 24)->display($context);
            // line 25
            echo "\t</div>
</div>
";
        }
        // line 28
        echo "
<form id=\"register\" method=\"post\" action=\"";
        // line 29
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

<div class=\"panel\">
\t<div class=\"inner\">

\t<h2>";
        // line 34
        echo ($context["SITENAME"] ?? null);
        echo " - ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTRATION");
        echo "</h2>

\t<fieldset class=\"fields2\">
\t";
        // line 37
        if (($context["ERROR"] ?? null)) {
            echo "<dl><dd class=\"error\">";
            echo ($context["ERROR"] ?? null);
            echo "</dd></dl>";
        }
        // line 38
        echo "\t";
        if (($context["L_REG_COND"] ?? null)) {
            // line 39
            echo "\t\t<dl><dd><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REG_COND");
            echo "</strong></dd></dl>
\t";
        }
        // line 41
        echo "\t";
        // line 42
        echo "\t<dl>
\t\t<dt><label for=\"username\">";
        // line 43
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
        // line 44
        echo ($context["USERNAME"] ?? null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"new_password\">";
        // line 47
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"password\" tabindex=\"2\" name=\"new_password\" id=\"new_password\" size=\"25\" value=\"";
        // line 48
        echo ($context["PASSWORD"] ?? null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NEW_PASSWORD");
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"password_confirm\">";
        // line 51
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><input type=\"password\"  tabindex=\"3\" name=\"password_confirm\" id=\"password_confirm\" size=\"25\" value=\"";
        // line 52
        echo ($context["PASSWORD_CONFIRM"] ?? null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_PASSWORD");
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t\t<dl>
\t\t<dt><label for=\"email\">";
        // line 55
        echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_ADDRESS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><input type=\"email\" tabindex=\"4\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" value=\"";
        // line 56
        echo ($context["EMAIL"] ?? null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_ADDRESS");
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>

\t";
        // line 59
        // line 60
        echo "\t<hr />

\t";
        // line 62
        // line 63
        echo "\t<dl>
\t\t<dt><label for=\"lang\">";
        // line 64
        echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" tabindex=\"6\" title=\"";
        // line 65
        echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
        echo "\">";
        echo ($context["S_LANG_OPTIONS"] ?? null);
        echo "</select></dd>
\t</dl>

\t";
        // line 68
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("timezone_option.html", "ucp_register.html", 68)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 69
        echo "
\t";
        // line 70
        // line 71
        echo "\t";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "profile_fields", [], "any", false, false, false, 71))) {
            // line 72
            echo "\t\t<dl><dd><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ITEMS_REQUIRED");
            echo "</strong></dd></dl>

\t";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "profile_fields", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 75
                echo "\t\t<dl>
\t\t\t<dt><label";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD_ID", [], "any", false, false, false, 76)) {
                    echo " for=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD_ID", [], "any", false, false, false, 76);
                    echo "\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_NAME", [], "any", false, false, false, 76);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "S_REQUIRED", [], "any", false, false, false, 76)) {
                    echo " *";
                }
                echo "</label>
\t\t\t";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_EXPLAIN", [], "any", false, false, false, 77)) {
                    echo "<br /><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_EXPLAIN", [], "any", false, false, false, 77);
                    echo "</span>";
                }
                // line 78
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "ERROR", [], "any", false, false, false, 78)) {
                    echo "<br /><span class=\"error\">";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "ERROR", [], "any", false, false, false, 78);
                    echo "</span>";
                }
                echo "</dt>
\t\t\t<dd>";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD", [], "any", false, false, false, 79);
                echo "</dd>
\t\t</dl>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t";
        }
        // line 83
        echo "
\t";
        // line 84
        // line 85
        echo "\t</fieldset>
\t</div>
</div>
";
        // line 88
        if (($context["CAPTCHA_TEMPLATE"] ?? null)) {
            // line 89
            echo "\t";
            $value = 8;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 90
            echo "\t";
            $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "ucp_register.html", 90)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 92
        echo "
";
        // line 93
        if (($context["S_COPPA"] ?? null)) {
            // line 94
            echo "<div class=\"panel\">
\t<div class=\"inner\">

\t<h4>";
            // line 97
            echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_COMPLIANCE");
            echo "</h4>

\t<p>";
            // line 99
            echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_EXPLAIN");
            echo "</p>
\t</div>
</div>
";
        }
        // line 103
        echo "
";
        // line 104
        // line 105
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset class=\"submit-buttons submit-butt-register\">
\t\t";
        // line 110
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t<input type=\"submit\" tabindex=\"9\" name=\"submit\" id=\"submit\" value=\"";
        // line 111
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" class=\"button1 hvr-sweep-to-top default-submit-action\" />
\t\t";
        // line 112
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>

\t</div>
</div>
</form>

";
        // line 119
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_register.html", 119)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 119,  355 => 112,  351 => 111,  347 => 110,  340 => 105,  339 => 104,  336 => 103,  329 => 99,  324 => 97,  319 => 94,  317 => 93,  314 => 92,  300 => 90,  296 => 89,  294 => 88,  289 => 85,  288 => 84,  285 => 83,  282 => 82,  273 => 79,  264 => 78,  258 => 77,  244 => 76,  241 => 75,  237 => 74,  231 => 72,  228 => 71,  227 => 70,  224 => 69,  212 => 68,  204 => 65,  199 => 64,  196 => 63,  195 => 62,  191 => 60,  190 => 59,  182 => 56,  177 => 55,  169 => 52,  164 => 51,  156 => 48,  149 => 47,  141 => 44,  134 => 43,  131 => 42,  129 => 41,  123 => 39,  120 => 38,  114 => 37,  106 => 34,  96 => 29,  93 => 28,  88 => 25,  86 => 24,  79 => 22,  73 => 18,  71 => 17,  59 => 10,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_register.html", "");
    }
}
