<?php  
/*
	Template Name: Catelogy Online Test
*/
get_header();
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 panner_test"></div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<ul class="nav nav-tabs menu_tap">
				<li class="active">
					<a href="#All" data-toggle="tab">All</a>
				</li>
				<li>
					<a href="#Subjects" data-toggle="tab">Subjects</a>
				</li>
				<li>
					<a href="#International" data-toggle="tab">International Programs</a>
				</li>
				<li>
					<a href="#Test" data-toggle="tab">Test Prep</a>
				</li>
				<li>
					<a href="#Languages" data-toggle="tab">Languages</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">	
		<div class="col-lg-12 col-md-12 col-sm-12 tab-content">
			<div class="tab-pane active fade in" id="All">
				<ul class="ul_tap">
					<!-- Các môn Subjects -->
					<li>
						<a href="<?php echo home_url("kiem-tra/maths"); ?>">
							<div class="name_test1">Maths</div>
							<div class="catogory_test1">Subjects</div>
							<div class="start_test1">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-orange btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/physics"); ?>">
							<div class="name_test1">Physics</div>
							<div class="catogory_test1">Subjects</div>
							<div class="start_test1">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-orange btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/chemistry"); ?>">
							<div class="name_test1">Chemistry</div>
							<div class="catogory_test1">Subjects</div>
							<div class="start_test1">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-orange btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/biology"); ?>">
							<div class="name_test1">Biology</div>
							<div class="catogory_test1">Subjects</div>
							<div class="start_test1">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-orange btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/sciences"); ?>">
							<div class="name_test1">Sciences</div>
							<div class="catogory_test1">Subjects</div>
							<div class="start_test1">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-orange btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<!-- Các môn Language -->
					<li>
						<a href="<?php echo home_url("kiem-tra/english"); ?>">
							<div class="name_test2">English</div>
							<div class="catogory_test2">Languages</div>
							<div class="start_test2">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-primary btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/french"); ?>">
							<div class="name_test2">French</div>
							<div class="catogory_test2">Languages</div>
							<div class="start_test2">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-primary btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					
					<li>
						<a href="<?php echo home_url("kiem-tra/korean"); ?>">
							<div class="name_test2">Korean</div>
							<div class="catogory_test2">Languages</div>
							<div class="start_test2">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-primary btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/chinese"); ?>">
							<div class="name_test2">Chinese</div>
							<div class="catogory_test2">Languages</div>
							<div class="start_test2">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-primary btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/japanese"); ?>">
							<div class="name_test2">Japanese</div>
							<div class="catogory_test2">Languages</div>
							<div class="start_test2">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-primary btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<!-- Các môn International Programs -->
					<li>
						<a href="<?php echo home_url("kiem-tra/ib"); ?>">
							<div class="name_test3">IB</div>
							<div class="catogory_test3">International Programs</div>
							<div class="start_test3">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-GREEN btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/ap"); ?>">
							<div class="name_test3">AP</div>
							<div class="catogory_test3">International Programs</div>
							<div class="start_test3">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-GREEN btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					
					<li>
						<a href="<?php echo home_url("kiem-tra/igcse"); ?>">
							<div class="name_test3">IGCSE</div>
							<div class="catogory_test3">International Programs</div>
							<div class="start_test3">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-GREEN btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/a-as-level"); ?>">
							<div class="name_test3">A/AS Level</div>
							<div class="catogory_test3">International Programs</div>
							<div class="start_test3">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-GREEN btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<!-- Các môn Test Prep -->
					<li>
						<a href="<?php echo home_url("kiem-tra/sat"); ?>">
							<div class="name_test4">SAT</div>
							<div class="catogory_test4">Test Prep</div>
							<div class="start_test4">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-black btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<!-- TAP2 -->
			<div class="tab-pane fade in" id="Subjects">
				<ul class="ul_tap">
					<!-- Các môn Subjects -->
					<li>
						<a href="<?php echo home_url("kiem-tra/maths"); ?>">
							<div class="name_test1">Maths</div>
							<div class="catogory_test1">Subjects</div>
							<div class="start_test1">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-orange btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/physics"); ?>">
							<div class="name_test1">Physics</div>
							<div class="catogory_test1">Subjects</div>
							<div class="start_test1">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-orange btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					
					<li>
						<a href="<?php echo home_url("kiem-tra/chemistry"); ?>">
							<div class="name_test1">Chemistry</div>
							<div class="catogory_test1">Subjects</div>
							<div class="start_test1">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-orange btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/biology"); ?>">
							<div class="name_test1">Biology</div>
							<div class="catogory_test1">Subjects</div>
							<div class="start_test1">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-orange btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/sciences"); ?>">
							<div class="name_test1">Sciences</div>
							<div class="catogory_test1">Subjects</div>
							<div class="start_test1">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-orange btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<!-- TAP3 -->
			<div class="tab-pane fade in" id="International">
				<ul class="ul_tap">
					<!-- Các môn International Programs -->
					<li>
						<a href="<?php echo home_url("kiem-tra/ib"); ?>">
							<div class="name_test3">IB</div>
							<div class="catogory_test3">International Programs</div>
							<div class="start_test3">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-GREEN btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/ap"); ?>">
							<div class="name_test3">AP</div>
							<div class="catogory_test3">International Programs</div>
							<div class="start_test3">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-GREEN btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					
					<li>
						<a href="<?php echo home_url("kiem-tra/igcse"); ?>">
							<div class="name_test3">IGCSE</div>
							<div class="catogory_test3">International Programs</div>
							<div class="start_test3">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-GREEN btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/a-as-level"); ?>">
							<div class="name_test3">A/AS Level</div>
							<div class="catogory_test3">International Programs</div>
							<div class="start_test3">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-GREEN btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<!-- TAP3 -->
			<div class="tab-pane fade in" id="Test">
				<ul class="ul_tap">
					<!-- Các môn Test Prep -->
					<li>
						<a href="<?php echo home_url("kiem-tra/sat"); ?>">
							<div class="name_test4">SAT</div>
							<div class="catogory_test4">Test Prep</div>
							<div class="start_test4">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-black btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<!-- TAP5 -->
			<div class="tab-pane fade in" id="Languages">
				<ul class="ul_tap">
					<!-- Các môn Subjects -->
					<li>
						<a href="<?php echo home_url("kiem-tra/english"); ?>">
							<div class="name_test2">English</div>
							<div class="catogory_test2">Languages</div>
							<div class="start_test2">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-primary btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/french"); ?>">
							<div class="name_test2">French</div>
							<div class="catogory_test2">Languages</div>
							<div class="start_test2">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-primary btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					
					<li>
						<a href="<?php echo home_url("kiem-tra/korean"); ?>">
							<div class="name_test2">Korean</div>
							<div class="catogory_test2">Languages</div>
							<div class="start_test2">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-primary btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/chinese"); ?>">
							<div class="name_test2">Chinese</div>
							<div class="catogory_test2">Languages</div>
							<div class="start_test2">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-primary btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="<?php echo home_url("kiem-tra/japanese"); ?>">
							<div class="name_test2">Japanese</div>
							<div class="catogory_test2">Languages</div>
							<div class="start_test2">
								<span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-8 col-sm-offset-1">
									<button class="btn btn-primary btn-lg test_online">Kiểm tra</button>
								</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>

