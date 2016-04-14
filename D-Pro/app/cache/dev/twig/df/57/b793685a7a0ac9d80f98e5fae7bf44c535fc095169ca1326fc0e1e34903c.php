<?php

/* projectAdminBundle:Product:uploadImage.html.twig */
class __TwigTemplate_df57b793685a7a0ac9d80f98e5fae7bf44c535fc095169ca1326fc0e1e34903c extends Twig_Template
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
                                            <label for=\"\">Upload Picture </label>
                                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                        </div>

                                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                        <button type=\"submit\" class=\"btn btn-primary mt-5\">Upload</button>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </form>
                    <div class=\"row\">

                        <div class=\"col-sm-4\">

                            ";
        // line 78
        echo "
                        </div>

                        <div class=\"col-sm-8\">
                            <hr>
                            <div class=\"row\">
                                ";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 85
            echo "                                    <div class=\"col-sm-12\">
                                        ";
            // line 86
            if ( !$this->getAttribute($context["image"], "path", array())) {
                // line 87
                echo "                                            <img class=\"img-thumbnail img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/productImages/no_profile.png"), "html", null, true);
                echo "\" style=\"width: 300px; height: 250px\" />
                                        ";
            } else {
                // line 89
                echo "                                            <img class=\"img-thumbnail img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/productImages/" . $this->getAttribute($context["image"], "path", array()))), "html", null, true);
                echo "\" style=\"width: 300px; height: 250px\" />
                                        ";
            }
            // line 91
            echo "                                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_user_product_delete_image", array("id" => $this->getAttribute($context["image"], "id", array()), "productId" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId")))), "html", null, true);
            echo "\" style=\"padding-left: 40px\"><img class=\"img-thumbnail img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images/button_cancel.png"), "html", null, true);
            echo "\" style=\"width: 64px; height: 64px\" /></a>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>


    </div>

";
    }

    public function getTemplateName()
    {
        return "projectAdminBundle:Product:uploadImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 94,  146 => 91,  140 => 89,  134 => 87,  132 => 86,  129 => 85,  125 => 84,  117 => 78,  100 => 59,  93 => 55,  80 => 44,  71 => 33,  39 => 3,  36 => 2,  11 => 1,);
    }
}
