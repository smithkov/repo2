<?php

namespace project\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use project\AdminBundle\Entity\State;
use project\AdminBundle\Entity\LGA;
use project\AdminBundle\Entity\RatingComment;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('projectAdminBundle:Default:index.html.twig');
    }
     public function homeAction()
    {
        return $this->render('projectAdminBundle:Default:home.html.twig');
    }
    public function timelineAction(Request $request)
    {
        $session = $request->getSession()->get('user');
        $users = $this->getDoctrine()->getManager()->createQuery("SELECT u,a FROM projectAdminBundle:User u JOIN u.area a  WHERE(a.id !=:id) ")->setParameters(array("id" => 4))->getResult();
        return $this->render('projectAdminBundle:Default:timeline.html.twig',array('users'=>$users,'userData'=>$session));
    }
    public function productDetailAction(Request $request,$id)
    {
        $session = $request->getSession()->get('user');
        $product = $this->getDoctrine()->getManager()->getRepository('projectAdminBundle:Product')->find($id);
        return $this->render('projectAdminBundle:Default:productDetail.html.twig',array('product'=>$product,'userData'=>$session));
    }
     public function detailAction(Request $request,$username)
    {
         $session = $request->getSession()->get('user');
        
        $user = $this->getDoctrine()->getManager()->createQuery("SELECT u FROM projectAdminBundle:User u WHERE(u.username =:username) ")->setParameters(array("username" => $username))->getOneOrNullResult();
       
         $form = $this->createFormBuilder(array())
                ->add('content', 'textarea', array(
                    'required' => TRUE,
                    'constraints' => array(new NotBlank()),
                    'label' => 'title',
                    'error_bubbling' => true,
                ))
                ->getForm();
        $form->handleRequest($request);
        if ($request->getMethod() == "POST") {
            if ($form->isValid()) {
                $currentUser = $this->getDoctrine()->getRepository('projectAdminBundle:User')->find($session->getId());
                $em = $this->getDoctrine()->getManager();
                $rating = new RatingComment();
                $rating->setContent($form->get('content')->getData());
                $rating->setDate(new \DateTime('now'));
                $rating->setUser($currentUser);
                $em->persist($rating);
                $em->flush();
               
            }
        }
        return $this->render('projectAdminBundle:Default:detail.html.twig',array('user'=>$user,'userData'=> $session,'form'=>$form->createView()));
    }
    public function dashboardAction()
    {
        
        return $this->render('projectAdminBundle:Default:userDashboard.html.twig');
    }
    public function configAction()
    {
        $em= $this->getDoctrine()->getManager();
       
       
       $state = new State();
       $state->setName("Adamawa");
       $em->persist($state);
       $em->flush();
       
       $state2 = new State();
       $state2->setName("Anambra");
       $em->persist($state2);
       $em->flush();
       
       $state3 = new State();
       $state3->setName("Abia");
       $em->persist($state3);
       $em->flush();
       
       $state4 = new State();
       $state4->setName("Nasarawa");
       $em->persist($state4);
       $em->flush();
       
       $state5 = new State();
       $state5->setName("Akwa Ibom");
       $em->persist($state5);
       $em->flush();
       
       $state6 = new State();
       $state6->setName("Bauchi");
       $em->persist($state6);
       $em->flush();
       
       $state7 = new State();
       $state7->setName("Bayelsa");
       $em->persist($state7);
       $em->flush();
       
       $state8 = new State();
       $state8->setName("Benue");
       $em->persist($state8);
       $em->flush();
       
       $state9 = new State();
       $state9->setName("Delta");
       $em->persist($state9);
       $em->flush();
       
       $state10 = new State();
       $state10->setName("Ebonyi");
       $em->persist($state10);
       $em->flush();
       
       $state11 = new State();
       $state11->setName("Edo");
       $em->persist($state11);
       $em->flush();
       
       $state12 = new State();
       $state12->setName("Ekiti");
       $em->persist($state12);
       $em->flush();
       
       $state13 = new State();
       $state13->setName("Enugu");
       $em->persist($state13);
       $em->flush();
       
       $state14 = new State();
       $state14->setName("Gombe");
       $em->persist($state14);
       $em->flush();
       
       $state15 = new State();
       $state15->setName("Imo");
       $em->persist($state15);
       $em->flush();
       
       $state16 = new State();
       $state16->setName("Jigawa");
       $em->persist($state16);
       $em->flush();
       
       $state17 = new State();
       $state17->setName("Kaduna");
       $em->persist($state17);
       $em->flush();
       
       $state18 = new State();
       $state18->setName("Kano");
       $em->persist($state18);
       $em->flush();
       
       $state19 = new State();
       $state19->setName("Katsina");
       $em->persist($state19);
       $em->flush();
       
       $state20 = new State();
       $state20->setName("Kebbi");
       $em->persist($state20);
       $em->flush();
       
       $state21 = new State();
       $state21->setName("Kogi");
       $em->persist($state21);
       $em->flush();
       
       $state22 = new State();
       $state22->setName("Kwara");
       $em->persist($state22);
       $em->flush();
       
       $state23 = new State();
       $state23->setName("Lagos");
       $em->persist($state23);
       $em->flush();
       
       $state24 = new State();
       $state24->setName("Niger");
       $em->persist($state24);
       $em->flush();
       
       $state25 = new State();
       $state25->setName("Ogun");
       $em->persist($state25);
       $em->flush();
       
       $state26 = new State();
       $state26->setName("Ondo");
       $em->persist($state26);
       $em->flush();
       
       $state27 = new State();
       $state27->setName("Osun");
       $em->persist($state27);
       $em->flush();
       
       $state28 = new State();
       $state28->setName("Oyo");
       $em->persist($state28);
       $em->flush();
       
       $state29 = new State();
       $state29->setName("Plateau");
       $em->persist($state29);
       $em->flush();
       
       $state30 = new State();
       $state30->setName("Rivers");
       $em->persist($state30);
       $em->flush();
       
       $state31 = new State();
       $state31->setName("Sokoto");
       $em->persist($state31);
       $em->flush();
       
       $state32 = new State();
       $state32->setName("Taraba");
       $em->persist($state32);
       $em->flush();
       
       $state33 = new State();
       $state33->setName("Yobe");
       $em->persist($state33);
       $em->flush();
       
       $state34 = new State();
       $state34->setName("Zamfara");
       $em->persist($state34);
       $em->flush();
       
       $state35 = new State();
       $state35->setName("FCT");
       $em->persist($state35);
       $em->flush();
       
       $state37 = new State();
       $state37->setName("Anambra");
       $em->persist($state37);
       $em->flush();
       
       $state39 = new State();
       $state39->setName("Borno");
       $em->persist($state39);
       $em->flush();
       
       $state38 = new State();
       $state38->setName("Nasarawa");
       $em->persist($state38);
       $em->flush();
       
       $fctState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'FCT'));
       $zamfaraState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Zamfara'));
       $yobeState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Yobe'));
       $tarabaState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Taraba'));
       $riversState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Rivers'));
       $sokotoState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Sokoto'));
       $plateauState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Plateau'));
       $oyoState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Oyo'));
       $osunState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Osun'));
       $ondoState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Ondo'));
       $ogunState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Ogun'));
       $lagosState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Lagos'));
       $kwaraState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Kwara'));
       $kogiState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Kogi'));
       $kebbiState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Kebbi'));
       $katsinaState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Katsina'));
       $kanoState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Kano'));
       $kadunaState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Kaduna'));
       $adamawaState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Adamawa'));
       $akState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Akwa Ibom'));
       $bauchiState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Bauchi'));
       $bayelsaState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Bayelsa'));
       $benueState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Benue'));
       $bornoState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Borno'));
       $crState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Cross River'));
       $deltaState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Delta'));
       $ebonyiState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Ebonyi'));
       $edoState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Edo'));
       $ekitiState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Ekiti'));
       $enuguState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Enugu'));
       $gombeState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Gombe'));
       $imoState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Imo'));
       $jigawaState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Jigawa'));
       $nigerState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Niger'));
       
       $anambraState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Anambra'));
       $abiaState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Abia'));
       $nasarawaState = $this->getDoctrine()->getRepository("projectAdminBundle:State")->findOneBy(array('name'=>'Nasarawa'));
       
      $adamawa = array('Demsa','Fufore','Ganaye','Gireri','Gombi','Guyuk','Hong','Jada','Lamurde','Madagali','Maiha','Mayo-Belwa','Michika','Mubi North','Mubi South','Numan','Shelleng','Song','Toungo','Yola North','Yola South');
      $ak = array('Abak','Eastern Obolo','Eket','Esit Eket','Essien Udim','Etim Ekpo','Etinan','Ibeno','Ibesikpo Asutan','Ibiono Ibom','Ika','Ikono','Ikot Abasi','Ikot Ekpene','Ini','Itu','Mbo','Mkpat Enin','Nsit Atai','Nsit Ibom','Nsit Ubium','Obot Akara','Okobo','Onna','Oron','Oruk Anam','Udung Uko','Ukanafun','Uruan','Urue-Offong/Oruko','Uyo');
      $bauchi = array('Alkaleri','Bauchi','Bogoro','Damban','Darazo','Dass','Ganjuwa','Giade','Itas/Gadau','Jamaare','Katagum','Kirfi','Misau','Ningi','Shira','Tafawa-Balewa','Toro','Warji','Zaki');
      $bayelsa = array('Brass','Ekeremor','Kolokuma/Opokuma','Nembe','Ogbia','Sagbama','Southern Jaw','Yenegoa');
      $benue = array('Ado','Agatu','Apa','Buruku','Gboko','Guma','Gwer East','Gwer West','Katsina-Ala','Konshisha','Kwande','Logo','Makurdi','Obi','Ogbadibo','Oju','Okpokwu','Ohimini','Oturkpo','Tarka','Ukum','Ushongo','Vandeikya');
      $borno = array('Abadam','Askira/Uba','Bama','Bayo','Biu','Chibok','Damboa','Dikwa','Gubio','Guzamala','Gwoza','Hawul','Jere','Kaga','Kala/Balge','Konduga','Kukawa','Kwaya Kusar','Mafa','Magumeri','Maiduguri','Marte','Mobbar','Monguno','Ngala','Nganzai','Shani');
      $cr = array('Akpabuyo','Odukpani','Akamkpa','Biase','Abi','Ikom','Yarkur','Odubra','Boki','Ogoja','Yala','Obanliku','Obudu','Calabar South','Etung','Bekwara','Bakassi','Calabar Municipality');
      $delta = array('Oshimili','Aniocha','Aniocha South','Ika South','Ika North-East','Ndokwa West','Ndokwa East','Isoko south','Isoko North','Bomadi','Burutu','Ughelli South','Ughelli North','Ethiope West','Ethiope East','Sapele','Okpe','Warri North','Warri South','Uvwie','Udu','Warri Central','Ukwani','Oshimili North','Patani');
      $ebonyi = array('Afikpo South','Afikpo North','Onicha','Ohaozara','Abakaliki','Ishielu','lkwo','Ezza','Ezza South','Ohaukwu','Ebonyi','Ivo');
      $edo = array('Esan North-East','Esan Central','Esan West','Egor','Ukpoba','Central','Etsako Central','Igueben','Oredo','Ovia SouthWest','Ovia South-East','Orhionwon','Uhunmwonde','Etsako East','Esan South-East');
      $ekiti = array('Ado','Ekiti-East','Ekiti-West','Emure/Ise/Orun','Ekiti South-West','Ikare','Irepodun','Ijero','Ido/Osi','Oye','Ikole','Moba','Gbonyin','Efon','Ise/Orun','Ilejemeje');
      $enugu = array('Enugu South','Igbo-Eze South','Enugu North','Nkanu','Udi Agwu','Oji-River','Ezeagu','IgboEze North','Isi-Uzo','Nsukka','Igbo-Ekiti','Uzo-Uwani','Enugu Eas','Aninri','Nkanu East','Udenu');
      $gombe = array('Akko','Balanga','Billiri','Dukku','Kaltungo','Kwami','Shomgom','Funakaye','Gombe','Nafada/Bajoga','Yamaltu/Delta');
      $imo = array('Aboh-Mbaise','Ahiazu-Mbaise','Ehime-Mban','Ezinihitte','Ideato North','Ideato South','Ihitte/Uboma','Ikeduru','Isiala Mbano','Isu','Mbaitoli','Mbaitoli','Ngor-Okpala','Njaba','Nwangele','Nkwerre','Obowo','Oguta','Ohaji/Egbema','Okigwe','Orlu','Orsu','Oru East','Oru West','Owerri-Municipal','Owerri North','Owerri West');
      $jigawa = array('Auyo','Babura','Birni Kudu','Biriniwa','Buji','Dutse','Gagarawa','Garki','Gumel','Guri','Gwaram','Gwiwa','Hadejia','Jahun','Kafin Hausa','Kaugama Kazaure','Kiri Kasamma','Kiyawa','Maigatari','Malam Madori','Miga','Ringim','Roni','Sule-Tankarkar','Taura','Yankwashi');
      $kaduna = array('Birni-Gwari','Chikun','Giwa','Igabi','Ikara','jaba','Jemaa','Kachia','Kaduna North','Kaduna South','Kagarko','Kajuru','Kaura','Kauru','Kubau','Kudan','Lere','Makarfi','Sabon-Gari','Sanga','Soba','Zango-Kataf','Zaria');
      $kano = array('Ajingi','Albasu','Bagwai','Bebeji','Bichi','Bunkure','Dala','Dambatta','Dawakin Kudu','Dawakin Tofa','Doguwa','Fagge','Gabasawa','Garko','Garum','Mallam','Gaya','Gezawa','Gwale','Gwarzo','Kabo','Kano Municipal','Karaye','Kibiya','Kiru','Kumbotso','Kunchi','Kura','Madobi','Makoda','Minjibir','Nasarawa','Rano','Rimin Gado','Rogo','Shanono','Sumaila','Takali','Tarauni','Tofa','Tsanyawa','Tudun Wada','Ungogo','Warawa','Wudil');
      $katsina = array('Bakori','Batagarawa','Batsari','Baure','Bindawa','Charanchi','Dandume','Danja','Dan Musa','Daura','Dutsi','Dutsin-Ma','Faskari','Funtua','Ingawa','Jibia','Kafur','Kaita','Kankara','Kankia','Katsina','Kurfi','Kusada','MaiAdua','Malumfashi','Mani','Mashi','Matazuu','Musawa','Rimi','Sabuwa','Safana','Sandamu','Zango');
      $kebbi = array('Aleiro','Arewa-Dandi','Argungu','Augie','Bagudo','Birnin Kebbi','Bunza','Dandi','Fakai','Gwandu','Jega','Kalgo','Koko/Besse','Maiyama','Ngaski','Sakaba','Shanga','Suru','Wasagu/Danko','Yauri','Zuru');
      $kogi = array('Adavi','Ajaokuta','Ankpa','Bassa','Dekina','Ibaji','Idah','Igalamela-Odolu','Ijumu','Kabba/Bunu','Kogi','Lokoja','Mopa-Muro','Ofu','Ogori/Mangongo','Okehi','Okene','Olamabolo','Omala','Yagba East','Yagba West');
      $kwara = array('Asa','Baruten','Edu','Ekiti','Ifelodun','Ilorin East','Ilorin West','Irepodun','Isin','Kaiama','Moro','Offa','Oke-Ero','Oyun','Pategi');
      $lagos = array('Agege','Ajeromi-Ifelodun','Alimosho','Amuwo-Odofin','Apapa','Badagry','Epe','Eti-Osa','Ibeju/Lekki','Ifako-Ijaye','Ikeja','Ikorodu','Kosofe','Lagos Island','Lagos Island','Lagos Mainland','Mushin','Ojo','Oshodi-Isolo','Shomolu','Surulere');
      $niger = array('Agaie','Agwara','Bida','Borgu','Bosso','Chanchaga','Edati','Gbako','Gurara','Katcha','Kontagora','Lapai','Lavun','Magama','Mariga','Mashegu','Mokwa','Muya','Pailoro','Rafi','Rijau','Shiroro','Suleja','Tafa','Wushishi');
      $ogun = array('Abeokuta North','Abeokuta South','Ado-Odo/Ota','Egbado North','Egbado South','Ewekoro','Ifo','Ijebu East','Ijebu North','Ijebu North East','Ijebu Ode','Ikenne','Imeko-Afon','Ipokia','Obafemi-Owode','Ogun Waterside','Odeda','Odogbolu','Remo North','Shagamu');
      $ondo = array('Akoko North East','Akoko North West','Akoko South Akure East','Akoko South West','Akure North','Akure South','Ese-Odo','Idanre','Ifedore','Ilaje','Ile-Oluji','Okeigbo','Irele','Odigbo','Okitipupa','Ondo East','Ondo West','Ose','Owo');
      $osun = array('Aiyedade','Aiyedire','Atakumosa East','Atakumosa West','Boluwaduro','Boripe','Ede North','Ede South','Egbedore','Ejigbo','Ife Central','Ife East','Ife North','Ife South','Ifedayo','Ifelodun','Ila','Ilesha East','Ilesha West','Irepodun','Irewole','Isokan','Iwo','Obokun','Odo-Otin','Ola-Oluwa','Olorunda','Oriade','Orolu','Osogbo');
      $oyo = array('Afijio','Akinyele','Atiba','Atigbo','Egbeda','IbadanCentral','Ibadan North','Ibadan North West','Ibadan South East','Ibadan South West','Ibarapa Central','Ibarapa East','Ibarapa North','Ido','Irepo','Iseyin','Itesiwaju','Iwajowa','Kajola','Lagelu Ogbomosho North','Ogbmosho South','Ogo Oluwa','Olorunsogo','Oluyole','Ona-Ara','Orelope','Ori Ire','Oyo East','Oyo West','Saki East','Saki West','Surulere');
      $plateau = array('Barikin Ladi','Bassa','Bokkos','Jos East','Jos North','Jos South','Kanam','Kanke','Langtang North','Langtang South','Mangu','Mikang','Pankshin','Quaan Pan','Riyom','Shendam','Wase');
      $rivers = array('Abua/Odual','Ahoada East','Ahoada West','Akuku Toru','Andoni','Asari-Toru','Bonny','Degema','Emohua','Eleme','Etche','Gokana','Ikwerre','Khana','Obia/Akpor','Ogba/Egbema/Ndoni','Ogu/Bolo','Okrika','Omumma','Opobo/Nkor','Oyigbo','Port-Harcourt','Tai');
      $sokoto = array('Binji','Bodinga','Dange-shnsi','Gada','Goronyo','Gudu','Gawabawa','Illela','Isa','Kware','kebbe','Rabah','Sabon birni','Shagari','Silame','Sokoto North','Sokoto South','Tambuwal','Tqngaza','Tureta','Wamako','Wurno','Yabo');
      $taraba = array('Ardo-kola','Bali','Donga','Gashaka','Cassol','Ibi','Jalingo','Karin-Lamido','Kurmi','Lau','Sardauna','Takum','Ussa','Wukari','Yorro','Zing');
      $yobe = array('Bade','Bursari','Damaturu','Fika','Fune','Geidam','Gujba','Gulani','Jakusko','Karasuwa','Karawa','Machina','Nangere','Nguru Potiskum','Tarmua','Yunusari','Yusufari');
      $zamfara = array('Anka','Bakura','Birnin Magaji','Bukkuyum','Bungudu','Gummi','Gusau','Kaura','Namoda','Maradun','Maru','Shinkafi','Talata Mafara','Tsafe','Zurmi');
      $fct = array('Gwagwalada','Kuje','Abaji',' Abuja Municipal','Bwari','Kwali');
      $anam = array('Aguata','Anambra East','Anambra West','Anaocha','Awka North','Awka South','Ayamelum','Dunukofia','Ekwusigo','Idemili North','Idemili south','Ihiala','Njikoka','Nnewi North','Nnewi South','Ogbaru','Onitsha North','Onitsha South','Orumba North','Orumba South','Oyi ');
      $abia = array('Aba North','Aba South','Arochukwu','Bende',' Ikwuano','Isiala-Ngwa North','Isiala-Ngwa South','Isuikwato','Obi Nwa','Ohafia','Osisioma','Ngwa','Ugwunagbo','Ukwa East','Ukwa West','Umuahia North','Umuahia South','Umu-Neochi');
      $nas = array('Akwanga','Awe','Doma','Karu','Keana','Keffi','Kokona','Lafia','Nasarawa','Nasarawa-Eggon','Obi','Toto','Wamba');
      
      
      foreach ($abia as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($abiaState);
           $em->persist($lga);
           $em->flush();
       }
      
      foreach ($anam as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($anambraState);
           $em->persist($lga);
           $em->flush();
       }
       
      
      foreach ($nas as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($nasarawaState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($zamfara as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($zamfaraState);
           $em->persist($lga);
           $em->flush();
       }
       foreach ($fct as $i)
       {
           $lga = new LGA();
           $lga->setName($i);
           $lga->setState($fctState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($yobe as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($yobeState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($taraba as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($tarabaState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($rivers as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($riversState);
           $em->persist($lga);
           $em->flush();
       }
       
       foreach ($sokoto as $i)
       {
           $lga = new LGA();
           $lga->setName($i);
           $lga->setState($sokotoState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($plateau as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($plateauState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($oyo as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($oyoState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($ondo as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($ondoState);
           $em->persist($lga);
           $em->flush();
       }
       foreach ($osun as $i)
       {
           $lga = new LGA();
           $lga->setName($i);
           $lga->setState($osunState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($niger as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($nigerState);
           $em->persist($lga);
           $em->flush();
       }
       foreach ($ogun as $i)
       {
           $lga = new LGA();
           $lga->setName($i);
           $lga->setState($ogunState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($lagos as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($lagosState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($kwara as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($kwaraState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($kogi as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($kogiState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($kebbi as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($kebbiState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($kano as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($kanoState);
           $em->persist($lga);
           $em->flush();
       }
       foreach ($katsina as $i)
       {
           $lga = new LGA();
           $lga->setName($i);
           $lga->setState($katsinaState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($kaduna as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($kadunaState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($jigawa as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($jigawaState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($imo as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($imoState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($ekiti as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($ekitiState);
           $em->persist($lga);
           
           $em->flush();
       }
       
       foreach ($gombe as $i)
       {
           $lga = new LGA();
           $lga->setName($i);
           $lga->setState($gombeState);
           $em->persist($lga);
           $em->flush();
       }
       foreach ($enugu as $i)
       {
           $lga = new LGA();
           $lga->setName($i);
           $lga->setState($enuguState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($edo as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($edoState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($ebonyi as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($ebonyiState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($cr as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($crState);
           $em->persist($lga);
           $em->flush();
       }
       foreach ($delta as $i)
       {
           $lga = new LGA();
           $lga->setName($i);
           $lga->setState($deltaState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($adamawa as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($adamawaState);
           $em->persist($lga);
           $em->flush();
       }
       foreach ($borno as $i)
       {
           $lga = new LGA();
           $lga->setName($i);
           $lga->setState($bornoState);
           $em->persist($lga);
           $em->flush();
       }
       foreach ($benue as $i)
       {
           $lga = new LGA();
           $lga->setName($i);
           $lga->setState( $benueState);
           $em->persist($lga);
           $em->flush();
       }
      foreach ($ak as $i)
       {
          $lga = new LGA();
           $lga->setName($i);
           $lga->setState($akState);
           $em->persist($lga);
           $em->flush();
       }
       foreach ($bauchi as $i)
       {
           $lga = new LGA();
           $lga->setName($i);
           $lga->setState($bauchiState);
           $em->persist($lga);
           $em->flush();
       }
       foreach ($bayelsa as $i)
       {
           $lga = new LGA();
           $lga->setName($i);
           $lga->setState($bayelsaState);
           $em->persist($lga);
           $em->flush();
       }
       // return $this->render('projectAdminBundle:Default:index.html.twig');
    }
}
