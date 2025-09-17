<?php 
session_start(); 
if (isset($_GET['add'])) { 
 $id = $_GET['add']; 
 if (!isset($_SESSION['cart'][$id])) { 
     $_SESSION['cart'][$id] = 1; 
 } else { 
     $_SESSION['cart'][$id]++; 
 } 
 header("Location: gadgets.php"); 
 exit; 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
 <title>Gadgets Store</title> 
 <style> 
     body { 
         font-family: Arial, sans-serif; 
         margin:0; 
         padding:0; 
         background:#f5f6fa; 
     } 
     .header { 
         width: 100%; 
         text-align: center; 
     } 
    .header img { 
 width: 100%; 
 max-height: 250px;   
 object-fit: cover;   
 display: block; 
}   
     .container { 
         width: 90%; 
 
 
         margin: 20px auto; 
     } 
     h2 { 
         text-align: center; 
         margin-bottom: 30px; 
         color:#2d3436; 
     } 
     .products { 
         display: grid; 
         grid-template-columns: repeat(3, 1fr); 
         gap: 20px; 
     } 
     .product { 
         border: 2px solid #74b9ff; 
         border-radius: 10px; 
         padding: 15px; 
         text-align: center; 
         background: #dfe6e9; 
     } 
     .product img { 
         width: 100%; 
         height: 200px; 
         object-fit: contain; 
         border-radius: 10px; 
         margin-bottom: 10px; 
     } 
     .product h3 { color:#0984e3; } 
     .product p { font-size: 16px; font-weight: bold; } 
     .product a { 
         display:inline-block; 
         padding:8px 12px; 
         margin-top:10px; 
         background:#00b894; 
         color:#fff; 
         text-decoration:none; 
         border-radius:5px; 
     } 
     .product a:hover { background:#019874; } 
 </style> 
</head> 
<body> 
 
 
 <div class="header"> 
        <img 
src="https://img.freepik.com/free-vector/electronics-store-template-design_23-2151143831.jpg?s
 emt=ais_hybrid&w=740&q=80" alt="Banner"> 
 </div> 
 <div class="container"> 
     <h2>Available Gadgets</h2> 
     <div class="products"> 
         <div class="product"> 
             <img 
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDwOC6_XLG0gr4PCKqb1CzY
 d1SzD6yb39CkA&s" alt="Laptop"> 
             <h3>Laptop</h3> 
             <p>$10000</p> 
             <a href="gadgets.php?add=1">Add to Cart</a> 
         </div> 
         <div class="product"> 
             <img 
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP4RrV0zPpeBrM5MbO8jkoLrh
 EgoOqZ5ORMA&s" alt="Smartphone"> 
             <h3>Smartphone</h3> 
             <p>$8000</p> 
             <a href="gadgets.php?add=2">Add to Cart</a> 
         </div> 
         <div class="product"> 
             <img 
src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCAafs8don6F6xXoUUu-DK0h
 UkDuIKHjTepw&s" alt="Headphones"> 
             <h3>Headphones</h3> 
             <p>$2000</p> 
             <a href="gadgets.php?add=3">Add to Cart</a> 
         </div> 
     </div> 
 </div> 
 <div style="text-align:center; margin:20px;"> 
     <a href="checkout.php" style="background:#6c5ce7;color:#fff;padding:10px 
20px;border-radius:5px;text-decoration:none;">Go to Checkout</a> 
 </div> 
</body> 
</html>