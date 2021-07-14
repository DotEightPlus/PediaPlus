
            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">Notifications</h4>

                <div class="notification-list nicescroll">
                     <?php
                     $user_id = $_SESSION['user_id'];

                    $sql = "SELECT * from `user_notify` where `user_id` = '$user_id' and `status` = 'unread'";
                    $result = query($sql);

                     while($row = mysqli_fetch_array($result)) {

                     ?>
                    <ul class="list-group list-no-border user-list">
                       
                        <li class="list-group-item">
                            <?php echo '
                            <a href="./inbox?id='.$row['sn'].'";  class="user-list-item">';
                            ?>
                                <div class="icon bg-info">
                                    <i class="zmdi zmdi-comment"></i>
                                </div>
                                    <div class="user-desc">
                                    <span class="name"><?php echo $row['subject']; ?></span>
                                    <span class="desc"><?php echo $row['message']; ?></span>
                                    <span class="time"><?php echo $row['date']; ?></span>
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                   <?php
               } 
               ?>
                </div>
            </div>
            <!-- /Right-bar -->