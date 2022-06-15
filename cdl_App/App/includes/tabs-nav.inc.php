

<section class="container-fluid">

    <nav class="navbar d-flex flex-column bg-body shadow rounded">

       <div style="gap:5rem; width:100%; display:flex;" class="mb-4"> 
            <!-- Search form -->
            <form style="width:100%; display:flex; gap:5rem; align-items:center; justify-content:center; "  class="mb-3">

                <div style=" width:50%;" class="input-group">

                    <span class="input-group-text" id="basic-addon1"> <i class="material-icons">search</i></span>

                    <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="basic-addon1">
                </div>
                  <!-- Dropdown -->
                <div class="btn-group">
                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Options
                        </button>
                        <ul class="dropdown-menu">
                            <li style="text-align:center;"> <a style="color:black ; text-decoration:none" href="#">Profile</a> </li>
                            <li style="text-align:center;"> <a style="color:black ; text-decoration:none" href="#">Achievements</a> </li>
                            <li style="text-align:center;"> <a style="color:black ; text-decoration:none" href="#">Invoices</a> </li>
                        </ul>
                    </div>
            </form>
          
       </div>

        <!-- Nav-Tab Linkks -->
        <ul style="width:80%;"  class="nav nav-pills mb-3 d-flex" id="pills-tab" role="tablist">
                    
            <li style="display:flex ; align-items:center; gap:5px;" class="nav-item" role="presentation">
                <i class="material-icons">dashboard</i>
                <button class="nav-link active" id="pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#pills-dashboard" type="button" role="tab" aria-controls="pills-dashboard" aria-selected="true">Dashboard</button>
            </li>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <li style="display:flex ; align-items:center; gap:5px;" class="nav-item" role="presentation">
                <i class="material-icons">people</i>
                <button class="nav-link" id="pills-students-tab" data-bs-toggle="pill" data-bs-target="#pills-students" type="button" role="tab" aria-controls="pills-students" aria-selected="false">Students</button>
            </li>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <li style="display:flex ; align-items:center; gap:5px;" class="nav-item" role="presentation">
                <i class="material-icons">person</i>
                <button class="nav-link" id="pills-professor-tab" data-bs-toggle="pill" data-bs-target="#pills-professor" type="button" role="tab" aria-controls="pills-professor" aria-selected="false">Professors</button>
            </li>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <li style="display:flex ; align-items:center; gap:5px;" class="nav-item" role="presentation">
                <i class="material-icons">book</i>
                <button class="nav-link" id="pills-courses-tab" data-bs-toggle="pill" data-bs-target="#pills-courses" type="button" role="tab" aria-controls="pills-courses" aria-selected="false">Courses</button>
            </li>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <li style="display:flex ; align-items:center; gap:5px;" class="nav-item" role="presentation">
                <i class="material-icons">insert_drive_file</i>
                <button class="nav-link" id="pills-library-tab" data-bs-toggle="pill" data-bs-target="#pills-library" type="button" role="tab" aria-controls="pills-library" aria-selected="false">Library</button>
            </li>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

        </ul>
    </nav>

</section>