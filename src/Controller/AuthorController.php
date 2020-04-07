<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class AuthorController
{

    public function getAuthor()
    {
        return new Response(
           '<html><body><h1><b>Иванов Ивано Иванович</b></h1>
             <b>ID</b>: 12<br/>
			 <b>ID автора </b>: 13 <br/>
			 <b>ID Жанра </b>: 14 <br/>
             <b> Название </b>: Горе от ума <br/>
			 <b>ID издательства </b>: 15 <br/>
             <b>Дата издания</b>: За царя гороха <br/>
             <b>Тип обложки</b>: Не виданная <br/>
             <b>Цена</b>: Бесценная  <br/>
           </body></html>'
       );
    }
}
 ?>
