<?php?>
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo $_SESSION['Foto'];?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php 
                            echo $_SESSION['Nome'];
                        ?>
                    </div>
                    <div class="email">
                        <?php 
                            echo $_SESSION['Email'];
                        ?>
                    </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Perfil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Técnicos</a></li>
                            
                            <li role="separator" class="divider"></li>
                            <li><a <?php echo "href='http://$host/infoprime/rolloutd/sair.php'";?>><i class='material-icons'>input</i>Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>