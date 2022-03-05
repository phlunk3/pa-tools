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

/* jumpbox-search.html */
class __TwigTemplate_b6a5de4e015290de7a0dde0c857e0ca5c59094e16d24974db95e85646141286c extends \Twig\Template
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
<div class=\"action-bar actions-jump jump-search\">
\t";
        // line 3
        if (($context["S_VIEWTOPIC"] ?? null)) {
            // line 4
            echo "\t<p class=\"jumpbox-return\">
\t\t<a href=\"";
            // line 5
            echo ($context["U_VIEW_FORUM"] ?? null);
            echo "\" class=\"left-box arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" accesskey=\"r\">
\t\t\t<i class=\"icon fa-angle-";
            // line 6
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_FORUM");
            echo "</span>
\t\t</a>
\t</p>
\t";
        } elseif (        // line 9
($context["S_VIEWFORUM"] ?? null)) {
            // line 10
            echo "\t<p class=\"jumpbox-return\">
\t\t<a href=\"";
            // line 11
            echo ($context["U_INDEX"] ?? null);
            echo "\" class=\"left-box arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" accesskey=\"r\">
\t\t\t<i class=\"icon fa-angle-";
            // line 12
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_INDEX");
            echo "</span>
\t\t</a>
\t</p>
\t";
        } elseif (        // line 15
($context["SEARCH_TOPIC"] ?? null)) {
            // line 16
            echo "\t<p class=\"jumpbox-return\">
\t\t<a class=\"left-box arrow-";
            // line 17
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH_TOPIC"] ?? null);
            echo "\" accesskey=\"r\">
\t\t\t<i class=\"icon fa-angle-";
            // line 18
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_TOPIC");
            echo "</span>
\t\t</a>
\t</p>
\t";
        } elseif (        // line 21
($context["S_SEARCH_ACTION"] ?? null)) {
            // line 22
            echo "\t<p class=\"jumpbox-return\">
\t\t<a class=\"left-box arrow-";
            // line 23
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">
\t\t\t<i class=\"icon fa-angle-";
            // line 24
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO_TO_SEARCH_ADV");
            echo "</span>
\t\t</a>
\t</p>
\t";
        }
        // line 28
        echo "
\t<div class=\"pagination\">
\t\t";
        // line 30
        echo ($context["SEARCH_MATCHES"] ?? null);
        echo "
\t\t";
        // line 31
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 31))) {
            // line 32
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "jumpbox-search.html", 32)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 33
            echo "\t\t";
        } else {
            // line 34
            echo "\t\t\t &bull; ";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t";
        }
        // line 36
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "jumpbox-search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 36,  146 => 34,  143 => 33,  130 => 32,  128 => 31,  124 => 30,  120 => 28,  111 => 24,  103 => 23,  100 => 22,  98 => 21,  90 => 18,  84 => 17,  81 => 16,  79 => 15,  71 => 12,  65 => 11,  62 => 10,  60 => 9,  52 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jumpbox-search.html", "");
    }
}
