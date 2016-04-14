<?php

/* projectAdminBundle:SubArea:create.html.twig */
class __TwigTemplate_8b5873b325c03a3350572036bc28f5ffbbcaf7686026591b7e24f174c20ad355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
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
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">\t\t\t
        <div class=\"row\">
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"></use></svg></a></li>
                <li class=\"active\">Icons</li>
            </ol>
        </div><!--/.row-->

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Create Sub Area</h1>
            </div>
        </div><!--/.row-->


        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">

                    <div class=\"panel-body\">
                        <div class=\"col-md-6\">
                            <form method=\"post\" role=\"form\">
                                <div class=\"form-group required\">
                                    <label>Area</label>
                                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "area", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "area", array()), 'errors');
        echo "
                                </div>
                                 <div class=\"form-group required\">
                                    <label>Sub Area</label>
                                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                                </div>
                                <hr>
                                <button class=\"btn btn-primary\" type=\"submit\">Save</button>
                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            </form>
                        </div>


                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div><!--/.main-->

";
    }

    public function getTemplateName()
    {
        return "projectAdminBundle:SubArea:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 37,  80 => 33,  76 => 32,  69 => 28,  65 => 27,  39 => 3,  36 => 2,  11 => 1,);
    }
}
