 $('body').on('click', '#save', function(e){
 	e.preventDefault()      
 	var snake = $("#info_snake").val();  
 	colorSnakeIds = [];

 	for (var i = 0; i < snake.length; i++){
 		colorSnakeIds.push(snake[i][0] +'-' + snake[i][1])

 	}
                    //   for(var j = 0; j < colorSnakeIds.length; j++){
                    //     $(currenttext+ colorSnakeIds[j]).css({'background': '#e6004c', 'border': '1px solid black'})
                    
                    // }
                    
                      // set variables
                      var rows = $("#rows").val().split('');
                      var cols = $("#cols").val().split('');
                      var br   = $("#num").val().split('');
       //Create Element in Table
       var newTable = document.getElementById('sheet');
       for (var m = 0; m < rows; m++) {
       	var tr = document.createElement('tr');
       	newTable.appendChild(tr);

       	for (var n = 0; n < cols; n++) {
       		var td = document.createElement('td');
       		td.setAttribute("id","('.tr'-'.td')");
       		tr.appendChild(td);
       		
       	}     
       }   
                  // restrictions and board checks
                  var board = [];

                  board.length = 1;

                  1<=board<=10.

                  for (var i = 0; i < board.length; i++) {

                  	board = (rows + ',' + cols)

                  	if (board == '') {

                  		

                  		console.log('Write your coordinates');

                  		

                  	} else {

                  		var board = [rows,cols];

                  		console.log(board);

                  	}

                  	if (snake.cols < 0 || snake.rows < 0){

                  		console.log('Your snake out')

                  	}



                  }
                  console.log(newTable);
                  console.log(snake);
                  console.log(br);
                  

              })