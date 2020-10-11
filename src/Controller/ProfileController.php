<?php


namespace App\Controller;

use App\Entity\Project;
use App\Entity\Task;
use App\Entity\Team;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class ProfileController extends AbstractController
{
    private Security $security;
    private UserPasswordEncoderInterface $passwordEncoder;

    /**
     * ProjectController constructor.
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param Security $security
     */
    public function __construct(UserPasswordEncoderInterface $passwordEncoder, Security $security)
    {
        $this->security = $security;
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @Route("/profile", name="app_user_update", methods="POST")
     * @param Request $request
     * @return Response
     */
    public function updateProfile(Request $request)
    {
//        dd($request);
        $error = null;
        $entityManager = $this->getDoctrine()->getManager();

        $team_id = $request->get('team');
        $team = $this->getDoctrine()->getRepository(Team::class)->findOneBy(['id' => $team_id]);
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy([
            'email' => $this->getUser()->getUsername()
        ]);

        $name = $request->get('name');
        if (empty($name) || $name == "" || trim($name) == "") {
            $error = "Polje sa imenom ne može biti prazno!";
            return $this->showProfile($request, $error);
        }

        $name = explode(" ", $name);
        $firstName = $name[0];
        $lastName = $name[1];

        $user
            ->setTeam($team)
            ->setEmail($request->get('email'))
            ->setFirstName($firstName)
            ->setLastName($lastName);

        $pwd = $request->get('password');
        if (!empty($pwd) || $pwd != "" || trim($pwd) != "") {
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                $request->get('password')
            ));
        }

        $entityManager->flush();

        return $this->redirectToRoute('app_user');
    }

    /**
     * @Route("/user/{id}", name="app_user_show")
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function showUser(Request $request, User $user)
    {
        if ($user->getUsername() == $this->getUser()->getUsername()) {
            return $this->redirectToRoute('app_user');
        }

        $referer = $request->headers->get('referer');
        if (!is_string($referer) || !$referer) {
            $referer = '/';
        }

        $em = $this->getDoctrine()->getManager();

        return $this->render('user.html.twig', [
            'referer' => $referer,
            'user' => $user
        ]);
    }

    /**
     * @Route("/profile", name="app_user")
     * @param Request $request
     * @param null $error
     * @return Response
     */
    public function showProfile(Request $request, $error = null)
    {
        $referer = $request->headers->get('referer');
        if (!is_string($referer) || !$referer) {
            $referer = '/';
        }

        $teams = $this->getDoctrine()->getRepository(Team::class)->findAll();

        return $this->render('profile.html.twig', ["referer" => $referer, "teams" => $teams, "error" => $error]);
    }

    /**
     * @Route("/my-tasks", name="app_user_tasks")
     * @param UserInterface $user
     * @return Response
     */
    public function showMyTasks(UserInterface $user)
    {
        $teams = $this->getDoctrine()->getRepository(Team::class)->findAll();
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        $user_id = $user->getId();

        $tasks = $this->getDoctrine()->getRepository(Task::class)->findBy(
            ['user_working' => $user_id]
        );

//        $tasks = $this->getDoctrine()->getRepository(Task::class)->findAll();

        return $this->render('my_tasks.html.twig', [
            'tasks' => $tasks,
            'teams' => $teams,
            'users' => $users
        ]);
    }

    /**
     * @Route("/my-tasks/add-task", name="app_user_add_task")
     * @param UserInterface $user
     * @return Response
     */
    public function addTask(UserInterface $user)
    {
        $projects = $this->getDoctrine()->getRepository(Project::class)->findAll();
        $teams = $this->getDoctrine()->getRepository(Team::class)->findAll();
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        $user_id = $user->getId();

        $tasks = $this->getDoctrine()->getRepository(Task::class)->findBy(
            ['user_working' => $user_id]
        );

//        $tasks = $this->getDoctrine()->getRepository(Task::class)->findAll();

        return $this->render('my_tasks.html.twig', [
            'tasks' => $tasks,
            'teams' => $teams,
            'users' => $users
        ]);
    }
}