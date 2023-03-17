<?php
require_once('helpers/helpers.php');
require_once('http/http.php');
$app->get('/pruebas/reduce', function () use ($app) {
  $array = [array("total" => 5), array("total" => 2), array("total" => 8), array("total" => 14), array("total" => 15)];
  $result = array_reduce(
    $array,
    function ($carry, $item) {
      $carry += $item['total'];
      return $carry;
    }
  );

  echo $result;

});
$app->get('/pruebas/array', function () use ($app) {
  $array = array('foo', 'bar', 'baz');
  $prefix = uniqid();

  $array = array_map(function ($elem) use ($prefix) {
    return $prefix . $elem;
  }
    , $array);
  echo json_encode($array, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
  // $array = array('4b3403665fea6foo', '4b3403665fea6bar', '4b3403665fea6baz');
});
$app->get('/pruebas/extract', function () use ($app) {
  $arr = ["name" => "Héctor", "age" => 34];
  extract($arr);
  echo $age . "  " . $name;

});
$app->get('/pruebas/getargs', function () use ($app) {

  FunctionName("Steven Realpe", 41);
});
$app->get('/pruebas/getparam/:id', function ($id) use ($app) {

  echo $id;
});
$app->get('/pruebas/html', function () use ($app) {
  $html = " 
    <label for=\"misurl\">Dinos tu URL:</label>
    <input type=\"url\" id=\"misurl\" list=\"listaurls\" />
    <datalist id=\"listaurls\">
      <label for=\"elemento\">O eligela de la siguiente lista:</label>
      <select id=\"elementos\" name=\"elementos\">
        <option value=\"http://lineadecodigo.com\" label=\"Línea de Código\">
         <option value=\"http://www.manualweb.net\" label=\"Manual Web\">
         <option value=\"http://www.dudasprogramacion.com\" label=\"Dudas de Programación\">
         <option value=\"http://www.w3api.com\" label=\"W3Api\">
       </select>
    </datalist>


    <form oninput=\"resultado.value=parseInt(a.value)+parseInt(b.value)\">
    <input type=\"range\" name=\"b\" value=\"50\" /> +
    <input type=\"number\" name=\"a\" value=\"10\" /> =
    <output name=\"resultado\">60</output>
  </form>

 <script>
 if (navigator.onLine) {
    console.log(\"El usuario está online\");
  }
   else
  {
    console.log(\"El usuario está offline\");
  }


 </script>

    ";

  echo $html;

});

$app->get('/pruebas/group', function () use ($app) {
  $app->response()->header('Content-Type', 'application/json;charset=UTF-8');
  $array = [array("total" => 5, "gender" => "m"), array("total" => 2, "gender" => "m"), array("total" => 8, "gender" => "f"), array("total" => 14, "gender" => "m"), array("total" => 15, "gender" => "f")];
  $result = groupArray($array, "gender");
  echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
});

$app->get('/pruebas/api', function () use ($app) {
  $app->response()->header('Content-Type', 'application/json;charset=UTF-8');
  $url = "https://elitenutapp.com/ventasegmentadas?id_seller=116&fechaI=2021-12-01&fechaF=2022-12-23&category=PERDIDA";
  $result = getApiAuth($url);
  echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
});