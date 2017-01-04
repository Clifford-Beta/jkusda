<?php   $this->load->view('templates/header'); ?>
 <!-- === BEGIN CONTENT === -->
                    <div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <div class="col-md-6 col-md-offset-3 col-xs-height col-full-height ">

 <?php	

 $attributes = array('class' => 'email', 'class' => 'signup-page');
                                    echo form_open('register', $attributes);?>
                                        <div class="signup-header">
                                            <h2>Member Registration</h2>
                                            <p>Already a member? Click
                                                <a href="<?php echo site_url('member')?>"> HERE </a>to check your details</p>
                                        </div>
                                        <label>First Name</label>
                                        <input class="form-control margin-bottom-20" type="text" name="fname" required>
                                        <label>Last Name</label>
                                        <input class="form-control margin-bottom-20" type="text" name="lname" required>
                                        <label>Email Address
                                        </label>
                                        <input class="form-control margin-bottom-20" type="text" name="email" required>
                                        <label>Phone Number
                                        </label>
                                        <input class="form-control margin-bottom-20" type="text" name="phone" required>
                                        <label>Course
                                        </label>
                                        <input class="form-control margin-bottom-20" name="course "type="text" required>
                                        <label>Registration Number
                                        </label>
                                        <input class="form-control margin-bottom-20" type="text" name='regno' required>

                                        <label>Year</label>
																				<select class="form-control margin-bottom-20" name="year_of_study" required>
                                              <option value="1">First</option>
                                              <option value="2">Second</option>
                                              <option value="3">Third</option>
                                              <option value="4">Fourth</option>
                                              <option value="5">Fifth</option>
                                              <option value="6">Sixth</option>
                                              <option value="7">Associates</option>
                                        </select>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <label class="checkbox">
                                                    <input type="radio" name="baptismal_status" required value='1'>Baptised </input>

                                                </label>
                                                <label class="checkbox">
                                                    <input type="radio" name="baptismal_status" required value='2'>Not Baptised

                                                </label>
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <button class="btn btn-primary" type="submit">Register</button>
                                            </div>
                                        </div>
                                    </form> 

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                         <?php 
                         $this->load->view('templates/footer');
                         ?>           