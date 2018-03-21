@extends('business.layout')

@section('contents')

        @include('business.component.profile')

@endsection

@section('js')
<script type="text/javascript">
	function update() {
		var e = document.getElementById('profile');
		var u = document.getElementById('update');
		e.style.display = 'none';
		u.style.display = 'block';
	}
</script>
@endsection()