

<div class="navbar navbar-inverse navbar-fixed-top">
   <div class="navbar-inner">
      <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </a>
         <div class="nav-collapse collapse">
            <ul class="nav ">
              <li class="active">
                 <?php echo $this->Html->link('Dashboard',array('plugin'=>'usermgmt','controller' => 'users', 'action' => 'dashboard'));?>
              </li>
              <li class="">
                <?php echo $this->Html->link('Department',array('plugin'=>null,'controller' => 'departments', 'action' => 'index'));?>
              </li>
              <li class="">
                <?php echo $this->Html->link('Posts',array('plugin'=>null,'controller' => 'posts', 'action' => 'index'));?>
              </li>
            </ul>
      </div>
    </div>
  </div>
</div>