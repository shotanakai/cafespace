 <div class='navbar navbar-inverse navbar-fixed-top'>
     <div class='container'>
         <div class='navbar-header'>
             <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
                 <span class='icon-bar'></span>
                 <span class='icon-bar'></span>
                 <span class='icon-bar'></span>
             </button>
             <?php echo $this->Html->link('Cafe Space', array('controller' => 'posts', 'action' => 'index'), array('class' => 'navbar-brand')) ?>
         </div>
         <div class='navbar-collapse collapse'>
             <ul class='nav navbar-nav'>
                <li class='active'><?php echo $this->Html->link('Home', array('controller' => 'posts', 'action' => 'index')) ?></li> 
                 <li class='dropdown'>
                     <a href='#' class='dropdown-toggle' data-toggle='dropdown'>カテゴリ <b class='caret'></b></a>
                     <ul class='dropdown-menu'>
                         <li><a href='/category/1'>カテゴリA</a></li>
                         <li><a href='/category/2'>カテゴリB</a></li>
                     </ul>
                 </li>
             </ul>
         </div>
     </div>
 </div>