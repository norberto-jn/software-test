Descrição:

Implemente uma função que receba um número inteiro positivo e retorne o
somatório de todos os valores inteiros divisíveis por 3 ou 5 que sejam inferiores ao
número passado.



## Dart

**1.  cd dart/**

**2.  dart pub get**

**3.  dart matchcalc_test.dart** 

     

```dart
class MatchCalc {

  static int getTotalDivisibleBy3Or5(num) {
    int total = 0;

    for (var number = 0; number < num; number++)
      if (number % 3 == 0 || number % 5 == 0) total += number;

    return total;
  }

}
```



## Node

**1. cd node/**

**2. npm i**

**3. npm run test**



```javascript
function  getTotalDivisibleBy3Or5(num) {

    let total = 0

    for (let number = 0; number < num; number++)
        if (number % 3 == 0 || number % 5 == 0)
            total += number
    return total
}

console.log( getTotalDivisibleBy3Or5(10))

module.exports = { getTotalDivisibleBy3Or5 }
```



## PHP

**1.  cd php/**

**1.  composer install**

**2. ./vendor/bin/phpunit main.test.php --colors** 

  

```php
<?php

function getTotalDivisibleBy3And5($num)
{
    $total = 0;


	for ($number = 0; $number < $num; $number++)
        if ($number % 3 == 0 || $number % 5 == 0)
            $total += $number;

	return $total;


}

echo getTotalDivisibleBy3And5(11);
```
