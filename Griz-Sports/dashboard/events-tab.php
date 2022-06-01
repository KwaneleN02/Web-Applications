<?php require_once './classes/events.classes.php'; ?>

<div id="events-tab">
  <div class="events-content">
    
    <h1>Events and Schedules</h1>

    <!-- Events form -->
     <div class="events-form">
       <form action="" method="post">
         <input type="text" name="event-header" placeholder="event header">
         <input type="text" name="event-body" placeholder="event body">
         <input type="date" name="event-date" placeholder="event date">
        
         <button type="submit" class="center" name="create-event">
           <a class="waves-effect waves-light btn">button</a>
         </button>
       </form>
     </div>

     <!-- Events Table -->
    <?= $events-> executeStatements() ?> 
    <div class="events-table">
    <table class="highlight card centered responsive-table " style="margin-top: 5rem;">
       <thead>
         <tr>
             <th>Event ID</th>
             <th>Event Heading</th>
             <th>Event</th>
             <th>Event Date</th>
             <th>Action</th>
         </tr>
       </thead>

       <tbody>
       <?php foreach((array) $events->allEvents() as $event):?>
         <tr class="center">
           <td><strong> <?= $event['eventID'] ?> </strong></td>
           <td> <strong> <?= $event['eventHeader'] ?> </strong> </td>
           <td> <?= $event['eventBody'] ?> </td>
           <td> <?= $event['eventDate'] ?> </td>

           <td style="display:flex; justify-content:center; gap:3rem; cursor:pointer; padding:20px;" >
                  
           <form class="event-form" action="" method="get" style="display:flex ;">

           <button class="delete" name="delete-event" value="<?= $event['eventID']?>" >
               <a>                      
                 <i title="Delete" style="color: red;" class="material-icons center">delete_forever</i>
               </a>
               
           </button >
           &nbsp; &nbsp; &nbsp;
            <button class="edit" name="edit" value="<?= $event['eventID']?>" >
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