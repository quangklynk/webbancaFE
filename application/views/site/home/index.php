	<h4>Một Số Sản phẩm mới của shop</h4>
			<div class="section group">
				<?php foreach ($product_newest as $row): ?>
					<div class="card-group">
						<div class="col-sm-3">
							<div class="card">
								<a href="<?php echo base_url('product/view/'.$row->id)?>" class="grid_1_of_4 images_1_of_4 products-info">
									<img src="<?php echo $row->image?>" />
									<div class="info"> 
										<div class="price-product__ten"><?php echo $row->name_pro?></div>
										<div class="price-product">
											<?php if($row->discount > 0):?>
					                              <?php $price_new = $row->price - ( $row->price*$row->discount)/100;?>
					                              <?php echo number_format($price_new)?> đ <span class="price_old"><?php echo number_format($row->price)?> đ</span>
									              <?php else:?>
									                <?php echo number_format($row->price)?> đ
									              <?php endif;?>
											
										</div>
										<div class="price-product__discount">
												<p style="float:left;margin-left:10px">Lượt xem: <b><?php echo $row->view?></b></p>
	                      						 <a title="Mua ngay" href="" class="button">Mua ngay</a>
	                      						 <div class="clear"></div>
											</div>
										<center>
		                          			<div class='raty' style='margin:10px 0px' id='9' data-score='4'>
		                          			</div>
	                        			</center>
									</div>
								</a>
							</div>
						</div>
					
				</div>
				<?php endforeach ?>
			</div>
			<h4>Sản phẩm được mua nhiều</h4>
			<div class="section group">
				<?php foreach ($product_buy as $row): ?>
					<div class="card-group">
						<div class="col-sm-3">
							<div class="card">
								<a href="<?php echo base_url('product/view/'.$row->id)?>" class="grid_1_of_4 images_1_of_4 products-info">
									<img src="<?php echo $row->image?>" />
									<div class="info"> 
										<div class="price-product__ten"><?php echo $row->name_pro?></div>
										<div class="price-product">
											<?php if($row->discount > 0):?>
					                              <?php $price_new = $row->price - ( $row->price*$row->discount)/100;?>
					                              <?php echo number_format($price_new)?> đ <span class="price_old"><?php echo number_format($row->price)?> đ</span>
									              <?php else:?>
									                <?php echo number_format($row->price)?> đ
									              <?php endif;?>
											
										</div>
										<div class="price-product__discount">
												<p style="float:left;margin-left:10px">Lượt mua: <b><?php echo $row->buyed ?></b></p>
	                      						 <a title="Mua ngay" href="" class="button">Mua ngay</a>
	                      						 <div class="clear"></div>
											</div>
										<center>
		                          			<div class='raty' style='margin:10px 0px' id='9' data-score='4'>
		                          			</div>
	                        			</center>
									</div>
								</a>
							</div>
						</div>
					
				</div>
				<?php endforeach ?>
			</div>
			
	