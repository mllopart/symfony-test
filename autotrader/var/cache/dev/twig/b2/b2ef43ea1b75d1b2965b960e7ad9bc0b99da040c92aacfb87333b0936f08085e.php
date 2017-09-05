<?php

/* knp_menu.html.twig */
class __TwigTemplate_b210cc03af1331fe275703227518c78dddc9388427fb7a34b2ea3fda53ad3ab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5cf1bc42f0489a0787ab26d15a48d6a3566645f546aab557eab802189625ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5cf1bc42f0489a0787ab26d15a48d6a3566645f546aab557eab802189625ccc->enter($__internal_a5cf1bc42f0489a0787ab26d15a48d6a3566645f546aab557eab802189625ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_823608d9cdcc54c8199a1ac2d7d3f66bdd56bf9ef7980295a68fde4f52adeff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823608d9cdcc54c8199a1ac2d7d3f66bdd56bf9ef7980295a68fde4f52adeff5->enter($__internal_823608d9cdcc54c8199a1ac2d7d3f66bdd56bf9ef7980295a68fde4f52adeff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5cf1bc42f0489a0787ab26d15a48d6a3566645f546aab557eab802189625ccc->leave($__internal_a5cf1bc42f0489a0787ab26d15a48d6a3566645f546aab557eab802189625ccc_prof);

        
        $__internal_823608d9cdcc54c8199a1ac2d7d3f66bdd56bf9ef7980295a68fde4f52adeff5->leave($__internal_823608d9cdcc54c8199a1ac2d7d3f66bdd56bf9ef7980295a68fde4f52adeff5_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_a1c5777c5dfa352a63807674ee92348163e7459d689eaab183df1df3ddc5b3c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c5777c5dfa352a63807674ee92348163e7459d689eaab183df1df3ddc5b3c7->enter($__internal_a1c5777c5dfa352a63807674ee92348163e7459d689eaab183df1df3ddc5b3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_1c1beb85e1be9241688883147157627a40726f43970343443fa0906ec2ed99df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1beb85e1be9241688883147157627a40726f43970343443fa0906ec2ed99df->enter($__internal_1c1beb85e1be9241688883147157627a40726f43970343443fa0906ec2ed99df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1c1beb85e1be9241688883147157627a40726f43970343443fa0906ec2ed99df->leave($__internal_1c1beb85e1be9241688883147157627a40726f43970343443fa0906ec2ed99df_prof);

        
        $__internal_a1c5777c5dfa352a63807674ee92348163e7459d689eaab183df1df3ddc5b3c7->leave($__internal_a1c5777c5dfa352a63807674ee92348163e7459d689eaab183df1df3ddc5b3c7_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_e175a5da4fb9432e65a06def27415be087e6fb20821bd1b9f6a0ca555867bfd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e175a5da4fb9432e65a06def27415be087e6fb20821bd1b9f6a0ca555867bfd9->enter($__internal_e175a5da4fb9432e65a06def27415be087e6fb20821bd1b9f6a0ca555867bfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_ec5aa1e4c36ea66765390767ca6a0c3d1d009c66f907c72fbd18198d9e63704d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5aa1e4c36ea66765390767ca6a0c3d1d009c66f907c72fbd18198d9e63704d->enter($__internal_ec5aa1e4c36ea66765390767ca6a0c3d1d009c66f907c72fbd18198d9e63704d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_ec5aa1e4c36ea66765390767ca6a0c3d1d009c66f907c72fbd18198d9e63704d->leave($__internal_ec5aa1e4c36ea66765390767ca6a0c3d1d009c66f907c72fbd18198d9e63704d_prof);

        
        $__internal_e175a5da4fb9432e65a06def27415be087e6fb20821bd1b9f6a0ca555867bfd9->leave($__internal_e175a5da4fb9432e65a06def27415be087e6fb20821bd1b9f6a0ca555867bfd9_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_b3e872b1779056ed29e863a0adbdf987aeae3bf25ce307989303f53be1c02ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e872b1779056ed29e863a0adbdf987aeae3bf25ce307989303f53be1c02ccd->enter($__internal_b3e872b1779056ed29e863a0adbdf987aeae3bf25ce307989303f53be1c02ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_6d68a0b25f690066c8dee55bedd5be68f595c38596b5e43544ca4dae2bd1416b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d68a0b25f690066c8dee55bedd5be68f595c38596b5e43544ca4dae2bd1416b->enter($__internal_6d68a0b25f690066c8dee55bedd5be68f595c38596b5e43544ca4dae2bd1416b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_6d68a0b25f690066c8dee55bedd5be68f595c38596b5e43544ca4dae2bd1416b->leave($__internal_6d68a0b25f690066c8dee55bedd5be68f595c38596b5e43544ca4dae2bd1416b_prof);

        
        $__internal_b3e872b1779056ed29e863a0adbdf987aeae3bf25ce307989303f53be1c02ccd->leave($__internal_b3e872b1779056ed29e863a0adbdf987aeae3bf25ce307989303f53be1c02ccd_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_65d004f070880618194db958ab53eca2e28b68b9d21355ce0684bb065f3cbe71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d004f070880618194db958ab53eca2e28b68b9d21355ce0684bb065f3cbe71->enter($__internal_65d004f070880618194db958ab53eca2e28b68b9d21355ce0684bb065f3cbe71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_590777584d43156ff2c5c559ed0be33e1a06658e73c0dff57e55da8479ea25c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590777584d43156ff2c5c559ed0be33e1a06658e73c0dff57e55da8479ea25c0->enter($__internal_590777584d43156ff2c5c559ed0be33e1a06658e73c0dff57e55da8479ea25c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_590777584d43156ff2c5c559ed0be33e1a06658e73c0dff57e55da8479ea25c0->leave($__internal_590777584d43156ff2c5c559ed0be33e1a06658e73c0dff57e55da8479ea25c0_prof);

        
        $__internal_65d004f070880618194db958ab53eca2e28b68b9d21355ce0684bb065f3cbe71->leave($__internal_65d004f070880618194db958ab53eca2e28b68b9d21355ce0684bb065f3cbe71_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_ccb87d8c4b90d247f3a1c06f26b78faaad34a7f7016bb8c94d1e3949b5322e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb87d8c4b90d247f3a1c06f26b78faaad34a7f7016bb8c94d1e3949b5322e2b->enter($__internal_ccb87d8c4b90d247f3a1c06f26b78faaad34a7f7016bb8c94d1e3949b5322e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_a67e88efa804a1e995a4faab5de45e9584629634c0286dcb1066cfbb5133207f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67e88efa804a1e995a4faab5de45e9584629634c0286dcb1066cfbb5133207f->enter($__internal_a67e88efa804a1e995a4faab5de45e9584629634c0286dcb1066cfbb5133207f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_a67e88efa804a1e995a4faab5de45e9584629634c0286dcb1066cfbb5133207f->leave($__internal_a67e88efa804a1e995a4faab5de45e9584629634c0286dcb1066cfbb5133207f_prof);

        
        $__internal_ccb87d8c4b90d247f3a1c06f26b78faaad34a7f7016bb8c94d1e3949b5322e2b->leave($__internal_ccb87d8c4b90d247f3a1c06f26b78faaad34a7f7016bb8c94d1e3949b5322e2b_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_7e7bd07aa45238742192246582d418262391e18075152853a9bcbff3ce4e397f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7bd07aa45238742192246582d418262391e18075152853a9bcbff3ce4e397f->enter($__internal_7e7bd07aa45238742192246582d418262391e18075152853a9bcbff3ce4e397f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_9bbae17e59beb3a32c4301c7a5ddc1731a1a027acfcf8d2a25c2d2c47789d43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbae17e59beb3a32c4301c7a5ddc1731a1a027acfcf8d2a25c2d2c47789d43c->enter($__internal_9bbae17e59beb3a32c4301c7a5ddc1731a1a027acfcf8d2a25c2d2c47789d43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_9bbae17e59beb3a32c4301c7a5ddc1731a1a027acfcf8d2a25c2d2c47789d43c->leave($__internal_9bbae17e59beb3a32c4301c7a5ddc1731a1a027acfcf8d2a25c2d2c47789d43c_prof);

        
        $__internal_7e7bd07aa45238742192246582d418262391e18075152853a9bcbff3ce4e397f->leave($__internal_7e7bd07aa45238742192246582d418262391e18075152853a9bcbff3ce4e397f_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_bee462dc37d67daeb52d8d81c07c4f2f9da294575cdb8f31507afbb8b668de26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee462dc37d67daeb52d8d81c07c4f2f9da294575cdb8f31507afbb8b668de26->enter($__internal_bee462dc37d67daeb52d8d81c07c4f2f9da294575cdb8f31507afbb8b668de26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_824ef39dafdd2caba8eba13d64d36a37aa2bae7a94d33c92fd3e5b5d0484b71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824ef39dafdd2caba8eba13d64d36a37aa2bae7a94d33c92fd3e5b5d0484b71d->enter($__internal_824ef39dafdd2caba8eba13d64d36a37aa2bae7a94d33c92fd3e5b5d0484b71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_824ef39dafdd2caba8eba13d64d36a37aa2bae7a94d33c92fd3e5b5d0484b71d->leave($__internal_824ef39dafdd2caba8eba13d64d36a37aa2bae7a94d33c92fd3e5b5d0484b71d_prof);

        
        $__internal_bee462dc37d67daeb52d8d81c07c4f2f9da294575cdb8f31507afbb8b668de26->leave($__internal_bee462dc37d67daeb52d8d81c07c4f2f9da294575cdb8f31507afbb8b668de26_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_b5452233f0d53f0544eb6be9cf8f4d8e3ed40346a5f00b999b933788db6c9372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5452233f0d53f0544eb6be9cf8f4d8e3ed40346a5f00b999b933788db6c9372->enter($__internal_b5452233f0d53f0544eb6be9cf8f4d8e3ed40346a5f00b999b933788db6c9372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_ef0179c1595fd52b53ea569ebaf8c49b54d24b0eae83008a3e11dec4b48b4960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0179c1595fd52b53ea569ebaf8c49b54d24b0eae83008a3e11dec4b48b4960->enter($__internal_ef0179c1595fd52b53ea569ebaf8c49b54d24b0eae83008a3e11dec4b48b4960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_ef0179c1595fd52b53ea569ebaf8c49b54d24b0eae83008a3e11dec4b48b4960->leave($__internal_ef0179c1595fd52b53ea569ebaf8c49b54d24b0eae83008a3e11dec4b48b4960_prof);

        
        $__internal_b5452233f0d53f0544eb6be9cf8f4d8e3ed40346a5f00b999b933788db6c9372->leave($__internal_b5452233f0d53f0544eb6be9cf8f4d8e3ed40346a5f00b999b933788db6c9372_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5be924fe7cfb013f2aa72cafca18dcc755391120aa0e7f3e530760f0e055888c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_5be924fe7cfb013f2aa72cafca18dcc755391120aa0e7f3e530760f0e055888c->enter($__internal_5be924fe7cfb013f2aa72cafca18dcc755391120aa0e7f3e530760f0e055888c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_aa3ef10aadf62ae623df5d084786f62de8c3517bc83aa1c514bf1d59702d3a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_aa3ef10aadf62ae623df5d084786f62de8c3517bc83aa1c514bf1d59702d3a6f->enter($__internal_aa3ef10aadf62ae623df5d084786f62de8c3517bc83aa1c514bf1d59702d3a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_aa3ef10aadf62ae623df5d084786f62de8c3517bc83aa1c514bf1d59702d3a6f->leave($__internal_aa3ef10aadf62ae623df5d084786f62de8c3517bc83aa1c514bf1d59702d3a6f_prof);

            
            $__internal_5be924fe7cfb013f2aa72cafca18dcc755391120aa0e7f3e530760f0e055888c->leave($__internal_5be924fe7cfb013f2aa72cafca18dcc755391120aa0e7f3e530760f0e055888c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/var/www/symfony/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
