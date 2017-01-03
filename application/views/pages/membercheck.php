<!-- === BEGIN CONTENT === -->
                    <div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Register Box -->
                                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                  <?php	$attributes = array('class' => 'email', 'class' => 'signup-page');
                                     echo form_open('check', $attributes);?>
                                        <div class="signup-header">
                                            <h2>Member Confirmation</h2>

                                        </div>
                                        <label>Email</label>
                                        <input class="form-control margin-bottom-20" type="text" name="email">
                                            <div class="col-lg-4 text-right">
                                                <button class="btn btn-primary" type="submit">Confirm</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <!-- End Register Box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
