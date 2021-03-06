<?php

namespace App\Controller;

use App\Entity\Author;
use App\Entity\Book;
use App\Form\BookType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BookRepository;

class BookController extends AbstractController
{
    #[Route("/", name:"book_index")]
    public function indexAction(BookRepository $bookRepository)
    {
        return $this->render('Author/main.html.twig', [
            'books' => $bookRepository->findAll(),
        ]);
    }

    /**
     * @return Response
     *
     */
    #[Route("/db/createbook", name: 'addBook')]
    public function createAction(EntityManagerInterface $manager, Request $request, Book $book = null): Response
    {
        if (! $book)
        {
            $book = new Book();
        }
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form-> isValid())
        {
            $manager->persist($book);
            $manager->flush($book);
            return $this->RedirectToRoute('mainpage');
        }

        return $this->render("book/addbook.html.twig", [
            'formBook' => $form->createView(),
            'editMode' => $book-> getId() != null
        ]);
    }
    #[Route("/db/books/{id}", name:"book_delete")]
    public function deleteAction(Book $book, EntityManagerInterface $manager)
    {
        $manager->remove($book);
        $manager->flush();
        return $this->RedirectToRoute('mainpage');
    }
    #[Route("/db/editbook/{id}", name:"book_edit")]
    public function editAction(Request $request, Book $book, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->flush();

            return $this->redirectToRoute('book_index', [],);
        }

        return $this->renderForm('book/editdook.html.twig', [
            'book' => $book,
            'form' => $form,
        ]);
    }
}
