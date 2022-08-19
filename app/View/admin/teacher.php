<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT ;?>css/style.css">
        <link rel="icon" href="<?php echo URLROOT ;?>/image/icon3.png" type="image/icon png">
         <link rel="stylesheet" href="<?php echo URLROOT ;?>css/mobile.css" media="(max-width: 700px)">
         <script defer src="<?php echo URLROOT ;?>js/script.js"></script>
    <script defer src="<?php echo URLROOT ;?>js/mobilescreen.js"></script>
    <title>Amal</title>
</head>
<body>
<?php  require_once"header.php";?>


<script>
      // banner

  const showBanner = (selector) => {
        	  hideBanners();
        	  // Ensure animation plays even if the same alert type is triggered.
        	  requestAnimationFrame(() => {
        	    const banner = document.querySelector(selector);
        	    banner.classList.add("visible");
        	  });
        	};

        	const hideBanners = (e) => {
        	  document
        	    .querySelectorAll(".banner.visible")
        	    .forEach((b) => b.classList.remove("visible"));
        	};
        	

    </script>










<section class="home">
      <div class="headermobile">
          <i class='bx bx-menu togglemenu'></i>

          <div class="text texthome">تسجيل</div>
      </div>

      <?php if(isset($msg[0]) && $msg[0]!="error"){
      
  
      ?>
          <script>  showBanner('.banner.success');</script> 
          <?php  } if(isset($msg[0]) && $msg[0]=="error"){?>

            <script>    showBanner('.banner.error'); </script> 

          <?php } ?>

          <div class="banners-container" dir="ltr">
  <div class="banners" dir="ltr">
  <div class="banner error">
      <div class="banner-message" dir="ltr">
      <span class="banner-icon">
      <i class='bx bx-error-circle' style="height:48px ; width:48px;"></i>
      </span>
      <?php if(isset($msg[0]) && $msg[0] =="error"){
      
      echo $msg[1]; }
       ?>
            </div>
      <div class="banner-close" onclick="hideBanners()"><i class='bx bx-x'></i></div>
    </div>
    <div class="banner success">
      <div class="banner-message" dir="ltr">
       <span class="banner-icon">
    <i class='bx bx-check'></i>
      </span>
      
      <?php if(isset($msg) && $msg[0] !="error"){
      
     echo $msg[0]; }
      ?>  </div>
      <div class="banner-close" onclick="hideBanners()"><i class='bx bx-x'></i></div>
    </div>
   
  </div>
</div>
 <br>
 <br>




            <!-- fomullaire-->
          <div class="student">
            <form action="<?php echo URLROOT ;?>Teachers/add" method="post" dir="rtl">
                  <div class="contentstudent">

                
                <div class="user-input1">
                    <label>الاسم</label>
                   <input type="text" required name="f_name" placeholder="  اسم الموظف  ">     
                  </div>
                  <div class="user-input2">
                    <label>اللقب</label>
                   <input type="text" required name="l_name" placeholder="  اللقب الموظف ">     
                  </div>
         
                  <div class="user-input4">
                    <label>رقم الهاتف</label>
                   <input type="text" required name="number" placeholder="  رقم هاتف الموظف ">     
                  </div>
 
                  <div class="user-input4">
                    <label>المبلغ الشهري </label>
                   <input type="number" required name="price" step="0.001" placeholder="    المبلغ الشهري ">     
                  </div>
 
                
                  <div class="user-input" placeholder="">
                    <label>المهنة    </label>
                   <select name="job" required> 
                    <option value=" (ة) استاذ">  استاذ(ة)</option>
                    <option value=" مهني عامل">عامل مهني   </option>

                    </select>     
                  </div>
                 
                 
                 
                </div>
                  <div class="submit">
                    <input type="submit" value="اظافة">
                  </div>

            </form>
         





          </div>
        
         
      
    </section>




</body>
</html>