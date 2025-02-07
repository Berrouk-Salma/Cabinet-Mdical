<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'aside.php'; ?>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'nav.php';?>
 <!-- pop up edit -->
 <div class="menu_1 hamburger_menu">
 <span >
                  <i class="fas fa-bars fa-3x"></i>
              </span>
 </div>
 <?=$data['id_doctor']; ?>

 <div class="edit pop ">
        <form action="<?= URLROOT.DS.'AdminDoctor'.DS.'modifyDoctor/'.$data['id_doctor'] ?>" method="POST">
          <div>
              <label>fullname :</label>
          <input type="text" value="<?php echo $data['fn_doctor'];?>" name="fullname" id="fullname">
          </div>
          <div>
              <label>Birthday :</label>
              <input type="Date" value="<?php echo $data['date_birth'];?>" name="date" id="date">
          </div>
          <div>
              <label>Email :</label>
              <input type="email"value="<?php echo $data['email_doctor'];?>" name="gmail" id="email">
          </div>
          <div>
              <label>password :</label>
              <input type="password" value="<?php echo $data['passwod'];?>" name="password" id="password">
          </div>
          <div>
              <select style="margin-top: 20px;" value="" name="Compence" id="">
                <option selected value="<?php echo $data['type_Compence'];?>"><?php echo $data['type_Compence'];?></option>
                <option value="sickness1">sickness1</option>
                <option value="sickness2">sickness2</option>
                <option value="sickness3">sickness3</option>
                <option value="sickness4">sickness4</option>
              </select>
              
          </div>
          <div>
              <label>
             <img src="<?php echo URLROOT.DS.'public/images/doctor2.png'; ?>" alt=""></label>
          </div>
          <div class="button">
            <button type="submit">Edit</button>
          </div>
        </form>
      </div>
       