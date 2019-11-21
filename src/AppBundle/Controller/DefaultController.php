<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\PaymentType;
use AppBundle\Entity\Payment;
use Symfony\Component\HttpFoundation\JsonResponse;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/payment", name="paymentpage")
     */
    public function paymentAction(Request $request)
    {
        
        $payment = new Payment();
        $form = $this->createForm(PaymentType::class, $payment,[
            'action'=>$this->generateUrl('paymentpage'),
            'method' => 'POST'
        ]);
        $form->handleRequest($request);

        
        if ( $form->isSubmitted() && $form->isValid()){
            return $this->render('default/paymentForm.html.twig');
        };  
      
        
        return $this->render('default/payment.html.twig', [
            'payment_form'=> $form->createView() 
        ]);

        

    }
    /**
     * @Route("/verifycoupon", name="verifyCoupon", options={ "expose" = true})
     */
    public function verifyAction(Request $request)
    {
        // replace this example code with whatever you need
        $data=$_POST['coupon'];
        
        $coupons = $this->getDoctrine()->getManager()->getRepository('AppBundle:Coupon')->findOneBy(array('nom' =>$data)); 
        if(!Empty($coupons)){
            if($coupons->getValidite()==1){
                $successTest = 1;
            }else{
                $successTest = -1;
            }
        }else {
            $successTest = 0;
        }

        $response = new JSONResponse(array('successTest'=> $successTest));
        return $response;

    }
}
