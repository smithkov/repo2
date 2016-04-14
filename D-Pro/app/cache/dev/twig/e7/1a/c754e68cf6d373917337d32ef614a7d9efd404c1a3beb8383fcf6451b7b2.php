<?php

/* projectAdminBundle:Product:uploadProduct.html.twig */
class __TwigTemplate_e71ac754e68cf6d373917337d32ef614a7d9efd404c1a3beb8383fcf6451b7b2 extends Twig_Template
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

                                <h3>Upload Product Picture</h3>

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
        // line 44
        echo "
                            </div>

                            <div class=\"col-sm-8\">

                                <div class=\"row\">

                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label for=\"\">Name </label>
                                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                         <div class=\"form-group\">
                                            <label for=\"\">Description </label>
                                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"\">Upload Picture </label>
                                            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                           
                                        </div>
                                       
                                        ";
        // line 66
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
        return "projectAdminBundle:Product:uploadProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 66,  106 => 62,  99 => 58,  92 => 54,  80 => 44,  71 => 33,  39 => 3,  36 => 2,  11 => 1,);
    }
}
