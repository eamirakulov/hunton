<div class="wrap">
	<div id="lbg_logo">
			<h2>Banner Settings for banner: <span style="color:#FF0000; font-weight:bold;"><?php echo $_SESSION['xname']?> - ID #<?php echo $_SESSION['xid']?></span></h2>
 	</div>
  <form method="POST" enctype="multipart/form-data">
	<script>
	jQuery(function() {
		var icons = {
			header: "ui-icon-circle-arrow-e",
			headerSelected: "ui-icon-circle-arrow-s"
		};
		jQuery( "#accordion" ).accordion({
			icons: icons,
			autoHeight: false
		});
	});
	</script>


<div id="accordion">
  <h3><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General Settings</a></h3>
  <div style="padding:30px;">
	  <table class="wp-list-table widefat fixed pages" cellspacing="0">
     
		  <tr>
		    <td align="right" valign="top" class="row-title" width="30%">Banner Name</td>
		    <td align="left" valign="top" width="75%"><input name="name" type="text" size="40" id="name" value="<?php echo $_SESSION['xname'];?>"/></td>
	      </tr>
		  <tr>
            <td width="30%" align="right" valign="top" class="row-title">Banner Width</td>
		    <td width="75%" align="left" valign="top"><input name="width" type="text" size="25" id="width" value="<?php echo $_POST['width'];?>"/></td>
	    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Banner Height</td>
		    <td align="left" valign="top"><input name="height" type="text" size="25" id="height" value="<?php echo $_POST['height'];?>"/></td>
	    </tr>
		<tr>
		    <td align="right" valign="top" class="row-title">Width 100%</td>
		    <td align="left" valign="middle"><select name="width100Proc" id="width100Proc">
              <option value="true" <?php echo (($_POST['width100Proc']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['width100Proc']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Responsive</td>
		    <td align="left" valign="middle"><select name="responsive" id="responsive">
              <option value="true" <?php echo (($_POST['responsive']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['responsive']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Responsive Relative To Browser</td>
		    <td align="left" valign="middle"><select name="responsiveRelativeToBrowser" id="responsiveRelativeToBrowser">
              <option value="true" <?php echo (($_POST['responsiveRelativeToBrowser']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['responsiveRelativeToBrowser']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>        
		  <tr>
		    <td align="right" valign="top" class="row-title">Randomize Images</td>
		    <td align="left" valign="middle"><select name="randomizeImages" id="showInfo">
              <option value="true" <?php echo (($_POST['randomizeImages']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['randomizeImages']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Skin Name</td>
		    <td align="left" valign="middle"><select name="skin" id="skin">
		      <option value="cool" <?php echo (($_POST['skin']=='cool')?'selected="selected"':'')?>>cool</option>
		      <option value="simple" <?php echo (($_POST['skin']=='simple')?'selected="selected"':'')?>>simple</option>
		      <option value="crazy" <?php echo (($_POST['skin']=='crazy')?'selected="selected"':'')?>>crazy</option>
            </select></td>
	      </tr>

		  <tr>
		    <td align="right" valign="top" class="row-title">First Image Number</td>
		    <td align="left" valign="middle"><input name="firstImg" type="text" size="25" id="firstImg" value="<?php echo $_POST['firstImg'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Number Of Stripes</td>
		    <td align="left" valign="middle"><input name="numberOfStripes" type="text" size="25" id="numberOfStripes" value="<?php echo $_POST['numberOfStripes'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Number Of Rows</td>
		    <td align="left" valign="middle"><input name="numberOfRows" type="text" size="25" id="numberOfRows" value="<?php echo $_POST['numberOfRows'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Number Of Columns</td>
		    <td align="left" valign="middle"><input name="numberOfColumns" type="text" size="25" id="numberOfColumns" value="<?php echo $_POST['numberOfColumns'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Default Effect</td>
		    <td align="left" valign="middle"><select name="defaultEffect" id="defaultEffect">
		      <option value="random" <?php echo (($_POST['defaultEffect']=='random')?'selected="selected"':'')?>>random</option>
		      <option value="asynchronousDroppingStripes" <?php echo (($_POST['defaultEffect']=='asynchronousDroppingStripes')?'selected="selected"':'')?>>asynchronousDroppingStripes</option>
		      <option value="bottomTopDroppingReverseStripes" <?php echo (($_POST['defaultEffect']=='bottomTopDroppingReverseStripes')?'selected="selected"':'')?>>bottomTopDroppingReverseStripes</option>
              <option value="bottomTopDroppingStripes" <?php echo (($_POST['defaultEffect']=='bottomTopDroppingStripes')?'selected="selected"':'')?>>bottomTopDroppingStripes</option>
              <option value="fade" <?php echo (($_POST['defaultEffect']=='fade')?'selected="selected"':'')?>>fade</option>
              <option value="leftRightFadingReverseStripes" <?php echo (($_POST['defaultEffect']=='leftRightFadingReverseStripes')?'selected="selected"':'')?>>leftRightFadingReverseStripes</option>
              <option value="leftRightFadingStripes" <?php echo (($_POST['defaultEffect']=='leftRightFadingStripes')?'selected="selected"':'')?>>leftRightFadingStripes</option>
              <option value="randomBlocks" <?php echo (($_POST['defaultEffect']=='randomBlocks')?'selected="selected"':'')?>>randomBlocks</option>
              <option value="slideFromBottom" <?php echo (($_POST['defaultEffect']=='slideFromBottom')?'selected="selected"':'')?>>slideFromBottom</option>
              <option value="slideFromLeft" <?php echo (($_POST['defaultEffect']=='slideFromLeft')?'selected="selected"':'')?>>slideFromLeft</option>
              <option value="slideFromTop" <?php echo (($_POST['defaultEffect']=='slideFromTop')?'selected="selected"':'')?>>slideFromTop</option>
              <option value="topBottomDiagonalBlocks" <?php echo (($_POST['defaultEffect']=='topBottomDiagonalBlocks')?'selected="selected"':'')?>>topBottomDiagonalBlocks</option>
              <option value="topBottomDiagonalReverseBlocks" <?php echo (($_POST['defaultEffect']=='topBottomDiagonalReverseBlocks')?'selected="selected"':'')?>>topBottomDiagonalReverseBlocks</option>
              <option value="topBottomDroppingReverseStripes" <?php echo (($_POST['defaultEffect']=='topBottomDroppingReverseStripes')?'selected="selected"':'')?>>topBottomDroppingReverseStripes</option>
              <option value="topBottomDroppingStripe" <?php echo (($_POST['defaultEffect']=='topBottomDroppingStripe')?'selected="selected"':'')?>>topBottomDroppingStripe</option>
		      </select></td>
	      </tr>

		  <tr>
		    <td align="right" valign="top" class="row-title">Effect Duration (in seconds)</td>
		    <td align="left" valign="middle"><input name="effectDuration" type="text" size="25" id="effectDuration" value="<?php echo $_POST['effectDuration'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Auto Play (in seconds)</td>
		    <td align="left" valign="middle"><input name="autoPlay" type="text" size="25" id="autoPlay" value="<?php echo $_POST['autoPlay'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Loop</td>
		    <td align="left" valign="middle"><select name="loop" id="loop">
              <option value="true" <?php echo (($_POST['loop']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['loop']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>

		  <tr>
		    <td align="right" valign="top" class="row-title">Target Window For Link</td>
		    <td align="left" valign="middle"><select name="target" id="target">
		      <option value="_blank" <?php echo (($_POST['target']=='_blank')?'selected="selected"':'')?>>_blank</option>
		      <option value="_self" <?php echo (($_POST['target']=='_self')?'selected="selected"':'')?>>_self</option>
            </select></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Enable Touch Screen</td>
		    <td align="left" valign="middle"><select name="enableTouchScreen" id="enableTouchScreen">
              <option value="true" <?php echo (($_POST['enableTouchScreen']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['enableTouchScreen']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>        

        
      </table>
  </div>
  <h3><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Controllers Settings</a></h3>
  <div style="padding:30px;">
	  <table class="wp-list-table widefat fixed pages" cellspacing="0">

		  <tr>
		    <td align="right" valign="top" class="row-title" width="30%">Show All Controllers</td>
		    <td align="left" valign="middle" width="70%"><select name="showAllControllers" id="showAllControllers">
              <option value="true" <?php echo (($_POST['showAllControllers']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['showAllControllers']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Show Navigation Arrows</td>
		    <td align="left" valign="middle"><select name="showNavArrows" id="showNavArrows">
              <option value="true" <?php echo (($_POST['showNavArrows']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['showNavArrows']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
         <tr>
		    <td align="right" valign="top" class="row-title">Show Navigation Arrows On Init</td>
		    <td align="left" valign="middle"><select name="showOnInitNavArrows" id="showOnInitNavArrows">
              <option value="true" <?php echo (($_POST['showOnInitNavArrows']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['showOnInitNavArrows']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
         <tr>
		    <td align="right" valign="top" class="row-title">Auto Hide Navigation Arrows</td>
		    <td align="left" valign="middle"><select name="autoHideNavArrows" id="autoHideNavArrows">
              <option value="true" <?php echo (($_POST['autoHideNavArrows']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['autoHideNavArrows']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Show Thumbs</td>
		    <td align="left" valign="middle"><select name="showThumbs" id="autoPlay">
              <option value="true" <?php echo (($_POST['showThumbs']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['showThumbs']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Show Thumbs On Init</td>
		    <td align="left" valign="middle"><select name="showOnInitThumbs" id="showOnInitThumbs">
              <option value="true" <?php echo (($_POST['showOnInitThumbs']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['showOnInitThumbs']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Auto Hide  Thumbs</td>
		    <td align="left" valign="middle"><select name="autoHideThumbs" id="autoHideThumbs">
              <option value="true" <?php echo (($_POST['autoHideThumbs']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['autoHideThumbs']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
          <td align="right" valign="top" class="row-title">Number Of Thumbs Per Screen</td>
          <td align="left" valign="middle"><input name="numberOfThumbsPerScreen" type="text" size="25" id="numberOfThumbsPerScreen" value="<?php echo $_POST['numberOfThumbsPerScreen'];?>"/></td>
        </tr>
        <tr>
          <td align="right" valign="top" class="row-title">Thumbs Reflection</td>
          <td align="left" valign="middle"><script>
	jQuery(function() {
		jQuery( "#thumbsReflection-slider-range-min" ).slider({
			range: "min",
			value: <?php echo $_POST['thumbsReflection'];?>,
			min: 0,
			max: 100,
			step: 1,
			slide: function( event, ui ) {
				jQuery( "#thumbsReflection" ).val(ui.value );
			}
		});
		jQuery( "#thumbsReflection" ).val( jQuery( "#thumbsReflection-slider-range-min" ).slider( "value" ) );
	});
	        </script>
              <div id="thumbsReflection-slider-range-min" class="inlinefloatleft"></div>
		      <div class="inlinefloatleft" style="padding-left:20px;">
		        <input name="thumbsReflection" type="text" size="10" id="thumbsReflection" style="border:0; color:#000000; font-weight:bold;"/>
            </div></td>
        </tr>
		<tr>
		    <td align="right" valign="top" class="row-title">Thumbs On Margin Top</td>
		    <td align="left" valign="middle"><input name="thumbsOnMarginTop" type="text" size="15" id="thumbsOnMarginTop" value="<?php echo $_POST['thumbsOnMarginTop'];?>"/></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Thumbs Wrapper Margin Top</td>
		    <td align="left" valign="middle"><input name="thumbsWrapperMarginTop" type="text" size="15" id="thumbsWrapperMarginTop" value="<?php echo $_POST['thumbsWrapperMarginTop'];?>"/></td>
	    </tr>

      </table>
  </div>


<h3><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Circle Timer Settings</a></h3>
  <div style="padding:30px;">
	  <table class="wp-list-table widefat fixed pages" cellspacing="0">
		<tr>
		    <td align="right" valign="top" class="row-title" width="30%">Show Circle Timer</td>
		    <td align="left" valign="middle" width="70%"><select name="showCircleTimer" id="showCircleTimer">
              <option value="true" <?php echo (($_POST['showCircleTimer']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?php echo (($_POST['showCircleTimer']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Circle Radius</td>
		    <td align="left" valign="middle"><input name="circleRadius" type="text" size="15" id="circleRadius" value="<?php echo $_POST['circleRadius'];?>"/></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Circle Line Width</td>
		    <td align="left" valign="middle"><input name="circleLineWidth" type="text" size="15" id="circleLineWidth" value="<?php echo $_POST['circleLineWidth'];?>"/></td>
	    </tr>
<tr>
		    <td align="right" valign="top" class="row-title">Circle Color</td>
		    <td align="left" valign="top"><input name="circleColor" type="text" size="25" id="circleColor" value="<?php echo $_POST['circleColor'];?>" style="background-color:#<?php echo $_POST['circleColor'];?>" />
                <script>
jQuery('#circleColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Circle Alpha</td>
		    <td align="left" valign="middle"><script>
	jQuery(function() {
		jQuery( "#circleAlpha-slider-range-min" ).slider({
			range: "min",
			value: <?php echo $_POST['circleAlpha'];?>,
			min: 0,
			max: 100,
			slide: function( event, ui ) {
				jQuery( "#circleAlpha" ).val(ui.value );
			}
		});
		jQuery( "#circleAlpha" ).val( jQuery( "#circleAlpha-slider-range-min" ).slider( "value" ) );
	});
	        </script>
                <div id="circleAlpha-slider-range-min" class="inlinefloatleft"></div>
		      <div class="inlinefloatleft" style="padding-left:20px;">%
		        <input name="circleAlpha" type="text" size="10" id="circleAlpha" style="border:0; color:#000000; font-weight:bold;"/>
	          </div></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Behind Circle Color</td>
		    <td align="left" valign="top"><input name="behindCircleColor" type="text" size="25" id="behindCircleColor" value="<?php echo $_POST['behindCircleColor'];?>" style="background-color:#<?php echo $_POST['behindCircleColor'];?>" />
                <script>
jQuery('#behindCircleColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Behind Circle Alpha</td>
		    <td align="left" valign="middle"><script>
	jQuery(function() {
		jQuery( "#behindCircleAlpha-slider-range-min" ).slider({
			range: "min",
			value: <?php echo $_POST['behindCircleAlpha'];?>,
			min: 0,
			max: 100,
			slide: function( event, ui ) {
				jQuery( "#behindCircleAlpha" ).val(ui.value );
			}
		});
		jQuery( "#behindCircleAlpha" ).val( jQuery( "#behindCircleAlpha-slider-range-min" ).slider( "value" ) );
	});
	        </script>
                <div id="behindCircleAlpha-slider-range-min" class="inlinefloatleft"></div>
		      <div class="inlinefloatleft" style="padding-left:20px;">%
		        <input name="behindCircleAlpha" type="text" size="10" id="behindCircleAlpha" style="border:0; color:#000000; font-weight:bold;"/>
	          </div></td>
	    </tr>      
      </table>
  </div>  
  
  
</div>

<div style="text-align:center; padding:20px 0px 20px 0px;"><input name="Submit" type="submit" id="Submit" class="button-primary" value="Update Banner Settings"></div>

</form>
</div>