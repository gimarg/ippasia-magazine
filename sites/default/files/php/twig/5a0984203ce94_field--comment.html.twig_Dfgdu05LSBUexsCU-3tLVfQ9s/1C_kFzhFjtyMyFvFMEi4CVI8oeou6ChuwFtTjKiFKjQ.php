<?php

/* themes/showcase_lite/templates/field--comment.html.twig */
class __TwigTemplate_8c63aa00597f1a5c9421d615b89847c68de897c4b1ebeef72dbf4fd583a5451e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 30, "if" => 45);
        $filters = array("clean_class" => 32, "t" => 54);
        $functions = array("attach_library" => 28);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 't'),
                array('attach_library')
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

        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/comments"), "html", null, true));
        echo "
";
        // line 30
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 32
(isset($context["field_name"]) ? $context["field_name"] : null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 33
(isset($context["field_type"]) ? $context["field_type"] : null))), 3 => ("field--label-" .         // line 34
(isset($context["label_display"]) ? $context["label_display"] : null)), 4 => "comment-wrapper");
        // line 39
        $context["title_classes"] = array(0 => "title", 1 => (((        // line 41
(isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 44
        echo "<section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 45
        if (((isset($context["comments"]) ? $context["comments"] : null) &&  !(isset($context["label_hidden"]) ? $context["label_hidden"] : null))) {
            // line 46
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
    <h2";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
    ";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
  ";
        }
        // line 50
        echo "
  ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["comments"]) ? $context["comments"] : null), "html", null, true));
        echo "

  ";
        // line 53
        if ((isset($context["comment_form"]) ? $context["comment_form"] : null)) {
            // line 54
            echo "    <h2 class=\"title comment-form__title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Add new comment")));
            echo "</h2>
    ";
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["comment_form"]) ? $context["comment_form"] : null), "html", null, true));
            echo "
  ";
        }
        // line 57
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/showcase_lite/templates/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 57,  93 => 55,  88 => 54,  86 => 53,  81 => 51,  78 => 50,  73 => 48,  67 => 47,  62 => 46,  60 => 45,  55 => 44,  53 => 41,  52 => 39,  50 => 34,  49 => 33,  48 => 32,  47 => 30,  43 => 28,);
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
 * Theme override for comment fields.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional title output populated by modules, intended to
 *   be displayed after the main title tag that appears in the template.
 * - comments: List of comments rendered through comment.html.twig.
 * - comment_form: The 'Add new comment' form.
 * - comment_display_mode: Is the comments are threaded.
 * - comment_type: The comment type bundle ID for the comment field.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @see template_preprocess_field()
 * @see comment_preprocess_field()
 */
#}
{{ attach_library('showcase_lite/comments') }}
{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
    'comment-wrapper',
  ]
%}
{%
  set title_classes = [
    'title',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}
<section{{ attributes.addClass(classes) }}>
  {% if comments and not label_hidden %}
    {{ title_prefix }}
    <h2{{ title_attributes.addClass(title_classes) }}>{{ label }}</h2>
    {{ title_suffix }}
  {% endif %}

  {{ comments }}

  {% if comment_form %}
    <h2 class=\"title comment-form__title\">{{ 'Add new comment'|t }}</h2>
    {{ comment_form }}
  {% endif %}

</section>
", "themes/showcase_lite/templates/field--comment.html.twig", "C:\\wamp64\\www\\ippasia\\themes\\showcase_lite\\templates\\field--comment.html.twig");
    }
}
