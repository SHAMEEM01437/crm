<?php include('included/header.php') ?>



      <!-- Layout wrapper -->

      <div class="layout-wrapper layout-content-navbar  ">

         <div class="layout-container">

            <!-- Menu -->

               <?php include('included/sidebar.php') ?>

            <!-- / Menu -->

            <!-- Layout container -->

            <div class="layout-page">

               <!-- Navbar --> 

               <?php include('included/navbar.php') ?>

               <!-- / Navbar -->

               <!-- Content wrapper -->

               <div class="content-wrapper monthly_timeline">

                  <!-- Content -->

                  <div class="lead_content_wrapper">

                  <div class="deals_header">

                    <div class="left_navbar">

                        <ul class="left_nav navBar_nav">

                            <li class="deals_menu_item">
                                    <a href="deals.php" class="action_button"><i class="mdi mdi-land-rows-vertical"></i></a>
									<a href="deal-list-layout.php" class="action_button"><i class="mdi mdi-menu"></i></a>
									<a href="monthly-timeline.php" class="action_button active"><i class="mdi mdi-currency-usd"></i></a>
                            </li>

                            <li class="deals_menu_item"><button class="theme_button" data-bs-toggle="modal" data-bs-target="#Deals">+ Deal</button></li>

                        </ul>

                        

                    </div>

                    <div class="right_navbar">
                        
                        <ul class="right_nav navBar_nav">
                           <li class="deals_menu_item me-0">
                           <ul class="left_navbar ps-0">
                                <li class="deals_menu_item me-0 pagination_top">
                                    <a href="#!" class="action_button"><i class="mdi mdi-chevron-double-left"></i></a>
                                    <a href="#!" class="action_button"><i class="mdi mdi-chevron-left"></i></a>
                                    <a href="#!" class="action_button">Today</a>
                                    <a href="#!" class="action_button"><i class="mdi mdi-chevron-double-right"></i></a>
                                    <a href="#!" class="action_button"><i class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul>
                           </li>
                            
                            <li class="deals_menu_item">
                                <div class="dropdown">
                                    <div class="drp_list">
                                    <button class="btn btn-secondary dropdown-toggle deal_pipeline_btn list_deal_pipeline_btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                     <i class="mdi mdi-land-rows-vertical"></i> Pipeline
                                    </button>
                                    <ul class="dropdown-menu deal_pipeline_list_item" aria-labelledby="dropdownMenuButton1">
                                        <li class="deal_pipeline deal_pipeline_head"><a class="dropdown-item d-flex justify-content-between" href="#"><span>All Pipeline </span><i class="mdi mdi-check"></i></a></li>
                                       <div class="deal_pipeline deal_pipeline_body">
                                       <li class="deal_pipeline"><a class="dropdown-item d-flex justify-content-between" href="#"><span>Pipeline</span> <i class="mdi mdi-check"></i></a></li>
                                       </div>
                                    </ul>   
                                    </div>
                                    <!-- <div class="adite_deals"><i class="mdi mdi-pencil-outline"></i></div> -->
                                </div>
                            </li>

                                <li class="deals_menu_item filter">

                                    <div class="dropdown">

                                    <button class="btn btn-secondary dropdown-toggle deal_pipeline_btn list_deal_pipeline_btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                                     <i class="mdi mdi-filter-variant"></i> Everyone

                                    </button>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <div class="everyone_filter" onclick="handleItemClick(event)">

                                            <div class="filter_search_wrapper">
                                                <div class="searchBar">
                                                    <i class="mdi mdi-magnify"></i>
                                                    <input type="text" class="input_searchBar" placeholder="Search owner or filter">
                                                </div>
                                            </div>

                                            <div class="filter_tabWrapper">

                                                

                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#favorites" type="button" role="tab" aria-controls="favorites" aria-selected="true"><i class="mdi mdi-star-outline"></i><span>Favorites</span></button>

                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#owners" type="button" role="tab" aria-controls="owners" aria-selected="false"><i class="mdi mdi-account-circle-outline"></i><span>Owners</span></button>

                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#fillters" type="button" role="tab" aria-controls="fillters" aria-selected="false"><i class="mdi mdi-filter-variant"></i><span>Filters</span></button>

                                                </li>
                                            </ul> <!-- tablist -->



                                    <div class="tab-content p-0" id="myTabContent">
                                        <div class="tab-pane fade show active" id="favorites" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="favorite_selected_list">
                                                <ul class="fav_list_items">
                                                    <h4 class="favorite_cat_list_name">Owners</h4>
                                                    <li class="fav_list_item">
                                                        <span class="icon"><i class="mdi mdi-account-circle-outline"></i></span>
                                                    <span class="name_span">Owners name</span>
                                                    <span class="icon_1"><i class="mdi mdi-star"></i></span>
                                                    <span class="icon_2"><i class="mdi mdi-check"></i></span>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="owners" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="favorite_selected_list">
                                                <ul class="fav_list_items">
                                                    <li class="fav_list_item">
                                                        <span class="name_span">Owners name</span>
                                                        <span class="icon_1"><i class="mdi mdi-star-outline"></i></span>
                                                        
                                                    </li>
                                                    <li class="fav_list_item active">
                                                        <span class="icon"><i class="mdi mdi-account-circle-outline"></i></span>
                                                        <span class="name_span">Owners name</span>
                                                        <span class="icon_1"><i class="mdi mdi-star"></i></span>
                                                        <span class="icon_2"><i class="mdi mdi-check"></i></span>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="fillters" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="favorite_selected_list">
                                                <ul class="fav_list_items">
                                                    <li class="fav_list_item active">
                                                        <span class="name_span">All Deleted deals</span>
                                                        <span class="icon_1"><i class="mdi mdi-star"></i></span>
                                                        <span class="icon_2"><i class="mdi mdi-check"></i></span>
                                                    </li>
                                                    <li class="fav_list_item">
                                                        <span class="name_span">All Lost deals</span>
                                                        <span class="icon_1"><i class="mdi mdi-star"></i></span>
                                                        <span class="icon_2"><i class="mdi mdi-pencil-outline"></i></span>
                                                    </li>
                                                    <li class="fav_list_item">
                                                        <span class="name_span">All Total deals</span>
                                                        <span class="icon_1"><i class="mdi mdi-star"></i></span>
                                                        <span class="icon_2"><i class="mdi mdi-pencil-outline"></i></span>
                                                    </li>
                                                    <li class="fav_list_item">
                                                        <span class="name_span">All</span>
                                                        <span class="icon_1"><i class="mdi mdi-star"></i></span>
                                                        <span class="icon_2"><i class="mdi mdi-pencil-outline"></i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter_footer">
                                        <button class="add_filter_button"><i class="mdi mdi-plus"></i> Add filter</button>
                                    </div>
                                </div> <!-- tabpanel -->
                                </div> <!-- everyone_filter -->

                                    </ul>
                                    <!-- <div class="adite_deals"><i class="mdi mdi-pencil-outline"></i></div> -->
                                    </div>
                                </li>

                                <li class="deals_menu_item">
                                <div class="dropdown">
                                    <div class="drp_list">
                                    <button class="btn btn-secondary dropdown-toggle deal_pipeline_btn list_deal_pipeline_btn" type="button" id="dropdownMenuButtoncog" data-bs-toggle="dropdown" aria-expanded="false">
                                     <i class="mdi mdi-cog-outline"></i>
                                    </button>
                                    <ul class="dropdown-menu cog_list_item pt-1 deal_pipeline_list_item" aria-labelledby="dropdownMenuButtoncog">
                                        <h4 class="favorite_cat_list_name">Visible</h4>
                                       <div class="deal_pipeline deal_pipeline_body">
                                       <li class="deal_pipeline selected"><a class="dropdown-item d-flex justify-content-between" href="#"><span>All Pipeline </span><i class="mdi mdi-check"></i></a></li>
                                       <li class="deal_pipeline "><a class="dropdown-item d-flex justify-content-between" href="#"><span>Pipeline</span> <i class="mdi mdi-check"></i></a></li>
                                       <li class="deal_pipeline "><a class="dropdown-item d-flex justify-content-between" href="#"><span>Pipeline</span> <i class="mdi mdi-check"></i></a></li>
                                       </div>

                                       <h4 class="favorite_cat_list_name">Visible</h4>
                                       <div class="deal_pipeline deal_pipeline_body">
                                       <li class="deal_pipeline selected"><a class="dropdown-item d-flex justify-content-between" href="#"><span>All Pipeline </span><i class="mdi mdi-check"></i></a></li>
                                       <li class="deal_pipeline "><a class="dropdown-item d-flex justify-content-between" href="#"><span>Pipeline</span> <i class="mdi mdi-check"></i></a></li>
                                       <li class="deal_pipeline "><a class="dropdown-item d-flex justify-content-between" href="#"><span>Pipeline</span> <i class="mdi mdi-check"></i></a></li>
                                       </div>

                                       <h4 class="favorite_cat_list_name">Visible</h4>
                                       <div class="deal_pipeline deal_pipeline_body">
                                       <li class="deal_pipeline selected"><a class="dropdown-item d-flex justify-content-between" href="#"><span>All Pipeline </span><i class="mdi mdi-check"></i></a></li>
                                       <li class="deal_pipeline "><a class="dropdown-item d-flex justify-content-between" href="#"><span>Pipeline</span> <i class="mdi mdi-check"></i></a></li>
                                       <li class="deal_pipeline "><a class="dropdown-item d-flex justify-content-between" href="#"><span>Pipeline</span> <i class="mdi mdi-check"></i></a></li>
                                       </div>
                                    </ul>   
                                    </div>
                                    <!-- <div class="adite_deals"><i class="mdi mdi-pencil-outline"></i></div> -->
                                </div>
                            </li>

                        </ul>

                    </div>

                  </div>

                  <!-- leads container area  -->
                  <div class="lead_section">
                    <div class="nolead_container">
                        <div class="nolead_row">
                            <div class="no_lead_stage">
                                <div class="lead_stage_header">
                                    <div class="monthly_price_header">
                                        <h4 class="lead_title">February</h4>
                                        <div class="priceContainer">
                                            <div class="lead_price"> <i class="mdi mdi-scale-balance"></i> <span>₹5,641</span></div>
                                            <div class="com_pri"><i>+</i><span>₹0</span></div>
                                            <div class="total_mpri"><span>₹5,641</span></div>
                                        </div>
                                    </div>
                                    <!-- End monthly_header -->
                                </div>
                               <div class="monthly_list">
                                <div class="kanban-item is-moving">
                                    <div class="d-flex justify-content-between flex-wrap align-items-center">
                                       <!-- <div class="labels_value">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                       </div> -->
                                    </div>
                                    <div class="lead_title"><h5>Research FAQ page UX</h5></div>
                                    <div class="kanban-text">
                                        <!-- <p class="lead_link">https://dribbble.com/</p> -->
                                        <p class="client_name">Client name</p>
                                        <p class="price_value">$45</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap mt-2">
                                    <div class="avatar-group d-flex align-items-center assigned-activity">
                                            <div class="dropdown kanban-tasks-item-dropdown">
                                               V
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                        <!-- <div class="item-badges d-flex me-2">
                                            <div class="badge rounded-pill bg-label-success reminder">2d</div>
                                        </div> -->
                                        <div class="avatar-group d-flex align-items-center assigned-activity">
                                            <div class="dropdown kanban-tasks-item-dropdown">
                                                <i class="dropdown-toggle mdi mdi-alert" id="kanban-tasks-item-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <div class="dropdown-menu dropdown-menu-end activity_dropdown" aria-labelledby="kanban-tasks-item-dropdown" style="">
                                                <div class="schedule_you_activitiy">
                                                    <svg width="64px" height="64px" viewBox="0 0 512 512" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="_x36_84_x2C__Calendar_x2C__love_x2C__married_x2C__wedding"> <g> <polygon points="410.04,186.01 455.35,358.17 381.35,358.17 " style="fill:#EFA873;"></polygon> <polygon points="416.707,211.342 410.04,186.01 381.35,358.17 392.238,358.17 " style="fill:#D89060;"></polygon> <path d="M410.04,186.01l-28.69,172.16l-7.55,45.311H56.65L92.9,186.01H256H410.04z M192.57,280.689 c0-12.25-9.94-22.189-22.22-22.189c-11.091,0-16.641,5.551-22.19,16.641c-5.55-11.09-11.09-16.641-22.189-16.641 c-12.25,0-22.19,9.939-22.19,22.189c0,22.189,22.19,37.17,44.38,59.361C170.351,317.859,192.57,302.879,192.57,280.689z" style="fill:#FFC592;"></path> <g> <g> <g> <polygon points="101.233,197.676 264.334,197.676 408.096,197.676 410.04,186.01 256,186.01 92.9,186.01 56.65,403.48 66.928,403.48 " style="fill:#DDA276;"></polygon> </g> </g> </g> <path d="M170.351,258.5c12.279,0,22.22,9.939,22.22,22.189c0,22.189-22.22,37.17-44.41,59.361 c-22.189-22.191-44.38-37.172-44.38-59.361c0-12.25,9.94-22.189,22.19-22.189c11.1,0,16.64,5.551,22.189,16.641 C153.71,264.051,159.26,258.5,170.351,258.5z" style="fill:#EF3E5C;"></path> <g> <g> <g> <path d="M119.446,289.285c0-12.25,9.94-22.189,22.19-22.189c0.6,0,1.175,0.023,1.742,0.057 c-4.308-5.756-9.413-8.652-17.408-8.652c-12.25,0-22.19,9.939-22.19,22.189c0,22.189,22.19,37.17,44.38,59.361 c1.102-1.102,2.203-2.182,3.302-3.25C134.079,320.568,119.446,307.303,119.446,289.285z" style="fill:#E42A53;"></path> </g> </g> </g> <path d="M437.22,154.76H74.78c-2.762,0-5-2.239-5-5s2.238-5,5-5H437.22c2.762,0,5,2.239,5,5 S439.981,154.76,437.22,154.76z" style="fill:#415A6B;"></path> <path d="M346.61,118.52h-181.22c-2.762,0-5-2.239-5-5s2.238-5,5-5h181.22c2.762,0,5,2.239,5,5 S349.372,118.52,346.61,118.52z" style="fill:#415A6B;"></path> <path d="M301.31,263.5H228.82c-2.762,0-5-2.238-5-5c0-2.761,2.238-5,5-5h72.489c2.762,0,5,2.239,5,5 C306.31,261.262,304.071,263.5,301.31,263.5z" style="fill:#DDA276;"></path> <path d="M355.67,290.68H228.82c-2.762,0-5-2.238-5-5s2.238-5,5-5h126.85c2.762,0,5,2.238,5,5 S358.432,290.68,355.67,290.68z" style="fill:#DDA276;"></path> <path d="M355.67,317.869H228.82c-2.762,0-5-2.238-5-5s2.238-5,5-5h126.85c2.762,0,5,2.238,5,5 S358.432,317.869,355.67,317.869z" style="fill:#DDA276;"></path> <path d="M355.67,345.051h-45.3c-2.762,0-5-2.238-5-5s2.238-5,5-5h45.3c2.762,0,5,2.238,5,5 S358.432,345.051,355.67,345.051z" style="fill:#DDA276;"></path> </g> </g> <g id="Layer_1"></g> </g></svg>
                                                    <p> Schedule your activities to help you achieve your sales goalss</p>
                                                </div>
                                                <a class="dropdown-item delete-task" href="javascript:void(0)"> <i class="mdi mdi-plus"></i> Schedule Activity</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    <!-- End kanban_item_move -->
                                    </div> 
                                    <!-- monthly_list -->
                            </div>
                            <!-- End lead stage -->

                            <div class="no_lead_stage">
                                <div class="lead_stage_header">
                                  <div class="monthly_price_header">
                                        <h4 class="lead_title">March</h4>
                                        <div class="priceContainer">
                                            <div class="lead_price"> <i class="mdi mdi-scale-balance"></i> <span>₹5,641</span></div>
                                            <div class="com_pri"><i>+</i><span>₹0</span></div>
                                            <div class="total_mpri"><span>₹5,641</span></div>
                                        </div>
                                    </div>
                                    <!-- End monthly_header -->
                                </div>
                                <div class="monthly_list"></div>
                                <!-- monthly_list -->
                            </div>
                            <!-- End lead stage -->



                            <div class="no_lead_stage">
                                <div class="lead_stage_header">
                                  <div class="monthly_price_header">
                                        <h4 class="lead_title">April</h4>
                                        <div class="priceContainer">
                                            <div class="lead_price"> <i class="mdi mdi-scale-balance"></i> <span>₹5,641</span></div>
                                            <div class="com_pri"><i>+</i><span>₹0</span></div>
                                            <div class="total_mpri"><span>₹5,641</span></div>
                                        </div>
                                    </div>
                                    <!-- End monthly_header -->
                                </div>
                                <div class="monthly_list"></div>
                                <!-- monthly_list -->
                            </div>
                            <!-- End lead stage -->


                            <div class="no_lead_stage">
                                <div class="lead_stage_header">
                                  <div class="monthly_price_header">
                                        <h4 class="lead_title">May</h4>
                                        <div class="priceContainer">
                                            <div class="lead_price"> <i class="mdi mdi-scale-balance"></i> <span>₹5,641</span></div>
                                            <div class="com_pri"><i>+</i><span>₹0</span></div>
                                            <div class="total_mpri"><span>₹5,641</span></div>
                                        </div>
                                    </div>
                                    <!-- End monthly_header -->
                                </div>
                                <div class="monthly_list"></div>
                                <!-- monthly_list -->
                            </div>
                            <!-- End lead stage -->


                            
                        </div>
                    </div>
                  </div>



                  
                  <!-- leads container area  -->
                  </div>

                 <script>

                    function handleItemClick(event) {

                        event.preventDefault();

                        event.stopPropagation();

                    }

                 </script>

                  <!-- / Content -->

                  <!-- Footer -->

                  <!-- <footer class="content-footer footer bg-footer-theme">

                     <div class="container-xxl">

                        <div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">

                           <div class="text-body mb-2 mb-md-0">

                              © <script>document.write(new Date().getFullYear())</script>, made with <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span> by <a href="#" target="_blank" class="footer-link fw-medium">ThemeSelection</a>

                           </div>

                           <div class="d-none d-lg-inline-block">

                              <a href="#" class="footer-link me-3" target="_blank">License</a>

                              <a href="#" target="_blank" class="footer-link me-3">More Themes</a>

                              <a href="#" target="_blank" class="footer-link me-3">Documentation</a>

                              <a href="#" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>

                           </div>

                        </div>

                     </div>

                  </footer> -->

                  <!-- / Footer -->

                  <div class="content-backdrop fade"></div>

               </div>

               <!-- Content wrapper -->

            </div>

            <!-- / Layout page -->

         </div>

         <!-- Overlay -->

         <div class="layout-overlay layout-menu-toggle"></div>

         <!-- Drag Target Area To SlideIn Menu On Small Screens -->

         <div class="drag-target"></div>

      </div>

     



     <?php include('included/footer.php') ?>

     <script>
        function closeDropdown() {
            $('.dropdown-menu').removeClass('show');
        }
     </script>
     <script type="text/javascript">
				$(function(){
					let link = $(".fillterSelect");
                    let shortContent = $('.shortby_content')
					let list = $(".filterDroupDown");
					link.click(function(){
						list.slideToggle(200);
						$(this).toggleClass("open");
					});
					list.find("li").click(function(){
						let listItem = $(this).text();
						list.slideToggle(200)
						shortContent.html(listItem);
						link.removeClass("open");
                        $('.filterDroupDown li').removeClass('active');
                        $(this).addClass('active');
					})
				})
		</script>



  