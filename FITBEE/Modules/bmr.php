<?php include 'header.php' ?>
<div class="container-fluid p-0" style="background-image: url('asset/images/gymbg.jpg'); background-size: cover;">

<div class="container-fluid pt-3 pb-5" style="background-color:rgba(245, 144, 49,0.9);">  
<div class="container text-white pt-1 pb-5" >
 <div class="row">
   <div class="col-md-6 pt-4 text-justify">
    <p class="pt-5">
    <strong>Basal Metabolic Rate</strong> is the number of calories required to keep your body functioning at rest. BMR is also known as your body’s metabolism; therefore, any increase to your metabolic weight, such as exercise, will increase your BMR. To get your BMR, simply input your height, gender, age and weight here. Once you’ve determined your BMR, you can begin to monitor how many calories a day you need to maintain or lose weight.


</p>
   <h3 class="pt-3 pb-3">How to estimate your BMR</h3>

<p>One popular way to estimate BMR is through the Harris-Benedict formula, which takes into account weight, height, age, and gender.</p>
<strong>Women:</strong>
<p>BMR = 655 + (9.6 × weight in kg) + (1.8 × height in cm) – (4.7 × age in years)</p>
<strong>Men:</strong>
<p class="pb-5">BMR = 66 + (13.7 × weight in kg) + (5 × height in cm) – (6.8 × age in years)</p>

   </div>
   <div class="col-md-1"></div>
   <div class="col-md-5">
      <h3 class="pt-5 pb-1">CALCULATE YOUR BMR</h3>
     
        <form action="" method="post">
           <h4 style="background-color: var(--themeColor1)" class="text-white p-1">HEIGHT</h4>
          <div class="input-group mb-3">
              <div class="input-group-prepend"> 
                <span class="input-group-text bg-transparent text-white border-0"> FT </span>
              </div>
             <input type="number" name="f" value="5" class="form-control rounded-0" min="2" max="8" required="required">
          </div>
           <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-transparent text-white border-0"> IN </span>
              </div>
         <input type="number" name="i" value="0" class="form-control rounded-0" min="0" max="12" required="required">
          </div>
        
          <h4 style="background-color: var(--themeColor1)" class="text-white p-1">WEIGHT</h4>
           <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-transparent text-white border-0"> KG </span>
              </div>
             <input type="number" name="k" value="60" class="form-control rounded-0" min="15" max="250" required="required">
          </div>
          <div class="text-right"></div>
        
          <h4 style="background-color: var(--themeColor1)" class="text-white p-1">AGE & GENDER</h4>
           <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-transparent text-white border-0"
              >  </span>
              </div>
             <input type="number" name="a" value="20" class="form-control rounded-0" min="10" max="120" required="required" >
             <select name="g" class="form-control rounded-0" >
              <option value="f">FEMALE</option>
              <option value="m">MALE</option>        
          </select>
          </div>
           <h4 style="background-color: var(--themeColor1)" class="text-white p-1">ACTIVITY FACTOR</h4>
           <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-transparent text-white border-0"
              >  </span>
              </div>
<select name="act" class="form-control rounded-0" >
<option value="1.2">little or no exercise</option>
<option value="1.375">light exercise 1-3 days/week</option> 
<option value="1.55">moderate exercise 3-5 days/week</option> 
<option value="1.725">hard exercise 6-7 days a week</option> 
<option value="1.9">very hard exercise & physical job or 2x training</option> 
          </select>
          </div>
          <div class="text-right"></div>
          <br>
          <div class="text-right">
          <button name="calc" type="submit" class="btn text-white rounded-0 p-1 btn-lg" style="background-color: var(--themeColor1)"><img src="asset/images/cal-link-bg.png" height="25px" width="25px"> Calculate </button>
          </div>
        </form> 
          <?php 
            if(isset($_POST['calc'])){
              $f=$_POST['f'] * 30.48;
               $i=$_POST['i'] * 2.54;
               $h=$f+$i;
                $k=$_POST['k'];
                $a=$_POST['a'];
                $act=$_POST['act'];
if($_POST['g']=='f')
$bmr= (10 * $k) + (6.25 * $h) - (5 * $a) - 161;
else
$bmr=(10 * $k) + (6.25 * $h) - (5 * $a) +5;
$bmr1= number_format($bmr,2);

if($_POST['act']=='1.2')
 $calneed = number_format($bmr*1.2,2);
elseif($_POST['act']=='1.375')
 $calneed = number_format($bmr*1.375,2);
elseif($_POST['act']=='1.55')
 $calneed = number_format($bmr*1.55,2);
elseif($_POST['act']=='1.725')
 $calneed = number_format($bmr*1.725,2);
else
  $calneed = number_format($bmr*1.9,2);

echo "<br/><div class='mt-2 alert alert-success text-capitalized text-dark'> <i class='icofont-user-alt-1 text-dark icofont-2x'> </i> Your BMR is <strong>$bmr1</strong> Calories/Day<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your total daily calorie need is <strong>$calneed</strong> kcal</div>";

          }
        ?>
   </div>
 </div>
