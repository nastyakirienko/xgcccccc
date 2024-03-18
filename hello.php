<php
        function isPrime($number) {
        if ($number <= 1) {
return false;
}
for ($i = 2; $i <= sqrt($number); $i++) {
if ($number % $i === 0) {
return false;
}
}
return true;
}
$num = 17;
if (isPrime($num)) {
echo $num . " - простое число";
} else {
echo $num . " - составное число";
}




