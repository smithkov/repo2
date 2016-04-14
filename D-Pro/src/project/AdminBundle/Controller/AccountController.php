<?php

namespace project\AdminBundle\Controller;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use project\AdminBundle\Entity\User;
use project\AdminBundle\Entity\State;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\Serializer\SerializationContext;
use Doctrine\ORM\EntityRepository;

class AccountController extends Controller {

    private $areaId = null;

    public function registerAction(Request $request) {
        $session = $request->getSession();

        $user = new User();
        $form = $this->createFormBuilder($user)
                ->add('username', 'text', array(
                    'required' => TRUE,
                    'constraints' => array(new NotBlank()),
                    'label' => 'title',
                    'error_bubbling' => true,
                ))->add('phone', 'text', array(
                    'required' => TRUE,
                    'constraints' => array(new NotBlank()),
                    'label' => 'title',
                    'error_bubbling' => true,
                ))->add('email', 'email', array(
                    'required' => TRUE,
                    'constraints' => array(new NotBlank()),
                    'label' => 'title',
                    'error_bubbling' => true,
                ))->add("password", 'repeated', array(
                    'required' => true,
                    'invalid_message' => 'The password field must match',
                    'first_options' => array('label' => 'New password'),
                    'second_options' => array('label' => 'Confirm password'),
                    'type' => 'password',
                    'error_bubbling' => true,
                ))->add('area', 'entity', array(
                    'class' => 'projectAdminBundle:Area',
                    'label' => 'Select Area',
                    'property' => 'name',
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('s')
                                ->orderBy('s.id', 'DESC');
                    }))
                ->add('lga', 'entity', array(
                    'class' => 'projectAdminBundle:LGA',
                    'label' => 'Select Area',
                    'property' => 'name'
                ))
                ->getForm();
        $form->handleRequest($request);
        if ($request->getMethod() == "POST") {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $user = $form->getData();
                $user->setPassword(sha1($user->getPassword()));
                $em->persist($user);
                $em->flush();
                $session->set('user', $user);
                if ($form->get('area')->getData()->getName() === "Regular User") {
                    return $this->redirect($this->generateUrl("project_timeline"));
                } else {
                    return $this->redirect($this->generateUrl("project_user_completeReg"));
                }
            }
        }
        return $this->render("projectAdminBundle:Account:register.html.twig", array('form' => $form->createView()));
    }

    public function completeRegAction(Request $request) {
        $user = new User();
        $isRegularUser = false;
        $session = $request->getSession();
        $userData = $session->get('user');
        $getUserById = $this->getDoctrine()->getRepository('projectAdminBundle:User')->find($userData->getId());
        //var_dump($getUserById);
        $this->areaId = $userData->getArea()->getId();

        // var_dump($getUserById->getArea());
        $isRegularUser = $userData->getArea()->getId();
        $form = $this->createFormBuilder($user)
                ->add('bio', 'textarea', array(
                    'required' => TRUE,
                    'constraints' => array(new NotBlank()),
                    'label' => 'title',
                    'error_bubbling' => true,
                ))->add('specialty', 'entity', array(
                    'class' => 'projectAdminBundle:AreaOfSpecialty',
                    'label' => 'Select Area',
                    'property' => 'name'
                ))
                ->getForm();
        $form->handleRequest($request);
        if ($request->getMethod() == "POST") {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $getUserById->setBio($form->get('bio')->getData());
                $getUserById->setSpecialty($form->get('specialty')->getData());
                $em->flush();
                return $this->redirect($this->generateUrl("project_timeline"));
            }
        }


        return $this->render("projectAdminBundle:Account:completeReg.html.twig", array('form' => $form->createView(), 'isRegular' => $isRegularUser, 'userData' => $userData));
    }

    public function pictureUploadAction(Request $request) {

        $session = $request->getSession();
        $user = $this->getDoctrine()->getRepository('projectAdminBundle:User')->find($session->get('user')->getId());

        $form = $this->createFormBuilder($user)
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
                $user = $form->getData();
                $user->upload();
                $em->persist($user);
                $em->flush();
                $session->set('user', $user);
            }
        }
        return $this->render("projectAdminBundle:Account:upload.html.twig", array('form' => $form->createView(), 'user' => $user, 'userData' => $session->get('user')));
    }

    public function loginAction(Request $request) {

        $session = $request->getSession();

        $user = new User();
        $form = $this->createFormBuilder($user)
                    ->add('username', 'text', array(
                        'required' => TRUE,
                        'constraints' => array(new NotBlank()),
                        'label' => 'title',
                        'error_bubbling' => true,
                    ))->add("password", 'password', array(
                        'required' => TRUE,
                        'constraints' => array(new NotBlank()),
                        'label' => 'title',
                        'error_bubbling' => true,
                ))->getForm();
        $form->handleRequest($request);
        if ($request->getMethod() == "POST") {
            if ($form->isValid()) {
                $login = $this->getDoctrine()->getManager()->createQuery("SELECT u,a FROM projectAdminBundle:User u JOIN u.area a  WHERE(u.username =:username AND u.password =:password) ")->setParameters(array("username" => $form->get('username')->getData(), 'password' => sha1($form->get('password')->getData())))->getOneOrNullResult();
                if ($login) {
                    return $this->redirect($this->generateUrl("project_timeline"));
                } else {
                    $session->getFlashBag()->add('message', " Username or password is incorrect");
                }
            }
        }
        return $this->render("projectAdminBundle:Account:login.html.twig", array('form' => $form->createView(), 'userData' => $session->get('user')));
    }

    public function updateDataAction() {

        $request = $this->container->get('request');
        //$stateId = $request->query->get('stateId');
        $stateId = $request->request->get('stateId');
        // echo($stateId);
        // $data2 = $request->query->get('data2');
        $getLgaByStateId = $this->getDoctrine()->getManager()->createQuery("SELECT u,e FROM projectAdminBundle:LGA u JOIN u.state e WHERE(e.id =:id)")->setParameters(array("id" => $stateId))->getResult();
        //handle data
        $data = array();
        foreach ($getLgaByStateId as $value) {
            array_push($data, array('name' => $value->getName(), 'id' => $value->getId()));
        }
        $serializer = $this->container->get('jms_serializer');
        $jsonContent = $serializer
                ->serialize(
                $data, 'json', SerializationContext::create()
                ->enableMaxDepthChecks()
        );
        return new Response($jsonContent);
    }

    public function subAreaListAction(Request $request) {
        $getUserById = $request->getSession()->get('user');
        $request = $this->container->get('request');
        //$stateId = $request->query->get('stateId');
        $stateId = $request->request->get('stateId');
        // echo($stateId);
        // $data2 = $request->query->get('data2');
        $subArea = $this->getDoctrine()->getManager()->createQuery("SELECT s FROM projectAdminBundle:SubArea s  WHERE(s.area =:id)")->setParameters(array("id" => $getUserById->getArea()->getId()))->getResult();
        //handle data
        $data = array();
        foreach ($subArea as $value) {
            array_push($data, array('name' => $value->getName(), 'id' => $value->getId()));
        }
        $serializer = $this->container->get('jms_serializer');
        $jsonContent = $serializer
                ->serialize(
                $data, 'json', SerializationContext::create()
                ->enableMaxDepthChecks()
        );
        return new Response($jsonContent);
    }

    public function specialtyListAction() {

        $request = $this->container->get('request');
        //$stateId = $request->query->get('stateId');
        $subAreaId = $request->request->get('subAreaId');
        // echo($stateId);
        // $data2 = $request->query->get('data2');
        $specialty = $this->getDoctrine()->getManager()->createQuery("SELECT a FROM projectAdminBundle:AreaOfSpecialty a  WHERE(a.subArea =:id)")->setParameters(array("id" => $subAreaId))->getResult();
        //handle data
        $data = array();
        foreach ($specialty as $value) {
            array_push($data, array('name' => $value->getName(), 'id' => $value->getId()));
        }
        $serializer = $this->container->get('jms_serializer');
        $jsonContent = $serializer
                ->serialize(
                $data, 'json', SerializationContext::create()
                ->enableMaxDepthChecks()
        );
        return new Response($jsonContent);
    }

    public function stateListAction(Request $request) {

        // $request = $this->container->get('request');
        //$stateId = $request->query->get('stateId');
        // echo($stateId);
        // $data2 = $request->query->get('data2');
        $stateList = $this->getDoctrine()->getManager()->getRepository("projectAdminBundle:State")->findBy(array(), array('name' => 'ASC'));
        //handle data
        $data = array();
        foreach ($stateList as $value) {
            array_push($data, array('name' => $value->getName(), 'id' => $value->getId()));
        }
        $serializer = $this->container->get('jms_serializer');
        $jsonContent = $serializer
                ->serialize(
                $data, 'json', SerializationContext::create()
                ->enableMaxDepthChecks()
        );
        // return $this->redirect($this->generateUrl("project_user_completeReg"));
        return new Response($jsonContent);
    }

}
