<?php

// $mysqli = new mysqli("localhost","root","","jour09",3307);

// //var_dump($mysqli);

// $request = $mysqli -> query("select * from etudiants");

// //var_dump($request);

// $request_fetch_all = $request -> fetch_all();

// //var_dump($request_fetch_all);


// // foreach ($request_fetch_all as $key => $value)
// //     //var_dump($key);
// //     //var_dump($value);
// //     echo "
// //     <tbody>
// //             <tr>
// //                 <td>$value</td>
// //             </tr>
// //     </tbody>";

// for ($i=0; isset($request_fetch_all[$i]); $i++){
//     //var_dump($request_fetch_all[$i]);
    
//     foreach ($request_fetch_all[$i] as  $value){
//         //var_dump($key);
//         //var_dump($value);
//         echo "
//         <tbody>
//                 <tr>
//                     <td>$value</td>
//                 </tr>
//         </tbody>";
//     }
// }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Etudiants</title>
    <link href="css/grèce.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    <table border=3>

        <thead>
            <tr>
                <th>ID</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>

        <?php

$mysqli = new mysqli("localhost","root","","jour09",3307);

//var_dump($mysqli);

$request = $mysqli -> query("select * from etudiants");

//var_dump($request);

$request_fetch_all = $request -> fetch_all();

//var_dump($request_fetch_all);


// foreach ($request_fetch_all as $key => $value)
//     //var_dump($key);
//     //var_dump($value);
//     echo "
//     <tbody>
//             <tr>
//                 <td>$value</td>
//             </tr>
//     </tbody>";

for ($i=0; isset($request_fetch_all[$i]); $i++){
    //var_dump($request_fetch_all[$i]);
    
    foreach ($request_fetch_all[$i] as $key => $value){
        //var_dump($key);
        var_dump($value);
        for(x)
        echo "
        <tbody>
                <tr>
                    <td>$key[$i]</td>
                    <td>$value</td>
                </tr>
        </tbody>";
    }
}
?>
    </table>
  </body>
</html>