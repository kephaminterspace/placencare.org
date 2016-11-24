<?php
/**
 * Template Name: Landingpage - Trắng da
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header('landingpage'); ?>
 
<div class="header">
	<div class="header-inner clear">
		<a href="" class="logo"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/></a>
		<div class="menu-btn btn-mobile">
			<span></span>
			<span></span>
			<span></span> 
		</div>
		<ul id="menu">
			<li data-menuanchor="page1"><a href="#page1">LaserMD</a></li>
			<li data-menuanchor="page2"><a href="#page2">ưu điểm vượt trội</a></li>
			<li data-menuanchor="page3"><a href="#page3">sự khác biệt</a></li>
			<li data-menuanchor="page4"><a href="#page4">5 siêu tinh chất</a></li>
			<li data-menuanchor="page5"><a href="#page5">Thông tin thẩm mỹ viện</a></li>
			<li data-menuanchor="page6"><a href="#page6">Form đăng ký</a></li>
		</ul>
	</div>
</div>
<div id="fullpage" class="page-trang-da">
	<div class="section section-gioithieu" id="<?php if(wpmd_is_phone()){ echo "page1"; }else{ echo "section0";} ?>">
		<div class="intro clear">
			<div class="div-img">
				<img class="" src="<?php echo get_template_directory_uri(); ?>/images/page-1-girl.jpg"/>		
			</div>
			<div class="div-text">
				<img class="text-img" src="<?php echo get_template_directory_uri(); ?>/images/page-1-lasermd.jpg"/>
				<p class="t1">làm trắng da mặt, xóa vết thâm 100%</p>
				<p class="t2">Công nghệ mới nhất <span class="large">2016</span> - Độc quyền tại Việt Nam</p>
				<p class="t3">Với chùm hiệu quả đa tác dụng</p>
				<ul class="text-list">
					<li>
						Da sáng mịn màng 
					</li>
					<li>
						Hết sạch thâm nám
					</li>
					<li>
						Se khít lỗ chân lông
					</li>
					<li>
						Không bắt nắng trở lại
					</li>
					
				</ul>
				<p class="box-dangky"><a class="btn-dangky" href="#page6"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/btn-dangky.jpg"/></a></p>
				
			</div>
			
		</div>
	</div>
	<div class="section section-uudiem" id="<?php if(wpmd_is_phone()){ echo "page2"; }else{ echo "section1";} ?>">
	    
		<div class="intro clear">
			<div class="div-img">
				<img class="" src="<?php echo get_template_directory_uri(); ?>/images/page-2-girl.jpg"/>		
			</div> 
			<div class="div-text">
				<p class="t1">Chính thức ra mắt từ đầu năm 2016, <b>LASERMD</b> – Nano Laser ngay lập tức được đón nhận và trở thành xu hướng trắng sáng trên thế giới khi mang lại cho bạn một làn da <b>TRẮNG – MỊN – CĂNG BÓNG.</b></p>
				<img class="img-text-uudiem" src="<?php echo get_template_directory_uri(); ?>/images/text-uu-diem.jpg"/>
				<ul class="text-list">
					<li>
						Kết hợp giữa công nghệ Laser tinh vi & Dược mỹ phẩm độc quyền
					</li>
					<li>
						Truyền dẫn <b>5 loại siêu dưỡng chất</b> làm trắng cao cấp
					</li>	
					<li>
						Tăng khả năng thẩm thấu làm <b>trắng gấp 100 lần</b> phương pháp thông thường.
					</li>
					<li>
						Thay đổi từ 3-4 tone da sau 1 liệu trình đạt chuẩn
					</li>
					<li>
						<b>Giải quyết tận gốc</b> các dấu hiệu tổn thương trên da.
					</li>
				</ul>
				<p class="box-dangky"><a class="btn-dangky" href="#page6"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/btn-dangky.jpg"/></a></p>
			</div> 
		</div>
	 

	</div>
	<div class="section section-sukhacbiet" id="<?php if(wpmd_is_phone()){ echo "page3"; }else{ echo "section2";} ?>">
		<div class="intro clear">
			 
			<div class="div-img">
				<img class="" src="<?php echo get_template_directory_uri(); ?>/images/page-3-girl.jpg"/>		
			</div> 
			<div class="div-text">
				<p class="box-headtext-img"><img class="text-img-skbvt" src="<?php echo get_template_directory_uri(); ?>/images/text-sukhacbiet.jpg"/></p>
				<p class="t1"><b>Công nghệ thông thường:</b> Chỉ làm trắng da trên lớp bề mặt, chỉ giải quyết được 1 vấn đề, chỉ có tác dụng trong 1 thời gian ngắn.</p>
				<p class="t2"><b>LaserMD – Nano Laser:</b> Kết hợp giữa ánh sáng năng lượng cao & truyền dẫn các siêu tinh tinh chất.</p>
				<ul class="box-text-list clear">
					<li>
						Can thiệp vào lớp tế bào ở tầng sâu nhất
					</li>
					<li>
						Nuôi dưỡng và triệt tiêu mầm mống thâm sạm
					</li>
					<li>
						Khiến da trắng hồng, mịn màng
					</li>
					
				</ul>
				<p class="box-dangky"><a class="btn-dangky" href="#page6"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/btn-dangky.jpg"/></a></p>
			 
			</div>
		</div>
	</div>
	<div class="section section-tinhchat" id="<?php if(wpmd_is_phone()){ echo "page4"; }else{ echo "section3";} ?>">
		<div class="intro clear">
			 
			<div class="div-img">
				<img class="" src="<?php echo get_template_directory_uri(); ?>/images/page-4-girl.jpg"/>		
			</div> 
			<div class="div-text">
				<div class="box-text-head">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/images/text-5sieutinhchat.jpg"/>	
					<div class="box-text-des">	
						<p>- Được <b>thiết kế chuyên biệt</b> cho hệ thống truyền LaserMD</p>
						<p>- Đảm bảo độ <b>tinh khiết & thẩm thấu</b> tối đa.</p>
					</div>
				</div>
				
				<div class="box-text-list">	
					<div class="row-text col-2 clear">
						<div class="col-text">
							<div class="col-inner">
								<p class="title">GLUTATHIONE</p>
								<p class="des">Siêu tinh chất làm trắng và chống oxy hóa, loại bỏ độc tố dẫn đến những vấn đề tăng sắc tố và hắc tố, nám, tàn nhang.</p>
						
							</div>
						</div>
						<div class="col-text">
							<div class="col-inner">
								<p class="title">PLAGENSIA</p>
								<p class="des">Dưỡng chất “hiếm hoi” kích thích tăng trưởng, tái tạo lão hóa da, làm giảm nếp nhăn, quầng mắt.</p>
						
							</div>
						</div>
					</div>
					
					<div class="row col-3 clear">
						<div class="col-text">
							<div class="col-inner">
								<p class="title">IDEBECYS</p>
								<p class="des">Ức chế melanin, làm trắng da từ bên trong. IDEBECYS tác dụng trị nám làm đẹp, xóa nhăn rất tốt.</p>
							</div>
						</div>
						<div class="col-text">
							<div class="col-inner">
								<p class="title">CELLTOXIN</p>
								<p class="des">Chứa 10% Argeline và hoạt chất Hyaluronic acid, làm đầy nếp nhăn. Đây là “thần dược làm đẹp” có tác dụng nhanh nhất và an toàn nhất.</p>
						
							</div>
						</div>
						<div class="col-text">
							<div class="col-inner">
								<p class="title">UNILON</p>
								<p class="des">Vitamin C, B1 và dưỡng chất từ acid ascorbic chống oxy hóa, làm da săn chắc, tăng sức đề kháng và giúp da căng bóng.</p>
						
							</div>
						</div>
						
					</div>
					
					
				</div>
				<p class="box-dangky"><a class="btn-dangky" href="#page6"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/btn-dangky.jpg"/></a></p>
				
				
				
			</div>
		</div>
	</div>
	<div class="section section-intro-2" id="<?php if(wpmd_is_phone()){ echo "page5"; }else{ echo "section4";} ?>">
		<div class="intro clear">
			<div class="div-img">
				<img class="" src="<?php echo get_template_directory_uri(); ?>/images/page-5-img.jpg"/>		
			</div> 
			<div class="div-text">
				<div class="div-text-inner">
					<div class="box-text-head">
						<img class="" src="<?php echo get_template_directory_uri(); ?>/images/text-tham-my-vien.jpg"/>	
					</div>
					<div class="box-text-des">	
						<p>Trong 10 năm qua, Thẩm mỹ viện Placencare luôn hoạt động với mục tiêu “Tôn vinh vẻ đẹp phụ nữ Việt” với <b>hàng trăm dịch vụ cao cấp.</b></p>
						<p>Đi đầu trong việc cập nhật công nghệ <b>LÀM TRẮNG</b> tiên tiến nhất 2016, Placencare đã giúp chị em nhanh chóng xóa bỏ nỗi ám ảnh về một diện mạo chưa thực sự nổi bật – để phái đẹp Việt tự tin tỏa sáng với làn da trắng mịn không tỳ vết.</p>
					</div>
					<p class="box-dangky"><a class="btn-dangky" href="#page6"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/btn-dangky.jpg"/></a></p>
				</div>
			</div>
		</div>
	</div>
	 
	<div class="section section-formdangky" <?php if(wpmd_is_phone()){ echo 'id="page6"';}else{ echo 'id="section5"' ;} ?>>
		<div class="intro clear">
			<p class="headtitle">ĐĂNG KÝ TƯ VẤN VÀ SỬ DỤNG DỊCH VỤ</p>
			<p class="note-title">*Thông tin đăng ký được đảm bảo bí mật</p>
			<div class="box-form">
				<?php
				echo do_shortcode('[contact-form-7 id="15" title="Contact form - Tắm trắng"]');
				?>
				<p class="text-hotline">Hoặc gọi 0916.298.698, 0916.313.689 để được hỗ trợ trực tiếp.</p>
			</div>
			
		</div>
		<div class="box-lienhe clear">
			<div class="div-img">
				<img class="" src="<?php echo get_template_directory_uri(); ?>/images/logo-img.jpg"/>		
			</div> 
			<div class="div-text">
				<div class="div-text-inner">
					<div class="col-1 col">
						<p>Cơ Sở 1</p>
						<p>Số 37 Ngô Thì Nhậm, Hai Bà Trưng, Hà Nội</p>
						<p>Điện thoại: 0439764569/ 88</p>
						<p>Hotline: 0916 298 698</p>
						<p>Email: contact@placencarespa.vn</p>
					</div>
					<div class="col-2 col">
						<p>Cơ Sở 2</p>
						<p>Số 5, Ngõ 117 Thái Hà, Đống Đa, Hà Nội</p>
						<p>Điện thoại: (04) 3537 7855 / 56</p>
						<p>Hotline: 0916 313 689</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>

<div class="sidebar-footer">
	<div class="inner clear">
		<div class="col box-phone">
			<a class="phone" href="tel:0916298698">0916 298 698</a>
		</div>
		<div class="col box-dangky">
			<a class="btn-dangky" href="#page6">Gửi tư vấn</a>
			
		</div>
	</div>
</div>

<?php
 
get_footer('landingpage');
