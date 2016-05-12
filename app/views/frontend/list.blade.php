

	

		
<div  ng-controller="FavoritesController" >	
		<div ng-if="users.length==0"  class="alert alert-info no-encounters">
					<strong>There are no users available.</strong> 
				</div>
				

		<div class="row custom1" ng-repeat="user in users">
			<div id="loading_cnt">
											<div id="loading"></div>
										</div>
			
			<div class="col-xs-12">
				
					            <form id="test_form">
						            <!--<input type="text" name="test_form" ng-model="blah">-->
										<div class="user-3">
											<div class="row">
												<div class="col-sm-5">
													<div class="user-2">
														<input type="hidden" id="user_id" value="[[user.id]]"/> 
																									
														<img  id="img-responsive-list" src="[[user.photo_url]]">
														
																																
														<div class="user-m">
															<h4>[[user.name]] ( [[user.gender]] , [[user.age]]) </h4>
															<div class="vip-on1">
																<span class="vip">VIP</span>
																<span class="on">ON</span>
																<span class="new">NEW</span>
																<span class="mob">MOBILE</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-7">
													<div class="log-1">
														 <ul>
			                                                <li class="profile-list-li">
			                                                    <a>
			                                                        <img src="{{URL::to('assets/frontend/images/people-1.png')}}" alt="...">
			                                                        Chat
			                                                    </a>
			                                                </li>
			                                                <li class="profile-list-li">                                                       
			                                                        <a ng-if="user.fav" id="removefavorites" ng-click="removefav(user)" ng-model="user.fav">
			                                                            <img src="{{URL::to('assets/frontend/images/people-2.png')}}" alt="...">
			                                                            Remove favorite
			                                                        </a>
			                                                    
			                                                    
			                                                        <a ng-if="!user.fav" id="addtofavorites" ng-click="addfav(user)" ng-model="user.fav">
			                                                            <img src="{{URL::to('assets/frontend/images/people-2.png')}}" alt="...">
			                                                            Add to favorites
			                                                        </a>                                                    
			                                                </li>
			                                                <li class="profile-list-li">
			                                                    <a  id="removefromlist" ng-click="removefromlist(user)">
			                                                        <img src="{{URL::to('assets/frontend/images/people-del.png')}}" alt="...">
			                                                        Remove from list
			                                                    </a>
			                                                </li>
			                                                <li class="profile-list-li" >
			                                                    <a id="givegift">
			                                                        <img src="{{URL::to('assets/frontend/images/people-gift.png')}}" alt="..." >
			                                                        Give a gift
			                                                    </a>
			                                                </li>
			                                                <li class="profile-list-li">
			                                                     <a id="reportabuse"  aria-expanded="false" role="button" aria-haspopup="true" data-toggle="dropdown" class="" href="#" id="reportabuse">
			                                                        <img src="{{URL::to('assets/frontend/images/people-mouse.png')}}" alt="..." >
			                                                        Report Abuse
			                                                    </a>
			                                                     <div class="dropdown-menu" style="background-color: rgb(224, 234, 201); padding: 3%; margin-left: 58%; margin-top: 0%;" role="menu" aria-labelledby="reportabuse">
													
																		<div class="arrow-up-2"></div>
																		<div class="report-abuse">						
										                                    <h2>Report abuse</h2>				                                    
										                                    
										                                    <br/>
										                                    
										                                     <textarea class="report-abuse-reason" ng-model="user.reportuserreason" ></textarea>
										                                     <button class="report-btn btn-xs" type="button" ng-click="reportuser(user)">
										                                            Report
										                                     </button>					                                       
																		</div>
								                             
																</div>
			
			                                                </li>
			                                                <li class="profile-list-li">
			                                                    <a  ng-if="!user.blocked" id="block" ng-click="blockuser(user)" >
			                                                        <img src="{{URL::to('assets/frontend/images/people-block.png')}}" alt="..." >
			                                                        Block
			                                                    </a>
			                                                    <a  ng-if="user.blocked" id="block" ng-click="blockuser(user)" >
			                                                        <img src="{{URL::to('assets/frontend/images/people-block.png')}}" alt="..." >
			                                                        UnBlock
			                                                    </a>
			
			                                                </li>
			                                            </ul>
												    </div>
			                                                
												</div>
											</div>
										</div>
										
										
								</form>		
									
			</div>
		</div>

	<div class="hiddenmembers">
	<h2 ng-click="showhiddenmembers(hiddenusers)">
	Click to see hidden members
	<span class="new-list-count ng-binding">[[hiddenuserscount]]</span>
	</h2>
