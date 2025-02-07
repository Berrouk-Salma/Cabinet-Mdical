
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'user.nav.php';?>
<div class="profile_container">
      <div class="media">
        <img src="<?php echo URLROOT.DS.'public/images/img/patient.png'; ?>" alt="profile" />
        
        <div class="button">
          <button id="reserveBtn">Reserve</button>
          <a href="<?= URLROOT.DS.'User'.DS.'getPatient/'.$data['id_patient']; ?>"><button id="editBtn">Edit Info</button></a>
        </div>
      </div>
      <div class="info">
        <h1><?=$data['fn_patient'];?></h1>
        <h4><?=$data['date_birth'];?></h4>
        <h3>Email :<?=$data['email_patient'];?></h3>
        <h3>sickness :<?=$data['type_sickness'];?></h3>
      </div>
    </div>

    <div style="display: none;" class="reserve pop">
        
      <form>
        <div>
          <img src="assets/images/icon/calendar.svg" alt="calendar" />

          <label for="date"> Date :</label
          ><input class="vide"
            type="date"
            id="date"
            name="date"
            value="2022-07-22"
            min="2022-01-01"
            max="2026-12-31"
          />
        </div>
        <div>
          <img src="assets/images/icon/time.svg" alt="hour" />

          <label for="time"> Time :</label
          ><input class="vide"
            type="time"
            id="time"
            name="time"
            value="8:00"
            min="09:00"
            max="18:00"
            required
          />
        </div>
        <div>
          <img src="assets/images/icon/stethoscope.svg" alt="speciality" />

          <label for="speciality"> Speciality :</label>
          <select class="vide" name="speciality">
            <option value="none" selected>Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">other</option>
          </select>
        </div>
        <div class="button">
          <button class="valider" >valider</button>
        </div>
      </form>
      <div class="close">
        <img src="/assets/images/icon/close.png">
    </div>
    </div>
      
     
      
    </div>

    <script>
      let editBtn = document.getElementById("editBtn");
      let edit = document.querySelector('.edit.pop');
      let reserve = document.querySelector('.reserve.pop');
      let showBtn = document.getElementById('show');
      let reserveBtn = document.getElementById('reserveBtn');
      let close = document.querySelectorAll(".close");
      let valider = document.querySelectorAll(".valider");
      let vider = document.querySelectorAll(".vider");

  

    

  editBtn.addEventListener('click',()=>{
      edit.style.display="block";
  });

  reserveBtn.addEventListener('click',(e)=>{
      e.preventDefault();
      reserve.style.display="block";
      

  });
  close.forEach((e) => {

e.addEventListener("click",(event)=>{
    event.preventDefault();
    edit.style.display="none";
    reserve.style.display="none";
});
});


  

valider.forEach(function (el) {
  el.addEventListener("click",(event)=>{
      console.log("rer");
   
    vider.forEach(function (el) {
      el.value = "";
      console.log("rer");

    })
  

    
});
    
});


</script>

<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'user.footer.php';?>
