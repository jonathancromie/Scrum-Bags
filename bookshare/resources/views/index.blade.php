@extends('layouts.master')

@section('title', 'Home')

@section('content')
	@parent

	{{Session::get('message')}}

	<!-- Banner For Homepage-->
    <section id="banner">
        <div class="inner">
            <h2>This is ShareBook</h2>
		    <p>Share your textbooks with other students at <a href="http://www.qut.edu.au">QUT</a></p>
		    <ul class="actions">
		        <li><a href="register" class="button big special">Sign Up</a></li>
		        <li><a href="about" class="button big alt">Learn More</a></li>
		    </ul>
        </div>
    </section>

    <!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major">
					<h2></h2>
					<p>Choose an option</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="4u">
							<section class="special box">
								<!-- <i class="fa fa-search fa-2x"></i> -->
								<i class="material-icons md-96">search</i>
								<a href="search"><h3>Find a Textbook</h3></a>
								<p>Eu non col commodo accumsan ante mi. Commodo consectetur sed mi adipiscing accumsan ac nunc tincidunt lobortis.</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<!-- <i class="fa fa-share-alt fa-2x"></i> -->
								<i class="material-icons md-96">share</i>
								<a href="share"><h3>Share a Textbook</h3></a>
								<p>Eu non col commodo accumsan ante mi. Commodo consectetur sed mi adipiscing accumsan ac nunc tincidunt lobortis.</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<!-- <i class="fa fa-download fa-2x"></i> -->
								<i class="material-icons md-96">get_app</i>
								<a href="borrow"><h3>Borrow a Textbook</h3></a>
								<p>Eu non col commodo accumsan ante mi. Commodo consectetur sed mi adipiscing accumsan ac nunc tincidunt lobortis.</p>
							</section>
						</div>
					</div>
				</div>
			</section>	
@endsection