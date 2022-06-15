<div class="tab-pane fade mt-5 p-3" id="pills-students" role="tabpanel" aria-labelledby="pills-students-tab">

    <ul class="nav nav-tabs" id="myTab" role="tablist">

        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="table-tab" data-bs-toggle="tab" data-bs-target="#table" type="button" role="tab" aria-controls="table" aria-selected="true">Listview</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link primary" id="form-tab" data-bs-toggle="tab" data-bs-target="#form" type="button" role="tab" aria-controls="form" aria-selected="false">Add Students</button>
        </li>
    
    </ul>

    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="table" role="tabpanel" aria-labelledby="table-tab">
            <section style="height:100vh ;" class="content-sect">
                <h2 class="mb-5 mt-3 text-success">Basic Student Information</h2>
                <table class="table table-striped table-bordered table-hover shadow bg-body rounded mb-3">

                    <thead>
                        <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Student Email</th>
                            <th scope="col">Enrollment Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>John</td>
                            <td>Doe</td>
                            <td>jd@email.com</td>
                            <td>2/20/22'</td>
                            <th  style="display:flex; gap:1rem; justify-content:center;" scope="row">
                                <i class="material-icons hide">remove_red_eye</i>
                                <i class="material-icons edit">edit</i>
                                <i class="material-icons delete">delete_forever</i>
                            </th>

                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>Michael</td>
                            <td>Smith</td>
                            <td>ms@email.com</td>
                            <td>6/15/21'</td>
                            <th  style="display:flex; gap:1rem; justify-content:center;" scope="row">
                                <i class="material-icons hide">remove_red_eye</i>
                                <i class="material-icons edit">edit</i>
                                <i class="material-icons delete">delete_forever</i>
                            </th>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>Harry</td>
                            <td>Singleton</td>
                            <td>s.singleton@email.com</td>
                            <td>7/8/19'</td>
                            <th  style="display:flex; gap:1rem; justify-content:center;" scope="row">
                                <i class="material-icons hide">remove_red_eye</i>
                                <i class="material-icons edit">edit</i>
                                <i class="material-icons delete">delete_forever</i>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </section>

         </div>

        
        <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
           <section style="height:100vh ;" class="content-sect">
                <h2 class="mb-5 mt-3 text-success">Basic Student Information</h2>

                <form class="student-form shadow bg-body rounded">

                    <div class="form-input">
                        <label for="firstname">
                            Firstname
                            <span>*</span>
                        </label> 
                        <input type="text" name="firstname" placeholder="Type First Name">
                    </div>

                    <div class="form-input">
                        <label for="lastname">
                            Last Name
                            <span>*</span>
                        </label>
                        <input type="text" name="lastname" placeholder="Type Last Name">
                    </div>

                    <div class="form-input">
                        <label for="email">
                            Email
                            <span>*</span>
                        </label>
                        <input type="text" name="email" placeholder="Type Email">
                    </div>

                    <div class="form-input">
                        <label for="">
                            Class
                            <span>*</span>
                        </label>
                        <input type="text" name="class" placeholder="Type Module Name">
                    </div>

                    <div class="form-input">
                        <label for="phone">
                        Phone No.
                            <span>*</span>
                        </label>
                        <input type="tel" name="phone" placeholder="Enter Phone">
                    </div>

                    <div class="form-input">
                        <label for="dob">
                            D.O.B
                            <span>*</span>
                        </label>
                        <input type="date" name="dob">
                    </div>
                </form>
                <button type="button" name="create-student"  class="btn btn-success mt-5 col-2">Submit</button> 
           </section>
        </div>
        
    </div>
</div>