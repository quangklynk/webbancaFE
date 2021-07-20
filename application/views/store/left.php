<div class="container-left">
	<div class="title-left">
		<h2>THƯƠNG HIỆU</h2>
	</div>
	<br>
	<div class="menu-left-cover">
		<ul class="menu-left">
			<?php foreach ($catalog_list as $row) : ?>
				<li>
					<!-- <label id="" class="">
						<a href="<?php echo base_url('product/catalog/' . $row->id) ?>" title="<?php echo $row->CategoryName ?>"><?php echo $row->CategoryName ?></a>
					</label> -->
					<button class="dropdown-btn">
						<?php echo $row->CategoryName ?>
					</button>
					<?php if (!empty($row->subs)) : ?>
						<!-- lay danh sach danh muc con -->
						<ul class="catalog-sub">
							<?php foreach ($row->subs as $sub) : ?>
								<li>
									<a href="<?php echo base_url('product/catalog/' . $sub->id) ?>" title="<?php echo $sub->CategoryName ?>">
										<?php echo $sub->CategoryName ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</li>
			<?php endforeach ?>
		</ul>
		<script>
			$(document).ready(function() {
				$(".dropdown-btn").click(function(e) {
					let curren_tab = $(this).next();
					$(curren_tab).slideToggle();
					
				});
			});
		</script>
	</div>
</div>