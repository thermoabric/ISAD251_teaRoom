



<?php
			include 'sqlConnectionString.php';
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
					 <div class="col-lg-4 col-md-6 mb-4">
					<div class="card h-100">
					  
					  <div class="card-body">
						
					   
						<div class="cd-single-item">
						<a href="#0">
							<ul class="cd-slider-wrapper">
								<li><img src="<?php echo $row["img]; ?>" alt="Preview image"></li>
								<li class="selected"><img src="img/thumb-2.jpg" alt="Preview image"></li>
								<li><img src="img/thumb-3.jpg" alt="Preview image"></li>
							</ul>
						</a>

						<div class="cd-customization">
							
							
							<div class="size" data-type="select">
								<ul>
									<li class="small active"style="color:black">Small</li>
									<li class="medium"style="color:black">Medium</li>
									<li class="large"style="color:black">Large</li>
								</ul>
							</div>

							<button class="add-to-cart">
								<em>Add to Cart</em>
								<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
									<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
								</svg>
							</button>
						</div> 
						

						<button class="cd-customization-trigger">Customize</button>
					</div> <!-- .cd-single-item -->

					<div class="cd-item-info">
						<b><a href="#0" style="color:white"><?php echo $row["name]; ?></a></b>$
						<em style="color:white">$<?php echo $row["rrp"]; ?></em>
					</div> <!-- cd-item-info -->
				</li>

				<li>
					<div class="cd-single-item">
						<a href="#0">
							<ul class="cd-slider-wrapper">
								<li class="selected"></li>
								<li><img src="img/thumb-2.jpg" alt="Preview image"></li>
								<li><img src="img/thumb-3.jpg" alt="Preview image"></li>
							</ul>
						</a>

						<div class="cd-customization">
							
							
							<div class="size" data-type="select">
								<ul>
									<li class="small active">Small</li>
									<li class="medium">Medium</li>
									<li class="large">Large</li>
								</ul>
							</div>

							<button class="add-to-cart">
								<em>Add to Cart</em>
								<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
									<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
								</svg>
							</button>
						</div> <!-- .cd-customization -->

						<button class="cd-customization-trigger">Customize</button>
					</div> <!-- .cd-single-item -->		    <!-- cd-item-info -->
				</li>
				  
              
            </div>
          </div>

			
                    <?php
                }
            }
        ?>







