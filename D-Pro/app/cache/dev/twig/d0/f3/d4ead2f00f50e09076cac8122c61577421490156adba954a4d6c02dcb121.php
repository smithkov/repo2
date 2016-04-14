<?php

/* projectAdminBundle:Account:register.html.twig */
class __TwigTemplate_d0f3d4ead2f00f50e09076cac8122c61577421490156adba954a4d6c02dcb121 extends Twig_Template
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

                                <h3>Register</h3>

                            </div>

                        </div>

                    </div>

                    <form method=\"POST\" class=\"contact-form-wrapper\" data-toggle=\"validator\">

                        <div class=\"row\">

                            <div class=\"col-sm-4\">

                                <h5 class=\"heading mt-5\">Let's Interact</h5>
                                <p>May indulgence difficulty ham can put especially. Bringing remember for supplied her why was confined. Middleton principle did she procuring extensive believing add. Weather adapted prepare oh is calling.</p>

                                <div class=\"boxed-social mb-30-xs clearfix\">

                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Google Plus\"><i class=\"fa fa-google-plus\"></i></a>
                                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pinterest\"><i class=\"fa fa-pinterest\"></i></a>

                                </div>

                            </div>

                            <div class=\"col-sm-8\">

                                <div class=\"row\">

                                    <div class=\"col-sm-6\">

                                        <div class=\"form-group\">
                                            <label for=\"\">Designation <span class=\"font10 text-danger\">(required)</span></label>
                                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "area", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail")));
        echo "
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputName\">Your Username <span class=\"font10 text-danger\">(required)</span></label>

                                            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputName", "data-error" => "Your username is required")));
        echo "
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputName\">Your Password <span class=\"font10 text-danger\">(required)</span></label>

                                            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputName", "data-error" => "Your password is required")));
        echo "
                                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputName\">Confirm Password <span class=\"font10 text-danger\">(required)</span></label>

                                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputName", "data-error" => "Confirm password is required")));
        echo "
                                            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'errors');
        echo "
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputPhone\">Your Phone <span class=\"font10 text-danger\">(required)</span></label>
                                            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputName", "data-error" => "Your phone number is required")));
        echo "
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"inputEmail\">Your Email <span class=\"font10 text-danger\">(required)</span></label>
                                            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail", "data-error" => "Your email is required")));
        echo "
                                            <div class=\"help-block with-errors\"></div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label>State of Residence</label>
                                            <select name=\"state\" class=\"cboState form-control\">

                                            </select>
                                        </div>
                                        <div class=\"form-group\">
                                            <label>LGA</label>
                                            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lga", array()), 'widget', array("attr" => array("class" => "form-control cboLGA")));
        echo "
                                            ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lga", array()), 'errors');
        echo "

                                        </div>
                                        ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                        <button type=\"submit\" class=\"btn btn-primary mt-5\">Register</button>
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
        // line 130
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
        // line 144
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
        return "projectAdminBundle:Account:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 144,  201 => 130,  174 => 106,  168 => 103,  164 => 102,  150 => 91,  142 => 86,  134 => 81,  130 => 80,  121 => 74,  117 => 73,  108 => 67,  99 => 61,  39 => 3,  36 => 2,  11 => 1,);
    }
}
