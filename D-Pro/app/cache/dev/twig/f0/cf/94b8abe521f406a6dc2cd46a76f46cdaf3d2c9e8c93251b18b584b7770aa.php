<?php

/* projectAdminBundle:Account:completeReg.html.twig */
class __TwigTemplate_f0cf94b8abe521f406a6dc2cd46a76f46cdaf3d2c9e8c93251b18b584b7770aa extends Twig_Template
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
        echo "    <div class=\"main-wrapper\">

        <!-- start end Page title -->
        <div class=\"page-title\" style=\"background-image:url('/bundles/projectadmin/front/images/hero-header/breadcrumb.jpg');\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3\">

                        <h1 class=\"hero-title\"></h1>

                        

                    </div>

                </div>

            </div>

        </div>
        <!-- end Page title -->

        <div class=\"content-wrapper\">

            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"col-sm-3 col-md-3\">

                        <aside class=\"sidebar\">

                            <div class=\"sidebar-inner no-border for-static-page\">

                                <div class=\"sidebar-module\">

                                    <h4 class=\"sidebar-title\">Quick Menu</h4>
                                    <ul class=\"static-page-menu\">
                                        <li><a href=\"about.html\">About Us</a></li>
                                        <li><a href=\"blog.html\">Blog</a></li>
                                        <li><a href=\"faq.html\">FAQ</a></li>
                                        <li><a href=\"contact.html\">Contact Us</a></li>
                                        <li class=\"active\"><a href=\"static-page.html\">Terms &amp; Conditions</a></li>
                                        <li><a href=\"static-page.html\">Policy Privacy</a></li>
                                    </ul>

                                </div>

                            </div>

                        </aside>
                    </div>

                    <div class=\"col-sm-6 col-md-6\">

                        ";
        // line 60
        if (((isset($context["isRegular"]) ? $context["isRegular"] : $this->getContext($context, "isRegular")) == 4)) {
            // line 61
            echo "                            <h2>You are not allowed to access this page !</h2>
                        ";
        } else {
            // line 63
            echo "                            <form method='POST'>
                                <div class=\"static-wrapper\">

                                    <div class=\"form-group\">
                                        <label for=\"inputPhone\">Your Bio Data <span class=\"font10 text-danger\">(required)</span></label>
                                        ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bio", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "inputName")));
            echo "
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"inputPhone\">Sub Area <span class=\"font10 text-danger\">(required)</span></label>
                                        <select class='cboSubArea form-control'>

                                        </select>
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"inputPhone\">Area of specialization <span class=\"font10 text-danger\">(required)</span></label>
                                        ";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialty", array()), 'widget', array("attr" => array("class" => "form-control cboSpecialty", "id" => "inputName")));
            echo "
                                        <div class=\"help-block with-errors\"></div>
                                    </div>
                                </div>
                               ";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
                                <button class='btn btn-primary mt-5' type='submit'>Finish</button>
                            </form>

                        ";
        }
        // line 89
        echo "

                    </div>
                        <div class=\"col-sm-3 col-md-3\"></div>
                </div>

            </div>

        </div>


    </div>
    <!-- end Main Wrapper -->
    <script>
        \$(function () {

            var subarea = \$(\".cboSubArea\");

         \$.post('";
        // line 107
        echo $this->env->getExtension('routing')->getPath("project_admin_subArea_list");
        echo "',
                    function (response) {
                        subarea.empty();
                        \$.each(response, function (key, value) {
                            subarea.append(\"<option value=\" + value.id + \">\" + value.name + \"</option>\");
                        });
                        getSpecialtyById(subarea.val());
                        //getLgaByState(state.val());
                    }, \"json\");
            subarea.change(function () {

                getSpecialtyById(subarea.val());
            });
            
            function getSpecialtyById(subAreaId)
            {
             \$.post('";
        // line 123
        echo $this->env->getExtension('routing')->getPath("project_admin_specialty_list");
        echo "',
                        {subAreaId: subAreaId},
                function (response) {
                    \$(\".cboSpecialty\").empty();
                    \$.each(response, function (key, value) {
                        \$(\".cboSpecialty\").append(\"<option value=\" + value.id + \">\" + value.name + \"</option>\");
                    });
                }, \"json\");
            }
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "projectAdminBundle:Account:completeReg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 123,  161 => 107,  141 => 89,  133 => 84,  126 => 80,  111 => 68,  104 => 63,  100 => 61,  98 => 60,  39 => 3,  36 => 2,  11 => 1,);
    }
}
