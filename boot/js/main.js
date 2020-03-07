   
                   $(document).ready(function(){
                         $("#result1").on('click',function(){
                            var roll=$("#roll").val();
                            

                             if(roll != '' ){

                             $.ajax({

                               url:"live.php",
                               method:"POST",
                               data:{roll:roll},
                               dataType:"text",
                               success:function(data){
                                $('#liveseat').fadeIn();
                                  $('#liveseat').html(data);
                                  
                               }

                             });

                              }

                         });
                          


                      });

                   







                 
                   $(document).ready(function(){
                         $("#submit").click(function(){
                            var roll=$("#roll").val();
                             var unit=$("#select").val();
                             var abnc=$("#select1").val();

                             if(roll != '' && unit != '' && abnc != ''){

                             $.ajax({

                               url:"inserabre.php",
                               method:"POST",
                               data:{roll:roll,unit:unit,abnc:abnc},
                               dataType:"text",
                               success:function(data){
                               $("#show").html(data);
                                 $("#roll").val(" "); 
                                 setInterval(function(){
                                   $("#show").hide()
                                 },4000);
                               }

                             });
                             return false;

                              }

                         });

                          $("#submitmess").on('click',function(){
                            var comment=$("#comment").val();
                            

                             if(comment !='' ){

                             $.ajax({

                               url:"getdatafrommain.php",
                               method:"POST",
                               data:{text1:comment},
                               dataType:"text",
                               success:function(data){
                             
                                  $('#seat1').html(data);
                                  $("#comment").val(' ');
                                
                                  
                               }

                             });
                              return false;

                              }
                             

                         });
                          
                          


                      });

                   







         
