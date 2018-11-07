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


        echo '<div class="row">';
            echo '<ol class="breadcrumb">';
                echo '<li><a href="http://eye/">Home</a></li>';
                echo '<li><a href="http://eye/vancouver-women-eyeglasses/">Women Eyeglasses</a></li>';
                echo '<li class="active">'.$brand.'</li>';
                echo '<li class="active">'.$name.'</li>';
            echo '</ol>';
        echo '</div>';

        echo '<div class="row">';
            echo '<div class="col-md-4 left-box">';
                echo '<div class="row">';
                    echo '<h4 class="p-name" id="oName">'.$name.'</h4>';
                echo '</div>';
                echo '<div class="row">';
                    echo '<h4 class="p-brand" id="oBrand">'.$brand.'</h4>';
                echo '</div>';
                echo '<div class="row">';
                    echo '<h4 class="p-dt">Price:</h4>';
                    echo '<h4 class="p-fee-nu" id="oPrice">$'.$price.'.00</h4>';
				echo '</div>';
				echo '<br />';
                 echo '<div class="row">';
                    echo '<h4 class="p-dt">Available in <span class="p-dd"> '. $colorsNumber.'</span> Colors</h4>';
					echo '<ul class="list-inline">';
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

				echo '</div>';
				echo '<br />';
                echo '<div class="row">';
                    echo '<h4 class="p-dt">Available in <span class="p-dd"> '. $sizeNumber.'</span> Sizes</h4>';


					 ?>
    <div class="row" style="padding-right:40px;">
	<table class="table size-table">
	<tr>
		<th id="frame-bridge"><img src="http://eye/img/lens-width.png" class="img-responsive" alt="Vancouver Best Affortable Online Eyeglasses"></th>
		<th><img src="http://eye/img/lens-width.png" class="img-responsive" alt="Vancouver Best Affortable Online Eyeglasses"></th>
		<th><img src="http://eye/img/lens-width.png" class="img-responsive" alt="Vancouver Best Affortable Online Eyeglasses"></th>
		<th><img src="http://eye/img/lens-width.png" class="img-responsive" alt="Vancouver Best Affortable Online Eyeglasses"></th>
		<th><img src="http://eye/img/lens-width.png" class="img-responsive" alt="Vancouver Best Affortable Online Eyeglasses"></th>
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
    <th class="text-center"> <a role="button" class="btn btn-help-o" data-toggle="popover" data-container="body" data-placement="bottom" data-html="true" id="lensw"><i class="fa fa-question"></i></a></th>
    <th class="text-center"> <a role="button" class="btn btn-help-o" data-toggle="popover" data-container="body" data-placement="bottom" data-html="true" id="lensw"><i class="fa fa-question"></i></a></th>
    <th class="text-center"> <a role="button" class="btn btn-help-o" data-toggle="popover" data-container="body" data-placement="bottom" data-html="true" id="lensw"><i class="fa fa-question"></i></a></th>
    <th class="text-center"> <a role="button" class="btn btn-help-o" data-toggle="popover" data-container="body" data-placement="bottom" data-html="true" id="bridge"><i class="fa fa-question"></i></a></th>
    <th class="text-center"> <a role="button" class="btn btn-help-o" data-toggle="popover" data-container="body" data-placement="bottom" data-html="true" id="temple"><i class="fa fa-question"></i></a></th>
