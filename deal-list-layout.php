<?php include('included/header.php') ?>

<!-- Layout wrapper -->

<div class="layout-wrapper layout-content-navbar">
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
			<div class="content-wrapper deals_wrappers deals_list_layout">
				<!-- Content -->
				<div class="lead_content_wrapper">
					<div class="deals_header">
						<div class="left_navbar">
							<ul class="left_nav navBar_nav edtie_deal_active">
								<li class="deals_menu_item">
									<a href="deals.php" class="action_button"><i class="mdi mdi-land-rows-vertical"></i></a>
									<a href="deal-list-layout.php" class="action_button active"><i class="mdi mdi-menu"></i></a>
									<a href="monthly-timeline.php" class="action_button"><i class="mdi mdi-currency-usd"></i></a>
								</li>
								<li class="deals_menu_item">
                                    <button class="theme_button" data-bs-toggle="modal" data-bs-target="#Deals">+ Deal</button>
                                </li>
							</ul>

							<ul class="toolbar_container divider_left">
								<li><button><i class="mdi mdi-email-outline"></i> Send group email</button></li>
								<li><button><i class="mdi mdi-access-point"></i>Convert to leads</button></li>
								<li><button><i class="mdi mdi-trash-can-outline"></i></button></li>
							</ul>
						</div>
						<div class="right_navbar">
							<ul class="right_nav navBar_nav">
								<li class="deals_menu_item">
									<span class="price_value">₹31,056</span>
									<span class="price_value">3 deals</span>
									
								</li>
								<li class="deals_menu_item filter">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle deal_pipeline_btn list_deal_pipeline_btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="mdi mdi-filter-variant"></i> User name
										</button>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
											<div class="everyone_filter" onclick="handleItemClick(event)">
												<div class="filter_search_wrapper">
													<div class="searchBar">
														<i class="mdi mdi-magnify"></i>
														<input type="text" class="input_searchBar" placeholder="Search owner or filter" />
													</div>
												</div>
												<div class="filter_tabWrapper">
													<ul class="nav nav-tabs" id="myTab" role="tablist">
														<li class="nav-item" role="presentation">
															<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#favorites" type="button" role="tab" aria-controls="favorites" aria-selected="true">
																<i class="mdi mdi-star-outline"></i><span>Favorites</span>
															</button>
														</li>
														<li class="nav-item" role="presentation">
															<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#owners" type="button" role="tab" aria-controls="owners" aria-selected="false">
																<i class="mdi mdi-account-circle-outline"></i><span>Owners</span>
															</button>
														</li>
														<li class="nav-item" role="presentation">
															<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#fillters" type="button" role="tab" aria-controls="fillters" aria-selected="false">
																<i class="mdi mdi-filter-variant"></i><span>Filters</span>
															</button>
														</li>
													</ul>
													<!-- tablist -->
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
												</div>
												<!-- tabpanel -->
											</div>
											<!-- everyone_filter -->
										</ul>
									</div>

                                    <div class="dropdown">
										<div class="drp_list">
											<button class="btn btn-secondary dropdown-toggle deal_pipeline_btn list_deal_pipeline_btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="mdi mdi-dots-horizontal"></i>
											</button>
											<ul class="dropdown-menu deal_pipeline_list_item" aria-labelledby="dropdownMenuButton1">
												<li class="deal_pipeline deal_pipeline_head">
													<a class="dropdown-item" href="#"><span>Pipeline</span> <i class="right_icon mdi mdi-check"></i></a>
												</li>
												<div class="deal_pipeline deal_pipeline_body">
													<li class="deal_pipeline">
														<a class="dropdown-item" href="#"><i class="left_icon mdi mdi-eye-outline"></i> <span>Pipeline visibility</span></a>
													</li>
													<li class="deal_pipeline">
														<a class="dropdown-item" href="#"><i class="left_icon mdi mdi-pencil-outline"></i> <span> Customize deal card</span></a>
													</li>
												</div>
												<li class="deal_pipeline deal_pipeline_footer">
													<a class="dropdown-item" href="#"><i class="left_icon mdi mdi-plus"></i> <span>New pipeline</span></a>
												</li>
											</ul>
										</div>
									</div>

								</li>
							</ul>
						</div>
					</div>
                    <!-- deals_header -->
                    <!-- lead_content_wrapper -->

                    <!-- Start deal_lists -->
                    <div class="deal_layout_list">
						    <div class="dealaddite_setting_droupdown">
							<div class="everyone_filter">
												<div class="filter_search_wrapper choose_column_header">
												    <h5 class="py-3 mb-0">Choose columns</h5>
													<div class="searchBar">
														<i class="mdi mdi-magnify"></i>
														<input type="text" class="input_searchBar" placeholder="Search owner or filter">
													</div>
												</div>
												<div class="columnPickerBody">
													<div class="visible_columnPikers">
														<ul class="fav_list_items visiblefitler pined_fitler">
															<h4 class="favorite_cat_list_name">Visible</h4>
															<ul class="all_lists">
															       <li class="fav_list_item">
																		<label for="Title" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Title">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Owner</span>
																			<span class="icon_1">Deal</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Value" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Value">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Value</span>
																			<span class="icon_1">Deal</span>
																	   </label>
																    </li>
																	<li class="fav_list_item">
																		<label for="Organization" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Organization">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Organization</span>
																			<span class="icon_1">Deal</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Contact" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Contact">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Contact person</span>
																			<span class="icon_1">Deal</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Expected" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Expected">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Expected close date</span>
																			<span class="icon_1">Deal</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Next" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Next">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Next activity date</span>
																			<span class="icon_1">Deal</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Owner" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Owner">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Owner</span>
																			<span class="icon_1">Deal</span>
																	   </label>
																    </li>
																	

															</ul>
														</ul>
													</div>
												<h4 class="favorite_cat_list_name">Not visible</h4>
												<div class="filter_tabWrapper pin_filter">
													<ul class="nav nav-tabs pt-3" id="myTab" role="tablist">
														<li class="nav-item" role="presentation">
															<button class="nav-link active waves-effect" id="home-tab" data-bs-toggle="tab" data-bs-target="#dealS" type="button" role="tab" aria-controls="dealS" aria-selected="true">
																<span>Deal</span>
															</button>
														</li>
														<li class="nav-item" role="presentation">
															<button class="nav-link waves-effect" id="profile-tab" data-bs-toggle="tab" data-bs-target="#personS" type="button" role="tab" aria-controls="personS" aria-selected="false" tabindex="-1">
																</i><span>Person</span>
															</button>
														</li>
														<li class="nav-item" role="presentation">
															<button class="nav-link waves-effect" id="contact-tab" data-bs-toggle="tab" data-bs-target="#orgraS" type="button" role="tab" aria-controls="orgraS" aria-selected="false" tabindex="-1">
																<span>Organization</span>
															</button>
														</li>
													</ul>
													<!-- tablist -->
													<div class="tab-content p-0" id="myTabContent">
														<div class="tab-pane fade show active" id="dealS" role="tabpanel" aria-labelledby="home-tab">
														<ul class="fav_list_items visiblefitler pined_fitler">
														<ul class="all_lists">
															       <li class="fav_list_item">
																		<label for="Title1" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Title1">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Title</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Value1" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Value1">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Value</span>
																	   </label>
																    </li>
																	<li class="fav_list_item">
																		<label for="Organization1" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Organization1">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Organization</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Contact1" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Contact1">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Contact person</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Expected1" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Expected1">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Expected close date</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Next1" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Next1">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Next activity date</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Owner1" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Owner1">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Owner</span>
																	   </label>
																    </li>
															</ul>
														</ul>
														</div>
														<div class="tab-pane fade" id="personS" role="tabpanel" aria-labelledby="profile-tab">
														<ul class="fav_list_items visiblefitler pined_fitler">
														<ul class="all_lists">
															       <li class="fav_list_item">
																		<label for="Title2" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Title2">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Title</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Value2" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Value2">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Value</span>
																	   </label>
																    </li>
																	<li class="fav_list_item">
																		<label for="Organization2" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Organization2">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Organization</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Contact2" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Contact2">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Contact person</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Expected2" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Expected2">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Expected close date</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Next2" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Next2">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Next activity date</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Owner2" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Owner2">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Owner</span>
																	   </label>
																    </li>
															</ul>
														</ul>
														</div>
														<div class="tab-pane fade" id="orgraS" role="tabpanel" aria-labelledby="contact-tab">
														<ul class="fav_list_items visiblefitler pined_fitler">
														<ul class="all_lists">
															       <li class="fav_list_item">
																		<label for="Title3" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Title3">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Title</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Value3" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Value3">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Value</span>
																	   </label>
																    </li>
																	<li class="fav_list_item">
																		<label for="Organization3" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Organization3">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Organization</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Contact3" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Contact3">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Contact person</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Expected3" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Expected3">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Expected close date</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Next3" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Next3">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Next activity date</span>
																	   </label>
																    </li>

																	<li class="fav_list_item">
																		<label for="Owner3" class="visible_checkboxLabel">
																			<input type="checkbox" hidden checked id="Owner3">
																			<div class="visible_checkbox">
																				<i class="mdi mdi-checkbox-blank-outline"></i>
																		    </div>
																	        <span class="name_span">Owner</span>
																	   </label>
																    </li>
															</ul>
														</ul>
														</div>
													</div>
												</div>
												</div>
												<!-- tabpanel -->
												<div class="columnPickerfooter">
													<div class="column_picker_buttons">
														<div class="save_button default">
															<button class="theme_border_button">Default</button>
														</div>
														<div class="save_button">
															<button class="theme_border_button columnPicker_cancel">Cancel</button>
															<button class="theme_button">Save</button>
														</div>
													</div>
												</div>
											</div>
							</div>
                            <div class="deal_table_responsive">
                                <table class="deals_table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label for="check_listAll" class="check_listAll check_list">
                                                    <input type="checkbox" onclick="checkall(this)" class="checkAll" hidden  id="check_listAll">
                                                    <i class="mdi mdi-checkbox-blank-outline"></i>
                                                </label>
                                            </th>
                                            <th width="193px"><div class="nowraptabel_text">Title</div></th>
                                            <th width="145px" class="value"><div class="nowraptabel_text">Value</div></th>
                                            <th width="320px"><div class="nowraptabel_text">Organization</div></th>
                                            <th><div class="nowraptabel_text">Contact person</div></th>
                                            <th><div class="nowraptabel_text">Expected close date</div></th>
                                            <th><div class="nowraptabel_text">Next activity date</div></th>
                                            <th><div class="nowraptabel_text">Owner</div></th>
                                            <th width="30px"></th>
                                            <th>
											    <div class="setting_deals">
													<i class="mdi mdi-cog-outline"></i>
												</div>
											</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label for="check_list3" class="check_list">
                                                    <input type="checkbox" onclick="checkOne(this)" class="singleSelect" hidden id="check_list3">
                                                    <i class="mdi mdi-checkbox-blank-outline"></i>
                                                </label>
                                            </td>
                                            <td><div class="nowraptabel_text"><a href="proposal.php" class="link_text">Deal title</a></div></td>
                                            <td><div class="nowraptabel_text value"><a href="Deal title" class="link_text">Rs. 45,250</a></div></td>
                                            <td><div class="orgra_link"><a href="Deal title" class="link_text">https://www.digivendtechnologies.in/html/office-crm/deals.php</a></div></td>
                                            <td><div class="nowraptabel_text"><a href="Deal title" class="link_text">Shameem</a></div></td>
                                            <td><div class="nowraptabel_text"><a href="Deal title" class="link_text">Feb 1, 2024</a></div></td>
                                            <td></td>
                                            <td><div class="nowraptabel_text"><a href="Deal title" class="link_text">Owner</a></div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

										<tr>
                                            <td>
                                                <label for="check_list2" class="check_list">
                                                    <input type="checkbox" onclick="checkOne(this)" class="singleSelect" hidden id="check_list2">
                                                    <i class="mdi mdi-checkbox-blank-outline"></i>
                                                </label>
                                            </td>
                                            <td><div class="nowraptabel_text">Deal title</div></td>
                                            <td><div class="nowraptabel_text value">Rs. 45,250</div></td>
                                            <td><div class="orgra_link">https://www.digivendtechnologies.in/html/office-crm/deals.php</div></td>
                                            <td><div class="nowraptabel_text">Shameem</div></td>
                                            <td><div class="nowraptabel_text">Feb 1, 2024</div></td>
                                            <td></td>
                                            <td><div class="nowraptabel_text">Owner</div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

										<tr>
                                            <td>
                                                <label for="check_list1" class="check_list">
                                                    <input type="checkbox" onclick="checkOne(this)" class="singleSelect" hidden id="check_list1">
                                                    <i class="mdi mdi-checkbox-blank-outline"></i>
                                                </label>
                                            </td>
                                            <td><div class="nowraptabel_text">Deal title</div></td>
                                            <td><div class="nowraptabel_text value">Rs. 45,250</div></td>
                                            <td><div class="orgra_link">https://www.digivendtechnologies.in/html/office-crm/deals.php</div></td>
                                            <td><div class="nowraptabel_text">Shameem</div></td>
                                            <td><div class="nowraptabel_text">Feb 1, 2024</div></td>
                                            <td></td>
                                            <td><div class="nowraptabel_text">Owner</div></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Start deal_lists -->

						<div class="toolBar_sidebar">
							<div class="toolBar_sidebar_header"><h5>Bulk edit</h5> 
							<!-- <label for="check_listAll1" class="check_listAll check_list">
                                                    <input type="checkbox"  class="checkAll" hidden  id="check_listAll1">
                                                    <i class="mdi mdi-close"></i>
                                                </label> -->
												<button onclick="checkall1(this)">
												 <i class="mdi mdi-close"></i>
												</button>
											</div>
							<div class="toolBar_sidebar_body">
								<div class="toolBar_sidebar_body_content">
									<form action="">
										<div class="form_group">
											<label for="" class="crm_label">Title</label>
											<select name="" id="" class="crm_select">
												<option value="Keep current value">Keep current value</option>
												<option value="Edite current value">Edite current value</option>
											</select>
										</div>

										<div class="form_group">
											<label for="" class="crm_label">Title</label>
											<select name="" id="" class="crm_select">
												<option value="Keep current value">Keep current value</option>
												<option value="Edite current value">Edite current value</option>
											</select>
										</div>

										<div class="form_group">
											<label for="" class="crm_label">Title</label>
											<select name="" id="" class="crm_select">
												<option value="Keep current value">Keep current value</option>
												<option value="Edite current value">Edite current value</option>
											</select>
										</div>

										<div class="form_group">
											<label for="" class="crm_label">Title</label>
											<select name="" id="" class="crm_select">
												<option value="Keep current value">Keep current value</option>
												<option value="Edite current value">Edite current value</option>
											</select>
										</div>

										<div class="form_group">
											<label for="" class="crm_label">Title</label>
											<select name="" id="" class="crm_select">
												<option value="Keep current value">Keep current value</option>
												<option value="Edite current value">Edite current value</option>
											</select>
										</div>

										<div class="form_group">
											<label for="" class="crm_label">Title</label>
											<select name="" id="" class="crm_select">
												<option value="Keep current value">Keep current value</option>
												<option value="Edite current value">Edite current value</option>
											</select>
										</div>
									</form>
								</div>
							</div>
							<div class="toolBar_sidebar_footer">
								<button class="edite_deal_button_sidebar theme_button">Edit Deal</button>
							</div>
						</div>
					<script>
						function handleItemClick(event) {
						    event.preventDefault();
						    event.stopPropagation();
						}
					</script>

					<!-- / Content -->

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
		$(document).ready(function(){
		$('.dealaddite_setting_droupdown').hide();
		$('.setting_deals').on('click', function(){
			$('.dealaddite_setting_droupdown').show();
		});
      $(document).on('click', function(e){
        if (!$(e.target).closest('.setting_deals, .dealaddite_setting_droupdown').length) {
          $('.dealaddite_setting_droupdown').hide();
        }
      });
	  $('.columnPicker_cancel').on('click', function(){
		$('.dealaddite_setting_droupdown').hide();
	  })
    });


	function checkall(ele){
		// alert("Oops")
        const singlecheckbox = document.querySelectorAll('.singleSelect');
        if (ele.checked == true){
            for(var i=0;i<singlecheckbox.length;i++){
                singlecheckbox[i].checked = true;
				document.querySelector('.toolBar_sidebar').classList.add('active');
				document.querySelector('.toolbar_container').classList.add('active');
				document.querySelector('.edtie_deal_active').classList.add('active');
            }  
        }else{
            for(var i=0;i<singlecheckbox.length;i++){
                singlecheckbox[i].checked = false;
				document.querySelector('.toolBar_sidebar').classList.remove('active');
				document.querySelector('.toolbar_container').classList.remove('active');
				document.querySelector('.edtie_deal_active').classList.remove('active');
            } 
        } 
    }

    function checkOne(ele){
		document.querySelector('.toolBar_sidebar').classList.add('active');
		document.querySelector('.toolbar_container').classList.add('active');
		document.querySelector('.edtie_deal_active').classList.add('active');
        const singlecheckbox = document.querySelectorAll('.singleSelect');
        let checkedele = 0;
        for(var i=0;i<singlecheckbox.length;i++){
                if (singlecheckbox[i].checked == true) {
                    checkedele +=1;
                }
                
            } 
        if (ele.checked == true){
            if (singlecheckbox.length == checkedele) {
                document.querySelector('.checkAll').checked = true;
                document.querySelector('.toolBar_sidebar').classList.add('active');
                document.querySelector('.toolbar_container').classList.add('active');
                document.querySelector('.edtie_deal_active').classList.add('active');
            }
        }else{
            if (singlecheckbox.length > checkedele) {
                document.querySelector('.checkAll').checked = false;
				// document.querySelector('.toolBar_sidebar').classList.remove('active');
            }
        }
		
		if(checkedele === 0){
			document.querySelector('.toolBar_sidebar').classList.remove('active');
			document.querySelector('.toolbar_container').classList.remove('active');
			document.querySelector('.edtie_deal_active').classList.remove('active');
		}
    }

	function checkall1(ele){
		// alert("Oops")
        const singlecheckbox = document.querySelectorAll('.singleSelect');
		document.getElementById('check_listAll').checked = false;
           for(var i=0;i<singlecheckbox.length;i++){
                singlecheckbox[i].checked = false;
				document.querySelector('.toolBar_sidebar').classList.remove('active');
				document.querySelector('.toolbar_container').classList.remove('active');
				document.querySelector('.edtie_deal_active').classList.remove('active');
            } 
    }

	</script>
</div>
