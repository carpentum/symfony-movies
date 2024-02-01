<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[ORM\Entity(repositoryClass: MovieRepository::class)]
class MoviesController extends AbstractController
{

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/movies', name: 'movies',)]
    public function index(): Response
    {
        // findAll() - SELECT * FROM movies
        // find() - SELECT * FROM movies WHERE id = 8
        // findBy() - SELECT * FROM movies ORDER BY id DESC
        // findOneBy() - SELECT * FROM movies WHERE id = 7 AND title = 'The Dark Knight' ORDER BY id DESC
        // count() - SELECT COUNT(*) FROM movies WHERE id = 7

        // $respository = $this->em->getRepository(Movie::class);

        // // $movies = $respository->getClassName();
        // $movies = $respository->count(['id' => 7]);

        // dd($movies);

        return $this->render('index.html.twig');
    }
}
