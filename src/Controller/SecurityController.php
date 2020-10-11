<?php

namespace App\Controller;

use App\Entity\User;
use App\Security\LoginFormAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_homepage');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * @Route("/register", name="app_register")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param GuardAuthenticatorHandler $guardAuthenticatorHandler
     * @param LoginFormAuthenticator $formAuthenticator
     * @return Response
     */
    public function register(Request $request,
                             UserPasswordEncoderInterface $passwordEncoder,
                             GuardAuthenticatorHandler $guardAuthenticatorHandler,
                             LoginFormAuthenticator $formAuthenticator)
    {
        // ToDo: koristi Symfony formu i validaciju
        $error = null;

        if ($request->isMethod('POST')) {
            $user = new User();
            $user
                ->setEmail($request->request->get('email'))
                ->setFirstName($request->request->get('firstName'))
                ->setLastName($request->request->get('lastName'))
                ->setRegistrationDate(new \DateTime());

            $pwd = [$request->request->get('password'), $request->request->get('password_rep')];

            if ($pwd[0] == $pwd[1]) {

                $user->setPassword($passwordEncoder->encodePassword(
                    $user,
                    $pwd[0]
                ));

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                return $guardAuthenticatorHandler->authenticateUserAndHandleSuccess(
                    $user,
                    $request,
                    $formAuthenticator,
                    'main'
                );
            } else {
                $error = "Šifre se ne poklapaju!";
            }

        }

        return $this->render('security/register.html.twig', ['error' => $error]);
    }
}
