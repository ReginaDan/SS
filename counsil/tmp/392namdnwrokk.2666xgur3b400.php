        <div id="a_login" class="modal fade a_login" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="a_login_box">
                        <ul class="nav nav-tabs">
                            <li><p>Обратиться в Студсовет</p></li>
                        </ul>
                        <div class="tab-content">
                            <!-- <script type="text/javascript">
                                    function sendForm(){
                                        $.ajax({
                                            type: "POST",
                                            dataType: 'json',
                                            data: { 
                                             name: name,
                                             surname: surname,
                                             appeal: appeal                      
                                           },
                                           success: function(data){alert(data)},
                                           error: function(data){alert("asd")},
                                            });
                                    }
                            </script> -->   
                            <div id="login" class="a_login tab-pane fade active in">
                                <form id="form" action="" method="post">
                                    <div class="form-group">
                                        <input id="name" name="name" class="form-control" placeholder="Имя" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input id="surname" name="surname" class="form-control" placeholder="Фамилия" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input id="email" name="email" class="form-control" placeholder="Email" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input id="grade" name="grade" class="form-control" placeholder="Курс" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input id="id_category" name="id_category" class="form-control hidden" type="text" value="<?php echo $appealIndex; ?>">
                                        <textarea id="appeal" name="appeal" class="form-control" placeholder="Опишите Вашу проблему" cols="40" rows="5"></textarea>

                                    </div>
                                    <div class="form-group clearfix">
                                        <button name="sumbit" id="submit" value="submit" type="submit" data-dismiss="modal" class="btn">Отправить обращение</button>
                                    </div>
                                </form>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                                <script>
                                    $(document).ready(function(){
                                        // click on button submit
                                        $("#submit").on('click', function(){
                                            // send ajax
                                            $.ajax({

                                                url: '/counsil/', // url where to submit the request
                                                type : "POST", // type of action POST || GET
                                                dataType : 'json', // data type
                                                data : $("#form").serialize(), // post data || get data
                                                success : function() {
                                                    alert("Ваша заявка принята");
                                                   // console.log(result);
                                                },
                                                error: function() {
                                                    alert("Ваша заявка принята");
                                                    //console.log(xhr, resp, text);
                                                }
                                            })
                                        });
                                    });

                                </script>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
