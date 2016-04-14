<?php

namespace project\AdminBundle\Controller;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use project\AdminBundle\Entity\SubArea;

class SubAreaController extends Controller
{
    
    public function createAction(Request $request)
    {
        $subArea = new SubArea();
        $form = $this->createFormBuilder($subArea)
                ->add("name", 'text', array(
                    'constraints' => new NotBlank,
                    'error_bubbling' => true
                ))->add('area', 'entity', array(
                    'class' => 'projectAdminBundle:Area',
                    'label' => 'Select Area',
                    'property' => 'name'
                ))->getForm();
        $form->handleRequest($request);
        if ($request->getMethod() == "POST") {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());

                $em->flush();
                 return $this->redirect($this->generateUrl("project_admin_subarea_list"));
            }
        }
        return $this->render("projectAdminBundle:SubArea:create.html.twig",array('form'=>$form->createView()));
    }
    
    public function editAction(Request $request,$id)
    {
         
        $getSubAreaById = $this->getDoctrine()->getRepository('projectAdminBundle:SubArea')->find($id);
        $form = $this->createFormBuilder($getSubAreaById)
                ->add("name", 'text', array(
                    'constraints' => new NotBlank,
                    'error_bubbling' => true
                ))->add('area', 'entity', array(
                    'class' => 'projectAdminBundle:Area',
                    'label' => 'Select Area',
                    'property' => 'name'
                ))->getForm();
        $form->handleRequest($request);
        if ($request->getMethod() == "POST") {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $getSubAreaById->setName($form->get('name')->getData());
                 $getSubAreaById->setArea($form->get('area')->getData());
                $em->flush();
                 return $this->redirect($this->generateUrl("project_admin_subarea_list"));
            }
        }
        return $this->render("projectAdminBundle:SubArea:edit.html.twig",array('form'=>$form->createView()));
    }
    
    public function listAction()
    {
        $areaList = $this->getDoctrine()->getRepository('projectAdminBundle:SubArea')->findAll();
        return $this->render("projectAdminBundle:SubArea:list.html.twig",array('list'=>$areaList));
    }
}
