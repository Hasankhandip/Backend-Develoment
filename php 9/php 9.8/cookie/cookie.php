<?php
// $value = 'Dip7575';
// setcookie("TestCookie", $value, time() + 300, 'cookie/my/');
// echo $_COOKIE["TestCookie"];


// setcookie('data', 'Dip Khan', time() + 300, 'cookie/my/');
// echo $_COOKIE['data'];


setcookie('data', 'Dip Khan', time() + 300);
setrawcookie('data2', rawurlencode('Raw Dip Khan'), time() + 300);
setcookie('array2', serialize(array('id' => 1, 'name' => 'Serialize Hasan')), time() + 300);
setcookie("array[id]", 1, time() + 300);
setcookie("array[name]", 'Hasan', time() + 300);

foreach (unserialize($_COOKIE['array2']) as $key => $value) {
    echo $key . " = " . $value . "<br/>";
}
?>


<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>
    alert(Cookies.get('data2'));
</script>