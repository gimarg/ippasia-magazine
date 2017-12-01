<?php

/* themes/showcase_lite/templates/field--node--field-image.html.twig */
class __TwigTemplate_9de4ae3b1f502e69051e0baaceeaa770005d7f59743013767532f0023e4997a8 extends Twig_Template
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
        $tags = array("set" => 41, "if" => 55, "for" => 76);
        $filters = array("clean_class" => 43, "length" => 74);
        $functions = array("attach_library" => 54);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class', 'length'),
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

        // line 41
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 43
(isset($context["field_name"]) ? $context["field_name"] : null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 44
(isset($context["field_type"]) ? $context["field_type"] : null))), 3 => ("field--label-" .         // line 45
(isset($context["label_display"]) ? $context["label_display"] : null)));
        // line 49
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 51
(isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/node-images"), "html", null, true));
        echo "
";
        // line 55
        if (((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full")) {
            // line 56
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/magnific-popup-field-image-init"), "html", null, true));
            echo "
";
        }
        // line 58
        if ((isset($context["label_hidden"]) ? $context["label_hidden"] : null)) {
            // line 59
            echo "  ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 60
                echo "    <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => "field__items"), "method"), "html", null, true));
                echo ">
      <div class=\"images-container clearfix\">
        <div class=\"image-preview clearfix\">
          <div class=\"image-wrapper clearfix\">
            <div";
                // line 64
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), 0, array(), "array"), "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                echo ">
              ";
                // line 65
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), 0, array(), "array"), "content", array()), "html", null, true));
                echo "
            </div>
          </div>
          ";
                // line 68
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), 0, array(), "array"), "content", array()), "#item", array(), "array"), "title", array()) && ((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full"))) {
                    // line 69
                    echo "            <div class=\"image-caption clearfix\">
              <h4>";
                    // line 70
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), 0, array(), "array"), "content", array()), "#item", array(), "array"), "title", array()), "html", null, true));
                    echo "</h4>
            </div>
          ";
                }
                // line 73
                echo "        </div>
        ";
                // line 74
                if (((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 1) && ((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full"))) {
                    // line 75
                    echo "          <div class=\"image-listing-items clearfix\">
            ";
                    // line 76
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 77
                        echo "              ";
                        if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), 0, array(), "array") != $context["item"])) {
                            // line 78
                            echo "                <div class=\"image-listing-item\">
                  <div";
                            // line 79
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                            echo ">";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                            echo "</div>
                </div>
              ";
                        }
                        // line 82
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "          </div>
        ";
                }
                // line 85
                echo "      </div>
    </div>
  ";
            } else {
                // line 88
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 89
                    echo "      <div class=\"images-container clearfix\">
        <div class=\"image-preview clearfix\">
          <div class=\"image-wrapper clearfix\">
            <div";
                    // line 92
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => "field__item"), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    echo "</div>
          </div>
          ";
                    // line 94
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "title", array()) && ((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full"))) {
                        // line 95
                        echo "            <div class=\"image-caption clearfix\">
              <h4>";
                        // line 96
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "title", array()), "html", null, true));
                        echo "</h4>
            </div>
          ";
                    }
                    // line 99
                    echo "        </div>
      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "  ";
            }
        } else {
            // line 104
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    <div";
            // line 105
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</div>
    ";
            // line 106
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 107
                echo "      <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => "field__items"), "method"), "html", null, true));
                echo ">
        <div class=\"images-container clearfix\">
          <div class=\"image-preview clearfix\">
            <div class=\"image-wrapper clearfix\">
              <div";
                // line 111
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), 0, array(), "array"), "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                echo ">
                ";
                // line 112
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), 0, array(), "array"), "content", array()), "html", null, true));
                echo "
              </div>
            </div>
            ";
                // line 115
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), 0, array(), "array"), "content", array()), "#item", array(), "array"), "title", array()) && ((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full"))) {
                    // line 116
                    echo "              <div class=\"image-caption clearfix\">
                <h4>";
                    // line 117
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), 0, array(), "array"), "content", array()), "#item", array(), "array"), "title", array()), "html", null, true));
                    echo "</h4>
              </div>
            ";
                }
                // line 120
                echo "          </div>
          ";
                // line 121
                if (((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 1) && ((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full"))) {
                    // line 122
                    echo "            <div class=\"image-listing-items clearfix\">
              ";
                    // line 123
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 124
                        echo "                ";
                        if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), 0, array(), "array") != $context["item"])) {
                            // line 125
                            echo "                  <div class=\"image-listing-item\">
                    <div";
                            // line 126
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                            echo ">";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                            echo "</div>
                  </div>
                ";
                        }
                        // line 129
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo "            </div>
          ";
                }
                // line 132
                echo "        </div>
      </div>
    ";
            } else {
                // line 135
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 136
                    echo "        <div class=\"images-container clearfix\">
          <div class=\"image-preview clearfix\">
            <div class=\"image-wrapper clearfix\">
              <div";
                    // line 139
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => "field__item"), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    echo "</div>
            </div>
            ";
                    // line 141
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "title", array()) && ((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full"))) {
                        // line 142
                        echo "              <div class=\"image-caption clearfix\">
                <h4>";
                        // line 143
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "title", array()), "html", null, true));
                        echo "</h4>
              </div>
            ";
                    }
                    // line 146
                    echo "          </div>
        </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "    ";
            }
            // line 150
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/showcase_lite/templates/field--node--field-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 150,  297 => 149,  289 => 146,  283 => 143,  280 => 142,  278 => 141,  271 => 139,  266 => 136,  261 => 135,  256 => 132,  252 => 130,  246 => 129,  238 => 126,  235 => 125,  232 => 124,  228 => 123,  225 => 122,  223 => 121,  220 => 120,  214 => 117,  211 => 116,  209 => 115,  203 => 112,  199 => 111,  191 => 107,  189 => 106,  183 => 105,  178 => 104,  174 => 102,  166 => 99,  160 => 96,  157 => 95,  155 => 94,  148 => 92,  143 => 89,  138 => 88,  133 => 85,  129 => 83,  123 => 82,  115 => 79,  112 => 78,  109 => 77,  105 => 76,  102 => 75,  100 => 74,  97 => 73,  91 => 70,  88 => 69,  86 => 68,  80 => 65,  76 => 64,  68 => 60,  65 => 59,  63 => 58,  57 => 56,  55 => 55,  51 => 54,  49 => 51,  48 => 49,  46 => 45,  45 => 44,  44 => 43,  43 => 41,);
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
 * Showcase Lite's override for field_image.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 *
 * @see template_preprocess_field()
 */
