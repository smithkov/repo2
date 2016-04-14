<?php

/* projectAdminBundle:Account:login.html.twig */
class __TwigTemplate_ebf490a01c3bde4c3d726a9170af40e4cf5a9c08024ab21f7adac0ce40500cad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- start Main Wrapper -->
    <div class=\"main-wrapper\">

        <!-- start end Page title -->
        <div class=\"page-title\" style=\"background-image:url('/bundles/projectadmin/front/images/hero-header/breadcrumb.jpg');\">



        </div>
        <!-- end Page title -->

        <div class=\"content-wrapper\">
            <div class=\"section pt-60 pb-0\">

                <div class=\"container\">

                    <div class=\"row\">

                        <div class=\"col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">

                            <div class=\"section-title\">

                                <h3>Login</h3>

                            </div>

                        </div>

                    </div>

                    <form method=\"POST\" class=\"contact-form-wrapper\" data-toggle=\"validator\">

                        <div class=\"row\">

                            <div class=\"col-sm-4\">



                            </div>

                            <div class=\"col-sm-8\">

                                <div class=\"row\">

                                    <div class=\"col-sm-6\">
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-header\"></div>
                                            <div class=\"panel-body\">
                                                ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 52
            echo "                                                    <div class=\"flash-notice\">
                                                        <div class=\"alert alert-warning\">
                                                            <button type=\"button\" data-dismiss=\"alert\" aria-hidden=\"true\" class=\"close\">&times;</button>
                                                            ";
            // line 55
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                                <div class=\"form-group\">
                                                    <label for=\"inputName\">Your Username <span class=\"font10 text-danger\"></span></label>
                                                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputName")));
        echo "
                                                    <div class=\"help-block with-errors\"></div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"inputName\">Your Password <span class=\"font10 text-danger\"></span></label>
                                                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputName")));
        echo "
                                                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
                                                    <div class=\"help-block with-errors\"></div>
                                                </div>
                                                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                                <button type=\"submit\" class=\"btn btn-primary mt-5\">Sign-In</button>
                                                <div>No account? <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("project_user_register");
        echo "\">Register</a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>


    </div>
    <script>
        \$(function () {

            var state = \$(\".cboState\");

            \$.post('";
        // line 98
        echo $this->env->getExtension('routing')->getPath("project_admin_ajax_state_list");
        echo "',
                    {stateId: state.val()},
            function (response) {
                state.empty();
                \$.each(response, function (key, value) {
                    state.append(\"<option value=\" + value.id + \">\" + value.name + \"</option>\");
                });
                //getLgaByState(state.val());
            }, \"json\");
            state.change(function () {
                getLgaByState(state.val());
            });
            function getLgaByState(stateId)
            {
                \$.post('";
        // line 112
        echo $this->env->getExtension('routing')->getPath("project_admin_ajax_update_lga");
        echo "',
                        {stateId: stateId},
                function (response) {
                    \$(\".cboLGA\").empty();
                    \$.each(response, function (key, value) {
                        \$(\".cboLGA\").append(\"<option value=\" + value.id + \">\" + value.name + \"</option>\");
                    });
                }, \"json\");
            }
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "projectAdminBundle:Account:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 112,  164 => 98,  135 => 72,  130 => 70,  124 => 67,  120 => 66,  112 => 61,  108 => 59,  98 => 55,  93 => 52,  89 => 51,  39 => 3,  36 => 2,  11 => 1,);
    }
}
