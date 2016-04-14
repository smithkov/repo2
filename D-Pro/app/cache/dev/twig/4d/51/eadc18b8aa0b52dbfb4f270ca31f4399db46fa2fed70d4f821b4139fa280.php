<?php

/* projectAdminBundle:Product:list.html.twig */
class __TwigTemplate_4d51eadc18b8aa0b52dbfb4f270ca31f4399db46fa2fed70d4f821b4139fa280 extends Twig_Template
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
                <div class=\"row\">

                    <div class=\"col-sm-2\">
                    </div>
                    <div class=\"col-sm-8\">
                        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("project_user_product_create");
        echo "\" class=\"btn btn-success\">Add Product</a>
                    <hr/>
                        <div class=\"row\">
                            <table class=\"table table-striped table-responsive\">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th></th>
                                        <th></th>
                                         <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            echo "                                        <tr>
                                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</td>
                                            <td><a>Edit  <i class=\"fa fa-edit\"></i></a></td>
                                            <td><a>Delete  <i class=\"fa fa-close\"></i></a></td>
                                            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_user_productImage_upload", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">View Images ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["product"], "productimages", array())), "html", null, true);
            echo " <i class=\"fa fa-binoculars\"></i></a></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                     <div class=\"col-sm-2\">
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "projectAdminBundle:Product:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 44,  93 => 41,  87 => 38,  83 => 37,  80 => 36,  76 => 35,  59 => 21,  39 => 3,  36 => 2,  11 => 1,);
    }
}