</div>	

<div class="row custom1" ng-repeat="user in hiddenusers">
			
			
			<div class="col-xs-12">
				
					            <form id="test_form">
						            <!--<input type="text" name="test_form" ng-model="blah">-->
										<div class="user-3">
											<div class="row">
												<div class="col-sm-5">
													<div class="user-2">
														<input type="hidden" id="user_id" value="[[user.id]]"/> 
																									
														<img  id="img-responsive-list" src="[[user.photo_url]]">
														
																																
														<div class="user-m">
															<h4>[[user.name]] ( [[user.gender]] , [[user.age]]) </h4>
															<div class="vip-on1">
																<span class="vip">VIP</span>
																<span class="on">ON</span>
																<span class="new">NEW</span>
																<span class="mob">MOBILE</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-7">
													<div class="log-1">
														 <ul>
			                                                <li class="profile-list-li">
			                                                    <a>
			                                                        <img src="{{URL::to('assets/frontend/images/people-1.png')}}" alt="...">
			                                                        Chat
			                                                    </a>
			                                                </li>
			                                                <li class="profile-list-li">                                                       
			                                                        <a ng-if="user.fav" id="removefavorites" ng-click="removefav(user)" ng-model="user.fav">
			                                                            <img src="{{URL::to('assets/frontend/images/people-2.png')}}" alt="...">
			                                                            Remove favorite
			                                                        </a>
			                                                    
			                                                    
			                                                        <a ng-if="!user.fav" id="addtofavorites" ng-click="addfav(user)" ng-model="user.fav">
			                                                            <img src="{{URL::to('assets/frontend/images/people-2.png')}}" alt="...">
			                                                            Add to favorites
			                                                        </a>                                                    
			                                                </li>
			                                                <li class="profile-list-li">
			                                                    <a  id="removefromlist" ng-click="removefromlist(user)">
			                                                        <img src="{{URL::to('assets/frontend/images/people-del.png')}}" alt="...">
			                                                        Remove from list
			                                                    </a>
			                                                </li>
			                                                <li class="profile-list-li" >
			                                                    <a id="givegift">
			                                                        <img src="{{URL::to('assets/frontend/images/people-gift.png')}}" alt="..." >
			                                                        Give a gift
			                                                    </a>
			                                                </li>
			                                                <li class="profile-list-li">
			                                                     <a id="reportabuse"  aria-expanded="false" role="button" aria-haspopup="true" data-toggle="dropdown" class="" href="#" id="reportabuse">
			                                                        <img src="{{URL::to('assets/frontend/images/people-mouse.png')}}" alt="..." >
			                                                        Report Abuse
			                                                    </a>
			                                                     <div class="dropdown-menu" style="background-color: rgb(224, 234, 201); padding: 3%; margin-left: 58%; margin-top: 0%;" role="menu" aria-labelledby="reportabuse">
													
																		<div class="arrow-up-2"></div>
																		<div class="report-abuse">						
										                                    <h2>Report abuse</h2>				                                    
										                                    
										                                    <br/>
										                                    
										                                     <textarea class="report-abuse-reason" ng-model="user.reportuserreason" ></textarea>
										                                     <button class="report-btn btn-xs" type="button" ng-click="reportuser(user)">
										                                            Report
										                                     </button>					                                       
																		</div>
								                             
																</div>
			
			                                                </li>
			                                                <li class="profile-list-li">
			                                                    <a  ng-if="!user.blocked" id="block" ng-click="blockuser(user)" >
			                                                        <img src="{{URL::to('assets/frontend/images/people-block.png')}}" alt="..." >
			                                                        Block
			                                                    </a>
			                                                    <a  ng-if="user.blocked" id="block" ng-click="blockuser(user)" >
			                                                        <img src="{{URL::to('assets/frontend/images/people-block.png')}}" alt="..." >
			                                                        UnBlock
			                                                    </a>
			
			                                                </li>
			                                            </ul>
												    </div>
			                                                
												</div>
											</div>
										</div>
										
										
								</form>		
									
			</div>
		</div>	
		
</div>	