</tr>
</table>

      <div id="popover-lensw" class="hide pop">
            <div class="panel panel-default">
            <div class="panel-heading">Lense Witdh</div>
            <div class="panel-body">
                <img src="http://eye/img/lens-width.png" class="img-responsive" alt="Vancouver Best Affortable Online Eyeglasses">
                <p>
                 Lense Witdh or Eye size is the horizontal width of the frame's lens in millimeters. Usually, the eye size ranges from 40 mm to 60 mm.
                </p>
            </div>
            <div class="panel-footer">Rumi Optical</div>
            </div>
        </div>

		<div id="popover-bridge" class="hide pop">
            <div class="panel panel-default">
            <div class="panel-heading">Bridge</div>
            <div class="panel-body">
                <img src="http://eye/img/lens-width.png" class="img-responsive" alt="Vancouver Best Affortable Online Eyeglasses">
                <p>
                 Bridge size is the distance between the two lenses in millimeters and typically ranges from 14 mm to 24 mm.
                </p>
            </div>
            <div class="panel-footer">Rumi Optical</div>
            </div>
        </div>

		<div id="popover-temple" class="hide pop">
            <div class="panel panel-default">
            <div class="panel-heading">Temple</div>
            <div class="panel-body">
                <img src="http://eye/img/lens-width.png" class="img-responsive" alt="Vancouver Best Affortable Online Eyeglasses">
            <p>
                Temple length is measured along the length of the temple from one end to the other and also includes the bend. Your temple length can fall between 120 mm and 150 mm.
                </p>
            </div>
            <div class="panel-footer">Rumi Optical</div>
            </div>
        </div>

		<div id="popover-temple" class="hide pop">
            <div class="panel panel-default">
            <div class="panel-heading">Temple</div>
            <div class="panel-body">
                <img src="http://eye/img/lens-width.png" class="img-responsive" alt="Vancouver Best Affortable Online Eyeglasses">
            <p>
                Long arms on the sides of the frame that extend from the hinge and over the ears to keep the glasses on the wearer’s face.
                </p>
            </div>
            <div class="panel-footer">Rumi Optical</div>
            </div>
        </div>

		<div id="popover-temple" class="hide pop">
            <div class="panel panel-default">
            <div class="panel-heading">Temple</div>
            <div class="panel-body">
                <img src="http://eye/img/lens-width.png" class="img-responsive" alt="Vancouver Best Affortable Online Eyeglasses">
            <p>
                Long arms on the sides of the frame that extend from the hinge and over the ears to keep the glasses on the wearer’s face.
                </p>
            </div>
            <div class="panel-footer">Rumi Optical</div>
            </div>
        </div>


   </div>
					 <?php

                echo '</div>';
               echo '<div class="row sidebar-row">';

                echo '<div class="col-md-9 no-padding-l-r">';
                    echo '<a role="button" class="btn btn-block btn-add-to-cart add-to-cart" data-toggle="modal" data-target="#add-to-cart-modal">Add to Cart </a>';
                echo '</div>';

                echo '<div class="col-md-3 no-padding-r">';
                    echo '<a role="button" class="btn btn-block btn-add-to-wish add-to-wish"><i class="fa fa-heart-o"></i> </a>';
                echo '</div>';
				echo '</div>';
				?>
				<div class="row sidebar"><a role="button" class="btn btn-block btn-add-to-wish">Book An Eye Exam </a></div>
				<?php

            echo '</div>';
			  echo '<div class="col-md-8">';
			  ?>
			  <div class="row">
			  <button class="btn btn-product-tryon pull-right add-to-cart" data-toggle="modal" data-target="#add-to-cart-modal">Add to Cart </button>
