<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\SimplementWeb\SettingsBundle\Service\Setting;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Setting $setting)
    {
        $setting->get('key');
        $setting->set('key', 'value');
        $setting->group('key');

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
