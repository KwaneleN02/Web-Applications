 <div class="charts" style="d">
     
  <div class="forecast-charts" style="display: flex;">
       <div class="dash-canvas">
         <strong class="card-title black-text ">Daily Stats</strong>
           <div style="padding: 20px;" class="card can">
             <canvas id="weekly-forecast" width="450" height="500"></canvas>
           </div>
     </div>

     <div class="dash-canvas">
       <strong class="card-title black-text"> <?= date('M') ?> Stats</strong>
       <div style="padding: 20px;" class="card can">
        <canvas id="monthly-forecast" width="450" height="500"></canvas> 
       </div>
     </div>
  </div>

   <div class="new-arr-charts">
    <div class="dash-canvas">
       <strong class="card-title black-text"> <?= date('M') ?> Stats</strong>
       <div style="padding: 20px;" class="card can">
        <canvas id="arr-chart" width="450" height="500"></canvas> 
       </div>
     </div>
   </div>
 </div>