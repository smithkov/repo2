<?php

namespace project\AdminBundle\Controller;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use project\AdminBundle\Entity\Area;
class AreaController extends Controller
{
    public function createAction(Request $request)
    {
        $area = new Area();
        $form = $this->createFormBuilder($area)
                ->add("name", 'text', array(
                    'constraints' => new NotBlank,
                    'error_bubbling' => true
                ))->getForm();
        $form->handleRequest($request);
        if ($request->getMethod() == "POST") {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());

                $em->flush();
                 return $this->redirect($this->generateUrl("project_admin_area_list"));
            }
        }
        return $this->render("projectAdminBundle:Area:create.html.twig",array('form'=>$form->createView()));
    }
    
     public function editAction(Request $request,$id)
    {
         
        $getAreaById = $this->getDoctrine()->getRepository('projectAdminBundle:Area')->find($id);
        $form = $this->createFormBuilder($getAreaById)
                ->add("name", 'text', array(
                    'constraints' => new NotBlank,
                    'error_bubbling' => true
                ))->getForm();
        $form->handleRequest($request);
        if ($request->getMethod() == "POST") {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $getAreaById->setName($form->get('name')->getData());
                $em->flush();
                 return $this->redirect($this->generateUrl("project_admin_area_list"));
            }
        }
        return $this->render("projectAdminBundle:Area:edit.html.twig",array('form'=>$form->createView()));
    }
    
    public function listAction()
    {
        $areaList = $this->getDoctrine()->getRepository('projectAdminBundle:Area')->findAll();
        return $this->render("projectAdminBundle:Area:list.html.twig",array('list'=>$areaList));
    }
}
