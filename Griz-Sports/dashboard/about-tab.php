<?php require_once './classes/about.classes.php'; ?>
<div id="about-tab">

  <div class="about-content">
    
     <h1 class="center">About Us</h1>

     <!-- ABOUT form -->
      <div class="about-form">
        <form action="" method="post">
          <input type="text" name="title" placeholder="Page Title">
          <input type="text" name="slogan" placeholder="Slogan">
          <input type="text" name="body-header" placeholder="headings">
          <textarea id="textarea1" name="paragraph" placeholder="add content" class="materialize-textarea"></textarea>
          <button type="submit" class="center" name="add-content">
            <a class="waves-effect waves-light btn">button</a>
          </button>
        </form>
      </div>

      <!-- ABOUT Table -->
     <?= $getAbout-> executeStatements() ?> 
     <div class="about-table">
     <table class="highlight card centered responsive-table " style="margin-top: 5rem;">
        <thead>
          <tr>
              <th>Content ID</th>
              <th>Page Title</th>
              <th>Slogan</th>
              <th>Heading</th>
              <th>Content</th>
              <th>Action </th>
          </tr>
        </thead>

        <tbody>
        <?php foreach((array) $getAbout->aboutContent() as $about):?>
          <tr class="center">
            <td> <strong> <?= $about['contentID'] ?> </strong> </td>
            <td> <strong> <?= $about['title'] ?> </strong> </td>
            <td> <strong> <?= $about['slogan'] ?> </strong> </td>
            <td> <strong> <?= $about['bodyHeader'] ?> </strong> </td>
            <td> <strong> <?= $about['paragraph'] ?> </strong> </td>
            <td style="display: flex; justify-content:center; gap:2rem; cursor:pointer;" >
                   
            <form class="edit-form" action="" method="get">

            <button class="delete" name="delete-content" value="<?= $about['contentID']?>" >
                <a>                      
                  <i title="Delete" style="color: red;" class="material-icons center">delete_forever</i>
                </a>
            </button>
            &nbsp; &nbsp; &nbsp;
             <button class="edit" name="editContent" value="<?= $about['contentID']?>" >
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