<?php include 'header.php' ?>
<div class="container-fluid p-0" style="background-image: url('asset/images/gymbg.jpg'); background-size: cover;">

<div class="container-fluid pt-4 pb-5" style="background-color:rgba(245, 144, 49,0.9); ">  
<div class="container text-white pt-2 pb-5 " >
 <div class="row">
   <div class="col-md-6 ">
     
   <h3 class="pt-5 pb-5"> BMI CALCULATOR CHART</h3>
   <table class="pt-5 pb-3 table text-white w-75">
     <tr><th>B M I</th>
         <th>Weight Status</th>
     </tr>
     <tr><td>Below 18.5</td><td>Underweight</td></tr>
      <tr><td>18.5 - 24.9</td><td>Healthy</td></tr>
      <tr><td>25.0 - 29.9</td><td>Overweight</td></tr>
      <tr><td >30.0 and Above</td><td>Obese</td></tr>

   </table>
   <p class="pt-5"><strong>*BMI</strong> Body Mass Index</p>

   </div>
    <div class="col-md-1"></div>
   <div class="col-md-5">
      <h3 class="pt-5 pb-1">CALCULATE YOUR BMI</h3>
      <p class="pb-2">BMI (body mass index) is a measure of whether you're a healthy weight for your height. Use this BMI calculator to check the adults in your family.
     </p>
        <form action="" method="post">
           <h3 style="background-color: var(--themeColor1)" class="text-white p-1">HEIGHT</h3>
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
<input type="number" name="i" value="0" class="form-control rounded-0" min="0" 
max="12" required="required">         
          </div>
          <br>
          <h3 style="background-color: var(--themeColor1)" class="text-white p-1">WEIGHT</h3>
           <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-transparent text-white border-0"> KG </span>
              </div>
             <input type="number" name="k" value="60" class="form-control rounded-0" min="15" max="250" required="required">
          </div>
          <div class="text-right">
          <button name="calc" class="btn text-white rounded-0 p-1 btn-lg" style="background-color: var(--themeColor1)"><img src="asset/images/cal-link-bg.png" height="25px" width="25px">  Calculate </button>
          </div>
        </form> 
        <?php 
          if(isset($_POST['calc'])){
            $f=$_POST['f'] * 0.3048;
             $i=$_POST['i'] * 0.0254;
             $h=$f+$i;
              $k=$_POST['k'];
          $bmi=number_format(($k/($h*$h)),2);
          if($bmi<18.5)
            echo "<br/><div class='mt-2 alert alert-success text-capitalized'> <i class='icofont-sad text-danger icofont-2x'> </i> <strong>You are Underweight .Your BMI is $bmi</strong></div>";
          elseif($bmi>18.6 && $bmi<24.9)
            echo "<br/><div class='mt-4 alert alert-success text-capitalized'> <i class='icofont-simple-smile text-success icofont-2x'> </i> <strong> You are Healthy .  Your BMI is $bmi </strong></div>";
          elseif ($bmi>25.0 && $bmi<29.9) 
            echo "<br/><div class='mt-4 alert alert-success text-capitalized'> <i class='icofont-worried text-warning icofont-2x'> </i><strong>You are Overweight . Your BMI is $bmi</strong></div>";
          else
            echo "<br/><div class='mt-2 alert alert-success text-capitalized'> <i class='icofont-expressionless text-danger icofont-2x'> </i><strong>You are Obese . Your BMI is $bmi</strong> </div>";  
          
          }
        ?>

   </div>
 </div>
</div>
</div>
</div>
<div class="container pt-5 pb-5">
 <div class="row">
    <div class="col">
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header bg-white">
      <h2 class="mb-0">
        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" style="font-size:large; text-decoration: none;" aria-expanded="false" aria-controls="collapseTwo">
          What Is Body Mass Index?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body text-justify">
     <p>  Body mass index (BMI) is an estimate of body fat based on height and weight. It doesn’t measure body fat directly, but instead uses an equation to make an approximation. BMI can help determine whether a person is at an unhealthy or healthy weight.</p>
<p>
A high BMI can be a sign of too much fat on the body, while a low BMI can be a sign of too little fat on the body. The higher a person’s BMI, the greater their chances of developing certain serious conditions, such as heart disease, high blood pressure, and diabetes. A very low BMI can also cause health problems, including bone loss, decreased immune function, and anemia.</p>
<p>
While BMI can be useful in screening children and adults for body weight problems, it does have its limits. BMI may overestimate the amount of body fat in athletes and other people with very muscular bodies. It may also underestimate the amount of body fat in older adults and other people who have lost muscle mass.</p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header bg-white">
      <h2 class="mb-0">
        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" style="font-size:large; text-decoration: none;" aria-expanded="false" aria-controls="collapseTwo">
          How to calculate Body Mass Index?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body text-justify">
     <p>  
Body Mass Index is a simple calculation using a person’s height and weight. The formula is BMI = kg/m2 where kg is a person’s weight in kilograms and m2 is their height in metres squared.

A BMI of 25.0 or more is overweight, while the healthy range is 18.5 to 24.9. BMI applies to most adults 18-65 years.

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header bg-white" >
      <h2 class="mb-0">
        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" style="font-size:large;" aria-expanded="false" aria-controls="collapseThree">
         Who shouldn't use a BMI calculator ?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
       BMI is not used for muscle builders, long distance athletes, pregnant women, the elderly or young children. This is because BMI does not take into account whether the weight is carried as muscle or fat, just the number. Those with a higher muscle mass, such as athletes, may have a high BMI but not be at greater health risk. Those with a lower muscle mass, such as children who have not completed their growth or the elderly who may be losing some muscle mass may have a lower BMI. During pregnancy and lactation, a woman's body composition changes, so using BMI is not appropriate.
      </div>
    </div>
  </div>
</div>
      

    </div>
  </div>
</div>

 <?php include 'footer.php'   ?>