<!-- === BEGIN CONTENT === -->
                    <div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Register Box -->
                                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
																		<?php	$attributes = array('class' => 'email', 'class' => 'signup-page');
                                       echo form_open('Superclass/postitem', $attributes);?>
                                        <div class="signup-header">
                                            <h2><?php echo $head;?></h2>

                                        </div>
																				<?php echo validation_errors(); ?>
																				<label>Category</label>
																				<select class="form-control margin-bottom-20" name="category">
                                              <option value="news">News</option>
                                              <option value="articles">Articles</option>
                                              <option value="activity">Activity</option>
                                              <option value="activity">Quote of the day</option>
                                        </select>
                                        <label>Title</label>
                                        <input class="form-control margin-bottom-20" type="text" name="title">
                                        <label>Content</label>
																				<textarea class="form-control margin-bottom-20" rows="15" cols="50" name="content">

                                        </textarea>
                                        <label>Date
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" type="date" name="date">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Author
                                                    <span class="color-red">*</span>
                                                </label>
                                                <input class="form-control margin-bottom-20" type="text" name="author">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Thumb
                                                    <span class="color-red">*</span>
                                                </label>
                                                <input class="form-control margin-bottom-20" type="file">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <label class="checkbox">
                                                    <input type="checkbox">Read the
                                                    <a href="#">Update Instructions</a>
                                                </label>
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <button class="btn btn-primary" type="submit">Update</button>
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
