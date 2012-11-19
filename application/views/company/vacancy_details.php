
<div>
	<h2>About the Vacancy</h2>

	Designation <input type="text" name="designation"/>
	<button>Job Description</button>

</div>
<div>
	<h2>Qualifications</h2>

	<table>
		<tr>
			<td>Gender </td>
			<td><input type="radio" name="gender" value="male"/>Male</td>
			<td><input type="radio" name="gender" value="female"/>Female</td>
			<td><input type="radio" name="gender" value="both"/>Both</td>
		</tr>
		<tr>
			<td>Age Group</td>
			<td>From </td>
			<td><select>
					<option>Select Age</option>
					<option>20</option>
				</select></td>
			<td>To </td>
			<td><select>
					<option>Select Age</option>
					<option>30</option>
				</select></td>
		</tr>
		<tr>
			<td>Location</td>
			<td><select>
					<option>Select Location</option>
					<option>Colombo</option>
				</select></td>
		</tr>
		<tr>
			<td>Minimal Qualification</td>
			<td><select>
					<option>Select </option>
					<option>OL</option>
					<option>AL</option>
					<option>Degree</option>
				</select></td>
		</tr>
	</table>

	<fieldset>
		<legend>Educational Qualifications</legend>

		<table>
			<tr>
				<td>Exam </td>
				<td><select>
					<option>OL</option>
					<option>AL</option>
					<option>Degree</option>
				</select></td>
				<td><button>Add more</button></td>
			</tr>
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
							 <td><button>+</button></td>
							 <td><button>-</button></td>
						</tr>
		</table>
	</fieldset>

	<fieldset>
		<legend>Extra Curricular Activities</legend>

		<table>
			<tr>
				<td>Activity</td>
				<td><select>
					<option>Sports</option>
					<option>Leadership</option>
					<option>Memebership</option>
				</select></td>
				<td><button>Add more</button></td>
			</tr>
			<tr>
							<td>Other</td>
							<td><input type="text" name="other"/></td>
							<td><button>+</button></td>
							<td><button>-</button></td>
						</tr>
		</table>
	</fieldset>

	<button>Submit</button>
	<button>Cancel</button>
</div>