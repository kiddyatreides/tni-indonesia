<h3>Berikan Feedback ke Mabes TNI</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<?php echo form_open_multipart('admin/feedbackprocess'); ?>
                    		<?php echo form_open('admin/feedbackprocess'); ?>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Judul</label>
									<div class="col-sm-4">
										<input type="text" class="form-control1" id="inputQty" placeholder="Judul" name="judul">
									</div>
								</div>
								<br><br>
								<div class="form-group">
									<label for="inputAmount" class="col-sm-2 control-label">Isi Feedback</label>
				                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               					<div class="col-sm-8">
										<textarea type="text" class="form-control1" id="inputQty" placeholder="Isi" name="isi" style="width: 400px; height: 150px"> </textarea>
									</div>
								</div><br><br><br><br><br><br>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Kualitas</label>
									<div class="col-sm-2"><select name="selector1" id="selector1" class="form-control1">
										<option>Baik</option>
										<option>Buruk</option>
									</select></div>
								</div>

									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
										<br>
											<button class="btn-success btn" type="submit">Submit</button>
											<button class="btn-default btn" type="reset">Cancel</button>
										</div>
									</div>
							</form>
						</div>
					</div>