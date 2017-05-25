        <div class="a_menu_section">
            <nav class="navbar a_navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                        </button> -->
                        <a class="navbar-brand" href="/counsil/">
                            <img src="<?php echo $BASE; ?>/ui/images/logomin.png" alt="">
                        </a>
                        <ul class="nav navbar-nav navbar-right a_small_menu">
                            <li><a href="#." onclick="openNav()"><i class="fa fa-align-justify" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
	                        <li><a href="/counsil/">ГЛАВНАЯ</a></li>
                            <li><a href="/counsil/about">О НАС</a></li>
                            <li><a href="/counsil/contain">СОСТАВ</a></li>
                            <li class="dropdown a_dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" >КОМИТЕТЫ</a>
                                <ul class="dropdown-menu multi-level">
	                              <?php foreach (($commitees?:array()) as $com): ?>
	                                <li class="dropdown-submenu"><a><?php echo $com['name']; ?></a>
	                                <ul class="dropdown-menu">
										<li><a href="/counsil/commitees/info/link/<?php echo $com['link']; ?>">Основная информация</a></li>
						                <li><a href="/counsil/commitees/projects/link/<?php echo $com['link']; ?>">Проекты</a></li>
						                <li><a href="/counsil/commitees/blogs/link/<?php echo $com['link']; ?>">Блог</a></li>  
	                                </ul>
	                                </li> 
	                                <?php endforeach; ?> 
									</ul>
									</li>
                            <li><a href="/counsil/ombudsman">ОМБУДСМЕН</a></li>
                            <li class="dropdown a_dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" >ФАКУЛЬТЕТЫ</a>
	                            <ul class="dropdown-menu multi-level">
	                            <?php foreach (($departments?:array()) as $dep): ?>
	                            	<li><a href="/counsil/locals/link/<?php echo $dep['link']; ?>" ><?php echo $dep['dname']; ?></a></li>
	                            <?php endforeach; ?>
	                            </ul>
                            </li>
	                        <li><a href="/counsil/news">НОВОСТИ</a></li>
	                        <li><a href="/counsil/documents">ДОКУМЕНТЫ</a></li>
	                        <li><a href="/counsil/organizations">СТУДЕНЧЕСКАЯ ЖИЗНЬ</a></li>
                            
                     <!--       <li><a href="#." onclick="openNav()"><i class="fa fa-align-right" aria-hidden="true"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
