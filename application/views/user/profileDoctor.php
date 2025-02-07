<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'user.nav.php';?>
<!-- <div class="menu_1" >
    <span >
            <i class="fas fa-bars fa-3x"></i>
    </span>
</div> -->

<div class="profile_container">
      <div class="media">
        <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'img'.DS.'doctor.svg';?>" alt="profile" />
        <div class="button">
        <a href="<?= URLROOT.DS.'User'.DS.'getDoctor/'.$data[0]['id_doctor']; ?>"><button id="editBtn">Edit Info</button></a>
          
        </div>
      </div>
      <div class="info">
        <h1><?=$data[0]['fn_doctor'];?></h1>
        <h4><?=$data[0]['date_birth'];?></h4>
        <h3><?=$data[0]['email_doctor'];?></h3>
        <h3>specialete:<?=$data[0]['type_Compence'];?></h3>
      </div>
    </div>

   
      <div class="edit pop">

        <form>
        <div>
            <label>Phone :</label>
        <input class="vide" type="tel" name="phone" id="phone">
        </div>
        <div>
            <label>Birthday :</label>
            <input class="vide" type="Date" name="date" id="date">
        </div>
        <div>
            <label>Email :</label>
            <input class="vide" type="email" name="email" id="email">
        </div>
        <div>
            <label>Address :</label>
            <input class="vide" type="text" name="address" id="address">
        </div>
        <div>
            <label>
        <img src="/assets/images/icon/newimg.png" alt=""></label>
        </div>
        <div class="button">
        <button class="valider" >Valider</button>
        </div>
        </form>
        <div class="close">
        <img src="/assets/images/icon/close.png">
    </div>
    </div>
    


        <div class="planing_doc">
            <div class="header_plan">
                <h1>Planing</h1>
                <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'img'.DS.'icon'.DS.'planinig.svg';?>">
            </div>
            <div class="table">
                <div class="header_profil">
                    <h3>Profile</h3>
                    <h3>User Name</h3>
                    <h3>Email</h3>
                    <h3>Descreption</h3>
                </div>
                
                
            </div>
            <div class="table">
                <?php foreach($data[1] as $patients):?>
                <div>
                    <form>
                    <img alt="profil" src="<?= URLROOT.DS.'public'.DS.'images'.DS.'img'.DS.'patient1.svg';?>"></td>
                    <h5><?=$patients['fn_patient'];?></h5>
                    <h5><?=$patients['email_patient'];?></h5>
                    <button>Show Profile</button>
                    </form>
                </div>
                <?php endforeach;  ?>
                
            </div>
            
        </div>

        <div id="showp" class="profile_container  pop">
            
            <div class="media">
            <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'img'.DS.'patient1.svg';?>" alt="profile" />
            </div>
            <div class="info">
                <h1>Ramon Ridwan</h1>
                <h4>08/09/1999</h4>
                <h3>Phone :</h3>
                <h3>Address :</h3>
                <h3>Email :</h3>
                <h3>Amrad :</h3>
            </div>
            <div>
                <form>
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>Descreption</th>
                        </tr>
                        <tr>
                            <td>Avril,Monday 2019</td>
                            <td>had khotna mrida chi merd  :) !</td>
                        </tr>
                        <tr>
                            <td>Avril,Monday 2019</td>
                            <td>had khotna mrida chi merd  :) !</td>
                        </tr>
                    </table>
                    <div class="send">
                        <input type="text" placeholder="Write here..." >
                        <img src="<?= URLROOT.DS.'public'.DS.'images'.DS.'img'.DS.'icon'.DS.'send.png';?>" >
                    </div>
                </form>
            </div>
            <div class="close ">
                <img src="/assets/images/icon/close.png">
            </div>
        </div>
        <script>
        let editBtn = document.getElementById("editBtn");
        let edit = document.querySelector('.edit.pop');
        let showBtn = document.getElementById('show');
        let showprofile = document.querySelector('#showp');
        let close = document.querySelectorAll(".close");
        let valider = document.querySelectorAll(".valider");
        let vider = document.querySelectorAll(".vider");


    

      

    editBtn.addEventListener('click',()=>{
        edit.style.display="block";
    });
 
    showBtn.addEventListener('click',(e)=>{
        e.preventDefault();
        showprofile.style.display="block";
        

    });
    close.forEach((e) => {

e.addEventListener("click",(event)=>{
    event.preventDefault();
    edit.style.display="none";
    showprofile.style.display="none";
});
});


    valider.forEach(function (el) {
    el.addEventListener("click",(event)=>{
    
    
    vider.forEach(function (el) {
    el.value = "";
    

    });
    
});
    
});
            

</script>
<?php require_once VIEWS_PATH.DS.'views.inc'.DS.'user.footer.php';?>