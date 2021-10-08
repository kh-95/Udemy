

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">{{auth()->user()->name}}</div>
								
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.html" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.users.index')}}" class="nav-link"><i class="icon-copy"></i> <span>All Users</span></a>

							
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.users.create')}}" class="nav-link"><i class="icon-color-sampler"></i> <span>Create new user</span></a>

							
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.categories.index')}}" class="nav-link"><i class="icon-copy"></i> <span>All Categories</span></a>

							
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.categories.create')}}" class="nav-link"><i class="icon-color-sampler"></i> <span>Create new category</span></a>

							
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.comments.index')}}" class="nav-link"><i class="icon-copy"></i> <span>All Comments</span></a>

							
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.messages.index')}}" class="nav-link"><i class="icon-copy"></i> <span>All Messages</span></a>

							
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.courses.index')}}" class="nav-link"><i class="icon-copy"></i> <span>All courses</span></a>

							
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.courses.create')}}" class="nav-link"><i class="icon-color-sampler"></i> <span>Add new course</span></a>

							
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.lessons.index')}}" class="nav-link"><i class="icon-copy"></i> <span>All lessons</span></a>

							
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.reviews.index')}}" class="nav-link"><i class="icon-copy"></i> <span>All Reviews</span></a>

							
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.lessons.create')}}" class="nav-link"><i class="icon-color-sampler"></i> <span>Add new lesson</span></a>

							
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.posts.index')}}" class="nav-link"><i class="icon-copy"></i> <span>All Posts</span></a>

							
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.posts.create')}}" class="nav-link"><i class="icon-color-sampler"></i> <span>Add new post</span></a>

							
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="{{route('admin.enrollments.index')}}" class="nav-link"><i class="icon-copy"></i> <span>All Enrollments</span></a>

							
						</li>


					

						


						

					

						

					</ul>
				</div>
				<!-- /main navigation -->

			