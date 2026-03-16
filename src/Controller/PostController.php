<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Comment;
use App\Form\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class PostController extends AbstractController
{
    #[Route('/post/{id}', name: 'post_show')]
    public function show(Post $post, Request $request, EntityManagerInterface $entityManager): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setPost($post);
            $entityManager->persist($comment);
            $entityManager->flush();
            
            return $this->redirectToRoute('post_show', ['id' => $post->getId()]);
        }
        
        return $this->render('post/show.html.twig', [
            'post' => $post,
            'form' => $form->createView()
        ]);
    }
}