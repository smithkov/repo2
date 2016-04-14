<?php

/* ::base.html.twig */
class __TwigTemplate_cda90051f12945d877aab35097cde2cd25130b911ad93a5042d8144c7087296e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!--[if lt IE 9]>
<script src=\"js/html5shiv.js\"></script>
<script src=\"js/respond.min.js\"></script>
<![endif]-->

    </head>
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/css/bootstrap-table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!--Icons-->
            <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/js/lumino.glyphs.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\"><span>D-Pro</span>Admin</a>
                        <ul class=\"user-menu\">
                            <li class=\"dropdown pull-right\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> User <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"#\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Profile</a></li>
                                    <li><a href=\"#\"><svg class=\"glyph stroked gear\"><use xlink:href=\"#stroked-gear\"></use></svg> Settings</a></li>
                                    <li><a href=\"#\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"></use></svg> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div><!-- /.container-fluid -->
            </nav>

            <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
                <form role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    </div>
                </form>
                <ul class=\"nav menu\">
                    <li class=\"active\"><a href=\"index.html\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Dashboard</a></li>
                    <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("project_admin_area_list");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Area</a></li>
                    <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("project_admin_subarea_list");
        echo "\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Sub Area</a></li>
                    <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("project_admin_areaOfSpecialty_list");
        echo "\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Specialty</a></li>
                    <li><a href=\"forms.html\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Forms</a></li>
                    <li><a href=\"panels.html\"><svg class=\"glyph stroked app-window\"><use xlink:href=\"#stroked-app-window\"></use></svg> Alerts &amp; Panels</a></li>
                    <li><a href=\"icons.html\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Icons</a></li>
                    <li class=\"parent\">
                        <a href=\"#\">
                            <span data-toggle=\"collapse\" href=\"#sub-item-1\"><svg class=\"glyph stroked chevron-down\"><use xlink:href=\"#stroked-chevron-down\"></use></svg></span> Dropdown 
                        </a>
                        <ul class=\"children collapse\" id=\"sub-item-1\">
                            <li>
                                <a class=\"\" href=\"#\">
                                    <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 1
                                </a>
                            </li>
                            <li>
                                <a class=\"\" href=\"#\">
                                    <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 2
                                </a>
                            </li>
                            <li>
                                <a class=\"\" href=\"#\">
                                    <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 3
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li role=\"presentation\" class=\"divider\"></li>
                    <li><a href=\"login.html\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Login Page</a></li>
                </ul>

            </div><!--/.sidebar-->

            ";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "        ";
    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
        // line 91
        echo "            ";
    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        // line 94
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/js/chart.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/js/chart-data.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectadmin/js/bootstrap-table.js"), "html", null, true);
        echo "\"></script>
            <script>
                \$('#calendar').datepicker({
                });

                !function (\$) {
                    \$(document).on(\"click\", \"ul.nav li.parent > a > span.icon\", function () {
                        \$(this).find('em:first').toggleClass(\"glyphicon-minus\");
                    });
                    \$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
                }(window.jQuery);

                \$(window).on('resize', function () {
                    if (\$(window).width() > 768)
                        \$('#sidebar-collapse').collapse('show')
                })
                \$(window).on('resize', function () {
                    if (\$(window).width() <= 767)
                        \$('#sidebar-collapse').collapse('hide')
                })
            </script>\t
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 101,  214 => 100,  210 => 99,  206 => 98,  202 => 97,  198 => 96,  194 => 95,  189 => 94,  186 => 93,  182 => 91,  179 => 90,  175 => 92,  173 => 90,  138 => 58,  134 => 57,  130 => 56,  95 => 23,  92 => 22,  86 => 12,  81 => 10,  77 => 9,  73 => 8,  68 => 7,  65 => 6,  59 => 5,  53 => 123,  50 => 93,  48 => 22,  36 => 14,  34 => 6,  30 => 5,  24 => 1,);
    }
}
