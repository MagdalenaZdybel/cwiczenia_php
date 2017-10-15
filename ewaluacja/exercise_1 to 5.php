<pre>
<?php

$animals=array('pies' => 'burek', 'kot' => 'mruczek');
$number=array('a' => '2', 'b' => '7', 'c' => '5', 'd' => $animals);
$nextnumber=array('a' => '2', 'b' => '7', 'c' => '5', 'd' => $number);
$anodernumber=array('a' => '2', 'b' => '7', 'c' => '5', 'd' => $nextnumber);

print_r($anodernumber);

// Napisz program, który tworzy poniższą tablicę, a następnie wypisuje jej element
//oznaczony kluczem 'kot'.
//'pies' => 'burek'
//'kot' => 'mruczek'
//2. Rozbuduj ten program tak, aby następnie była tworzona tablica, która w trzech
//pierwszych elementach zawiera liczby 2, 7 i 5, a w czwartym elemencie zawiera
//tablicę z punktu pierwszego.
//3. Rozbuduj ten program tak, aby następnie była tworzona tablica, która w trzech
//pierwszych elementach zawiera liczby 2, 7 i 5, a w czwartym elemencie zawiera
//tablicę z punktu drugiego.
//4. Rozbuduj ten program tak, aby następnie była tworzona tablica, która w trzech
//pierwszych elementach zawiera liczby 2, 7 i 5, a w czwartym elemencie zawiera
//tablicę z punktu trzeciego.
//5. Rozbuduj ten program tak, aby na koniec wypisywał zawartość tablicy z punktu 4.

 ?>
