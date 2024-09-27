<!DOCTYPE html>
<html>
    <head>
        <tittle>hello php</tittle>
    </head>
        <body>
            <form method="post">
            <label for="position">enter your work position</label>
            <input type="text" id="position">
            <button type="submit">submit</button>
        </form>
        <?php
$work=$_POST["position"];
if($work==manager){
    echo 'welcome manager';
}
elseif($work==CEO){
    echo "Welcome Boss";
}
elseif($work==employee){
    echo "Hello employee";
}
else{
echo "invalid input";
}
?>
        </body>
</html>