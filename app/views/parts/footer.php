<div id="footer">
	<div class="container">
		<p class="text-muted credit">
			<!--<span class="pull-right">Help</span>-->
			© HERO - 2013
		</p>
	</div>
</div>
<script>
	$(document).ready(function()
	{
		$('[data-toggle=tooltip]').tooltip();
		$('.deleteButton').on('click', function(e)
		{
			e.preventDefault();
			var link = $(this).attr('href');

			// confirm dialog
			alertify.confirm("Are you sure you want to delete this?", function (ee)
			{
				if (ee)
				{
					// user clicked confirm
					window.location = link;
				}
				else
				{
					// user clicked "cancel", do nothing
				}
			});

			return false;
		});

		jQuery.timeago.settings.allowFuture = true;
		jQuery(".timeago").timeago();

		setInterval(function()
		{
			var utcDate = new Date().toUTCString();
			$('.time-now').html(utcDate);
		}, 1000);
	});
</script>