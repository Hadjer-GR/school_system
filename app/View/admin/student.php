<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo URLROOT ;?>css/style.css">
        <link rel="icon" href="<?php echo URLROOT ;?>/image/icon3.png" type="image/icon png">

         <link rel="stylesheet" href="<?php echo URLROOT ;?>css/mobile.css" media="(max-width: 700px)">
         <script defer src="<?php echo URLROOT ;?>js/script.js"></script>
    <script defer src="<?php echo URLROOT ;?>js/mobilescreen.js"></script>
    </head>
    <body>
    <?php  require_once"header.php";?>
   
  <section class="home">
      <div class="headermobile">
          <i class='bx bx-menu togglemenu'></i>

          <div class="text texthome">تسجيل</div>
      </div>
    <br>
    <br>


            <!-- fomullaire-->
          <div class="student">
            <form action="<?php echo URLROOT ;?>Students/add" method="post" dir="rtl">
                  <div class="contentstudent">

                
                <div class="user-input1">
                    <label>الاسم</label>
                   <input type="text" required name="f_name" placeholder="  اسم التلميذ  ">     
                  </div>
                  <div class="user-input2">
                    <label>اللقب</label>
                   <input type="text" required name="l_name" placeholder="  اللقب التلميذ ">     
                  </div>

                  

                  <div class="user-input3">
                    <label>تاريخ الازدياد</label>
                   <input type="date" required name="date_birth" placeholder="   تاريخ ازدياد التلميذ ">     
                  </div>


                  <div class="user-input4">
                    <label>اسم الولي</label>
                   <input type="text" required name="parent_n" placeholder="      اسم ولي التلميذ ">     
                  </div>
                  
                  <div class="user-input4">
                    <label>رقم الهاتف</label>
                   <input type="number" required name="parent_nbr" placeholder="  رقم هاتف الولي ">     
                  </div>
 
                  <!--

                   <div class="user-input">
                    <label>شهادة الميلاد</label>
                   <input type="text" required name="milad" placeholder="   شهادة ميلاد التلميذ ">     
                  </div>

                  <div class="user-input">
                    <label> بطاقة التطعيم</label>
                   <input type="text" required name="ta3im"placeholder="  بطاقة التطعيم الخاصة بالتلميذ  ">     
                  </div>
                  <div class="user-input">
                    <label> صورة الشخصية</label>
                   <input type="text" required name="ta3im"placeholder="  بطاقة التطعيم الخاصة بالتلميذ  ">     
                  </div>
                  -->
                 
                  <div class="user-input" placeholder="">
                    <label>القسم   </label>
                   <select name="student_class"> 
                   

                   <?php 
       
       if($_SESSION['id_year_scolaire']){
       $year_id= $_SESSION['id_year_scolaire'];

  
      require_once "../app/Models/section.class.php";
      
      $postmodel=new section;

      $all_class=$postmodel->get_all_class($year_id);

   
      for ($i=0; $i < sizeof($all_class); $i++) { 
       
     
      
      ?>

                    <option value="<?php echo $all_class[$i]->id ?>"> <?php echo $all_class[$i]->n_class ?></option>

                    <?php } }?>



                    </select>     
                  </div>
                </div>
                  <div class="submit">
                    <input type="submit" value="اظافة">
                  </div>

            </form>
         





          </div>
        
         
      
    </section>
  </section>

    </body>
</html>