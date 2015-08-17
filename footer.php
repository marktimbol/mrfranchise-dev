		<div id="ourBrands" class="parallax dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="content">
							<!-- <h2>Our Brands</h2>
							<p>&nbsp;</p> -->
							<?php
							$thumbs = array(
								'als-beef.png',
								'french-fry-heaven.png',
								'krush-burger.png',
								//'lobster-joint.png',
								'nancy-pizza.png',
								'queens-chips.jpg',
								'backyard-burger.png'
								//'max-burger.png'
							);
							?>
							<ul class="brands owl-carousel">
								<?php foreach($thumbs as $thumb) { ?>
								<li>
									<a href="<?=str_replace(array('.jpg','.png'), '.php', $thumb)?>">
										<img src="public/images/thumbs/<?=$thumb?>" alt="" title="" />
									</a>
								</li>
								<?php } ?>
								<li>
							</ul>
														

							<div class="clearfix"></div>

							<h3>Ready to apply for your Franchise Opportunity?</h3>

							<p class="text-center mt-40">
								<a href="#" class="btn btn-clear" data-toggle="modal" data-target="#inquireFormModal">Inquire Now</a>
							</p>							
						</div>
					</div>
				</div>
			</div>	

			<div class="overlay"></div>

		</div>			


		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright">&copy; 2015 Mr. Franchise. All Rights Reserved. Register under the UAE Law. License No. 7140/2015</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- Modal -->
		<div class="modal fade" id="inquireFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<div class="modal-logo">
							<img src="public/images/logo.png" alt="Mr. Franchise" title="Mr. Franchise" />
						</div>
						<!-- <button type="button" class="close" data-d`ismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Inquire here</h4> -->
					</div>
					<form method="POST" action="mail.php">
						<div class="modal-body">

							<p class="">
							Now that you have familiarized yourself with Mr. Franchise Franchising and believe a Mr. Franchise is right for you please complete our online inquiry form and one of our representative will contact you shortly.
							</p>

                            <div class="form-group">
                            	<label for="name">Name</label>
                            	<input type="text" id="name" name="name" placeholder="Name" class="form-control" required>
                            </div>
                       		<div class="form-group">
                       			<label for="email">eMail</label>
                            	<input type="email" id="email" name="email" placeholder="eMail" class="form-control" required>
                            </div>	
                       		<div class="form-group">
                       			<label for="phone">Phone</label>
                            	<input type="text" id="phone" name="phone" placeholder="Phone" class="form-control" required>
                            </div>	
                       		<div class="form-group">
                       			<label for="phone">I am interested in the following Market:</label>
                       			<select name="country" class="form-control" required>
									<?php
									$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
									echo '<option value=""></option>';
									foreach($countries as $country) {
										echo '<option value="'.$country.'">'.$country.'</option>';
									}
									?>                       	
                       			</select>
                            </div>	
                       		<div class="form-group">
                       			<label for="netWorth">Net Worth</label>
								<select class="form-control" name="netWorth" id="netWorth">
				                	<option value="" selected="selected">Select</option>
									<option value="$250000-500000">$250,000 - 500,000</option>
									<option value="$500000-1000000">$500,000 - 1,000,000</option>
									<option value="$1000000-2000000">$1,000,000 - 2,000,000</option>
									<option value="$2000000-3000000">$2,000,000 - 3,000,000</option>
									<option value="$3000000-4000000">$3,000,000 - 4,000,000</option>
									<option value="$4000000">$4,000,000+</option>
				                </select>                            	
                            </div>
                       		<div class="form-group">
                       			<label for="cashLiquidity">Cash Liquidity</label>
								<select class="form-control" name="cashLiquidity" id="cashLiquidity">
									<option value="" selected="selected">Select</option>
									<option value="$0-250000">$0 - 250,000</option>
									<option value="$250000-500000">$250,000 - 500,000</option>
									<option value="$500000-750000">$500,000 - 750,000</option>
									<option value="$750000-1000000">$750,000 - 1,000,000</option>
									<option value="$1000000+">$1,000,000+</option>
								</select>                            	
                            </div>
                       		<div class="form-group">
                       			<label for="whenToInvest">When will you be able to invest?</label>
								<select class="form-control" name="whenToInvest" id="whenToInvest">
									<option value="" selected="selected">Select</option>
									<option value="0-3months">0-3 Mo.</option>
									<option value="3-6months">3-6 Mo.</option>
									<option value="6-9months">6-9 Mo.</option>
									<option value="9-12months">9-12 Mo.</option>
									<option value="12months +">12 Mo.+</option>
								</select>                            	
                            </div>                                                                                    
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<input type="submit" name="submit" class="btn btn-default" value="Send Inquiry" />
						</div>
					</form>
				</div>
			</div>
		</div>	

		<script src="public/js/all.js"></script>	
	
	</body>
</html>