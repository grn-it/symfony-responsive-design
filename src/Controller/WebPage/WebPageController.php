<?php

declare(strict_types=1);

namespace App\Controller\WebPage;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route(
    methods: ['GET'],
    condition: "request.headers.get('accept') contains 'text/html'"
)]
class WebPageController extends AbstractController {}
