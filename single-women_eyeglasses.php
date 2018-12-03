<?php
 get_header();
?>
<div class="container product-box">
    <?php
    $uploads  = wp_upload_dir();
	$upload_path = $uploads['baseurl'];
    if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$meta = get_post_custom($post->ID);
		$onSale = $meta['onSale_box'][0];
		$onSaleDiscount = $meta['onSaleDiscount_box'][0];
        $name = $meta['name_box'][0];
		$brand = $meta['brand_box'][0];
		$price = $meta['price_box'][0];
		$SKU = $meta['sku_box'][0];
		$material = $meta['material_box'][0];
		$gender = $meta['gender_box'][0];
		$colorsNumber = $meta['cNumber_box'][0];
		$colorsNames = $meta['cNames_box'][0];
		$colorImages = $meta['cImages_box'][0];
		$colorIDs = $meta['cIDs_box'][0];
		$sizeNumber = $meta['sNumber_box'][0];
		$sizeOptions = $meta['sOptions_box'][0];
		$shape = $meta['shape_box'][0];
		$rim = $meta['rim_box'][0];
		$thumbnail = $meta['thumbnail_box'][0];

        echo '<nav aria-label="breadcrumb">';
            echo '<ol class="breadcrumb">';
                echo '<li class="breadcrumb-item"><a href="http://eye/"><i class="icon icon-home"></i></a></li>';
                echo '<li class="breadcrumb-item "><a href="http://eye/vancouver-women-eyeglasses/">Women Eyeglasses</a></li>';
                echo '<li class="breadcrumb-item d-none d-md-inline-block active">'.$brand.'</li>';
                echo '<li class="breadcrumb-item active">'.$name.'</li>';
            echo '</ol>';
        echo '</nav>';

       echo '<div class="row d-sm-none d-md-none d-lg-none">';
               echo '<ul class="list-inline mx-auto">';
					$imgIDs = [];
					$imgIDs = explode(',', $colorIDs);
					$reversedIDs = array_reverse($imgIDs);
					$IDcounter = 0;
					foreach ($reversedIDs as $value) {
						echo '<li class="c-options" id="'.trim ($value).'" data-target="#carousel-we-0" data-slide-to="'.$IDcounter.'">';
						echo '<div class="c1"></div>';
						echo '<div class="c2"></div>';
					echo '</li>';
					$IDcounter++;
					}

					 echo '</ul>';
         echo '<div class="col-12">';
          echo '<div id="carousel-we-0" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">';
                  echo '<div class="carousel-inner">';
                $images = [];
                $images = explode(',', $colorImages);
                $reversed = array_reverse($images);
                $counter = 0;
                foreach ($reversed as $value) {
                    if($counter==0){
                        echo'<div class="carousel-item active">';
                        echo '<img class="d-block w-100" src="'.$upload_path.'/singlee/'.$value.'" title="Vancouver Best Online Affodable Women Eyeglasses"  alt="Vancouver Best Online Affodable Women Eyeglasses">';
                     echo'</div>';
                    }else{
                        echo'<div class="carousel-item">';
                        echo '<img class="d-block w-100" src="'.$upload_path.'/singlee/'.$value.'" title="Vancouver Best Online Affodable Women Eyeglasses"  alt="Vancouver Best Online Affodable Women Eyeglasses">';
                     echo'</div>';
                    }
                    $counter++;
                }
					   echo '</div>';
                 echo '</div>';
        	echo '</div>';

		echo '</div>';

        echo '<div class="row">';
            echo '<div class="col-md-4 left-box">';
    ?>
