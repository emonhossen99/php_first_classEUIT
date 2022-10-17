<?php

// question 1
        
        $cake1 = 'black forest';
        $cake2 = 'Vanilla cake';
        $cake3 = 'Red Velvet';
        $cake4 = 'Lemon Sponge Cake';
        $cake5 = 'Chocolate Cake';

        echo("<h1>All Cake flavors</h1>");
        
 echo( "<span>This Name is : </span>".$cake1 ."</br>". "<span>This Name is : </span>".$cake2 ."</br>". "<span>This Name is : </span>". $cake3 ."</br>" ."<span>This Name is : </span>".$cake4."</br>" ."<span>This Name is : </span>". $cake5."</br>" );

// question 2
 // perCakePrice
        $cake1Price = 180;
        $cake2Price = 150;
        $cake3Price = 220;
        $cake4Price = 165;
        $cake5Price = 170;

// transportation cost
$transportationCost = 150;

//space cost
$spaceCost = 50;

// staff cost
$staffCost = 60;
// perCakePrice and transportation cost
  $singleCake1Pst = ($cake1Price + $transportationCost) * 3/100;
  $singleCake2Pst = ($cake2Price + $transportationCost) * 3/100;
  $singleCake3Pst = ($cake3Price + $transportationCost) * 3/100;
  $singleCake4Pst = ($cake4Price + $transportationCost) * 3/100;
  $singleCake5Pst = ($cake5Price + $transportationCost) * 3/100;


// per cake prices
$caKas1 = $cake1Price + $transportationCost + $spaceCost  +$staffCost + $singleCake1Pst;
$caKas2 = $cake2Price + $transportationCost + $spaceCost  +$staffCost + $singleCake2Pst;
$caKas3 = $cake3Price + $transportationCost + $spaceCost  +$staffCost + $singleCake3Pst;
$caKas4 = $cake4Price + $transportationCost + $spaceCost  +$staffCost + $singleCake4Pst;
$caKas5 = $cake5Price + $transportationCost + $spaceCost  +$staffCost + $singleCake5Pst;


echo("<h1>Total inventory cost for each cake per pound</h1>");
echo( "<span>Black Forest Price : </span>".$caKas1 ."</br>". "<span>Vanilla cake Price :</span>".$caKas2 ."</br>". "<span>Red Velvet Price : </span>". $caKas3 ."</br>" ."<span>Lemon Sponge Cake Price : </span>".$caKas4."</br>" ."<span>Chocolate Cake Price : </span>". $caKas5."</br>" );


// question 3
// code of selling price 
// per cake prices without discount
$selPrice1 = 780;
$selPrice2 = 600;
$selPrice3 = 800;
$selPrice4 = 650;
$selPrice5 = 660;


echo("<h1>Selling price before discount for each cake per 
pound</h1>");
echo( "<span>Black Forest Price : </span>".$selPrice1 ."</br>". "<span>Vanilla cake Price :</span>".$selPrice2 ."</br>". "<span>Red Velvet Price : </span>". $selPrice3 ."</br>" ."<span>Lemon Sponge Cake Price : </span>".$selPrice4."</br>" ."<span>Chocolate Cake Price : </span>". $selPrice5."</br>" );

//question 4
// per cake prices with discount

  $singleSelPrice1Pst = $selPrice1 * 5/100;
  $singleSelPrice2Pst = $selPrice1 * 5/100;
  $singleSelPrice3Pst = $selPrice1 * 7/100;
  $singleSelPrice4Pst = $selPrice1 * 7/100;
  $singleSelPrice5Pst = $selPrice1 * 7/100;
  

$selPriceWOutD1 = $selPrice1 - $singleSelPrice1Pst;
$selPriceWOutD2 = $selPrice2 - $singleSelPrice2Pst;
$selPriceWOutD3 = $selPrice3 - $singleSelPrice3Pst;
$selPriceWOutD4 = $selPrice4 - $singleSelPrice4Pst;
$selPriceWOutD5 = $selPrice5 - $singleSelPrice5Pst;


echo("<h1>Selling price after discount for each cake per 
pound</h1>");
echo( "<span>Black Forest Price : </span>".$selPriceWOutD1 ."</br>". "<span>Vanilla cake Price :</span>".$selPriceWOutD2 ."</br>". "<span>Red Velvet Price : </span>". $selPriceWOutD3 ."</br>" ."<span>Lemon Sponge Cake Price : </span>".$selPriceWOutD4."</br>" ."<span>Chocolate Cake Price : </span>". $selPriceWOutD5."</br>" );

echo("<h1>All Resolved By Md Emon Hoosen @2022</h1>");
?>
