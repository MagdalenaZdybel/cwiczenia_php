<pre>
<?php
$a=array('pies' => 'burek', 'kot' => 'mruczek');
$b=array('a' =>'2', 'b'=>'7', 'c'=> '5', 'd' => $a);
$c=array('a' =>'2', 'b'=>'7', 'c'=> '5', 'd' => $b);
$d=array('a' =>'2', 'b'=>'7', 'c'=> '5', 'd' => $c);
print_r($d);

//1. Napisz program, który tworzy poniższą tablicę, a następnie wypisuje jej element
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