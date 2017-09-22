<div id="content">
    <div class="container">
        <div class="row margin-vert-30">
            <!-- Register Box -->
            <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                <?php	$attributes = array('class' => 'email', 'class' => 'signup-page');
                echo form_open('edit', $attributes);?>
                <div class="signup-header">

                    <h2>Edit Details</h2>

                    <span><?php //try {echo $message;} catch (Exception $e) {}  ?></span>
                </div>
                <label>Name</label>
                <input class="form-control margin-bottom-20" type="text" name="name" value="<?php if (isset($name)){echo $name;} ?>" required>
                <label>Email Address</label>
                <input class="form-control margin-bottom-20" type="text" name="email" value="<?php if (isset($email)){ echo $email;} ?>" required>
                <label>Phone Number
                </label>
                <input class="form-control margin-bottom-20" type="text" name="phone" value="<?php if (isset($phone)){ echo $phone; } ?>" required>
                <label>Course
                </label>
                <input class="form-control margin-bottom-20" name="course" type="text" value="<?php if (isset($course)){ echo $course;} ?>" required>
                <label>Registration Number
                </label>
                <input class="form-control margin-bottom-20" type="text" name='regno' value="<?php if (isset($regno)){ echo $regno;} ?>" required>

                <label>Year</label>
                <select id="year" class="form-control margin-bottom-20" name="year_of_study" required>
                    <option value="1">First</option>
                    <option value="2">Second</option>
                    <option value="3">Third</option>
                    <option value="4">Fourth</option>
                    <option value="5">Fifth</option>
                    <option value="6">Sixth</option>
                    <option value="7">Associates</option>
                </select>
                <label>Residence</label>
                <select id="reside" class="form-control margin-bottom-20" name="residence" required>
                    <option value="1">Gate A</option>
                    <option value="2">Gate B</option>
                    <option value="3">Gate C</option>
                    <option value="4">Gate D</option>
                    <option value="5">Baraka</option>
                    <option value="6">Across Thika Road</option>
                    <option value="7">Oasis</option>
                    <option value="7">School Hostels</option>
                </select>
                <label>Gender</label>
                <select id="gender" name="gender" required>
                    <option value="M">Male</option>
                    <option value="F">Female</option>

                </select>

                <div class="row">
                    <div class="col-lg-8">
                        <label class="checkbox">
                            <input type="radio" id ='1' name="baptismal_status" required value='1' >Baptised </input>

                        </label>
                        <label class="checkbox">
                            <input type="radio" id ='2' name="baptismal_status" required value='2' >Not Baptised

                        </label>
                    </div>
                    <div class="col-lg-4 text-right">
                        <button class="btn btn-primary" type="submit">Register</button>
                    </div>
                </div>

            </div>
            </form>
        </div>
        <!-- End Register Box -->
    </div>
</div>





<script type="text/javascript">
    document.getElementById("year").value = '<?php if (isset($yos)){ echo $yos; } ?>'
    document.getElementById("gender").value = '<?php if (isset($gender)){ echo $gender; } ?>'
    document.getElementById("reside").value = '<?php if (isset($residence)){ echo $residence; } ?>'
    document.getElementById("<?php if (isset($baptismal_status)){ echo $baptismal_status; } ?>").checked = true;
</script>