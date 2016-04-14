<?php

/* projectAdminBundle:Account:upload.html.twig */
class __TwigTemplate_1cbccbb275d15e409c7431abf29de694eb8807a1e7cb67f0e0c3372c1bbacde9 extends Twig_Template
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

                                <h3>Upload Profile Picture</h3>

                            </div>

                        </div>

                    </div>

                    <form method=\"POST\" class=\"contact-form-wrapper\" ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

                        <div class=\"row\">

                            <div class=\"col-sm-4\">

                            ";
        // line 39
        if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path", array())) {
            // line 40
            echo "                                <img class=\"img-thumbnail img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images/default.png"), "html", null, true);
            echo "\" style=\"width: 150px; height: 150px\" />
                            ";
        } else {
            // line 42
            echo "                                <img class=\"img-thumbnail img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path", array()))), "html", null, true);
            echo "\" style=\"width: 150px; height: 150px\" />
                            ";
        }
        // line 44
        echo "
                            </div>

                            <div class=\"col-sm-8\">

                                <div class=\"row\">

                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label for=\"\">Upload Picture </label>
                                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                           
                                        </div>
                                       
                                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                        <button type=\"submit\" class=\"btn btn-primary mt-5\">Upload</button>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>


    </div>
 
";
    }

    public function getTemplateName()
    {
        return "projectAdminBundle:Account:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 58,  106 => 54,  94 => 44,  88 => 42,  82 => 40,  80 => 39,  71 => 33,  39 => 3,  36 => 2,  11 => 1,);
    }
}
