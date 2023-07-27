<?php include 'header.php' ?>
<?php 
if(!isset($_SESSION['uid'])){
echo "<script>window.alert('Login First');window.location='login.php?food=1';</script>"; }
 ?>
<div class="conatiner-fluid" style="background:url('asset/images/banner.jpg')";>
<div class="text-white text-center pt-5 pb-5" style="background-color: rgba(0,0,0,0.5); height: 100%;">	
	<h3 class="pt-5 text-capitalize">Let us know what's in your plate</h3>
<p class="pb-5"> <a href='index.php' class="text-decoration-none text-white"> Home </a> / food </p>

</div>	
		</div>

<div class="container pt-5 pb-5" style="min-height: 650px">
<h3>	Find Nutritional Value of a Product</h3>
<p class="text-justify">Nutrition plays a great role in our daily life. The food or liquids affect our body and health because each food or liquid contain particular nutrition which is very necessary for our physical and mental growth. A particular level of any particular nutrition is essential for our body. So we should know that what food we have to take, how much and what type of nutrition contain a particular food. Nutritional facts labels provide information on the food we choose to eat and feed to others.</p>

<div class="container p-0" style="background-image: url('asset/images/foodbg.jpg'); background-size: cover;">
<div class="container-fluid pt-4 pb-5 text-white" style="background-color: rgba(0,0,0,0.4); height: 100%;">    
<div class="row">	
	<div class="col-md-8 pt-5"> 
        <h5 class="pb-2 pt-4 pl-5">Enter a food name to find its nutrition information.</h5>
 <div class="input-group mb-3 pt-2 pl-5 ">
  <input name="query" id="query" type="text" class="form-control" placeholder="10oz onion , a tomato, mashed potatoes, 70g cheese" required="required">
  <div class="input-group-append" >
    <button class="btn text-white " style="background-color:var(--themeColor2);" type="button" onclick="result()">Submit</button>
</div>
</div>
	</div>
</div>
</div></div>

<br>    
<table class="table table-sm pt-5" id="result">
</table>
</div>	

<?php include 'footer.php' ?>
<script>
	function result(){
var query =document.getElementById('query').value; 
document.getElementById('result').innerHTML=""; 
$.ajax({
    method: 'GET',
    url: 'https://api.calorieninjas.com/v1/nutrition?query=' + query,
    headers: { 'X-Api-Key': 'FqKVxc3GjZW/ZailXeC+qQ==jjrD4f4UgbDp2Jnl'},
    contentType: 'application/json',
    success: function(result) {
        console.log(result);
        if(result.items.length<=0)
          $("#result").append("<tr class='table-warning'><td class='text-uppercase' colspan='2'>No Record Found </td></tr>");  
        console.log(result.items[0]);
        $.each(result.items[0],function(key,values){
        		k=key.replace('_',' ');
        		k1=key.replace('_',' ');
				$("#result").append("<tr><td class='text-uppercase'>"+k1+"</td><td>"+values+"</td></tr>");
			});
    },
    error: function ajaxError(jqXHR) {
        console.error('Error: ', jqXHR.responseText);
    }
});
}
</script>
