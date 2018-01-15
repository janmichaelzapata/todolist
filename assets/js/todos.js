// check off specific to dos by clicking

$("ul").on("click", "li", function(){
	$(this).toggleClass("completed");

	//ajax post request
	$.post('done.php',
		{id : $(this).attr('id')},
		function(data,status) {

		});
});


$('#newTask').keypress(function(event){
	// console.log(event.which);
	if(event.which == 13) {
		var todoText = $(this).val();
		// console.log(todoText);	

		$(this).val(''); //delete text from input

		$.post('create.php',
			{task: todoText},
			function(data,status){
				// console.log(data);
				$('ul').append('<li id="' + data + '"><span><i class="fa fa-trash"></i></span>'+ todoText +'</li>');
			});
	}
});


//deleting task
$('ul').on('click', 'span', function(){
	//remove list item from dom
	$(this).parent().fadeOut(500, function() {
		$(this).remove();
	});
	// console.log($(this).parent().attr('id')); //retrieve item deleted

	//Ajax request to update json
	$.post('delete.php', {id:$(this).parent().attr('id')}, function(data,status){
		console.log(data);
	});
});