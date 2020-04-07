<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PublishingController extends AbstractController
{
    public function publishing()
    {
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		substr(str_shuffle($permitted_chars), 0, 16);
	    $number = rand();
        return $this->json(['id' => $number,'Publishing House' => substr(str_shuffle($permitted_chars), 0, 16)]);
    }
}


 ?>
