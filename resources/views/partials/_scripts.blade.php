<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
	
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{!! asset('/dist-3.3.7/js/bootstrap.min.js') !!}" ></script>

<!-- DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/dt-1.10.15/datatables.min.js"></script>

<!-- Dropdown -->
<script type="text/javascript">
$(document).ready(function() {
    $('.dropdown-toggle').dropdown()
});
</script>

@yield('pageSpecificScripts')
