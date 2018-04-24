
<html>
{{$toplam}}
<?php
        $toplam=0;
        ?>
<form action="" method="post">
    {{csrf_field()}}
    <input type="text" name="birinci">
    <input type="text" name="ikinci">
    <input type="submit">
</form>
</html>