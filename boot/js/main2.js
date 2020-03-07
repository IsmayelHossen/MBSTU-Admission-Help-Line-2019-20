   
                   $(document).ready(function(){
                         $("#result").on('click',function(){
                            var roll=$("#roll").val();
                             var select=$("#select").val();

                             if(roll != '' && select != ''){

                             $.ajax({

                               url:"live2.php",
                               method:"POST",
                               data:{roll:roll,select:select},
                               dataType:"text",
                               success:function(data){
                                $('#liveseat').fadeIn();
                                  $('#liveseat').html(data);
                                  
                               }

                             });

                              }

                         });
                           $("#result1").on('click',function(){
                            var roll=$("#roll").val();
                            

                             if(roll != '' ){

                             $.ajax({

                               url:"live.php",
                               method:"POST",
                               data:{roll:roll},
                               dataType:"text",
                               success:function(data){
                             
                                  $('#liveseat').html(data);
                                  $("#roll").val(' ');
                                
                                  
                               }

                             });
                              return false;

                              }
                             

                         });

//registration//

                          
  $("#registration").on('click',function(){
                            var roll=$("#user").val();
                             var select=$("#pass").val();

                             if(roll != '' && select != ''){

                             $.ajax({

                               url:"registrationv.php",
                               method:"POST",
                               data:{roll:roll,select:select},
                               dataType:"text",
                               success:function(data){
                               
                                  $('#show').html(data);
                                  
                               }

                             });

                              }

                         });



                      });

                   






