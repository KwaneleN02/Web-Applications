
      <div id="forecast-tab">
       
       <h3>Forecast</h3>

       <div class="forecast-content center">
           <div class="forecast-form-container">
             <form class="forecast-form" action="index.php"  method="post">
             <div class="input-fields">

               <label for="calendar">Today's Date</label>
               <input type="date" name="forecastdate">

               <label for="atr">Total Available to Renew</label>
               <input type="number" name="atr">

               <label for="oncall">Total on call</label>
               <input type="number" name="oncall">

               <label for="actualrenewal">Actual Renewals</label>
               <input type="number" name="actualrenewal">

               <input hidden type="number" name="totalforecast">

               <input hidden type="text" name="currentmonth">
             </div>
             
           <button type="submit" name='forecast-submit' class="center waves-effect waves-light btn">Submit</button>
           </form>
            </div>
        </div>
       <button class="center modal-trigger waves-effect waves-light btn">Create forecast</button>
     <div class="table">

     <table class="highlight centered">
         <thead>
           <tr>
               <th>Forecast Owner</th>
               <th>Forecast Date</th>
               <th>Forecast</th>
               <th>Forecast Month</th>
               <th>Action</th>
           </tr>
         </thead>


<!-- This will loop through each result -->
         
         <tbody>
         <?php foreach((array) $forecasts -> getForecast() as $forecast): ?>          
           <tr>
               <td> <?= htmlspecialchars( $forecast[ 'forecastID']); ?>    </td>
               <td> <?= $forecast['forecastdate']; ?>   </td>
               <td> <?= $forecast['totalforecast'] . '%'; ?>  </td>
               <td> <?= $forecast['forecastmonth']; ?>   </td>

               <!-- Delete Button -->
              <form action="index.php" class="delete-form" method="GET">

                <td style="display: flex; justify-content:center; gap:2rem; cursor:pointer;" >
                   
                  <button class="delete" name="deleteid" value="<?=$forecast['forecastID']?>" >
                     <a>                      
                       <i title="Delete" style="color: red;" class="material-icons center" name='deleteforecast'>delete_forever</i>

                     </a>
                  </button>

                 </td>
              </form>

           </tr>   
         <?php endforeach; ?>
         
         </tbody>
         
       </table>
     </div>
   <!---------------------------------------- Forecasts Mobile------------------------- -->
       <div class="forecast-content hide-on-med-and-up">

       </div>
     </div>