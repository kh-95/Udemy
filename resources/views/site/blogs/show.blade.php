@extends('site.layout')
@section('content')
	<main>
		<section id="hero_in" class="general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Udema blog</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-9">
					<div class="bloglist singlepost">
						<p><img alt="" class="img-fluid" src="http://via.placeholder.com/800x400/ccc/fff/blog-single.jpg"></p>
						<h1>{{$post->title}}</h1>
						<div class="postmeta">
							<ul>
								<li><a href="#"><i class="icon_folder-alt"></i> Collections</a></li>
								<li><a href="#"><i class="icon_clock_alt"></i> {{$post->created_at}}</a></li>
								<li><a href="#"><i class="icon_pencil-edit"></i> Admin</a></li>
								<li><a href="#"><i class="icon_comment_alt"></i> {{$post->comments->count()}} Comments</a></li>
							</ul>
						</div>
						<!-- /post meta -->
						<div class="post-content">
							<div class="dropcaps">
								<p>{{$post->description}}</p>
							</div>

							
						</div>
						<!-- /post -->
					</div>
					<!-- /single-post -->

					<div id="comments">
						<h5>Comments</h5>
						<ul>
							@foreach($comments as $comment)
							<li>
								<div class="avatar">
									<a href="#"><img src="http://via.placeholder.com/150x150/ccc/fff/avatar1.jpg" alt="">
									</a>
								</div>
								<div class="comment_right clearfix">
									<div class="comment_info">
										By <a href="#">{{$comment->user()->name}}</a><span>|</span>{{$comment->created_at}}<span>|</span><a href="#">Reply</a>
									</div>
									<p>
										{{$comment->comment}}
									</p>
								</div>
								<ul class="replied-to">
								
											
								
							</li>
							@endforeach
						</ul>
					</div>

					<hr>

					<h5>Leave a Comment</h5>
					<form method="post"   action="{{route('user.comments.store')}}">
						@csrf

						<div class="form-group">
							<input type="hidden" name="post_id" id="name2" class="form-control" value="{{$post->id}}">
						</div>
						<div class="form-group">
							<input type="text" name="name" id="name2" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<input type="text" name="email" id="email2" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="text" name="email" id="website3" class="form-control" placeholder="Website">
						</div>
						<div class="form-group">
							<textarea class="form-control" name="comment" id="comments2" rows="6" placeholder="Message Below"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" id="submit2" class="btn_1 rounded add_bottom_30"> Submit</button>
						</div>
					</form>
				</div>
				<!-- /col -->

				<aside class="col-lg-3">
					<div class="widget">
						<form >
							<div class="form-group">
								<input type="text" name="search" id="search" class="form-control" placeholder="Search...">
							</div>
							<button type="submit" id="submit" class="btn_1 rounded"> Search</button>
						</form>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Recent Posts</h4>
						</div>
						<ul class="comments-list">
							<li>
								<div class="alignleft">
									<a href="#0"><img src="http://via.placeholder.com/150x150/ccc/fff/blog-5.jpg" alt=""></a>
								</div>
								<small>11.08.2016</small>
								<h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
							</li>
							<li>
								<div class="alignleft">
									<a href="#0"><img src="http://via.placeholder.com/150x150/ccc/fff/blog-6.jpg" alt=""></a>
								</div>
								<small>11.08.2016</small>
								<h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
							</li>
							<li>
								<div class="alignleft">
									<a href="#0"><img src="http://via.placeholder.com/150x150/ccc/fff/blog-4.jpg" alt=""></a>
								</div>
								<small>11.08.2016</small>
								<h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
							</li>
						</ul>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Blog Categories</h4>
						</div>
						<ul class="cats">
							<li><a href="#">Admissions <span>(12)</span></a></li>
							<li><a href="#">News <span>(21)</span></a></li>
							<li><a href="#">Events <span>(44)</span></a></li>
							<li><a href="#">Focus in the lab <span>(31)</span></a></li>
						</ul>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Popular Tags</h4>
						</div>
						<div class="tags">
							<a href="#">Information tecnology</a>
							<a href="#">Students</a>
							<a href="#">Community</a>
							<a href="#">Carreers</a>
							<a href="#">Literature</a>
							<a href="#">Seminars</a>
						</div>
					</div>
					<!-- /widget -->
				</aside>
				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->
	
@endsection