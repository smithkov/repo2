<?php

/* projectAdminBundle:SubArea:list.html.twig */
class __TwigTemplate_65689faa6d22429d1e6bc7afe5536bdac40c58b90cc67d1946252b09d0ce4836 extends Twig_Template
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
                <h1 class=\"page-header\">List of Specialty</h1>
            </div>
        </div><!--/.row-->

      
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("project_admin_subarea_create");
        echo "\" class=\"btn btn-primary\">Create New</a><hr>
                <div class=\"panel panel-default\">

                    <div class=\"panel-body\">
                        <div class=\"col-md-6\">
                            <table data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                <thead>
                                    
                                    <tr>
                                        <th data-field=\"name\"  data-sortable=\"true\">Name</th>
                                        <th></th>
                                       
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 
                                  <tr>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_admin_subarea_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\"><img style=\"height: 30px;width: 30px\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/iconImage/graphic_design.png"), "html", null, true);
            echo "\"/></a></td>
                                 </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                                </tbody>
                            </table>
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
        return "projectAdminBundle:SubArea:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  88 => 39,  84 => 38,  77 => 36,  58 => 20,  39 => 3,  36 => 2,  11 => 1,);
    }
}
