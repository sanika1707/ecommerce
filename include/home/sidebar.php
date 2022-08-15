<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Vollkorn:ital,wght@1,500&display=swap" rel="stylesheet">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet"> -->

</head>
<body>
<section>
		<div class="container"  style="font-family:'Vollkorn', serif; " >
			<div class="row"  style="font-size:20px">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
                        <div class="list-group">
                        <?php                            
                            $q = "Select * from category order by title asc";
                            $r = mysqli_query($conn,$q);

                            if($r){
                                while($row = mysqli_fetch_array($r)){
                                    echo '<b><a href="category.php?filter='.$row['title'].'" class="list-group-item">'.$row['title'].'</a><b>';
                                }
                            }
                        ?>                    
                        </div> 
                        <!--/category-products-->
                        </div>
                        </div
</body>
</html>

