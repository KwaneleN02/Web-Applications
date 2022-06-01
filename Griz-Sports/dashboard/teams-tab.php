<?php require_once './classes/teams.classes.php' ?>
<div id="teams-tab">
  <div class="teams-content">
    
     <h1>Hello Teams</h1>

     <!-- Teams form -->
      <div class="teams-form">
        <form action="" method="post">
          <input type="text" name="firstname" placeholder="Firstname">
          <input type="text" name="lastname" placeholder="Lastname">
          <input type="text" name="gamertag" placeholder="Gamertag">
          <input type="text" name="game" placeholder="Game">
          <input type="text" name="gamerStats" placeholder="GamerStats">
          <button type="submit" class="center" name="create-team">
            <a class="waves-effect waves-light btn">button</a>
          </button>
        </form>
      </div>

      <!-- Teams Table -->
     <?= $teams-> executeAllStatements() ?> 
     <div class="teams-table">
     <table class="highlight card centered responsive-table " style="margin-top: 5rem;">
        <thead>
          <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Gamertag</th>
              <th>Game</th>
              <th>GamerStats</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
        <?php foreach((array) $teams->allTeams() as $team):?>
          <tr class="center">
            <td> <strong> <?= $team['Firstname'] ?> </strong> </td>
            <td> <?= $team['Lastname'] ?> </td>
            <td> <?= $team['Gamertag'] ?> </td>
            <td> <?= $team['Game'] ?> </td>
            <td> <?= $team['GamerStats'] ?> </td>
            <td style="display: flex; justify-content:center; gap:2rem; cursor:pointer;" >
                   
            <form class="gamers-form" action="" method="get">

            <button class="delete" name="deleteid" value="<?= $team['gamerID']?>" >
                <a>                      
                  <i title="Delete" style="color: red;" class="material-icons center" name='deleteforecast'>delete_forever</i>
                </a>
                
            </button>

             <button class="edit" name="edit" value="<?= $team['gamerID']?>" >
                <a>                      
                  <i title="Edit Field" style="color: grey;" class="material-icons center">edit</i>
                </a>
                
             </button>

            </form>

            </td>
          </tr>
          <?php endforeach ?>
      </table>
            
     </div>
  </div>
</div>