</div>
			  <br />
			  <br />
			  <?php
                  echo '<div id="carousel-we" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">';
                  echo '<div class="carousel-inner" role="listbox">';
                $images = [];
                $images = explode(',', $colorImages);
                $reversed = array_reverse($images);
                $counter = 0;
                foreach ($reversed as $value) {
                    if($counter==0){
                        echo'<div class="item active">';
                        echo '<img src="'.$upload_path.'/singlee/'.$value.'" title="Vancouver Best Online Affodable Women Eyeglasses"  alt="Vancouver Best Online Affodable Women Eyeglasses">';
                     echo'</div>';
                    }else{
                        echo'<div class="item">';
                        echo '<img src="'.$upload_path.'/singlee/'.$value.'" title="Vancouver Best Online Affodable Women Eyeglasses"  alt="Vancouver Best Online Affodable Women Eyeglasses">';
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
<div class="well well-sm" style="border-radius: 0px; padding: 10px; border:0; background:#f5f5f5;border:1px dashed #999; background: #fff;">
             <div class="row">
                <h4 class="details-title">Descrition</h4>
                 <p class="desc-paragraph">
                Become a 21st-century saint of style with St Michel. The contrast between sleek, matte gold metal and retro outsize shaped lenses makes these full-rim eyeglasses uniquely trendy. The smooth, streamlined design is complemented by a fine nose bridge and black temple tips to create a frame that gives an instant, edgy style boost.

                </p></div>
               <div class="row">
                                <h4 class="details-title">Details</h4>
                   <table class="table product-table">
    <thead>
      <tr>
        <td><span class="product-table-header">Product Details</span></td>
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
                </div>
  <div class="row">
    <h4 class="details-title">Add-Ons</h4>
    <table class="table product-table">
    <thead>
      <tr>
        <td><span class="product-table-header">Available Lens Types & Add-Ons on This Frame</span></td>
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
	</div>


<div id="add-to-cart-modal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="label-dialog-example" style="display: none;">
  <div class="modal-dialog full-screen" role="document">
    <div class="modal-content">

      <div class="modal-header">
                    <div class="row">
                                <div class="container-fluid">
               <div class="pull-left hidden-xs">
                  <div class="btn-group" role="group" aria-label="...">
                     <button type="button" class="btn slider-control mclose" data-dismiss="modal" aria-label="Close"> Back to Order <i class="icon-close"></i></button>
                  </div>
               </div>
               <div class="pull-right">
                  <div class="btn-group" role="group" aria-label="...">
                     <button type="button" class="btn slider-control visible-xs"><i class="fa fa-remove"></i></button>
                     <button type="button" class="btn slider-control" href="#carousel-add-to-cart" role="button" data-slide="prev" id="carousel-prev" disabled><i class="fa fa-angle-left"></i></button>
                     <button type="button" class="btn slider-control" href="#carousel-add-to-cart" role="button" data-slide="next" id="carousel-next" disabled><i class="fa fa-angle-right"></i></button>
                     <button type="button" class="btn slider-control" data-toggle="modal" data-target="#order-details-modal"><i class="icon-bag" aria-hidden="true"></i>  <small class="hidden-sm hidden-xs">Order Details</small></button>
                  </div>
               </div>
            </div>
          </div>

      </div>
      <div class="modal-body">
     <div class="container indicator-box">
               <div class="row step-wizard-row">
                  <div class="row step-wizard-line"></div>
                  <div class="row step-wizard-txt">
                    <div class="col-xs-2 text-center step">
                        <p class="step-wizard-step active">1</p>
                        <p class="step-wizard-title active hidden-xs">User</p>
                     </div>
                     <div class="col-xs-2 text-center step">
                        <p class="step-wizard-step">2</p>
                        <p class="step-wizard-title hidden-xs">Usage</p>
                     </div>
                     <div class="col-xs-2 text-center step">
                        <p class="step-wizard-step">3</p>
                        <p class="step-wizard-title hidden-xs">Presecription</p>
                     </div>
                     <div class="col-xs-2 text-center step">
                        <p class="step-wizard-step">4</p>
                        <p class="step-wizard-title hidden-xs">Lense Options</p>
                     </div>
                     <div class="col-xs-2 text-center step">
                        <p class="step-wizard-step">5</p>
                        <p class="step-wizard-title hidden-xs">Add-Ons $ Size</p>
                     </div>
                     <div class="col-xs-2 text-center step">
                        <p class="step-wizard-step">6</p>
                        <p class="step-wizard-title hidden-xs">Shipment</p>
                     </div>
                     <div class="col-xs-1">  </div>
                  </div>
               </div>
            </div>
     <div class="container msg-box no-padding">
           <div class="alert alert-warning hidden" id="prescription-error">
                <p>
                  Let us see those peepers in person! Your Rx requires a unique lens, so we suggest you come visit us at the store before placing your order. A customer service rep always reviews your prescription to make sure its exactly what you need.
                </p>
              </div>
           </div>
     <div class="container no-padding" style="background: #fff; padding-bottom: 26px;">
               <div id="carousel-add-to-cart" class="carousel slide no-margin" data-ride="carousel" data-interval="false" data-wrap="false">
                  <div class="carousel-inner to-cart" role="listbox">
                     <div class="item active no-padding">
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
                    </div>
                       <div class="item no-padding">
                        <div class="container no-padding">
                           <div class="row" style="padding-top:20px;">
                              <div class="col-xs-12 col-md-4 panel-radio text-center" data-otype="A">
                                 <div class="panel panel-default panel-usage">
                                    <div class="panel-heading"><h3 class="panel-title usage-title">Distance</h3></div>
                                    <div class="panel-body">
                                       <img src="" class="img-responsive"/>
                                       <div class="usage-caption">
                                          <p>Lenses For General Every day Use of Seeing things Far Away and  Driving </p>
                                       </div>
                                       <button class="btn btn-usage active"><i class="fa fa-check"></i> selected </button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-md-4 panel-radio text-center" data-otype="B">
                                 <div class="panel panel-default panel-usage">
                                    <div class="panel-heading"><h3 class="panel-title usage-title ">Reading</h3></div>
                                    <div class="panel-body">
                                       <img src="" class="img-responsive"/>
                                       <div class="usage-caption">
                                          <p>Lenses for Seeing Things Close up to you and Reading</p>
                                       </div>
                                       <button class="btn btn-usage"><i class="fa fa-check"></i> selected  </button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-md-4 panel-radio text-center" data-otype="C">
                                 <div class="panel panel-default panel-usage">
                                    <div class="panel-heading"><h3 class="panel-title usage-title ">Non-Prescription</h3></div>
                                    <div class="panel-body">
                                       <img src="" class="img-responsive"/>
                                       <div class="usage-caption">
                                          <p>Lenses Without Prescription </p>
                                       </div>
                                       <button class="btn btn-usage"><i class="fa fa-check"></i> selected   </button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                     <div class="item">

                        <!-- * * The Slide 2 - Prescription Drop Downs *-->
                       <div class="row">
                         <div class="btn-group" role="group" aria-label="...">
        <button type="button" class="btn btn-filter">Brands <i class="fa fa-chevron-right"></i></button>
        <button type="button" class="btn btn-filter">Shape <i class="fa fa-chevron-right"></i></button>
        <button type="button" class="btn btn-filter">Material <i class="fa fa-chevron-right"></i></button>

      </div>
                         <a class="hallow-btn">I am Existing User</a>
                         <a class="hallow-btn">I am Existing User</a>
                       </div>
                        <div class="col-md-2 no-padding-l"> </div>
                        <div class="well no-padding-l no-padding-r" style="background: #f5f5f5; border-radius: 0px; box-shadow: none!important;">
                           <div class="row">
                              <div class="col-md-offset-1 col-md-2"></div>
                              <div class="col-md-2 no-padding">
                                 <div class="prescription-box-cl-title">SPH Sphere</div>
                              </div>
                              <div class="col-md-2 no-padding">
                                 <div class="prescription-box-cl-title">CYL Cylinder</div>
                              </div>
                              <div class="col-md-2 no-padding">
                                 <div class="prescription-box-cl-title">Axis</div>
                              </div>
                              <div class="col-md-2 no-padding">
                                 <div class="prescription-box-cl-title">Add</div>
                              </div>
                           </div>
                           <div class="row prescription-row">
                              <div class="col-md-1" style="border-right:6px solid #dbff29; height:44px;"></div>
                              <div class="col-md-2"><span class="prescription-box-row-title"><strong>OD</strong><br/> Right Eye</span> </div>
                             <div class="col-md-2 no-padding-l">
                               <div class="spiner-box-0">
                                 <div class="spiner-box-1">
                                   <input class="spiner" id="ODSPH" type="text" value="0" name="demo1" data-index="0" data-limitn="-4" data-limitp="2" readonly />
                                 </div>
                                 <div class="spiner-box-2"></div>
                               </div>
                             </div>
                              <div class="col-md-2 no-padding-l">
                                 <div class="spiner-box-0">
                                 <div class="spiner-box-1">
                                   <input class="spiner" id="ODSPH" type="text" value="0" name="demo1" data-index="1" data-limitn="-4" data-limitp="3" readonly />
                                 </div>
                                 <div class="spiner-box-2"></div>
                               </div>
                             </div>
                              <div class="col-md-2 no-padding-l">
                               <div class="spiner-box-0">
                                 <div class="spiner-box-1">
                                   <input class="spiner" id="ODSPH" type="text" value="0" name="demo1" data-index="2" data-limitn="-4" data-limitp="6" readonly />
                                 </div>
                                 <div class="spiner-box-2"></div>
                               </div>
                              </div>
                              <div class="col-md-2 no-padding-l">
                               <div class="spiner-box-0">
                                 <div class="spiner-box-1">
                                   <input class="spiner" id="ODSPH" type="text" value="0" name="demo1" data-index="3" data-limitn="-4" data-limitp="2" readonly />
                                 </div>
                                 <div class="spiner-box-2"></div>
                               </div>
                              </div>
                           </div>
                           <div class="row prescription-row">
                              <div class="col-md-1" style="border-right:6px solid #dbff29; height:44px;"></div>
                              <div class="col-md-2"><span class="prescription-box-row-title"><strong>OS</strong><br/> Left Eye</span></div>
                              <div class="col-md-2 no-padding-l">
                               <div class="spiner-box-0">
                                 <div class="spiner-box-1">
                                   <input class="spiner" id="ODSPH" type="text" value="0" name="demo1" data-index="4" data-limitn="-4" data-limitp="2" readonly />
                                 </div>
                                 <div class="spiner-box-2"></div>
                               </div>
                              </div>
                              <div class="col-md-2 no-padding-l">
                               <div class="spiner-box-0">
                                 <div class="spiner-box-1">
                                   <input class="spiner" id="ODSPH" type="text" value="0" name="demo1" data-index="5" data-limitn="-4" data-limitp="2" readonly />
                                 </div>
                                 <div class="spiner-box-2"></div>
                               </div>
                              </div>
                              <div class="col-md-2 no-padding-l">
                               <div class="spiner-box-0">
                                 <div class="spiner-box-1">
                                   <input class="spiner" id="ODSPH" type="text" value="0" name="demo1" data-index="6" data-limitn="-4" data-limitp="2" readonly />
                                 </div>
                                 <div class="spiner-box-2"></div>
                               </div>
                              </div>
                              <div class="col-md-2 no-padding-l">
                               <div class="spiner-box-0">
                                 <div class="spiner-box-1">
                                   <input class="spiner" id="ODSPH" type="text" value="0" name="demo1" data-index="7" data-limitn="-4" data-limitp="2" readonly />
                                 </div>
                                 <div class="spiner-box-2"></div>
                               </div>
                              </div>
                           </div>
                           <div class="row " style="margin:0px 30px 0px 30px; border-top: 1px dashed #ccc;"></div>
                           <div class="row prescription-row">
                              <div class="col-md-1" style="border-right:6px solid #dbff29; height:44px;"></div>
                              <div class="col-md-2"><span class="prescription-box-row-title"><strong>PD</strong><br/> Pupillary Distance</span></div>
                              <div class="col-md-2 no-padding-l">
                               <div class="spiner-box-0">
                                 <div class="spiner-box-1">
                                   <input class="spiner" id="ODSPH" type="text" value="0" name="demo1" data-index="8" data-limitn="-4" data-limitp="2" readonly />
                                 </div>
                                 <div class="spiner-box-2"></div>
                               </div>
                              </div>
                              <div class="col-md-2 no-padding-l">
                                 <div class="btn-group btn-group-justified btn-prescriptions hidden" role="group" aria-label="..."> <a role="button" class="btn btn-default ew-decreaser" data-min="-12.00"><i class="icon-down-angle"></i></a> <a role="button" class="btn btn-default ew-num"><i class="icon-question-e"></i></a> <a role="button"
                                             class="btn btn-default ew-increaser" data-max="6.00"><i class="icon-up-angle"></i></a> </div>
                              </div>
                              <div class="col-md-2 no-padding-l"> Check box heere </div>
                           </div>
                        </div>
                        <div class="row" style="margin-top: 40px;"> <a class="btn btn-order btn-pre-confirmed">Confirm Prescription <i class="icon-check"></i></a> <a class="btn btn-order btn-pre-confirmed">Upload Your Prescription <i class="icon-check"></i></a> </div>
                     </div>
                     <div class="item">
                        <div class="container">Bye</div>
                     </div>
                     <div class="item">
                        <div class="container">Bye</div>
                     </div>
                     <div class="item">
                        <div class="container">Bye</div>
                     </div>
                  </div>
               </div>
            </div>


      </div><!--End of Modal Body        -->
      <div class="modal-footer">
   <button type="button" class="btn btn-modal-lg">Go Next Step >></button>
      </div>
    </div>
  </div>
</div>

<!-- Login Forget Modal -->
<div class="modal fade forget" id="order-details-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Modal 2</h4>
      </div>
      <div class="modal-body">
        This is Modal 2
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Login Forget Modal -->
<div class="modal fade forget" id="login-forget-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Modal 2</h4>
      </div>
      <div class="modal-body">
        This is Modal 2
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade forget" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Modal 2</h4>
      </div>
      <div class="modal-body">
        This is Modal 2
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
get_footer();
?>
