<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="pro.js"></script>
  <link href="style.css" rel='stylesheet' type='text/css' >
  <link href="css/style4.css" rel='stylesheet' type='text/css' >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="css/styleindex.css" rel='stylesheet' type='text/css' >
     <link href="styleabout.css" rel='stylesheet' type='text/css' >
  <title>New Trendz - View details</title>
</head>
<body class="b">


<?php
include 'DBController.php';
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php 

$productResult = $db_handle->runQuery("SELECT * FROM tbl_products WHERE id = 2");
if (! empty($productResult)) {
    ?>
     
        <div id="product-view">
    <?php 
    $productImageResult = $db_handle->runQuery("SELECT * FROM tbl_product_image WHERE product_id = 2");
    if(! empty($productImageResult)) {
    ?> 
            <div class="preview-image">
            <div id="preview-enlarged">
            <img src="<?php echo $productImageResult[0]["preview_source"] ; ?>" />
            </div>
            
            <div id="thumbnail-container">
            <?php foreach($productImageResult as $key=>$value) { 
                $focused = "";
                if($key == 0) {
                    $focused = "focused";
                }
                ?>
                <img class="thumbnail <?php echo $focused; ?>" src="<?php echo $productImageResult[$key]["preview_source"] ; ?>" />
            <?php } ?>
            </div>
        </div>
        <?php } ?>
<div class="product-info">
                <div class="product-title"><?php echo $productResult[0]["name"] ; ?></div>
                <ul>
  <?php
  for($i=1;$i<=5;$i++) {
  $selected = "";
  if(!empty($productResult[0]["average_rating"]) && $i<=$productResult[0]["average_rating"]) {
    $selected = "selected";
  }
  ?>
  <li class='<?php echo $selected; ?>'>&#9733;</li>  
  <?php }  ?>
</ul>
                <div class="product-category"><?php echo $productResult[0]["category"] ; ?>
                
                </div>
                <div><?php echo $productResult[0]["price"] ; ?> USD</div>
                <div><a href="index.php"><button class="btn-info">View Gallery</button></a><button class="btn-info">Add to Cart</button></div>
            </div>      
<?php
}
?>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script>
$("#thumbnail-container img").click(function() {
  $("#thumbnail-container img").css("border", "1px solid #ccc");
    var src = $(this).attr("src");
    $("#preview-enlarged img").attr("src", src);
    $(this).css("border", "#fbb20f 2px solid");
    
});
</script>



</body>
</html>