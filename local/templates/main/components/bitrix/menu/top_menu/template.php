<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="menu">
	<!-- navigation start -->
	<div id="navigation">
		<?if (!empty($arResult)):?>
		<ul class="sf-menu">
			<?foreach($arResult as $key => $arItem):?>
				<?if($arItem['DEPTH_LEVEL'] != 1){
					continue;
				}
				?>
				<?if($arItem['DEPTH_LEVEL'] == 1):?>
					<li <?if($arItem["SELECTED"]):?>class="current"<?endif?>>
					<a href="<?=$arItem["LINK"];?>" class="applyfont"><?=$arItem["TEXT"];?></a>
					<ul>
				<?endif;?>
						<?foreach($arResult as $keyInner => $arItemInner):?>
					<?if($keyInner <= $key) {
						continue;
					}
					?>
					<?if($arItemInner['DEPTH_LEVEL'] == 2):?>
					<li><a href="<?=$arItemInner["LINK"];?>"><?=$arItemInner["TEXT"];?></a></li>
					<?endif;?>
					<?if($arItemInner['DEPTH_LEVEL'] != 2){
						break;
					}
					?>
				<?endforeach;?>
					<?if($arItem['DEPTH_LEVEL'] == 1):?>
						</ul>
						</li>
					<?endif;?>
			<?endforeach;?>
			<li><a href="gallery-grid.html" class="applyfont">Gallery</a>
				<ul>
					<li><a href="gallery-grid.html">Gallery Grid Filterable</a></li>
					<li><a href="gallery-list.html">Gallery List</a></li>
					<li><a href="gallery-grid-sidebar.html">Gallery Grid Sidebar</a></li>
					<li><a href="blank.html">Another Page</a><ul>
							<li class="roundtop"><a href="blank.html">Risus malesuada mi</a></li>
							<li><a href="blank.html">Fusce tincidunt nisl nec</a></li>
							<li><a href="blank.html">Curabitur plac orci mi stincidunt</a></li>
							<li class="last roundbottom"><a href="blank.html">Nec lorem mattis</a></li>
						</ul>
					</li>
					<li class="last roundbottom"><a href="blank.html">Page With Stuff On It</a></li>
				</ul>
			</li>
			<li><a href="faq.html" class="applyfont">FAQ</a></li>
			<li><a href="services-wide.html" class="applyfont">Services</a>
				<ul>
					<li><a href="services-sidebar.html">Services Sidebar</a></li>
					<li><a href="services-wide.html">Services Wide Big Icons</a></li>
					<li class="last roundbottom"><a href="services-wide-small.html">Services Wide Small Icons</a></li>
				</ul>
			</li>
			<li><a href="blog-grid.html" class="applyfont">Blog</a>
				<ul>
					<li><a href="blog-grid.html">Blog Style Grid</a></li>
					<li><a href="blog-grid-noimage.html">Blog Style Grid No Image</a></li>
					<li><a href="blog-list.html">Blog Style List</a></li>
					<li class="last roundbottom"><a href="blog-list-noimage.html">Blog Style List No Image</a></li>
				</ul>

			</li>
			<li class="last"><a href="contact-half.html" class="applyfont">Contact</a>
				<ul>
					<li><a href="contact-half.html">Contact Style Halfed</a></li>
					<li class="last roundbottom"><a href="contact-wide.html">Contact Style Wide</a></li>
				</ul>
			</li>
		</ul>
		<?endif;?>
	</div>
	<!-- navigation end -->
</div>