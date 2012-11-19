
<div>

	<img name="prof_pic" width="100px"/>

</div>

<div>
	<fieldset style="width:50%">
		<h3>Basic Information</h3>

		<table>
			<tr>
				<td>Title</td>
				<td><select name="title">
						<option>Mr.</option>
						<option>Mrs.</option>
						<option>Miss</option>
				</select></td>
			</tr>
			<tr>
				<td>First Name</td>
				<td><input type="text" name="f_name"/></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="l_name"/></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td>
					<select name="dt">
						<option>Date</option>
						<option>01</option>
						<option>02</option>
						<option>03</option>
						<option>04</option>
						<option>05</option>
						<option>06</option>
						<option>07</option>
					</select>
					<select name="mnth">
						<option>Month</option>
						<option>01</option>
						<option>02</option>
						<option>03</option>
						<option>04</option>
						<option>05</option>
						<option>06</option>
						<option>07</option>
					</select>
					<select name="yr">
						<option>Year</option>
						<option>2001</option>
						<option>2002</option>
						<option>2003</option>
						<option>2004</option>
						<option>2005</option>
						<option>2006</option>
						<option>2007</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="male"/>Male
					<input type="radio" name="gender" value="female"/>Female
				</td>
			</tr>
			<tr>
				<td>Civil Status</td>
				<td><input type="radio" name="status" value="single"/>Single
					<input type="radio" name="status" value="married"/>Married
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="add1"/>
					<input type="text" name="add2"/>
					<input type="text" name="add3"/>
				</td>
			</tr>
			<tr>
				<td>District</td>
				<td><select name="district">
						<option>Select District</option>
						<option>Colombo</option>
						<option>Gampaha</option>
						<option>Negombo</option>
					</select></td>
			</tr>
			<tr>
				<td>Country</td>
				<td><select name="country">
						<option>Select Country</option>
						<option>Sri Lanka</option>
					</select></td>
			</tr>
			<tr>
				<td>Nationality</td>
				<td><select name="nationality">
						<option>Select Nationality</option>
						<option>Sinhalese</option>
					</select></td>
			</tr>
			<tr>
				<td>NIC No</td>
				<td><input type="text" name="nic"/></td>
			</tr>
			<tr>
				<td>Telephone Number</td>
				<td><p>Mobile<input type="text" name="mobile"/>
					Home<input type="text" name="home"/></p>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><a href="#">Edit</a><button>Save</button><button>Cancel</button></td>
			</tr>
				
		</table>
	</fieldset>

</div>

<div>
	<fieldset style="width:50%">
		<h3>Educational Qualifications</h3>
		<h4>Ordinary Level</h4>

		<table>
			<tr>
					<td>School</td>
					<td><input type="text" name="o_school"/></td>
			</tr>	
			<tr>
				<td>Index No</td>
				<td><input type="text" name="o_index"/></td>
			</tr>
			<tr>
				<td>Year</td>
				<td><select name="o_yr">
						<option>Select year</option>
						<option>2001</option>
						<option>2002</option>
						<option>2003</option>
						<option>2004</option>
						<option>2005</option>
						<option>2006</option>
						<option>2007</option>
				</select></td>
			</tr>
			<tr>
				<td>Medium</td>
				<td><select name="o_medium">
						<option>Select Medium</option>
						<option>Sinhala</option>
						<option>English</option>
						<option>Tamil</option>
					</select>
					<input type="button" name="remarks" value="Remarks"/>
				</td>
			</tr>
		</table>
		<div>
			<fieldset>
				<legend>Results</legend>
					<table>
						<tr>
							<td>Subject</td>
							<td><select name="o_subject">
									<option>Select Subject</option>
									<option>Sinhala</option>
									<option>English</option>
									<option>Maths</option>
									<option>Science</option>
									<option>Religion</option>
									<option>Social Studies</option>
								</select></td>
							<td>Grade</td>	
							<td><select name="o_grade">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
							 	</select></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="button" name="add" value="+" style="width:30px"/></td>
							<td><input type="button" name="delete" value="-" style="width:30px"/></td>
						</tr>

					</table>
			</fieldset>	
				<a href="#">Edit</a><button>Save</button><button>Cancel</button>
		
		</div>

		<hr/>

		<h4>Advanced Level</h4>
			<table border="0">
				<tr>
					<td>School</td>
					<td><input type="text" name="a_school"/></td>
				</tr>	
				<tr>
					<td>Index No</td>
					<td><input type="text" name="a_index"/></td>
				</tr>
				<tr>
					<td>Year</td>
					<td><select name="a_year">
							<option>Select year</option>
							<option>2001</option>
							<option>2002</option>
							<option>2003</option>
							<option>2004</option>
							<option>2005</option>
							<option>2006</option>
							<option>2007</option>
						</select></td>
				</tr>
				<tr>
					<td>Medium</td>
					<td><select name="a_medium">
							<option>Select Medium</option>
							<option>Sinhala</option>
							<option>English</option>
							<option>Tamil</option>
						</select>
						<input type="button" name="remarks" value="Remarks"/>
					</td>
				</tr>
				<tr>
					<td>Stream</td>
					<td><select name="a_stream">
							<option>Select Stream</option>
							<option>Science</option>
							<option>Commerce</option>
							<option>Art</option>
						</select>
					</td>
				</tr>
			</table>
			<div>
				<fieldset>
				<legend>Results</legend>
					<table>
						<tr>
							<td>Subject</td>
							<td><select name= "a_subject">
									<option>Select Subject</option>
									<option>Sinhala</option>
									<option>English</option>
									<option>Maths</option>
									<option>Science</option>
								</select></td>
							<td>Grade</td>	
							<td><select name="a_grade">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
							 	</select></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="button" name="add" value="+" style="width:30px"/></td>
							<td><input type="button" name="delete" value="-" style="width:30px"/></td>
						</tr>

					</table>

				</fieldset>

					<a href="#">Edit</a><button>Save</button><button>Cancel</button>

	</fieldset>

