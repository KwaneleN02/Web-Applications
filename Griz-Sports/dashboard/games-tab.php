<?php require_once './classes/featured-games.classes.php'; ?>

<div id="games-tab">
  
  <div class="games-content">
    
    <h1>Events and Schedules</h1>

    <!-- Games form -->
     <div class="games-form">
       <form action="" method="post">
         <input type="text" name="game" placeholder="add game">

         <button type="submit" class="center" name="add-game">
           <a class="waves-effect waves-light btn">button</a>
         </button>
       </form>
     </div>

     <!-- Games Table -->
    <?= $getGames->executeStatements() ?> 
    <div class="games-table">
    <table class="highlight card centered responsive-table " style="margin-top: 5rem;">
       <thead>
         <tr>
             <th>Game ID</th>
             <th>Game Name</th>
             <th>Action</th>
         </tr>
       </thead>

       <tbody>
       <?php foreach((array) $getGames->allGames() as $games):?>
         <tr class="center">
           <td><strong> <?= $games['gameID'] ?> </strong></td>
           <td> <strong> <?= $games['game'] ?> </strong> </td>

           <td style="display:flex; justify-content:center; gap:3rem; cursor:pointer; padding:20px;" >
                  
           <form class="game-form" action="" method="get" style="display:flex ;">

           <button class="delete" name="delete-game" value="<?= $games['gameID']?>" >
               <a>                      
                 <i title="Delete" style="color: red;" class="material-icons center">delete_forever</i>
               </a>
               
           </button >
           &nbsp; &nbsp; &nbsp;
            <button class="edit" name="edit" value="<?= $games['gameID']?>" >
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