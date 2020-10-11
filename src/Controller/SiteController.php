<?php


namespace App\Controller;

use App\Entity\Project;
use App\Entity\Team;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @return Response
     */
    public function homepage()
    {
        $projects = $this->getDoctrine()->getRepository(Project::class)->findAll();
        $teams = $this->getDoctrine()->getRepository(Team::class)->findAll();
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('index_content.html.twig', [
            'projects' => $projects,
            'teams' => $teams,
            'users' => $users
        ]);
    }

    /**
     * @Route("/new-team", name="", methods="POST")
     * @param Request $request
     */
    public function addTeamToDB(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $error = $this->checkAddTeam($request);

        // ako nije popunjen neki od usluva prikazi gresku
        if (!empty($error)) {
            return $this->addTeam($request, $error);
        }

        $users = $request->get('users');
        $project = $request->get('project');
        $team_name = $request->get('teamName');
        $team_desc = $request->get('teamDescription');

        $users = $entityManager->getRepository(User::class)->findBy(['id' => $users]);
        $project = $entityManager->getRepository(Project::class)->find($project);

        $team = new Team();
        $team
            ->addUsers($users)
            ->addProject($project)
            ->setName($team_name)
            ->setDescription($team_desc);

        $entityManager->persist($team);
        $entityManager->flush();

        return $this->redirectToRoute('app_homepage');
    }

    /**
     * @Route("/new-team", name="app_add_team")
     *
     * NOTE: ako je korisnik admin, onda moze da dodaje timove
     * @param Request $request
     * @param null $error
     * @return Response
     */
    public function addTeam(Request $request, $error = null)
    {
        $referer = $request->headers->get('referer');
        if (!is_string($referer) || !$referer) {
            $referer = '/';
        }

//        $users = $this->getDoctrine()->getRepository(User::class)->findBy(
//            ['team' => null]
//        );

        $users = $this->getDoctrine()->getRepository(User::class)->findBy(['team' => null]);
        $projects = $this->getDoctrine()->getRepository(Project::class)->findAll();

        return $this->render('new_team.html.twig', [
            'referer' => $referer,
            'users' => $users,
            'projects' => $projects,
            'error' => $error
        ]);
    }

    private function checkAddTeam(Request $request)
    {
        $team_name = $request->get('teamName');
        $findTeam = $this->getDoctrine()->getRepository(Team::class)->findOneBy(['name' => $team_name]);

        if ($findTeam) {
            return "Tim sa zadatim imenom već postoji.";
        }
        /*
                $roles = $this->getUser()->getRoles();
                if (in_array('ROLE_ADMIN', $roles)) {
                    // onda moze da napravi tim
                } else {
                    return "Nemate privilegije da napravite tim.";
                }
        */

        return null;
    }

}