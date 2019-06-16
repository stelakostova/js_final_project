<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Snake</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    </head>
    <body>
       <form id="snake">
    <label><span><i class="fas fa-envelope-open-text"></i></span></label>
    <input type="text" name="info_board" id="board" value="info_board">
    <label><span><i class="fas fa-envelope"></i></span></label>   
    <input type="text" name="snake" id="info_snake" value="info_snake">
    <input type="text" name="num" id="num" value="num_move">
    <input type="submit" name="submit" value="save" id="save">
  </form>
      <table id = "sheet" align="center" border="3">
     <!--  <?php
        $rows = 5;
        $cols = 5;
        for ($i=0; $i < $rows; $i++) { ?>
         <tr>
           <?php for($j = 0; $j < $cols; $j++){ ?>
            <td id="<?= $i .'-'. $j?>"></td>
          <?php } ?>
         </tr>
       <?php }
        
       ?>  -->
      </table>
      
      <script type="text/javascript">
                  var snake =   [],
                  colorSnakeIds = [];

                      for (var i = 0; i < snake.length; i++){
                        colorSnakeIds.push(snake[i][0] +'-' + snake[i][1])
                      }
                      for(var j = 0; j < colorSnakeIds.length; j++){
                        $('td#'+ colorSnakeIds[j]).css({'background': '#e6004c', 'border': '1px solid black'})
                      }
                       
                      $('body').on('click', '#save', function(e){
                        e.preventDefault()
                        var snakeArr = $("#info_snake").val().split('');
                        var board = $("#board").val().split('');
                        var n = $("#num").val().split('');
                        var secondSnakeArr = [];
                        for(var i = 0; i < snakeArr.length; i++){
                          //trim   
                         var snakeArr = $("#info_snake").val().trim('');
                        // var snakeArr = $("#info_snake").val().replace("[","");
                         var snake = snakeArr;
                         // var elements = snakeArr[i].split('');
                         //  secondSnakeArr[i] = snakeArr[i].split(',')
                                               }
                        console.log()    
                      })              
         </script>

</body>

</html>