</div>
</div>
</div>
<div class="container pt-5 pb-5">
 <div class="row">
    <div class="col text-justify">
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header bg-white">
      <h2 class="mb-0">
        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" style="font-size:large; text-decoration: none;" aria-expanded="false" aria-controls="collapseOne">
          What Is Basal metabolic rate ?
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body text-justify">
     <p>  Even when resting, your body burns calories by performing basic functions to sustain life, such as: </p>
<ul>
<li>breathing
<li>circulation</li>
<li>nutrient processing</li>
<li>cell production</li></ul><p>Basal metabolic rate is the number of calories your body needs to accomplish its most basic (basal) life-sustaining functions</p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header bg-white" >
      <h2 class="mb-0">
        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" style="font-size:large;" aria-expanded="false" aria-controls="collapseTwo">
           Why you might want to know your BMR 
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
 <p>    
Your BMR can be used to help you gain, lose, or maintain your weight. By knowing how many calories you burn, you can know how many to consume. To put it simply:</p>
<ul>
<li>Is your goal to maintain your weight? Consume the same number of calories that you burn.</li>
<li>Is your goal to gain weight? Consume more calories than you burn.</li>
<li><a href="dietPlan.php">Is your goal to lose weight?</a> Consume fewer calories than you burn.</li></ul>
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header bg-white" >
      <h2 class="mb-0">
        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" style="font-size:large;" aria-expanded="false" aria-controls="collapseThree">
          How many calories you need everyday 
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
 <p> To determine your total daily calorie needs, multiply your BMR by the appropriate activity factor, as follows:</p>
<ul>
<li>If you are sedentary (little or no exercise) : Calorie-Calculation = BMR x 1.2</li>
<li>If you are lightly active (light exercise/sports 1-3 days/week) : Calorie-Calculation = BMR x 1.375</li>
<li>If you are moderatetely active (moderate exercise/sports 3-5 days/week) : Calorie-Calculation = BMR x 1.55</li>
<li>If you are very active (hard exercise/sports 6-7 days a week) : Calorie-Calculation = BMR x 1.725</li>
<li>If you are extra active (very hard exercise/sports & physical job or 2x training) : Calorie-Calculation = BMR x 1.9</li></ul>
<p><h5>Total Calorie Needs</h5> Example :
If you are sedentary, multiply your BMR (1745) by 1.2 = 2094. This is the total number of calories you need in order to maintain your current weight

<p>Once you know the number of calories needed to maintain your weight, you can easily calculate the number of calories you need to eat in order to gain or lose weight.  </p>
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header bg-white">
      <h2 class="mb-0">
        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" style="font-size:large;" aria-expanded="false" aria-controls="collapseFour">
            Takeaway 
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body text-justify">
     <p>
Understanding your BMR, your typical activity level, and the amount of calories you need daily to maintain your weight are important ways for you to actively participate in your physical health.</p>
<p>Whether you need to gain weight, maintain your current weight, or lose weight, calculating your BMR is a good place to start.</p>
      </div>
    </div>
  </div>
</div>
      

    </div>
  </div>
</div>

 <?php include 'footer.php'   ?>
