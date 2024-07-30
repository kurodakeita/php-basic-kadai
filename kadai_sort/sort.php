<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
       
       function sort_2way($order){
        if ($order[0]<$order[1]) {
        echo '昇順にソートします'."<br>";
        foreach( $order as $order){
          echo $order."<br>";
         }
        }else{
        echo '降順にソートします'."<br>";
        foreach( $order as $order){
          echo $order."<br>";}}}

    $order = [15, 4, 18, 23, 10 ];
       sort($order);
          sort_2way($order);

          $order = [15, 4, 18, 23, 10 ];
          rsort($order);
             sort_2way($order);

        ?>
    </p>
</body>

</html>