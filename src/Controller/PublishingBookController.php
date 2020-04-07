<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PublishingBookController
{

    public function getPublishingBook()
    {
        return new Response(

           '<html><body><h1> Айди жанра <b> айди </b></h1>
             <b>Название</b>: Название <br/>
           </body></html>'
       );
    }
}
 ?>
