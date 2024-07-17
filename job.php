<?php
$site_title = 'Givni - Career';
include 'include/header.php' ?>



<body>
	<!-- Start Page Title -->
	<div class="page-title-area">
		<div class="d-table d1">
			<div class="d-table-cell">
				<div class="container">
					<h2>Career - Job</h2>
				</div>
			</div>
		</div>

		<div class="shape1"><img src="assets/img/shape1.png" alt="shape"></div>
		<div class="shape2 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
		<div class="shape3"><img src="assets/img/shape3.svg" alt="shape"></div>
		<div class="shape4"><img src="assets/img/shape4.svg" alt="shape"></div>
		<div class="shape5"><img src="assets/img/shape5.png" alt="shape"></div>
		<div class="shape6 rotateme"><img src="assets/img/shape4.svg" alt="shape"></div>
		<div class="shape7"><img src="assets/img/shape4.svg" alt="shape"></div>
		<div class="shape8 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
	</div>
	<!-- End Page Title -->
	<!-- Start features -->
	<div class="bg-f9f6f6">
		<div class="container py-5">
			<div class="internship_bg shadow">
			<div class="section-title pt-3">
				<div class="pt-5">
					<h2 style="text-align: center;">Apply for Jobs</h2>
				</div>

				<div class="bar"></div>
			</div>

			<form class="ajax-submit" data-return="Form Submitted Successfully" data-alert="true" data-callback="./">
				<div class="row px-5 pt-3 d-flex flex-row-reverse">
					<input type="hidden" name="submit_job_form">
						<div class="col-lg-6 d-flex justify-content-center ">
        				<label for="profile_photo" class="">
		                    <img src="https://via.placeholder.com/150x180" class="profile-pic" role="button">
		                    <span for="profile_photo" class="d-flex upload-button btn btn-primary btn-sm btn-block">Upload Image</span>
		                    <input type="file" name="profileimage" class="file-upload form-control d-none form-control-sm" accept="image/*" id="profile_photo">
               			</label>
        			</div>
        			<div class="col-lg-6 ">
        				<div class="bg-info px-3 mb-3">
        					<h5 class="text-light py-2">Personal Details</h5>
        				</div>
        				
        				<div class="form-group">
            				<label class="col-form-label ">Name</label>
            				<input class="form-control my-3 bg-white " type="text" name="name" placeholder="Enter Your Full Name" required>
            
        				</div>
        				<div class="form-group">
            				<label class="col-form-label">Father's Name</label>
            				<input class="form-control my-3 bg-white" type="text" name="fathername" placeholder="Enter Father's Name" required>
            			</div>
        			</div>
        			
				</div>

				<div class="row px-5">
			        <div class="col-lg-3">
			        <div class="form-group">
			            <label class="col-form-label">Address</label>
			            <input class="form-control my-3 bg-white" type="text" id="address" name="address" placeholder="Enter Address" required>
			            
			        </div>
			        </div>
			        
			        <div class="col-lg-3">
			        <div class="form-group">
			            <label class="col-form-label">State</label>
			            <!-- <input class="form-control my-3" type="text" id="state" 
			            placeholder="Select State"> -->
			            <select class="form-control my-3 bg-white" id="inputState" name="inputState" required>
			                                <option value="SelectState" >--- Select State ---</option>
			                                <option value="Andra Pradesh">Andra Pradesh</option>
			                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
			                                <option value="Assam">Assam</option>
			                                <option value="Bihar">Bihar</option>
			                                <option value="Chhattisgarh">Chhattisgarh</option>
			                                <option value="Goa">Goa</option>
			                                <option value="Gujarat">Gujarat</option>
			                                <option value="Haryana">Haryana</option>
			                                <option value="Himachal Pradesh">Himachal Pradesh</option>
			                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
			                                <option value="Jharkhand">Jharkhand</option>
			                                <option value="Karnataka">Karnataka</option>
			                                <option value="Kerala">Kerala</option>
			                                <option value="Madya Pradesh">Madya Pradesh</option>
			                                <option value="Maharashtra">Maharashtra</option>
			                                <option value="Manipur">Manipur</option>
			                                <option value="Meghalaya">Meghalaya</option>
			                                <option value="Mizoram">Mizoram</option>
			                                <option value="Nagaland">Nagaland</option>
			                                <option value="Orissa">Orissa</option>
			                                <option value="Punjab">Punjab</option>
			                                <option value="Rajasthan">Rajasthan</option>
			                                <option value="Sikkim">Sikkim</option>
			                                <option value="Tamil Nadu">Tamil Nadu</option>
			                                <option value="Telangana">Telangana</option>
			                                <option value="Tripura">Tripura</option>
			                                <option value="Uttaranchal">Uttaranchal</option>
			                                <option value="Uttar Pradesh">Uttar Pradesh</option>
			                                <option value="West Bengal">West Bengal</option>
			                                <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
			                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
			                                <option value="Chandigarh">Chandigarh</option>
			                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
			                                <option value="Daman and Diu">Daman and Diu</option>
			                                <option value="Delhi">Delhi</option>
			                                <option value="Lakshadeep">Lakshadeep</option>
			                                <option value="Pondicherry">Pondicherry</option>
			                   
			                            </select>
			            
			        </div>
			        </div>
			        <div class="col-lg-3">
			        <div class="form-group">
			            <label class="col-form-label">City</label>
			            <!-- <input class="form-control my-3" type="text" id="city" 
			            placeholder="Select City"> -->
			            <select class="form-control my-3 bg-white" id="inputDistrict" name="inputDistrict" required>
			                <option value="">-- Select District -- </option>
			            </select>
			            
			        </div>
			        </div>
			        <div class="col-lg-3">
			        <div class="form-group">
			            <label class="col-form-label">Pincode</label>
			            <input class="form-control my-3 bg-white" type="text" id="pincode" name="pincode" placeholder="Enter Your Pincode" required>
			            
			        </div>
			        </div>
			    
			    </div>

			    <div class="row px-5">
			        <div class="col">
			        <input type="checkbox" class="my-3 bg-white" id="do" name="do" value="do" onclick="copyaddress()">
			        </div>
			    </div>
			    <div class="row px-5">
			        <div class="col-lg-3">
			        <div class="form-group">
			            <label class="col-form-label">Permanent Address</label>
			            <input class="form-control my-3 bg-white" type="text" id="p_address" name="p_address" placeholder="Enter Permanent Address" required>
			            
			        </div>
			        </div>
			        
			        <div class="col-lg-3">
			        <div class="form-group">
			            <label class="col-form-label">State</label>
			            <input class="form-control my-3 bg-white" type="text" id="p_state" name="p_state" placeholder="Select State" required>
			            
			        </div>
			        </div>
			        <div class="col-lg-3">
			        <div class="form-group">
			            <label class="col-form-label">City</label>
			            <input class="form-control my-3 bg-white" type="text" id="p_city" name="p_city" placeholder="Select City" required>
			            
			        </div>
			        </div>
			        <div class="col-lg-3">
			        <div class="form-group">
			            <label class="col-form-label">Pincode</label>
			            <input class="form-control my-3 bg-white" type="text" id="p_pincode" name="p_pincode" placeholder="Enter Your Pincode" required>
			            
			        </div>
			        </div>
			    
			    </div>

    			<div class="row px-5">
					<div class="col-lg-6">
						<div class="form-group">
						<label class="col-form-label">Gender</label>
						</div>
        				<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" id="female" value="Female"checked>
							<label class="form-check-label text-muted" for="female">Female
							</label>
						</div>
        		
        				<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" id="male" value="Male">
							<label class="form-check-label text-muted" for="male">Male
							</label>
						</div>
						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" id="other" value="Other" >
							<label class="form-check-label text-muted" for="other">Other
							</label>
						</div>
        			</div>

        			<div class="col-lg-6">
        				<div class="form-group">
				            <label class="col-form-label">Date of Birth</label>
				            <input class="form-control my-3 bg-white" type="date" name="dob" 
				            placeholder="Enter Your Age" required>
            
        				</div>
        			</div>
				</div>

				<div class="row px-5">
					
					<div class="col-lg-6">
						<div class="form-group">
						<label class="col-form-label">Category</label></div>
        				<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="general" name="category" value="general"checked >
							<label class="form-check-label text-muted" for="general" >General</label>
						</div>
						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="bc1" name="category" value="bc1">
							<label class="form-check-label text-muted" for="bc1">BC-1</label>
						</div>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="bc2" name="category" value="bc2" >
							<label class="form-check-label text-muted" for="bc2">BC-2</label>
						</div>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="sc" name="category" value="sc" >
							<label class="form-check-label text-muted" for="sc">SC</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="st" name="category" value="st" >
							<label class="form-check-label text-muted" for="st">ST</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="ews" name="category" value="ews" >
							<label class="form-check-label text-muted" for="ews">EWS</label>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
						<label class="col-form-label">Qualificaton</label>
						</div>
        				<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="intermediate" name="qualification" value="intermediate" >
							<label class="form-check-label text-muted" for="intermediate">Intermediate</label>
						</div>
						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="graduate" name="qualification" value="graduate"checked>
							<label class="form-check-label text-muted" for="graduate" >Graduate</label>
						</div>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="postgraduate" name="qualification" value="postgraduate" >
							<label class="form-check-label text-muted" for="postgraduate">Post Graduate</label>
						</div>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" id="others" name="qualification" value="others" >
							<label class="form-check-label text-muted" for="others">Others</label>
						</div>
						
					</div>
					
				</div>

				<div class="row px-5">
					<div class="col-lg-6">
						<div class="form-group">
				            <label class="col-form-label">Contact Number</label>
				            <input class="form-control my-3 bg-white" type="text" name="phone" 
				            placeholder="Enter Your Contact Number" required>
            
        				</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
				            <label class="col-form-label">Email</label>
				            <input class="form-control my-3 bg-white" type="email" name="email" 
				            placeholder="Enter Your Email Id" required>
            
        				</div>
					</div>

					
				</div>

				<div class="row px-5">
					<div class="bg-info p-1 mt-5 mb-3">
	        			<h5 class="text-light">Educational Details</h5>
	        		</div>
	        		<div class="col-lg-4">
						<div class="form-group">
				            <label class="col-form-label">10th</label>
				            <input class="form-control my-3 bg-white" type="text" name="tenth" 
				            placeholder="School Name" required>
            
        				</div>
        				
					</div>
					<div class="col-lg-4">
						
        				<div class="form-group">
				            <label class="col-form-label">City</label>
				            <input class="form-control my-3 bg-white" type="text" name="city1" 
				            placeholder="City" required>
            
        				</div>
					</div>
					<div class="col-lg-4">
						
        				<div class="form-group">
				            <label class="col-form-label">Year</label>
				            <input class="form-control my-3 bg-white" type="month" name="year1"
				            placeholder="Year" required>
            
        				</div>
					</div>
	        	</div>


				<div class="row px-5">
					
	        		<div class="col-lg-4">
						<div class="form-group">
				            <label class="col-form-label">High School</label>
				            <input class="form-control my-3 bg-white" type="text" name="highschool" placeholder="High School Name" required>
            
        				</div>
        				
					</div>
					<div class="col-lg-4">
						
        				<div class="form-group">
				            <label class="col-form-label">City</label>
				            <input class="form-control my-3 bg-white" type="text" name="city2" 
				            placeholder="City" required>
            
        				</div>
					</div>
					<div class="col-lg-4">
						
        				<div class="form-group">
				            <label class="col-form-label">Year</label>
				            <input class="form-control my-3 bg-white" type="month" name="year2"
				            placeholder="Year" required>
            
        				</div>
					</div>
	        	</div>

	        	<div class="row px-5">
					
	        		<div class="col-lg-4">
						<div class="form-group">
				            <label class="col-form-label">Graduation</label>
				            <input class="form-control my-3 bg-white" type="text" name="graduation" placeholder="College Name" required>
            
        				</div>
        				
					</div>
					<div class="col-lg-4">
						
        				<div class="form-group">
				            <label class="col-form-label">City</label>
				            <input class="form-control my-3 bg-white" type="text" name="city3" 
				            placeholder="City" required>
            
        				</div>
					</div>
					<div class="col-lg-4">
						
        				<div class="form-group">
				            <label class="col-form-label">Year</label>
				            <input class="form-control my-3 bg-white" type="month" name="year3" 
				            placeholder="Year" required>
            
        				</div>
					</div>
	        	</div>

	        	<div class="row px-5">
					
	        		<div class="col-lg-4">
						<div class="form-group">
				            <label class="col-form-label">Post Graduation</label>
				            <input class="form-control my-3 bg-white" type="text" name="postgraduate" placeholder="College Name" required>
            
        				</div>
        				
					</div>
					<div class="col-lg-4">
						
        				<div class="form-group">
				            <label class="col-form-label">City</label>
				            <input class="form-control my-3 bg-white" type="text" name="city4" 
				            placeholder="City" required>
            
        				</div>
					</div>
					<div class="col-lg-4">
						
        				<div class="form-group">
				            <label class="col-form-label">Year</label>
				            <input class="form-control my-3 bg-white" type="month" name="year4" 
				            placeholder="Year" required>
            
        				</div>
					</div>
	        	</div>

	        	<div class="row px-5">
					<div class="bg-info p-1 mt-5 mb-3">
	        			<h5 class="text-light">Skill Details</h5>
	        		</div>
	        		<div class="col-lg-1">
		        		<div class="form-group">
							<label class="col-form-label">Skill 1</label>
						</div>
					</div>
	        		<div class="col-lg-7">
						
						<div class="form-group">
				           
				            <input class="form-control bg-white" type="text" name="skillname1" 
				            placeholder="Skill Name" required>
            
        				</div>
        			</div>
        			<div class="col-lg-4 pt-2 d-flex justify-content-between">
        				<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="skill1" id="low_skill1" value="Low">
							<label class="form-check-label text-muted" for="low_skill1">Low
							</label>
						</div>
        		
        				<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="skill1" id="medium_skill1" value="Medium" checked >
							<label class="form-check-label text-muted" for="medium_skill1">Medium
							</label>
						</div>
						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="skill1" id="high_skill1" value="High" >
							<label class="form-check-label text-muted" for="high_skill1">High
							</label>
						</div>
        			</div>
	        	</div>

	        	<div class="row px-5">
					<div class="col-lg-1">
		        		<div class="form-group">
							<label class="col-form-label">Skill 2</label>
						</div>
					</div>
	        		<div class="col-lg-7">
						
						<div class="form-group">
				           
				            <input class="form-control bg-white" type="text" name="skillname2" 
				            placeholder="Skill Name" required>
            
        				</div>
        			</div>
        			<div class="col-lg-4 pt-2 d-flex justify-content-between">
        				<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="skill2" id="low_skill2" value="Low">
							<label class="form-check-label text-muted" for="low_skill2">Low
							</label>
						</div>
        		
        				<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="skill2" id="medium_skill2" value="Medium" checked>
							<label class="form-check-label text-muted" for="medium_skill2">Medium
							</label>
						</div>
						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="skill2" id="high_skill2" value="High">
							<label class="form-check-label text-muted" for="high_skill2">High
							</label>
						</div>
        			</div>
	        	</div>

	        	<div class="row px-5">
					
	        		<div class="col-lg-1">
		        		<div class="form-group">
							<label class="col-form-label">Skill 3</label>
						</div>
					</div>
	        		<div class="col-lg-7">
						
						<div class="form-group">
				           
				            <input class="form-control bg-white" type="text" name="skillname3" 
				            placeholder="Skill Name" required>
            
        				</div>
        			</div>
        			<div class="col-lg-4 pt-2 d-flex justify-content-between">
        				<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="skill3" id="low_skill3" value="Low">
							<label class="form-check-label text-muted" for="low_skill3">Low
							</label>
						</div>
        		
        				<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="skill3" id="medium_skill3" value="Medium" checked >
							<label class="form-check-label text-muted" for="medium_skill3">Medium
							</label>
						</div>
						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="skill3" id="high_skill3" value="High">
							<label class="form-check-label text-muted" for="high_skill3">High
							</label>
						</div>
        			</div>
	        	</div>

	        	<div class="row px-5">
					
	        		<div class="col-lg-2">
		        		<div class="form-group">
							<label class="col-form-label">Additional Details</label>
						</div>
					</div>
	        		<div class="col-lg-10">
						
						<div class="form-group">
				           
				            <input class="form-control bg-white" type="text" name="additional" 
				            placeholder="Mention here" required>
            
        				</div>
        			</div>
        		</div>

				<div class="px-5 pb-5 pt-3"> 
        			<button class="btn btn-primary" type="submit">Submit</button>
    			</div>
			</form>
		</div>
		</div>
	</div>
	<!-- End features -->


	<?php include 'include/footer.php' ?>

<script>
    function copyaddress() {
        let a=document.getElementById('address').value;
        let b=document.getElementById('inputState').value;
        let c=document.getElementById('inputDistrict').value;
        let d=document.getElementById('pincode').value;
        document.getElementById('p_address').value=a;
        document.getElementById('p_state').value=b;
        document.getElementById('p_city').value=c;
        document.getElementById('p_pincode').value=d;
}
</script>
<script>
    // $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                document.querySelector('.profile-pic').setAttribute('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    document.querySelector('.file-upload').addEventListener('change',function(){
        readURL(this);
    });
    document.querySelector('.file-upload').addEventListener('click',function(){
        document.querySelector('.file-upload').click();
    });
// });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>