</div>

<div>
	<fieldset style="width:50%">
		<h4>Higher Education</h4>

		<table border="0">

				<tr>
					<td>University / Institute </td>
					<td><input type="text" name="uni"/></td>
				</tr>	
				<tr>
					<td>Level</td>
					<td><select name="level">
							<option>Select Level</option>
							<option>Degree</option>
							<option>Diploma</option>
					</select></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><textarea cols="20" rows="3" name="description"></textarea></td>
				</tr>
				<tr>
					<td>Year</td>
					<td><select name="yr">
							<option>Select year</option>
							<option>2001</option>
							<option>2002</option>
							<option>2003</option>
							<option>2004</option>
							<option>2005</option>
							<option>2006</option>
							<option>2007</option>
						</select>
						<input type="button" name="remarks" value="Remarks"/>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="button" name="add" value="+" style="width:30px"/></td>
					<td><input type="button" name="delete" value="-" style="width:30px"/></td>
				</tr>
				<tr>
					<td><a href="#">Edit</a><button>Save</button><button>Cancel</button></td>
				</tr>
			</table>

	</fieldset>

</div>

<div>
	<fieldset style="width:50%">
		<h4>Sports</h4>
		<table border="0">

				<tr>
					<td>Sport</td>
					<td><select name="sport">
							<option>Select Sport</option>
							<option>Rugger</option>
							<option>Cricket</option>
							<option>Carrom</option>
						</select></td>
				</tr>	
				<tr>
					<td>Description</td>
					<td><textarea name="description" cols="20"rows="3"></textarea></td>
				</tr>
				<tr>
					<td>Achievment</td>
					<td><textarea name="achivement" cols="20"rows="3"></textarea>
					</td>
				</tr>
				<tr>
					<td>Year</td>
					<td><select name="year">
							<option>Select Year</option>
							<option>2001</option>
							<option>2002</option>
							<option>2003</option>
							<option>2004</option>
							<option>2005</option>
							<option>2006</option>
							<option>2007</option>
						</select></td>
				</tr>	
				<tr>
					<td></td>
					<td><input type="button" name="remark" value="Remarks"/></td>
					<td><input type="button" name="add" value="+" style="width:30px"/></td>
					<td><input type="button" name="delete" value="-" style="width:30px"/></td>
			</tr>
			<tr>
					<td><a href="#">Edit</a><button>Save</button><button>Cancel</button></td>
				</tr>
			</table>
	</fieldset>
</div>

<div>
	<fieldset style="width:50%">
		<h4>Referee</h4>

			<p>Email Address <input type="text" name="email"/></p>

			<button>Request Acknowledgement</button>

			<hr>
			<a href="#">Edit</a><button>Save</button><button>Cancel</button>

	</fieldset>

</div>
