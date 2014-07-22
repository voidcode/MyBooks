$(function(){
    function fillBooksIntoList(){
	//show the #booklist-page
		    			window.location.href = '#booklist-page'
			    		$.ajax({
			    			type: 'get',
			    			async: true,
				            url:'api.php',
				            data: {f: 'getBooks'},
				            dataType: 'json'
				        }).done(function(books){
				        	//rm all item from 'booklist'
				        	$('.booklist').empty();
				        	//apped books to listview
				            $.each(books, function(index, value){
				                $('.booklist').append('<li>'+
				                    '<a target="_blank" href="books/'+value+'">'+
				                    	value+ //<-- this is path to one-book-item
				                    '</a>'+
				                '</li>');
				            });
				            $('.booklist').listview('refresh');
				        });
    }    

	//on 'Get source code' button-clicked
	$('.getsourcecode').on('click', function(e){
		window.location.href = 'https://github.com/voidcode/MyBooks';
	});
	    	$('.exit-booklist-page').on('click', function(event){
				//rm all item from 'booklist'
				$('.booklist').empty();
	    	});
	    	$('.booklist').empty();
	    	//on logon-page form submit
	    	$('#logon-form').submit(function(event){
	    	    var _data = $(this).serializeArray();
		    	$.ajax({
		    		type: 'get',
		    		async: true,
		    		dataType: 'json',
		    		url: 'api.php',
		    		data: _data,
		    	}).done(function(data){
		    		//gets books from api-php base on login 'err', if true then 
		    		//fill listview-page with 'books'
		    		if(!data.err){
				        fillBooksIntoList();
		    		}
		    		else {
		    			alert('This is not the password!');
		    		}
		    	});
	    		event.preventDefault();
	    	});
	$('#upload-form').submit(function(event){
	    event.preventDefault();
	    var _formData = new FormData($(this)[0]);
	    _formData.append('f', 'uploadFile');
	    console.log('_data: '+_formData);
	    $.ajax({
	        url: 'api.php',
	        data: _formData,
	        type: 'POST',
	        cache: false,
            contentType: false,
            processData: false
	    }).done(function(data){
	        if(data.err === true){
	            alert('ERROR: Book is not uploaded!');
	        } else {
	            //update books-listview
	            fillBooksIntoList();
	        }
	    });
	    return false;
	});
});