<div class="row">
    <table class="table table-details table-borderless">

  <tbody>
    <tr>
      <td class="align-middle"><?php echo '<h4 class="p-brand" id="oBrand">'.$brand.'</h4>';  ?></td>
      <td class="align-middle"><?php  echo '<h4 class="p-name" id="oName">'.$name.'</h4>'; ?></td>
    </tr>
    <tr>
      <td class="align-middle"><h4 class="p-label">Price</h4></td>
      <td class="align-middle"><?php echo '<h4 class="p-fee" id="oPrice">$'.$price.'.00</h4>'; ?></td>
    </tr>
      <tr>
      <td class="align-middle"><h4 class="p-label">Available in</h4></td>
      <td class="align-middle"><?php echo '<span class="item-var">'.$colorsNumber.'</span><span class="p-label">  Colors</span>'; ?></td>
    </tr>

              <tr class="d-none d-sm-block">
      <td class="align-middle" style="min-width:160px;">	<?php
        echo '<ul class="list-inline"> ';
					$imgIDs = [];
					$imgIDs = explode(',', $colorIDs);
					$reversedIDs = array_reverse($imgIDs);
					$IDcounter = 0;
					foreach ($reversedIDs as $value) {
						echo '<li class="c-options" id="'.trim ($value).'" data-target="#carousel-we" data-slide-to="'.$IDcounter.'">';
						echo '<div class="c1"></div>';
						echo '<div class="c2"></div>';
					echo '</li>';
					$IDcounter++;
					}

					 echo '</ul>';
              ?></td>
    </tr>
   <tr>
      <td class="align-middle"><h4 class="p-label">Available in</h4></td>
      <td class="align-middle"><?php echo '<span class="item-var">'.$sizeNumber.'</span><span class="p-label">  Sizes</span>'; ?></td>
    </tr>
  </tbody>
</table>
<table class="table size-table">
	<tr>
		<th id="frame-bridge"><img src="http://eye/img/lens-width.png" class="d-block w-100" alt="Vancouver Best Affortable Online Eyeglasses"></th>
		<th><img src="http://eye/img/lens-width.png" class="d-block w-100" alt="Vancouver Best Affortable Online Eyeglasses"></th>
		<th><img src="http://eye/img/lens-width.png" class="d-block w-100" alt="Vancouver Best Affortable Online Eyeglasses"></th>
		<th><img src="http://eye/img/lens-width.png" class="d-block w-100" alt="Vancouver Best Affortable Online Eyeglasses"></th>
		<th><img src="http://eye/img/lens-width.png" class="d-block w-100" alt="Vancouver Best Affortable Online Eyeglasses"></th>
	</tr>
 <?php
 $sizes = [];
 $sizez = explode('],[', $sizeOptions);
  foreach ($sizez as $item) {
	 $item = trim($item,'[]');
	 list($a, $b, $c, $d, $e) = explode(',', $item);
	 echo '<tr>';
	 echo '<td>'.$a.'</td>';
	 echo '<td>'.$b.'</td>';
	 echo '<td>'.$c.'</td>';
	 echo '<td>'.$d.'</td>';
	 echo '<td>'.$e.'</td>';
	 echo '</tr>';
 }
 ?>
<tr>
    <th class="text-center"> <a role="button" class="btn btn-help-o" data-toggle="popover" data-container="body" data-placement="bottom" data-html="true" id="lensw"><i class="icon icon-question"></i></a></th>
    <th class="text-center"> <a role="button" class="btn btn-help-o" data-toggle="popover" data-container="body" data-placement="bottom" data-html="true" id="lensw"><i class="icon icon-question"></i></a></th>
    <th class="text-center"> <a role="button" class="btn btn-help-o" data-toggle="popover" data-container="body" data-placement="bottom" data-html="true" id="lensw"><i class="icon icon-question"></i></a></th>
    <th class="text-center"> <a role="button" class="btn btn-help-o" data-toggle="popover" data-container="body" data-placement="bottom" data-html="true" id="bridge"><i class="icon icon-question"></i></a></th>
    <th class="text-center"> <a role="button" class="btn btn-help-o" data-toggle="popover" data-container="body" data-placement="bottom" data-html="true" id="temple"><i class="icon icon-question"></i></a></th>
