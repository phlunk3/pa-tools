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

/* confirm_body_prune.html */
class __TwigTemplate_f92b74395d90eb0c443b6ed6458d66397ff768a05f3320722956ddab7f2998d8 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "confirm_body_prune.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"confirm\" method=\"post\" action=\"";
        // line 3
        echo ($context["S_CONFIRM_ACTION"] ?? null);
        echo "\">

<fieldset id=\"userlist\">
\t<h2>";
        // line 6
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRUNE_USERS_LIST");
        echo "</h2>
\t";
        // line 7
        if (($context["S_DEACTIVATE"] ?? null)) {
            echo "<p>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRUNE_USERS_LIST_DEACTIVATE");
            echo "</p>";
        } else {
            echo "<p>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRUNE_USERS_LIST_DELETE");
            echo "</p>";
        }
        // line 8
        echo "
\t<br />
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "users", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 11
            echo "\t&raquo; <input type=\"checkbox\" name=\"user_ids[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["users"], "USER_ID", [], "any", false, false, false, 11);
            echo "\" checked=\"checked\" />
\t<a href=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["users"], "U_PROFILE", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["users"], "USERNAME", [], "any", false, false, false, 12);
            echo "</a>
\t";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["users"], "U_USER_ADMIN", [], "any", false, false, false, 13)) {
                echo " [ <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["users"], "U_USER_ADMIN", [], "any", false, false, false, 13);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("USER_ADMIN");
                echo "</a> ]";
            }
            echo "<br />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t<br />
\t<span class=\"small\">
\t<a href=\"#\" onclick=\"marklist('userlist', 'user_ids', true)\">";
        // line 17
        echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
        echo "</a> &bull;
\t<a href=\"#\" onclick=\"marklist('userlist', 'user_ids', false)\">";
        // line 18
        echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
        echo "</a>
\t</span>
</fieldset>

<fieldset>
\t<h1>";
        // line 23
        echo ($context["MESSAGE_TITLE"] ?? null);
        echo "</h1>
\t<p>";
        // line 24
        echo ($context["MESSAGE_TEXT"] ?? null);
        echo "</p>

\t";
        // line 26
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "

\t<div style=\"text-align: center;\">
\t\t<input type=\"submit\" name=\"confirm\" value=\"";
        // line 29
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "\" class=\"button2\" />&nbsp; 
\t\t<input type=\"submit\" name=\"cancel\" value=\"";
        // line 30
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "\" class=\"button2\" />
\t</div>
</fieldset>

</form>

";
        // line 36
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "confirm_body_prune.html", 36)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "confirm_body_prune.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 36,  140 => 30,  136 => 29,  130 => 26,  125 => 24,  121 => 23,  113 => 18,  109 => 17,  105 => 15,  91 => 13,  85 => 12,  80 => 11,  76 => 10,  72 => 8,  62 => 7,  58 => 6,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "confirm_body_prune.html", "");
    }
}
