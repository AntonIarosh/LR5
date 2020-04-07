<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class BascetController
{

    public function getBasket()
    {
        return new Response(
           '<html><body><h1><b> 20 </b></h1>
             <b>ID пользователя</b>: 21 <br/>
			 <b>ID книги </b>: 22 <br/>
			 <b>ID аудио Книга </b>: 23 <br/>
             <b> Общая стоимость </b>: 24  <br/>
			 <b> Количество книг </b>: 25 <br/>
			 <b>Дата</b>: За царя гороха <br/>
             <b>Цена</b>: Бесценная  <br/>
           </body></html>'
       );
    }
}
 ?>
