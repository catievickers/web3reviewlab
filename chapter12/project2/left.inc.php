            <aside class="col-md-2">
                <div class="panel panel-info">
                    <div class="panel-heading">Continents</div>
                    <ul class="list-group">
                       
                       <?php   
                        asort($continents);
                        foreach ($continents as $continent){
                       ?>
                       
                       <li class="list-group-item"><a href="#"><?php echo $continent; ?></a></li>
                       <?php } ?>
                    </ul>
                </div>
                <!-- end continents panel -->

                <div class="panel panel-info">
                    <div class="panel-heading">Popular</div>
                    <ul class="list-group">
                      
                       <?php   
                       asort($countries);
                        foreach ($countries as $country){
                       ?>
                       
                          <li class="list-group-item">
                          <a href="list.php?country=<?php echo $country; ?>"><?php echo $country; ?></a>
                          </li>
                          
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <!-- end continents panel -->
            </aside>