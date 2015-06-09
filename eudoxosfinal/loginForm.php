<script>
function submitLogin() {
	if (document.getElementById("usernameLog").value == "" || document.getElementById("passwordLog").value == "")
		return false;
 	else
 		document.getElementById("login").submit();
}
</script>

<div class="wrapper col0">
	<div id="topline">
		<?php 
		if(!isset($_SESSION))
			session_start();
		if(!isset($_SESSION["loginerror"])) {?>
		<div id="slidepanel" style="display: none">
			<?php } else {?>
			<div id="slidepanel">
				<?php }
				unset($_SESSION["loginerror"]);
				?>
				<div class="topbox">
					<h2>Δεν Έχετε Λογαριασμό?</h2>
					<p>Εάν έχετε πραγματοποιήσει ήδη την εγγραφή σας στο Εύδοξος,
						συμπληρώστε την φόρμα σύνδεσης προκειμένω να έχετε πρόσβαση σε
						επιπλέον εφαρμογές. Εάν ωστόσο είστε νέο μέλος και επιθυμείτε να
						εγγραφείτε πατήστε τον σύνδεσμο που ακολουθεί.</p>
					<p class="readmore">
						<label for="modal-2">Δημιουργία Λογαριασμού &raquo;</label>
					</p>
				</div>
				<div class="topbox">
					<h2>Σύνδεση Εδώ</h2>
					<form action="login.php" method="post" id="login">
						<fieldset>
							<legend>Teachers Login Form</legend>
							<label for="usernamee">Username: <input type="text"
								name="usernameLog" id="usernameLog" value="" />
							</label> <label for="passwordd">Password: <input type="password"
								name="passwordLog" id="passwordLog" value="" />
							</label>
							<p>
								<label for="teacherremember"> <input class="checkbox"
									type="checkbox" name="teacherremember" id="teacherremember"
									checked="checked" /> Remember me <a class="readmore2" href="#">forgot
										your password?</a>
								</label>

							</p>
							<p>
								<input type="button" name="teacherlogin" id="teacherlogin"
									value="Login" onclick="submitLogin();" /> &nbsp; <input
									type="reset" name="teacherreset" id="teacherreset"
									value="Reset" />
							</p>
						</fieldset>
					</form>
				</div>

				<br class="clear" />
			</div>
			<div id="loginpanel">
				<ul>
					<li class="left">Log In Here &raquo;</li>
					<li class="right" id="toggle"><a id="slideit" href="#slidepanel">Administration</a><a
						id="closeit" style="display: none;" href="#slidepanel">Close Panel</a>
					</li>
				</ul>
			</div>
			<br class="clear" />
		</div>
	</div>