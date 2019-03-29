<div class="modal fade md__content__container customeScrollbar" id="blog" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
            <div class="md-header" id="about">
                <h1 class="md-header__title"><i class="fas fa-glasses"></i>Blog</h1>
            </div>
        </div>
        <!-- 
      Project Item: begin
     -->
        <div class="container container-1">
          
          <!-- collapse  -->
          <div id="accordion">


<?php
    $query = "SELECT * FROM blog";
    $allBlogs = mysqli_query($con, $query);
    if(empty($allBlogs)){
        echo "<h1 class='text-danger'>Nothing Post</h1>";
    }else{
        while($row = mysqli_fetch_array($allBlogs)){
            $postID = $row['post_id'];
            $author = $row['post_author'];
            $date = $row['post_date'];
            $img = $row['post_img'];
            $title = $row['post_title'];
            $tag = $row['post_tag'];
            $content = $row['post_content'];
            $status = $row['post_status'];
            $likes = $row['post_like'];

            if($status === "published"){
                echo "
                <div class='card blog'>
                <div class='card-header card-header-1' id='headingOne'>
                  <div class='container blog__holder' style='height: 28rem'>
                    <div class='blog__holder-1'>
                      <img class='blog__image' src='$img' alt=''>
                      <div class='blog__overlap'></div>
                      <div class='blog__overlap__item'>
                        <p>$title</p>
                      </div>
                    </div>
                    <div class='blog__holder-2'>
                      <div class='container blog__holder-2-pd'>
                        <div class='blog__des__holder'>
                            <h1 class='mb-4'>$date</h1>
                            <a class='blog-button' data-toggle='collapse' data-target='#$postID' aria-expanded='false' aria-controls='collapseOne'>
                              ReadMore<i class='fas fa-caret-down'></i>
                            </a>
                        </div>  
                        <h1 class='blog__title'>$author</h1>      
                      </div>
                    </div>
                  </div>
                </div>
            
                <div id='$postID' class='collapse' aria-labelledby='headingOne' data-parent='#accordion'>
                  <div class='card-body'>
                    <div class='blog__content'>
                        <div class='blog__content__title'>$title</div>
                          <p class='blog__content__paragraph'>$content</p>
                    </div>
                 
                  </div>
                </div>
              </div>
                ";
            }
        }
    }
?>
        

        <!-- 
            ==========================
            BLOG TEMPLATE
            ==========================
            
            
            <div class="card blog">
            <div class="card-header card-header-1" id="headingOne">
              <div class="container blog__holder">
                <div class="blog__holder-1">
                  <img class="blog__image img-thumbnail" src="https://images.pexels.com/photos/2029478/pexels-photo-2029478.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                  <div class="blog__overlap"></div>
                  <div class="blog__overlap__item">
                    <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="blog__holder-2">
                  <div class="container blog__holder-2-pd">
                    <div class="blog__des__holder">
                        <h1 class="mb-4">02-28-2019</h1>
                        <a class="blog-button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          ReadMore<i class="fas fa-caret-down"></i>
                        </a>
                    </div>  
                    <h1 class="blog__title">Wu Troy</h1>      
                  </div>
                </div>
              </div>
            </div>
        
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <div class="blog__content">
                    <div class="blog__content__title">Lorem ipsum dolor sit amet.</div>
                      <p class="blog__content__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste inventore explicabo laboriosam reprehenderit vitae veritatis nostrum, minus beatae quae doloremque. Accusamus quibusdam quis corporis facere quasi porro, praesentium eveniet minima!
                      </p>
                </div>
             
              </div>
            </div>
          </div>


          </div>

        </div> -->




        <!-- 
      Project Item: end
     -->
    <!-- pagination -->
      <div class="container pagination">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link pagination-item" href="#">1</a></li>
              <li class="page-item"><a class="page-link pagination-item" href="#">2</a></li>
              <li class="page-item"><a class="page-link pagination-item" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
      </div>
    </div>
  </div>
</div>