</tr>
</table>

      <div id="popover-lensw" class="d-none  pop">
            <div class="panel panel-default">
            <div class="panel-heading">Lense Witdh</div>
            <div class="panel-body">
                <img src="http://eye/img/lens-width.png" class="d-block w-100" alt="Vancouver Best Affortable Online Eyeglasses">
                <p>
                 Lense Witdh or Eye size is the horizontal width of the frame's lens in millimeters. Usually, the eye size ranges from 40 mm to 60 mm.
                </p>
            </div>
            <div class="panel-footer">Rumi Optical</div>
            </div>
        </div>

		<div id="popover-bridge" class="d-none  pop">
            <div class="panel panel-default">
            <div class="panel-heading">Bridge</div>
            <div class="panel-body">
                <img src="http://eye/img/lens-width.png" class="d-block w-100" alt="Vancouver Best Affortable Online Eyeglasses">
                <p>
                 Bridge size is the distance between the two lenses in millimeters and typically ranges from 14 mm to 24 mm.
                </p>
            </div>
            <div class="panel-footer">Rumi Optical</div>
            </div>
        </div>

		<div id="popover-temple" class="d-none  pop">
            <div class="panel panel-default">
            <div class="panel-heading">Temple</div>
            <div class="panel-body">
                <img src="http://eye/img/lens-width.png" class="d-block w-100" alt="Vancouver Best Affortable Online Eyeglasses">
            <p>
                Temple length is measured along the length of the temple from one end to the other and also includes the bend. Your temple length can fall between 120 mm and 150 mm.
                </p>
            </div>
            <div class="panel-footer">Rumi Optical</div>
            </div>
        </div>

		<div id="popover-temple" class="d-none  pop">
            <div class="panel panel-default">
            <div class="panel-heading">Temple</div>
            <div class="panel-body">
                <img src="http://eye/img/lens-width.png" class="d-block w-100" alt="Vancouver Best Affortable Online Eyeglasses">
            <p>
                Long arms on the sides of the frame that extend from the hinge and over the ears to keep the glasses on the wearer’s face.
                </p>
            </div>
            <div class="panel-footer">Rumi Optical</div>
            </div>
        </div>

		<div id="popover-temple" class="d-none  pop">
            <div class="panel panel-default">
            <div class="panel-heading">Temple</div>
            <div class="panel-body">
                <img src="http://eye/img/lens-width.png" class="d-block w-100" alt="Vancouver Best Affortable Online Eyeglasses">
            <p>
                Long arms on the sides of the frame that extend from the hinge and over the ears to keep the glasses on the wearer’s face.
                </p>
            </div>
            <div class="panel-footer">Rumi Optical</div>
            </div>
        </div>
 <?php

                echo '</div>';
               echo '<div class="row sidebar-row">';

                echo '<div class="col-md-9 px-0">';
                    echo '<a role="button" class="btn btn-block btn-add-to-cart add-to-cart" data-toggle="modal" data-target="#add-to-cart-modal">Add to Cart </a>';
                echo '</div>';

                echo '<div class="col-md-3 px-0 pl-2">';
                    echo '<a role="button" class="btn btn-block btn-add-to-wish add-to-wish"><i class="icon icon-heart-o"></i> </a>';
                echo '</div>';
				echo '</div>';
				?>
				<div class="row sidebar"><a role="button" class="btn btn-block btn-add-to-wish">Book An Eye Exam </a></div>
				<?php

            echo '</div>';
			  echo '<div class="col-md-8">';


			  ?>

			  <div class="row d-none d-sm-block">
			  <button class="btn btn-product-tryon pull-right add-to-cart" data-toggle="modal" data-target="#add-to-cart-modal">Add to Cart </button>
</div>
			  <br />
			  <br />

			  <?php
                  echo '<div id="carousel-we" class="carousel slide carousel-fade d-none d-sm-block" data-ride="carousel" data-interval="false">';
                  echo '<div class="carousel-inner">';
                $images = [];
                $images = explode(',', $colorImages);
                $reversed = array_reverse($images);
                $counter = 0;
                foreach ($reversed as $value) {
                    if($counter==0){
                        echo'<div class="carousel-item active">';
                        echo '<img class="d-block w-100" src="'.$upload_path.'/singlee/'.$value.'" title="Vancouver Best Online Affodable Women Eyeglasses"  alt="Vancouver Best Online Affodable Women Eyeglasses">';
                     echo'</div>';
                    }else{
                        echo'<div class="carousel-item">';
                        echo '<img class="d-block w-100" src="'.$upload_path.'/singlee/'.$value.'" title="Vancouver Best Online Affodable Women Eyeglasses"  alt="Vancouver Best Online Affodable Women Eyeglasses">';
                     echo'</div>';
                    }
                    $counter++;
                }
					   echo '</div>';
                 echo '</div>';
              echo '</div>';
        echo '</div>';
?>

    <div class="row">
        <br />

