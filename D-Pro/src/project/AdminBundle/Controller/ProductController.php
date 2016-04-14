<?php

namespace project\AdminBundle\Controller;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use project\AdminBundle\Entity\Product;
use project\AdminBundle\Entity\ProductImages;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function imageUploadAction(Request $request,$id) {

        $session = $request->getSession();
        $user = $this->getDoctrine()->getRepository('projectAdminBundle:User')->find($session->get('user')->getId());
        $product = $this->getDoctrine()->getRepository('projectAdminBundle:Product')->find($id);
        $productImages = $this->getDoctrine()->getRepository('projectAdminBundle:ProductImages')->findBy(array('product'=>$product->getId()));
        $productImage = new ProductImages();
        $form = $this->createFormBuilder($productImage)
                ->add('file', 'file', array(
                    'required' => TRUE,
                    'constraints' => array(new NotBlank()),
                    'label' => 'title',
                    'error_bubbling' => true,
                ))
                ->getForm();
        $form->handleRequest($request);
        if ($request->getMethod() == "POST") {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $productImage = $form->getData();
                $productImage->setProduct($product);
                $productImage->upload();
                $em->persist($productImage);
                $em->flush(); 
                $productImages;
            }
        }
        return $this->render("projectAdminBundle:Product:uploadImage.html.twig", array('images'=>$productImages,'productId'=>$id,'form' => $form->createView(), 'userData'=>$session->get('user')));
    }
     public function listAction(Request $request) {

        $session = $request->getSession();
        $user = $this->getDoctrine()->getRepository('projectAdminBundle:User')->find($session->get('user')->getId());
        $product = $this->getDoctrine()->getRepository('projectAdminBundle:Product')->findBy(array('user'=>$user->getId()));
        return $this->render("projectAdminBundle:Product:list.html.twig", array('products' => $product, 'userData'=>$session->get('user')));
    }
    public function createAction(Request $request) {

        $session = $request->getSession();
        $productCount = $this->getDoctrine()->getRepository('projectAdminBundle:Product')->findBy(array('user'=>$session->get('user')->getId()));
        
        $user = $this->getDoctrine()->getRepository('projectAdminBundle:User')->find($session->get('user')->getId());
        $product = new Product();
        $form = $this->createFormBuilder($product)
                ->add('name', 'text', array(
                    'required' => TRUE,
                    'constraints' => array(new NotBlank()),
                    'label' => 'title',
                    'error_bubbling' => true,
                ))->add('description', 'textarea', array(
                    'required' => TRUE,
                    'constraints' => array(new NotBlank()),
                    'label' => 'title',
                    'error_bubbling' => true,
                ))->add('price', 'text', array(
                    'required' => TRUE,
                    'constraints' => array(new NotBlank()),
                    'label' => 'title',
                    'error_bubbling' => true,
                ))
                ->getForm();
        $form->handleRequest($request);
        if ($request->getMethod() == "POST") {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $product = $form->getData();
                $product->setUser($user);
                $em->persist($product);
                $em->flush();
                return $this->redirect($this->generateUrl('project_user_product_list'));
            }
        }
        return $this->render("projectAdminBundle:Product:create.html.twig", array('form' => $form->createView(), 'userData'=>$session->get('user'),'productCount'=>count($productCount)));
    }
    public function deleteAction($id,$productId) {
        $image = $this->getDoctrine()->getRepository('projectAdminBundle:ProductImages')->find($id);
        $em = $this->getDoctrine()->getManager();
        $image->removeUpload();
        $em->remove($image);
        $em->flush();
       return $this->redirect($this->generateUrl('project_user_productImage_upload', array('id' => $productId)));
    }
}
