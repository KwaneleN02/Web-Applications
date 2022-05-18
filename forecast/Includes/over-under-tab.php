 <div id="over-under-tab">
        <h3>Over-Under</h3>
           <!------------------------------Form------------------------ ----------------- -->

        <form style=" margin-top:3rem;" class="projection-form" action="index.php"  method="post">
             <div class="input-fields">

               <label for="atr">Total New ARR</label>
               <input type="number" name="new-arr">

               <label for="oncall">Under By:</label>
               <input type="number" name="under-arr">

               <label for="actualrenewal">Over By:</label>
               <input type="number" name="over-arr">

               <label for="reason">Explanation</label>
               <input type="text" name="reason">

               <input hidden type="text" name="currentmonth">
             </div>
           <button type="submit" name='projection-submit' class="center waves-effect waves-light btn">Submit</button>
           </form> 
           <button style="margin-bottom: 5rem; margin-top:3rem;" class="center projection waves-effect waves-light btn">Create Projection</button>
           <p><?= $projection->executeArrStatements() ?></p>

           <!------------------------------Table------------------------ ----------------- -->
        <div class="over-under-content">
            <table class="highlight centered">
              <thead>
                <tr>
                <th> Owner &nbsp;</th>
                <th> Date  &nbsp; </th>
                <th> Projection &nbsp; </th>
                <th> Over &nbsp; </th>
                <th> Under &nbsp; </th>
                <th> Reason &nbsp; </th>
                <th> Action </th>
                </tr>
              </thead>
        
              <tbo>
                 <?php foreach((array) $projection -> getArr() as $allARR): ?>          
                 <tr>
                  <td> <?= $allARR['projectionID'] ?>  </td>
                  <td> <?= date('M') ?>  </td>
                  <td>$ <?= $allARR['arr'] ?>  </td>
                  <td>$ <?= $allARR['projectionover']  ?>  </td>
                  <td>$ <?= $allARR['under'] ?>  </td>
                  <td> <?= $allARR['explanation']  ?>  </td>
                  <td>  </td>
                  <td> </td>

                  <!-- Delete Button -->
                  <form action="index.php" class="delete-form" method="GET">
                    <td style="display: flex; justify-content:center; gap:2rem; cursor:pointer;" >
                    
                      <button class="delete" name="deleteprojectionID" value="<?=$allARR['projectionID']?>" >
                        <a>                      
                        <i title="Delete" style="color: red;" class="material-icons center"   >delete_forever</i>
                        </a>
                      </button>
                    </td>
                  </form>
                 </tr>   
                 <?php endforeach; ?>
              
              </tbo>
         
           </table>
        </div>
       
</div>