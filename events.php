<?php
	session_start();
	if(!isset($_SESSION['user']))
		header("location: logout.php");
?>

<html>
	<head>
		<title>ACM | Home</title>
		<?php include "css/acm.php"; ?>
		
		<!-- CUSTOM PAGE STYLES -->
		<style>
			.card {
				width: 95% !important;
				margin: 0 auto !important;
			}
			.tabs-container {
				padding: 0 !important;
				margin-bottom: 20px;
			}
			.custom-select {
				width: 30%;
				margin-top: 50px;
				margin-right: 10px;
				display: inline-block;
			}
			.modal-content {
				padding-bottom: 0 !important;
			}
			.new-proposal-content {
				margin: 20px 0 0 0;
			}
		</style>
	</head>
	<body class="container iframe-container">
		
		<div class="row">
			<button class="btn acm-btn modal-trigger" href="#new-proposal">😎 New Proposal</button>
		</div>

		<div class="row" style="background-color: #fff">
			<div class="tabs-container col s12">
			<ul class="tabs">
				<li class="tab col s3"><a class="active" href="#proposal">📝 Proposal</a></li>
				<li class="tab col s3"><a href="#requirements">📋 Requirements Needed</a></li>
				<li class="tab col s3"><a href="#approved">✅ Approved</a></li>
				<li class="tab col s3"><a href="#archieved">📦 Archieved</a></li>
			</ul>
			</div>
			
			<!--
			===========================================
				PROPOSALS
			===========================================
			-->
			<div id="proposal" class="col s12" >

				<div class="row">
					<div class="col s12 m12">
						<div class="card">
							<div class="card-content">
								<span class="card-title">Card Title</span>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>
								<div class="input-field custom-select">
									<select>
									<option value="" disabled selected>Choose your option</option>
									<option value="1">📋 Requirements Needed</option>
									<option value="2">✅ Approved</option>
									<option value="3">📦 Archieved</option>
									</select>
									<label>Move to</label>
								</div>
								<a class="btn waves-effect waves-light acm-btn">👍 apply</a>
							</div>
						</div>
					</div>
				</div>

			</div>


			<!--
			===========================================
				REQUIREMENTS NEEDED
			===========================================
			-->
			<div id="requirements" class="col s12">
			
				<div class="row">
					<div class="col s12 m12">
						<div class="card">
							<div class="card-content">
								<span class="card-title">Card Title</span>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>
								<div class="input-field custom-select">
									<select>
									<option value="" disabled selected>Choose your option</option>
									<option value="1">📝 Proposal</option>
									<option value="2">✅ Approved</option>
									<option value="3">📦 Archieved</option>
									</select>
									<label>Move to</label>
								</div>
								<a class="btn waves-effect waves-light acm-btn">👍 apply</a>
							</div>
						</div>
					</div>
				</div>

			</div>


			<!--
			===========================================
				APPROVED
			===========================================
			-->
			<div id="approved" class="col s12">
			
				<div class="row">
					<div class="col s12 m12">
						<div class="card">
							<div class="card-content">
								<span class="card-title">Card Title</span>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>
								<div class="input-field custom-select">
									<select>
									<option value="" disabled selected>Choose your option</option>
									<option value="1">📝 Proposal</option>
									<option value="2">📋 Requirements Needed</option>
									<option value="3">📦 Archieved</option>
									</select>
									<label>Move to</label>
								</div>
								<a class="btn waves-effect waves-light acm-btn">👍 apply</a>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!--
			===========================================
				ARCHIEVED
			===========================================
			-->
			<div id="archieved" class="col s12">
			
				<div class="row">
					<div class="col s12 m12">
						<div class="card">
							<div class="card-content">
								<span class="card-title">Card Title</span>
								<p>I am a very simple card. I am good at containing small bits of information.
								I am convenient because I require little markup to use effectively.</p>
							</div>
						</div>
					</div>
				</div>

			</div>


			<!--
			===========================================
				NEW PROPOSAL MODAL
			===========================================
			-->
			<div id="new-proposal" class="modal">
				<div class="modal-content">
					<h4>😎 Create New Proposal</h4>
					<div class="new-proposal-content">
						<div class="row">
							<form class="col s12">
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="Enter event title" id="ne-event-title" type="text" class="validate">
										<label for="first_name">Event title</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea placeholder="Enter event description" id="ne-event-description" type="text" class="materialize-textarea"></textarea>
										<label for="event-description">Event Description</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="ne-date"type="text" class="datepicker">
										<label for="ne-date">Event date</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="Enter event venue" id="ne-event-venue" type="text" class="validate">
										<label for="event-venue">Venue</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input placeholder="Enter Google Drive link" id="ne-event-gdrive" type="text" class="validate">
										<label for="event-grive">Google Drive Documents</label>
										<small class="helper">This is optional. You can add google drive link later</small>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#!" class="modal-close waves-effect waves-green btn acm-btn">👌 Confirm</a>
				</div>
			</div>

		</div>
		<script>

			var isLoading = true;

			function init() {
				$('.tabs').tabs();
				$('select').formSelect();
				$('.modal').modal();
				$('.datepicker').datepicker();
			}

			$(document).ready(function() {
				init();
			});


			/**
			|--------------------------------------------------
			| 😎New proposal
			|--------------------------------------------------
			*/

		</script>
	</body>
</html>