<div class="" style="margin-top: 20px; margin-bottom:50px;border-radius: 0px; padding: 14px; border:0; background:#f5f5f5;border:1px dashed #999; background: #fff;">


             <div class="card details-title">
                    <h4>Descrition</h4>
                 </div>
                 <p class="desc-paragraph">
                Become a 21st-century saint of style with St Michel. The contrast between sleek, matte gold metal and retro outsize shaped lenses makes these full-rim eyeglasses uniquely trendy. The smooth, streamlined design is complemented by a fine nose bridge and black temple tips to create a frame that gives an instant, edgy style boost.

                </p>

                         <div class="card details-title">
                    <h4>Details</h4>
                 </div>

                   <table class="table product-table">
    <thead>
      <tr>
                  <td style="border:0 !important;"><span class="product-table-header"><strong>Product Details</strong></span></td>
         </tr>
    </thead>
    <tbody>
      <tr>
        <td>Gender</td>
        <td id="oGender"><?php echo ucwords($gender);?></td>
      </tr>
      <tr>
        <td>Rim</td>
        <td id="oRim"><?php echo ucwords($rim);?></td>
      </tr>
      <tr>
        <td>Material</td>
        <td id="oMaterial"><?php echo ucwords($material);?></td>
      </tr>
        <tr>
        <td>Shape </td>
        <td id="oShape"><?php echo ucwords($shape);?></td>
      </tr>
    </tbody>
  </table>

                    <div class="card details-title">
                    <h4>Add-Ons</h4>
                 </div>
    <table class="table product-table">
    <thead>
      <tr>
        <td style="border:0 !important;"><span class="product-table-header"><strong>Available Lens Types & Add-Ons on This Frame</strong></span></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Single Vision Lenses</td>
        <td>Included</td>
      </tr>
      <tr>
        <td>Add-Ons - Bifocal Lenses</td>
        <td>$49</td>
      </tr>
      <tr>
        <td>Add-Ons - xxx</td>
        <td>$59</td>
      </tr>
        <tr>
        <td>Non-Prescription </td>
        <td>Included</td>
      </tr>
    </tbody>
  </table>


                </div>
	</div>

