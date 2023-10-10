<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // 変数に値を代入する
         $nums=[15, 4, 18, 23, 10 ];
         sort_2way($nums,true);

         function sort_2way($array,$order) {
            if($order){
                echo'昇順にソートします’；
                sort($array);
            } else {
                echo'降順にソートします';
                rsort($array);
            }
            foreach ($array as $value){
            }
        }
        
            
         
         ?>
     </p>
 </body>
 
 </html>

