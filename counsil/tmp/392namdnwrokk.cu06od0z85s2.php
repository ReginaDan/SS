<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h4>Главное меню</h4>
    <ul class="nav navbar-nav">
	    <li><a href="/counsil/">Главная</a></li>
        <li><a href="/counsil/about">О нас</a></li>
        <li><a href="/counsil/contain">Состав</a></li>
        
       <li class="dropdown a_dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >Комитеты</a>
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
        <li><a href="/counsil/ombudsman">Омбудсмен</a></li>
        <li class="dropdown a_dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Факультеты</a>
        	<ul class="dropdown-menu multi-level">
	            <?php foreach (($departments?:array()) as $dep): ?>
	                <li class="dropdown-submenu"><a href="/counsil/locals/link/<?php echo $dep['link']; ?>"><?php echo $dep['dname']; ?></a></li> 
	            <?php endforeach; ?> 
			</ul>
		</li>
        <li><a href="/counsil/news">Новости</a></li>
		<li><a href="/counsil/documents">Документы</a></li>
        <li><a href="/counsil/organizations">Студенческая жизнь</a></li>
        
    </ul>
</div>
 
