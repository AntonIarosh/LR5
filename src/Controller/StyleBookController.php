<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class StyleBookController
{

    public function gerStyleBook()
    {
        return new Response(
           '<html><body><h1> Айди жанра <b> 4 </b></h1>
             <b>Название</b>: Название <br/>
			 <b>Айди родительского жанра </b>: 41<br/>
           </body></html>'
       );
    }
}
 ?>
