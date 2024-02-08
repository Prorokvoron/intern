<?php

namespace Tests\Feature;

use App\Http\Classes\SportCar;
use App\Http\Classes\Track;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ClientControllerTest extends TestCase
{

    public  function  testClientUpdateMethod(): void
{
  /**
   * 1 взять запись с таблицы
   * 2 отправить запрос на обновленние
   * 3 провериить что запись изменилась
   * */

    $client = DB::table('clients')->where('clients.id', '=', 1)->first();

//    dump($client->toSql());
}

public function testClientIndexMethod()
{
    /**
     * 1 получить все записи
     * 2 проверить сатус запроса 200
     */
    $response = $this ->getJson(route('clients.index'));
    dump($response->json());

    $response->assertOk();
}

    public function testTrackClass()
    {
        $sportCar= new SportCar(s: 1);
        $sportCar->setSpeedAttribute(2);
        $this->assertTrue($sportCar->getUsers()[0] instanceof \stdClass);

        $a= $sportCar->getUsers();

        $b=array_column($a, 'id');

        //**
        // Сортировка: Сортировка вставками, сортировка Шелла,
        // Шейкерная сортировка, быстрая сортировка, цифровая сортировка
        //
        // 1. Сортировка методом пузырька
        // Берем первый элемент массива и сравниваем его с последующими
        // Если первый эл. массива больше последующего, то переставляем их местами
        //  */

        for ($i=0;$i < count($b)-1; $i++){
            for($j = 0; $j < count($b) - 1 - $i ; $j++){
                if ($b[$j] < $b[$j + 1]){
                $tmp = $b[$j + 1];
                $b[$j + 1] = $b[$j];
                $b[$j] = $tmp;
            }
          }
        }




//    public function testClientUpdateMethod(): void
//    {
//        $client = Client::factory()->create();
//        $this->assertDatabaseHas(Client::class, ['id' => $client->id]);
//        $response = $this->patchJson(route('clients.update', ['client' => $client->id]), [
//            'first_name' => 'test',
//            'phone' => '79246160179'
//        ]);
//        $this->assertDatabaseHas(Client::class,['id' => $client->id, 'first_name' => 'test', 'phone' => '79246160179'] );
//        $response->assertStatus(200);
//    }



  }
  public function testClientControllerIndexMethod()
  {
     $response = $this->getJson(route('clients.index'));
     $response->assertOk();
     dump($response->json());
  }

    public function testClientControllerShowMethod()
    {
        $client = Client::factory()->create();
        $response = $this->getJson(route('clients.show', ['client' => $client->id]));
        $response->assertOk();
        dump($response->json());
  }
  public function testClientControllerUpdateMethod()
  {
      $client = Client::factory()->create();
      $response = $this->patchJson(route('clients.update',['client'=>$client->id]),
      ['last_name'=>'Gig']
      );
      $response->assertOk();
  }

  //public function testClientControllerCreateMethod()
  //{
     // $client = Client::factory()->raw();
      //$response = $this->patchJson(route('clients.creat'));

  //}

}
