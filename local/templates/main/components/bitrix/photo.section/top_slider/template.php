<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="roundaboutshadow">
	<?if($arItem['DEPTH_LEVEL'] == 1):?>
	<h1 class="mb4">You can have a Bigger single  Roundabout here.</h1>
	<p class="mb20">Amazingly this IS compatible with all modern and current Browsers.</p>
	<!-- roundabout images targets, prettyphoto opens on click of the middle item -->

	<script type="text/javascript" charset="utf-8">
		function roundaboutimage1(){  $.prettyPhoto.open('_include/images/showcase/showcase1.jpg', 'title', 'Some Brilliant Project'); }
		function roundaboutimage2(){  $.prettyPhoto.open('_include/images/showcase/showcase2.jpg', 'title', 'Another One'); }
		function roundaboutimage3(){  $.prettyPhoto.open('_include/images/showcase/showcase3.jpg', 'title', 'This is Insane'); }
		function roundaboutimage4(){  $.prettyPhoto.open('_include/images/showcase/showcase4.jpg', 'title', 'Another Comment'); }
		function roundaboutimage5(){  $.prettyPhoto.open('_include/images/showcase/showcase5.jpg', 'title', 'This roundabout Rules'); }
		function roundaboutimage6(){  $.prettyPhoto.open('_include/images/showcase/showcase6.jpg', 'title', 'Awsome Commment'); }
		function roundaboutimage7(){  $.prettyPhoto.open('_include/images/showcase/showcase7.jpg', 'title', 'And Another One'); }
	</script>
	<!-- the actual roundabout -->
	<?if (!empty($arResult)):?>
	<ul id="roundabout">
		<li id="roundaboutimage1"><a href="javascript:roundaboutimage1();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase1.jpg" alt="" /></a></li>
		<li id="roundaboutimage2"><a href="javascript:roundaboutimage2();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase2.jpg" alt="" /></a></li>
		<li id="roundaboutimage3"><a href="javascript:roundaboutimage3();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase3.jpg" alt="" /></a></li>
		<li id="roundaboutimage4"><a href="javascript:roundaboutimage4();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase4.jpg" alt="" /></a></li>
		<li id="roundaboutimage5"><a href="javascript:roundaboutimage5();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase1.jpg" alt="" /></a></li>
		<li id="roundaboutimage6"><a href="javascript:roundaboutimage6();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase2.jpg" alt="" /></a></li>
		<li id="roundaboutimage7"><a href="javascript:roundaboutimage7();"><img src="<?=SITE_TEMPLATE_PATH;?>/images/showcase/roundabout/showcase3.jpg" alt="" /></a></li>
	</ul>
	<?endif;?>
	<?endif;?>
	<div id="filler"><!--  --></div>
</div>
<script type="text/javascript">
	//<![CDATA[
	var descs = {
		roundaboutimage1: 'Some text about the item <a href="#">a link</a> here. ',
		roundaboutimage2: 'He has the look of a wise, fierce warrior.',
		roundaboutimage3: 'Attention all mice: you&rsquo;ve been warned.',
		roundaboutimage4: 'Some text about the item <a href="#">a link</a> here.',
		roundaboutimage5: 'Introducing: the INCREDIBLE ROUNDABOUT!',
		roundaboutimage6: 'Attention all mice: you&rsquo;ve been warned.',
		roundaboutimage7: 'Yes you can have Video here if you want.'
	};
	// settings for first button, for each roundabout image one setting
	var linkone = {
		roundaboutimage1: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
		roundaboutimage2: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
		roundaboutimage3: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
		roundaboutimage4: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
		roundaboutimage5: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
		roundaboutimage6: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
		roundaboutimage7: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>'
	};
	// settings for second button, for each roundabout image one setting
	var linktwo = {
		roundaboutimage1: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
		roundaboutimage2: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Get it at Themeforest</span></a>',
		roundaboutimage3: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
		roundaboutimage4: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Get it at Themeforest</span></a>',
		roundaboutimage5: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Do Something Now</span></a>',
		roundaboutimage6: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
		roundaboutimage7: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Cufon Buttons are Sexy</span></a>'
	};
	// what happens on focus and on blur
	$('#roundabout li').focus(function() {
		var useLinkone = (typeof linkone[$(this).attr('id')] != 'undefined') ? linkone[$(this).attr('id')] : '';
		$('#roundaboutlinkone').html(useLinkone).fadeIn(200);
		var useLinktwo = (typeof linktwo[$(this).attr('id')] != 'undefined') ? linktwo[$(this).attr('id')] : '';
		$('#roundaboutlinktwo').html(useLinktwo).fadeIn(200);
		var useText = (typeof descs[$(this).attr('id')] != 'undefined') ? descs[$(this).attr('id')] : '';
		$('#roundaboutdescription').html(useText).fadeIn(200);
		Cufon.replace('#roundaboutdescription, #roundaboutlinkone,  #roundaboutlinktwo', { hover: true, textShadow: '1px 1px 0 #ffffff', fontFamily: 'Museo' });
	}).blur(function() {
		$('#roundaboutlinkone').fadeOut(200);
		$('#roundaboutlinktwo').fadeOut(200);
		$('#roundaboutdescription').fadeOut(200);
	});

	$(document).ready(function() {
		var interval;
		$('#roundabout')
			.roundabout({
				shape: 'lazySusan',
				easing: 'swing',
				minOpacity: 1, // 1 fully visible, 0 invisible
				minScale: 0.5, // tiny!
				duration: 400,
				btnNext: '#roundaboutnext',
				btnPrev: '#roundaboutprevious',
				clickToFocus: true
			});
	});
	function startAutoPlay() {
		return setInterval(function() {
			$('#roundabout').roundabout_animateToNextChild();
		}, 3000);
	}
	//]]>