<div class="modal d-block" id="add-to-cart-modal" tabindex="-1" role="dialog" aria-hidden="true">
<!-- <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true"  data-keyboard="false" data-backdrop="static"> -->
   <div class="modal-dialog full-screen" role="document">
      <div class="modal-content">
         <div class="modal-header">
                    <div class="w-100">
               <div class="float-left hidden-xs">
                  <div class="btn-group" role="group" aria-label="...">
                     <button type="button" class="btn slider-control mclose" data-dismiss="modal" aria-label="Close"> Back to Order <i class="icon-close"></i></button>
                  </div>
               </div>
               <div class="float-right">
                  <div class="btn-group" role="group" aria-label="...">
                     <button type="button" class="btn slider-control"><i class="icon icon-close"></i></button>
                     <button type="button" class="btn slider-control" href="#carousel-add-to-cart" role="button" data-slide="prev" id="carousel-prev" disabled><i class="icon icon-angle-left"></i></button>
                     <button type="button" class="btn slider-control" href="#carousel-add-to-cart" role="button" data-slide="next" id="carousel-next" disabled><i class="icon icon-angle-right"></i></button>
                     <button type="button" class="btn slider-control" data-toggle="modal" data-target="#order-details-modal"><i class="icon-bag" aria-hidden="true"></i>  <small class="hidden-sm hidden-xs">Order Details</small></button>
                  </div>
               </div>

          </div>
         </div>
         <div class="modal-body">
       <div class="order-stage">

         </div>
            <div class="order-stage-msg">

            </div>
             <div class="order-steps">
             <div class="container">
                 <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-tab1-tab" data-toggle="tab" href="#nav-tab1" role="tab" aria-controls="nav-tab1" aria-selected="true">Tab 1</a>
    <a class="nav-item nav-link" id="nav-tab2-tab" data-toggle="tab" href="#nav-tab2" role="tab" aria-controls="nav-tab2" aria-selected="false">Tab 2</a>
    <a class="nav-item nav-link" id="nav-tab3-tab" data-toggle="tab" href="#nav-tab3" role="tab" aria-controls="nav-tab3" aria-selected="false">Tab 3</a>
    <a class="nav-item nav-link" id="nav-tab4-tab" data-toggle="tab" href="#nav-tab4" role="tab" aria-controls="nav-tab4" aria-selected="false">Tab 4</a>
    <a class="nav-item nav-link" id="nav-tab5-tab" data-toggle="tab" href="#nav-tab5" role="tab" aria-controls="nav-tab5" aria-selected="false">Tab 5</a>
    <a class="nav-item nav-link" id="nav-tab6-tab" data-toggle="tab" href="#nav-tab6" role="tab" aria-controls="nav-tab6" aria-selected="false">Tab 6</a>
    <a class="nav-item nav-link" id="nav-tab7-tab" data-toggle="tab" href="#nav-tab7" role="tab" aria-controls="nav-tab7" aria-selected="false">Tab 7</a>
    <a class="nav-item nav-link" id="nav-tab8-tab" data-toggle="tab" href="#nav-tab8" role="tab" aria-controls="nav-tab8" aria-selected="false">Tab 8</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-tab1" role="tabpanel" aria-labelledby="nav-tab1-tab">
                            <div class="container no-padding">
                           <div class="row" style="padding-top:20px;">
                              <div class="col-sm-6 col-md-4">
                                 <div class="thumbnail form-thumbnail">
                                    <div class="caption">
                                        <div class="row">
                                       <h4>Existing Customer</h4>
                                       </div>
                                       <div class="row">
                                       <p>If you have an account with us, please login </p>
                                       </div>
                                       <div class="row">   <div class="form-wrapper">

                                          <div class="form-group">
                                             <label class="form-label" for="first"><i class="icon-envelope"></i> Your Email</label>
                                             <input id="first" class="form-input" type="text" />
                                          </div>
                                          <div class="form-group">
                                             <label class="form-label" for="last"><i class="icon-lock"></i> Password</label>
                                             <input id="last" class="form-input" type="text" />
                                          </div>
                                       </div></div>
                                        <div class="row">
                                       <a href="#" class="btn btn-modal-sm btn-block" role="button" id="mmregister">Login</a>
                                       </div>
                                      <div class="row">
                                        <p><a href="#" class="pull-right" role="button"  data-toggle="modal" data-target="#login-forget-modal">Forget Your Password?</a> </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4">
                                 <div class="thumbnail form-thumbnail">
                                    <div class="caption">
                                        <div class="row">
                                       <h4>Register</h4>
                                       </div>
                                       <div class="row">
                                       <p>Create an account and you will speed up your next purchase, recive emails and get our latest special discounts and offers </p>
                                       </div>
                                       <div class="row"> </div>
                                        <div class="row">
                                       <a href="#" class="btn btn-modal-sm btn-block" role="button" id="mmregister"  data-toggle="modal" data-target="#register-modal">Register</a>
                                       </div>
                                       <div class="row"> </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4">
                                 <div class="thumbnail form-thumbnail">
                                    <div class="caption">
                                         <div class="row">
                                       <h4>Shop As Guset</h4>
                                       </div>
                                         <div class="row">
                                       <p>Having no time for registration?! No problem! you can continue shopping as a Guest Shopper</p>
                                       </div>
                                       <div class="row"> </div>
                                         <div class="row">
                                       <a href="#" class="btn btn-modal-sm btn-block" role="button">Continiue</a>
                                       </div>
                                        <div class="row"> </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                       </div>

    </div><!--    end of Tab 1-->
  <div class="tab-pane fade" id="nav-tab2" role="tabpanel" aria-labelledby="nav-tab2-tab">
                            <div class="container no-padding">
                           <div class="row" style="padding-top:20px;">
                              <div class="col-xs-12 col-md-4 panel-radio text-center" data-otype="A">
                                 <div class="panel panel-default panel-usage">
                                    <div class="panel-heading"><h3 class="panel-title usage-title">Distance</h3></div>
                                    <div class="panel-body">
                                       <img src="" class="d-block w-100"/>
                                       <div class="usage-caption">
                                          <p>Lenses For General Every day Use of Seeing things Far Away and  Driving </p>
                                       </div>
                                       <button class="btn btn-usage active"><i class="icon icon-check"></i> selected </button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-md-4 panel-radio text-center" data-otype="B">
                                 <div class="panel panel-default panel-usage">
                                    <div class="panel-heading"><h3 class="panel-title usage-title ">Reading</h3></div>
                                    <div class="panel-body">
                                       <img src="" class="d-block w-100"/>
                                       <div class="usage-caption">
                                          <p>Lenses for Seeing Things Close up to you and Reading</p>
                                       </div>
                                       <button class="btn btn-usage"><i class="icon icon-check"></i> selected  </button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-md-4 panel-radio text-center" data-otype="C">
                                 <div class="panel panel-default panel-usage">
                                    <div class="panel-heading"><h3 class="panel-title usage-title ">Non-Prescription</h3></div>
                                    <div class="panel-body">
                                       <img src="" class="d-block w-100"/>
                                       <div class="usage-caption">
                                          <p>Lenses Without Prescription </p>
                                       </div>
                                       <button class="btn btn-usage"><i class="icon icon-check"></i> selected   </button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>

    </div><!--    end of tab 2-->
  <div class="tab-pane fade" id="nav-tab3" role="tabpanel" aria-labelledby="nav-tab3-tab">
    Specify the size?

    </div><!--    end of tab 3-->
  <div class="tab-pane fade" id="nav-tab4" role="tabpanel" aria-labelledby="nav-tab4-tab">
                          <div class="row">

                         <a class="hallow-btn">I am Existing User</a>
                         <a class="hallow-btn">I am Existing User</a>
                       </div>
