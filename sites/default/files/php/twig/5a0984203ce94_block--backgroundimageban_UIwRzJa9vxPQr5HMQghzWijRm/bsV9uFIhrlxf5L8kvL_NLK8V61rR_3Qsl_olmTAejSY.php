<?php

/* themes/showcase_lite/templates/block--backgroundimagebannerfrontpage.html.twig */
class __TwigTemplate_b31a84d049b94e10b5ed134f6eebef7ddde55b1213f2bd2b9138e841f4deeef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 32, "block" => 36);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 30
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 32
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 33
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 35
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "</div>";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "    <div class=\"background-image-block__section field--mt-background-image-block\">
    <div class=\"background-image background-image--attachment-scroll\" style=\"background-image: url(../images/young-dressage-rider-on-white-horse-AYJTYH.jpg);\">&nbsp;</div>

    <div class=\"background-image-overlay region--dark-typography region--white-background\" style=\"opacity: 0.6;\">&nbsp;</div>

    <div class=\"container-fluid region--dark-typography region--white-background block\">
    <div class=\"row bottom-spacing-medium\">
    <div class=\"col-md-8 col-md-offset-2 text-center\">
    <h3 class=\"block-title block-title--extra-large\">ΙΠΠΑΣΙΑ</h3>

    <div class=\"bottom-spacing-medium\">
    <p class=\"large\">Πλήρης ενημέρωση</p>
    </div>

    <div class=\"bottom-spacing-large\">
    <p class=\"text-center\"><a class=\"button\" href=\"/blog\">Άρθρα & Νέα</a><a class=\"button\" href=\"/archeio\">Όλα τα τεύχη</a></p>
    </div>

    <div class=\"scroll-button smooth-scroll\"><a href=\"#page-start\"><span class=\"sr-only\">Αρχή</span></a></div>
    </div>
    </div>
    </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/showcase_lite/templates/block--backgroundimagebannerfrontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 37,  74 => 36,  70 => 61,  68 => 36,  63 => 35,  55 => 33,  53 => 32,  49 => 31,  44 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 *
 * @ingroup themeable
 */
#}
<div{{ attributes }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  {% block content %}
    <div class=\"background-image-block__section field--mt-background-image-block\">
    <div class=\"background-image background-image--attachment-scroll\" style=\"background-image: url(../images/young-dressage-rider-on-white-horse-AYJTYH.jpg);\">&nbsp;</div>

    <div class=\"background-image-overlay region--dark-typography region--white-background\" style=\"opacity: 0.6;\">&nbsp;</div>

    <div class=\"container-fluid region--dark-typography region--white-background block\">
    <div class=\"row bottom-spacing-medium\">
    <div class=\"col-md-8 col-md-offset-2 text-center\">
    <h3 class=\"block-title block-title--extra-large\">ΙΠΠΑΣΙΑ</h3>

    <div class=\"bottom-spacing-medium\">
    <p class=\"large\">Πλήρης ενημέρωση</p>
    </div>

    <div class=\"bottom-spacing-large\">
    <p class=\"text-center\"><a class=\"button\" href=\"/blog\">Άρθρα & Νέα</a><a class=\"button\" href=\"/archeio\">Όλα τα τεύχη</a></p>
    </div>

    <div class=\"scroll-button smooth-scroll\"><a href=\"#page-start\"><span class=\"sr-only\">Αρχή</span></a></div>
    </div>
    </div>
    </div>
    </div>
  {% endblock %}
</div>", "themes/showcase_lite/templates/block--backgroundimagebannerfrontpage.html.twig", "C:\\wamp64\\www\\ippasia\\themes\\showcase_lite\\templates\\block--backgroundimagebannerfrontpage.html.twig");
    }
}
