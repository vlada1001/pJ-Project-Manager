<?php


namespace App\Controller;


use App\Entity\Project;
use App\Entity\Task;
use App\Entity\Team;
use App\Entity\User;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class ProjectController extends AbstractController
{
    private Security $security;

    /**
     * ProjectController constructor.
     * @param $security
     */
    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    /**
     * @Route("/project/new", name="app_create_project", methods="POST")
     * @param Request $request
     * @return Response
     */
    public function addProjectToDB(Request $request)
    {
        $referer = $request->headers->get('referer');
        if (!is_string($referer) || !$referer) {
            $referer = '/';
        }

        $refererPathInfo = Request::create($referer)->getPathInfo();

        // No route found
        if (!$refererPathInfo) {
            $refererPathInfo = $referer;
        }

        $date = new DateTime();
        $deadline = DateTime::createFromFormat('Y-m-d', $request->get('deadline'));

        $entityManager = $this->getDoctrine()->getManager();

        $error = $this->checkAddProject($request);

        // ako nije popunjen neki od usluva prikazi gresku
        if (!empty($error)) {
            return $this->addProject($request, $error);
        }

        $project = new Project();

        $project
            ->setName($request->get('projectName'))
            ->setPriority($request->get('priority'))
            ->setCreationDate($date)
            ->setEndDate($deadline)
            ->setColor($request->get('color'))
            ->setDescription($request->get('projectDescription'))
            ->setCompleted(false);

        $this->checkAddParameters($project);

        $entityManager->persist($project);
        $entityManager->flush();

        $team_id = $request->get('team');

        if ($team_id != "null") {
            $team = $this->getDoctrine()->getRepository(Team::class)->findOneBy(['id' => $team_id]);
            $team->addProject($project);
        }

        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['email' => $this->getUser()->getUsername()]);

        $user->addProject($project);

        $entityManager->flush();

        return $this->redirectToRoute('app_homepage');
    }

    /**
     * @Route("/project/new", name="app_add_project")
     * @param Request $request
     * @param $error
     * @return Response
     */
    public function addProject(Request $request, $error = null)
    {
        $referer = $request->headers->get('referer');
        if (!is_string($referer) || !$referer) {
            $referer = '/';
        }

        $refererPathInfo = Request::create($referer)->getPathInfo();

        // No route found
        if (!$refererPathInfo) {
            $refererPathInfo = $referer;
        }

        $teams = $this->getDoctrine()->getRepository(Team::class)->findAll();

        $colors = $this->getColors();

        return $this->render('new_project.html.twig', [
            'referer' => $refererPathInfo,
            'teams' => $teams,
            'colors' => $colors,
            'error' => $error
        ]);
    }

    /**
     * @Route("/project/{project_id}/task/new", name="app_create_task", methods="POST")
     * @param Request $request
     * @param UserInterface $user
     * @param $project_id
     * @return Response
     */
    public function addTaskToDB(Request $request, UserInterface $user, $project_id): Response
    {
        $date = new DateTime();
        $deadline = DateTime::createFromFormat('Y-m-d', $request->get('deadline'));

        $entityManager = $this->getDoctrine()->getManager();
        $project = $entityManager->getRepository(Project::class)->findOneBy(['id' => $project_id]);

        $error = $this->checkAddTask($request, $project);

        // ako nije popunjen neki od usluva prikazi gresku
        if (!empty($error)) {
            return $this->addTask($request, $user, $project_id, $error);
        }

        $task = new Task();

        $task
            ->setName($request->get('taskName'))
            ->setPriority($request->get('priority'))
            ->setCreationDate($date)
            ->setEndDate($deadline)
            ->setColor($request->get('color'))
            ->setDescription($request->get('taskDescription'))
            ->setCompleted(false);

        $this->checkAddParameters($task);

        $entityManager->persist($task);
        $entityManager->flush();

        $user->addCreatedTask($task);

        $worker = $entityManager->getRepository(User::class)->findOneBy(['id' => $request->get('worker')]);
        $worker->addTask($task);

        $project->addTask($task);

        $entityManager->flush();

        return $this->redirectToRoute('app_show_project', ['project_id' => $project_id]);
    }

    /**
     * @Route("/project/{project_id}/task/new", name="app_add_task")
     * @param Request $request
     * @param UserInterface $user
     * @param $project_id
     * @param null $error
     * @return Response
     */
    public function addTask(Request $request, UserInterface $user, $project_id, $error = null)
    {
        $referer = $request->headers->get('referer');
        if (!is_string($referer) || !$referer) {
            $referer = '/';
        }

        $refererPathInfo = Request::create($referer)->getPathInfo();

        // No route found
        if (!$refererPathInfo) {
            $refererPathInfo = $referer;
        }

        $workers = $this->getDoctrine()->getRepository(User::class)->findBy(
            ['team' => $user->getTeam()->getId()]
        );

        $colors = $this->getColors();

        return $this->render('new_task.html.twig', [
            'referer' => $refererPathInfo,
            'workers' => $workers,
            'colors' => $colors,
            'error' => $error
        ]);
    }

    /**
     * @Route("/project/{project_id}/task/{task_id}", name="app_show_task")
     * @param Request $request
     * @param $project_id
     * @param $task_id
     * @return Response
     */
    public function showTask(Request $request, $project_id, $task_id)
    {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository(Task::class)->findOneBy(['id' => $task_id]);

        $teams = $this->getDoctrine()->getRepository(Team::class)->findAll();
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('task.html.twig', [
            'task' => $task,
            'project_id' => $project_id,
            'task_id' => $task_id,
            'teams' => $teams,
            'users' => $users
        ]);
    }

    /**
     * @Route("/project/{project_id}/task/{task_id}/edit", name="app_edit_task_db", methods="POST")
     * @param Request $request
     * @param Project $project_id
     * @param Task $task_id
     * @return Response
     */
    public function editTaskToDB(Request $request, Project $project_id, Task $task_id): Response
    {
        $em = $this->getDoctrine()->getManager();

        $taskName = $request->get('taskName');
        $worker_id = $request->get('worker');
        $deadline = DateTime::createFromFormat('Y-m-d', $request->get('deadline'));
        $color = $request->get('color');
        $completed = ($request->get('completed') === 'true');
        $priority = intval($request->get('priority'));
        $desc = $request->get('taskDescription');

        $error = $this->checkAddTask($request, $project_id);

        if (!empty($error)) {
            return $this->editTask($request, $project_id, $task_id, $error);
        }

        if (!empty($worker_id)) {
            $userWorking = $em->getRepository(User::class)->find($worker_id);
            if (!empty($userWorking)) {
                $task_id->setUserWorking($userWorking);
            }
        }

        if (!empty($task_id->getUserWorking())) {
            $current_worker = $task_id->getUserWorking();
            $current_worker->removeTask($task_id);
        }

        $task_id
            ->setEndDate($deadline)
            ->setColor($color)
            ->setCompleted($completed)
            ->setPriority($priority)
            ->setDescription($desc);


        if (!empty($taskName)) {
            $task_id->setName($taskName);
        }

        $this->checkAddParameters($task_id);

        $em->flush();

        return $this->redirectToRoute('app_show_task', [
            'project_id' => $project_id->getId(),
            'task_id' => $task_id->getId()
        ]);
    }

    /**
     * @Route("/project/{project_id}/task/{task_id}/edit", name="app_edit_task")
     * @param Request $request
     * @param Project $project_id
     * @param Task $task_id
     * @param null $error
     * @return Response
     */
    public function editTask(Request $request, Project $project_id, Task $task_id, $error = null)
    {
        $referer = $request->headers->get('referer');
        if (!is_string($referer) || !$referer) {
            $referer = '/';
        }

        $colors = $this->getColors();

        $workers = null;
        if (!empty($task_id->getUserWorking())) {
            $workers = $task_id->getUserWorking()->getTeam()->getUsers();
        } else {
            $workers = $task_id->getCreator()->getTeam()->getUsers();
        }

        return $this->render('edit_task.html.twig', [
            'referer' => $referer,
            'error' => $error,
            'task' => $task_id,
            'workers' => $workers,
            'colors' => $colors
        ]);
    }

    /**
     * @Route("/project/{project_id}/edit", name="app_edit_project_db", methods="POST")
     * @param Request $request
     * @param Project $project_id
     * @return Response
     */
    public function editProjectToDB(Request $request, Project $project_id)
    {
        $referer = $request->headers->get('referer');
        if (!is_string($referer) || !$referer) {
            $referer = '/';
        }

        $em = $this->getDoctrine()->getManager();

        $error = $this->checkAddProject($request);

        if (!empty($error)) {
            return $this->editProject($request, $project_id, $error);
        }

        $projectName = $request->get('projectName');
        $team_id = $request->get('team');
        $deadline = DateTime::createFromFormat('Y-m-d', $request->get('deadline'));
        $color = $request->get('color');
        $completed = ($request->get('completed') === 'true');
        $priority = $request->get('priority');
        $desc = $request->get('projectDescription');

        $project_id
            ->setEndDate($deadline)
            ->setColor($color)
            ->setCompleted($completed)
            ->setPriority($priority)
            ->setDescription($desc);

        if (!empty($projectName)) {
            $project_id->setName($projectName);
        }

        $this->checkAddParameters($project_id);
        $em->flush();

        $team = $em->getRepository(Team::class)->find($team_id);
        $team->addProject($project_id);

        $em->flush();

        $colors = $this->getColors();
        $teams = $this->getDoctrine()->getRepository(Team::class)->findAll();
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        $zavrseno_zad = 0;

        $tasks = $em->getRepository(Task::class)->findBy([
            'project' => $project_id->getId()
        ]);

        foreach ($tasks as $zad) {
            if ($zad->getCompleted() == true)
                $zavrseno_zad++;
        }

        return $this->redirectToRoute('app_show_project', [
            'project_id' => $project_id->getId()
        ]);
    }


    /**
     * @Route("/project/{project_id}/edit", name="app_edit_project")
     * @param Request $request
     * @param Project $project_id
     * @param null $error
     * @return Response
     */
    public function editProject(Request $request, Project $project_id, $error = null)
    {
        $referer = $request->headers->get('referer');
        if (!is_string($referer) || !$referer) {
            $referer = '/';
        }

        $colors = $this->getColors();
        $teams = $this->getDoctrine()->getRepository(Team::class)->findAll();

        return $this->render('edit_project.html.twig', [
            'referer' => $referer,
            'error' => $error,
            'colors' => $colors,
            'teams' => $teams,
            'project' => $project_id
        ]);
    }

    /**
     * @Route("/project/{project_id}", name="app_show_project")
     * @param Request $request
     * @param $project_id
     * @return Response
     */
    public function showProject(Request $request, Project $project_id)
    {
        $teams = $this->getDoctrine()->getRepository(Team::class)->findAll();
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        $tasks = $this->getDoctrine()->getRepository(Task::class)->findBy(
            ['project' => $project_id->getId()]
        );

        $zavrseno_zad = 0;
        foreach ($tasks as $zad) {
            if ($zad->getCompleted() == true)
                $zavrseno_zad++;
        }

        $can_add = true;

        return $this->render('project.html.twig', [
            'project_id' => $project_id->getId(),
            'project' => $project_id,
            'tasks' => $tasks,
            'teams' => $teams,
            'users' => $users,
            'zavrseno_zad' => $zavrseno_zad,
            'can_add' => $can_add
        ]);
    }

    private function getColors()
    {
        return [
            'bela' => 'd4dde1',
            'plava' => '4186e0',
            'crvena' => 'e5213b',
            'zelena' => '31b19a',
            'siva' => '7f979b',
            'tomato' => 'f8573f'
        ];
    }

    private function checkAddProject(Request $request)
    {
//        if ($request->get('projectName') == null) {
//            return "Naziv projekta nije postavljen.";
//        }

        if ($request->get('team') == null) {
            return "Nije izabran tim.";
        }

        if ($request->get('priority') > '5') {
            return "Najveći prioritet je 5.";
        }

        if ($request->get('priority') < '0') {
            return "Najmanji prioritet je 0.";
        }

        $date = new \DateTime();
        $deadline = DateTime::createFromFormat('Y-m-d', $request->get('deadline'));
        if ($deadline < $date) {
            return "Datum završetka projekta ne može biti u prošlom vremenu.";
        }

        return "";
    }

    /**
     * @param Project|Task $type
     */
    private function checkAddParameters($type)
    {
        if (!$type->getColor()) {
            $colors = $this->getColors();
            $randomColorName = array_rand($colors);
            $randomColorHex = $colors[$randomColorName];
            $type->setColor($randomColorHex);
        }

        if (!$type->getPriority() || empty($type->getPriority())) {
            $type->setPriority(1);
        }

        if ($type->getPriority() > '5') {
            $type->setPriority(5);
        } else if ($type->getPriority() < 0) {
            $type->setPriority(0);
        }
    }


    private function checkAddTask(Request $request, Project $project)
    {
//        if (empty($request->get('taskName'))) {
//            return "Naziv zadatka nije postavljen.";
//        }

//        if (empty($request->get('worker'))) {
//            return "Nije izabran radnik.";
//        }

        if ($request->get('priority') > '5') {
            return "Najveći prioritet je 5.";
        }

        if ($request->get('priority') < '0') {
            return "Najmanji prioritet je 0.";
        }

        $date = new \DateTime();
        $deadline = DateTime::createFromFormat('Y-m-d', $request->get('deadline'));
//        if ($deadline < $date) {
//            return "Datum završetka zadatka ne može biti u prošlom vremenu.";
//        }

        $project_deadline = $project->getEndDate();
        if ($deadline > $project_deadline) {
            return "Datum završetka zadatka ne može biti nakon datuma završetka projekta - " . $project->getEndDate()->format('M d, Y');
        }

        return "";
    }

    /**
     * @Route("/ajax/{str}", name="ajax_req")
     * @param Project|null $project
     * @param Task|null $task
     * @param $str
     * @return Project[]|Task[]|null
     */
    private function findByPriority(Project $project = null, Task $task = null, $str)
    {
        $em = $this->getDoctrine()->getManager();

        $projects = null;
        $tasks = null;

        if (!empty($project)) {
            return $em->getRepository(Project::class)->findAllBy(['priority' => 'DESC']);
        } else {
            return $em->getRepository(Task::class)->findAllBy(['priority' => 'DESC']);
        }
    }
}