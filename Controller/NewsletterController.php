<?php

namespace Dywee\NewsletterBundle\Controller;

use Dywee\NewsletterBundle\Entity\NewsletterSubscription;
use Dywee\NewsletterBundle\Form\NewsletterSubscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsletterController extends Controller
{
    public function formAction(Request $request)
    {
        $newsletterSubscription = new NewsletterSubscription();
        $form = $this->createForm(new NewsletterSubscriptionType(), $newsletterSubscription)->add('valider', 'submit');

        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($newsletterSubscription);
            $em->flush();

            return $this->render('DyweeNewsletterBundle:Newsletter:validated.html.twig');
        }
        return $this->render('DyweeNewsletterBundle:Newsletter:userForm.html.twig', array('newsletter_form' => $form->createView()));
    }

    public function tableAction()
    {

    }

    public function writeNewsletterAction()
    {

    }

    public function updateAction()
    {

    }
}
