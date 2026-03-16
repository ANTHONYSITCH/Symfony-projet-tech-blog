<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;
class PageController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
public function about(): Response
{
    return $this->render('page/about.html.twig');
}


#[Route('/', name: 'app_home')]
public function index(PostRepository $postRepository): Response
{
    $posts = $postRepository->findAll();

    return $this->render('page/index.html.twig', [
        'posts' => $posts
    ]);
}
}