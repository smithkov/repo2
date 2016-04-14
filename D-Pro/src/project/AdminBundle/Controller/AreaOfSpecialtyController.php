<?php

namespace project\AdminBundle\Controller;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use project\AdminBundle\Entity\SubArea;
use project\AdminBundle\Entity\AreaOfSpecialty;

class AreaOfSpecialtyController extends Controller
{
    public function createAction(Request $request)
    {
        $areaOfSpecialty = new AreaOfSpecialty();
        $form = $this->createFormBuilder($areaOfSpecialty)
                ->add("name", 'text', array(
                    'constraints' => new NotBlank,
                    'error_bubbling' => true
                ))->add('subArea', 'entity', array(
                    'class' => 'projectAdminBundle:SubArea',
                    'label' => 'Select Specialty',
                    'property' => 'name'
                ))->getForm();
        $form->handleRequest($request);
        if ($request->getMethod() == "POST") {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());

                $em->flush();
                 return $this->redirect($this->generateUrl("project_admin_areaOfSpecialty_list"));
            }
        }
        return $this->render("projectAdminBundle:AreaOfSpecialty:create.html.twig",array('form'=>$form->createView()));
    }
    
    public function editAction(Request $request,$id)
    {
         
        $getSubAreaById = $this->getDoctrine()->getRepository('projectAdminBundle:AreaOfSpecialty')->find($id);
        $form = $this->createFormBuilder($getSubAreaById)
                ->add("name", 'text', array(
                    'constraints' => new NotBlank,
                    'error_bubbling' => true
                ))->add('area', 'entity', array(
                    'class' => 'projectAdminBundle:SubArea',
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
        return $this->render("projectAdminBundle:AreaOfSpecialty:edit.html.twig",array('form'=>$form->createView()));
    }
    
    public function listAction()
    {
        $specialty = $this->getDoctrine()->getRepository('projectAdminBundle:AreaOfSpecialty')->findAll();
        return $this->render("projectAdminBundle:AreaOfSpecialty:list.html.twig",array('list'=>$specialty));
    }
}
