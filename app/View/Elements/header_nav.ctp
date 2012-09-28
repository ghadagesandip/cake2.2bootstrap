

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
                 <?php echo $this->Html->link('Dashboard',array('controller' => 'Dashboards', 'action' => 'index'));?>
              </li>
              <li class="">
                <?php echo $this->Html->link('User Groups',array('controller' => 'Groups', 'action' => 'index'));?>
              </li>
              <li class="">
                <?php echo $this->Html->link('Users',array('controller' => 'Users', 'action' => 'index'));?>
              </li>
            </ul>
      </div>
    </div>
  </div>
</div>