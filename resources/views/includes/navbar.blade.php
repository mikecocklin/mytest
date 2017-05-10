
<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ url('home') }}">Home</a>
	</div>
	<ul class="nav nav-tabs">
		<li><a href="{{ URL::to('cars') }}">View All Cars</a></li>
		@if( ! empty($editpage))
  			<li><a href="{{ URL::to('cars/create') }}">Create New Car</a></li>
		@endif
	</ul>
</nav>
