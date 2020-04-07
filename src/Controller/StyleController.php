<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StyleController extends AbstractController
{
    public function style()
    {
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

		substr(str_shuffle($permitted_chars), 0, 16);
		
	    $number = rand();
        return $this->json(['id_Style' => $number , 'Style' => substr(str_shuffle($permitted_chars), 0, 16)]);
	}
}
 ?>