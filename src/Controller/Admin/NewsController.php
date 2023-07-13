<?php

namespace App\Controller\Admin;

use App\Entity\News;
use App\Form\NewsType;
use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/news")
 */
class NewsController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_news_index", methods={"GET"})
     */
    public function index(NewsRepository $newsRepository): Response
    {
        return $this->render('admin/news/index.html.twig', [
            'news' => $newsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_admin_news_new", methods={"GET", "POST"})
     */
    public function new(Request $request, NewsRepository $newsRepository): Response
    {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newsRepository->add($news, true);

            return $this->redirectToRoute('app_admin_news_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/news/new.html.twig', [
            'news' => $news,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_news_show", methods={"GET"})
     */
    public function show(News $news): Response
    {
        return $this->render('admin/news/show.html.twig', [
            'news' => $news,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_admin_news_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, News $news, NewsRepository $newsRepository): Response
    {
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newsRepository->add($news, true);

            return $this->redirectToRoute('app_admin_news_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/news/edit.html.twig', [
            'news' => $news,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_news_delete", methods={"POST"})
     */
    public function delete(Request $request, News $news, NewsRepository $newsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$news->getId(), $request->request->get('_token'))) {
            $newsRepository->remove($news, true);
        }

        return $this->redirectToRoute('app_admin_news_index', [], Response::HTTP_SEE_OTHER);
    }
}
