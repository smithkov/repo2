<?php

/* projectAdminBundle:Product:create.html.twig */
class __TwigTemplate_04bb79f2ba86830a51e7a72dfdf156420ed9e28660a252df5d8a122e1d51fd7b extends Twig_Template
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
                    ";
        // line 18
        if (((isset($context["productCount"]) ? $context["productCount"] : $this->getContext($context, "productCount")) > 2)) {
            // line 19
            echo "                        <div class=\"row\">

                        <div class=\"col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">

                            <div class=\"section-title\">

                                <h5>Your current plan allows only maximum of three items to be upload. Upgrade to Premium for unlimited access.<br/> <hr><a class=\"btn btn-primary\">Upgrade Now!</a> </h5>

                            </div>

                        </div>

                    </div>
                    ";
        } else {
            // line 33
            echo "                        <div class=\"row\">

                        <div class=\"col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3\">

                            <div class=\"section-title\">

                                <h3>Add Product</h3>

                            </div>

                        </div>

                    </div>

                    <form method=\"POST\" class=\"contact-form-wrapper\" ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">

                        <div class=\"row\">

                            <div class=\"col-sm-4\">

                            ";
            // line 58
            echo "
                            </div>

                            <div class=\"col-sm-8\">

                                <div class=\"row\">

                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label for=\"\">Name </label>
                                            ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                        </div>
                                         <div class=\"form-group\">
                                            <label for=\"\">Description </label>
                                            ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"\">Price </label>
                                            ";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                        </div>
                                        ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
                                        <button type=\"submit\" class=\"btn btn-primary mt-5\">Save</button>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </form>
                    ";
        }
        // line 89
        echo "                    

                </div>

            </div>

        </div>


    </div>
 
";
    }

    public function getTemplateName()
    {
        return "projectAdminBundle:Product:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 89,  130 => 78,  125 => 76,  118 => 72,  111 => 68,  99 => 58,  90 => 47,  74 => 33,  58 => 19,  56 => 18,  39 => 3,  36 => 2,  11 => 1,);
    }
}
