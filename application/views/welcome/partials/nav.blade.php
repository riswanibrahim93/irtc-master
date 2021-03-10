<nav class="navbar navbar-expand-sm fixed-top">
	<div class="container">
		<a href="/" class="navbar-brand navbar-brand-edit" onclick="$('body').animatescroll();">
			<div class="logo-nav"></div>
		</a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#mynavbar">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="mynavbar">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link nav-link-edit" onclick="$('#about-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});" style="color: #fff;">Home
						<div class="garis" id="br"></div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-link-edit" onclick="$('#kompetisi-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});" style="color: #fff;">About
						<div class="garis" id="br"></div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-link-edit" onclick="$('#acara-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});" style="color: #fff;">Events
						<div class="garis" id="br"></div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-link-edit" onclick="$('#timeline-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});" style="color: #fff;">Gallery
						<div class="garis" id="br"></div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-link-edit" onclick="$('#kontak-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});" style="color: #fff;">Contact
						<div class="garis" id="br"></div>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('auth.login') }}"><button class="btn px-5 signup">Login/Register</button></a>
				</li>
			</ul>
		</div>
	</div>
</nav>