</script>
<!-- end header alternate-->
<div class="photo-section">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<table cellpadding="0" cellspacing="0" border="0" class="data-table">
	<?foreach($arResult["ROWS"] as $arItems):?>
		<tr class="head-row" valign="top">
		<?foreach($arItems as $arItem):?>
			<?if(is_array($arItem)):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_ELEMENT_DELETE_CONFIRM')));
				?>
				<td width="<?=$arResult["TD_WIDTH"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					&nbsp;
					<?if($arResult["USER_HAVE_ACCESS"]):?>
						<?if(is_array($arItem["PICTURE"])):?>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
									border="0"
									src="<?=$arItem["PICTURE"]["SRC"]?>"
									width="<?=$arItem["PICTURE"]["WIDTH"]?>"
									height="<?=$arItem["PICTURE"]["HEIGHT"]?>"
									alt="<?=$arItem["PICTURE"]["ALT"]?>"
									title="<?=$arItem["PICTURE"]["TITLE"]?>"
									/></a><br />
						<?endif?>
					<?else:?>
						<?if(is_array($arItem["PICTURE"])):?>
							<img
								border="0"
								src="<?=$arItem["PICTURE"]["SRC"]?>"
								width="<?=$arItem["PICTURE"]["WIDTH"]?>"
								height="<?=$arItem["PICTURE"]["HEIGHT"]?>"
								alt="<?=$arItem["PICTURE"]["ALT"]?>"
								title="<?=$arItem["PICTURE"]["TITLE"]?>"
								/><br />
						<?endif?>
					<?endif?>
				</td>
			<?else:?>
				<td width="<?=$arResult["TD_WIDTH"]?>" rowspan="<?=$arResult["nRowsPerItem"]?>">
					&nbsp;
				</td>
			<?endif;?>
		<?endforeach?>
		</tr>
		<tr class="data-row">
		<?foreach($arItems as $arItem):?>
			<?if(is_array($arItem)):?>
				<th valign="top" width="<?=$arResult["TD_WIDTH"]?>" class="data-cell">
					&nbsp;
					<?if($arResult["USER_HAVE_ACCESS"]):?>
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?><?if($arParams["USE_RATING"] && $arItem["PROPERTIES"]["rating"]["VALUE"]) echo "(".$arItem["PROPERTIES"]["rating"]["VALUE"].")"?></a><br />
					<?else:?>
						<?=$arItem["NAME"]?><?if($arParams["USE_RATING"] && $arItem["PROPERTIES"]["rating"]["VALUE"]) echo "(".$arItem["PROPERTIES"]["rating"]["VALUE"].")"?><br />
					<?endif?>
				</th>
			<?endif;?>
		<?endforeach?>
		</tr>
		<?if($arResult["bDisplayFields"]):?>
		<tr class="data-row">
		<?foreach($arItems as $arItem):?>
			<?if(is_array($arItem)):?>
				<th valign="top" width="<?=$arResult["TD_WIDTH"]?>" class="data-cell">
					<?foreach($arParams["FIELD_CODE"] as $code):?>
						<small><?=GetMessage("IBLOCK_FIELD_".$code)?>&nbsp;:&nbsp;<?=$arItem[$code]?></small><br />
					<?endforeach?>
					<?foreach($arItem["DISPLAY_PROPERTIES"] as $arProperty):?>
						<small><?=$arProperty["NAME"]?>:&nbsp;<?
							if(is_array($arProperty["DISPLAY_VALUE"]))
								echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
							else
								echo $arProperty["DISPLAY_VALUE"];?></small><br />
					<?endforeach?>
				</th>
			<?endif;?>
		<?endforeach?>
		</tr>
		<?endif;?>
	<?endforeach?>
</table>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
