<?php

declare(strict_types=1);

namespace App\Controller\WebPage;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends WebPageController
{
    #[Route('/', 'main')]
    public function main(EntityManagerInterface $em): Response
    {
        return $this->render(
            'main.html.twig', 
            ['products' => $em->getRepository(Product::class)->findAll()]
        );
    }
}