<div class="container">


<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">SPH Sphere</th>
      <th scope="col">CYL Cylinder</th>
      <th scope="col">AXIS</th>
      <th scope="col">ADD</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <th>OD Right Eye</th>
      <td>  <input id="od-right-sph" type="text" value="0" name="od-right-sph" /> </td>
      <td>  <input id="od-right-cyl" type="text" value="0" name="od-right-cyl" /> </td>
      <td>  <input id="od-right-axi" type="text" value="0" name="od-right-axi" /> </td>
      <td>  <input id="od-right-add" type="text" value="0" name="od-right-add" /> </td>
    </tr>

    <tr>
       <th>OS Left Eye</th>
      <td>  <input id="os-left-sph" type="text" value="0" name="os-left-sph" /> </td>
      <td>  <input id="os-left-cyl" type="text" value="0" name="os-left-cyl" /> </td>
      <td>  <input id="os-left-axi" type="text" value="0" name="os-left-axi" /> </td>
      <td>  <input id="os-left-add" type="text" value="0" name="os-left-add" /> </td>
    </tr>
    <tr>
      <th>PD* Pupillary Distance</th>
      <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="radio" name="options" id="option1" autocomplete="off" checked> Single PD
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2" autocomplete="off"> Dual PD
  </label>

</div></td>
      <td><input id="pd-single" type="text" value="0" name="pd-single" /></td>
      <td><input id="pd-dual-right" type="text" value="0" name="pd-dual-right" /></td>
      <td><input id="pd-dual-left" type="text" value="0" name="pd-dual-left" /></td>
    </tr>
  </tbody>
</table>
</div>


    </div><!--    end of tab 4-->
  <div class="tab-pane fade" id="nav-tab5" role="tabpanel" aria-labelledby="nav-tab5-tab">...</div><!--    end of tab 5-->
  <div class="tab-pane fade" id="nav-tab6" role="tabpanel" aria-labelledby="nav-tab6-tab">...</div><!--    end of tab 6-->
  <div class="tab-pane fade" id="nav-tab7" role="tabpanel" aria-labelledby="nav-tab7-tab">...</div><!--    end of tab 7-->
  <div class="tab-pane fade" id="nav-tab8" role="tabpanel" aria-labelledby="nav-tab8-tab">...</div><!--    end of tab 8-->

</div>

            </div>
            </div>


         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
         </div>
      </div>
   </div>
</div>
</div>
<!-- Details Modal -->
<div class="modal fade" id="order-details-modal" tabindex="-1" role="dialog" aria-labelledby="product-details" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            ...
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
         </div>
      </div>
   </div>
</div>
<?php
	} // end while
} // end if
    ?>





<?php
get_footer('eyeglass');
?>
