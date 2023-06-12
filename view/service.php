<?php
include'../menu/menu.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>services prices</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:20px;
            background-color: darkcyan;
        }
  .price-innerdetail h5 {
        font-weight: 400;
        letter-spacing: 2px;
        font-size: 15px;
        
    }
    
    .price-innerdetail p {
        font-size: 50px;
    }
    
    .detail-pricing {
        border-bottom: 1px solid;
        padding: 30px 0 30px 0;
    }
    
    .detail-pricing .float-left {
        padding: 0 0 0 40px;
    }
    
    .detail-pricing .float-left i {
        position: absolute;
        left: 0;
        font-size: 20px;
    }
    
    .detail-pricing span {
        display: inline-block;
        position: relative;
        font-weight: 400;
    }
    
    .wrap-price {
        background: rgba(32, 33, 36, .1);
        padding: 50px 20px 50px;
        border-radius: 10px;
        color: #fff;
    }
    
    .center-wrap {
        background: #070707;
        color: #fff;
    }
    h3{
        color: white;
    }
    </style>
</head>
<body>
<section id="price-section">
<div class="container">
<div class="row justify-content-center gapsectionsecond">
<div class="col-lg-7 text-center">
<div class="title-big pb-3 mb-3">
<h3>OUR SERVICE PLAN</h3>
</div>

</div>
</div>
<div class="row pt-5">
<div class="col-lg-4 pb-5 pb-lg-0">
<div class="wrap-price">
<div class="price-innerdetail text-center">
<h5>MINIMUM BASIC SERVICE</h5>
<p class="prices">20TK</p>
<div class="detail-pricing">
<span class="float-left"> <i class="bi bi-check2-circle"></i> Cycle Ride Duration </span>
<span class="float-right">1 Hour</span>
</div>
<div class="detail-pricing">
<span class="float-left"> <i class="bi bi-check2-circle"></i> Provide Security</span>
<span class="float-right">Press Alarm Button</span>
</div>
<div class="detail-pricing">
<span class="float-left"> <i class="bi bi-check2-circle"></i> After 1hour Per 5 min(5TK)</span>
<span class="float-right">Charge Including</span>
</div>
<a href="../view/udashbord.php" class="btn btn-secondary mt-5">Booking</a>
</div>
</div>
</div>
<div class="col-lg-4 pb-5 pb-lg-0">
<div class="wrap-price center-wrap">
<div class="price-innerdetail text-center">
<h5>Premium SERVICE</h5>
<p class="prices">50TK</p>
<div class="detail-pricing">
<span class="float-left"> <i class="bi bi-check2-circle"></i> Provide High Quality Cycle </span>
<span class="float-right">1 Hours</span>
</div>
<div class="detail-pricing">
<span class="float-left"> <i class="bi bi-check2-circle"></i> Extra Security </span>
<span class="float-right">Include</span>
</div>
<div class="detail-pricing">
<span class="float-left"> <i class="bi bi-check2-circle"></i> After 1hour Per 10 min(12TK)</span>
<span class="float-right">Charge Include</span>
</div>
<a href="../view/udashbord.php" class="btn btn-secondary mt-5">Booking</a>
</div>
</div>
</div>
<div class="col-lg-4 pb-5 pb-lg-0">
<div class="wrap-price">
<div class="price-innerdetail text-center">
<h5>STANDART SERVICE</h5>
<p class="prices">30TK</p>
<div class="detail-pricing">
<span class="float-left"> <i class="bi bi-check2-circle"></i> Provide Medium Quality Cycle </span>
<span class="float-right">1 Hour</span>
</div>
<div class="detail-pricing">
<span class="float-left"> <i class="bi bi-check2-circle"></i> Extra Security</span>
<span class="float-right">Included</span>
</div>
<div class="detail-pricing">
<span class="float-left"> <i class="bi bi-check2-circle"></i> After 1hour Per 10 min(8TK)</span>
<span class="float-right">Charge Included</span>
</div>
<a href="../view/udashbord.php" class="btn btn-secondary mt-5">Booking</a>
</div>
</div>
</div>
</div>
</div>
</section>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>