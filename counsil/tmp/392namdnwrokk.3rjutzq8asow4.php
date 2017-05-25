   <footer class="a_footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-sm-6">
                    <div class="a_f_block">
                        <p>СтудСовет НИУ ВШЭ – Выборный орган студенческого самоуправления Высшей школы экономики</p>
                        <hr>
                        <strong>Мы в социальных сетях</strong>
                        <div class="col-xs-12">
                        <ul class="a_list a_social_icons">
	                        <li><a href="mailto:Studsovet@hse.ru"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.facebook.com/hsecouncil"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/CouncilHse"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://vk.com/hsecouncil"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-sm-6">
                    <div class="a_f_block  a_address_block">
	                   
	                   <div class="col-xs-12"> 
	                    <h5>Наши контакты</h5>
	                   </div>
	                   <div class="col-xs-12">
                        <p>
                            <strong>Заседания проходят по адресу:</strong>
                            <span>г. Москва, ул. Мясницкая, д. 22</span>
                        </p>
                        <p>
                            <strong><a href="#."><i class="fa fa-phone" aria-hidden="true"></i> 0044 -123 4567 789</a></strong>
                            <span><a href="#."><i class="fa fa-envelope-o" aria-hidden="true"></i> info@needcharity.com</a></span>
                        </p>
                        <p>
                            <strong><a href="#."><i class="fa fa-phone" aria-hidden="true"></i> 0044 -123 4567 789</a></strong>
                            <span><a href="#."><i class="fa fa-envelope-o" aria-hidden="true"></i> contact@needcharity.com</a></span>
                        </p>
	                   </div>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="a_f_block ">
	                    <div class="col-xs-12"> 
                        <h5>Новости</h5>
	                    </div>
	                    <div class="col-xs-12"> 
                        <p>Подписаться на новости от студенческого совета</p>
                        <hr>
                        <form class="a_mail_form" action="" method="post" id="follow" name="follow">
                            <div class="form-group">
                                <input  id="emailAddress" name="emailAddress" type="text" class="form-control" placeholder="Email">
                                <input  name="addToFollowers" id="addToFollowers" type="text" class="form-control hidden" value="addToFollowers">
                                <button id="submitFollow" name="submitFollow" type="submit" data-dismiss="modal" class="btn "><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </div>
                        </form>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                        <script>
                                $(document).on("submit", "#follow", function (e){
                                    e.preventDefault()
                                        $.ajax({

                                                url: '/counsil/', // url where to submit the request
                                                type : "POST", // type of action POST || GET
                                                dataType : 'json', // data type
                                                data : $("#follow").serialize(), // post data || get data
                                                success : function() {
                                                    alert("Ваша заявка принята");
                                                    return;
                                                    //console.log(result);
                                                },
                                                error: function() {
                                                    alert("Ваша заявка принята");
                                                    return;
                                                    //console.log(xhr, resp, text);
                                                }
                                            });
                                    return false
                                    });

                                </script>
	                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="a_copyright">
            <div class="container">
                <div class="a_copyright_left">
                    <p>&copy; 2017 Разработано<a href="http://hse.styleru.net"> Бизнес в стиле.RU</a></p>
                </div>
                <div class="a_copyright_right">
					<ul class="a_list a_social_icons_corp">
                       <li><a href="https://www.facebook.com/styleru/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                       <li><a href="https://twitter.com/Styleru_Family"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                       <li><a href="https://vk.com/styleru"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                   	</ul>                
                </div>
            </div>
        </div>
    </footer>
