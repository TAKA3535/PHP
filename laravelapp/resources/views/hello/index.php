<!-- 3-12 P68 -->
<html>

<head>
   <title>Hello/Index</title>
   <style>
      body {
         font-size: 16pt;
         color: #999;
      }

      h1 {
         font-size: 100pt;
         text-align: right;
         color: #f6f6f6;
         margin: -50px 0px -100px 0px;
      }
   </style>
</head>

<body>
   <!-- <h1>Index</h1>
   <p>This is a sample page with php-template.</p>
   <h2>test</h2> -->

   <!-- 3-5 P63 -->
   <h1>Index</h1>
   <!-- コントローラ(3-6)からレンダリングように渡された連想配列の中から同じ名前のキーを探して値が自動的に代入される -->
   <p><?php echo $msg; ?></p>
   <p><?php echo date("Y年n月j日"); ?></p>
   <!-- 3-7 P65 -->
   <p>ID=<?php echo $id; ?></p>
</body>

</html>