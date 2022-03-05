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

/* navbar_footer_2.html */
class __TwigTemplate_217017c23419afd20ca300481c186bb36dd46f2d9ff93260b1d706a395c730a5 extends \Twig\Template
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
        echo "<div class=\"navbar-footer2\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-footer2\" class=\"nav-footer2\" role=\"menubar\">
\t\t";
        // line 5
        if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 6
            echo "\t\t\t<li class=\"watch-forum\" data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 7
            echo ($context["U_WATCH_FORUM_LINK"] ?? null);
            echo "\" title=\"";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"icon ";
            if (($context["S_WATCHING_FORUM"] ?? null)) {
                echo "fa-check-square-o";
            } else {
                echo "fa-square-o";
            }
            echo " fa-fw\" data-toggle-text=\"";
            echo ($context["S_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\" data-toggle-url=\"";
            echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\">
\t\t\t\t\t<i class=\"icon ";
            // line 8
            if (($context["S_WATCHING_FORUM"] ?? null)) {
                echo "fa-square-o";
            } else {
                echo "fa-check-square-o";
            }
            echo " fa-fw\" aria-hidden=\"true\"></i><span>";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 12
        echo "\t\t<li class=\"breadcrumbs2\">
\t\t\t";
        // line 13
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 14
            echo "\t\t\t\t";
            ob_start(function () { return ''; });
            // line 15
            echo "\t\t\t\t<span class=\"crumb2\">
\t\t\t\t\t<a href=\"";
            // line 16
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\">
\t\t\t\t\t\t<i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 17
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t\t";
            $___internal_4a1c90fd64204ae5254a952b4ce64c063f33da194f24677af59e11533c365d4e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 14
            echo twig_spaceless($___internal_4a1c90fd64204ae5254a952b4ce64c063f33da194f24677af59e11533c365d4e_);
            // line 21
            echo "\t\t\t";
        }
        // line 22
        echo "\t\t\t";
        // line 23
        echo "\t\t\t";
        ob_start(function () { return ''; });
        // line 24
        echo "\t\t\t<span class=\"crumb2\">
\t\t\t\t<a href=\"";
        // line 25
        echo ($context["U_INDEX"] ?? null);
        echo "\" data-navbar-reference=\"index\">
\t\t\t\t\t";
        // line 26
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i>";
        }
        echo "<span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        echo "</span>
\t\t\t\t</a>
\t\t\t</span>
\t\t\t";
        $___internal_66c075a2fee0a37b5ea98d347118fad4b1e263e02f1423635de16bb05ef0dfc8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo twig_spaceless($___internal_66c075a2fee0a37b5ea98d347118fad4b1e263e02f1423635de16bb05ef0dfc8_);
        // line 30
        echo "\t\t\t";
        // line 31
        echo "\t\t</li>
\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer_2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 31,  129 => 30,  127 => 23,  116 => 26,  112 => 25,  109 => 24,  106 => 23,  104 => 22,  101 => 21,  99 => 14,  92 => 17,  88 => 16,  85 => 15,  82 => 14,  80 => 13,  77 => 12,  64 => 8,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_footer_2.html", "");
    }
}
