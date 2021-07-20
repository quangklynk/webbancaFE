				<div class="container-right">
					<?php foreach ($list as $row) : ?>
						<div class="product-item">
							<a style="text-decoration: none" href="<?php echo base_url('product/view/' . $row->id) ?>">

								<div class="img-product">
									<img src="<?php echo products_url() ?><?php echo $row->Image ?>" alt="" />
								</div>
								<div class="info-product">
									<h5 class="name-product">
										<?php echo $row->ProductName ?>
									</h5>

									<div class="money">
										<p class="price-product">
											<?php echo $row->Price ?>
										</p>
										<div class="adv-pro">
											<?php if ($row->Remark == 0) : ?>
												<img src="<?php echo imgs_url() ?>/xe.png" alt="">
											<?php endif; ?>
										</div>
									</div>
									<div class="specifications">

										<div class="about-pro">
											<p><i class="fas fa-eye"></i>: <span class="viewer"><?php echo $row->view ?></span></p>
										</div>
										<div class="about-pro">
											<p class="distributor"><?php echo $row->Distributor ?></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					<?php endforeach ?>
				</div>
				<div class="pagination">
					<?php echo $this->pagination->create_links() ?>
				</div>

				<script>
					$(document).ready(function() {
						let x = document.querySelectorAll(".price-product");
						for (let i = 0, len = x.length; i < len; i++) {
							let num = Number(x[i].innerHTML).toLocaleString("en");
							x[i].innerHTML = num;
							x[i].classList.add("currSign");
						}
						if ($(".product-item").length == 0) {
							$("#error-label").css("display", "unset");
						} else {
							$("#error-label").css("display", "none");
						}
					});
				</script>