#}
{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
  ]
%}
{%
  set title_classes = [
    'field__label',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}
{{ attach_library('showcase_lite/node-images') }}
{% if view_mode == \"full\" %}
  {{ attach_library('showcase_lite/magnific-popup-field-image-init') }}
{% endif %}
{% if label_hidden %}
  {% if multiple %}
    <div{{ attributes.addClass(classes, 'field__items') }}>
      <div class=\"images-container clearfix\">
        <div class=\"image-preview clearfix\">
          <div class=\"image-wrapper clearfix\">
            <div{{ items[0].attributes.addClass('field__item') }}>
              {{ items[0].content }}
            </div>
          </div>
          {% if items[0].content['#item'].title and view_mode == \"full\" %}
            <div class=\"image-caption clearfix\">
              <h4>{{ items[0].content['#item'].title }}</h4>
            </div>
          {% endif %}
        </div>
        {% if items|length > 1 and view_mode == \"full\" %}
          <div class=\"image-listing-items clearfix\">
            {% for item in items %}
              {% if items[0] != item %}
                <div class=\"image-listing-item\">
                  <div{{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>
                </div>
              {% endif %}
            {% endfor %}
          </div>
        {% endif %}
      </div>
    </div>
  {% else %}
    {% for item in items %}
      <div class=\"images-container clearfix\">
        <div class=\"image-preview clearfix\">
          <div class=\"image-wrapper clearfix\">
            <div{{ attributes.addClass(classes, 'field__item') }}>{{ item.content }}</div>
          </div>
          {% if item.content['#item'].title and view_mode == \"full\" %}
            <div class=\"image-caption clearfix\">
              <h4>{{ item.content['#item'].title }}</h4>
            </div>
          {% endif %}
        </div>
      </div>
    {% endfor %}
  {% endif %}
{% else %}
  <div{{ attributes.addClass(classes) }}>
    <div{{ title_attributes.addClass(title_classes) }}>{{ label }}</div>
    {% if multiple %}
      <div{{ attributes.addClass(classes, 'field__items') }}>
        <div class=\"images-container clearfix\">
          <div class=\"image-preview clearfix\">
            <div class=\"image-wrapper clearfix\">
              <div{{ items[0].attributes.addClass('field__item') }}>
                {{ items[0].content }}
              </div>
            </div>
            {% if items[0].content['#item'].title and view_mode == \"full\" %}
              <div class=\"image-caption clearfix\">
                <h4>{{ items[0].content['#item'].title }}</h4>
              </div>
            {% endif %}
          </div>
          {% if items|length > 1 and view_mode == \"full\" %}
            <div class=\"image-listing-items clearfix\">
              {% for item in items %}
                {% if items[0] != item %}
                  <div class=\"image-listing-item\">
                    <div{{ item.attributes.addClass('field__item') }}>{{ item.content }}</div>
                  </div>
                {% endif %}
              {% endfor %}
            </div>
          {% endif %}
        </div>
      </div>
    {% else %}
      {% for item in items %}
        <div class=\"images-container clearfix\">
          <div class=\"image-preview clearfix\">
            <div class=\"image-wrapper clearfix\">
              <div{{ attributes.addClass(classes, 'field__item') }}>{{ item.content }}</div>
            </div>
            {% if item.content['#item'].title and view_mode == \"full\" %}
              <div class=\"image-caption clearfix\">
                <h4>{{ item.content['#item'].title }}</h4>
              </div>
            {% endif %}
          </div>
        </div>
      {% endfor %}
    {% endif %}
  </div>
{% endif %}
", "themes/showcase_lite/templates/field--node--field-image.html.twig", "C:\\wamp64\\www\\ippasia\\themes\\showcase_lite\\templates\\field--node--field-image.html.twig");
    }
}
