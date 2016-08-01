    <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar"style="background-color: #393939;min-width: 30px">
        <ul class="nav">
            <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
        </ul>
                   
        <ul class="nav hidden-xs" id="lg-menu">
            <li><a href="<?php echo base_url();?>admin/dashboard"><i class="glyphicon glyphicon-list-alt"></i> Dashboard</a></li>
            <li><a href="#agent-manage-col" data-toggle="collapse"><i class="glyphicon glyphicon-list"></i> Agent Management</a></li>
                <ul class="collapse nav hidden-xs" id="agent-manage-col">
                    <li><a href="#" style="padding-left: 40px">Agent 1.1</a></li>
                </ul>
            <li><a href="#prod-manage-col" data-toggle="collapse"><i class="glyphicon glyphicon-paperclip"></i> Product Management</a></li>
                <ul class="collapse nav hidden-xs" id="prod-manage-col">
                    <li><a href="#" style="padding-left: 40px">Product 1.1</a></li>
                </ul>
            <li><a href="#user-manage-col" data-toggle="collapse"><i class="glyphicon glyphicon-refresh"></i> User Management</a></li>
                <ul class="collapse nav hidden-xs" id="user-manage-col">
                    <li><a href="#" style="padding-left: 40px">User 1.1</a></li>
                </ul>
            <hr class="row">
            <li><a href="<?php echo base_url();?>logout"><i class="glyphicon glyphicon-log-out"></i> Log-out</a></li>
        </ul>
                    
                    <!-- tiny only nav-->
        <ul class="nav visible-xs" id="xs-menu">
            <li><a href="<?php echo base_url();?>admin/dashboard" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
            <li><a href="#" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
            <li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
            <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
            <hr class="row">
            <li><a href="<?php echo base_url();?>logout" class="text-center"><i class="glyphicon glyphicon-log-out"></i></a></li>
        </ul>
                  
    </div>